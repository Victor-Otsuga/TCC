-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Dez-2022 às 00:26
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `email_cli` varchar(255) DEFAULT NULL,
  `contato_cli` varchar(255) NOT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `endereco_cli` varchar(255) NOT NULL,
  `id_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome_cli`, `apelido_cli`, `email_cli`, `contato_cli`, `cpf`, `cnpj`, `endereco_cli`, `id_cli`) VALUES
('Extra', 'José', 'não tem', '940028922', '768809556', '23576532', 'Av. Paulista', 2),
('Mercado Grande', '', 'mercadogrande@gmail.com', '940028922', '8688686', '7645467', 'Av. Paulista', 3),
('JosÃ©', '', '', '11938374983', '5465775789', '34478889900', 'Rua Ana Popovici', 26);

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
('Victor AugustÃ´~', 'victor@adm.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '../../avatar/Victor Augusto.jpg', 2, 19),
('Kelly', 'kelly@adm.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '../../avatar/Kelly.jpg', 1, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `sabor` varchar(255) NOT NULL,
  `preco_uni` decimal(20,2) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `tamanho_pacote` int(255) NOT NULL,
  `tamanho_uni` varchar(255) DEFAULT NULL,
  `preco_pacote` decimal(20,2) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`sabor`, `preco_uni`, `tipo`, `tamanho_pacote`, `tamanho_uni`, `preco_pacote`, `id_prod`) VALUES
('MaracujÃ¡', '10.00', '3', 10, '1', '100.00', 7),
('LimÃ£o', '11.00', '1', 12, '1', '121.00', 8);

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
('2022-12-11', '0.00', 1, 1, 26, 19, 18),
('2022-12-11', '100.00', 1, 1, 2, 19, 19),
('2022-12-11', '221.00', 2, 1, 26, 19, 20),
('2022-12-10', '260.00', 4, 1, 1, 19, 22),
('2022-12-11', '521.00', 2, 1, 2, 19, 28);

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
(1, 1, 16, 25),
(1, 2, 16, 26),
(1, 3, 16, 27),
(1, 4, 28, 28);

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
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `operador`
--
ALTER TABLE `operador`
  MODIFY `id_oper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `vendaprod`
--
ALTER TABLE `vendaprod`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
