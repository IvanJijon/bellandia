-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Mars 2016 à 17:33
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bellandia`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `img` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `img`) VALUES
(1, 'SENDEROS', 'Dentro de 30 hectáreas de bosque se distribuyen los senderos, mostrando la vegetación nativa de la zona, su riqueza en plantas medicinales, flores silvestres, orquídeas y aves.', '1.png'),
(2, 'CASCADA', 'La confluencia de innumerables arroyos naturales se desborda en una cascada de aproximadamente 60 metros. Disfrutar de la energía del entorno, la brisa y la pureza de sus aguas es una experiencia inolvidable. Se puede acceder a través de un sendero natural en declive que tiene 365 gradas o a través de un sendero simple de 10 minutos de caminata.', '1.png'),
(3, 'PISCINA NATURAL', 'Manantiales de agua pura alimentan una piscina natural de continua entrada y salida de agua. Rodeada de bosque, pájaros y mariposas, tiene el entorno perfecto para un descanso reparador.', '1.png'),
(4, 'OBSERVACIÓN DE AVES', 'Gran variedad de aves de la zona le deleitan con sus colores y formas.', '1.png'),
(5, 'RESTAURANTE', 'Acompañado de una vista privilegiada de la selva amazónica, usted disfrutará del sabor auténtico de la cocina ecuatoriana e internacional, con ingredientes de la zona, exquisitamente seleccionados.', '1.png');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(5000) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `features` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `img`, `features`) VALUES
(1, 'DOBLE O TWIN', 'dobleotwin.png', '["Acceso Minusv\u00c3\u00a1lidos","Tienen 1 cuarto y un ba\u00c3\u00b1o","Cama Full o twin","Terraza con hermosa vista a la selva","Capacidad m\u00c3\u00a1xima 2 personas","Ba\u00c3\u00b1o Privado","Agua caliente","Terraza con vista a la selva y a la cordillera"]'),
(2, 'CABAÑA VERDE', 'cabanaverde.png', '["Acceso Minusv\u00c3\u00a1lidos","Tienen 1 cuarto y un ba\u00c3\u00b1o","Cama Full o twin","Terraza con hermosa vista a la selva","Capacidad m\u00c3\u00a1xima 2 personas","Ba\u00c3\u00b1o Privado","Agua caliente","Terraza con vista a la selva y a la cordillera"]'),
(3, 'CABAÑA VERDE AMPLIA', 'cabanaverdeamplia.png', '["Acceso Minusv\u00c3\u00a1lidos","Tienen 1 cuarto y un ba\u00c3\u00b1o","Cama Full o twin","Terraza con hermosa vista a la selva","Capacidad m\u00c3\u00a1xima 2 personas","Ba\u00c3\u00b1o Privado","Agua caliente","Terraza con vista a la selva y a la cordillera"]'),
(4, 'CABAÑA 2 HABITACIONES', 'cabanadoshabitaciones.png', '["Acceso Minusv\u00c3\u00a1lidos","Tienen 1 cuarto y un ba\u00c3\u00b1o","Cama Full o twin","Terraza con hermosa vista a la selva","Capacidad m\u00c3\u00a1xima 2 personas","Ba\u00c3\u00b1o Privado","Agua caliente","Terraza con vista a la selva y a la cordillera"]');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
