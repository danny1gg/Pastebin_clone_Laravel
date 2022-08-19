-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: aug. 18, 2022 la 08:50 PM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `db_pastebin`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `list_expirations`
--

CREATE TABLE `list_expirations` (
  `id_expiration` int(2) NOT NULL,
  `expiration_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `list_expirations`
--

INSERT INTO `list_expirations` (`id_expiration`, `expiration_time`) VALUES
(1, 'Never'),
(2, 'Burn after read'),
(3, '10 Minutes'),
(4, '1 Hour'),
(5, '1 Day'),
(6, '2 week'),
(7, '1 Month'),
(8, '1 Year');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `list_exposures`
--

CREATE TABLE `list_exposures` (
  `id_exposure` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `list_exposures`
--

INSERT INTO `list_exposures` (`id_exposure`, `name`) VALUES
(1, 'Public'),
(2, 'Unlisted'),
(3, 'Private');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `paste_lists`
--

CREATE TABLE `paste_lists` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `posted_by` varchar(225) DEFAULT NULL,
  `exposure` varchar(10) NOT NULL,
  `expire_date` varchar(15) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `created_at` varchar(25) DEFAULT NULL,
  `updated_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `paste_lists`
--

INSERT INTO `paste_lists` (`id`, `title`, `text`, `posted_by`, `exposure`, `expire_date`, `locked`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Title (PUBLIC)', 'text text text', 'Guest', 'Public', 'Never', NULL, NULL, '2022-08-16 19:05:46', '2022-08-16 19:05:46'),
(2, 'Title2 long title, title title', 'TEXT TEXT TEXT...\r\n          \r\n    TEXT              TEXT TEXT\r\n\r\n\r\nIF (TEXT 1) {\r\n   IF (TEXT 2) {\r\n      IF (TEXT 3) {\r\n      \r\n      }\r\n   }\r\n}      \r\n  \r\n\r\n.\r\n\r\n\r\n\r\n.\r\n\r\n\r\n         ABCD ABCD\r\n  ABCD', 'Guest', 'Public', 'Never', NULL, NULL, '2022-08-16 19:07:56', '2022-08-16 19:07:56');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `list_expirations`
--
ALTER TABLE `list_expirations`
  ADD PRIMARY KEY (`id_expiration`);

--
-- Indexuri pentru tabele `list_exposures`
--
ALTER TABLE `list_exposures`
  ADD PRIMARY KEY (`id_exposure`);

--
-- Indexuri pentru tabele `paste_lists`
--
ALTER TABLE `paste_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `list_expirations`
--
ALTER TABLE `list_expirations`
  MODIFY `id_expiration` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `list_exposures`
--
ALTER TABLE `list_exposures`
  MODIFY `id_exposure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pentru tabele `paste_lists`
--
ALTER TABLE `paste_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
