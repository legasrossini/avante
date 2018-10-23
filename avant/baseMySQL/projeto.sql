-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Out-2018 às 06:08
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `quartob` double NOT NULL,
  `quartobdois` double NOT NULL,
  `quartol` double NOT NULL,
  `quartoldois` double NOT NULL,
  `horaabertura` time NOT NULL,
  `horaencerra` time NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `academia` tinyint(1) NOT NULL,
  `restaurante` tinyint(1) NOT NULL,
  `obs` text,
  `pathFoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`id`, `nome`, `endereco`, `numero`, `pais`, `estado`, `cidade`, `cep`, `quartob`, `quartobdois`, `quartol`, `quartoldois`, `horaabertura`, `horaencerra`, `wifi`, `academia`, `restaurante`, `obs`, `pathFoto`) VALUES
(20, 'DOUGLAS LEGAS ROSSINI', 'Rua Doutor Suzano BrandÃ£o, 511', '33', 'Brasil', 'SP', 'SÃ£o Pedro', '03502000', 33, 55, 555, 55, '05:55:00', '05:05:00', 1, 1, 1, '555', '555'),
(21, 'DOUGLAS LEGAS ROSSINI', 'Rua Doutor Suzano BrandÃ£o, 511', '3', 'Brasil', 'SP', 'SÃ£o Pedro', '03502000', 66, 666, 666, 66, '06:06:00', '06:06:00', 1, 1, 1, '', '6'),
(22, 'DOUGLAS LEGAS ROSSINI', 'Rua Doutor Suzano BrandÃ£o, 511', '3', 'Brasil', 'SP', 'SÃ£o Pedro', '03502000', 66, 666, 666, 66, '06:06:00', '06:06:00', 1, 1, 1, '', '6'),
(23, 'DOUGLAS LEGAS ROSSINI', 'Rua Doutor Suzano BrandÃ£o, 511', '3', 'Brasil', 'SP', 'SÃ£o Pedro', '03502000', 66, 666, 666, 66, '06:06:00', '06:06:00', 1, 1, 1, '', '6'),
(24, 'DOUGLAS LEGAS ROSSINI', 'Rua Doutor Suzano BrandÃ£o, 511', '22', 'Brasil', '2', 'SÃ£o Pedro', '03502000', 22, 2, 22, 22, '03:03:00', '22:02:00', 1, 1, 1, '', '22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`nome`) VALUES
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John'),
('John');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
