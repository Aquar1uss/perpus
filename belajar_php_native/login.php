<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login AquaLibrary</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            transition: background-color 1s; /* Smooth transition */
        }
        .login-container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 90%; /* Responsive width */
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .login-container:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        h3 {
            margin-bottom: 30px;
            color: #6a11cb;
            text-align: center; /* Center title */
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-success {
            background-color: #2575fc;
            border-color: #2575fc;
            border-radius: 10px;
        }
        .btn-success:hover {
            background-color: #1e5bb8;
            border-color: #1e5bb8;
        }
        @media (max-width: 576px) {
            .login-container {
                padding: 20px; /* Less padding on smaller screens */
            }
            h3 {
                font-size: 1.5rem; /* Smaller font size for the title */
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <form action="proses_login.php" method="post">
            <h3 class="text-center">Login AquaLibrary</h3>
            <div class="mb-4">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="text-center">
                <input type="submit" name="login" class="btn btn-success" value="LOGIN">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-y9dT9aKfS74t5/T1Qc+9b91vl8uEn4+l+0FSZ8c6yFgn6XOn7iS2UNOBMkwD8dE" crossorigin="anonymous"></script>
    <script>
        const colors = ['#6a11cb', '#2575fc', '#ff7e5f', '#feb47b', '#00c6ff', '#0072ff'];
        let currentIndex = 0;

        function changeBackgroundColor() {
            document.body.style.backgroundColor = colors[currentIndex];
            currentIndex = (currentIndex + 1) % colors.length;
        }

        setInterval(changeBackgroundColor, 3000); // Change color every 3 seconds
    </script>
</body>

</html>
