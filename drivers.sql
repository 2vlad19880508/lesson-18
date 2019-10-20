-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2019 г., 19:49
-- Версия сервера: 5.6.43-log
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `drivers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `Size` int(11) NOT NULL,
  `Number` text NOT NULL,
  `Fuel` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buses`
--

INSERT INTO `buses` (`id`, `Model`, `Size`, `Number`, `Fuel`, `Price`) VALUES
(1, 'Model 11', 20, 'АА 2110 АА', 10, 100),
(2, 'Model 2', 30, '1245', 6, 7),
(3, 'Model 3', 8, '1278', 6, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `Nmae` varchar(128) NOT NULL,
  `Date` date NOT NULL,
  `Experience` int(11) NOT NULL,
  `Licence` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `id_buses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drivers`
--

INSERT INTO `drivers` (`id`, `Nmae`, `Date`, `Experience`, `Licence`, `Price`, `id_buses`) VALUES
(1, 'Коля', '2000-09-09', 5, 1235, 80, 1),
(2, 'Вася', '1999-10-09', 7, 121, 6, 3),
(3, 'Миша', '2000-09-19', 5, 1567, 4, 2),
(10, 'Саша', '2000-09-09', 23, 12, 1, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buses` (`id_buses`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`id_buses`) REFERENCES `buses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
