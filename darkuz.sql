-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 15 2020 г., 22:21
-- Версия сервера: 10.0.38-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `darkuz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `title_uz` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_uz` text COLLATE utf8_unicode_ci NOT NULL,
  `about_en` text COLLATE utf8_unicode_ci NOT NULL,
  `about_ru` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title_uz`, `title_en`, `title_ru`, `about_uz`, `about_en`, `about_ru`, `image`, `status`, `create_date`, `view_count`) VALUES
(1, 'Telegram messengerga link junatganda data qushish', 'Add data when sending a link to Telegram messenger', 'Добавить данные при отправке ссылки на мессенджер Telegram', 'og: audio - URL manzillar zvukovogo fayl, kotoryh soputstvuet etomu ob''ektu.\r\nog: tavsif - Odno-dva predlojeniya opisaniya vashego ob''ekta.\r\nog: aniqlovchi - Slovo, kotoroe poyavlyaetsya pered nazvaniem etogo ob''ekta v predlojenii. Tip enum (a, an, the, "", avtomatik). Esli vybrano avtoulov, potrebitel dannyx doljen vybirat mejdu "a" ili "an". Po umolchaniyu - "" (pusto).\r\nog: mahalliy - Teg lokatsii. Format tili_TERRITORY. Po umolchaniyu en_US.\r\nog: mahalliy: alternativ - Tip qator drugix lokaley na etoy stranitse.\r\nog: site_name - Esli vash ob''ektni yavlyaetsya chastyu bolshogo veb-sayta, nazvanie, doljno otobrajatsya na vsex stranitsax sayta. Naprimer, "IMDb".\r\nog: video - URL-manzil video-fayla, kotoryya soputstvuet etomu ob''ektu.', 'og: audio - The URL of the audio file that accompanies this object.\r\nog: description - One or two sentences describing your object.\r\nog: determiner - The word that appears before the name of this object in the sentence. Type enum (a, an, the, "", auto). If auto is selected, the data consumer must choose between "a" or "an". The default is "" (empty).\r\nog: locale - Location tag. The format is language_TERRITORY. The default is en_US.\r\nog: locale: alternate - The array type of the other locales on this page.\r\nog: site_name - If your site is part of a large website, the name should be displayed on all pages of the site. For example, "IMDb".\r\nog: video - The URL of the video file that accompanies this object.', 'og: audio - URL-адрес звукового файла, который сопутствует этому объекту.\r\nog: description - Одно-два предложения описания вашего объекта.\r\nog: определитель - Слово, которое появляется перед названием этого объекта в предложении. Тип enum (a, an, the, "", auto). Если выбрано авто, потребительские данные должны выбирать между "a" или "an". По умолчанию - "" (пусто).\r\nog: locale - Тег локации. Формат language_TERRITORY. По умолчанию en_US.\r\nog: locale: alternate - Тип массив других локалей на этой странице.\r\nog: имя_сайта - если ваш объект является частью большого веб-сайта, название должно отображаться на всех страницах сайта. Например, "IMDb".\r\nog: video - URL-адрес видео-файла, который сопутствует этому объекту.', '1593524607783.png', 1, '2020-06-29 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1592964772),
('m130524_201442_init', 1592964778),
('m190124_110200_add_verification_token_column_to_user_table', 1592964779);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'i7tw8WkCxmH6ALz8vTR0sAimSjjRAVjt', '$2y$13$xPTK6MhHLqI/5fWqtBr9iugWhWSVvCgBSpDBI6TKl8hVk4cFwQwvC', NULL, 'elmurodovjavogir8@gmail.com', 10, 1592964829, 1592964829, 'pWASOHuJnw6uTYbJ49A3Qw-cYYlz5_mc_1592964829'),
(2, 'admin1', '7RUYRY3IvzUYuWjJHxGA2GdwA5dcntKk', '$2y$13$0kj501oGueD1Zp/A.H0XXeiT5s0GJUAo2zGjpMteo6krWC8xRKXva', NULL, 'admin@mail.ru1', 10, 1592966327, 1592966327, 'wy2ifRtyiPqCbwHamvo_mq5VZQrBEQ0W_1592966327'),
(3, 'admin12', '-iEATVXnztJ_Q6gxQ_2Ii0CmLoU366II', '$2y$13$CQewG9tyCizmO/gA8EXN3uGwKWGQWK4728bv4.jHzv5bMJjlLIHY6', NULL, 'admin@mail.ru', 10, 1592966629, 1592966629, 'dME0LgwTBMiIfNZBfBHSpbGxKoFEF_Yr_1592966629');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
