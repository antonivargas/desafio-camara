-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.40-0ubuntu0.14.04.1 - (Ubuntu)
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              8.3.0.4781
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela cvcamara.avaliacao
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id_user` int(10) NOT NULL,
  `id_proposicao` int(10) NOT NULL,
  `nota` smallint(1) DEFAULT NULL,
  `data_hora_avaliacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`,`id_proposicao`),
  KEY `FK_avaliacao_proposicao` (`id_proposicao`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `FK_avaliacao_proposicao` FOREIGN KEY (`id_proposicao`) REFERENCES `proposicao` (`id_db`),
  CONSTRAINT `FK_avaliacao_usuarios` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cvcamara.proposicao
CREATE TABLE IF NOT EXISTS `proposicao` (
  `id_db` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `id_tipo_proposicao` int(10) DEFAULT NULL,
  `sigla` varchar(20) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `ano` year(4) DEFAULT NULL,
  `id_orgao_num` varchar(20) DEFAULT NULL,
  `sigla_orgao_num` varchar(50) DEFAULT NULL,
  `data_apresentacao` varchar(50) DEFAULT NULL,
  `txt_ementa` longtext,
  `explicacao_ementa` longtext,
  `cod_regime` int(10) DEFAULT NULL,
  `txt_regime` longtext,
  `id_apreciacao` int(10) DEFAULT NULL,
  `txt_apreciacao` text,
  `nome_autor` varchar(200) DEFAULT NULL,
  `id_cadastro` int(10) DEFAULT NULL,
  `cod_partido` int(10) DEFAULT NULL,
  `sigla_partido` varchar(50) DEFAULT NULL,
  `sigla_uf` varchar(50) DEFAULT NULL,
  `qtd_autores` int(10) DEFAULT NULL,
  `data_despacho` varchar(50) DEFAULT NULL,
  `txt_despacho` longtext,
  `id_situacao` int(10) DEFAULT NULL,
  `situacao_desc` varchar(200) DEFAULT NULL,
  `cod_orgao_estado` varchar(100) DEFAULT NULL,
  `sigla_orgao_estado` varchar(50) DEFAULT NULL,
  `cod_proposicao_principal` int(10) DEFAULT NULL,
  `proposicao_principal` longtext,
  `ind_genero` char(4) DEFAULT NULL,
  `qtd_orgaos_com_estado` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_db`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela cvcamara.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `termos` char(1) DEFAULT 'S',
  `tipo` enum('A','U') DEFAULT 'U',
  `bloqueado` enum('Y','N') NOT NULL DEFAULT 'N',
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
