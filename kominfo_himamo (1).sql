-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 17 Jan 2018 pada 12.08
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo_himamo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'c1afaf2ee9c1d46a4ca936d5f4abbb8e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `nama`, `nim`, `visi`, `misi`, `kelas`, `umur`, `picture`) VALUES
(1, 'Wiraga Khaliduddin', '216341048', '\r\nMembuat himamo lebih baik, anggota dengan inovasi , passion dan kreatifitas tinggi.', '\r\n1 melanjutkan program kerja yang ada<br/>\r\n2 membuat program kerja yang berhubungan dengan hobi anggota<br/>\r\n3 membuat kegiatan yang meningkatkan inovasi dan kreativitas anggota<br/>\r\n', '2AEB', '20', '1.jpg'),
(2, 'Sulthan Muhammad F', '216341069', 'Menjadikan himamo yang bermanfaat bagi anggotanya . jurusan dan masyarakat dalam lingkungan yang bersinergis dan agamis demi terciptanya himamo yang solid berintegritas dan berwawasan luas', '1 mewujudkan hubungan harmonis di antara anggota himamo \r\ndan jurusan <br/>\r\n2 menjaring aspirasi dari semua elemen yang ada di jurusan <br/>\r\n3 berpartisipasi aktif dalam kehidupan bermasyarakat <br/>\r\n4 menjadikan setiap elemen (anggota dan pengurus) se', '2AEC', '19', '2.jpg'),
(3, 'Imam Febiawan', '216441008', 'Mewujudkan HIMAMO yang lebih baik.', '\r\n1.	Mewujudkan HIMAMO yang lebih baik. <br/>\r\n2.	Meningkatkan ketakwaan terhadap Tuhan Yang Maha Esa.<br/>\r\n3.	Mengoptimalkan program kerja yang sudah terealisasi.<br/>\r\n4.	Menjadikan HIMAMO sebagai wadah aspirasi bagi mahasiswa jurusan AE.<br/>\r\n5.	Berk', '2AED', '40', '3.jpg'),
(4, 'Aldo Apdila F', '216341026', 'Membangun kinerja HIMAMO yang lebih baik guna mewujudkan himpunan mahasiswa yang berintegritas tinggi dinamis dan berkesinambungan.', '1. Mewujudkan aktifitas yang agamis dengan menjunjung tinggi nilai agama <br/>\r\n2. Menciptakan relasi antara civitas akademi dengan himpunan mahasiswa<br/>\r\n3. Menjadikan HIMAMO sebagai sarana peningkatan kualitas akademik dan non akademik<br/>\r\n4. Memban', '2AEB', '39', '4.jpg'),
(5, 'Rianza Fauzi Z', '216441020', 'Menjadikan mahasiswa himpunan yang aktif, kreatif, inovatif, professional, jujur dan berakhlak mulia.  ', '1. Menjadikan himamo menjadi himpunan yang nyaman, aman, tentram, dan saling menghargai. <br/>\r\n2. Membangun hubungan yang baik antar himpunan. <br/>\r\n3. Melakukan kunjungan ilmiah sebagai motivasi mahasiswa untuk mencapai visi. <br/>\r\n4. Menambah hal-hal', '2AED', '76', '5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_voters`
--

CREATE TABLE `calon_voters` (
  `id` int(10) NOT NULL,
  `id_calon` varchar(10) NOT NULL,
  `nim_voter` varchar(9) NOT NULL,
  `vote_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_voters`
--

INSERT INTO `calon_voters` (`id`, `id_calon`, `nim_voter`, `vote_time`) VALUES
(15, '5', '216441005', '2018-01-16 23:27:37'),
(16, '2', '216441019', '2018-01-16 23:27:37'),
(17, '2', '216341069', '2018-01-16 23:27:37'),
(18, '1', '217341017', '2018-01-16 23:27:37'),
(19, '2', '217341044', '2018-01-16 23:27:37'),
(20, '3', '217341032', '2018-01-16 23:27:37'),
(21, '4', '217341037', '2018-01-16 23:27:37'),
(22, '1', '217341039', '2018-01-16 23:27:37'),
(23, '1', '217341038', '2018-01-16 23:27:37'),
(24, '2', '217341047', '2018-01-16 23:27:37'),
(25, '2', '217341025', '2018-01-16 23:27:37'),
(26, '2', '217341025', '2018-01-16 23:27:37'),
(27, '2', '217341025', '2018-01-16 23:27:37'),
(28, '1', '217341025', '2018-01-16 23:27:37'),
(29, '2', '217341016', '2018-01-16 23:27:37'),
(30, '5', '216441020', '2018-01-16 23:27:37'),
(31, '5', '216441008', '2018-01-16 23:27:37'),
(32, '2', '216341049', '2018-01-16 23:27:37'),
(33, '2', '216341065', '2018-01-16 23:27:37'),
(34, '2', '216441021', '2018-01-16 23:27:37'),
(35, '5', '217441007', '2018-01-16 23:27:37'),
(36, '3', '216441009', '2018-01-16 23:27:37'),
(37, '2', '215441910', '2018-01-16 23:27:37'),
(38, '1', '216341023', '2018-01-16 23:27:37'),
(39, '1', '217341018', '2018-01-16 23:27:37'),
(40, '5', '216341014', '2018-01-16 23:27:37'),
(41, '3', '215441907', '2018-01-16 23:27:37'),
(42, '5', '217341034', '2018-01-16 23:27:37'),
(43, '2', '217341053', '2018-01-16 23:27:37'),
(44, '5', '216341053', '2018-01-16 23:27:37'),
(45, '3', '215341028', '2018-01-16 23:27:37'),
(46, '3', '215341024', '2018-01-16 23:27:37'),
(47, '2', '215341022', '2018-01-16 23:27:37'),
(48, '4', '216341036', '2018-01-16 23:27:37'),
(49, '5', '215341018', '2018-01-16 23:27:37'),
(50, '5', '215441906', '2018-01-16 23:27:37'),
(51, '2', '215441933', '2018-01-16 23:27:37'),
(52, '2', '214341069', '2018-01-16 23:27:37'),
(53, '1', '216341060', '2018-01-16 23:27:37'),
(54, '3', '215441926', '2018-01-16 23:27:37'),
(55, '2', '215341019', '2018-01-16 23:27:37'),
(56, '3', '217341055', '2018-01-16 23:27:37'),
(57, '3', '217341043', '2018-01-16 23:27:37'),
(58, '2', '215441914', '2018-01-16 23:27:37'),
(59, '1', '215441922', '2018-01-16 23:27:37'),
(60, '2', '216341059', '2018-01-16 23:27:37'),
(61, '2', '215441920', '2018-01-16 23:27:37'),
(62, '2', '216341020', '2018-01-16 23:27:37'),
(63, '5', '214341027', '2018-01-16 23:27:37'),
(64, '2', '214341021', '2018-01-16 23:27:37'),
(65, '4', '214341003', '2018-01-16 23:27:37'),
(66, '2', '214341006', '2018-01-16 23:27:37'),
(67, '2', '217341019', '2018-01-16 23:27:37'),
(68, '4', '216341039', '2018-01-16 23:27:37'),
(69, '5', '217441006', '2018-01-16 23:27:37'),
(70, '2', '216341054', '2018-01-16 23:27:37'),
(71, '2', '217341030', '2018-01-16 23:27:37'),
(72, '4', '216341026', '2018-01-16 23:27:37'),
(73, '3', '215441908', '2018-01-17 00:35:16'),
(74, '1', '216341067', '2018-01-17 00:38:05'),
(75, '3', '217341012', '2018-01-17 00:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Kominfo', 'Divisi yang memegang seluruh kendali atas seluruh informasi.'),
(2, 'Kaderisasi', 'Divisi yang bergerak dalam menegakkan kedisiplinan mahasiswa jurusan AE.'),
(3, 'Kreatifitas', 'Divisi yang bergerak dalam pengembangan kreatifitas mahasiswa.'),
(4, 'Kekeluargaan', 'Divisi yang menjaga kerukunan dan kedamaian warga himpunan.'),
(5, 'Kemasyarakatan', 'Divisi yang bertanggungjawab terhadap hubungan masyarakat dengan himpunan.'),
(6, 'Kajian Strategis', 'Divisi yang melakukan perencanaan terhadap kegiatan-kegiatan yang akan dilakukan oleh himpunan.'),
(7, 'Rumah Tangga', 'Divisi yang bertanggungjawab atas jalannya proker dan sekretariat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi_pengurus`
--

CREATE TABLE `divisi_pengurus` (
  `id` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `jabatan` enum('wakil','ketua') NOT NULL,
  `nim_pengurus` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi_pengurus`
--

INSERT INTO `divisi_pengurus` (`id`, `id_divisi`, `jabatan`, `nim_pengurus`) VALUES
(1, 1, 'ketua', '215441917'),
(2, 1, 'wakil', '216341060'),
(3, 2, 'ketua', '215341012'),
(4, 2, 'wakil', '216341004'),
(5, 3, 'ketua', '215441905'),
(6, 3, 'wakil', '216341069'),
(7, 4, 'ketua', '215441933'),
(8, 4, 'wakil', '216341001'),
(9, 5, 'ketua', '215441913'),
(10, 5, 'wakil', '216341039'),
(11, 6, 'ketua', '215441927'),
(12, 6, 'wakil', '216341002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nrp` varchar(9) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nrp`, `nama`) VALUES
('176402010', 'Sumiarsa, SST'),
('181401002', 'Dindin Sulaeman, Dipl.Ing HTL.,MBA'),
('187410020', 'Ruminto Subekti, SST.,MT.'),
('188408036', 'Suharyadi Pancono, Dipl.Ing.HTL.,MT.'),
('191410042', 'Ismail Rokhim, ST.MT.'),
('191410043', 'Hadi Supriyanto, ST.MT.'),
('192409012', 'DR. Noval Lilansa, Dipl.Ing (FH).,MT.'),
('192409013', 'Aris Budiyarto, ST.MT.'),
('192409015', 'Wahyudi Purnomo, ST.MT'),
('194407009', 'Budi Supriyadi'),
('194410021', 'Ir. Bolo Dwiartomo, M.Eng.'),
('196406005', 'DR.Ing. Yuliadi Erdani, MSc.'),
('200411011', 'Ridwan, S.S.T.,M.Eng'),
('201404004', 'Pipit Anggraeni, ST.MT.Msc.Tech'),
('201409005', 'Aris Eko Setiyawan, SST.'),
('201410006', 'Setyawan Ajie Sukarno, SST'),
('202410008', 'Nur Wisma Nugraha, ST.MT.'),
('202410009', 'Hendy Rudiansyah, ST.'),
('206404001', 'Andi Candra Eka P.'),
('210401001', 'Adhitya Sumardi Sunarya, S.Si.,M.Si'),
('210401002', 'Nuryanti, ST.MSc.'),
('210401003', 'Siti Aminah, ST.MT.'),
('210410016', 'Abyanuddin Salam, A.Md.'),
('210410018', 'Muhammad Giri Suhada, A.Md.'),
('211408007', 'Shinta Pertiwi, A.Md.'),
('214406001', 'Gungun Maulana'),
('214406002', 'Afaf Fadhil Rifa\'í, ST.MT.'),
('214406005', 'Andri Wiyono'),
('214406006', 'Ade Hasan Sumarso, A.Md.'),
('215412002', 'Susetyo Bagas Bhaskoro, S.ST.,MT'),
('216410001', 'Tika Meizinta, M.Sc.'),
('216411004', 'Faisal Abdulrahman Budikasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode` varchar(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wali_dosen` varchar(30) NOT NULL,
  `nim_km` varchar(9) NOT NULL,
  `nim_sekretaris` varchar(9) NOT NULL,
  `nim_bendahara` varchar(9) NOT NULL,
  `nim_terakhir_ubah` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode`, `nama`, `wali_dosen`, `nim_km`, `nim_sekretaris`, `nim_bendahara`, `nim_terakhir_ubah`) VALUES
('aea2014', 'AEA 2014', '-', '214341022', '', '214341018', '214341005'),
('aea2015', 'AEA 2015', 'Afaf Fadhil Rifa\'í, ST.MT.', '215441907', '', '215341010', '215441905'),
('aea2016', 'AE YOLO', 'Suharyadi Pancono, Dipl.Ing', '216341002', '', '216341009', '216341024'),
('aea2017', 'AEA 2017', '', '217341013', '', '217341006', '217341017'),
('aeb2014', 'AEB 2014', '-', '', '', '', ''),
('aeb2015', 'AEB 2015', 'Gun Gun Maulana S.T., M.T.', '215441919', '', '215441922', '215441912'),
('aeb2016', 'AEB 2016', 'Ruminto Subekti, SST.,MT.', '216341048', '', '216341041', '216341036'),
('aeb2017', 'AEB 2017', 'Hadi Supriyanto, ST.MT.', '217341047', '', '217341041', '217341028'),
('aec2014', 'AEC 2014', 'Ismail Rokhim, ST.MT.', '214341050', '', '214341068', '214341065'),
('aec2015', 'AEC 2015', '-', '215341028', '', '215341035', '215341028'),
('aec2016', '2AEC', 'Susetyo Bagas Bhaskoro, SST,MT', '216341065', '216341068', '216341070', '216341067'),
('aec2017', 'AEC 2017', 'Ir. Bolo Dwiartomo, M.Eng.', '217341068', '', '217341063', '217341055'),
('aed2016', 'AED 2016', 'Ridwan, S.S.T.,M.Eng', '216441020', '', '216441018', '216441005'),
('aed2017', 'AED 2017', 'Yuliadi Erdani', '217441002', '', '217441015', '217441006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepemimpinan`
--

CREATE TABLE `kepemimpinan` (
  `nim` varchar(9) NOT NULL,
  `tahun_jadi` year(4) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepemimpinan`
--

INSERT INTO `kepemimpinan` (`nim`, `tahun_jadi`, `id`, `email`, `linkedin`) VALUES
('215341004', 2017, 1, 'kahim@himamo.com', ''),
('214341047', 2016, 2, '', ''),
('213341036', 2015, 3, 'maulanajefri05@gmail.com', ''),
('212341042', 2014, 4, 'm.iqbale18@gmail.com', ''),
('211341007', 2013, 5, 'ngrhadimas@yahoo.com', 'ngrhadimas'),
('210345003', 2012, 6, 'adnan.maulanaa@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`) VALUES
('210345003', 'Adnan Maulana', 'L'),
('211341007', 'Dimas Nugraha', 'L'),
('212341042', 'Mohamed Iqbal', 'L'),
('213341036', 'Jefri Maulana', 'L'),
('214341001', 'Ajmil Al-Arasyi', 'L'),
('214341002', 'Anastasia Mia Martalia', 'P'),
('214341003', 'Atep Puja Trihartono', 'L'),
('214341004', 'Bayu Rahman Hakim', 'L'),
('214341005', 'Chaterine Natalia Tambun', 'P'),
('214341006', 'Dean Gita Saputra', 'L'),
('214341007', 'Erick Suryadi', 'L'),
('214341008', 'Ersti Miawadi Sriyuli', 'P'),
('214341009', 'Fauzi Agung Pambudi', 'L'),
('214341011', 'Hilda Khoirunnisa', 'P'),
('214341012', 'Ilham Raihan Dwi Ananto', 'L'),
('214341013', 'Jefri Aryanto', 'L'),
('214341014', 'Kenny Chandra Pranata', 'L'),
('214341015', 'M. Fathur Rohman', 'L'),
('214341016', 'M. Hifzhan Budiman', 'L'),
('214341017', 'M. Rifqi Arrahman', 'L'),
('214341018', 'Nabila Ayudya Prabandari', 'P'),
('214341019', 'Pandu Wiranata', 'L'),
('214341020', 'Pika Prisanjaya', 'L'),
('214341021', 'Reki Swandana', 'L'),
('214341022', 'Ridwan Hibatullah', 'L'),
('214341023', 'Siti Fatimah', 'P'),
('214341024', 'Yahdian Mulki Al Aziz', 'L'),
('214341025', 'Abdul Latief Irfan Faisal', 'L'),
('214341026', 'Aldi Pratama', 'L'),
('214341027', 'Aldi Sugiarto', 'L'),
('214341028', 'Andrian Fathurrohman P', 'L'),
('214341029', 'Aji Kurnia', 'L'),
('214341030', 'Bagus Ramadhan', 'L'),
('214341031', 'Dhianaufal', 'L'),
('214341032', 'Dzikri M I', 'L'),
('214341033', 'Rivaldho Aulya Braka', 'L'),
('214341034', 'Sya\'banul Khafi Tanjung', 'L'),
('214341035', 'Fikry Rizky P', 'L'),
('214341036', 'Habibullah', 'L'),
('214341037', 'Hasnan Habib Dipoyo', 'L'),
('214341038', 'Husin Naparin', 'L'),
('214341039', 'Ikhma Martika', 'P'),
('214341040', 'Irfan Fachriza', 'L'),
('214341041', 'Kamelia Elektrika Akbar', 'P'),
('214341042', 'M Farras F', 'L'),
('214341043', 'M Galang A', 'L'),
('214341044', 'M Ikhsan P S', 'L'),
('214341046', 'Razan Raka Wandeka', 'L'),
('214341047', 'Saptianhadi', 'L'),
('214341048', 'Terry Susanto', 'L'),
('214341049', 'Aditya Pratama N', 'L'),
('214341050', 'Ahmad Taufiqurrahman', 'L'),
('214341051', 'Anantio Naufaul R', 'L'),
('214341052', 'Andar Tri W', 'L'),
('214341053', 'Aprilia Rahmasari', 'P'),
('214341056', 'Dina Nurul Aliyah', 'P'),
('214341057', 'Fajri Dzulfiqar R', 'L'),
('214341058', 'Galang Sakti P', 'L'),
('214341059', 'Ikhsan Muharipan', 'L'),
('214341060', 'Indra Lukman H', 'L'),
('214341061', 'M. Qolbu Ihsan', 'L'),
('214341062', 'M. Giga Rumanov', 'L'),
('214341063', 'M. Cakti Abussalam A', 'L'),
('214341064', 'M. Hilmy Allam A', 'L'),
('214341065', 'M. Naufal Aziz S', 'L'),
('214341066', 'Rafa Indriyani K', 'P'),
('214341067', 'Rino Beriyanto', 'L'),
('214341068', 'Safitri Ramadhani', 'P'),
('214341069', 'Satrio Maulana Tsubasa', 'L'),
('214341070', 'Teddy Sukma A', 'L'),
('214341071', 'Wahyu Hidayat', 'L'),
('214341072', 'Yofan Aulia W', 'L'),
('215341001', 'Aldo Mefa Rahmat F', 'L'),
('215341002', 'Arief Muhammad A', 'L'),
('215341003', 'Dani Julpani Mauludin', 'L'),
('215341004', 'Eko Rahayu Tali Jiwa ', 'L'),
('215341005', 'Faisal Suheryanto', 'L'),
('215341006', 'Laras Dwishinta H N', 'P'),
('215341007', 'Muhammad Arief F', 'L'),
('215341008', 'Novi Andri Yani', 'P'),
('215341009', 'Nur Rachmat A P', 'L'),
('215341010', 'Nurul Muthi Azizah', 'P'),
('215341011', 'Putri Muthia S M', 'P'),
('215341012', 'Reza Arif Wiguna', 'L'),
('215341013', 'Rifqi Muzhafar R', 'L'),
('215341014', 'Zaky Dzulfikri', 'L'),
('215341015', 'Agil Azhar Fahrul R', 'L'),
('215341016', 'Moch Afrizal A', 'L'),
('215341017', 'Fakhri Dzulfiqar', 'L'),
('215341018', 'Fauzan Abdul Aziz', 'L'),
('215341019', 'Handi Nursan', 'L'),
('215341020', 'Hibatul Wafi Hardel', 'L'),
('215341021', 'Maulana Hakim S', 'L'),
('215341022', 'Muhamad Farhan N A', 'L'),
('215341023', 'Muhammad Fikri R', 'L'),
('215341024', 'Nashratul Millah', 'P'),
('215341025', 'Thafhan Fathur R', 'L'),
('215341026', 'Zharfan', 'L'),
('215341027', 'Abdul Halim Al-Farisy', 'L'),
('215341028', 'Adi Jati Prakarsa M', 'L'),
('215341029', 'Annisa Nur Asiyah', 'P'),
('215341030', 'Ardho Binuri Adnan', 'L'),
('215341031', 'Azka Syafa Firdaus', 'L'),
('215341032', 'Faishal Fauzan Dimyati', 'L'),
('215341033', 'Gilang Lukmanul Hakim', 'L'),
('215341035', 'Kartika', 'P'),
('215341036', 'Retza Akbar Mulyadi', 'L'),
('215341037', 'Rezi Salsabila Ronaldo', 'P'),
('215341038', 'Wajar Santoso', 'L'),
('215341039', 'Dindin Maulana', 'L'),
('215441902', 'Muhammad Sidik H', 'L'),
('215441903', 'Hajar Purnama', 'L'),
('215441904', 'Raiany Rahmi H', 'P'),
('215441905', 'Irfan Nur Riyadhi', 'L'),
('215441906', 'Junnisha Rizkya F', 'P'),
('215441907', 'Muhtar Indra P', 'L'),
('215441908', 'Nandar', 'L'),
('215441909', 'Ridwan Abdul Nafis', 'L'),
('215441910', 'Yunita Indah Sari', 'P'),
('215441911', 'Bagus Bimantoro S', 'L'),
('215441912', 'Dalilah Daniati M', ''),
('215441913', 'Dodi Iskandar', 'L'),
('215441914', 'Dynar Angga W', 'L'),
('215441915', 'Faisal Kahfi', 'L'),
('215441916', 'Fitri Nurasiah', 'P'),
('215441917', 'Fitriani Pratiwi', 'P'),
('215441918', 'Mochamad Fikrianto', 'L'),
('215441919', 'M Dhiaffaturrahman', 'L'),
('215441920', 'Nuri Hadiatiningsih', 'P'),
('215441921', 'Retno Ayu Pratiwi', 'P'),
('215441922', 'Salwa Nahlya Tazkia', 'P'),
('215441923', 'Agni Silmi Hanifuddin', 'L'),
('215441924', 'Dejan Ramdhan P', 'L'),
('215441925', 'Fachry Ahmad Efendi Y', 'L'),
('215441926', 'Fani Abdul Jabbar', 'L'),
('215441927', 'Maya Delistiani', 'P'),
('215441928', 'Muhammad Giriarda A', 'L'),
('215441929', 'Naufal Gamanoza', 'L'),
('215441930', 'Rajut Piwulang Sadjati', 'L'),
('215441931', 'Selma Damayanti', 'P'),
('215441932', 'Trysal Akbar Fatory P', 'L'),
('215441933', 'Yusuf Gutara', 'L'),
('215441934', 'Zulfikar', 'L'),
('215441935', 'Arief Muhammad Angkasa', 'L'),
('216341001', 'Aas Wardani', 'L'),
('216341002', 'Adetyo Putra Gemilang', 'L'),
('216341003', 'Alvin Aditya Setiawan', 'L'),
('216341004', 'Berlian Bayu Aji', 'L'),
('216341005', 'Dhea Safitri', 'P'),
('216341006', 'Disa Nabila', 'P'),
('216341007', 'Dudi Nur Mulyana', 'L'),
('216341009', 'Fitri Setia Wahyuni', 'P'),
('216341010', 'Ghifari Muhammad', 'L'),
('216341011', 'Hanizha Pratiwi Purnomo', 'P'),
('216341012', 'Husnul Hamzah', 'L'),
('216341014', 'Moch. Reiza Nopransyah', 'L'),
('216341015', 'Muhammad Agis', 'L'),
('216341016', 'Muhammad Fikri', 'L'),
('216341017', 'Nur Iqbal Hidayatullah', 'L'),
('216341019', 'Riki Tardiansyah', 'L'),
('216341020', 'Rudy Tri Saputra', 'L'),
('216341021', 'Taufik Maulana', 'L'),
('216341022', 'Thomas Jogi Jogari S', 'L'),
('216341023', 'Vinka Alviola', 'P'),
('216341024', 'Wildan Jati Atriya', 'L'),
('216341026', 'Aldo Apdilla Faurian', 'L'),
('216341027', 'Amiral Adira Kusumah', 'L'),
('216341028', 'Atika Nur Rahmawati', 'P'),
('216341029', 'Boni Kurniawan', 'L'),
('216341030', 'Dinda Ajeng Firdausah', 'P'),
('216341031', 'Diti Merita Febriani', 'P'),
('216341032', 'Eko Nur Wahyudin', 'L'),
('216341033', 'Faris Achmad Fajar', 'L'),
('216341034', 'Hilman Mujahid Purnama', 'L'),
('216341035', 'Ilham Rahmat Muharam', 'L'),
('216341036', 'Karisna Arip Indrawan', 'L'),
('216341037', 'Muhammad Agung Gumelar', 'L'),
('216341038', 'Muhammad Apreza Orlandy', 'L'),
('216341039', 'Muhammad Ridwan Arifin', 'L'),
('216341040', 'Prayogo Ramadhan', 'L'),
('216341041', 'Pristi Maulid Dini', 'P'),
('216341042', 'Rini Syakinah', 'P'),
('216341043', 'Rivan Aulia Rahman', 'L'),
('216341044', 'Rois Mujahiddin', 'L'),
('216341045', 'Shodiq Kalami Robbi', 'L'),
('216341046', 'Tegar Indra Cahya', 'L'),
('216341047', 'Verdian Rizaldi Gemiarta', 'L'),
('216341048', 'Wiraga Khaliduddin', 'L'),
('216341049', 'Ainal Gufron', 'L'),
('216341050', 'Aisyah Nur Afiati', 'P'),
('216341052', 'Andryan Nugraha', 'L'),
('216341053', 'Debi Khairunisa Nabila', 'P'),
('216341054', 'Dinar Perdana Ardi Putra', 'L'),
('216341055', 'Fairuz Ahmad Naufal', 'L'),
('216341056', 'Fajri Nisriinaa Tsamara Hartuti', 'P'),
('216341058', 'Fitri Wineka', 'P'),
('216341059', 'Hirzi Nurfakhrian', 'L'),
('216341060', 'Mochammad Aulia', 'L'),
('216341061', 'Muhamad Pribadi Lukman', 'L'),
('216341062', 'Muhammad Edo Fadilah', 'L'),
('216341063', 'Muhammad Sulaeman Gheofani', 'L'),
('216341064', 'Prengga Trisnanda', 'L'),
('216341065', 'Raka Mulya Putra', 'L'),
('216341066', 'Rizky Cahyaditia', 'L'),
('216341067', 'Samsul Rizal', 'L'),
('216341068', 'Soraya Ratu Nanda Jayakusumah', 'P'),
('216341069', 'Sulthan Muhammad Firdaus', 'L'),
('216341070', 'Urfa Aliya Hakim', 'P'),
('216341071', 'Vikri Muhammad Gafar', 'L'),
('216341072', 'Wira Mulyana Achmadi', 'L'),
('216441001', 'Agil Calfarera', 'L'),
('216441003', 'Andrian Julianto', 'L'),
('216441004', 'Anzas Haerun', 'L'),
('216441005', 'Dzulfikar Hamdani', 'L'),
('216441006', 'Huda Niam Islahi', 'L'),
('216441007', 'Ilham Rafif Mochamad', 'L'),
('216441008', 'Imam Febiawan', 'L'),
('216441009', 'Imas Siti Nurjanah', 'P'),
('216441010', 'Mohamad Barik Bahari', 'L'),
('216441011', 'Muhammad Hanif Robbani', 'L'),
('216441012', 'Muhammad Ridwan FM', 'L'),
('216441013', 'Muhammad Shobir AS', 'L'),
('216441014', 'Muhammad Taufiq AA', 'L'),
('216441015', 'Novi Nurhayati', 'P'),
('216441016', 'Pandu Padmadisastra', 'L'),
('216441017', 'Rahman Widyanto', 'L'),
('216441018', 'Revirda Eka Putri', 'P'),
('216441019', 'Reza Supriyatna', 'L'),
('216441020', 'Rianza Fauzi Zulkarnain', 'L'),
('216441021', 'Rifqi Helmi Alvinda', 'L'),
('216441022', 'Tania Mustika Putri S', 'P'),
('216441023', 'Yoga Maulana', 'L'),
('216441024', 'Zainun Najakh', 'L'),
('217341001', 'Agung Prasetyo', 'L'),
('217341002', 'Akbar Robani Fatlulloh', 'L'),
('217341003', 'Alif Naufal Hidayat', 'L'),
('217341004', 'Annisa Kurnia Putri', 'P'),
('217341006', 'Elvira Nisa Syahida', 'P'),
('217341007', 'Faiz Abdurahman', 'L'),
('217341008', 'Farhan Abdurrafi', 'L'),
('217341009', 'Ghifary Ladunni', 'L'),
('217341010', 'Hasna Arnita', 'P'),
('217341011', 'Hildan Febianto', 'L'),
('217341012', 'Irpan Jalaludin', 'L'),
('217341013', 'M. Zulfikar Isnaen', 'L'),
('217341014', 'Mohammad Faisal', 'L'),
('217341015', 'Monalisa Fronika', 'P'),
('217341016', 'Muhammad Ridwan', 'L'),
('217341017', 'Muhammad Tegar Fauzi', 'L'),
('217341018', 'Muhammad Yogi Ekasaputra', 'L'),
('217341019', 'Nanda Aprianza Tabachan', 'L'),
('217341020', 'Nur Iman', 'L'),
('217341021', 'Raisa Humaira S.', 'P'),
('217341022', 'Syukrawati', 'P'),
('217341023', 'Verrel Mohamad Al Syaomi', 'L'),
('217341024', 'Zahra Zaafir Fa\'idaah Darmawan', 'P'),
('217341025', 'Alfonsus Sandy Hermawan', 'L'),
('217341026', 'Arif Bijaksana', 'L'),
('217341027', 'Dzakiyy Waliyu Rahman', 'L'),
('217341028', 'Eugenia Angela Salsabillah', 'P'),
('217341029', 'Fadh Firasi Velianza', 'L'),
('217341030', 'Fahmi Akmal Fauzan', 'L'),
('217341031', 'Ferdie Alfaridzi Faizal', 'L'),
('217341032', 'Gita Mutiara Fitri', 'P'),
('217341033', 'Hanun Alya Fathinah', 'P'),
('217341034', 'Maissy Rahayu Sanggita', 'P'),
('217341035', 'Mohammad Rizal K', 'L'),
('217341036', 'Muchammad Dikha Ramadhan', 'L'),
('217341037', 'Muhamad Arief Abdurahman', 'L'),
('217341038', 'Muhammad Adhia Pasya', 'L'),
('217341039', 'Muhammad Iqbal Ramadhan', 'L'),
('217341040', 'Nico Okiyanto', 'L'),
('217341041', 'Nuraini Amelia', 'P'),
('217341042', 'Rihandi Aulia', 'L'),
('217341043', 'Ruli Admi Syururi', 'P'),
('217341044', 'Safira Fadhila', 'P'),
('217341045', 'Tamara Saphira R', 'P'),
('217341046', 'Tessa Fauzi Riswara', 'L'),
('217341047', 'Yona Surya Pratama', 'L'),
('217341048', 'Zahra Zaqya Ramdani', 'P'),
('217341049', 'Adnan Ahmad', 'L'),
('217341050', 'Afiq Hasydhiqi', 'L'),
('217341051', 'Agri Marzuki', 'L'),
('217341052', 'Ahmad Bilal Musyaffa', 'L'),
('217341053', 'Aldi Supriadi', 'L'),
('217341054', 'Alfina Dwi Rahmawati', 'P'),
('217341055', 'Anugerah', 'L'),
('217341056', 'Damas Yusli Arfani', 'L'),
('217341057', 'Diana Novita Sari', 'P'),
('217341058', 'Dimas Cristianto Adikia', 'L'),
('217341059', 'Dini Hardiyani', 'P'),
('217341060', 'Eben Haezer Andreas', 'L'),
('217341061', 'Fadlurrahman Fahmi Budiman', 'L'),
('217341062', 'Gangsar Aryo Pamungkas', 'L'),
('217341063', 'Ismi Anskia', 'P'),
('217341064', 'Muhti Wahyuni', 'P'),
('217341065', 'Neta Bening Sitoresmi', 'P'),
('217341066', 'Nova Nugraha', 'L'),
('217341067', 'Philio Rahgutomo Wardhono', 'L'),
('217341068', 'Riyadh Tsaniyadi Djajusman', 'L'),
('217341069', 'Sita Mariana', 'P'),
('217341070', 'Syachrial Yusuf Priatna', 'L'),
('217341071', 'Yustika Nurjanah', 'P'),
('217341072', 'Zulfa Nurfajri Sani', 'P'),
('217341073', 'Anandhya Tradana', 'L'),
('217441001', 'Achmad Ibnu Rosid', 'L'),
('217441002', 'Fauzan Taufik Fadhlurrahman', 'L'),
('217441003', 'Dodi Kusuma', 'L'),
('217441004', 'Firman Apriandi Meliansa', 'L'),
('217441005', 'Fuad Washil Ardhianto', 'L'),
('217441006', 'Harry Prasetyo Rosianto', 'L'),
('217441007', 'Hirzan Kautsar Dimasyqi', 'L'),
('217441008', 'Indra Sathya Naufaldi', 'L'),
('217441009', 'Jasmine Aulia Pratiwi', 'P'),
('217441010', 'Khalifah Aulia', 'L'),
('217441011', 'Kholifatul Ulya', 'P'),
('217441012', 'Khoutal Taqi ', 'L'),
('217441013', 'Mohamad Fadhlan Imaduddin', 'L'),
('217441014', 'Muhamad Fikri Radhea', 'L'),
('217441015', 'Muhammad Farhan Firdaus', 'L'),
('217441016', 'Muhammad Ih\'san', 'L'),
('217441017', 'Muhammad Naufal Luthfi Firdaus', 'L'),
('217441018', 'Muhammad Raddan Agimular', 'L'),
('217441019', 'Revi Eka Firmansyah', 'L'),
('217441020', 'Sashkya Eka Putri', 'P'),
('217441021', 'Silpia Ardiya Garini', 'P'),
('217441022', 'Tazkia Rusdiana', 'P'),
('217441023', 'Usep Tahmid Abdullah', 'L'),
('217441024', 'Watsabbit Ala Hudalloh', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_kelas`
--

CREATE TABLE `mahasiswa_kelas` (
  `nim` varchar(9) NOT NULL,
  `kode_kelas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa_kelas`
--

INSERT INTO `mahasiswa_kelas` (`nim`, `kode_kelas`) VALUES
('214341001', 'aea2014'),
('214341002', 'aea2014'),
('214341003', 'aea2014'),
('214341004', 'aea2014'),
('214341005', 'aea2014'),
('214341006', 'aea2014'),
('214341007', 'aea2014'),
('214341008', 'aea2014'),
('214341009', 'aea2014'),
('214341011', 'aea2014'),
('214341012', 'aea2014'),
('214341013', 'aea2014'),
('214341014', 'aea2014'),
('214341015', 'aea2014'),
('214341016', 'aea2014'),
('214341017', 'aea2014'),
('214341018', 'aea2014'),
('214341019', 'aea2014'),
('214341020', 'aea2014'),
('214341021', 'aea2014'),
('214341022', 'aea2014'),
('214341023', 'aea2014'),
('214341024', 'aea2014'),
('214341025', 'aeb2014'),
('214341026', 'aeb2014'),
('214341027', 'aeb2014'),
('214341028', 'aeb2014'),
('214341029', 'aeb2014'),
('214341030', 'aeb2014'),
('214341031', 'aeb2014'),
('214341032', 'aeb2014'),
('214341033', 'aeb2014'),
('214341034', 'aeb2014'),
('214341035', 'aeb2014'),
('214341036', 'aeb2014'),
('214341037', 'aeb2014'),
('214341038', 'aeb2014'),
('214341039', 'aeb2014'),
('214341040', 'aeb2014'),
('214341041', 'aeb2014'),
('214341042', 'aeb2014'),
('214341043', 'aeb2014'),
('214341044', 'aeb2014'),
('214341046', 'aeb2014'),
('214341047', 'aeb2014'),
('214341048', 'aeb2014'),
('214341049', 'aec2014'),
('214341050', 'aec2014'),
('214341051', 'aec2014'),
('214341052', 'aec2014'),
('214341053', 'aec2014'),
('214341056', 'aec2014'),
('214341057', 'aec2014'),
('214341058', 'aec2014'),
('214341059', 'aec2014'),
('214341060', 'aec2014'),
('214341061', 'aec2014'),
('214341062', 'aec2014'),
('214341063', 'aec2014'),
('214341064', 'aec2014'),
('214341065', 'aec2014'),
('214341066', 'aec2014'),
('214341067', 'aec2014'),
('214341068', 'aec2014'),
('214341069', 'aec2014'),
('214341070', 'aec2014'),
('214341071', 'aec2014'),
('214341072', 'aec2014'),
('215341001', 'aea2015'),
('215341002', 'aea2201'),
('215341003', 'aea2015'),
('215341004', 'aea2015'),
('215341005', 'aea2015'),
('215341006', 'aea2015'),
('215341007', 'aea2015'),
('215341008', 'aea2015'),
('215341009', 'aea2015'),
('215341010', 'aea2015'),
('215341011', 'aea2015'),
('215341012', 'aea2015'),
('215341013', 'aea2015'),
('215341014', 'aea2015'),
('215341015', 'aeb2015'),
('215341016', 'aeb2015'),
('215341017', 'aeb2015'),
('215341018', 'aeb2015'),
('215341019', 'aeb2015'),
('215341020', 'aeb2015'),
('215341021', 'aeb2015'),
('215341022', 'aeb2015'),
('215341023', 'aeb2015'),
('215341024', 'aeb2015'),
('215341025', 'aeb2015'),
('215341026', 'aeb2015'),
('215341027', 'aec2015'),
('215341028', 'aec2015'),
('215341029', 'aec2015'),
('215341030', 'aec2015'),
('215341031', 'aec2015'),
('215341032', 'aec2015'),
('215341033', 'aec2015'),
('215341035', 'aec2015'),
('215341036', 'aec2015'),
('215341037', 'aec2015'),
('215341038', 'aec2015'),
('215341039', 'aea2015'),
('215441902', 'aea2015'),
('215441903', 'aea2015'),
('215441904', 'aea2015'),
('215441905', 'aea2015'),
('215441906', 'aea2015'),
('215441907', 'aea2015'),
('215441908', 'aea2015'),
('215441909', 'aea2015'),
('215441910', 'aea2015'),
('215441911', 'aeb2015'),
('215441912', 'aeb2015'),
('215441913', 'aeb2015'),
('215441914', 'aeb2015'),
('215441915', 'aeb2015'),
('215441916', 'aeb2015'),
('215441917', 'aeb2015'),
('215441918', 'aeb2015'),
('215441919', 'aeb2015'),
('215441920', 'aeb2015'),
('215441921', 'aeb2015'),
('215441922', 'aeb2015'),
('215441923', 'aec2015'),
('215441924', 'aec2015'),
('215441925', 'aec2015'),
('215441926', 'aec2015'),
('215441927', 'aec2015'),
('215441928', 'aec2015'),
('215441929', 'aec2015'),
('215441930', 'aec2015'),
('215441931', 'aec2015'),
('215441932', 'aec2015'),
('215441933', 'aec2015'),
('215441934', 'aec2015'),
('215441935', 'aea2015'),
('216341001', 'aea2016'),
('216341002', 'aea2016'),
('216341003', 'aea2016'),
('216341004', 'aea2016'),
('216341005', 'aea2016'),
('216341006', 'aea2016'),
('216341007', 'aea2016'),
('216341009', 'aea2016'),
('216341010', 'aea2016'),
('216341011', 'aea2016'),
('216341012', 'aea2016'),
('216341014', 'aea2016'),
('216341015', 'aea2016'),
('216341016', 'aea2016'),
('216341017', 'aea2016'),
('216341019', 'aea2016'),
('216341020', 'aea2016'),
('216341021', 'aea2016'),
('216341022', 'aea2016'),
('216341023', 'aea2016'),
('216341024', 'aea2016'),
('216341026', 'aeb2016'),
('216341027', 'aeb2016'),
('216341028', 'aeb2016'),
('216341029', 'aeb2016'),
('216341030', 'aeb2016'),
('216341031', 'aeb2016'),
('216341032', 'aeb2016'),
('216341033', 'aeb2016'),
('216341034', 'aeb2016'),
('216341035', 'aeb2016'),
('216341036', 'aeb2016'),
('216341037', 'aeb2016'),
('216341038', 'aeb2016'),
('216341039', 'aeb2016'),
('216341040', 'aeb2016'),
('216341041', 'aeb2016'),
('216341042', 'aeb2016'),
('216341043', 'aeb2016'),
('216341044', 'aeb2016'),
('216341045', 'aeb2016'),
('216341046', 'aeb2016'),
('216341047', 'aeb2016'),
('216341048', 'aeb2016'),
('216341049', 'aec2016'),
('216341050', 'aec2016'),
('216341052', 'aec2016'),
('216341053', 'aec2016'),
('216341054', 'aec2016'),
('216341055', 'aec2016'),
('216341056', 'aec2016'),
('216341058', 'aec2016'),
('216341059', 'aec2016'),
('216341060', 'aec2016'),
('216341061', 'aec2016'),
('216341062', 'aec2016'),
('216341063', 'aec2016'),
('216341064', 'aec2016'),
('216341065', 'aec2016'),
('216341066', 'aec2016'),
('216341067', 'aec2016'),
('216341068', 'aec2016'),
('216341069', 'aec2016'),
('216341070', 'aec2016'),
('216341071', 'aec2016'),
('216341072', 'aec2016'),
('216441001', 'aed2016'),
('216441003', 'aed2016'),
('216441004', 'aed2016'),
('216441005', 'aed2016'),
('216441006', 'aed2016'),
('216441007', 'aed2016'),
('216441008', 'aed2016'),
('216441009', 'aed2016'),
('216441010', 'aed2016'),
('216441011', 'aed2016'),
('216441012', 'aed2016'),
('216441013', 'aed2016'),
('216441014', 'aed2016'),
('216441015', 'aed2016'),
('216441016', 'aed2016'),
('216441017', 'aed2016'),
('216441018', 'aed2016'),
('216441019', 'aed2016'),
('216441020', 'aed2016'),
('216441021', 'aed2016'),
('216441022', 'aed2016'),
('216441023', 'aed2016'),
('216441024', 'aed2016'),
('217341001', 'aea2017'),
('217341002', 'aea2017'),
('217341003', 'aea2017'),
('217341004', 'aea2017'),
('217341006', 'aea2017'),
('217341007', 'aea2017'),
('217341008', 'aea2017'),
('217341009', 'aea2017'),
('217341010', 'aea2017'),
('217341011', 'aea2017'),
('217341012', 'aea2017'),
('217341013', 'aea2017'),
('217341014', 'aea2017'),
('217341015', 'aea2017'),
('217341016', 'aea2017'),
('217341017', 'aea2017'),
('217341018', 'aea2017'),
('217341019', 'aea2017'),
('217341020', 'aea2017'),
('217341021', 'aea2017'),
('217341022', 'aea2017'),
('217341023', 'aea2017'),
('217341024', 'aea2017'),
('217341025', 'aeb2017'),
('217341026', 'aeb2017'),
('217341027', 'aeb2017'),
('217341028', 'aeb2017'),
('217341029', 'aeb2017'),
('217341030', 'aeb2017'),
('217341031', 'aeb2017'),
('217341032', 'aeb2017'),
('217341033', 'aeb2017'),
('217341034', 'aeb2017'),
('217341035', 'aeb2017'),
('217341036', 'aeb2017'),
('217341037', 'aeb2017'),
('217341038', 'aeb2017'),
('217341039', 'aeb2017'),
('217341040', 'aeb2017'),
('217341041', 'aeb2017'),
('217341042', 'aeb2017'),
('217341043', 'aeb2017'),
('217341044', 'aeb2017'),
('217341045', 'aeb2017'),
('217341046', 'aeb2017'),
('217341047', 'aeb2017'),
('217341048', 'aeb2017'),
('217341049', 'aec2017'),
('217341050', 'aec2017'),
('217341051', 'aec2017'),
('217341052', 'aec2017'),
('217341053', 'aec2017'),
('217341054', 'aec2017'),
('217341055', 'aec2017'),
('217341056', 'aec2017'),
('217341057', 'aec2017'),
('217341058', 'aec2017'),
('217341059', 'aec2017'),
('217341060', 'aec2017'),
('217341061', 'aec2017'),
('217341062', 'aec2017'),
('217341063', 'aec2017'),
('217341064', 'aec2017'),
('217341065', 'aec2017'),
('217341066', 'aec2017'),
('217341067', 'aec2017'),
('217341068', 'aec2017'),
('217341069', 'aec2017'),
('217341070', 'aec2017'),
('217341071', 'aec2017'),
('217341072', 'aec2017'),
('217341073', 'aea2017'),
('217441001', 'aed2017'),
('217441002', 'aed2017'),
('217441003', 'aed2017'),
('217441004', 'aed2017'),
('217441005', 'aed2017'),
('217441006', 'aed2017'),
('217441007', 'aed2017'),
('217441008', 'aed2017'),
('217441009', 'aed2017'),
('217441010', 'aed2017'),
('217441011', 'aed2017'),
('217441012', 'aed2017'),
('217441013', 'aed2017'),
('217441014', 'aed2017'),
('217441015', 'aed2017'),
('217441016', 'aed2017'),
('217441017', 'aed2017'),
('217441018', 'aed2017'),
('217441019', 'aed2017'),
('217441020', 'aed2017'),
('217441021', 'aed2017'),
('217441022', 'aed2017'),
('217441023', 'aed2017'),
('217441024', 'aed2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `bulan` date DEFAULT NULL,
  `tempat` varchar(40) DEFAULT NULL,
  `nim_ketuplak` varchar(9) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `nama`, `id_divisi`, `bulan`, `tempat`, `nim_ketuplak`, `deskripsi`) VALUES
(1, 'Organigram', 3, '2017-03-01', NULL, '216341036', '-'),
(2, 'Diesnat Polman', 3, '2017-03-01', NULL, '216341014', '-'),
(3, 'Wisuda Malam', 3, '2017-09-01', NULL, '216341046', '-'),
(4, 'Wisuda Siang', 3, '2017-10-01', NULL, '216341021', '-'),
(5, 'Rak Selasar', 3, '2017-06-01', NULL, '216341066', '-'),
(6, 'Penyambutan dan Pelepasan Program Praktik Industri (P4I)', 4, '2017-03-01', 'Gallery Hotel, Ciumbuleuit', '216341047', '-'),
(7, 'Studi Banding Internal', 4, '2017-11-01', NULL, '216341019', '-'),
(8, 'Foto Jurusan', 4, '2017-02-01', 'Jonas Photo Studio', '216341064', '-'),
(9, 'Studi Banding Eksternal', 4, '2017-11-01', NULL, '216341026', '-'),
(10, 'Buka Bersama', 4, '2017-06-01', NULL, '216441024', '-'),
(11, 'Bakti AE', 5, '2017-06-01', NULL, '216441003', '-'),
(12, 'Diesnat Himamo & Pameran AE', 6, '2017-11-01', NULL, '216341015', '-'),
(13, 'Pelaksanaan Proker', 7, NULL, NULL, '216341045', '-'),
(14, 'Inventaris Sekre', 7, NULL, NULL, '216341006', '-'),
(15, 'Piket Sekre', 7, NULL, NULL, '216441018', '-'),
(26, 'Poster', 1, NULL, NULL, '216441001', '-'),
(27, 'Quotes', 1, NULL, NULL, '216341023', '-'),
(28, 'Progammo', 1, NULL, NULL, '216341060', '-'),
(29, 'Line', 1, NULL, NULL, '216441005', '-'),
(30, 'Instagram', 1, NULL, NULL, '216341071', '-'),
(31, 'Desain', 1, NULL, NULL, '216341038', '-'),
(32, 'Website Himamo', 1, NULL, NULL, '216341016', '-'),
(33, 'Himamo On Youtube', 1, NULL, NULL, '216341023', '-'),
(34, 'Majalah', 1, NULL, NULL, '216441016', '-'),
(35, 'Recruitement Divisi Kominfo (Screening)', 1, '2017-11-01', NULL, '216341017', '-'),
(36, 'Jadwal Apel', 2, NULL, NULL, '216341052', '-'),
(37, 'Peringatan Hari Kartini', 2, '2017-04-01', NULL, '216441015', '-'),
(38, 'Penyambutan MABA AE2017', 2, '2017-08-01', NULL, '216341065', '-'),
(39, 'Pengenalan Mahasiswa Pada Organisasi (PMPO)', 2, '2017-08-01', NULL, '216341004', '-'),
(40, 'Peringatan Hari Sumpah Pemuda', 2, '2017-10-01', NULL, '216441004', '-'),
(41, 'Screening', 2, '2017-11-01', NULL, '216441021', '-'),
(42, 'Pilkahim', 2, '2018-01-01', NULL, '216441019', '-'),
(43, 'Sertijab Jahim', 2, '2018-02-01', NULL, '216341035', '-'),
(44, 'Penyamaan Jam Lab & Jam LED', 2, '2017-03-01', NULL, '216441008', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker_raters`
--

CREATE TABLE `proker_raters` (
  `id` int(11) NOT NULL,
  `id_proker` int(11) NOT NULL,
  `nim_rater` varchar(9) NOT NULL,
  `point` int(11) NOT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proker_raters`
--

INSERT INTO `proker_raters` (`id`, `id_proker`, `nim_rater`, `point`, `review`) VALUES
(2, 1, '216341069', 5, ''),
(3, 2, '216341069', 5, ''),
(4, 26, '216341059', 5, ''),
(5, 27, '216341059', 5, ''),
(6, 26, '216341060', 5, ''),
(7, 29, '216341060', 5, ''),
(8, 28, '216341060', 5, ''),
(9, 30, '216341060', 5, ''),
(10, 31, '216341060', 5, ''),
(11, 32, '216341060', 5, ''),
(12, 33, '216341060', 5, ''),
(13, 34, '216341060', 5, ''),
(14, 33, '216341059', 5, ''),
(15, 37, '215341004', 5, ''),
(16, 32, '215341004', 5, ''),
(17, 13, '215341004', 5, ''),
(18, 14, '215341004', 5, ''),
(19, 15, '215341004', 5, ''),
(20, 8, '216341059', 1, 'prengga sih ketuplaknya'),
(21, 36, '216341071', 5, ''),
(22, 6, '216341031', 5, ''),
(23, 36, '214341065', 4, 'Apel pagi dan sore sebaiknya digencarkan pemantauan performa individu pelaksana tugas apel, karena seyogyanya tiap anggota himpunan mampu menampilkan sesuai dengan kebutuhan, dengan kesalahan yang minim.'),
(24, 8, '216341031', 5, ''),
(25, 37, '214341065', 5, 'keep it simple and functional.'),
(26, 32, '215441918', 1, 'Penilaian subjektif, dikarenakan \"nama\" ketuplak nya'),
(27, 33, '214341065', 3, 'Berkenaan baru dibentuk kembali, ada beberapa masukan untuk pengurus :\r\n\r\n1. konten di-submit oleh anggota-anggota secara sukarela, dengan melalui proses standardisasi-screening tertentu sehingga konten yang ditampilkan memiliki kelayakan tonton semua umur.\r\n2. konten bisa diperbanyak dengan mengadakan lomba-lomba kecil, dimana yang menang nanti akan ditampilkan kontennya di official HIMAMO, contoh lomba : dokumenter kehidupan mahasiswa AE, liputan praktikum, tutorial praktikum, tutorial teori-teori, komedi, drama, dan vlog.\r\n3. sebaiknya secara konsisten akun youtube HIMAMO menghasilkan video baru, mungkin 1 bulan sekali, atau lebih sering lebih baik.\r\n\r\nVIVA LA HIMAMO!!\r\n'),
(28, 32, '214341065', 4, 'Website baru, semangat baru. ditambah kuantitas dokumentasinya ( video, gambar, audio, tulisan ) dan kualitas dokumentasinya ( menyeluruh ). disarankan melengkapi konten dimulai dari sejarah himamo terlebih dahulu. ( diurutkan berdasar prioritas ).'),
(29, 32, '214341069', 5, 'Bikin makin keren gan'),
(30, 15, '214341065', 5, 'Mantap, keep it up everyone!'),
(31, 33, '214341069', 5, ''),
(32, 8, '215441909', 3, ''),
(33, 6, '215441909', 5, ''),
(34, 1, '215441909', 3, ''),
(35, 6, '216341001', 5, ''),
(36, 44, '216441004', 5, 'Bohong hehe'),
(37, 10, '216441023', 5, ''),
(38, 36, '214341069', 2, ''),
(39, 44, '214341069', 3, ''),
(40, 37, '214341069', 3, ''),
(41, 1, '214341069', 4, ''),
(42, 2, '214341069', 5, ''),
(43, 6, '214341069', 3, ''),
(44, 10, '214341069', 3, ''),
(45, 13, '214341069', 3, ''),
(46, 14, '214341069', 4, ''),
(47, 15, '214341069', 4, ''),
(48, 11, '216341059', 5, ''),
(49, 1, '216341060', 5, ''),
(50, 39, '216341016', 5, 'Penilaian subjektif dikarenakan ketuplaknya berlian :('),
(51, 39, '217341028', 4, 'Seru, setiap pertemuan selalu ada yang baru. Klo bisa push up berantainya itu dibiasain, soalnya kemarin pas dsuruh push up berantai itu kaget dan sulit soalnya terakhir push up berantai pas sma.'),
(52, 32, '216341004', 1, '\"Ketuplaknya nyogok buat rating\"\r\n- Bajak agis'),
(53, 35, '216341016', 5, ''),
(54, 38, '216341065', 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `nim` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quotes`
--

INSERT INTO `quotes` (`id`, `text`, `nim`) VALUES
(1, 'Berubah untuk lebih baik.', '215441917'),
(2, 'Teruslah berkembang, teruslah berproses, teruslah menjadi lebih baik, laksanakan continous improvement.', '215341004'),
(3, 'Thank you HIMAMO for teaching me friendship, unity, community, kindness, youth, optimism, and understanding.', '216341059'),
(4, 'It\'s better to burn out, than to fade away.', '216341060'),
(5, 'We began as wanderers, and we are wanderers still. So keep your mind curious.', '216341016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '214341001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(2, '214341002', 'ea53eddb81670e53bd4b1dd7b9862549'),
(3, '214341003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(4, '214341004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(5, '214341005', 'ea53eddb81670e53bd4b1dd7b9862549'),
(6, '214341006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(7, '214341007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(8, '214341008', 'ea53eddb81670e53bd4b1dd7b9862549'),
(9, '214341009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(10, '214341011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(11, '214341012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(12, '214341013', 'ea53eddb81670e53bd4b1dd7b9862549'),
(13, '214341014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(14, '214341015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(15, '214341016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(16, '214341017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(17, '214341018', 'ea53eddb81670e53bd4b1dd7b9862549'),
(18, '214341019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(19, '214341020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(20, '214341021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(21, '214341022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(22, '214341023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(23, '214341024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(24, '214341025', 'ea53eddb81670e53bd4b1dd7b9862549'),
(25, '214341026', 'ea53eddb81670e53bd4b1dd7b9862549'),
(26, '214341027', 'ea53eddb81670e53bd4b1dd7b9862549'),
(27, '214341028', 'ea53eddb81670e53bd4b1dd7b9862549'),
(28, '214341029', 'ea53eddb81670e53bd4b1dd7b9862549'),
(29, '214341030', 'ea53eddb81670e53bd4b1dd7b9862549'),
(30, '214341031', 'ea53eddb81670e53bd4b1dd7b9862549'),
(31, '214341032', 'ea53eddb81670e53bd4b1dd7b9862549'),
(32, '214341033', 'ea53eddb81670e53bd4b1dd7b9862549'),
(33, '214341034', 'ea53eddb81670e53bd4b1dd7b9862549'),
(34, '214341035', 'ea53eddb81670e53bd4b1dd7b9862549'),
(35, '214341036', 'ea53eddb81670e53bd4b1dd7b9862549'),
(36, '214341037', 'ea53eddb81670e53bd4b1dd7b9862549'),
(37, '214341038', 'ea53eddb81670e53bd4b1dd7b9862549'),
(38, '214341039', 'ea53eddb81670e53bd4b1dd7b9862549'),
(39, '214341040', 'ea53eddb81670e53bd4b1dd7b9862549'),
(40, '214341041', 'ea53eddb81670e53bd4b1dd7b9862549'),
(41, '214341042', 'ea53eddb81670e53bd4b1dd7b9862549'),
(42, '214341043', 'ea53eddb81670e53bd4b1dd7b9862549'),
(43, '214341044', 'ea53eddb81670e53bd4b1dd7b9862549'),
(44, '214341046', 'ea53eddb81670e53bd4b1dd7b9862549'),
(45, '214341047', 'ea53eddb81670e53bd4b1dd7b9862549'),
(46, '214341048', 'ea53eddb81670e53bd4b1dd7b9862549'),
(47, '214341049', 'ea53eddb81670e53bd4b1dd7b9862549'),
(48, '214341050', 'ea53eddb81670e53bd4b1dd7b9862549'),
(49, '214341051', 'ea53eddb81670e53bd4b1dd7b9862549'),
(50, '214341052', 'ea53eddb81670e53bd4b1dd7b9862549'),
(51, '214341053', 'ea53eddb81670e53bd4b1dd7b9862549'),
(52, '214341056', 'ea53eddb81670e53bd4b1dd7b9862549'),
(53, '214341057', 'ea53eddb81670e53bd4b1dd7b9862549'),
(54, '214341058', 'ea53eddb81670e53bd4b1dd7b9862549'),
(55, '214341059', 'ea53eddb81670e53bd4b1dd7b9862549'),
(56, '214341060', 'ea53eddb81670e53bd4b1dd7b9862549'),
(57, '214341061', 'ea53eddb81670e53bd4b1dd7b9862549'),
(58, '214341062', 'ea53eddb81670e53bd4b1dd7b9862549'),
(59, '214341063', 'ea53eddb81670e53bd4b1dd7b9862549'),
(60, '214341064', 'ea53eddb81670e53bd4b1dd7b9862549'),
(61, '214341065', 'ea53eddb81670e53bd4b1dd7b9862549'),
(62, '214341066', 'ea53eddb81670e53bd4b1dd7b9862549'),
(63, '214341067', 'ea53eddb81670e53bd4b1dd7b9862549'),
(64, '214341068', 'ea53eddb81670e53bd4b1dd7b9862549'),
(65, '214341069', 'ea53eddb81670e53bd4b1dd7b9862549'),
(66, '214341070', 'ea53eddb81670e53bd4b1dd7b9862549'),
(67, '214341071', 'ea53eddb81670e53bd4b1dd7b9862549'),
(68, '214341072', 'ea53eddb81670e53bd4b1dd7b9862549'),
(69, '215341001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(70, '215341002', 'ea53eddb81670e53bd4b1dd7b9862549'),
(71, '215341003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(72, '215341004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(73, '215341005', 'ea53eddb81670e53bd4b1dd7b9862549'),
(74, '215341006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(75, '215341007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(76, '215341008', 'ea53eddb81670e53bd4b1dd7b9862549'),
(77, '215341009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(78, '215341010', 'ea53eddb81670e53bd4b1dd7b9862549'),
(79, '215341011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(80, '215341012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(81, '215341013', 'ea53eddb81670e53bd4b1dd7b9862549'),
(82, '215341014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(83, '215341015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(84, '215341016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(85, '215341017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(86, '215341018', 'ea53eddb81670e53bd4b1dd7b9862549'),
(87, '215341019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(88, '215341020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(89, '215341021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(90, '215341022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(91, '215341023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(92, '215341024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(93, '215341025', 'ea53eddb81670e53bd4b1dd7b9862549'),
(94, '215341026', 'ea53eddb81670e53bd4b1dd7b9862549'),
(95, '215341027', 'ea53eddb81670e53bd4b1dd7b9862549'),
(96, '215341028', 'ea53eddb81670e53bd4b1dd7b9862549'),
(97, '215341029', 'ea53eddb81670e53bd4b1dd7b9862549'),
(98, '215341030', 'ea53eddb81670e53bd4b1dd7b9862549'),
(99, '215341031', 'ea53eddb81670e53bd4b1dd7b9862549'),
(100, '215341032', 'ea53eddb81670e53bd4b1dd7b9862549'),
(101, '215341033', 'ea53eddb81670e53bd4b1dd7b9862549'),
(102, '215341035', 'ea53eddb81670e53bd4b1dd7b9862549'),
(103, '215341036', 'ea53eddb81670e53bd4b1dd7b9862549'),
(104, '215341037', 'ea53eddb81670e53bd4b1dd7b9862549'),
(105, '215341038', 'ea53eddb81670e53bd4b1dd7b9862549'),
(106, '215341039', 'ea53eddb81670e53bd4b1dd7b9862549'),
(107, '215441902', 'ea53eddb81670e53bd4b1dd7b9862549'),
(108, '215441903', 'ea53eddb81670e53bd4b1dd7b9862549'),
(109, '215441904', 'ea53eddb81670e53bd4b1dd7b9862549'),
(110, '215441905', 'ea53eddb81670e53bd4b1dd7b9862549'),
(111, '215441906', 'ea53eddb81670e53bd4b1dd7b9862549'),
(112, '215441907', 'ea53eddb81670e53bd4b1dd7b9862549'),
(113, '215441908', 'ea53eddb81670e53bd4b1dd7b9862549'),
(114, '215441909', 'ea53eddb81670e53bd4b1dd7b9862549'),
(115, '215441910', 'ea53eddb81670e53bd4b1dd7b9862549'),
(116, '215441911', 'ea53eddb81670e53bd4b1dd7b9862549'),
(117, '215441912', 'ea53eddb81670e53bd4b1dd7b9862549'),
(118, '215441913', 'ea53eddb81670e53bd4b1dd7b9862549'),
(119, '215441914', 'ea53eddb81670e53bd4b1dd7b9862549'),
(120, '215441915', 'ea53eddb81670e53bd4b1dd7b9862549'),
(121, '215441916', 'ea53eddb81670e53bd4b1dd7b9862549'),
(122, '215441917', 'ea53eddb81670e53bd4b1dd7b9862549'),
(123, '215441918', 'ea53eddb81670e53bd4b1dd7b9862549'),
(124, '215441919', 'ea53eddb81670e53bd4b1dd7b9862549'),
(125, '215441920', 'ea53eddb81670e53bd4b1dd7b9862549'),
(126, '215441921', 'ea53eddb81670e53bd4b1dd7b9862549'),
(127, '215441922', 'ea53eddb81670e53bd4b1dd7b9862549'),
(128, '215441923', 'ea53eddb81670e53bd4b1dd7b9862549'),
(129, '215441924', 'ea53eddb81670e53bd4b1dd7b9862549'),
(130, '215441925', 'ea53eddb81670e53bd4b1dd7b9862549'),
(131, '215441926', 'ea53eddb81670e53bd4b1dd7b9862549'),
(132, '215441927', 'ea53eddb81670e53bd4b1dd7b9862549'),
(133, '215441928', 'ea53eddb81670e53bd4b1dd7b9862549'),
(134, '215441929', 'ea53eddb81670e53bd4b1dd7b9862549'),
(135, '215441930', 'ea53eddb81670e53bd4b1dd7b9862549'),
(136, '215441931', 'ea53eddb81670e53bd4b1dd7b9862549'),
(137, '215441932', 'ea53eddb81670e53bd4b1dd7b9862549'),
(138, '215441933', 'ea53eddb81670e53bd4b1dd7b9862549'),
(139, '215441934', 'ea53eddb81670e53bd4b1dd7b9862549'),
(140, '216341001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(141, '216341002', 'ea53eddb81670e53bd4b1dd7b9862549'),
(142, '216341003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(143, '216341004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(144, '216341005', 'ea53eddb81670e53bd4b1dd7b9862549'),
(145, '216341006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(146, '216341007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(147, '216341009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(148, '216341010', 'ea53eddb81670e53bd4b1dd7b9862549'),
(149, '216341011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(150, '216341012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(151, '216341014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(152, '216341015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(153, '216341016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(154, '216341017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(155, '216341019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(156, '216341020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(157, '216341021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(158, '216341022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(159, '216341023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(160, '216341024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(161, '216341026', 'ea53eddb81670e53bd4b1dd7b9862549'),
(162, '216341027', 'ea53eddb81670e53bd4b1dd7b9862549'),
(163, '216341028', 'ea53eddb81670e53bd4b1dd7b9862549'),
(164, '216341029', 'ea53eddb81670e53bd4b1dd7b9862549'),
(165, '216341030', 'ea53eddb81670e53bd4b1dd7b9862549'),
(166, '216341031', 'ea53eddb81670e53bd4b1dd7b9862549'),
(167, '216341032', 'ea53eddb81670e53bd4b1dd7b9862549'),
(168, '216341033', 'ea53eddb81670e53bd4b1dd7b9862549'),
(169, '216341034', 'ea53eddb81670e53bd4b1dd7b9862549'),
(170, '216341035', 'ea53eddb81670e53bd4b1dd7b9862549'),
(171, '216341036', 'ea53eddb81670e53bd4b1dd7b9862549'),
(172, '216341037', 'ea53eddb81670e53bd4b1dd7b9862549'),
(173, '216341038', 'ea53eddb81670e53bd4b1dd7b9862549'),
(174, '216341039', 'ea53eddb81670e53bd4b1dd7b9862549'),
(175, '216341040', 'ea53eddb81670e53bd4b1dd7b9862549'),
(176, '216341041', 'ea53eddb81670e53bd4b1dd7b9862549'),
(177, '216341042', 'ea53eddb81670e53bd4b1dd7b9862549'),
(178, '216341043', 'ea53eddb81670e53bd4b1dd7b9862549'),
(179, '216341044', 'ea53eddb81670e53bd4b1dd7b9862549'),
(180, '216341045', 'ea53eddb81670e53bd4b1dd7b9862549'),
(181, '216341046', 'ea53eddb81670e53bd4b1dd7b9862549'),
(182, '216341047', 'ea53eddb81670e53bd4b1dd7b9862549'),
(183, '216341048', 'ea53eddb81670e53bd4b1dd7b9862549'),
(184, '216341049', 'ea53eddb81670e53bd4b1dd7b9862549'),
(185, '216341050', 'ea53eddb81670e53bd4b1dd7b9862549'),
(186, '216341052', 'ea53eddb81670e53bd4b1dd7b9862549'),
(187, '216341053', 'ea53eddb81670e53bd4b1dd7b9862549'),
(188, '216341054', 'ea53eddb81670e53bd4b1dd7b9862549'),
(189, '216341055', 'ea53eddb81670e53bd4b1dd7b9862549'),
(190, '216341056', 'ea53eddb81670e53bd4b1dd7b9862549'),
(191, '216341058', 'ea53eddb81670e53bd4b1dd7b9862549'),
(192, '216341059', 'ea53eddb81670e53bd4b1dd7b9862549'),
(193, '216341060', 'ea53eddb81670e53bd4b1dd7b9862549'),
(194, '216341061', 'ea53eddb81670e53bd4b1dd7b9862549'),
(195, '216341062', 'ea53eddb81670e53bd4b1dd7b9862549'),
(196, '216341063', 'ea53eddb81670e53bd4b1dd7b9862549'),
(197, '216341064', 'ea53eddb81670e53bd4b1dd7b9862549'),
(198, '216341065', 'ea53eddb81670e53bd4b1dd7b9862549'),
(199, '216341066', 'ea53eddb81670e53bd4b1dd7b9862549'),
(200, '216341067', 'ea53eddb81670e53bd4b1dd7b9862549'),
(201, '216341068', 'ea53eddb81670e53bd4b1dd7b9862549'),
(202, '216341069', 'ea53eddb81670e53bd4b1dd7b9862549'),
(203, '216341070', 'ea53eddb81670e53bd4b1dd7b9862549'),
(204, '216341071', 'ea53eddb81670e53bd4b1dd7b9862549'),
(205, '216341072', 'ea53eddb81670e53bd4b1dd7b9862549'),
(206, '216441001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(207, '216441003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(208, '216441004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(209, '216441005', 'ea53eddb81670e53bd4b1dd7b9862549'),
(210, '216441006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(211, '216441007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(212, '216441008', 'ea53eddb81670e53bd4b1dd7b9862549'),
(213, '216441009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(214, '216441010', 'ea53eddb81670e53bd4b1dd7b9862549'),
(215, '216441011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(216, '216441012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(217, '216441013', 'ea53eddb81670e53bd4b1dd7b9862549'),
(218, '216441014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(219, '216441015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(220, '216441016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(221, '216441017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(222, '216441018', 'ea53eddb81670e53bd4b1dd7b9862549'),
(223, '216441019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(224, '216441020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(225, '216441021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(226, '216441022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(227, '216441023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(228, '216441024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(230, '217341049', 'ea53eddb81670e53bd4b1dd7b9862549'),
(231, '217341050', 'ea53eddb81670e53bd4b1dd7b9862549'),
(232, '217341051', 'ea53eddb81670e53bd4b1dd7b9862549'),
(233, '217341052', 'ea53eddb81670e53bd4b1dd7b9862549'),
(234, '217341053', 'ea53eddb81670e53bd4b1dd7b9862549'),
(235, '217341054', 'ea53eddb81670e53bd4b1dd7b9862549'),
(236, '217341055', 'ea53eddb81670e53bd4b1dd7b9862549'),
(237, '217341056', 'ea53eddb81670e53bd4b1dd7b9862549'),
(238, '217341057', 'ea53eddb81670e53bd4b1dd7b9862549'),
(239, '217341058', 'ea53eddb81670e53bd4b1dd7b9862549'),
(240, '217341059', 'ea53eddb81670e53bd4b1dd7b9862549'),
(241, '217341060', 'ea53eddb81670e53bd4b1dd7b9862549'),
(242, '217341061', 'ea53eddb81670e53bd4b1dd7b9862549'),
(243, '217341062', 'ea53eddb81670e53bd4b1dd7b9862549'),
(244, '217341063', 'ea53eddb81670e53bd4b1dd7b9862549'),
(245, '217341064', 'ea53eddb81670e53bd4b1dd7b9862549'),
(246, '217341065', 'ea53eddb81670e53bd4b1dd7b9862549'),
(247, '217341066', 'ea53eddb81670e53bd4b1dd7b9862549'),
(248, '217341067', 'ea53eddb81670e53bd4b1dd7b9862549'),
(249, '217341068', 'ea53eddb81670e53bd4b1dd7b9862549'),
(250, '217341069', 'ea53eddb81670e53bd4b1dd7b9862549'),
(251, '217341070', 'ea53eddb81670e53bd4b1dd7b9862549'),
(252, '217341071', 'ea53eddb81670e53bd4b1dd7b9862549'),
(253, '217341072', 'ea53eddb81670e53bd4b1dd7b9862549'),
(254, '217341025', 'ea53eddb81670e53bd4b1dd7b9862549'),
(255, '217341026', 'ea53eddb81670e53bd4b1dd7b9862549'),
(256, '217341027', 'ea53eddb81670e53bd4b1dd7b9862549'),
(257, '217341028', 'ea53eddb81670e53bd4b1dd7b9862549'),
(258, '217341029', 'ea53eddb81670e53bd4b1dd7b9862549'),
(259, '217341030', 'ea53eddb81670e53bd4b1dd7b9862549'),
(260, '217341031', 'ea53eddb81670e53bd4b1dd7b9862549'),
(261, '217341032', 'ea53eddb81670e53bd4b1dd7b9862549'),
(262, '217341033', 'ea53eddb81670e53bd4b1dd7b9862549'),
(263, '217341034', 'ea53eddb81670e53bd4b1dd7b9862549'),
(264, '217341035', 'ea53eddb81670e53bd4b1dd7b9862549'),
(265, '217341036', 'ea53eddb81670e53bd4b1dd7b9862549'),
(266, '217341037', 'ea53eddb81670e53bd4b1dd7b9862549'),
(267, '217341038', 'ea53eddb81670e53bd4b1dd7b9862549'),
(268, '217341039', 'ea53eddb81670e53bd4b1dd7b9862549'),
(269, '217341040', 'ea53eddb81670e53bd4b1dd7b9862549'),
(270, '217341041', 'ea53eddb81670e53bd4b1dd7b9862549'),
(271, '217341042', 'ea53eddb81670e53bd4b1dd7b9862549'),
(272, '217341043', 'ea53eddb81670e53bd4b1dd7b9862549'),
(273, '217341044', 'ea53eddb81670e53bd4b1dd7b9862549'),
(274, '217341045', 'ea53eddb81670e53bd4b1dd7b9862549'),
(275, '217341046', 'ea53eddb81670e53bd4b1dd7b9862549'),
(276, '217341047', 'ea53eddb81670e53bd4b1dd7b9862549'),
(277, '217341048', 'ea53eddb81670e53bd4b1dd7b9862549'),
(278, '217441001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(279, '217441002', 'ea53eddb81670e53bd4b1dd7b9862549'),
(280, '217441003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(281, '217441004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(282, '217441005', 'ea53eddb81670e53bd4b1dd7b9862549'),
(283, '217441006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(284, '217441007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(285, '217441008', 'ea53eddb81670e53bd4b1dd7b9862549'),
(286, '217441009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(287, '217441010', 'ea53eddb81670e53bd4b1dd7b9862549'),
(288, '217441011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(289, '217441012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(290, '217441013', 'ea53eddb81670e53bd4b1dd7b9862549'),
(291, '217441014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(292, '217441015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(293, '217441016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(294, '217441017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(295, '217441018', 'ea53eddb81670e53bd4b1dd7b9862549'),
(296, '217441019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(297, '217441020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(298, '217441021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(299, '217441022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(300, '217441023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(301, '217441024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(302, '217341017', 'ea53eddb81670e53bd4b1dd7b9862549'),
(303, '217341001', 'ea53eddb81670e53bd4b1dd7b9862549'),
(304, '217341002', 'ea53eddb81670e53bd4b1dd7b9862549'),
(305, '217341003', 'ea53eddb81670e53bd4b1dd7b9862549'),
(306, '217341004', 'ea53eddb81670e53bd4b1dd7b9862549'),
(307, '217341006', 'ea53eddb81670e53bd4b1dd7b9862549'),
(308, '217341007', 'ea53eddb81670e53bd4b1dd7b9862549'),
(309, '217341008', 'ea53eddb81670e53bd4b1dd7b9862549'),
(310, '217341009', 'ea53eddb81670e53bd4b1dd7b9862549'),
(311, '217341010', 'ea53eddb81670e53bd4b1dd7b9862549'),
(312, '217341011', 'ea53eddb81670e53bd4b1dd7b9862549'),
(313, '217341012', 'ea53eddb81670e53bd4b1dd7b9862549'),
(314, '217341013', 'ea53eddb81670e53bd4b1dd7b9862549'),
(315, '217341014', 'ea53eddb81670e53bd4b1dd7b9862549'),
(316, '217341015', 'ea53eddb81670e53bd4b1dd7b9862549'),
(317, '217341016', 'ea53eddb81670e53bd4b1dd7b9862549'),
(319, '217341018', 'ea53eddb81670e53bd4b1dd7b9862549'),
(320, '217341019', 'ea53eddb81670e53bd4b1dd7b9862549'),
(321, '217341020', 'ea53eddb81670e53bd4b1dd7b9862549'),
(322, '217341021', 'ea53eddb81670e53bd4b1dd7b9862549'),
(323, '217341022', 'ea53eddb81670e53bd4b1dd7b9862549'),
(324, '217341023', 'ea53eddb81670e53bd4b1dd7b9862549'),
(325, '217341024', 'ea53eddb81670e53bd4b1dd7b9862549'),
(326, '217341073', 'ea53eddb81670e53bd4b1dd7b9862549'),
(327, '215441935', 'ea53eddb81670e53bd4b1dd7b9862549');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_voters`
--
ALTER TABLE `calon_voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi_pengurus`
--
ALTER TABLE `divisi_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nrp`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `kepemimpinan`
--
ALTER TABLE `kepemimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mahasiswa_kelas`
--
ALTER TABLE `mahasiswa_kelas`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker_raters`
--
ALTER TABLE `proker_raters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `calon_voters`
--
ALTER TABLE `calon_voters`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `divisi_pengurus`
--
ALTER TABLE `divisi_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kepemimpinan`
--
ALTER TABLE `kepemimpinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `proker_raters`
--
ALTER TABLE `proker_raters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
