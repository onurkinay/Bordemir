-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Eyl 2014, 11:22:43
-- Sunucu sürümü: 5.5.27
-- PHP Sürümü: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `bordemir`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ka` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `ka`, `sifre`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siteadi` varchar(255) NOT NULL,
  `aciklama` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `siteadi`, `aciklama`, `keywords`, `email`, `logo`) VALUES
(1, 'Bordemir Resmi web sitesi', 'Bordemir site açıklama', 'bordemir, demir, çeli', 'admin@atilimmedya.com', 'img/logo.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resim` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `resim`, `thumb`) VALUES
(2, 'upload/1.jpg', 'upload/t_1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `detay` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `detay`) VALUES
(1, 'Haber Başlık', 'asdasdasdasdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimizda` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimizda`) VALUES
(1, '<p>asfdasfsdfsf</p>\r\n<p>sdfsdfsdf</p>\r\n<p>fds</p>\r\n<p>f</p>\r\n<p>sdf</p>\r\n<p>&nbsp;</p>\r\n<p>dsf</p>\r\n<p>sd</p>\r\n<p>fsdf</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetlerimiz`
--

CREATE TABLE IF NOT EXISTS `hizmetlerimiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hizmetlerimiz` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hizmetlerimiz`
--

INSERT INTO `hizmetlerimiz` (`id`, `hizmetlerimiz`) VALUES
(1, 'sdfsdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `harita` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `adres`, `tel`, `fax`, `harita`) VALUES
(2, 'Merkez Depo', 'asdasdasd', '0212xxxx --- 12123123', '123123 --- 123123', '123123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aciklama` text NOT NULL,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `aciklama`, `resim`) VALUES
(8, 'jkljkl', 'upload/2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE IF NOT EXISTS `sosyal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`id`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'bordemir', 'bordemir', 'bordem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teknik`
--

CREATE TABLE IF NOT EXISTS `teknik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `pdfyol` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `detay` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `baslik`, `detay`) VALUES
(1, 'asdasd', 'asdasdad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
