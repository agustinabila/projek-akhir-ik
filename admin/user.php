<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><span>Iron </span>Style</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="main.php" class="nav-item nav-link active">Dashboard</a>
                        <a href = "booking.php" class="nav-item nav-link">Data Booking</a>
                        <a href="barber.php" class="nav-item nav-link">Data Karyawan</a>
                        <a href="user.php" class="nav-item nav-link">Data User</a>
                        <a href="treatment.php" class="nav-item nav-link">Data Treatment</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

    <!-- Record Data Start -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Data User</h2>
                        <!-- <a href="create.php" class="btn btn-success pull-right">Tambah Baru</a> -->
                    </div>
                    <?php
                    // Include config file
                    require_once "../php/connect.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM data_user";
                    if($result = mysqli_query($connect, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID User</th>";
                                        echo "<th>Username</th>";
                                        echo "<th>Nama</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Password</th>";
                                        echo "<th>Level</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id_user'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['nama_user'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['level'] . "</td>";
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
</body>
</html>