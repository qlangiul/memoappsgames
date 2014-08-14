-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Aug 2014 la 12:33
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mag_db`
--
CREATE DATABASE IF NOT EXISTS `mag_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mag_db`;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `mag_tbl_categories`
--

DROP TABLE IF EXISTS `mag_tbl_categories`;
CREATE TABLE IF NOT EXISTS `mag_tbl_categories` (
  `id_categ` int(2) NOT NULL,
  `categ_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `mag_tbl_categories`
--

INSERT INTO `mag_tbl_categories` (`id_categ`, `categ_name`) VALUES
(1, 'apps'),
(2, 'games');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `mag_tbl_items`
--

DROP TABLE IF EXISTS `mag_tbl_items`;
CREATE TABLE IF NOT EXISTS `mag_tbl_items` (
  `item_id` int(9) NOT NULL,
  `categ_id` int(1) NOT NULL,
  `nume_item` varchar(200) NOT NULL,
  `what_is_new` varchar(9000) NOT NULL,
  `descriere_item` text NOT NULL,
  `released` int(1) NOT NULL,
  `version` varchar(50) NOT NULL,
  `link` varchar(9999) NOT NULL,
  `link_with_money` varchar(9999) NOT NULL,
  `nr_of_pics` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `categ_id` (`categ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `mag_tbl_items`
--

INSERT INTO `mag_tbl_items` (`item_id`, `categ_id`, `nume_item`, `what_is_new`, `descriere_item`, `released`, `version`, `link`, `link_with_money`, `nr_of_pics`) VALUES
(1, 2, 'sudoku 999', '<ul><li>Added fix for crash regarding helper numbers.</li>\n<li>Removed one required permission.</li></ul>', 'Sudoku 999 is based on the classic Sudoku game.<br/>\nSudoku is a logic-based number placement puzzle.<br/>\nStarting with a partially completed 9x9 grid, the objective is to fill the grid so that each row, each column, and each of the 3x3 boxes (also called blocks) contains the digits 1 to 9 exactly once.<br/>\nSudoku 999 has 999 computer generated game boards divided equally in 3 categories.<br/>\nFeatures:\n<ul><li>3 difficulty levels.</li>\n<li>computer generated boards</li>\n<li>unique solutions for each board</li>\n<li>best completion time for each board.</li>\n<li>keeps game data for each started game even after closing the app</li></ul>', 1, '1.4', 'https://play.google.com/store/apps/details?id=com.memo.games.test.sudoku999', '', 1),
(2, 2, 'tic tac toe 3d', '<ul><li>fixed small bug.</li></ul>', 'This game is an adaption of the classic Tic Tac Toe game.<br/>\nTic-tac-toe is a game for two players, X and O, who take turns marking the spaces in a 3x3 grid.<br/>The player who succeeds in placing three respective marks in a horizontal, vertical, or diagonal row wins the game.<br/>\nThe game has single player and two player mode.<br/>\nIt keeps the score, and there''s also the option to clear scores for 2 player games, or for one player games based on difficulty.', 1, '1.2', 'https://play.google.com/store/apps/details?id=com.memo.games.test.tictactoememo', '', 1);

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `mag_tbl_items`
--
ALTER TABLE `mag_tbl_items`
  ADD CONSTRAINT `categ_id` FOREIGN KEY (`categ_id`) REFERENCES `mag_tbl_categories` (`id_categ`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
