-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Kwi 2022, 18:53
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `f1blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `2022`
--

CREATE TABLE `2022` (
  `idWyscigu` int(11) NOT NULL,
  `grandPrix` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `zwyciezca` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `team` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `2022`
--

INSERT INTO `2022` (`idWyscigu`, `grandPrix`, `zwyciezca`, `team`) VALUES
(0, 'Bahrajn', 'Charles Leclerc', 'Ferrari'),
(1, 'Arabia Saudyjska', 'Max Verstappen', 'Red Bull'),
(2, 'Australia', 'Charles Leclerc', 'Ferrari');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `tekst` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `blog`
--

INSERT INTO `blog` (`idBlog`, `tekst`) VALUES
(1, '2022! Zaczynamy'),
(2, 'Charles Leclerc wygrywa Grand Prix Bahrajnu! To może być sezon Ferrari!\r\nOba Redbule nie dojechały do mety. To może świadczyć o sporych problemach na poczatku sezonu. Mercedes? Daleko w tyle. 7krotnego mistrza świata Lewisa Hamiltona może czekać ciężki sezon...'),
(3, 'Max Vestappen przed Charles\'em Leclerc\'iem w Grand Prix Arabii Saudyjskiej. Max potwierdza, że Redbull ma dobry bolid.'),
(4, 'Forza Ferrari! Charles Leclerc z drugim zwycięstwem w tym sezonie. Tym razem w Grand Prix Australii. Max Verstappen nie dojeżdża do mety... za to Lewis Hamilton na 3 stopniu podium'),
(5, 'Po trzech wyścigach klasyfikacja wygląda następująco 1. Charles Leclerc - 71pkt, 2. George Russell - 37pkt, 3. Carlos Sainz - 33pkt.'),
(11, 'Carlos Sainz przedłuża kontrakt z Ferrari o 2 lata! '),
(12, 'Przed nami Grand Prix Emilia Romagna. Warto przypomnieć że będziemy mieli nowy format weekendu. Piątek - kwalifikacje, Sobota - sprint, Niedziela - wyścig. Czy Ferrari będzie triumfować w swoim domu?\r\n#ForzaFerrari');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sezon2021`
--

CREATE TABLE `sezon2021` (
  `idWyscigu` int(11) NOT NULL,
  `grandPrix` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `zwyciezca` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `team` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `sezon2021`
--

INSERT INTO `sezon2021` (`idWyscigu`, `grandPrix`, `zwyciezca`, `team`) VALUES
(0, 'Bahrajn', 'Lewis Hamilton', 'Mercedes'),
(1, 'Emilii-Romania', 'Max Verstappen', 'Red Bull'),
(2, 'Portugalia', 'Lewis Hamilton', 'Mercedes'),
(3, 'Hiszpania', 'Lewis Hamilton', 'Mercedes'),
(4, 'Monako', 'Max Verstappen', 'Red Bull'),
(5, 'Azerbejdżan', 'Sergio Perez', 'Red Bull'),
(6, 'Francja', 'Max Verstappen', 'Red Bull'),
(7, 'Styria', 'Max Verstappen', 'Red Bull'),
(8, 'Austria', 'Max Verstappen', 'Red Bull'),
(9, 'Wielka Brytania', 'Lewis Hamilton', 'Mercedes'),
(10, 'Węgry', 'Esteban Ocon', 'Alpine'),
(11, 'Belgia', 'Max Verstappen', 'Red Bull'),
(12, 'Holandia', 'Max Verstappen', 'Red Bull'),
(13, 'Włochy', 'Daniel Ricciardo', 'McLaren'),
(14, 'Rosja', 'Lewis Hamilton', 'Mercedes'),
(15, 'Turcja', 'Valtteri Bottas', 'Mercedes'),
(16, 'USA', 'Max Verstappen', 'Red Bull'),
(17, 'Meksyk', 'Max Verstappen', 'Red Bull'),
(18, 'Sau Paulo', 'Lewis Hamilton', 'Mercedes'),
(19, 'Katar', 'Lewis Hamilton', 'Mercedes'),
(20, 'Arabia Saudyjska', 'Lewis Hamilton', 'Mercedes'),
(21, 'Abu Zabi', 'Max Verstappen', 'Red Bull');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_polish_ci NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `id_role`) VALUES
(1, 'Marcysiox', 'f3ad27578c983024f27328a3217a7018', 'marcinchowaniec21@gmail.com', 2),
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@xxx.pl', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `2022`
--
ALTER TABLE `2022`
  ADD PRIMARY KEY (`idWyscigu`);

--
-- Indeksy dla tabeli `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `sezon2021`
--
ALTER TABLE `sezon2021`
  ADD PRIMARY KEY (`idWyscigu`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_role`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
