-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2019 pada 14.01
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `username` varchar(20) NOT NULL,
  `komentar` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`username`, `komentar`) VALUES
('0', 'kjvuv'),
('aaa', 'kjv'),
('aaa', 'lonn'),
('aaa', 'mmmmmmmm'),
('aku', 'mnmnm'),
('aku', 'asu'),
('aku', 'Menurut Saya website ini perlu dikembangkan lagi seperti tampilan fungsi2 web, dll.\r\nUntuk kegiatan dalam rangka mencegah tindakan2 porno aksi perlu dilakukan '),
('aaa', 'ajbkxa'),
('aaa', 'sssssssssssss'),
('aaa', 'bfdb'),
('aaa', 'fddddddddddddddddddddddddd'),
('aaa', 'dgdhehh'),
('aaa', 'rhrhrr5ry'),
('aaa', 'dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5'),
('aaa', 'dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5'),
('aaa', 'dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5'),
('aaa', 'dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5 dhhrrhrhrh5hehe5'),
('aaa', 'jkb'),
('aaa', 'mmmm'),
('aaa', 'ww'),
('aaa', 'kj'),
('denis', 'WAHHH'),
('deniss', 'Mantap lur'),
('rizky', 'Mantullurr'),
('rizky', 'hai bro'),
('rendra', 'ok'),
('rendra', 'mantapbetul'),
('rendra', 'wahahw'),
('rendra', 'WAHAHAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftaran`, `id_user`) VALUES
(107, 21),
(111, 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(3, 'Melani', 'aaaaaaaaa', '', '9a1edacbd8ce551077530c7c1099cbd1'),
(4, 'Melani', 'aaaaaaaaam', '', '4e7ae17e23acc7e89e69d111d7ed6b55'),
(5, 'Christy', 'aku', '', '89ccfac87d8d06db06bf3211cb2d69ed'),
(6, 'Melani', 'akuasqaas', '', '47bce5c74f589f4867dbd57e9ca9f808'),
(7, 'Melani', 'akuasqs', '', '457391c9c82bfdcbb4947278c0401e41'),
(9, 'aku', 'asu', '', '102a6ed6587b5b8cb4ebbe972864690b'),
(10, 'aku', 'asua', '', '102a6ed6587b5b8cb4ebbe972864690b'),
(11, 'aku', 'asuaz', '', '25ed1bcb423b0b7200f485fc5ff71c8e'),
(12, 'cina', 'cina', '', '24d9cb9562d07d09499898d5c6849844'),
(13, 'Melani', 'irrfanganteng', 'adaapaaaa2ini8@gmail.com', 'a7625f2478bba123a77864a797cd05ec'),
(14, 'Nurchol', 'irrfan.x1', '', 'c4ca4238a0b923820dcc509a6f75849b'),
(15, 'Nurchol', 'irrfan.x1a', '', '4c56ff4ce4aaf9573aa5dff913df997a'),
(16, 'Popy', 'irrfan.xl', '', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(17, 'Raihan na', 'irrfan.xx12', 'adaapa2ini8@gmil.com', '4c56ff4ce4aaf9573aa5dff913df997a'),
(18, 'Nurchol', 'qqqqq', '', '4c56ff4ce4aaf9573aa5dff913df997a'),
(19, 'Melani', 'qqqqqqqqqq', '', 'e6c1ef25b5bcaaacc285489eae10d5e1'),
(21, 'denis', 'denis', 'rizkydhar@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a'),
(24, 'sdk', 'scs', 'scs@gm.com', '83401f0f0dec1447d0f5197df673521c'),
(27, 'denis', 'rizky', 'adaapaaa2ini8@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
