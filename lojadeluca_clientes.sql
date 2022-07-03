-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2022 às 05:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojadeluca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `categ_id` int(10) NOT NULL,
  `categ_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`categ_id`, `categ_nome`) VALUES
(1, 'Infraestrutura'),
(2, 'Desenvolvimento'),
(7, 'DataBase'),
(8, 'Mobile'),
(9, 'Sistemas Embarcados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `client_id` int(11) NOT NULL,
  `client_nome` varchar(100) DEFAULT NULL,
  `client_email` varchar(80) NOT NULL,
  `client_endereco` varchar(150) DEFAULT NULL,
  `client_numero` int(6) DEFAULT NULL,
  `client_bairro` varchar(80) DEFAULT NULL,
  `client_cidade` varchar(80) DEFAULT NULL,
  `client_uf` varchar(2) DEFAULT NULL,
  `client_cep` varchar(80) DEFAULT NULL,
  `client_telefone` varchar(12) DEFAULT NULL,
  `client_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`client_id`, `client_nome`, `client_email`, `client_endereco`, `client_numero`, `client_bairro`, `client_cidade`, `client_uf`, `client_cep`, `client_telefone`, `client_senha`) VALUES
(1, 'rafael', 'rafael@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123456'),
(3, NULL, 'claudia@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123456'),
(21, 'Joao', 'joaodasilva@gmail.com', 'Rua teste', 15, 'Centro', 'Porto Alegre', 'uf', '90000000', '51909090', '123456'),
(23, 'Joao', 'joao@gmail.com', 'Rua teste', 50, 'Centro', 'Porto Alegre', 'uf', '90000000', '50909090', '123456'),
(28, '', 'tereza@gmail.com', '', 0, '', '', '', '', '', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_dos_pedidos`
--

CREATE TABLE `itens_dos_pedidos` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_preco` double(10,2) NOT NULL,
  `item_quanti` int(5) NOT NULL,
  `item_codigo_pedido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens_dos_pedidos`
--

INSERT INTO `itens_dos_pedidos` (`item_id`, `item_produto`, `item_preco`, `item_quanti`, `item_codigo_pedido`) VALUES
(109, 3, 250.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(110, 2, 250.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(111, 3, 250.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(112, 3, 250.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(113, 12, 290.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(114, 9, 350.00, 1, '2bda455795c7940510195b7c7503b4a5'),
(115, 3, 250.00, 1, '320220627:000647'),
(116, 5, 300.00, 1, '320220627:000608'),
(117, 2, 250.00, 1, '320220627:000644'),
(118, 4, 350.00, 1, '320220627:000640'),
(119, 11, 320.00, 1, '120220627:000622'),
(120, 3, 250.00, 2, '120220627:000638'),
(121, 6, 250.00, 1, '120220627:000638'),
(122, 2, 250.00, 1, '120220627:000638'),
(123, 2, 250.00, 1, '120220627:000638'),
(124, 3, 250.00, 1, '120220627:000638'),
(125, 2, 250.00, 1, '120220627:000638'),
(126, 3, 250.00, 1, '120220627:000638'),
(127, 2, 250.00, 1, '120220627:000638'),
(128, 2, 250.00, 1, '120220627:000638'),
(129, 7, 250.00, 2, '120220627:000638'),
(130, 3, 250.00, 1, '120220627:000638'),
(131, 9, 350.00, 1, '120220627:000631'),
(132, 3, 250.00, 1, '120220627:000605'),
(133, 3, 250.00, 1, '120220627:010605'),
(134, 2, 250.00, 1, '120220627:010608'),
(135, 2, 250.00, 1, '120220626:200649'),
(136, 6, 250.00, 1, '120220627:195253'),
(137, 3, 250.00, 1, '2820220703:000908'),
(138, 6, 250.00, 1, '2820220703:000908');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `pedid_id` int(11) NOT NULL,
  `pedid_data` date NOT NULL,
  `pedid_hora` time NOT NULL,
  `pedid_cliente` int(11) NOT NULL,
  `pedid_codigo` varchar(50) NOT NULL,
  `pedid_referencia` varchar(50) NOT NULL,
  `forma_pagamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`pedid_id`, `pedid_data`, `pedid_hora`, `pedid_cliente`, `pedid_codigo`, `pedid_referencia`, `forma_pagamento`) VALUES
(70, '2022-06-27', '00:10:08', 3, '320220627:000608', '3220627:000608', ''),
(71, '2022-06-27', '00:11:44', 3, '320220627:000644', '3220627:000644', ''),
(72, '2022-06-27', '00:13:40', 3, '320220627:000640', '3220627:000640', ''),
(73, '2022-06-27', '00:14:22', 1, '120220627:000622', '1220627:000622', ''),
(74, '2022-06-27', '00:15:38', 1, '120220627:000638', '1220627:000638', ''),
(75, '2022-06-27', '00:35:49', 1, '120220627:000638', '1220627:000638', ''),
(76, '2022-06-27', '00:36:28', 1, '120220627:000638', '1220627:000638', ''),
(77, '2022-06-27', '00:37:29', 1, '120220627:000638', '1220627:000638', ''),
(78, '2022-06-27', '00:38:35', 1, '120220627:000638', '1220627:000638', ''),
(79, '2022-06-27', '00:41:59', 1, '120220627:000638', '1220627:000638', ''),
(80, '2022-06-27', '00:43:04', 1, '120220627:000638', '1220627:000638', ''),
(81, '2022-06-27', '00:43:59', 1, '120220627:000638', '1220627:000638', ''),
(82, '2022-06-27', '00:52:31', 1, '120220627:000631', '1220627:000631', ''),
(83, '2022-06-27', '00:53:05', 1, '120220627:000605', '1220627:000605', ''),
(84, '2022-06-27', '01:03:05', 1, '120220627:010605', '1220627:010605', ''),
(85, '2022-06-26', '20:04:08', 1, '120220627:010608', '1220627:010608', ''),
(86, '2022-06-26', '20:05:49', 1, '120220626:200649', '1220626:200649', ''),
(87, '2022-06-27', '19:52:57', 1, '120220627:195253', '1220627:195253', ''),
(88, '2022-07-03', '00:09:12', 28, '2820220703:000908', '28220703:000908', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prod_descri` text COLLATE utf8_unicode_ci NOT NULL,
  `prod_preco` decimal(10,2) NOT NULL,
  `prod_img` text COLLATE utf8_unicode_ci NOT NULL,
  `prod_categoria` int(11) NOT NULL,
  `prod_destaque` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_descri`, `prod_preco`, `prod_img`, `prod_categoria`, `prod_destaque`) VALUES
(1, 'Windows Desktop', 'Instalação e manutenção do Sistema Operacional Windows 7 ou superior. Realização de backup. Migração de dados.\r\nOtimização do sistema. ', '150.00', 'windows.png', 1, 'NÃO'),
(2, 'Windows Server', 'Serviço de instalação e manutenção em windows Server 2008 ou superior.\r\nHabilitação de serviços como DNS, DHCP, Active Directory.', '250.00', 'windows-server.png', 1, 'SIM'),
(3, 'Linux Server', 'Instalação e atualização de Servidores em distribuições tanto Debian como RedHat. Habilitação de Servidores Web Apache. Configuração de Firewall. Servidores proxy. Serviços Samba.', '250.00', 'linux-server.png', 1, 'SIM'),
(4, 'Programação em java, C++, C##', 'Desenvolvimento de projetos, aplicativos Desktop e mobiles em linguagems C, C++, C#, java. Integração com software de terceiros.', '350.00', 'java.png', 2, 'SIM'),
(5, 'Dev. back-end em Javascript e PHP', 'Desenvolvimento de sites dinâmicos com javascript, php. Desenvolvemos lojas virtuais integradas com as principais APIs do mercado.', '300.00', 'php.png', 2, 'NÃO'),
(6, 'Dev. front-end com css e html.', 'Desenvolvimento de front-end de sites com linguagem de marcação html e estilização com CSS.', '250.00', 'html.png', 2, 'NÃO'),
(7, 'Banco MYSQL', 'Instalação de um servidor MYSQL. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '250.00', 'mysql.png', 7, 'NÃO'),
(9, 'Banco Oracle', 'Instalação de um servidor ORACLE. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '350.00', 'oracle.png', 7, 'SIM'),
(10, 'Mongo DB', 'Instalação de um servidor MongoDB orientado a documentos. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '250.00', 'mongo.png', 7, 'SIM'),
(11, 'Banco Microsoft SQL', 'Instalação de um servidor Microsoft SQL. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '320.00', 'microsoftsql.png', 7, 'NÃO'),
(12, 'Desenvolvimento Mobile', 'Desenvolvimento de aplicativos mobile para android com a linguagme koklin', '290.00', 'mobile.png', 8, 'NÃO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categ_id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`client_id`);

--
-- Índices para tabela `itens_dos_pedidos`
--
ALTER TABLE `itens_dos_pedidos`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedid_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `itens_dos_pedidos`
--
ALTER TABLE `itens_dos_pedidos`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
