-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Sep 2019 pada 16.22
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ptgpp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` char(8) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_barang`, `nama_barang`, `deskripsi`, `harga`, `stok`) VALUES
(1, 'GPIVN553', 'Solar charge controller-pwm[ls2024epd],20a,12', 'solar charge controller-pwm[ls2024epd],20a,12v/24v ip67 timer', 340, 41),
(2, 'GPIVN550', 'Solar charge controller-pwm[ls2024epd],10a,12', 'Solar charge controller-pwm[ls2024epd],10a,12v/24v solar home system', 387200, 15),
(3, 'GPIVN767', 'Lampu kaibu 10 watt ac', 'Lampu kaibu 10 watt ac', 19000, 6),
(4, 'GPIVN640', 'Lampu kaibu 5 watt ac', 'Lampu kaibu 5 watt ac', 10000, 4),
(5, 'GPIVN865', 'Lampu osram 5 watt ac', 'Lampu osram 5 watt ac', 17500, 30),
(6, 'GPIVN623', 'Energi limiter ', 'Energi limiter ', 415000, 12),
(7, 'GPIVN675', 'Lampu bulb light+ 5 watt ac', 'Lampu bulb light+ 5 watt ac', 25000, 162),
(8, 'GPIVN801', 'Lampu ledenvo led st 50 w dc osram', 'Lampu ledenvo led st 50 w dc osram', 1600000, 2),
(9, 'GPIVN848', 'Lampu kaibu all in one 20 watt', 'Lampu kaibu all in one 20 watt', 700000, 2),
(10, 'GPIVN883', 'Lampu platevom clp e 2,7 cool white 12 volt d', 'Lampu platevom clp e 2,7 cool white 12 volt dc 1,6 watt osram', 5000, 2600),
(11, 'GPIVN884', 'Lampu clp4 e 2,7 12 volt dc .126. 1,7 watt', 'Lampu clp4 e 2,7 12 volt dc .126. 1,7 watt', 6000, 780),
(12, 'GPIVN885', 'Lampu cla 60 e 27. 12 volt dc 216 3 watt', 'Lampu cla 60 e 27. 12 volt dc 216 3 watt', 12000, 480),
(13, 'GPIVN886', 'lampu platevom globe g95 e27 cool white 12 v ', 'lampu platevom globe g95 e27 cool white 12 v dc 3 watt', 12000, 200),
(14, 'GPIVN887', 'lampu buld dc 12 volt 5 watt star light', 'lampu buld dc 12 volt 5 watt star light', 15000, 230),
(15, 'GPIVN888', 'box shs lEn ', 'box shs lEn ', 300000, 2),
(16, 'GPIVN368', 'panel listrik-kontak baterai[box pju 100-2], ', 'panel listrik-kontak baterai[box pju 100-2], 2x100ah untuk pjuts , bateraai 50ah-100ah (2pcs) tipe outdoor,material metal, finishing powder coating', 830000, 22),
(17, 'GPIVN112', 'modul gh solar 120 wp ', 'modul gh solar 120 wp ', 1200000, 4),
(18, 'GPIVN661', 'lampu night hawk light + modul', 'lampu night hawk light + modul', 8200000, 3),
(19, 'GPIVN742', 'modul mono 50 wp', 'modul mono 50 wp', 500000, 1),
(20, 'GPIVN289', 'Batre nagoya opzv 2100 2 volt 1000ah 10hr', 'Batre nagoya opzv 2100 2 volt 1000ah 10hr', 6000000, 1),
(127, 'GPNIV777', 'modul surya', 'solar cahaya', 100000, -3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_customer`
--

CREATE TABLE `data_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(45) NOT NULL,
  `alamat_customer` varchar(100) NOT NULL,
  `no_tlp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_customer`
--

INSERT INTO `data_customer` (`id_customer`, `nama_customer`, `alamat_customer`, `no_tlp`) VALUES
(1, 'yayan jatnika', 'jl. babakan sayang', '098219098902'),
(2, 'yayat', 'jl.ciguruik indah', '089211234131'),
(4, 'budi', 'cigondewah', '1213');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_supplier`
--

CREATE TABLE `data_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `no_tlp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_supplier`
--

INSERT INTO `data_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_tlp`) VALUES
(1, 'DEO ENERGI', 'jl.pasir kaliki', '081320318800'),
(2, 'LEN', 'jl.soekarnohatta', '08562215978'),
(3, 'PT.SURYA UTAMA PUTRA', 'Jalan Raya Bandung - Garut KM. 23, Rancaekek, Linggar, Rancaekek, Bandung, Jawa Barat 40394, Indones', '082316312121'),
(4, 'PT. YUNDA ENERGY INDONESIA', 'Ruko CBD E17 Jl.City Resort, Cengkarang, Jakarta Barat 111730', '081210608866'),
(5, 'QUENA', 'Lingkungan industri kecil gede bage', '085794379509'),
(6, 'REKA SURYA', 'jl.terusan jakarta komp ruko puri dago no 342 kav 31 arcamanik', '08112231107'),
(7, 'GH SOLAR', 'jakarta', '081311566660'),
(8, 'PT.SKYBATT', 'kayu putih, pulo gadung', '08121028512'),
(9, 'BIRU KARYA', 'Lingkungan industri kecil gede bage', '089621057566'),
(10, 'PT.MEISYS TECHNOLOGY', 'surapati core ', '082121994681'),
(11, 'PT.MULIA UTAMA TRANSINDO', 'jl.angkasa 1 no 5 A kemayoran', '087886103793'),
(12, 'PT.BSB INDONESIA', 'jakarta', '081387106860'),
(13, 'MEDIA CEMERLANG', 'komp.cipaganti graha 1 tahap 3 no 26 margacinta ciwastra', '08159793111'),
(14, 'KEIBU', 'pertokoan IBCC', '082218108554'),
(15, 'PT.SKY ENERGY', 'jl.raya cicadas no 258 gunung putri bogor', '081315999134'),
(16, 'SOLAR SELECTED,CO.LTD', ' ROOM  B718,  BLOCK  21,  ROOM  B718,  CHANGJIANG  RD,  MUDU  TOWN,  WUZHONG \nDISTRICT, SUZHOU, CHIN', '013381273568'),
(17, 'PUTRA SAKTI MANDIRI', 'Jl narongong km  pangkalan 2 banter gebang bekasi', '081286409817'),
(18, 'TEGAL STEEL PUTRA PANDAWA', 'desa kebasen rt.13 rw. 01 kec.talang kab. Tegal', '082227091122'),
(19, 'TEDDY', 'jl.merkuri metro bandung', '0811230030'),
(20, 'PT. INDO MATRA LESTARI', 'di Jakarta', '081321147481'),
(21, 'PT.PERMATA SINERGI MADANI', 'jl.soekarnohatta graha panyileukan asri ruko no 8-9 bandung', '085218102247'),
(22, 'PT.INDODAYA SURYA LESTARI', 'komp ruko glodok plasa blok a no.11 jl.pinangia raya no.1 mangga besar tamansari ', '081218163431'),
(23, 'Socreat Electronics Technology Limited', '6-7/F,Building 13A,Taihua Wutong Industrial Park,Gushu,Xixiang', '013823520545'),
(24, 'PT.ECS RAYA INDONESIA', 'jl.pinangsia III jakarta', '0216282048'),
(25, 'LED MASTER', 'jl.terusan pasirkoja 229 Blk.no369', '08122449475'),
(26, 'CV.GLOBAL PERMATA SINERGI', 'jl.graha panyileukan asri no.Blok A-07 cipadung kidul', '081312293661'),
(27, 'CV.SANSIVIERA INVESTAMA', 'Grand Sharon Residence jl.Sansiviera III/14', '02287305759'),
(28, 'PT.Solarens Ledindo', 'kawasan Industri De Primaterra B2-3B, Jalan Raya Sapan, Gedebage, Tegalluar, Bojongsoang, Bandung, J', '081324547000'),
(29, 'PT.BELLTRONIC INDONESIA', 'Komp.Rukan artha gading niaga Blok D Kav. No.5, jl.boulevard artha gading kelapa gading', '087759892388'),
(30, 'CV.PRIMA SAKTI PRATAMA', 'jl.raya banjaran no 90', '081320163332'),
(31, 'PT.SLAST INDONESIA', 'Puri Anjasmoro G1/53', '08112883477'),
(32, 'PT. PRIMA INDAH LESTARI', 'jl.raya tegal alur no. 83, jakarta barat 11820', '081221308000'),
(33, 'Cv JAYA SENTOSA', 'Komp. GBA1 F77. Bojongsoang', '0811209285'),
(34, 'Pt. Angsana Bangun Abadi', 'Jln. Cimincrang no. 45 samping polda jabar', '081222202327'),
(35, 'PT.PERKASA ADI DAYA INDONESIA', 'pasar moderen puncak permai No.67 jl.raya darmo permai III', '081332675888'),
(36, 'AYI EXPEDISI', 'caringin', '085223220000'),
(37, 'JHOSS PRANATA SETIAWAN', 'Jakarta', '081224233443'),
(38, 'PT.USAHA MUDA', 'No. 8 Desa Kedungpane, Ngaliyan, Jl. Anyar Duwet, Bringin, Ngaliyan', '081904400542'),
(39, 'CV. Raja Pipa Indonesia', 'TAMAN ROYAL 3, JL. AKASIA 1 BLOK AS 4 NO. 9 CIPONDOH', '081298407788'),
(40, 'PT.SAHABAT MITRA INTRABUANA', 'jl.mangga besar V no.53', '02162308800'),
(41, 'PT.KHAIMAR INDOFREIGHT', 'Jl. Venus Barat. No:  17/46. Margahayu Bandung Jawa Barat', '081394351772'),
(42, 'PT. MITRA AGUNG TEKINDO', 'Taman Kopo Katapang Blok G3/02', '0225893862'),
(43, 'MUST ENERGY GROUP LIMITED', 'RM 1007,10/F,HO KING CTR(MNH2969),2-16 FA YUEN ST', '018219523774'),
(44, 'SUOER', 'jl.hidup baru, kompleks gunung sahari permai blok E 24/25', '0811187866'),
(45, 'PT.LEN INDUSTRI', 'Jl. Soekarno-Hatta No.442, Pasirluyu, Regol ,40254', '081224388852'),
(46, 'PT. SURYA ENERGI INDOTAMA', 'Jl. Soekarno-Hatta No.501, Cijagra, Lengkong, 40265', '08112030531'),
(47, 'JIANGSU BOSIWEI OPTOELECTRONICS GROUP CO., LT', 'LINGTANG INDUSTRY PARK, GAO YOU DISTRICT', '015150867588'),
(48, 'PT.TEKNOTATA INDONESIA', 'jl.raya bali beshaki 2 No.22 Sentul city bogor', '081210337299'),
(49, 'ZJ.Elektrik', 'Gedung Kenari AKS LT.2 No.027', '082299040876'),
(50, 'Trannergy Co., Ltd.', '188 Weiwu Road,201802 Shanghai', '013611954021'),
(51, 'YUEQING FEEO ELECTRIC CO.,LTD', 'Chandong Industrial zone Liushi Yueqing', '086577618000'),
(52, 'BAPA HENDI', 'BANDUNG', '081809090945'),
(53, 'Slocable Solar Technology Co., Ltd', 'Huawei Scientific Valley NO.1, Dalingshan Town', '013662882712'),
(54, 'MENTARI SOLAR LED', 'lindeteves trade center(LTC Glodok) Lt1 blok C42 No.1-2 jalan hayam wuruk No.127 taman sari jakarta', '081212291887'),
(55, 'CHINALAND SOLAR ENERGY CO.,LTD', 'feidong new city ekonomic depelopment zone,hefei', '013155769658'),
(56, 'PT. CANADIAN SOLAR INDONESIA', 'Pasir Bolang, Tigaraksa Kec., Tangerang, Banten 15720', '081310213888'),
(57, 'PT. MULTI MAS PERKASA', 'Paramount Center II Blok B  No.15 Jl. CBD Gading Serpong', '081310213888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_barang_keluar`
--

CREATE TABLE `input_barang_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_barang_keluar`
--

INSERT INTO `input_barang_keluar` (`id_keluar`, `id_barang`, `id_customer`, `jumlah_keluar`, `catatan`, `tanggal_keluar`) VALUES
(1, 9, 1, 10, 'diambil', '2019-09-12'),
(2, 1, 1, 20, '', '0000-00-00'),
(3, 3, 2, 144, '', '0000-00-00'),
(4, 0, 0, 40, '', '0000-00-00'),
(5, 127, 4, 40, '', '0000-00-00'),
(6, 127, 2, 40, '', '0000-00-00'),
(7, 127, 4, 10, '', '0000-00-00'),
(8, 127, 1, 30, '', '0000-00-00'),
(9, 127, 2, 20, '', '0000-00-00'),
(10, 127, 1, 15, '', '0000-00-00'),
(11, 127, 2, 30, '', '0000-00-00'),
(12, 127, 1, 10, '', '0000-00-00');

--
-- Trigger `input_barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` AFTER INSERT ON `input_barang_keluar` FOR EACH ROW BEGIN
	UPDATE data_barang SET stok=stok-NEW.jumlah_keluar
    WHERE id_barang = NEW.id_barang;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_barang_masuk`
--

CREATE TABLE `input_barang_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_barang_masuk`
--

INSERT INTO `input_barang_masuk` (`id_masuk`, `id_barang`, `id_supplier`, `jumlah_masuk`, `catatan`, `tanggal_masuk`) VALUES
(10, 8, 4, 12, '', '2019-09-12'),
(15, 9, 4, 100, '100', '2019-09-12'),
(16, 9, 9, 123, '123', '2019-09-12'),
(20, 0, 0, 134, 'aas', '0000-00-00'),
(21, 0, 0, 123, 'aaaaa', '0000-00-00'),
(22, 3, 6, 144, 'aw', '0000-00-00'),
(23, 3, 9, 3000, '', '0000-00-00'),
(24, 2, 1, 122, '', '0000-00-00'),
(25, 2, 5, 14, '', '0000-00-00'),
(26, 127, 2, 17, 'barang', '0000-00-00'),
(27, 127, 5, 20, '', '0000-00-00'),
(28, 127, 1, 50, '', '0000-00-00'),
(29, 127, 2, 10, '', '0000-00-00'),
(30, 127, 3, 30, '', '0000-00-00'),
(31, 127, 1, 15, '', '0000-00-00'),
(32, 127, 1, 50, '', '0000-00-00');

--
-- Trigger `input_barang_masuk`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `input_barang_masuk` FOR EACH ROW BEGIN
	UPDATE data_barang SET stok=stok+NEW.jumlah_masuk
    WHERE id_barang = NEW.id_barang;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'fauzan', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `input_barang_keluar`
--
ALTER TABLE `input_barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `input_barang_masuk`
--
ALTER TABLE `input_barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_supplier`
--
ALTER TABLE `data_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `input_barang_keluar`
--
ALTER TABLE `input_barang_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `input_barang_masuk`
--
ALTER TABLE `input_barang_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
