-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: lab
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `audit`
--

DROP TABLE IF EXISTS `audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `date` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`user_id`,`table_name`,`operation_name`,`date`)
) ENGINE=InnoDB AUTO_INCREMENT=597 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit`
--

LOCK TABLES `audit` WRITE;
/*!40000 ALTER TABLE `audit` DISABLE KEYS */;
INSERT INTO `audit` VALUES (2,1,'salary','select','1431856554'),(3,1,'salary','select','1431856670'),(1,1,'worker','select','1431856552'),(11,1,'worker','select','1431858512'),(8,2,'salary','re_insert','1431857418'),(5,2,'salary','select','1431857395'),(6,2,'salary','select','1431857396'),(7,2,'salary','select','1431857412'),(9,2,'salary','select','1431857420'),(10,2,'salary','select','1431857713'),(4,2,'worker','select','1431857393'),(14,3,'salary','select','1431861800'),(13,3,'worker','select','1431861799'),(596,4,'salary','select','1431944011'),(12,4,'worker','select','1431861324'),(357,5,'salary','delete','1431908902'),(359,5,'salary','delete','1431908904'),(418,5,'salary','delete','1431911818'),(420,5,'salary','delete','1431911821'),(440,5,'salary','delete','1431911872'),(460,5,'salary','delete','1431911931'),(478,5,'salary','delete','1431911997'),(522,5,'salary','delete','1431913525'),(532,5,'salary','delete','1431913573'),(299,5,'salary','insert','1431908563'),(300,5,'salary','insert','1431908569'),(303,5,'salary','insert','1431908575'),(304,5,'salary','insert','1431908581'),(305,5,'salary','insert','1431908585'),(333,5,'salary','insert','1431908844'),(336,5,'salary','insert','1431908849'),(337,5,'salary','insert','1431908852'),(346,5,'salary','insert','1431908868'),(347,5,'salary','insert','1431908871'),(379,5,'salary','insert','1431910632'),(380,5,'salary','insert','1431910634'),(412,5,'salary','insert','1431911802'),(413,5,'salary','insert','1431911805'),(432,5,'salary','insert','1431911855'),(433,5,'salary','insert','1431911858'),(455,5,'salary','insert','1431911916'),(456,5,'salary','insert','1431911919'),(470,5,'salary','insert','1431911974'),(471,5,'salary','insert','1431911978'),(542,5,'salary','insert','1431913614'),(543,5,'salary','insert','1431913619'),(547,5,'salary','insert','1431913622'),(548,5,'salary','insert','1431913628'),(549,5,'salary','insert','1431913633'),(553,5,'salary','insert','1431913638'),(554,5,'salary','insert','1431913643'),(182,5,'salary','select','1431906030'),(194,5,'salary','select','1431906170'),(218,5,'salary','select','1431907091'),(245,5,'salary','select','1431907416'),(267,5,'salary','select','1431907604'),(274,5,'salary','select','1431908191'),(275,5,'salary','select','1431908379'),(286,5,'salary','select','1431908517'),(298,5,'salary','select','1431908562'),(301,5,'salary','select','1431908569'),(302,5,'salary','select','1431908571'),(306,5,'salary','select','1431908586'),(308,5,'salary','select','1431908589'),(310,5,'salary','select','1431908590'),(311,5,'salary','select','1431908591'),(314,5,'salary','select','1431908601'),(315,5,'salary','select','1431908602'),(321,5,'salary','select','1431908675'),(322,5,'salary','select','1431908676'),(328,5,'salary','select','1431908829'),(329,5,'salary','select','1431908830'),(330,5,'salary','select','1431908831'),(332,5,'salary','select','1431908832'),(335,5,'salary','select','1431908848'),(338,5,'salary','select','1431908852'),(339,5,'salary','select','1431908853'),(342,5,'salary','select','1431908864'),(343,5,'salary','select','1431908865'),(345,5,'salary','select','1431908867'),(348,5,'salary','select','1431908872'),(349,5,'salary','select','1431908873'),(351,5,'salary','select','1431908874'),(352,5,'salary','select','1431908883'),(354,5,'salary','select','1431908884'),(356,5,'salary','select','1431908899'),(358,5,'salary','select','1431908902'),(360,5,'salary','select','1431908904'),(361,5,'salary','select','1431910058'),(363,5,'salary','select','1431910061'),(364,5,'salary','select','1431910099'),(365,5,'salary','select','1431910155'),(366,5,'salary','select','1431910167'),(367,5,'salary','select','1431910221'),(369,5,'salary','select','1431910223'),(370,5,'salary','select','1431910282'),(371,5,'salary','select','1431910531'),(373,5,'salary','select','1431910618'),(374,5,'salary','select','1431910619'),(375,5,'salary','select','1431910621'),(377,5,'salary','select','1431910622'),(378,5,'salary','select','1431910630'),(381,5,'salary','select','1431910635'),(384,5,'salary','select','1431910783'),(385,5,'salary','select','1431910784'),(386,5,'salary','select','1431910785'),(391,5,'salary','select','1431910792'),(398,5,'salary','select','1431911236'),(402,5,'salary','select','1431911771'),(403,5,'salary','select','1431911772'),(404,5,'salary','select','1431911781'),(405,5,'salary','select','1431911782'),(407,5,'salary','select','1431911783'),(408,5,'salary','select','1431911784'),(409,5,'salary','select','1431911794'),(411,5,'salary','select','1431911795'),(414,5,'salary','select','1431911805'),(417,5,'salary','select','1431911815'),(419,5,'salary','select','1431911818'),(421,5,'salary','select','1431911821'),(428,5,'salary','select','1431911836'),(429,5,'salary','select','1431911837'),(431,5,'salary','select','1431911854'),(434,5,'salary','select','1431911858'),(435,5,'salary','select','1431911859'),(437,5,'salary','select','1431911860'),(439,5,'salary','select','1431911869'),(441,5,'salary','select','1431911872'),(446,5,'salary','select','1431911885'),(447,5,'salary','select','1431911886'),(448,5,'salary','select','1431911899'),(450,5,'salary','select','1431911902'),(451,5,'salary','select','1431911903'),(452,5,'salary','select','1431911904'),(454,5,'salary','select','1431911915'),(457,5,'salary','select','1431911919'),(459,5,'salary','select','1431911929'),(461,5,'salary','select','1431911931'),(465,5,'salary','select','1431911942'),(466,5,'salary','select','1431911943'),(467,5,'salary','select','1431911962'),(469,5,'salary','select','1431911973'),(472,5,'salary','select','1431911978'),(474,5,'salary','select','1431911979'),(475,5,'salary','select','1431911980'),(476,5,'salary','select','1431911994'),(477,5,'salary','select','1431911995'),(479,5,'salary','select','1431911997'),(480,5,'salary','select','1431911998'),(486,5,'salary','select','1431912227'),(487,5,'salary','select','1431912228'),(488,5,'salary','select','1431912264'),(490,5,'salary','select','1431912280'),(498,5,'salary','select','1431913306'),(499,5,'salary','select','1431913308'),(501,5,'salary','select','1431913311'),(502,5,'salary','select','1431913312'),(511,5,'salary','select','1431913389'),(512,5,'salary','select','1431913390'),(515,5,'salary','select','1431913512'),(521,5,'salary','select','1431913523'),(523,5,'salary','select','1431913525'),(529,5,'salary','select','1431913569'),(531,5,'salary','select','1431913571'),(533,5,'salary','select','1431913573'),(541,5,'salary','select','1431913613'),(544,5,'salary','select','1431913619'),(545,5,'salary','select','1431913620'),(546,5,'salary','select','1431913621'),(551,5,'salary','select','1431913635'),(552,5,'salary','select','1431913636'),(555,5,'salary','select','1431913643'),(556,5,'salary','select','1431913644'),(560,5,'salary','select','1431913828'),(563,5,'salary','select','1431913958'),(564,5,'salary','select','1431913970'),(565,5,'salary','select','1431913973'),(566,5,'salary','select','1431913985'),(570,5,'salary','select','1431914710'),(571,5,'salary','select','1431914711'),(573,5,'salary','select','1431914747'),(574,5,'salary','select','1431914748'),(595,5,'salary','select','1431943911'),(114,5,'worker','delete','1431904632'),(164,5,'worker','delete','1431905944'),(174,5,'worker','delete','1431906004'),(291,5,'worker','delete','1431908540'),(394,5,'worker','delete','1431910812'),(423,5,'worker','delete','1431911824'),(425,5,'worker','delete','1431911826'),(443,5,'worker','delete','1431911875'),(463,5,'worker','delete','1431911934'),(482,5,'worker','delete','1431912003'),(492,5,'worker','delete','1431912334'),(494,5,'worker','delete','1431913289'),(496,5,'worker','delete','1431913302'),(505,5,'worker','delete','1431913360'),(507,5,'worker','delete','1431913364'),(517,5,'worker','delete','1431913518'),(519,5,'worker','delete','1431913522'),(525,5,'worker','delete','1431913528'),(527,5,'worker','delete','1431913566'),(535,5,'worker','delete','1431913575'),(68,5,'worker','insert','1431904153'),(69,5,'worker','insert','1431904157'),(129,5,'worker','insert','1431905448'),(130,5,'worker','insert','1431905450'),(135,5,'worker','insert','1431905478'),(136,5,'worker','insert','1431905480'),(220,5,'worker','insert','1431907092'),(221,5,'worker','insert','1431907098'),(227,5,'worker','insert','1431907141'),(228,5,'worker','insert','1431907144'),(235,5,'worker','insert','1431907311'),(236,5,'worker','insert','1431907314'),(242,5,'worker','insert','1431907410'),(243,5,'worker','insert','1431907413'),(251,5,'worker','insert','1431907485'),(254,5,'worker','insert','1431907511'),(255,5,'worker','insert','1431907514'),(263,5,'worker','insert','1431907592'),(264,5,'worker','insert','1431907595'),(270,5,'worker','insert','1431907714'),(271,5,'worker','insert','1431907718'),(277,5,'worker','insert','1431908398'),(278,5,'worker','insert','1431908405'),(281,5,'worker','insert','1431908408'),(282,5,'worker','insert','1431908415'),(538,5,'worker','insert','1431913603'),(539,5,'worker','insert','1431913611'),(578,5,'worker','insert','1431943253'),(579,5,'worker','insert','1431943264'),(15,5,'worker','select','1431900351'),(16,5,'worker','select','1431901049'),(17,5,'worker','select','1431901086'),(18,5,'worker','select','1431901088'),(19,5,'worker','select','1431901205'),(20,5,'worker','select','1431901207'),(21,5,'worker','select','1431901272'),(22,5,'worker','select','1431901279'),(23,5,'worker','select','1431901334'),(24,5,'worker','select','1431901336'),(25,5,'worker','select','1431901398'),(26,5,'worker','select','1431901404'),(27,5,'worker','select','1431901469'),(28,5,'worker','select','1431901581'),(29,5,'worker','select','1431901582'),(30,5,'worker','select','1431901705'),(31,5,'worker','select','1431902477'),(32,5,'worker','select','1431902521'),(33,5,'worker','select','1431902522'),(34,5,'worker','select','1431902523'),(35,5,'worker','select','1431902639'),(36,5,'worker','select','1431902640'),(37,5,'worker','select','1431902641'),(38,5,'worker','select','1431902650'),(39,5,'worker','select','1431902656'),(40,5,'worker','select','1431902695'),(41,5,'worker','select','1431902698'),(42,5,'worker','select','1431902845'),(43,5,'worker','select','1431902846'),(44,5,'worker','select','1431902855'),(45,5,'worker','select','1431902863'),(46,5,'worker','select','1431902874'),(47,5,'worker','select','1431902937'),(48,5,'worker','select','1431902948'),(49,5,'worker','select','1431902949'),(50,5,'worker','select','1431902959'),(51,5,'worker','select','1431902985'),(52,5,'worker','select','1431903080'),(53,5,'worker','select','1431903091'),(54,5,'worker','select','1431903097'),(55,5,'worker','select','1431903107'),(56,5,'worker','select','1431903108'),(57,5,'worker','select','1431903116'),(58,5,'worker','select','1431903349'),(59,5,'worker','select','1431903399'),(60,5,'worker','select','1431903445'),(61,5,'worker','select','1431903601'),(62,5,'worker','select','1431903644'),(63,5,'worker','select','1431903646'),(64,5,'worker','select','1431903647'),(65,5,'worker','select','1431903648'),(66,5,'worker','select','1431903675'),(67,5,'worker','select','1431904146'),(70,5,'worker','select','1431904157'),(71,5,'worker','select','1431904206'),(74,5,'worker','select','1431904209'),(84,5,'worker','select','1431904348'),(85,5,'worker','select','1431904352'),(86,5,'worker','select','1431904354'),(89,5,'worker','select','1431904358'),(92,5,'worker','select','1431904364'),(93,5,'worker','select','1431904366'),(94,5,'worker','select','1431904387'),(97,5,'worker','select','1431904392'),(100,5,'worker','select','1431904398'),(101,5,'worker','select','1431904399'),(102,5,'worker','select','1431904432'),(104,5,'worker','select','1431904437'),(105,5,'worker','select','1431904477'),(108,5,'worker','select','1431904481'),(109,5,'worker','select','1431904483'),(110,5,'worker','select','1431904623'),(113,5,'worker','select','1431904628'),(115,5,'worker','select','1431904632'),(116,5,'worker','select','1431904758'),(119,5,'worker','select','1431904762'),(120,5,'worker','select','1431905172'),(123,5,'worker','select','1431905179'),(126,5,'worker','select','1431905189'),(127,5,'worker','select','1431905400'),(128,5,'worker','select','1431905446'),(131,5,'worker','select','1431905450'),(132,5,'worker','select','1431905453'),(133,5,'worker','select','1431905476'),(134,5,'worker','select','1431905478'),(137,5,'worker','select','1431905480'),(138,5,'worker','select','1431905523'),(139,5,'worker','select','1431905524'),(140,5,'worker','select','1431905530'),(141,5,'worker','select','1431905531'),(142,5,'worker','select','1431905568'),(143,5,'worker','select','1431905570'),(144,5,'worker','select','1431905774'),(145,5,'worker','select','1431905777'),(146,5,'worker','select','1431905778'),(147,5,'worker','select','1431905824'),(148,5,'worker','select','1431905825'),(151,5,'worker','select','1431905830'),(152,5,'worker','select','1431905840'),(153,5,'worker','select','1431905853'),(156,5,'worker','select','1431905859'),(157,5,'worker','select','1431905876'),(158,5,'worker','select','1431905877'),(159,5,'worker','select','1431905931'),(162,5,'worker','select','1431905938'),(163,5,'worker','select','1431905940'),(165,5,'worker','select','1431905944'),(166,5,'worker','select','1431905945'),(167,5,'worker','select','1431905953'),(170,5,'worker','select','1431905959'),(171,5,'worker','select','1431905961'),(172,5,'worker','select','1431905969'),(173,5,'worker','select','1431906002'),(175,5,'worker','select','1431906004'),(176,5,'worker','select','1431906014'),(177,5,'worker','select','1431906023'),(180,5,'worker','select','1431906027'),(181,5,'worker','select','1431906028'),(183,5,'worker','select','1431906039'),(186,5,'worker','select','1431906043'),(187,5,'worker','select','1431906053'),(190,5,'worker','select','1431906059'),(191,5,'worker','select','1431906061'),(192,5,'worker','select','1431906069'),(193,5,'worker','select','1431906164'),(195,5,'worker','select','1431906212'),(196,5,'worker','select','1431906509'),(197,5,'worker','select','1431906593'),(198,5,'worker','select','1431906699'),(199,5,'worker','select','1431906796'),(200,5,'worker','select','1431906797'),(201,5,'worker','select','1431906798'),(202,5,'worker','select','1431906821'),(203,5,'worker','select','1431906894'),(206,5,'worker','select','1431906898'),(207,5,'worker','select','1431906906'),(208,5,'worker','select','1431906958'),(209,5,'worker','select','1431907034'),(210,5,'worker','select','1431907036'),(211,5,'worker','select','1431907043'),(214,5,'worker','select','1431907052'),(215,5,'worker','select','1431907053'),(216,5,'worker','select','1431907062'),(217,5,'worker','select','1431907073'),(219,5,'worker','select','1431907091'),(222,5,'worker','select','1431907098'),(223,5,'worker','select','1431907100'),(224,5,'worker','select','1431907110'),(225,5,'worker','select','1431907126'),(226,5,'worker','select','1431907134'),(229,5,'worker','select','1431907144'),(230,5,'worker','select','1431907145'),(231,5,'worker','select','1431907181'),(232,5,'worker','select','1431907253'),(233,5,'worker','select','1431907306'),(234,5,'worker','select','1431907310'),(237,5,'worker','select','1431907314'),(238,5,'worker','select','1431907316'),(239,5,'worker','select','1431907323'),(240,5,'worker','select','1431907324'),(241,5,'worker','select','1431907409'),(244,5,'worker','select','1431907413'),(246,5,'worker','select','1431907416'),(247,5,'worker','select','1431907419'),(248,5,'worker','select','1431907420'),(249,5,'worker','select','1431907472'),(250,5,'worker','select','1431907485'),(252,5,'worker','select','1431907509'),(253,5,'worker','select','1431907510'),(256,5,'worker','select','1431907514'),(257,5,'worker','select','1431907515'),(258,5,'worker','select','1431907527'),(259,5,'worker','select','1431907573'),(260,5,'worker','select','1431907574'),(261,5,'worker','select','1431907582'),(262,5,'worker','select','1431907591'),(265,5,'worker','select','1431907595'),(266,5,'worker','select','1431907596'),(268,5,'worker','select','1431907605'),(269,5,'worker','select','1431907710'),(272,5,'worker','select','1431907718'),(273,5,'worker','select','1431907720'),(276,5,'worker','select','1431908397'),(279,5,'worker','select','1431908405'),(280,5,'worker','select','1431908407'),(283,5,'worker','select','1431908415'),(284,5,'worker','select','1431908417'),(285,5,'worker','select','1431908515'),(287,5,'worker','select','1431908518'),(288,5,'worker','select','1431908526'),(289,5,'worker','select','1431908527'),(290,5,'worker','select','1431908536'),(292,5,'worker','select','1431908540'),(295,5,'worker','select','1431908549'),(296,5,'worker','select','1431908551'),(297,5,'worker','select','1431908560'),(307,5,'worker','select','1431908586'),(309,5,'worker','select','1431908590'),(312,5,'worker','select','1431908591'),(313,5,'worker','select','1431908600'),(316,5,'worker','select','1431908603'),(317,5,'worker','select','1431908615'),(318,5,'worker','select','1431908662'),(319,5,'worker','select','1431908673'),(320,5,'worker','select','1431908674'),(323,5,'worker','select','1431908677'),(324,5,'worker','select','1431908678'),(325,5,'worker','select','1431908754'),(326,5,'worker','select','1431908798'),(327,5,'worker','select','1431908828'),(331,5,'worker','select','1431908832'),(334,5,'worker','select','1431908846'),(340,5,'worker','select','1431908854'),(341,5,'worker','select','1431908863'),(344,5,'worker','select','1431908866'),(350,5,'worker','select','1431908873'),(353,5,'worker','select','1431908883'),(355,5,'worker','select','1431908898'),(362,5,'worker','select','1431910060'),(368,5,'worker','select','1431910223'),(372,5,'worker','select','1431910618'),(376,5,'worker','select','1431910621'),(382,5,'worker','select','1431910636'),(383,5,'worker','select','1431910782'),(387,5,'worker','select','1431910785'),(390,5,'worker','select','1431910790'),(392,5,'worker','select','1431910793'),(393,5,'worker','select','1431910809'),(395,5,'worker','select','1431910812'),(396,5,'worker','select','1431911112'),(397,5,'worker','select','1431911234'),(399,5,'worker','select','1431911236'),(400,5,'worker','select','1431911377'),(401,5,'worker','select','1431911769'),(406,5,'worker','select','1431911783'),(410,5,'worker','select','1431911794'),(415,5,'worker','select','1431911806'),(416,5,'worker','select','1431911814'),(422,5,'worker','select','1431911822'),(424,5,'worker','select','1431911825'),(426,5,'worker','select','1431911826'),(427,5,'worker','select','1431911835'),(430,5,'worker','select','1431911853'),(436,5,'worker','select','1431911859'),(438,5,'worker','select','1431911868'),(442,5,'worker','select','1431911873'),(444,5,'worker','select','1431911875'),(445,5,'worker','select','1431911885'),(449,5,'worker','select','1431911901'),(453,5,'worker','select','1431911915'),(458,5,'worker','select','1431911920'),(462,5,'worker','select','1431911932'),(464,5,'worker','select','1431911934'),(468,5,'worker','select','1431911971'),(473,5,'worker','select','1431911979'),(481,5,'worker','select','1431912001'),(483,5,'worker','select','1431912003'),(484,5,'worker','select','1431912224'),(485,5,'worker','select','1431912226'),(489,5,'worker','select','1431912279'),(491,5,'worker','select','1431912331'),(493,5,'worker','select','1431913285'),(495,5,'worker','select','1431913293'),(497,5,'worker','select','1431913304'),(500,5,'worker','select','1431913309'),(503,5,'worker','select','1431913313'),(504,5,'worker','select','1431913358'),(506,5,'worker','select','1431913361'),(508,5,'worker','select','1431913365'),(509,5,'worker','select','1431913387'),(510,5,'worker','select','1431913388'),(513,5,'worker','select','1431913391'),(514,5,'worker','select','1431913511'),(516,5,'worker','select','1431913516'),(518,5,'worker','select','1431913519'),(520,5,'worker','select','1431913522'),(524,5,'worker','select','1431913526'),(526,5,'worker','select','1431913563'),(528,5,'worker','select','1431913568'),(530,5,'worker','select','1431913570'),(534,5,'worker','select','1431913573'),(536,5,'worker','select','1431913575'),(537,5,'worker','select','1431913602'),(540,5,'worker','select','1431913611'),(550,5,'worker','select','1431913634'),(557,5,'worker','select','1431913645'),(558,5,'worker','select','1431913656'),(559,5,'worker','select','1431913827'),(561,5,'worker','select','1431913916'),(562,5,'worker','select','1431913956'),(567,5,'worker','select','1431914316'),(568,5,'worker','select','1431914660'),(569,5,'worker','select','1431914709'),(572,5,'worker','select','1431914746'),(575,5,'worker','select','1431914930'),(576,5,'worker','select','1431919100'),(577,5,'worker','select','1431943247'),(580,5,'worker','select','1431943265'),(581,5,'worker','select','1431943268'),(582,5,'worker','select','1431943298'),(583,5,'worker','select','1431943300'),(584,5,'worker','select','1431943316'),(585,5,'worker','select','1431943519'),(586,5,'worker','select','1431943535'),(587,5,'worker','select','1431943584'),(588,5,'worker','select','1431943597'),(589,5,'worker','select','1431943611'),(590,5,'worker','select','1431943627'),(591,5,'worker','select','1431943641'),(592,5,'worker','select','1431943644'),(593,5,'worker','select','1431943690'),(594,5,'worker','select','1431943838'),(87,5,'worker','update','1431904356'),(88,5,'worker','update','1431904358'),(90,5,'worker','update','1431904362'),(91,5,'worker','update','1431904364'),(106,5,'worker','update','1431904479'),(107,5,'worker','update','1431904481'),(111,5,'worker','update','1431904624'),(112,5,'worker','update','1431904628'),(117,5,'worker','update','1431904759'),(118,5,'worker','update','1431904762'),(121,5,'worker','update','1431905176'),(122,5,'worker','update','1431905178'),(124,5,'worker','update','1431905184'),(125,5,'worker','update','1431905188'),(149,5,'worker','update','1431905828'),(150,5,'worker','update','1431905830'),(154,5,'worker','update','1431905855'),(155,5,'worker','update','1431905859'),(160,5,'worker','update','1431905935'),(161,5,'worker','update','1431905938'),(168,5,'worker','update','1431905955'),(169,5,'worker','update','1431905959'),(178,5,'worker','update','1431906024'),(179,5,'worker','update','1431906027'),(184,5,'worker','update','1431906041'),(185,5,'worker','update','1431906043'),(188,5,'worker','update','1431906056'),(189,5,'worker','update','1431906059'),(204,5,'worker','update','1431906895'),(205,5,'worker','update','1431906898'),(212,5,'worker','update','1431907046'),(213,5,'worker','update','1431907052'),(293,5,'worker','update','1431908541'),(294,5,'worker','update','1431908549'),(388,5,'worker','update','1431910788'),(389,5,'worker','update','1431910790'),(72,5,'worker2','insert','1431904207'),(73,5,'worker2','insert','1431904209'),(76,5,'worker2','insert','1431904228'),(77,5,'worker2','insert','1431904229'),(80,5,'worker2','insert','1431904253'),(81,5,'worker2','insert','1431904254'),(75,5,'worker2','select','1431904227'),(78,5,'worker2','select','1431904230'),(79,5,'worker2','select','1431904251'),(82,5,'worker2','select','1431904255'),(83,5,'worker2','select','1431904275'),(95,5,'worker2','update','1431904389'),(96,5,'worker2','update','1431904392'),(98,5,'worker2','update','1431904394'),(99,5,'worker2','update','1431904397'),(103,5,'worker2','update','1431904434');
/*!40000 ALTER TABLE `audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forbidden_audit`
--

DROP TABLE IF EXISTS `forbidden_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forbidden_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`table_name`,`operation_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forbidden_audit`
--

LOCK TABLES `forbidden_audit` WRITE;
/*!40000 ALTER TABLE `forbidden_audit` DISABLE KEYS */;
INSERT INTO `forbidden_audit` VALUES (4,'user','delete'),(3,'user','insert'),(1,'user','select'),(2,'user','update');
/*!40000 ALTER TABLE `forbidden_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1431855254),('m130524_201442_init',1431855257),('m150412_153335_add_simple_data',1431855257),('m150412_153419_add_role',1431855258),('m150412_155145_init_permissions',1431855262),('m150426_160239_add_audit',1431855262),('m150517_102230_add_replica_field',1431858295),('m150518_094405_add_valid_field',1431942427);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(50) NOT NULL,
  `field_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`table_name`,`field_name`,`operation_name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES (34,'position','id','delete'),(25,'position','id','insert'),(7,'position','id','select'),(16,'position','id','update'),(36,'position','position','delete'),(27,'position','position','insert'),(9,'position','position','select'),(18,'position','position','update'),(35,'position','worker_id','delete'),(26,'position','worker_id','insert'),(8,'position','worker_id','select'),(17,'position','worker_id','update'),(31,'salary','id','delete'),(22,'salary','id','insert'),(4,'salary','id','select'),(13,'salary','id','update'),(33,'salary','salary','delete'),(24,'salary','salary','insert'),(6,'salary','salary','select'),(15,'salary','salary','update'),(32,'salary','worker_id','delete'),(23,'salary','worker_id','insert'),(5,'salary','worker_id','select'),(14,'salary','worker_id','update'),(29,'worker','first_name','delete'),(20,'worker','first_name','insert'),(2,'worker','first_name','select'),(11,'worker','first_name','update'),(28,'worker','id','delete'),(19,'worker','id','insert'),(1,'worker','id','select'),(10,'worker','id','update'),(30,'worker','last_name','delete'),(21,'worker','last_name','insert'),(3,'worker','last_name','select'),(12,'worker','last_name','update');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `valid` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `worker` (`worker_id`),
  CONSTRAINT `worker` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (9,14,'Admin','1');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(5,'director'),(3,'manager'),(4,'operator'),(2,'sec_admin');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permission`
--

DROP TABLE IF EXISTS `role_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`role_id`,`permission_id`),
  KEY `permission_id` (`permission_id`),
  CONSTRAINT `permission_id` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`),
  CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permission`
--

LOCK TABLES `role_permission` WRITE;
/*!40000 ALTER TABLE `role_permission` DISABLE KEYS */;
INSERT INTO `role_permission` VALUES (10,2,1),(14,2,2),(18,2,3),(22,2,7),(26,2,8),(30,2,9),(11,2,10),(15,2,11),(19,2,12),(23,2,16),(27,2,17),(31,2,18),(12,2,19),(16,2,20),(20,2,21),(24,2,25),(28,2,26),(32,2,27),(13,2,28),(17,2,29),(21,2,30),(25,2,34),(29,2,35),(33,2,36),(34,3,1),(36,3,2),(38,3,3),(40,3,4),(42,3,5),(44,3,6),(35,3,10),(37,3,11),(39,3,12),(41,3,13),(43,3,14),(45,3,15),(1,4,1),(2,4,2),(3,4,3),(4,4,4),(5,4,5),(6,4,6),(7,4,7),(8,4,8),(9,4,9),(46,5,1),(50,5,2),(54,5,3),(58,5,4),(62,5,5),(66,5,6),(70,5,7),(74,5,8),(78,5,9),(47,5,10),(51,5,11),(55,5,12),(59,5,13),(63,5,14),(67,5,15),(71,5,16),(75,5,17),(79,5,18),(48,5,19),(52,5,20),(56,5,21),(60,5,22),(64,5,23),(68,5,24),(72,5,25),(76,5,26),(80,5,27),(49,5,28),(53,5,29),(57,5,30),(61,5,31),(65,5,32),(69,5,33),(73,5,34),(77,5,35),(81,5,36);
/*!40000 ALTER TABLE `role_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `valid` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (3,14,'Admin','1');
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary2`
--

DROP TABLE IF EXISTS `salary2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `valid` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `worker_id` (`worker_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary2`
--

LOCK TABLES `salary2` WRITE;
/*!40000 ALTER TABLE `salary2` DISABLE KEYS */;
INSERT INTO `salary2` VALUES (3,14,'Admin','1');
/*!40000 ALTER TABLE `salary2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'operator',
  `replica` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'operator','g6zsnDfaijLZToXiPy4bDbKy5O5_Aoxj','06e55b633481f7bb072957eabcf110c972e86691c3cfedabe088024bffe42f23',NULL,'operator@mail.or',10,1431861278,1431861278,'operator','0'),(5,'admin','3rZeeXkXa4u2y11-mQIc-fTXTK_m-_CL','d82494f05d6917ba02f7aaa29689ccb444bb73f20380876cb05d1f37537b7892','7334821429a99561be94ccfc7b8d6f9b85af618fdb5e323f5fa3637c6947a349','admin@mail.admin',10,1431866142,1431866142,'admin','0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `valid` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker`
--

LOCK TABLES `worker` WRITE;
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` VALUES (14,'Admin','Admin','1'),(15,'myown','own','0');
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-18 13:22:36
