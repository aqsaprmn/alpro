-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2022 pada 02.23
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am_pario`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_appconfig`
--

CREATE TABLE `tbl_appconfig` (
  `id` int(11) NOT NULL,
  `setting` mediumtext NOT NULL,
  `value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_appconfig`
--

INSERT INTO `tbl_appconfig` (`id`, `setting`, `value`) VALUES
(1, 'CompanyName', 'SISTEM PEMETAAN ALPRO'),
(2, 'theme', 'default'),
(3, 'currency_code', 'Rp.'),
(4, 'language', 'english'),
(5, 'show-logo', '1'),
(6, 'nstyle', 'blue'),
(7, 'timezone', 'Asia/Jakarta'),
(8, 'dec_point', ','),
(9, 'thousands_sep', '.'),
(10, 'rtl', '0'),
(11, 'address', ''),
(12, 'phone', ''),
(13, 'date_format', 'd M Y'),
(14, 'note', 'Thank you...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `folder` varchar(32) NOT NULL,
  `author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `folder`, `author`) VALUES
(1, 'Indonesia', 'indonesia', 'Ismail Marzuqi'),
(2, 'English', 'english', 'Ismail Marzuqi'),
(4, 'Türkçe', 'turkish', 'Goktug Bogac Ogel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(10) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `date`, `type`, `description`, `userid`, `ip`) VALUES
(53, '2022-03-01 09:18:50', 'Admin', 'admin Failed Login', 0, '::1'),
(54, '2022-03-01 09:18:58', 'Admin', 'admin Failed Login', 0, '::1'),
(55, '2022-03-01 09:19:06', 'Admin', 'admin Failed Login', 0, '::1'),
(56, '2022-03-01 09:22:55', 'Admin', 'admin Failed Login', 0, '::1'),
(57, '2022-03-01 09:23:01', 'Admin', 'admin Failed Login', 0, '::1'),
(58, '2022-03-01 09:23:54', 'Admin', 'admin Login Successful', 1, '::1'),
(59, '2022-03-02 10:12:36', 'Admin', 'admin Login Successful', 1, '::1'),
(60, '2022-03-04 09:33:31', 'Admin', 'admin Login Successful', 1, '::1'),
(61, '2022-03-04 21:27:44', 'Admin', 'admin Login Successful', 1, '::1'),
(62, '2022-03-07 10:14:07', 'Admin', 'admin Login Successful', 1, '::1'),
(63, '2022-03-15 20:08:41', 'Admin', 'admin Login Successful', 1, '::1'),
(64, '2022-03-15 20:29:40', 'Admin', 'admin Login Successful', 1, '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_region` int(11) NOT NULL,
  `nama` mediumtext NOT NULL,
  `tipe` mediumtext DEFAULT NULL,
  `alamat` mediumtext DEFAULT NULL,
  `status` mediumtext DEFAULT NULL,
  `homepass` int(11) UNSIGNED DEFAULT NULL,
  `occupancy` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id`, `id_region`, `nama`, `tipe`, `alamat`, `status`, `homepass`, `occupancy`) VALUES
(1, 1, 'CAMBRIDGE CONDOMINUIM', 'Apartemen', '', 'Aktif', NULL, NULL),
(4, 1, 'MUTIARA RESIDENCE', 'Perumahan', '', 'Aktif', NULL, NULL),
(7, 1, 'SPRINGHILL LAMPUNG', 'Perumahan', '', 'Aktif', NULL, NULL),
(10, 4, 'APL - GREEN LAKE SUNTER', 'Perumahan', '', 'Aktif', NULL, NULL),
(13, 4, 'DAMARA VILLAGE', 'Perumahan', '', 'Aktif', NULL, NULL),
(16, 4, 'KALIBATA CITY', 'Apartemen', '', 'Aktif', NULL, NULL),
(19, 4, 'METRO CILEGON', 'Perumahan', '', 'Aktif', NULL, NULL),
(22, 4, 'MGR-1', 'Perumahan', '', 'Aktif', NULL, NULL),
(25, 4, 'MGR-2', 'Perumahan', '', 'Aktif', NULL, NULL),
(28, 4, 'NUANSA ASRI CINANGKA', 'Perumahan', 'JL. SMAN 64 RT.001/RW.003 Cipayung Jakarta Timur', 'Aktif', NULL, NULL),
(31, 4, 'PURI KEMAYORAN', 'Apartemen', '', 'Aktif', NULL, NULL),
(34, 4, 'SEASON CITY', 'Perumahan', '', 'Aktif', NULL, NULL),
(37, 4, 'SEDAYU CITY', 'Perumahan', '', 'Aktif', NULL, NULL),
(40, 4, 'SENTUL CITY', 'Perumahan', '', 'Aktif', NULL, NULL),
(43, 4, 'THE BOUTIQUE BY SPRINGHILL', 'Perumahan', '', 'Aktif', NULL, NULL),
(46, 7, 'BANDUNG CITY LIGHT', 'Perumahan', '', 'Aktif', NULL, NULL),
(49, 7, 'BRAGA CITIWALK', 'Apartemen', '', 'Aktif', NULL, NULL),
(52, 7, 'BUMI ADIPURA CL. TULIP', 'Perumahan', '', 'Aktif', NULL, NULL),
(55, 7, 'EASTON PARK JATINANGOR', 'Apartemen', '', 'Aktif', NULL, NULL),
(58, 7, 'GRAND PANORAMIC', 'Perumahan', '', 'Aktif', NULL, NULL),
(61, 7, 'MAHKOTA REGENCY', 'Perumahan', '', 'Aktif', NULL, NULL),
(64, 7, 'TAMAN KOPO KATAPANG ', 'Perumahan', '', 'Aktif', NULL, NULL),
(67, 10, 'APARTEMENT GREEN PARK ', 'Apartemen', '', 'Aktif', NULL, NULL),
(70, 10, 'BSB FOREST HILL', 'Perumahan', '', 'Aktif', NULL, NULL),
(73, 10, 'GRIYA TEMBALANG SEJAHTERA', 'Perumahan', '', 'Aktif', NULL, NULL),
(76, 13, 'BALE HINGGIL', 'Perumahan', '', 'Aktif', NULL, NULL),
(79, 13, 'CITRA HARMONI 1', 'Perumahan', '', 'Aktif', NULL, NULL),
(82, 13, 'CITRA HARMONI 2', 'Perumahan', '', 'Aktif', NULL, NULL),
(85, 13, 'TIRTASARI', 'Perumahan', '', 'Aktif', NULL, NULL),
(88, 16, 'BALIKPAPAN REGENCY CLUSTER VALENCIA', 'Perumahan', '', 'Aktif', NULL, NULL),
(91, 16, 'BORNEO BAY BALIKPAPAN', 'Perumahan', '', 'Aktif', NULL, NULL),
(94, 16, 'BUKIT MEDITERANIA SAMARINDA', 'Perumahan', '', 'Aktif', NULL, NULL),
(97, 16, 'BUMI NIRWANA INDAH', 'Perumahan', '', 'Aktif', NULL, NULL),
(100, 19, 'CLUSTER AKASIA TALASSA CITY', 'Perumahan', '', 'Aktif', NULL, NULL),
(106, 10, 'AQSHA', 'Apartemen', '', 'In-Aktif', NULL, NULL),
(107, 10, 'HALO', 'Apartemen', 'gegeg', 'Aktif', NULL, NULL),
(108, 24, 'CIPAYUNG', 'Perumahan', 'JL. SMAN 64 RT.001/RW.003 Cipayung Jakarta Timur', 'Aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(10) NOT NULL,
  `from_user` varchar(32) NOT NULL,
  `to_user` varchar(32) NOT NULL,
  `title` varchar(60) NOT NULL,
  `message` mediumtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_odc`
--

CREATE TABLE `tbl_odc` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` mediumtext NOT NULL,
  `lat` decimal(12,6) DEFAULT NULL,
  `lon` decimal(12,6) DEFAULT NULL,
  `jumlah_splitter` int(11) DEFAULT NULL,
  `kapasitas` int(11) NOT NULL DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_odc`
--

INSERT INTO `tbl_odc` (`id`, `nama`, `lat`, `lon`, `jumlah_splitter`, `kapasitas`) VALUES
(1, 'ODC-CPA-FMA', NULL, NULL, 4, 8),
(4, 'ODC-RCK-FCA', NULL, NULL, 4, 32),
(6, 'ODC-TES-LGI', '123.456000', '1.100000', 2, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_odc_lokasi`
--

CREATE TABLE `tbl_odc_lokasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_odc` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_odc_lokasi`
--

INSERT INTO `tbl_odc_lokasi` (`id`, `id_odc`, `id_lokasi`) VALUES
(2, 1, 28),
(3, 4, 55),
(4, 6, 108);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_odp`
--

CREATE TABLE `tbl_odp` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` mediumtext DEFAULT NULL,
  `id_odc` int(11) NOT NULL,
  `port_odc` int(11) NOT NULL,
  `status_port_odc` mediumtext DEFAULT 'UNUSED',
  `kapasitas` int(11) NOT NULL,
  `lat` decimal(12,6) DEFAULT NULL,
  `lon` decimal(12,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_odp`
--

INSERT INTO `tbl_odp` (`id`, `nama`, `id_odc`, `port_odc`, `status_port_odc`, `kapasitas`, `lat`, `lon`) VALUES
(1, 'ODP-CPA-FMA/01', 1, 1, 'ACTIVE', 8, NULL, NULL),
(2, 'ODP-CPA-FMA/02', 1, 2, 'ACTIVE', 8, NULL, NULL),
(3, 'ODP-CPA-FMA/03', 1, 3, 'ACTIVE', 8, NULL, NULL),
(4, 'ODP-CPA-FMA/04', 1, 4, 'ACTIVE', 8, NULL, NULL),
(5, 'ODP-CPA-FMA/05', 1, 5, 'ACTIVE', 8, NULL, NULL),
(6, 'ODP-CPA-FMA/06', 1, 6, 'ACTIVE', 8, NULL, NULL),
(7, NULL, 1, 7, 'UNUSED', 8, NULL, NULL),
(8, NULL, 1, 8, 'UNUSED', 8, NULL, NULL),
(9, NULL, 4, 1, 'UNUSED', 8, NULL, NULL),
(10, NULL, 4, 2, 'UNUSED', 8, NULL, NULL),
(11, NULL, 4, 3, 'UNUSED', 8, NULL, NULL),
(12, NULL, 4, 4, 'UNUSED', 8, NULL, NULL),
(13, NULL, 4, 5, 'UNUSED', 8, NULL, NULL),
(14, NULL, 4, 6, 'UNUSED', 8, NULL, NULL),
(15, NULL, 4, 7, 'UNUSED', 8, NULL, NULL),
(16, NULL, 4, 8, 'UNUSED', 8, NULL, NULL),
(17, NULL, 4, 9, 'UNUSED', 8, NULL, NULL),
(18, NULL, 4, 10, 'UNUSED', 8, NULL, NULL),
(19, NULL, 4, 11, 'UNUSED', 8, NULL, NULL),
(20, NULL, 4, 12, 'UNUSED', 8, NULL, NULL),
(21, NULL, 4, 13, 'UNUSED', 8, NULL, NULL),
(22, NULL, 4, 14, 'UNUSED', 8, NULL, NULL),
(23, NULL, 4, 15, 'UNUSED', 8, NULL, NULL),
(24, NULL, 4, 16, 'UNUSED', 8, NULL, NULL),
(25, NULL, 4, 17, 'UNUSED', 8, NULL, NULL),
(26, 'ODP-RCK-FCA/18', 4, 18, 'ACTIVE', 8, NULL, NULL),
(27, 'ODP-RCK-FCA/19', 4, 19, 'ACTIVE', 8, NULL, NULL),
(28, 'ODP-RCK-FCA/20', 4, 20, 'ACTIVE', 8, NULL, NULL),
(29, 'ODP-RCK-FCA/21', 4, 21, 'ACTIVE', 8, NULL, NULL),
(30, 'ODP-RCK-FCA/22', 4, 22, 'ACTIVE', 8, NULL, NULL),
(31, 'ODP-RCK-FCA/23', 4, 23, 'ACTIVE', 8, NULL, NULL),
(32, 'ODP-RCK-FCA/24', 4, 24, 'ACTIVE', 8, NULL, NULL),
(34, 'ODP-TEST', 4, 25, 'ACTIVE', 8, NULL, NULL),
(35, 'ODP TEST 2', 4, 26, 'ACTIVE', 8, '0.000000', '0.000000'),
(37, 'ODP-TES-TES', 6, 1, 'ACTIVE', 16, '12.000000', '11.000000'),
(38, 'ODP-TES-TE2', 6, 2, 'ACTIVE', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_odp_sub_lokasi`
--

CREATE TABLE `tbl_odp_sub_lokasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_odp` int(11) NOT NULL,
  `id_sub_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_odp_sub_lokasi`
--

INSERT INTO `tbl_odp_sub_lokasi` (`id`, `id_odp`, `id_sub_lokasi`) VALUES
(2, 1, 1),
(3, 2, 1),
(4, 3, 3),
(5, 4, 4),
(6, 5, 4),
(7, 6, 5),
(8, 6, 6),
(9, 7, 13),
(10, 8, 12),
(11, 9, 11),
(12, 10, 10),
(13, 11, 9),
(14, 12, 8),
(15, 13, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` mediumtext DEFAULT NULL,
  `alamat` mediumtext DEFAULT NULL,
  `no_telp` mediumtext DEFAULT NULL,
  `status` mediumtext DEFAULT 'BELUM BERLANGGANAN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `alamat`, `no_telp`, `status`) VALUES
(2, 'LILIANAWATI', 'SEDAYU CITY ABR 9 NO 19', NULL, 'BELUM BERLANGGANAN'),
(3, 'DENNIS LIGA', 'ABBEY ROAD 9 NO 06', NULL, 'BELUM BERLANGGANAN'),
(4, 'YURIHARJA TANAMA', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),KRAMA YUDHA, 33,13920, RT 08, RW 05 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(5, 'STEVEN GOSAL', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),PEGANGSAAN 2, 36,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(6, 'MATHILDE LILIANA P', 'ABBEY ROAD 6 NO 29', NULL, 'BELUM BERLANGGANAN'),
(7, 'EDDY SUSANTO', 'ABBEY AVENUE NO 7', NULL, 'BELUM BERLANGGANAN'),
(8, 'teguh sutrisno', 'ABR 9 NO 18', NULL, 'BELUM BERLANGGANAN'),
(9, 'LISA LAVENIA OHIA', 'SEDAYU CITY ABR 9 NO 5', NULL, 'BELUM BERLANGGANAN'),
(10, 'VIVI MARLIANA', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); BL.ABR 5/11', NULL, 'BELUM BERLANGGANAN'),
(11, 'CHELSEA CLAUDIA DJAYADI', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),ABBEY 1, 20,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(12, 'RIYANTI TERESA DARMALI', 'ABBEY ROAD 9 NO 09', NULL, 'BELUM BERLANGGANAN'),
(13, 'PAHRIAH', 'ABBEY ROAD 9 NO 11', NULL, 'BELUM BERLANGGANAN'),
(14, 'LINGGAWANI', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,18', NULL, 'BELUM BERLANGGANAN'),
(15, 'RADIUS DARMA SAPUTRA', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),RAWA TERATE, 12,13920, RT 001, RW 001', NULL, 'BELUM BERLANGGANAN'),
(16, 'AGNESIA SOEHENDRY', 'SEDAYU CITY ABR 9 NO 17', NULL, 'BELUM BERLANGGANAN'),
(17, 'ALFONSO', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,10', NULL, 'BELUM BERLANGGANAN'),
(18, 'PUTRA NURBAWA', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN DUA,SEDAYU CITY, 9,14250, RT -, RW - - JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(19, 'FRANS FREDDY', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),KRAMA YUDHA, 25,13920, RT 8, RW 5 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(20, 'SAIYAH', 'ABBEY ROAD 8 NO 30', NULL, 'BELUM BERLANGGANAN'),
(21, 'MERCU GANDHI HUTOMO', 'ABBEY ROAD 7/NO 3', NULL, 'BELUM BERLANGGANAN'),
(22, 'JOKO SANTOSO', 'ABBEY ROAD 8 NO 07', NULL, 'BELUM BERLANGGANAN'),
(23, 'MARIANA ASTRID', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN DUA,SEDAYU CITY, 7,14250, RT -, RW - - JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(24, 'DRNETTY KATRINA DS', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 2/32,13920, RT 1, RW 1 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(25, 'JULIANI MIHARDJA', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); 26', NULL, 'BELUM BERLANGGANAN'),
(26, 'THIO HENKY', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 10,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(27, 'VARIANTO GUNAWAN', 'ABBEY ROAD 7 NO 26', NULL, 'BELUM BERLANGGANAN'),
(28, 'DEVINATA GUNAWAN', 'ABBEY ROAD 7 NO 25', NULL, 'BELUM BERLANGGANAN'),
(29, 'FELICITAS PRIMASTUTI', 'ABBEY ROAD 7 NO 08', NULL, 'BELUM BERLANGGANAN'),
(30, 'LEONY RETDALIA BETRI BANGUN', 'ABBEY ROAD 6 NO 08', NULL, 'BELUM BERLANGGANAN'),
(31, 'KURNIAWAN WELYONO', 'ABBEY ROAD 7 NO 03', NULL, 'BELUM BERLANGGANAN'),
(32, 'RATNAWATI', 'ABBEY ROAD 7 NO 09', NULL, 'BELUM BERLANGGANAN'),
(33, 'MEINY', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 9,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(34, 'RAMLI', 'SEDAYU CITY ABR 9 NO 8-10', NULL, 'BELUM BERLANGGANAN'),
(35, 'DR.LAMBOK SIMORANGKIR', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); EROPA-ABA31', NULL, 'BELUM BERLANGGANAN'),
(36, 'ERLINA', 'ABBEY ROAD 5/NO 25', NULL, 'BELUM BERLANGGANAN'),
(37, 'YULIANA', 'ABBEY ROAD 5 NO 16', NULL, 'BELUM BERLANGGANAN'),
(38, 'CHANDRA SUNGGUG', 'ABBEY ROAD 6 NO 03', NULL, 'BELUM BERLANGGANAN'),
(39, 'JEPRI', 'TIMUR,PENGGILINGAN(Kec.Cakung),PENGGILINGAN RAYA,26', NULL, 'BELUM BERLANGGANAN'),
(40, 'DENNY CHARLIE', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,31', NULL, 'BELUM BERLANGGANAN'),
(41, 'DEVINATA GUNAWAN', 'JL. ABBEY 7 NO.25', NULL, 'BELUM BERLANGGANAN'),
(42, 'EMY FRANSISKA', 'SEDAYU CITY ABR 5 NO 6', NULL, 'BELUM BERLANGGANAN'),
(43, 'DANUH NURAGA', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 51,13920, RT 1, RW 1 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(44, 'HADIWIYONO', 'ABBEY ROAD 5 NO 02', NULL, 'BELUM BERLANGGANAN'),
(45, 'KOK KO DJEN', 'ABBEY ROAD 5 NO 18', NULL, 'BELUM BERLANGGANAN'),
(46, 'JELLYA DASRIL', 'ABBEY ROAD 5 NO 28', NULL, 'BELUM BERLANGGANAN'),
(47, 'FELICITAS PRIMASTURI', 'JL. ABBEY 7 NO.8', NULL, 'BELUM BERLANGGANAN'),
(48, 'TOMY WILIAM', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 3,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(49, 'TOK AL LIN MERRY', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 17,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(50, 'MARSELINUS', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,55 CITYNAME : JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(51, 'ROBBY ROBERTUS', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,52', NULL, 'BELUM BERLANGGANAN'),
(52, 'RYAN ALLVI', 'ABBEY ROAD 3 NO 10', NULL, 'BELUM BERLANGGANAN'),
(53, 'KAMINI KAMAL MIRCHANDANI', 'JL. PEGANGSAAN DUA SEDAYU CITY ABA AVENUE 23, PEGANGSAAN DUA, KLP. GADING, KOTA JKT UTARA, DAERAH KHUSUS IBUKOTA JAKARTA 14250,', NULL, 'BELUM BERLANGGANAN'),
(54, 'RYAN', 'ABBEY 1, 10', NULL, 'BELUM BERLANGGANAN'),
(55, 'LEONY RETDALIA BETRI BANGUN', 'ABBEY 1, NO 8', NULL, 'BELUM BERLANGGANAN'),
(56, 'ADY TULUS SUCIPTO', 'JL. ABBEY 2 NO 17', NULL, 'BELUM BERLANGGANAN'),
(57, 'STEVEN CAHYADI', 'ABR 2NO 26', NULL, 'BELUM BERLANGGANAN'),
(58, 'YENI EZE', 'ABBEY AVENUE NO 28', NULL, 'BELUM BERLANGGANAN'),
(59, 'AMBO DALLE', 'ABBEY ROAD 1 NO 18', NULL, 'BELUM BERLANGGANAN'),
(60, 'BUDIMAN HALIM', 'ABR 3 /03', NULL, 'BELUM BERLANGGANAN'),
(61, 'BPK BUDIMAN HALIM', 'ABBEY ROAD 3/NO 3', NULL, 'BELUM BERLANGGANAN'),
(62, 'EMY FRANSISKA', 'ABBEY ROAD 2 NO 20', NULL, 'BELUM BERLANGGANAN'),
(63, 'FRANSISKA TIARAS', 'JLN ABBEY 2 NO 8', NULL, 'BELUM BERLANGGANAN'),
(64, 'ADY TULUS SUCIPTO', 'ABBEY ROAD 2 NO 17', NULL, 'BELUM BERLANGGANAN'),
(65, 'SRI WATI GINTING', 'ABBEY ROAD 2 NO 10', NULL, 'BELUM BERLANGGANAN'),
(66, 'FRANSISKA TIARAS', 'ABBEY ROAD 2 NO 08', NULL, 'BELUM BERLANGGANAN'),
(67, 'PUTRI MENTARI', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,6', NULL, 'BELUM BERLANGGANAN'),
(68, 'ANDRY HANDRA', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),Kampung RAWA TERATE,35', NULL, 'BELUM BERLANGGANAN'),
(69, 'ASHISH ARORA', 'ABR 3 NO 36', NULL, 'BELUM BERLANGGANAN'),
(70, 'SHIERLY RACHMAT', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 3,13920, RT 8, RW 5 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(71, 'JASON SANWIJOYO TJHAI', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 9,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(72, 'IRVIN GOFFAR', 'ABBEY ROAD 2 NO 05', NULL, 'BELUM BERLANGGANAN'),
(73, 'DJIE SJAK TJONG', 'SEDAYU CITY ABR 1 NO 12', NULL, 'BELUM BERLANGGANAN'),
(74, 'DAVID', 'SEDAYU CITY ABR 3 NO 16', NULL, 'BELUM BERLANGGANAN'),
(75, 'INDRA PRAMANA', 'SEDAYU CITY JL. ABBEY ROAD 3 NO.5, RW. TERATE, KEC. CAKUNG, KOTA JAKARTA TIMUR, DAERAH KHUSUS IBUKOTA JAKARTA 13920, INDONESIA, IN PROGRESS, 13920, KOTA JAKARTA TIMUR, KECAMATAN CAKUNG, DAERAH KHUSUS IBUKOTA JAKARTA', NULL, 'BELUM BERLANGGANAN'),
(76, 'IRVIN GOFFAR', 'JL ABBEY ROAD 2, NO. 5', NULL, 'BELUM BERLANGGANAN'),
(77, 'HETI ELISA SARI', 'ABBEY ROAD 8 NO 11', NULL, 'BELUM BERLANGGANAN'),
(78, 'RICHARD TERPEDO', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,20', NULL, 'BELUM BERLANGGANAN'),
(79, 'DENNIS LIGA', 'ABBEY 1, 6', NULL, 'BELUM BERLANGGANAN'),
(80, 'MUSLEH', 'ABBEY ROAD 1 NO 08', NULL, 'BELUM BERLANGGANAN'),
(81, 'MEDIANA', 'ABBEY ROAD 2 NO 09', NULL, 'BELUM BERLANGGANAN'),
(82, 'AMBRY IRAWAN', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN DUA,SEDAYU CITY, 50,14250, RT -, RW - - JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(83, 'ROBBY ADIJAYA', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),ABBEY 1, 25,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(84, 'DRERVIN YAMANI A', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 16,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(85, 'MERCU GANDHI HUTOMO', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 7,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(86, 'Chaerul Anam', 'ABBEY ROAD 5 NO 20', NULL, 'BELUM BERLANGGANAN'),
(87, 'FAHMI ABBAS', 'ABBEY ROAD 1 NO 37', NULL, 'BELUM BERLANGGANAN'),
(88, 'CAROLINA, SE', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,146', NULL, 'BELUM BERLANGGANAN'),
(89, 'YANTINI', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,19', NULL, 'BELUM BERLANGGANAN'),
(90, 'ANGRAINI WIDJAJ', 'ABBEY ROAD 1 NO 21', NULL, 'BELUM BERLANGGANAN'),
(91, 'TARSISIUS', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,3', NULL, 'BELUM BERLANGGANAN'),
(92, 'SITI NURUL CHAERUNISHA', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,ABR5/19', NULL, 'BELUM BERLANGGANAN'),
(93, 'SUKHWINDER', 'ABBEY ROAD 1 NO 11', NULL, 'BELUM BERLANGGANAN'),
(94, 'HADIWIYONO', 'ABBEY ROAD 5 NO 2', NULL, 'BELUM BERLANGGANAN'),
(95, 'INA KRISTIANA', 'JAKARTA TIMUR,CAKUNG BARAT(Kec.Cakung),CAKUNG BARAT(Kec.Cakung),GREEN SEDAYU BIZPARK CAKUNG, 53,13910, RT 8, RW 8 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(96, 'ADEHAN', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 1,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(97, 'RILIANI SYAVIA', 'ABBEY ROAD 1 NO 11', NULL, 'BELUM BERLANGGANAN'),
(98, 'SULEMAN', 'SEDAYU CITY ABR 1 NO 22', NULL, 'BELUM BERLANGGANAN'),
(99, 'FRISKA KRISTIANI', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,19', NULL, 'BELUM BERLANGGANAN'),
(100, 'SRI WATI GINTING', 'ABBEY 2, 10', NULL, 'BELUM BERLANGGANAN'),
(101, 'RILLYANI SYLVIA', 'ABBEY 1 NO 11', NULL, 'BELUM BERLANGGANAN'),
(102, 'SAIYAH', 'JL. ABBEY ROAD 8 NO 30', NULL, 'BELUM BERLANGGANAN'),
(103, 'RATNAWATI', 'ABBEY ROAD 7 NO 09', NULL, 'BELUM BERLANGGANAN'),
(104, 'MARANDIKA ASA WARDYANTO', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 8,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(105, 'CINDY DARMA SAPUTRA', 'ABBEY AVENUE NO 29', NULL, 'BELUM BERLANGGANAN'),
(106, 'SUKHWINDER', 'ABBEY AVENUE NO 11', NULL, 'BELUM BERLANGGANAN'),
(107, 'EDDY SUSANTO', 'ABBEY ROAD 1 NO 07', NULL, 'BELUM BERLANGGANAN'),
(108, 'ROBIN SUSANTO', 'SEDAYU CITY ABR 1 NO 23', NULL, 'BELUM BERLANGGANAN'),
(109, 'HENDRAWAN', 'SEDAYU CITY ABBEY A NO 10, PEGANGSAAN DUA, KLP. GADING, KOTA JKT UTARA, DAERAH KHUSUS IBUKOTA JAKARTA 14250, INDONESIA, IN PROGRESS, 14250, KOTA JAKARTA UTARA, KELAPA GADING, DAERAH KHUSUS IBUKOTA JAKARTA', NULL, 'BELUM BERLANGGANAN'),
(110, 'EDDY', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,7', NULL, 'BELUM BERLANGGANAN'),
(111, 'DRS RH SUDHARTIN', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN DUA,SEDAYU CITY, 27,14250, RT , RW  - JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(112, 'TAN CI KIONG', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); ABR2 NO35', NULL, 'BELUM BERLANGGANAN'),
(113, 'SUDIIRMAN', 'JAKARTA TIMUR,PENGGILINGAN(Kec.Cakung),PENGGILINGAN RAYA,1', NULL, 'BELUM BERLANGGANAN'),
(114, 'STANLEY', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),KRT RADIMAN WIDYODININGRAT, 5,13920, RT -, RW -', NULL, 'BELUM BERLANGGANAN'),
(115, 'MASRUL KHALIMI', 'ABBEY 1, NO.70,', NULL, 'BELUM BERLANGGANAN'),
(116, 'Roberto Iwan W', 'ABR 9 No.1', NULL, 'BELUM BERLANGGANAN'),
(117, 'INTAN PRATAMA PUTRI', 'JAKARTA TIMUR,CAKUNG TIMUR,CAKUNG TIMUR,GREEN SEDAYU, 37,13910, RT 004, RW 006 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(118, 'REGINA DESMONDA DARWIN', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 33 ,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(119, 'AMELIA', 'ABBEY ROAD 1 NO 28', NULL, 'BELUM BERLANGGANAN'),
(120, 'SANJAYA MULYA WAANI', 'ABBEY ROAD 8 NO 16', NULL, 'BELUM BERLANGGANAN'),
(121, 'REZA VICI HUTAMA', 'JAKARTA UTARA.,PEGANGSAAN DUA,KOMPLEK GADING ARCADIA,1', NULL, 'BELUM BERLANGGANAN'),
(122, 'SUSI UMIYATI CHUZAINI', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,23 CITYNAME : JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(123, 'ENY SOEWANTI', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),RAWA TERATE(Kec.Cakung),RAWA TERATE, 06,13920, RT 10, RW 05 - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(124, 'ADINDA SUWANDI', 'JAKARTA UTARA.,PEGANGSAAN DUA,GADING ACARDIA,11', NULL, 'BELUM BERLANGGANAN'),
(125, 'MARISA SITAWATY', 'JAKARTA TIMUR,PENGGILINGAN(Kec.Cakung),PENGGILINGAN RAYA,7 CITYNAME : JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(126, 'MEGA LINDAWATI', 'ABBEY ROAD 1 NO 35', NULL, 'BELUM BERLANGGANAN'),
(127, 'MATHILDE LILIANA P QQ USAHA', 'ABBEY ROAD 6 NO 29', NULL, 'BELUM BERLANGGANAN'),
(128, 'MINYANTOO', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,27', NULL, 'BELUM BERLANGGANAN'),
(129, 'YENI TRIMULYANI', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,15', NULL, 'BELUM BERLANGGANAN'),
(130, 'KARLINA HARYANTO', 'ABBEY ROAD 5 NO 36', NULL, 'BELUM BERLANGGANAN'),
(131, 'CHATERINE BUDIANTO', 'ABBEY ROAD 5/NO 58', NULL, 'BELUM BERLANGGANAN'),
(132, 'WAHYU PRATIWI', 'ABBEY ROAD 5 NO 37', NULL, 'BELUM BERLANGGANAN'),
(133, 'RUSNANTO WONGSUTRISNO', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,ABR5no31', NULL, 'BELUM BERLANGGANAN'),
(134, 'RIYANTO', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN DUA,PEGANGSAAN 2, 23,14250, RT -, RW - - JAKARTA UTARA.', NULL, 'BELUM BERLANGGANAN'),
(135, 'CATHERINE BUDIANTO', 'ABBEY 1, 58', NULL, 'BELUM BERLANGGANAN'),
(136, 'ENDRI S SANTOSO', 'JAKARTA TIMUR,PENGGILINGAN(Kec.Cakung),PENGGILINGAN RAYA,37', NULL, 'BELUM BERLANGGANAN'),
(137, 'EDWARD WINARDI TANDOKO', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,5', NULL, 'BELUM BERLANGGANAN'),
(138, 'ERIK MICHAELINATA DJOHAN', 'ABBEY ROAD 3 NO 38', NULL, 'BELUM BERLANGGANAN'),
(139, 'MASRUL KHALIMI', 'ABBEY ROAD 3/NO 70', NULL, 'BELUM BERLANGGANAN'),
(140, 'MEDIANA', 'Jl.Abbey Road 2 no.9', NULL, 'BELUM BERLANGGANAN'),
(141, 'IWAN DUDDY RUSTANTO', 'JAKARTA UTARA.,PEGANGSAAN DUA,PEGANGSAAN 2,25', NULL, 'BELUM BERLANGGANAN'),
(142, 'NABILA MARWA SAGINA', 'ABBEY ROAD 1 NO 33', NULL, 'BELUM BERLANGGANAN'),
(143, 'MING YUE DING', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),KOMPLEK BIZPARK,23', NULL, 'BELUM BERLANGGANAN'),
(144, 'WATY', 'ABBEY ROAD 3 NO 53', NULL, 'BELUM BERLANGGANAN'),
(145, 'HAUW FELIX GUNAWAN', 'ABBEY ROAD 3 NO 32', NULL, 'BELUM BERLANGGANAN'),
(146, 'IRAWAN WIDJAJA', 'ABBEY ROAD 3/NO 59', NULL, 'BELUM BERLANGGANAN'),
(147, 'FIFY', 'ABBEY ROAD 3/NO 39', NULL, 'BELUM BERLANGGANAN'),
(148, 'STEPHANUS ANDRE', 'ABBEY ROAD 3 NO 62', NULL, 'BELUM BERLANGGANAN'),
(149, 'BARNARDUS UTAMA', 'ABBEY ROAD 3 NO 29', NULL, 'BELUM BERLANGGANAN'),
(150, 'ASHISH ARORA', 'ABBEY ROAD 3 NO 36', NULL, 'BELUM BERLANGGANAN'),
(151, 'WENDY SAPUTRA', 'SEDAYU CITY ABA NO 22', NULL, 'BELUM BERLANGGANAN'),
(152, 'YENI EZE', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); EROPA-ABEY28', NULL, 'BELUM BERLANGGANAN'),
(153, 'CHANDRA S', 'JL. ABBEY 6 NO 3', NULL, 'BELUM BERLANGGANAN'),
(154, 'DIANA ARI WARDANI', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,ABEY5,NO.55', NULL, 'BELUM BERLANGGANAN'),
(155, 'DAVID SUBARDIMAN', 'JAKARTA TIMUR,RAWA TERATE(Kec.Cakung),ABBEY 1, 38,13920, RT -, RW - - JAKARTA TIMUR', NULL, 'BELUM BERLANGGANAN'),
(156, 'JOEDO WIJAYA', 'ABBEY ROAD 2/NO 33', NULL, 'BELUM BERLANGGANAN'),
(157, 'ARDANIHAN KOHIR', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,28', NULL, 'BELUM BERLANGGANAN'),
(158, 'MUSLEH', 'ABBEY 1, 8', NULL, 'BELUM BERLANGGANAN'),
(159, 'JESSICA NATALI', 'ABBEY ROAD 1 NO 38', NULL, 'BELUM BERLANGGANAN'),
(160, 'NABILA MARWA SAGINA', 'ABBEY ROAD 1 NO 33', NULL, 'BELUM BERLANGGANAN'),
(161, 'KRISNAWATI', 'ABBEY ROAD 1 NO 39', NULL, 'BELUM BERLANGGANAN'),
(162, 'INTAN SULISTRIANINGSI', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); AB-ROAD2/15', NULL, 'BELUM BERLANGGANAN'),
(163, 'DENNY BARENDS', 'SEDAYU CITY ABR 1 NO 15', NULL, 'BELUM BERLANGGANAN'),
(164, 'MEGA LINDAWATI', 'ABBEY ROAD 1 NO 26', NULL, 'BELUM BERLANGGANAN'),
(165, 'JULIANA', 'SEDAYU CITY ABR 3 NO 15', NULL, 'BELUM BERLANGGANAN'),
(166, 'SYAIFUL ANAM', 'SEDAYU CITY ABR 2 NO 16', NULL, 'BELUM BERLANGGANAN'),
(167, 'VANESHA SONDANG SIBARANI', 'JAKARTA TIMUR (20013); CAKUNG TIMUR (13911); GREEN SEDAYU (0071); AB ROAD 5/17', NULL, 'BELUM BERLANGGANAN'),
(168, 'SUSAN', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); AB-ROAD3/68', NULL, 'BELUM BERLANGGANAN'),
(169, 'KANTOR POM SEDAYU CITY U/ DWI HIDAYATUL HASAN', 'JAKARTA UTARA. (20014); PEGANGSAAN DUA (14250); SEDAYU CITY (0107); -', NULL, 'BELUM BERLANGGANAN'),
(170, 'JESSICA EKAPUTRI SUPRAPTO', 'JAKARTA UTARA.,PEGANGSAAN DUA,SEDAYU CITY,ABA-36', NULL, 'BELUM BERLANGGANAN'),
(173, 'Aqsha Permana Fityantono', 'Jl sma 64, rt001 rw 03 no 47, cipayung, jakarta timur', '081212129751', 'BERLANGGANAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_port_odp`
--

CREATE TABLE `tbl_port_odp` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_odp` int(11) NOT NULL,
  `port_odp` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_inet` mediumtext DEFAULT NULL,
  `status_port_odp` mediumtext DEFAULT 'UNUSED',
  `lat` decimal(12,6) DEFAULT NULL,
  `lon` decimal(12,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_port_odp`
--

INSERT INTO `tbl_port_odp` (`id`, `id_odp`, `port_odp`, `id_pelanggan`, `no_inet`, `status_port_odp`, `lat`, `lon`) VALUES
(5, 1, 3, 4, '232', 'ACTIVE', '2.533430', '234.233400'),
(7, 1, 4, NULL, NULL, 'IDLE', NULL, NULL),
(9, 1, 5, NULL, NULL, 'IDLE', NULL, NULL),
(11, 1, 6, NULL, NULL, 'IDLE', NULL, NULL),
(13, 1, 7, NULL, NULL, 'IDLE', NULL, NULL),
(15, 1, 8, NULL, NULL, 'IDLE', NULL, NULL),
(17, 2, 1, NULL, NULL, 'IDLE', NULL, NULL),
(19, 2, 2, NULL, NULL, 'IDLE', NULL, NULL),
(21, 2, 3, NULL, NULL, 'IDLE', NULL, NULL),
(23, 2, 4, NULL, NULL, 'IDLE', NULL, NULL),
(25, 2, 5, NULL, NULL, 'IDLE', NULL, NULL),
(27, 2, 6, NULL, NULL, 'IDLE', NULL, NULL),
(29, 2, 7, NULL, NULL, 'IDLE', NULL, NULL),
(31, 2, 8, NULL, NULL, 'IDLE', NULL, NULL),
(33, 3, 1, 2, '3242342423', 'ACTIVE', '100.110000', '300.222000'),
(35, 3, 2, NULL, NULL, 'IDLE', NULL, NULL),
(37, 3, 3, NULL, NULL, 'IDLE', NULL, NULL),
(39, 3, 4, NULL, NULL, 'IDLE', NULL, NULL),
(43, 3, 6, NULL, NULL, 'IDLE', NULL, NULL),
(45, 3, 7, NULL, NULL, 'IDLE', NULL, NULL),
(47, 3, 8, NULL, NULL, 'IDLE', NULL, NULL),
(49, 4, 1, NULL, NULL, 'IDLE', NULL, NULL),
(51, 4, 2, NULL, NULL, 'IDLE', NULL, NULL),
(53, 4, 3, NULL, NULL, 'IDLE', NULL, NULL),
(55, 4, 4, NULL, NULL, 'IDLE', NULL, NULL),
(57, 4, 5, NULL, NULL, 'IDLE', NULL, NULL),
(59, 4, 6, NULL, NULL, 'IDLE', NULL, NULL),
(61, 4, 7, NULL, NULL, 'IDLE', NULL, NULL),
(63, 4, 8, NULL, NULL, 'IDLE', NULL, NULL),
(65, 5, 1, NULL, NULL, 'IDLE', NULL, NULL),
(67, 5, 2, NULL, NULL, 'IDLE', NULL, NULL),
(69, 5, 3, NULL, NULL, 'IDLE', NULL, NULL),
(71, 5, 4, NULL, NULL, 'IDLE', NULL, NULL),
(73, 5, 5, NULL, NULL, 'IDLE', NULL, NULL),
(75, 5, 6, NULL, NULL, 'IDLE', NULL, NULL),
(77, 5, 7, NULL, NULL, 'IDLE', NULL, NULL),
(79, 5, 8, NULL, NULL, 'IDLE', NULL, NULL),
(81, 6, 1, NULL, NULL, 'IDLE', NULL, NULL),
(83, 6, 2, NULL, NULL, 'IDLE', NULL, NULL),
(87, 6, 4, NULL, NULL, 'IDLE', NULL, NULL),
(89, 6, 5, NULL, NULL, 'IDLE', NULL, NULL),
(91, 6, 6, NULL, NULL, 'IDLE', NULL, NULL),
(93, 6, 7, NULL, NULL, 'IDLE', NULL, NULL),
(97, 18, 1, NULL, NULL, 'IDLE', NULL, NULL),
(99, 18, 2, NULL, NULL, 'IDLE', NULL, NULL),
(101, 18, 3, NULL, NULL, 'IDLE', NULL, NULL),
(103, 18, 4, NULL, NULL, 'IDLE', NULL, NULL),
(105, 18, 5, NULL, NULL, 'IDLE', NULL, NULL),
(107, 18, 6, NULL, NULL, 'IDLE', NULL, NULL),
(109, 18, 7, NULL, NULL, 'IDLE', NULL, NULL),
(111, 18, 8, NULL, NULL, 'IDLE', NULL, NULL),
(113, 19, 1, NULL, NULL, 'IDLE', NULL, NULL),
(115, 19, 2, NULL, NULL, 'IDLE', NULL, NULL),
(117, 19, 3, NULL, NULL, 'IDLE', NULL, NULL),
(119, 19, 4, NULL, NULL, 'IDLE', NULL, NULL),
(121, 19, 5, NULL, NULL, 'IDLE', NULL, NULL),
(123, 19, 6, NULL, NULL, 'IDLE', NULL, NULL),
(125, 19, 7, NULL, NULL, 'IDLE', NULL, NULL),
(127, 19, 8, NULL, NULL, 'IDLE', NULL, NULL),
(129, 20, 1, NULL, NULL, 'IDLE', NULL, NULL),
(131, 20, 2, NULL, NULL, 'IDLE', NULL, NULL),
(133, 20, 3, NULL, NULL, 'IDLE', NULL, NULL),
(135, 20, 4, NULL, NULL, 'IDLE', NULL, NULL),
(137, 20, 5, NULL, NULL, 'IDLE', NULL, NULL),
(139, 20, 6, NULL, NULL, 'IDLE', NULL, NULL),
(141, 20, 7, NULL, NULL, 'IDLE', NULL, NULL),
(143, 20, 8, NULL, NULL, 'IDLE', NULL, NULL),
(145, 21, 1, NULL, NULL, 'IDLE', NULL, NULL),
(147, 21, 2, NULL, NULL, 'IDLE', NULL, NULL),
(149, 21, 3, NULL, NULL, 'IDLE', NULL, NULL),
(151, 21, 4, NULL, NULL, 'IDLE', NULL, NULL),
(153, 21, 5, NULL, NULL, 'IDLE', NULL, NULL),
(155, 21, 6, NULL, NULL, 'IDLE', NULL, NULL),
(157, 21, 7, NULL, NULL, 'IDLE', NULL, NULL),
(159, 21, 8, NULL, NULL, 'IDLE', NULL, NULL),
(161, 22, 1, NULL, NULL, 'IDLE', NULL, NULL),
(163, 22, 2, NULL, NULL, 'IDLE', NULL, NULL),
(165, 22, 3, NULL, NULL, 'IDLE', NULL, NULL),
(167, 22, 4, NULL, NULL, 'IDLE', NULL, NULL),
(169, 22, 5, NULL, NULL, 'IDLE', NULL, NULL),
(171, 22, 6, NULL, NULL, 'IDLE', NULL, NULL),
(173, 22, 7, NULL, NULL, 'IDLE', NULL, NULL),
(175, 22, 8, NULL, NULL, 'IDLE', NULL, NULL),
(177, 23, 1, NULL, NULL, 'IDLE', NULL, NULL),
(179, 23, 2, NULL, NULL, 'IDLE', NULL, NULL),
(181, 23, 3, NULL, NULL, 'IDLE', NULL, NULL),
(183, 23, 4, NULL, NULL, 'IDLE', NULL, NULL),
(185, 23, 5, NULL, NULL, 'IDLE', NULL, NULL),
(187, 23, 6, NULL, NULL, 'IDLE', NULL, NULL),
(189, 23, 7, NULL, NULL, 'IDLE', NULL, NULL),
(191, 23, 8, NULL, NULL, 'IDLE', NULL, NULL),
(193, 24, 1, NULL, NULL, 'IDLE', NULL, NULL),
(195, 24, 2, NULL, NULL, 'IDLE', NULL, NULL),
(197, 24, 3, NULL, NULL, 'IDLE', NULL, NULL),
(199, 24, 4, NULL, NULL, 'IDLE', NULL, NULL),
(201, 24, 5, NULL, NULL, 'IDLE', NULL, NULL),
(203, 24, 6, NULL, NULL, 'IDLE', NULL, NULL),
(205, 24, 7, NULL, NULL, 'IDLE', NULL, NULL),
(207, 24, 8, NULL, NULL, 'IDLE', NULL, NULL),
(208, 36, 1, NULL, NULL, 'IDLE', NULL, NULL),
(209, 36, 2, NULL, NULL, 'IDLE', NULL, NULL),
(210, 36, 3, NULL, NULL, 'IDLE', NULL, NULL),
(211, 36, 4, NULL, NULL, 'IDLE', NULL, NULL),
(212, 36, 5, NULL, NULL, 'IDLE', NULL, NULL),
(213, 36, 6, NULL, NULL, 'IDLE', NULL, NULL),
(214, 36, 7, NULL, NULL, 'IDLE', NULL, NULL),
(215, 36, 8, NULL, NULL, 'IDLE', NULL, NULL),
(222, 1, 2, 4, '2', 'ACTIVE', NULL, NULL),
(225, 1, 1, 6, NULL, 'ACTIVE', '111234.456633', '1123.120000'),
(226, 3, 5, 8, '5345345', 'ACTIVE', '123.000000', '233.233333'),
(227, 37, 1, NULL, NULL, 'IDLE', NULL, NULL),
(228, 37, 2, NULL, NULL, 'IDLE', NULL, NULL),
(229, 37, 3, NULL, NULL, 'IDLE', NULL, NULL),
(230, 37, 4, NULL, NULL, 'IDLE', NULL, NULL),
(231, 37, 5, NULL, NULL, 'IDLE', NULL, NULL),
(232, 37, 6, NULL, NULL, 'IDLE', NULL, NULL),
(233, 37, 7, NULL, NULL, 'IDLE', NULL, NULL),
(234, 37, 8, NULL, NULL, 'IDLE', NULL, NULL),
(235, 37, 9, NULL, NULL, 'IDLE', NULL, NULL),
(236, 37, 10, NULL, NULL, 'IDLE', NULL, NULL),
(237, 37, 11, NULL, NULL, 'IDLE', NULL, NULL),
(238, 37, 12, NULL, NULL, 'IDLE', NULL, NULL),
(239, 37, 13, NULL, NULL, 'IDLE', NULL, NULL),
(240, 37, 14, NULL, NULL, 'IDLE', NULL, NULL),
(241, 37, 15, NULL, NULL, 'IDLE', NULL, NULL),
(242, 37, 16, NULL, NULL, 'IDLE', NULL, NULL),
(243, 38, 1, 11, '1231', 'ACTIVE', '12.343242', '34.000000'),
(244, 38, 2, NULL, NULL, 'IDLE', NULL, NULL),
(245, 38, 3, NULL, NULL, 'IDLE', NULL, NULL),
(246, 38, 4, NULL, NULL, 'IDLE', NULL, NULL),
(247, 38, 5, NULL, NULL, 'IDLE', NULL, NULL),
(248, 38, 6, NULL, NULL, 'IDLE', NULL, NULL),
(249, 38, 7, NULL, NULL, 'IDLE', NULL, NULL),
(251, 38, 8, NULL, NULL, 'IDLE', NULL, NULL),
(252, 7, 3, NULL, NULL, 'IDLE', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_region`
--

CREATE TABLE `tbl_region` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_region`
--

INSERT INTO `tbl_region` (`id`, `nama`) VALUES
(1, 'TREG 1'),
(4, 'TREG 2'),
(7, 'TREG 3'),
(10, 'TREG 4'),
(13, 'TREG 5'),
(16, 'TREG 6'),
(19, 'TREG 7'),
(24, 'TREG 8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_lokasi`
--

CREATE TABLE `tbl_sub_lokasi` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `nama` mediumtext NOT NULL,
  `status` mediumtext DEFAULT NULL,
  `homepass` int(11) UNSIGNED DEFAULT NULL,
  `occupancy` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sub_lokasi`
--

INSERT INTO `tbl_sub_lokasi` (`id`, `id_lokasi`, `nama`, `status`, `homepass`, `occupancy`) VALUES
(1, 28, 'Blok A/1', 'Aktif', NULL, NULL),
(2, 28, 'Blok A/12A', 'Aktif', NULL, NULL),
(3, 28, 'Blok F/18', 'Aktif', NULL, NULL),
(4, 28, 'Blok D/1', 'Aktif', NULL, NULL),
(5, 28, 'Blok D/5', 'Aktif', NULL, NULL),
(6, 28, 'Blok C/12', 'Aktif', NULL, NULL),
(7, 55, 'Lt. GF', 'Aktif', NULL, NULL),
(8, 55, 'Lt. M', 'Aktif', NULL, NULL),
(9, 55, 'Lt. 1', 'Aktif', NULL, NULL),
(10, 55, 'Lt. 2', 'Aktif', NULL, NULL),
(11, 55, 'Lt. 3', 'Aktif', NULL, NULL),
(12, 55, 'Lt. 4', 'Aktif', NULL, NULL),
(13, 55, 'Lt. 5', 'Aktif', NULL, NULL),
(14, 28, 'SUBLOC AQSA TES', 'Aktif', NULL, NULL),
(15, 28, 'TEST LG SA', 'Aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT '',
  `fullname` varchar(45) NOT NULL DEFAULT '',
  `password` mediumtext NOT NULL,
  `user_type` enum('Admin','Sales') NOT NULL,
  `status` enum('Active','INACTIVE') NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `creationdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `fullname`, `password`, `user_type`, `status`, `last_login`, `creationdate`) VALUES
(1, 'admin', 'Administrator', '$1$QxwXAsJO$fVc7H06d/LkRlVTxxZx70/', 'Admin', 'Active', '2022-03-15 20:29:40', '2014-06-23 01:43:07'),
(2, 'amirhamzah', 'Amir Hamzah', '$1$wzOOTJ8D$mqaP0/h3evW8yc82sM5ev1', 'Sales', 'Active', '2021-09-17 12:29:31', '2021-09-17 11:36:47');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_002_port_odp`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_002_port_odp` (
`id` int(11) unsigned
,`id_odp` int(11)
,`port_odp` int(11)
,`id_pelanggan` int(11)
,`no_inet` mediumtext
,`status_port_odp` mediumtext
,`lat` decimal(12,6)
,`lon` decimal(12,6)
,`nama` mediumtext
,`alamat` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_tbl_odc_lokasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_tbl_odc_lokasi` (
`id` int(11) unsigned
,`id_odc` int(11)
,`nama_odc` mediumtext
,`id_lokasi` int(11)
,`nama_lokasi` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_tbl_odp_sub_lokasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_tbl_odp_sub_lokasi` (
`id` int(11) unsigned
,`id_odp` int(11)
,`nama_odp` mediumtext
,`id_sub_lokasi` int(11)
,`nama_sub_lokasi` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_tipe_tbl_lokasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_tipe_tbl_lokasi` (
`tipe` mediumtext
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_002_port_odp`
--
DROP TABLE IF EXISTS `v_002_port_odp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_002_port_odp`  AS SELECT `a`.`id` AS `id`, `a`.`id_odp` AS `id_odp`, `a`.`port_odp` AS `port_odp`, `a`.`id_pelanggan` AS `id_pelanggan`, `a`.`no_inet` AS `no_inet`, `a`.`status_port_odp` AS `status_port_odp`, `a`.`lat` AS `lat`, `a`.`lon` AS `lon`, `b`.`nama` AS `nama`, `b`.`alamat` AS `alamat` FROM (`tbl_port_odp` `a` left join `tbl_pelanggan` `b` on(`a`.`id_pelanggan` = `b`.`id`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_tbl_odc_lokasi`
--
DROP TABLE IF EXISTS `v_tbl_odc_lokasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_odc_lokasi`  AS SELECT `tbl_odc_lokasi`.`id` AS `id`, `tbl_odc_lokasi`.`id_odc` AS `id_odc`, `tbl_odc`.`nama` AS `nama_odc`, `tbl_odc_lokasi`.`id_lokasi` AS `id_lokasi`, `tbl_lokasi`.`nama` AS `nama_lokasi` FROM ((`tbl_odc_lokasi` join `tbl_lokasi` on(`tbl_odc_lokasi`.`id_lokasi` = `tbl_lokasi`.`id`)) join `tbl_odc` on(`tbl_odc_lokasi`.`id_odc` = `tbl_odc`.`id`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_tbl_odp_sub_lokasi`
--
DROP TABLE IF EXISTS `v_tbl_odp_sub_lokasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tbl_odp_sub_lokasi`  AS SELECT `tbl_odp_sub_lokasi`.`id` AS `id`, `tbl_odp_sub_lokasi`.`id_odp` AS `id_odp`, `tbl_odp`.`nama` AS `nama_odp`, `tbl_odp_sub_lokasi`.`id_sub_lokasi` AS `id_sub_lokasi`, `tbl_sub_lokasi`.`nama` AS `nama_sub_lokasi` FROM ((`tbl_odp_sub_lokasi` join `tbl_sub_lokasi` on(`tbl_odp_sub_lokasi`.`id_sub_lokasi` = `tbl_sub_lokasi`.`id`)) join `tbl_odp` on(`tbl_odp_sub_lokasi`.`id_odp` = `tbl_odp`.`id`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_tipe_tbl_lokasi`
--
DROP TABLE IF EXISTS `v_tipe_tbl_lokasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tipe_tbl_lokasi`  AS SELECT DISTINCT `tbl_lokasi`.`tipe` AS `tipe` FROM `tbl_lokasi` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_appconfig`
--
ALTER TABLE `tbl_appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`) USING HASH;

--
-- Indeks untuk tabel `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_odc`
--
ALTER TABLE `tbl_odc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_odc` (`nama`) USING HASH;

--
-- Indeks untuk tabel `tbl_odc_lokasi`
--
ALTER TABLE `tbl_odc_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_lokasi` (`id_lokasi`);

--
-- Indeks untuk tabel `tbl_odp`
--
ALTER TABLE `tbl_odp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_port_odc` (`id_odc`,`port_odc`),
  ADD UNIQUE KEY `unique_nama_odp` (`id_odc`,`nama`) USING HASH;

--
-- Indeks untuk tabel `tbl_odp_sub_lokasi`
--
ALTER TABLE `tbl_odp_sub_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_odp` (`id_odp`,`id_sub_lokasi`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_pelanggan` (`nama`,`no_telp`) USING HASH;

--
-- Indeks untuk tabel `tbl_port_odp`
--
ALTER TABLE `tbl_port_odp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_port_odp` (`id_odp`,`port_odp`),
  ADD UNIQUE KEY `unique_no_inet` (`no_inet`) USING HASH;

--
-- Indeks untuk tabel `tbl_region`
--
ALTER TABLE `tbl_region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`) USING HASH;

--
-- Indeks untuk tabel `tbl_sub_lokasi`
--
ALTER TABLE `tbl_sub_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_sub_lokasi` (`id_lokasi`,`nama`) USING HASH;

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_appconfig`
--
ALTER TABLE `tbl_appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT untuk tabel `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_odc`
--
ALTER TABLE `tbl_odc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_odc_lokasi`
--
ALTER TABLE `tbl_odc_lokasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_odp`
--
ALTER TABLE `tbl_odp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tbl_odp_sub_lokasi`
--
ALTER TABLE `tbl_odp_sub_lokasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT untuk tabel `tbl_port_odp`
--
ALTER TABLE `tbl_port_odp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT untuk tabel `tbl_region`
--
ALTER TABLE `tbl_region`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_lokasi`
--
ALTER TABLE `tbl_sub_lokasi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
