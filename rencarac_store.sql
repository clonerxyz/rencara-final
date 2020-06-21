-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2020 at 12:19 PM
-- Server version: 10.2.32-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rencarac_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ida` int(4) NOT NULL,
  `n_admin` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `u_a` varchar(200) NOT NULL,
  `p_a` varchar(200) NOT NULL,
  `roster` varchar(200) NOT NULL,
  `s_login` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ida`, `n_admin`, `contact`, `email`, `img`, `u_a`, `p_a`, `roster`, `s_login`) VALUES
(1, 'clo', '3232', 'clonerxyz@gmail.com', 'aes3.PNG', 'clonerxyz', 'UXdlMTIzIUAj', 'admin', 'idle'),
(2, 'sajidah', '89982882', 'sajidahrachmawati@gmail.com', '', 'sjdhrc', 'UXdlMTIzIUAj', 'admin', 'idle');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcat` int(4) NOT NULL,
  `n_cat` varchar(200) NOT NULL,
  `i_cat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcat`, `n_cat`, `i_cat`) VALUES
(7, 'Dekorasi-Taman', ''),
(8, 'genset', ''),
(9, 'Sound', ''),
(10, 'Mic-wireless', ''),
(11, 'Tenda', ''),
(12, 'Panggung', ''),
(13, 'Lighthing', ''),
(15, 'Kabel-Pendek', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idc` int(4) NOT NULL,
  `n_cust` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `imgc` varchar(200) DEFAULT NULL,
  `u_c` varchar(200) NOT NULL,
  `p_c` varchar(200) NOT NULL,
  `roster` varchar(200) NOT NULL,
  `s_login` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idc`, `n_cust`, `contact`, `alamat`, `imgc`, `u_c`, `p_c`, `roster`, `s_login`, `phone`) VALUES
(73, 'clonerxyz', 'clonerxyz@gmail.com', 'Jl. Sukabirus gang slamet 3 Kos kolonel 35', 'user32.jpg', 'clo', 'MQ==', 'user', 'idle', '089727626189'),
(75, 'graphical 007', 'clonerxyz@gmail.com', 'jl.waowoakowk', 'images_(10)1.jpeg', 'gui', 'eXVpMTIz', 'user', 'idle', '232131'),
(76, 'gui2', 'stfpekalongan@gmail.com', 'hshshs', 'images.jpeg', 'gui2', 'MQ==', 'user', 'idle', '333333'),
(80, 'Qatrun Nada', 'nadaoyama@gmail.com', 'padasuka', '', 'nadadv', 'bmFkYW5hZGE=', 'user', 'idle', '123'),
(81, 'cobaaja', 'clonerxyz@gmail.com', 'hshshsh', '952102.png', 'coba', 'MQ==', 'user', 'idle', '08455455181'),
(86, 'Sajidah Rachmawati', 'sajidarachmawati@gmail.com', 'Jalan Mau rebahan 1', 'WhatsApp_Image_2020-06-14_at_5_42_23_PM.jpeg', 'sajidahR', 'Z3Jlc2lramF5YTI5', 'user', 'idle', '0828877277'),
(92, 'akatsukimega', 'stfpekalongan@gmail.com', 'jl.sunagakureblok77', 'images_(3).jpeg', 'mega', 'MQ==', 'user', 'idle', '84854545122');

-- --------------------------------------------------------

--
-- Table structure for table `fund_v`
--

CREATE TABLE `fund_v` (
  `idf` int(11) NOT NULL,
  `order_id` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `rekening` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fund_v`
--

INSERT INTO `fund_v` (`idf`, `order_id`, `price`, `vendor`, `rekening`, `status`) VALUES
(7, ' 319722592', '750000', 'kyodai', 'Nama Bank : mandiri\r\n\r\nNo.Rekening : 2929838387383\r\n\r\n\r\nAtas Nama : kyodai', 'sudah di acc'),
(6, ' 261898219', '500000', 'kyodai', 'Nama Bank : BCA \r\n\r\nNo.Rekening : 28108012884080\r\n\r\n\r\nAtas Nama : KYODAI', 'sudah di acc');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `idi` int(4) NOT NULL,
  `idit` varchar(15) NOT NULL,
  `idv` int(4) NOT NULL,
  `n_item` varchar(200) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `idcat` int(4) NOT NULL,
  `imgi` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `item_avail` date NOT NULL,
  `item_n_avail` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`idi`, `idit`, `idv`, `n_item`, `detail`, `price`, `idcat`, `imgi`, `status`, `item_avail`, `item_n_avail`) VALUES
(48, 'kyo119 ', 22, 'Genset-Matsuko MDG-150', 'Genset Matsuko MDG 150', 100000, 8, '80_Kva1.PNG', 'ready', '2020-06-04', '2020-06-14'),
(49, 'kyo905 ', 22, 'Genset-Perkins 100 Kva', 'Genset-Perkins 100 Kva', 100000, 8, '100_Kva.PNG', 'ready', '0000-00-00', '0000-00-00'),
(50, 'kyo137 ', 22, 'Genset-Ifanite 100 Kva', 'Genset-Ifanite 100 Kva\r\n\r\nsangat cocok untuk kebutuhan acara kecil dapat menampung sampai dengan 100 Kva', 100000, 8, '290126_Genset-2-KVA-Las-Diesel-Silent-Type-Engine-Start-Generator_grafOZy7vCoR5s54_1565101528.jpg', 'ready', '2020-06-04', '2020-06-15'),
(51, 'kyo130 ', 22, 'Genset-Sawakami GFH-5880LX', 'Genset-Sawakami GFH-5880LX', 100000, 8, '6151540_B_V11.jpg', 'ready', '0000-00-00', '0000-00-00'),
(52, 'kyo134 ', 22, 'Genset-Matsuko MDG-12000SE1', 'Genset-Matsuko MDG-12000SE1', 100000, 8, '369983352_622d348b-ab29-4c84-ac99-5f21632d7615_567_5671.jpg', 'notready', '2020-06-19', '2020-06-25'),
(53, 'kyo279 ', 22, 'Genset-Genpac ', 'Genset-Genpac', 150000, 8, 'genset-genpac-muffler-800px-670x551.jpg', 'ready', '2020-06-10', '2020-06-15'),
(54, 'kyo859 ', 22, 'Genset-hartech HT-65P', 'Genset-hartech HT-65P', 350000, 8, '28951356_1289954317774117_8544390782085216216_n.jpg', 'notready', '2020-06-17', '2020-06-18'),
(55, 'kyo661 ', 22, 'Genset-Mitsubishi 50 Kva', 'Genset-Mitsubishi 50 Kva', 100000, 8, 'Genset-Mesin-Generator-50-Kva-60-Kva-MITSUBISHI1.jpg', 'not ready', '2020-06-17', '2020-06-15'),
(56, 'kyo592 ', 22, 'Genset-Multi pro GG-9900/4 HPN', 'Genset-Multi pro GG-9900/4 HPN', 100000, 8, 'images1.jpg', 'ready', '0000-00-00', '0000-00-00'),
(57, 'kyo169 ', 22, 'Genset-Steep hill', 'Genset-Steep hill', 100000, 8, 'rental-genset-silent-jakarta1.jpg', 'ready', '0000-00-00', '0000-00-00'),
(58, 'kyo146 ', 22, 'Genset-Spakins TNG-1500A', 'Genset-Spakins TNG-1500A', 150000, 8, 'S000054336-12.jpg', 'ready', '0000-00-00', '0000-00-00'),
(59, 'kyo188 ', 22, 'Genset-RYU BLACK-1500', 'Genset-RYU BLACK-1500', 100000, 8, 'unnamed1.jpg', 'not ready', '2020-06-24', '2020-06-16'),
(60, 'kyo959 ', 22, 'Tenda Terop Plavon', 'Tenda terop biasa \r\n\r\n35.000 / meter\r\n\r\n\r\n\r\n', 35000, 11, 'Tenda_(1).PNG', 'ready', '0000-00-00', '0000-00-00'),
(61, 'kyo173 ', 22, 'Tenda Terop Plavon', 'Tenda Semi Dekor serut \r\n\r\n40.000/ meter\r\n\r\nminimal order 30 meter', 40000, 11, 'Tenda_(2).jpg', 'ready', '0000-00-00', '0000-00-00'),
(62, 'kyo371 ', 22, 'Tenda dekorasi ', 'Tenda dekorasi VIP tertutup\r\n50.000/meter\r\n( min order 50m² )', 50000, 11, 'Tenda_Plafon_(3).jpg', 'ready', '0000-00-00', '0000-00-00'),
(63, 'kyo127 ', 22, 'Tenda dekorasi ', 'Tenda VIP full dekorasi minimal order ( min order 50m² )\r\n\r\n50.000/meter', 50000, 11, 'Tenda_Plafon_(2).jpg', 'ready', '0000-00-00', '0000-00-00'),
(64, 'kyo816 ', 22, 'Tenda Oval', 'Terop Pesta\r\nUkuran : 3x6/4x6/6x6m\r\nTinggi sisi terendah : 2.75 m, sisi tertinggi : 3.25 m\r\nMaterial Rangka: Pipa Galvanis (Air)\r\nRangka Atap (Reng) : d= dim\r\nRangka Sisi Samping: d=1 dim (dobel)\r\nKak', 110000, 11, 'Tenda_Oval.PNG', 'ready', '0000-00-00', '0000-00-00'),
(65, 'kyo110 ', 22, 'Tenda Oval', 'Terop Pesta\r\nUkuran : 3x6/4x6/6x6m\r\nTinggi sisi terendah : 2.75 m, sisi tertinggi : 3.25 m\r\nMaterial Rangka: Pipa Galvanis (Air)\r\nRangka Atap (Reng) : d= dim\r\nRangka Sisi Samping: d=1 dim (dobel)\r\nKak', 110000, 11, 'Tenda_lengkung.jpg', 'ready', '0000-00-00', '0000-00-00'),
(66, 'kyo171 ', 22, 'Tenda dekorasi Full', 'Tenda plavon VIP dekorasi full\r\n\r\n( min order 50m² )\r\n\r\nRp 50.000,- per-meter', 50000, 11, 'Tenda_Plafon_(5).jpg', 'ready', '0000-00-00', '0000-00-00'),
(71, 'kyo164 ', 22, 'Tenda Roder', 'Ada beberapa ukuran tenda roder yang kami tawarkan. Mulai dari 10 m, 15 m dan 20 m, semua bisa disewa sesuai kebutuhan. Tenda Roder memiliki 2 jenis terpal: Tenda Roder Putih dan Tenda Roder Transpara', 125000, 11, 'tenda-pernikahan-tenda-pesta-tenda-pameran-harga-tenda-pesta-tenda-outdoor-Shelter-Tent-135.jpg', 'ready', '0000-00-00', '0000-00-00'),
(72, 'kyo208 ', 22, 'Tenda dekorasi ', 'Tenda Dekorasi terbuka plavon \r\n\r\nTenda Dekorasi Terbuka	40.000/m2 (minimal order 50 m2)', 40000, 11, 'Tenda_Plafon_(7).jpg', 'ready', '0000-00-00', '0000-00-00'),
(73, 'kyo214 ', 22, 'Tenda dekorasi ', 'Tenda dekorasi terbuka \r\n\r\nTenda Dekorasi Terbuka	50.000/m2 (minimal order 50 m2)', 50000, 11, 'Tenda_Plafon_(8).jpg', 'ready', '0000-00-00', '0000-00-00'),
(74, 'kyo323 ', 22, 'Panggung Semmi rigging (6 x 8)', 'Semi Rigging (6 x 8)	 / meter	Rp 4.500.000,-', 4500000, 12, 'entertainment1.jpg', 'ready', '0000-00-00', '0000-00-00'),
(75, 'kyo571 ', 22, 'Panggung Semmi rigging ', 'Semi Rigging (6 x 10)	 / meter	Rp 5.500.000,-	', 5500000, 12, 'sewa-panggung-rigging.jpeg', 'ready', '0000-00-00', '0000-00-00'),
(76, 'kyo369 ', 22, 'Panggung Semmi rigging ', '	Semi Rigging (8 x 10)	 / meter	Rp 6.500.000,-', 6500000, 12, 'pg11.jpg', 'nready', '0000-00-00', '0000-00-00'),
(77, 'kyo198 ', 22, 'Panggung Semmi rigging ', 'Semi Rigging (10 x 12)	 / meter	Rp 8.500.000,-	', 7500000, 12, 'stage11.PNG', 'ready', '0000-00-00', '0000-00-00'),
(78, 'kyo723 ', 22, 'Panggung Full Rigging ', 'Full Rigging (6 x 8)	 / meter	Rp 5.500.000,-', 5500000, 12, '502551_riggingstage1.jpg', 'ready', '0000-00-00', '0000-00-00'),
(79, 'kyo169 ', 22, 'Panggung Full Rigging ', 'Full Rigging (10 x 12)	/ meter	Rp12.500.000,-', 12500000, 12, 'i287104489290458573.jpg', 'ready', '0000-00-00', '0000-00-00'),
(80, 'kyo357 ', 22, 'Sound System', 'Paket sound system 500x500', 1200000, 9, 'church-sound-system-500x5001.jpg', 'ready', '0000-00-00', '0000-00-00'),
(81, 'kyo752 ', 22, 'Sound System', 'Untuk paket sewa yang satu ini memiliki tarif Rp. 1.500.000 dengan beragam jenis sound system seperti halnya Speaker 6 Box isi 2, Power CA 20, Speaker Monitor Passive (2 pcs), Mic Cable (4 pcs), Stand', 1500000, 9, '424-PV-SP2-SPEAKER-PACKAGE1.jpg', 'ready', '0000-00-00', '0000-00-00'),
(82, 'kyo343 ', 22, 'Sound System', 'PAKET SOUND SYSTEM 3000 WATT\r\n\r\nAudio Capacity : 3000 watt Occasion : Pameran/Presentation/ Venue : Lounge / Booth / Mall Equipments :* SOUND-SYSTEM : - Speaker : JBL 615 Series ( Made In USA ) SUBWOO', 2000000, 9, 'images3.jpg', 'ready', '0000-00-00', '0000-00-00'),
(83, 'kyo206 ', 22, 'Sound System 10.000 watt', 'Paket 10.000 watt ini ditawarkan dengan tarif Rp. 4.500.000 dan menyediakan beragam jenis sound system dimulai dari Ground Stage 8 Box, Subwoofer Double 18? (4 pcs), Monitor Active (2 pcs), Mic Wirele', 4500000, 9, 'nhy.jpg', 'ready', '0000-00-00', '0000-00-00'),
(84, 'kyo123 ', 22, 'Lampu Par-LED ', 'Sewa Lampu Par LED Bandung. Harga sewa Rp. 250.000 / hari. ', 250000, 13, 'b4cec63bfbdd9dab86d89610fccb809c.jpg', 'ready', '0000-00-00', '0000-00-00'),
(85, 'kyo141 ', 22, 'Lampu Follow Spot', 'ental Lampu Follow Spot. Harga Sewa Rp. 750.000 / hari', 750000, 13, 'download.jpg', 'ready', '0000-00-00', '0000-00-00'),
(86, 'kyo939 ', 22, 'Laser Beam ( text & graphis )', 'Rental Laser Beam ( text & graphis ). Harga Sewa Rp. 5.00.000 / hari', 500000, 13, 'lighting-t.jpg', 'ready', '0000-00-00', '0000-00-00'),
(87, 'kyo129 ', 22, 'Lampu mini laser disco', 'Rental Mini Laser Disco. Harga Sewa Rp. 250.000 / hari', 250000, 13, 'images4.jpg', 'ready', '0000-00-00', '0000-00-00'),
(88, 'kyo137 ', 22, 'Lampu Confetti sepasang', 'Rental Lighting System - Confetti ( sepasang )', 800000, 13, 'download_(1).jpg', 'ready', '0000-00-00', '0000-00-00'),
(89, 'kyo137 ', 22, 'Lampu HALOGEN', 'sewa Lampu Hallogen. Harga Sewa Rp 150.000', 150000, 13, 'halogen.jpg', 'ready', '0000-00-00', '0000-00-00'),
(90, 'kyo200 ', 22, 'Lampu Fresnel', 'Sewa Lampu  Fresnel. Harga Sewa Rp 250.000', 250000, 13, 'fresnel.jpg', 'ready', '0000-00-00', '0000-00-00'),
(91, 'kyo317 ', 22, 'Lampu Strobo', 'Penyewaan lampu Strobo. Harga penyewaan Rp. 250.000', 250000, 13, 'strobo.jpg', 'ready', '0000-00-00', '0000-00-00'),
(92, 'kyo460 ', 22, 'Paket Lampu Sorot Panggung', 'Paket sewa lampu sorot panggung Rp. 5.000.000 an', 5000000, 13, 'paket_lampu.JPG', 'ready', '0000-00-00', '0000-00-00'),
(93, 'kyo233 ', 22, 'Lampu HALOGEN 002', 'EELIC LAU-HAN500W Sinar Cahaya Sangat Terang Lampu HALOGEN 240V Hemat Energi Serta Aman Dalam Penggunaan Flood Light Cahaya Kuning 500 Watt', 150000, 13, '1250_1250_4d61f00be845460587079117e4aef48e.jpg', 'ready', '0000-00-00', '0000-00-00'),
(94, 'kyo213 ', 22, 'Lampu tembak Panggung', 'Lampung Tembak panggung RGB', 500000, 13, 'laser_lampu_sorot_panggung_black_1_scaled.jpg', 'ready', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `midtrans_item_detail`
--

CREATE TABLE `midtrans_item_detail` (
  `idd` int(4) NOT NULL,
  `id` int(4) NOT NULL,
  `idit` varchar(200) NOT NULL,
  `midtrans_id` int(200) DEFAULT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `payable` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midtrans_item_detail`
--

INSERT INTO `midtrans_item_detail` (`idd`, `id`, `idit`, `midtrans_id`, `price`, `quantity`, `name`, `vendor`, `customer`, `payable`) VALUES
(271, 75, 'kyo571 ', 1, 5500000, 2, 'Panggung Semmi rigging ', 'kyodai', '41233', 'no'),
(274, 84, 'kyo123 ', 261898219, 250000, 2, 'Lampu Par-LED ', 'kyodai', 'Hapsah', 'settlement'),
(276, 49, 'kyo905 ', 1498786025, 100000, 1, 'Genset-Perkins 100 Kva', 'kyodai', 'clo', 'expire'),
(277, 71, 'kyo164 ', 497297398, 125000, 1, 'Tenda Roder', 'kyodai', 'clo', 'expire'),
(278, 88, 'kyo137 ', 854209130, 800000, 1, 'Lampu Confetti sepasang', 'kyodai', 'clo', 'settlement'),
(279, 58, 'kyo146 ', 854209130, 150000, 1, 'Genset-Spakins TNG-1500A', 'kyodai', 'clo', 'settlement'),
(280, 53, 'kyo279 ', 854209130, 150000, 1, 'Genset-Genpac', 'kyodai', 'clo', 'settlement'),
(281, 50, 'kyo137 ', 1531594478, 100000, 1, 'Genset-Ifanite 100 Kva', 'kyodai', 'clo', 'settlement'),
(282, 51, 'kyo130 ', 1531594478, 100000, 1, 'Genset-Sawakami GFH-5880LX', 'kyodai', 'clo', 'settlement'),
(283, 49, 'kyo905 ', 1531594478, 100000, 1, 'Genset-Perkins 100 Kva', 'kyodai', 'clo', 'settlement'),
(286, 50, 'kyo137 ', 2021125213, 100000, 1, 'Genset-Ifanite 100 Kva', 'kyodai', 'sajidahR', 'settlement'),
(301, 53, 'kyo279 ', 444008414, 150000, 1, 'Genset-Genpac ', 'kyodai', 'sajidahR', 'expire'),
(300, 88, 'kyo137 ', 2121184431, 800000, 1, 'Lampu Confetti sepasang', 'kyodai', 'clo', 'settlement'),
(290, 53, 'kyo279 ', 2021125213, 150000, 2, 'Genset-Genpac', 'kyodai', 'sajidahR', 'settlement'),
(291, 48, 'kyo119 ', 2021125213, 100000, 2, 'Genset-Matsuko MDG-150', 'kyodai', 'sajidahR', 'settlement'),
(292, 50, 'kyo137 ', 1638112572, 100000, 2, 'Genset-Ifanite 100 Kva', 'kyodai', 'sajidahR', 'expire'),
(293, 55, 'kyo661 ', 1638112572, 100000, 2, 'Genset-Mitsubishi 50 Kva', 'kyodai', 'sajidahR', 'expire'),
(298, 61, 'kyo173 ', 1, 40000, 1, 'Tenda Terop Plavon', 'kyodai', 'gui', 'no'),
(299, 49, 'kyo905 ', 853352641, 100000, 1, 'Genset-Perkins 100 Kva', 'kyodai', 'sajidahR', 'settlement'),
(302, 81, 'kyo752 ', 1, 1500000, 1, 'Sound System', 'kyodai', 'sajidahR', 'no'),
(303, 51, 'kyo130 ', 1, 100000, 1, 'Genset-Sawakami GFH-5880LX', 'kyodai', 'sajidahR', 'no'),
(305, 63, 'kyo127 ', 1, 50000, 1, 'Tenda dekorasi ', 'kyodai', 'sajidahR', 'no'),
(312, 75, 'kyo571 ', 1, 5500000, 3, 'Panggung Semmi rigging ', 'kyodai', 'clo', 'no'),
(311, 94, 'kyo213 ', 1, 500000, 3, 'Lampu tembak Panggung', 'kyodai', 'clo', 'no'),
(310, 56, 'kyo592 ', 1, 100000, 3, 'Genset-Multi pro GG-9900/4 HPN', 'kyodai', 'clo', 'no'),
(313, 58, 'kyo146 ', 1, 150000, 3, 'Genset-Spakins TNG-1500A', 'kyodai', 'clo', 'no'),
(318, 91, 'kyo317 ', 319722592, 250000, 3, 'Lampu Strobo', 'kyodai', 'mega', 'settlement'),
(316, 89, 'kyo137 ', 1, 150000, 3, 'Lampu HALOGEN', 'kyodai', '50070', 'no'),
(317, 62, 'kyo371 ', 1, 50000, 3, 'Tenda dekorasi ', 'kyodai', '50070', 'no'),
(321, 71, 'kyo164 ', 1, 125000, 3, 'Tenda Roder', 'kyodai', 'clo', 'no'),
(322, 80, 'kyo357 ', 1, 1200000, 4, 'Sound System', 'kyodai', 'clo', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `midtrans_transaction`
--

CREATE TABLE `midtrans_transaction` (
  `id` int(30) NOT NULL,
  `c_name` varchar(200) DEFAULT NULL,
  `status_code` int(30) NOT NULL,
  `status_message` varchar(200) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `order_id` int(30) NOT NULL,
  `gross_amount` int(100) NOT NULL,
  `payment_type` varchar(200) NOT NULL,
  `transaction_time` varchar(200) NOT NULL,
  `transaction_status` varchar(200) NOT NULL,
  `bill_key` int(30) DEFAULT NULL,
  `biller_code` int(30) DEFAULT NULL,
  `pdf_url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midtrans_transaction`
--

INSERT INTO `midtrans_transaction` (`id`, `c_name`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `transaction_time`, `transaction_status`, `bill_key`, `biller_code`, `pdf_url`) VALUES
(82, 'clo', 201, 'Transaksi sedang diproses', '5954ceb5-ff7c-4568-94fb-b8ec159060f4', 2121184431, 800000, 'bank_transfer', '2020-06-18 03:07:29', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/37e046dd-5041-4264-b2c2-57b3973ead8d/pdf'),
(81, 'sajidahR', 201, 'Transaksi sedang diproses', '631076fd-9a01-41fb-8e04-5e0102ec313a', 444008414, 150000, 'bank_transfer', '2020-06-16 22:04:43', 'expire', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/d0ac52cc-79f6-484c-8cc6-de99026dfd59/pdf'),
(79, 'sajidahR', 201, 'Transaksi sedang diproses', 'aba0e473-ba13-481b-8ad9-11d2d4874f4f', 1638112572, 400000, 'bank_transfer', '2020-06-14 18:03:39', 'expire', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/50549ba3-de59-4fd6-9260-42141213b7cd/pdf'),
(80, 'sajidahR', 201, 'Transaksi sedang diproses', 'fabad4c2-4c92-431c-a603-b1155696d19a', 853352641, 100000, 'bank_transfer', '2020-06-15 17:12:54', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/875a7256-aa6b-4489-b324-6a6d4541b8e1/pdf'),
(83, 'mega', 201, 'Transaksi sedang diproses', 'c1f64179-e7f7-4f29-8115-c51ee2a10645', 319722592, 750000, 'bank_transfer', '2020-06-18 06:44:07', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/ad381e35-1e24-4157-96c5-7ddb895aac6d/pdf'),
(78, 'sajidahR', 201, 'Transaksi sedang diproses', '33c6b459-aed3-4db6-92e5-ab10371dc293', 2021125213, 600000, 'bank_transfer', '2020-06-14 18:00:20', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/f311b94d-d0a3-461e-9280-0b7bd3061daa/pdf'),
(76, 'clo', 201, 'Transaksi sedang diproses', '0226b3ce-f36d-451a-89c8-ca552ed88138', 1531594478, 300000, 'bank_transfer', '2020-06-12 00:12:25', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/09981dfa-8171-4d41-99ef-173db8b26193/pdf'),
(74, 'clo', 201, 'Transaksi sedang diproses', '7c04523a-f0f2-4ed0-a2c5-b94cf03ef0b8', 497297398, 125000, 'bank_transfer', '2020-06-11 02:33:59', 'expire', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/cf9c89bf-31fe-4c31-a442-73b926b70239/pdf'),
(75, 'clo', 201, 'Transaksi sedang diproses', '25dbb9b8-d4c1-41da-b3b0-9eba5ff6a0b3', 854209130, 1100000, 'bank_transfer', '2020-06-11 23:21:25', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/a8da934b-a928-46bf-b86a-eba00352761d/pdf'),
(73, 'clo', 201, 'Transaksi sedang diproses', '00bd09f5-1e62-489f-a239-1d2bde7fd698', 1498786025, 100000, 'bank_transfer', '2020-06-10 17:45:03', 'expire', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/be3e8c55-6619-4550-b120-efa994b305fc/pdf'),
(72, 'Hapsah', 201, 'Transaksi sedang diproses', '35fe8d42-15f2-4f3b-b2b9-87dabdfc55e2', 261898219, 500000, 'bank_transfer', '2020-06-07 19:46:05', 'settlement', NULL, NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/3e849d4e-9ddd-4d1d-afb2-6f2c19849d71/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `order_plan`
--

CREATE TABLE `order_plan` (
  `ido` int(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `order_id` int(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `isi_tiket` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_plan`
--

INSERT INTO `order_plan` (`ido`, `subject`, `order_id`, `vendor`, `customer`, `isi_tiket`) VALUES
(128, 'Re : Item sudah di kembalikan order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client '),
(129, 'Close Order order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nUntuk Order berikut : 319722592 akan kami close \r\n\r\nTerimakasih Telah menggunakan Jasa kami untuk mensukes kan acara anda.\r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(130, 'Re : Close Order order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client '),
(111, 'Order Di Proses order number : 854209130', 854209130, 'kyodai', 'clo', 'Dear customer clo \r\n\r\nPesanan dengan detail : \r\n\r\nItem name : \r\nLampu Confetti sepasang Quantity : 1\r\nGenset-Spakins TNG-1500A Quantity : 1\r\nGenset-Genpac Quantity : 1\r\n\r\n\r\nTotal price : Rp. 1.100.000,00\r\n\r\nakan segera di proses \r\n\r\nmohon untuk menyertakan detail \r\nno telp (yang valid)\r\nalamat lengkap (jika alamat pengantaran bukan merupakan alamat di profile anda) \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(127, 'Item sudah di kembalikan order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nItem yang terdaftar di bawah : \r\n\r\nItem name : \r\nLampu Strobo Quantity : 3\r\n\r\n\r\nSudah kami terima kembali \r\n\r\n\r\nTerimakasih Telah menggunakan Jasa kami untuk mensukes kan acara anda.\r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(112, 'Re : Order Di Proses order number : 854209130', 854209130, 'kyodai', 'clo', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nclo \r\nRencara Client '),
(113, 'Ask Tanggal sewa order number : 854209130', 854209130, 'kyodai', 'clo', 'Dear customer clo \r\n\r\nmohon untuk menetapkan tanggal peminjaman dengan mereply tiket ini \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(114, 'Re : Ask Tanggal sewa order number : 854209130', 854209130, 'kyodai', 'clo', 'Dear vendor kyodai \r\n\r\nBerikut kami tetapkan tanggal penerimaan barang yang sudah kami sewa\r\n\r\ntanggal : 2020-06-23\r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nclo \r\nRencara Client '),
(115, 'All item telah di kirimkan ke alamat order number : 854209130', 854209130, 'kyodai', 'clo', 'Dear customer clo \r\n\r\nPesanan dengan detail : \r\n\r\nItem name : \r\nLampu Confetti sepasang Quantity : 1\r\nGenset-Spakins TNG-1500A Quantity : 1\r\nGenset-Genpac Quantity : 1\r\n\r\n\r\nTotal price : Rp. 1.100.000,00\r\n\r\nsudah di antarkan ke Alamat Jl. Sukabirus gang slamet 3 Kos kolonel 35 \r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(117, 'Order Di Proses order number : 2021125213', 2021125213, 'kyodai', 'sajidahR', 'Dear customer sajidahR \r\n\r\nPesanan dengan detail : \r\n\r\nItem name : \r\nGenset-Ifanite 100 Kva Quantity : 1\r\nGenset-Genpac Quantity : 2\r\nGenset-Matsuko MDG-150 Quantity : 2\r\n\r\n\r\nTotal price : Rp. 600.000,00\r\n\r\nakan segera di proses \r\n\r\nmohon untuk menyertakan detail \r\nno telp (yang valid)\r\nalamat lengkap (jika alamat pengantaran bukan merupakan alamat di profile anda) \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(119, 'Order Di Proses order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nPesanan dengan detail : \r\n\r\nItem name : \r\nLampu Strobo Quantity : 3\r\n\r\n\r\nTotal price : Rp. 750.000,00\r\n\r\nakan segera di proses \r\n\r\nmohon untuk menyertakan detail \r\nno telp (yang valid)\r\nalamat lengkap (jika alamat pengantaran bukan merupakan alamat di profile anda) \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(120, 'Re : Order Di Proses order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client '),
(121, 'Ask Tanggal sewa order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nmohon untuk menetapkan tanggal peminjaman dengan mereply tiket ini \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(122, 'Re : Ask Tanggal sewa order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nBerikut kami tetapkan tanggal penerimaan barang yang sudah kami sewa\r\n\r\ntanggal : 2020-06-19\r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client '),
(123, 'All item telah di kirimkan ke alamat order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nPesanan dengan detail : \r\n\r\nItem name : \r\nLampu Strobo Quantity : 3\r\n\r\n\r\nTotal price : Rp. 750.000,00\r\n\r\nsudah di antarkan ke Alamat jl.sunagakureblok77 \r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(124, 'Re : All item telah di kirimkan ke alamat order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client '),
(125, 'Menunggu Pengembalian order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear customer mega \r\n\r\nItem yang terdaftar di bawah : \r\n\r\nItem name : \r\nLampu Strobo Quantity : 3\r\n\r\n\r\nuntuk pengembalian item di atas , apakah akan di antar ke kami atau akan kami ambil kembali ke alamat jl.sunagakureblok77 \r\n\r\n\r\nmohon untuk me reply tiket ini dengan jawaban yang kami tanyakan di atas \r\n\r\n\r\nRegards, \r\nkyodai \r\nRencara Team '),
(126, 'Re : Menunggu Pengembalian order number : 319722592', 319722592, 'kyodai', 'mega', 'Dear vendor kyodai \r\n\r\nTerimakasih Atas support dan kerja sama nya \r\n\r\n\r\nRegards, \r\nmega \r\nRencara Client ');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `idv` int(4) NOT NULL,
  `n_vendor` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `imgv` varchar(200) DEFAULT NULL,
  `u_v` varchar(200) NOT NULL,
  `p_v` varchar(200) NOT NULL,
  `roster` varchar(200) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `no_rek` varchar(200) DEFAULT NULL,
  `ktp` varchar(200) DEFAULT NULL,
  `npwp` varchar(200) NOT NULL,
  `v_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`idv`, `n_vendor`, `contact`, `alamat`, `imgv`, `u_v`, `p_v`, `roster`, `phone`, `no_rek`, `ktp`, `npwp`, `v_status`) VALUES
(22, 'kyodai', 'clonerxyz@gmail.com', 'jl.ngagel jaya selatan blok j no.21', 'download1.png', 'kyodai', 'bmFydXRvcGVpbg==', 'vend', '3213142142', '', '', '', 'acc'),
(35, 'synthyzer', 'clonerxyz@gmail.com', 'jl.aowkoakwkoka', 'rico1.png', 'synthyzer', 'MQ==', 'vend', '29381928983989128', NULL, 'ktp1.PNG', 'npwp4.PNG', 'belum di acc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idc`),
  ADD UNIQUE KEY `u_c` (`u_c`);

--
-- Indexes for table `fund_v`
--
ALTER TABLE `fund_v`
  ADD PRIMARY KEY (`idf`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idi`),
  ADD KEY `idv` (`idv`),
  ADD KEY `idcat` (`idcat`);

--
-- Indexes for table `midtrans_item_detail`
--
ALTER TABLE `midtrans_item_detail`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `midtrans_transaction`
--
ALTER TABLE `midtrans_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_plan`
--
ALTER TABLE `order_plan`
  ADD PRIMARY KEY (`ido`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`idv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ida` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `fund_v`
--
ALTER TABLE `fund_v`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `idi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `midtrans_item_detail`
--
ALTER TABLE `midtrans_item_detail`
  MODIFY `idd` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `midtrans_transaction`
--
ALTER TABLE `midtrans_transaction`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `order_plan`
--
ALTER TABLE `order_plan`
  MODIFY `ido` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `idv` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`idv`) REFERENCES `vendor` (`idv`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
