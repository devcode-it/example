CREATE TABLE IF NOT EXISTS `am_brani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `durata` varchar(255) NOT NULL,
  `id_autore` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);