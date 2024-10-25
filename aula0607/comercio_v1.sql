-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 25/10/2024 às 05:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comercio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `data_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `descricao`, `quantidade`, `preco`, `data_registro`) VALUES
(1, 'Caderno Espiral 200 folhas', 'Caderno com 200 folhas, pautado', 50, 15.90, '2024-10-24 23:43:23'),
(2, 'Caneta Esferográfica', 'Caneta esferográfica azul de ponta fina', 100, 7.50, '2024-10-24 23:43:23'),
(3, 'Lápis HB', 'Lápis grafite HB com borracha', 200, 1.00, '2024-10-24 23:43:23'),
(4, 'Borracha Branca', 'Borracha branca macia', 75, 0.80, '2024-10-24 23:43:23'),
(5, 'Apontador de Lápis', 'Apontador simples com depósito', 50, 3.50, '2024-10-24 23:43:23'),
(6, 'Marcador de Texto', 'Marcador de texto fluorescente amarelo', 60, 4.20, '2024-10-24 23:43:23'),
(7, 'Bloco de Notas', 'Bloco de notas adesivas com 100 folhas', 40, 7.99, '2024-10-24 23:43:23'),
(8, 'Tesoura Escolar', 'Tesoura sem ponta, 13 cm', 30, 5.50, '2024-10-24 23:43:23'),
(9, 'Cola Branca', 'Cola branca líquida, 90g', 80, 3.99, '2024-10-24 23:43:23'),
(10, 'Régua 30cm', 'Régua de plástico transparente, 30 cm', 100, 2.00, '2024-10-24 23:43:23'),
(11, 'Grampeador', 'Grampeador de mesa para até 20 folhas', 25, 18.00, '2024-10-24 23:43:23'),
(12, 'Clips de Papel', 'Clips de papel 28mm, caixa com 100 unidades', 150, 4.50, '2024-10-24 23:43:23'),
(13, 'Pasta Suspensa', 'Pasta suspensa com etiqueta de identificação', 40, 6.90, '2024-10-24 23:43:23'),
(14, 'Fichário A4', 'Fichário de 4 argolas, tamanho A4', 20, 25.00, '2024-10-24 23:43:23'),
(15, 'Envelope Ofício', 'Envelope ofício branco, 100 unidades', 30, 12.00, '2024-10-24 23:43:23'),
(16, 'Calculadora de Mesa', 'Calculadora de mesa com 12 dígitos', 15, 35.00, '2024-10-24 23:43:23'),
(17, 'Pincel Atômico', 'Pincel atômico permanente preto', 50, 5.00, '2024-10-24 23:43:23'),
(18, 'Post-it Colorido', 'Conjunto de post-its coloridos, 5 blocos', 35, 9.50, '2024-10-24 23:43:23'),
(20, 'Lápis de Cor', 'Conjunto de lápis de cor com 24 cores', 25, 18.99, '2024-10-24 23:43:23'),
(21, 'Caneta Bic Azul', 'Caneta Bic Azul', 5, 3.50, '2024-10-24 23:52:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
