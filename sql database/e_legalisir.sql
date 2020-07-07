-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jan 2020 pada 07.58
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_legalisir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `NIM` varchar(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`NIM`, `Status`) VALUES
('41516010006', 'lulus'),
('41516010024', 'lulus'),
('41516010035', 'lulus'),
('41517010040', 'lulus'),
('41517010041', 'aktif'),
('41517010042', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba_question`
--

CREATE TABLE `coba_question` (
  `id` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba_question`
--

INSERT INTO `coba_question` (`id`, `question`, `name`) VALUES
(2, 'Tujuan Pembelajaran FASILKOM Jelas', 'tujuan'),
(3, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', 'konten'),
(4, 'Beban Tugas Perkuliahan Sesuai', 'beban'),
(5, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', 'perkuliahan'),
(6, 'Profesi kerja sesuai keinginan', 'profesi'),
(7, 'Profesi kerja anda sesuai dengan jurusan anda', 'profesisesuai'),
(8, 'Profesi anda sesuai dengan keahlian anda', 'profkeinginan'),
(9, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ini', 'pengetahuan'),
(10, 'e-Businsess', 'ebusiness'),
(11, 'Aplikasi Multi Platform', 'aplikasi'),
(12, 'Network Specialist', 'network'),
(13, 'Data Solution', 'data'),
(14, 'Wirausaha', 'wirausaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alumni`
--

CREATE TABLE `data_alumni` (
  `id` int(11) NOT NULL,
  `NIM` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempatBekerja` varchar(50) NOT NULL,
  `posisiBekerja` varchar(50) NOT NULL,
  `alamatPerusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_alumni`
--

INSERT INTO `data_alumni` (`id`, `NIM`, `email`, `telepon`, `alamat`, `tempatBekerja`, `posisiBekerja`, `alamatPerusahaan`) VALUES
(120, '41516010035', 'yudhapermana166@gmail.com', '087888977103', 'Jakarta Selatan', 'PT.Google Indonesia', 'Full Stack Developer', 'Jl. Sudirman, Google Indonesia, 14420'),
(121, '41516010006', 'jessica@gmail.com', '087888977102', 'Cipadu, Tangerang', 'PT. Mandiri Indonesia', 'Data Analyst', 'Jl. Sudirman, Mandiri Indonesia, 14420'),
(122, '41516010024', 'adhammustova@gmail.com', '089663962087', 'Kalideres, Jakarta Barat', 'PT. Cipta Purnama Samudera', 'SEO', 'Jl. Bintaro Bollevard, 14420'),
(123, '41515010083', 'mail@yusuffarhan.com', '087774660005', 'm taman walet', 'PT. Maju Mundur', 'FE Developer', 'Jl. Sudirman, Indonesia, 14420'),
(126, '41514010090', 'sdhaay@gmail.com', '123', 'coba', 'PT. Maju Mundur', 'Back End Developer', 'Jl. Sudirman, Indonesia, 14420'),
(127, '41514010100', 'ajamudahin@gmail.com', '0123', 'ajamudahin', 'PT. Maju Mundur', 'Data Scientist', 'Jl. Sudirman, Indonesia, 14420'),
(128, '41514010040', 'imam_umb@digitalent2019.id', '123', 'tes', 'PT. Maju Mundur', 'IT Consultan', 'Jl. Sudirman, Indonesia, 14420'),
(130, '41514010010', 'tes@gmail.com', '123', 'qwer', 'PT. Maju Mundur', 'Data Engineer', 'Jl. Sudirman, Indonesia, 14420'),
(131, '41515010155', 'bwrelawan85@gmail.com', '123', 'gatau', 'PT. Maju Mundur', 'Python Programmer', 'Jl. Sudirman, Indonesia, 14420'),
(132, '41514010011', 'jessicachika94@gmail.com', '08123456778', 'Cipadu, Tangerang Selatan', 'PT. Maju Mundur', 'FE Developer', 'Jl. Sudirman, Indonesia, 14420'),
(133, '41514010013', 'ajamudahin@gmail.com', '0812345678', 'Meruya Selatan', 'PT. Maju Mundur', 'UI/UX Engineer', 'Jl. Sudirman, Indonesia, 14420');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dekan`
--

CREATE TABLE `dekan` (
  `ID_Dekan` int(6) NOT NULL,
  `NamaDekan` varchar(50) NOT NULL,
  `emailDekan` varchar(20) NOT NULL,
  `PassDekan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `question`, `answer`) VALUES
(615, 'Network Specialist', '3'),
(616, 'Data Solution', '3'),
(617, 'Wirausaha', '3'),
(618, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'tes'),
(619, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'coba'),
(620, 'Tujuan Pembelajaran FASILKOM Jelas', '1'),
(621, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', '1'),
(622, 'Beban Tugas Perkuliahan Sesuai', '1'),
(623, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', '1'),
(624, 'Profesi kerja sesuai keinginan', '1'),
(625, 'Profesi kerja anda sesuai dengan jurusan anda', '1'),
(626, 'Profesi anda sesuai dengan keahlian anda', '1'),
(627, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ', '1'),
(628, 'e-Businsess', '1'),
(629, 'Aplikasi Multi Platform', '1'),
(630, 'Network Specialist', '1'),
(631, 'Data Solution', '1'),
(632, 'Wirausaha', '1'),
(633, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'tes'),
(634, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'tessss'),
(635, 'Tujuan Pembelajaran FASILKOM Jelas', '1'),
(636, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', '1'),
(637, 'Beban Tugas Perkuliahan Sesuai', '1'),
(638, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', '1'),
(639, 'Profesi kerja sesuai keinginan', '1'),
(640, 'Profesi kerja anda sesuai dengan jurusan anda', '1'),
(641, 'Profesi anda sesuai dengan keahlian anda', '1'),
(642, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ', '1'),
(643, 'e-Businsess', '1'),
(644, 'Aplikasi Multi Platform', '1'),
(645, 'Network Specialist', '1'),
(646, 'Data Solution', '1'),
(647, 'Wirausaha', '1'),
(648, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'qwe'),
(649, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'qwee'),
(650, 'Tujuan Pembelajaran FASILKOM Jelas', '2'),
(651, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', '2'),
(652, 'Beban Tugas Perkuliahan Sesuai', '2'),
(653, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', '2'),
(654, 'Profesi kerja sesuai keinginan', '2'),
(655, 'Profesi kerja anda sesuai dengan jurusan anda', '2'),
(656, 'Profesi anda sesuai dengan keahlian anda', '2'),
(657, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ', '2'),
(658, 'e-Businsess', '2'),
(659, 'Aplikasi Multi Platform', '2'),
(660, 'Network Specialist', '2'),
(661, 'Data Solution', '2'),
(662, 'Wirausaha', '2'),
(663, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'eaae'),
(664, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'aeea'),
(665, 'Tujuan Pembelajaran FASILKOM Jelas', '1'),
(666, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', '1'),
(667, 'Beban Tugas Perkuliahan Sesuai', '1'),
(668, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', '1'),
(669, 'Profesi kerja sesuai keinginan', '1'),
(670, 'Profesi kerja anda sesuai dengan jurusan anda', '1'),
(671, 'Profesi anda sesuai dengan keahlian anda', '1'),
(672, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ', '1'),
(673, 'e-Businsess', '1'),
(674, 'Aplikasi Multi Platform', '1'),
(675, 'Network Specialist', '1'),
(676, 'Data Solution', '1'),
(677, 'Wirausaha', '1'),
(678, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'coba jeje'),
(679, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'tes jeje'),
(680, 'Tujuan Pembelajaran FASILKOM Jelas', '3'),
(681, 'Konten Perkuliahan Tersusun dan Terencana Dengan Baik', '3'),
(682, 'Beban Tugas Perkuliahan Sesuai', '3'),
(683, 'Perkuliahan disusun agar memungkinkan semua mahasiswa berpartisipasi secara penuh', '3'),
(684, 'Profesi kerja sesuai keinginan', '3'),
(685, 'Profesi kerja anda sesuai dengan jurusan anda', '3'),
(686, 'Profesi anda sesuai dengan keahlian anda', '3'),
(687, 'Pengetahuan dan keterampilan yang anda peroleh semasa kuliah berguna dalam menjalankan profesi saat ', '3'),
(688, 'e-Businsess', '3'),
(689, 'Aplikasi Multi Platform', '3'),
(690, 'Network Specialist', '3'),
(691, 'Data Solution', '3'),
(692, 'Wirausaha', '3'),
(693, 'Menurut anda, aspek apa dari perkulihan di FASILKOM yang paling bermanfaat atau penting?', 'tes ajamudahin'),
(694, 'Apa saran Anda untuk menyempurnakan kualitas pembelajaran FASILKOM ?', 'coca ajamudahin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_Payment` int(6) NOT NULL,
  `ID_Reservasi` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `StatusKonfirmasi` int(1) NOT NULL,
  `PaidAmount` int(6) NOT NULL,
  `PaidBy` varchar(50) NOT NULL,
  `Rekening` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_Payment`, `ID_Reservasi`, `Image`, `StatusKonfirmasi`, `PaidAmount`, `PaidBy`, `Rekening`, `Date`, `Bank`) VALUES
(59, 73, 'ssbuktibayar.jpg', 1, 45000, 'YUDHA PERMANA', '1234567', '2019-09-28 00:00:00', 'BNI'),
(60, 74, 'bukti.png', 1, 65000, 'JESSICA', '3214567', '2019-09-29 01:00:59', 'Mandiri'),
(61, 75, 'ssbukti.jpg', 1, 15000, 'ADHAM MUSTOVA', '987654321', '2019-09-29 00:00:00', 'BCA'),
(62, 80, 'ssbukti1.jpg', 1, 15000, 'SANDY WAHYU PRASETYO', '12345678', '2019-10-14 00:00:00', 'BCA'),
(63, 82, 'ssbuktibayar1.jpg', 1, 45000, 'ARINDA KURNIAWATI', '01234567', '2019-10-15 13:14:00', 'BNI'),
(64, 76, 'ssbukti2.jpg', 0, 25000, 'YUSUF FARHAN', '123', '2019-10-15 13:14:02', 'BCA'),
(65, 86, 'bukti1.png', 0, 155000, 'BOWO RELAWANTO', '01234567', '2019-10-19 12:45:54', 'Mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `ID_Reservasi` int(11) NOT NULL,
  `NIM` varchar(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `upload_ijazah` varchar(100) DEFAULT NULL,
  `upload_transkip` varchar(100) DEFAULT NULL,
  `Jumlah_ijazah` int(11) NOT NULL,
  `Jumlah_transkip` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Tgl_Transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `Tgl_Selesai` datetime NOT NULL,
  `Tgl_Diambil` datetime NOT NULL,
  `StatusBayar` int(1) NOT NULL,
  `StatusReservasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`ID_Reservasi`, `NIM`, `Nama`, `upload_ijazah`, `upload_transkip`, `Jumlah_ijazah`, `Jumlah_transkip`, `Total`, `Tgl_Transaksi`, `Tgl_Selesai`, `Tgl_Diambil`, `StatusBayar`, `StatusReservasi`) VALUES
(73, '41516010035', 'Yudha Permana', 'SERTIFIKAT_IBM4.pdf', 'sertifikat_kuliah_umum_sesi_siang4.pdf', 2, 2, 45000, '2019-09-28 22:52:17', '2019-10-14 00:01:05', '0000-00-00 00:00:00', 1, 2),
(74, '41516010006', 'Jessica', 'sertifikat_machine_learning.pdf', 'sertifikat_Smart_Web.pdf', 3, 3, 65000, '2019-09-28 22:59:29', '2019-11-08 14:01:53', '0000-00-00 00:00:00', 1, 2),
(75, '41516010024', 'Adham Mustova', 'sertifikat_pameran.pdf', NULL, 1, 0, 15000, '2019-09-28 23:10:12', '2019-09-28 23:32:53', '2019-10-15 12:52:41', 1, 3),
(76, '41515010083', 'Yusuf Farhan Hasbullah', 'SERTIFIKAT_IBM6.pdf', 'sertifikat_kuliah_umum_sesi_siang5.pdf', 1, 1, 25000, '2019-10-06 12:26:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(80, '41514010090', 'SANDY WAHYU PRASETYO', 'SERTIFIKAT_IBM16.pdf', NULL, 1, 0, 15000, '2019-10-14 02:21:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(82, '41514010100', 'ARINDA KURNIAWATI', 'sertifikat_Smart_Web1.pdf', '', 4, 0, 45000, '2019-10-14 02:48:39', '2019-11-12 14:48:04', '0000-00-00 00:00:00', 1, 2),
(83, '41514010040', 'LUQMAN BHAKTI', 'sertifikat_Smart_Web2.pdf', 'SERTIFIKAT_IBM17.pdf', 5, 1, 65000, '2019-10-15 08:58:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(85, '41514010010', 'ANJAR HERO WILARTO', 'sertifikat_Smart_Web7.pdf', 'sertifikat_machine_learning2.pdf', 5, 10, 155000, '2019-10-19 08:51:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(86, '41515010155', 'BOWO RELAWANTO', 'SERTIFIKAT_IBM18.pdf', 'sertifikat_kuliah_umum_sesi_siang14.pdf', 10, 5, 155000, '2019-10-19 09:00:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(87, '41514010011', 'DANANG EKO PRAYOGO', 'AWS_Training_Certification_-_Certicate_of_Completion.pdf', 'sertifikat_machine_learning3.pdf', 10, 10, 205000, '2019-10-28 09:57:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(88, '41514010013', 'ANGGER PRATIKNO', '', 'SERTIFIKAT_IBM19.pdf', 0, 5, 55000, '2019-10-28 10:14:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'TU Fasilkom', 'admin', 'yudhapermana166@gmail.com', '$2y$10$Gy5mWIVp/7/ErpvaFq2QU./lsZVLL5ZnYLcfiL9fkwH.LkpGZ.FHC', 1, 1, '2019-04-22 11:22:39'),
(11, 'Reizha', 'reizha', 'reizha@gmail.com', '$2y$10$OMF4NTrc3skRy2kglbRdluWvMLFvyNrs46Y6Z8gYY6ZtLM7WrpqAS', 0, 1, '2019-04-23 03:54:04'),
(12, 'Dekan Fasilkom', 'dekan', 'jessicasbrn@gmail.com', '$2y$10$aep1xsgX0P.7eqtvt3xLou1irMNOO5qACANcZAdguWhZC/hzW7VCC', 2, 1, '2019-04-26 03:08:00'),
(13, 'jody', 'jody18', 'jodyheryanto18@gmail.com', '$2y$10$tntUJwRx3B.Id1.wuW1jLuNdlgbc2u7cB3LadjkFq0EHeiRGhx7U6', 1, 1, '2019-09-24 07:09:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_role`
--

CREATE TABLE `users_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_role`
--

INSERT INTO `users_role` (`id`, `role`) VALUES
(1, 'adm'),
(2, 'dekan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 2, 2),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Dekan'),
(3, 'Pembayaran'),
(4, 'Legalisir'),
(5, 'Koresponden'),
(6, 'Menu'),
(7, 'Report');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'os-icon os-icon-layout', 1),
(2, 2, 'Dashboard', 'dekan', 'os-icon os-icon-layout', 1),
(3, 3, 'Belum Bayar', 'pembayaran/belumBayar', 'os-icon os-icon-coins-4', 1),
(4, 4, 'Proses', 'legalisir/proses', 'os-icon os-icon-pie-chart-2', 1),
(5, 5, 'Question Koresponden', 'koresponden', 'os-icon os-icon-edit-1', 1),
(6, 5, 'Answer Koresponden', 'koresponden/answer', 'os-icon os-icon-bar-chart-stats-up', 1),
(7, 6, 'Menu Management', 'menu', 'os-icon os-icon-grid-squares-22', 1),
(8, 6, 'Submenu Management', 'menu/submenu', 'os-icon os-icon-ui-55', 1),
(9, 4, 'Selesai', 'legalisir/selesai', 'os-icon os-icon-agenda-1', 1),
(10, 4, 'Terima', 'legalisir/terima', 'os-icon os-icon-tasks-checked', 1),
(11, 7, 'Cetak Laporan Berkas', 'admin/report', 'os-icon os-icon-graph-down', 1),
(12, 3, 'Menunggu', 'pembayaran', 'os-icon os-icon-activity', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `coba_question`
--
ALTER TABLE `coba_question`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_alumni`
--
ALTER TABLE `data_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dekan`
--
ALTER TABLE `dekan`
  ADD PRIMARY KEY (`ID_Dekan`);

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_Payment`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`ID_Reservasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `coba_question`
--
ALTER TABLE `coba_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_alumni`
--
ALTER TABLE `data_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_Payment` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `ID_Reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
