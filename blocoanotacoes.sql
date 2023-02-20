-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 12-Fev-2023 às 19:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blocoanotacoes`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectWeek` (IN `diasemana` VARCHAR(20))   BEGIN
SELECT * FROM anotacoes WHERE semana = diasemana ORDER BY prioridade;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacoes`
--

CREATE TABLE `anotacoes` (
  `cod` int(100) NOT NULL,
  `semana` varchar(10) NOT NULL,
  `datasemana` date DEFAULT NULL,
  `anotacao` varchar(100) NOT NULL,
  `prioridade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anotacoes`
--

INSERT INTO `anotacoes` (`cod`, `semana`, `datasemana`, `anotacao`, `prioridade`) VALUES
(3, 'SEGUNDA', '2023-02-13', 'Teste2', 1),
(4, 'DOMINGO', '2023-02-12', 'Teste', 2),
(5, 'TERÇA', '2023-02-12', 'teste', 2),
(6, 'QUARTA', '2023-02-12', 'teste', 12),
(7, 'QUINTA', '2023-02-12', 'teste', 1),
(8, 'SÁBADO', '2023-02-12', 'qee', 1),
(9, 'SEXTA', '2023-02-12', 'dfsf', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anotacoes`
--
ALTER TABLE `anotacoes`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anotacoes`
--
ALTER TABLE `anotacoes`
  MODIFY `cod` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
