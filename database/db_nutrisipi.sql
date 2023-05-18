-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2023 pada 07.40
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
-- Struktur dari tabel `cobalog`
--

CREATE TABLE `cobalog` (
  `id` int(255) NOT NULL,
  `nutrisi_a` int(255) NOT NULL,
  `nutrisi_b` int(255) NOT NULL,
  `nutrisi_c` int(255) NOT NULL,
  `water` int(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cobalog`
--

INSERT INTO `cobalog` (`id`, `nutrisi_a`, `nutrisi_b`, `nutrisi_c`, `water`, `created`) VALUES
(1, 231, 156, 252, 110, '2023-05-16 16:18:51'),
(2, 152, 50, 128, 20, '2023-05-16 16:19:12'),
(3, 154, 170, 200, 30, '2023-05-15 16:19:21'),
(4, 1, 136, 160, 148, '2023-05-15 16:19:32'),
(5, 234, 84, 84, 125, '2023-05-15 16:19:40'),
(6, 117, 95, 133, 93, '2023-05-15 16:19:49'),
(7, 40, 209, 145, 219, '2023-05-15 16:19:57'),
(8, 253, 98, 102, 63, '2023-05-15 16:20:22'),
(9, 158, 195, 176, 124, '2023-05-16 16:20:33'),
(10, 75, 19, 220, 245, '2023-05-16 16:20:43'),
(11, 153, 104, 93, 145, '2023-05-16 16:20:51'),
(12, 225, 187, 142, 52, '2023-05-16 16:20:58'),
(13, 132, 79, 239, 81, '2023-05-17 16:21:08'),
(14, 139, 34, 186, 51, '2023-05-17 16:21:21'),
(15, 29, 238, 231, 27, '2023-05-17 16:21:29'),
(16, 188, 70, 153, 227, '2023-05-17 16:21:38'),
(17, 247, 54, 115, 230, '2023-05-17 16:21:46'),
(18, 167, 74, 204, 61, '2023-05-17 16:21:54'),
(19, 190, 157, 4, 210, '2023-05-17 16:22:02'),
(20, 18, 60, 56, 246, '2023-05-17 16:22:09'),
(21, 173, 42, 2, 38, '2023-05-18 16:22:17'),
(22, 15, 227, 3, 98, '2023-05-18 16:22:25'),
(23, 128, 80, 89, 196, '2023-05-18 16:22:32'),
(24, 1, 69, 203, 197, '2023-05-18 16:22:39'),
(25, 245, 240, 15, 255, '2023-05-18 16:22:47'),
(26, 46, 39, 193, 69, '0000-00-00 00:00:00'),
(27, 39, 15, 91, 87, '0000-00-00 00:00:00'),
(28, 240, 197, 128, 33, '0000-00-00 00:00:00'),
(29, 13, 22, 150, 162, '0000-00-00 00:00:00'),
(30, 177, 81, 63, 163, '0000-00-00 00:00:00'),
(31, 59, 144, 169, 101, '0000-00-00 00:00:00'),
(32, 19, 62, 138, 98, '0000-00-00 00:00:00'),
(33, 130, 196, 149, 200, '0000-00-00 00:00:00'),
(34, 10, 233, 86, 143, '0000-00-00 00:00:00'),
(35, 174, 111, 225, 41, '0000-00-00 00:00:00'),
(36, 34, 240, 164, 215, '0000-00-00 00:00:00'),
(37, 111, 210, 177, 11, '0000-00-00 00:00:00'),
(38, 75, 239, 123, 101, '0000-00-00 00:00:00'),
(39, 201, 44, 106, 105, '0000-00-00 00:00:00'),
(40, 101, 209, 137, 14, '0000-00-00 00:00:00'),
(41, 186, 177, 195, 242, '0000-00-00 00:00:00'),
(42, 203, 227, 231, 217, '0000-00-00 00:00:00'),
(43, 14, 80, 210, 224, '0000-00-00 00:00:00'),
(44, 188, 216, 209, 77, '0000-00-00 00:00:00'),
(45, 198, 98, 199, 17, '0000-00-00 00:00:00'),
(46, 124, 48, 243, 47, '0000-00-00 00:00:00'),
(47, 82, 105, 29, 36, '0000-00-00 00:00:00'),
(48, 48, 103, 90, 197, '0000-00-00 00:00:00'),
(49, 231, 209, 113, 62, '0000-00-00 00:00:00'),
(50, 125, 122, 149, 62, '0000-00-00 00:00:00'),
(51, 10, 152, 240, 217, '0000-00-00 00:00:00'),
(52, 124, 13, 245, 67, '0000-00-00 00:00:00'),
(53, 216, 246, 136, 20, '0000-00-00 00:00:00'),
(54, 185, 141, 50, 199, '0000-00-00 00:00:00'),
(55, 7, 93, 148, 252, '0000-00-00 00:00:00'),
(56, 206, 234, 209, 220, '0000-00-00 00:00:00'),
(57, 232, 124, 138, 143, '0000-00-00 00:00:00'),
(58, 105, 100, 100, 237, '0000-00-00 00:00:00'),
(59, 30, 139, 49, 13, '0000-00-00 00:00:00'),
(60, 113, 40, 137, 75, '0000-00-00 00:00:00'),
(61, 146, 86, 139, 27, '0000-00-00 00:00:00'),
(62, 123, 37, 160, 141, '0000-00-00 00:00:00'),
(63, 246, 111, 100, 4, '0000-00-00 00:00:00'),
(64, 170, 176, 133, 169, '0000-00-00 00:00:00'),
(65, 188, 148, 115, 125, '0000-00-00 00:00:00'),
(66, 148, 113, 243, 199, '0000-00-00 00:00:00'),
(67, 130, 10, 67, 119, '0000-00-00 00:00:00'),
(68, 115, 50, 229, 97, '0000-00-00 00:00:00'),
(69, 80, 247, 91, 146, '0000-00-00 00:00:00'),
(70, 38, 207, 92, 23, '0000-00-00 00:00:00'),
(71, 124, 18, 15, 210, '0000-00-00 00:00:00'),
(72, 105, 167, 223, 224, '0000-00-00 00:00:00'),
(73, 183, 78, 220, 45, '0000-00-00 00:00:00'),
(74, 3, 3, 121, 108, '0000-00-00 00:00:00'),
(75, 141, 202, 200, 151, '0000-00-00 00:00:00'),
(76, 185, 123, 131, 39, '0000-00-00 00:00:00'),
(77, 29, 200, 29, 148, '0000-00-00 00:00:00'),
(78, 206, 11, 131, 80, '0000-00-00 00:00:00'),
(79, 225, 53, 87, 222, '0000-00-00 00:00:00'),
(80, 85, 237, 94, 41, '0000-00-00 00:00:00'),
(81, 228, 221, 252, 123, '0000-00-00 00:00:00'),
(82, 147, 67, 172, 233, '0000-00-00 00:00:00'),
(83, 99, 168, 62, 45, '0000-00-00 00:00:00'),
(84, 16, 187, 103, 131, '0000-00-00 00:00:00'),
(85, 158, 59, 23, 206, '0000-00-00 00:00:00'),
(86, 156, 105, 213, 57, '0000-00-00 00:00:00'),
(87, 128, 49, 20, 137, '0000-00-00 00:00:00'),
(88, 176, 153, 68, 24, '0000-00-00 00:00:00'),
(89, 115, 110, 121, 197, '0000-00-00 00:00:00'),
(90, 119, 223, 43, 208, '0000-00-00 00:00:00'),
(91, 114, 223, 159, 254, '0000-00-00 00:00:00'),
(92, 113, 20, 241, 55, '0000-00-00 00:00:00'),
(93, 104, 105, 139, 98, '0000-00-00 00:00:00'),
(94, 148, 138, 95, 29, '0000-00-00 00:00:00'),
(95, 198, 52, 133, 161, '0000-00-00 00:00:00'),
(96, 209, 22, 90, 27, '0000-00-00 00:00:00'),
(97, 206, 153, 165, 126, '0000-00-00 00:00:00'),
(98, 235, 187, 58, 229, '0000-00-00 00:00:00'),
(99, 26, 186, 36, 189, '0000-00-00 00:00:00'),
(100, 148, 179, 60, 134, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cobapost`
--

CREATE TABLE `cobapost` (
  `id` int(255) NOT NULL,
  `nutrisi_a` int(255) NOT NULL,
  `nutrisi_b` int(255) NOT NULL,
  `nutrisi_c` int(255) NOT NULL,
  `water` int(255) NOT NULL,
  `timestamp` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cobapost`
--

INSERT INTO `cobapost` (`id`, `nutrisi_a`, `nutrisi_b`, `nutrisi_c`, `water`, `timestamp`) VALUES
(1, 231, 156, 252, 110, '17:07:08'),
(2, 152, 50, 128, 20, '13:03:04'),
(3, 154, 170, 200, 30, '12:07:09'),
(4, 1, 136, 160, 148, '04:07:07'),
(5, 234, 84, 84, 125, '13:07:11'),
(6, 117, 95, 133, 93, '10:08:08'),
(7, 40, 209, 145, 219, '15:07:11'),
(8, 253, 98, 102, 63, '17:09:13'),
(9, 158, 195, 176, 124, '17:10:14'),
(10, 75, 19, 220, 245, '18:09:10'),
(11, 153, 104, 93, 145, '11:12:12'),
(12, 225, 187, 142, 52, '15:14:23'),
(13, 132, 79, 239, 81, '23:12:13'),
(14, 139, 34, 186, 51, '09:09:10'),
(15, 29, 238, 231, 27, '12:07:09'),
(16, 188, 70, 153, 227, '12:09:11'),
(17, 247, 54, 115, 230, '14:12:12'),
(18, 167, 74, 204, 61, '18:09:14'),
(19, 190, 157, 4, 210, '15:09:09'),
(20, 18, 60, 56, 246, '18:14:09'),
(21, 173, 42, 2, 38, '14:12:12'),
(22, 15, 227, 3, 98, '18:16:16'),
(23, 128, 80, 89, 196, '11:11:13'),
(24, 1, 69, 203, 197, '18:16:12'),
(25, 245, 240, 15, 255, '17:16:10'),
(26, 46, 39, 193, 69, '00:00:00'),
(27, 39, 15, 91, 87, '00:00:00'),
(28, 240, 197, 128, 33, '00:00:00'),
(29, 13, 22, 150, 162, '00:00:00'),
(30, 177, 81, 63, 163, '00:00:00'),
(31, 59, 144, 169, 101, '00:00:00'),
(32, 19, 62, 138, 98, '00:00:00'),
(33, 130, 196, 149, 200, '00:00:00'),
(34, 10, 233, 86, 143, '00:00:00'),
(35, 174, 111, 225, 41, '00:00:00'),
(36, 34, 240, 164, 215, '00:00:00'),
(37, 111, 210, 177, 11, '00:00:00'),
(38, 75, 239, 123, 101, '00:00:00'),
(39, 201, 44, 106, 105, '00:00:00'),
(40, 101, 209, 137, 14, '00:00:00'),
(41, 186, 177, 195, 242, '00:00:00'),
(42, 203, 227, 231, 217, '00:00:00'),
(43, 14, 80, 210, 224, '00:00:00'),
(44, 188, 216, 209, 77, '00:00:00'),
(45, 198, 98, 199, 17, '00:00:00'),
(46, 124, 48, 243, 47, '00:00:00'),
(47, 82, 105, 29, 36, '00:00:00'),
(48, 48, 103, 90, 197, '00:00:00'),
(49, 231, 209, 113, 62, '00:00:00'),
(50, 125, 122, 149, 62, '00:00:00'),
(51, 10, 152, 240, 217, '00:00:00'),
(52, 124, 13, 245, 67, '00:00:00'),
(53, 216, 246, 136, 20, '00:00:00'),
(54, 185, 141, 50, 199, '00:00:00'),
(55, 7, 93, 148, 252, '00:00:00'),
(56, 206, 234, 209, 220, '00:00:00'),
(57, 232, 124, 138, 143, '00:00:00'),
(58, 105, 100, 100, 237, '00:00:00'),
(59, 30, 139, 49, 13, '00:00:00'),
(60, 113, 40, 137, 75, '00:00:00'),
(61, 146, 86, 139, 27, '00:00:00'),
(62, 123, 37, 160, 141, '00:00:00'),
(63, 246, 111, 100, 4, '00:00:00'),
(64, 170, 176, 133, 169, '00:00:00'),
(65, 188, 148, 115, 125, '00:00:00'),
(66, 148, 113, 243, 199, '00:00:00'),
(67, 130, 10, 67, 119, '00:00:00'),
(68, 115, 50, 229, 97, '00:00:00'),
(69, 80, 247, 91, 146, '00:00:00'),
(70, 38, 207, 92, 23, '00:00:00'),
(71, 124, 18, 15, 210, '00:00:00'),
(72, 105, 167, 223, 224, '00:00:00'),
(73, 183, 78, 220, 45, '00:00:00'),
(74, 3, 3, 121, 108, '00:00:00'),
(75, 141, 202, 200, 151, '00:00:00'),
(76, 185, 123, 131, 39, '00:00:00'),
(77, 29, 200, 29, 148, '00:00:00'),
(78, 206, 11, 131, 80, '00:00:00'),
(79, 225, 53, 87, 222, '00:00:00'),
(80, 85, 237, 94, 41, '00:00:00'),
(81, 228, 221, 252, 123, '00:00:00'),
(82, 147, 67, 172, 233, '00:00:00'),
(83, 99, 168, 62, 45, '00:00:00'),
(84, 16, 187, 103, 131, '00:00:00'),
(85, 158, 59, 23, 206, '00:00:00'),
(86, 156, 105, 213, 57, '00:00:00'),
(87, 128, 49, 20, 137, '00:00:00'),
(88, 176, 153, 68, 24, '00:00:00'),
(89, 115, 110, 121, 197, '00:00:00'),
(90, 119, 223, 43, 208, '00:00:00'),
(91, 114, 223, 159, 254, '00:00:00'),
(92, 113, 20, 241, 55, '00:00:00'),
(93, 104, 105, 139, 98, '00:00:00'),
(94, 148, 138, 95, 29, '00:00:00'),
(95, 198, 52, 133, 161, '00:00:00'),
(96, 209, 22, 90, 27, '00:00:00'),
(97, 206, 153, 165, 126, '00:00:00'),
(98, 235, 187, 58, 229, '00:00:00'),
(99, 26, 186, 36, 189, '00:00:00'),
(100, 148, 179, 60, 134, '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapostnutrisi`
--

CREATE TABLE `datapostnutrisi` (
  `id` int(255) NOT NULL,
  `nutrisi_a` varchar(255) NOT NULL,
  `nutrisi_b` varchar(255) NOT NULL,
  `nutrisi_c` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cobalog`
--
ALTER TABLE `cobalog`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `cobalog`
--
ALTER TABLE `cobalog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `cobapost`
--
ALTER TABLE `cobapost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `datapostnutrisi`
--
ALTER TABLE `datapostnutrisi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;