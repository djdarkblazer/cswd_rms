-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cswd_db
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `coa_activities`
--

DROP TABLE IF EXISTS `coa_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coa_activities` (
  `coa_id` int(11) NOT NULL AUTO_INCREMENT,
  `coa_date` date NOT NULL,
  `coa_name` varchar(100) NOT NULL,
  PRIMARY KEY (`coa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coa_activities`
--

LOCK TABLES `coa_activities` WRITE;
/*!40000 ALTER TABLE `coa_activities` DISABLE KEYS */;
INSERT INTO `coa_activities` VALUES (9,'2021-05-27','Pachoca Solo Parents & SEA-K Members'),(10,'2021-05-01','BARANGAYanihan AYUDA'),(11,'2021-04-26','Book Launching : MAGANDANG UGALI PARA SA MAGANDANG BUHAY'),(12,'2021-03-10','Solo Parenting in Times of Pandemic: LGU Support and Advocacy Campaign'),(13,'2021-03-09','Isang Araw para sa mga May Kapansanan');
/*!40000 ALTER TABLE `coa_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_backup`
--

DROP TABLE IF EXISTS `form_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_backup` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_name` varchar(100) NOT NULL,
  `backup_file` varchar(100) NOT NULL,
  `backup_date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_backup`
--

LOCK TABLES `form_backup` WRITE;
/*!40000 ALTER TABLE `form_backup` DISABLE KEYS */;
INSERT INTO `form_backup` VALUES (2,'data2','Book1.xlsx','2021-07-04');
/*!40000 ALTER TABLE `form_backup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_info`
--

DROP TABLE IF EXISTS `form_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_date` date NOT NULL,
  `info_title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info_information` text NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_info`
--

LOCK TABLES `form_info` WRITE;
/*!40000 ALTER TABLE `form_info` DISABLE KEYS */;
INSERT INTO `form_info` VALUES (3,'2021-06-17','Araw ng Pagtatapos','200940866_326724855627594_8857819518149216418_n.jpg','<h1><strong>Araw ng Pagtatapos<img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t25/1/16/1f393.png\" width=\"16\" /><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t25/1/16/1f393.png\" width=\"16\" /></strong></h1>\r\n\r\n<p><strong>202 Benepisyaryo ng Pantawid Pamilyang Pilipino Program</strong></p>\r\n\r\n<p><strong><a href=\"https://www.facebook.com/hashtag/samasamangpagsulongtungosamatatagnakinabukasan?__eep__=6&amp;__cft__[0]=AZU0ijjaL96IfcZHRj_EZkxOH_vWDxcbOg2pSEDRumPHH-O_d4w09mrf0m1XjmMr_ELkXicaDdSyOkbjjxCK6rXzDua8qZHTory_qdXl0fz5wZokh3GS5jxdjFGHcBF3olT7oTsoyl5eAHm8KmVYsaqh&amp;__tn__=*NK-R\">#SamaSamangPagsulongTungoSaMatatagNaKinabukasan</a></strong></p>\r\n\r\n<p><strong><a href=\"https://www.facebook.com/hashtag/4ps?__eep__=6&amp;__cft__[0]=AZU0ijjaL96IfcZHRj_EZkxOH_vWDxcbOg2pSEDRumPHH-O_d4w09mrf0m1XjmMr_ELkXicaDdSyOkbjjxCK6rXzDua8qZHTory_qdXl0fz5wZokh3GS5jxdjFGHcBF3olT7oTsoyl5eAHm8KmVYsaqh&amp;__tn__=*NK-R\">#4Ps</a></strong></p>\r\n'),(4,'2021-06-12','123rd PHILIPPINE INDEPENDENCE DAY','197013180_323569392609807_3392812444388980501_n.jpg','<h1>123rd PHILIPPINE INDEPENDENCE DAY</h1>\r\n'),(5,'2021-05-27','Monitoring of Livelihood Projects','191683450_314236253543121_2197843945755776156_n.jpg','<h1>Monitoring of livelihood projects</h1>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/pachocasoloparents?__eep__=6&amp;__cft__[0]=AZVLzYpP3JUZqI9IEkrbp72-lThvO8MbqkHmjH6TY9ON94nKoWwzRphW8wydx07Xa79SEMPM5PYoBBPJq_s4W0jkkSM9s5r7gRVrhzINPBqPFZoK7sLIo2oVcXyScyUrC_0vZMT39oEDsN_sycjWbXqZ&amp;__tn__=*NK-R\">#PachocaSoloParents</a>&amp;SEA-K members</p>\r\n'),(7,'2021-05-01','CALAPAN CPS','179788798_297737745192972_7896882963479355699_n.jpg','<p>On May 01, 2021, 8:00 am personnel of CALAPAN CPS under the supervision of PLTCOL TIMOTEO ESPIRITU JR.,together with CSWD Officer Madam JUVY L. BAHIA,RSW and Barangay Officials conducted BARANGAYanihan at Brgy. WAWA and</p>\r\n\r\n<p>Brgy. MAHAL NA PANGALAN Calapan City Oriental Mindoro</p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/barangayanihan?__eep__=6&amp;__cft__[0]=AZUAl9twrD0lKwv5k83akSZdXtbY1JJRPj2bom3-YINV5wzpaitodGSN1y-KxZd2vvoE97l7Nr23Wra8FJaFAjhXglNkGJC3wq3xU-QemWpRU3hlmcmeXheUwzyr5C0gZX9xok7Nqpfm_KVb1J9ytupl&amp;__tn__=*NK-R\">#BARANGAYanihan</a> <img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" width=\"16\" /><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" width=\"16\" /><img alt=\"????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" width=\"16\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/hashtag/projectpacs?__eep__=6&amp;__cft__[0]=AZUAl9twrD0lKwv5k83akSZdXtbY1JJRPj2bom3-YINV5wzpaitodGSN1y-KxZd2vvoE97l7Nr23Wra8FJaFAjhXglNkGJC3wq3xU-QemWpRU3hlmcmeXheUwzyr5C0gZX9xok7Nqpfm_KVb1J9ytupl&amp;__tn__=*NK-R\">#ProjectPACS</a><img alt=\"???????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t29/1/16/1f46e_200d_2640.png\" width=\"16\" /><img alt=\"???????\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2b/1/16/1f46e_200d_2642.png\" width=\"16\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For more Info Visit our Facebook Page :&nbsp;<a href=\"https://www.facebook.com/permalink.php?story_fbid=297739321859481&amp;id=107102580923157&amp;__cft__[0]=AZUAl9twrD0lKwv5k83akSZdXtbY1JJRPj2bom3-YINV5wzpaitodGSN1y-KxZd2vvoE97l7Nr23Wra8FJaFAjhXglNkGJC3wq3xU-QemWpRU3hlmcmeXheUwzyr5C0gZX9xok7Nqpfm_KVb1J9ytupl&amp;__tn__=%2CO%2CP-R\">CSWD CALAPAN</a></p>\r\n');
/*!40000 ALTER TABLE `form_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_pwd`
--

DROP TABLE IF EXISTS `form_pwd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_pwd` (
  `pwd_id` int(11) NOT NULL AUTO_INCREMENT,
  `pwd_lname` varchar(30) NOT NULL,
  `pwd_fname` varchar(30) NOT NULL,
  `pwd_mname` varchar(20) NOT NULL,
  `pwd_sex` varchar(10) NOT NULL,
  `pwd_typedis` varchar(50) NOT NULL,
  `pwd_typespecify` varchar(50) NOT NULL,
  `pwd_causedis` varchar(50) NOT NULL,
  `pwd_address` varchar(100) NOT NULL,
  `pwd_region` varchar(20) NOT NULL,
  `pwd_province` varchar(100) NOT NULL,
  `pwd_city` varchar(50) NOT NULL,
  `pwd_brgy` varchar(100) NOT NULL,
  `pwd_landline` varchar(30) NOT NULL,
  `pwd_mobilenum` varchar(20) NOT NULL,
  `pwd_email` varchar(30) NOT NULL,
  `pwd_dob` date NOT NULL,
  `pwd_civilstatus` varchar(20) NOT NULL,
  `pwd_educational` varchar(50) NOT NULL,
  `pwd_empstatus` varchar(50) NOT NULL,
  `pwd_empnature` varchar(50) NOT NULL,
  `pwd_emptype` varchar(30) NOT NULL,
  `pwd_occupation` varchar(50) NOT NULL,
  `pwd_cperson` varchar(30) NOT NULL,
  `pwd_cnumber` varchar(20) NOT NULL,
  `pwd_idnum` varchar(50) NOT NULL,
  `pwdf_lname` varchar(50) NOT NULL,
  `pwdf_fname` varchar(20) NOT NULL,
  `pwdf_mname` varchar(20) NOT NULL,
  `pwdm_lname` varchar(50) NOT NULL,
  `pwdm_fname` varchar(20) NOT NULL,
  `pwdm_mname` varchar(20) NOT NULL,
  `pwdg_lname` varchar(50) NOT NULL,
  `pwdg_fname` varchar(20) NOT NULL,
  `pwdg_mname` varchar(20) NOT NULL,
  `pwdab_lname` varchar(50) NOT NULL,
  `pwdab_fname` varchar(20) NOT NULL,
  `pwdab_mname` varchar(20) NOT NULL,
  `pwdru_lname` varchar(50) NOT NULL,
  `pwdru_fname` varchar(20) NOT NULL,
  `pwdru_mname` varchar(20) NOT NULL,
  `pwd_signature` varchar(30) NOT NULL,
  `request_status` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`pwd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_pwd`
--

LOCK TABLES `form_pwd` WRITE;
/*!40000 ALTER TABLE `form_pwd` DISABLE KEYS */;
INSERT INTO `form_pwd` VALUES (6,'Butones','Macar Angelo','Antiola','Male','Mental/Pyschosocial Disability','none','Due to Accident','Quezon Drive','MIMAROPA','Oriental Mindoro','Calapan City','Ibaba East','286-7766','09518695595','deejaydarkblazer@gmail.com','1996-08-12','Single','College Level','Employed','Government','Contractual','Janitor','Carmen Butones','09202310815','112233','','','','','','','','','','','','','','','','MACAR ANGELO A BUTONES','Incomplete','idpicture.jpg'),(8,'Alvarez','Jessica','Cusi','Female','Communication Disability','none','Due to Accident','Lopez Kalye Street','MIMAROPA','Oriental Mindoro','Calapan City','Putingtubig','286-7766','09518695595','deejaydarkblazer@gmail.com','1990-03-11','Single','College Graduate','Unemployed','Government','Contractual','Teacher','Carmen Butones','09202310815','1546822','QWE','QWE','QWE','','','','','','','','','','ASD','ASD','ASD','JESSICA CUSI ALVAREZ','Pending','idpicgirl.jpg');
/*!40000 ALTER TABLE `form_pwd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_soloparent`
--

DROP TABLE IF EXISTS `form_soloparent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_soloparent` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_fullname` varchar(100) NOT NULL,
  `sp_age` int(11) NOT NULL,
  `sp_sex` varchar(20) NOT NULL,
  `sp_dob` date NOT NULL,
  `sp_pob` varchar(100) NOT NULL,
  `sp_address` varchar(100) NOT NULL,
  `sp_email` varchar(50) NOT NULL,
  `sp_mobilenum` varchar(20) NOT NULL,
  `sp_educational` varchar(100) NOT NULL,
  `sp_occupation` varchar(100) NOT NULL,
  `sp_monthlyincome` varchar(100) NOT NULL,
  `spfc_fullname` varchar(100) NOT NULL,
  `spfc_relationship` varchar(100) NOT NULL,
  `spfc_age` int(11) NOT NULL,
  `spfc_status` varchar(50) NOT NULL,
  `spfc_dob` date NOT NULL,
  `spfc_educational` varchar(100) NOT NULL,
  `spfc_occupation` varchar(100) NOT NULL,
  `spfc_monthlyincome` varchar(100) NOT NULL,
  `spfc_fullname_two` varchar(100) NOT NULL,
  `spfc_relationship_two` varchar(100) NOT NULL,
  `spfc_age_two` varchar(100) NOT NULL,
  `spfc_status_two` varchar(50) NOT NULL,
  `spfc_dob_two` date NOT NULL,
  `spfc_educational_two` varchar(100) NOT NULL,
  `spfc_occupation_two` varchar(255) NOT NULL,
  `spfc_monthlyincome_two` varchar(50) NOT NULL,
  `spfc_fullname_three` varchar(100) NOT NULL,
  `spfc_relationship_three` varchar(50) NOT NULL,
  `spfc_age_three` varchar(20) NOT NULL,
  `spfc_status_three` varchar(20) NOT NULL,
  `spfc_dob_three` varchar(20) NOT NULL,
  `spfc_educational_three` varchar(50) NOT NULL,
  `spfc_occupation_three` varchar(50) NOT NULL,
  `spfc_monthlyincome_three` varchar(50) NOT NULL,
  `spfc_fullname_four` varchar(100) NOT NULL,
  `spfc_relationship_four` varchar(50) NOT NULL,
  `spfc_age_four` varchar(20) NOT NULL,
  `spfc_status_four` varchar(20) NOT NULL,
  `spfc_dob_four` varchar(20) NOT NULL,
  `spfc_educational_four` varchar(50) NOT NULL,
  `spfc_occupation_four` varchar(50) NOT NULL,
  `spfc_monthlyincome_four` varchar(50) NOT NULL,
  `spfc_fullname_five` varchar(100) NOT NULL,
  `spfc_relationship_five` varchar(50) NOT NULL,
  `spfc_age_five` varchar(20) NOT NULL,
  `spfc_status_five` varchar(20) NOT NULL,
  `spfc_dob_five` varchar(20) NOT NULL,
  `spfc_educational_five` varchar(50) NOT NULL,
  `spfc_occupation_five` varchar(50) NOT NULL,
  `spfc_monthlyincome_five` varchar(50) NOT NULL,
  `sp_curr_status` varchar(50) NOT NULL,
  `sp_circumstances` text NOT NULL,
  `sp_problems` text NOT NULL,
  `sp_family_resources` text NOT NULL,
  `curr_date` date NOT NULL,
  `sp_signature` varchar(50) NOT NULL,
  `request_status` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_soloparent`
--

LOCK TABLES `form_soloparent` WRITE;
/*!40000 ALTER TABLE `form_soloparent` DISABLE KEYS */;
INSERT INTO `form_soloparent` VALUES (4,'Macar Angelo Butones',24,'Male','1996-08-12','Calapan','Ibaba East Calapan City','deejaydarkblazer@gmail.com','09518695595','College','Student','50,000','','',0,'','2021-07-02','','','','','','0','','2021-07-02','','','','','','0','','2021-07-02','','','','','','0','','2021-07-02','','','','','','0','','2021-07-02','','','','Legal Guardianship','weqweeqwewqweq','weewweqweqweqewqewq','wqewqeewqwqeweqw','2021-07-02','MACAR ANGELO BUTONES','Pending','idpicture.jpg'),(8,'Vicente Howell',81,'Male','1940-01-24','Calero','05 Jacobs Bypass Apt. 502, Calero','champlin.judge@feil.com','09518695595','College','Company Driver','54,300','','',0,'','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','Legal Guardianship','qweqwewqeqwe','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2021-07-04','VICENTE HOWELL','Pending','1.jpg'),(9,'Sydney Hessel Jr.',31,'Male','1990-07-02','Calapan','39 Trantow Mission, Poblacion, Maasin 4226, Patas','miles31@frami.com','09518695595','High school diploma or GED','Nursing Instructor','58,100','','',0,'','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','','','0','','2021-07-04','','','','Separated','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2021-07-04','SYDNEY HESSEL JR.','Pending','DmeyWCpUUAA1UHx.jpg');
/*!40000 ALTER TABLE `form_soloparent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (39,'System Administrator','admin@admin.com','$2y$10$QPYO4b83Q4WdPlGuHzbuNOQmPWfethjAtgMV53v6QGeChTB47lpuK','Administrator','Verified','2021-07-01 10:03:39'),(40,'Super Admin','superadmin@admin.com','$2y$04$RgaM216WT.3OKZycFSKqJOdP6qnN4AdhdPQ2ZP5WIR/rDtP8bnAx6','Administrator','Verified','2021-07-03 17:03:56'),(41,'CSWD_Admin','cswd_admin@admin.com','$2y$04$m1caT/7IMf.ZUVSyshNNeOzhLkeyg85ETy9iO2kmvXBJj2Edgzroy','Administrator','Verified','2021-07-04 06:10:55');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-04 22:26:49
