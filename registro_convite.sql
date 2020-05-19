-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para registro_convite
DROP DATABASE IF EXISTS `registro_convite`;
CREATE DATABASE IF NOT EXISTS `registro_convite` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `registro_convite`;

-- Copiando estrutura para tabela registro_convite.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela registro_convite.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `codigo`) VALUES
	(1, 'pedro@gmail.com', '$2y$10$//Av2Fs6jgpltfw9l8bfg.WYYFJvUXEBDHtAsrzYuV2kPD/wdvOSm', '3672'),
	(2, 'alexandre@gmail.com', '$2y$10$Lzz31iTX.U4lgsm2cz.bPOzh3wdFzDmJPOa3uFhTE.3XJj0xn84Hi', '2262'),
	(3, 'stacy@gmail.com', '$2y$10$YVpfh1Rp5/LDu7EAP9Qg0eoC0eaaBEGbUCFyW1DZiGMazDMHdYzU.', '7396');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
