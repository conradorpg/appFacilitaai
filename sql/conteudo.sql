-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Mar-2019 às 05:32
-- Versão do servidor: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facilita`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

DROP TABLE IF EXISTS `conteudo`;
CREATE TABLE IF NOT EXISTS `conteudo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(250) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `logo`, `telefone`, `horario`, `email`, `endereco`) VALUES
(1, 'images\\_logos\\biofisic.png', '19933001695', '9:00 as 18:00', 'conrompg@gmail.com', 'Rua das Orquideas, 55, Centro'),
(2, 'images\\_logos\\fitness.png', '19991557325', '8:30 as 18:00', 'biofisic@gmail.com', 'Rua Castro Alves, 10, Cidade Nova'),
(3, 'images\\_logos\\corpoemente.png', '19991557325', '8:30 as 20:00', 'corpoemente@gmail.com', 'Rua \r\n\r\nFranciso Masseli, 32, Varginha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
