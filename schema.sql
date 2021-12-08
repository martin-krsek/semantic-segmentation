-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: db
-- Čas generovania: Sun 21.Nov 2021, 10:54
-- Verzia serveru: 8.0.27
-- Verzia PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `semantic_segmentation`
--

CREATE DATABASE semantic_segmentation;


use semantic_segmentation;
-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `login` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`) VALUES
(1, 'admin1', 'password1'),
(2, 'admin2', 'password2');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `articles`
--

CREATE TABLE `articles` (
  `title` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `article` varchar(150) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `articles`
--

INSERT INTO `articles` (`title`, `article`) VALUES
('CLANOK 1', 'LOREM IMPSUM');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `downloads`
--

CREATE TABLE `downloads` (
  `id` int NOT NULL,
  `email` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `purpose` varchar(100) COLLATE utf8_slovak_ci NOT NULL,
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `downloads`
--

INSERT INTO `downloads` (`id`, `email`, `purpose`, `timestamp`) VALUES
(1, 'domco@gmail.com', 'Lebo som to potreboval stiahnut.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `email_verification`
--

CREATE TABLE `email_verification` (
  `email` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `code` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `email_verification`
--

INSERT INTO `email_verification` (`email`, `code`) VALUES
('domco@gmail.com', 12345);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`title`);

--
-- Indexy pre tabuľku `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
