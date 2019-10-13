-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2019 às 00:10
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_aluno` int(11) NOT NULL,
  `nomealuno` text NOT NULL,
  `rgaluno` varchar(100) NOT NULL,
  `cpfaluno` int(11) NOT NULL,
  `enderecoaluno` text NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `uf` varchar(4) NOT NULL,
  `tipoplano` varchar(30) NOT NULL,
  `tipopagamento` varchar(30) NOT NULL,
  `valorpago` float NOT NULL,
  `datapagamento` text NOT NULL,
  `proximopagamento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_aluno`, `nomealuno`, `rgaluno`, `cpfaluno`, `enderecoaluno`, `bairro`, `cidade`, `uf`, `tipoplano`, `tipopagamento`, `valorpago`, `datapagamento`, `proximopagamento`) VALUES
(30, 'Ana Paula Cerqueira', '990909-0', 2147483647, 'Avenida Grande SÃ£o Paulo', 'Parque', 'SÃ£o Paulo', 'SP', 'Mensal', 'Cartao', 50, '05.10.19', '05-11-19'),
(32, 'Felipe Reis', '7878780987', 100200304, 'Avenida Grande Sao Paulo', 'Parque Teste', 'Belo Horizonte', 'AC', 'Mensal', 'Dinheiro', 50, '12.10.19', '12-11-19'),
(33, 'Lorena Leal', '12344567', 300400567, 'Avenida Brasil, 45', 'Parque Real', 'Fortaleza', 'CE', 'Mensal', 'Dinheiro', 50, '12.10.19', '12-11-19'),
(35, 'Beatriz Fonseca', '65478090843', 400500987, 'Rua Erupes, 123', 'Vila Maria', 'Recife', 'PE', 'Mensal', 'Cartao', 80, '12.10.19', '12-11-19'),
(36, 'Leonardo Lopes', '76214509', 200100956, 'Rua Pedro, 456', 'Vila Joao', 'Palmas', 'TO', 'Anual', 'Cartão', 800, '12.10.19', '12-11-19'),
(37, 'Renata Santos', '3525252', 2147483647, 'Rua Limao, 567', 'Parque America', 'Sao Leopoldo', 'AC', 'Mensal', 'Dinheiro', 55, '12.10.19', '12-11-19'),
(38, 'Rafael Pereira', '679999900', 2147483647, 'Avenida Leal, 67', 'Vila Belmiro', 'Maceio', 'AL', 'Anual', 'Cartao', 900, '12.10.19', '12-11-19'),
(39, 'Roberto Alfredo', '6790008743', 900807654, 'Avenida Real, 75', 'Origem ', 'Sao Paulo', 'SP', 'Mensal', 'Dinheiro', 10, '13.10.19', '13-11-19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
