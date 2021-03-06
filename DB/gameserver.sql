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
-- Base de données :  `gameserver`
--

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `account_id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `exp` bigint(20) NOT NULL DEFAULT '0',
  `recoverexp` bigint(20) NOT NULL DEFAULT '0',
  `x` float NOT NULL,
  `y` float NOT NULL,
  `z` float NOT NULL,
  `heading` int(11) NOT NULL,
  `world_id` int(11) NOT NULL,
  `world_owner` int(11) NOT NULL DEFAULT '0',
  `gender` enum('MALE','FEMALE') NOT NULL,
  `race` enum('ASMODIANS','ELYOS') NOT NULL,
  `player_class` enum('WARRIOR','GLADIATOR','TEMPLAR','SCOUT','ASSASSIN','RANGER','MAGE','SORCERER','SPIRIT_MASTER','PRIEST','CLERIC','CHANTER','TECHNIST','GUNSLINGER','MUSE','SONGWEAVER','AETHERTECH','ALL') NOT NULL,
  `creation_date` timestamp NULL DEFAULT NULL,
  `deletion_date` timestamp NULL DEFAULT NULL,
  `last_online` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `quest_expands` tinyint(1) NOT NULL DEFAULT '0',
  `npc_expands` tinyint(1) NOT NULL DEFAULT '0',
  `advanced_stigma_slot_size` tinyint(1) NOT NULL DEFAULT '0',
  `warehouse_size` tinyint(1) NOT NULL DEFAULT '0',
  `mailbox_letters` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `title_id` int(3) NOT NULL DEFAULT '-1',
  `bonus_title_id` int(3) NOT NULL DEFAULT '-1',
  `dp` int(3) NOT NULL DEFAULT '0',
  `soul_sickness` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `reposte_energy` bigint(20) NOT NULL DEFAULT '0',
  `bg_points` int(11) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `note` text,
  `mentor_flag_time` int(11) NOT NULL DEFAULT '0',
  `initial_gamestats` int(11) NOT NULL DEFAULT '0',
  `last_transfer_time` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_unique` (`name`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`id`, `name`, `account_id`, `account_name`, `exp`, `recoverexp`, `x`, `y`, `z`, `heading`, `world_id`, `world_owner`, `gender`, `race`, `player_class`, `creation_date`, `deletion_date`, `last_online`, `quest_expands`, `npc_expands`, `advanced_stigma_slot_size`, `warehouse_size`, `mailbox_letters`, `title_id`, `bonus_title_id`, `dp`, `soul_sickness`, `reposte_energy`, `bg_points`, `online`, `note`, `mentor_flag_time`, `initial_gamestats`, `last_transfer_time`) VALUES
(323362, 'Testemu', 33, 'elbouziouk4', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'MALE', 'ELYOS', 'WARRIOR', '2014-08-22 16:31:34', NULL, '2014-08-25 14:45:40', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323375, 'Dwadwad', 46, 'xita', 0, 0, 1067.24, 1451.72, 96, 4, 710010000, 0, 'MALE', 'ASMODIANS', 'PRIEST', '2014-08-25 14:27:20', NULL, '2014-08-25 14:45:21', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323390, 'Kushiki', 42, 'kushiki', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'MALE', 'ELYOS', 'PRIEST', '2014-08-24 12:08:54', NULL, '2014-08-24 12:18:09', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323437, 'Testchatalacon', 10, 'elbouziouk3', 5, 0, 824.114, 1233.66, 118.646, 111, 210010000, 0, 'FEMALE', 'ELYOS', 'MAGE', '2014-07-31 21:25:49', NULL, '2014-08-22 18:08:23', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(323449, 'Ponpon', 11, 'ojisan', 5, 0, 1205.91, 1044.14, 139.972, 69, 210010000, 0, 'MALE', 'ELYOS', 'TECHNIST', '2014-07-31 21:28:26', NULL, '2014-07-31 23:19:41', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(323458, 'Elyos', 9, 'elia2', 4382, 0, 1205.6, 1045.49, 139.764, 52, 210010000, 0, 'FEMALE', 'ELYOS', 'MAGE', '2014-07-31 21:28:37', NULL, '2014-07-31 21:55:11', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(323484, 'Test', 1, 'alri', 3120186907, 0, 501.23, 384.626, 126.79, 15, 110070000, 0, 'MALE', 'ELYOS', 'TEMPLAR', '2014-08-04 15:33:36', NULL, '2014-08-08 14:35:56', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(323584, 'Testeuhhhhhhhh', 34, 'testo', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'MALE', 'ELYOS', 'WARRIOR', '2014-08-22 16:34:17', NULL, '2014-08-22 17:26:58', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323607, 'Merlin', 1, 'alri', 3261597771, 0, 510.448, 388.542, 126.79, 78, 110070000, 0, 'MALE', 'ELYOS', 'ASSASSIN', '2014-07-31 16:27:12', NULL, '2014-08-08 18:57:27', 0, 0, 0, 0, 0, -1, -1, 1904, 0, 145773864, 0, 0, NULL, 0, 1, '0'),
(323615, 'Pvaypay', 2, 'elia', 3120186912, 0, 1525.13, 1512.27, 565.901, 58, 110010000, 0, 'FEMALE', 'ASMODIANS', 'TEMPLAR', '2014-07-31 16:27:54', NULL, '2014-07-31 16:53:28', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323652, 'Connassee', 35, 'elbouziouk5', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'FEMALE', 'ELYOS', 'MAGE', '2014-08-22 16:38:32', NULL, '2014-08-24 12:18:07', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323669, 'Elia', 37, 'elia1', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'FEMALE', 'ELYOS', 'WARRIOR', '2014-08-22 18:12:05', NULL, '2014-08-22 19:11:48', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323676, 'Qz', 21, 'marcus93150', 3120186907, 0, 553.948, 129.517, 615.107, 25, 300240000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-08-07 23:56:27', NULL, '2014-08-08 00:24:48', 0, 9, 12, 0, 0, -1, -1, 500, 1, 0, 0, 0, NULL, 0, 1, '0'),
(323737, 'Kiwie', 3, 'elbouziouk2', 3120606907, 0, 485.87, 245.501, 127.008, 33, 110070000, 0, 'FEMALE', 'ELYOS', 'SONGWEAVER', '2014-08-20 20:56:27', NULL, '2014-08-22 10:35:24', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146020304, 0, 0, NULL, 0, 1, '0'),
(323786, 'Miky', 3, 'elbouziouk2', 3700513285, 0, 1523.26, 1515.46, 565.906, 68, 110010000, 0, 'FEMALE', 'ELYOS', 'AETHERTECH', '2014-08-20 21:04:38', NULL, '2014-08-25 21:16:09', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(323905, 'Mimi', 23, 'nana98', 3120186907, 0, 406.149, 250.623, 93.1294, 0, 120080000, 0, 'FEMALE', 'ASMODIANS', 'SORCERER', '2014-08-08 17:17:00', NULL, '2014-08-26 16:16:27', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(323938, 'Toti', 36, 'tito', 0, 0, 1067.24, 1451.72, 96, 4, 710010000, 0, 'MALE', 'ASMODIANS', 'WARRIOR', '2014-08-22 16:40:09', NULL, '2014-08-22 16:48:18', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(323944, 'Sushy', 29, 'a92', 3120186907, 0, 1521.23, 1507.68, 565.911, 9, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-12 23:42:37', NULL, '2014-08-12 23:46:25', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(323978, 'Templar', 5, 'ojiisan', 3120186907, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-08-12 18:39:39', NULL, '2014-08-23 21:14:10', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(324064, 'Kushikii', 44, 'wolfy', 0, 0, 1214.73, 1910.19, 95.0523, 117, 700010000, 0, 'FEMALE', 'ELYOS', 'PRIEST', '2014-08-24 15:15:23', NULL, '2014-08-28 19:00:43', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324137, 'Ohputain', 45, 'ovniminati', 0, 0, 1214.73, 1910.19, 96, 117, 700010000, 0, 'FEMALE', 'ELYOS', 'SCOUT', '2014-08-24 15:19:44', NULL, '2014-08-24 15:33:08', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(324146, 'Testeuse', 10, 'elbouziouk3', 3120690907, 0, 1527.7, 1511.15, 565.894, 111, 110010000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-08 00:10:03', NULL, '2014-08-27 08:08:17', 0, 9, 12, 0, 0, -1, -1, 0, 3, 146140304, 0, 0, NULL, 0, 1, '0'),
(324211, 'Miseryisbad', 19, 'miseryisbad', 3120186907, 0, 1522.28, 1511.5, 565.909, 61, 110010000, 0, 'MALE', 'ELYOS', 'RANGER', '2014-08-05 15:48:04', NULL, '2014-08-05 17:09:20', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324438, 'Gamma', 54, 'elbouziouk8', 3120186907, 0, 503.355, 394.753, 126.79, 90, 110070000, 0, 'FEMALE', 'ELYOS', 'CLERIC', '2014-08-30 07:07:40', NULL, '2014-08-30 07:25:21', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324441, 'Liserune', 52, 'eliajoueur', 3120232695, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-08-28 19:25:44', NULL, '2014-08-28 20:40:24', 0, 9, 12, 0, 0, -1, -1, 3190, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324675, 'Dadawdwad', 41, 'xitanium', 3120186907, 0, 502.505, 373.067, 126.79, 27, 110070000, 0, 'MALE', 'ELYOS', 'ASSASSIN', '2014-08-24 11:42:08', NULL, '2014-08-25 14:22:26', 0, 9, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324686, 'Testmaj', 47, 'elbouziouk7', 3120186907, 0, 547.432, 254.29, 127.286, 37, 110070000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-30 05:29:20', NULL, '2014-08-30 06:02:46', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(324952, 'Delta', 54, 'elbouziouk8', 3120186907, 0, 503.496, 397.483, 126.79, 89, 110070000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-30 06:39:13', NULL, '2014-08-30 06:54:55', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(325634, 'Tesst', 20, 'nana96', 3120186907, 0, 616.841, 341.299, 637.947, 84, 300240000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-07 23:05:24', NULL, '2014-08-07 23:08:07', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(325639, 'Kitkat', 18, 'nana92', 3120221652, 0, 1520.22, 1518.46, 565.916, 110, 110010000, 0, 'FEMALE', 'ELYOS', 'SPIRIT_MASTER', '2014-08-06 01:20:34', NULL, '2014-08-23 18:38:24', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(325852, 'Nami', 18, 'nana92', 3120186907, 0, 1526.67, 1512.5, 565.896, 23, 110010000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-08-12 22:13:55', NULL, '2014-08-24 16:46:57', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(326194, 'Helcaposs', 32, 'helcapos', 3120186907, 0, 1526.97, 1503.04, 565.906, 2, 110010000, 0, 'MALE', 'ELYOS', 'GLADIATOR', '2014-08-22 21:52:42', NULL, '2014-08-29 12:39:03', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(326206, 'Testrobot', 4, 'wolfuz', 3120186907, 0, 1525.03, 1522.04, 565.913, 74, 110010000, 0, 'FEMALE', 'ELYOS', 'AETHERTECH', '2014-08-20 22:04:27', NULL, '2014-08-20 22:20:04', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(326265, 'Greggrdg', 43, 'seyy', 126069, 0, 402.743, 250.618, 93.1295, 0, 120080000, 0, 'FEMALE', 'ASMODIANS', 'SCOUT', '2014-08-24 14:36:33', NULL, '2014-08-24 14:38:52', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(326631, 'Testpvp', 47, 'elbouziouk7', 3120208039, 0, 1524.26, 1499.12, 565.918, 31, 110010000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-25 18:42:00', NULL, '2014-08-27 08:30:32', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146134304, 0, 0, NULL, 0, 1, '0'),
(326653, 'Pon', 48, 'padawannop', 3120186907, 0, 402.743, 250.618, 93.1295, 0, 120080000, 0, 'MALE', 'ASMODIANS', 'GUNSLINGER', '2014-08-25 18:43:03', NULL, '2014-08-25 19:16:13', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(326711, 'Beta', 54, 'elbouziouk8', 3120186907, 0, 503.579, 400.425, 126.79, 90, 110070000, 0, 'MALE', 'ELYOS', 'GLADIATOR', '2014-08-30 06:23:04', NULL, '2014-08-30 06:35:32', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(326988, 'Sloth', 50, 'pintade', 3120186907, 0, 388.989, 327.542, 1101.97, 98, 220040000, 0, 'MALE', 'ELYOS', 'AETHERTECH', '2014-08-28 01:52:16', NULL, '2014-08-28 15:45:03', 0, 9, 12, 0, 0, -1, -1, 0, 0, 39351321, 0, 0, NULL, 0, 1, '0'),
(327138, 'Kllay', 55, 'waynot', 3120250099, 0, 551.854, 258.991, 93.52, 85, 120080000, 0, 'FEMALE', 'ASMODIANS', 'GLADIATOR', '2014-08-30 08:31:36', NULL, '2014-08-31 20:01:34', 0, 9, 12, 0, 0, -1, -1, 0, 0, 140945894, 0, 0, NULL, 0, 1, '0'),
(327226, 'Olga', 27, 'fridoria', 3120186907, 0, 498.9, 389.279, 126.79, 83, 110070000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-08-30 08:39:28', NULL, '2014-09-21 10:21:54', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(327309, 'Tsuyosa', 56, 'joueurfri', 3120186907, 0, 579.23, 250.019, 127.008, 117, 110070000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-30 08:44:38', NULL, '2014-08-30 12:06:48', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(327384, 'Arctica', 8, 'arctica', 3120186907, 0, 1543.05, 1519.41, 565.914, 38, 110010000, 0, 'MALE', 'ASMODIANS', 'GLADIATOR', '2014-07-31 20:27:24', NULL, '2014-10-11 07:37:12', 0, 0, 0, 0, 0, -1, -1, 0, 6, 146140304, 0, 0, NULL, 0, 1, '0'),
(327411, 'Qifu', 57, 'onime00', 3120244907, 0, 502.285, 385.296, 126.79, 55, 110070000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-30 08:50:16', NULL, '2014-08-30 21:41:31', 0, 9, 12, 0, 0, -1, -1, 0, 0, 69501216, 0, 0, '', 0, 1, '0'),
(327434, 'Jubi', 59, 'jokitowang', 3120186907, 0, 583.315, 252.764, 127.008, 110, 110070000, 0, 'MALE', 'ELYOS', 'AETHERTECH', '2014-08-31 15:00:56', NULL, '2014-08-31 19:03:56', 0, 9, 12, 0, 0, -1, -1, 2000, 0, 0, 0, 0, NULL, 0, 1, '0'),
(327526, 'Weed', 66, 'helcapos2', 3120186907, 0, 3012.35, 1980.74, 388.5, 4, 210020000, 0, 'FEMALE', 'ELYOS', 'SONGWEAVER', '2014-08-31 15:05:05', NULL, '2014-09-05 22:22:00', 0, 9, 12, 0, 0, -1, 182, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(328700, 'Coockie', 17, 'sexyy', 3120601397, 0, 1917.11, 1546.19, 590.011, 84, 110010000, 0, 'FEMALE', 'ELYOS', 'CLERIC', '2014-08-05 19:08:16', NULL, '2014-08-27 07:52:34', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(329192, 'Yonko', 51, 'yonko', 3120267997, 0, 402.743, 250.618, 93.1295, 0, 120080000, 0, 'MALE', 'ASMODIANS', 'CLERIC', '2014-08-28 19:03:11', NULL, '2014-08-28 20:55:18', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(329240, 'Proutefufu', 28, 'frijoueur', 3120186907, 0, 503.457, 390.898, 126.79, 22, 110070000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-28 19:08:15', NULL, '2014-08-28 19:10:35', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(329276, 'Prouttank', 28, 'frijoueur', 3120213856, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-08-28 19:10:06', NULL, '2014-08-28 20:30:57', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(329283, 'Qsdfghklm', 48, 'padawannop', 3120247337, 0, 402.743, 250.618, 93.1295, 0, 120080000, 0, 'MALE', 'ASMODIANS', 'GLADIATOR', '2014-08-28 19:10:09', NULL, '2014-08-28 20:40:12', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(329453, 'Lust', 50, 'pintade', 3120186907, 0, 1450.71, 1488.03, 573.072, 25, 110010000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-28 19:18:14', NULL, '2014-08-29 17:55:09', 0, 9, 0, 0, 0, -1, -1, 0, 0, 112939053, 0, 0, NULL, 0, 1, '0'),
(329521, 'Raina', 58, 'raina', 3120287514, 0, 1445.99, 1529.47, 573.072, 88, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-30 09:23:33', NULL, '2014-10-10 21:12:50', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(329663, 'Tsuyosaa', 56, 'joueurfri', 3120186907, 0, 504.223, 284.909, 127.215, 90, 110070000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-08-30 09:34:32', NULL, '2014-08-30 17:56:45', 0, 9, 12, 0, 0, -1, -1, 0, 0, 27595822, 0, 0, NULL, 0, 1, '0'),
(329768, 'Testzz', 58, 'raina', 3120186907, 0, 541.718, 328.451, 126.097, 20, 110070000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-08-30 09:45:46', NULL, '2014-09-04 14:59:18', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(329800, 'Helcapos', 32, 'helcapos', 3120186907, 0, 1538.93, 1512.55, 565.898, 63, 110010000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-21 22:45:54', NULL, '2014-08-22 21:47:07', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 130205259, 0, 0, NULL, 0, 1, '0'),
(329856, 'Inory', 2, 'elia', 3254359907, 0, 340.129, 930.344, 1275.28, 73, 300190000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-07-29 16:16:42', NULL, '2014-08-23 23:58:05', 1, 8, 0, 0, 0, -1, -1, 4000, 2, 124611947, 0, 0, NULL, 0, 1, '0'),
(329898, 'Courtney', 71, 'monet', 3120646696, 0, 2898.06, 1967.57, 381.25, 111, 210020000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-09-01 23:14:50', NULL, '2014-09-09 19:30:53', 0, 9, 12, 0, 0, 274, 65535, 0, 0, 146008937, 0, 0, NULL, 0, 1, '0'),
(330730, 'Testf', 28, 'frijoueur', 3120186907, 0, 591.553, 245.228, 127.008, 106, 110070000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-12 14:20:51', NULL, '2014-08-12 14:24:45', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(331260, 'Testeone', 5, 'ojiisan', 3331879016, 0, 212.347, 320.201, 1111.58, 39, 110010000, 0, 'MALE', 'ELYOS', 'GLADIATOR', '2014-07-30 00:18:19', NULL, '2014-08-24 01:23:31', 1, 0, 0, 0, 0, -1, -1, 4000, 0, 85732324, 0, 0, NULL, 0, 1, '0'),
(331819, 'Madika', 3, 'elbouziouk2', 3122118526, 0, 1489.76, 1508.07, 566.035, 119, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-07-29 16:51:30', NULL, '2014-08-28 03:09:59', 0, 9, 0, 5, 0, -1, -1, 0, 1, 146140304, 0, 0, NULL, 0, 1, '0'),
(331879, 'Qhw', 59, 'jokitowang', 3120285410, 0, 508.175, 268.473, 126.976, 34, 110070000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-30 10:31:26', NULL, '2014-08-31 19:26:17', 0, 9, 12, 0, 0, -1, -1, 0, 0, 115117626, 0, 0, 'Amaterasu ', 0, 1, '0'),
(331896, 'Sausau', 3, 'elbouziouk2', 3120186907, 0, 502.277, 228.738, 126.976, 21, 110070000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-21 17:29:13', NULL, '2014-08-28 17:42:55', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(332345, 'Awesome', 66, 'helcapos2', 0, 0, 503.579, 400.425, 126.79, 90, 110070000, 0, 'FEMALE', 'ELYOS', 'TECHNIST', '2014-08-31 16:52:08', NULL, '2014-08-31 16:57:17', 0, 9, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(332921, 'Gluttony', 50, 'pintade', 3120186907, 0, 501.342, 376.466, 126.79, 50, 110070000, 0, 'MALE', 'ELYOS', 'GLADIATOR', '2014-08-28 23:23:48', NULL, '2014-08-28 23:26:55', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(334117, 'Kzx', 60, 'dotexe', 3121612919, 0, 1449.76, 1512.05, 573.072, 119, 110010000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-08-30 11:53:48', NULL, '2014-09-06 22:21:58', 0, 9, 12, 0, 0, -1, -1, 0, 0, 145738588, 0, 0, NULL, 0, 1, '0'),
(334304, 'Lumina', 61, 'reimn', 3120186907, 0, 410.326, 251.386, 93.1294, 1, 120080000, 0, 'FEMALE', 'ASMODIANS', 'SPIRIT_MASTER', '2014-08-30 12:08:01', NULL, '2014-08-30 18:50:07', 0, 9, 12, 0, 0, -1, -1, 0, 0, 39906113, 0, 0, NULL, 0, 1, '0'),
(334312, 'Barbiie', 56, 'joueurfri', 3120186907, 0, 577.48, 249.111, 127.008, 112, 110070000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-30 12:08:07', NULL, '2014-08-30 18:13:59', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 33169112, 0, 0, NULL, 0, 1, '0'),
(334590, 'Ryda', 49, 'ryda33', 3120186907, 0, 2624.6, 1661.98, 472.696, 81, 220040000, 0, 'FEMALE', 'ASMODIANS', 'CHANTER', '2014-08-26 08:28:15', NULL, '2014-08-28 12:36:27', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(335205, 'Misery', 3, 'elbouziouk2', 3704748142, 0, 485.356, 236.074, 126.976, 49, 110070000, 0, 'MALE', 'ASMODIANS', 'GLADIATOR', '2014-08-05 22:20:26', NULL, '2014-09-03 03:12:28', 0, 9, 12, 0, 0, 182, 239, 4000, 3, 146091854, 0, 0, NULL, 0, 1, '0'),
(335813, 'Seyji', 24, 'asphel33', 0, 0, 503.579, 400.425, 126.79, 90, 110070000, 0, 'FEMALE', 'ELYOS', 'PRIEST', '2014-08-11 22:14:44', NULL, '2014-08-11 22:19:28', 0, 9, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(335853, 'Amaterasu', 13, 'marcusovitch', 3157616966, 0, 2937.42, 1966.38, 382.565, 112, 210020000, 0, 'FEMALE', 'ELYOS', 'SPIRIT_MASTER', '2014-08-11 22:18:50', NULL, '2014-09-09 17:48:16', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(336343, 'Tokai', 62, 'ekaon', 3121014842, 0, 2921.3, 1978.59, 381.463, 85, 210020000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-30 12:26:41', NULL, '2014-09-08 17:49:54', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(338306, 'Qwk', 59, 'jokitowang', 3120186907, 0, 610.995, 348.297, 639.073, 108, 300240000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-30 13:40:59', NULL, '2014-08-31 18:49:22', 0, 9, 12, 0, 0, -1, -1, 0, 0, 94642761, 0, 0, 'Suck my Polearm ', 0, 1, '0'),
(339399, 'Cacamou', 27, 'fridoria', 3120186907, 0, 1322, 1511, 567.909, 71, 110010000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-08-12 08:19:59', NULL, '2014-08-25 12:00:49', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(339536, 'Miaou', 27, 'fridoria', 3120186907, 0, 502.374, 389.476, 126.79, 86, 110070000, 0, 'FEMALE', 'ELYOS', 'AETHERTECH', '2014-08-12 08:28:16', NULL, '2014-08-12 08:31:19', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(339909, 'Pidou', 5, 'ojiisan', 3349018048, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'MALE', 'ELYOS', 'GUNSLINGER', '2014-07-30 03:51:08', NULL, '2014-08-30 15:21:39', 0, 0, 0, 0, 0, -1, -1, 0, 2, 146140304, 0, 0, NULL, 0, 1, '0'),
(340480, 'Sokaiko', 17, 'sexyy', 3704748142, 0, 1537.16, 1507.31, 565.898, 11, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-04 23:04:29', NULL, '2014-08-27 18:28:01', 0, 9, 0, 0, 0, -1, 182, 4000, 2, 146140304, 0, 0, NULL, 0, 1, '0'),
(342579, 'Iki', 65, 'orikaeshi', 3120528517, 0, 2985.9, 1977.3, 386.237, 62, 210020000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-30 15:50:14', NULL, '2014-09-13 12:25:26', 0, 9, 12, 0, 0, -1, 274, 0, 0, 146140304, 0, 0, ' ', 0, 1, '0'),
(342770, 'Xelou', 67, 'thai125', 3120186907, 0, 572.608, 251.988, 127.008, 119, 110070000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-08-30 16:04:26', NULL, '2014-08-30 21:07:16', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 0, 0, 0, NULL, 0, 1, '0'),
(343600, 'Selena', 18, 'nana92', 3147756415, 0, 1441.68, 1293.26, 564.141, 76, 110010000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-08-12 10:22:52', NULL, '2014-08-15 20:29:08', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(344078, 'Kono', 24, 'asphel33', 3120186907, 0, 1493.75, 1511.92, 565.982, 1, 110010000, 0, 'MALE', 'ELYOS', 'ASSASSIN', '2014-08-10 23:02:30', NULL, '2014-08-12 16:53:22', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(344301, 'Floofy', 17, 'sexyy', 3144042119, 0, 1508.34, 1516.16, 565.88, 51, 110010000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-05 00:25:45', NULL, '2014-08-27 19:59:03', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(344652, 'Xiaoweixiao', 60, 'dotexe', 3120186907, 0, 577.849, 252.351, 127.008, 118, 110070000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-31 22:37:57', NULL, '2014-09-04 11:32:38', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(344887, 'Iko', 65, 'orikaeshi', 3121822180, 0, 2976.62, 1964.98, 385.853, 119, 210020000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-30 16:36:17', NULL, '2014-09-13 23:08:14', 0, 9, 12, 0, 0, -1, 274, 0, 0, 146140304, 0, 0, ' ', 0, 1, '0'),
(346132, 'Prout', 1, 'alri', 3120216907, 0, 1673.13, 1623.04, 109.093, 35, 210030000, 0, 'MALE', 'ELYOS', 'AETHERTECH', '2014-08-10 23:31:02', NULL, '2014-08-10 23:52:42', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(346922, 'Pocky', 63, 'pocky59', 0, 0, 402.743, 250.618, 93.1295, 0, 120080000, 0, 'FEMALE', 'ASMODIANS', 'TECHNIST', '2014-08-30 17:48:12', NULL, '2014-08-30 17:53:20', 0, 9, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 0, '0'),
(346967, 'Imdieu', 63, 'pocky59', 3120186907, 0, 401.907, 248.685, 93.1294, 15, 120080000, 0, 'FEMALE', 'ASMODIANS', 'SORCERER', '2014-08-30 17:52:21', NULL, '2014-08-30 19:16:53', 0, 9, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(347114, 'Kawaii', 17, 'sexyy', 3123927878, 0, 1527.37, 1511.13, 565.895, 43, 110010000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-08-05 02:00:15', NULL, '2014-08-27 19:36:03', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(350954, 'Alri', 22, 'alrinach', 3120547366, 0, 394.453, 250.671, 93.1294, 59, 120080000, 0, 'MALE', 'ASMODIANS', 'SONGWEAVER', '2014-08-08 15:07:30', NULL, '2014-08-08 19:00:30', 0, 9, 12, 0, 0, -1, -1, 136, 0, 0, 0, 0, NULL, 0, 1, '0'),
(351116, 'Carlabrownie', 63, 'pocky59', 3120186907, 0, 494.319, 249.983, 93.49, 118, 120080000, 0, 'FEMALE', 'ASMODIANS', 'GUNSLINGER', '2014-08-30 19:26:40', NULL, '2014-08-31 08:19:15', 0, 9, 12, 0, 0, -1, -1, 0, 0, 73131043, 0, 0, NULL, 0, 1, '0'),
(355354, 'Feylin', 67, 'thai125', 3120186907, 0, 575.876, 251.64, 127.008, 0, 110070000, 0, 'FEMALE', 'ELYOS', 'SPIRIT_MASTER', '2014-08-30 21:08:05', NULL, '2014-08-31 17:37:47', 0, 9, 12, 0, 0, -1, -1, 0, 0, 104600260, 0, 0, NULL, 0, 1, '0'),
(355716, 'Poweredbywafu', 57, 'onime00', 3120186907, 0, 506.077, 314.288, 126.935, 110, 110070000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-30 21:43:33', NULL, '2014-08-30 22:10:57', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 0, 0, 0, '', 0, 1, '0'),
(356047, 'Koryuuken', 5, 'ojiisan', 3120241507, 0, 502.717, 381.234, 126.79, 32, 110070000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-26 19:04:44', NULL, '2014-08-31 15:23:20', 0, 9, 12, 0, 0, -1, -1, 4000, 0, 146124704, 0, 0, NULL, 0, 1, '0'),
(356897, 'Tequila', 18, 'nana92', 3130050413, 0, 1538.17, 1514.26, 565.897, 36, 110010000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-08-06 16:36:40', NULL, '2014-08-24 16:38:48', 0, 9, 12, 0, 0, -1, 182, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(360983, 'Jesus', 13, 'marcusovitch', 3197538275, 0, 131.383, 2766.59, 293.445, 102, 600030000, 0, 'MALE', 'ELYOS', 'CLERIC', '2014-08-06 18:28:41', NULL, '2014-09-13 23:38:28', 0, 9, 12, 0, 0, 182, 182, 2093, 0, 126449628, 0, 0, NULL, 0, 1, '0'),
(362067, 'Onee', 72, 'mickael000', 3120186907, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'FEMALE', 'ELYOS', 'CLERIC', '2014-09-02 15:16:25', NULL, '2014-09-02 15:40:44', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(363385, 'Dadwawad', 41, 'xitanium', 3120186907, 0, 1525.45, 1519.26, 565.907, 103, 110010000, 0, 'MALE', 'ELYOS', 'AETHERTECH', '2014-08-25 14:22:48', NULL, '2014-08-25 16:30:34', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(363569, 'Testtwo', 5, 'ojiisan', 3120186907, 0, 1613.62, 1477.32, 551.699, 74, 110010000, 0, 'MALE', 'ELYOS', 'GUNSLINGER', '2014-07-30 15:05:14', NULL, '2014-07-30 16:46:56', 0, 0, 0, 0, 0, -1, -1, 2000, 0, 0, 0, 0, NULL, 0, 1, '0'),
(367846, 'Choupy', 17, 'sexyy', 3704748142, 0, 1524.67, 1511.33, 565.902, 112, 110010000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-05 12:03:51', NULL, '2014-08-27 20:17:28', 0, 9, 12, 0, 0, 182, 182, 0, 1, 146140304, 0, 0, NULL, 0, 1, '0'),
(368770, 'Chips', 12, 'elia3', 5, 0, 1195.71, 1041.54, 139.321, 64, 210010000, 0, 'FEMALE', 'ELYOS', 'MUSE', '2014-08-01 21:26:54', NULL, '2014-08-01 21:28:35', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(369008, 'Wafu', 30, 'onime', 3696738011, 0, 1442.37, 1284.37, 564.209, 49, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-13 21:20:50', NULL, '2014-08-29 17:43:43', 0, 9, 12, 0, 0, -1, 182, 4000, 0, 146140304, 0, 0, '', 0, 1, '0'),
(369727, 'Valeryan', 4, 'wolfuz', 3206916062, 0, 501.129, 397.692, 126.79, 16, 110070000, 0, 'FEMALE', 'ELYOS', 'CLERIC', '2014-07-30 18:16:16', NULL, '2014-10-09 20:42:59', 2, 0, 0, 0, 0, -1, -1, 0, 2, 146140304, 0, 0, NULL, 0, 1, '0'),
(370360, 'Qwh', 13, 'marcusovitch', 3380856127, 0, 2978.76, 1952.48, 386.72, 82, 210020000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-06 22:35:07', NULL, '2014-09-09 18:48:45', 0, 9, 12, 0, 0, 182, 182, 2000, 0, 146056426, 0, 0, 'Fisting INC', 0, 1, '0'),
(370975, 'Lolo', 4, 'wolfuz', 3120186907, 0, 1513.7, 1516.71, 565.93, 104, 110010000, 0, 'FEMALE', 'ELYOS', 'CLERIC', '2014-08-23 20:30:24', NULL, '2014-08-23 20:33:10', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(371073, 'Envy', 50, 'pintade', 3120186907, 0, 503.581, 422.453, 130.763, 92, 110070000, 0, 'MALE', 'ELYOS', 'SONGWEAVER', '2014-08-29 18:06:08', NULL, '2014-08-30 19:06:57', 0, 9, 12, 0, 0, -1, -1, 0, 0, 131670045, 0, 0, NULL, 0, 1, '0'),
(374908, 'Killua', 25, 'lalegion', 3120188056, 0, 498.271, 232.322, 126.976, 31, 110070000, 0, 'MALE', 'ELYOS', 'AETHERTECH', '2014-08-11 14:16:53', NULL, '2014-08-11 14:28:17', 0, 9, 12, 0, 0, -1, -1, 9, 0, 0, 0, 0, NULL, 0, 1, '0'),
(375053, 'Kiki', 25, 'lalegion', 3120186907, 0, 499.721, 391.836, 126.79, 95, 110070000, 0, 'MALE', 'ELYOS', 'GLADIATOR', '2014-08-11 14:28:42', NULL, '2014-08-11 14:33:31', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(379563, 'Dotexe', 60, 'dotexe', 3120186907, 0, 592.812, 244.817, 127.008, 45, 110070000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-31 09:36:18', NULL, '2014-09-04 11:39:00', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(382775, 'Sweety', 13, 'marcusovitch', 3322661718, 0, 2986.89, 2007.62, 385.861, 87, 210020000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-08-02 04:04:51', NULL, '2014-09-13 02:45:32', 0, 6, 0, 0, 0, -1, -1, 4000, 3, 146140304, 0, 0, NULL, 0, 1, '0'),
(383906, 'Tinji', 24, 'asphel33', 3121235678, 0, 1923.45, 1533.75, 590.011, 7, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-09 23:39:50', NULL, '2014-08-11 11:38:41', 0, 9, 12, 0, 0, 182, 182, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(394946, 'Tomatoes', 4, 'wolfuz', 3120186907, 0, 1581.96, 1382.77, 564.577, 72, 110010000, 0, 'FEMALE', 'ELYOS', 'SPIRIT_MASTER', '2014-08-02 10:20:46', NULL, '2014-08-02 17:59:35', 0, 0, 0, 0, 0, -1, -1, 0, 0, 43828559, 0, 0, NULL, 0, 1, '0'),
(399109, 'Mavada', 14, 'ruinart', 3120186907, 0, 1918.22, 1508.62, 590.011, 23, 110010000, 0, 'FEMALE', 'ELYOS', 'AETHERTECH', '2014-08-02 12:34:43', NULL, '2014-08-02 13:45:14', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(400424, 'Cristal', 15, 'deathofme', 3120186907, 0, 1586.26, 1390.41, 563.501, 0, 110010000, 0, 'FEMALE', 'ELYOS', 'SONGWEAVER', '2014-08-02 12:42:13', NULL, '2014-08-02 17:56:54', 0, 0, 0, 0, 0, -1, -1, 0, 0, 26398283, 0, 0, NULL, 0, 1, '0'),
(405231, 'ChunLee', 13, 'marcusovitch', 3191512716, 0, 2991.52, 1955.24, 387.892, 29, 210020000, 0, 'FEMALE', 'ELYOS', 'GUNSLINGER', '2014-08-14 15:53:29', NULL, '2014-09-13 01:45:27', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(409286, 'Testsoso', 4, 'wolfuz', 3120186907, 0, 1546.64, 1527.34, 565.933, 38, 110010000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-08-02 17:46:50', NULL, '2014-08-02 17:53:29', 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(439763, 'Qwr', 13, 'marcusovitch', 3180839530, 0, 2979.31, 1950.92, 386.788, 47, 210020000, 0, 'FEMALE', 'ELYOS', 'SONGWEAVER', '2014-09-04 05:15:55', NULL, '2014-09-13 02:58:28', 0, 9, 12, 0, 0, 182, 182, 4000, 0, 146140304, 0, 0, 'Fisting iNC naab', 0, 1, '0'),
(461081, 'Cqs', 30, 'onime', 3161115131, 0, 1471.72, 1346.55, 563.986, 40, 110010000, 0, 'FEMALE', 'ELYOS', 'ASSASSIN', '2014-08-15 20:29:47', NULL, '2014-08-29 17:52:28', 0, 9, 12, 0, 0, -1, 182, 4000, 0, 145742300, 0, 0, NULL, 0, 1, '0'),
(471818, 'Kuri', 58, 'raina', 3120446964, 0, 504.919, 393.573, 126.79, 100, 110070000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-09-04 21:42:36', NULL, '2014-10-10 21:11:31', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(491210, 'Tokei', 31, 'djsteven93', 3120186907, 0, 1505.17, 1511.75, 565.943, 54, 110010000, 0, 'FEMALE', 'ELYOS', 'GLADIATOR', '2014-08-16 12:50:18', NULL, '2014-08-21 10:37:46', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(509027, 'Kzq', 60, 'dotexe', 3120186907, 0, 504.505, 235.258, 126.976, 94, 110070000, 0, 'FEMALE', 'ELYOS', 'SONGWEAVER', '2014-09-05 16:15:03', NULL, '2014-09-05 16:39:07', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(554440, 'Kzix', 60, 'dotexe', 3120186907, 0, 502.258, 382.906, 126.79, 102, 110070000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-09-06 15:38:28', NULL, '2014-09-06 15:43:09', 0, 9, 12, 0, 0, -1, -1, 0, 0, 0, 0, 0, NULL, 0, 1, '0'),
(604479, 'Tunka', 62, 'ekaon', 3120186907, 0, 2953.68, 1961.1, 383.767, 116, 210020000, 0, 'FEMALE', 'ELYOS', 'RANGER', '2014-09-07 17:04:30', NULL, '2014-09-09 17:41:08', 0, 9, 12, 0, 0, 182, 182, 0, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(686319, 'Iku', 65, 'orikaeshi', 3120186907, 0, 1481.58, 220.561, 406.77, 39, 210020000, 0, 'FEMALE', 'ELYOS', 'CHANTER', '2014-09-09 11:37:33', NULL, '2014-09-13 22:36:15', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, ' ', 0, 1, '0'),
(689872, 'Ika', 65, 'orikaeshi', 3120186907, 0, 2973.96, 1968.89, 385.367, 4, 210020000, 0, 'FEMALE', 'ELYOS', 'SORCERER', '2014-09-09 12:30:28', NULL, '2014-09-13 22:50:31', 0, 9, 12, 0, 0, -1, -1, 0, 0, 146140304, 0, 0, 'Bouffe ma litérature', 0, 1, '0'),
(690691, 'Ike', 65, 'orikaeshi', 3123954440, 0, 2980.64, 1972.18, 385.83, 119, 210020000, 0, 'FEMALE', 'ELYOS', 'TEMPLAR', '2014-09-09 13:49:45', NULL, '2014-09-13 23:42:26', 0, 9, 12, 0, 0, -1, 274, 2093, 0, 145063866, 0, 0, ' ', 0, 1, '0'),
(694267, 'Transformers', 13, 'marcusovitch', 3121346647, 0, 3012.9, 2068.52, 387.524, 85, 210020000, 0, 'FEMALE', 'ELYOS', 'AETHERTECH', '2014-09-09 14:46:46', NULL, '2014-09-13 00:56:47', 0, 9, 12, 0, 0, 182, 182, 4000, 0, 146140304, 0, 0, NULL, 0, 1, '0'),
(700572, 'Hayamitsu', 73, 'hayamitsu', 3120430915, 0, 503.579, 400.425, 126.79, 0, 110070000, 0, 'MALE', 'ELYOS', 'ASSASSIN', '2014-09-09 18:09:53', NULL, '2014-09-09 19:22:40', 0, 9, 12, 0, 0, -1, 274, 0, 0, 0, 0, 0, NULL, 0, 1, '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
