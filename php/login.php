<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>Username dan Password Salah !</div>";
    }
    }
    ?>

    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <form action="level.php" method="post" class="login-email">
            <div class="input-group">
                <input type="text" name="username" class="" placeholder="Username" required="required">
            </div>
            <div class="input-group">
                <input type="password" name="password" class="" placeholder="Password" required="required">
            </div>
            <div class="input-group">
                <button name="submit" class="btn" value="LOGIN">Login</button>
            </div>
            <p class="login-register-text">Belum punya akun? <a href="register.php">Register</a></p>
            <!-- <input type="submit" class="tombol_login" value="LOGIN"> -->
        <br/>
        <br/>
    
        </form>
    </div>
</body>
</html>
