-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for procedure 21_scraping_lowongan.annual_injected
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `annual_injected`()
BEGIN

 SELECT id INTO @id FROM tb_lowongan_pekerjaan WHERE gaji = "" LIMIT 1;
 SELECT gaji INTO @gaji FROM ref_gaji ORDER BY RAND() LIMIT 1;
 UPDATE tb_lowongan_pekerjaan SET gaji = @gaji WHERE id = @id;

END//
DELIMITER ;

-- Dumping structure for event 21_scraping_lowongan.annual_space_filtering_injection
DELIMITER //
CREATE DEFINER=`root`@`localhost` EVENT `annual_space_filtering_injection` ON SCHEDULE EVERY 1 SECOND STARTS '2022-04-09 10:48:26' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
CALL `annual_injected`();
END//
DELIMITER ;

-- Dumping structure for table 21_scraping_lowongan.ref_gaji
CREATE TABLE IF NOT EXISTS `ref_gaji` (
  `gaji` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 21_scraping_lowongan.ref_gaji: ~76 rows (approximately)
/*!40000 ALTER TABLE `ref_gaji` DISABLE KEYS */;
INSERT INTO `ref_gaji` (`gaji`) VALUES
	('IDRï¿½5.000.000 - IDRï¿½7.000.000'),
	('IDRï¿½10.000.000 - IDRï¿½14.000.000'),
	('IDRï¿½6.000.000 - IDRï¿½10.000.000'),
	('IDRï¿½5.250.000 - IDRï¿½6.900.000'),
	('IDRï¿½7.000.000 - IDRï¿½13.000.000'),
	('IDRï¿½4.500.000 - IDRï¿½4.800.000'),
	('IDRï¿½13.000.000 - IDRï¿½18.200.000'),
	('IDRï¿½4.500.000 - IDRï¿½5.500.000'),
	('IDRï¿½2.800.000 - IDRï¿½3.100.000'),
	('IDRï¿½8.000.000 - IDRï¿½12.000.000'),
	('IDR 10.000.000 - IDR 18.000.000'),
	('IDRï¿½4.000.000 - IDRï¿½6.000.000'),
	('IDRï¿½3.500.000 - IDRï¿½4.700.000'),
	('IDRï¿½4.000.000 - IDRï¿½5.000.000'),
	('IDRï¿½3.000.000 - IDRï¿½4.400.000'),
	('IDRï¿½5.800.000 - IDRï¿½8.120.000'),
	('IDRï¿½2.835.030 - IDRï¿½3.969.030'),
	('IDRï¿½4.267.350 - IDRï¿½4.700.000'),
	('IDRï¿½4.000.000 - IDRï¿½4.300.000'),
	('IDRï¿½4.000.000 - IDRï¿½4.500.000'),
	('IDRï¿½3.841.370 - IDRï¿½4.300.000'),
	('Negosiasi'),
	('Rp. 1 - 2 Juta'),
	('Rp. 5 - 10 Juta'),
	('Rp.10 - 20 Juta'),
	('p. 5 - 10 Juta'),
	('Rp. 2 - 4 Juta'),
	('ï¿½Rp. 5 - 10 Juta'),
	('ï¿½Negosiasi'),
	('ï¿½Rp.10 - 20 Juta'),
	('IDR 4.700.000 - 7.000.000'),
	('Bidang PekerjaanFresh Graduate'),
	('Bidang PekerjaanConsultant'),
	('Bidang PekerjaanAdministrative & Customer Relationship'),
	('Bidang PekerjaanInternal Audit'),
	('IDR 4.000.000 - 8.000.000'),
	(' Dirahasiakan'),
	('IDR 6.000.000 - 10.000.000'),
	('Bidang PekerjaanCollections'),
	('IDR 4.500.000 - 4.800.000'),
	('IDR 4.500.000 - 5.000.000'),
	('IDR 4.000.000 - 5.500.000'),
	('Bidang PekerjaanFood & Beverage'),
	('Bidang PekerjaanSales & Business Development'),
	('Bidang PekerjaanMarketing & PR'),
	('IDR 2.500.000 - 5.000.000'),
	('IDR 3.000.000 - 4.150.000'),
	('Bidang PekerjaanGeneral Management & Operational'),
	('Bidang PekerjaanTransportation'),
	('Bidang PekerjaanSupply Chain & Logistic'),
	('Bidang PekerjaanIT / MIS, Programmer'),
	('IDR 3.000.000 - 3.500.000'),
	('Bidang PekerjaanDesign'),
	('Bidang PekerjaanDriver'),
	('IDR 3.500.000 - 4.900.000'),
	('IDR 20.000.000 - 40.000.000'),
	('IDR 3.000.000 - 6.000.000'),
	('IDR 4.660.000 - 5.000.000'),
	('IDR 2.000.000 - 3.000.000'),
	('IDR 3.500.000 - 5.000.000'),
	('IDR 4.000.000 - 5.000.000'),
	('IDR 3.500.000 - 5.500.000'),
	('IDR 3.000.000 - 5.000.000'),
	('Gaji Kompetitif'),
	('IDR 4.600.000 - 4.800.000'),
	('IDR 1.800.000 - 2.100.000'),
	('IDR 4.000.000 - 4.200.000'),
	('Rp1.820.000 - Rp2.800.000'),
	('Rp280.000.000'),
	('Rp. 1.820.000 - Rp. 2.800.000'),
	('Rp. 3.500.000 - Rp. 5.000.000'),
	('Rp. 4.000.000 - Rp. 4.500.000'),
	('Rp. 2.000.000 - Rp. 3.000.000'),
	('Rp. 2.500.000 - Rp. 3.500.000'),
	('Rp. 4.000.000ï¿½'),
	('Rp. 2.500.000 - Rp. 4.000.000ï¿½');
/*!40000 ALTER TABLE `ref_gaji` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
