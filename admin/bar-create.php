<?php
// Include connect file
require_once "../php/connect.php";

// Define variables and initialize with empty values
$id_pencukur = $nama_pencukur = "";
$id_pencukur_err = $nama_pencukur_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate id
    $input_id_pencukur = trim($_POST["id_pencukur"]);
    if(empty($input_id_pencukur)){
        $id_pencukur_err = "Masukkan id pencukur yang sesuai";
    } elseif(!ctype_digit($input_id_pencukur)){
        $id_pencukur_err = "Masukkan nilai yang positif.";
    } else{
        $id_pencukur = $input_id_pencukur;
    }

    // Validate nama
    $input_nama_pencukur = trim($_POST["nama_pencukur"]);
    if(empty($input_nama_pencukur)){
        $nama_pencukur_err = "Masukkan nama!";
    } elseif(!filter_var($input_nama_pencukur, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nama_pencukur_err = "Masukkan nama yang valid.";
    } else{
        $nama_pencukur = $input_nama_pencukur;
    }


    // Check input errors before inserting in database
    if(empty($id_pencukur_err) && empty($nama_pencukur_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO data_pencukur (id_pencukur, nama_pencukur) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_id_pencukur, $param_nama_pencukur);

            // Set parameters
            $param_id_pencukur = $id_pencukur;
            $param_nama_pencukur = $nama_pencukur;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: barber.php");
                exit();
            } else{
                echo "Ooops ada yang salah! Coba lagi.";
            }
        
        }
    // Close statement
    mysqli_stmt_close($stmt);
        
    }

    // Close connection
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menambah Daftar Karyawan</title>
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
                        <h2>Tambah Karyawan</h2>
                    </div>
                    <p>Silahkan isi form di bawah ini kemudian submit untuk menambahkan data karyawan baru ke dalam database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($id_pencukur_err)) ? 'has-error' : ''; ?>">
                            <label>ID Karyawan</label>
                            <input type="text" name="id_pencukur" class="form-control" value="<?php echo $id_pencukur; ?>">
                            <span class="help-block"><?php echo $id_pencukur_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($nama_pencukur_err)) ? 'has-error' : ''; ?>">
                            <label>Nama Karyawan</label>
                            <input type="text" name="nama_pencukur" class="form-control" value="<?php echo $nama_pencukur; ?>">
                            <span class="help-block"><?php echo $nama_pencukur_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="barber.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>