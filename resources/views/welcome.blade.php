<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        .hero-section {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-top: 20px;
        }
        .cta-buttons {
            margin-top: 30px;
        }
        .cta-buttons .btn {
            margin: 10px;
            padding: 10px 30px;
            font-size: 1.1rem;
        }
        .features-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        .feature-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 30px;
        }
        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .feature-card p {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>
<body>
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>Welcome to Custom CRM</h1>
        <p>Manage your contacts, leads, and tasks efficiently with our powerful CRM tool.</p>
        <div class="cta-buttons">
            <a href="{{ route('login') }}" class="btn btn-light btn-lg">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Contact Management</h3>
                    <p>Easily manage all your contacts in one place.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Lead Tracking</h3>
                    <p>Track and convert leads into customers effortlessly.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Task Organization</h3>
                    <p>Stay organized with task management tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
