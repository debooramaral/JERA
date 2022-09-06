-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Ago-2022 às 20:59
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jera`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brinde`
--

CREATE TABLE `brinde` (
  `id_brinde` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fk_br_usuario` int(11) NOT NULL,
  `fk_objeto_brinde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_brinde`
--

CREATE TABLE `entrada_brinde` (
  `id_entrada_brinde` int(11) NOT NULL,
  `data_entrada_brinde` date NOT NULL,
  `quantidade_entrada` int(11) NOT NULL,
  `fk_en_brinde` int(11) NOT NULL,
  `fk_referencia_objeto_brinde_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Acionadores `entrada_brinde`
--
DELIMITER $$
CREATE TRIGGER `trg_entrada_brinde` AFTER INSERT ON `entrada_brinde` FOR EACH ROW BEGIN 
     UPDATE brinde SET quantidade = quantidade + NEW.quantidade_entrada 
	 WHERE fk_objeto_brinde = NEW.fk_referencia_objeto_brinde_entrada;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id_equipamento` int(11) NOT NULL,
  `cod_patrimonio` int(5) DEFAULT NULL,
  `descricao` varchar(100) NOT NULL,
  `fk_status` int(11) NOT NULL,
  `fk_objeto_equipamento` int(11) NOT NULL,
  `fk_estado_conservacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_conservacao`
--

CREATE TABLE `estado_conservacao` (
  `id_estado_conservacao` int(11) NOT NULL,
  `estado_conservacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kits`
--

CREATE TABLE `kits` (
  `id_kits` int(11) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `fk_brinde` int(11) NOT NULL,
  `fk_kt_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objeto_brinde`
--

CREATE TABLE `objeto_brinde` (
  `id_objeto_brinde` int(11) NOT NULL,
  `nome_objeto_brinde` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objeto_equipamento`
--

CREATE TABLE `objeto_equipamento` (
  `id_objeto_equipamento` int(11) NOT NULL,
  `nome_objeto_equipamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_equipamento`
--

CREATE TABLE `pedido_equipamento` (
  `id_pedido` int(11) NOT NULL,
  `dia_solicitacao` date NOT NULL,
  `escricao_pedido` varchar(100) NOT NULL,
  `validacao` tinyint(1) DEFAULT NULL,
  `fk_equipamento` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `id_perfil_usuario` int(11) NOT NULL,
  `nivel_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_brinde`
--

CREATE TABLE `saida_brinde` (
  `id_saida_brinde` int(11) NOT NULL,
  `data_saida` date NOT NULL,
  `quantidade_saida` int(11) NOT NULL,
  `fk_s_brinde` int(11) NOT NULL,
  `fk_referencia_objeto_brinde_saida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Acionadores `saida_brinde`
--
DELIMITER $$
CREATE TRIGGER `trg_saida_brinde` AFTER INSERT ON `saida_brinde` FOR EACH ROW BEGIN 
     UPDATE brinde SET quantidade = quantidade - NEW.quantidade_saida 
WHERE fk_objeto_brinde = NEW.fk_referencia_objeto_brinde_saida;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_kit`
--

CREATE TABLE `saida_kit` (
  `id_saida_kit` int(11) NOT NULL,
  `data_saida_kit` date NOT NULL,
  `fk_kits` int(11) NOT NULL,
  `fk_kts_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_equipamento`
--

CREATE TABLE `status_equipamento` (
  `id_status_equipamento` int(11) NOT NULL,
  `status_equipamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `telefone` bigint(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ativo_inativo` tinyint(1) NOT NULL,
  `fk_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `brinde`
--
ALTER TABLE `brinde`
  ADD PRIMARY KEY (`id_brinde`),
  ADD KEY `fk_br_usuario` (`fk_br_usuario`),
  ADD KEY `fk_objeto_brinde` (`fk_objeto_brinde`);

--
-- Índices para tabela `entrada_brinde`
--
ALTER TABLE `entrada_brinde`
  ADD PRIMARY KEY (`id_entrada_brinde`),
  ADD KEY `fk_en_brinde` (`fk_en_brinde`),
  ADD KEY `fk_referencia_objeto_brinde_entrada` (`fk_referencia_objeto_brinde_entrada`);

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`),
  ADD KEY `fk_status` (`fk_status`),
  ADD KEY `fk_objeto_equipamento` (`fk_objeto_equipamento`),
  ADD KEY `fk_estado_conservacao` (`fk_estado_conservacao`);

--
-- Índices para tabela `estado_conservacao`
--
ALTER TABLE `estado_conservacao`
  ADD PRIMARY KEY (`id_estado_conservacao`);

--
-- Índices para tabela `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`id_kits`),
  ADD KEY `fk_brinde` (`fk_brinde`),
  ADD KEY `fk_kt_usuario` (`fk_kt_usuario`);

--
-- Índices para tabela `objeto_brinde`
--
ALTER TABLE `objeto_brinde`
  ADD PRIMARY KEY (`id_objeto_brinde`);

--
-- Índices para tabela `objeto_equipamento`
--
ALTER TABLE `objeto_equipamento`
  ADD PRIMARY KEY (`id_objeto_equipamento`);

--
-- Índices para tabela `pedido_equipamento`
--
ALTER TABLE `pedido_equipamento`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_equipamento` (`fk_equipamento`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Índices para tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`id_perfil_usuario`);

--
-- Índices para tabela `saida_brinde`
--
ALTER TABLE `saida_brinde`
  ADD PRIMARY KEY (`id_saida_brinde`),
  ADD KEY `fk_s_brinde` (`fk_s_brinde`),
  ADD KEY `fk_referencia_objeto_brinde_saida` (`fk_referencia_objeto_brinde_saida`);

--
-- Índices para tabela `saida_kit`
--
ALTER TABLE `saida_kit`
  ADD PRIMARY KEY (`id_saida_kit`),
  ADD KEY `fk_kts_usuario` (`fk_kts_usuario`),
  ADD KEY `fk_kits` (`fk_kits`);

--
-- Índices para tabela `status_equipamento`
--
ALTER TABLE `status_equipamento`
  ADD PRIMARY KEY (`id_status_equipamento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_perfil_usuario` (`fk_perfil`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brinde`
--
ALTER TABLE `brinde`
  MODIFY `id_brinde` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entrada_brinde`
--
ALTER TABLE `entrada_brinde`
  MODIFY `id_entrada_brinde` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado_conservacao`
--
ALTER TABLE `estado_conservacao`
  MODIFY `id_estado_conservacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `kits`
--
ALTER TABLE `kits`
  MODIFY `id_kits` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objeto_brinde`
--
ALTER TABLE `objeto_brinde`
  MODIFY `id_objeto_brinde` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objeto_equipamento`
--
ALTER TABLE `objeto_equipamento`
  MODIFY `id_objeto_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido_equipamento`
--
ALTER TABLE `pedido_equipamento`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `id_perfil_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saida_brinde`
--
ALTER TABLE `saida_brinde`
  MODIFY `id_saida_brinde` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saida_kit`
--
ALTER TABLE `saida_kit`
  MODIFY `id_saida_kit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status_equipamento`
--
ALTER TABLE `status_equipamento`
  MODIFY `id_status_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `brinde`
--
ALTER TABLE `brinde`
  ADD CONSTRAINT `fk_br_usuario` FOREIGN KEY (`fk_br_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `fk_objeto_brinde` FOREIGN KEY (`fk_objeto_brinde`) REFERENCES `objeto_brinde` (`id_objeto_brinde`);

--
-- Limitadores para a tabela `entrada_brinde`
--
ALTER TABLE `entrada_brinde`
  ADD CONSTRAINT `fk_en_brinde` FOREIGN KEY (`fk_en_brinde`) REFERENCES `brinde` (`id_brinde`),
  ADD CONSTRAINT `fk_referencia_objeto_brinde_entrada` FOREIGN KEY (`fk_referencia_objeto_brinde_entrada`) REFERENCES `objeto_brinde` (`id_objeto_brinde`);

--
-- Limitadores para a tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `fk_estado_conservacao` FOREIGN KEY (`fk_estado_conservacao`) REFERENCES `estado_conservacao` (`id_estado_conservacao`),
  ADD CONSTRAINT `fk_objeto_equipamento` FOREIGN KEY (`fk_objeto_equipamento`) REFERENCES `objeto_equipamento` (`id_objeto_equipamento`),
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`fk_status`) REFERENCES `status_equipamento` (`id_status_equipamento`);

--
-- Limitadores para a tabela `kits`
--
ALTER TABLE `kits`
  ADD CONSTRAINT `fk_brinde` FOREIGN KEY (`fk_brinde`) REFERENCES `brinde` (`id_brinde`),
  ADD CONSTRAINT `fk_kt_usuario` FOREIGN KEY (`fk_kt_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `pedido_equipamento`
--
ALTER TABLE `pedido_equipamento`
  ADD CONSTRAINT `fk_equipamento` FOREIGN KEY (`fk_equipamento`) REFERENCES `equipamento` (`id_equipamento`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `saida_brinde`
--
ALTER TABLE `saida_brinde`
  ADD CONSTRAINT `fk_referencia_objeto_brinde_saida` FOREIGN KEY (`fk_referencia_objeto_brinde_saida`) REFERENCES `objeto_brinde` (`id_objeto_brinde`),
  ADD CONSTRAINT `fk_s_brinde` FOREIGN KEY (`fk_s_brinde`) REFERENCES `brinde` (`id_brinde`);

--
-- Limitadores para a tabela `saida_kit`
--
ALTER TABLE `saida_kit`
  ADD CONSTRAINT `fk_kits` FOREIGN KEY (`fk_kits`) REFERENCES `kits` (`id_kits`),
  ADD CONSTRAINT `fk_kts_usuario` FOREIGN KEY (`fk_kts_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_perfil_usuario` FOREIGN KEY (`fk_perfil`) REFERENCES `perfil_usuario` (`id_perfil_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
