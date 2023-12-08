-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 10:06 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bron`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ammo`
--

CREATE TABLE `ammo` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `img` text NOT NULL,
  `cena` text NOT NULL,
  `kaliber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ammo`
--

INSERT INTO `ammo` (`id`, `nazwa`, `img`, `cena`, `kaliber`) VALUES
(1, 'Naboje kaliber 9mm', 'produkty2\\9mmone.jpg', '24', '9mm'),
(2, '\r\nNaboje 9mm 2', 'produkty2\\9mmtwo.jpg', '18', '9mm'),
(3, 'Naboje Alfa 7,62mm', 'produkty2\\7,62one.jpg', '34', '7,62'),
(4, 'Naboje Beta 7,62mm', 'produkty2\\7,62two.jpg', '33', '7,62'),
(5, 'Naboje Gamma 7,62mm', 'produkty2\\7,62three.jpg', '69', '7,62'),
(6, 'Naboje 22lr', 'produkty2\\22lr.jpg', '12', '22lr'),
(7, 'Naboje 44 Magnum', 'produkty2\\44mag.jpg', '25', '44magnum'),
(8, 'Naboje 45 ACP', 'produkty2\\45acp.jpg', '69', '45acp'),
(9, 'Naboje 50 BMG', 'produkty2\\50bmg.jpg', '87', '50 BMG'),
(10, 'Naboje 308 Winchester', 'produkty2\\308win.jpg', '55', '308 Winchester'),
(11, 'Naboje 5,56x45mm', 'produkty2\\5x5.jpg', '44', '5.56x45'),
(12, 'Naboje Alfa 6,5mm', 'produkty2\\6,5mmone.jpg', '45', '6.5mm'),
(13, 'Naboje Beta 6,5mm', 'produkty2\\6,5mmtwo.jpg', '45', '6.5mm'),
(14, 'Naboje Alfa 357 Magnum', 'produkty2\\357 magnum.jpg', '56', '357magnum'),
(15, 'Naboje 12/70', 'produkty2\\1270.jpg', '34', '12'),
(16, 'Naboje Gamma 338 Lapua Magnum', 'produkty2\\lapua.jpg', '66', '338 Lapua Magnum');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bron_dluga`
--

CREATE TABLE `bron_dluga` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `img` varchar(99) NOT NULL,
  `cena` int(99) NOT NULL,
  `promocja` int(99) NOT NULL,
  `kaliber` text NOT NULL,
  `producent` text NOT NULL,
  `rodzaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bron_dluga`
--

INSERT INTO `bron_dluga` (`id`, `nazwa`, `img`, `cena`, `promocja`, `kaliber`, `producent`, `rodzaj`) VALUES
(1, 'ak-47', 'zdjeciaProduktow\\ak47.jfif', 2500, 0, '7,62', '1', 'szturmowy'),
(2, 'akacz', 'zdjeciaProduktow\\akacz.jfif', 6969, 0, '7,65mm', '2', 'szturmowy'),
(3, 'AUG', 'zdjeciaProduktow\\aug.jfif', 5999, 0, '308 Winchester', '2', 'szturmowy'),
(4, 'Barret', 'zdjeciaProduktow\\baret.jfif', 12699, 10, '50 BMG', 'Epic Games', 'snajperski'),
(5, 'Black Pump', 'zdjeciaProduktow\\BlackPump.jfif', 99999999, 0, '12', 'Epic Games', 'strzelba'),
(6, 'Famas', 'zdjeciaProduktow\\famas.jfif', 3000, 0, '7,62', 'Epic Games', 'szturmowy'),
(7, 'Dragunov', 'zdjeciaProduktow\\dragon.png', 8999, 0, '308 Winchester', 'GFC Gun', 'snajperski'),
(8, 'Heavy Pomp', 'zdjeciaProduktow\\heavyPomg.jfif', 88888, 0, '12', 'Epic Games', 'strzelba'),
(9, 'smingus dyngus', 'zdjeciaProduktow\\SmingusDyngus.jfif', 15, 0, '5.56x45', 'Bazarek zelowski', 'maszynowy'),
(10, 'Karabin z Luneta', 'zdjeciaProduktow\\karabinZLuneta.jfif', 0, 0, '6.5mm', 'EpicGames', 'szturmowy'),
(11, 'mini gun', 'zdjeciaProduktow\\MINIGUN.jfif', 0, 0, '6.5mm', 'Epic Games', 'maszynowy'),
(12, 'muszkiet', 'zdjeciaProduktow\\muszkiet.jfif', 500, 0, 'inna\r\n', 'Bazarek zelowski', 'inna'),
(14, 'Pump Shotgun', 'zdjeciaProduktow\\PUMP_SHOTGUN.jfif', 5600, 0, '12', 'Epic Games', 'strzelba'),
(16, 'Scar', 'zdjeciaProduktow\\scar.jfif', 4599, 0, '7,65', 'Epic Games', 'szturmowy'),
(17, 'Sniper Rifle', 'zdjeciaProduktow\\sniperRifle.jfif', 699990, 0, '50 BMG', 'Epic Games', 'snajperski\r\n'),
(18, 'Sztucer', 'zdjeciaProduktow\\sztuce_r.jfif', 69999, 0, '338 Lapua Magnum', 'Epic Games', 'snajperski'),
(19, 'Tactic', 'zdjeciaProduktow\\tactic.jfif', 6000, 0, '6.5mm', 'Epic Games', 'szturmowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bron_krotka`
--

CREATE TABLE `bron_krotka` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `img` text NOT NULL,
  `cena` int(99) NOT NULL,
  `kaliber` text NOT NULL,
  `producent` text NOT NULL,
  `rodzaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bron_krotka`
--

INSERT INTO `bron_krotka` (`id`, `nazwa`, `img`, `cena`, `kaliber`, `producent`, `rodzaj`) VALUES
(1, 'Dessert Eagle', 'zdjeciaProduktow\\dessert_deagle.jfif', 450, '22lr', '1', 'pistolet'),
(2, 'Glock 19', 'zdjeciaProduktow\\glock.jfif', 240, '9mm', '2', 'pistolet'),
(3, 'Rewolwer', 'zdjeciaProduktow\\rewolwer.jfif', 290, '44magnum', '3', 'rewolwer'),
(4, 'Szesciostrzalowiec', 'zdjeciaProduktow\\szesciostrzalowiec.jfif', 699, '357magnum', '3', 'rewolwer'),
(5, 'Taktyczne Pistolety', 'zdjeciaProduktow\\takryczne_pistolety.jfif', 600, '9mm', '2', 'pistolet'),
(6, 'Pistolet z tłumikiem', 'zdjeciaProduktow\\usp-c.jfif', 899, '22lr', '1', 'pistolet'),
(7, 'Rewolwer z lunetą', 'zdjeciaProduktow\\rewolwerZluneta.jfif', 799, '44magnum', '3', 'rewolwer'),
(8, 'Taurus 116', 'zdjeciaProduktow\\taurus.jpg', 345, '9mm', '2', 'pistolet'),
(9, 'Beretta ', 'zdjeciaProduktow\\beretta.jpg', 643, '22lr', '3', 'pistolet');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozycje_zamowien`
--

CREATE TABLE `pozycje_zamowien` (
  `id` int(11) NOT NULL,
  `id_zamowienia` int(11) DEFAULT NULL,
  `id_produktu` int(11) DEFAULT NULL,
  `ilosc` int(11) DEFAULT NULL,
  `cena` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pozycje_zamowien`
--

INSERT INTO `pozycje_zamowien` (`id`, `id_zamowienia`, `id_produktu`, `ilosc`, `cena`) VALUES
(1, 1, 16, 3, 66.00),
(2, 1, 3, 8, 34.00),
(3, 2, 1, 3, 24.00),
(4, 2, 5, 6, 69.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `data_zamowienia` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `imie`, `nazwisko`, `adres`, `cena`, `data_zamowienia`) VALUES
(1, 'Kordian', 'Domagała', 'miejscowosc1', 470.00, '2023-12-08 19:00:42'),
(2, 'Zbyszek', 'Wieczorek', 'miejscowoac2', 486.00, '2023-12-08 19:03:28');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ammo`
--
ALTER TABLE `ammo`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `bron_dluga`
--
ALTER TABLE `bron_dluga`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `bron_krotka`
--
ALTER TABLE `bron_krotka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pozycje_zamowien`
--
ALTER TABLE `pozycje_zamowien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_zamowienia` (`id_zamowienia`),
  ADD KEY `id_produktu` (`id_produktu`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ammo`
--
ALTER TABLE `ammo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bron_dluga`
--
ALTER TABLE `bron_dluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bron_krotka`
--
ALTER TABLE `bron_krotka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pozycje_zamowien`
--
ALTER TABLE `pozycje_zamowien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pozycje_zamowien`
--
ALTER TABLE `pozycje_zamowien`
  ADD CONSTRAINT `pozycje_zamowien_ibfk_1` FOREIGN KEY (`id_zamowienia`) REFERENCES `zamowienia` (`id`),
  ADD CONSTRAINT `pozycje_zamowien_ibfk_2` FOREIGN KEY (`id_produktu`) REFERENCES `ammo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
