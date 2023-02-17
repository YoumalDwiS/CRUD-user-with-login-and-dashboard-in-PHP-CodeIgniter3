-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2023 pada 02.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prg5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_pdf_excel`
--

CREATE TABLE `materi_pdf_excel` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_pdf_excel`
--

INSERT INTO `materi_pdf_excel` (`nim`, `nama`, `prodi`) VALUES
('0320180001', 'Alifiya Nika Gusma', 'Sistem Informasi'),
('0320180003', 'Ayu Safitri', 'Sistem Informasi'),
('0320180004', 'Dewi Cipto Rini', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_security`
--

CREATE TABLE `materi_security` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi_security`
--

INSERT INTO `materi_security` (`username`, `nama`, `password`, `role`, `email`, `telepon`) VALUES
('KRY0001', 'Eko Abdul Goffar', '', 'Admin', 'eko123@gmail.comm', '08131922'),
('KRY0002', 'Sisia Dika Ariyanto', '1234', 'Dosen', 'sisidika@gmail.com', '081321122'),
('QW', 'QWR', '', 'Admin', 'QWR@AGAS.COM', '2121'),
('ASF', 'ASF', '1212', 'Admin', 'youmaldwis@gmail.com', '1212'),
('', 'Budi', 'budi123', 'Admin', 'budi123@gmail.com', '081929292');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `materi_pdf_excel`
--
ALTER TABLE `materi_pdf_excel`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
