-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: localhost    Database: emphasis_patients
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
-- Table structure for table `_locations`
--

DROP TABLE IF EXISTS `_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` varchar(60) NOT NULL,
  `lng` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `contacted` varchar(255) NOT NULL,
  `infosent` varchar(255) NOT NULL,
  `trainingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aftertrainingemail` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `_locations`
--

LOCK TABLES `_locations` WRITE;
/*!40000 ALTER TABLE `_locations` DISABLE KEYS */;
INSERT INTO `_locations` VALUES (8,101,'Anwer Kamal','Pharmacy Manager','604-908-1446','phr01554@loblaw.ca','Loblaw Pharmacy 1554 ','8195 120 Street, Delta, V4C 6P7','49.1516507','-122.891891','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(9,102,'Manjot Sekhon','Pharmacist','604-460-4335','phr01555@loblaw.ca','Loblaw Pharmacy 1555','201 -19800 Lougheed Highway, Pitt Meadows, V3Y 2W1','49.2231796','-122.6711447','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(10,103,'Samer Putris','Pharmacy Manager','604-791-2171 wk: 604-859-6501','phr01860@loblaw.ca','Loblaw Pharmacy 4368','32900 S Fraser Way, Abbotsford, BC V2S 5A1','49.0498975','-122.3124766','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(11,104,'Zain Moosvi','Pharmacy Manager','604-562-0128','phr01556@loblaw.ca','Loblaw Pharmacy 1556','14650 -104 Avenue, Surrey, V3R 1M3','49.1907854','-122.8158374','','y','','2015-07-03 21:10:05','0000-00-00 00:00:00'),(12,105,'Coralee Chin','Pharmacy Manager','604-599-3706','phr01521@loblaw.ca','Loblaw Pharmacy 1521','7550 King George Boulevard, Surrey, V3W 2T2','49.139663','-122.845258','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(13,106,'Parminder Kullar','Pharmacy Manager','604-751-1380 or 604-557-5230','phr01558@loblaw.ca','Loblaw Pharmacy 1558','2855 Gladwin Road, Abbotsford, V2T 6Y4','49.0541897','-122.3177055','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(14,107,'June Hui','Pharmacy Supervisor','604-728-8089','phr08551@loblaw.ca','Loblaw Pharmacy 8551','118 - 22441 Dewdney Trunk Rd, Maple Ridge','49.2211219','-122.5998736','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(15,108,'Gurjeet Sidhu','Pharmacy Manager','778-245-4875','phr01559@loblaw.ca','Loblaw Pharmacy 1559','32136 Lougheed Highway, Mission, V2V 1A4','49.1311266','-122.3336698','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(16,109,'Gerry Kang','Pharmacy Manager','604-803-5264','phr01561@loblaw.ca','Loblaw Pharmacy 1561','19851 Willowbrook Drive, Langley, V2Y 1A7','49.1182859','-122.6734786','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(17,110,'Ling Wong','Pharmacy Manager','604-576-3126 or 778-230-4924','phr01818@loblaw.ca','Loblaw Pharmacy 4616 ','18765 Fraser Hwy, Surrey, V3S 8E7','49.1254976','-122.7023386','','y','','2015-07-03 21:10:16','0000-00-00 00:00:00'),(18,111,'Rami Khatib','Pharmacy Manager','604-740-5765','phr08580@loblaw.ca','Loblaw Pharmacy 8580','5530 Sunshine Coast Hwy, Sechelt, V0N 3A0','49.4739882','-123.754548','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(19,112,'Nancy Ly','Pharmacy Manager','604-708-8084','phr03403@loblaw.ca','Loblaw pharmacy 4979','310 Broadway St W, Vancouver, V5Y 1R2','49.263006','-123.1113591','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(20,113,'Elaina Yeung','Pharmacy Manager','604-430-3381','phr08563@loblaw.ca','Loblaw Pharmacy 8563','Champlain Mall 7190 Kerr Street, Vancouver, V5S 4W2','49.2178368','-123.0414123','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(21,114,'David Lo','Pharmacist','604-813-3283','phr01557@loblaw.ca','Loblaw Pharmacy 1557','4651 No. 3 Road Richmond, V6X 2C4','49.1794557','-123.1379831','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(22,115,'Tom Kin','Pharmacy Manager','778-230-6323','phr04252@loblaw.ca','Loblaw Pharmacy (T&T)','147 4800 Kingsway, Burnaby, V5H 4J2','49.2258097','-122.9971576','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(23,116,'Mohamed Rehmtullu','Pharmacy Manager','604-824-4230','phr01523@loblaw.ca','loblaw Pharmacy 1523','45779 Luckakuck Way Chilliwack, V2R 4E8?','49.143191','-121.9597226','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(24,117,'Bjorn Li','Pharmacy Supervisor ','604-520-8305','phr01519@loblaw.ca','Loblaw Pharmacy 1519','1301 Lougheed Highway Coquitlam, V3K 6P9','49.2354569','-122.8563328','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(25,118,'Ben Yeung','Pharmacist ','778-227-9088','phr01560@loblaw.ca','Loblaw Pharmacy 1560','333 Seymour Blvd. North Vancouver, V7J 2J4','49.3115551','-123.0247728','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(26,119,'Valeria Mirilovicova','Pharmacy Manager','604-898-6818','phr08566@loblaw.ca','Loblaw Pharmacy 8566','1900 Garibaldi Way Box 190 Garibaldi Highlands, V0N 1T0','49.7187574','-123.2580639','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(27,120,'Tom Fung','Pharmacy Manager','604-436-6404','phr01520@loblaw.ca','Loblaw Pharmacy 1520','3185 Grandview Hwy. Vancouver, V5M 2E9','49.2586448','-123.0356808','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(28,121,'Wendy Lee','121 Pharmacy Manager','778-688-3069','phr01518@loblaw.ca','Loblaw Pharmacy 1518','Eaton Centre 105  4700 Kingsway, Burnaby, V5H 4M1','49.2260969','-123.002427','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(29,122,'Kenneth D\'Silva','Pharmacy Manager','604-937-1205','phr01875@loblaw.ca','Loblaw pharmacy 4596','455 North Rd Coquitlam, V3K 3V9','49.2482019','-122.8921173','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(30,123,'Raj Brar','Pharmacy Manager','604-322-3706','phr01517@loblaw.ca','Loblaw Pharmacy 1517','350 Marine Dr SE, Vancouver, V5X 2S5','49.2088387','-123.0995962','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(31,124,'Doreen Mak','Pharmacy Manager','604-875-0799','phr01526@loblaw.ca','Loblaw Pharmacy 1526','3000 Lougheed Hwy. Coquitlam, V3B 1C5','49.2740019','-122.794369','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(32,125,'David Ram ','Clinical Pharmacist','250-714-0703','rxrampharmacy@shaw.ca','Rx Ram','103-1629 Townsite Road, Nanaimo Bc, V9S 1N3','49.1814012','-123.9773396','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(33,126,'Ajit Johal','Clinical Pharmacist','604-418-8977','ajitjohal21@gmail.com','Wilson Pharmacy','3 - 2185 Wilson Ave, Port Coquitlam, BC, V3C 6J5','49.2610071','-122.7771013','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(34,127,'Chi-On Leung','Pharmacist','604-754-0414','cleung005@gmail.com','Howe Sound Pharmacy','Gibsons Park Plaza 208 1100 Sunshine Coast Hwy, Gibsons BC V0N 1V7','49.4081172','-123.5311296','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(35,128,'Greg Becotte','Amstrong','250-546-3169 ','gregbecotte@gmail.com','Rexall Armstrong Pharmacy and Wellness Center','3300 Smith Drive, Armstrong, BC, V0E1V0','50.4468927','-119.1844294','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(36,129,'Greg Becotte','Enderby',' 250-838-6469','gregbecotte@gmail.com','Rexall (Enderdby pharmacy and wellness center)','513 Cliff Ave, Enderby, BC V0E 1V0','50.5504084','-119.1382683','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(37,130,'Anoop Khurana','Pharmacist Owner','604-251-5358  cell 6048032130','asdm2294@shoppersdrugmart.ca','Shoppers Drug Mart #2294 Hasting and Slocan','2748 E Hastings St, Vancouver, BC V5K 1Z9','49.2810085','-123.04827','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(38,131,'Davinder Purewal','Pharmacy Manager','604-590-5587 cell: 778-834-9772','dapurewal@shaw.ca','Somerset Pharmacy','7-13791 72nd Avenue Surrey, B.C. V3W 9Y9','49.134269','-122.83906','','y','','2015-06-15 23:56:32','0000-00-00 00:00:00'),(39,132,'Peter Murray','Pharmacist','250-374-7226','','Pratt\\\'s Compounding Pharmacy ','100-321 Nicola St, Kamloops, BC V2C 6G6','50.6721063','-120.3339363','','HH','10-Jun-15','2015-06-17 00:44:34','0000-00-00 00:00:00'),(40,133,'Jasvinder Sandhu','Pharmacist','604-581-3636','krollspharmacy@gmail.com','Krolls Surrey Pharmacy   ','100-9656 KING GEORGE BLVD. Surrey, BC V3T 2V5','49.1780525','-122.8452947','','LG','09-Jun-15','2015-06-15 23:56:32','0000-00-00 00:00:00'),(41,134,'Lori Bonertz','Pharmacist','1-250-785-3234','paulori@mac.com','Fort St John Pharmacy and Wellness Centre ','300 9730 101ST,FORT ST JOHN, BC, V1J 2A8','56.2476362','-120.8436137','','LG','09-Jun-15','2015-06-15 23:56:32','0000-00-00 00:00:00'),(168,142,'David lee','Pharmacist','604-876-2511','','The Medicine Shoppe ','2030 Kingsway, Vancouver, BC,  V5N 2T3','49.2448656','-123.0646561','','','','2015-07-21 21:37:58','2015-07-21 21:26:00'),(169,143,'Colleen Hogg','Pharmacist','250-285-2275','collhogg@hotmail.com','Peoples drugmart','654 Harper Rd Quathiaski Cove, BC V0P 1N0','50.0400299','-125.2095795','','','','2015-08-13 04:29:00','2015-08-12 21:32:00'),(170,135,'Anudeep Nirval ( Zahid 604-726-6333 zahid@canadahealthlink.com)','','604-585-1210','naz3@nazwellness.com','NAZ Pharmacy','105 9385 120th Street Delta BC V4C 0B5','49.1737563','-122.8907002','','LG','y','2015-07-24 16:47:00','2015-07-24 19:00:00'),(171,136,'Asif Walji (  Zahid 604-726-6333)','','604-951-1002','well3@nazwellness.com','Wellness Pharmacy #3','103 13737 96 Ave, Surrey, BC V3V 0C6','49.1773734','-122.8426682','','LG','yes','2015-09-11 17:20:56','2015-07-23 19:00:00');
/*!40000 ALTER TABLE `_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('phar','patient') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (11,'phar','What are the requirements to take part in this study?','<p>For this trial we need 370 patients to be able to assess the impact of the EmPhAsIS intervention on asthma medication adherence and patient outcomes. We ask that pharmacy partners recruit a minimum of 8 asthma patients.</p>','2015-04-09 23:14:32'),(12,'phar','What are my responsibilities?','As a pharmacy partner, your responsibilities include:\r\n<li>Screening and recruiting patient participants\r\n<li>Providing standard education to patients\r\n<li>Following up with patients having difficulties with their asthma using questionnaires to guide counseling\r\n','2014-11-26 22:40:11'),(13,'phar','Where can I get specific information about the study for interested patients and myself?','Pharmacy partners will receive a comprehensive guide containing pharmacist support materials, study details, resources for patients and assessment forms. For more details on how to enroll in this study, contact primary investigator Mary De Vera. ','2014-11-26 22:40:11'),(15,'patient','What are the benefits of participating in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">As a patient you may or may not benefit from being a part of this study. If you choose to participate the information collected from this study will be used to determine if text messaging can improve patient compliance to asthma medication. There is a possibility that your asthma may not improve from this study.</span></p>','2014-11-26 23:16:00'),(16,'phar','Is there any harm associated with taking part in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Since there is no new treatment being initiated through this study there should not be any harm in participating.</span></p>','2014-11-26 23:18:02'),(17,'patient','Is there any harm associated with taking part in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Since there is no new treatment being initiated through this study there should not be any harm in participating.</span></p>','2014-11-26 23:24:20');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interventions`
--

DROP TABLE IF EXISTS `interventions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interventions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interventions`
--

LOCK TABLES `interventions` WRITE;
/*!40000 ALTER TABLE `interventions` DISABLE KEYS */;
INSERT INTO `interventions` VALUES (1,'Study Forms','<ul>\r\n<li><span style=\"font-family: sans-serif; font-size: medium; line-height: 22.8571434020996px;\"><a href=\"../../../../../cinfo/app/files/Flow Chart Intervention March5.pdf\">Enrolment and Recruitment Flow Chart</a></span></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Instruction for Intervention Enrollment Feb12 2015.pdf\">Instructions for Enrolment</a></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Contact Information FormFeb 11 2015.pdf\">Contact Information Form</a></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Emphasis Demographics form FEB 11 2015.pdf\">Demographics Form</a></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Emphasis Consent form  21JAN2015.pdf\">Subject Information Consent Form</a></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Emphasis Screening Onpaper form FEB12 2015.pdf\">Participant Screening Form</a></li>\r\n<li><a href=\"../../../../../cinfo/app/files/Study logFEB 172015.pdf\">Study Log</a></li>\r\n</ul>','2015-07-24 19:00:16'),(2,'Weltel Link','<p><a href=\"https://emphasis.weltel.org\">Weltel Login</a>.</p>','2015-07-15 17:24:52'),(6,'Resources','<ul>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/EmphasisPharmacist Guide INTERVENTION 20Jan 2015.pdf\">Pharmacist Guide for Intervention Pharmacies</a></li>\r\n<li><a href=\"http://www.bcguidelines.ca/guideline_asthma.html\">BC Asthma Guideline</a></li>\r\n<li><a href=\"http://www.bcguidelines.ca/pdf/asthma_appendix_b.pdf\">Asthma Action Plan</a></li>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Pocket Guide 2015_wms_np.pdf\">Pocket Guide for Asthma Management and Prevention by Global Initiative for Asthma</a></li>\r\n</ul>','2016-01-07 23:12:41'),(11,'Pharmacist Information','<p>The EmPhAsIS study will determine if pharmacist initiated education and text messages assessing asthma management will improve patient compliance and outcomes.</p>\r\n<p><strong>Information and Training Webinar</strong></p>\r\n<ul>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Stills.pdf\">Webinar: Still Version</a></li>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Handouts.pdf\">Webinar: Handout Version for Printing</a></li>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Information and Training Webinar Intervention.pptx\">Information and Training Webinar Intervention</a></li>\r\n</ul>','2016-01-07 23:13:57'),(19,'Mini-Webinars','<!--<table>\r\n<tbody>\r\n<tr><th>Stills</th><th>Handouts</th></tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/1_Emphasis webinar - recruiting and screening FINAL.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/1_Emphasis webinar - recruiting and screening FINAL handouts.pdf\">Recruiting and Screening Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/2_Emphasis webinar - consenting and enrolling FINAL.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/2_Emphasis webinar - consenting and enrolling FINAL handouts.pdf\">Consenting and Enrolling Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/3_Emphasis Webinar - intervention next steps FINAL.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/3_Emphasis Webinar - intervention next steps FINAL handouts.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/4_Emphasis Webinar - intervention monthly follow-up WelTel FINAL.pdf\"> Monthly Followup Procedures and WelTel</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/4_Emphasis Webinar - intervention monthly follow-up WelTel FINAL handouts.pdf\"> Monthly Followup Procedures and WelTel</a></td>\r\n</tr>\r\n</tbody>\r\n</table>-->\r\n<table>\r\n<tbody>\r\n<tr><th>Stills</th><th>Handouts</th><th>Videos</th></tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/1_Emphasis webinar - recruiting and screening FINAL.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/1_Emphasis webinar - recruiting and screening FINAL handouts.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/1_Emphasis webinar - recruiting and screening FINAL.mp4\">Recruiting and Screening Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/2_Emphasis webinar - consenting and enrolling FINAL.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/2_Emphasis webinar - consenting and enrolling FINAL handouts.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/2_Emphasis webinar - consenting and enrolling FINAL.mp4\">Consenting and Enrolling Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/3_Emphasis Webinar - intervention next steps FINAL.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/3_Emphasis Webinar - intervention next steps FINAL handouts.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/3_Emphasis Webinar - intervention next steps FINAL.mp4\"> Baseline Procedures, Next Steps</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Intervention/4_Emphasis Webinar - intervention monthly follow-up WelTel FINAL.pdf\"> Monthly Followup Procedures and WelTel</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/4_Emphasis Webinar - intervention monthly follow-up WelTel FINAL handouts.pdf\"> Monthly Followup Procedures and WelTel</a></td>\r\n<td><a href=\"files/Mini-Webinars/Intervention/4_Emphasis Webinar - intervention monthly follow-up WelTel FINAL.mp4\"> Monthly Followup Procedures and WelTel</a></td>\r\n</tr>\r\n</tbody>\r\n</table>','2016-03-02 00:29:11'),(20,'Newsletters','<table style=\"height: 58px;\" width=\"588\">\r\n<tbody>\r\n<tr><th>Blogs</th><th>Newsletters</th></tr>\r\n<tr>\r\n<td><a href=\"http://emphasis.core.ubc.ca/pdf/DidUKnow.pdf\" target=\"_blank\">Did You Know</a></td>\r\n<td><a href=\"http://emphasis.core.ubc.ca/pdf/Behind.pdf\" target=\"_blank\">Behind the Scene 1st Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_2nd.pdf\" target=\"_blank\">Behind the Scene 2nd Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_3rd.pdf\" target=\"_blank\">Behind the Scene 3rd Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_4th.pdf\" target=\"_blank\">Behind the Scene 4th Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_5th.pdf\" target=\"_blank\">Behind the Scene 5th Edition<br /></a><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_6th.pdf\">Behind the Scene 6th Edition</a><br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_7th.pdf\">Behind the Scene 7th Edition<br /></a><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_8th.pdf\">Behind the Scene 8th Edition</a></td>\r\n</tr>\r\n</tbody>\r\n</table>','2017-07-06 04:58:12');
/*!40000 ALTER TABLE `interventions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` varchar(60) NOT NULL,
  `lng` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `contacted` varchar(255) NOT NULL,
  `infosent` varchar(255) NOT NULL,
  `trainingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aftertrainingemail` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=243 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (8,101,'Anwer Kamal','Pharmacy Manager','604-908-1446','phr01554@loblaw.ca','Loblaw Pharmacy 1554 ','8195 120 Street, Delta, V4C 6P7','49.1516507','-122.891891','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(9,102,'Manjot Sekhon','Pharmacist','604-460-4335','phr01555@loblaw.ca','Loblaw Pharmacy 1555','201 -19800 Lougheed Highway, Pitt Meadows, V3Y 2W1','49.2231796','-122.6711447','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(10,103,'Samer Putris','Pharmacy Manager','604-791-2171 wk: 604-859-6501','phr01860@loblaw.ca','Loblaw Pharmacy 4368','32900 S Fraser Way, Abbotsford, BC V2S 5A1','49.0498975','-122.3124766','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(11,104,'Zain Moosvi','Pharmacy Manager','604-562-0128','phr01556@loblaw.ca','Loblaw Pharmacy 1556','14650 -104 Avenue, Surrey, V3R 1M3','49.1907854','-122.8158374','','y','','2015-07-03 21:10:05','0000-00-00 00:00:00'),(12,105,'Coralee Chin','Pharmacy Manager','604-599-3706','phr01521@loblaw.ca','Loblaw Pharmacy 1521','7550 King George Boulevard, Surrey, V3W 2T2','49.139663','-122.845258','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(13,106,'Parminder Kullar','Pharmacy Manager','604-751-1380 or 604-557-5230','phr01558@loblaw.ca','Loblaw Pharmacy 1558','2855 Gladwin Road, Abbotsford, V2T 6Y4','49.0541897','-122.3177055','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(14,107,'June Hui','Pharmacy Supervisor','604-728-8089','phr08551@loblaw.ca','Loblaw Pharmacy 8551','118 - 22441 Dewdney Trunk Rd, Maple Ridge','49.2211219','-122.5998736','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(15,108,'Gurjeet Sidhu','Pharmacy Manager','778-245-4875','phr01559@loblaw.ca','Loblaw Pharmacy 1559','32136 Lougheed Highway, Mission, V2V 1A4','49.1311266','-122.3336698','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(16,109,'Gerry Kang','Pharmacy Manager','604-803-5264','phr01561@loblaw.ca','Loblaw Pharmacy 1561','19851 Willowbrook Drive, Langley, V2Y 1A7','49.1182859','-122.6734786','','y','','2015-06-15 23:56:01','0000-00-00 00:00:00'),(17,110,'Ling Wong','Pharmacy Manager','604-576-3126 or 778-230-4924','phr01818@loblaw.ca','Loblaw Pharmacy 4616 ','18765 Fraser Hwy, Surrey, V3S 8E7','49.1254976','-122.7023386','','y','','2015-07-03 21:10:16','0000-00-00 00:00:00'),(18,111,'Rami Khatib','Pharmacy Manager','604-740-5765','phr08580@loblaw.ca','Loblaw Pharmacy 8580','5530 Sunshine Coast Hwy, Sechelt, V0N 3A0','49.4739882','-123.754548','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(19,112,'Nancy Ly','Pharmacy Manager','604-708-8084','phr03403@loblaw.ca','Loblaw pharmacy 4979','310 Broadway St W, Vancouver, V5Y 1R2','49.263006','-123.1113591','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(20,113,'Elaina Yeung','Pharmacy Manager','604-430-3381','phr08563@loblaw.ca','Loblaw Pharmacy 8563','Champlain Mall 7190 Kerr Street, Vancouver, V5S 4W2','49.2178368','-123.0414123','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(21,114,'David Lo','Pharmacist','604-813-3283','phr01557@loblaw.ca','Loblaw Pharmacy 1557','4651 No. 3 Road Richmond, V6X 2C4','49.1794557','-123.1379831','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(22,115,'Tom Kin','Pharmacy Manager','778-230-6323','phr04252@loblaw.ca','Loblaw Pharmacy (T&T)','147 4800 Kingsway, Burnaby, V5H 4J2','49.2258097','-122.9971576','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(23,116,'Mohamed Rehmtullu','Pharmacy Manager','604-824-4230','phr01523@loblaw.ca','loblaw Pharmacy 1523','45779 Luckakuck Way Chilliwack, V2R 4E8?','49.143191','-121.9597226','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(24,117,'Bjorn Li','Pharmacy Supervisor ','604-520-8305','phr01519@loblaw.ca','Loblaw Pharmacy 1519','1301 Lougheed Highway Coquitlam, V3K 6P9','49.2354569','-122.8563328','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(25,118,'Ben Yeung','Pharmacist ','778-227-9088','phr01560@loblaw.ca','Loblaw Pharmacy 1560','333 Seymour Blvd. North Vancouver, V7J 2J4','49.3115551','-123.0247728','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(26,119,'Valeria Mirilovicova','Pharmacy Manager','604-898-6818','phr08566@loblaw.ca','Loblaw Pharmacy 8566','1900 Garibaldi Way Box 190 Garibaldi Highlands, V0N 1T0','49.7187574','-123.2580639','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(27,120,'Tom Fung','Pharmacy Manager','604-436-6404','phr01520@loblaw.ca','Loblaw Pharmacy 1520','3185 Grandview Hwy. Vancouver, V5M 2E9','49.2586448','-123.0356808','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(28,121,'Wendy Lee','121 Pharmacy Manager','778-688-3069','phr01518@loblaw.ca','Loblaw Pharmacy 1518','Eaton Centre 105  4700 Kingsway, Burnaby, V5H 4M1','49.2260969','-123.002427','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(29,122,'Kenneth D\'Silva','Pharmacy Manager','604-937-1205','phr01875@loblaw.ca','Loblaw pharmacy 4596','455 North Rd Coquitlam, V3K 3V9','49.2482019','-122.8921173','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(30,123,'Raj Brar','Pharmacy Manager','604-322-3706','phr01517@loblaw.ca','Loblaw Pharmacy 1517','350 Marine Dr SE, Vancouver, V5X 2S5','49.2088387','-123.0995962','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(31,124,'Doreen Mak','Pharmacy Manager','604-875-0799','phr01526@loblaw.ca','Loblaw Pharmacy 1526','3000 Lougheed Hwy. Coquitlam, V3B 1C5','49.2740019','-122.794369','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(32,125,'David Ram ','Clinical Pharmacist','250-714-0703','rxrampharmacy@shaw.ca','Rx Ram','103-1629 Townsite Road, Nanaimo Bc, V9S 1N3','49.1814012','-123.9773396','','y','','2015-06-15 23:56:02','0000-00-00 00:00:00'),(33,126,'Ajit Johal','Clinical Pharmacist','604-418-8977','ajitjohal21@gmail.com','Wilson Pharmacy','3 - 2185 Wilson Ave, Port Coquitlam, BC, V3C 6J5','49.2610071','-122.7771013','','y','','2015-06-15 23:56:20','0000-00-00 00:00:00'),(34,127,'Chi-On Leung','Pharmacist','604-754-0414','cleung005@gmail.com','Howe Sound Pharmacy','Gibsons Park Plaza 208 1100 Sunshine Coast Hwy, Gibsons BC V0N 1V7','49.4081172','-123.5311296','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(35,128,'Greg Becotte','Amstrong','250-546-3169 ','gregbecotte@gmail.com','Rexall Armstrong Pharmacy and Wellness Center','3300 Smith Drive, Armstrong, BC, V0E1V0','50.4468927','-119.1844294','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(36,129,'Greg Becotte','Enderby',' 250-838-6469','gregbecotte@gmail.com','Rexall (Enderdby pharmacy and wellness center)','513 Cliff Ave, Enderby, BC V0E 1V0','50.5504084','-119.1382683','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(37,130,'Anoop Khurana','Pharmacist Owner','604-251-5358  cell 6048032130','asdm2294@shoppersdrugmart.ca','Shoppers Drug Mart #2294 Hasting and Slocan','2748 E Hastings St, Vancouver, BC V5K 1Z9','49.2810085','-123.04827','','y','','2015-07-03 21:11:22','0000-00-00 00:00:00'),(38,131,'Davinder Purewal','Pharmacy Manager','604-590-5587 cell: 778-834-9772','dapurewal@shaw.ca','Somerset Pharmacy','7-13791 72nd Avenue Surrey, B.C. V3W 9Y9','49.134269','-122.83906','','y','','2015-06-15 23:56:32','0000-00-00 00:00:00'),(39,132,'Peter Murray','Pharmacist','250-374-7226','','Pratt\\\'s Compounding Pharmacy ','100-321 Nicola St, Kamloops, BC V2C 6G6','50.6721063','-120.3339363','','HH','10-Jun-15','2015-06-17 00:44:34','0000-00-00 00:00:00'),(40,133,'Jasvinder Sandhu','Pharmacist','604-581-3636','krollspharmacy@gmail.com','Krolls Surrey Pharmacy   ','100-9656 KING GEORGE BLVD. Surrey, BC V3T 2V5','49.1780525','-122.8452947','','LG','09-Jun-15','2015-06-15 23:56:32','0000-00-00 00:00:00'),(41,134,'Lori Bonertz','Pharmacist','1-250-785-3234','paulori@mac.com','Fort St John Pharmacy and Wellness Centre ','300 9730 101ST,FORT ST JOHN, BC, V1J 2A8','56.2476362','-120.8436137','','LG','09-Jun-15','2015-06-15 23:56:32','0000-00-00 00:00:00'),(168,142,'David lee','Pharmacist','604-876-2511','dlee@pharmacybc.com','The Medicine Shoppe ','2030 Kingsway, Vancouver, BC,  V5N 2T3','49.2448656','-123.0646561','','','','2015-07-21 21:37:00','2015-07-21 21:26:00'),(169,143,'Colleen Hogg','Pharmacist','250-285-2275','collhogg@hotmail.com','Peoples drugmart','654 Harper Rd Quathiaski Cove, BC V0P 1N0','50.0400299','-125.2095795','','','','2015-08-13 04:29:00','2015-08-12 21:32:00'),(170,135,'Anudeep Nirval ( Zahid 604-726-6333 zahid@canadahealthlink.com)','','604-585-1210','naz3@nazwellness.com','NAZ Pharmacy','105 9385 120th Street Delta BC V4C 0B5','49.1737563','-122.8907002','','LG','y','2015-07-24 16:47:00','2015-07-24 19:00:00'),(171,136,'Asif Walji (  Zahid 604-726-6333)','','604-951-1002','well3@nazwellness.com','Wellness Pharmacy #3','103 13737 96 Ave, Surrey, BC V3V 0C6','49.1773734','-122.8426682','','LG','yes','2015-09-11 17:20:56','2015-07-23 19:00:00'),(172,138,'Bernice Li','','(604) 254-0133','bernice.s.li@gmail.com','The Drive pharmacy','1684 Commercial Dr Vancouver, BC V5L 3Y4','49.2698481','-123.069304','','LG','yes','2015-09-11 18:46:18','2015-07-24 07:00:00'),(173,139,'Zaahira Lalani ','','604-888-5602','zaahira.lalani@gmail.com','Pharmasave',' 101 8850 Walnut Grove Drive Langley BC V1M 2C9','49.1632628','-122.6393342','','LG','y','2015-09-11 18:53:00','2015-09-11 18:53:00'),(236,198,'Shahzad Mirsaeidi','Pharmacist','(604) 947-0766','cates@medicinecentre.com','CATES MEDICINE CENTRE','177 Bowen Island, BC, V0N 1G0, CANADA','49.340839','-123.358494','','','','2017-01-19 21:25:43','2017-01-19 21:21:00'),(175,144,'Hardeep Khabra','','604-855-5075','brpharmacy@shaw.ca','Blueridge Pharmacy','101 30461 Blueridge Drive Abbotsford BC V2T 0B1','49.065665','-122.3794573','','y','','2015-09-11 19:01:53','2015-09-11 19:01:42'),(176,141,'Simon (Hans)','','604-255-0434','simonsandhu@icloud.com','Shoppers Simply Pharmacy','1517 Commercial Drive Vancouver BC V5L 3Y1','49.2711123','-123.0697625','','HH','y','2015-09-11 19:16:46','2015-08-18 19:00:00'),(177,145,'Dona Radomsky','','250-523-9933','llida@telus.net','Logan Lake IDA Pharmacy & Gift Shop','108 Chartrand Ave Logan Lake, BC V0K 1W0','50.4928914','-120.8136703','','y','','2015-09-11 19:16:46','2015-08-26 19:00:00'),(178,149,'Jason Czettisch','','250-746-7168','athapapaskow@mac.com','Mann\'s Prescription Pharmacy','325 Jubilee Street Duncan BC V9L 1W9','48.7792844','-123.7105447','','y','y','2015-09-11 19:16:46','2015-09-11 19:16:23'),(234,196,'Jane Lyons','Pharmacist','604-607-7404','aldergroveida@hotmail.com','Aldergrove Community Pharmacy',' 27105 Fraser Hwy Aldergrove, BC V4W 3R2 CANADA','49.0583988','-122.4734585','','','','2016-10-22 19:08:48','2016-10-22 19:08:33'),(233,191,'Chris Kooner and Emily Nevers','Pharmacist','250-763-2171 ext. 2222','remedysrx208@remedysrxsp.ca','Remedy\'s Rx #208','1460 St. Paul Street Kelowna, BC V1Y 2E6','49.8872882','-119.4920711','','','','2016-10-22 19:08:48','2016-10-22 19:07:47'),(182,153,'Nik Gandhi','','250-949-9522','pdm193@gmail.com','Peoples Drug Mart','100-8950 Granville St Port Hardy BC V0N 2P0','50.7216645','-127.4980488','','y','y','2015-09-11 19:25:31','2015-09-11 19:25:25'),(183,146,'Clinic Drug Store','','250-782-3100','clinicph@telus.net','Tenneille Metz','816 103rd Avenue,Dawson Creek BCÂ  V1G 2E9','55.756881','-120.225637','','','','2015-10-01 21:10:30','2015-09-30 07:00:00'),(184,147,'London Drugs','','604-853-6811','ajaved2@mac.com','Javed Ahmad','32700 South Fraser Way Abbotsford, BC V2T 4M5','49.0499303','-122.317111','','','','2015-10-01 21:10:30','2015-10-01 20:59:00'),(189,155,'Robert McDonald','','250-627-8129','robert.mcdonald@sobeys.com','Safeway','200 2nd Ave West, Prince Rupert , BC, V8J 1G5','54.3149558','-130.3243357','','','','2015-10-19 18:38:53','2015-10-14 07:00:00'),(188,157,'Catherine Hebert','','250-468-9921','','Nanoose Medicine Centre',' 4  2451 Collins Crescent Nanoose Bay BCÂ  V9P 9J9','49.2730284','-124.1950525','','','','2015-10-01 22:51:00','2015-10-01 22:51:00'),(241,205,'David Massaro','Pharmacist','6045341332','dmassaro.rph@gmail.com','Valley Evergreen Pharmacy','20577 Douglas Crescent, Langley, BC, V3A 4B6','49.1028949','-122.652189','','','','2017-10-05 02:20:33','2017-10-05 02:16:07'),(191,158,'Samy Hanna','','250-563-0042','samyshanna@hotmail.com','Tabor Pharmacy','224 - 100 Tabor Blvd S Prince George BC V2M 5T4','53.9269644','-122.8029856','','','','2015-10-19 18:38:53','2015-10-19 18:32:46'),(192,160,'Elizabeth McIntyre','','250-769-2014','eamkel@shaw.ca','Andreen\'s Pharmacy','881 Anders Road West Kelowna BC V1Z 1K2','49.860173','-119.5501661','','','','2015-10-19 18:38:53','2015-10-19 18:37:48'),(193,159,'Catherine Hamm ','','250-398-8177','hamm@unipharm.com','Kornak & Hamm\\\'s Pharmacy','366 Yorston Street Williams Lake BC V2G 4J5','52.12675','-122.1410647','','Louise','','2016-02-04 23:23:07','2015-10-28 07:00:00'),(194,165,'Marilynn Boyce','','250-592-4541','asdm208@shoppersdrugmart.ca','Shoppers Drug Mart #208','1627 Fort Street Victoria BC V8R 1H9','48.4270197','-123.334826','','Louise','','2016-02-04 23:30:26','2016-02-04 23:29:59'),(199,161,'Cynthia Widder','',' 604-738-0733','macrx3@medicinecentre.com','McDonald Pharmacy in Kits','2188 W Broadway Vancouver BC V6K 2C8','49.2638494','-123.1549798','','','','2016-02-05 19:35:25','2016-02-05 19:28:01'),(196,167,'Farzaneh Miraftabi','','250-334-6930','fazmiraftabi@gmail.com','Loblaw\\\'s Pharmacy #1528','757 Ryan Road Courtenay BC V9N 3R6','49.6984674','-124.988004','','Louise','','2016-02-04 23:36:07','2016-02-04 23:34:34'),(197,168,'Dave Aulakh','','604-304-1294','daulakh15@yahoo.ca','HealthPlus Pharmacy','4115 No 5 Road Richmond BC V6X 2T9','49.1836878','-123.0915332','','Louise','','2016-02-04 23:36:07','2016-02-04 23:36:06'),(198,169,'Howard Bahr-Hosseini','','604-930-9544','fraser@medicinecentre.com','Medicine center','102 16033 108th Ave Surrey BC V4N 1P2','49.199634','-122.7778309','','Louise','','2016-02-04 23:44:45','2016-02-04 23:37:00'),(200,162,'Jeff  Primeau','','250 836 2963','prims25@hotmail.com','IDA Pharmacy eagle','317 Main St Box 39 Sicamous BC V0E 2V0','50.8377865','-118.9766959','','','','2016-02-05 19:35:26','2016-02-05 19:30:16'),(201,163,'Jenny Creus','','604-476-6623','jennycreusofg@hotmail.com','Rexall Pharmacy 7195 ','60 11900 Haney Place Maple Ridge BC V2X 8R9 ','49.2183357','-122.598352','','','','2016-02-05 19:35:26','2016-02-05 19:32:19'),(202,164,'Mohamed Kayed','','604-575-4994','asdm2239@shoppersdrugmart.ca','Shoppers Drug Mart #2239','18677 Fraser Hwy Surrey BC V3S 8E7','49.1258467','-122.7041978','','','','2016-02-05 19:35:26','2016-02-05 19:34:05'),(203,171,'Christine Hoffman','','250-864-0458','chris1hoff2@shaw.ca','Save on Foods Pharmacy Float - pharmacist, Ashtma Clinic','4900 27th Street Vernon BC V1T 7G7','50.2841666','-119.2691257','','','','2016-02-05 19:35:26','2016-02-05 19:35:14'),(204,172,'Amin Nanji','','Â (604) 588-9888','pharmasave8@telus.net','Pharmasave Surrey Center','Unit 110 13798,  94A  Ave, Surrey, BC, V3V 1N1','49.1742451','-122.8407505','','','','2016-03-01 20:38:27','2016-03-01 20:38:13'),(205,166,'Steve Robinson ','Pharmacist','250-245-3113','steveer217@gmail.com','Pharmasave Ladysmith','441 1st Avenue, Ladysmith, BC, V9G 1A3','48.993247','-123.8173555','','','','2016-03-26 21:04:11','2016-03-26 21:04:03'),(207,170,'Erika Gregory','Pharmacist','250-365-7141','erica.gregory@sobeys.com','Safeway Pharmacy #196','1721 Columbia Avenue Castlegar, BC V1N 2W6','49.3014582','-117.6570398','','','','2016-03-26 21:14:00','2016-03-26 21:08:00'),(208,173,'Akiko Friedland','Pharmacist','250-361-3773','viewstpharmacy@shaw.ca','View Street Pharmacy ','867 View Street  Victoria, BC V8W 1K1','48.424697','-123.360093','','','','2016-03-26 21:14:15','2016-03-26 21:09:16'),(214,174,'Sukh Sidhu','Pharmacist','604-882-0611','fortlangleypharmasave@gmail.com','Pharmasave Fort Langley','23148 96 Avenue, Fort Langley, BC V1M 2R4, Canada','49.1688297','-122.5817215','','','','2016-03-26 21:25:00','2016-03-26 21:22:00'),(235,197,'David Zamorano','Pharmacist','778-476-0010','carmi@remedysrx.ca','Carmi Remedy\'s Rx','15 - 725 Carmi Ave Penticton, BC V2A 3G8 CANADA','49.4829204','-119.5757539','','','','2017-01-19 21:22:20','2017-01-19 21:20:20'),(211,176,'Jo Han Tan','','604-683-6933','peoph378@gmail.com','Peoples pharmacy','683 Denman Street, Vancouver, BC, V6G 2L3','49.2923521','-123.1341421','','','','2016-03-26 21:14:15','2016-03-26 21:13:03'),(238,200,'Travis Petrisor and Chris Pasin','Pharmacist','(250) 770-0047','pharmacist@citycentrerx.com','CITY CENTRE REMEDY\'SRX','399 Main St, Penticton, BC, V2A 5B7, CANADA','49.4973355','-119.5920867','','','','2017-02-21 01:53:38','2017-02-21 01:50:08'),(216,179,'Chris Lewis','Pharmacist','604-531-4400','clewis@pharmacybc.com','Medicine Shoppe','1959 152 Street, Surrey, BC, V4A 9E3','49.0370023','-122.8016762','','','','2016-04-29 03:14:11','2016-04-29 02:59:00'),(217,177,'Bob Rai','Pharmacist','604-613-4336','brai@pharmacybc.com','Medicine Shoppe','6180 Fraser, Vancouver, BC, V5W 3A1','49.2285581','-123.0904832','','','','2016-04-29 03:14:11','2016-04-29 03:13:43'),(218,181,'Eugenia Shan','Pharmacist','604-792-1240','eugeniaa@chiliwackpharmasave.com','Pharmasave','110-9193 Main St, Chilliwack, BC, V2P 7S5','49.1691822','-121.9570532','','','','2016-04-29 03:20:49','2016-04-29 03:15:54'),(219,182,'Jannie Kong','Pharmacist','604-251-1293','ps077@telus.net','Pharmasave','1671 East Broadway, Vancouver, BC, V5N 1V9','49.2624822','-123.0705216','','','','2016-04-29 03:20:49','2016-04-29 03:16:49'),(220,183,'Ron Downey','Pharmacist','250-956-3126','rwdowney@telus.net','People\'s Drug Mart','1584 Broughton Blvd, Port McNeill, BC, V0N 2R0','50.5893203','-127.0877355','','','','2016-04-29 03:20:49','2016-04-29 03:17:00'),(221,184,'Muffadal Shawshuddin','Pharmacist','604-582-9181','lancastersurrey@gmail.com','Lancaster Medical Supplies and Prescriptions','13710 94A Ave, Surrey, BC, V3V 1N1','49.1745125','-122.8429193','','','','2016-04-29 03:20:50','2016-04-29 03:19:05'),(222,185,'Gilly Lau','Pharmacist','604-708-9090','gillylau@gmail.com','Shoppers Drug Mart','3277 Cambie Street Vancouver, B.C. V6Y 4C7 ','49.2564119','-123.1155529','','','','2016-04-29 03:20:50','2016-04-29 03:19:49'),(223,186,'Mary Lam','Pharmacist','250-493-7200','aarage@shawbiz.ca','People\'s Pharmacy',' 166-1848 Main St., Penticton, BC V2A 1H1','49.4780796','-119.5828574','','','','2016-04-29 03:20:50','2016-04-29 03:20:44'),(224,178,'Kuljeet Thiara','Pharmacist','604-850-3517','asdm2290@shoppersdrugmart.ca','Shoppers Drug Mart #2290','Â 32390 South Fraser Way, Unit #1 Abbotsford BC V2T 1X2','49.0513136','-122.3269135','','','','2016-07-22 18:46:50','2016-07-22 18:42:00'),(225,187,'Jim Motokado','Pharmacist','250-374-3131','asdm261@shoppersdrugmart.ca','Shoppers Drug Mart - Valleyview Square S.C.','2121 E. Trans Canada Hwy. Kamloops, BC V2C 4A6','50.6787888','-120.2656258','','','','2016-07-22 18:46:50','2016-07-22 18:42:00'),(226,192,'Melodie Tong','Pharmacist','(604) 228-1533','melomusic@yahoo.com','UBC Shoppers Drug Mart','5940 University Blvd, Vancouver, BC 6T 1Z3','49.2660231','-123.2457108','','','','2016-07-22 18:46:51','2016-07-22 18:43:33'),(227,193,'Rawan Abulaban ','Pharmacist','604-777-5601','rawanabulaban@gmail.com','Community Outreach Pharmacy','5 - 1080 Cliveden Ave., Delta BC V3M 6G6.Â ','49.171586','-122.946051','','','','2016-07-22 18:46:51','2016-07-22 18:45:26'),(228,194,'Hassan Fada','Pharmacist','1-604-792-7638','hassanfada@gmail.com','Walmart','8249 Eagle landing Pkwy Chilliwack BC V2R 1A2','49.1496719','-121.9767544','','','','2016-07-22 18:46:51','2016-07-22 18:46:05'),(229,195,'Jessica Joly','Pharmacist','250-992-6898','rx4925@sobeys.com','Safeway Pharmacy #70','445 Reid Street V2J2M7, Quesnel, British Columbia','52.9798199','-122.4970604','','','','2016-07-22 18:46:51','2016-07-22 18:46:36'),(230,188,'Larry Johannessen','Pharmacist','250-723-4940','larryjohannessen@shaw.ca','Medicine Shoppe Pharmacy  #253','B 4833 Southgate Road Port Alberni, BC V9Y 5K5','49.2579121','-124.8091972','','','','2016-10-03 02:18:59','2016-10-03 02:17:33'),(231,189,'Orysya Fetterly','Pharmacist','250-767-2911','info@okanaganpharmacy.com','Okanagan Pharmacy Remedy','Unit 24 - 5500 Clements Crescent Peachland BC V0H 1X5','49.7844433','-119.7170616','','','','2016-10-03 02:19:00','2016-10-03 02:18:26'),(232,190,'Trevor Sawchuk','Pharmacist','250-352-0022','nelson@remedysrx.ca','Remedy\'s Rx Nelson','737 Baker Street Nelson, BC V1L 4J5','49.4933348','-117.2908113','','','','2016-10-03 02:19:00','2016-10-03 02:18:52'),(237,199,'Russell Beales','Pharmacist','(250) 390-4423','central.lantzville@medicinecentre.com','CENTRAL DRUGS','7186 Lantzville Rd, Lantzville, BC, V0R 2H0, CANADA','49.2499438','-124.0739992','','','','2017-01-19 21:24:05','2017-01-19 21:22:00'),(239,201,'Robert Piner','Pharmacist','(250) 782-9561','rx4972@sobeys.com','Safeway Pharmacy #4972','11200-11216 8th St, Dawson Creek, BC, V1G 4K6, CANADA','55.7485435','-120.2217757','','','','2017-02-21 01:53:39','2017-02-21 01:51:29'),(240,202,'Rochelle Ong','Pharmacy Manager','(604) 736-6006','asdm2221@shoppersdrugmart.ca','Shopper\'s Drugmart #2221','1780 West Broadway, Vancouver, BC, V6J 1Y1, CANADA','49.263542','-123.1447032','','','','2017-02-21 01:53:39','2017-02-21 01:53:06'),(242,207,'Robson Liu and Tim Liang','Pharmacist','604872681','asdm2276@shoppersdrugmart.ca','Shoppers Drug Mart #2276','4590 Fraser Street, Vancouver, BC, V5V4G7','49.2437295','-123.0900877','','','','2017-10-05 02:20:34','2017-10-05 02:18:45');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `changed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (2,'What','<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt 36pt; text-align: justify; text-indent: -36pt;\">A 12-month study assessing whether text messages between patients and pharmacists can help patients with their asthma medication plan.</p>','2014-10-18 00:41:00'),(3,'Who','<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">You may be eligible to participate in this study if you:</p>\r\n<ul>\r\n<li>Are 14 years or older</li>\r\n<li>Have been diagnosed with asthma</li>\r\n<li>Are prescribed inhaled corticosteroids</li>\r\n<li>Have a cell phone with text messaging capabilities</li>\r\n<li>Are a BC resident and planning to stay in BC for the next year</li>\r\n<li>Speak and read English</li>\r\n<li>Not currently participating in another asthma-related clinical study</li>\r\n</ul>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;\">*Participants will be randomly assigned to either the intervention or usual care group so there is an equal chance of being separated into either group.</p>','2014-10-16 20:43:00'),(6,'How','<table class=\"MsoTableGrid\" style=\"margin-left: 41.4pt; border-collapse: collapse; border: none; mso-border-alt: solid windowtext .5pt; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt;\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 198.0pt; border: solid windowtext 1.0pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"264\">\r\n<p class=\"MsoNoSpacing\" style=\"text-align: center;\" align=\"center\"><strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-language: EN-CA;\">Participants in the Intervention Group Receive</span></strong></p>\r\n</td>\r\n<td style=\"width: 202.5pt; border: solid windowtext 1.0pt; border-left: none; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"270\">\r\n<p class=\"MsoNoSpacing\" style=\"text-align: center;\" align=\"center\"><strong><span style=\"font-size: 10.0pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-language: EN-CA;\">Participants in the Usual Care Group Receive</span></strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 198.0pt; border: solid windowtext 1.0pt; border-top: none; mso-border-top-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"264\">\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -13.5pt; mso-list: l0 level1 lfo1;\">Education about asthma and medications</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -13.5pt; mso-list: l0 level1 lfo1;\">Monthly text messages to assess asthma medication use</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -13.5pt; mso-list: l0 level1 lfo1;\">Telephone follow-ups from your pharmacist (based on responses to text messages)</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -13.5pt; mso-list: l0 level1 lfo1;\">Follow-up from the research team at 0, 6, and 12 months to see how you are doing</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -13.5pt; mso-list: l0 level1 lfo1;\">An honorarium for your time taken to participate in this study</p>\r\n</td>\r\n<td style=\"width: 202.5pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; mso-border-top-alt: solid windowtext .5pt; mso-border-left-alt: solid windowtext .5pt; mso-border-alt: solid windowtext .5pt; padding: 0cm 5.4pt 0cm 5.4pt;\" valign=\"top\" width=\"270\">\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -12.6pt; mso-list: l0 level1 lfo1;\">Education about asthma and medications</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -12.6pt; mso-list: l0 level1 lfo1;\">Follow-up from the research team at 0, 6, and 12 months to see how you are doing</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -12.6pt; mso-list: l0 level1 lfo1;\">An honorarium for your time taken to participate in this study</p>\r\n<p class=\"MsoNoSpacing\" style=\"margin-left: 12.6pt; text-indent: -12.6pt; mso-list: l0 level1 lfo1;\">At the end of the study, the opportunity to receive automated monthly assessment of adherence by text messages for 12 months</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','2014-10-16 20:44:00'),(8,'Honorarium','<p>You will receive a $25 honorarium for your time taken to participate in this study.</p>','2014-10-16 20:45:00'),(9,'Your Rights','<p>Should you choose to participate in this study your confidentiality will be maintained. Research, health and other records identifying you may be inspected by the primary researcher or his or her representatives of the UBC Clinical Research Ethics Board to monitor the research. Information or records with your identity will not be published without your approval, nor will such information be released without your consent unless required by law.</p>','2015-02-17 23:44:00'),(10,'Contact Information','<h3><strong><span style=\"font-family: Arial, sans-serif;\">Contact details if you require more information</span></strong></h3>\r\n<ul>\r\n<li><strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">Principal Investigator</span></strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">: Dr. Mary De Vera (604-827-2138)</span></li>\r\n<li><strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">Research Coordinator</span></strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">: Natasha Campbell (604-827-1567)</span></li>\r\n<li><strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">Or visit our website at</span></strong><span style=\"font-size: 10pt; font-family: Arial, sans-serif;\">: </span><span style=\"font-size: 10.0pt; mso-bidi-font-size: 11.0pt; font-family: \'Arial\',\'sans-serif\';\"><a href=\"http://www.emphasis.core.ubc.ca/\">www.emphasis.core.ubc.ca</a></span></li>\r\n</ul>','2015-04-11 04:18:00'),(11,'Resources and Links','<ul>\r\n<li><a title=\"Asthma Society of Canada \" href=\"http://www.asthma.ca/\">Asthma Society of Canada</a></li>\r\n</ul>','2015-04-11 04:22:00');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmLoc`
--

DROP TABLE IF EXISTS `pharmLoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmLoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phloc` varchar(255) NOT NULL,
  `section` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `blockorder` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmLoc`
--

LOCK TABLES `pharmLoc` WRITE;
/*!40000 ALTER TABLE `pharmLoc` DISABLE KEYS */;
INSERT INTO `pharmLoc` VALUES (4,'101','interventions','','',1,1),(5,'102','pharmacists','','',1,2),(6,'103','interventions','','',1,3),(7,'104','pharmacists','','',1,4),(8,'105','pharmacists','','',1,5),(9,'106','interventions','','',1,6),(10,'107','interventions','','',2,7),(11,'108','pharmacists','','',2,8),(12,'109','pharmacists','','',2,9),(13,'110','interventions','','',2,10),(14,'111','pharmacists','','',2,11),(15,'112','interventions','','',2,12),(16,'113','pharmacists','','',3,13),(17,'114','pharmacists','','',3,14),(18,'115','interventions','','',3,15),(19,'116','interventions','','',3,16),(20,'117','pharmacists','','',4,17),(21,'118','interventions','','',4,18),(22,'119','pharmacists','','',4,19),(23,'120','interventions','','',4,20),(24,'121','pharmacists','','',5,21),(25,'122','interventions','','',5,22),(26,'123','interventions','','',5,23),(27,'124','interventions','','',5,24),(28,'125','pharmacists','','',5,25),(29,'126','pharmacists','','',5,26),(30,'127','interventions','','',6,27),(31,'128','interventions','','',6,28),(32,'129','pharmacists','','',6,29),(33,'130','interventions','','',6,30),(34,'131','pharmacists','','',6,31),(35,'132','pharmacists','','',6,32),(36,'133','pharmacists','','',7,33),(37,'134','interventions','','',7,34),(38,'135','interventions','','',7,35),(39,'136','pharmacists','','',7,36),(40,'137','interventions','','',8,37),(41,'138','pharmacists','','',8,38),(42,'139','pharmacists','','',8,39),(43,'140','interventions','','',8,40),(44,'141','pharmacists','','',8,41),(45,'142','interventions','','',8,42),(46,'143','interventions','','',9,43),(47,'144','pharmacists','','',9,44),(48,'145','interventions','','',9,45),(49,'146','pharmacists','','',9,46),(50,'147','interventions','','',9,47),(51,'148','pharmacists','','',9,48),(52,'149','interventions','','',10,49),(53,'150','pharmacists','','',10,50),(54,'151','interventions','','',10,51),(55,'152','pharmacists','','',10,52),(56,'153','interventions','','',11,53),(57,'154','pharmacists','','',11,54),(58,'155','pharmacists','','',11,55),(59,'156','interventions','','',11,56),(60,'157','interventions','','',12,57),(61,'158','pharmacists','','',12,58),(62,'159','pharmacists','','',12,59),(63,'160','interventions','','',12,60),(64,'161','interventions','','',13,61),(65,'162','pharmacists','','',13,62),(66,'163','interventions','','',13,63),(67,'164','pharmacists','','',13,64),(68,'165','interventions','','',14,65),(69,'166','pharmacists','','',14,66),(70,'167','interventions','','',14,67),(71,'168','pharmacists','','',14,68),(72,'169','interventions','','',15,69),(73,'170','pharmacists','','',15,70),(74,'171','interventions','','',15,71),(75,'172','interventions','','',15,72),(76,'173','pharmacists','','',15,73),(77,'174','pharmacists','','',15,74),(78,'175','interventions','','',16,75),(79,'176','interventions','','',16,76),(80,'177','interventions','','',16,77),(81,'178','pharmacists','','',16,78),(82,'179','pharmacists','','',16,79),(83,'180','pharmacists','','',16,80);
/*!40000 ALTER TABLE `pharmLoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmacists`
--

DROP TABLE IF EXISTS `pharmacists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmacists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmacists`
--

LOCK TABLES `pharmacists` WRITE;
/*!40000 ALTER TABLE `pharmacists` DISABLE KEYS */;
INSERT INTO `pharmacists` VALUES (1,'Study Forms','<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1em; color: #333333; font-family: sans-serif; font-size: 16px;\">\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Instruction for Usual Enrollment Feb12 2015.pdf\">Instructions for Enrolment</a></li>\r\n<li style=\"box-sizing: border-box;\"><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Contact Information Form Feb 11 2015.pdf\">Contact Information Form</a></li>\r\n<li style=\"box-sizing: border-box;\"><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Emphasis Demographics form FEB 11 2015.pdf\">Demographics Form</a></li>\r\n<li style=\"box-sizing: border-box;\"><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Emphasis Consent form  21JAN2015.pdf\">Subject Information &amp; Consent Form</a></li>\r\n<li style=\"box-sizing: border-box;\"><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Emphasis Screening Onpaper form FEB12 2015.pdf\">Participant Screening Form</a></li>\r\n<li style=\"box-sizing: border-box;\"><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Study logFEB 172015.pdf\">Study Log</a></li>\r\n</ul>','2015-07-08 19:19:22'),(11,'Resources','<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1em; color: #333333; font-family: sans-serif; font-size: 16px;\">\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/EmphasisPharmacist Guide USUAL CARE 20jan2015.pdf\">Pharmacist Guide for Usual Care Pharmacies</a></li>\r\n<li><a href=\"http://www.bcguidelines.ca/guideline_asthma.html\">BC Asthma Guideline</a></li>\r\n<li><a href=\"http://www.bcguidelines.ca/pdf/asthma_appendix_b.pdf\">Asthma Action Plan</a></li>\r\n<li><a href=\"http://emphasis.core.ubc.ca/cinfo/app/files/Pocket Guide 2015_wms_np.pdf\">Pocket Guide for Asthma Management and Prevention by Global Initiative for Asthma</a></li>\r\n</ul>','2016-01-07 23:11:01'),(12,'Information and Training Webinar','<ul>\r\n<li><a href=\"files/Stills.pdf\">Webinar: Still Version</a></li>\r\n<li><a href=\"files/Handouts.pdf\">Webinar: Handout Version for Printing</a></li>\r\n<li><a href=\"&quot;files/Information\">Information and Training Webinar Usual Care</a></li>\r\n</ul>','2016-01-07 23:12:18'),(13,'Mini-Webinars','<!--<table>\r\n<tbody>\r\n<tr><th>Stills</th><th>Handouts</th></tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/1_Emphasis webinar - recruiting and screening FINAL.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/1_Emphasis webinar - recruiting and screening FINAL handouts.pdf\">Recruiting and Screening Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/2_Emphasis webinar - consenting and enrolling FINAL.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/2_Emphasis webinar - consenting and enrolling FINAL handouts.pdf\">Consenting and Enrolling Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/3_Emphasis Webinar - usual care pharmacy next steps FINAL.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/3_Emphasis Webinar - usual care pharmacy next steps FINAL handouts.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n</tr>\r\n</tbody>\r\n</table>-->\r\n<table>\r\n<tbody>\r\n<tr><th>Stills</th><th>Handouts</th><th>Videos</th></tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/1_Emphasis webinar - recruiting and screening FINAL.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/1_Emphasis webinar - recruiting and screening FINAL handouts.pdf\">Recruiting and Screening Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/1_Emphasis webinar - recruiting and screening FINAL.mp4\">Recruiting and Screening Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/2_Emphasis webinar - consenting and enrolling FINAL.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/2_Emphasis webinar - consenting and enrolling FINAL handouts.pdf\">Consenting and Enrolling Patients</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/2_Emphasis webinar - consenting and enrolling FINAL.mp4\">Consenting and Enrolling Patients</a></td>\r\n</tr>\r\n<tr>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/3_Emphasis Webinar - usual care pharmacy next steps FINAL.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/3_Emphasis Webinar - usual care pharmacy next steps FINAL handouts.pdf\"> Baseline Procedures, Next Steps</a></td>\r\n<td><a href=\"files/Mini-Webinars/Usualcare/3.2_Emphasis Webinar - usual care pharmacy next steps FINAL.mp4\"> Baseline Procedures, Next Steps</a></td>\r\n</tr>\r\n</tbody>\r\n</table>','2016-03-02 00:23:26'),(14,'Newsletters','<table style=\"height: 58px;\" width=\"588\">\r\n<tbody>\r\n<tr><th>Blogs</th><th>Newsletters</th></tr>\r\n<tr>\r\n<td><a href=\"http://emphasis.core.ubc.ca/pdf/DidUKnow.pdf\" target=\"_blank\">Did You Know</a></td>\r\n<td>\r\n<p><a href=\"http://emphasis.core.ubc.ca/pdf/Behind.pdf\" target=\"_blank\">Behind the Scene 1st Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_2nd.pdf\" target=\"_blank\">Behind the Scene 2nd Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_3rd.pdf\" target=\"_blank\">Behind the Scene 3rd Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_4th.pdf\" target=\"_blank\">Behind the Scene 4th Edition</a> <br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_5th.pdf\" target=\"_blank\">Behind the Scene 5th Edition</a><br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_6th.pdf\">Behind the Scene 6th Edition</a><br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_7th.pdf\">Behind the Scene 7th Edition</a><br /><a href=\"http://emphasis.core.ubc.ca/pdf/Behind_8th.pdf\">Behind the Scene 8th Edition</a></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','2017-07-06 04:56:55');
/*!40000 ALTER TABLE `pharmacists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pharmlocs`
--

DROP TABLE IF EXISTS `pharmlocs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pharmlocs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phloc` varchar(255) NOT NULL,
  `section` varchar(60) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `blockorder` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pharmlocs`
--

LOCK TABLES `pharmlocs` WRITE;
/*!40000 ALTER TABLE `pharmlocs` DISABLE KEYS */;
INSERT INTO `pharmlocs` VALUES (4,'101','interventions','','',1,1),(5,'102','pharmacists','','',1,2),(6,'103','interventions','','',1,3),(7,'104','pharmacists','','',1,4),(8,'105','pharmacists','','',1,5),(9,'106','interventions','','',1,6),(10,'107','interventions','','',2,7),(11,'108','pharmacists','','',2,8),(12,'109','pharmacists','','',2,9),(13,'110','interventions','','',2,10),(14,'111','pharmacists','','',2,11),(15,'112','interventions','','',2,12),(16,'113','pharmacists','','',3,13),(17,'114','pharmacists','','',3,14),(18,'115','interventions','','',3,15),(19,'116','interventions','','',3,16),(20,'117','pharmacists','','',4,17),(21,'118','interventions','','',4,18),(22,'119','pharmacists','','',4,19),(23,'120','interventions','','',4,20),(24,'121','pharmacists','','',5,21),(25,'122','interventions','','',5,22),(26,'123','interventions','','',5,23),(27,'124','interventions','','',5,24),(28,'125','pharmacists','','',5,25),(29,'126','pharmacists','','',5,26),(30,'127','interventions','','',6,27),(31,'128','interventions','','',6,28),(32,'129','pharmacists','','',6,29),(33,'130','interventions','','',6,30),(34,'131','pharmacists','','',6,31),(35,'132','pharmacists','','',6,32),(36,'133','pharmacists','','',7,33),(37,'134','interventions','','',7,34),(38,'135','interventions','','',7,35),(39,'136','pharmacists','','',7,36),(40,'137','interventions','','',8,37),(41,'138','pharmacists','','',8,38),(42,'139','pharmacists','','',8,39),(43,'140','interventions','','',8,40),(44,'141','pharmacists','','',8,41),(45,'142','interventions','','',8,42),(46,'143','interventions','','',9,43),(47,'144','pharmacists','','',9,44),(48,'145','interventions','','',9,45),(49,'146','pharmacists','','',9,46),(50,'147','interventions','','',9,47),(51,'148','pharmacists','','',9,48),(52,'149','interventions','','',10,49),(53,'150','pharmacists','','',10,50),(54,'151','interventions','','',10,51),(55,'152','pharmacists','','',10,52),(56,'153','interventions','','',11,53),(57,'154','pharmacists','','',11,54),(58,'155','pharmacists','','',11,55),(59,'156','interventions','','',11,56),(60,'157','interventions','','',12,57),(61,'158','pharmacists','','',12,58),(62,'159','pharmacists','','',12,59),(63,'160','interventions','','',12,60),(64,'161','interventions','','',13,61),(65,'162','pharmacists','','',13,62),(66,'163','interventions','','',13,63),(67,'164','pharmacists','','',13,64),(68,'165','interventions','','',14,65),(69,'166','pharmacists','','',14,66),(70,'167','interventions','','',14,67),(71,'168','pharmacists','','',14,68),(72,'169','interventions','','',15,69),(73,'170','pharmacists','','',15,70),(74,'171','interventions','','',15,71),(75,'172','interventions','','',15,72),(76,'173','pharmacists','','',15,73),(77,'174','pharmacists','','',15,74),(78,'175','interventions','','',16,75),(79,'176','interventions','','',16,76),(80,'177','interventions','','',16,77),(81,'178','pharmacists','','',16,78),(82,'179','pharmacists','','',16,79),(83,'180','pharmacists','','',16,80),(84,'99','interventions','','',2,4),(86,'00','pharmacists','1','1',1,1),(87,'181','pharmacists','','',17,81),(88,'182','Interventions','','',17,82),(89,'183','pharmacists','','',17,83),(90,'184','Interventions','','',17,84),(91,'185','Interventions','','',17,85),(92,'186','Interventions','','',17,86),(93,'187','pharmacists','','',17,87),(94,'188','pharmacists','','',17,88),(95,'189','pharmacists','','',17,89),(96,'190','pharmacists','','',17,90),(97,'191','pharmacists','','',18,91),(98,'192','Interventions','','',18,92),(99,'193','Interventions','','',18,93),(100,'194','Interventions','','',18,94),(101,'195','pharmacists','','',18,95),(102,'196','Interventions','','',18,96),(103,'197','Interventions','','',18,97),(104,'198','pharmacists','','',18,98),(105,'199','Interventions','','',18,99),(106,'200','Interventions','','',18,100),(107,'201','pharmacists','','',19,101),(108,'202','pharmacists','','',19,102),(109,'203','pharmacists','','',19,103),(110,'204','pharmacists','','',19,104),(111,'205 ','Interventions','','',19,105),(112,'206','pharmacists','','',19,106),(113,'207 ','interventions','','',19,107),(114,'208 ','interventions','','',19,108),(115,'209 ','Interventions','','',19,109),(116,'210 ','interventions','','',19,110),(117,'211 ','pharmacists','','',19,111),(118,'212 ','interventions','','',19,112),(119,'phar213 ','pharmacists','','',20,113),(120,'214 ','pharmacists','','',20,114),(121,'215','Interventions','','',20,115),(122,'216 ','pharmacists','','',20,116),(123,'217 ','Interventions','','',20,117),(124,'218 ','Interventions','','',20,118),(125,'219 ','pharmacists','','',20,119),(126,'220 ','pharmacists','','',20,120);
/*!40000 ALTER TABLE `pharmlocs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` tinytext NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Title 1','Content 1','2014-10-03 13:15:19'),(2,'Title 2','content 2','2014-10-03 13:15:22'),(5,'New Title ','new add post','2014-10-20 21:26:56');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `screens`
--

DROP TABLE IF EXISTS `screens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `screens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `completedBy` varchar(255) NOT NULL,
  `type` enum('phar','patient') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `screens`
--

LOCK TABLES `screens` WRITE;
/*!40000 ALTER TABLE `screens` DISABLE KEYS */;
INSERT INTO `screens` VALUES (11,'','phar','What are the requirements to take part in this study?','For this trial we need 370 patients to be able to assess the impact of the EmPhAsIS intervention on asthma medication adherence and patient outcomes. We ask that pharmacy partners recruit a minimum of 5 asthma patients.','2014-11-26 22:40:11'),(12,'','phar','What are my responsibilities?','As a pharmacy partner, your responsibilities include:\r\n<li>Screening and recruiting patient participants\r\n<li>Providing standard education to patients\r\n<li>Following up with patients having difficulties with their asthma using questionnaires to guide counseling\r\n','2014-11-26 22:40:11'),(13,'','phar','Where can I get specific information about the study for interested patients and myself?','Pharmacy partners will receive a comprehensive guide containing pharmacist support materials, study details, resources for patients and assessment forms. For more details on how to enroll in this study, contact primary investigator Mary De Vera. ','2014-11-26 22:40:11'),(14,'','patient','How do I know if I am eligible for this study?','You may be eligible to take part in this study if you:\r\n<ul>\r\n<li>Are 14 years or older\r\n<li>Have been diagnosed with asthma\r\n<li>Are prescribed inhaled corticosteroids\r\n<li>Have a cell phone with text messaging capabilities\r\n<li>Are a BC resident and planning to stay in BC for the next year\r\n<li>Have been registered with the medical services plan (MSP) in the past 12 months\r\n<li>Speak and read English\r\n</ul>\r\n','2014-11-26 23:22:50'),(15,'','patient','What are the benefits of participating in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">As a patient you may or may not benefit from being a part of this study. If you choose to participate the information collected from this study will be used to determine if text messaging can improve patient compliance to asthma medication. There is a possibility that your asthma may not improve from this study.</span></p>','2014-11-26 23:16:00'),(16,'','phar','Is there any harm associated with taking part in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Since there is no new treatment being initiated through this study there should not be any harm in participating.</span></p>','2014-11-26 23:18:02'),(17,'','patient','Is there any harm associated with taking part in this study?','<p style=\"margin: 0cm 0cm 7.5pt 0cm;\"><span style=\"font-size: 13.5pt; font-family: Arial, sans-serif;\">Since there is no new treatment being initiated through this study there should not be any harm in participating.</span></p>','2014-11-26 23:24:20');
/*!40000 ALTER TABLE `screens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surveys`
--

DROP TABLE IF EXISTS `surveys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surveys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` enum('usualcare','intervention','','') NOT NULL,
  `date_completed` varchar(100) NOT NULL,
  `completed_by` varchar(100) NOT NULL,
  `Q1` enum('Yes','No') NOT NULL,
  `Q2` enum('Yes','No') NOT NULL,
  `Q3` enum('Yes','No','','') NOT NULL,
  `Q4` enum('Yes','No') NOT NULL,
  `Q5` enum('Yes','No') NOT NULL,
  `Q6` enum('Yes','No') NOT NULL,
  `Q7` enum('Yes','No') NOT NULL,
  `Q8` enum('Yes','No') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surveys`
--

LOCK TABLES `surveys` WRITE;
/*!40000 ALTER TABLE `surveys` DISABLE KEYS */;
INSERT INTO `surveys` VALUES (1,'usualcare','name','Co','','','','','','','',''),(2,'usualcare','Salma Lalji','Fac. of Pharmaceutical Sciences UBC','','','','','','','',''),(29,'usualcare','2015-03-05','Salma123','Yes','Yes','Yes','Yes','Yes','Yes','Yes','Yes'),(30,'usualcare','2015-03-05','Salma','Yes','Yes','Yes','Yes','Yes','Yes','Yes','Yes'),(31,'usualcare','2015-03-18','Salma123','Yes','Yes','Yes','Yes','Yes','Yes','Yes','Yes'),(32,'usualcare','2015-03-04','sa','Yes','Yes','Yes','Yes','Yes','Yes','Yes','Yes'),(33,'usualcare','2015-03-05','Salma123','Yes','Yes','Yes','Yes','Yes','Yes','Yes','Yes');
/*!40000 ALTER TABLE `surveys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'sallalji@mail.ubc.ca','2cec9a1d6b1179c2261391f2e709f49ff053cd50','admin','2014-10-28 14:05:34','2014-10-28 14:05:34'),(4,'sallalji','$2a$10$MZTsGkxsalMqwatV9I8UkOAufWLhzZAVtqof5oyG1VO6aWfujTqSW','admin','2014-10-29 08:37:18','2014-10-29 08:37:18'),(5,'salma','$2a$10$jxwKHEqLRap5AWzcINOYgevHXEDflDT/nvWBwUYrUS40f70mUg9K6','admin','2014-11-02 10:40:02','2014-11-02 10:40:02'),(7,'louisega','$2a$10$6tlrX0VSORZwbmK2/imiAOVmaJbSVH1JdBOTbL23c9OHc2aApxGRq','admin','2015-02-11 11:47:17','2015-02-11 11:47:17'),(8,'yolanda','$2a$10$fYOySqDPZxTqsiPYss2GuOJJk.jCGKjlSuYmCvWOkjA5lxZoHlDH.','admin','2015-03-18 17:46:01','2015-03-18 17:46:01'),(9,'mdevera','$2a$10$DmcL4L2qVzeXs2yalvuO/O5N03SyR5KZ0YTt/IyorAL7cUp.rBtxG','admin','2015-05-06 17:04:36','2015-05-06 17:04:36'),(10,'hans','$2a$10$6Cjou3AB588cmJiO7o6eOugiple7UhkaqN7hzl.nkh9GAdvRFgGbW','admin','2016-03-01 21:41:01','2016-03-01 21:41:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-30 22:57:36
