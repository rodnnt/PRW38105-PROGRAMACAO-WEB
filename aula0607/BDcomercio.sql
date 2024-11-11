-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 11/11/2024 às 03:02
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
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`, `descricao`, `data_registro`) VALUES
(1, 'Eletrônicos', 'Produtos relacionados a dispositivos eletrônicos, como celulares, televisores e computadores.', '2024-11-10 23:37:51'),
(2, 'Roupas', 'Vestimentas diversas, incluindo roupas casuais, esportivas e formais.', '2024-11-10 23:37:51'),
(3, 'Alimentos', 'Produtos alimentícios, incluindo perecíveis e não perecíveis.', '2024-11-10 23:37:51'),
(4, 'Móveis', 'Itens de mobiliário para residência ou escritório.', '2024-11-10 23:37:51'),
(5, 'Brinquedos', 'Produtos voltados para o entretenimento infantil, como brinquedos educativos e recreativos.', '2024-11-10 23:37:51'),
(6, 'Ferramentas', 'Equipamentos e utensílios para uso em construção, jardinagem e outras atividades manuais.', '2024-11-10 23:37:51'),
(7, 'Livros', 'Publicações impressas ou digitais em diversos gêneros literários.', '2024-11-10 23:37:51'),
(8, 'Calçados', 'Sapatos, botas, tênis e outros tipos de calçados.', '2024-11-10 23:37:51'),
(9, 'Cosméticos', 'Produtos de cuidados pessoais, incluindo maquiagem, cremes e perfumes.', '2024-11-10 23:37:51');

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
  `data_registro` datetime DEFAULT current_timestamp(),
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `descricao`, `quantidade`, `preco`, `data_registro`, `id_categoria`) VALUES
(4, 'Borracha Branca', 'Borracha branca macia', 75, 5.00, '2024-10-24 23:43:23', 2),
(7, 'Bloco de Notas', 'Bloco de notas adesivas com 100 folhas', 40, 8.00, '2024-10-24 23:43:23', 6),
(8, 'Tesoura Escolar', 'Tesoura sem ponta, 13 cm', 30, 5.50, '2024-10-24 23:43:23', 2),
(9, 'Cola Branca', 'Cola branca líquida, 90g', 80, 3.99, '2024-10-24 23:43:23', NULL),
(10, 'Régua 30cm', 'Régua de plástico transparente, 30 cm', 100, 2.00, '2024-10-24 23:43:23', NULL),
(11, 'Grampeador', 'Grampeador de mesa para até 20 folhas', 25, 18.00, '2024-10-24 23:43:23', 2),
(12, 'Clips de Papel', 'Clips de papel 28mm, caixa com 100 unidades', 150, 4.50, '2024-10-24 23:43:23', NULL),
(13, 'Pasta Suspensa', 'Pasta suspensa com etiqueta de identificação', 40, 6.90, '2024-10-24 23:43:23', NULL),
(14, 'Fichário A4', 'Fichário de 4 argolas, tamanho A4', 20, 25.00, '2024-10-24 23:43:23', NULL),
(15, 'Envelope Ofício', 'Envelope ofício branco, 100 unidades', 30, 12.00, '2024-10-24 23:43:23', NULL),
(16, 'Calculadora de Mesa', 'Calculadora de mesa com 12 dígitos', 15, 35.00, '2024-10-24 23:43:23', NULL),
(17, 'Pincel Atômico', 'Pincel atômico permanente preto', 50, 5.00, '2024-10-24 23:43:23', NULL),
(18, 'Post-it Colorido', 'Conjunto de post-its coloridos, 5 blocos', 35, 9.50, '2024-10-24 23:43:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `telefone`, `endereco`, `data_registro`) VALUES
(1, 'João Silva', 'joao.silva@email.com', '(11) 99999-1111', 'Rua A, 123, São Paulo, SP', '2024-11-10 19:39:58'),
(2, 'Maria Oliveira', 'maria.oliveira@email.com', '(11) 99999-2222', 'Rua B, 456, São Paulo, SP', '2024-11-10 19:39:58'),
(3, 'Carlos Pereira', 'carlos.pereira@email.com', '(11) 99999-3333', 'Rua C, 789, São Paulo, SP', '2024-11-10 19:39:58'),
(4, 'Ana Souza', 'ana.souza@email.com', '(11) 99999-4444', 'Rua D, 101, São Paulo, SP', '2024-11-10 19:39:58'),
(5, 'Felipe Costa', 'felipe.costa@email.com', '(11) 99999-5555', 'Rua E, 202, São Paulo, SC', '2024-11-10 20:03:33'),
(6, 'Patrícia Lima', 'patricia.lima@email.com', '(11) 99999-6666', 'Rua F, 303, São Paulo, SP', '2024-11-10 19:39:58'),
(7, 'Lucas Martins', 'lucas.martins@email.com', '(11) 99999-7777', 'Rua G, 404, São Paulo, SP', '2024-11-10 19:39:58'),
(8, 'Fernanda Alves', 'fernanda.alves@email.com', '(11) 99999-8888', 'Rua H, 505, São Paulo, SP', '2024-11-10 19:39:58'),
(9, 'Rafael Santos', 'rafael.santos@email.com', '(11) 99999-9999', 'Rua I, 606, São Paulo, SP', '2024-11-10 19:39:58'),
(10, 'Beatriz Rocha', 'beatriz.rocha@email.com', '(11) 99999-0000', 'Rua J, 707, São Paulo, SP', '2024-11-10 19:39:58');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;