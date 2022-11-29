-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 04.10
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tess`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dimsum`
--

CREATE TABLE `dimsum` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `help`
--

INSERT INTO `help` (`id`, `pertanyaan`, `jawaban`) VALUES
(8, 'Apakah dimsum dapat di beli?', 'Ya, tentu saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-09-06-092801', 'App\\Database\\Migrations\\CreateMahasiswaTable', 'default', 'App', 1667478616, 1),
(2, '2022-11-03-121546', 'App\\Database\\Migrations\\User', 'default', 'App', 1667478616, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kuantity` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `SubTotal` bigint(100) DEFAULT NULL,
  `transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_order`, `nama_produk`, `foto`, `kuantity`, `harga`, `SubTotal`, `transaksi`) VALUES
(37, 'Dimsum Salmon', '20221025166670163628.png', 1, 10000, 10000, 5),
(38, 'Dimsum Vulcano', '20221025166670166310.png', 1, 10000, 10000, 5),
(39, 'Dimsum Salmon', '20221025166670163628.png', 1, 10000, 10000, 5),
(40, 'Dimsum Sayur', '20221025166670159833.png', 1, 10000, 10000, 5),
(41, 'Dimsum Sosis', '20221025166670156254.png', 1, 10000, 10000, 5),
(42, 'Dimsum Vulcano', '20221025166670166310.png', 1, 10000, 10000, 5),
(43, 'Dimsum Sosis', '20221025166670156254.png', 1, 10000, 10000, 5),
(44, 'Dimsum Sayur', '20221025166670159833.png', 1, 10000, 10000, 5),
(45, 'Dimsum Salmon', '20221025166670163628.png', 1, 10000, 10000, 5),
(46, 'Dimsum Vulcano', '20221025166670166310.png', 1, 10000, 10000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(5) UNSIGNED NOT NULL,
  `npm` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` int(11) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `produk`, `foto`, `desk`, `harga`) VALUES
(2, 'Dimsum Sosis', '20221025166670156254.png', 'Dimsum Ayam ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(3, 'Dimsum Sayur', '20221025166670159833.png', 'Dimsum Sayur ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(4, 'Dimsum Salmon', '20221025166670163628.png', 'Dimsum Salmon ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(5, 'Dimsum Vulcano', '20221025166670166310.png', 'Dimsum Vulcano ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `us`
--

CREATE TABLE `us` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `us`
--

INSERT INTO `us` (`id`, `nama`, `npm`, `foto`) VALUES
(1, 'Nur Setiowati', '2017051013', 'NUK.jpg'),
(2, 'Azzahra Nabila', '2057051020', 'MBOK.jpg'),
(3, 'Alifan Renaldi', '2017051044', 'ALIFAN.jpg'),
(4, 'Saddam Surya', '2017051014', 'RinraJr.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `member_id_user` int(11) UNSIGNED NOT NULL,
  `member_username_user` varchar(200) NOT NULL,
  `member_password_user` varchar(200) NOT NULL,
  `is_admin` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`member_id_user`, `member_username_user`, `member_password_user`, `is_admin`) VALUES
(1, 'RinraJr', '$2y$10$8WpJ6TGeyG1eniCr4WuXFO41RbfBUroMIzMC6sqxrF.PgQcilUnNe', '1'),
(2, 'alif', '$2y$10$8WpJ6TGeyG1eniCr4WuXFO41RbfBUroMIzMC6sqxrF.PgQcilUnNe', '0'),
(3, 'tester', '$2y$10$MTQ5YAclWoZlURB03COafudniF73cJQVfPCCD07ApMkcJ9LwWXDfW', '0'),
(4, 'lipan', '$2y$10$t7IWPNUegcvflEbasJDNLO1/MZST.3Sp.ACQJ.H8y6u7x2qgZ5pYe', '0'),
(5, 'rei', '$2y$10$caNoXz4Vv9O/PVvtLMkh3ujZhGhyMIPKUSFZe3ZZIo2Y.soS/aR/.', '0'),
(6, 'kopma', '$2y$10$WazkLGceACqPkMPzrxAhwuojiw4YAPUphgoSY3TeBipIzB8P01KbK', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dimsum`
--
ALTER TABLE `dimsum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `us`
--
ALTER TABLE `us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`member_id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `us`
--
ALTER TABLE `us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `member_id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
