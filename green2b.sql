-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2024 às 21:54
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
-- Banco de dados: `green2b`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `customer`
--

CREATE TABLE `customer` (
  `customer_id` char(8) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `responsible` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `email`, `telephone`, `responsible`) VALUES
('4638810b', 'Stadt Koln', 'schweiheim', 'stadtkoln@gmail.com', '017677429642', 'teste2'),
('476ca5e5', 'Stadt Dusseldorf', 'schweiheim', 'baacelar@gmail.com', '017677429642', 'teste'),
('8f10195d', 'Stadt Bonn', '123 Main St', 'john.doe@example.com', '123-456-7890', 'Jane Smith');

-- --------------------------------------------------------

--
-- Estrutura para tabela `order`
--

CREATE TABLE `order` (
  `order_id` char(8) NOT NULL,
  `customer_id` char(8) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `smartphones_qty` int(11) DEFAULT NULL,
  `tablets_qty` int(11) DEFAULT NULL,
  `other_qty` int(11) DEFAULT NULL,
  `FRP_kiste_qty` int(11) NOT NULL,
  `bootloop_qty` int(11) NOT NULL,
  `keine_reaktion_qty` int(11) NOT NULL,
  `step1_failed_qty` int(11) DEFAULT NULL,
  `step2_failed_qty` int(11) DEFAULT NULL,
  `step3_failed_qty` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `order_date`, `smartphones_qty`, `tablets_qty`, `other_qty`, `FRP_kiste_qty`, `bootloop_qty`, `keine_reaktion_qty`, `step1_failed_qty`, `step2_failed_qty`, `step3_failed_qty`, `image_path`) VALUES
('04a177ac', '476ca5e5', '2024-11-27', 9, 9, 10, 0, 0, 0, 0, NULL, 0, NULL),
('0d86ca42', '4638810b', '2024-11-25', 412, 120, 80, 24, 5551, 0, 52, NULL, 0, NULL),
('11021786', '4638810b', '2024-11-25', 300, 300, 20, 0, 0, 0, 45, NULL, 0, NULL),
('169659f4', '8f10195d', '2024-11-26', 85, 92, 25, 0, 0, 0, 0, NULL, 0, NULL),
('17133f27', '4638810b', '2024-11-25', 789, 150, 0, 0, 0, 0, 0, NULL, 0, NULL),
('19c45f8b', '4638810b', '2024-11-25', 789, 150, 0, 0, 0, 0, 0, NULL, 0, NULL),
('2110fa03', '4638810b', NULL, 2, 3, 1, 0, 0, 0, 0, 1, 0, NULL),
('2cd6d438', '4638810b', '2024-11-25', 120, 140, 123, 0, 0, 0, 0, NULL, 0, NULL),
('34b81aa4', '476ca5e5', '2024-11-27', 25, 16, 5, 0, 0, 0, 0, NULL, 0, NULL),
('35a74dbb', '4638810b', '2024-11-25', 389, 274, 0, 0, 0, 0, 0, NULL, 0, NULL),
('411fab73', '4638810b', '2024-11-25', 320, 120, 20, 0, 0, 0, 120, NULL, 0, NULL),
('41d5fd7e', '476ca5e5', '2024-11-25', 560, 200, 0, 0, 0, 0, 0, NULL, 0, NULL),
('4d1b275c', '476ca5e5', '2024-11-25', 1500, 500, 20, 55, 70, 0, 30, NULL, 10, NULL),
('65df19b7', '4638810b', '2024-11-25', 450, 150, 120, 0, 0, 0, 0, NULL, 0, NULL),
('739737d0', '4638810b', '2024-11-28', 1, 2, 3, 5, 6, 7, 4, NULL, 8, 'uploads/PSG_do_Brasil.jpg'),
('9a67643b', '4638810b', '2024-11-28', 235, 120, 23, 0, 0, 0, 0, NULL, 0, 'uploads/Petroeng.jpg'),
('b771c4b3', '4638810b', NULL, 2, 5, 5, 0, 0, 0, 0, NULL, 0, NULL),
('dd90c0e7', '8f10195d', NULL, 60000, 10000, 5, 0, 0, 0, 0, NULL, 458, NULL),
('eb517951', '476ca5e5', '2024-11-27', 56, 32, 56, 0, 0, 0, 0, NULL, 0, NULL),
('f03704b8', '8f10195d', NULL, 320, 480, 0, 0, 0, 0, 0, NULL, 54, NULL),
('f05b6f9e', '4638810b', '2024-11-25', 320, 0, 0, 0, 0, 0, 0, NULL, 0, NULL),
('f0f4d8dd', '476ca5e5', '2024-11-28', 13, 10, 5, 0, 0, 0, 0, NULL, 0, NULL),
('f40a098e', '476ca5e5', '2024-11-28', 13, 10, 5, 0, 0, 0, 0, NULL, 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Índices de tabela `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
