<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Perpus - Dashboard</title>
    <style>
        body {
            background-color: #f0f2f5; /* Slightly darker background for contrast */
        }
        nav {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .container {
            margin-top: 20px;
            padding: 30px;
            background-color: #ffffff; /* White background for content area */
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #007bff; /* Change color on hover */
        }
        h1 {
            color: #6a11cb; /* Title color */
            margin-bottom: 20px;
        }
        p {
            color: #555; /* Subtitle color */
        }
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .container {
                padding: 20px; /* Less padding on small screens */
            }
            h1 {
                font-size: 1.5rem; /* Smaller font size for smaller screens */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Align items to the right -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buku.php">Pinjam Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="histori_peminjaman.php">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome to AquaLibrary!</h1>
        <p>Your go-to place for borrowing books and managing transactions. Explore our collection and enjoy reading!</p>
        <!-- Additional content can go here -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Featured Book</h5>
                        <p class="card-text">Check out the latest additions to our collection.</p>
                        <a href="buku.php" class="btn btn-primary">View Books</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Transactions</h5>
                        <p class="card-text">View your borrowing history and manage transactions.</p>
                        <a href="histori_peminjaman.php" class="btn btn-primary">View History</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Logout</h5>
                        <p class="card-text">Logout from your account securely.</p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-abcxyz" crossorigin="anonymous"></script>
</body>

</html>
