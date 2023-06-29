-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 09.45
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nutrisipi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cobapost`
--

CREATE TABLE `cobapost` (
  `id` int(255) NOT NULL,
  `nutrisi_a` int(255) NOT NULL,
  `nutrisi_b` int(255) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cobapost`
--

INSERT INTO `cobapost` (`id`, `nutrisi_a`, `nutrisi_b`, `timestamp`) VALUES
(1, 1000, 500, '2023-06-29'),
(2, 900, 700, '2023-06-30'),
(3, 800, 400, '2023-07-01'),
(4, 750, 600, '2023-07-02'),
(5, 700, 650, '2023-07-03'),
(6, 300, 100, '2023-07-04'),
(7, 500, 500, '2023-07-05'),
(8, 600, 550, '2023-07-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapostnutrisi`
--

CREATE TABLE `datapostnutrisi` (
  `id` int(255) NOT NULL,
  `nutrisi_a` varchar(255) NOT NULL,
  `nutrisi_b` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cobapost`
--
ALTER TABLE `cobapost`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapostnutrisi`
--
ALTER TABLE `datapostnutrisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cobapost`
--
ALTER TABLE `cobapost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `datapostnutrisi`
--
ALTER TABLE `datapostnutrisi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
