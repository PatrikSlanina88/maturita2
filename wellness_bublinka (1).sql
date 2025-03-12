-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 12. bře 2025, 00:06
-- Verze serveru: 10.4.32-MariaDB
-- Verze PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `wellness_bublinka`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `nabidka`
--

CREATE TABLE `nabidka` (
  `id` int(5) NOT NULL,
  `nazev` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `rezervace`
--

CREATE TABLE `rezervace` (
  `id` int(5) NOT NULL,
  `idnabidky` int(5) NOT NULL,
  `cas` date NOT NULL,
  `jmeno` varchar(70) NOT NULL,
  `prijmeni` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `nabidka`
--
ALTER TABLE `nabidka`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `rezervace`
--
ALTER TABLE `rezervace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnabidky` (`idnabidky`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `nabidka`
--
ALTER TABLE `nabidka`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `rezervace`
--
ALTER TABLE `rezervace`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `rezervace`
--
ALTER TABLE `rezervace`
  ADD CONSTRAINT `rezervace_ibfk_1` FOREIGN KEY (`idnabidky`) REFERENCES `nabidka` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
