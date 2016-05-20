-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 13:00
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `final`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `head` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `tex` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `head`, `img`, `tex`) VALUES
(1, 'A little history', 'aboutus.jpg', 'SDU was established on December 12th 1996 by International Foundation Â«KATEVÂ». University derives its name from former president of Turkey, Suleyman Demirel. The President of Kazakhstan, Nursultan Nazarbayev, and the former president of Turkey, Suleyman Demirel participated opening ceremony.  Nursultan Nazarbayev suggested naming university by Suleyman Demirel.  Suleyman Demirel University is a fund-supported, legal entity, a non-profit organization established to provide multidisciplinary educational, social and cultural functions, the activity of which is regulated by the current legislation of the Republic of Kazakhstan. The main activity of the University is the implementation of educational curriculum of undergraduate, graduate education and supplementary education for adults. University programs are focused on the needs of modern society and adapted to rapidly changing social, political and economic situation in the country. The University created the conditions for the availability and quality of education that meets the requirements of international and national legislation, for continuous training of the teaching staff and better management of the University. The faculties of the University conduct research in various fields of knowledge. The University offers a wide range of additional educational services. It is focused on the development and implementation of educational, research and scientific programs in such a way to provide students with the necessary skills for professional growth and personal development. Respect for intellectual potential and dignity of the student as an individual, are of paramount importance.');

-- --------------------------------------------------------

--
-- Структура таблицы `comm`
--

CREATE TABLE `comm` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `commm` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comm`
--

INSERT INTO `comm` (`id`, `name`, `commm`) VALUES
(0, '123', 'Tima');

-- --------------------------------------------------------

--
-- Структура таблицы `commm`
--

CREATE TABLE `commm` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `commm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `commm`
--

INSERT INTO `commm` (`id`, `name`, `commm`) VALUES
(4, '123', 'Tima'),
(11, '123', 'Bauka postupai v SDU'),
(12, 'sdu', 'good'),
(13, '123', 'SDU norm univer'),
(14, '123', 'bzra net'),
(15, '123', 'gogo');

-- --------------------------------------------------------

--
-- Структура таблицы `eco`
--

CREATE TABLE `eco` (
  `id` int(11) NOT NULL,
  `prof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `eco`
--

INSERT INTO `eco` (`id`, `prof`) VALUES
(1, 'Economist and Finance'),
(2, 'Managment and Marketing');

-- --------------------------------------------------------

--
-- Структура таблицы `eng`
--

CREATE TABLE `eng` (
  `id` int(11) NOT NULL,
  `prof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `eng`
--

INSERT INTO `eng` (`id`, `prof`) VALUES
(1, 'IS'),
(2, 'CE'),
(3, 'Math'),
(4, 'Scinece Math');

-- --------------------------------------------------------

--
-- Структура таблицы `law`
--

CREATE TABLE `law` (
  `id` int(11) NOT NULL,
  `prof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `law`
--

INSERT INTO `law` (`id`, `prof`) VALUES
(1, 'Law'),
(2, 'Social science');

-- --------------------------------------------------------

--
-- Структура таблицы `phyl`
--

CREATE TABLE `phyl` (
  `id` int(11) NOT NULL,
  `prof` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `phyl`
--

INSERT INTO `phyl` (`id`, `prof`) VALUES
(1, 'TFL'),
(2, 'Jornalism');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `mail`, `password`, `subject`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin'),
(3, 'tim', 'tim', '123', '123', 'tim'),
(4, 'sdu', 'sdu', 'sdu', 'sdu', 'sdu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `commm`
--
ALTER TABLE `commm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `eco`
--
ALTER TABLE `eco`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `eng`
--
ALTER TABLE `eng`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `law`
--
ALTER TABLE `law`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phyl`
--
ALTER TABLE `phyl`
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
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `commm`
--
ALTER TABLE `commm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `eng`
--
ALTER TABLE `eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
