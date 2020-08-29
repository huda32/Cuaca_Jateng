-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2019 pada 11.46
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuaca`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin00', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dini`
--

CREATE TABLE `tb_dini` (
  `id` int(12) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `ket` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dini`
--

INSERT INTO `tb_dini` (`id`, `judul`, `ket`, `gambar`, `tempat`, `tanggal`) VALUES
(5, 'Ini Judul', 'Blabla', 'Kota_Pekalongan.png', 'Pekalongan', '2019-02-04 05:43:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id` int(11) NOT NULL,
  `nm_kab` varchar(50) NOT NULL,
  `nm_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id`, `nm_kab`, `nm_file`) VALUES
(21, 'Salatiga', 'Kota_Salatiga.png'),
(22, 'Semarang', 'Kota_Semarang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file_bsk`
--

CREATE TABLE `tb_file_bsk` (
  `id` int(11) NOT NULL,
  `nm_kab` varchar(50) NOT NULL,
  `nm_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file_bsk`
--

INSERT INTO `tb_file_bsk` (`id`, `nm_kab`, `nm_file`) VALUES
(20, 'Wonosobo', 'Kab_Wonosobo.png'),
(21, 'Magelang', 'Kota_Magelang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kab`
--

CREATE TABLE `tb_kab` (
  `id` int(11) NOT NULL,
  `nm_kab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kab`
--

INSERT INTO `tb_kab` (`id`, `nm_kab`) VALUES
(2, 'Banyumas'),
(3, 'Magelang'),
(4, 'Banjarnegara'),
(5, 'Demak'),
(6, 'Tegal'),
(7, 'Wonosobo'),
(8, 'Salatiga'),
(9, 'Surakarta'),
(10, 'Blora'),
(11, 'Semarang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dini`
--
ALTER TABLE `tb_dini`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_file_bsk`
--
ALTER TABLE `tb_file_bsk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kab`
--
ALTER TABLE `tb_kab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_dini`
--
ALTER TABLE `tb_dini`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_file_bsk`
--
ALTER TABLE `tb_file_bsk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_kab`
--
ALTER TABLE `tb_kab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
