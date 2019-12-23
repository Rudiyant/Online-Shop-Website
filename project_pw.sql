-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 14.10
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_product` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `nama_pembeli` varchar(64) NOT NULL,
  `no_hp_pembeli` varchar(64) NOT NULL,
  `alamat_pembeli` varchar(255) NOT NULL,
  `metode_bayar` varchar(64) NOT NULL,
  `metode_kirim` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_penjualan`
--

CREATE TABLE `laporan_penjualan` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pembeli` varchar(64) NOT NULL,
  `no_hp_pembeli` varchar(15) NOT NULL,
  `alamat_pembeli` varchar(255) NOT NULL,
  `nama_product` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(5) NOT NULL,
  `warna` varchar(24) NOT NULL,
  `metode_bayar` varchar(64) NOT NULL,
  `metode_kirim` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_penjualan`
--

INSERT INTO `laporan_penjualan` (`id_order`, `id_user`, `nama_pembeli`, `no_hp_pembeli`, `alamat_pembeli`, `nama_product`, `harga`, `ukuran`, `warna`, `metode_bayar`, `metode_kirim`) VALUES
(23, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Syntax Error', 99000, 'M', 'Navy', 'Dana', 'JNE Express'),
(26, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Syntax Error', 99000, 'S', 'Putih', 'Indomart', 'POS Indonesia'),
(27, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Syntax Error', 99000, 'L', 'Navy', 'BRI', 'JNE Express'),
(28, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Callow Nature Black', 99000, 'S', 'Navy', 'ALfamart', 'POS Indonesia'),
(29, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Callow Berbagi', 99000, 'XL', 'Navy', 'BRI', 'POS Indonesia'),
(30, 6, 'Minke', '081923373223', 'Bandung, Jawa Barat, Indonesia', 'Callow Indonesia', 99000, 'XL', 'Hitam', 'BNI', 'POS Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` varchar(12) NOT NULL,
  `nama_product` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `nama_product`, `harga`) VALUES
('Ap001', 'Callow Nature Black', 99000),
('Ap002', 'Syntax Error', 99000),
('Ap003', 'Callow Indonesia', 99000),
('Ap004', 'Callow Berbagi', 99000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `alamat`, `no_hp`, `username`, `password`) VALUES
(6, 'Minke', 'Bandung, Jawa Barat, Indonesia', '081923373223', 'minke', '$2y$10$QE2gZGuFQx3LtYwowNCdS.NakiVn3P2XyRFu/cRAz296WO3yJ7upq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD CONSTRAINT `data_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD CONSTRAINT `laporan_penjualan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
