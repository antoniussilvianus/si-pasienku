-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 03.10
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpasien`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `nis` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`nis`, `nama`, `kelas`, `tgl_lahir`, `alamat`, `id`) VALUES
(100001, 'Dr.Terawan', 1919101, '2022-01-24', 'Kisaran', 26),
(10002, 'Dr.Sitompul', 19181, '2022-01-12', 'Jateng', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `nis` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`nis`, `nama`, `kelas`, `tgl_lahir`, `alamat`, `id`) VALUES
(9087, 'Ajengkelin', 837282, '2022-01-26', 'Bandung', 24),
(1298272, 'Srinur', 1897282, '2022-01-02', 'Simpang Empat', 25),
(123456, 'Dr.Terawan', 989097, '2022-01-25', 'kisaran', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_status`
--

INSERT INTO `tabel_status` (`id_status`, `status`) VALUES
(1, 'Alfa'),
(2, 'Izin'),
(3, 'Sakit'),
(4, 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
