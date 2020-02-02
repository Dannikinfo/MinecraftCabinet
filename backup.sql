-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 01 2019 г., 23:53
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `mccab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `iConomy`
--

CREATE TABLE `iConomy` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `realBalance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `iConomy`
--

INSERT INTO `iConomy` (`id`, `username`, `balance`, `realBalance`) VALUES
(1, 'dannikinfo', 13400, 100);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `segment` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Permissions_inheritance`
--

CREATE TABLE `Permissions_inheritance` (
  `id` int(11) NOT NULL,
  `child_key` varchar(255) NOT NULL,
  `child_value` varchar(255) NOT NULL,
  `parent_key` varchar(255) NOT NULL,
  `parent_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `WE_accounts`
--

CREATE TABLE `WE_accounts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `WE_accounts`
--

INSERT INTO `WE_accounts` (`id`, `name`, `password`, `email`, `status`) VALUES
(1, 'dannikinfo', '82b9e1fe6060c238af76107b71bd52ff568b41ed', 'danil74808@gmail.com', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `iConomy`
--
ALTER TABLE `iConomy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD UNIQUE KEY `perm_segment_k` (`segment`,`key`);

--
-- Индексы таблицы `Permissions_inheritance`
--
ALTER TABLE `Permissions_inheritance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `both_key` (`child_key`,`child_value`,`parent_key`,`parent_value`),
  ADD KEY `child_key` (`child_key`,`child_value`),
  ADD KEY `parent_key` (`parent_key`,`parent_value`);

--
-- Индексы таблицы `WE_accounts`
--
ALTER TABLE `WE_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `iConomy`
--
ALTER TABLE `iConomy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Permissions_inheritance`
--
ALTER TABLE `Permissions_inheritance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `WE_accounts`
--
ALTER TABLE `WE_accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
