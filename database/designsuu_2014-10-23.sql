# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: designsuu
# Generation Time: 2014-10-23 15:05:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shortName` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `courseName` varchar(27) COLLATE utf8_bin DEFAULT NULL,
  `courseNumber` varchar(31) COLLATE utf8_bin DEFAULT NULL,
  `description` longtext COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;

INSERT INTO `course` (`id`, `shortName`, `courseName`, `courseNumber`, `description`)
VALUES
	(1,X'77656231',X'5765622044657369676E2031',X'4152542033323530',X'5765622044657369676E2031202D20496E74726F64756374696F6E20746F207765622064657369676E20616E6420626173696320646576656C6F706D656E7420746F6F6C73'),
	(2,X'77656232',X'5765622044657369676E2032',X'4152542034323530',X'5765622044657369676E2032202D20496E7465726D656469617465207765622064657369676E20616E6420646576656C6F706D656E74'),
	(3,X'77656233',X'416476616E636564205765622044657369676E',X'4152542034333030',X'416476616E636564205765622044657369676E202D20496E646570656E64656E7420616476616E63656420746F7069637320696E2077656220616E64206D6F62696C652064657369676E20616E6420646576656C6F706D656E74');

/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table course_season_year
# ------------------------------------------------------------

DROP TABLE IF EXISTS `course_season_year`;

CREATE TABLE `course_season_year` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `courseID` int(11) DEFAULT NULL,
  `seasonID` int(11) DEFAULT NULL,
  `yearID` int(11) DEFAULT NULL,
  `professorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `course_season_year` WRITE;
/*!40000 ALTER TABLE `course_season_year` DISABLE KEYS */;

INSERT INTO `course_season_year` (`id`, `courseID`, `seasonID`, `yearID`, `professorID`)
VALUES
	(1,1,1,5,2),
	(2,2,1,5,1),
	(3,3,1,5,1);

/*!40000 ALTER TABLE `course_season_year` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(122) DEFAULT NULL,
  `link` varchar(210) DEFAULT NULL,
  `projectID` int(11) DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `courseID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `filename`, `link`, `projectID`, `studentID`, `courseID`)
VALUES
	(1,'abstract-q-g-200-200-9.jpg','images/thumbnails/',1,1,1),
	(2,'city-q-c-200-200-5.jpg','images/thumbnails/',2,2,1),
	(3,'fashion-q-c-200-200-3.jpg','images/thumbnails/',3,3,1),
	(4,'city-q-g-200-200-7.jpg','images/thumbnails/',1,1,2),
	(5,'nature-q-g-200-200-1.jpg','images/thumbnails/',2,2,2),
	(6,'nightlife-q-g-200-200-9.jpg','images/thumbnails/',3,3,2),
	(7,'nature-q-g-200-200-9.jpg','images/thumbnails/',1,1,3),
	(8,'technics-q-c-200-200-7.jpg','images/thumbnails/',2,2,3),
	(9,'abstract-q-g-200-200-1.jpg','images/thumbnails/',3,3,3),
	(10,'sports-q-c-200-200-1.jpg','images/thumbnails/',1,1,1),
	(11,'steph_barton2','images/thumbnails/',1,1,1),
	(12,'sports-q-c-200-200-3.jpg','images/thumbnails/',1,1,1),
	(13,'nature-q-g-200-200-5.jpg','images/thumbnails/',2,1,1);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table instructor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `instructor`;

CREATE TABLE `instructor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `lastName` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(122) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;

INSERT INTO `instructor` (`id`, `firstName`, `lastName`, `url`)
VALUES
	(1,X'4A656666',X'48616E736F6E',X'687474703A2F2F7777772E6A65666668616E736F6E64657369676E2E636F6D'),
	(2,X'4A756E6759756E',X'536F6E',X'687474703A2F2F7777772E676F6F676C652E636F6D'),
	(3,X'4A6179',X'4D6572727977656174686572',X'687474703A2F2F6A61796D65727279776561746865722E636F6D');

/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `projectNum` int(11) DEFAULT NULL,
  `projectFilename` varchar(75) COLLATE utf8_bin DEFAULT NULL,
  `projectURL` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `projectNum`, `projectFilename`, `projectURL`, `studentID`)
VALUES
	(1,1,X'7468756D622E6A7067',X'687474703A2F2F776562332E64657369676E7375752E636F6D2F323031345F737072696E672F68616D6D65725F73746570682F70726F6A656374312F',1),
	(2,2,X'7468756D622E6A7067',X'687474703A2F2F776562332E64657369676E7375752E636F6D2F323031345F737072696E672F7261736D757373656E5F6C6F67616E2F70726F6A656374312F',2),
	(3,3,X'7468756D622E6A7067',X'687474703A2F2F776562332E64657369676E7375752E636F6D2F323031345F737072696E672F7261736D757373656E5F6C6F67616E2F70726F6A656374312F',1),
	(4,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table season
# ------------------------------------------------------------

DROP TABLE IF EXISTS `season`;

CREATE TABLE `season` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seasonName` varchar(21) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `season` WRITE;
/*!40000 ALTER TABLE `season` DISABLE KEYS */;

INSERT INTO `season` (`id`, `seasonName`)
VALUES
	(1,X'46616C6C'),
	(2,X'537072696E67'),
	(3,X'53756D6D6572');

/*!40000 ALTER TABLE `season` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table season_year
# ------------------------------------------------------------

DROP TABLE IF EXISTS `season_year`;

CREATE TABLE `season_year` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seasonID` int(11) DEFAULT NULL,
  `yearID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `season_year` WRITE;
/*!40000 ALTER TABLE `season_year` DISABLE KEYS */;

INSERT INTO `season_year` (`id`, `seasonID`, `yearID`)
VALUES
	(1,1,5),
	(2,2,5),
	(3,3,5),
	(4,1,4),
	(5,2,4),
	(6,3,4),
	(7,1,3),
	(8,2,3),
	(9,3,3);

/*!40000 ALTER TABLE `season_year` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table students
# ------------------------------------------------------------

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(75) COLLATE utf8_bin DEFAULT NULL,
  `lastName` varchar(75) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`id`, `firstName`, `lastName`)
VALUES
	(1,X'5374657068616E6965',X'48616D6D6572'),
	(2,X'4C6F67616E',X'5261736D757373656E'),
	(3,X'52616368656C',X'4D6347696E6E6973');

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table students_projects_course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `students_projects_course`;

CREATE TABLE `students_projects_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `courseID` int(11) DEFAULT NULL,
  `seasonID` int(11) DEFAULT NULL,
  `yearID` int(11) DEFAULT NULL,
  `studentID` int(11) DEFAULT NULL,
  `projectsID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `students_projects_course` WRITE;
/*!40000 ALTER TABLE `students_projects_course` DISABLE KEYS */;

INSERT INTO `students_projects_course` (`id`, `courseID`, `seasonID`, `yearID`, `studentID`, `projectsID`)
VALUES
	(1,1,1,1,2,1);

/*!40000 ALTER TABLE `students_projects_course` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table year
# ------------------------------------------------------------

DROP TABLE IF EXISTS `year`;

CREATE TABLE `year` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `year` year(4) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `year` WRITE;
/*!40000 ALTER TABLE `year` DISABLE KEYS */;

INSERT INTO `year` (`id`, `year`, `active`)
VALUES
	(1,'2010',0),
	(2,'2011',0),
	(3,'2012',0),
	(4,'2013',1),
	(5,'2014',1),
	(6,'2015',0);

/*!40000 ALTER TABLE `year` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
