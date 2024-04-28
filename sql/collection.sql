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
-- Структура таблицы `collection`
--

CREATE TABLE `collection` (
  `id` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `path_img` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `collection`
--

INSERT INTO `collection` (`id`, `name`, `price`, `path_img`) VALUES
(1, 'HeadBond', 299, './img/arrivals/01.jpg'),
(2, 'Beats Studio Pro', 349, './img/arrivals/02.jpg'),
(3, 'Sony-Wireless Noise Canceling', 250, './img/arrivals/03.jpg'),
(4, 'Skullcandy - Rail True ', 350, './img/arrivals/04.jpg'),
(5, 'Skullcandy - Crusher', 299, './img/arrivals/04.jpg'),
(6, 'Skullcandy - Rail True ', 150, './img/arrivals/05.jpg'),
(7, 'Dimon Pro 2500', 1000000, './img/arrivals/01.jpg'),
(8, 'PlayHolder', 249, './img/arrivals/01.jpg'),
(9, 'HulyHpoi', 100, './img/arrivals/01.jpg'),
(10, 'DkapRio', 149, './img/arrivals/01.jpg'),
(11, 'DellSellption', 349, './img/arrivals/01.jpg'),
(12, 'Nystyaing', 260, './img/arrivals/01.jpg'),
(13, 'HelloKitty', 190, './img/arrivals/01.jpg'),
(4, 'Dimon 2500', 130, './img/arrivals/01.jpg'),
(15, 'SoundTopBy', 300, './img/arrivals/01.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
