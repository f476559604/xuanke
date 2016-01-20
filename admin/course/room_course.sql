-- MySQL dump 10.13  Distrib 5.1.66, for redhat-linux-gnu (i686)
--
-- Host: localhost    Database: xuanke_sys
-- ------------------------------------------------------
-- Server version	5.1.66-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `room_course`
--

DROP TABLE IF EXISTS `room_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_course` (
  `all_id` int(9) NOT NULL AUTO_INCREMENT,
  `room_name` char(12) NOT NULL DEFAULT '',
  `mo1` char(60) DEFAULT NULL,
  `mo2` char(60) DEFAULT NULL,
  `mo3` char(60) DEFAULT NULL,
  `mo4` char(60) DEFAULT NULL,
  `mo5` char(60) DEFAULT NULL,
  `mo6` char(60) DEFAULT NULL,
  `mo7` char(60) DEFAULT NULL,
  `mo8` char(60) DEFAULT NULL,
  `tu1` char(60) DEFAULT NULL,
  `tu2` char(60) DEFAULT NULL,
  `tu3` char(60) DEFAULT NULL,
  `tu4` char(60) DEFAULT NULL,
  `tu5` char(60) DEFAULT NULL,
  `tu6` char(60) DEFAULT NULL,
  `tu7` char(60) DEFAULT NULL,
  `tu8` char(60) DEFAULT NULL,
  `we1` char(60) DEFAULT NULL,
  `we2` char(60) DEFAULT NULL,
  `we3` char(60) DEFAULT NULL,
  `we4` char(60) DEFAULT NULL,
  `we5` char(60) DEFAULT NULL,
  `we6` char(60) DEFAULT NULL,
  `we7` char(60) DEFAULT NULL,
  `we8` char(60) DEFAULT NULL,
  `th1` char(60) DEFAULT NULL,
  `th2` char(60) DEFAULT NULL,
  `th3` char(60) DEFAULT NULL,
  `th4` char(60) DEFAULT NULL,
  `th5` char(60) DEFAULT NULL,
  `th6` char(60) DEFAULT NULL,
  `th7` char(60) DEFAULT NULL,
  `th8` char(60) DEFAULT NULL,
  `fr1` char(60) DEFAULT NULL,
  `fr2` char(60) DEFAULT NULL,
  `fr3` char(60) DEFAULT NULL,
  `fr4` char(60) DEFAULT NULL,
  `fr5` char(60) DEFAULT NULL,
  `fr6` char(60) DEFAULT NULL,
  `fr7` char(60) DEFAULT NULL,
  `fr8` char(60) DEFAULT NULL,
  `sa1` char(60) DEFAULT NULL,
  `sa2` char(60) DEFAULT NULL,
  `sa3` char(60) DEFAULT NULL,
  `sa4` char(60) DEFAULT NULL,
  `sa5` char(60) DEFAULT NULL,
  `sa6` char(60) DEFAULT NULL,
  `sa7` char(60) DEFAULT NULL,
  `sa8` char(60) DEFAULT NULL,
  `su1` char(60) DEFAULT NULL,
  `su2` char(60) DEFAULT NULL,
  `su3` char(60) DEFAULT NULL,
  `su4` char(60) DEFAULT NULL,
  `su5` char(60) DEFAULT NULL,
  `su6` char(60) DEFAULT NULL,
  `su7` char(60) DEFAULT NULL,
  `su8` char(60) DEFAULT NULL,
  `cou_all` char(60) DEFAULT NULL,
  `cou_term` char(20) DEFAULT NULL,
  PRIMARY KEY (`all_id`,`room_name`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_course`
--

LOCK TABLES `room_course` WRITE;
/*!40000 ALTER TABLE `room_course` DISABLE KEYS */;
INSERT INTO `room_course` VALUES (80,'育秀103','','187#汉语综合(育秀103)',NULL,'',NULL,NULL,NULL,NULL,'188#古代文学选读(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'188#古代文学选读(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,'187#汉语综合(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'150#中国文化(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#150##187##188#','2012-2013第二学期'),(81,'育秀107','',NULL,NULL,NULL,NULL,NULL,'','','','180#汉语口语(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,'169#商务汉语综合(育秀107)','180#汉语口语(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'','151#中国古代文学作品选(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#151##169##178##180#','2012-2013第二学期'),(82,'育秀107','230#汉语听力4(育秀107)','230#汉语听力4(育秀107)','226#汉语综合4(育秀107)','226#汉语综合4(育秀107)','227#汉语阅读4(育秀107)','227#汉语阅读4(育秀107)',NULL,NULL,'226#汉语综合4(育秀107)','226#汉语综合4(育秀107)','229#汉语口语4(育秀107)','229#汉语口语4(育秀107)',NULL,NULL,NULL,NULL,'227#汉语阅读4(育秀107)','227#汉语阅读4(育秀107)','226#汉语综合4(育秀107)','226#汉语综合4(育秀107)',NULL,NULL,NULL,NULL,'226#汉语综合4(育秀107)','226#汉语综合4(育秀107)','230#汉语听力4(育秀107)','230#汉语听力4(育秀107)',NULL,'',NULL,NULL,'226#汉语综合4(育秀107)','226#汉语综合4(育秀107)','229#汉语口语4(育秀107)','229#汉语口语4(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#226##227##229##230#','2013-2014第一学期'),(83,'育秀517','',NULL,'191#汉语综合(育秀517)','191#汉语综合(育秀517)',NULL,NULL,NULL,NULL,NULL,'135#汉语综合(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'135#汉语综合(育秀517)',NULL,NULL,'195#汉语口语(育秀517)','195#汉语口语(育秀517)',NULL,NULL,'135#汉语综合(育秀517)',NULL,'',NULL,'194#汉语阅读(育秀517)','194#汉语阅读(育秀517)',NULL,NULL,NULL,'135#汉语综合(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#191##194##195#','2012-2013第二学期'),(85,'育秀103','362#中国古代文学作品选(育秀103)','362#中国古代文学作品选(育秀103)','358#汉语综合(育秀103)','358#汉语综合(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'359#齐鲁文化(育秀103)','359#齐鲁文化(育秀103)','360#商务汉语口语(育秀103)','360#商务汉语口语(育秀103)',NULL,NULL,NULL,NULL,'360#商务汉语口语(育秀103)','360#商务汉语口语(育秀103)','358#汉语综合(育秀103)','358#汉语综合(育秀103)',NULL,NULL,NULL,NULL,'362#中国古代文学作品选(育秀103)','362#中国古代文学作品选(育秀103)','340#汉语听力(育秀103)','340#汉语听力(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#340##358##359##360##362#','2013-2014第二学期'),(84,'育秀301',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2012-2013第二学期'),(86,'育秀108','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'184#中国文化(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,'','190#汉语口语(育秀108)','',NULL,NULL,NULL,NULL,NULL,'183#汉语综合(育秀108)','',NULL,NULL,NULL,NULL,NULL,NULL,'183#汉语综合(育秀108)','','186#汉语语法(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#183##184##186##190#','2012-2013第二学期'),(87,'育秀302','','','','','','','','','168#汉语口语(育秀302)','','','','','','','','','168#汉语口语(育秀302)','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','#159##165##167##168#','2012-2013第二学期'),(88,'育秀111','176#汉语口语(育秀111)',NULL,'197#汉语综合(育秀111)',NULL,NULL,NULL,NULL,NULL,'174#汉语阅读(育秀111)','173#汉语综合(育秀111)',NULL,'197#汉语综合(育秀111)',NULL,NULL,NULL,NULL,'173#汉语综合(育秀111)',NULL,NULL,'175#汉语听力(育秀111)',NULL,NULL,NULL,NULL,'176#汉语口语(育秀111)','173#汉语综合(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,'174#汉语阅读(育秀111)','173#汉语综合(育秀111)',NULL,NULL,'197#汉语综合(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#173##174##175##176##197#','2012-2013第二学期'),(89,'育秀518',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2012-2013第二学期'),(119,'育秀517','','','373#汉语综合1-1(育秀517)','373#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,'373#汉语综合1-1(育秀517)','373#汉语综合1-1(育秀517)','371#汉语阅读1-1(育秀517)','371#汉语阅读1-1(育秀517)',NULL,NULL,NULL,NULL,'372#汉语口语1-1(育秀517)','372#汉语口语1-1(育秀517)','373#汉语综合1-1(育秀517)','373#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,'372#汉语口语1-1(育秀517)','372#汉语口语1-1(育秀517)','373#汉语综合1-1(育秀517)','373#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,'373#汉语综合1-1(育秀517)','373#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#371##372##373#','2014-2015第一学期'),(90,'育秀305',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'189#汉语口语(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'189#汉语口语(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#189#','2012-2013第二学期'),(91,'育秀505',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'171#汉语听力(育秀505)',NULL,NULL,NULL,'193#汉语听力(育秀505)','193#汉语听力(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'171#汉语听力(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#171##193#','2012-2013第二学期'),(92,'育秀309','172#汉语口语(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'170#汉语阅读(育秀309)',NULL,'192#汉语综合(育秀309)','192#汉语综合(育秀309)',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'172#汉语口语(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#172##192#','2012-2013第二学期'),(123,'育秀103','423#汉语综合4-秋(育秀103)','423#汉语综合4-秋(育秀103)','425#中国古代文学选读(先秦等)(育秀103)','425#中国古代文学选读(先秦等)(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,'427#商务汉语阅读(育秀103)','427#商务汉语阅读(育秀103)',NULL,NULL,NULL,NULL,'426#中国现当代文学作品选读(育秀103)','426#中国现当代文学作品选读(育秀103)','422#汉语听力2-1(育秀103)','422#汉语听力2-1(育秀103)',NULL,NULL,NULL,NULL,'423#汉语综合4-秋(育秀103)','423#汉语综合4-秋(育秀103)','429#现代汉语修辞(育秀103)','429#现代汉语修辞(育秀103)','430#汉语听力1-中(育秀103)','430#汉语听力1-中(育秀103)',NULL,NULL,'430#汉语听力1-中(育秀103)','430#汉语听力1-中(育秀103)','422#汉语听力2-1(育秀103)','422#汉语听力2-1(育秀103)',NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'','2014-2015第一学期'),(122,'育秀518','375#汉语综合1-中(育秀518)','375#汉语综合1-中(育秀518)','376#汉语阅读1-中(育秀518)','376#汉语阅读1-中(育秀518)',NULL,NULL,NULL,NULL,'375#汉语综合1-中(育秀518)','375#汉语综合1-中(育秀518)','379#汉语口语1-中(育秀518)','379#汉语口语1-中(育秀518)',NULL,NULL,NULL,NULL,'376#汉语阅读1-中(育秀518)','376#汉语阅读1-中(育秀518)','375#汉语综合1-中(育秀518)','375#汉语综合1-中(育秀518)',NULL,NULL,NULL,NULL,'375#汉语综合1-中(育秀518)','375#汉语综合1-中(育秀518)','379#汉语口语1-中(育秀518)','379#汉语口语1-中(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,'428#当代中国话题(育秀518)','428#当代中国话题(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#375##376##379##428#','2014-2015第一学期'),(127,'育秀305','417#汉语口语2-1(育秀305)','417#汉语口语2-1(育秀305)','419#汉语阅读2-1(育秀305)','419#汉语阅读2-1(育秀305)','418#汉语综合2-1(育秀305)','418#汉语综合2-1(育秀305)',NULL,NULL,'419#汉语阅读2-1(育秀305)','419#汉语阅读2-1(育秀305)','418#汉语综合2-1(育秀305)','418#汉语综合2-1(育秀305)',NULL,NULL,NULL,NULL,'399#商务汉语综合  1  (育秀305)','399#商务汉语综合  1  (育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'417#汉语口语2-1(育秀305)','417#汉语口语2-1(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'418#汉语综合2-1(育秀305)','418#汉语综合2-1(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#399##417##418##419#','2014-2015第一学期'),(128,'育秀107','405#汉语阅读2-2(育秀107)','405#汉语阅读2-2(育秀107)','408#汉语口语2-2(育秀107)','408#汉语口语2-2(育秀107)','410#商务汉语综合  2  (育秀107)','410#商务汉语综合  2  (育秀107)',NULL,NULL,'406#汉语听力2-2(育秀107)','406#汉语听力2-2(育秀107)','403#汉语综合2-2(育秀107)','403#汉语综合2-2(育秀107)',NULL,NULL,NULL,NULL,'405#汉语阅读2-2(育秀107)','405#汉语阅读2-2(育秀107)','409#中国概况(育秀107)','409#中国概况(育秀107)',NULL,NULL,NULL,NULL,'408#汉语口语2-2(育秀107)','408#汉语口语2-2(育秀107)','403#汉语综合2-2(育秀107)','403#汉语综合2-2(育秀107)','400#中级汉语写作(育秀107)','400#中级汉语写作(育秀107)',NULL,NULL,'403#汉语综合2-2(育秀107)','403#汉语综合2-2(育秀107)','406#汉语听力2-2(育秀107)','406#汉语听力2-2(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#400##403##405##406##407##408##409##410#','2014-2015第一学期'),(126,'育秀302','396#汉语阅读2-1(育秀302)','396#汉语阅读2-1(育秀302)','395#汉语综合2-1(育秀302)','395#汉语综合2-1(育秀302)',NULL,NULL,NULL,NULL,'398#汉语口语2-1(育秀302)','398#汉语口语2-1(育秀302)','395#汉语综合2-1(育秀302)','395#汉语综合2-1(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'396#汉语阅读2-1(育秀302)','396#汉语阅读2-1(育秀302)','395#汉语综合2-1(育秀302)','395#汉语综合2-1(育秀302)',NULL,NULL,NULL,NULL,'398#汉语口语2-1(育秀302)','398#汉语口语2-1(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#395##396##398#','2014-2015第一学期'),(117,'育秀305','336#汉语综合(育秀305)','336#汉语综合(育秀305)','338#汉语阅读(育秀305)','338#汉语阅读(育秀305)',NULL,NULL,NULL,NULL,'338#汉语阅读(育秀305)','338#汉语阅读(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'334#商务汉语综合(育秀305)','334#商务汉语综合(育秀305)','363#汉语口语(育秀305)','363#汉语口语(育秀305)',NULL,NULL,NULL,NULL,'363#汉语口语(育秀305)','363#汉语口语(育秀305)','336#汉语综合(育秀305)','336#汉语综合(育秀305)',NULL,NULL,NULL,NULL,'336#汉语综合(育秀305)','336#汉语综合(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#334##336##338##363#','2013-2014第二学期'),(120,'育秀505','392#汉语听力1-2(育秀505)','392#汉语听力1-2(育秀505)',NULL,NULL,'370#汉语听力1-1(育秀505)','370#汉语听力1-1(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'392#汉语听力1-2(育秀505)','392#汉语听力1-2(育秀505)','397#汉语听力2-1(育秀505)','397#汉语听力2-1(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,'370#汉语听力1-1(育秀505)','370#汉语听力1-1(育秀505)','397#汉语听力2-1(育秀505)','397#汉语听力2-1(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#370##392##397#','2014-2015第一学期'),(125,'育秀309','','','389#汉语综合1-2(育秀309)','389#汉语综合1-2(育秀309)','','','','','389#汉语综合1-2(育秀309)','389#汉语综合1-2(育秀309)','393#汉语口语1-2(育秀309)','393#汉语口语1-2(育秀309)','','','','','','','389#汉语综合1-2(育秀309)','389#汉语综合1-2(育秀309)','','','','','389#汉语综合1-2(育秀309)','389#汉语综合1-2(育秀309)','393#汉语口语1-2(育秀309)','393#汉语口语1-2(育秀309)','391#汉语阅读1-2(育秀309)','391#汉语阅读1-2(育秀309)','','','391#汉语阅读1-2(育秀309)','391#汉语阅读1-2(育秀309)','389#汉语综合1-2(育秀309)','389#汉语综合1-2(育秀309)','','','','','','','','','','','','','','','','','','','','','#391##393##389#','2014-2015第一学期'),(118,'育秀108','350#汉语口语(育秀108)','350#汉语口语(育秀108)','351#汉语综合(育秀108)','351#汉语综合(育秀108)','352#社会实践(育秀108)','352#社会实践(育秀108)',NULL,NULL,'366#报刊阅读(育秀108)','366#报刊阅读(育秀108)','356#高级写作(育秀108)','356#高级写作(育秀108)','361#新HSK应试指导  下  (育秀108)','361#新HSK应试指导  下  (育秀108)',NULL,NULL,'355#中国文化(育秀108)','355#中国文化(育秀108)','351#汉语综合(育秀108)','351#汉语综合(育秀108)',NULL,NULL,NULL,NULL,'351#汉语综合(育秀108)','351#汉语综合(育秀108)','350#汉语口语(育秀108)','350#汉语口语(育秀108)',NULL,NULL,NULL,NULL,'354#现代汉语语法(育秀108)','354#现代汉语语法(育秀108)','355#中国文化(育秀108)','355#中国文化(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#350##351##352##354##355##356##361##366#','2013-2014第二学期'),(121,'育秀301',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'374#中国武术(育秀301)','374#中国武术(育秀301)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#374#','2014-2015第一学期'),(116,'育秀302','331#汉语阅读(育秀302)','331#汉语阅读(育秀302)','332#汉语综合(育秀302)','332#汉语综合(育秀302)',NULL,NULL,NULL,NULL,'332#汉语综合(育秀302)','332#汉语综合(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'333#汉语听力(育秀302)','333#汉语听力(育秀302)',NULL,NULL,NULL,NULL,'331#汉语阅读(育秀302)','331#汉语阅读(育秀302)','332#汉语综合(育秀302)','332#汉语综合(育秀302)',NULL,NULL,NULL,NULL,'333#汉语听力(育秀302)','333#汉语听力(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#331##332##333#','2013-2014第二学期'),(114,'育秀301',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'322#中国书画(育秀301)','322#中国书画(育秀301)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#322#','2013-2014第二学期'),(103,'育秀309','245#汉语听力7(育秀309)','245#汉语听力7(育秀309)','','','250#汉语口语7(育秀309)','250#汉语口语7(育秀309)',NULL,NULL,'249#汉语综合7(育秀309)','249#汉语综合7(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,'250#汉语口语7(育秀309)','250#汉语口语7(育秀309)','246#汉语阅读7(育秀309)','246#汉语阅读7(育秀309)','281#中国概况(育秀309)','281#中国概况(育秀309)',NULL,NULL,'249#汉语综合7(育秀309)','249#汉语综合7(育秀309)','246#汉语阅读7(育秀309)','246#汉语阅读7(育秀309)',NULL,NULL,NULL,NULL,'249#汉语综合7(育秀309)','249#汉语综合7(育秀309)','245#汉语听力7(育秀309)','245#汉语听力7(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#245##246##249##250##251##281#','2013-2014第一学期'),(105,'育秀111','222#汉语综合3(育秀111)','222#汉语综合3(育秀111)','225#汉语口语(育秀111)','225#汉语口语(育秀111)',NULL,NULL,NULL,NULL,'222#汉语综合3(育秀111)','222#汉语综合3(育秀111)','224#汉语听力(育秀111)','224#汉语听力(育秀111)','243#HSK指导  下  (育秀111)','243#HSK指导  下  (育秀111)',NULL,NULL,NULL,NULL,'222#汉语综合3(育秀111)','222#汉语综合3(育秀111)','244#视听说(育秀111)','244#视听说(育秀111)',NULL,NULL,'224#汉语听力(育秀111)','224#汉语听力(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,'225#汉语口语(育秀111)','225#汉语口语(育秀111)','222#汉语综合3(育秀111)','222#汉语综合3(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#222##223##224##225##242##243##244#','2013-2014第一学期'),(113,'育秀111','323#汉语听力(育秀111)','323#汉语听力(育秀111)','324#汉语综合(育秀111)','324#汉语综合(育秀111)','365#汉语视听说(育秀111)','365#汉语视听说(育秀111)',NULL,NULL,'324#汉语综合(育秀111)','324#汉语综合(育秀111)','325#汉语阅读(育秀111)','325#汉语阅读(育秀111)','321#新HSK指导(育秀111)','321#新HSK指导(育秀111)',NULL,NULL,'324#汉语综合(育秀111)','324#汉语综合(育秀111)','326#汉语口语(育秀111)','326#汉语口语(育秀111)',NULL,NULL,NULL,NULL,'326#汉语口语(育秀111)','326#汉语口语(育秀111)','324#汉语综合(育秀111)','324#汉语综合(育秀111)','364#中国音乐(育秀111)','364#中国音乐(育秀111)',NULL,NULL,'325#汉语阅读(育秀111)','325#汉语阅读(育秀111)','324#汉语综合(育秀111)','324#汉语综合(育秀111)','323#汉语听力(育秀111)','323#汉语听力(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#321##323##324##325##326##364##365#','2013-2014第二学期'),(129,'育秀108','415#古代汉语(育秀108)','415#古代汉语(育秀108)',NULL,NULL,'416#视听中国(育秀108)','416#视听中国(育秀108)',NULL,NULL,'412#汉语口语3-秋(育秀108)','412#汉语口语3-秋(育秀108)','411#汉语综合3-秋(育秀108)','411#汉语综合3-秋(育秀108)','402#新HSK应试指导  下  (育秀108)','402#新HSK应试指导  下  (育秀108)',NULL,NULL,'415#古代汉语(育秀108)','415#古代汉语(育秀108)','','',NULL,NULL,NULL,NULL,'411#汉语综合3-秋(育秀108)','411#汉语综合3-秋(育秀108)','413#现代汉语词汇(育秀108)','413#现代汉语词汇(育秀108)','','',NULL,NULL,'412#汉语口语3-秋(育秀108)','412#汉语口语3-秋(育秀108)','411#汉语综合3-秋(育秀108)','411#汉语综合3-秋(育秀108)','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,'#402##411##412##413##414##415##416#','2014-2015第一学期'),(111,'育秀517','311#汉语综合(育秀517)','311#汉语综合(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,'311#汉语综合(育秀517)','311#汉语综合(育秀517)','313#汉语阅读(育秀517)','313#汉语阅读(育秀517)',NULL,NULL,NULL,NULL,'311#汉语综合(育秀517)','311#汉语综合(育秀517)','314#汉语口语(育秀517)','314#汉语口语(育秀517)',NULL,NULL,NULL,NULL,'314#汉语口语(育秀517)','314#汉语口语(育秀517)','311#汉语综合(育秀517)','311#汉语综合(育秀517)',NULL,NULL,NULL,NULL,'311#汉语综合(育秀517)','311#汉语综合(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#309##311##313##314#','2013-2014第二学期'),(102,'育秀108','282#视听中国(育秀108)','282#视听中国(育秀108)','253#汉语综合8(育秀108)','253#汉语综合8(育秀108)','','',NULL,NULL,'253#汉语综合8(育秀108)','253#汉语综合8(育秀108)','271#汉语词汇(育秀108)','271#汉语词汇(育秀108)',NULL,NULL,NULL,NULL,'253#汉语综合8(育秀108)','253#汉语综合8(育秀108)','256#古代汉语(育秀108)','256#古代汉语(育秀108)',NULL,NULL,NULL,NULL,'256#古代汉语(育秀108)','256#古代汉语(育秀108)','252#汉语口语8(育秀108)','252#汉语口语8(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,'252#汉语口语8(育秀108)','252#汉语口语8(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#252##253##256##257##271##273##282#','2013-2014第一学期'),(110,'育秀505','','','312#汉语听力(育秀505)','312#汉语听力(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,'339#汉语听力(育秀505)','339#汉语听力(育秀505)',NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'327#汉语口语(育秀505)','327#汉语口语(育秀505)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#312##327##328##339#','2013-2014第二学期'),(104,'育秀517','267#汉语综合1(育秀517)','267#汉语综合1(育秀517)','','',NULL,NULL,NULL,NULL,'267#汉语综合1(育秀517)','267#汉语综合1(育秀517)','','',NULL,NULL,NULL,NULL,'267#汉语综合1(育秀517)','267#汉语综合1(育秀517)','','',NULL,NULL,NULL,NULL,'','','267#汉语综合1(育秀517)','267#汉语综合1(育秀517)',NULL,NULL,NULL,NULL,'269#汉语听力1(育秀517)','269#汉语听力1(育秀517)','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#221##269##270#','2013-2014第一学期'),(124,'育秀111','382#汉语综合1-2(育秀111)','382#汉语综合1-2(育秀111)','387#汉语听力1-2(育秀111)','387#汉语听力1-2(育秀111)','381#汉语视听说(育秀111)','381#汉语视听说(育秀111)','','','382#汉语综合1-2(育秀111)','382#汉语综合1-2(育秀111)','383#汉语阅读1-2(育秀111)','383#汉语阅读1-2(育秀111)','380#新HSK应试指导上(育秀111)','380#新HSK应试指导上(育秀111)','','','382#汉语综合1-2(育秀111)','382#汉语综合1-2(育秀111)','388#汉语口语1-2(育秀111)','388#汉语口语1-2(育秀111)','','','','','383#汉语阅读1-2(育秀111)','383#汉语阅读1-2(育秀111)','382#汉语综合1-2(育秀111)','382#汉语综合1-2(育秀111)','387#汉语听力1-2(育秀111)','387#汉语听力1-2(育秀111)','','','388#汉语口语1-2(育秀111)','388#汉语口语1-2(育秀111)','382#汉语综合1-2(育秀111)','382#汉语综合1-2(育秀111)','','','','','','','','','','','','','','','','','','','','','#380##381##382##383##387##388#','2014-2015第一学期'),(93,'育秀518','','','','','','','','','221#汉语口语(育秀518)','221#汉语口语(育秀518)','','','','','','','','','','','','','','','','','275#汉语阅读2(育秀518)','275#汉语阅读2(育秀518)','','','','','221#汉语口语(育秀518)','221#汉语口语(育秀518)','275#汉语阅读2(育秀518)','275#汉语阅读2(育秀518)','','','','','','','','','','','','','','','','','','','','','#275##221#','2013-2014第一学期'),(115,'育秀518',NULL,NULL,'330#汉语综合(育秀518)','330#汉语综合(育秀518)',NULL,NULL,NULL,NULL,'330#汉语综合(育秀518)','330#汉语综合(育秀518)','318#汉语口语(育秀518)','318#汉语口语(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,'330#汉语综合(育秀518)','330#汉语综合(育秀518)',NULL,NULL,NULL,NULL,'330#汉语综合(育秀518)','330#汉语综合(育秀518)','319#汉语阅读(育秀518)','319#汉语阅读(育秀518)',NULL,NULL,NULL,NULL,'318#汉语口语(育秀518)','318#汉语口语(育秀518)','330#汉语综合(育秀518)','330#汉语综合(育秀518)','319#汉语阅读(育秀518)','319#汉语阅读(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#318##319##330#','2013-2014第二学期'),(106,'育秀302','234#汉语口语5(育秀302)','234#汉语口语5(育秀302)','231#汉语综合5(育秀302)','231#汉语综合5(育秀302)','232#汉语阅读5(育秀302)','232#汉语阅读5(育秀302)',NULL,NULL,'231#汉语综合5(育秀302)','231#汉语综合5(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'231#汉语综合5(育秀302)','231#汉语综合5(育秀302)','232#汉语阅读5(育秀302)','232#汉语阅读5(育秀302)',NULL,NULL,NULL,NULL,'234#汉语口语5(育秀302)','234#汉语口语5(育秀302)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#231##232##234#','2013-2014第一学期'),(112,'育秀107','','','343#汉语口语(育秀107)','343#汉语口语(育秀107)','367#商务汉语综合(育秀107)','367#商务汉语综合(育秀107)',NULL,NULL,'','','','',NULL,NULL,NULL,NULL,'343#汉语口语(育秀107)','343#汉语口语(育秀107)','344#汉语听力(育秀107)','344#汉语听力(育秀107)',NULL,NULL,NULL,NULL,'','','347#中国概况(育秀107)','347#中国概况(育秀107)','335#中级汉语写作(育秀107)','335#中级汉语写作(育秀107)',NULL,NULL,'','','344#汉语听力(育秀107)','344#汉语听力(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#335##342##343##344##346##347##367#','2013-2014第二学期'),(107,'育秀305','274#汉语综合(育秀305)','274#汉语综合(育秀305)','237#汉语阅读6(育秀305)','237#汉语阅读6(育秀305)','236#汉语听力6(育秀305)','236#汉语听力6(育秀305)','','','235#汉语口语6(育秀305)','235#汉语口语6(育秀305)','279#中级写作(育秀305)','279#中级写作(育秀305)','','','','','241#商务汉语综合(育秀305)','241#商务汉语综合(育秀305)','236#汉语听力6(育秀305)','236#汉语听力6(育秀305)','','','','','237#汉语阅读5(育秀305)','237#汉语阅读5(育秀305)','274#汉语综合(育秀305)','274#汉语综合(育秀305)','239#中国武术(育秀305)','239#中国武术(育秀305)','','','274#汉语综合(育秀305)','274#汉语综合(育秀305)','235#汉语口语6(育秀305)','235#汉语口语6(育秀305)','','','','','','','','','','','','','','','','','','','','','#233##235##236##237##238##239##240##241##274##279#','2013-2014第一学期'),(108,'育秀103','','','262#汉语综合9(育秀103)','262#汉语综合9(育秀103)',NULL,NULL,NULL,NULL,'264#中国现当代文学作品选(育秀103)','264#中国现当代文学作品选(育秀103)','265#汉语修辞(育秀103)','265#汉语修辞(育秀103)',NULL,NULL,NULL,NULL,'266#当代中国简介(育秀103)','266#当代中国简介(育秀103)','263#中国古代文学作品选(育秀103)','263#中国古代文学作品选(育秀103)',NULL,NULL,NULL,NULL,'283#中国现代文学(育秀103)','283#中国现代文学(育秀103)','262#汉语综合9(育秀103)','262#汉语综合9(育秀103)',NULL,NULL,NULL,NULL,'264#中国现当代文学作品选(育秀103)','264#中国现当代文学作品选(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#262##263##264##265##266##283#','2013-2014第一学期'),(109,'育秀301',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'277#中国简介(育秀301)','277#中国简介(育秀301)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#277#','2013-2014第一学期'),(130,'育秀518','433#汉语综合(育秀518)','433#汉语综合(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,'433#汉语综合(育秀518)','433#汉语综合(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,'433#汉语综合(育秀518)','433#汉语综合(育秀518)','435#汉语口语1-1(育秀518)','435#汉语口语1-1(育秀518)',NULL,NULL,NULL,NULL,'433#汉语综合(育秀518)','433#汉语综合(育秀518)','435#汉语口语1-1(育秀518)','435#汉语口语1-1(育秀518)',NULL,NULL,NULL,NULL,'433#汉语综合(育秀518)','433#汉语综合(育秀518)','434#汉语阅读1-1(育秀518)','434#汉语阅读1-1(育秀518)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#433##434##435#','2014-2015第二学期'),(131,'育秀111','442#汉语阅读1-2(育秀111)','442#汉语阅读1-2(育秀111)','445#汉语综合1-2(育秀111)','445#汉语综合1-2(育秀111)',NULL,NULL,NULL,NULL,'446#汉语口语1-2(育秀111)','446#汉语口语1-2(育秀111)','445#汉语综合1-2(育秀111)','445#汉语综合1-2(育秀111)','436#中国音乐  民歌  (育秀111)','436#中国音乐  民歌  (育秀111)',NULL,NULL,'447#汉语听力1-2(育秀111)','447#汉语听力1-2(育秀111)','445#汉语综合1-2(育秀111)','445#汉语综合1-2(育秀111)',NULL,NULL,NULL,NULL,'447#汉语听力1-2(育秀111)','447#汉语听力1-2(育秀111)','445#汉语综合1-2(育秀111)','445#汉语综合1-2(育秀111)','446#汉语口语1-2(育秀111)','446#汉语口语1-2(育秀111)',NULL,NULL,'445#汉语综合1-2(育秀111)','445#汉语综合1-2(育秀111)','442#汉语阅读1-2(育秀111)','442#汉语阅读1-2(育秀111)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#436##442##445##446##447#','2014-2015第二学期'),(132,'育秀517','','','439#汉语综合1-1(育秀517)','439#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,'437#汉语口语1-1(育秀517)','437#汉语口语1-1(育秀517)','439#汉语综合1-1(育秀517)','439#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,'439#汉语综合1-1(育秀517)','439#汉语综合1-1(育秀517)','437#汉语口语1-1(育秀517)','437#汉语口语1-1(育秀517)',NULL,NULL,NULL,NULL,'439#汉语综合1-1(育秀517)','439#汉语综合1-1(育秀517)','','',NULL,NULL,NULL,NULL,'440#汉语阅读1-1(育秀517)','440#汉语阅读1-1(育秀517)','439#汉语综合1-1(育秀517)','439#汉语综合1-1(育秀517)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2014-2015第二学期'),(133,'育秀502','441#汉语听力1-1(育秀502)','441#汉语听力1-1(育秀502)','438#汉语听力1-1(育秀502)','438#汉语听力1-1(育秀502)',NULL,NULL,NULL,NULL,NULL,NULL,'438#汉语听力1-1(育秀502)','438#汉语听力1-1(育秀502)',NULL,NULL,NULL,NULL,NULL,NULL,'457#汉语听力2-1(育秀502)','457#汉语听力2-1(育秀502)',NULL,NULL,NULL,NULL,NULL,NULL,'441#汉语听力1-1(育秀502)','441#汉语听力1-1(育秀502)',NULL,NULL,NULL,NULL,'457#汉语听力2-1(育秀502)','457#汉语听力2-1(育秀502)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#438##441##457#','2014-2015第二学期'),(134,'育秀107','451#汉语综合1-2(育秀107)','451#汉语综合1-2(育秀107)','452#汉语口语1-2(育秀107)','452#汉语口语1-2(育秀107)','449#新HSK应试指导(上)(育秀107)','449#新HSK应试指导(上)(育秀107)',NULL,NULL,'453#汉语听力1-2(育秀107)','453#汉语听力1-2(育秀107)','451#汉语综合1-2(育秀107)','451#汉语综合1-2(育秀107)','476#商务汉语综合+2(育秀107)','476#商务汉语综合+2(育秀107)',NULL,NULL,'451#汉语综合1-2(育秀107)','451#汉语综合1-2(育秀107)','454#汉语阅读1-2(育秀107)','454#汉语阅读1-2(育秀107)',NULL,NULL,NULL,NULL,'454#汉语阅读1-2(育秀107)','454#汉语阅读1-2(育秀107)','451#汉语综合1-2(育秀107)','451#汉语综合1-2(育秀107)','453#汉语听力1-2(育秀107)','453#汉语听力1-2(育秀107)',NULL,NULL,'452#汉语口语1-2(育秀107)','452#汉语口语1-2(育秀107)','451#汉语综合1-2(育秀107)','451#汉语综合1-2(育秀107)','448#汉语视听说(育秀107)','448#汉语视听说(育秀107)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#448##449##451##452##453##454##476#','2014-2015第二学期'),(135,'育秀103','464#汉语听力2-1(育秀103)','464#汉语听力2-1(育秀103)',NULL,NULL,'','',NULL,NULL,'','',NULL,NULL,'487#齐鲁文化(育秀103)','487#齐鲁文化(育秀103)',NULL,NULL,'486#商务汉语口语(育秀103)','486#商务汉语口语(育秀103)','484#中国古代文学作作品选读  下  (育秀103)','484#中国古代文学作作品选读  下  (育秀103)',NULL,NULL,NULL,NULL,'','','464#汉语听力2-1(育秀103)','464#汉语听力2-1(育秀103)',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#484##486##487#','2014-2015第二学期'),(136,'育秀301',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'450#中国书画(育秀301)','450#中国书画(育秀301)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#450#','2014-2015第二学期'),(137,'育秀304','455#汉语阅读2-1(育秀304)','455#汉语阅读2-1(育秀304)','456#汉语综合2-1(育秀304)','456#汉语综合2-1(育秀304)',NULL,NULL,NULL,NULL,'458#汉语口语2-1(育秀304)','458#汉语口语2-1(育秀304)','456#汉语综合2-1(育秀304)','456#汉语综合2-1(育秀304)',NULL,NULL,NULL,NULL,'459#商务汉语综合（1）(育秀304)','459#商务汉语综合（1）(育秀304)',NULL,NULL,NULL,NULL,NULL,NULL,'456#汉语综合2-1(育秀304)','456#汉语综合2-1(育秀304)','455#汉语阅读2-1(育秀304)','455#汉语阅读2-1(育秀304)',NULL,NULL,NULL,NULL,NULL,NULL,'458#汉语口语2-1(育秀304)','458#汉语口语2-1(育秀304)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#455##456##458##459#','2014-2015第二学期'),(138,'育秀108','480#中国文化(育秀108)','480#中国文化(育秀108)','477#汉语综合3-春(育秀108)','477#汉语综合3-春(育秀108)','461#新HSK应试指导  下  (育秀108)','461#新HSK应试指导  下  (育秀108)',NULL,NULL,'480#中国文化(育秀108)','480#中国文化(育秀108)','478#汉语口语3-春(育秀108)','478#汉语口语3-春(育秀108)','481#社会实践(育秀108)','481#社会实践(育秀108)',NULL,NULL,'477#汉语综合3-春(育秀108)','477#汉语综合3-春(育秀108)','479#实用汉语语法(育秀108)','479#实用汉语语法(育秀108)',NULL,NULL,NULL,NULL,'483#高级汉语写作(育秀108)','483#高级汉语写作(育秀108)','478#汉语口语3-春(育秀108)','478#汉语口语3-春(育秀108)','460#中级汉语写作(育秀108)','460#中级汉语写作(育秀108)',NULL,NULL,'477#汉语综合3-春(育秀108)','477#汉语综合3-春(育秀108)','482#报刊阅读(育秀108)','482#报刊阅读(育秀108)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#460##461##477##478##479##480##481##482##483#','2014-2015第二学期'),(139,'育秀305',NULL,NULL,'463#汉语阅读2-1(育秀305)','463#汉语阅读2-1(育秀305)',NULL,NULL,NULL,NULL,'462#汉语综合2-1(育秀305)','462#汉语综合2-1(育秀305)','465#汉语口语2-1(育秀305)','465#汉语口语2-1(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'463#汉语阅读2-1(育秀305)','463#汉语阅读2-1(育秀305)',NULL,NULL,NULL,NULL,'462#汉语综合2-1(育秀305)','462#汉语综合2-1(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,'465#汉语口语2-1(育秀305)','465#汉语口语2-1(育秀305)','462#汉语综合2-1(育秀305)','462#汉语综合2-1(育秀305)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#462##463##465#','2014-2015第二学期'),(140,'育秀309','467#汉语阅读2-2(育秀309)','467#汉语阅读2-2(育秀309)','466#汉语综合2-2(育秀309)','466#汉语综合2-2(育秀309)',NULL,NULL,NULL,NULL,'469#汉语口语2-2(育秀309)','469#汉语口语2-2(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,'470#中国概况(育秀309)','470#中国概况(育秀309)','466#汉语综合2-2(育秀309)','466#汉语综合2-2(育秀309)',NULL,NULL,NULL,NULL,'466#汉语综合2-2(育秀309)','466#汉语综合2-2(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,'467#汉语阅读2-2(育秀309)','467#汉语阅读2-2(育秀309)','469#汉语口语2-2(育秀309)','469#汉语口语2-2(育秀309)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#466##467##469##470#','2014-2015第二学期'),(141,'育秀506',NULL,NULL,'474#汉语听力2-2(育秀506)','474#汉语听力2-2(育秀506)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'474#汉语听力2-2(育秀506)','474#汉语听力2-2(育秀506)',NULL,NULL,NULL,NULL,NULL,NULL,'468#汉语听力2-2(育秀506)','468#汉语听力2-2(育秀506)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'468#汉语听力2-2(育秀506)','468#汉语听力2-2(育秀506)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#468##474#','2014-2015第二学期'),(142,'育秀513','473#汉语阅读2-2(育秀513)','473#汉语阅读2-2(育秀513)',NULL,NULL,NULL,NULL,NULL,NULL,'472#汉语综合2-2(育秀513)','472#汉语综合2-2(育秀513)','475#汉语口语2-2(育秀513)','475#汉语口语2-2(育秀513)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'472#汉语综合2-2(育秀513)','472#汉语综合2-2(育秀513)','473#汉语阅读2-2(育秀513)','473#汉语阅读2-2(育秀513)',NULL,NULL,NULL,NULL,'475#汉语口语2-2(育秀513)','475#汉语口语2-2(育秀513)','472#汉语综合2-2(育秀513)','472#汉语综合2-2(育秀513)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#472##473##475#','2014-2015第二学期'),(143,'育秀103',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-2016第一学期'),(144,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(145,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(146,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(147,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(148,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(149,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(150,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016'),(151,'%E8%82%B2%E7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016%E7%AC%AC%E'),(152,'%E8%82%B2%E7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-2016%E7%AC%AC%E'),(153,'育秀111','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','2015-2016第一学期'),(154,'育秀209','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#501##502##503##504##505##506#','2015-2016第一学期'),(155,'育秀506','520#我我我(育秀506)','520#我我我(育秀506)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#519##520#','2015-2016第一学期');
/*!40000 ALTER TABLE `room_course` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-30 18:46:25