-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2017 at 11:01 AM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.1.8-1+ubuntu17.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eviterlaprison`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `category_id`, `title`, `body`, `draft`) VALUES
(2, 1, 'Exemple n°1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(3, 4, 'Un autre exemple', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(4, 2, 'Cahier des charges', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(5, 1, 'bonjour', 'il était une fois Ahmadou', 0),
(6, 4, 'prout', 'il est beau ahmadou', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Copyright'),
(2, 'Copyleft'),
(4, 'GNU'),
(5, 'Open Source'),
(6, 'Droit d\'auteur');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(2, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(3, 'ahmadou', 'ah.gueye@laposte.net', 'coucou', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(4, 'ahmadou', 'ah.gueye@laposte.net', 'coucou', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(5, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(6, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(7, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(8, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(9, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(10, 'ahmadou', 'ah.gueye@laposte.net', 'Licences', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum id laborum maiores omnis qui, quod sunt ut voluptas. Corporis earum esse ex ipsam, labore maxime nemo nulla provident sit.'),
(11, 'ahmadou', 'ah.gueye@laposte.net', 'la vie', 'j\'aime la vie');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'rinja', 'rinja', 'ah.gueye@laposte.net', 'ah.gueye@laposte.net', 1, NULL, '$2y$13$Wssw8fqYrEMLAFpunwKS9uyd2jK3yO6CN26ooImlAJg65uLs.8uPO', '2017-08-03 16:16:23', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(2, 'User', 'user', 'coucou@gmail.com', 'coucou@gmail.com', 1, NULL, '$2y$13$4qtsGCuIMOKDKRlbNhUuX.bAGulH5To/9lkYv.3QmlsrbyYsaIYb6', '2017-07-31 12:22:51', NULL, NULL, 'a:0:{}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BA5AE01D12469DE2` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD CONSTRAINT `FK_BA5AE01D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
