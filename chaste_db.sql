-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Nov 2023 pada 03.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaste_db`
--
CREATE DATABASE IF NOT EXISTS `chaste_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `chaste_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_bulan`
--

DROP TABLE IF EXISTS `d_bulan`;
CREATE TABLE `d_bulan` (
  `d_bulan_id` int(11) NOT NULL,
  `h_bulan_id` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL COMMENT 'biaya karyawan, listrik, air, dst',
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_kamar`
--

DROP TABLE IF EXISTS `d_kamar`;
CREATE TABLE `d_kamar` (
  `d_kamar_id` int(11) NOT NULL,
  `h_kamar_id` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_menu`
--

DROP TABLE IF EXISTS `d_menu`;
CREATE TABLE `d_menu` (
  `d_menu_id` int(11) NOT NULL,
  `h_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_tenant`
--

DROP TABLE IF EXISTS `d_tenant`;
CREATE TABLE `d_tenant` (
  `d_tenant_id` int(11) NOT NULL,
  `h_tenant_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_bulan`
--

DROP TABLE IF EXISTS `h_bulan`;
CREATE TABLE `h_bulan` (
  `h_bulan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_kamar`
--

DROP TABLE IF EXISTS `h_kamar`;
CREATE TABLE `h_kamar` (
  `h_kamar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyewa_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_menu`
--

DROP TABLE IF EXISTS `h_menu`;
CREATE TABLE `h_menu` (
  `h_menu_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL COMMENT 'Guest isi NULL',
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `h_tenant`
--

DROP TABLE IF EXISTS `h_tenant`;
CREATE TABLE `h_tenant` (
  `h_tenant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyewa_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `kamar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyewa_id` int(11) DEFAULT NULL COMMENT 'boleh NULL',
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL COMMENT 'boleh NULL',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenant`
--

DROP TABLE IF EXISTS `tenant`;
CREATE TABLE `tenant` (
  `tenant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `penyewa_id` int(11) DEFAULT NULL COMMENT 'boleh NULL',
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL COMMENT 'boleh NULL',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ktp` varchar(16) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` enum('1','2','3') DEFAULT '1' COMMENT '1 = admin | 2 = penyewa tenant | 3 = penyewa kamar',
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama`, `ktp`, `foto`, `role`, `no_telp`, `email`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', '$2y$12$hwySAInr8Hg/j.jEx8.PPehRfEa8tyeDEKkYa7946dGLoWpa47d/y', NULL, NULL, NULL, '1', NULL, 'admin@gmail.com', '2023-11-19 05:50:07', '2023-11-19 05:50:07', 1),
(8, 'kambing', '$2y$12$ULvL4yGraLsfmmP4OUQzd.9G8x2pFeCvdhtPh1rdhxF64LG4Enbre', NULL, NULL, NULL, '2', NULL, 'kambing@gmail.com', '2023-11-20 19:29:12', '2023-11-20 19:29:12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_bulan`
--
ALTER TABLE `d_bulan`
  ADD PRIMARY KEY (`d_bulan_id`),
  ADD KEY `h_bulan_id` (`h_bulan_id`);

--
-- Indeks untuk tabel `d_kamar`
--
ALTER TABLE `d_kamar`
  ADD PRIMARY KEY (`d_kamar_id`),
  ADD KEY `h_kamar_id` (`h_kamar_id`),
  ADD KEY `kamar_id` (`kamar_id`);

--
-- Indeks untuk tabel `d_menu`
--
ALTER TABLE `d_menu`
  ADD PRIMARY KEY (`d_menu_id`),
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `h_menu_id` (`h_menu_id`);

--
-- Indeks untuk tabel `d_tenant`
--
ALTER TABLE `d_tenant`
  ADD PRIMARY KEY (`d_tenant_id`),
  ADD KEY `h_tenant_id` (`h_tenant_id`),
  ADD KEY `tenant_id` (`tenant_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `h_bulan`
--
ALTER TABLE `h_bulan`
  ADD PRIMARY KEY (`h_bulan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `h_kamar`
--
ALTER TABLE `h_kamar`
  ADD PRIMARY KEY (`h_kamar_id`),
  ADD KEY `h_kamar_ibfk_1` (`user_id`),
  ADD KEY `penyewa_id` (`penyewa_id`);

--
-- Indeks untuk tabel `h_menu`
--
ALTER TABLE `h_menu`
  ADD PRIMARY KEY (`h_menu_id`),
  ADD KEY `h_menu_ibfk_2` (`tenant_id`),
  ADD KEY `h_menu_ibfk_3` (`customer_id`);

--
-- Indeks untuk tabel `h_tenant`
--
ALTER TABLE `h_tenant`
  ADD PRIMARY KEY (`h_tenant_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `penyewa_id` (`penyewa_id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kamar_id`),
  ADD KEY `kamar_ibfk_1` (`penyewa_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_ibfk_1` (`user_id`),
  ADD KEY `tenant_id` (`tenant_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`),
  ADD KEY `user_id` (`penyewa_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `d_bulan`
--
ALTER TABLE `d_bulan`
  MODIFY `d_bulan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d_kamar`
--
ALTER TABLE `d_kamar`
  MODIFY `d_kamar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d_menu`
--
ALTER TABLE `d_menu`
  MODIFY `d_menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d_tenant`
--
ALTER TABLE `d_tenant`
  MODIFY `d_tenant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `h_bulan`
--
ALTER TABLE `h_bulan`
  MODIFY `h_bulan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `h_kamar`
--
ALTER TABLE `h_kamar`
  MODIFY `h_kamar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `h_menu`
--
ALTER TABLE `h_menu`
  MODIFY `h_menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `h_tenant`
--
ALTER TABLE `h_tenant`
  MODIFY `h_tenant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `kamar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `d_bulan`
--
ALTER TABLE `d_bulan`
  ADD CONSTRAINT `d_bulan_ibfk_1` FOREIGN KEY (`h_bulan_id`) REFERENCES `h_bulan` (`h_bulan_id`);

--
-- Ketidakleluasaan untuk tabel `d_kamar`
--
ALTER TABLE `d_kamar`
  ADD CONSTRAINT `d_kamar_ibfk_1` FOREIGN KEY (`h_kamar_id`) REFERENCES `h_kamar` (`h_kamar_id`),
  ADD CONSTRAINT `d_kamar_ibfk_2` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`kamar_id`);

--
-- Ketidakleluasaan untuk tabel `d_menu`
--
ALTER TABLE `d_menu`
  ADD CONSTRAINT `d_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `d_menu_ibfk_3` FOREIGN KEY (`h_menu_id`) REFERENCES `h_menu` (`h_menu_id`);

--
-- Ketidakleluasaan untuk tabel `d_tenant`
--
ALTER TABLE `d_tenant`
  ADD CONSTRAINT `d_tenant_ibfk_1` FOREIGN KEY (`h_tenant_id`) REFERENCES `h_tenant` (`h_tenant_id`),
  ADD CONSTRAINT `d_tenant_ibfk_2` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`tenant_id`);

--
-- Ketidakleluasaan untuk tabel `h_bulan`
--
ALTER TABLE `h_bulan`
  ADD CONSTRAINT `h_bulan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `h_kamar`
--
ALTER TABLE `h_kamar`
  ADD CONSTRAINT `h_kamar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `h_kamar_ibfk_2` FOREIGN KEY (`penyewa_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `h_menu`
--
ALTER TABLE `h_menu`
  ADD CONSTRAINT `h_menu_ibfk_2` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`tenant_id`),
  ADD CONSTRAINT `h_menu_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `h_tenant`
--
ALTER TABLE `h_tenant`
  ADD CONSTRAINT `h_tenant_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `h_tenant_ibfk_2` FOREIGN KEY (`penyewa_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`penyewa_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`tenant_id`) REFERENCES `tenant` (`tenant_id`);

--
-- Ketidakleluasaan untuk tabel `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `tenant_ibfk_1` FOREIGN KEY (`penyewa_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `tenant_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
