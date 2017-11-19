-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 13 2017 г., 21:47
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projectimg`
--

CREATE TABLE `projectimg` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projectimg`
--

INSERT INTO `projectimg` (`id`, `project_id`, `image`) VALUES
(1, 1, 'images\\terminal\\terminal1.png'),
(2, 1, 'images\\terminal\\terminal2.png'),
(3, 1, 'images\\terminal\\terminal3.png'),
(4, 1, 'images\\terminal\\terminal4.png'),
(5, 1, 'images\\terminal\\terminal5.png'),
(6, 2, 'images\\donmetis\\DonMetis1.jpg'),
(7, 2, 'images\\donmetis\\DonMetis2.jpg'),
(8, 2, 'images\\donmetis\\DonMetis3.jpg'),
(9, 2, 'images\\donmetis\\DonMetis4.jpg'),
(10, 3, 'images\\ll\\ll1.png'),
(11, 3, 'images\\ll\\ll2.jpg'),
(12, 3, 'images\\ll\\ll3.jpg'),
(13, 3, 'images\\ll\\ll4.jpg'),
(14, 3, 'images\\ll\\ll5.jpg'),
(15, 3, 'images\\ll\\ll6.jpg'),
(16, 3, 'images\\ll\\ll7.jpg'),
(17, 3, 'images\\ll\\ll8.jpg'),
(18, 4, 'images\\agro\\agro1.jpg'),
(19, 4, 'images\\agro\\agro2.jpg'),
(20, 4, 'images\\agro\\agro3.jpg'),
(21, 4, 'images\\agro\\agro4.jpg'),
(22, 5, 'images\\aganrechtrans\\agan.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `short_description` text NOT NULL,
  `full_description` text NOT NULL,
  `link` tinytext,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `short_description`, `full_description`, `link`, `category`) VALUES
(1, 'Терминал пополнения счета', 'Программа на Delphi7 для купюроприемника CashCode.', 'Программа на Delphi7 для купюроприемника CashCode.', '', 1),
(2, 'ДонМетизГрупп', '', '', NULL, 0),
(3, 'Лендлорд', '', '', NULL, 0),
(4, 'Агродонбасс', '', '', NULL, 0),
(5, 'Аганречтранс', '', '', NULL, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projectimg`
--
ALTER TABLE `projectimg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projectimg`
--
ALTER TABLE `projectimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `projectimg`
--
ALTER TABLE `projectimg`
  ADD CONSTRAINT `projectimg_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
