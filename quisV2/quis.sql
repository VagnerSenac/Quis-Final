-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Mar-2023 às 01:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_quiz`
--

CREATE TABLE `t_quiz` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(4000) NOT NULL,
  `alternativa1` varchar(2000) NOT NULL,
  `alternativa2` varchar(2000) NOT NULL,
  `alternativa3` varchar(2000) NOT NULL,
  `alternativa4` varchar(2000) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `resp1` varchar(20) NOT NULL,
  `resp2` varchar(20) NOT NULL,
  `resp3` varchar(20) NOT NULL,
  `resp4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_quiz`
--

INSERT INTO `t_quiz` (`id`, `pergunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `imagem`, `resp1`, `resp2`, `resp3`, `resp4`) VALUES
(4, 'Qual vc prefere mais?', 'Superman', 'Thor', 'Mulher Maravilha', 'Batman', 'imagens/fundo3.jpg', 'dc', 'marvel', 'dc', 'dc'),
(5, 'Quem venceria essa luta?', 'Iron Man', 'Lanterna Verde', 'Homem Formiga', 'Homen Aranha', 'imagens/fundo5.jpg', 'marvel', 'dc', 'marvel', 'marvel'),
(6, 'Quem é o pior personagem para vc?', 'Batman', 'Thor', 'Superman', 'Iron Man', 'imagens/fundo2.jpg', 'dc', 'marvel', 'dc', 'marvel'),
(7, 'Quem é o pior vilão?', 'Coringa', 'Thanos', 'Arlequina', 'Jaqueta Amarela', 'imagens/fundo6.jpg', 'dc', 'marvel', 'dc', 'marvel'),
(8, 'Qual o pior super poder?', 'Super Soro', 'Encolher', 'Ser Rico', 'Voar', 'imagens/fundo4.jpg', 'marvel', 'marvel', 'dc', 'dc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_resposta`
--

CREATE TABLE `t_resposta` (
  `id` int(11) NOT NULL,
  `resposta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(7, 'vagner', '$2y$10$bYabJiBMAl0qUJiAW7E0XOXzMlvschEijbIwh2grS3M1iodcBo61q', '2023-03-22 10:49:48'),
(8, 'teste', '$2y$10$QAVCKho5Gs.895m/j9b8m.CjTJCi8wvxsdLn7VejEdka7PxtTkilG', '2023-03-22 12:28:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_resposta`
--
ALTER TABLE `t_resposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `t_resposta`
--
ALTER TABLE `t_resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
