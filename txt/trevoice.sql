-- phpMyAdmin SQL Dump
-- version 5.5.62
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04-Nov-2022 às 00:18
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trevoice`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome_cli` varchar(255) NOT NULL,
  `apelido_cli` varchar(255) DEFAULT NULL,
  `email_cli` varchar(255) NOT NULL,
  `contato_cli` int(11) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  `endereco_cli` varchar(255) NOT NULL,
  `id_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome_cli`, `apelido_cli`, `email_cli`, `contato_cli`, `cpf`, `cnpj`, `endereco_cli`, `id_cli`) VALUES
('10', '', '10', 10, 10, 10, '10', 13),
('33', '', '33', 33, 33, 33, '33', 14),
('66', '', '66', 66, 66, 66, '66', 15),
('55', '55', '55', 55, 55, 55, '55', 16),
('88', '88', '88', 88, 88, 88, '88', 17),
('6', '6', '6', 6, 66, 6, '6', 18),
('7', '7', '7', 7, 7, 7, '7', 19),
('3', '3', '3', 3, 3, 33, '3', 20),
('ele', '123', '123', 123, 132, 132, '123', 21),
('99', '9', '9', 99, 9, 99, '9', 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `operador`
--

CREATE TABLE `operador` (
  `nome_oper` varchar(255) NOT NULL,
  `email_oper` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `nivel_acess` int(10) NOT NULL,
  `id_oper` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `operador`
--

INSERT INTO `operador` (`nome_oper`, `email_oper`, `senha`, `avatar`, `nivel_acess`, `id_oper`) VALUES
('thi', 'thi@adm.com.br', '123', 'avatar', 1, 1),
('thi', 'thi@adm.com.br', '123', 'avatar', 1, 2),
('augusto', 'augusto@adm.com', '$2y$10$XAvUBj7bhQ/izZ900QA8/utkUJY5ClWLZAfAkFIkeMs92qe8v9I4K', '../avatar/augusto.png', 2, 3),
('Victor', 'vic@adm.com', '$2y$10$VFaBaHvL8e9r51KCc1sbUuNQcTo7kPNy/tHaSKQkcXbc9fxbEMM66', '../avatar/Victor.png', 1, 4),
('Augusto', 'vic2@adm.com', '$2y$10$M4gBRo9CTTH/1OCXf6hHUuRpuseWQIBXTwTVHXRb9J/BoVRfxTeSS', '../avatar/Augusto.png', 1, 5),
('oi', 'oi@adm.com', '$2y$10$RUk0WK5XSCl4BOD/kLTuJuojh5em6QgCIhrHfpieXkFkvBAxAjKhC', '../avatar/.png', 1, 6),
('Victor ben 10', 'a@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '../avatar/.png', 1, 7),
('s@s.com', 's@s.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '../avatar/', 1, 8),
('teste', 't@t.com', '01f82d368827de65b8c35ec0ce352a9f4234316a13c033861a9926ceb35bff75', '../avatar/', 1, 9),
('Otsuga', 'victor@hotmail.com', 'b7b2a8b6d717257cef569f168dd98d6a03e1692351b16815c9818571ec769d02', '../avatar/.png', 1, 10),
('sadas', 'se@a.com', '202cb962ac59075b964b07152d234b70', '../avatar/', 1, 11),
('\r\nAugusto', 'a@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'avatar', 1, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `sabor` varchar(255) NOT NULL,
  `preco_uni` decimal(20,2) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `tamanho_pacote` int(11) DEFAULT NULL,
  `tamanho_uni` varchar(255) DEFAULT NULL,
  `preco_pacote` decimal(20,2) DEFAULT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`sabor`, `preco_uni`, `tipo`, `tamanho_pacote`, `tamanho_uni`, `preco_pacote`, `id_prod`) VALUES
('111111', '111111.00', '1', 1111111, '1', '11111111.00', 1),
('Morango', '12312.00', '2', NULL, NULL, NULL, 2),
('mentos', '123.00', '3', NULL, NULL, NULL, 3);


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices para tabela `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`id_oper`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `operador`
--
ALTER TABLE `operador`
  MODIFY `id_oper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
trevoice