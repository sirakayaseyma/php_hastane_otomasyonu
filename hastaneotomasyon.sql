-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Tem 2021, 13:33:35
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastaneotomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktorlar`
--

CREATE TABLE `doktorlar` (
  `id` int(11) NOT NULL,
  `klinik` int(11) NOT NULL,
  `doktor` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `doktorlar`
--

INSERT INTO `doktorlar` (`id`, `klinik`, `doktor`) VALUES
(1, 1, 'Uzm.Dr Sezer ATAY'),
(2, 1, 'Uzm.Dr Serdar GÜDÜL'),
(3, 2, 'Uzm. Dr. Aykut Ayatan'),
(4, 2, 'Uzm. Dr. Anna Çetiner Baranova'),
(5, 3, 'Dr. Hatice Fidan Onur'),
(6, 3, 'Uzm. Dr. İskender Özalp'),
(7, 3, 'Uzm. Dr. Bünyamin Özsoy'),
(8, 3, 'Dr. Ezgi Aytaç'),
(9, 4, 'Dr. Mehmet Ali Çetiner'),
(10, 4, 'Uzm. Dr. Aydın Gültekin'),
(11, 5, 'Uzm. Dr. Caner Korkut\r\n'),
(12, 5, 'Uzm. Dr. Durhan Bilici'),
(13, 6, 'Uzm. Dr. Celal Sönmez'),
(14, 6, 'Uzm. Dr. Aytekin Oral'),
(15, 6, 'Op. Dr. Bülent Alper Aygün'),
(16, 7, 'Uzm. Dr. Recep Erdoğan'),
(17, 7, 'Dr. Yasin Yıldız'),
(18, 8, 'Dr. Selda Aktay'),
(19, 8, 'Op. Dr. Derya Karadeniz Kulaç'),
(20, 9, 'Uzm. Dr. Nihat Kırtaç'),
(21, 10, 'Uzm. Dr. Nilüfer Güneş'),
(22, 10, 'Uzm. Dr. Mehmet Yılmaz'),
(23, 10, 'Uzm. Dr. Murat Uçar'),
(24, 10, 'Uzm. Dr. Belde Yürümez Bayramoğlu'),
(25, 11, 'Uzm. Dr. Ziya Şahan'),
(26, 11, 'Uzm. Dr. Güven Pınar'),
(27, 11, 'Uzm. Dr. Mustafa Öngel'),
(28, 11, 'Uzm. Dr. Mustafa Karaçöp'),
(29, 11, 'Uzm. Dr. Sadi Cahit Yetkili\r\n'),
(30, 11, 'Dr. Kenan Şahin'),
(31, 11, 'Uzm. Dr. Ahmet Suat Demir'),
(32, 11, 'Dr. Muhammet İncekara'),
(33, 11, 'Dr. Muzaffer Güngör'),
(34, 11, 'Dr. Yiğit Saraç'),
(35, 11, 'Dr. Ahmet Murat Albayrak'),
(36, 11, 'Dr. Mustafa Orhan Geçim'),
(37, 11, 'Dr. Burak Özün'),
(38, 11, 'Uzm. Dr. Ali Osman Edremit'),
(39, 11, 'Dr. Elif Tuğba Korkutan Şendur'),
(40, 11, 'Dr. Ceyhan Erözcan'),
(41, 11, 'Dr. Aziz Şanlı'),
(42, 11, 'Dr. Turhan Uluç'),
(43, 12, 'Op. Dr. Hüseyin Uysal'),
(44, 12, 'Op. Dr. Taner Küçükçelebi'),
(45, 12, 'Op. Dr. Barbaros Hayrettin Tabak'),
(46, 12, 'Op. Dr. Zekai Akdoğan'),
(47, 12, 'Op. Dr. Hakan Balbaloğlu'),
(48, 12, 'Uzm. Dr. Yalçın Yöney'),
(49, 12, 'Uzm. Dr. Önder Şahna\r\n'),
(50, 13, 'Uzm. Dr. İncilay Barlah'),
(51, 13, 'Uzm. Dr. Sema Kirazlı'),
(52, 13, 'Uzm. Dr. Hülya Ayyıldız Candar'),
(53, 13, 'Uzm. Dr. Emin Demirpolat'),
(54, 13, 'Uzm. Dr. Aytuğ Karayeğen Şahin'),
(55, 13, 'Uzm. Dr. Lütfiye Çalışkan'),
(56, 14, 'Uzm. Dr. Muharrem Erdem'),
(57, 14, 'Uzm. Dr. Ayşegül Önerbay'),
(58, 14, 'Op. Dr. Burhan Yıldırım'),
(59, 15, 'Uzm. Dr. Hanife Işıl Aykıtalp'),
(60, 16, 'Op. Dr. Zeki Dağlıoğlu'),
(61, 17, 'Uzm. Dr. Abdullah Şekerci'),
(62, 18, 'Uzm. Dr. Zülfikar Çelik'),
(63, 19, 'Dr. Zelıha Öztürk'),
(64, 19, 'Dr. Cansu Çetin'),
(65, 19, 'Dr. Ali Kemal Uslubaş'),
(66, 19, 'Dr. Burak Omay'),
(67, 19, 'Dr. Zeynep Ezgi Kurtpınar'),
(68, 19, 'Dr. Yunus Emre Okudan'),
(69, 20, 'Op. Dr. Mustafa Murat Öztürk'),
(70, 21, 'Op. Dr. Alper Çelikten'),
(71, 21, 'Op. Dr. Elif Suner'),
(72, 22, 'Dr. Gizem Coşkun'),
(73, 23, 'Uzm. Dr. Abdülkerim Yılmaz'),
(74, 24, 'Op. Dr. Mustafa Murat Öztürk'),
(75, 25, 'Dr. Oya Pazarlı Dinçer'),
(76, 26, 'Uzm. Dr. Fatma Uçar'),
(77, 27, 'Uzm. Dr. Ayla Arıcan'),
(78, 27, 'Dr. Gökçen Gündoğdu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `klinik`
--

CREATE TABLE `klinik` (
  `id` int(11) NOT NULL,
  `klinik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `klinik`
--

INSERT INTO `klinik` (`id`, `klinik`) VALUES
(1, 'Nöroloji'),
(2, 'Psikiyatri'),
(3, 'Anesteziyoloji ve Reanimasyon'),
(4, 'Kardiyoloji'),
(5, 'Dermatoloji'),
(6, 'Üroloji'),
(7, 'Ortopedi ve Travmatoloji'),
(8, 'Göz Hastalıkları'),
(9, 'Aile Hekimliği'),
(10, 'Radyoloji'),
(11, 'Dahiliye'),
(12, 'Genel Cerrahi'),
(13, 'Çocuk Sağlığı ve Hastalıkları'),
(14, 'Kulak Burun Boğaz'),
(15, 'Kadın Hastalıkları ve Doğum'),
(16, 'Beyin ve Sinir Cerrahisi'),
(17, 'Fizik Tedavi ve Rehabilitasyon'),
(18, 'Göğüs Hastalıkları'),
(19, 'Pratisyen'),
(20, 'El Cerrahisi'),
(21, 'Göğüs Cerrahisi'),
(22, 'Acil Servis'),
(23, 'Çocuk Cerrahisi'),
(24, 'Plastik Rekonstrüktif ve Estetik Cerrahi,Ağız Diş ve Çene Cerrahisi'),
(25, 'Tıbbi Mikrobiyoloji'),
(26, 'Tıbbi Biyokimya'),
(27, 'Tıbbi Patoloji');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_mail` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) CHARACTER SET utf8 NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_mail`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'Sude Gün', 'asdfg@gmail.com', '22222222222', '111'),
(2, 'Seda', 'bcdg@gmail.com', '00000000000', '000'),
(3, 'isa biçer', 'ttk@gmail.com', '77777777777', '111'),
(4, 'Seda Bakan', 'sdbkn@gmail.com', '32132132132', '123'),
(5, 'Seda Ocak', 'socak@outlook.com', '98745612311', '123456'),
(19, 'Ali Kahveci', 'akahveci@gmail.com', '14728536977', '1111');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_tarih` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_doktor` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_klinik` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_tarih`, `randevu_doktor`, `randevu_klinik`, `randevu_hasta_id`) VALUES
(10, '2021-07-30', 'Uzm. Dr. Recep Erdoğan', 'Çocuk Sağlığı ve Hastalıkları', 12),
(11, '2021-07-25', 'Dr. Gökçen Gündoğdu', 'Çocuk Sağlığı ve Hastalıkları', 12),
(12, '2021-07-17', 'Uzm. Dr. Durhan Bilici', 'Dahiliye', 12),
(19, '2021-07-31', '62', '18', 8),
(20, '2021-07-21', '11', '5', 8),
(21, '2021-07-26', '57', '14', 8),
(22, '2021-07-29', '43', '12', 8),
(23, '2021-07-17', '57', '14', 15),
(24, '2021-07-24', '10', '4', 8),
(25, '2021-07-30', '48', '12', 17),
(27, '2021-07-28', '20', '9', 9),
(28, '2021-07-31', '12', '5', 9),
(29, '2021-07-15', '1', '1', 18),
(30, '2021-07-24', '62', '18', 9),
(31, '2021-07-31', '50', '13', 1),
(32, '2021-07-23', '46', '12', 1),
(36, '2021-07-31', '33', '11', 19);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `doktorlar`
--
ALTER TABLE `doktorlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `doktorlar`
--
ALTER TABLE `doktorlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Tablo için AUTO_INCREMENT değeri `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
