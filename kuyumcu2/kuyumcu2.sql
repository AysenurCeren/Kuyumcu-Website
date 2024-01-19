-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2023, 19:47:01
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kuyumcu2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bileklik`
--

CREATE TABLE `bileklik` (
  `B_ID` int(11) NOT NULL,
  `Cins` varchar(13) NOT NULL,
  `Ayar` int(11) DEFAULT NULL,
  `Fiyat` double NOT NULL,
  `Agirlik` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bileklik`
--

INSERT INTO `bileklik` (`B_ID`, `Cins`, `Ayar`, `Fiyat`, `Agirlik`) VALUES
(1, 'altın ve taş', 18, 7240, 4.3),
(2, 'altın', 22, 8800, 4.7),
(3, 'altın', 24, 10000, 4.8),
(4, 'altın', 22, 9200, 4.9),
(5, 'altın', 18, 8100, 4.5),
(6, 'altın', 22, 15240, 6.4),
(7, 'altın', 18, 5400, 3.5),
(8, 'altın', 22, 8800, 4.7),
(9, 'altın', 24, 12500, 6.1),
(10, 'altın', 24, 9250, 4.7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kolye`
--

CREATE TABLE `kolye` (
  `kolye_ID` int(11) NOT NULL,
  `Cins` varchar(20) NOT NULL,
  `Ayar` int(11) DEFAULT NULL,
  `Fiyat` double NOT NULL,
  `Agirlik` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kolye`
--

INSERT INTO `kolye` (`kolye_ID`, `Cins`, `Ayar`, `Fiyat`, `Agirlik`) VALUES
(1, 'yakut', NULL, 11250, 5.1),
(2, 'altın', 24, 8500, 6),
(3, 'altın', 22, 7750, 3.5),
(4, 'altın', 24, 8400, 4.1),
(5, 'altın', 24, 7250, 3),
(6, 'altın', 22, 7250, 3.2),
(7, 'altın', 18, 5110, 2.9),
(8, 'altın', 18, 7340, 3.1),
(15, 'altın', 22, 4620, 2.8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `küpe`
--

CREATE TABLE `küpe` (
  `K_ID` int(11) NOT NULL,
  `Cins` varchar(20) NOT NULL,
  `Ayar` int(11) DEFAULT NULL,
  `Fiyat` double NOT NULL,
  `Agirlik` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `küpe`
--

INSERT INTO `küpe` (`K_ID`, `Cins`, `Ayar`, `Fiyat`, `Agirlik`) VALUES
(1, 'altın ve pırlanta', 18, 7240, 4),
(2, 'altın ve pırlanta', 22, 8200, 4.5),
(3, 'altın', 24, 9240, 4),
(4, 'altın', 22, 8200, 4.5),
(5, 'altın', 24, 8040, 3.4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takim`
--

CREATE TABLE `takim` (
  `T_ID` int(11) NOT NULL,
  `Cins` varchar(20) NOT NULL,
  `Ayar` int(11) DEFAULT NULL,
  `Fiyat` double NOT NULL,
  `Agirlik` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `takim`
--

INSERT INTO `takim` (`T_ID`, `Cins`, `Ayar`, `Fiyat`, `Agirlik`) VALUES
(1, 'pırlanta', NULL, 25860, 8.75),
(2, 'pırlanta', NULL, 26420, 8.1),
(3, 'pırlanta', NULL, 28160, 9.1),
(4, 'altın', 24, 32250, 10.9),
(5, 'altın', 24, 34500, 11.3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yüzük`
--

CREATE TABLE `yüzük` (
  `Y_ID` int(11) NOT NULL,
  `Cins` varchar(20) NOT NULL,
  `Ayar` int(11) DEFAULT NULL,
  `Fiyat` double NOT NULL,
  `Agirlik` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yüzük`
--

INSERT INTO `yüzük` (`Y_ID`, `Cins`, `Ayar`, `Fiyat`, `Agirlik`) VALUES
(1, 'altın', 22, 5500, 3.1),
(2, 'altın ve pırlanta', 22, 6740, 3.5),
(3, 'altın ve pırlanta', 24, 7200, 3.6),
(4, 'gümüş ve pırlanta', 925, 2140, 3.2),
(5, 'altın ve yakut', 22, 5700, 3.1),
(6, 'altın ve kuvars', 22, 5340, 3),
(7, 'altın', 24, 12000, 5.3),
(8, 'altın ve pırlanta', 24, 10.86, 4.9);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bileklik`
--
ALTER TABLE `bileklik`
  ADD PRIMARY KEY (`B_ID`);

--
-- Tablo için indeksler `kolye`
--
ALTER TABLE `kolye`
  ADD PRIMARY KEY (`kolye_ID`);

--
-- Tablo için indeksler `küpe`
--
ALTER TABLE `küpe`
  ADD PRIMARY KEY (`K_ID`);

--
-- Tablo için indeksler `takim`
--
ALTER TABLE `takim`
  ADD PRIMARY KEY (`T_ID`);

--
-- Tablo için indeksler `yüzük`
--
ALTER TABLE `yüzük`
  ADD PRIMARY KEY (`Y_ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bileklik`
--
ALTER TABLE `bileklik`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kolye`
--
ALTER TABLE `kolye`
  MODIFY `kolye_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `küpe`
--
ALTER TABLE `küpe`
  MODIFY `K_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `takim`
--
ALTER TABLE `takim`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `yüzük`
--
ALTER TABLE `yüzük`
  MODIFY `Y_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
