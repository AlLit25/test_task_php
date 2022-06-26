-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2022 г., 13:52
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_webbylab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_of_issue` int NOT NULL,
  `format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cast_list` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `year_of_issue`, `format`, `cast_list`) VALUES
(63, ' Blazing Saddles', 1974, ' VHS', ' Mel Brooks, Clevon Little, Harvey Korman, Gene Wilder, Slim Pickens, Madeline Kahn'),
(64, ' Casablanca', 1942, ' DVD', ' Humphrey Bogart, Ingrid Bergman, Claude Rains, Peter Lorre'),
(65, ' Charade', 1953, ' DVD', ' Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(66, ' Cool Hand Luke', 1967, ' VHS', ' Paul Newman, George Kennedy, Strother Martin'),
(67, ' Butch Cassidy and the Sundance Kid', 1969, ' VHS', ' Paul Newman, Robert Redford, Katherine Ross'),
(68, ' The Sting', 1973, ' DVD', ' Robert Redford, Paul Newman, Robert Shaw, Charles Durning'),
(69, ' The Muppet Movie', 1979, ' DVD', ' Jim Henson, Frank Oz, Dave Geolz, Mel Brooks, James Coburn, Charles Durning, Austin Pendleton'),
(70, ' Get Shorty ', 1995, ' DVD', ' John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(71, ' My Cousin Vinny', 1992, ' DVD', ' Joe Pesci, Marrisa Tomei, Fred Gwynne, Austin Pendleton, Lane Smith, Ralph Macchio'),
(72, ' Gladiator', 2000, ' Blu-Ray', ' Russell Crowe, Joaquin Phoenix, Connie Nielson'),
(73, ' Star Wars', 1977, ' Blu-Ray', ' Harrison Ford, Mark Hamill, Carrie Fisher, Alec Guinness, James Earl Jones'),
(74, ' Raiders of the Lost Ark', 1981, ' DVD', ' Harrison Ford, Karen Allen'),
(75, ' Serenity', 2005, ' Blu-Ray', ' Nathan Fillion, Alan Tudyk, Adam Baldwin, Ron Glass, Jewel Staite, Gina Torres, Morena Baccarin, Sean Maher, Summer Glau, Chiwetel Ejiofor'),
(76, ' Hooisers', 1986, ' VHS', ' Gene Hackman, Barbara Hershey, Dennis Hopper'),
(77, ' WarGames', 1983, ' VHS', ' Matthew Broderick, Ally Sheedy, Dabney Coleman, John Wood, Barry Corbin'),
(78, ' Spaceballs', 1987, ' DVD', ' Bill Pullman, John Candy, Mel Brooks, Rick Moranis, Daphne Zuniga, Joan Rivers'),
(79, ' Young Frankenstein', 1974, ' VHS', ' Gene Wilder, Kenneth Mars, Terri Garr, Gene Hackman, Peter Boyle'),
(80, ' Real Genius', 1985, ' VHS', ' Val Kilmer, Gabe Jarret, Michelle Meyrink, William Atherton'),
(81, ' Top Gun', 1986, ' DVD', ' Tom Cruise, Kelly McGillis, Val Kilmer, Anthony Edwards, Tom Skerritt'),
(82, ' MASH', 1970, ' DVD', ' Donald Sutherland, Elliot Gould, Tom Skerritt, Sally Kellerman, Robert Duvall'),
(83, ' The Russians Are Coming, The Russians Are Coming', 1966, ' VHS', ' Carl Reiner, Eva Marie Saint, Alan Arkin, Brian Keith'),
(85, ' A Space Odyssey', 1968, ' DVD', ' Keir Dullea, Gary Lockwood, William Sylvester, Douglas Rain'),
(86, ' Harvey', 1950, ' DVD', ' James Stewart, Josephine Hull, Peggy Dow, Charles Drake'),
(87, ' Knocked Up', 2007, ' Blu-Ray', ' Seth Rogen, Katherine Heigl, Paul Rudd, Leslie Mann'),
(89, 'A TEST', 2022, 'mp4', 'Lytvin A');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'admin', '$2y$10$eO0QQe0Dve46VzQ.RpPrF.szcvXscjJwUXfrYUI.hkMaTP9MUbRle');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
