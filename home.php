<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylehome.css">
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
        }

        .table th {
            background-color: #BCA37F;
            color: #fff;
        }

        .navbar {
            background-color: #f8f9fa;
            color: #333;
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
        }

        .navbar-brand {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">XI PPLG A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">HI!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Student data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iuran.php">Payment</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
        <li class="nav-item">
		<a href="login.php" class="btn btn-outline-primary mr-3">Login Admin</a>
        </li>
      <ul class="
        </div>
</div>

    </nav>
    <div class="container">
        <div class="welcome-text">
            <center><h2 style="color: white; margin-top: 50px; font-weight: bold; font-size: 3em;">WELCOME WEEKLY ACTIVITY FEES XI PPLG A</h2></center>
            <!-- Isi teks selamat datang di sini -->
        </div>
        <div class="image-container">
            <img src="gambar.jpg" alt="Foto Welcome">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
