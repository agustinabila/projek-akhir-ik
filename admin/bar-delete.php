<?php
// Process delete operation after confirmation
if(isset($_POST["id_pencukur"]) && !empty($_POST["id_pencukur"])){
    // Include connect file
    require_once "../php/connect.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM data_pencukur WHERE id_pencukur = ?";
    
    if($stmt = mysqli_prepare($connect, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id_pencukur);
        
        // Set parameters
        $param_id_pencukur = trim($_POST["id_pencukur"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: barber.php");
            exit();
        } else{
            echo "Oops! Ada yang salah. Silahkan coba lagi.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connect);
} else{
    // Check existence of id_pencukur parameter
    if(empty(trim($_GET["id_pencukur"]))){
        // URL doesn't contain id_pencukur parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Hapus Karyawan</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="id_pencukur" value="<?php echo trim($_GET["id_pencukur"]); ?>"/>
                            <p>Yakin ingin menghapus??</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="barber.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>