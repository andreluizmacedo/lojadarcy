-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Fev-2023 às 12:07
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `SENHA` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  `CPF_CNPJ` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `ENDERECO` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `NUMERO` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `ESTADO` varchar(2) COLLATE utf8mb4_bin DEFAULT NULL,
  `CIDADE` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `BAIRRO` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `CEP` varchar(9) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos`
--

DROP TABLE IF EXISTS `tb_pedidos`;
CREATE TABLE IF NOT EXISTS `tb_pedidos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `EMISSAO` datetime DEFAULT CURRENT_TIMESTAMP,
  `ID_CLIENTE` int DEFAULT NULL,
  `VALOR_TOTAL` decimal(14,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos_itens`
--

DROP TABLE IF EXISTS `tb_pedidos_itens`;
CREATE TABLE IF NOT EXISTS `tb_pedidos_itens` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_PEDIDO` int DEFAULT NULL,
  `ID_PRODUTO` int DEFAULT NULL,
  `VALOR_UN` decimal(14,2) DEFAULT '0.00',
  `QTD` int DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_SUB_CATEGORIA` int DEFAULT NULL,
  `TITULO` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `DESCRICAO` text COLLATE utf8mb4_bin,
  `PRECO` decimal(14,2) DEFAULT '0.00',
  `ESTOQUE` int DEFAULT '0',
  `FOTO` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sub_categorias`
--

DROP TABLE IF EXISTS `tb_sub_categorias`;
CREATE TABLE IF NOT EXISTS `tb_sub_categorias` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_CATEGORIA` int DEFAULT NULL,
  `DESCRICAO` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `SENHA` varchar(32) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
