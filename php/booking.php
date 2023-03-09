<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama_booking'])) {
    header("Location:  ../index.php");
}

if (isset($_POST['submit'])) {
    $nama_booking = $_POST['nama_booking'];
    $tanggal = $_POST['tanggal'];
    $treatment = $_POST['treatment'];
    $treatment2 = $_POST['treatment2'];
    $barber = $_POST['barber'];

    // $result = mysqli_query($connect, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO data_booking (nama_booking, tanggal, treatment, treatment2, barber) VALUES ('$nama_booking', '$tanggal', '$treatment', '$treatment2', '$barber')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Selamat, pemesanan berhasil!')</script>";
            $nama_booking = "";
            $tanggal = "";
            $treatment = "";
            $treatment2 = "";
            $barber ="";

        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  color: black;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/bg5.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.page-booking {
  width: 70%;
  border-radius: 5px;
  background-color: #17223B;
  padding: 20px;
}

.page-booking .booking-text{
	color: white;
    font-weight: 600;
    font-size: 2.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.page-booking .form-booking .input-grup{
    margin: 10px 5px;
}

label{
	color: #C58940;
    font-weight: 500;
    font-size: 0.8rem;
    margin-top: 5px;
    display: block;
    text-transform: capitalize;
}

.page-booking .form-booking .input-grup input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #C58940;
  border-radius: 20px;
  box-sizing: border-box;
  background-color: transparent;
  color: #fff;
}

#date{
	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #C58940;
  border-radius: 20px;
  box-sizing: border-box;
  background-color: transparent;
  color: #fff;
}

.page-booking .form-booking .input-group input[type=text], select:focus, .page-booking .form-booking .input-group input[type=text]:valid {
    border-color: #E5BA73;
}

.btn{
  width: 100%;
  background-color: #C58940;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

.btn:hover {
    transform: translateY(-5px);
    background-color: #E5BA73;
}
    </style>
</head>
<body>
<div class="page-booking">
<p class="booking-text">Form Pemesanan</p>
  <form action="" method="POST" class="form-booking">
    <div class="input-grup">
        <label for="nama">Nama</label>
        <input type="text" name="nama_booking" placeholder="Nama.." value="<?php echo $nama_booking;?>" required>
    </div>
    <div class="input-grup">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="date" name="tanggal" placeholder="Tanggal.." value="<?php echo $tanggal;?>" required>
    </div>
    <div class="input-grup">
        <label for="treatmet">Treatment</label>
        <select  name="treatment" value="<?php echo $treatment;?>" required>
            <option value="1">Hair Cutting</option>
            <option value="2">Hair Painting</option>
            <option value="3">Smooth Hair Creambath</option>
            <option value="4">Cool Pomade</option>
        </select>
    </div>
    <div class="input-grup">
        <label for="treatmet2">Treatment 2</label>
        <select name="treatment2" value="<?php echo $treatment2;?>" required>
            <option value="1">Hair Cutting</option>
            <option value="2">Hair Painting</option>
            <option value="3">Smooth Hair Creambath</option>
            <option value="4">Cool Pomade</option>
        </select>
    </div>
    <div class="input-grup">
        <label for="barber">Barber</label>
        <select name="barber"  value="<?php echo $barber;?>" required>
            <option value="1">Anggara Wiyasa</option>
            <option value="2">Saraswati Ageng</option>
            <option value="3">Inggrid Pameel</option>
            <option value="4">Reyhan Dharma</option>
            <option value="5">Mega Ayuningtyas</option>
            <option value="6">Zidane Arfa Seta</option>
            <option value="7">Azalea Putri</option>
        </select>
    </div>
    <div class="input-group">
        <button name="submit" class="btn" values="submit">Booking</button>
    </div>
  </form>
</div>
</body>
</html>