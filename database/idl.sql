-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 05:36 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.1.27-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idl`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_ormawa` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `id_ormawa`, `nama_kategori`, `kategori`) VALUES
(1, 1, 'PPL', 'ppl'),
(2, 1, 'Game', 'game'),
(3, 1, 'Bisnis TIK', 'bisnis-tik'),
(4, 1, 'Smart City', 'smart-city'),
(5, 2, 'UI/UX', 'uiux'),
(6, 2, 'IOT', 'iot'),
(7, 3, 'CPC', 'cpc'),
(8, 3, 'CTF', 'ctf'),
(9, 1, 'PKM-GO', 'pkm-go');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`nim`, `nama`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
('172410101040', 'Arif Febrian', 'arafas@gmail.com', '0812231231231', NULL, NULL),
('172410101041', 'Miqdad Yanuar Farcha', 'miqdad.farcha@gmail.com', '085233156353', NULL, NULL),
('172410101047', 'Allyvio Yonim Mahardika', 'ally.vio@gmail.com', '084123123123', NULL, NULL),
('172410101081', 'Verdy Bangkrut', 'verdy@gmail.com', '085213123111', '2019-03-17 09:40:57', '2019-03-17 09:40:57'),
('172410101087', 'Ervian Akbar M.', 'ervian.ge@gmail.com', '086462626262', '2019-03-17 09:40:40', '2019-03-17 09:40:40'),
('172410101096', 'Bintang Fajrul', 'bintang@gmail.coom', '182371923', '2019-03-18 02:12:11', '2019-03-18 02:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_05_082237_create_kategoris_table', 1),
(4, '2019_03_05_082314_create_mahasiswas_table', 1),
(5, '2019_03_05_082342_create_ormawas_table', 1),
(6, '2019_03_05_082350_create_submissions_table', 1),
(7, '2019_03_05_082357_create_pesertas_table', 1),
(8, '2019_03_05_082404_create_finalists_table', 1),
(9, '2019_03_05_082404_create_posts_table', 1),
(10, '2019_03_05_082404_create_tims_table', 1),
(11, '2019_03_05_092508_relation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ormawas`
--

CREATE TABLE `ormawas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ormawa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ormawas`
--

INSERT INTO `ormawas` (`id`, `nama_ormawa`) VALUES
(1, 'Himasif'),
(2, 'Himatif'),
(3, 'Laos');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `id_tim` int(11) UNSIGNED NOT NULL,
  `babak` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `id_tim`, `babak`, `nilai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 1001, NULL, '2019-03-16 21:03:37', NULL),
(2, 1, 1, 30, '2019-03-16 20:27:41', '2019-03-16 20:59:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesertas`
--

CREATE TABLE `pesertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tim` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesertas`
--

INSERT INTO `pesertas` (`id`, `nim`, `id_tim`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '172410101040', 1, NULL, '2019-03-13 10:23:52', NULL),
(2, '172410101041', 1, NULL, '2019-03-13 10:23:52', NULL),
(3, '172410101047', 1, NULL, '2019-03-13 10:23:52', NULL),
(4, '172410101040', 3, NULL, NULL, NULL),
(5, '172410101041', 3, NULL, NULL, NULL),
(6, '172410101087', 4, '2019-03-17 09:42:30', '2019-03-17 09:42:30', NULL),
(7, '172410101041', 4, '2019-03-17 09:42:30', '2019-03-17 09:42:30', NULL),
(8, '172410101081', 4, '2019-03-17 09:42:30', '2019-03-17 09:42:30', NULL),
(9, '172410101096', 5, '2019-03-18 02:17:46', '2019-03-18 02:17:46', NULL),
(10, '172410101041', 5, '2019-03-18 02:17:46', '2019-03-18 02:17:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:23:59', '2019-03-07 23:23:59', NULL),
(2, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:36', '2019-03-07 23:37:36', NULL),
(3, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:36', '2019-03-07 23:37:36', NULL),
(4, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:37', '2019-03-07 23:37:37', NULL),
(5, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:38', '2019-03-07 23:37:38', NULL),
(6, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:38', '2019-03-07 23:37:38', NULL),
(7, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:39', '2019-03-07 23:37:39', NULL),
(8, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:39', '2019-03-07 23:37:39', NULL),
(9, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:40', '2019-03-08 00:21:02', '2019-03-08 07:21:02'),
(10, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:40', '2019-03-07 23:37:40', NULL),
(11, 'Test', 'Lorem Ipsum', 1, '2019-03-07 23:37:41', '2019-03-08 00:20:58', '2019-03-08 07:20:58'),
(12, 'asdasd', 'asda', 1, '2019-03-07 23:51:40', '2019-03-08 00:20:53', '2019-03-08 07:20:53'),
(13, 'lorem Ups', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar vulputate magna ut blandit. Donec orci purus, rhoncus ut eros vel, bibendum pretium dolor. Cras vehicula, velit a rhoncus euismod, arcu tortor scelerisque turpis, eu ornare libero odio id magna. Morbi accumsan fringilla maximus. Praesent felis diam, consectetur sed dui non, tempus sagittis lorem. Vivamus semper dignissim justo, eget dictum risus scelerisque non. Phasellus aliquam ac ante at imperdiet. Quisque convallis ut dui in cursus. Vivamus fermentum vulputate libero, et vestibulum sem elementum id. Sed a finibus lacus. Quisque venenatis ultricies enim, imperdiet consectetur leo iaculis non. Nunc ultrices nulla eget tincidunt consequat. Fusce vitae auctor augue. Proin ligula neque, laoreet nec urna id, pellentesque aliquet metus.\r\n\r\nAliquam tellus dolor, sodales eget risus at, luctus fermentum augue. Nullam mollis vehicula congue. Donec congue vehicula pulvinar. Praesent a posuere dolor, sit amet laoreet metus. Suspendisse ac metus ut libero aliquam pretium. Aenean efficitur efficitur arcu at suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium molestie purus eget pellentesque. Curabitur mollis velit at tellus ultricies, et porttitor est consequat. Maecenas pulvinar ipsum nec mauris fermentum, a elementum quam porttitor.\r\n\r\nMaecenas nec sodales eros. Aliquam ullamcorper enim id fermentum molestie. Nam scelerisque lectus vitae ante luctus consequat. Aenean placerat lobortis nisi, id tincidunt mi consequat eu. Proin at ex mauris. Nam id consequat dolor. Fusce non arcu eget urna luctus rhoncus. Nunc ornare hendrerit sapien, quis laoreet risus.', 1, '2019-03-07 23:53:56', '2019-03-08 00:20:50', '2019-03-08 07:20:50'),
(14, 'Test', 'Lorem Ipsumasdasda <p> asjdlaskdjalksdj</p>', 3, '2019-03-08 00:23:44', '2019-03-12 21:42:04', NULL),
(15, 'testing lagi', '<p><span style=\"font-size: 24px;\"><strong>SELAMAT DATANG</strong></span></p><p><span style=\"font-size: 12px;\"><strong>selamat datang</strong></span></p><p><span style=\"font-size: 12px;\"><strong><img src=\"blob:http://localhost:8000/01baee0a-410f-466a-8209-f4a6d0f1ffbd\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></strong></span><br></p>', 1, '2019-03-21 00:40:55', '2019-03-21 00:50:42', NULL),
(16, 'Gatau', '<p><br></p><table style=\"width: 100%;\"><tbody><tr><td style=\"width: 16.6667%;\">No</td><td style=\"width: 16.6667%;\">Nama</td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td></tr><tr><td style=\"width: 16.6667%;\">1</td><td style=\"width: 16.6667%;\">Miqdad</td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td><td style=\"width: 16.6667%;\"><br></td></tr></tbody></table>', 1, '2019-03-21 01:52:11', '2019-03-21 01:52:11', NULL),
(17, 'nyoba gambar doang', '<p><img src=\"http://localhost:8000/uploads/files/a.png\" data-updated_at=\"2019-03-21 09:05:14\" data-created_at=\"2019-03-21 09:05:14\" data-name=\"name\" data-id=\"1\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p>', 1, '2019-03-21 02:31:00', '2019-03-21 02:31:00', NULL),
(18, 'Ahsiyap', '<p><img src=\"http://localhost:8000/uploads/files/GRcw67Jk0LW0uh5XIfgzDeRwdXEiJjOAZhUSzKx3.jpeg\" data-updated_at=\"2019-03-21 10:14:48\" data-created_at=\"2019-03-21 10:14:48\" data-id=\"3\" style=\"width: 989px;\" class=\"fr-fic fr-dib\"></p><p>AHSIYAPPPPPPPPPPP</p>', 1, '2019-03-21 03:15:16', '2019-03-21 03:17:20', '2019-03-21 10:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `url`, `thumb`, `tag`, `name`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:8000/uploads/files/a.png', 'http://localhost:8000/uploads/files/a.png', 'lomba', 'name', '2019-03-21 09:05:14', '2019-03-21 09:05:14'),
(2, '/uploads/files/blaIO4ibFrmsORKzCt0jAcIjePmRvfXIOdhccktk.png', '/uploads/files/blaIO4ibFrmsORKzCt0jAcIjePmRvfXIOdhccktk.png', NULL, NULL, '2019-03-21 10:10:33', '2019-03-21 10:10:33'),
(3, '/uploads/files/GRcw67Jk0LW0uh5XIfgzDeRwdXEiJjOAZhUSzKx3.jpeg', '/uploads/files/GRcw67Jk0LW0uh5XIfgzDeRwdXEiJjOAZhUSzKx3.jpeg', NULL, NULL, '2019-03-21 10:14:48', '2019-03-21 10:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tim` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `id_tim`, `judul`, `file_path`, `data`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 1, 'Ini Contoh', 'submission-1/qBFWgZhHUsOEehVKXkMajlwlrZbLoGioX5U7aFEV.pdf', NULL, '14f2a87f9377f94ea1af8fe562da8be4', '2019-03-20 10:37:55', '2019-03-20 10:37:55', NULL),
(9, 1, 'test', 'submission-2', NULL, '14f2a87f9377f94ea1af8fe562da8be4', '2019-03-20 10:58:29', '2019-03-20 10:58:29', NULL),
(10, 1, 'test', 'submission-2/zkdv1RnJQiZDtOAkPl6Stx2GL3aEC7uQoshQk8PL.zip', NULL, '14f2a87f9377f94ea1af8fe562da8be4', '2019-03-20 11:01:39', '2019-03-20 11:01:39', NULL),
(11, 1, 'test', 'submission-2/gSpk7nCokU3uvN66QFJzaaK8lV4CeRF9rtwzMpzf.zip', NULL, '14f2a87f9377f94ea1af8fe562da8be4', '2019-03-20 11:04:17', '2019-03-20 11:04:17', NULL),
(12, 1, 'test', 'submission-2/a5BD2Ft9hcUT1pS6CqccloUTYUZT3UzNuopoRbi1.zip', '{\"link\":\"pokok link yutup\"}', '14f2a87f9377f94ea1af8fe562da8be1', '2019-03-20 11:04:31', '2019-03-20 11:04:31', NULL),
(13, 1, 'Final saya', 'submission-final/Vn0zEBpFuvU8xD2soKgiJdfykqUgrz4wcuM1aLRK.zip', NULL, '14f2a87f9377f94ea1af8fe562da8be1', '2019-03-20 11:24:05', '2019-03-20 11:24:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tims`
--

CREATE TABLE `tims` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submissionid` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `babak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tims`
--

INSERT INTO `tims` (`id`, `id_kategori`, `nama_tim`, `ketua_tim`, `submissionid`, `babak`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Hello Team', '172410101041', '14f2a87f9377f94ea1af8fe562da8be1', 3, NULL, '2019-03-14 06:36:11', NULL),
(3, 8, 'Hello Team_2', '172410101040', 'a247592ed513b8d50da879791fbff941', 3, NULL, '2019-03-17 02:37:06', NULL),
(4, 8, 'Tim Hoha', '172410101087', '16879d97dbe978f3447135c88bb07a9d', 1, '2019-03-17 09:42:30', '2019-03-17 09:42:30', NULL),
(5, 1, 'Sesuatu', '172410101096', '6e2640b97e3c7edcd63295880f9096b5', 1, '2019-03-18 02:17:46', '2019-03-18 02:17:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ormawa` int(10) UNSIGNED NOT NULL,
  `profile_pict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `id_ormawa`, `profile_pict`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Himasif', 'himasif@ilkom.com', NULL, '$2y$10$8oKrY5GljNl4sofFj7gO1ucbBvZePlQFaYoUg3KPHlDAX..SRt.AG', 1, 'assets/admin/img/profile/himasif.png', 't83bZnvNjY6q2ibJJGweHkM07fJLW9hpylQMLQPfFdaJrmd2crQBfEI6JPDy', NULL, NULL),
(2, 'Himatif', 'himatif@ilkom.com', NULL, '$2y$10$7S/T8wJY5i3IGt0CvSNEhOqpj7CPGpNKVOgHXWDqttb.zRQmBrx9G', 2, 'assets/admin/img/profile/himasif.png', NULL, NULL, NULL),
(3, 'LaOS', 'laos@ilkom.com', NULL, '$2y$10$jrkhAmjpnpO5l2bzEHKMFu0NRkS4ukXlbhZQf4JdfGKfp72xkb8b2', 3, 'assets/admin/img/profile/laos.png', 't3vFBsD67MwTmZYwNRkq49H2qcSaY7ECXcsFYBKyhXKqpG2oMQKb5BnpqK9P', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategoris_id_ormawa_foreign` (`id_ormawa`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawas`
--
ALTER TABLE `ormawas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tim` (`id_tim`);

--
-- Indexes for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesertas_nim_foreign` (`nim`),
  ADD KEY `pesertas_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id_user_foreign` (`id_user`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_id_tim_foreign` (`id_tim`);

--
-- Indexes for table `tims`
--
ALTER TABLE `tims`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tims_id_kategori_foreign` (`id_kategori`),
  ADD KEY `ketua_tim` (`ketua_tim`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_ormawa_foreign` (`id_ormawa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ormawas`
--
ALTER TABLE `ormawas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tims`
--
ALTER TABLE `tims`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD CONSTRAINT `kategoris_id_ormawa_foreign` FOREIGN KEY (`id_ormawa`) REFERENCES `ormawas` (`id`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tims` (`id`);

--
-- Constraints for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD CONSTRAINT `pesertas_id_tim_foreign` FOREIGN KEY (`id_tim`) REFERENCES `tims` (`id`),
  ADD CONSTRAINT `pesertas_nim_foreign` FOREIGN KEY (`nim`) REFERENCES `mahasiswas` (`nim`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_id_tim_foreign` FOREIGN KEY (`id_tim`) REFERENCES `tims` (`id`);

--
-- Constraints for table `tims`
--
ALTER TABLE `tims`
  ADD CONSTRAINT `tims_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`),
  ADD CONSTRAINT `tims_ketua_tim_foreign` FOREIGN KEY (`ketua_tim`) REFERENCES `mahasiswas` (`nim`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_ormawa_foreign` FOREIGN KEY (`id_ormawa`) REFERENCES `ormawas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
