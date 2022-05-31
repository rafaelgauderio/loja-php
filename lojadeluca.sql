-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2022 às 23:52
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
(7, 'DataBase');

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
  `prod_destaque` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_descri`, `prod_preco`, `prod_img`, `prod_categoria`, `prod_destaque`) VALUES
(1, 'Windows Desktop', 'Instalação e manutenção do Sistema Operacional Windows 7 ou superior. Realização de backup. Migração de dados.\r\nOtimização do sistema. ', '150.00', 'windows.png', 1, '1'),
(2, 'Windows Server', 'Serviço de instalação e manutenção em windows Server 2008 ou superior.\r\nHabilitação de serviços como DNS, DHCP, Active Directory.', '250.00', 'windows-server.png', 1, '1'),
(3, 'Linux Server', 'Instalação e atualização de Servidores em distribuições tanto Debian como RedHat. Habilitação de Servidores Web Apache. Configuração de Firewall. Servidores proxy. Serviços Samba.', '250.00', 'linux-server.png', 1, '0'),
(4, 'Programação em java, C++, C##', 'Desenvolvimento de projetos, aplicativos Desktop e mobiles em linguagems C, C++, C#, java. Integração com software de terceiros.', '350.00', 'java.png', 2, '1'),
(5, 'Dev. back-end em Javascript e PHP', 'Desenvolvimento de sites dinâmicos com javascript, php. Desenvolvemos lojas virtuais integradas com as principais APIs do mercado.', '300.00', 'php.png', 2, '0'),
(6, 'Dev. front-end com css e html.', 'Desenvolvimento de front-end de sites com linguagem de marcação html e estilização com CSS.', '250.00', 'html.png', 2, '0'),
(7, 'Banco MYSQL', 'Instalação de um servidor MYSQL. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '250.00', 'mysql.png', 7, '0'),
(9, 'Banco Oracle', 'Instalação de um servidor ORACLE. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '350.00', 'oracle.png', 7, '0'),
(10, 'Mongo DB', 'Instalação de um servidor MongoDB orientado a documentos. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '250.00', 'mongo.png', 7, '1'),
(11, 'Banco Microsoft SQL', 'Instalação de um servidor Microsoft SQL. Criação e otimização de consultas, tabelas, procedures, functions, triggers. Migração de dados para nuvem.', '320.00', 'microsoftsql.png', 7, '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categ_id`);

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
  MODIFY `categ_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
