-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2020 at 05:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gurubisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deskripsi_kelas` varchar(255) NOT NULL,
  `image_kelas` varchar(255) NOT NULL,
  `video_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `deskripsi_kelas`, `image_kelas`, `video_kelas`) VALUES
(3, 'Strategi Pembelajaran Daring', 'Bagaimanapun juga, pembelajaran secara daring dan jarak jauh membutuhkan bantuan teknologi yang mumpuni dan dapat diakses dengan mudah Serta menuntut tenaga pendidik untuk efektif dalam kegiatan belajar mengajar via daring.', '1.jpg', 'https://www.youtube.com/embed/3tULzriv2Vk'),
(4, 'Membuat Media Pembelajaran Interaktif', 'Media pembelajaran interaktif adalah media presentasi yang di dalamnya terdapat hiperteks, hipermedia, sumber daya multimedia dll. Dalam kelas ini kita akan mempelajari aspek penting dalam membangun suhu belajar yang interaktif', '2.jpg', 'https://www.youtube.com/embed/GesCSpfKXqY'),
(5, 'Microsoft Office Dasar', 'MS Office adalah program atau aplikasi kantoran yang dapat digunakan untuk mempemudah administrasi perkantorna contoh mencatat data anak dsb. ', '3.jpg', 'https://www.youtube.com/embed/eMjpJVH6Pgc'),
(6, 'Dasar dan Majemen Pendidikan', 'ciptakan suasana belajar yang bermutu dan menyenangkan dan yang lebih penting lagi adalah dapat menciptakan peserta didik belajar cara belajar (learning how to learn) yang terbaik bagi dirinya.', '4.jpg', 'https://www.youtube.com/embed/8UExeIbhg60'),
(7, 'Strategi Belajar Mengajar SD', 'Pahami dasar-dasar strategi pembelajaran di sekolah dasar untuk menyusun rancangan strategi pembelajaran yang efektif di sekolah dasar.', '5.jpg', 'https://www.youtube.com/embed/KQbe3utdH-w'),
(8, 'Perkembangan Peserta Didik', 'Kajian dan penerapan psikologi perkembangan yang secara khusus mempelajarai aspek-aspek perkembangan individu yang berada pada tahap usia sekolah dan sekolah menengah.', '6.jpg', 'https://www.youtube.com/embed/zn9wENX5kQk');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `video_materi` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `video_materi`, `id_kelas`) VALUES
(12, 'Manajemen Waktu', 'https://www.youtube.com/embed/uDgl8fL4CVE', 3),
(13, 'Persiapan Teknologi Yang Dibutuhkan', 'https://www.youtube.com/embed/EOtrQdU3EBI', 3),
(14, 'Komunikasi Pengajar & Murid ', 'https://www.youtube.com/embed/EOtrQdU3EBI', 3),
(15, 'Pembelajaran Interaktif', 'https://www.youtube.com/embed/EOtrQdU3EBI', 3),
(16, 'Kenali Potensi Yang Mengganggu', 'https://www.youtube.com/embed/EOtrQdU3EBI', 3),
(17, 'Media Pembelajaran Menarik', 'https://www.youtube.com/embed/EOtrQdU3EBI', 3),
(18, 'Jenis Multimedia Pembelajaran', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(19, 'Menentukan Tema Mater Ajar', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(20, 'Menyusun Alur Cerita', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(21, 'Teknik ATM', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(22, 'Mentapkan Target', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(23, 'Menerapkan Resep Success Story', 'https://www.youtube.com/embed/GesCSpfKXqY', 4),
(24, 'Mengenal MS Word', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(25, 'Dasar Pengaturan Paragraf', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(26, 'Mengenal MS Powerpoint', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(27, 'Dasar Membuat Slide Persentasi', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(28, 'Mengenal MS Excel', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(29, 'Dasar Manipulasi Data Spreadsheet', 'https://www.youtube.com/embed/eMjpJVH6Pgc', 5),
(30, 'Mengenal Mejemen Pendidikan', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(31, 'Membuat Perencanaan Kerangka sistem', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(32, 'Pengorganisasian Sistem ', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(33, 'Pelaksanaan Menejemen Pendidikan', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(34, 'Controlling Sistem', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(35, 'Evaluasi Menejemen pendidikan', 'https://www.youtube.com/embed/8UExeIbhg60', 6),
(36, 'Mengenal Strategi Pembelajaran', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(37, 'Starategi Firing Line', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(38, 'Observasi dan Memberikan Masukan Secara Aktif', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(39, 'Bermain Yang Menyenangkan', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(40, 'Memberi Contoh Cerita', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(41, 'Demonstrasi Kecakapan', 'https://www.youtube.com/embed/KQbe3utdH-w', 7),
(42, 'Mengenal Perkembangan Anak', 'https://www.youtube.com/embed/zn9wENX5kQk', 8),
(43, 'Peran kematangan dan Belaar', 'https://www.youtube.com/embed/zn9wENX5kQk', 8),
(44, 'Pola Yanga Dapat Diramalkan', 'https://www.youtube.com/embed/zn9wENX5kQk', 8),
(45, 'Semua Individu Berbeda', 'https://www.youtube.com/embed/zn9wENX5kQk', 8),
(46, 'Membangun Perilaku Karakteristik', 'https://www.youtube.com/embed/zn9wENX5kQk', 8),
(47, 'Perkembangan Dengan Rangsanagan', 'https://www.youtube.com/embed/zn9wENX5kQk', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(11) NOT NULL,
  `nama_mentor` varchar(255) NOT NULL,
  `mentor_image` varchar(255) NOT NULL,
  `profesi_mentor` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `mentor_image`, `profesi_mentor`, `id_kelas`) VALUES
(3, 'Sri Wahyuni', '2.jpg', 'Dosen Fakultas Pendidikan', 3),
(4, 'Arie Rahmat', '4.JPG', 'Dosen Fakultas Pendidikan', 4),
(5, 'Faiz Alauddin Ma\'ruf', '5.JPG', 'Programmer, Admin', 5),
(6, 'Aldiko Tisya', '6.JPG', 'Dosen Fakultas Pedidikan', 6),
(7, 'Darmawan Abi Nugroho', '7.JPG', 'Profesor Pendidikan', 7),
(8, 'Rofa Febrianti', '8.JPG', 'Psikolog, Dosen Fakultas Psikologi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id_progres` int(11) NOT NULL,
  `id_daftar` int(255) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `is_done` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `nuptk_user` varchar(255) NOT NULL,
  `image_user` varchar(255) NOT NULL,
  `jk_user` varchar(255) NOT NULL,
  `is_active` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_progres`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id_progres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mentor`
--
ALTER TABLE `mentor`
  ADD CONSTRAINT `mentor_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `progres_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `progres_ibfk_3` FOREIGN KEY (`id_daftar`) REFERENCES `daftar` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
