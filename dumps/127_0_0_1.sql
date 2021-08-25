-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Ago-2021 às 20:46
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `project_php`
--
CREATE DATABASE IF NOT EXISTS `project_php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name_client`, `cpf`, `email`) VALUES
(1, 'Ricardo Tostes Marinho', '12345678912', 'rodrigo@email.com'),
(2, 'Paulo Torres', '32162594761', 'paulo@email.com'),
(3, 'Pedro', '92341656917', 'pedro@email.com'),
(4, 'Lucas', '62579413684', 'lucas@email.com'),
(5, 'João', '62594136874', 'joao@email.com'),
(6, 'Vinícius', '30256105973', 'vinicius@email.com'),
(7, 'Eduardo', '10236520048', 'edu@email.com'),
(8, 'Victor', '30641978026', 'victor@email.com'),
(9, 'Henrique', '41360594762', 'henrique@email.com'),
(10, 'Mateus', '36985214701', 'mateus@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`order_number`, `order_date`, `client_id`, `product_id`, `quantity`) VALUES
(1, '2021-08-13 13:44:08', 1, 1, 10),
(2, '2021-08-13 13:44:08', 2, 2, 15),
(3, '2021-08-13 13:44:08', 3, 3, 20),
(4, '2021-08-13 13:44:08', 4, 4, 25),
(5, '2021-08-13 13:44:08', 5, 5, 19),
(6, '2021-08-13 13:44:08', 6, 6, 35),
(7, '2021-08-13 13:44:08', 7, 7, 6),
(8, '2021-08-13 13:44:08', 8, 8, 10),
(9, '2021-08-13 13:44:08', 9, 9, 8),
(10, '2021-08-13 13:44:08', 10, 10, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `bar_code` varchar(40) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `unitary_value` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `bar_code`, `name_product`, `unitary_value`) VALUES
(1, 'Água', '3123541384633646', '15.05'),
(2, 'Refrigerante', '6835435843543658', '15.05'),
(3, 'Cerveja', '3153543516156435', '15.05'),
(4, 'Suco de uva', '2654698384967560', '15.05'),
(5, 'Açúcar', '6351569023105478', '15.05'),
(6, 'Feijão', '9531647890321546', '15.05'),
(7, 'Sal', '3025046089047035', '15.05'),
(8, 'Pão', '9567619438207901', '15.05'),
(9, 'Arroz', '1063054096123780', '15.05'),
(10, 'Macarrão', '9642381039705604', '15.05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bar_code` (`bar_code`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
