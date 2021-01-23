-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2021, 19:37
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `security`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `content`, `date`) VALUES
(2, '123', '2021-01-22'),
(3, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora at veniam explicabo magnam laboriosam officia eaque, eveniet adipisci eos voluptas illum perferendis asperiores expedita quas eius dolores cupiditate incidunt culpa!', '2021-01-22'),
(26, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vel quibusdam eos laudantium laboriosam blanditiis quos vero odio aperiam amet minus, earum recusandae, ut provident corrupti, quod nesciunt totam sit.', '2021-01-22'),
(41, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vel quibusdam eos laudantium laboriosam blanditiis quos vero odio aperiam amet minus, earum recusandae, ut provident corrupti, quod nesciunt totam sit.', '2021-01-23'),
(96, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vel quibusdam eos laudantium laboriosam blanditiis quos vero odio aperiam amet minus, earum recusandae, ut provident corrupti, quod nesciunt totam sit.', '2021-01-23');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
