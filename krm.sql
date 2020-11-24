-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jul 2020 pada 13.01
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_produk`
--

CREATE TABLE `foto_produk` (
  `idf` int(5) NOT NULL,
  `idp` int(5) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto_produk`
--

INSERT INTO `foto_produk` (`idf`, `idp`, `foto`) VALUES
(111, 11, 'LS19-001-A.jpg'),
(112, 11, 'LS19-001-B.jpg'),
(113, 11, 'LS19-001-C.jpg'),
(114, 11, 'LS19-001-D.jpg'),
(115, 11, 'LS19-001-E.jpg'),
(121, 12, 'LS17-011-A.jpg'),
(122, 12, 'LS17-011-B.jpg'),
(123, 12, 'LS17-011-C.jpg'),
(124, 12, 'LS17-011-D.jpg'),
(125, 12, 'LS17-011-E.jpg'),
(131, 13, 'LS19-005-A.jpg'),
(132, 13, 'LS19-005-B.jpg'),
(133, 13, 'LS19-005-C.jpg'),
(134, 13, 'LS19-005-D.jpg'),
(135, 13, 'LS19-005-E.jpg'),
(141, 14, 'CT18-005-A.jpg'),
(142, 14, 'CT18-005-B.jpg'),
(143, 14, 'CT18-005-C.jpg'),
(144, 14, 'CT18-005-D.jpg'),
(145, 14, 'CT18-005-D1.jpg'),
(146, 14, 'CT18-005-E.jpg'),
(151, 15, 'CT15-011-A.jpg'),
(152, 15, 'CT15-011-B.jpg'),
(153, 15, 'CT15-011-C.jpg'),
(161, 16, 'CT16-015-A.jpg'),
(162, 16, 'CT16-015-B.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idp` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `material` varchar(100) DEFAULT NULL,
  `w` varchar(10) DEFAULT NULL,
  `d` varchar(10) DEFAULT NULL,
  `h` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idp`, `nama`, `material`, `w`, `d`, `h`) VALUES
(11, 'Living Chair (LS19-001)', 'Rattan Croco.', '70', '85', '76'),
(12, 'Living Chair (LS17-011)', 'Wood, Rattan and Bamboo.', '77', '73', '88'),
(13, 'Living Chair (LS19-005)\r\n', 'Rattan and Powder coated iron.', '65', '82', '80'),
(14, 'Coffee Table (CT18-005)', 'Wood and Powder coated iron.', '91', '-', '48'),
(15, 'Coffee Table (CT15-011)', 'Wood and Rattan.', '80', '-', '45'),
(16, 'Coffee Table (CT16-015)', 'Wood and Abacca.', '90', '9', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`idf`),
  ADD KEY `IDP` (`idp`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `idf` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD CONSTRAINT `foto_produk_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `produk` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
