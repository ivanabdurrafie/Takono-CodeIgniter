-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 08:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takono-client`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `id_siswa` int(50) DEFAULT NULL,
  `id_guru` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`, `id_siswa`, `id_guru`) VALUES
(1, 'admin', '', 'e5bc62b374076985e23e4f588466ae9c', 'admin', NULL, 0),
(7, '1841720001', 'ia@gmail.com', 'af64da974ff29fc764fa8a3633e60316', 'siswa', 1841720001, NULL),
(9, '1841720002', 'ok@gmail.com', '9f84c616af83c2eec320c0b744a76bb2', 'siswa', 1841720002, NULL),
(20, '1841720209', 'Abdulloh@gmail.com', 'c2076537c02a9a20bd91bdda81db2b57', 'siswa', 1841720209, NULL),
(21, '1841720125', 'ahmadfalahs@gmail.com', '5f6da5c4025f602eac648e27fa614501', 'siswa', 1841720125, NULL),
(22, '1841720098', 'defika@gmail.com', 'a08c3ef41bfd6fc6468736219ec61066', 'siswa', 1841720098, NULL),
(23, '1841720126', 'elawid@gmail.com', '030f170ff0a9495efb216f2b51a243da', 'siswa', 1841720126, NULL),
(24, '184172002', 'bagus@gmail.com', 'd68a76c569e16b35d63994c2a25c3270', 'siswa', 184172002, NULL),
(25, '1841720194', 'haidarsakti@gmail.com', 'a43250584f9df1974994707dbd6a49bb', 'siswa', 1841720194, NULL),
(26, '1841720155', 'fana@gmail.com', '6281bc62a78fc1a365aa73a58fe637cc', 'siswa', 1841720155, NULL),
(27, '1841720193', 'lintangk@gmail.com', 'd4ff76c4503496138577f6e2de0d8f8d', 'siswa', 1841720193, NULL),
(28, '1941723006', 'pandudwi@gmail.com', '73d6ae920f09a9c227f772584b318f30', 'siswa', 1941723006, NULL),
(30, '100100', 'aepgumiwa@gmail.com', 'b9c93fbdfd2a30504e05d3b0b32307da', 'guru', NULL, 100100),
(31, '100101', 'nuraenigum@gmail.com', '732e276ec85f14e663faef225d06612c', 'guru', NULL, 100101),
(32, '100102', 'asepsu@gmail.com', '54ebda338d716822a078aff56186feb6', 'guru', NULL, 100102),
(33, '100103', 'idafarida@gmail.com', '9ae26ff44c264acff8eab84ba2950d57', 'guru', NULL, 100103),
(34, '100104', 'arisgumilar@gmail.com', '72984ef85cbebaaebafca8a0492b9dc4', 'guru', NULL, 100104),
(35, '100105', 'ettysugi@gmail.com', '123faaaa42b5d902e8873b4b91a21acf', 'guru', NULL, 100105),
(36, '100106', 'ruhiyattaufik@gmail.com', '207239975ffa605b92e0312d3cbc9e7b', 'guru', NULL, 100106),
(37, '100107', 'hastutitri@gmail.com', 'e69097620706baef0ab8fe7e4cf3f019', 'guru', NULL, 100107),
(38, '100108', 'melanilida@gmail.com', '0292f9ba6f4dffff4e4c4bf66328163a', 'guru', NULL, 100108),
(39, '100109', 'heryuliasih@gmail.com', '7e02bfbd51cc4b43f4e3fca06284ca85', 'guru', NULL, 100109),
(40, '100110', 'entinsurya@gmail.com', 'c097dd6de04c016a247b324a2c1c1a49', 'guru', NULL, 100110),
(41, '100111', 'sudiadididi@gmail.com', '261c19dfc27dc09f892a460947bf4940', 'guru', NULL, 100111),
(42, '1841720170', 'ary@gmail.com', '1f84737efbfb0ecf4d3a5af273dbfe17', 'siswa', 1841720170, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
