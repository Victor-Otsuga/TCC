-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28-Nov-2022 às 20:31
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
('99', '9', '9', 99, 9, 99, '9', 22),
('Neila', '', 'n@hotmail.com', 123123, 132124, 1234123, 'rua cardenas', 23);

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

INSERT INTO `operador` (`nome_oper`, `email_oper`, `senha`, `recuperar_senha`, `avatar`, `nivel_acess`, `id_oper`) VALUES
('thi', 'thi@adm.com.br', '123', NULL, 'avatar', 1, 1),
('thi', 'thi@adm.com.br', '123', NULL, 'avatar', 1, 2),
('augusto', 'augusto@adm.com', '$2y$10$XAvUBj7bhQ/izZ900QA8/utkUJY5ClWLZAfAkFIkeMs92qe8v9I4K', NULL, '../avatar/augusto.png', 2, 3),
('Victor', 'vic@adm.com', '$2y$10$VFaBaHvL8e9r51KCc1sbUuNQcTo7kPNy/tHaSKQkcXbc9fxbEMM66', NULL, '../avatar/Victor.png', 1, 4),
('Augusto', 'vic2@adm.com', '$2y$10$M4gBRo9CTTH/1OCXf6hHUuRpuseWQIBXTwTVHXRb9J/BoVRfxTeSS', NULL, '../avatar/Augusto.png', 1, 5),
('oi', 'oi@adm.com', '$2y$10$RUk0WK5XSCl4BOD/kLTuJuojh5em6QgCIhrHfpieXkFkvBAxAjKhC', NULL, '../avatar/.png', 1, 6),
('Victor ben 10', 'a@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../../avatar/Victor ben 10.png', 1, 7),
('s@s.com', 's@s.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../avatar/', 1, 8),
('teste', 't@t.com', '01f82d368827de65b8c35ec0ce352a9f4234316a13c033861a9926ceb35bff75', NULL, '../avatar/', 1, 9),
('Otsuga', 'victor@hotmail.com', 'b7b2a8b6d717257cef569f168dd98d6a03e1692351b16815c9818571ec769d02', NULL, '../avatar/.png', 1, 10),
('sadas', 'se@a.com', '202cb962ac59075b964b07152d234b70', NULL, '../avatar/', 1, 11),
('\r\nAugusto', 'a@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, 'avatar', 1, 13),
('a', 'a@a2.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', NULL, '../avatar/a', 1, 14),
('a', 'a@as.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', NULL, '../avatar/a', 2, 15),
('Neila', 'n@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../avatar/Neila.png', 1, 16),
('Gabi', 'g@g.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../avatar/Gabi.png', 1, 17),
('Otsuga', 'v@v.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../avatar/Otsuga.jpg', 1, 18),
('aa', 'a1@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../avatar/default.png', 1, 19),
('Augusto12', 't@a.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL, '../../avatar/Augusto1.png', 1, 20),
('ola', 'h@adm.com', 'MTIz', NULL, '../../avatar/olajpeg', 1, 21),
('hm', '00@adm.com', '', NULL, '../../avatar/hmjpeg', 1, 22),
('j', 'l@adm.com', '', NULL, '../../avatar/j.png', 1, 23),
('j', 'j@adm.com', '', NULL, '../../avatar/j.png', 1, 24),
('okok', 'okok@adm.com', '7f6a6wVHpKI=', NULL, '../../avatar/okok.png', 1, 25),
('Victor', 'victorsantosp10@hotmail.com', '243cdb2900c5b837cfa3756745ee914fc9b5e62739c1e1f1d75106aecb3c251d', 'trevo8023', '../../avatar/Victor.png', 1, 26);

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
('Baunilha', '10.00', '1', 2, '1', '20.00', 5),
('queijo', '1.00', '1', 1, '1', '1.00', 6),
('341', '1.00', '2', NULL, NULL, NULL, 7),
('321', '3.00', '2', NULL, NULL, NULL, 8),
('Grego Frutas Vermelhas', '12.00', '3', NULL, NULL, NULL, 9),
('Grego Frutas Azuis', '500.00', '3', NULL, NULL, NULL, 10),
('Grego Frutas Amarelas', '123.00', '3', NULL, NULL, NULL, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `datas` date NOT NULL,
  `total_venda` decimal(8,2) NOT NULL,
  `quant_produtos` int(10) NOT NULL,
  `pend` int(10) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `id_oper` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`datas`, `total_venda`, `quant_produtos`, `pend`, `id_cli`, `id_oper`, `id_venda`) VALUES
('2026-11-22', '500.00', 3, 2, 15, 7, 1),
('2026-11-22', '500.00', 3, 2, 15, 8, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendaprod`
--

CREATE TABLE `vendaprod` (
  `quant_produtos_uni` int(10) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendaprod`
--

INSERT INTO `vendaprod` (`quant_produtos_uni`, `id_prod`, `id_venda`, `id_pedido`) VALUES
(10, 1, 1, 14),
(10, 2, 2, 15);

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
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_oper` (`id_oper`);

--
-- Índices para tabela `vendaprod`
--
ALTER TABLE `vendaprod`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_venda` (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `operador`
--
ALTER TABLE `operador`
  MODIFY `id_oper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendaprod`
--
ALTER TABLE `vendaprod`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`id_oper`) REFERENCES `operador` (`id_oper`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `vendaprod`
--
ALTER TABLE `vendaprod`
  ADD CONSTRAINT `vendaprod_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produtos` (`id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendaprod_ibfk_2` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id_venda`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
