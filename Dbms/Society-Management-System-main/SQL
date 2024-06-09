CREATE DATABASE dbms;

use dbms;

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Flatno` int(10) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `nno of family members` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Usertype` varchar(10) NOT NULL
);

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
);

CREATE TABLE IF NOT EXISTS `payrecords` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Flatno` int NOT NULL,
  `Amount` int NOT NULL,
  `Status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `notices` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Noticedate` date NOT NULL,
  `Message` varchar(500) NOT NULL
);

CREATE TABLE IF NOT EXISTS `combox` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `complaint` varchar(500) NOT NULL
);
