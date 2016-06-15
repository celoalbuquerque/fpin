-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2016 às 06:21
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
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `administrador` varchar(30) NOT NULL,
  `SENHA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`administrador`, `SENHA`) VALUES
('ADMIN', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `login_aluno` varchar(30) NOT NULL,
  `DATA` varchar(30) NOT NULL,
  `ASSISTENTE` varchar(30) NOT NULL,
  `HORARIO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`login_aluno`, `DATA`, `ASSISTENTE`, `HORARIO`) VALUES
('1111', '10/05/2016', 'Josefa', '8:00hs as 11:30hs'),
('4444', '13/05/2016', 'Auxiliadora', '14:00hs as 17:30hs'),
('5555', '12/05/2016', 'Maria', '14:00hs as 17:30hs'),
('6666', '12/05/2016', 'Auxiliadora', '14:00hs as 17:30hs');

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
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`administrador`);

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`login_aluno`);

--
-- Indexes for table `cadastro_alunos`
--
ALTER TABLE `cadastro_alunos`
  ADD PRIMARY KEY (`MATRICULA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
