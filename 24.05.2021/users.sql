-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2021 г., 16:50
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `name` varchar(130) NOT NULL,
  `surname` varchar(130) NOT NULL,
  `age` int NOT NULL,
  `login` varchar(130) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `age`, `login`, `password`) VALUES
(1, 'ad', 'asd', 32, 'ad', 'asdfasfas'),
(3, 'Дмитрий', 'Греков', 12, 'DmitriiGrekov', 'd1050e3f737d8634c692170a95706c1a'),
(11, 'Егор', 'Петров', 32, 'admin', 'd1050e3f737d8634c692170a95706c1a'),
(12, 'Слава', 'Марлоу', 32, 'slava', 'd1050e3f737d8634c692170a95706c1a'),
(13, 'Дмитрий', 'asdf', 12, 'qwerty', '0e86320033401fc6a8fbecf93c38ae65'),
(17, 'Слава', 'Петров', 12, 'DmitriiGrekov2', 'd1050e3f737d8634c692170a95706c1a'),
(28, 'Дмитрий', 'Греков', 8, 'kazak', 'd1050e3f737d8634c692170a95706c1a'),
(30, 'Егор', 'Греков', 12, 'kazak3', '0e86320033401fc6a8fbecf93c38ae65'),
(31, 'Дмитрий', 'Греков', 12, 'kazak2', 'd1050e3f737d8634c692170a95706c1a');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
