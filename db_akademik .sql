-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 17.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `jenis_kelamin`, `alamat`, `telp`, `email`, `photo`) VALUES
(5, '0618019401', 'Pungkas Subarkah, M.Kom', 'Laki Laki', 'Wangon timur', '085729564889', 'pungkas@amikompurwokerto.ac.id', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'FIK', 'Fakultas Ilmu Komputer'),
(2, 'FBIS', 'Fakultas Bisnis dan Ilmu Sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_akad` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `kode_matakuliah` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(40, 14, '19SA1313', 'PSIFW025', 'A'),
(41, 14, '19SA1313', 'PSIFW030', 'A'),
(42, 14, '19SA1313', 'PSIFW026', 'A'),
(43, 14, '19SA1313', 'PSIFW019', 'A'),
(44, 14, '19SA1313', 'PSIFW007', 'A'),
(45, 14, '19SA1313', 'PSIFW028', 'B+'),
(46, 14, '19SA1313', 'PSIFW029', 'A'),
(54, 14, '19SA1317', 'PSIFW025', 'A'),
(55, 14, '19SA1317', 'PSIFW030', 'A'),
(56, 14, '19SA1317', 'PSIFW026', 'B'),
(57, 14, '19SA1317', 'PSIFW019', 'B+'),
(58, 14, '19SA1317', 'PSIFW007', 'B+'),
(59, 14, '19SA1317', 'PSIFW028', 'B+'),
(60, 14, '19SA1317', 'PSIFW029', 'B+');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`, `email`, `nama_prodi`, `photo`) VALUES
(5, '19SA1313', 'Muhammad Shohihusysyani', 'Laki Laki', 'Purwokerto', '2001-06-11', 'Purwokerto', '085701241187', 'mhs@harapan.bunda.ac.id', 'Informatika', 'mhs4.png'),
(10, '19SA1317', 'Moh Imam Roza R', 'Laki Laki', 'Tegal', '1999-06-15', 'Tegal Kota', '085701241186', 'mhs@harapan.bunda.ac.id', 'Informatika', 'mhs9.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(50) NOT NULL,
  `nama_matakuliah` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`) VALUES
('PSIFW025', 'Temu Balik Informasi', 3, 7, 'Informatika'),
('PSIFW030', 'Digital Forensic', 3, 7, 'Informatika'),
('PSIFW026', 'Interaksi Manusia dan Komputer', 2, 7, 'Informatika'),
('PSIFW019', 'Pemrograman web', 3, 7, 'Informatika'),
('PSIFW007', 'Pemrograman Game Mobile', 3, 7, 'Informatika'),
('PSIFW028', 'Metode Pengembangan Perangkat Lunak', 3, 7, 'Informatika'),
('PSIFW029', 'Keamanan Informasi dan Jaringan', 3, 7, 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(50) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(6, 'IF', 'Informatika', 'Fakultas Ilmu Komputer'),
(7, 'SI', 'Sistem Informasi', 'Fakultas Ilmu Komputer'),
(9, 'BD', 'Bisnis Digital', 'Fakultas Bisnis Dan Ilmu Sosial'),
(10, 'TI', 'Teknologi Informasi', 'Fakultas Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL,
  `tahun_akademik` varchar(50) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
(14, '2022/2023', '1', 'Aktif'),
(15, '2022/2023', '2', 'Non Akktif'),
(16, '2019/2020', '1', 'Aktif'),
(17, '2019/2020', '2', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transkrip_nilai`
--

CREATE TABLE `transkrip_nilai` (
  `id_transkrip` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `kode_matakuliah` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transkrip_nilai`
--

INSERT INTO `transkrip_nilai` (`id_transkrip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, '19SA1313', 'PSIFW026', 'A'),
(2, '19SA1313', 'PSIFW025', 'A'),
(3, '19SA1313', 'PSIFW030', 'A'),
(4, '19SA1313', 'PSIFW019', 'A'),
(5, '19SA1313', 'PSIFW007', 'A'),
(6, '19SA1313', 'PSIFW028', 'B+'),
(7, '19SA1313', 'PSIFW029', 'A'),
(8, '19SA1317', 'PSIFW025', 'A'),
(9, '19SA1317', 'PSIFW030', 'A'),
(10, '19SA1317', 'PSIFW026', 'B'),
(11, '19SA1317', 'PSIFW019', 'B+'),
(12, '19SA1317', 'PSIFW007', 'B+'),
(13, '19SA1317', 'PSIFW028', 'B+'),
(14, '19SA1317', 'PSIFW029', 'B+');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','users','dosen') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'N', ''),
(9, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'users', 'N', ''),
(10, '19sa1313', 'e10adc3949ba59abbe56e057f20f883e', 'mhs@harapan.bunda.ac.id', 'admin', 'N', ''),
(14, '0618019401', 'e10adc3949ba59abbe56e057f20f883e', 'dosen@harapan.bunda.ac.id', 'dosen', 'N', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, '19sa1317', 'e10adc3949ba59abbe56e057f20f883e', 'roza@gmail.com', 'users', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indeks untuk tabel `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  ADD PRIMARY KEY (`id_transkrip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  MODIFY `id_transkrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
