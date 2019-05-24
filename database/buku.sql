-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2019 pada 18.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `KdAnggota` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Jenjang` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`KdAnggota`, `Nama`, `Prodi`, `Jenjang`, `Alamat`) VALUES
(1, 'Cahya', 'Informatika', 'S1', 'Kampus222'),
(2, 'asd', 'asd', 'asd', 'asd'),
(4, 'ada', 'asd', 'asd', 'dasd'),
(5, 'Siapa', 'Apa', '??', 'Dimana'),
(6, 'asd', 'asd', 'dd', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `KdRegister` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `Penerbit` varchar(50) NOT NULL,
  `Thn_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`KdRegister`, `Judul`, `Pengarang`, `Penerbit`, `Thn_terbit`) VALUES
(1, 'Buku Baru', 'Siapa', 'Siapa', 1980),
(2, 'buku2', 'bu', 'bu22', 1990),
(6, 'Buku Baru', 'Siapa', '123', 1980),
(8, 'Bukukukukuku', 'ku', 'kuku', 2004);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detil_pinjam`
--

CREATE TABLE `detil_pinjam` (
  `KdPinjam` int(11) NOT NULL,
  `KdRegister` int(11) NOT NULL,
  `Tgl_pinjam` date NOT NULL,
  `Tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detil_pinjam`
--

INSERT INTO `detil_pinjam` (`KdPinjam`, `KdRegister`, `Tgl_pinjam`, `Tgl_kembali`) VALUES
(1, 1, '2019-04-02', '2019-04-10'),
(2, 0, '0000-00-00', '0000-00-00'),
(3, 0, '0000-00-00', '0000-00-00'),
(4, 0, '0000-00-00', '0000-00-00'),
(5, 1, '0000-00-00', '2019-04-27'),
(6, 2, '0000-00-00', '2019-04-27'),
(7, 1, '2019-04-27', '0000-00-00'),
(8, 5, '2019-04-27', '0000-00-00'),
(9, 5, '2019-05-03', '0000-00-00'),
(10, 8, '2019-05-03', '2019-05-03'),
(11, 1, '2019-05-03', '2019-05-03'),
(12, 1, '2019-05-03', '2019-05-03'),
(13, 1, '2019-05-03', '2019-05-03'),
(14, 1, '2019-05-03', '2019-05-03'),
(15, 1, '2019-05-03', '2019-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `KdPinjam` int(11) NOT NULL,
  `KdAnggota` int(11) NOT NULL,
  `KdPetugas` int(11) NOT NULL,
  `KdRegister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`KdPinjam`, `KdAnggota`, `KdPetugas`, `KdRegister`) VALUES
(1, 1, 0, 1),
(2, 0, 0, 1),
(3, 0, 0, 1),
(4, 1, 0, 0),
(5, 1, 0, 1),
(6, 4, 0, 2),
(7, 1, 0, 1),
(8, 1, 0, 5),
(9, 1, 1, 5),
(10, 1, 1, 8),
(11, 1, 1, 1),
(12, 1, 1, 1),
(13, 1, 1, 1),
(14, 1, 1, 1),
(15, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `KdPetugas` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`KdPetugas`, `Nama`, `Alamat`, `username`, `password`, `last_login`) VALUES
(1, 'Cahya1', 'Rumah3', 'test1', 'test1', '2019-05-23'),
(3, 'Siapa', 'Dimana', 'test2', 'test2', '2019-05-08'),
(7, 'asd', 'ddas', '123', 'asd', '2019-05-03'),
(8, 'Cahya Purnama ', 'rumah', 'cahya1', 'cahya1', '2019-05-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`KdAnggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`KdRegister`);

--
-- Indexes for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  ADD PRIMARY KEY (`KdPinjam`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`KdPinjam`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`KdPetugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `KdAnggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `KdRegister` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  MODIFY `KdPinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `KdPinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `KdPetugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
