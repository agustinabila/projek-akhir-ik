<?php
// Include connect file
require_once "../php/connect.php";
 
// Define variables and initialize with empty values
$id_treatment = $nama_treatment = $harga = "";
$id_treatment_err = $nama_treatment_err = $harga_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id_treatment"]) && !empty($_POST["id_treatment"])){
    // Get hidden input value
    $id_treatment = $_POST["id_treatment"];
    
    // Validate id treatment
    $input_id_treatment = trim($_POST["id_treatment"]);
    if(empty($input_id_treatment)){
        $id_treatment_err = "Masukkan id treatment.";
    } elseif(!filter_var($input_id_treatment, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $id_treatment_err = "Masukkan id treatment yang valid.";
    } else{
        $id_treatment = $input_id_treatment;
    }

    //Vallidate nama
    $input_nama_treatment = trim($_POST["nama_treatment"]);
    if(empty($input_nama_treatment)){
        $nama_treatment_err = "Masukkan nama.";
    } elseif(!filter_var($input_nama_treatment, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nama_treatment_err = "Masukkan nama yang valid.";
    } else{
        $nama_treatment = $input_nama_treatment;
    }
    
    // Validate harga harga
    $input_harga = trim($_POST["harga"]);
    if(empty($input_harga)){
        $harga_err = "Masukkan harga.";     
    } else{
        $harga = $input_harga;
    }
    
    
    // Check input errors before inserting in database
    if(empty($nama_treatment_err) && empty($harga_err)){
        // Prepare an update statement
        $sql = "UPDATE data_treatment SET nama=?, harga=? WHERE id_treatment=?";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_nama, $param_harga, $param_id_treatment);
            
            // Set parameters
            $param_id_treatment = $id_treatment;
            $param_nama = $nama_treatment;
            $param_harga = $harga;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: treatment.php");
                exit();
            } else{
                echo "Oops ada yang salah!";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connect);
} else{
    // Check existence of id_treatment parameter before processing further
    if(isset($_GET["id_treatment"]) && !empty(trim($_GET["id_treatment"]))){
        // Get URL parameter
        $id_treatment =  trim($_GET["id_treatment"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM data_treatment WHERE id_treatment = ?";
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id_treatment);
            
            // Set parameters
            $param_id_treatment = $id_treatment;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $id_treatment = $row["id_treatment"];
                    $nama_treatment = $row["nama_treatment"];
                    $harga = $row["harga"];
                } else{
                    // URL doesn't contain valid id_treatment. Redirect to error page
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
    }  else{
        // URL doesn't contain id_treatment parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data Treatment</title>
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
                        <h2>Update Data Treatment</h2>
                    </div>
                    <p>Masukkan data treatment.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($id_treatment_err)) ? 'has-error' : ''; ?>">
                            <label>ID Treatment</label>
                            <input type="text" name="id_treatment" class="form-control" value="<?php echo $id_treatment; ?>">
                            <span class="help-block"><?php echo $id_treatment_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($nama_treatment_err)) ? 'has-error' : ''; ?>">
                            <label>Nama Treatment</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama_treatment; ?>">
                            <span class="help-block"><?php echo $nama_treatment_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($harga_err)) ? 'has-error' : ''; ?>">
                            <label>Harga</label>
                            <textarea name="harga" class="form-control"><?php echo $harga; ?></textarea>
                            <span class="help-block"><?php echo $harga_err;?></span>
                        </div>
                        <input type="hidden" name="id_treatment" value="<?php echo $id_treatment; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="treatment.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>