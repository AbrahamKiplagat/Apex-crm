<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apex CRM - Empowering Your Business</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa; /* Light Gray Background */
            color: #343a40; /* Dark Gray Font Color */
        }

        .navbar {
            background-color: #28a745; /* Green Navbar */
        }

        .card {
            background-color: #007bff; /* Blue Card Background */
            color: #ffffff; /* White Font Color */
        }

        .card-title {
            color: #ffffff; /* White Font Color for Card Titles */
        }
    </style>
</head>
<body class="antialiased">

    <div class="container-fluid mt-6">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1 class="navbar-brand text-white">Apex CRM</h1>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex space-x-4">
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link text-white">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('organizations') }}" class="nav-link ml-4 text-white">
                            Organizations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link ml-4 text-white">
                            Posts
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Rest of your content... -->
    </div>


    <div class="container-fluid mt-4">
        <h2>Welcome to Apex CRM - Where Efficiency Meets Growth</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Colorful Cards -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Effortless Contact Management</h5>
                        <p class="card-text">Seamlessly organize and manage your contacts for better communication.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Intuitive Task Management</h5>
                        <p class="card-text">Stay on top of your tasks with our user-friendly task management system.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Collaborate with Organizations</h5>
                        <p class="card-text">Foster collaboration within your organization for greater efficiency.</p>
                    </div>
                </div>
            </div>
        </div>

        <p class="mt-4">
            Join Apex CRM today and experience the difference in how you manage and grow your business.
        </p>
    </div>


</body>
</html>
