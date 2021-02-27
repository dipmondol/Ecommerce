-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 01:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_project`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_02_26_230413_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `stock`, `price`, `image_1`, `image_2`, `image_3`, `image_4`, `color`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Crown Athlete 2', 'Toyota', 5, '20000', 'image/1614424679crown-athlete-2014.jpg', NULL, NULL, NULL, 'Black', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad ea provident labore exercitationem ipsam facilis, in omnis. Numquam, cupiditate voluptas, nam ipsam magnam eos ullam neque ea ratione tempora pariatur dicta suscipit excepturi dolore laborum porro deserunt et, minus quisquam. Debitis veniam eligendi ratione illo modi repudiandae natus nostrum optio enim minima aspernatur dolore, placeat molestias non quasi dolorum minus quam doloribus cum quo. Consequuntur quod incidunt libero veniam possimus voluptatem iste commodi voluptate reprehenderit ratione, distinctio perferendis praesentium iure repellat saepe voluptatibus deserunt consequatur excepturi quia nobis at, fugiat quasi accusamus expedita. Quos deserunt ut autem cum odio!', '2021-02-27 05:17:59', '2021-02-27 05:17:59'),
(6, 'Toyota Rise', 'Toyota', 3, '18000', 'image/1614424866toyota.jpg', NULL, NULL, NULL, 'Blue', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad ea provident labore exercitationem ipsam facilis, in omnis. Numquam, cupiditate voluptas, nam ipsam magnam eos ullam neque ea ratione tempora pariatur dicta suscipit excepturi dolore laborum porro deserunt et, minus quisquam. Debitis veniam eligendi ratione illo modi repudiandae natus nostrum optio enim minima aspernatur dolore, placeat molestias non quasi dolorum minus quam doloribus cum quo. Consequuntur quod incidunt libero veniam possimus voluptatem iste commodi voluptate reprehenderit ratione, distinctio perferendis praesentium iure repellat saepe voluptatibus deserunt consequatur excepturi quia nobis at, fugiat quasi accusamus expedita. Quos deserunt ut autem cum odio!', '2021-02-27 05:21:06', '2021-02-27 05:21:06'),
(8, 'Toyota MDY', 'Toyota', 3, '20000', 'image/1614425356Toyota-MDY.jpg', NULL, NULL, NULL, 'grey', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad ea provident labore exercitationem ipsam facilis, in omnis. Numquam, cupiditate voluptas, nam ipsam magnam eos ullam neque ea ratione tempora pariatur dicta suscipit excepturi dolore laborum porro deserunt et, minus quisquam. Debitis veniam eligendi ratione illo modi repudiandae natus nostrum optio enim minima aspernatur dolore, placeat molestias non quasi dolorum minus quam doloribus cum quo. Consequuntur quod incidunt libero veniam possimus voluptatem iste commodi voluptate reprehenderit ratione, distinctio perferendis praesentium iure repellat saepe voluptatibus deserunt consequatur excepturi quia nobis at, fugiat quasi accusamus expedita. Quos deserunt ut autem cum odio!', '2021-02-27 05:29:16', '2021-02-27 05:29:16'),
(9, 'Toyota RWD Crown', 'Toyota', 2, '16000', 'image/1614425472rwd toyota crown.jpg', 'image/1614425472rwd toyota crown.jpg', 'image/1614425472external-content.duckduckgo.com.jpg', NULL, 'white', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad ea provident labore exercitationem ipsam facilis, in omnis. Numquam, cupiditate voluptas, nam ipsam magnam eos ullam neque ea ratione tempora pariatur dicta suscipit excepturi dolore laborum porro deserunt et, minus quisquam. Debitis veniam eligendi ratione illo modi repudiandae natus nostrum optio enim minima aspernatur dolore, placeat molestias non quasi dolorum minus quam doloribus cum quo. Consequuntur quod incidunt libero veniam possimus voluptatem iste commodi voluptate reprehenderit ratione, distinctio perferendis praesentium iure repellat saepe voluptatibus deserunt consequatur excepturi quia nobis at, fugiat quasi accusamus expedita. Quos deserunt ut autem cum odio!', '2021-02-27 05:31:12', '2021-02-27 05:31:12'),
(10, 'Toyota C-HR', 'Toyota', 7, '20000', 'image/1614425564toyota c-hr.jpg', 'image/1614425564crown-athlete-2014.jpg', 'image/1614425564toyota.jpg', 'image/1614425564Toyota-MDY.jpg', 'Red', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ad ea provident labore exercitationem ipsam facilis, in omnis. Numquam, cupiditate voluptas, nam ipsam magnam eos ullam neque ea ratione tempora pariatur dicta suscipit excepturi dolore laborum porro deserunt et, minus quisquam. Debitis veniam eligendi ratione illo modi repudiandae natus nostrum optio enim minima aspernatur dolore, placeat molestias non quasi dolorum minus quam doloribus cum quo. Consequuntur quod incidunt libero veniam possimus voluptatem iste commodi voluptate reprehenderit ratione, distinctio perferendis praesentium iure repellat saepe voluptatibus deserunt consequatur excepturi quia nobis at, fugiat quasi accusamus expedita. Quos deserunt ut autem cum odio!', '2021-02-27 05:32:45', '2021-02-27 05:32:45'),
(11, 'Audi MEB', 'Audi', 2, '50000', 'image/1614428573audi MEB.jpg', 'image/1614428573audi q4.jpg', NULL, NULL, 'Grey', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:22:53', '2021-02-27 06:22:53'),
(12, 'Audi Q4', 'Audi', 3, '45000', 'image/1614428674audi q4.jpg', 'image/1614428674audi MEB.jpg', NULL, NULL, 'Yellow', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:24:34', '2021-02-27 06:24:34'),
(13, 'Audi R8 V10', 'Audi', 1, '100000', 'image/1614428834audi r8 v10.jpg', 'image/1614428834audi sq8.jpg', NULL, NULL, 'Yellow', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:27:14', '2021-02-27 06:27:14'),
(14, 'Audi SQ 8', 'Audi', 2, '90000', 'image/1614428920audi sq8.jpg', 'image/1614428921audi r8 v10.jpg', NULL, NULL, 'Black', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:28:41', '2021-02-27 06:28:41'),
(15, 'Nissan 400z', 'Nissan', 1, '85000', 'image/1614429108nissan 400Z.jpg', 'image/1614429108Nissan Magnite.jpg', NULL, NULL, 'White', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:31:48', '2021-02-27 06:31:48'),
(16, 'Nissan Qashqai', 'Nissan', 2, '55000', 'image/1614429168Nissan Qashqai.jpg', 'image/1614429168Nissan Magnite.jpg', NULL, NULL, 'Grey', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:32:48', '2021-02-27 06:32:48'),
(17, 'Nissan Magnite', 'Nissan', 2, '80000', 'image/1614429233Nissan Magnite.jpg', 'image/1614429233Nissan Qashqai.jpg', NULL, NULL, 'Red', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit est, laboriosam quo totam cum magni voluptatem cupiditate labore amet. Illo animi quos eveniet officiis explicabo, exercitationem labore rem odio perspiciatis fugit, veritatis quae doloribus nisi repudiandae, adipisci officia ratione neque? Cumque atque cupiditate explicabo, corrupti harum maiores placeat eaque ipsa molestiae mollitia possimus odit ea adipisci, eveniet expedita, ducimus nobis soluta reiciendis at aut doloribus necessitatibus saepe? Harum sunt corporis possimus fuga vitae aliquam, sint officiis libero consectetur, quibusdam molestiae necessitatibus illo quia animi eaque quos voluptatibus quidem provident, sit voluptas consequuntur ad neque atque culpa! Natus, iusto? Eveniet, delectus?', '2021-02-27 06:33:53', '2021-02-27 06:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
