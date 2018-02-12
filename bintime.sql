-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 12 2018 г., 13:08
-- Версия сервера: 5.7.21-0ubuntu0.16.04.1
-- Версия PHP: 7.1.9-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bintime`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post` char(10) DEFAULT NULL,
  `country_code` char(2) NOT NULL,
  `city` char(30) NOT NULL,
  `street` char(50) NOT NULL,
  `building_number` char(5) NOT NULL,
  `flat_number` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `post`, `country_code`, `city`, `street`, `building_number`, `flat_number`) VALUES
(1, 4, '04563', 'UA', 'Kiev', 'Test', '27', NULL),
(2, 5, '04563', 'UA', 'Kiev', 'Test', '27', NULL),
(3, 5, '04562', 'UA', 'Kiev', 'Test', '29', 12),
(5, 5, '04562', 'UA', 'Kiev', 'Test', '28', 12),
(7, 5, '04564', 'UA', 'Kiev', 'Test', '15', 78),
(8, 5, '04564', 'UA', 'Kiev', 'Test', '12', 78),
(9, 6, '04569', 'UA', 'Kiev', 'Test', '11', 101),
(12, 6, '06587', 'UA', 'Zp', 'Test', '78', 87),
(13, 8, '06543', 'US', 'New York', 'Test', '28', 555),
(14, 9, '06007', 'UA', 'Zp', 'Wallstreet', '28', NULL),
(15, 9, '04569', 'US', 'New York', 'Wallstreet', '90', 91),
(16, 5, '086542', 'UK', 'London', 'London street', '12', 10),
(17, 10, '938450', 'KZ', 'Almati', 'test', '5', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` char(30) DEFAULT NULL,
  `password` char(70) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `surname` char(40) DEFAULT NULL,
  `sex` enum('m','f','n') DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `sex`, `date`, `email`) VALUES
(4, 'test3', '$2y$10$bkFIa30m8H48CI9A0BAUQuJ7M3Jl0O6m4O20h5skGcznS65pVL2vq', 'test', 'test', 'm', '2018-02-11 14:42:54', 'test@gmail.com3'),
(5, 'More than 5 addreses', '$2y$10$GKaxF5TfHUDMn9SV1RzjluCCjTZPydxLmxNLmXFfU3o4zDHuZLN5W', 'Test4', 'Test', 'm', '2018-02-11 17:48:49', 'test@gmail.com4'),
(6, 'New1488', '$2y$10$shLUj1U6cOMyXH8iM7AOXuoyJivLUbcCVLKXe3UppqSYa9mre5op2', 'New', 'New', 'm', '2018-02-11 19:15:12', 'new@gmail.com'),
(8, 'testTest', '$2y$10$oT39uN4BACkKk9cOkoIEbezhPJ0SpFBzAeMwlIqeTl..xefe7rsWa', 'Alfred', 'Black', 'm', '2018-02-11 20:50:04', 'alfred@gmail.com'),
(9, 'bobby', '$2y$10$ft16xTtSJkg24QpI/xk.YOUv06UAC.7MI38ijAFK18KfkYucNPhc6', 'Bob', 'Bobs second name', 'm', '2018-02-12 09:00:18', 'bob@gmail.com'),
(10, 'oneMoreUser', '$2y$10$Fm0CS6GzhSBM3q1YNC5ZkOs0S069Meb9JZ9JhS7AJ4S6BfRK69bTO', 'Name', 'Surname', 'f', '2018-02-12 09:05:41', 'test14@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
