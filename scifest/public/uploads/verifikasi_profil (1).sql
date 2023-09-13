-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 06:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scikemitraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_profil`
--

CREATE TABLE `verifikasi_profil` (
  `id` bigint(200) NOT NULL,
  `id_pekebun` varchar(20) DEFAULT NULL,
  `id_legalitas` varchar(20) DEFAULT NULL,
  `no` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `flag_ketName` int(2) DEFAULT NULL,
  `notedName` varchar(255) DEFAULT NULL,
  `noKKPSR` varchar(20) DEFAULT NULL,
  `noKKdocPSR` varchar(20) DEFAULT NULL,
  `flag_ketNoKK` int(2) DEFAULT NULL,
  `notedNoKK` varchar(255) DEFAULT NULL,
  `noKKFisik` varchar(20) DEFAULT NULL,
  `flag_ketKKFisik` int(2) DEFAULT NULL,
  `notedKKFisik` varchar(200) DEFAULT NULL,
  `noKTPPSR` varchar(16) DEFAULT NULL,
  `noKTPdocPSR` varchar(16) DEFAULT NULL,
  `flag_ketKTP` int(2) DEFAULT NULL,
  `notedKTP` varchar(255) DEFAULT NULL,
  `noKTPFisik` varchar(16) DEFAULT NULL,
  `flag_ketKTPFisik` int(2) DEFAULT NULL,
  `notedKTPFisik` varchar(255) DEFAULT NULL,
  `alamatPSR` varchar(255) DEFAULT NULL,
  `alamatKTP` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `flag_ketProvinsi` int(2) DEFAULT NULL,
  `notedProvinsi` varchar(255) DEFAULT NULL,
  `jenisLegalitas` varchar(255) DEFAULT NULL,
  `noLegalitas` varchar(200) DEFAULT NULL,
  `noNamaLegalitasPSR` varchar(200) DEFAULT NULL,
  `noPersilSHM` varchar(200) DEFAULT NULL,
  `flag_ketSHM` int(2) DEFAULT NULL,
  `notedSHM` varchar(255) DEFAULT NULL,
  `peta` varchar(255) DEFAULT NULL,
  `flag_ketPeta` int(2) DEFAULT NULL,
  `noNamaLegalitasFisik` varchar(200) DEFAULT NULL,
  `flag_ketLegalitasFisik` int(2) DEFAULT NULL,
  `notedLegalitasFisik` varchar(255) DEFAULT NULL,
  `tanggalTerbitLegalitas` date DEFAULT NULL,
  `tanggalTerbitLegalitasPSR` date DEFAULT NULL,
  `flag_ketTanggalTerbit` int(2) DEFAULT NULL,
  `notedTanggalTerbit` varchar(255) DEFAULT NULL,
  `tanggalTerbitLegalitasFisik` date DEFAULT NULL,
  `flag_ketTanggalTerbitFisik` int(2) DEFAULT NULL,
  `notedTanggalTerbitFisik` varchar(255) DEFAULT NULL,
  `SHMBedaNama` varchar(255) DEFAULT NULL,
  `noSuketSHMBedaNamaPSR` bigint(200) DEFAULT NULL,
  `noSuketSHMBedaNamaFisik` bigint(200) DEFAULT NULL,
  `flag_ketSHMBedaNama` int(2) DEFAULT NULL,
  `notedSHMBedaNama` varchar(255) DEFAULT NULL,
  `luasLahanPengajuanPSR` varchar(255) DEFAULT NULL,
  `luasLahanPengajuanLegalitasPSR` varchar(255) DEFAULT NULL,
  `luasLahanLegalitasFisik` varchar(255) DEFAULT NULL,
  `flag_ketLuasLahan` int(2) DEFAULT NULL,
  `notedLuasLahan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `klarifikasi` varchar(255) DEFAULT NULL,
  `PICverifonDesk` varchar(255) DEFAULT NULL,
  `tanggalVerifDoc` date DEFAULT NULL,
  `PICVerifDocLapangan` varchar(255) DEFAULT NULL,
  `tanggalVerifLapangan` date DEFAULT NULL,
  `PICVerifLahanonSite` varchar(255) DEFAULT NULL,
  `tanggalVerifLahanonSite` date DEFAULT NULL,
  `flag_lulusTidak` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `verifikasi_profil`
--
ALTER TABLE `verifikasi_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verifikasi_profil`
--
ALTER TABLE `verifikasi_profil`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
