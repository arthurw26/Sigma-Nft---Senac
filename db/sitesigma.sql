-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2022 às 17:20
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Ativo`) VALUES
(1, 'Carros', 1),
(3, 'Gatos', 1),
(4, 'Dogs', 1),
(5, 'Limitados', 1),
(6, 'Ratos', 1),
(7, 'Capivaras', 1),
(9, 'Times', 1),
(10, 'Animais fumantes', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `Categoria`, `Ativo`) VALUES
(1, 'nft capivara', 'Descrição nft capivara', 'nft-capivara.jpg', 1200, 1, 1),
(2, 'nft capivara', 'Descrição nft capivara', 'nft-capivara.jpg', 1200, 1, 1),
(3, 'nft neymar', 'Descrição nft neymar', 'nft-neymar.jpg', 50000, 1, 1),
(4, 'nft gremio', 'Descrição nft gremio', 'nft-gremio.jpg', 150000, 1, 1),
(5, 'nft gorila', 'Descrição nft gorila', 'nft-gorila.jpg', 1500, 1, 1),
(6, 'nft leão', 'Descrição nft leão', 'nft-leão.jpg', 1600, 1, 1),
(7, 'nft pato', 'Descrição nft pato', 'nft-pato.jpg', 2400, 1, 1),
(8, 'nft crocodilo', 'Descrição nft crocodilo', 'nft-crocodilo.jpg', 3500, 1, 1),
(9, 'nft panda', 'Descrição nft panda', 'nft-panda.jpg', 1200, 1, 1),
(10, 'nft rato', 'Descrição nft rato', 'nft-rato.jpg', 50000, 1, 1),
(11, 'nft macaco', 'Descrição nft macaco', 'nft-macaco.jpg', 50000, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
