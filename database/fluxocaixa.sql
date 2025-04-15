-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/04/2025 às 02:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `financeiro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fluxocaixa`
--

CREATE TABLE `fluxocaixa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `disc` varchar(255) NOT NULL,
  `data` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `fluxocaixa`
--

INSERT INTO `fluxocaixa` (`id`, `tipo`, `nome`, `preco`, `disc`, `data`) VALUES
(149, 'Agendado', 'Talilo', 100, 'Gdgs', '19/05/2024 15:28:35'),
(150, 'Saida', 'Preco produto', -24, 'Rw', '2024-12-8 1:21:20.027'),
(175, 'Entrada', 'Pao', 2, 'Pao com ovo', '2024-12-8 1:21:20.027'),
(176, 'Agendado', 'Biscoito', 44, 'Biscode pacote branco', '2024-12-8 1:26:25.318'),
(199, 'Saida', 'Ssfs', -24, 'Ffs', '29/01/2025 00:29:10'),
(201, 'Agendado', 'Dfsdsf', 232313, 'Sfagdggfsf', '07/02/2025 17:12:41'),
(203, 'Entrada', 'Bobo', 32, 'Bolosa', '12/04/2025 15:02:08'),
(210, 'Agendado', 'Juju', 6, 'U', '14/04/2025 11:11:02'),
(214, 'Agendado', 'Ptyt', 5, 'G', '14/04/2025 16:39:18');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fluxocaixa`
--
ALTER TABLE `fluxocaixa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fluxocaixa`
--
ALTER TABLE `fluxocaixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
