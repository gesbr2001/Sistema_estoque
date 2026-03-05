-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 05/03/2026 às 20:20
-- Versão do servidor: 8.0.45
-- Versão do PHP: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2026-02-19-124151', 'App\\Database\\Migrations\\CreateUsuarios', 'default', 'App', 1772737675, 1),
(2, '2026-02-19-124216', 'App\\Database\\Migrations\\CreateRequisicoes', 'default', 'App', 1772737675, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `requisicoes`
--

CREATE TABLE `requisicoes` (
  `id` int NOT NULL,
  `numero_requisicao` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `destinatario` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `grupo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_requisicao` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `centro_custo` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Protocolo',
  `responsavel_triagem` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observacao_protocolo` text COLLATE utf8mb4_general_ci,
  `data_protocolo` datetime DEFAULT NULL,
  `prioridade` enum('Urgente','Não Urgente') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observacao_triagem` text COLLATE utf8mb4_general_ci,
  `data_triagem` datetime DEFAULT NULL,
  `colaborador_separacao` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_inicio_separacao` datetime DEFAULT NULL,
  `qtd_itens` int DEFAULT NULL,
  `itens_divergentes` tinyint(1) NOT NULL DEFAULT '0',
  `descricao_divergencia` text COLLATE utf8mb4_general_ci,
  `conferente` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `observacao_conferencia` text COLLATE utf8mb4_general_ci,
  `data_conferencia` datetime DEFAULT NULL,
  `qtd_volume` int DEFAULT NULL,
  `placa_carro` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `motorista` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_saida` datetime DEFAULT NULL,
  `observacao_expedicao` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `perfil` enum('admin','farmaceutico_cliente','farmaceutico_empresa','separador','conferidor','expedicao') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_requisicao` (`numero_requisicao`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
