-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2022 às 00:15
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
-- Banco de dados: `systemgrill`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Bebidas'),
(2, 'Carnes'),
(3, 'Pratos Tradicionais'),
(4, 'Vegano'),
(5, 'Sobremesa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itempedido`
--

CREATE TABLE `itempedido` (
  `idItemPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `valor_total` double NOT NULL,
  `metodo_pagamento` varchar(20) NOT NULL,
  `data_pagamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itempedido`
--

INSERT INTO `itempedido` (`idItemPedido`, `idProduto`, `qtdProduto`, `idPedido`, `valor_total`, `metodo_pagamento`, `data_pagamento`) VALUES
(1, 2, 2, 1, 39, 'Dinheiro', '06/06/2022'),
(2, 7, 1, 2, 2, 'PIX', '06/06/2022'),
(3, 12, 7, 3, 5.6, 'Cartão de Crédito', '06/06/2022'),
(4, 14, 4, 4, 3.2, 'Cartão de Debito', '06/06/2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `idMesa` int(11) NOT NULL,
  `numeroMesa` int(11) NOT NULL,
  `statusMesa` varchar(20) NOT NULL,
  `quantidade_assento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`idMesa`, `numeroMesa`, `statusMesa`, `quantidade_assento`) VALUES
(1, 1, 'livre', 0),
(2, 2, 'livre', 0),
(3, 3, 'livre', 0),
(4, 4, 'livre', 0),
(5, 5, 'livre', 0),
(6, 6, 'livre', 0),
(7, 7, 'livre', 0),
(8, 8, 'livre', 0),
(9, 9, 'livre', 0),
(10, 10, 'livre', 0),
(11, 11, 'livre', 0),
(12, 12, 'livre', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `idMesa` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `statusPedido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `idMesa`, `idUsuario`, `statusPedido`) VALUES
(1, 1, 1, 'concluido'),
(2, 2, 1, 'concluido'),
(3, 3, 1, 'concluido'),
(4, 4, 1, 'concluido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `descricaoProduto` varchar(200) NOT NULL,
  `precoProduto` float NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `fornecedor` varchar(25) NOT NULL,
  `validade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `descricaoProduto`, `precoProduto`, `idCategoria`, `fornecedor`, `validade`) VALUES
(1, 'Carne de Sol Completa', 25, 2, 'Aurora', '10/10/2023'),
(2, 'Picanha Argentina Meia', 19.5, 2, 'Aurora', '10/10/2023'),
(3, 'Coca-Cola 2L', 9.5, 1, 'Coca-Cola', '23/07/2023'),
(4, 'Bife acebolado', 17.9, 2, 'Aurora', '10/10/2023'),
(5, 'Frango Atropelado', 23, 3, 'Aurora', '10/10/2023'),
(6, 'Strogonoff de frango', 16, 3, 'Aurora', '10/10/2023'),
(7, 'Água mineral 510ml', 2, 1, 'Cristal', '20/06/2022'),
(8, 'Energetico', 1.8, 1, 'Redbull', '09/06/2024'),
(9, 'Coxinha vegana', 37.4, 4, 'Vegan', '10/07/2023'),
(10, 'Hambúrguer veganos', 127.6, 4, 'Vegan', '10/07/2023'),
(11, 'Brigadeiro 18g (unidade)', 0.8, 5, 'MariaDoces', '08/08/2023'),
(12, 'Cajuzinho 18g (unidade)', 0.8, 5, 'MariaDoces', '10/08/2022'),
(13, 'Brownie chocolate meio amargo 50g', 5, 5, 'MariaDoces', '20/09/2023'),
(14, 'Trufa chocolate branco 50gr', 3, 5, 'MariaDoces', '20/09/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cargoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomeUsuario`, `senhaUsuario`, `email`, `cpf`, `cargoUsuario`) VALUES
(1, 'garçom', 'garçom', 'garçom@systemgrill.com.br', '11122233344', 'atendimento'),
(2, 'cozinha', 'cozinha', 'cozinha@systemgrill.com.br', '22233344455', 'cozinha'),
(3, 'gerente', 'gerente', 'gerente@systemgrill.com.br', '33344455566', 'atendimento');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `itempedido`
--
ALTER TABLE `itempedido`
  ADD PRIMARY KEY (`idItemPedido`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idPedido` (`idPedido`);

--
-- Índices para tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idMesa`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idMesa` (`idMesa`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `itempedido`
--
ALTER TABLE `itempedido`
  MODIFY `idItemPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `mesa`
--
ALTER TABLE `mesa`
  MODIFY `idMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itempedido`
--
ALTER TABLE `itempedido`
  ADD CONSTRAINT `itempedido_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`) ON DELETE CASCADE,
  ADD CONSTRAINT `itempedido_ibfk_2` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idMesa`) REFERENCES `mesa` (`idMesa`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
