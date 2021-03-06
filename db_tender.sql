-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 03:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tender`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `foto` varchar(30) NOT NULL,
  `admin_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `full_name`, `email`, `jenis_kelamin`, `foto`, `admin_created`) VALUES
(28, 'adminsatu', '372c95307bc910fc2107cdbad1ea4cef', 'I Wayan Rudi Eri Astawan', 'rudiastawan43@gmail.com', 'Perempuan', 'DSC_0005-min.JPG', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas_produsen`
--

CREATE TABLE `tb_berkas_produsen` (
  `username_produsen` varchar(32) NOT NULL,
  `cv` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(10) NOT NULL,
  `id_tender` int(10) NOT NULL,
  `image_large` varchar(50) NOT NULL,
  `image_medium` varchar(50) NOT NULL,
  `image_small` varchar(50) NOT NULL,
  `image_konten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambaran`
--

CREATE TABLE `tb_gambaran` (
  `id_gambaran` int(10) NOT NULL,
  `gambaran_head` varchar(50) NOT NULL,
  `gambaran_des` text NOT NULL,
  `gambaran_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gambaran`
--

INSERT INTO `tb_gambaran` (`id_gambaran`, `gambaran_head`, `gambaran_des`, `gambaran_gambar`) VALUES
(1, 'PT. E-tendering Bali', 'An old man lived in the village. He was one of the most unfortunate people in the world. The whole village was tired of him; he was always gloomy, he constantly complained and was always in a bad mood.\r\n\r\nThe longer he lived, the more bile he was becoming and the more poisonous were his words. People avoided him because his misfortune became contagious. It was even unnatural and insulting to be happy next to him.\r\n\r\nHe created the feeling of unhappiness in others.\r\n\r\nBut one day, when he turned eighty years old, an incredible thing happened. Instantly everyone started hearing the rumour that the Old Man had become happy, he doesn???t complain about anything anymore, always smiles, and even his face is freshened up.\r\n\r\nThe whole village gathered together. The villagers asked the old man about what happened.\r\n\r\nHe answers, ???Nothing special. Eighty years I???ve been chasing happiness, and it was useless. And then I decided to live without happiness and just enjoy life. That???s why I???m happy now.???', '5380903168_8e957fa1a5_b8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inbox`
--

CREATE TABLE `tb_inbox` (
  `id_inbox` int(10) NOT NULL,
  `inbox_nama` varchar(100) NOT NULL,
  `inbox_email` varchar(50) NOT NULL,
  `inbox_subjek` varchar(100) NOT NULL,
  `inbox_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama`, `alamat`, `no_tlp`, `kota`, `email`, `username`, `password`, `foto`) VALUES
(1, 'Nusa Nugraha', 'Denpasar', '081337470421', 'Denpasar', 'nusanugraha@gmail.com', 'konsumensatu', '438dd14736a6e60a05c3032e024fcac8', 'img-default.png'),
(2, 'Putu Wisnu Arya', 'Marga', '061236754897', 'Tabanan', 'putuwisnu@gmail.com', 'konsumendua', 'ea45685712afa2795d024b17e74f2231', 'DSC_0010F_(1)1.jpg'),
(3, 'Putu Yoga Handika', 'Gianyar', '081456753478', 'Gianyar', 'putuyoga@gmail.com', 'konsumentiga', '10e5840e53741db816a53e944a666217', 'img-default.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `kontak_des` text NOT NULL,
  `kontak_alamat` varchar(100) NOT NULL,
  `kontak_tlp` varchar(15) NOT NULL,
  `kontak_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `kontak_des`, `kontak_alamat`, `kontak_tlp`, `kontak_email`) VALUES
(1, 'E-tendering emberikan kemudahan bagi masyarakat yang memerlukan dan mencarikerajinan khas bali dengan sistem tender dengan berbagai kemudahan', 'Jln. Wisnu Marga, Bali', '088862271855', 'etender@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lamaran`
--

CREATE TABLE `tb_lamaran` (
  `id_lamaran` int(11) NOT NULL,
  `id_tender` int(10) NOT NULL,
  `username_produsen` varchar(16) NOT NULL,
  `rab` varchar(64) NOT NULL,
  `tawaran_harga` float NOT NULL,
  `id_status_lamaran` int(10) NOT NULL,
  `lamaran_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lamaran`
--

INSERT INTO `tb_lamaran` (`id_lamaran`, `id_tender`, `username_produsen`, `rab`, `tawaran_harga`, `id_status_lamaran`, `lamaran_dibuat`) VALUES
(18, 12, 'produsensatu', '1622598447surat_kuasa_fix[1].pdf', 1000, 3, '0000-00-00'),
(19, 13, 'produsensatu', '1623029073surat_kuasa_fix[1].pdf', 10000, 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(225) NOT NULL,
  `log_author` varchar(200) NOT NULL,
  `log_desc` varchar(200) NOT NULL,
  `log_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `log_author`, `log_desc`, `log_created`) VALUES
(71, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 02:45:47'),
(72, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 02:47:22'),
(73, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 02:49:58'),
(74, 'Ni Wayan Eri Sandriani', 'Admin hapus data slider', '2021-05-27 02:54:19'),
(75, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:36:51'),
(76, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:40:45'),
(77, 'Ni Wayan Eri Sandriani', 'Admin hapus data slider', '2021-05-27 03:40:56'),
(78, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:41:25'),
(79, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:41:49'),
(80, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:42:30'),
(81, 'Ni Wayan Eri Sandriani', 'Admin hapus data slider', '2021-05-27 03:42:56'),
(82, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:43:23'),
(83, 'Ni Wayan Eri Sandriani', 'Admin menambahkan data slider', '2021-05-27 03:43:55'),
(84, 'Ni Wayan Eri Sandriani', 'Admin hapus data slider', '2021-05-27 03:44:22'),
(85, 'Ni Wayan Eri Sandriani', 'Admin hapus data slider', '2021-05-27 03:44:34'),
(86, 'Ni Wayan Eri Sandriani', 'Admin merubah data profile admin', '2021-08-05 07:43:36'),
(87, 'Ni Wayan Eri Sandriani', 'Admin merubah data profile admin', '2021-08-05 07:45:28'),
(88, 'Ni Wayan Eri Sandriani', 'Admin merubah data profile admin', '2021-08-05 07:54:14'),
(89, 'I Wayan Rudi Eri Astawan', 'Admin merubah data profile admin', '2021-08-07 14:31:40'),
(90, 'I Wayan Rudi Eri Astawan', 'Admin merubah data profile admin', '2021-08-07 14:31:52'),
(91, 'I Wayan Rudi Eri Astawan', 'Admin merubah data profile admin', '2021-08-07 14:32:06'),
(92, 'I Wayan Rudi Eri Astawan', 'Admin merubah data profile admin', '2021-08-07 14:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengerjaan_tender`
--

CREATE TABLE `tb_pengerjaan_tender` (
  `pengerjaan_id` int(10) NOT NULL,
  `id_tender` int(10) NOT NULL,
  `id_konsumen` int(10) NOT NULL,
  `id_produsen` int(10) NOT NULL,
  `pengerjaan_judul` varchar(150) NOT NULL,
  `pengerjaan_deskripsi` text NOT NULL,
  `pengerjaan_deadline` date NOT NULL,
  `pengerjaan_gambar` varchar(50) NOT NULL,
  `pengerjaan_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengerjaan_tender`
--

INSERT INTO `tb_pengerjaan_tender` (`pengerjaan_id`, `id_tender`, `id_konsumen`, `id_produsen`, `pengerjaan_judul`, `pengerjaan_deskripsi`, `pengerjaan_deadline`, `pengerjaan_gambar`, `pengerjaan_status`) VALUES
(29, 12, 2, 1, 'image testing', 'image testing', '2021-06-08', 'f64aada671a69ac87ff5de42d1dc37eb.JPG', 'Dikerjakan'),
(30, 13, 2, 1, 'event onchange', 'testing', '2021-06-15', '1367ddb4c4e9f8ae27cca3a7e90e9827.jpg', 'Dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permintaan_pengerjaan`
--

CREATE TABLE `tb_permintaan_pengerjaan` (
  `id_permintaan` int(10) NOT NULL,
  `id_tender` int(10) NOT NULL,
  `id_konsumen` int(10) NOT NULL,
  `id_produsen` int(10) NOT NULL,
  `permintaan_judul` varchar(150) NOT NULL,
  `permintaan_deskripsi` text NOT NULL,
  `permintaan_deadline` date NOT NULL,
  `permintaan_gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_permintaan_pengerjaan`
--

INSERT INTO `tb_permintaan_pengerjaan` (`id_permintaan`, `id_tender`, `id_konsumen`, `id_produsen`, `permintaan_judul`, `permintaan_deskripsi`, `permintaan_deadline`, `permintaan_gambar`) VALUES
(12, 12, 1, 1, 'image testing', 'image testing', '2021-06-08', '1dd03af86608834d995984372b3bd45a.JPG'),
(13, 13, 2, 1, 'event onchange', 'testing', '2021-06-15', '1367ddb4c4e9f8ae27cca3a7e90e9827.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(10) NOT NULL,
  `post_judul` varchar(100) NOT NULL,
  `post_isi` longtext NOT NULL,
  `post_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_gambar` varchar(40) NOT NULL,
  `post_author` varchar(40) NOT NULL,
  `post_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produsen`
--

CREATE TABLE `tb_produsen` (
  `id_produsen` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_pt` varchar(30) NOT NULL,
  `deskripsi_pt` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kode_npwp` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `proyek_selesai` int(11) NOT NULL,
  `tgl_bergabung` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produsen`
--

INSERT INTO `tb_produsen` (`id_produsen`, `nama`, `nama_pt`, `deskripsi_pt`, `alamat`, `kota`, `no_tlp`, `email`, `kode_npwp`, `username`, `password`, `foto`, `proyek_selesai`, `tgl_bergabung`) VALUES
(1, 'I Wayan Rudi Eri Astawan', 'Rdunity Group', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '', '', '087862271855', 'rudiastawan43@gmail.com', '123456789012345', 'produsensatu', '2d65c265494f110efd591c804a33f9f3', 'img-default.png', 0, '2021-05-28 01:42:42'),
(2, 'Ni Wayan Eri Sandriani', 'Sandriani Group', '', '', '', '087564345987', 'erisandriani05@gmail.com', '123456789012345', 'produsendua', 'e06b795a70fa308134c3dbd73d82d6c0', 'img-default.png', 0, '2021-05-27 14:59:57'),
(3, 'I Made Widiarta', 'Widiarta Group', '', '', '', '087685642167', 'widiarta@gmail.com', '123456789012345', 'produsentiga', '2dad4260a8b3c4db1dddcab39475bb8a', 'img-default.png', 0, '2021-05-27 15:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_progres_pengerjaan`
--

CREATE TABLE `tb_progres_pengerjaan` (
  `progres_id` int(10) NOT NULL,
  `id_produsen` int(10) NOT NULL,
  `pengerjaan_id` int(10) DEFAULT NULL,
  `id_konsumen` int(10) NOT NULL,
  `progres_keterangan` varchar(200) NOT NULL,
  `progres_pengerjaan` int(3) NOT NULL,
  `progres_gambar1` varchar(40) NOT NULL,
  `progres_gambar2` varchar(40) NOT NULL,
  `progres_gambar3` varchar(40) NOT NULL,
  `progres_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_progres_pengerjaan`
--

INSERT INTO `tb_progres_pengerjaan` (`progres_id`, `id_produsen`, `pengerjaan_id`, `id_konsumen`, `progres_keterangan`, `progres_pengerjaan`, `progres_gambar1`, `progres_gambar2`, `progres_gambar3`, `progres_tanggal`) VALUES
(29, 1, 29, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed ', 0, 'e4beeb8895d8196ee0859f5a58f4e6cd.JPG', 'aee349cc812211df731e9a9136481e00.JPG', 'a519ba95f8a93b470d6a74ec9d7ff239.JPG', '2021-06-07 01:29:51'),
(30, 1, 29, 2, 'in your controller, it is a good practice to load helper, models and libraries in a constructor\r\n\r\n', 0, '56d5199a865125caff3c1ec1e9df13fe.jpg', '77f9273eddec5f478e142027c28062a9.jpg', 'f4abe3b924529031679196a8795deb33.jpg', '2021-06-04 22:35:11'),
(31, 1, 30, 0, 'try insert image 2', 0, 'bb21a86f71875b580499b9f9534b608e.jpg', '7c518c4ba402cab3e572dfc50ff2bbba.jpg', '9581a8ae2ef127e58f0f91dcea741667.jpg', '2021-06-07 01:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rating`
--

CREATE TABLE `tb_rating` (
  `id_rating` int(11) NOT NULL,
  `id_produsen` int(10) NOT NULL,
  `id_konsumen` int(10) NOT NULL,
  `id_tender` int(10) DEFAULT NULL,
  `rating` float NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rating`
--

INSERT INTO `tb_rating` (`id_rating`, `id_produsen`, `id_konsumen`, `id_tender`, `rating`, `ulasan`) VALUES
(3, 1, 3, 4, 5, 'Hasilnya Memuaskan dan Hargana Terjangkau'),
(4, 1, 1, 1, 4, 'bagussss'),
(5, 1, 2, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 1, 2, 3, 2, 'dd'),
(7, 1, 2, 4, 5, 'gaga'),
(8, 1, 2, 5, 5, 'fdfdfd'),
(9, 1, 2, 6, 5, 'fgfg'),
(10, 1, 2, 7, 5, 'gfgf'),
(11, 1, 2, 7, 3, 'gfgf'),
(12, 1, 2, 8, 4, 'bv'),
(13, 1, 2, 9, 5, 'gaga'),
(14, 1, 2, 10, 5, 'fsfs'),
(15, 1, 2, 11, 5, 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `caption_1` varchar(100) NOT NULL,
  `caption_2` varchar(100) NOT NULL,
  `caption_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `gambar`, `caption_1`, `caption_2`, `caption_3`) VALUES
(129, 'slider01.jpg', 'sliderone', 'sliderone', 'sliderone'),
(131, 'slider03.jpg', 'sliderthree', 'sliderthree', 'sliderthree');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_lamaran`
--

CREATE TABLE `tb_status_lamaran` (
  `id_status_lamaran` int(10) NOT NULL,
  `status_lamaran` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_lamaran`
--

INSERT INTO `tb_status_lamaran` (`id_status_lamaran`, `status_lamaran`) VALUES
(1, 'Diterima'),
(2, 'Ditolak'),
(3, 'Sedang Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_tender`
--

CREATE TABLE `tb_status_tender` (
  `id_status_tender` int(10) NOT NULL,
  `status_tender` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_tender`
--

INSERT INTO `tb_status_tender` (`id_status_tender`, `status_tender`) VALUES
(1, 'Aktif'),
(2, 'Non-aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tender`
--

CREATE TABLE `tb_tender` (
  `id_tender` int(10) NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `deadline` date NOT NULL,
  `username_konsumen` varchar(16) NOT NULL,
  `tanggal_buka` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `id_status_tender` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tender`
--

INSERT INTO `tb_tender` (`id_tender`, `tittle`, `deskripsi`, `gambar`, `deadline`, `username_konsumen`, `tanggal_buka`, `tanggal_tutup`, `id_status_tender`) VALUES
(12, 'image testing', 'image testing', '1dd03af86608834d995984372b3bd45a.JPG', '2021-06-08', 'konsumensatu', '2021-06-02', '2021-06-02', 1),
(13, 'event onchange', 'testing', '1367ddb4c4e9f8ae27cca3a7e90e9827.jpg', '2021-06-15', 'konsumendua', '2021-06-07', '2021-06-07', 1),
(14, '10 mei tahap 2', 'fefefe', '4a1c3c4941e6c271bb0b6f9ec2009154.JPG', '2021-07-28', 'konsumendua', '2021-07-21', '2021-07-25', 1),
(15, 'yahoo', 'gfgfg', '0b42606e42eb0b70f389c3b5f22785a3.JPG', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-22', 1),
(16, 'fdfddf', 'fdfd', '27b0e77a14f734f986d549f404b44479.jpg', '2021-07-31', 'konsumendua', '2021-07-21', '2021-07-25', 1),
(17, 'aduhh', 'aduhh', 'cb020018af942e45dc26144887d2ea23.JPG', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-22', 1),
(18, 'aduhh', 'aduhh', '2446295d870161d449c2e289256563fb.JPG', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-22', 1),
(19, 'aduhh', 'aduhh', 'ffa3ceb8da80dbf3c597efb548500e1d.JPG', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-25', 1),
(20, 'lulu', 'lulu', '1aa3828319752feea50cca9a27ad42e1.JPG', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-29', 1),
(21, 'molyy', 'moly', 'fdcea908b13bafc634fe6a512cb93157.jpg', '2021-07-30', 'konsumendua', '2021-07-21', '2021-07-25', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berkas_produsen`
--
ALTER TABLE `tb_berkas_produsen`
  ADD UNIQUE KEY `username_produsen` (`username_produsen`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_tender` (`id_tender`);

--
-- Indexes for table `tb_gambaran`
--
ALTER TABLE `tb_gambaran`
  ADD PRIMARY KEY (`id_gambaran`);

--
-- Indexes for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_lamaran`
--
ALTER TABLE `tb_lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `id_tender` (`id_tender`),
  ADD KEY `id_status_lamaran` (`id_status_lamaran`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tb_pengerjaan_tender`
--
ALTER TABLE `tb_pengerjaan_tender`
  ADD PRIMARY KEY (`pengerjaan_id`),
  ADD KEY `id_tender` (`id_tender`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_produsen` (`id_produsen`);

--
-- Indexes for table `tb_permintaan_pengerjaan`
--
ALTER TABLE `tb_permintaan_pengerjaan`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `id_tender` (`id_tender`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_produsen` (`id_produsen`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_produsen`
--
ALTER TABLE `tb_produsen`
  ADD PRIMARY KEY (`id_produsen`);

--
-- Indexes for table `tb_progres_pengerjaan`
--
ALTER TABLE `tb_progres_pengerjaan`
  ADD PRIMARY KEY (`progres_id`),
  ADD KEY `pengerjaan_id` (`pengerjaan_id`),
  ADD KEY `id_produsen` (`id_produsen`),
  ADD KEY `id_konsumen` (`id_konsumen`);

--
-- Indexes for table `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_produsen` (`id_produsen`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `id_tender` (`id_tender`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_status_lamaran`
--
ALTER TABLE `tb_status_lamaran`
  ADD PRIMARY KEY (`id_status_lamaran`);

--
-- Indexes for table `tb_status_tender`
--
ALTER TABLE `tb_status_tender`
  ADD PRIMARY KEY (`id_status_tender`);

--
-- Indexes for table `tb_tender`
--
ALTER TABLE `tb_tender`
  ADD PRIMARY KEY (`id_tender`),
  ADD KEY `id_status_tender` (`id_status_tender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_gambaran`
--
ALTER TABLE `tb_gambaran`
  MODIFY `id_gambaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  MODIFY `id_inbox` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `id_konsumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_lamaran`
--
ALTER TABLE `tb_lamaran`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tb_pengerjaan_tender`
--
ALTER TABLE `tb_pengerjaan_tender`
  MODIFY `pengerjaan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_permintaan_pengerjaan`
--
ALTER TABLE `tb_permintaan_pengerjaan`
  MODIFY `id_permintaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produsen`
--
ALTER TABLE `tb_produsen`
  MODIFY `id_produsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_progres_pengerjaan`
--
ALTER TABLE `tb_progres_pengerjaan`
  MODIFY `progres_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_rating`
--
ALTER TABLE `tb_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tb_status_lamaran`
--
ALTER TABLE `tb_status_lamaran`
  MODIFY `id_status_lamaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_status_tender`
--
ALTER TABLE `tb_status_tender`
  MODIFY `id_status_tender` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tender`
--
ALTER TABLE `tb_tender`
  MODIFY `id_tender` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD CONSTRAINT `tb_gambar_ibfk_1` FOREIGN KEY (`id_tender`) REFERENCES `tb_tender` (`id_tender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lamaran`
--
ALTER TABLE `tb_lamaran`
  ADD CONSTRAINT `tb_lamaran_ibfk_2` FOREIGN KEY (`id_status_lamaran`) REFERENCES `tb_status_lamaran` (`id_status_lamaran`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_lamaran_ibfk_3` FOREIGN KEY (`id_tender`) REFERENCES `tb_tender` (`id_tender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengerjaan_tender`
--
ALTER TABLE `tb_pengerjaan_tender`
  ADD CONSTRAINT `tb_pengerjaan_tender_ibfk_1` FOREIGN KEY (`id_produsen`) REFERENCES `tb_produsen` (`id_produsen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengerjaan_tender_ibfk_2` FOREIGN KEY (`id_tender`) REFERENCES `tb_tender` (`id_tender`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengerjaan_tender_ibfk_3` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_permintaan_pengerjaan`
--
ALTER TABLE `tb_permintaan_pengerjaan`
  ADD CONSTRAINT `tb_permintaan_pengerjaan_ibfk_1` FOREIGN KEY (`id_tender`) REFERENCES `tb_tender` (`id_tender`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_permintaan_pengerjaan_ibfk_2` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_permintaan_pengerjaan_ibfk_3` FOREIGN KEY (`id_produsen`) REFERENCES `tb_produsen` (`id_produsen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD CONSTRAINT `tb_rating_ibfk_2` FOREIGN KEY (`id_produsen`) REFERENCES `tb_produsen` (`id_produsen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tender`
--
ALTER TABLE `tb_tender`
  ADD CONSTRAINT `tb_tender_ibfk_1` FOREIGN KEY (`id_status_tender`) REFERENCES `tb_status_tender` (`id_status_tender`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
