-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 12 Octobre 2018 à 11:24
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet_sql_acs`
--

-- --------------------------------------------------------

--
-- Structure de la table `acs`
--

CREATE TABLE IF NOT EXISTS `acs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Id_dept` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `acs`
--

INSERT INTO `acs` (`Id`, `first_name`, `last_name`, `address`, `Id_dept`) VALUES
(1, 'Fatoumata Bintou', 'Toure', 'Pikine Icotaf', 2),
(2, 'Babacar', 'Sylla', 'Nord Foire', 1),
(3, 'Oumar ousmane', 'Sow', 'Liberte 6', 1),
(4, 'Adama R T', 'Aidara', 'Sicap', 1),
(5, 'Yaya A', 'Sadio', 'Grand Yoff', 1),
(6, 'Alassane', 'Sene', 'Bene Tally', 1),
(7, 'Aliou', 'Sow', 'Keur Massar', 2),
(8, 'Lamine', 'Diouf', 'Mbaw', 2),
(9, 'Rokhaya ', 'Sambe', 'Guediawaye', 3),
(10, 'Andre Mamadou', 'Ndour', 'Yeumbeul', 2),
(11, 'Oumou Kalsoum', 'Sene', 'Fadia', 3),
(12, 'Ndeye Ndieundé', 'Leye', 'Parcelles Assainies', 1),
(13, 'Adji Fatou', 'Dieye', 'Fadia', 3),
(14, 'Cherif', 'Gueye', 'Bene Baraque', 2),
(15, 'Papa Kalidou', 'Mbodj', 'Golf Sud', 3),
(16, 'Mamadou Badiane', 'Faye', 'Niary Tally', 1),
(17, 'Omar', 'Mbaye', 'Thiaroye Gare', 2),
(18, 'Elhadji Ibrahima', 'Sagna', 'Fadia', 3),
(19, 'Aminata', 'Diop', 'Keur Mbaye Fall', 4),
(20, 'Aissatou', 'Ndaw', 'Grand Dakar', 1),
(21, 'Lamine', 'Sarr', 'Guediawaye', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
