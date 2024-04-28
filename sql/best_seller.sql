-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3300
-- Время создания: Апр 28 2024 г., 11:02
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `card-shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `best_seller`
--

CREATE TABLE `best_seller` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `path_img` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `best_seller`
--

INSERT INTO `best_seller` (`id`, `name`, `price`, `path_img`) VALUES
(1, 'MiniBeats.', 200, './img/bestseller/01.jpg'),
(2, 'EarBudsPro', 450, './img/bestseller/02.jpg'),
(3, 'NoiseGard', 170, './img/bestseller/03.jpg'),
(4, 'PureSound7', 244, './img/bestseller/04.jpg'),
(5, 'EarBudsPro.', 100, './img/bestseller/05.jpg'),
(6, 'AudioFocusXL', 530, './img/bestseller/06.jpg'),
(7, 'SoundBossPro', 290, './img/bestseller/07.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `best_seller`
--
ALTER TABLE `best_seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `best_seller`
--
ALTER TABLE `best_seller`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
