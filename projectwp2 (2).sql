-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectwp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(64) CHARACTER SET latin1 NOT NULL,
  `musisi` varchar(64) NOT NULL,
  `artworkpath` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `musisi`, `artworkpath`) VALUES
(10101, 'Selamat Ulang Tahun', 'Nadin', 'nadin.png'),
(10201, 'EXPLORE!', 'Isyana Sarasvati', 'isyana.png'),
(10301, 'Pamungkas, The PeoplePeople', 'Pamungkas', 'pamungkas.jpg'),
(10401, 'OST. Cinta Silver', 'Glenn Fredly', 'glen.jpg'),
(10501, 'Bing Chilling', 'John Xina', 'bing.png'),
(20101, 'Rhoma Irama Edisi Platinum', '201', 'rhoma.png'),
(20201, 'Om Sera, Vol. 2', '202', 'sera.png'),
(20301, 'Sakitnya Tuh Disini', '203', 'cita.jpg'),
(20401, 'Kamu Kamu Kamu', '204', 'ayu.jpg'),
(20501, 'SAYANG', '205', 'via-vallen.jpeg'),
(30101, '9th', '301', 'netral.jpg'),
(30102, 'XXV', '301', 'netral1.jpg'),
(30201, 'Sunset Di Tanah Anarki', '302', 'sid.jpg'),
(30301, 'Energi', '303', 'kotak.jpg'),
(30401, 'Kampungan', '304', 'slank.jpg'),
(40101, 'Ruang Tunggu', '401', 'payung.jpg'),
(40201, 'Taifun', '402', 'taifun.png'),
(40301, 'My Diary', '403', 'mocca.jpg'),
(40401, 'Never Get Better', '404', 'reality.jpg'),
(40501, 'Yang Patah Tumbuh, Yang Hilang Berganti', '405', 'banda.jpg'),
(50101, 'Intersisi', '501', 'musik.jpeg'),
(50201, 'Breakthru', '502', 'nidji.jpg'),
(50301, 'Bintang di Surga', '503', 'aril.jpg'),
(50401, 'Ost. 30 Hari Mencari Cinta', '504', 'sheila.jpg'),
(50501, 'Sesuatu Yang Tertunda', '505', 'padi.jpg'),
(60101, 'Aku Tetap Milikmu', '601', 'rini.jpg'),
(60201, 'Stronger', '602', 'gac.jpeg'),
(60301, 'wanna take this downtown?', '603', 'niki.png'),
(60401, 'Satu Rasa', '604', 'teza.jpg'),
(60501, 'Tak Lagi Sama', '605', 'rahma.jpg'),
(70101, 'Dat $tick', '701', 'rian.jfif'),
(70201, 'Topeng', '702', 'iwa.jpg'),
(70301, 'Online', '703', 'saykoji.jfif'),
(70401, 'For All', '704', 'bondan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `Id_detail` int(11) NOT NULL,
  `Id_transaksi` int(11) NOT NULL,
  `Bukti_Pembayaran` varchar(128) CHARACTER SET latin1 NOT NULL,
  `Tgl_Transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Pop'),
(2, 'Dangdut'),
(3, 'Rock'),
(4, 'Indie'),
(5, 'Alternative'),
(6, 'R&B'),
(7, 'Hip-Hop');

-- --------------------------------------------------------

--
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `id_lagu` int(11) NOT NULL,
  `nama_lagu` varchar(64) CHARACTER SET latin1 NOT NULL,
  `musisi` int(64) NOT NULL,
  `album` int(64) NOT NULL,
  `id_genre` int(24) NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `path` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`id_lagu`, `nama_lagu`, `musisi`, `album`, `id_genre`, `durasi`, `path`) VALUES
(1, 'Bertaut', 101, 10101, 1, '05:20', ''),
(2, 'Tetap Dalam Jiwa', 102, 10201, 1, '03:28', ''),
(3, 'To The Bone', 103, 10301, 1, '05:53', ''),
(4, 'You Are My Everything', 104, 10401, 1, '05:06', ''),
(5, 'Zona Nyaman', 105, 10501, 1, '04:19', ''),
(6, 'Begadang', 201, 20101, 2, '03:07', ''),
(7, 'Jaran Goyang', 202, 20201, 2, '04:19', ''),
(8, 'Sakitnya Tuh Disini', 203, 20301, 2, '03:21', ''),
(9, 'Sambalado', 204, 20401, 2, '05:53', ''),
(10, 'Sayang', 205, 20501, 2, '05:11', ''),
(11, 'Cinta Gila', 301, 30101, 3, '04:42', ''),
(12, 'Jadi Legenda', 302, 30201, 3, '05:03', ''),
(13, 'Pelan-Pelan Saja', 303, 30301, 3, '03:54', ''),
(14, 'Pertempuran Hati', 301, 30102, 3, '03:56', ''),
(15, 'Terlalu Manis', 304, 30401, 3, '04:19', ''),
(16, 'Akad', 401, 40101, 4, '04:16', ''),
(17, 'Bahas Suara', 402, 40201, 4, '04:45', ''),
(18, 'I Remember', 403, 40301, 4, '02:43', ''),
(19, 'Is It The Answer?', 404, 40401, 3, '03:52', ''),
(20, 'Yang Patah Tumbuh, Yang Menghilang Berganti', 405, 40501, 4, '06:32', ''),
(21, 'Dan Bernyanyilah', 501, 50101, 5, '04:33', ''),
(22, 'Disco Lazy Time', 502, 50201, 5, '04:19', ''),
(23, 'Kukatakan Dengan Indah', 503, 50301, 5, '05:36', 'assets\\lagu\\Kukatakan_Dengan_Indah.mp3'),
(24, 'Melompat Lebih Tinggi', 504, 50401, 5, '03:17', 'assets\\lagu\\Melompat Lebih Tinggi.mp3'),
(25, 'Semua Tak Sama', 505, 50501, 5, '05:44', 'assets\\lagu\\Semua_Tak_Sama.mp3'),
(26, 'Bing Chilling', 105, 5, 2, '02 : 30', ''),
(6010101, 'Aku Bukan Boneka', 601, 60101, 6, '03:40', ''),
(6020101, 'Bahagia', 602, 60201, 6, '03:41', ''),
(6030101, 'Lowkey', 603, 60301, 6, '02:51', ''),
(6040101, 'Satu Rasa', 604, 60401, 6, '04:50', ''),
(6050101, 'Tak Lagi Sama', 605, 60501, 6, '03:52', ''),
(7020101, 'Bebas', 702, 70201, 7, '03:45', ''),
(7030101, 'Online', 703, 70301, 7, '03:30', ''),
(7040101, 'Ya Sudahlah', 704, 70401, 7, '04:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `musisi`
--

CREATE TABLE `musisi` (
  `id_musisi` int(11) NOT NULL,
  `musisi` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musisi`
--

INSERT INTO `musisi` (`id_musisi`, `musisi`) VALUES
(101, 'Nadin Amizah'),
(102, 'Isyana Sarasvati'),
(103, 'Pamungkas'),
(104, 'Glenn Fredly'),
(105, 'Fourtwnty'),
(201, 'Rhoma Irama'),
(202, 'Nella Kharisma'),
(203, 'Cita Citata'),
(204, 'Ayu Ting Ting'),
(205, 'Via Vallen'),
(301, 'Netral'),
(302, 'Superman Is Dead'),
(303, 'Kotak'),
(304, 'Slank'),
(401, 'Payung Teduh'),
(402, 'Barasuara'),
(403, 'Mocca'),
(404, 'Reality Club'),
(405, 'Banda Neira'),
(501, 'Musikimia'),
(502, 'Nidji'),
(503, 'Peterpan'),
(504, 'Sheila On 7'),
(505, 'Padi'),
(601, 'Rinni Wulandari'),
(602, 'GAC'),
(603, 'Niki'),
(604, 'Teza Sumendra'),
(605, 'Rahmania Astrini'),
(701, 'Rich Brian'),
(702, 'Iwa K'),
(703, 'Saykoji'),
(704, 'Bondan Prakoso, Fade2Black');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(11) NOT NULL,
  `id_lagu` int(11) NOT NULL,
  `no_playlist` int(11) NOT NULL,
  `playlist_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(12) NOT NULL,
  `nama_role` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `No_Transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vip` int(11) NOT NULL,
  `MetodeBayar` varchar(64) CHARACTER SET latin1 NOT NULL,
  `StatusTransaksi` varchar(64) CHARACTER SET latin1 NOT NULL,
  `TotalTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(64) NOT NULL,
  `nama` varchar(64) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL,
  `image` varchar(258) NOT NULL DEFAULT 'default.jpg',
  `VIP` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `role_id`, `username`, `email`, `nama`, `password`, `is_active`, `image`, `VIP`) VALUES
(13, 2, 'okokok', 'ok@email.com', 'okokok', '$2y$10$/Q2rzAutbAGSgI6NVNhKL.lSbKjktdOkRXm5xiqHOCN6Pn5MM3jfy', 1, 'default.jpg', 0),
(14, 2, 'jjj', 'jjj@email.com', 'jjj', '$2y$10$oIAumApQJFluPEj4tHRS9OBYQg5UKt3rAGcXcUtpbG8jFeTCR3rMS', 1, 'default.jpg', 0),
(15, 1, 'admin', 'admin@email.com', 'Kim Jong Un', '$2y$10$J3p10IUGzM1gUWdQvolvY.sfdVV7wvivNw8Td6dVARbnNsQK3SpEO', 1, 'pro1671177137.jpg', 0),
(16, 2, 'coba1', 'coba1@email.com', 'coba1', '$2y$10$mgCtwz/pBss4bi/kGc79nuJopVjgXWP0KUSVX14/mkgy42RZ9i6fm', 1, 'dead.jpg', 0),
(17, 2, 'mn', 'mn@email.com', 'Coba', '$2y$10$jc3rjhJfq2kFFy1Mq57H3.KehmKq8iybHyujMFtRH1N3hpzyZc2IS', 1, 'pro1671648525.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vip`
--

CREATE TABLE `vip` (
  `id_vip` int(11) NOT NULL,
  `nama_vip` varchar(64) CHARACTER SET latin1 NOT NULL,
  `harga_vip` varchar(28) CHARACTER SET latin1 NOT NULL,
  `bulan` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vip`
--

INSERT INTO `vip` (`id_vip`, `nama_vip`, `harga_vip`, `bulan`) VALUES
(1, 'Basic', 'Rp.50.000', '1 Bulan'),
(2, 'Premium', 'Rp.100.000', '3 Bulan'),
(3, 'Deluxe', 'Rp.350.000', '12 Bulan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_musisi` (`musisi`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`Id_detail`),
  ADD KEY `id_transaksi` (`Id_transaksi`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id_lagu`),
  ADD KEY `musisi` (`musisi`),
  ADD KEY `album` (`album`),
  ADD KEY `genre` (`id_genre`);

--
-- Indexes for table `musisi`
--
ALTER TABLE `musisi`
  ADD PRIMARY KEY (`id_musisi`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`),
  ADD KEY `id_lagu` (`id_lagu`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`No_Transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `VIP` (`VIP`);

--
-- Indexes for table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id_vip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70412;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `Id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id_lagu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7040114;

--
-- AUTO_INCREMENT for table `musisi`
--
ALTER TABLE `musisi`
  MODIFY `id_musisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `No_Transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vip`
--
ALTER TABLE `vip`
  MODIFY `id_vip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `id_transaksi` FOREIGN KEY (`Id_transaksi`) REFERENCES `transaksi` (`No_Transaksi`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `id_lagu` FOREIGN KEY (`id_lagu`) REFERENCES `lagu` (`id_lagu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
