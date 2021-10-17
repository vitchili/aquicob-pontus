/*
SQLyog Ultimate
MySQL - 5.7.24 : Database - pontus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pontus` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pontus`;

/*Table structure for table `tb_autenticacao` */

DROP TABLE IF EXISTS `tb_autenticacao`;

CREATE TABLE `tb_autenticacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `tipo_acesso` enum('G','C') DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `ativo_inativo` enum('0','1') DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tb_autenticacao` */

insert  into `tb_autenticacao`(`id`,`nome`,`email`,`senha`,`tipo_acesso`,`cpf`,`telefone`,`data_admissao`,`ativo_inativo`,`status`) values 
(1,'Gestor 1','gestor1@gmail.com','202cb962ac59075b964b07152d234b70','G','12426117621','31994502549','2021-10-15','1','1'),
(2,'Colaborador 1','colab1@gmail.com','202cb962ac59075b964b07152d234b70','C','12345678910','31999999999','2021-10-13','1','1'),
(3,'Colaborador 2','colab2@gmail.com','202cb962ac59075b964b07152d234b70','C','10987654321','31999999999','2021-10-07','1','1');

/*Table structure for table `tb_marcacao_ponto` */

DROP TABLE IF EXISTS `tb_marcacao_ponto`;

CREATE TABLE `tb_marcacao_ponto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) DEFAULT NULL,
  `entrada_saida` enum('E','S') DEFAULT NULL,
  `observacao` varchar(150) DEFAULT NULL,
  `cadastrado_em` datetime DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tb_marcacao_ponto` */

insert  into `tb_marcacao_ponto`(`id`,`usuario`,`entrada_saida`,`observacao`,`cadastrado_em`,`status`) values 
(1,2,'E','teste','2021-10-16 21:32:08','1'),
(2,2,'S','teste saida','2021-10-16 21:33:34','1'),
(3,2,'E','teste','2021-10-17 12:17:43','1'),
(4,2,'S','','2021-10-17 12:17:56','1'),
(5,3,'E','','2021-10-17 13:02:22','1'),
(6,2,'E','entrada almoco','2021-10-17 13:53:36','1');

/*Table structure for table `tb_tipo_acesso` */

DROP TABLE IF EXISTS `tb_tipo_acesso`;

CREATE TABLE `tb_tipo_acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` char(1) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_tipo_acesso` */

insert  into `tb_tipo_acesso`(`id`,`sigla`,`descricao`) values 
(1,'G','Gestor'),
(2,'C','Colaborador');

/*Table structure for table `tb_tipo_entrada_saida` */

DROP TABLE IF EXISTS `tb_tipo_entrada_saida`;

CREATE TABLE `tb_tipo_entrada_saida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` char(1) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_tipo_entrada_saida` */

insert  into `tb_tipo_entrada_saida`(`id`,`sigla`,`descricao`) values 
(1,'E','Entrada'),
(2,'S','Saída');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
