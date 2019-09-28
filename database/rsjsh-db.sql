-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2019 pada 13.59
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsjsh-db`
--
CREATE DATABASE IF NOT EXISTS `rsjsh-db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rsjsh-db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` varchar(256) NOT NULL,
  `id_user` varchar(256) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `divisi_user` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `komentar` text NOT NULL,
  `nomor_laporan` varchar(256) NOT NULL,
  `status_komentar` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `nama_user`, `divisi_user`, `tanggal`, `komentar`, `nomor_laporan`, `status_komentar`) VALUES
('K-L-b/Kenangan/UGD/28092019/001-001', '696969', 'Akbar Riski', 'Pegawai', '2019-09-28', 'haha', 'L-b/Kenangan/UGD/28092019/001', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_air`
--

CREATE TABLE `laporan_air` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `id_pelapor` varchar(255) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nip_teknisi` varchar(255) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_air`
--

INSERT INTO `laporan_air` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `id_pelapor`, `pelapor`, `nip_teknisi`, `keluhan`, `tambahan`, `status`) VALUES
('L-a/Kenangan/UGD/28092019/001', '2019-09-28', 'Kenangan', 'UGD', '696969', 'Akbar Riski', '12346', 'Air Tidak Mengalir   ', 'haha', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_bangunan`
--

CREATE TABLE `laporan_bangunan` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `id_pelapor` varchar(255) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nip_teknisi` varchar(255) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_bangunan`
--

INSERT INTO `laporan_bangunan` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `id_pelapor`, `pelapor`, `nip_teknisi`, `keluhan`, `tambahan`, `status`) VALUES
('L-b/Kenangan/UGD/28092019/001', '2019-09-28', 'Kenangan', 'UGD', '696969', 'Akbar Riski', '12346', 'Atap Bocor  ', 'gagsa', 'Sedang Dikerjakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_furnitur`
--

CREATE TABLE `laporan_furnitur` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `id_pelapor` int(255) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nip_teknisi` varchar(255) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `jenis_keluhan` varchar(256) NOT NULL,
  `tambahan` varchar(256) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_listrik`
--

CREATE TABLE `laporan_listrik` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `id_pelapor` int(255) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nip_teknisi` varchar(255) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_peralatan`
--

CREATE TABLE `laporan_peralatan` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `id_pelapor` varchar(255) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nip_teknisi` varchar(255) NOT NULL,
  `nama_peralatan` varchar(256) NOT NULL,
  `jenis_keluhan` varchar(256) NOT NULL,
  `tambahan` varchar(256) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `NIP` int(255) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `divisi` varchar(256) NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `instalasi` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`NIP`, `nama_user`, `divisi`, `ruangan`, `instalasi`, `password`) VALUES
(12345, 'Viki Hardiyanto', 'pegawai', 'Merak', 'Unit Gawat Darurat', 'ojan21'),
(12346, 'Angga Nugraha', 'teknisi', '', '', 'anggabokep'),
(696969, 'Akbar Riski', 'pegawai', 'Kenangan', 'Install Game', 'anggabokep');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `laporan_air`
--
ALTER TABLE `laporan_air`
  ADD PRIMARY KEY (`nomor_laporan`);

--
-- Indeks untuk tabel `laporan_bangunan`
--
ALTER TABLE `laporan_bangunan`
  ADD PRIMARY KEY (`nomor_laporan`);

--
-- Indeks untuk tabel `laporan_furnitur`
--
ALTER TABLE `laporan_furnitur`
  ADD PRIMARY KEY (`nomor_laporan`);

--
-- Indeks untuk tabel `laporan_listrik`
--
ALTER TABLE `laporan_listrik`
  ADD PRIMARY KEY (`nomor_laporan`);

--
-- Indeks untuk tabel `laporan_peralatan`
--
ALTER TABLE `laporan_peralatan`
  ADD PRIMARY KEY (`nomor_laporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
