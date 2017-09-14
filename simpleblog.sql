-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2017 at 10:16 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpleblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `waktu`, `tag`) VALUES
(1, 'Atom 21th century Hackable Text Editor', 'Text editor Atom merupakan project open source dari github. dibuat menggunakan electron sehingga meskipun aplikasi desktop tetapi dapat berfungsi layaknya aplikasi web.', '2017-09-12 09:21:46', 'software'),
(5, 'Daun Yang Jatuh Tak Pernah Membenci Angin', 'Daun yang jatuh tak pernah membenci angin, dia membiarkan dirinya jatuh begitu saja. Tak melawan, mengikhlaskan semuanya.\r\n\r\nBahwa hidup harus menerima, penerimaan yang indah. Bahwa hidup harus mengerti, pengertian yang benar. Bahwa hidup harus memahami, pemahaman yang tulus.\r\n\r\nTak peduli lewat apa penerimaan, pengertian, pemahaman itu datang. Tak masalah meski lewat kejadian yang sedih dan menyakitkan. Biarkan dia jatuh sebagaimana mestinya. Biarkan angin merengkuhnya, membawa pergi entah kemana.', '2017-09-13 03:35:26', 'motivasi'),
(6, 'Kecewa', 'Berpikir dan berprasangka positiflah selalu. Maka hal menakjubkan akan terjadi. Sebenarnya siapa yang membuat kita kecewa?\r\nKita sendiri.\r\nKita tidak akan pernah kecewa jika kita selalu mengendalikan harapan. Mau secanggih apapun orang lain memupuk pesonanya, menimbun perhatiannya, kalau kita sempurna mengendalikan hati, no problem at all.\r\n', '2017-09-13 04:05:04', 'Inspirasi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'yusup', '$2y$10$S/KyI2mUsMOhZKUk7aK3QeAFB.41rvk8AucRet3UtdYMel/zQk.Da', 1),
(2, 'yeyet', '$2y$10$hK.wcabUciNvfShESWP8W.9yEDLuHZJSJ9j55cbOL3oslh9mOaHly', 0),
(3, 'alex', '$2y$10$U5EV3xqQmuOF31yQrPlPlO8qUbwStaluELIeZEwoF7EtkVdDvcNaa', 0),
(4, 'dwi', '$2y$10$1S5Mb5yUaA4PymR43ItoWu3/fG2iQRrxayU0ghce5di3UJnccj7mO', 0),
(5, 'imam', '$2y$10$v3NnZNsCweRKXHzSL2bwoeLotWEOveohCMuC5UFV5vRNIs0qXB1hm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
