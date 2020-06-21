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
