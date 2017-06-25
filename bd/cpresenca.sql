-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2017 às 22:14
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpresenca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbaluno`
--

CREATE TABLE IF NOT EXISTS `tbaluno` (
  `numfreq` int(50) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbaluno`
--

INSERT INTO `tbaluno` (`numfreq`, `nome`) VALUES
(1, 'Alexsandro Souza'),
(2, 'Aline Araújo'),
(3, 'Ana Kely'),
(4, 'André Ferreira'),
(7, 'Antônio Mateus'),
(8, 'Argimiro Neto'),
(5, 'Daniela Souza'),
(9, 'Danilo Souza'),
(10, 'Edemara Rodrigues'),
(11, 'Fabíola Silva'),
(12, 'Fabrícia Dantas'),
(6, 'Fabrício Monteiro'),
(13, 'Fernanda Silva'),
(14, 'Heloísa Matos'),
(15, 'Heron Veríssimo'),
(17, 'Israel Henrique'),
(29, 'Jacinta Vieira'),
(18, 'Joabe Araújo'),
(20, 'João Paulo'),
(19, 'Joaquim ROdrigues'),
(21, 'Joelânio Mesquita'),
(16, 'Júnior Melo'),
(27, 'Lara Teixeira'),
(23, 'Luana Silva'),
(22, 'Lucas Amorim'),
(24, 'Lucas Nascimento'),
(28, 'Mara Thaís'),
(26, 'Mateus Mota'),
(25, 'Mateus Rodrigues'),
(30, 'Naiara Cavalcante'),
(32, 'Sabrina Silveira'),
(31, 'Samuel Soares'),
(33, 'Suzana Arruda'),
(34, 'Thiago Lima'),
(35, 'Ueslei Correia'),
(36, 'Vitória Rute');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfalta`
--

CREATE TABLE IF NOT EXISTS `tbfalta` (
  `nome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `aulasfaltadas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

CREATE TABLE IF NOT EXISTS `tblogin` (
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`email`, `senha`, `nome`) VALUES
('alynizinha91@gmail.com', 'naoesquecer', 'Aline Araújo'),
('lcsamorim503@gmail.com', 'lcsamorim503', 'Lucas Amorim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`numfreq`), ADD KEY `nome` (`nome`);

--
-- Indexes for table `tbfalta`
--
ALTER TABLE `tbfalta`
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbfalta`
--
ALTER TABLE `tbfalta`
ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nome`) REFERENCES `tbaluno` (`nome`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
