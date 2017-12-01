-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 01 2017 г., 20:34
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myBD`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Admin', 'm@m', '$2y$10$OwqiaBXZbjBdxtLwPduqHuekqZcG6zx.VT3OJGlH6n/qK5iGyuGji'),
(2, 'Кексик', 'www@w', '$2y$10$0kk8hBubLVUwtHsjqKNDAOmDNXTdzBtN7.KmbWfkP0pKJicPr0G9K'),
(3, 'вапвапвапвап', 'qweqweq@hgfd', '$2y$10$nHP/zETHOlUtvfzm18uNCuln2dy11ILrwEpvCnVzHAcekdLwEkCkW'),
(4, 'Admin123', 'w@w', '$2y$10$dCUCtnVeXcfmjJgb0j0H..6mOweeVURSxFKtA9FNSYGeL0HXcN8Pm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
