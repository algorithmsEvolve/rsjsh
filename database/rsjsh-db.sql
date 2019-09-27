-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2019 pada 04.01
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
('K-L-a/Mawar/RawatInap/24092019/001-001', 'user001', 'Viki Hardiyanto', 'Admin', '2019-09-25', 'Keran rusak. Harap segera diperbaiki ya, Terimakasih.', 'L-a/Mawar/RawatInap/24092019/001', '0'),
('K-L-a/Mawar/RawatInap/24092019/001-002', 'user002', 'Angga Nugraha', 'Teknisi', '2019-09-26', 'Baik pak. Segera akan saya perbaiki. Terimakasih atas laporannya.', 'L-a/Mawar/RawatInap/24092019/001', '0'),
('K-L-a/Mawar/RawatInap/24092019/001-003', 'user001', 'Viki Hardiyanto', 'Admin', '2019-09-27', 'Mantap gan', 'L-a/Mawar/RawatInap/24092019/001', '0'),
('K-L-l/Apel/UGD/24092019/001-001', 'user001', 'Viki Hardiyanto', 'Admin', '2019-09-27', 'Oke terimakasih, ditunggu hasilnya.', 'L-l/Apel/UGD/24092019/001', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_air`
--

CREATE TABLE `laporan_air` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_air`
--

INSERT INTO `laporan_air` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `pelapor`, `keluhan`, `tambahan`, `status`) VALUES
('L-a/Mawar/RawatInap/24092019/001', '2019-09-24', 'Mawar', 'Rawat Inap', 'Viki Hardiyanto', 'Air Tidak Mengalir  Arus Air Kecil/Lemah Air Berbau', 'hay', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_bangunan`
--

CREATE TABLE `laporan_bangunan` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_bangunan`
--

INSERT INTO `laporan_bangunan` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `pelapor`, `keluhan`, `tambahan`, `status`) VALUES
('L-b/Mawar/RawatInap/24092019/001', '2019-09-24', 'Mawar', 'Rawat Inap', 'Viki Hardiyanto', 'Atap Bocor  ', 'dsg', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_furnitur`
--

CREATE TABLE `laporan_furnitur` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `jenis_keluhan` varchar(256) NOT NULL,
  `tambahan` varchar(256) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_furnitur`
--

INSERT INTO `laporan_furnitur` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `pelapor`, `keluhan`, `jenis_keluhan`, `tambahan`, `status`) VALUES
('L-f/Mawar/RawatInap/25092019/001', '2019-09-25', 'Mawar', 'Rawat Inap', 'Viki Hardiyanto', 'Tak tau deh', 'Rusak Parah', 'haha', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_listrik`
--

CREATE TABLE `laporan_listrik` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `keluhan` varchar(256) NOT NULL,
  `tambahan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_listrik`
--

INSERT INTO `laporan_listrik` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `pelapor`, `keluhan`, `tambahan`, `status`) VALUES
('L-l/Apel/UGD/24092019/001', '2019-09-24', 'Apel', 'UGD', 'Viki Hardiyanto', 'Lampu Mati   ', 'Mantap', 'Sedang Dikerjakan'),
('L-l/Apel/UGD/24092019/002', '2019-09-24', 'Apel', 'UGD', 'Viki Hardiyanto', 'Lampu Mati   ', 'SDGSD', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_peralatan`
--

CREATE TABLE `laporan_peralatan` (
  `nomor_laporan` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(256) NOT NULL,
  `bagian` varchar(256) NOT NULL,
  `pelapor` varchar(256) NOT NULL,
  `nama_peralatan` varchar(256) NOT NULL,
  `jenis_keluhan` varchar(256) NOT NULL,
  `tambahan` varchar(256) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Dikerjakan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_peralatan`
--

INSERT INTO `laporan_peralatan` (`nomor_laporan`, `tanggal`, `ruangan`, `bagian`, `pelapor`, `nama_peralatan`, `jenis_keluhan`, `tambahan`, `status`) VALUES
('L-p/mawar/UGD/25092019/001', '2019-09-25', 'mawar', 'UGD', 'Viki Hardiyanto', 'Infus', 'Rusak Total', 'tiba tiba aja', 'Menunggu Konfirmasi');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
