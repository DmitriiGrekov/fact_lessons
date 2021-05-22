-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2021 г., 16:51
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
-- База данных: `peoples`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hobbies`
--

CREATE TABLE `hobbies` (
  `id_hobbies` int UNSIGNED NOT NULL,
  `name` varchar(130) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `hobbies`
--

INSERT INTO `hobbies` (`id_hobbies`, `name`, `description`) VALUES
(1, 'Плавание', 'Люблю плавать'),
(2, 'Шахматы', 'Игра в шахматы'),
(3, 'Компьютерные игры', 'Компьютерные игры');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id_person` int UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(130) NOT NULL,
  `age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id_person`, `name`, `surname`, `age`) VALUES
(1, 'Дмитрий', 'Греков', 18),
(2, 'Егор', 'Петров', 12),
(3, 'Дмитрий', 'Греков', 18),
(32, 'Максим', 'Тереньтьев', 32);

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies`
--

CREATE TABLE `people_hobbies` (
  `id_record` int UNSIGNED NOT NULL,
  `id_people` int UNSIGNED DEFAULT NULL,
  `id_hobbies` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `people_hobbies`
--

INSERT INTO `people_hobbies` (`id_record`, `id_people`, `id_hobbies`) VALUES
(1, 1, 1),
(2, 2, 2),
(11, 32, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id_hobbies`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id_person`);

--
-- Индексы таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD PRIMARY KEY (`id_record`),
  ADD KEY `id_people` (`id_people`),
  ADD KEY `id_hobbies` (`id_hobbies`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id_hobbies` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id_person` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  MODIFY `id_record` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD CONSTRAINT `people_hobbies_ibfk_1` FOREIGN KEY (`id_people`) REFERENCES `people` (`id_person`),
  ADD CONSTRAINT `people_hobbies_ibfk_2` FOREIGN KEY (`id_hobbies`) REFERENCES `hobbies` (`id_hobbies`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
