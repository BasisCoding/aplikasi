-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2020 pada 14.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pupr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_kecamatan` int(3) NOT NULL,
  `nama_desa` varchar(128) NOT NULL,
  `alamat_kantor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `id_user`, `id_kecamatan`, `nama_desa`, `alamat_kantor`) VALUES
(15, 'U0200706002', 4, 'baros', 'pasar baros'),
(16, 'U0200706003', 4, 'sindang karya', 'depan lepangan bola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id_image` int(128) NOT NULL,
  `id_proyek` varchar(128) NOT NULL,
  `progres` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id_image`, `id_proyek`, `progres`, `image`) VALUES
(58, 'P0200706001', 'Progres 0%', 's.jpg'),
(59, 'P0200706001', 'Progres 50%', 'sada.jpg'),
(60, 'P0200706001', 'Progres 100%', '2019-06-27.jpg'),
(61, 'P0200706002', 'Progres 0%', 'sasaaa.jpg'),
(62, 'P0200706002', 'Progres 50%', 'default.png'),
(63, 'P0200706002', 'Progres 100%', 'default.png'),
(64, 'P0200707001', 'Progres 0%', 'ssssss.jpg'),
(65, 'P0200707001', 'Progres 50%', 'v1.jpg'),
(66, 'P0200707001', 'Progres 100%', 's1.jpg'),
(67, 'P0200707002', 'Progres 0%', 'v11.jpg'),
(68, 'P0200707002', 'Progres 50%', 'v2.jpg'),
(69, 'P0200707002', 'Progres 100%', 'v12.jpg'),
(70, 'P0200707003', 'Progres 0%', '4.jpg'),
(71, 'P0200707003', 'Progres 50%', 'ss.jpg'),
(72, 'P0200707003', 'Progres 100%', 'ssas.jpg'),
(73, 'P0200707004', 'Progres 0%', '1.jpg'),
(74, 'P0200707004', 'Progres 50%', 'ss1.jpg'),
(75, 'P0200707004', 'Progres 100%', 'ssas1.jpg'),
(76, 'P0200707005', 'Progres 0%', '41.jpg'),
(77, 'P0200707005', 'Progres 50%', '2019-06-271.jpg'),
(78, 'P0200707005', 'Progres 100%', 'asasa.jpg'),
(79, 'P0200707006', 'Progres 0%', 's2.jpg'),
(80, 'P0200707006', 'Progres 50%', 'ss2.jpg'),
(81, 'P0200707006', 'Progres 100%', 'ssas2.jpg'),
(82, 'P0200707007', 'Progres 0%', 'sada1.jpg'),
(83, 'P0200707007', 'Progres 50%', 'ss3.jpg'),
(84, 'P0200707007', 'Progres 100%', 'ssas3.jpg'),
(85, 'P0200707008', 'Progres 0%', 's3.jpg'),
(86, 'P0200707008', 'Progres 50%', 'ss4.jpg'),
(87, 'P0200707008', 'Progres 100%', 'ss5.jpg'),
(88, 'P0200707009', 'Progres 0%', 'ss6.jpg'),
(89, 'P0200707009', 'Progres 50%', 'ssas4.jpg'),
(90, 'P0200707009', 'Progres 100%', 's4.jpg'),
(91, 'P0200707010', 'Progres 0%', 's5.jpg'),
(92, 'P0200707010', 'Progres 50%', 'sada2.jpg'),
(93, 'P0200707010', 'Progres 100%', 'sasaaa1.jpg'),
(94, 'P0200707011', 'Progres 0%', 'sada3.jpg'),
(95, 'P0200707011', 'Progres 50%', 'ss7.jpg'),
(96, 'P0200707011', 'Progres 100%', 'ssas5.jpg'),
(97, 'P0200707012', 'Progres 0%', 's6.jpg'),
(98, 'P0200707012', 'Progres 50%', 'sasaaa2.jpg'),
(99, 'P0200707012', 'Progres 100%', 'ssas6.jpg'),
(100, 'P0200707013', 'Progres 0%', 'ss8.jpg'),
(101, 'P0200707013', 'Progres 50%', 'ss9.jpg'),
(102, 'P0200707013', 'Progres 100%', 'ss10.jpg'),
(103, 'P0200707014', 'Progres 0%', 'ss11.jpg'),
(104, 'P0200707014', 'Progres 50%', 'v121.jpg'),
(105, 'P0200707014', 'Progres 100%', 's7.jpg'),
(106, 'P0200707015', 'Progres 0%', 's8.jpg'),
(107, 'P0200707015', 'Progres 50%', 'sada4.jpg'),
(108, 'P0200707015', 'Progres 100%', 'sasaaa3.jpg'),
(109, 'P0200707016', 'Progres 0%', 'v122.jpg'),
(110, 'P0200707016', 'Progres 50%', 'sada5.jpg'),
(111, 'P0200707016', 'Progres 100%', 'sada6.jpg'),
(112, 'P0200707017', 'Progres 0%', 'v123.jpg'),
(113, 'P0200707017', 'Progres 50%', 'sada7.jpg'),
(114, 'P0200707017', 'Progres 100%', 'ss12.jpg'),
(115, 'P0200707018', 'Progres 0%', 'ss13.jpg'),
(116, 'P0200707018', 'Progres 50%', 'ssas7.jpg'),
(117, 'P0200707018', 'Progres 100%', 'sada8.jpg'),
(118, 'P0200707019', 'Progres 0%', 'v21.jpg'),
(119, 'P0200707019', 'Progres 50%', 'sasaaa4.jpg'),
(120, 'P0200707019', 'Progres 100%', 'ss14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalan`
--

CREATE TABLE `jalan` (
  `id_jalan` varchar(50) NOT NULL,
  `id_desa` int(4) NOT NULL,
  `nama_jalan` varchar(128) NOT NULL,
  `panjang` varchar(20) NOT NULL,
  `lebar` varchar(20) NOT NULL,
  `pekerasan` varchar(128) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `image1` varchar(128) NOT NULL,
  `image2` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jalan`
--

INSERT INTO `jalan` (`id_jalan`, `id_desa`, `nama_jalan`, `panjang`, `lebar`, `pekerasan`, `latitude`, `longitude`, `image1`, `image2`) VALUES
('j020070615001', 15, 'unbaja', '3.000', '3.500', 'beton', '-6.117547098563516', '106.1533414724782', 'man1.jpg', 'man2.jpg'),
('j020070616001', 16, 'jalan martadilaga', '500', '900', 'aspal', '-6.310530762981353', '106.11017966138724', '2017-08-23.jpg', '2019-06-27.jpg'),
('j020070715001', 15, 'Serang pandeglang', '16.000', '20.000', 'hotmik', '-6.245271508447513', '106.12593297800306', '2019-06-271.jpg', 'asasa.jpg'),
('j020070716001', 16, 'serang rangkas', '12.000', '13.300', 'beton', '-6.286497140138681', '106.21042241049076', '4.jpg', '2017-08-231.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_kontruksi`
--

CREATE TABLE `jasa_kontruksi` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasa_kontruksi`
--

INSERT INTO `jasa_kontruksi` (`id_jasa`, `nama_jasa`, `alamat`, `no_tlp`, `email`) VALUES
(3, 'cv. mahardika', 'Unyur, Kec. Serang, Kota Serang, Banten 42111', '0987654323456', 'cvjaya@gmail.com'),
(4, 'cv. putra mandiri', ',Unyur, Kec. Serang, Kota Serang, Banten 42111', '09876543', 'putra@mandiri.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(4, 'cikesal'),
(5, 'petir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_masyarakat`
--

CREATE TABLE `pengaduan_masyarakat` (
  `id_pengaduan` int(11) NOT NULL,
  `id_jalan` varchar(50) NOT NULL,
  `nama_masyarakat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan_masyarakat`
--

INSERT INTO `pengaduan_masyarakat` (`id_pengaduan`, `id_jalan`, `nama_masyarakat`, `email`, `no_tlp`, `image`, `keterangan`) VALUES
(2, 'j020070615001', 'adi', 'adi@gmail.com', '9876543', 'v12.jpg', 'ruksak'),
(3, 'j020070616001', 'adek', 'adek@gmail.com', '9876543', '4.jpg', 'ruksak'),
(4, 'j020070615001', 'fitri', 'fotri@gmail.com', '9876543', '2019-06-27.jpg', 'ruksak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` varchar(25) NOT NULL,
  `id_jalan` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `id_jasa` int(3) NOT NULL,
  `tanggal_kontrak` date NOT NULL,
  `akhir_kontrak` date NOT NULL,
  `pelaksanaan` date NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `anggaran` varchar(20) NOT NULL,
  `tahun_anggaran` int(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `id_jalan`, `kategori`, `id_jasa`, `tanggal_kontrak`, `akhir_kontrak`, `pelaksanaan`, `sumber_dana`, `anggaran`, `tahun_anggaran`, `keterangan`) VALUES
('P0200706001', 'j020070615001', 'Pembangunan', 3, '2019-12-28', '2020-02-27', '2020-01-07', 'desa', '2.000.000.000', 2020, 'pembangunan jalan beton'),
('P0200706002', 'j020070616001', 'Peningkatan', 3, '2019-12-04', '2020-03-04', '2020-01-01', 'desa', '2.000.000.000', 2020, 'pembanguana saluran air'),
('P0200707001', 'j020070715001', 'Pembangunan', 3, '2020-01-01', '2020-06-25', '2020-02-05', 'desa', '200.000.000', 2020, 'ket'),
('P0200707002', 'j020070615001', 'Peningkatan', 4, '2020-01-01', '2020-06-10', '2020-02-08', 'provinsi', '2.000.000.000', 2020, 'ket'),
('P0200707003', 'j020070615001', 'Peningkatan', 4, '2020-02-01', '2020-06-17', '2020-03-09', 'desa', '200.000.000', 2020, 'ket'),
('P0200707004', 'j020070715001', 'Peningkatan', 3, '2020-02-05', '2020-04-09', '2020-03-11', 'kabupaten', '300.000.000', 2020, 'ket'),
('P0200707005', 'j020070615001', 'Pembangunan', 4, '2020-02-01', '2020-06-18', '2020-03-17', 'desa', '200.000.000', 2020, 'ket'),
('P0200707006', 'j020070615001', 'Peningkatan', 3, '2020-03-06', '2020-04-30', '2020-04-15', 'kabupaten', '2.000.000.000', 2020, 'ket'),
('P0200707007', 'j020070615001', 'Peningkatan', 4, '2020-03-12', '2020-05-14', '2020-04-16', 'desa', '300.000.000', 2020, 'ket'),
('P0200707008', 'j020070615001', 'Pembangunan', 3, '2020-04-09', '2020-06-19', '2020-05-04', 'desa', '200.000.000', 2020, 'ket'),
('P0200707009', 'j020070715001', 'Pembangunan', 4, '2020-05-01', '2020-07-09', '2020-05-21', 'provinsi', '3.000.000.000', 2020, 'ket'),
('P0200707010', 'j020070715001', 'Pembangunan', 3, '2020-05-01', '2020-06-30', '2020-05-21', 'desa', '200.000.000', 2020, 'ket'),
('P0200707011', 'j020070615001', 'Pembangunan', 3, '2020-05-01', '2020-06-05', '2020-05-14', 'desa', '200.000.000', 2020, 'ket'),
('P0200707012', 'j020070615001', 'Peningkatan', 3, '2020-06-01', '2020-07-03', '2020-06-07', 'desa', '2.000.000.000', 2020, 'ket'),
('P0200707013', 'j020070615001', 'Peningkatan', 4, '2020-06-01', '2020-07-10', '2020-06-09', 'desa', '20.000.000', 2020, 'ket'),
('P0200707014', 'j020070615001', 'Pembangunan', 3, '2020-06-03', '2020-07-17', '2020-06-07', 'desa', '22.222.222', 2020, 'de'),
('P0200707015', 'j020070615001', 'Peningkatan', 3, '2020-07-01', '2020-08-08', '2020-07-02', 'desa', '200.000.000', 2020, 'ket\r\n'),
('P0200707016', 'j020070615001', 'Peningkatan', 3, '2020-07-01', '2020-08-01', '2020-07-03', 'desa', '500.000.000', 2020, 'ket'),
('P0200707017', 'j020070615001', 'Peningkatan', 3, '2020-07-01', '2020-08-08', '2020-07-01', 'desa', '200.000.000', 2020, 'ket'),
('P0200707018', 'j020070615001', 'Pembangunan', 3, '2020-07-01', '2020-08-08', '2020-07-02', 'desa', '20.000.000', 2020, 'ket'),
('P0200707019', 'j020070615001', 'Pembangunan', 3, '2020-07-01', '2020-08-08', '2020-07-01', 'desa', '2.000.000.000', 2020, 'ket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(25) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `aktif` int(1) NOT NULL,
  `akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_tlp`, `email`, `password`, `date_created`, `aktif`, `akses`) VALUES
('U0200706001', 'waluyo', '098765', 'waluyo@gmail.com', '$2y$10$rcpcdRqqyxHUVgiXUzqDoO/Efv9T8Q4WRSWGahmReb48QvNe8A7.m', 1594058843, 1, 1),
('U0200706002', 'dedeh', '089677740423', 'dedeh@gmail.com', '$2y$10$Uo4eCaek2SGHELGynqCa.eHs5aYy39Aq8QJv8BQ0p/sZbKXREyrw2', 1594059512, 1, 3),
('U0200706003', 'sapri', '098765498765', 'sapri@gmail.com', '$2y$10$YXcOXUPakkGsJDeRb.fdeuqlSAt8/gWViLGxmo7dY4bOHXLH.d9R6', 1594060275, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indeks untuk tabel `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`id_jalan`);

--
-- Indeks untuk tabel `jasa_kontruksi`
--
ALTER TABLE `jasa_kontruksi`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `pengaduan_masyarakat`
--
ALTER TABLE `pengaduan_masyarakat`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `jasa_kontruksi`
--
ALTER TABLE `jasa_kontruksi`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengaduan_masyarakat`
--
ALTER TABLE `pengaduan_masyarakat`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
