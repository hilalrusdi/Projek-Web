-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2021 pada 12.46
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `massage`) VALUES
(1, 'rusd', 'rusd@gmail.com', 'halooo'),
(2, 'Amanda', 'hilalrusd14@gmail.com', 'hello my brother'),
(3, 'Amanda', 'hilalrus@gmail.com', '123456'),
(5, 'bendick', 'uwu@gmail.com', 'hello'),
(6, 'bendick', 'hilalrusd14@gmail.com', 'hhjgjjjhg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donate`
--

CREATE TABLE `donate` (
  `id` int(15) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `negara` varchar(25) NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `bank` varchar(15) NOT NULL,
  `no_rekening` varchar(25) NOT NULL,
  `jumlah_donasi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donate`
--

INSERT INTO `donate` (`id`, `nama_depan`, `nama_belakang`, `kota`, `negara`, `kode_pos`, `email`, `bank`, `no_rekening`, `jumlah_donasi`) VALUES
(1, 'Hilal', 'Rusdi', 'Sidoarjo', 'indonesia', '1565', 'rusd@gmail.com', 'mandiri', '1668367465', 7000),
(2, 'rusd', 'ian', 'kenjeran', 'Indonesia', '1092', 'uwu@gmail.com', 'Mandiri', '1237189647364', 50000),
(3, 'rusd', 'ian', 'kenjeran', 'Indonesia', '1092', 'hilalrusd14@gmail.com', 'BRI', '1237189647364', 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
