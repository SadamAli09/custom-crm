<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all leads with their assigned user
        $leads = Lead::with('user')->get();
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all users to assign the lead
        $users = User::all();
        return view('leads.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'phone' => 'nullable|string',
            'status' => 'required|in:New,Contacted,Qualified,Lost',
            'assigned_to' => 'required|exists:users,id',
        ]);

        // Create the lead
        Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'assigned_to' => $request->assigned_to,
        ]);

        // Redirect with success message
        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        // Fetch all users to assign the lead
        $users = User::all();
        return view('leads.edit', compact('lead', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email,' . $lead->id,
            'phone' => 'nullable|string',
            'status' => 'required|in:New,Contacted,Qualified,Lost',
            'assigned_to' => 'required|exists:users,id',
        ]);

        // Update the lead
        $lead->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'assigned_to' => $request->assigned_to,
        ]);

        // Redirect with success message
        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        // Delete the lead
        $lead->delete();

        // Redirect with success message
        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}
