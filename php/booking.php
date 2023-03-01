<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: ./index.html");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_booking'];
    $tanggal = $_POST['tanggal'];
    $treatment = $_POST['treatment'];
    $treatment2 = $_POST['treatment2'];

$result = mysqli_query($connect, $sql);
if (!$result->num_rows > 0) {
    $sql = "INSERT INTO data_user (nama_booking, tanggal, treatment, treatment2) VALUES ('$nama', '$tanggal', '$treatment', '$treatment2)";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        $nama = "";
        $tanggal = "";
        $treatment = "";
        $treatment2 = "";
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
} else {
echo "<script>alert('Woops! Pemesanan gagal!.')</script>";
}

} else {
echo "<script>alert('Woops! Coba lagi')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../css/booking.css">
</head>
<body>
    <div class="container">
    <form class="form-booking" action="">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" placeholder="Nama Anda..">

        <label for="date">Tanggal</label>
        <input type="date" id="date" name="lastname" placeholder="Pilih Tanggal..">

        <label for="country">Treatment 1</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>

        <label for="country">Treatment 2</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>
    
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>