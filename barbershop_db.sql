-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2023 pada 14.17
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_booking`
--

CREATE TABLE `data_booking` (
  `id_booking` int(5) NOT NULL,
  `nama_booking` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_treatment` int(3) NOT NULL,
  `id_treatment2` int(3) NOT NULL,
  `id_pencukur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_booking`
--

INSERT INTO `data_booking` (`id_booking`, `nama_booking`, `tanggal`, `id_treatment`, `id_treatment2`, `id_pencukur`) VALUES
(1, 'virgin', '2023-03-07', 1, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pencukur`
--

CREATE TABLE `data_pencukur` (
  `id_pencukur` int(5) NOT NULL,
  `nama_pencukur` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pencukur`
--

INSERT INTO `data_pencukur` (`id_pencukur`, `nama_pencukur`) VALUES
(1, 'Anggara Wiyasa'),
(2, 'Saraswati Ageng'),
(3, ' Inggrid Pameel Tampubolon'),
(4, 'Reyhan Dharma'),
(5, 'Mega Ayuningtyas'),
(6, 'Zidane Arfa Seta'),
(7, 'Azalea Putri ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_treatment`
--

CREATE TABLE `data_treatment` (
  `id_treatment` int(5) NOT NULL,
  `nama_treatment` varchar(25) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_treatment`
--

INSERT INTO `data_treatment` (`id_treatment`, `nama_treatment`, `harga`) VALUES
(1, 'Hair Cutting', 40000),
(2, 'Hair Painting', 185000),
(3, 'Smooth Hair Creambath', 190000),
(4, 'Cool Pomade', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `nama_user`, `email`, `password`, `cpassword`, `level`) VALUES
(1, 'admin1', '', 'admin1@gmail.com', '12345', '', 'admin'),
(5, 'user1', '', 'user1@gmail.com', '12345', '', ''),
(6, 'user2', '', 'user2@gmail.com', '12345', '', ''),
(7, 'user3', '', 'user3@gmail.com', '12345', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_booking`
--
ALTER TABLE `data_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `data_pencukur`
--
ALTER TABLE `data_pencukur`
  ADD PRIMARY KEY (`id_pencukur`);

--
-- Indeks untuk tabel `data_treatment`
--
ALTER TABLE `data_treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_booking`
--
ALTER TABLE `data_booking`
  MODIFY `id_booking` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_pencukur`
--
ALTER TABLE `data_pencukur`
  MODIFY `id_pencukur` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_treatment`
--
ALTER TABLE `data_treatment`
  MODIFY `id_treatment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
