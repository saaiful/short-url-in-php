SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `short` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;
INSERT INTO `link` (`id`, `url`, `short`, `count`, `date`) VALUES (1, 'http://localhost.com', 'a', 0, '2014-03-22 00:00:00');