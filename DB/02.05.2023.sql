-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           Microsoft SQL Server 2022 (RTM-GDR) (KB5021522) - 16.0.1050.5
-- OS do Servidor:               Windows 10 Pro 10.0 <X64> (Build 22621: )
-- HeidiSQL Versão:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para lab_ti_aec
CREATE DATABASE IF NOT EXISTS "lab_ti_aec";
USE "lab_ti_aec";

-- Copiando estrutura para tabela lab_ti_aec.usuarios
CREATE TABLE IF NOT EXISTS "usuarios" (
	"id_usuario" INT NOT NULL,
	"login_usuario" VARCHAR(45) NOT NULL COLLATE 'Latin1_General_CI_AS',
	"senha_usuario" VARCHAR(45) NOT NULL COLLATE 'Latin1_General_CI_AS',
	"nivel_usuario" INT NOT NULL,
	"id_funcionario" INT NOT NULL,
	"matricula" INT NOT NULL,
	PRIMARY KEY ("id_usuario")
);

-- Copiando dados para a tabela lab_ti_aec.usuarios: 2 rows
/*!40000 ALTER TABLE "usuarios" DISABLE KEYS */;
INSERT INTO "usuarios" ("id_usuario", "login_usuario", "senha_usuario", "nivel_usuario", "id_funcionario", "matricula") VALUES
	(1, 'n.yann.ramos', '36e1a5072c78359066ed7715f5ff3da8', 3, 0, 215720),
	(2, 'test', '36e1a5072c78359066ed7715f5ff3da8', 2, 0, 212121);
/*!40000 ALTER TABLE "usuarios" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
