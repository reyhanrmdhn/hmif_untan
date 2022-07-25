-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jul 2022 pada 14.48
-- Versi server: 10.3.35-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokojeru_webinarhmif3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `id_webinar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `absen` int(11) NOT NULL,
  `sertifikat` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `id_webinar`, `id_user`, `absen`, `sertifikat`) VALUES
(1, 3, 2, 1, ''),
(2, 3, 3, 1, ''),
(3, 3, 4, 1, ''),
(4, 3, 5, 1, ''),
(5, 3, 6, 1, ''),
(6, 3, 7, 1, ''),
(7, 3, 8, 1, ''),
(8, 3, 9, 1, ''),
(9, 3, 10, 1, ''),
(10, 3, 11, 1, ''),
(11, 3, 12, 1, ''),
(12, 3, 13, 1, ''),
(13, 3, 14, 1, ''),
(14, 3, 15, 1, ''),
(15, 3, 16, 1, ''),
(16, 3, 17, 1, ''),
(17, 3, 18, 1, ''),
(18, 3, 19, 1, ''),
(19, 3, 20, 1, ''),
(20, 3, 21, 1, ''),
(21, 3, 22, 1, ''),
(22, 3, 23, 1, ''),
(23, 3, 24, 1, ''),
(24, 3, 25, 1, ''),
(25, 3, 26, 1, ''),
(26, 3, 27, 1, ''),
(27, 3, 28, 1, ''),
(28, 3, 29, 1, ''),
(29, 3, 30, 1, ''),
(30, 3, 31, 1, ''),
(31, 3, 32, 1, ''),
(32, 3, 33, 1, ''),
(33, 3, 34, 1, ''),
(34, 3, 35, 1, ''),
(35, 3, 36, 1, ''),
(36, 3, 37, 1, ''),
(37, 3, 38, 1, ''),
(38, 3, 39, 1, ''),
(39, 3, 40, 1, ''),
(40, 3, 41, 1, ''),
(41, 3, 42, 1, ''),
(42, 3, 43, 1, ''),
(43, 3, 44, 1, ''),
(44, 3, 45, 1, ''),
(45, 3, 46, 1, ''),
(46, 3, 47, 1, ''),
(47, 3, 48, 1, ''),
(48, 3, 49, 1, ''),
(49, 3, 50, 1, ''),
(50, 3, 51, 1, ''),
(51, 3, 52, 1, ''),
(52, 3, 53, 1, ''),
(53, 3, 54, 1, ''),
(54, 3, 55, 1, ''),
(55, 3, 56, 1, ''),
(56, 3, 57, 1, ''),
(57, 3, 58, 1, ''),
(58, 3, 59, 1, ''),
(59, 3, 60, 1, ''),
(60, 3, 61, 1, ''),
(61, 3, 62, 1, ''),
(62, 3, 63, 1, ''),
(63, 3, 64, 1, ''),
(64, 3, 65, 1, ''),
(65, 3, 66, 1, ''),
(66, 3, 67, 1, ''),
(67, 3, 68, 1, ''),
(68, 3, 69, 1, ''),
(69, 3, 70, 1, ''),
(70, 3, 71, 1, ''),
(71, 3, 72, 1, ''),
(72, 3, 73, 1, ''),
(73, 3, 74, 1, ''),
(74, 3, 75, 1, ''),
(75, 3, 76, 1, ''),
(76, 3, 77, 1, ''),
(77, 3, 78, 1, ''),
(78, 3, 79, 1, ''),
(79, 3, 80, 1, ''),
(80, 3, 81, 1, ''),
(81, 3, 82, 1, ''),
(82, 3, 83, 1, ''),
(83, 3, 84, 1, ''),
(84, 3, 85, 1, ''),
(85, 3, 86, 1, ''),
(86, 3, 87, 1, ''),
(87, 3, 88, 1, ''),
(88, 3, 89, 1, ''),
(89, 3, 90, 1, ''),
(90, 3, 91, 1, ''),
(91, 3, 92, 1, ''),
(92, 3, 93, 1, ''),
(93, 3, 94, 1, ''),
(94, 3, 95, 1, ''),
(95, 3, 96, 1, ''),
(96, 3, 97, 1, ''),
(97, 3, 98, 1, ''),
(98, 3, 99, 1, ''),
(99, 3, 100, 1, ''),
(100, 3, 101, 1, ''),
(101, 3, 102, 1, ''),
(102, 3, 103, 1, ''),
(103, 2, 3, 1, ''),
(104, 2, 4, 1, ''),
(105, 2, 7, 1, ''),
(106, 2, 8, 1, ''),
(107, 2, 12, 1, ''),
(108, 2, 20, 1, ''),
(109, 2, 23, 1, ''),
(110, 2, 34, 1, ''),
(111, 2, 45, 1, ''),
(112, 2, 48, 1, ''),
(113, 2, 51, 1, ''),
(114, 2, 52, 1, ''),
(115, 2, 54, 1, ''),
(116, 2, 60, 1, ''),
(117, 2, 63, 1, ''),
(118, 2, 64, 1, ''),
(119, 2, 65, 1, ''),
(120, 2, 67, 1, ''),
(121, 2, 68, 1, ''),
(122, 2, 70, 1, ''),
(123, 2, 78, 1, ''),
(124, 2, 81, 1, ''),
(125, 2, 98, 1, ''),
(126, 2, 99, 1, ''),
(127, 2, 102, 1, ''),
(128, 2, 104, 1, ''),
(129, 2, 105, 1, ''),
(130, 2, 106, 1, ''),
(131, 2, 107, 1, ''),
(132, 2, 108, 1, ''),
(133, 2, 109, 1, ''),
(134, 2, 110, 1, ''),
(135, 2, 111, 1, ''),
(136, 2, 112, 1, ''),
(137, 2, 113, 1, ''),
(138, 2, 114, 1, ''),
(139, 2, 115, 1, ''),
(140, 2, 116, 1, ''),
(141, 2, 117, 1, ''),
(142, 2, 118, 1, ''),
(143, 2, 119, 1, ''),
(144, 2, 120, 1, ''),
(145, 2, 121, 1, ''),
(146, 2, 122, 1, ''),
(147, 2, 123, 1, ''),
(148, 2, 124, 1, ''),
(149, 2, 125, 1, ''),
(150, 2, 126, 1, ''),
(151, 2, 127, 1, ''),
(152, 2, 128, 1, ''),
(153, 2, 129, 1, ''),
(154, 2, 130, 1, ''),
(155, 2, 131, 1, ''),
(156, 2, 132, 1, ''),
(157, 2, 133, 1, ''),
(158, 2, 134, 1, ''),
(159, 2, 135, 1, ''),
(160, 2, 136, 1, ''),
(161, 2, 137, 1, ''),
(162, 2, 138, 1, ''),
(163, 2, 139, 1, ''),
(164, 2, 140, 1, ''),
(165, 2, 141, 1, ''),
(166, 2, 142, 1, ''),
(167, 2, 143, 1, ''),
(168, 2, 144, 1, ''),
(169, 2, 145, 1, ''),
(170, 2, 146, 1, ''),
(171, 2, 147, 1, ''),
(172, 2, 148, 1, ''),
(173, 2, 149, 1, ''),
(174, 2, 150, 1, ''),
(175, 2, 151, 1, ''),
(176, 2, 152, 1, ''),
(177, 2, 153, 1, ''),
(178, 2, 154, 1, ''),
(179, 2, 155, 1, ''),
(180, 2, 156, 1, ''),
(181, 2, 157, 1, ''),
(182, 2, 158, 1, ''),
(183, 2, 159, 1, ''),
(184, 2, 160, 1, ''),
(185, 2, 161, 1, ''),
(186, 2, 162, 1, ''),
(187, 2, 163, 1, ''),
(188, 2, 164, 1, ''),
(189, 2, 165, 1, ''),
(190, 2, 166, 1, ''),
(191, 2, 167, 1, ''),
(192, 2, 168, 1, ''),
(193, 2, 169, 1, ''),
(194, 2, 170, 1, ''),
(195, 2, 171, 1, ''),
(196, 2, 172, 1, ''),
(197, 2, 173, 1, ''),
(198, 2, 174, 1, ''),
(199, 2, 175, 1, ''),
(200, 2, 176, 1, ''),
(201, 2, 177, 1, ''),
(202, 2, 178, 1, ''),
(203, 2, 179, 1, ''),
(204, 2, 180, 1, ''),
(205, 2, 181, 1, ''),
(206, 2, 182, 1, ''),
(207, 2, 183, 1, ''),
(208, 2, 184, 1, ''),
(209, 2, 185, 1, ''),
(210, 2, 186, 1, ''),
(211, 2, 187, 1, ''),
(212, 2, 188, 1, ''),
(213, 2, 189, 1, ''),
(214, 2, 190, 1, ''),
(215, 2, 191, 1, ''),
(216, 2, 192, 1, ''),
(217, 2, 193, 1, ''),
(218, 2, 194, 1, ''),
(219, 2, 195, 1, ''),
(220, 2, 196, 1, ''),
(221, 2, 197, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_webinar3`
--

CREATE TABLE `peserta_webinar3` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `timestamp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta_webinar3`
--

INSERT INTO `peserta_webinar3` (`id`, `nama`, `email`, `telp`, `timestamp`) VALUES
(1, 'Raihan Ramadhan', 'reyhanrmdhn1@gmail.com', '0895600225408', ''),
(3, 'Altaf Syahrastani', 'syahrastanialtaf@gmail.com', '085821461898', ''),
(6, 'Ari Adrian', 'ariadrian0907@gmail.com', '085822394443', '13-11-2021 12:05:39'),
(7, 'Faul Oliber Mario Siagian', 'faul@student.untan.ac.id', '0895702375819', ''),
(8, 'RAFIIG DAFFA RAMADHAN', 'rafiig22@gmail.com', '082351812513', ''),
(9, 'Ponsianus Jopi', 'ponzzy22@gmail.com', '082150040132', ''),
(11, 'Novianto', 'noviantonew@gmail.com', '082112470094', '13-11-2021 15:43:30'),
(12, 'Khairunnisa', 'kh.khairunnisa@gmail.com', '0895327125024', '13-11-2021 17:36:18'),
(13, 'Mas Rudini', 'mas.rudini13@gmail.com', '082151499547', '13-11-2021 19:33:41'),
(14, 'Mas Rudini', 'mas.rudini13@student.untan.ac.id', '082151499547', '13-11-2021 19:42:58'),
(15, 'Khansa Syafika', 'khansasyafika@student.untan.ac.id', '082251920006', '13-11-2021 19:48:49'),
(16, 'Wirda Dwi Hana Ningsih', 'wirdaningsih2480@gmail.com', '089650913330', '13-11-2021 20:27:34'),
(17, 'Rizki Rahmi Nabilah', 'rizkirahminabilah@gmail.com', '087735391570', '13-11-2021 20:28:36'),
(18, 'dinda aurelia sania', 'dindaurelias@Gmail.com', '085754635525', '13-11-2021 20:59:29'),
(19, 'Raihan', 'juniorfreestyle1@gmail.com', '0895600225408', '14-11-2021 09:49:06'),
(20, 'Altaf', 'altafsyahrastani7@student.untan.ac.id', '085821461898', '14-11-2021 09:50:34'),
(21, 'Naomi Ryohan', 'naomiryohan26@student.untan.ac.id', '08979973088', '14-11-2021 09:51:41'),
(22, 'TRIO OCTAVIAN SYAH', 'trioocta55@gmail.com', '089689570244', '14-11-2021 10:16:44'),
(23, 'Caren Riady', 'carenriady@student.untan.ac.id', '+628125793321', '14-11-2021 11:08:37'),
(24, 'Ilham Dimas Prayudha', 'ilhamdimasprayudha@student.untan.ac.id', '089694774652', '14-11-2021 11:16:59'),
(25, 'BENIDITUS LAPUNG', 'benidituslapung12@gmail.com', '082150764369', '14-11-2021 11:20:40'),
(26, 'Agnes Theresia Marpaung', 'theremar8@gmail.com', '089693693244', '14-11-2021 11:35:56'),
(27, 'PINSENSIUS DUPIS', 'pinsensiusdupis@student.untan.ac.id', '085822266464', '14-11-2021 11:45:05'),
(28, 'SOFHIANI OVY', 'sofhianisofhiani69@gmail.com', '085751707326', '14-11-2021 11:51:03'),
(29, 'Abdul Rahman Wahid', 'wahidabdul2801@gmail.com', '082163045471', '14-11-2021 12:04:08'),
(30, 'Claudia Delvia Pangati', 'delvi050402@gmail.com', '085813764891', '14-11-2021 12:24:37'),
(31, 'DONALIUS', 'donaliusdosantos22@gmail.com', '085849152246', '14-11-2021 13:51:28'),
(32, 'DONALIUS', '21421425_donalius@widyadharma.ac.id', '085849152246', '14-11-2021 14:00:14'),
(33, 'Bella Intani Mawadah', 'bellaintani131@student.untan.ac.id', '081350578303', '14-11-2021 14:34:23'),
(34, 'Faizal Ansyori', 'faizalansyori2@gmail.com', '0895701867626', '14-11-2021 14:44:50'),
(35, 'Wiwin Galuh Prayetno', 'wiwingaluhprayetno1@gmail.com', '089602694533', '14-11-2021 15:34:11'),
(36, 'Miekel Jerianto', 'miekeljerianto@student.untan.ac.id', '081212016797', '14-11-2021 15:45:55'),
(37, 'Sony Anderson', 'sonyandersonnnn@gmail.com', '089669792765', '14-11-2021 15:46:25'),
(38, 'Ida Bagus Putu Suwidya Darma', 'idabagusputu96@student.untan.ac.id', '089699000669', '14-11-2021 16:32:46'),
(39, 'Roby Ronal Vieri Simanjuntak', 'd1041201026@student.untan.ac.id', '089668341683', '14-11-2021 16:35:58'),
(40, 'Fathimah Nur Ummami', 'umamixx@gmail.com', '089666898008', '14-11-2021 17:23:46'),
(41, 'Muhammad Nur Amin', 'muhammadamin0598@gmail.com', '085252215103', '14-11-2021 18:41:57'),
(42, 'Mery Septiani', 'septianim490@gmail.com', '085751352691', '14-11-2021 18:50:06'),
(43, 'Noveria Hernas', 'nvrhernas@gmail.com', '081248480828', '14-11-2021 18:57:38'),
(44, 'Nella Yuliarni', 'nella.esya@gmail.com', '085346746542', '14-11-2021 20:27:40'),
(45, 'Galuh Dwi Pranoto', 'galuhdwipranoto@student.untan.ac.id', '085691051724', '14-11-2021 22:07:12'),
(46, 'Anggraini Ayu Lestari', 'anggraini.ayu209@student.untan.ac.id', '089688320483', '15-11-2021 05:50:43'),
(47, 'Jasmine Fatimah Kanam', 'jasmine_fk@mhs.unsyiah.ac.id', '081210088515', '15-11-2021 07:45:33'),
(48, 'Eraldo', 'eraldoaldo43@student.untan.ac.id', '0895630146746', '15-11-2021 08:10:39'),
(49, 'Nabila Widya Andita', 'nabilawidyaaa210801@gmail.com', '085751382637', '15-11-2021 09:39:10'),
(50, 'Fikri Adi Wicaksono', 'fikriadiwicaksono@student.untan.ac.id', '081350290875', '15-11-2021 10:09:19'),
(51, 'Yuansyah Hardian Putra Pratama', 'yuan3132@student.untan.ac.id', '089691826745', '15-11-2021 10:35:14'),
(52, 'Nia Renika', 'niareynikha856@gmail.com', '085347854909', '15-11-2021 11:02:37'),
(53, 'NATALIA ARTIKA', 'd1041211008@student.untan.ac.id', '081392585553', '15-11-2021 13:15:56'),
(54, 'ROSI FARINTIKA', 'rosifarintika@student.untan.ac.id', '0895392832467', '15-11-2021 13:32:22'),
(55, 'Ade Rizaldi', 'ade.rizaldi@student.untan.ac.id', '089665565388', '15-11-2021 13:48:39'),
(56, 'Ihsan Maulana', 'ihsanz10@student.untan.ac.id', '089676795021', '15-11-2021 15:53:20'),
(57, 'Angelina Elfrida Wibowo', 'd1041201058@student.untan.ac.id', '089508961678', '15-11-2021 16:12:09'),
(58, 'Muhammad Ridwansyah', 'mr.mridwansyah@gmail.com', '081253694621', '15-11-2021 16:43:44'),
(59, 'mulidan ', 'mulidan131296@gmail.com', '081349624797', '15-11-2021 18:37:11'),
(60, 'David Eleazar', 'elzdave@student.untan.ac.id', '085822589556', '15-11-2021 18:40:38'),
(61, 'Dhimas Rangga Irza Ruizsandi', 'd1041211022@student.untan.ac.id', '082148679964', '15-11-2021 19:49:25'),
(62, 'Anna', 'annasikhatul000@gmail.com', '088225230351', '15-11-2021 19:53:34'),
(63, 'Garnis Setia R', 'garnisniar@gmail.com', '085852343104', '15-11-2021 20:55:39'),
(64, 'Agung Tuah Ananda', 'anan474@student.untan.ac.id', '085251293285', '15-11-2021 22:23:02'),
(65, 'Anna', 'annasikhatulaniqoh@gmail.com', '088225230351', '15-11-2021 22:47:47'),
(66, 'Ya\' Muhammad Nazar', 'yamuhammadnazar@gmail.com', '085751715012', '16-11-2021 06:48:19'),
(67, 'YENDI AGUSTRIADI', 'yendiagustriadismk@gmail.com', '085155112092', '16-11-2021 07:12:31'),
(68, 'Muhammad Rizki Azhar', 'riskiazhar07@gmail.com', '082357771113', '16-11-2021 09:40:47'),
(69, 'Dyah ayu tri maywati ', 'ayudyahtmw98@gmail.com', '089514793069', '16-11-2021 10:31:41'),
(70, 'Reza Charlos Imanuel', 'rezshacrls@gmail.com', '085156651773', '16-11-2021 10:59:44'),
(71, 'Veronika', 'ikav8361@gmail.com', '08152116255', '16-11-2021 11:05:26'),
(72, 'Elrica Luvena', 'rikaluvna2@student.untan.ac.id', '089693784991', '16-11-2021 13:34:13'),
(73, 'Kusmayuda', 'kusmayuda@student.untan.ac.id', '085246654030', '16-11-2021 13:42:40'),
(74, 'Vemmy Rebecca Rohana Malau', 'vemmyrebecca@gmail.com', '085266421116', '16-11-2021 13:55:55'),
(75, 'Tiara Valentia Dewi Aswan', 'tiarasamadiant321@gmail.com', '089669667296', '16-11-2021 13:59:13'),
(76, 'Tomy Jarvindo', 'tjarvindo@gmail.com', '089521840080', '16-11-2021 14:14:35'),
(77, 'URAY DEANTI', 'H1101201034@student.untan.ac.id', '0895342035943', '16-11-2021 14:22:36'),
(78, 'Akbaras', 'Akbar.ade.s@gmail.com', '081316090356', '16-11-2021 14:33:06'),
(79, 'Akbaras', 'Akbar1312@gmail.com', '081316090356', '16-11-2021 14:33:32'),
(80, 'Caroline', 'crlnegrce@student.untan.ac.id', '089625197818', '16-11-2021 14:52:26'),
(81, 'Maya Tiara Ayu', 'h1101201038@student.untan.ac.id', '081250480200', '16-11-2021 14:55:54'),
(82, 'Vidita Reka', 'viditareka@student.untan.ac.id', '085880763457', '16-11-2021 15:00:08'),
(83, 'DARLINDA', 'darlinda601@gmail.com', '08979750779', '16-11-2021 15:21:22'),
(84, 'Alfarizi', 'alfaariizii2712@student.untan.ac.id', '087753567523', '16-11-2021 15:29:13'),
(85, 'maxdha maxiwinata', 'maxdhamaxi@gmail.com', '085289608680', '16-11-2021 15:30:34'),
(86, 'Erlina Rizky', 'errlinarr10@gmail.com', '085878782565', '16-11-2021 15:54:38'),
(87, 'Siauling', 'siauling@student.untan.ac.id', '083141767694', '16-11-2021 16:05:42'),
(88, 'Offiani Manalu', 'offianimanalu@gmail.com', '082249576521', '16-11-2021 16:08:07'),
(89, 'Adam Ramdan', 'adam.ramdan@ummi.ac.id', '0895365085079', '16-11-2021 16:14:29'),
(90, 'Regita Dwi Cahyani ', 'regitadwicahyani@student.untan.ac.id', '0895387619923', '16-11-2021 16:18:41'),
(91, 'Said', 'saidbnw@gmail.com', '082228325616', '16-11-2021 16:22:15'),
(92, 'Alfarizi', 'alfaariizii2712@gmail.com', '087753567523', '16-11-2021 16:29:04'),
(93, 'Christine Putri', 'christine.putri@binus.ac.id', '082276193459', '16-11-2021 17:03:21'),
(94, 'Stefano Vincent', 'stefano.hardjamuliono@binus.ac.id', '082199370186', '16-11-2021 17:11:15'),
(95, 'YUNIKA FITRIANI', 'yunikafitriani9@gmail.com', '08126858036', '16-11-2021 17:13:36'),
(96, 'Alfain Ilham Maulana', 'alfainmaulana@gmail.com', '082133065424', '16-11-2021 17:31:35'),
(97, 'Raihan', 'reyhanrmdhn@student.untan.ac.id', '0895600225408', '16-11-2021 18:30:49'),
(98, 'Said', 'said.14@students.amikom.ac.id', '082228325616', '16-11-2021 18:43:34'),
(99, 'Mutiara Fitri Ramadhanti', 'mutiarafitri2000@gmail.com', '089694611872', '16-11-2021 19:00:20'),
(100, 'Ida Ayu Gede Marsya Aurelia', 'mrsyaurl@gmail.com', '089517652669', '16-11-2021 19:30:16'),
(101, 'Sonia Wati ', 'soniawati711@gmail.com', '081807999311', '16-11-2021 19:45:57'),
(102, 'Nana', 'pmdibangkabelitung@gmail.com', '085645645443', '16-11-2021 19:57:23'),
(103, 'TRI MULYOTO', 'yuzarsiftri@gmail.com', '085856291384', '16-11-2021 20:12:08'),
(104, 'Maulana Rosandy', 'rosandy1118@gmail.com', '0895397738345', '16-11-2021 21:40:14'),
(105, 'Okky Chandra', 'okkychandra.okt@gmail.com', '082157026328', '16-11-2021 23:03:34'),
(106, 'David', 'davidgerry@student.untan.ac.id', '081953517909', '17-11-2021 00:40:31'),
(107, 'Edwin Pradana', 'edwinpradana41@student.untan.ac.id', '08998885425', '17-11-2021 01:32:35'),
(108, 'Lidia Windiarti', 'lidiawindiarti@gmail.com', '085750829846', '17-11-2021 06:27:22'),
(109, 'Muhammad Ifdal', 'ifdalmuhammad47@gmail.com', '081257395965', '17-11-2021 10:07:48'),
(110, 'Yora Okta A.R.', 'yoraoktaar10@gmail.com', '081281357050', '17-11-2021 10:24:15'),
(111, 'Aditya Luthfir Rahman', 'adityaluthfir93@gmail.com', '085822636700', '17-11-2021 12:50:57'),
(112, 'Gusti Muhammad Furkan Azmi', 'gusti.furkanazmi@student.untan.ac.id', '089678396131', '17-11-2021 13:15:38'),
(113, 'Muhammad Fachrullian Zaki Muttaqin', 'rangebrawler@student.untan.ac.id', '089509167654', '17-11-2021 13:20:55'),
(114, 'Haried Novriando', 'haried@untan.ac.id', '085350789070', '17-11-2021 13:21:47'),
(115, 'Hisarman Saragih', 'hisarcode@gmail.com', '089604076006', '17-11-2021 13:44:21'),
(116, 'Yus Sholva', 'sholvariza@untan.ac.id', '085315939943', '17-11-2021 14:15:31'),
(117, 'Yus Sholva', 'sholvariza@gmail.com', '085315939943', '17-11-2021 14:18:44'),
(118, 'Eric Dharmawan', 'ericdharmawan.ed@gmail.com', '08984485279', '17-11-2021 15:02:40'),
(119, 'Lo Bun San', 'kirito.leo77@gmail.com', '081244752500', '17-11-2021 15:27:49'),
(120, 'Theodora Azzuhra ', 'Theara1306@gmail.com', '085720092080', '17-11-2021 16:14:11'),
(121, 'Moh Subhan', 'subkh4n@gmail.com', '085755400023', '17-11-2021 16:45:22'),
(122, 'Fajrie Dwi Oktofri', 'fajriedwioktofri@gmail.com', '089629539032', '17-11-2021 16:52:21'),
(123, 'Ade Maulidianti', 'ade.maulidianti@student.untan.ac.id', '082191990207', '17-11-2021 17:35:04'),
(124, 'Ponco Sunarko', 'sunarkoponco@student.untan.ac.id', '089514013044', '17-11-2021 17:36:15'),
(125, 'Adrisius Juna Perkasa', '21421404_adrisius_j_p@widyadharma.ac.id', '089512921487', '17-11-2021 17:41:02'),
(126, 'Adrisius Juna Perkasa', 'junasaja932@gmail.com', '089512921487', '17-11-2021 17:41:19'),
(127, 'Adrisius Juna Perkasa', 'adrisiusjunaperkasa@gmail.com', '089512921487', '17-11-2021 17:42:50'),
(128, 'Adrisius Juna Perkasa', 'junaperkasa37@gmail.com', '089512921487', '17-11-2021 18:02:06'),
(129, 'Sania Lina Sumarni', 'sanialinasumarni@student.untan.ac.id', '089618914156', '17-11-2021 19:08:44'),
(130, 'Beni', 'beni07if@gmail.com', '0898-2950-531', '17-11-2021 20:11:12'),
(131, 'Afif', 'andiabdulafif@gmail.com', '081247327450', '17-11-2021 21:18:44'),
(132, 'Grace Stella', 'gracestellasim@gmail.com', '0895378872776', '17-11-2021 21:40:40'),
(133, 'Grace Stella', 'gracestella1704@gmail.com', '0895378872776', '17-11-2021 22:00:49'),
(134, 'Very shafrudin', 'very.shafrudin@gmail.com', '085754209559', '17-11-2021 22:07:20'),
(135, 'Plassida viona', 'plassidaviona16@student.untan.ac.id', '082350514302', '17-11-2021 22:13:30'),
(136, 'Ayyusra', 'nurainiayusra@student.untan.ac.id', '089638811909', '17-11-2021 22:40:32'),
(137, 'Ayyusra', 'nurainiayusra@gmail.com', '089638811909', '17-11-2021 22:41:45'),
(138, 'Dafa Arya Nugraha', 'dafaaryanugraha2610@student.untan.ac.id', '083151436192', '17-11-2021 22:57:49'),
(139, 'Gilang Catur Yudishtira', 'gilangcaturyudistira@gmail.com', '089531045813', '18-11-2021 07:46:01'),
(140, 'Nabila', 'nabilaafitriani9@gmail.com', '089514693254', '18-11-2021 09:30:17'),
(141, 'Novia Fadina', 'fadinanov01@gmail.com', '08989659789', '18-11-2021 11:13:11'),
(142, 'Muhammad Thariq Akbari', 'thoriqakbari11@gmail.com', '089694746140', '18-11-2021 11:38:43'),
(143, 'Egilius Jodhi Soares', 'eghiliusjodhyjoe@student.untan.ac.id', '08565373128', '18-11-2021 12:46:10'),
(144, 'Vidya Al-qadri', 'vidyaalqadri45@student.untan.ac.id', '083151546184', '18-11-2021 12:54:41'),
(145, 'M Nur Amin Usman', 'aminus4612@gmail.com', '085694836836', '18-11-2021 13:09:33'),
(146, 'Fathurohman Khairid Fauzan', 'fathurohmankf@gmail.com', '089618410542', '18-11-2021 13:11:27'),
(147, 'Muhammad Satria Kurniawan', 'muhsatria8@gmail.com', '0895423144111', '18-11-2021 13:18:07'),
(148, 'Anna', 'annabsi851@gmail.com', '089637994920', '18-11-2021 14:29:43'),
(149, 'Bima Arifa Rachman', 'bimaarifa@student.untan.ac.id', '95895704855745', '18-11-2021 14:42:28'),
(150, 'Michson', '4rtboard@gmail.com', '081265791707', '18-11-2021 14:56:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'reyhanrmdhn1@gmail.com'),
(2, 'faul.sisfo@gmail.com'),
(3, 'faul.sisfo@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` int(15) NOT NULL,
  `instansi` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `telp`, `instansi`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'HMIF FT UNTAN', 'hmif@informatika.untan.ac.id', 2147483647, 'HMIF FT UNTAN', 'isr.png', '$2y$10$PG8McX5UMvZ8r6Yae5edEemAjeTMqItXJWvk80x3OCeAxl2.HH/72', 1, 1, '2021-11-29 02:50 pm'),
(2, 'Gilang Catur Yudishtira', 'gilangcaturyudistira@gmail.com', 0, 'Universitas Indonesia', 'isr.png', '$2y$10$jT053OVdtqHiQBNhry1jc.cPTQo0mqk3Lv4RRmgDy9kxYCorW2tSW', 2, 1, ''),
(3, 'Vidya Al-qadri', 'vidyaalqadri45@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$ktmbU2Y.OOGxhE.A5SqrE.IMYLXf6Tf7F6inTEYqT0dRHWtyh5RpG', 2, 1, ''),
(4, 'Nella Yuliarni', 'nella.esya@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$jlP55JrIcRW8Bos3R8s3buCy7GNb0T0UM2avE9fBqO6Oqc8UTWPoG', 2, 1, ''),
(5, 'Egilius Jodhi Soares', 'eghiliusjodhyjoe@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$orJUY8mYsiQEsiZTcaeHGurQ19fwAawtnh/BdUEtDQHdLUUDT/jtS', 2, 1, ''),
(6, 'Agung Tuah Ananda', '49un974@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$G5UAyYV5qk3eoh3mv2uhre0aymqAPNAOlFUS.s0gEaGCeHucCIbXG', 2, 1, ''),
(7, 'Haried Novriando', 'haried@untan.ac.id', 0, 'Universitas tanjungpura', 'isr.png', '$2y$10$yMpnZo4THSY07Q.ufwPcJOa1KfTe98W02Y1UiK7Q3ihgShAi3Tx06', 2, 1, ''),
(8, 'Yuansyah Hardian Putra Pratama', 'yuan3132@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$P75T5AlPen8vysPJ.QgXfOou4PSYVcW542nYVW.wWJQJRFavfA0y.', 2, 1, ''),
(9, 'ROBY RONAL VIERI SIMANJUNTAK', 'd1041201044@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$HzYjhqiXwA8TF2b5XWRCgeGL7PvkNQxvb1fMArHYNCoV/kpNR7mqe', 2, 1, ''),
(10, 'Fathurohman Khairid Fauzan', 'fathurohmankf@gmail.com', 0, 'Universitas Amikom Yogyakarta', 'isr.png', '$2y$10$EqymFSlCb6JiWWT.G8jEOe8m6kN5.QlLDzD4hYC8caY0IxXTQDMGG', 2, 1, ''),
(11, 'Riski Armada', 'armadariski73@gmail.com', 0, 'Universitas Nahdlatul ulama Kalimantan barat', 'isr.png', '$2y$10$z84dAbwA3dmva5ls6LyPZuRfRON1ImLD/a4NgLn7RCWtvJ0ddlHfu', 2, 1, ''),
(12, 'Fajrie Dwi Oktofri', 'fajriedwioktofri@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$gZ4fCQXtITxZaRXixtaRVewd5ZOeo8LmwlNXlPzYzFVxJpjFFjzkW', 2, 1, ''),
(13, 'Rezza Maulana', 'rezza.maulana@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$KqPoXsFdzhsZ9KNXrhYsPuCTHIWcmSnmcPw2nwmBzqe8E3l4P2way', 2, 1, ''),
(14, 'Dea Nanda', 'denanda2012@gmail.com', 0, 'Universitas Nahdlatul Ulama Kalimantan Barat', 'isr.png', '$2y$10$rk6em.eWK3VMAtb4q71A9.7VhzP.wwwHXzwwX8AVE6rhDgi2UJd36', 2, 1, ''),
(15, 'Muhammad Rizki Azhar', 'riskiazhar07@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$CijdTDBrUWWu2TdJlRjoLueCmqEYdlO0avSfeKIF9FV7w966z8Sx2', 2, 1, ''),
(16, 'David Gerry', 'davidgerry@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$pZ4KaC7kNpT/xNQ807u18udI7X4nYLFDb5aRxWzayBGRFDUEmtzoe', 2, 1, ''),
(17, 'Nabila Widya Andita', 'nabilawidyaaa210801@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$mAM87wKA1wn7xnse8Sud9ur9f58pJ6OP3/ZnCRYCDNd32w.jOeZ5i', 2, 1, ''),
(18, 'Yunika Fitriani', 'yunikafitriani9@gmail.com', 0, 'Universitas Andalas', 'isr.png', '$2y$10$/zLrfhAP4hVnoR8kc1K.gOSL1zfrOnXWLle0azYrM0Euy6IF.fZv2', 2, 1, ''),
(19, 'Regita Dwi Cahyani', 'regitadwicahyani@student.untan.ac.id', 0, 'Untan', 'isr.png', '$2y$10$3i8hYwy176iuNG9OuKYmBOvWbylMbv.FsU20iO1go2vtLGnoPQlz6', 2, 1, ''),
(20, 'Fathimah Nur Ummami', 'umamixx@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$apL.ua16eAsA/4niXk41xeaPCzEMNIqYIvciW503LACypawybwkTm', 2, 1, ''),
(21, 'Muhammad Imam Akbar', 'muhammadimamakbar2001@gmail.com', 0, 'Universitas Nahdlatul Ulama Kalbar', 'isr.png', '$2y$10$VA5bNKdLWYAc44nZrp0xtucRC7XH0hagMvBcCR/0I0DlzNgY52yN2', 2, 1, ''),
(22, 'Siauling', 'siauling@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$K92lVBct4Jc9ZLVclfoapuPds1KUOQCRC.ZIQ4Z2lfJIHKyzAtnkm', 2, 1, ''),
(23, 'Yus Sholva', 'sholvariza@untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$QY/GG9ISzStQ8IPLJT.9iecH2ZNFXpMF/xYyYh96.N1VeolRoIBJa', 2, 1, ''),
(24, 'Imron Khusayni', 'imronkhusayni212@gmail.com', 0, 'Universitas Nahdlatul Ulama', 'isr.png', '$2y$10$2kcZWH0b6efoNxbuLhvcH.o84/7sDaVxPxl2pYY03I.tccHvNv9Mq', 2, 1, ''),
(25, 'Aditya Luthfir Rahman', 'adityaluthfir93@@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$2Vkpmt.aEgL572D57gvQ7OqVl2pEKCPZdHn99Zb82Uv3Wq5flROX2', 2, 1, ''),
(26, 'Garnis Setia Rahmadhaniar', 'garnisniar@gmail.com', 0, 'POLITEKNIK STIBISNIS', 'isr.png', '$2y$10$GgOuhh6qfGQxBK1sXgmJ/OyqXlaPHp1iQrQeMagAVeswep/hIiY2a', 2, 1, ''),
(27, 'Muhammad Dimas prabu putragus', 'dimas.prabu231@gmail.com', 0, 'Universitas Nahdlatul ulama Kalimantan barat', 'isr.png', '$2y$10$IMUaD4k3FI6JCWcpTnDR4.8qlxYKGZjg1w9bis677uy.Y2UuEL8/S', 2, 1, ''),
(28, 'Husnul Yaqin', 'husnulyaqin2021@gmail.com', 0, 'Universitas Nahdatul Ulama Kalimantan Barat (UNU KALBAR)', 'isr.png', '$2y$10$OYYwz7IFKT7yqsNLJ7lIuOa6pNn1SwJaAkbbiK9o7apPlbgxl6.Oi', 2, 1, ''),
(29, 'Fahrul Razi', 'fachrulrazi890@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$DbSkIS/M8u1ZpyAcDR9vqOOdt2jsa0/98h3gZ4jLH/ebPOjaG71Ee', 2, 1, ''),
(30, 'Trio Octavian Syah', 'trioocta55@gmail.com', 0, 'Universitas Tanjung Pura', 'isr.png', '$2y$10$lC9svfDgnvL5qgdRmgJ.W.8DglekGR3/OMUb3/5sgAH58ffN78Brq', 2, 1, ''),
(31, 'Ida Ayu Gede Marsya Aurelia', 'mrsyaurl@gmail.com', 0, 'Institut STIAMI', 'isr.png', '$2y$10$BGWiFER/B7gUpxPn.hLaZuqzJ5LFX27xp2fI0Kls1peGUkqNTDt3W', 2, 1, ''),
(32, 'Theodora A.D', 'theara1306@gmail.com', 0, '-', 'isr.png', '$2y$10$GfEEpULxrQ4WgHiwS4koZed8ykDcIrgYO5TB7HASxDSrSSYcHMOny', 2, 1, ''),
(33, 'David Eleazar', 'elzdave@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$glvJMi2XNAKIyCGVJDGTc.u2iJ/lfLpGd9HXMcJ13I/HGshv0ymke', 2, 1, ''),
(34, 'Riyan Agung Saputra', 'riyanagungsaputrapraja@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$mvS4WIUnSaBLg3N5LsPwmO.yl5pgZ/vaC4ZXhnxQWI3UzkvOI11Ye', 2, 1, ''),
(35, 'Adrisius juna perkasa', '21421404_adrisius_j_p@widyaharma.ac.ic', 0, 'universitas widya dharma', 'isr.png', '$2y$10$6X1vgmtyhmEeR17o1hhuKucTzSHNyDnTSRmR3anB9YCeiOWcHRm.u', 2, 1, ''),
(36, 'Nuraini Ayusra', 'nurainiayusra@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$mUQww5CiUQbhcITNLcFptOGqGRzUpHBU0.tHYfLeu4hFkSNwtrNRS', 2, 1, ''),
(37, 'Dyah Ayu Tri Maywati', 'ayudyahtmw98@gmail.com', 0, 'universitas tanjungpura', 'isr.png', '$2y$10$xdz0D5qyKvy5pJCkI3MhLO4LSdeIg0a0B6lquwpGFsIM2w8Aa/la.', 2, 1, ''),
(38, 'Muhammad Fachrullian Zaki Muttaqin', 'rangebrawler@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$fiZKYZjlemOGgj/LHgRXUOVOa03xMUt52Yo3znX/JqschEgSA155e', 2, 1, ''),
(39, 'Faizal Ansyori', 'faizalansyori2@gmail.com', 0, 'Institut Teknologi PLN', 'isr.png', '$2y$10$zVzq0O/3kHDsMBfqaYCSYuTgbGvbI6xtiAZUqZ41Hc.aIil5KVpHu', 2, 1, ''),
(40, 'Abdul Qodir', 'abd.qodirjailani0707@gmail.com', 0, 'Universitas Nahdlatul Ulama Kalimantan Barat', 'isr.png', '$2y$10$qpr1KesP0rrJo3/6icHHOuqC/cKdBf/LTLsxcNbWwlK13GVclCxpG', 2, 1, ''),
(41, 'ROSI FARINTIKA', 'rosifarintika@stundent.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$LprLpLQsx7Qn8h7l0dYQqO.3ZAtP2Bbv3nyyghfJGbibLdMUOxQJu', 2, 1, ''),
(42, 'Eraldo Jonathan Ramadhan', 'eraldoaldo43@student.untan.ac.id', 0, 'UNTAN', 'isr.png', '$2y$10$GbeTfCVER7bcjV.Jpy.57OTbXHJ/W7Y4lIpLSqqtcjEc/LuOcTJcG', 2, 1, ''),
(43, 'Edwin Pradana', 'edwinpradana41@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$vqWuIKzod3BeOt0z8f8mzuLqLSkKMdYoJbb7H55bHs8CRCeaUHHRK', 2, 1, ''),
(44, 'Offiani Manalu', 'offianimanalu@gmail.com', 0, 'Universitas HKBP Nomensen Medan', 'isr.png', '$2y$10$Ez3L9vSDy/hrvW25RHI7f.5m3D5aNtaUcoi.VZDBzIrKQOe2Twwm.', 2, 1, ''),
(45, 'Ade Rizaldi', 'ade.rizaldi@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$hfLQLqLDqYNKmjEWb3lSd.WgES5hJrq4vixDv9X59Nf3FbnT.DLF2', 2, 1, ''),
(46, 'Anna Sikhatul Aniqoh', 'annasikhatulaniqoh@gmail.com', 0, 'Polkesmar', 'isr.png', '$2y$10$p.78CyPrFHQSEodKVqES8.w5DEaYu8SGglVCT7HAKVzmKj9GfsDfm', 2, 1, ''),
(47, 'NATALIA ARTIKA', 'natadetyca09@gmail.com', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$0kNgnsBB5wJ5N3jlpmvt0eVvRZe.O8.f.qbuWMqYlOlXoimCZqIAW', 2, 1, ''),
(48, 'Veronika', 'ikav8361@gmail.com', 0, 'Sekolah Tinggi Teologi Khatulistiwa sintang', 'isr.png', '$2y$10$2gJRJq6.pUOlbNx8dpYz3OL.3ZUNQOhYYkJF2eU05FDiYzHQNkv6a', 2, 1, ''),
(49, 'Faul Oliber Mario Siagian', 'faul.sisfo@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$2UfcpJnXgDobXWxrx1u/7OPtTRocRYsTIgITCmTNLZUWTfuJsXKbO', 2, 1, ''),
(50, 'Plassida Viona', 'plassidaviona16@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$9I/K.mPeAQZUk4pCC4qlK.8FG.16shsHwMAk6fFcxvIsGfiIm7GxW', 2, 1, ''),
(51, 'Dafa Arya Nugraha', 'dafaaryanugraha2610@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$EE5mQqqVApNdHkwUZYjkWeo1fSiKbKdSzGQhZ9/wOQjH/uJND9Pui', 2, 1, ''),
(52, 'Ade Maulidianti', 'ade.maulidianti@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$JDSZw.WLzY3CAfkxnVNDHe7PN2N7WvXix5k8WDS4NMnYVwVmP.gRy', 2, 1, ''),
(53, 'Anggraini Ayu Lestari', 'anggraini.ayu209@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$7/5/iWn0v8SeTtQr2XVaB.170tFuHyrqWkhgBJVL.dOsMiWp5gso2', 2, 1, ''),
(54, 'Maya Tiara Ayu', 'h1101201038@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$LyoViv11R/QjKeEO8ETSaeRVFNU0OUVUjnO9hK2Jdp9W8WeM9xpGa', 2, 1, ''),
(55, 'Christine Putri', 'christine.putri@binus.ac.id', 0, 'Bina Nusantara University', 'isr.png', '$2y$10$Rhyq5hFicDZgSWP3fhxCLe8Cqq1qk/qJFuYxXmjke9YfZRX1VgnDS', 2, 1, ''),
(56, 'Maulana Rosandy', 'rosandy1118@gmail.com', 0, 'Politeknik Negeri Malang', 'isr.png', '$2y$10$aKv3tCHd5Vd0hAz0ATH8oOQGibQVvNS99IeRqspM2qXFtZyBZaJ.q', 2, 1, ''),
(57, 'Jasmine Fatimah Kanam', 'jasmine_fk@mhs.unsyiah.ac.id', 0, 'Unsyiah', 'isr.png', '$2y$10$yZ2Sba1fTOvcji7Cbbmheeapb5d7TA1c7aWIIqHSAQKZ.ik28oxMi', 2, 1, ''),
(58, 'Agnes Theresia Marpaung', 'theremar8@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$bS1yQPaiDlJzoY2cvDz5qeQcIs8OzmyaRD8IFTuSuBQ1.tHu7JDxm', 2, 1, ''),
(59, 'Bella Intani Mawadah', 'bellaintani131@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$SKZxCMPEhSvdIYkpSP1KpeKsKuKRVaryQc.Jxl0r15wsnrx4dVR86', 2, 1, ''),
(60, 'Sony Anderson', 'sonyandersonnnn@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$6Ba4JyUhuqY1/S976Ej7f.7BYXrIjdfhUN0ZqmaQ8ETxrE6VS.85a', 2, 1, ''),
(61, 'PINSENSIUS DUPIS', 'pinsensiusdupis@untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$XUL3FJLtD/sXUYxsvPucx.85Tiu15vAdoP8KBtWy0eVpM4olRMPnS', 2, 1, ''),
(62, 'Novia Fadina', 'fadinanov01@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$sbzNHPuGNMygmUrJEgVSDOpR0PLM7UzSaTOBr/lH9HBjuysvE3BSi', 2, 1, ''),
(63, 'Sania Lina Sumarni', 'sanialinasumarni@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$2CfJmRhlgFDuq0P0jBjYDOI58prvAT5UbafHvzaR17IlAl/aBTPoW', 2, 1, ''),
(64, 'Elrica Luvena', 'rikaluvna2@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$2Bt74B6C.6WoLGv/xkR7/OoCu37uEHQGAgEaTW8w6jKJKbl2.cgyW', 2, 1, ''),
(65, 'Grace Stella', 'gracestellasim@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$gHxKz.nuNh094jsS1WqV5u6JDyz.JPImhUKVPxeQ84o2B8UaR8wfe', 2, 1, ''),
(66, 'Muhammad Ifdal', 'D1041211014@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$od8flvRAOhSp6zd4iQry7eQvR8yf0d.ZXKN7UcKr64ZPp4TJ93cnO', 2, 1, ''),
(67, 'Ihsan Maulana', 'ihsanz10@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$Q4a/6cI/CDpbnI0j6IndkeeoP8MSs7FBYcyScoTkQMTWp0MEoiKdu', 2, 1, ''),
(68, 'Mutiara Fitri Ramadhanti', 'mutiarafitri2000@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$usQWGQNJlDd6/GvFsuSsBORMRJsZRl2TjpTuF67yrf2G6rRbU5.Tu', 2, 1, ''),
(69, 'Maxdha Maxiwinata', 'maxdhamaxi@gmail.com', 0, 'IPB University', 'isr.png', '$2y$10$za0EJ/ArAT8DQwjNTwZIWOpgt0U81F1LFt3diAyUEFyGJufed04MO', 2, 1, ''),
(70, 'Caren Riady', 'carenriady@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$WqY9DtmTLZ6M7XoIAoMDp.hzKYx5glsGpZCUh0nr.Q7ZwaF2TapDC', 2, 1, ''),
(71, 'Yora Okta Aviani R.', 'yoraoktaar10@gmail.com', 0, 'Universitas Brawijaya', 'isr.png', '$2y$10$wIJj3ClXZ6a0V.Wq7nf14uGTBuxwaLopoF3zxO3oS5OZ0gqZKNZHS', 2, 1, ''),
(72, 'Kusmayuda', 'kusmayuda@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$MT9RamGDVbCB3SUd8A9LQ.W.QU93icg1/z8qeWboWRTODosSiwpoi', 2, 1, ''),
(73, 'Muhammad Ridwansyah', 'mr.mridwansyah@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Y.P3C2EwcWKp2xflAGEWAO2A78FHHnswTTygsaBzrehhxhq.7fcj6', 2, 1, ''),
(74, 'Wiwin Galuh Prayetno', 'wiwingaluhprayetno1@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$UhWlfzywGuQonRa.Gv1H8OKn2C1B6N4A/jsqmUsJNwMshLRN6OI02', 2, 1, ''),
(75, 'Rafiig Daffa Ramadhan', 'rafiig22@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$RZa3RbpiM9k5sDBGxiThAOBeHlDHSfH6yPEOOtDHN2rTj7F9Ml9Du', 2, 1, ''),
(76, 'Muhammad Nur Amin', 'muhammadamin0598@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Lob97nBgDYWiqpAoGVGdA.IeMTAX0NBmFlBJBBZY9OFwruSWFfbpS', 2, 1, ''),
(77, 'Moh Subhan', 'subkh4n@gmail.com', 0, 'UT', 'isr.png', '$2y$10$EnHdWuhk.YmJuc9Hfmv3b.n3ZjuT9eDnkasmoion8PPjO9E/85i/S', 2, 1, ''),
(78, 'Fikri Adi Wicaksono', 'fikriadiwicaksono@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$/ysLBPMVV42BQ0WJJZZKeOo8790OBCauFCJiCEMu4XHRJ9Zy8cc36', 2, 1, ''),
(79, 'Muhammad Nur Amin Usman', 'aminus4612@gmail.com', 0, 'UIN Syarif Hidayatullah Jakarta', 'isr.png', '$2y$10$Oyd7E05qJttBkULtVenXMeACI9oaI.I.3.Ko4i9bHvkh4wYhkNmg6', 2, 1, ''),
(80, 'Wirda Dwi Hana Ningsih', 'wirdaningsih2480@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Anen0uInSFWJ.X68yldmauZO5e3T5dUp4kZXRxyBhgUaZOWFlqdgC', 2, 1, ''),
(81, 'Velagia iga', '21421480_velagia_i@widyadharma.ac.id', 0, 'Universitas Widya Dharma Pontianak', 'isr.png', '$2y$10$AlTmptZdmAqY/d/CvqoSH.BJH/RAs1./pqmxKknwpr6H02WIrGp8a', 2, 1, ''),
(82, 'Lo Bun San', 'loesan_lion77@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$SU50IE1Vpvp/D6X2TBHxcedc7wz5NiwbEI6wcBciV35d9wUNaeV4i', 2, 1, ''),
(83, 'Naufal Arkhan Hadianto', 'arkhantmc@gmail.com', 0, 'Universitas Islam Indonesia', 'isr.png', '$2y$10$3B7.2xbUnTN3j5nER81cIe4j/A71hFB/AifsLX.c.6Sa9RhUdRqb6', 2, 1, ''),
(84, 'Ayu Sri Wahyuni', 'ayyusriwahyuni050598@gmail.com', 0, 'Stimik Borneo Internasional Balikpapan', 'isr.png', '$2y$10$ULW5YQ0clFJn/rxJX/Ox2OpHF0jSDxjxvXmsHJxznrCrWXSmf87Wm', 2, 1, ''),
(85, 'mukarromah', 'mukarramahmomo@gmail.com', 0, 'Universitas Nahdlatul Ulama KALBAR', 'isr.png', '$2y$10$93BPEbiYf0VnpKIVZ83rKuXaX61sj2ykjmy8nERZJMBH4Kb7cfocG', 2, 1, ''),
(86, 'Alfiah', 'alfiahabdullah7@gmail.com', 0, 'UNU Kalbar', 'isr.png', '$2y$10$1tAirGqFrCqx7x60coqMO.pqGZQWQwysbnfxbBP.rR.rfW9ttk7.m', 2, 1, ''),
(87, 'Ponco Sunarko', 'sunarkoponco@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Rpu/lvxaxog.eSEd5dcJ9.J8Ih8BvaMAy1hYWHe1W/TnhwiqH/PcG', 2, 1, ''),
(88, 'siti arbilah', 'sitiarbila12345@gmail.com', 0, 'UNU Kalbar', 'isr.png', '$2y$10$.hNAyIooAFuUCsX6oFiuauCQ1wMxchsdhBqrAs2PhHeD//2EVZSJq', 2, 1, ''),
(89, 'Vidita Reka', 'viditareka@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$LhHnMFXD87urliFMCoHLs.ix9b3mOEACSKJ7fNJWtk.nZBf.Squae', 2, 1, ''),
(90, 'Rizki Rahmi Nabilah', 'rizkirahminabilah@gmail.com', 0, 'Poltekkes Kemenkes Pontianak', 'isr.png', '$2y$10$ugLVsBAKnpp8RenASJy0meh8Rh3TjBVGT9QkuIodu1h6TTP4UufE2', 2, 1, ''),
(91, 'Tri Mulyoto', 'yuzarsiftri@gmail.com', 0, 'Universitas Negeri Malang', 'isr.png', '$2y$10$Zi8a.gXBOwZCTvoM5cNI1udSBSlWPzI5bI6E.7w7WM7Bp6FeB2Nuu', 2, 1, ''),
(92, 'Andi Abdul Afif Alwan', '19521181@students.uii.ac.id', 0, 'UII', 'isr.png', '$2y$10$OdSsul1j8JaFsU.mit4KZ.E3cLruSpKaIMa59TmQZipsl71xDgEs.', 2, 1, ''),
(93, 'Aditya Pratama', 'adityapratamabadra@gmail.com', 0, 'UNU Kalbar', 'isr.png', '$2y$10$eMqCm5BnlK/FDXpHxImT9enCTWNbcpfZcOpjX.CUpO8GNWoN3CKra', 2, 1, ''),
(94, 'Apriandi Firmandani', 'apriandifirmandani@gmail.com', 0, 'Universitas Nahdlatul Ulama', 'isr.png', '$2y$10$uoN4rVm3fU.ApsTmk1yYReEWsHFaq8GL5vwS.9iFcDOqolDldJOWO', 2, 1, ''),
(95, 'irwan adhi prasetya', 'irwanadhi@gmail.com', 0, 'untan', 'isr.png', '$2y$10$M4zX1SfZkavB8oh8yWYZu.OvuN5alxjALe1dNP2bM.xnKcMegMfVy', 2, 1, ''),
(96, 'Khairunnisa', 'kh.khairunnisa@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$JyRyo3W4RS9n58Cy9Z3rcehp69Onaj.ggkdPPjZ0cGM9ToXUwmgOq', 2, 1, ''),
(97, 'Tania putri zamzani', 'taniaptrzmzn@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$kJTnVr7klJmKjhQa2hHQL.RkxjBvTyAq3FAgENgLzkwVaENVsglp.', 2, 1, ''),
(98, 'DONALIUS', '21421425_donalius@widyadharma.ac.id', 0, 'Universitas Widya Dharma Pontianak', 'isr.png', '$2y$10$EgEnVdG6Bpfr.F5vbTRYHeP5cylDWqKQbiAwOMGxDzSfX5LYAboVe', 2, 1, ''),
(99, 'Gusti Muhammad Furkan Azmi', 'gusti.furkanazmi@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$r1jXFtHegdXV0.IUC6FKguBo2OY718XXEBXKXbb562s21Db5r.CeW', 2, 1, ''),
(100, 'Beni', 'beni07if@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Tnoh34MGd13cciRF.4xjROxvcWRV34yxdreVGNrKNnYnLS1x7PA1q', 2, 1, ''),
(101, 'Bibiyana Widiarti', 'bibiyanawidiarti24@gmail.com', 0, 'Universitas Nahdlatul ulama Kalimantan barat', 'isr.png', '$2y$10$GV5oaxyXCRT0jwJQJILGDOU7NI5xUnWKZVhT/cnRoC.tJXgffSXQ.', 2, 1, ''),
(102, 'Maiko Febriano Legi', 'maikoflegi27@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$5HxNvF/xOQq/P0Gy4WeaSuAS8/zcHW5ltVQNr5ot52az7CxMmcH9y', 2, 1, ''),
(103, 'Hasanah', 'bintaniahmad@gmail.com', 0, 'UNIVERSITAS NAHDLATUL ULAMA', 'isr.png', '$2y$10$4fll3kTuxiCefJ/ltbI8Nez5nBWSaI9ffdeN3ySGfuSImnZzNma0K', 2, 1, ''),
(104, 'Tri Rejeki', 'trirejeki@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$d01lsqPlRuVghBKtDXT6Suxe.j0DBcmnsDjejY26adHEVU06Cdusm', 2, 1, ''),
(105, 'Fortunatus Adhiethera Tuah Putra', 'adhiethera355@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$jarLAwgUFf0d6Z/paqUU8eP3wrAAjxRHvPXrXHhqI5S4KctHTgEgu', 2, 1, ''),
(106, 'Dhimas Rangga Irza Ruizsandi', 'd1041211022@student.untan.ac.id', 0, 'UNTAN', 'isr.png', '$2y$10$GhD1anxcboI54ZFUr0e64uqoUQ.m9n8At/qm./Vq0IbNfXeG3rM/W', 2, 1, ''),
(107, 'Dinda desita ayu', 'd1041211041@student.untan.ac.id', 0, 'Universitas tanjungpura', 'isr.png', '$2y$10$eRxkWsiLJkxh1UbbBhCERuYXzFU8GOp1mZ9sK6MwUTkcMZyniXGlq', 2, 1, ''),
(108, 'Muhammad Zaky Taufiq', 'zakytaufiq04@gmail.com', 0, 'Politeknik Negeri Pontianak', 'isr.png', '$2y$10$1gDWLqQKOlWbMJL1Hc9oBOHW90WpAHBnXEP4A4AwxMqZtJXDRBFxq', 2, 1, ''),
(109, 'Ando Riswanto', 'ando.riswanto@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$3dklkQEeBWW8VA2zy6LUCe9HJ3v4Isb6fNXYPmG320LZD.XIbMH.e', 2, 1, ''),
(110, 'Claudia delvia pangati', '21421422_claudia_d_p@widyadharma.ac.id', 0, 'Universitas widya dharma pontianak', 'isr.png', '$2y$10$62ocu4gXXxSUvkwF7AOb1eNEA2ATCZh21ktF4AApuTSfh6mbHiWiW', 2, 1, ''),
(111, 'Fransiska Diertania', '21421439_fransiska_d@widyadharma.ac.id', 0, 'Widya Dharma', 'isr.png', '$2y$10$HBWrFHzLAP3RZtcD27CmZ.tNZLkduOoskw42sUVqoM3Srp1MG.Uwe', 2, 1, ''),
(112, 'Shalom Putri Maharani Taringanen', 'shalomputri21@gmail.com', 0, 'Politeknik Negeri Manado', 'isr.png', '$2y$10$MabRYzvW2nltt16hztg28O78L6Qlj0V6cipEdR/DADC2ui/MthZO6', 2, 1, ''),
(113, 'Ilham Dimas Prayudha', 'ilhamdimasprayudha@student.untan.ac.id', 0, 'Universitan Tanjungpura', 'isr.png', '$2y$10$ChXbzM0vXA8DDKC.jrwJUeiR3vMhkWyiJechvGe4ymj10lzLycXeG', 2, 1, ''),
(114, 'ANGELINA ELFRIDA WIBOWO', 'd1041201058@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$WDzigvwCn/1b8cEZ76fIROgCIbCNN7aszL431YMQhHk385HJYHp6S', 2, 1, ''),
(115, 'Ida Bagus Putu Suwidya Darma', 'idabagusputu96@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$gR17p17RnLVAf2FuLrPy8eaYp9ecjFm1Cb9ZEeQDqJe7mBvzL8nvi', 2, 1, ''),
(116, 'Mery septiani', 'septianim490@gmail.com', 0, 'Universitas widya dharma pontianak', 'isr.png', '$2y$10$kEZjB6soUZm7qBsl1qX8ze1sjb4t72G3hDPT3D3YLH0kEpKp6H5LG', 2, 1, ''),
(117, 'Fikri Zyanafri', 'fikrizyanafri@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$LYH50VoiTNUVO69tRCeF7.wsRCYdoMLanxo1S/QQIIbWLlvE.A0JS', 2, 1, ''),
(118, 'Ricky Andreas', 'arikindreas@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$PmqEvTFrJOMyPzw9wAoXcey16tUTmVQL9xDUV5EzoSb8VIiC.YwVG', 2, 1, ''),
(119, 'Muhammad Fahrul Ramadhan', 'fhrl.rmdhn.19@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$ZQBoNCt0fcIBY1j14M1CRO2EaBv6p2pJvaKwEfHOrEzXC3ufqkhw2', 2, 1, ''),
(120, 'Adrisius juna perkasa', 'junasaja932@gmail.com', 0, 'universitas widya dharma pontianak', 'isr.png', '$2y$10$.yUskBDWLvbpb9JGInvAgeJJqmwJP3pr5mm2QmahYFqzR585A8IO2', 2, 1, ''),
(121, 'AYU FEBRYANTI SIMANJUNTAK', 'g1011201327@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$YF9/t8L/joXoD3EvFoOF6.Mn8OnNqbtokAALI8SV/p67ZM9PHwQz2', 2, 1, ''),
(122, 'Roy Stenly Yosafat', 'roystenlyy@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$j9vL.kR5aiDIBFT3As2oxeKu/VqTGaGg0toe8FMphcj.h8TLTfV66', 2, 1, ''),
(123, 'Yovani Nissi Madani', 'yovaninmketaren@gmail.com', 0, 'Universitas Sumatera Utara', 'isr.png', '$2y$10$UVrNUoeFKiXqec83PeyWc.FSY10LCOwk9ZOJtP.4JFkqotZRxXwgS', 2, 1, ''),
(124, 'Felix Liando', 'fliando1023@gmail.com', 0, 'Widya Dharma Pontianak', 'isr.png', '$2y$10$z/2TUcpCN9f0hVGkJd3RXuLemAuSas6wzGBb5jQAnsunTBi2jEREi', 2, 1, ''),
(125, 'Wahyu Haikal Akbar', 'wahyuhaikal1631@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$UnDp5bHX.oFIl8h64l1zpegE8xN8wbaj1QORtqDs8ieHGRyHqsDli', 2, 1, ''),
(126, 'Agus Hartono Simangunsong', 'agussimangunsong47@gmail.com', 0, 'Universitas tanjungpura', 'isr.png', '$2y$10$VYqcV2PzoWX8ZOXcHPqhLOtPwD0owuld51lREYiDwwQmrPcZtrI1u', 2, 1, ''),
(127, 'Arinda Dinnia Widyanti', 'ardinnfo@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$EuAJeA0gbWB3GFTqSFbGGu3B75vQcb.tjNbiTqWb9LAIUiaYNv/ee', 2, 1, ''),
(128, 'Muharam Rizqi Ananda', 'muharam123@student.untan.ac.id', 0, 'Untan', 'isr.png', '$2y$10$SmlH4.q1HQvVpRxzAFX4a.HsCMA8zQPsu3lm16Gs2Y1HFtlgJQcSC', 2, 1, ''),
(129, 'Restu Anugrah', 'restu25anugrah@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$wH7fi3HCBsI2TzQl515CSuCsEqJsSo/raRxYFKU38DORtFa5HE1rO', 2, 1, ''),
(130, 'Sendi Ardianto', 'sendiardiantoliu@gmail.com', 0, 'Universitas Widya Dharma', 'isr.png', '$2y$10$MCjmXT5FpTJ8DvFUJ3ay.OZeZo/74wrTIVBlOnDJAtzVW57jxzM1K', 2, 1, ''),
(131, 'Cintya', 'cintya@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$6POkPdMiFolJQw/NDZ8alurOI5G0iRY/oPQput8kn1hjj6JzPWeNu', 2, 1, ''),
(132, 'Arini Shofa Imania', 'd1041201055@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$CXIFxXyDMvogTEhjkkhEW.qRZ29wtj/VfSA87cSeiz8/ou29O27Re', 2, 1, ''),
(133, 'MORTEZA MUTHAHHARI', 'morteza.muthahhari@teknik.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$2vSQVa/Orrei2L47WOanHO4xtEzkCig/MIeEbDY1zCGwCsniWhUyy', 2, 1, ''),
(134, 'Audina Puteri Fasya Theofany', 'masyhudijunior@gmail.com', 0, 'Universitas Muhammadiyah Surakarta', 'isr.png', '$2y$10$GKGMJ5Tn1ndSkit3L9t9geHEGqgbOQE/WT82naG9S4c1Bdw1nJh2W', 2, 1, ''),
(135, 'Akmal Sakirin', 'd1041201050@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$qu4UGIOR4LvcASLuzZEdAesajuPFRJ7xHsFLxS.adIItMiZuE5TYy', 2, 1, ''),
(136, 'Ibnun Nizham', 'D1041201043@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$FmeqJYJhaWBKiex2L1tHv.t/OucV7Rw39a.XCaxl.Qqrtv6.UMj0O', 2, 1, ''),
(137, 'Aby syahdila faturahman', 'abysyahdila.faturahman@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$KRdtnpnY8z5TCBDbOaXblOGp.NosvvqralONm68SvLJxr7ZQnLtdu', 2, 1, ''),
(138, 'Diva Adinda Maharani', 'd1041201057@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$PI1DQYnO.DNJ4MF4gem7TuKd9WpdBYkSD0FeSww7SOgzG2vXXBRYa', 2, 1, ''),
(139, 'Susanti Sri Utami', 'susantisriutami0204@gmail.com', 0, 'Universitas Respati Yogyakarta', 'isr.png', '$2y$10$CHUk2qVtA3e0HbrUHQ64Bexbfpt7pnJTKrkxivIKXFLnsDtrZw8wa', 2, 1, ''),
(140, 'Galuh Kusuma Putri', 'd1041201003@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$XyMXY.TATZig6h72ns.w0OBBPppezgDiilnoqAhku3A8JcT2e.iz6', 2, 1, ''),
(141, 'Hyadukuoning Roqal', 'd1041211028@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$vkHv9h8vD5jJonfixZGQh.DsUEyG.OZCVebi4YdIFn69xL5DM3Nom', 2, 1, ''),
(142, 'Dr. Ir. Purwoharjono, S.T., M.T., IPM.', 'purwoharjono@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$tMU6MXt5QqZZNr5Vxnlff.3pPjQGan3CQcWQmGKG.GWtUNh0tr.Ty', 2, 1, ''),
(143, 'Dwisuci Rahmadani', 'd1041201008@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$CyEE6T5mQcfYHdMPkHTxEe1c7nzREc6.kRkRJIj1kuPvnQFG7qgw2', 2, 1, ''),
(144, 'Novia Fadina', 'D1041211003@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$woCyJeavx1eIi6VZHmsQ7uERq8L56h6EX4EhhVRzaDH1eZDAPfUpK', 2, 1, ''),
(145, 'Diah Nilam Cahya', 'jamaisvu1301@gmail.com', 0, 'Universitas Sains Al-Quran', 'isr.png', '$2y$10$ariWmREDqeOyIFiYzlDlkOvDRFLMspGVTi.1gUH/TtSlngC6LakYC', 2, 1, ''),
(146, 'Muhammad Faturachman Atthaariq', 'atthaariq@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$X2EHLXOta2JclagnGMzfkuJsgmxTtQYYfuppOkuJKGamqq.X20Cp.', 2, 1, ''),
(147, 'Nicholas Cannavaro', 'nicholascannavaro1@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$YqrYhCsMQt6uG9S0cct53OlbEfD5Xzevb4/uxBPjoKVZos2.76kD6', 2, 1, ''),
(148, 'Jorgy Laksamana Putra', 'd1041201064@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$TXhbk/wyLsnjgmIjA/88TOfxdRP9i00wQi3ufcJgORfJ.3EZSEOSa', 2, 1, ''),
(149, 'Rachman Dwi Putra', 'rachmandwiputra@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$DoW0DVBE8HBhFsv/zmO/2uhaVtsyz0N3FN74hD2jLdygjx4zimtt2', 2, 1, ''),
(150, 'FERRY WIJAYA CHAI', 'D1041201011@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Tob57YpzHK8WHnKC90MKDeD.2bQIIxz24Zu0pfhRqAj8WSBZbh/AK', 2, 1, ''),
(151, 'MUHAMMAD MAULANA ZAKARIA', 'D1041201060@STUDENT.UNTAN.AC.ID', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$dynzvzvQ1R2E5/F7cIhof.qIxmZqyMov//PGdpsQTeMQc97KCRMfW', 2, 1, ''),
(152, 'Wisnu Prayitno', 'd1041211033@student.untan.ac.id', 0, 'Universitas Tanjung Pura', 'isr.png', '$2y$10$qo7aOY8t1M0OgKYGvXAaO.j8tHbPajiVp8jFrdpt7AF8h3GHsM7D2', 2, 1, ''),
(153, 'Yunda Rasta Andini', 'D1041211038@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$/KThORbFv.V1QFAHbAd3getq9rVYtdQU/GFEWjttXQS2cxL9WGYae', 2, 1, ''),
(154, 'NOVITA ANGGRAINI', 'fixvita2019@gmail.com', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$33rNsWk1y6WiP6QNKPd6muXYv8ESNxUIheQgQCTPcM.5uAd2ypBUC', 2, 1, ''),
(155, 'Ahmad Fakhri', 'fakhri.ahmad030304@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$ii91cAB8zudK9.n6PVR7suEDi0tSS8809t9kXQiDBBa4cUmeM7.Fe', 2, 1, ''),
(156, 'Pravasta Guntur Kinantaka', 'd1041201017@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$81ssftSY0rCdMkwm0FFs1eUInkPSXiwwLEdti71QqdQQkZv9c.Ud2', 2, 1, ''),
(157, 'Gilang Muhammad Hasbillah Hanie', 'd1041201015@student.untan.ac.id', 0, 'Universitas Tanjung Pura', 'isr.png', '$2y$10$AtGogRtzBW2K6RGVuLUMreVfckSyQJwdoRo.FG7AhRFLaJiETo01i', 2, 1, ''),
(158, 'Fanidya Nur Hawa', 'd1041211037@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$mpzfmy9GvvNhDmL7KM6Edu6qLCF8xJJZG5LucFWFQZN7n9BW.hHAW', 2, 1, ''),
(159, 'Fika Tsalsabila Tinanda', 'fikatsalsabilat15@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$a1JCLVQiJqtukIzXIMX8bOnzXCx7LQyRKH47SBimau8vFbP8JlXnm', 2, 1, ''),
(160, 'Muhammad Zhia Ijlal', 'D1041211052@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$qJvsXARk3aeMlAhOAFNS3.vhqnwBDfmlyml4f5vb7dW5L5zWrIlQm', 2, 1, ''),
(161, 'Reza Rahmasari', 'd1041201007@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$UYIPjPcLcsoSoGd6WjJVeeG8f.ZNFHwrjABwhNaI2lQZ6Oz4W1VyW', 2, 1, ''),
(162, 'Enrico Jatmiko', 'enricojatmiko30@gmail.com', 0, 'Universitas Widya Dharma Putra', 'isr.png', '$2y$10$gJ/EJ94T7JhbYTPgA3mIiecm/kIOwDsCIqriKuFJuaGING8M2pqkW', 2, 1, ''),
(163, 'Naomi Ryohan', 'naomiryohan26@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$rioEyOZGGIidlbvTqQr0NeRu2yUxKiemgxbNWazVaGafDBhtb62XC', 2, 1, ''),
(164, 'RANDA FIRMAN PUTRA', 'd1041211043@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$7ylirkB6v.fHCnWuIJpCYeJYWsY5Glt8C82tbzD4rlrAzYpte92Q6', 2, 1, ''),
(165, 'Novian Rendy Wijaya', 'renboy@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$caCEkw/TymCX6G0Sf10S6OYmotLwr0J9U8RJhdq53boHxLAGROqVO', 2, 1, ''),
(166, 'Amirul Dewa Rizky', 'd1041201028@student.untan.ac.id', 0, 'UNTAN', 'isr.png', '$2y$10$iEBsRg0tBhEV4JixxtEp9uqjbX3ZHQOCgezh3M88Kb7pbqZGJNvc.', 2, 1, ''),
(167, 'Pieter Immanuel', 'galacticmon041@gmail.com', 0, 'Universitas Widya Dharma', 'isr.png', '$2y$10$sCv0cybuit1OSs4eErJ3bOgWyDs6gU/.h.6p48Yxe38rh55y56qq2', 2, 1, ''),
(168, 'nanda widya', 'nandawidya@student.untan.ac.id', 0, 'universitas tanjungpura', 'isr.png', '$2y$10$SOuvJzYxnLZHhhDs2TFGyOn2bna.6XdMU5JkWOisSj1liWNRG47gm', 2, 1, ''),
(169, 'RENDY KURNIAWAN', 'd1041201013@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$oahVXK0bMvxEf4d5hOyG9.nIE7TlWoQ6GBkpjWaPPyn2xq.gS1Mqa', 2, 1, ''),
(170, 'Dzaki Zuhditiya Maulana', 'd1041201065@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$/TTWSydOnp5OPD2G4sm3I.ipo2pUzhSb7.7vhBMgOjiEBtDvnqnlG', 2, 1, ''),
(171, 'Wilson Jap', 'd1041211050@student.untan.ac.id', 0, 'Universitas Tanjung Pura', 'isr.png', '$2y$10$30OsJtBShaPh7qL3wfX7luOokJ6/wckl4vFK5RcgzgZJfXOP1ISvu', 2, 1, ''),
(172, 'Permata Dewi Andini', 'permatadewiandini11@gmail.com', 0, 'Universitas Muhammadiyah Pontianak', 'isr.png', '$2y$10$qdcAV0Rwj6qLO7/12qEpkO9dy7ufwyYrAx9588Cvi8suJUxQNgpHa', 2, 1, ''),
(173, 'Anisa Muharni', 'D1041201045@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$YKvnu6xztoGYPvnPALdp4uQ2bNeHHDihUAsz67AaJU7SVih0tMIjG', 2, 1, ''),
(174, 'Crypta Muharrara Azzikra', 'd1041201010@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$tP/09VQ0Q4k3X1VyPf0zFu9d6dGFr273/WFrcIwhFJhD5unFZl/Lm', 2, 1, ''),
(175, 'Cristian Jonathan', 'cj6990749@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$IreIlLvnH8GWOYIPli2wDe7JVBV6gNJsmyFXZxJnbhqx8EQ.DT5vW', 2, 1, ''),
(176, 'Zulkifli', 'cw14022@gmail.com', 0, 'Politeknik Negeri Pontianak', 'isr.png', '$2y$10$qX3Y.g9qgWz/DowNpgfSdOpRoGXxCIUkF5D5dKLhxqLMzETxEUo1S', 2, 1, ''),
(177, 'Felix Kurniawan', 'felkur17@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$BD6CG.s3pyzSk.cmFq7fV.cfvxfUC7hXdPOyhZBARwnXyaxHPkv26', 2, 1, ''),
(178, 'ABDUL RAHMAN WAHID', 'wahidabdul2801@gmail.com', 0, 'UNIVERSITAS LAMPUNG', 'isr.png', '$2y$10$Vgm1Mw0ILm/O/bqXtzoYHOvUI76cdaaK9kkk1UUpviE9hNxd4GkV6', 2, 1, ''),
(179, 'Lutfi Ryadi', 'lutfi.riadi25@gmail.com', 0, 'ITS', 'isr.png', '$2y$10$Hn7P2kzf6CgWbkz5M/taheMAg.cw2qn7haSs44OQmyQOiGm1g.VYy', 2, 1, ''),
(180, 'Syarif Muhammad Alhaiza', 'alqadrihaiza@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Fr/7b0NCvmzqMf4VA9ocMueKtnOPiL9ppvl20WJ5ZnbNL3.LZEjVq', 2, 1, ''),
(181, 'Boy Boy Geodevandry', 'd1041201027@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$jqP7eB8NNBgOd0u/qsP/8uO6jM546HExnf/gaLNz3MeHJS3TLhyEm', 2, 1, ''),
(182, 'Raihan Ramadhan', 'juniorfreestyle1@gmail.com', 0, 'UNTAN', 'isr.png', '$2y$10$KQ/FTpDvKyCMGo6ecmvdVeQiHRe5fPbYIi4ay0H2vIgQKlqGuUOmm', 2, 1, ''),
(183, 'Shinta Kusuma Wardhani', 'shintak1701@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$Rx9pyDQ7CA/VB3.Vd2tZW.Lgf05KPSWQ6GTvzRvu9iwsZYEG/LueC', 2, 1, ''),
(184, 'RIBKA SYALOM CHRISTIANTI SARAGIH', 'ribkasyalomch@gmail.com', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$SBiQHOPdCRcfPsP/HX/x1uwTlOjYIMi8.hhssQvs9PmtLgG4MWt22', 2, 1, ''),
(185, 'Rian', 'riandefsmasher@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$.YmzbXBkZX1sGn9QyviwquFiHKPxJXLMyeuasPzUAZ9wdQmUtt52.', 2, 1, ''),
(186, 'Cindy Claria', 'cindy.clara65@yahoo.co.id', 0, 'Universitas Tanjung Pura', 'isr.png', '$2y$10$wn8gHglBk6kGj0oxNTcVcuSH.lqY3qw.RatE8i7JNC2jnpE8SRT52', 2, 1, ''),
(187, 'Achmad Shidiq Nur Fazar', 'd1041211031@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$ppJyd45VymCEzIWT82YNOOkEuXdYGpjAw4xNB5zbUmuox02KFN9vK', 2, 1, ''),
(188, 'Helen Sastypratiwi', 'helensastypratiwi@informatics.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$dzQHbmS5dsxZ.UQS94iiKO3Yle8inwdFY6plQ0DWobroPQyO5nEzG', 2, 1, ''),
(189, 'Ilham Syukur Yahya', 'ilhamsaya02@gmail.com', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$udGGJDGLgqSjUf.76tyMFuOEmVmDBGY5qc2c/tsFsWqGCheeQnkz.', 2, 1, ''),
(190, 'Tanisya Pristi Azrelia', 'mingyuhawt@gmail.com', 0, 'Universitas Brawijaya', 'isr.png', '$2y$10$8PIjFWsxzCuFiGhNofj9r.IratDh97l26/QC4/gGdFis3wAHr.XJ6', 2, 1, ''),
(191, 'Rika Hariyanti', 'rikahariyanti03@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$8BfDSUGY1pVXY.Y5Ue7GJO1a0DYK1OX/qrNxGxjBFUBa5Sa5JC1EG', 2, 1, ''),
(192, 'Zahwa Tri Riyanto', 'zahwatri.riyanto@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$nH/CjfWyS216a.ytSotH5OuEHpK5TLh6Jg/IxmddX8WeY2Gr9pdt6', 2, 1, ''),
(193, 'FADHIL AL FIKRI', 'D1041201020@student.untan.ac.id', 0, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$4ytX/PKmZ2KMPwm5EajWj.mRVO49kgsY.TPjxxhak5lvRlhxTgfxi', 2, 1, ''),
(194, 'Muhammad Reyhan Fadillah Widyapratama', 'd1041201012@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$HYWYRTPoTlk4b46oZM3VX.TrKG.6MuP4Qa6MZ2auuThFsborqrmuG', 2, 1, ''),
(195, 'Dr. Nurhayati, S.T., M.T.', 'nurhayati@civil.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$AQJzMZ7quwCfCy9Gyd6DSuDszlRSGY4crAtMTeEsQvll/wzgjyS0K', 2, 1, ''),
(196, 'Dwi Alviany', 'd1041211051@student.untan.ac.id', 0, 'Universitas Tanjungpura', 'isr.png', '$2y$10$zHxotoUklH/fFcvd4e4CBuJk6x4SgUwWu5psa0JpMJWsuRsqUR8Iu', 2, 1, ''),
(197, 'Zakinando Diastriatama', '24qnandoo@gmail.com', 0, 'Unerversitas tanjung pura', 'isr.png', '$2y$10$sKaazI2Q/W61KR0vKLUYEOQlncFq3fwr9zkmuzauswlx5qUhle8ri', 2, 1, ''),
(198, 'Velagia iga', '21421480_velagia-i@widyadharma.ac.id', 0, '---', 'isr.png', '$2y$10$u0l1VzgEXExvDckAyKrYS.W34Wxyrq3BW4gCXpsIWqK6UR8rXxgGW', 2, 1, '2021-11-30 09:07 am'),
(199, 'Edwin Pradana', 'edwinpradana41@student.untan.ac.id', 2147483647, 'Universitas Tanjungpura', 'isr.png', '$2y$10$LCuSGFyCBt0Jtp17HYKT9uIx.1Xz1tLV/CAqDslDy4EzUyCEQkKue', 2, 1, '2021-12-11 12:12 pm'),
(200, 'NATALIA ARTIKA', 'd1041211008@student.untan.ac.id', 2147483647, 'UNIVERSITAS TANJUNGPURA', 'isr.png', '$2y$10$BXy4JN2jynHjTU75frbI3u75qjcuJvYDe058x2DxjeaYWgfwuWR1G', 2, 1, '2021-12-11 01:16 pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'My Profile', 'admin', 'fas fa-fw fa-user', 1),
(2, 1, 'Dashboard', 'admin/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(3, 1, 'Tambah Webinar', 'admin/tambah_webinar', 'fas fa-fw fa-plus', 1),
(4, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(5, 2, 'Dashboard', 'user/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(6, 2, 'Webinar', 'user/webinar', 'fas fa-fw fa-calendar-alt', 1),
(7, 1, 'Peserta', 'admin/users', 'fas fa-fw fa-users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `webinar`
--

CREATE TABLE `webinar` (
  `id` int(11) NOT NULL,
  `tema` varchar(256) NOT NULL,
  `sub_tema` varchar(256) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `narasumber` varchar(256) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `poster` varchar(128) NOT NULL,
  `data_filter` varchar(128) NOT NULL,
  `status` int(11) NOT NULL,
  `sertifikat` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `webinar`
--

INSERT INTO `webinar` (`id`, `tema`, `sub_tema`, `kategori`, `narasumber`, `tanggal`, `poster`, `data_filter`, `status`, `sertifikat`) VALUES
(3, 'Webinar Nasional Future Tech Industry', 'Mengenal Lebih Dekat Profesi UI/UX Designer', 'UI/UX', 'Nasyiya Ulfa', '2021-11-18', 'webinar3.png', 'ui-ux', 2, 'sertifikat3.jpg'),
(2, 'Webinar Nasional Future Tech Industry', 'Memulai Karir di Bidang Data Analytics', 'Data Analytics', 'Stephani Marcelli Djojo', '2021-11-11', 'webinar21.png', 'data', 2, 'sertifikat.jpg'),
(1, 'Webinar Nasional Future Tech Industry', 'Peran dan Implementasi Artificial Intelligence pada Industri Teknologi', 'AI', 'Dr. Ir. Lukas, MAI, CISA', '2021-10-28', 'webinar11.png', 'ai', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta_webinar3`
--
ALTER TABLE `peserta_webinar3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT untuk tabel `peserta_webinar3`
--
ALTER TABLE `peserta_webinar3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
