<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
    $sql = "SELECT * FROM data_user WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO data_user (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
    echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }

} else {
echo "<script>alert('Password Tidak Sesuai')</script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="../css/login.css">

 <title>Register</title>
</head>
<body>


    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <form action="register.php" method="post" class="login-email">
            <div class="input-group">
                <input type="email" name="email" class="" placeholder="Email" value="<?php echo $email;?>" required>
            </div>
            <div class="input-group">
                <input type="text" name="username" class="" placeholder="Username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" class="" placeholder="Password" value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" class="" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn" values="submit">Register</button>
            </div>
            <p class="login-register-text">Sudah memiliki akun? <a href="login.php">Login</a></p>
            <!-- <input type="submit" class="tombol-login" values="submit"> -->
        </form>
    </div>

</body>
</html>
