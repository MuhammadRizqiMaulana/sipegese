-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 05.52
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedungserbaguna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `nama_admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(15) NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `email`, `no_hp`, `foto`, `level`) VALUES
(1, 'andilau', 'andilau', '$2y$10$paI64VCo/jYPUcN92tmgO.cTSc.dTL0U9hOP7xbMuSsProv2jV46C', '', 1234567890, 'qwerty', 'Pemilik'),
(2, 'tono', 'tono', 'tono', '', 987654321, NULL, 'Pemilik'),
(3, 'andi', 'fauzi1805040', '$2y$10$FiUl4ePfPXJJpO/6RmdrvOV5u0SeMelBQjckSOZyPnqC3h5.RlLpW', '', 12345678, '234rf', 'Admin'),
(7, 'Jonie', 'Jon', '$2y$10$FqmTVJvE2.u3Fx5X96ejj.c6VeW7ngQApqpNWlhNjQFjdxfZ9RuRS', 'jonie@gmail.com', 123456890, NULL, 'Admin'),
(8, 'Admin', 'admin', '$2y$10$J9VcLjR/Fg8oFoFgvKZkAODiZTolp71.sWaQUmtAAfsWo3hzTWcUa', '', 12345678, NULL, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(20) NOT NULL,
  `id_gedung` int(20) NOT NULL,
  `ruangan_tambahan` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `perlengkapan_operator` varchar(255) DEFAULT NULL,
  `kursi` varchar(255) DEFAULT NULL,
  `musholah` varchar(255) DEFAULT NULL,
  `fasilitas_tambahan1` varchar(255) DEFAULT NULL,
  `fasilitas_tambahan2` varchar(255) DEFAULT NULL,
  `fasilitas_tambahan3` varchar(255) DEFAULT NULL,
  `fasilitas_tambahan4` varchar(255) DEFAULT NULL,
  `fasilitas_tambahan5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_gedung`, `ruangan_tambahan`, `toilet`, `perlengkapan_operator`, `kursi`, `musholah`, `fasilitas_tambahan1`, `fasilitas_tambahan2`, `fasilitas_tambahan3`, `fasilitas_tambahan4`, `fasilitas_tambahan5`) VALUES
(4, 10, 'Ruangan Rias, Ruangan Salin', 'Toilet laki-laki dan perumpuan', 'Meja dan Kursi Operator', '700 kursi', 'terdapat Mushola', 'Ruangan Full AC', 'Lantai Full Karpet', 'Panggung utama 10 X 7 m', NULL, NULL),
(5, 9, 'Ruangan Rias, Ruangan Salin', 'Toilet laki-laki dan perumpuan', 'Meja dan Kursi Operator', '500 Kursi', 'Terdapat Mushola', 'Ruangan Full AC', 'Lantai Marmer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_gedung` int(11) DEFAULT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `gambar_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_gedung`, `nama_galeri`, `gambar_galeri`) VALUES
(1, 11, 'Gambar Acara Sunatan', '1588706832_item1.png'),
(2, 11, 'Gambar Acara Sunatan', '1588706987_gambar2.jpg'),
(3, 10, 'Gambar Acara Sunatan', '1588707426_item2.png'),
(4, 9, 'Gambar Acara Sunatan', '1588779490_item4.png'),
(5, 10, 'Gambar Acara Sunatan', '1588780423_footer-bg1.jpg'),
(6, 10, 'Gambar Acara Sunatan', '1588781597_counter-bg.jpg'),
(7, 11, 'Gambar Acara Sunatan', '1588781640_cta-bg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(20) NOT NULL,
  `nama_gedung` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(15) NOT NULL,
  `gambar_gedung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `alamat`, `deskripsi`, `harga`, `gambar_gedung`) VALUES
(9, 'Gedung Indramayu', 'Indramayu', 'fasilitas Top', 8000000, 'gambar1.jpg'),
(10, 'Gedung Cirebon', 'Cirebon', 'Cirebon indah', 5000000, '1588702414_gambar12.jpg'),
(11, 'Gedung Kuningan', 'Kuningan', 'fasilitas Top', 10000, '1588701907_item1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(20) NOT NULL,
  `id_penyewaan` varchar(100) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_penyewaan`, `bukti_pembayaran`, `jumlah_bayar`, `status_bayar`) VALUES
(1, 'S-707254776', '1589126032_about-bg2.png', 5000000, 'menunggu Validasi'),
(3, 'S-738604714', '1589126595_counter-bg.jpg', 8000000, 'menunggu Validasi'),
(4, 'S-1908217930', '1589127552_item4.png', 10000, 'menunggu Validasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_penyewaan` varchar(100) NOT NULL,
  `id_user` int(20) DEFAULT NULL,
  `id_gedung` int(20) NOT NULL,
  `id_admin` int(20) DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `tanggal_selesai` date NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `email_penyewa` varchar(50) NOT NULL,
  `status_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`id_penyewaan`, `id_user`, `id_gedung`, `id_admin`, `tanggal_sewa`, `tanggal_selesai`, `nama_acara`, `nama_penyewa`, `email_penyewa`, `status_sewa`) VALUES
('1212345678901', 4, 9, 3, '2020-04-09', '2020-04-11', 'Acara Pernikahan', 'andi', 'andi@gmail.com', 'menunggu konfirmasi'),
('B-12345678901', NULL, 11, NULL, '2020-05-12', '0000-00-00', 'Ngaji', 'Andian', 'Andian@andian.com', 'bayar'),
('S-106837766', NULL, 10, NULL, '2020-04-15', '2020-04-15', 'Acara Pengajian', 'Maulana', 'maulana@gmail.com', 'menunggu'),
('S-1078244669', NULL, 10, NULL, '2020-04-20', '2020-04-20', 'Reonian', 'Jono', 'Jono@jono.com', 'menunggu'),
('S-1667232156', NULL, 9, NULL, '2020-04-19', '2020-04-19', 'hg', 'nbmgh', 'diky@gmail.com', 'menunggu'),
('S-1908217930', NULL, 11, NULL, '2020-04-25', '2020-04-25', 'Rapat', 'Maulana', 'diky@gmail.comm', 'menunggu'),
('S-707254776', NULL, 10, NULL, '2020-04-30', '2020-04-30', 'Rapat', 'Wahid', 'Wahid@wahid.com', 'menunggu'),
('S-738604714', NULL, 9, NULL, NULL, '0000-00-00', 'Acara Rapat', 'Rizqi Maulana', 'rizqi@gmail.com', 'menunggu pembayaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `no_hp`, `alamat`) VALUES
(1, 'Rizqi Maulana', 'rizqijoeni@gmail.com', '$2y$10$bKVAmbYlDqNedV/1f7P48uNivDF3c3iR9pZNX6q4ipS60nWMCPz0a', 987654321, 'cirebon'),
(2, 'rizqi', 'pelanggan@gmail.com', '$2y$10$xKZ.EypkUX2VDeU0V1Ab..ARPaTihrWylqAZQF.F94/u0suELcxNC', 987654321, 'cirebon'),
(3, 'wadon', 'abcd@gmail.com', '$2y$10$I1DVnYHwJz9325j9Ol1SSew3djJvIhRJTr8X./7Rq/2zbNL6UhkDK', 12345678, 'cirebon'),
(4, 'user', 'user@gmail.com', '$2y$10$ak3ZtNr8GpFljfUd9MKWkudjV6umPQq128aiV1Vs2PBTgNHapEe1.', 12345678, 'cirebon');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_gedung` (`id_gedung`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_gedung` (`id_gedung`);

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_penyewaan` (`id_penyewaan`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_gedung` (`id_gedung`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_penyewaan`) REFERENCES `penyewaan` (`id_penyewaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyewaan_ibfk_3` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
