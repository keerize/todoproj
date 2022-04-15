-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 15 Kwi 2022, 11:31
-- Wersja serwera: 8.0.28-0ubuntu0.20.04.3
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `todolist`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `todo`
--

CREATE TABLE `todo` (
  `id` int NOT NULL,
  `title` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(100) NOT NULL,
  `ischeck` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `todo`
--

INSERT INTO `todo` (`id`, `title`, `description`, `ischeck`, `date`) VALUES
(1, 'napisz todo list w php', 'wlasnie to robisz', 1, '2022-04-13'),
(2, 'lekcja japonskiego na busuu', 'obowiazeki to obowiazki', 0, '2022-04-13'),
(3, 'posprzataj', 'no posprzataj w miare', 1, '2022-04-13'),
(4, 'wyciagnij naczynia ze zmywarki', 'wyciagnij to', 1, '2022-04-13'),
(6, 'poćwicz', 'klata barki triceps', 1, '2022-04-13'),
(8, 'stwórz szukaj po dacie w php', 'możesz też dodać stałki po bokach by zmieniać dni bez wpisywania daty', 1, '2022-04-15'),
(10, 'tytuł opis', 'stwórz wyświetlanie opisu po tyt', 1, '2022-04-15'),
(12, 'poćwicz', 'niby masz te odciski,\r\nale obowiązek to obowiązek,\r\ndziś robisz biceps, plecy i kaptury', 0, '2022-04-15'),
(13, 'japoński na busuuu', ' kurwaaaa, weź to zrób nie bądź pizda', 0, '2022-04-15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
