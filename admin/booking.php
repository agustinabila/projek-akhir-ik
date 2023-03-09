<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking</title>

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
            <!-- Record Data Start -->
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header clearfix">
                                <h2 class="pull-left">Data Booking Pelanggan</h2>
                            <?php
                            // Include config file
                            require_once "../php/connect.php";

                            // Attempt select query execution
                            $sql = "SELECT * FROM data_booking";
                            if($result = mysqli_query($connect, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table class='table table-bordered table-striped'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>ID Booking</th>";
                                                echo "<th>Nama</th>";
                                                echo "<th>Tanggal</th>";
                                                echo "<th>ID Treatment 1</th>";
                                                echo "<th>ID Treatment 2</th>";
                                                echo "<th>ID Barber</th>";
                                            echo "</tr>";
                                        echo "</thead>";
                                        echo "<tbody>";
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                                echo "<td>" . $row['id_booking'] . "</td>";
                                                echo "<td>" . $row['nama_booking'] . "</td>";
                                                echo "<td>" . $row['tanggal'] . "</td>";
                                                echo "<td>" . $row['id_treatment'] . "</td>";
                                                echo "<td>" . $row['id_treatment'] . "</td>";
                                                echo "<td>" . $row['id_pencukur'] . "</td>";
                                                echo "<td>";
                                                    echo "<a href='book-read.php?id_booking=". $row['id_booking'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                        echo "</tbody>";
                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                } else {
                                    echo "ERROR: Tidak dapat terhubung ddengan SQL. ", mysqli_error($connect); 
                                }

                            // Close connection
                            mysqli_close($connect);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Record Data End -->
        </div>
    </div>

</body>
</html>