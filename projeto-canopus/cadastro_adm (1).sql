-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Mar-2021 às 08:59
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_adm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fotos`
--

DROP TABLE IF EXISTS `tb_fotos`;
CREATE TABLE IF NOT EXISTS `tb_fotos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(40) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `tb_fotos`
--

INSERT INTO `tb_fotos` (`id`, `titulo`, `descricao`, `foto`, `data`) VALUES
(51, 'alex', 'O som do mar ', 'a9b1893c7958631b96b561ad80841e98.jpg', '2021-03-26 05:41:54'),
(50, 'alex', 'A vida é', '2dd4f002875799bedfeff157673dccc1.jpg', '2021-03-26 04:47:39'),
(42, 'alex', 'O som do mar ', '2d5e0a7b7ecc32fd43cd5ac055bb8174.jpg', '2021-03-26 04:40:46'),
(38, 'teste hub', 'hub brasil', '2e0df39c081650afc9b78b9582a13e7e.jpg', '2021-03-26 04:40:58'),
(45, 'alex', 'fotos bd', '18f08ebffa35e441f8b0329f03f2c94d.jpg', '2021-03-26 04:42:30'),
(46, 'alex', 'O som do mar ', '135f6516cbc1197897df18c0316cccef.jpg', '2021-03-26 04:44:08'),
(47, 'alex', 'Deus é o paraiso', '9d49c0a709db812ed1ff18bce6eb4acb.jpg', '2021-03-26 04:45:05'),
(48, 'Deus ', 'A vida é', '5628f17a99137a42bcf1804147128cb2.jpg', '2021-03-26 04:46:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `senha`) VALUES
(1, 'asfuture2019@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login1`
--

DROP TABLE IF EXISTS `tb_login1`;
CREATE TABLE IF NOT EXISTS `tb_login1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `tb_login1`
--

INSERT INTO `tb_login1` (`id`, `email`, `senha`) VALUES
(1, 'asfuture2019@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
