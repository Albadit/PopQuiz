-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 dec 2019 om 12:28
-- Serverversie: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- PHP-versie: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popquiz_test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `AntwoordBlue`
--

CREATE TABLE `AntwoordBlue` (
  `ID` int(4) NOT NULL,
  `antwoord0` varchar(50) NOT NULL,
  `antwoord1` varchar(50) NOT NULL,
  `antwoord2` varchar(50) NOT NULL,
  `antwoord3` varchar(50) NOT NULL,
  `aantalGoed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `AntwoordRed`
--

CREATE TABLE `AntwoordRed` (
  `ID` int(11) NOT NULL,
  `antwoord0` varchar(50) NOT NULL,
  `antwoord1` varchar(50) NOT NULL,
  `antwoord2` varchar(50) NOT NULL,
  `antwoord3` varchar(50) NOT NULL,
  `aantalGoed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Game`
--

CREATE TABLE `Game` (
  `gameID` int(11) NOT NULL,
  `Game` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `scoreBlue` int(4) NOT NULL,
  `scoreRed` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Score`
--

CREATE TABLE `Score` (
  `ID` int(4) NOT NULL,
  `scoreRed` int(5) NOT NULL,
  `scoreBlue` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Sessie`
--

CREATE TABLE `Sessie` (
  `sessieID` int(11) NOT NULL,
  `sessieCode` varchar(6) NOT NULL,
  `gameID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Sessie`
--

INSERT INTO `Sessie` (`sessieID`, `sessieCode`, `gameID`, `teamID`) VALUES
(1, '921358', 3, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Speler`
--

CREATE TABLE `Speler` (
  `spelerID` int(11) NOT NULL,
  `teamNaam` varchar(50) NOT NULL,
  `captain` varchar(50) NOT NULL,
  `speler1` varchar(50) NOT NULL,
  `speler2` varchar(50) NOT NULL,
  `speler3` varchar(50) NOT NULL,
  `team` varchar(8) NOT NULL,
  `sessieCode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Team`
--

CREATE TABLE `Team` (
  `teamID` int(11) NOT NULL,
  `teamRed` int(11) NOT NULL,
  `teamBlue` int(11) NOT NULL,
  `sessieCode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `User`
--

INSERT INTO `User` (`ID`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 12);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Vraag`
--

CREATE TABLE `Vraag` (
  `vraagID` int(11) NOT NULL,
  `Goedkeuring` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Vraag234`
--

CREATE TABLE `Vraag234` (
  `vraagID` int(11) NOT NULL,
  `Vraag` varchar(50) NOT NULL,
  `correct_antwoord` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Vraag234`
--

INSERT INTO `Vraag234` (`vraagID`, `Vraag`, `correct_antwoord`) VALUES
(1, 'Wat is de uitvoerende artiest?', 'Mik'),
(2, 'Wat is de uitvoerende artiest?', 'Mak'),
(3, 'Wat is de uitvoerende artiest?', 'Jak'),
(4, 'Wat is de uitvoerende artiest?', 'Sak'),
(5, 'Wat is de uitvoerende artiest?', 'Lak'),
(6, 'Wat is de uitvoerende artiest?', 'hooi'),
(7, 'Wat is de uitvoerende artiest?', 'gooi'),
(8, 'Wat is de uitvoerende artiest?', 'joy'),
(9, 'Wat is de uitvoerende artiest?', 'boy'),
(10, 'Wat is de uitvoerende artiest?', 'noiy'),
(11, 'Wat is de uitvoerende artiest?', 'xcv'),
(12, 'Wat is de uitvoerende artiest?', 'zxc'),
(13, 'Wat is de uitvoerende artiest?', 'opq'),
(14, 'Wat is de uitvoerende artiest?', 'iop'),
(15, 'Wat is de uitvoerende artiest?', 'uio'),
(16, 'Wat is de uitvoerende artiest?', 'tyu'),
(17, 'Wat is de uitvoerende artiest?', 'yuu'),
(18, 'Wat is de uitvoerende artiest?', 'rty'),
(19, 'Wat is de uitvoerende artiest?', 'ert'),
(20, 'Wat is de uitvoerende artiest?', 'wer'),
(21, 'Wat is de uitvoerende artiest?', 'lqw'),
(22, 'Wat is de uitvoerende artiest?', 'jkl'),
(23, 'Wat is de uitvoerende artiest?', 'hjk'),
(24, 'Wat is de uitvoerende artiest?', 'ghj'),
(25, 'Wat is de uitvoerende artiest?', 'dfg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `AntwoordBlue`
--
ALTER TABLE `AntwoordBlue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `AntwoordRed`
--
ALTER TABLE `AntwoordRed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Game`
--
ALTER TABLE `Game`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexen voor tabel `Score`
--
ALTER TABLE `Score`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Sessie`
--
ALTER TABLE `Sessie`
  ADD PRIMARY KEY (`sessieID`),
  ADD UNIQUE KEY `gameID` (`gameID`),
  ADD UNIQUE KEY `teamID` (`teamID`),
  ADD UNIQUE KEY `sessieCode` (`sessieCode`);

--
-- Indexen voor tabel `Speler`
--
ALTER TABLE `Speler`
  ADD PRIMARY KEY (`spelerID`);

--
-- Indexen voor tabel `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`teamID`),
  ADD KEY `sessieCode` (`sessieCode`),
  ADD KEY `teamRed` (`teamRed`),
  ADD KEY `teamBlue` (`teamBlue`);

--
-- Indexen voor tabel `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexen voor tabel `Vraag`
--
ALTER TABLE `Vraag`
  ADD PRIMARY KEY (`vraagID`);

--
-- Indexen voor tabel `Vraag234`
--
ALTER TABLE `Vraag234`
  ADD PRIMARY KEY (`vraagID`),
  ADD UNIQUE KEY `correct_antwoord` (`correct_antwoord`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `AntwoordBlue`
--
ALTER TABLE `AntwoordBlue`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `AntwoordRed`
--
ALTER TABLE `AntwoordRed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Game`
--
ALTER TABLE `Game`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Score`
--
ALTER TABLE `Score`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Sessie`
--
ALTER TABLE `Sessie`
  MODIFY `sessieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `Speler`
--
ALTER TABLE `Speler`
  MODIFY `spelerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Team`
--
ALTER TABLE `Team`
  MODIFY `teamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `Vraag`
--
ALTER TABLE `Vraag`
  MODIFY `vraagID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Vraag234`
--
ALTER TABLE `Vraag234`
  MODIFY `vraagID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Sessie`
--
ALTER TABLE `Sessie`
  ADD CONSTRAINT `Sessie_ibfk_1` FOREIGN KEY (`gameID`) REFERENCES `Game` (`gameID`),
  ADD CONSTRAINT `Sessie_ibfk_2` FOREIGN KEY (`teamID`) REFERENCES `Team` (`teamID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
