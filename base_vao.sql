/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 8.0.31 : Database - gestion_vente
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`gestion_vente` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `gestion_vente`;

/*Table structure for table `accompte` */

DROP TABLE IF EXISTS `accompte`;

CREATE TABLE `accompte` (
  `id_accompte` int NOT NULL AUTO_INCREMENT,
  `date_accompte` date DEFAULT NULL,
  `montant_accompte` int DEFAULT NULL,
  `id_revendeur` int DEFAULT NULL,
  `id_appro_rev` int DEFAULT NULL,
  PRIMARY KEY (`id_accompte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `accompte` */

/*Table structure for table `appro_mag` */

DROP TABLE IF EXISTS `appro_mag`;

CREATE TABLE `appro_mag` (
  `id_appro` int NOT NULL AUTO_INCREMENT,
  `date_appro` date DEFAULT NULL,
  `id_produit` int DEFAULT NULL,
  `id_magasin` int DEFAULT NULL,
  `quatite_appro` int DEFAULT NULL,
  PRIMARY KEY (`id_appro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `appro_mag` */

/*Table structure for table `appro_rev` */

DROP TABLE IF EXISTS `appro_rev`;

CREATE TABLE `appro_rev` (
  `id_revendeur` int DEFAULT NULL,
  `id_produit` int DEFAULT NULL,
  `quantite_achat` int DEFAULT NULL,
  `date_achat` date DEFAULT NULL,
  `id_magasin` int DEFAULT NULL,
  `id_appro_rev` int NOT NULL AUTO_INCREMENT,
  `id_fact` int DEFAULT NULL,
  PRIMARY KEY (`id_appro_rev`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `appro_rev` */

insert  into `appro_rev`(id_revendeur,id_produit,quantite_achat,date_achat,id_magasin,id_appro_rev,id_fact) values (1,1,8,'2024-02-12',1,1,1),(1,2,8,'2024-02-12',1,2,1);

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(255) DEFAULT NULL,
  `contact_client` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_client` varchar(255) DEFAULT NULL,
  `adresse_client` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `clients` */

insert  into `clients`(id_client,nom_client,contact_client,email_client,adresse_client) values (1,'Rakotoarisoa Andry','0346274489','rakotoarisoa.andriamparany@gmail.com','Lot: Ivf 92 Bis Ambodihady'),(2,'Rohajy','0348468776','johary@gmail.com','Miami'),(3,'Erick','0348627699','johary@gmail.com','Betongolo'),(4,'Fandresena','0342227469','fandresena@gmail.com','BETONGOLO');

/*Table structure for table `facture_client` */

DROP TABLE IF EXISTS `facture_client`;

CREATE TABLE `facture_client` (
  `id_fact_cli` int NOT NULL AUTO_INCREMENT,
  `id_client` int DEFAULT NULL,
  `date_facture_cli` date DEFAULT NULL,
  `montant_fact_cli` int DEFAULT NULL,
  `id_magasin` int DEFAULT NULL,
  PRIMARY KEY (`id_fact_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `facture_client` */

insert  into `facture_client`(id_fact_cli,id_client,date_facture_cli,montant_fact_cli,id_magasin) values (1,1,'2024-02-14',1000000,1);

/*Table structure for table `facture_rev` */

DROP TABLE IF EXISTS `facture_rev`;

CREATE TABLE `facture_rev` (
  `id_fact` int NOT NULL AUTO_INCREMENT,
  `id_revendeur` int DEFAULT NULL,
  `id_magasin` int DEFAULT NULL,
  `Montant_facture` int DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  PRIMARY KEY (`id_fact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `facture_rev` */

insert  into `facture_rev`(id_fact,id_revendeur,id_magasin,Montant_facture,date_facture) values (1,1,1,1000000,'2024-02-14');

/*Table structure for table `magasin` */

DROP TABLE IF EXISTS `magasin`;

CREATE TABLE `magasin` (
  `id_magasin` int NOT NULL AUTO_INCREMENT,
  `adresse_mag` varchar(255) DEFAULT NULL,
  `nom_responsable` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contact_mag` varchar(20) DEFAULT NULL,
  `email_mag` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_magasin`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `magasin` */

insert  into `magasin`(id_magasin,adresse_mag,nom_responsable,contact_mag,email_mag,photo) values (1,'Lot: IIH Ter Ambalakisoa','Rasamiarimanana','0345678992','rasamirimanana@gmail.com',NULL),(2,'Lot:189 BIS ANALAMANGA','Ramananarivo','0324346663','ramananarivo@gmail.com',NULL),(3,'ambato','jom','0348926922','jom@gmail.com','sary'),(4,'Ambatondrazaka','Mom','0322121223','mom@gmail.com','sary');

/*Table structure for table `produits` */

DROP TABLE IF EXISTS `produits`;

CREATE TABLE `produits` (
  `id_produit` int NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) DEFAULT NULL,
  `dimension` varchar(30) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `description` text,
  `prix_gros` int DEFAULT NULL,
  `prix_detail` int DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `produits` */

insert  into `produits`(id_produit,nom_produit,dimension,couleur,description,prix_gros,prix_detail) values (1,'Matelas blanc','180*90*6','Blanc',NULL,200000,210000),(2,'Matelas raillure','180*90*6','Rouge',NULL,200000,210000);

/*Table structure for table `revendeurs` */

DROP TABLE IF EXISTS `revendeurs`;

CREATE TABLE `revendeurs` (
  `id_revendeur` int NOT NULL AUTO_INCREMENT,
  `nom_revendeur` varchar(255) DEFAULT NULL,
  `adresse_rev` varchar(255) DEFAULT NULL,
  `contact_rev` varchar(20) DEFAULT NULL,
  `email_rev` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_revendeur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `revendeurs` */

insert  into `revendeurs`(id_revendeur,nom_revendeur,adresse_rev,contact_rev,email_rev) values (1,'Valahara','Lot:IVJ 167 Bis Ambodin\'isotry','0345526626','valahara@gmail.com'),(2,'Soamalandy','Lot:IVG 289 Ter Ankadinomby','0325566277','soamalandy@gmail.com'),(3,'Ravalomanana','Lot IVF 78 lalana','03478282882','ravalo@gmail.com');

/*Table structure for table `ventes` */

DROP TABLE IF EXISTS `ventes`;

CREATE TABLE `ventes` (
  `id_vente` int NOT NULL AUTO_INCREMENT,
  `id_produit` int DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `id_magasin` int DEFAULT NULL,
  `quantite_vente` int DEFAULT NULL,
  `date_vente` date DEFAULT NULL,
  `type_vente` varchar(20) DEFAULT NULL,
  `cadeaux` int DEFAULT NULL,
  `id_fact_cli` int DEFAULT NULL,
  PRIMARY KEY (`id_vente`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `ventes` */

insert  into `ventes`(id_vente,id_produit,id_client,id_magasin,quantite_vente,date_vente,type_vente,cadeaux,id_fact_cli) values (1,1,1,1,3,'2024-04-02','En gros',NULL,1),(4,2,1,1,7,'2024-04-02','En Gros',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
