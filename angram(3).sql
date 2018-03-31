-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2013 at 03:20 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `last_used` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `nama`, `last_used`) VALUES
('kiki', 'khairani', 'Kiki Khairani', '2013-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `isi_berita` text NOT NULL,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `berita`
--


-- --------------------------------------------------------

--
-- Table structure for table `blog_active_guests`
--

CREATE TABLE IF NOT EXISTS `blog_active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_active_guests`
--

INSERT INTO `blog_active_guests` (`ip`, `timestamp`) VALUES
('127.0.0.1', 1360537301);

-- --------------------------------------------------------

--
-- Table structure for table `blog_active_users`
--

CREATE TABLE IF NOT EXISTS `blog_active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_active_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `blog_banned_users`
--

CREATE TABLE IF NOT EXISTS `blog_banned_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_banned_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `blog_users`
--

CREATE TABLE IF NOT EXISTS `blog_users` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `umur` int(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `timestamp` int(11) unsigned NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_users`
--

INSERT INTO `blog_users` (`nama`, `username`, `password`, `userid`, `userlevel`, `email`, `umur`, `alamat`, `timestamp`) VALUES
('kiki khairani', 'kikikhay', 'bff306dbef47b38914a4177cd76ca440', '33610a41a9a2021b29cbe10c66f56e82', 1, 'kiki_khay@yahoo.com', 59, 'jl. Serdang No.437', 1360537090),
('Kiki Rani', 'kiranti', '0b17fa1f195f191e804bb8429eee9e36', '94947deaba6b93d1c43c2c06c5a1a6d9', 1, 'kiki_khay@yahoo.com', 49, 'jl. kasuiari no 21', 1360456488),
('edrian hadinata', 'edrian', '80fe7ff48c3308c1276e5a78b5538652', 'eb3e856cdab25f9fa78e4503244b1166', 1, 'edrianhadinata@yahoo.com', 29, 'jl. binjai km 15 Diski', 1360524508),
('joni', 'jojoni', '789986071d6d1f17930625523e1c74cf', 'e4740b8f783b51db8d2f7d93fc795eb8', 1, 'joniahmad@yahoo.com', 23, 'jl. binjai km 13 pasar kecil', 1360511379),
('supanda', 'supanda', '2547f63202281c0cdec0c32697f4b165', '1dbfd4f5eb6af4ec3c34e1c10fdc237a', 1, 'arisupanda@yahoo.com', 23, 'jl. Veteran no 35 medan', 1360514072),
('lila margaretha', 'lilmarga', '00af08a7aab37d91df6bcab317cdc36b', '3a0a9b092259cb6973566bea711f966e', 1, 'lilmarga@yahoo.com', 32, 'jl. Serdang No.437', 1360515073);

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE IF NOT EXISTS `kata` (
  `id_kata` int(11) NOT NULL AUTO_INCREMENT,
  `kata` varchar(15) NOT NULL,
  `clue` varchar(20) NOT NULL,
  `id_admin` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kata`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`id_kata`, `kata`, `clue`, `id_admin`) VALUES
(1, 'mouse', 'komputer', 'kiki'),
(2, 'harddisk', 'komputer', 'kiki'),
(3, 'kangguru', 'hewan', 'kiki'),
(4, 'ram', 'komputer', 'kiki'),
(5, 'anggrek', 'bunga', 'kiki'),
(6, 'anggur', 'buah-buahan', 'kiki'),
(7, 'kuda', 'hewan', 'kiki'),
(8, 'buaya', 'hewan', 'kiki'),
(9, 'kambing', 'hewan', 'kiki'),
(10, 'ayam', 'hewan', 'kiki'),
(11, 'bebek', 'hewan', 'kiki'),
(12, 'kucing', 'hewan', 'kiki'),
(13, 'musang', 'hewan', 'kiki'),
(14, 'matahari', 'bunga', 'kiki'),
(15, 'mawar', 'bunga', 'kiki'),
(16, 'melati', 'bunga', 'kiki'),
(17, 'kamboja', 'bunga', 'kiki'),
(18, 'laron', 'hewan', 'kiki'),
(19, 'bakung', 'bunga', 'kiki');

-- --------------------------------------------------------

--
-- Table structure for table `skor`
--

CREATE TABLE IF NOT EXISTS `skor` (
  `id` varchar(20) NOT NULL,
  `skor` int(4) NOT NULL,
  `last_used` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skor`
--

INSERT INTO `skor` (`id`, `skor`, `last_used`) VALUES
('kikikhay', 85, '2013-02-10'),
('kikikhay', 55, '2013-02-10'),
('lilmarga', 70, '2013-02-10'),
('lilmarga', 85, '2013-02-10'),
('supanda', 85, '2013-02-10'),
('jojoni', 115, '2013-02-10'),
('edrian', 30, '2013-02-09'),
('kiranti', 70, '2013-02-09'),
('', 55, '2013-02-10'),
('kikikhay', 115, '2013-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `umur` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
