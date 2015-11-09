-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Octobre 2014 à 21:39
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `siteaionrising`
--

-- --------------------------------------------------------

--
-- Structure de la table `categoriearme`
--

CREATE TABLE IF NOT EXISTS `categoriearme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `categoriearme`
--

INSERT INTO `categoriearme` (`id`, `nom`) VALUES
(1, 'Canon'),
(2, 'Pistolet'),
(3, 'Espadon'),
(4, 'Guisarme'),
(5, 'Arc'),
(6, 'Ouvrage'),
(7, 'Joyaux'),
(8, 'Dague'),
(9, 'Epée'),
(10, 'Bâton'),
(11, 'Bouclier'),
(12, 'Masse'),
(13, 'Harpe');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Joueur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idAchat` bigint(20) NOT NULL,
  `quantite` smallint(6) NOT NULL,
  `nomPersonnage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prix` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `Joueur`, `idAchat`, `quantite`, `nomPersonnage`, `Prix`) VALUES
(1, 'admin', 110101566, 1, 'test', 350),
(2, 'admin', 110101566, 1, 'test', 350),
(3, 'admin', 110101566, 1, 'test', 350),
(4, 'admin', 164002011, 100, 'test', 20),
(5, 'admin', 164002116, 50, 'test', 40),
(6, 'admin', 164002057, 100, 'test', 20);

-- --------------------------------------------------------

--
-- Structure de la table `emplacement`
--

CREATE TABLE IF NOT EXISTS `emplacement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `emplacement`
--

INSERT INTO `emplacement` (`id`, `nom`) VALUES
(1, 'Torse'),
(2, 'Epaules'),
(3, 'Mains'),
(4, 'Jambière'),
(5, 'Bottes');

-- --------------------------------------------------------

--
-- Structure de la table `emplacementautre`
--

CREATE TABLE IF NOT EXISTS `emplacementautre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `emplacementautre`
--

INSERT INTO `emplacementautre` (`id`, `nom`) VALUES
(3, 'Pierre Divine'),
(4, 'Titre'),
(5, 'Divers'),
(6, 'Conso PvP');

-- --------------------------------------------------------

--
-- Structure de la table `emplacementbijoux`
--

CREATE TABLE IF NOT EXISTS `emplacementbijoux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `emplacementbijoux`
--

INSERT INTO `emplacementbijoux` (`id`, `nom`) VALUES
(1, 'Anneau'),
(2, 'Boucle d''oreille'),
(3, 'Collier'),
(4, 'Casque');

-- --------------------------------------------------------

--
-- Structure de la table `emplacementenchant`
--

CREATE TABLE IF NOT EXISTS `emplacementenchant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `emplacementenchant`
--

INSERT INTO `emplacementenchant` (`id`, `nom`) VALUES
(1, 'Basique Ancienne'),
(2, 'Double');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idItem` int(11) NOT NULL,
  `packet` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `niv` int(11) NOT NULL,
  `emplacement_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emplacementAutre_id` int(11) DEFAULT NULL,
  `emplacementEnchant_id` int(11) DEFAULT NULL,
  `emplacementBijoux_id` int(11) DEFAULT NULL,
  `categorieArme_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_20DFC649C4598A51` (`emplacement_id`),
  KEY `IDX_20DFC649513D3FC8` (`emplacementAutre_id`),
  KEY `IDX_20DFC649154F9761` (`emplacementEnchant_id`),
  KEY `IDX_20DFC6495F4E346C` (`emplacementBijoux_id`),
  KEY `IDX_20DFC649B2B5E82C` (`categorieArme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=107 ;

--
-- Contenu de la table `items`
--

INSERT INTO `items` (`id`, `nom`, `idItem`, `packet`, `prix`, `lien`, `categorie`, `niv`, `emplacement_id`, `type`, `emplacementAutre_id`, `emplacementEnchant_id`, `emplacementBijoux_id`, `categorieArme_id`) VALUES
(1, 'Parchemin supérieur de course', 164002011, 100, 20, 'http://aiondatabase.net/fr/item/164002011/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(2, '[Événement] Parchemin supérieur de course immortel', 164002116, 50, 40, 'http://aiondatabase.net/fr/item/164002116/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(3, '[Événement] Parchemin d''éveil supérieur', 164002057, 100, 20, 'http://aiondatabase.net/fr/item/164002057/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(4, '[Événement] Parchemin supérieur d''éveil immortel', 164002118, 50, 40, 'http://aiondatabase.net/fr/item/164002118/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(5, '[Événement] Parchemin supérieur de Courage', 164002010, 100, 20, 'http://aiondatabase.net/fr/item/164002010/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(6, '[Événement] Parchemin de courage supérieur immortel', 164002117, 50, 40, 'http://aiondatabase.net/fr/item/164002117/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(7, 'Parchemin majeur de crit. physique', 164000118, 50, 15, 'http://aiondatabase.net/fr/item/164000118/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(8, 'Parchemin majeur de crit. magiques', 164000122, 50, 15, 'http://aiondatabase.net/fr/item/164000122/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(9, 'Parchemin supérieur de vent enragé', 164002012, 100, 20, 'http://aiondatabase.net/fr/item/164002012/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(10, '[Événement] Parchemin majeur de vent rageur', 164002272, 50, 40, 'http://aiondatabase.net/fr/item/164002272/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(11, 'Parchemin excellent de résistance au vent', 164000117, 50, 10, 'http://aiondatabase.net/fr/item/164000117/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(12, 'Parchemin excellent de protection contre le feu', 164000114, 50, 10, 'http://aiondatabase.net/fr/item/164000114/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(13, 'Parchemin excellent d''imperméabilité', 164000116, 50, 10, 'http://aiondatabase.net/fr/item/164000116/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(14, 'Parchemin excellent de protection contre la terre', 164000115, 50, 10, 'http://aiondatabase.net/fr/item/164000115/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(15, 'Parchemin antichocs excellent', 164000131, 10, 10, 'http://aiondatabase.net/fr/item/164000131/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(16, '[Événement] Sérum de récupération de premier choix', 162001033, 100, 35, 'http://aiondatabase.net/fr/item/162001033/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(17, 'Potion de soins supérieure', 162000023, 100, 35, 'http://aiondatabase.net/fr/item/162000023/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(18, '[Événement] Potion de mana de premier choix', 162001029, 100, 25, 'http://aiondatabase.net/fr/item/162001029/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(19, '[Événement] Potion de vie de premier choix', 162001028, 100, 25, 'http://aiondatabase.net/fr/item/162001028/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(20, 'Sérum de vie divin honorable', 162001027, 20, 25, 'http://aiondatabase.net/fr/item/162001027/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(21, 'Cristal pur de récupération', 162000146, 10, 20, 'http://aiondatabase.net/fr/item/162000146/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(22, '[Événement] Sérum de vent de premier choix', 162001034, 50, 30, 'http://aiondatabase.net/fr/item/162001034/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(23, '[Événement] Gelée à la citrouille', 160005026, 10, 15, 'http://aiondatabase.net/fr/item/160005026/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(24, '[Événement] Gelée à la bière', 160005027, 5, 20, 'http://aiondatabase.net/fr/item/160005027/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(25, 'Graine de détection améliorée', 164000266, 10, 20, 'http://aiondatabase.net/fr/item/164000266/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(26, 'Don de mana béni majeur : niveau 2', 168310018, 1, 50, 'http://aiondatabase.net/fr/item/168310018/', 'Conso PvP', 1, NULL, 'Autre', 6, NULL, NULL, NULL),
(27, 'Tunique de commandant gardien d''élite', 110101566, 1, 350, 'http://aiondatabase.net/fr/item/110101566/', 'Item PvP', 65, 1, 'Tissu', NULL, NULL, NULL, NULL),
(28, 'Spallières de commandant gardien d''élite', 112101365, 1, 250, 'http://aiondatabase.net/fr/item/112101365/', 'Item PvP', 65, 2, 'Tissu', NULL, NULL, NULL, NULL),
(29, 'Gants de commandant gardien d''élite', 111101411, 1, 250, 'http://aiondatabase.net/fr/item/111101411/', 'Item PvP', 65, 3, 'Tissu', NULL, NULL, NULL, NULL),
(30, 'Jambières de commandant gardien d''élite', 113101429, 1, 300, 'http://aiondatabase.net/fr/item/113101429/', 'Item PvP', 65, 4, 'Tissu', NULL, NULL, NULL, NULL),
(31, 'Chaussures de commandant gardien d''élite', 114101458, 1, 250, 'http://aiondatabase.net/fr/item/114101458/', 'Item PvP', 65, 5, 'Tissu', NULL, NULL, NULL, NULL),
(32, 'Tunique sacrée de l''unité spéciale d''archons', 110101705, 1, 400, 'http://aiondatabase.net/fr/item/110101705/', 'Item PvP', 65, 1, 'Tissu', NULL, NULL, NULL, NULL),
(33, 'Spallières sacrées de l''unité spéciale d''archons', 112101487, 1, 300, 'http://aiondatabase.net/fr/item/112101487/', 'Item PvP', 65, 2, 'Tissu', NULL, NULL, NULL, NULL),
(34, 'Gants sacrés de l''unité spéciale d''archons', 111101535, 1, 300, 'http://aiondatabase.net/fr/item/111101535/', 'Item PvP', 65, 3, 'Tissu', NULL, NULL, NULL, NULL),
(35, 'Jambières sacrées de l''unité spéciale d''archons', 113101549, 1, 350, 'http://aiondatabase.net/fr/item/113101549/', 'Item PvP', 65, 4, 'Tissu', NULL, NULL, NULL, NULL),
(36, 'Chaussures sacrées de l''unité spéciale d''archons', 114101583, 1, 300, 'http://aiondatabase.net/fr/item/114101583/', 'Item PvP', 65, 5, 'Tissu', NULL, NULL, NULL, NULL),
(37, 'Cotte de mailles de commandant gardien d''élite', 110501424, 1, 350, 'http://aiondatabase.net/fr/item/110501424/', 'Item PvP', 65, 1, 'Maille', NULL, NULL, NULL, NULL),
(38, 'Spallières de mailles de commandant gardien d''élite', 112501323, 1, 250, 'http://aiondatabase.net/fr/item/112501323/', 'Item PvP', 65, 2, 'Maille', NULL, NULL, NULL, NULL),
(39, 'Gants de mailles de commandant gardien d''élite', 111501381, 1, 250, 'http://aiondatabase.net/fr/item/111501381/', 'Item PvP', 65, 3, 'Maille', NULL, NULL, NULL, NULL),
(40, 'Grèves de mailles de commandant gardien d''élite', 113501398, 1, 300, 'http://aiondatabase.net/fr/item/113501398/', 'Item PvP', 65, 4, 'Maille', NULL, NULL, NULL, NULL),
(41, 'Bottes de mailles de commandant gardien d''élite', 114501406, 1, 250, 'http://aiondatabase.net/fr/item/114501406/', 'Item PvP', 65, 5, 'Maille', NULL, NULL, NULL, NULL),
(42, 'Cotte de mailles sacrée de l''unité spéciale d''archons', 110551038, 1, 400, 'http://aiondatabase.net/fr/item/110551038/', 'Item PvP', 65, 1, 'Maille', NULL, NULL, NULL, NULL),
(43, 'Spallières de mailles sacrées de l''unité spéciale d''archons', 112501538, 1, 300, 'http://aiondatabase.net/fr/item/112501538/', 'Item PvP', 65, 2, 'Maille', NULL, NULL, NULL, NULL),
(44, 'Gants de mailles sacrés de l''unité spéciale d''archons', 111501596, 1, 300, 'http://aiondatabase.net/fr/item/111501596/', 'Item PvP', 65, 3, 'Maille', NULL, NULL, NULL, NULL),
(45, 'Grèves de mailles sacrées de l''unité spéciale d''archons', 113501614, 1, 350, 'http://aiondatabase.net/fr/item/113501614/', 'Item PvP', 65, 4, 'Maille', NULL, NULL, NULL, NULL),
(46, 'Bottes de mailles sacrées de l''unité spéciale d''archons', 114501623, 1, 300, 'http://aiondatabase.net/fr/item/114501623/', 'Item PvP', 65, 5, 'Maille', NULL, NULL, NULL, NULL),
(47, 'Cotte de mailles d''exécuteur archon d''élite', 110501481, 1, 350, 'http://aiondatabase.net/fr/item/110501481/', 'Item PvP', 65, 1, 'Maille Physique', NULL, NULL, NULL, NULL),
(48, 'Gants de mailles d''exécuteur archon d''élite', 111501438, 1, 250, 'http://aiondatabase.net/fr/item/111501438/', 'Item PvP', 65, 3, 'Maille Physique', NULL, NULL, NULL, NULL),
(49, 'Spallières de mailles d''exécuteur archon d''élite', 112501380, 1, 250, 'http://aiondatabase.net/fr/item/112501380/', 'Item PvP', 65, 2, 'Maille Physique', NULL, NULL, NULL, NULL),
(50, 'Grèves de mailles de l''exécuteur archon d''élite', 113501454, 1, 300, 'http://aiondatabase.net/fr/item/113501454/', 'Item PvP', 65, 4, 'Maille Physique', NULL, NULL, NULL, NULL),
(51, 'Bottes de mailles d''exécuteur gardien d''élite', 114501458, 1, 250, 'http://aiondatabase.net/fr/item/114501458/', 'Item PvP', 65, 5, 'Maille Physique', NULL, NULL, NULL, NULL),
(52, 'Cotte de mailles sacrée de l''unité spéciale de gardiens', 110551039, 1, 400, 'http://aiondatabase.net/fr/item/110551039/', 'Item PvP', 65, 1, 'Maille Physique', NULL, NULL, NULL, NULL),
(53, 'Spallières de mailles sacrées de l''unité spéciale de gardiens', 112501539, 1, 300, 'http://aiondatabase.net/fr/item/112501539/', 'Item PvP', 65, 2, 'Maille Physique', NULL, NULL, NULL, NULL),
(54, 'Gants de mailles sacrés de l''unité spéciale de gardiens', 111501597, 1, 300, 'http://aiondatabase.net/fr/item/111501597/', 'Item PvP', 65, 3, 'Maille Physique', NULL, NULL, NULL, NULL),
(55, 'Grèves de mailles sacrées de l''unité spéciale de gardiens', 113501615, 1, 350, 'http://aiondatabase.net/fr/item/113501615/', 'Item PvP', 65, 4, 'Maille Physique', NULL, NULL, NULL, NULL),
(56, 'Bottes de mailles sacrées de l''unité spéciale de gardiens', 114501624, 1, 300, 'http://aiondatabase.net/fr/item/114501624/', 'Item PvP', 65, 5, 'Maille Physique', NULL, NULL, NULL, NULL),
(57, 'Pourpoint de cuir d''exécuteur archon d''élite', 110301631, 1, 350, 'http://aiondatabase.net/fr/item/110301631/', 'Item PvP', 65, 1, 'Cuir Magique', NULL, NULL, NULL, NULL),
(58, 'Spallières de cuir de l''exécuteur archon d''élite', 112301511, 1, 250, 'http://aiondatabase.net/fr/item/112301511/', 'Item PvP', 65, 2, 'Cuir Magique', NULL, NULL, NULL, NULL),
(59, 'Gants de cuir de l''exécuteur archon d''élite', 111301572, 1, 250, 'http://aiondatabase.net/fr/item/111301572/', 'Item PvP', 65, 3, 'Cuir Magique', NULL, NULL, NULL, NULL),
(60, 'Jambières de cuir d''exécuteur archon d''élite', 113301597, 1, 300, 'http://aiondatabase.net/fr/item/113301597/', 'Item PvP', 65, 4, 'Cuir Magique', NULL, NULL, NULL, NULL),
(61, 'Bottes de cuir d''exécuteur archon d''élite', 114301636, 1, 250, 'http://aiondatabase.net/fr/item/114301636/', 'Item PvP', 65, 5, 'Cuir Magique', NULL, NULL, NULL, NULL),
(62, 'Pourpoint sacré de l''unité spéciale de gardiens', 110301709, 1, 400, 'http://aiondatabase.net/fr/item/110301709/', 'Item PvP', 65, 1, 'Cuir Magique', NULL, NULL, NULL, NULL),
(63, 'Spallières de cuir sacrées de l''unité spéciale de gardiens', 112301586, 1, 300, 'http://aiondatabase.net/fr/item/112301586/', 'Item PvP', 65, 2, 'Cuir Magique', NULL, NULL, NULL, NULL),
(64, 'Gants de cuir sacrés de l''unité spéciale de gardiens', 111301647, 1, 300, 'http://aiondatabase.net/fr/item/111301647/', 'Item PvP', 65, 3, 'Cuir Magique', NULL, NULL, NULL, NULL),
(65, 'Jambières de cuir sacrées de l''unité spéciale de gardiens', 113301678, 1, 350, 'http://aiondatabase.net/fr/item/113301678/', 'Item PvP', 65, 4, 'Cuir Magique', NULL, NULL, NULL, NULL),
(66, 'Chaussures de cuir sacrées de l''unité spéciale de gardiens', 114301715, 1, 300, 'http://aiondatabase.net/fr/item/114301715/', 'Item PvP', 65, 5, 'Cuir Magique', NULL, NULL, NULL, NULL),
(67, 'Pourpoint de cuir de commandant gardien d''élite', 110301463, 1, 350, 'http://aiondatabase.net/fr/item/110301463/', 'Item PvP', 65, 1, 'Cuir', NULL, NULL, NULL, NULL),
(68, 'Spallières de cuir de commandant gardien d''élite', 112301347, 1, 250, 'http://aiondatabase.net/fr/item/112301347/', 'Item PvP', 65, 2, 'Cuir', NULL, NULL, NULL, NULL),
(69, 'Gants de cuir de commandant gardien d''élite', 111301403, 1, 250, 'http://aiondatabase.net/fr/item/111301403/', 'Item PvP', 65, 3, 'Cuir', NULL, NULL, NULL, NULL),
(70, 'Jambières de cuir de commandant gardien d''élite', 113301428, 1, 300, 'http://aiondatabase.net/fr/item/113301428/', 'Item PvP', 65, 4, 'Cuir', NULL, NULL, NULL, NULL),
(71, 'Chaussures de cuir de commandant gardien d''élite', 114301464, 1, 250, 'http://aiondatabase.net/fr/item/114301464/', 'Item PvP', 65, 5, 'Cuir', NULL, NULL, NULL, NULL),
(72, 'Pourpoint sacré de l''unité spéciale d''archons', 110301708, 1, 400, 'http://aiondatabase.net/fr/item/110301708/', 'Item PvP', 65, 1, 'Cuir', NULL, NULL, NULL, NULL),
(73, 'Spallières de cuir sacrées de l''unité spéciale d''archons', 112301585, 1, 300, 'http://aiondatabase.net/fr/item/112301585/', 'Item PvP', 65, 2, 'Cuir', NULL, NULL, NULL, NULL),
(74, 'Gants de cuir sacrés de l''unité spéciale d''archons', 111301646, 1, 300, 'http://aiondatabase.net/fr/item/111301646/', 'Item PvP', 65, 3, 'Cuir', NULL, NULL, NULL, NULL),
(75, 'Jambières de cuir sacrées de l''unité spéciale d''archons', 113301677, 1, 350, 'http://aiondatabase.net/fr/item/113301677/', 'Item PvP', 65, 4, 'Cuir', NULL, NULL, NULL, NULL),
(76, 'Chaussures de cuir sacrées de l''unité spéciale d''archons', 114301714, 1, 300, 'http://aiondatabase.net/fr/item/114301714/', 'Item PvP', 65, 5, 'Cuir', NULL, NULL, NULL, NULL),
(77, 'Plastron de commandant gardien d''élite', 110601399, 1, 350, 'http://aiondatabase.net/fr/item/110601399/', 'Item PvP', 65, 1, 'Plate', NULL, NULL, NULL, NULL),
(78, 'Spallières de plates de commandant gardien d''élite', 112601343, 1, 250, 'http://aiondatabase.net/fr/item/112601343/', 'Item PvP', 65, 2, 'Plate', NULL, NULL, NULL, NULL),
(79, 'Gantelets de commandant gardien d''élite', 111601361, 1, 250, 'http://aiondatabase.net/fr/item/111601361/', 'Item PvP', 65, 3, 'Plate', NULL, NULL, NULL, NULL),
(80, 'Grèves de plates de commandant gardien d''élite', 113601351, 1, 300, 'http://aiondatabase.net/fr/item/113601351/', 'Item PvP', 65, 4, 'Plate', NULL, NULL, NULL, NULL),
(81, 'Bottes de plates de commandant gardien d''élite', 114601349, 1, 250, 'http://aiondatabase.net/fr/item/114601349/', 'Item PvP', 65, 5, 'Plate', NULL, NULL, NULL, NULL),
(82, 'Plastron sacré de l''unité spéciale d''archons', 110601512, 1, 400, 'http://aiondatabase.net/fr/item/110601512/', 'Item PvP', 65, 1, 'Plate', NULL, NULL, NULL, NULL),
(83, 'Spallières de plates sacrées de l''unité spéciale d''archons', 112601456, 1, 300, 'http://aiondatabase.net/fr/item/112601456/', 'Item PvP', 65, 2, 'Plate', NULL, NULL, NULL, NULL),
(84, 'Gantelets sacrés de l''unité spéciale d''archons', 111601475, 1, 300, 'http://aiondatabase.net/fr/item/111601475/', 'Item PvP', 65, 3, 'Plate', NULL, NULL, NULL, NULL),
(85, 'Grèves de plates sacrées de l''unité spéciale d''archons', 113601458, 1, 350, 'http://aiondatabase.net/fr/item/113601458/', 'Item PvP', 65, 4, 'Plate', NULL, NULL, NULL, NULL),
(86, 'Bottes de plates sacrées de l''unité spéciale d''archons', 114601465, 1, 300, 'http://aiondatabase.net/fr/item/114601465/', 'Item PvP', 65, 5, 'Plate', NULL, NULL, NULL, NULL),
(87, 'Mets épicés de noble maître', 160002414, 50, 80, 'http://aiondatabase.net/fr/item/160002414/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(88, 'Mets sucrés de noble maître', 160002415, 50, 80, 'http://aiondatabase.net/fr/item/160002415/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(89, 'Bouillon à la viande de Dragon épicé', 160002505, 50, 50, 'http://aiondatabase.net/fr/item/160002505/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(90, 'Viande de Dragon épicée frite à l''huile', 160002504, 50, 50, 'http://aiondatabase.net/fr/item/160002504/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(91, 'Viande de Dragon pimentée frite à l''huile', 160002506, 50, 50, 'http://aiondatabase.net/fr/item/160002506/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(92, 'Pépento grillé au fromage', 160002436, 50, 30, 'http://aiondatabase.net/fr/item/160002436/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(93, 'Bouillon à la viande de Dragon épicé', 160002505, 50, 30, 'http://aiondatabase.net/fr/item/160002505/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(94, 'salade de viande de Dragon à la vinaigrette accompagnée de Plumebo', 160002453, 50, 30, 'http://aiondatabase.net/fr/item/160002453/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(95, 'Savoureuse viande braisée de l''empereur Dragon à cornes', 160002394, 50, 30, 'http://aiondatabase.net/fr/item/160002394/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(96, 'Savoureuse viande rôtie de l''empereur Dragon à cornes', 160002397, 50, 30, 'http://aiondatabase.net/fr/item/160002397/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(97, 'Savoureux curry de l''empereur Dragon à cornes', 160002393, 50, 30, 'http://aiondatabase.net/fr/item/160002393/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(98, 'Omelette au fromage d''Abex', 160002432, 50, 30, 'http://aiondatabase.net/fr/item/160002432/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(99, 'Plumebo épicé au fromage', 160002433, 50, 30, 'http://aiondatabase.net/fr/item/160002433/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(100, 'Plumebo frais frit au fromage', 160002478, 50, 30, 'http://aiondatabase.net/fr/item/160002478/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(101, 'Omelette à la viande de Dragon frite à l''huile accompagnée de Plumebo', 160002456, 50, 30, 'http://aiondatabase.net/fr/item/160002456/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(102, 'Nourriture bouillie de l''empereur Dragon à cornes', 160002389, 50, 30, 'http://aiondatabase.net/fr/item/160002389/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(103, 'Savoureuse omelette de l''empereur Dragon à cornes', 160002395, 50, 30, 'http://aiondatabase.net/fr/item/160002395/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(104, 'Salade de l''empereur Dragon à cornes', 160002385, 50, 30, 'http://aiondatabase.net/fr/item/160002385/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(105, 'Pépento frais rôti au fromage', 160002479, 50, 30, 'http://aiondatabase.net/fr/item/160002479/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL),
(106, 'Savoureuse viande frite de l''empereur Dragon à cornes', 160002391, 50, 30, 'http://aiondatabase.net/fr/item/160002391/', 'Conso', 1, NULL, 'Nourriture', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `site_user`
--

CREATE TABLE IF NOT EXISTS `site_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `cashShopMoney` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B6096BB092FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_B6096BB0A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `site_user`
--

INSERT INTO `site_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `cashShopMoney`) VALUES
(9, 'admin', 'admin', 'email@domaine.com', 'email@domaine.com', 1, '7ger35hhuo4kok44gwcwk8skgwgkgs4', 'Sd16OaTSB9Qzs/t+8RHAcnF6TgwAS9OaGGO3t+SXyZsjTeVy3XBed+29oP6GZhtlrnno0DTWVOs8n0Yf76oI0g==', '2014-10-13 19:29:11', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 320),
(10, 'test', 'test', 'test@domaine.com', 'test@domaine.com', 1, 'pzi9p93rguss4ssc8s48wkggc8w0soc', '26ogeTvIIDCjyaOHOvj3Zhkt2QFuvPLWFsbEuz0LqJUWcYlnrYKLq5BNzwjEI7pc7OxvSnwXR486lbLhEZH03A==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL),
(11, 'baudouin', 'baudouin', 'baudouin-wartel@live.fr', 'baudouin-wartel@live.fr', 1, '4645vp7al3y8csw4g4sg4ow0ogskc84', 'Cb9tL6wHtIBA8Xcsijm0MTay+tjwE0EiEHXKZ+K9mdtweX2lLIqoVQmapILDwBJMroIhJyUaIJ1GS8lwhB4kFQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL),
(12, 'testo', 'testo', 'testo@domaine.fr', 'testo@domaine.fr', 1, '46m3sufekbggks0s0s0o4w8ogckcgsc', 'UrCYP7lSRBHy3fwsVcXCXIWOdw/KpSLg05yip9rtX0FUHXxhVCZXe2YTl+AKRG2TXWVRqUNjiTiLyc4T6BlJ/w==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `FK_20DFC649154F9761` FOREIGN KEY (`emplacementEnchant_id`) REFERENCES `emplacementenchant` (`id`),
  ADD CONSTRAINT `FK_20DFC649513D3FC8` FOREIGN KEY (`emplacementAutre_id`) REFERENCES `emplacementautre` (`id`),
  ADD CONSTRAINT `FK_20DFC6495F4E346C` FOREIGN KEY (`emplacementBijoux_id`) REFERENCES `emplacementbijoux` (`id`),
  ADD CONSTRAINT `FK_20DFC649B2B5E82C` FOREIGN KEY (`categorieArme_id`) REFERENCES `categoriearme` (`id`),
  ADD CONSTRAINT `FK_20DFC649C4598A51` FOREIGN KEY (`emplacement_id`) REFERENCES `emplacement` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
