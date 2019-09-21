-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2019 at 09:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `besisq`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` bigint(20) NOT NULL,
  `perusahaan_id` bigint(20) NOT NULL,
  `nama_beasiswa` varchar(200) NOT NULL,
  `slug_beasiswa` varchar(200) DEFAULT NULL,
  `ipk` int(11) DEFAULT NULL,
  `point_ipk` int(11) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `point_gaji` int(11) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `point_usia` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `perusahaan_id`, `nama_beasiswa`, `slug_beasiswa`, `ipk`, `point_ipk`, `gaji`, `point_gaji`, `usia`, `point_usia`, `updated_at`, `created_at`) VALUES
(7577, 90816, 'beasiswa P', 'beasiswa-p', 4, 50, 2000000, 20, NULL, NULL, '2019-09-20 22:56:25', '2019-09-20 22:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `updated_at`, `created_at`) VALUES
(1, 'ilmu komputer', '2019-09-20 01:11:26', '0000-00-00 00:00:00'),
(2, 'fmipa', '2019-09-20 01:11:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(50) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk` int(11) NOT NULL,
  `jenis_jurusan` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `nama_lengkap`, `nohp`, `semester`, `ipk`, `jenis_jurusan`, `updated_at`, `created_at`) VALUES
(2, 13378, 'alfian ferdiansyah', '0822756756', 5, 4, 'Saintek', '2019-09-06 08:16:37', '2019-09-06 08:16:37'),
(3, 15315, 'tania', '0822756756', 5, 4, 'Saintek', '2019-09-06 08:17:45', '2019-09-06 08:17:45'),
(4, 16631, 'terimalah', '213', 5, 4, 'Saintek', '2019-09-16 18:58:09', '2019-09-16 18:58:09'),
(5, 12107, 'test', '0822756756', 5, 3, 'Saintek', '2019-09-17 09:25:01', '2019-09-17 09:25:01'),
(6, 10520, 'zzzz', '1', 5, 3, 'Saintek', '2019-09-17 09:37:04', '2019-09-17 09:37:04'),
(7, 17922, 'ijul', '08912213312', 5, 4, 'Saintek', '2019-09-19 02:36:08', '2019-09-19 02:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `jenis_perusahaan` varchar(200) NOT NULL,
  `nama_penanggung` varchar(200) NOT NULL,
  `email_perusahaan` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `user_id`, `nama_perusahaan`, `jenis_perusahaan`, `nama_penanggung`, `email_perusahaan`, `status`, `updated_at`, `created_at`) VALUES
(3, 99321, 'Djarum Super', 'Koperasi', 'alfian ferdiansyah', '', '', '2019-09-07 03:50:29', '2019-09-07 03:50:29'),
(4, 90816, 'Bca Mandiri', 'Bank', 'alim', '', '', '2019-09-07 08:47:23', '2019-09-07 08:47:23'),
(5, 72420, 'Bank', 'Bank', 'izul', 'p@gmail.com', 'terverifikasi', '2019-09-17 06:38:18', '2019-09-17 06:08:14'),
(6, 83286, 'Semen Holcim', 'Bank', 'henry', 'h@gmail.com', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 06:24:09'),
(7, 84148, 'Djarum Mild', 'Bank', 'alfian ferdiansyah', 'jarum11@gmail.com', 'terverifikasi', '2019-09-17 09:35:29', '2019-09-17 09:30:03'),
(9, 86118, 'kopi', 'Koperasi', 'alfian', 'kopi@gmail.com', 'terverifikasi', '2019-09-19 02:45:07', '2019-09-19 02:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) NOT NULL,
  `fakultas_id` bigint(20) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `fakultas_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'sistem informasi', '2019-09-20 01:12:00', '0000-00-00 00:00:00'),
(2, 1, 'teknologi informasi', '2019-09-20 01:12:00', '0000-00-00 00:00:00'),
(3, 1, 'informatika', '2019-09-20 01:13:15', '0000-00-00 00:00:00'),
(4, 2, 'kimia', '2019-09-20 01:13:15', '0000-00-00 00:00:00'),
(5, 2, 'fisika', '2019-09-20 01:13:15', '0000-00-00 00:00:00'),
(6, 2, 'biologi', '2019-09-20 01:13:15', '0000-00-00 00:00:00'),
(7, 2, 'matematika', '2019-09-20 01:13:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(999, 'admin', 'si_admin', 'admin@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, NULL, NULL),
(10520, 'mahasiswa', 'zzzz', 'z@gmail.com', NULL, '$2y$10$nmSp0iG2jJoN7hb2jStn2eiUW6knhy7gg4MdPSaU1opgo/hdMJkrS', NULL, '2019-09-17 09:37:05', '2019-09-17 09:37:05'),
(12107, 'mahasiswa', 'test', 'alfian000000111@gmail.com', NULL, '$2y$10$wSYKPQOWb1APuO7CqIwFYuuBFPcMA0fOsdt3H2WC6Cz0/ub5yOGvW', NULL, '2019-09-17 09:25:02', '2019-09-17 09:25:02'),
(13378, 'mahasiswa', 'alfian ferdiansyah', 'alfian000000@gmail.com', NULL, '$2y$10$ZAe46.ZdokP/7NvVWOc/8.ZTN8.7Es46GFpapkx1XI.RQZ5FCdBfu', NULL, '2019-09-06 08:16:37', '2019-09-06 08:16:37'),
(15315, 'mahasiswa', 'tania', 'tania@gmail.com', NULL, '$2y$10$wNUWNMlbF3/ao8qOibCv8e7fnHrR6iaYPEgIb.mQ6gazImlkWycNG', NULL, '2019-09-06 08:17:45', '2019-09-06 08:17:45'),
(16631, 'mahasiswa', 'terimalah', 'aw@gmail.com', NULL, '$2y$10$Mx9mpb9WHJeMUVX7DW2LNuSUQzfJYnXT0Wf/QZyetdRUeoIo2Inh2', NULL, '2019-09-16 18:58:09', '2019-09-16 18:58:09'),
(17922, 'mahasiswa', 'ijul', 'zzzz@gmail.com', NULL, '$2y$10$yZHnWYYfIzmi51ctPVkGkO2BUdzNbTnn59tPd71Nxp3tIB0jgRx2y', NULL, '2019-09-19 02:36:09', '2019-09-19 02:36:09'),
(72420, 'perusahaan', 'Bank', 'p@gmail.com', NULL, '$2y$10$UBaak6bPRoXaZbIsbwhOr.GhwS8f7XmjArRH16O8r4AhxuWyC8fie', NULL, '2019-09-17 06:38:19', '2019-09-17 06:38:19'),
(83286, 'perusahaan', 'Semen Holcim', 'h@gmail.com', NULL, '$2y$10$NqadedV7/p1XUjZSq.BFK.k0/5m3bbVds0z4spVId02KjohBbpfKy', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(84148, 'perusahaan', 'Djarum Mild', 'jarum11@gmail.com', NULL, '$2y$10$oNuTLvB0PNjEIzLKWrbkiubfIE9tMzAVTsDv.8XBP9bc5zYtvRaE6', NULL, '2019-09-17 09:35:29', '2019-09-17 09:35:29'),
(86118, 'perusahaan', 'kopi', 'kopi@gmail.com', NULL, '$2y$10$VfpH2/3u1vLnUN/FF2v0v.7QbTqPmtWUjRMJ8zWgqS4Ul/K5oI8ma', NULL, '2019-09-19 02:45:07', '2019-09-19 02:45:07'),
(90816, 'perusahaan', 'Bca Mandiri', 'bca@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, '2019-09-07 08:47:24', '2019-09-07 08:47:24'),
(99321, 'perusahaan', 'Djarum Super', 'jarum@gmail.com', NULL, '$2y$10$OAwZElmdUl0rO4Zq1BixruX8.Xov6wx4ae5UI.j97CL7S0hG6PRQS', NULL, '2019-09-07 03:50:29', '2019-09-07 03:50:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perusahaan_id` (`perusahaan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fakultas_id` (`fakultas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99322;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD CONSTRAINT `beasiswa_ibfk_1` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`user_id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
