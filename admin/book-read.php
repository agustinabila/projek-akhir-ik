<?php
// Check existence of id parameter before processing further
if(isset($_GET["id_booking"]) && !empty(trim($_GET["id_booking"]))){
    // Include connect file
    require_once "../php/connect.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM data_booking WHERE id_booking = ?";
    
    if($stmt = mysqli_prepare($connect, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id_booking);
        
        // Set parameters
        $param_id_booking = trim($_GET["id_booking"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id_booking = $row["id_booking"];
                $nama_booking = $row["nama_booking"];
                $tanggal = $row["tanggal"];
                $id_treatment = $row["id_treatment"];
                $id_treatment2 = $row["id_treatment2"];
                $id_pencukur = $row["id_pencukur"];
            } else{
                // URL doesn't contain valid id_booking parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connect);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Booking View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Data Booking</h1>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>ID Booking</label>
                        <p class="form-control-static"><?php echo $row["id_booking"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <p class="form-control-static"><?php echo $row["nama_booking"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <p class="form-control-static"><?php echo $row["tanggal"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>ID Treatment 1</label>
                        <p class="form-control-static"><?php echo $row["id_treatment"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>ID Treatment 2</label>
                        <p class="form-control-static"><?php echo $row["id_treatment2"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>ID Barber</label>
                        <p class="form-control-static"><?php echo $row["id_pencukur"]; ?></p>
                    </div>
                    <p><a href="booking.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>