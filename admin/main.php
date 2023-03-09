<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Link Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Link Eksternal -->
    <link rel="stylesheet" href="../css/admin.css">

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar bg-body-tertiary bg-dark navbar-dark">
        <div class="container-fluid">
            <span class="navbar-brand" href="#">Halaman Admin</span>
            <button type="button" class="btn btn-danger" value="logout.php"><a href="../index.php" style="text-decoration:none; color:white">Logout</a></button>
        </div>
    </nav>

    <div class="content">
        <div class="ver-navbar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="main.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Data Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="barber.php">Data Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Data User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="treatment.php">Data Treatment</a>
                </li>
            </ul>
        </div>

        <div class="title">
            <div class="welcome">
                <h1>Selamat Datang!</h1>
                <h2>Anda sedang berada dalam halaman admin.</h2>
                <h3>Pastikan dan pantau semua data sesuai dengan pekerjaan masing-masing</h3>
                <h3>Sealamat bekerja dan Semangat!</h3>
            </div>
        </div>
    </div>

</body>
</html>