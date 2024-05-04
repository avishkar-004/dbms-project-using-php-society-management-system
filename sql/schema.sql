CREATE DATABASE IF NOT EXISTS dbms;
USE dbms;

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Flatno` int(10) NOT NULL,
  `MobileNo` bigint(10) NOT NULL,
  `nno of family members` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Usertype` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
);
