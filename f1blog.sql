-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2022, 10:38
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
(6, 'Carlos Sainz przedłuża kontrakt z Ferrari o 2 lata! '),
(7, 'Przed nami Grand Prix Emilia Romagna. Warto przypomnieć że będziemy mieli nowy format weekendu. Piątek - kwalifikacje, Sobota - sprint, Niedziela - wyścig. Czy Ferrari będzie triumfować w swoim domu?\r\n#ForzaFerrari'),
(8, 'Niedzielny wyścig o 17:00'),
(9, 'Dublet Red Bulla w Grand Prix Emilii-Romanii. Max P1, Checo P2, Lando P3.  '),
(10, 'Przed nami pierwsze w historii Grand Prix Miami! Jesteście gotowi?'),
(11, 'Kwalifikacje dla Ferrari. Z pole position wystartuje Charles Leclerc, P2 dla Carlosa Sainza, P3 dla Maxa Verstappena. Niestety poprawki przywieziona na ten weekend przez Mercedesa nie dały aż tak wyraźnego skoku wydajnościowego. Wyścig jutro o 21:30 polskiego czasu.'),
(12, 'BRAWO MAX P1! P2 dla Leclerca. Ależ szykuje nam się wyrównana rywalizacja. Idą łeb w łeb. P3 dla Sainza. Warto nadmienić że mercedesy nie spisały się tak źle. Odpowiednio P5 i P6 jednakże niespodzianką jest George Russell przed Lewisem Hamiltonem. Jestem bardzo ciekaw jak dalej potoczy się ta rywalizacja. Tuż tuż za Lewisem jego były kolega z zespołu Valterii Bottas z Alfa Romeo F1 Team Orlen.'),
(13, 'Czeka nas teraz 2 tygodniowa przerwa i wracamy w Hiszpanii a następnie najbardziej prestiżowy wyścig w Księstwie Monako'),
(14, 'Na Grand Prix Hiszpani RedBull ma być lżejszy od 3 do 5kg!'),
(15, '<b>Alfa Romeo F1 Team Orlen wydaje się być szybsza niż Mercedes! </b> Wierzycie?'),
(17, '<h1>Klasyfikacja po 5 wyścigach</h1>\r\n<table style=\"border-collapse: collapse; width: 99.9529%; height: 67.1874px;\" border=\"1\"><colgroup><col style=\"width: 50.0007%;\"><col style=\"width: 25.0712%;\"><col style=\"width: 24.9295%;\"></colgroup>\r\n<tbody>\r\n<tr style=\"height: 22.3958px;\">\r\n<td style=\"height: 22.3958px;\">1. Charles Leclerc</td>\r\n<td style=\"height: 22.3958px;\">Ferrari</td>\r\n<td style=\"height: 22.3958px;\">104pkt</td>\r\n</tr>\r\n<tr style=\"height: 22.3958px;\">\r\n<td style=\"height: 22.3958px;\">2. Max Verstappen</td>\r\n<td style=\"height: 22.3958px;\">Red Bull</td>\r\n<td style=\"height: 22.3958px;\">85pkt</td>\r\n</tr>\r\n<tr style=\"height: 22.3958px;\">\r\n<td style=\"height: 22.3958px;\">3. Sergio Perez</td>\r\n<td style=\"height: 22.3958px;\">Red Bull</td>\r\n<td style=\"height: 22.3958px;\">66pkt</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Następny wyścig 22 maja GP Hiszpani</p>');

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
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@xxx.pl', 1),
(3, 'anonim', 'f1848583a041eb442c597f0964bc1ff7', 'anonim@wp.pl', 2),
(4, 'chowaniec', 'ccc36088d195310b3391f72e23cfe43b', 'chowaniec@onet.pl', 2),
(5, 'Moniczka123', '6d64d8f5d5ba470f4c64e2a05b0d5a1a', 'monikah2214@interia.pl', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `idWyscigu` int(11) NOT NULL,
  `grandPrix` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `zwyciezca` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `team` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `sezon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `wyniki`
--

INSERT INTO `wyniki` (`idWyscigu`, `grandPrix`, `zwyciezca`, `team`, `sezon`) VALUES
(1, 'Bahrajn', 'Lewis Hamilton', 'Mercedes', 2021),
(2, 'Emilii-Romania', 'Max Verstappen', 'Red Bull', 2021),
(3, 'Portugalia', 'Lewis Hamilton', 'Mercedes', 2021),
(4, 'Hiszpania', 'Lewis Hamilton', 'Mercedes', 2021),
(5, 'Monako', 'Max Verstappen', 'Red Bull', 2021),
(6, 'Azerbejdżan', 'Sergio Perez', 'Red Bull', 2021),
(7, 'Francja', 'Max Verstappen', 'Red Bull', 2021),
(8, 'Styria', 'Max Verstappen', 'Red Bull', 2021),
(9, 'Austria', 'Max Verstappen', 'Red Bull', 2021),
(10, 'Wielka Brytania', 'Lewis Hamilton', 'Mercedes', 2021),
(11, 'Węgry', 'Esteban Ocon', 'Alpine', 2021),
(12, 'Belgia', 'Max Verstappen', 'Red Bull', 2021),
(13, 'Holandia', 'Max Verstappen', 'Red Bull', 2021),
(14, 'Włochy', 'Daniel Ricciardo', 'McLaren', 2021),
(15, 'Rosja', 'Lewis Hamilton', 'Mercedes', 2021),
(16, 'Turcja', 'Valtteri Bottas', 'Mercedes', 2021),
(17, 'USA', 'Max Verstappen', 'Red Bull', 2021),
(18, 'Meksyk', 'Max Verstappen', 'Red Bull', 2021),
(19, 'Sau Paulo', 'Lewis Hamilton', 'Mercedes', 2021),
(20, 'Katar', 'Lewis Hamilton', 'Mercedes', 2021),
(21, 'Arabia Saudyjska', 'Lewis Hamilton', 'Mercedes', 2021),
(22, 'Abu Zabi', 'Max Verstappen', 'Red Bull', 2021),
(23, 'Bahrajn', 'Charles Leclerc', 'Ferrari', 2022),
(24, 'Arabia Saudyjska', 'Max Verstappen', 'Red Bull', 2022),
(25, 'Australia', 'Charles Leclerc', 'Ferrari', 2022),
(26, 'Emilii-Romanii', 'Max Vestappen', 'Red Bull', 2022),
(27, 'Miami', 'Max Vestappen', 'Red Bull', 2022),
(28, 'test', 'test', 'test', 2022);

--
-- Indeksy dla zrzutów tabel
--

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
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_role`);

--
-- Indeksy dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  ADD PRIMARY KEY (`idWyscigu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `idWyscigu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
