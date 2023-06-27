-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 00:54
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `n8_miniprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(11) NOT NULL,
  `nome_Usuario` varchar(50) NOT NULL,
  `nascimento_Usuario` datetime NOT NULL,
  `cadastro_Usuario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario_Usuario` varchar(50) NOT NULL,
  `senha_Usuario` varchar(50) NOT NULL,
  `img_Usuario` longblob NOT NULL,
  `obs_Usuario` varchar(255) DEFAULT NULL,
  `status_Usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `nome_Usuario`, `nascimento_Usuario`, `cadastro_Usuario`, `usuario_Usuario`, `senha_Usuario`, `img_Usuario`, `obs_Usuario`, `status_Usuario`) VALUES
(1, 'Administrador', '2003-03-13 00:00:00', '2023-06-05 22:45:58', 'admin', '123', 0x696d616765732e6a7067, '', 'Ativo'),
(2, 'Asdrubal da Silva', '1998-04-20 00:00:00', '2023-06-05 22:52:53', 'asdrubal', '1234', 0x30332e706e67, 'Foi alterado', 'Ativo'),
(3, 'Benegundes', '2003-03-13 00:00:00', '2023-06-05 22:53:14', 'benegundes', '123', 0x30342e706e67, '', 'Ativo'),
(4, 'Matuzalem', '2000-03-22 00:00:00', '2023-06-05 22:53:32', 'matuzalem', '123', 0x436170747572612064652074656c6120323032332d30362d3035203139353131382e706e67, '', 'Ativo'),
(8, 'Lira', '2004-01-19 00:00:00', '2023-06-05 22:54:39', 'lira', '123', 0x6c6972612e706e67, 'ok', 'Ativo'),
(9, 'Guilherme', '2003-12-15 00:00:00', '2023-06-05 22:54:50', 'guilherme', '123', 0x6775696c6865726d652e706e67, '', 'Ativo'),
(10, 'aaa', '2021-04-03 00:00:00', '2023-06-05 22:42:09', 'aaa', '123', 0x746572657a612d666f746f7275696d5f3330305f3430302e6a7067, '', 'Ativo'),
(11, 'Henrique', '2022-05-05 00:00:00', '2023-06-06 22:38:32', 'henrique', '123', 0x6c6972612e706e67, '', ''),
(12, 'aaaaa', '0000-00-00 00:00:00', '2023-06-15 23:24:18', 'aaaaa', '123', 0x30332e706e67, 'aaaaa', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`),
  ADD UNIQUE KEY `usuario_Usuario` (`usuario_Usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
