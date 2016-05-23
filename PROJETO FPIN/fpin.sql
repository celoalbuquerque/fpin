-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2016 às 05:40
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_alunos`
--

CREATE TABLE `cadastro_alunos` (
  `MATRICULA` int(11) NOT NULL,
  `NOME` varchar(64) NOT NULL,
  `TELEFONE` int(11) NOT NULL,
  `EMAIL` varchar(64) DEFAULT NULL,
  `SENHA` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_alunos`
--

INSERT INTO `cadastro_alunos` (`MATRICULA`, `NOME`, `TELEFONE`, `EMAIL`, `SENHA`) VALUES
(1111, 'Manuel', 2147483647, 'manuel@hotmail.com', 'manuel'),
(4444, 'Ernesto Jose', 2147483647, 'ernesto@j.com', 'ernesto'),
(5555, 'Maria Jose', 2147483647, 'joao@j.com', '9876'),
(6666, 'Maria', 2147483647, 'joao@j.com', 'maria'),
(7777, 'Antonio', 2147483647, 'antonioagarruda@hotmail.com', 'antonio'),
(8888, 'Marcelo', 2147483647, 'marcelo@bbb.com', 'marcelo'),
(9999, 'Joao ', 2147483647, 'joao@jose.com', 'joao'),
(12345, 'Allysson Wandeberg', 2147483647, 'wandeberg88@gmail.com', 'fpin2016'),
(54321, 'Saulo', 2147483647, 'saulo_@lira.com', 'necro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_alunos`
--
ALTER TABLE `cadastro_alunos`
  ADD PRIMARY KEY (`MATRICULA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
