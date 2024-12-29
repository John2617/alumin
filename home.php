<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Alumni Management System</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* General styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.8);
        }

        .header {
            text-align: center;
            padding: 100px 20px 50px;
            /* Ensure space below the navbar */
            background: rgba(0, 0, 0, 0.7);
            color: white;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 3.5rem;
            margin: 0;
        }

        .header p {
            font-size: 1.3rem;
            margin-top: 10px;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.5rem;
        }

        .btn-custom {
            background: #ff4b2b;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            transition: background 0.3s ease;
        }

        .btn-custom:hover {
            background: #ff6e40;
        }

        /* Background animation */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(-45deg, #6a11cb, #2575fc, #ff4b2b, #ff6e40);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Loading Screen */
        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            z-index: 1100;
        }

        #loading.hidden {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- Loading Screen -->
    <div id="loading">Loading...</div>

    <!-- Animated background -->
    <div class="animated-bg"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Alumni System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="alumni_list.php">Alumni</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    <div class="header">
        <h1>Welcome to the Alumni Management System</h1>
        <p>Connecting Alumni Across the Globe</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center text-white">
                    <div class="card-body">
                        <h5 class="card-title">Alumni List</h5>
                        <p class="card-text">View and connect with our alumni network.</p>
                        <a href="alumni_list.php" class="btn btn-custom">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center text-white">
                    <div class="card-body">
                        <h5 class="card-title">Gallery</h5>
                        <p class="card-text">Explore memorable moments captured.</p>
                        <a href="gallery.php" class="btn btn-custom">View Gallery</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center text-white">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Stay updated with upcoming alumni events.</p>
                        <a href="events.php" class="btn btn-custom">Check Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4" style="margin-top: 20px; background: rgba(0, 0, 0, 0.7);">
        <p>&copy; <?php echo date("Y"); ?> Alumni Management System. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap and JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        // Hide the loading screen once the page is fully loaded
        document.addEventListener('DOMContentLoaded', function () {
            const loadingScreen = document.getElementById('loading');
            loadingScreen.classList.add('hidden');
        });
    </script>
</body>

</html>