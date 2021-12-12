-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: db
-- Čas generovania: Sun 12.Dec 2021, 20:44
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

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`) VALUES
(1, 'admin1', 'password1'),
(2, 'admin2', 'password2');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `downloads`
--

CREATE TABLE `downloads` (
  `id` int NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `purpose` varchar(100) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
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
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `code` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `email_verification`
--

INSERT INTO `email_verification` (`email`, `code`) VALUES
('domco@gmail.com', 12345);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sections`
--

CREATE TABLE `sections` (
  `section` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `content` varchar(5000) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `sections`
--

INSERT INTO `sections` (`section`, `content`) VALUES
('about', '<h1>This is about section</h1><p>Pudding marzipan icing jelly beans marshmallow. Sweet cake brownie pastry pie lollipop jelly. Tootsie roll shortbread sugar plum powder cookie. Sugar plum chocolate bar sweet lemon drops topping icing croissant sesame snaps tart. Gummi bears soufflé macaroon icing liquorice toffee icing cheesecake gummies. Cotton candy pudding dessert chocolate powder pie. Cookie cupcake gummi bears jujubes tootsie roll. Liquorice soufflé tiramisu gummies jujubes cake. Cake jelly-o toffee cookie jelly-o sesame snaps sweet lollipop. Cake candy canes marzipan wafer cotton candy liquorice chocolate bar lollipop. Jelly pudding cupcake oat cake cotton candy soufflé. Jelly beans dessert brownie ice cream pie halvah topping sugar plum caramels.</p> <p>Cake gummies gummi bears chupa chups jelly tiramisu pie. Marshmallow biscuit cheesecake marzipan dragée. Sweet roll cupcake gingerbread dessert fruitcake bear claw muffin. Topping wafer wafer gummi bears sesame snaps sesame snaps chocolate cake jelly beans sugar plum. Sweet gingerbread biscuit brownie tootsie roll. Croissant jelly-o caramels topping cupcake pastry tart carrot cake lemon drops. Candy liquorice dragée powder candy. Donut soufflé cake macaroon sweet roll topping candy. Dessert bonbon chupa chups candy dragée donut dragée marzipan ice cream. Marzipan wafer marzipan powder icing pudding halvah. Jujubes cheesecake pastry caramels jujubes marzipan. Candy canes jelly beans liquorice sweet roll oat cake cupcake lemon drops topping.</p> <p>Tootsie roll oat cake carrot cake tootsie roll cheesecake candy canes oat cake tart chocolate cake. Bear claw toffee croissant croissant caramels candy canes. Fruitcake dessert tootsie roll halvah chocolate caramels bonbon. Wafer marshmallow pie fruitcake caramels marshmallow cupcake.</p>'),
('home', '<h1>Semantic Segmentation is...</h1>\n<p>Tiramisu sesame snaps gummies sweet roll pudding sweet caramels toffee topping. Sugar plum donut tart sweet toffee shortbread sugar plum candy bonbon. Gingerbread carrot cake jelly powder pastry gummi bears. Marshmallow danish jelly apple pie chocolate bar. Sweet pastry brownie cotton candy lollipop pie soufflé. Gummi bears sugar plum marzipan wafer marzipan sweet jujubes pudding marzipan. Ice cream lemon drops biscuit croissant tootsie roll croissant jelly chupa chups soufflé. Chupa chups dessert cake ice cream sweet cupcake wafer marshmallow. Brownie pie pie sugar plum lemon drops. Carrot cake lollipop ice cream caramels tiramisu marshmallow chocolate cake.</p>\n<p>Wafer dragée cotton candy powder pastry oat cake bonbon. Tootsie roll donut powder marzipan muffin muffin sugar plum. Chocolate cake biscuit soufflé lollipop cotton candy donut cake chocolate bar. Sweet roll topping cheesecake shortbread bonbon toffee shortbread macaroon. Sugar plum cotton candy chocolate bar sesame snaps cheesecake. Cotton candy oat cake shortbread caramels tart gummies marshmallow danish. Macaroon jujubes pastry donut lemon drops biscuit. Ice cream halvah soufflé toffee jujubes. Jelly beans sweet sweet roll oat cake candy.</p>\n<p>Chocolate bar caramels cookie cookie macaroon. Dessert caramels croissant cake soufflé tart dessert danish jelly. Fruitcake chocolate tart gummies cheesecake marzipan bonbon cookie. Bear claw brownie macaroon icing cake gingerbread liquorice toffee. Bear claw icing tiramisu tiramisu marzipan. Candy jelly-o pastry gummi bears ice cream gingerbread gummies brownie.</p>\n\n'),
('projects', '<h1>This is projects section</h1>\n<p>Tiramisu pie lemon drops pastry toffee gummies candy canes biscuit biscuit. Dragée danish bonbon liquorice chocolate wafer wafer. Sesame snaps cake wafer gummies dessert biscuit caramels.</p>\n<li><a href=\"#\">Example Project</a></li>\n<li><a href=\"#\">Eye Project</a></li>\n<li><a href=\"#\">Another Project</a></li>\n\n');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section`);

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
