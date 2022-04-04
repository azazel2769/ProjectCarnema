-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 10:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carnema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `film` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `lname`, `film`) VALUES
(1, 'Rafi', 'Akmal', 'imperfect'),
(2, 'Rayhan', 'Dhiya', 'imperfect'),
(3, 'Kefas', 'Bagastio', 'after'),
(4, 'James', 'Corbuzier', 'monsterhouse'),
(5, 'Stefen', 'Christian', 'after'),
(6, 'Rafi', 'Akmal', 'imperfect'),
(7, 'Naufal', 'Akmal', 'after'),
(8, 'Rifki', 'Hidayatullah', 'monsterhouse'),
(9, 'Albert', 'Japinto', 'after'),
(10, 'Albert', 'Japinto', 'imperfect'),
(11, 'Albert', 'Japinto', 'imperfect'),
(12, 'Rifki', 'Akmal', 'imperfect'),
(13, 'Albert', 'aja', 'after');

-- --------------------------------------------------------

--
-- Table structure for table `comingsoon`
--

CREATE TABLE `comingsoon` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comingsoon`
--

INSERT INTO `comingsoon` (`id`, `judul`, `foto`) VALUES
(1, 'Archer', 'uploads/Archer.jpg'),
(2, 'Joker', 'uploads/Joker.jpg'),
(3, 'Kutuk', 'uploads/kutuk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `judul`, `foto`, `jam`, `deskripsi`) VALUES
(16, 'Imperfect', 'uploads/Poster-Resmi-Imperfect.jpg', '20.00', 'Imperfect mengisahkan tentang body shaming. Dikisahkan Rara (Jessica Mila) bertubuh gemuk, kulit sawo matang, dan rambut keriting yang tebal. Kemudian, ia punya seorang adik bernama Lulu (Yasmin Safira) yang fisiknya sangat berbeda.'),
(18, 'After', 'uploads/after.jpg', '21.00', 'After (2019) bercerita tentang Tessa (Josephine Langford), gadis polos yang baru memasuki kehidupan kuliah. Tessa adalah anak baik-baik yang sangat dijaga pergaulannya oleh sang ibu, Carol Young (Selma Blair). Di hari pertama Tessa pindah ke asrama kampus, dia diantar oleh ibu dan pacarnya Noah (Dyl'),
(21, 'Bucin', 'uploads/ERsp6V1VUAAgkJp.jpg', '22.00', 'Film Bucin bercerita tentang 4 sahabat (Andovi, Tommy, Jovi, dan Chandra) yang berusaha keluar dari hubungan yang tidak sehat karena mereka bucin. Mereka memutuskan untuk mengikuti kelas anti bucin agar mereka bisa menjalankan hubungan yang lebih dewasa, dan tidak diperbudak oleh cinta.');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(5, 'Naufal', 'Rudy', 'naufalrudy@gmail.com', '$2y$10$4Pcj'),
(6, 'Rifki', 'Hidayatullah', 'rifkih@gmail.com', '$2y$10$C/7t'),
(7, 'Ruddy ', 'Christiadi', 'ruddyc@gmail.com', '$2y$10$9Snp'),
(10, 'Albert', 'Japinto', 'albert@gmail.com', '$2y$10$Fl0l'),
(11, 'Stefen', 'Christian', 'stefen@gmail.com', '$2y$10$Edaj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comingsoon`
--
ALTER TABLE `comingsoon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comingsoon`
--
ALTER TABLE `comingsoon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comingsoon`
--
ALTER TABLE `comingsoon`
  ADD CONSTRAINT `comingsoon_ibfk_1` FOREIGN KEY (`id`) REFERENCES `booking` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
