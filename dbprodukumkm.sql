-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 02.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprodukumkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `idJen` int(11) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`idJen`, `Nama`, `created_at`, `updated_at`) VALUES
(1, 'Tas', NULL, NULL),
(2, 'Sepatu', NULL, NULL),
(3, 'Perhiasan', NULL, NULL),
(4, 'Busana Muslimah', NULL, '2022-07-03 23:44:19'),
(13, 'Mainan Anak', '2022-07-04 11:55:26', '2022-07-07 00:57:37'),
(16, 'Tas Trendy Aja', '2022-07-07 09:40:38', '2022-07-07 09:40:38'),
(17, 'Jangki Ad - Dausat', '2022-07-07 11:54:26', '2022-07-07 11:54:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `idPem` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `produk_id` int(11) NOT NULL,
  `suplier_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`idPem`, `tanggal`, `jumlah`, `harga`, `produk_id`, `suplier_id`, `created_at`, `updated_at`) VALUES
(9, '2022-06-30', 4, 200000, 8, 1, '2022-06-30 01:39:14', '2022-07-06 08:28:20'),
(10, '2022-07-07', 42, 200000, 8, 1, '2022-07-06 11:16:28', '2022-07-07 10:20:49'),
(11, '2022-07-08', 10, 50000, 9, 1, '2022-07-07 10:24:32', '2022-07-07 10:24:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `jumlah`, `users_id`, `produk_id`, `created_at`, `updated_at`) VALUES
(3, '2022-07-04', 5, 7, 11, NULL, NULL),
(4, '2022-07-04', 4, 7, 8, NULL, NULL),
(5, '2022-07-04', 3, 7, 11, NULL, NULL),
(13, '2022-07-06', 3, 2, 9, NULL, NULL),
(14, '2022-07-06', 4, 7, 11, NULL, NULL),
(15, '2022-07-07', 2, 9, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(4) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `stok`, `harga_beli`, `harga_jual`, `foto`, `jenis_id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(8, NULL, 'Tas Trendy Aja', 45, 120000, 150000, 'product-11.jpg', 1, 'Tas Trendy Cocok dipakai bepergian multifungsi tersedia warna hitam, khaki, hijau, coklat', '2022-06-30 01:09:58', '2022-07-07 00:59:48'),
(9, NULL, 'Sepatu Keren Anak', 50, 120000, 150000, 'product-3.jpg', 2, 'Jilbab cantik buat anak usia 3-6 tahun tersedia warna pink, ungu, hijau, coklat', '2022-06-30 01:11:05', '2022-06-30 01:11:05'),
(11, NULL, 'Baju Cewek Keren', 42, 90000, 120000, 'product-2.jpg', 4, 'Jilbab cantik buat anak usia 3-6 tahun tersedia warna pink, ungu, hijau, coklat', '2022-07-03 16:35:19', '2022-07-07 12:14:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `namasup` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id`, `namasup`, `kota`, `kontak`, `alamat`, `telpon`, `created_at`, `updated_at`) VALUES
(1, 'CV Fikri Gina', 'Majalengka', 'Ibu Eneng Tita', 'Jl. Sudirman No. 12 Majalengka Jawa Barat', '081299094123', NULL, '2022-07-07 00:58:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-11 23:46:37', NULL, '2022-06-11 23:46:37', 1, 'administrator'),
(2, 'aminah', '827ccb0eea8a706c4c34a16891f84e7b', 'aminah@gmail.com', '2022-06-11 23:47:09', NULL, '2022-06-11 23:47:09', 1, 'public'),
(7, 'isepirmansyah', '827ccb0eea8a706c4c34a16891f84e7b', 'isepirmansyah4@gmail.com', '2022-06-30 03:02:33', '2022-06-30 03:02:33', NULL, 1, 'public'),
(9, 'agus', '827ccb0eea8a706c4c34a16891f84e7b', 'agus@gmail.com', '2022-07-06 12:13:59', '2022-07-06 12:13:59', NULL, 1, 'public'),
(11, 'juned', 'd41d8cd98f00b204e9800998ecf8427e', 'juned@gmail.com', '2022-07-07 00:48:27', '2022-07-07 00:55:47', NULL, 1, 'public');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`idJen`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPem`),
  ADD KEY `fk_pembelian_produk1_idx` (`produk_id`),
  ADD KEY `fk_pembelian_suplier1_idx` (`suplier_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `idJen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idPem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_suplier1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_produk` (`idJen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
