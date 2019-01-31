-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 jan. 2019 à 10:08
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ubstud`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `master_code` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `matricule` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `level` int(11) NOT NULL,
  `ca_result` int(11) NOT NULL,
  `exam_result` int(11) NOT NULL,
  PRIMARY KEY (`master_code`),
  UNIQUE KEY `matricule` (`matricule`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`master_code`, `first_name`, `last_name`, `matricule`, `gender`, `level`, `ca_result`, `exam_result`) VALUES
(1, 'John', 'smith', 'sm12a043', 'm', 400, 30, 70),
(2, 'John', 'smith', 'sm12a04d3', 'm', 400, 30, 70),
(3, 'John', 'smith', 'sm12a04ds3', 'm', 400, 30, 70),
(4, 'John', 'smith', 'sm12a03', 'm', 400, 30, 70),
(5, 'John', 'smith', 'sm12asf03', 'm', 400, 30, 70),
(6, 'asdf', 'sadf', 'adsf', 'm', 345, 345, 34),
(7, 'Moshe', 'kwiwk', 'fe54q234', 'm', 599, 84, 49),
(8, 'dsf', 'adfs', 'sfads', 'm', 400, 324, 3),
(9, 'rt', 'ert', 'ert', 'm', 400, 45, 45),
(10, 'check ', 'mate', 'sdfsd', 'm', 400, 34, 34),
(11, 'anotehr', 'one', 'sdkfm', 'm', 400, 34, 34),
(12, 'asdf', 'asdf', 'asdfdd', 'm', 400, 43, 34),
(13, 'obameyand', 'senior', 'sm343', 'm', 400, 43, 34),
(14, 'asdf', 'sdf', 'sf', 'Male', 100, 34, 34),
(15, 'adf', 'dsf', 'sdf', 'Male', 100, 34, 34),
(16, 'sdf', 'df', 'df', 'Male', 100, 34, 34),
(17, 'adf', 'df', 'dfdsf234', 'Male', 100, 334, 234),
(18, 'gf', 'fg', 'ty', 'Male', 100, 345, 45),
(19, 'adsf', 'dsf', 'dsf', 'Male', 100, 45, 45),
(20, 'df', 'df', 'adf', 'Male', 100, 34, 23),
(21, 'adsf', 'sdf', 'saf', 'Male', 100, 34, 34),
(22, 'asdfs', '', 'dddddddddd', 'Male', 100, 34, 34),
(23, 'dfsdf', 'sdf', 'dsd', 'Male', 100, 3, 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
