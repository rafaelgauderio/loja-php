-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2022 às 05:48
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
  `client_nome` varchar(100) NOT NULL,
  `client_email` varchar(80) NOT NULL,
  `client_endereco` varchar(150) DEFAULT NULL,
  `client_numero` int(6) DEFAULT NULL,
  `client_bairro` varchar(80) DEFAULT NULL,
  `client_cidade` varchar(80) DEFAULT NULL,
  `cliente_uf` varchar(2) DEFAULT NULL,
  `cliente_cep` varchar(80) DEFAULT NULL,
  `client_telefone` varchar(12) DEFAULT NULL,
  `cliente_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(84, 4, 350.00, 1, 'sessao_rafael_deluca'),
(85, 2, 250.00, 1, 'sessao_rafael_deluca'),
(86, 4, 350.00, 1, 'sessao_rafael_deluca'),
(87, 2, 250.00, 1, 'sessao_rafael_deluca'),
(88, 12, 290.00, 1, 'sessao_rafael_deluca'),
(89, 4, 350.00, 1, 'sessao_rafael_deluca'),
(90, 2, 250.00, 2, 'sessao_rafael_deluca'),
(91, 12, 290.00, 1, 'sessao_rafael_deluca'),
(92, 3, 250.00, 1, '9666231f5ee0a086d3eee1a5ec03e587'),
(93, 12, 290.00, 1, '9666231f5ee0a086d3eee1a5ec03e587');

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
(45, '2022-06-17', '05:16:47', 50, 'sessao_rafael_deluca', 'ref_item_5415', ''),
(46, '2022-06-17', '05:19:28', 50, 'sessao_rafael_deluca', 'ref_item_5415', ''),
(47, '2022-06-17', '05:36:36', 50, 'sessao_rafael_deluca', 'ref_item_5415', ''),
(48, '2022-06-17', '05:38:52', 50, '9666231f5ee0a086d3eee1a5ec03e587', 'ref_item_5415', '');

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
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itens_dos_pedidos`
--
ALTER TABLE `itens_dos_pedidos`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
