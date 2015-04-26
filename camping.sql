-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 26 Avril 2015 à 23:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `camping`
--

-- --------------------------------------------------------

--
-- Structure de la table `caravan`
--

CREATE TABLE IF NOT EXISTS `caravan` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'caravans id name',
  `car_society_name` varchar(20) NOT NULL COMMENT 'society name who rent caravans',
  `car_price` double NOT NULL COMMENT 'caravans_price',
  `car_nb_person` int(11) NOT NULL COMMENT 'the number of person who can live into the caravan',
  `car_id_location` int(11) NOT NULL COMMENT 'location number where the caravans was rented',
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'customer''s ID ',
  `cust_name` varchar(15) NOT NULL COMMENT 'customer''s name',
  `cust_address` varchar(255) NOT NULL COMMENT 'customer''s address',
  `cust_postal_code` varchar(10) NOT NULL COMMENT 'customer''s postal code',
  `cust_city` varchar(20) NOT NULL COMMENT 'customer''s city',
  `cust_phone_number` varchar(13) NOT NULL COMMENT 'customer''s phone number',
  `cust_record_number` varchar(15) NOT NULL COMMENT 'customer''s record number',
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
  `rent_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id from rentals date',
  `rent_name` varchar(20) NOT NULL COMMENT 'renteur''s name',
  `rent_begin` date NOT NULL COMMENT 'begin date of the rent',
  `rent_end` date NOT NULL COMMENT 'end date of the rent',
  `rent_nb_person` int(11) NOT NULL COMMENT 'nb person of the rent',
  `rent_location_state` text NOT NULL COMMENT 'rent''s state after the rent',
  `rent_caution_state` double NOT NULL COMMENT 'rent''s state payment',
  `rent_days_number` int(11) NOT NULL COMMENT 'rent''s days number',
  `rent_price` double NOT NULL COMMENT 'rent''s price',
  PRIMARY KEY (`rent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
