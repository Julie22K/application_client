-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Січ 12 2025 р., 13:00
-- Версія сервера: 10.4.32-MariaDB
-- Версія PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `applications`
--

-- --------------------------------------------------------

--
-- Структура таблиці `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `date_of_decision` date DEFAULT NULL,
  `date_of_creation` date DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `status` enum('Нова','В роботі','Вирішена') DEFAULT NULL,
  `category` enum('Відключення','Перевірка/здешевлення','Технічне питання','Інше') DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп даних таблиці `applications`
--

INSERT INTO `applications` (`id`, `date_of_decision`, `date_of_creation`, `agent_id`, `status`, `category`, `description`) VALUES
(1, '2025-01-02', '2025-01-01', 1, 'Нова', 'Відключення', ''),
(2, '2024-12-29', '2025-01-01', 1, 'В роботі', 'Відключення', ''),
(3, '2024-12-30', '2025-01-02', 2, 'В роботі', 'Відключення', ''),
(4, '2025-01-01', '2025-01-03', 4, 'В роботі', 'Відключення', ''),
(5, '2025-01-05', '2025-01-04', 1, 'Вирішена', 'Відключення', ''),
(6, '2025-01-06', '2025-01-05', 2, 'Вирішена', 'Перевірка/здешевлення', ''),
(7, '2025-01-07', '2025-01-06', 2, 'Вирішена', 'Технічне питання', ''),
(8, '2025-01-08', '2025-01-07', 1, 'Вирішена', 'Відключення', ''),
(9, '2025-01-09', '2025-01-08', 1, 'Вирішена', 'Відключення', ''),
(10, '2025-01-10', '2025-01-09', 2, 'Вирішена', 'Перевірка/здешевлення', ''),
(11, '2025-01-11', '2025-01-10', 2, 'Вирішена', 'Технічне питання', ''),
(12, '2025-01-12', '2025-01-11', 1, 'Вирішена', 'Відключення', ''),
(13, '2025-01-12', '2025-01-10', 1, 'Нова', 'Відключення', 'Lorem ipsum dolor sit amet'),
(14, '2025-01-11', '2025-01-09', 2, 'В роботі', 'Перевірка/здешевлення', 'text text text'),
(15, '2025-01-13', '2025-01-10', 3, 'Вирішена', 'Технічне питання', 'Sample description here'),
(16, '2025-01-12', '2025-01-11', 4, 'Нова', 'Інше', 'Lorem ipsum example'),
(17, '2025-01-14', '2025-01-10', 5, 'В роботі', 'Відключення', 'Test application description');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
