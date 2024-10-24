-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 24, 2024 at 07:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_dhimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `teks1` varchar(500) NOT NULL,
  `teks2` varchar(500) NOT NULL,
  `teks3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `judul`, `teks1`, `teks2`, `teks3`) VALUES
(1, 'Tentang Saya', 'Halo, saya Dhimas Nurhidayat, mahasiswa Teknik Informatika yang sangat menyukai teknologi, pemrograman, dan pembelajaran berkelanjutan. Sebagai anggota Himpunan Mahasiswa (HIMA), saya aktif terlibat dalam divisi PSDM, yang membantu mengembangkan mahasiswa', 'Saya sangat tertarik dengan pengembangan perangkat lunak, khususnya dalam menciptakan sistem yang efisien dan dapat diskalakan. Di akhir pekan, saya gemar bersepeda di jalan raya, karena saya suka berolahraga dan menantang diri secara fisik maupun mental.', 'Saya senang bereksperimen dengan berbagai bahasa pemrograman, terutama yang memadukan kesederhanaan dengan kompleksitas tersembunyi. Perjalanan saya di dunia teknologi adalah tentang menemukan solusi terbaik untuk masalah yang rumit dan terus berkembang sebagai pengembang.'),
(2, 'Tentang Saya', 'Halo, saya Dhimas Nurhidayat, mahasiswa Teknik Informatika yang sangat menyukai teknologi, pemrograman, dan pembelajaran berkelanjutan. Sebagai anggota Himpunan Mahasiswa (HIMA), saya aktif terlibat dalam divisi PSDM, yang membantu mengembangkan mahasiswa', 'Saya sangat tertarik dengan pengembangan perangkat lunak, khususnya dalam menciptakan sistem yang efisien dan dapat diskalakan. Di akhir pekan, saya gemar bersepeda di jalan raya, karena saya suka berolahraga dan menantang diri secara fisik maupun mental.', 'Saya senang bereksperimen dengan berbagai bahasa pemrograman, terutama yang memadukan kesederhanaan dengan kompleksitas tersembunyi. Perjalanan saya di dunia teknologi adalah tentang menemukan solusi terbaik untuk masalah yang rumit dan terus berkembang sebagai pengembang.');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nama_sekolah1` varchar(200) NOT NULL,
  `nama_sekolah2` varchar(200) NOT NULL,
  `nama_sekolah3` varchar(300) NOT NULL,
  `nama_sekolah4` varchar(400) NOT NULL,
  `deskripsi1` varchar(400) NOT NULL,
  `deskripsi2` varchar(400) NOT NULL,
  `deskripsi3` varchar(400) NOT NULL,
  `deskripsi4` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `judul`, `nama_sekolah1`, `nama_sekolah2`, `nama_sekolah3`, `nama_sekolah4`, `deskripsi1`, `deskripsi2`, `deskripsi3`, `deskripsi4`) VALUES
(1, 'Riwayat Sekolah', 'SDN Jombang 1', 'SMPN 6 Tangerang Selatan', 'SMK Letris Indonesia 1 (Jurusan Multimedia)', 'Universitas Pembangunan Jaya (Jurusan Informatika)', '2011 - 2017', '2017 - 2020', '2020 - 2023', '2023 - sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `button` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `nama`, `bio`, `button`) VALUES
(1, 'Dhimas Nurhidayat edit', 'Mahasiswa Jurusan Informatika edit', 'jelajahi saya edit'),
(2, 'Dhimas Nurhidayat', 'Mahasiswa Jurusan Informatika', 'Jelajahi Saya'),
(18, '', '', ''),
(19, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_input_contact`
--

CREATE TABLE `hasil_input_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_input_contact`
--

INSERT INTO `hasil_input_contact` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'rasi', 'Rasipadil@gmail.com', 'Halo tes pesan');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `projek1` varchar(255) NOT NULL,
  `projek2` varchar(300) NOT NULL,
  `projek3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `judul`, `projek1`, `projek2`, `projek3`) VALUES
(1, 'Projek Saya', 'Cek projek 1', 'Cek projek 2', 'Cek projek 3'),
(2, 'Projek Saya', 'Cek projek 1', 'Cek projek 2', 'Cek projek 3'),
(3, 'Projek Saya', 'Cek projek 1', 'Cek projek 2', 'Cek projek 3'),
(4, 'Projek Saya', 'Membuat halaman website hanya menggunakan html dan css dengan tampilan depan slideshow, dibuat pada saya masih SMK.', 'Projek lomba Web Development Competition (WDC) yang diadakan oleh Universitas Atma Jaya Yogyakarta, dengan tema \"Exploring Indonesia with the Power of Technology\".', 'Membuat desain UI untuk tugas ide bisnis yang ditujukan pada matakuliah Kewirausahaan saat semester 1.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_input_contact`
--
ALTER TABLE `hasil_input_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hasil_input_contact`
--
ALTER TABLE `hasil_input_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
