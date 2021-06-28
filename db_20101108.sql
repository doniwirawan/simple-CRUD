-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2021 pada 05.52
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_20101108`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara_20101108`
--

CREATE TABLE `tb_negara_20101108` (
  `kode_20101108` char(4) NOT NULL,
  `nama_20101108` varchar(20) NOT NULL,
  `ibukota_20101108` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_negara_20101108`
--

INSERT INTO `tb_negara_20101108` (`kode_20101108`, `nama_20101108`, `ibukota_20101108`) VALUES
('N001', 'INDONESIA', 'JAKARTA'),
('N002', 'KOREA SELATAN', 'SEOUL'),
('N003', 'KOREA UTARA', 'PYONGYANG'),
('N004', 'JEPANG', 'TOKYO'),
('N005', 'THAILAND', 'BANGKOK'),
('N006', 'SINGAPURA', 'SINGAPURA'),
('N007', 'TIMOR LESTE', 'DILI'),
('N008', 'MALAYSIA', 'KUALA LUMPUR'),
('N009', 'AUSTRALIA', 'CANBERRA'),
('N010', 'VIETNAM', 'HANOI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_negara_20101108`
--
ALTER TABLE `tb_negara_20101108`
  ADD PRIMARY KEY (`kode_20101108`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
