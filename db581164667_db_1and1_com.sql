-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Servidor: db581164667.db.1and1.com
-- Tiempo de generación: 30-11-2017 a las 15:25:05
-- Versión del servidor: 5.5.58-0+deb7u1-log
-- Versión de PHP: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db581164667`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_web_consultas`
--

CREATE TABLE IF NOT EXISTS `pagina_web_consultas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Consulta` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pagina_web_consultas`
--

INSERT INTO `pagina_web_consultas` (`ID`, `Nombre`, `E_Mail`, `Consulta`) VALUES
(2, 'Axel', 'Axel@gmail.com', 'Buenas tardes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(6) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` int(5) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `imagen`, `nombre`, `descripcion`, `precio`, `stock`, `fecha`) VALUES
(784512, 'Productos_Galeria/1.jpg', 'Automatic Transfer Switch (ATS', 'Mains monitoring (1 or 3 phases) for under and over voltage, under and over frequency and voltage un', 'S/.200', 20, '11/12/2017'),
(895623, 'Productos_Galeria/2.jpg', 'InteliVision 12Touch', '12,1" colour, multi-touch screen, TFT display unit with resolution of 1280 x 800 pixels\r\nTouch based', 'S/.200', 20, '11/12/2017'),
(253614, 'Productos_Galeria/3.jpg', 'Oil pressure sensor', 'Oil pressure sensor loader / forklift is pivotally mounted at the front of the chassis by the boom, ', 'S/.200', 20, '11/12/2017'),
(234556, 'Productos_Galeria/5.jpg', 'LBC2403 Trickle Float Charger', 'Designed for the engine to start running the battery charging design, multi-stage charging. With constant pressure, constant current, trickle float, full of self-stop, anti-short circuit, reverse and other functions.\r\n\r\nâ€» multi-stage charge, extend battery life 30%;\r\nâ€» with anti-short circuit, anti-reverse function;\r\nâ€» high reliability, in -30 ~ 70 degrees can work properly;\r\nâ€» plus: one year replacement, life insurance;', 'S/.200', 20, '11/12/2017'),
(154812, 'Productos_Galeria/6.jpg', 'LXI980G Wireless Data Transmission Unit ', 'This series product has LXI980G-GSM/CDMA/ET  three modelsï¼Œcan meet customerâ€™s requirement of GPRS wireless communicationï¼ŒCDMA  wireless communicationï¼ŒEthernet wire communication and WIFI wireless communication. It can compatiblewith DSE, ComAp, Harsen, LIXiSE, Smartgen  etc main controllers (Due to the increasing number of compatible controllers, the LIXiSE website will show details). The model with "G" means this product has the GPS function. The following will introduce LXI980G as samp', 'S/.200', 20, '11/12/2017'),
(485959, 'Productos_Galeria/7.jpg', '3408324 Electronic actuators', '3408324 electronic actuators are built-in actuators. Electronic governor, overspeed alarm and fuel pump actuator constitute a high-speed diesel generator automatically adjusts the speed of the electronic speed control systems , the unit normal , stable and safe operation of power generation plays a key role . 3408324 Cummins PT pump actuator is normally closed small core flow actuators for normally closed above 250KW Cummins diesel generator set .', 'S/.200', 20, '11/12/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Usuario` varchar(15) NOT NULL,
  `Contrasena` varchar(15) NOT NULL,
  `Estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Contrasena`, `Estado`) VALUES
('Admin', '2468', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
