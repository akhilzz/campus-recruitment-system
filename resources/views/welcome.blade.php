
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Campus Hiring</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
        .jumbotron {
            background-image: url('your-background-image.jpg');
            background-size: cover;
            color: #ffff;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Virtual Campus Hiring</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <style>
        /* Custom CSS for pastel shades */
        .display-4 {
            color: #7d70ba;
                      
        }
    
        .lead {
            color: #7d70ba; 
        }
    </style>
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Virtual Campus Hiring</h1>
        <p class="lead">Connecting students and employers seamlessly.</p>
        <hr class="my-4">
        <p class="lead" >Explore opportunities, apply for jobs, and kickstart your career!</p>
        <a class="btn btn-primary btn-lg" href="{{ url('signup') }}" role="button">Get Started</a>
    </div>

    <!-- Main Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Find Jobs</h2>
                <p>Discover a wide range of job opportunities from top companies.</p>
                <a class="btn btn-secondary" href="#" role="button">Browse Jobs</a>
            </div>
            <div class="col-md-4">
                <h2>For Employers</h2>
                <p>Post your job openings and reach out to talented students.</p>
                <a class="btn btn-secondary" href="#" role="button">Post a Job</a>
            </div>
            <div class="col-md-4">
                <h2>Career Advice</h2>
                <p>Get valuable tips and advice to succeed in your career.</p>
                <a class="btn btn-secondary" href="#" role="button">Explore Advice</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-4">
        <p>&copy; 2024 Virtual Campus Hiring. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

