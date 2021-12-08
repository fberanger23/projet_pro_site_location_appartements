-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 10, 2021 at 07:01 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `proProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `id` int(11) NOT NULL,
  `mainPhoto` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `floor` varchar(250) NOT NULL,
  `neighborhood` varchar(250) NOT NULL,
  `squareFootage` float(11,2) NOT NULL,
  `heatSystem` varchar(50) NOT NULL,
  `monthlyRent` int(11) NOT NULL,
  `services` int(11) NOT NULL,
  `totalRent` int(11) NOT NULL,
  `vacant` varchar(50) NOT NULL,
  `apartmentLink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`id`, `mainPhoto`, `type`, `floor`, `neighborhood`, `squareFootage`, `heatSystem`, `monthlyRent`, `services`, `totalRent`, `vacant`, `apartmentLink`) VALUES
(1, '../assets/img/photosprincipales/IMG_6135.jpg', 'T1 meublé', 'Rez-de-Chaussée', 'Quartier Centre-Est', 20.50, 'central collectif au gaz', 400, 85, 485, 'Disponible', 'quartier-centre-est-rdc.php'),
(2, '../assets/img/photosprincipales/PAT_7463_01.JPG', 'T1 meublé', '1er étage', 'Quartier Centre-Est', 24.62, 'central collectif au gaz', 400, 85, 485, 'Disponible', 'quartier-centre-est-1er-etage.php'),
(3, '../assets/img/photosprincipales/PAT_7495_01.JPG', 'T1 meublé', '2ème étage', 'Quartier Centre-Est', 20.50, 'central collectif au gaz', 400, 85, 485, 'Disponible', 'quartier-centre-est-2e-etage.php'),
(4, '../assets/img/photosprincipales/PAT_8680_01.JPG', 'T1 meublé', '3ème étage', 'Quartier Centre-Est', 24.62, 'central collectif au gaz', 400, 85, 485, 'Disponible', 'quartier-centre-est-3e-etage.php'),
(5, '../assets/img/photosprincipales/sejour.jpg', 'T1 meublé', '1er étage', 'Quartier Université', 30.59, 'individuel électrique', 400, 25, 425, 'Indisponible', 'quartier-universite-1er-etage.php');

-- --------------------------------------------------------

--
-- Table structure for table `apartmentApplication`
--

CREATE TABLE `apartmentApplication` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `idCardFront` varchar(250) NOT NULL,
  `idCardBack` varchar(250) NOT NULL,
  `studentCard` varchar(250) NOT NULL,
  `studentCardBack` varchar(250) NOT NULL,
  `ResidentPermitFront` varchar(250) NOT NULL,
  `residentPermitBack` varchar(250) NOT NULL,
  `familyBook` varchar(250) NOT NULL,
  `payslip` varchar(250) NOT NULL,
  `payslip2` varchar(250) NOT NULL,
  `payslip3` varchar(250) NOT NULL,
  `incomeTax` varchar(250) NOT NULL,
  `incomeTax2` varchar(250) NOT NULL,
  `propertyTax` varchar(250) NOT NULL,
  `GNI` varchar(250) NOT NULL,
  `insuranceCertificate` varchar(250) NOT NULL,
  `rentReceipt` varchar(250) NOT NULL,
  `rentReceipt2` varchar(250) NOT NULL,
  `rentReceipt3` varchar(250) NOT NULL,
  `jointSurety` varchar(250) NOT NULL,
  `firstPageOfLeaseAgreement` varchar(250) NOT NULL,
  `certificateOfEmployment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `apartmentPhotos`
--

CREATE TABLE `apartmentPhotos` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `path` varchar(250) NOT NULL,
  `altText` varchar(250) NOT NULL,
  `id_apartment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apartmentPhotos`
--

INSERT INTO `apartmentPhotos` (`id`, `name`, `path`, `altText`, `id_apartment`) VALUES
(1, 'IMG_6135.jpg', '../assets/img/photosprincipales/IMG_6135.jpg', 'Quartier Centre-Est T1 meublé Rez-de-chaussée chambre', 1),
(15, 'PAT_7463_01.JPG', '../assets/img/photosprincipales/PAT_7463_01.JPG', 'Quartier Centre-Est T1 meublé 1er étage chambre', 2),
(16, 'PAT_7495_01.JPG', '../assets/img/photosprincipales/PAT_7495_01.JPG', 'Quartier Centre-Est T1 meublé 2e étage chambre', 3),
(17, 'sejour.jpg', '../assets/img/photosprincipales/sejour.jpg', 'Quartier Université T1 meublé 1er étage séjour', 5),
(21, 'PAT_8680_01.JPG', '../assets/img/photosprincipales/PAT_8680_01.JPG', 'Quartier Centre-Est T1 meublé 3ème étage séjour', 4),
(27, 'PAT_7460_01.JPG', '../assets/img/photosprincipales/PAT_7460_01.JPG', 'quartier centre-est 1er étage salon', 2),
(28, 'PAT_6051_01.JPG', '../assets/img/photosprincipales/PAT_6051_01.JPG', 'quartier centre-est 1er étage salle de bain', 2),
(29, 'PAT_7447_01.JPG', '../assets/img/photosprincipales/PAT_7447_01.JPG', 'quartier centre-est 1er étage cuisine', 2),
(30, 'PAT_7496_01.JPG', '../assets/img/photosprincipales/PAT_7496_01.JPG', 'quartier centre-est 2e étage salon', 3),
(31, 'PAT_6051_01.JPG', '../assets/img/photosprincipales/PAT_6051_01.JPG', 'quartier centre-est 2e étage salle de bain', 3),
(32, 'PAT_7472_01.JPG', '../assets/img/photosprincipales/PAT_7472_01.JPG', 'quartier centre-est 2e étage cuisine', 3),
(33, 'PAT_8685_01.JPG', '../assets/img/photosprincipales/PAT_8685_01.JPG', 'quartier centre-est 3e étage salon', 4),
(34, 'PAT_8686.JPG', '../assets/img/photosprincipales/PAT_8686.JPG', 'quartier centre-est 3e étage salle de bain', 4),
(35, 'PAT_8691_01.JPG', '../assets/img/photosprincipales/PAT_8691_01.JPG', 'quartier centre-est 3e étage cuisine', 4),
(36, 'salledebain.jpg', '../assets/img/photosprincipales/salledebain.jpg', 'quartier université 1er étage salle de bain', 5),
(37, 'IMG_7008.jpeg', '../assets/img/photosprincipales/IMG_7008.jpeg', 'quartier université 1er étage séjour', 5),
(38, 'IMG_7005.JPG', '../assets/img/photosprincipales/IMG_7005.JPG', 'quartier université 1er étage cuisine', 5),
(44, 'IMG_6133.jpg', '../assets/img/photosprincipales/IMG_6133.jpg', 'quartier centre-est rez-de-chaussée bureau', 1),
(45, 'IMG_6142bis.jpg', '../assets/img/photosprincipales/IMG_6142bis.jpg', 'quartier centre-est rez-de-chaussée salle de bain', 1),
(46, 'PAT_7500_01.jpg', '../assets/img/photosprincipales/PAT_7500_01.jpg', 'quartier centre-est rez-de-chaussée cuisine', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `id_apartment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `lastname`, `firstname`, `email`, `phoneNumber`, `date`, `id_apartment`) VALUES
(4, 'Béranger', 'Franck', 'franckberanger@gmail.com', '0614900353', '2022-07-23 09:00:00', 4),
(8, 'Dupont', 'Jean', 'dupont.jean@gmail.com', '0614888888', '2021-09-30 14:00:00', 5),
(10, 'Paul-Jacques', 'Pierre', 'pierrepauljacques@live.fr', '0235000000', '2021-11-30 15:00:00', 2),
(13, 'test 1', 'test 1', 'test@test.fr', '0610101010', '2021-09-20 16:00:00', 1),
(14, 'Leuret', 'Romain', 'romain@free.fr', '0235202020', '2021-10-31 14:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `lastname`, `firstname`, `email`, `phoneNumber`, `message`) VALUES
(7, 'Beranger', 'Franck', 'franckberanger@gmail.com', '0614900353', 'Bonjour, ceci est un test avec tous les champs remplis'),
(9, 'Durant', 'Pierre', 'durantpierre@gmail.com', '0658968432', 'Bonjour, j\'aimerais plus d\'information sur vos appartements, pouvez-vous me recontacter svp ?'),
(10, 'Beranger', 'Franck', 'franckberanger@yoohoo.fr', '', 'Bonjour, ceci est un test sans le champ du téléphone complété.');

-- --------------------------------------------------------

--
-- Table structure for table `have`
--

CREATE TABLE `have` (
  `id` int(11) NOT NULL,
  `id_apartment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartmentApplication`
--
ALTER TABLE `apartmentApplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartmentPhotos`
--
ALTER TABLE `apartmentPhotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apartmentphotos_FK` (`id_apartment`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_apartment_FK` (`id_apartment`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`id`,`id_apartment`),
  ADD KEY `have_apartment0_FK` (`id_apartment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `apartmentApplication`
--
ALTER TABLE `apartmentApplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apartmentPhotos`
--
ALTER TABLE `apartmentPhotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartmentPhotos`
--
ALTER TABLE `apartmentPhotos`
  ADD CONSTRAINT `apartmentphotos_FK` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_apartment_FK` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id`);

--
-- Constraints for table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_apartment0_FK` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id`),
  ADD CONSTRAINT `have_apartmentApplication_FK` FOREIGN KEY (`id`) REFERENCES `apartmentApplication` (`id`);
