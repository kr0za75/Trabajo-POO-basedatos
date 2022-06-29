-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 22:49:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` tinyint(4) NOT NULL,
  `categoria` varchar(12) DEFAULT NULL,
  `valor_categoria` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `valor_categoria`) VALUES
(1, 'Accion', '1.00'),
(2, 'Aventura', '2.00'),
(3, 'Conduccion', '3.00'),
(4, 'Deportes', '4.00'),
(5, 'Estrategia', '5.00'),
(6, 'Rol', '6.00'),
(7, 'Puzzle', '7.00'),
(8, 'Shooter', '8.00'),
(9, 'Simulacion', '9.00'),
(10, 'Vuelo', '10.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dedicacion`
--

CREATE TABLE `dedicacion` (
  `id` tinyint(4) NOT NULL,
  `horas` varchar(16) DEFAULT NULL,
  `valor_dedicacion` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dedicacion`
--

INSERT INTO `dedicacion` (`id`, `horas`, `valor_dedicacion`) VALUES
(1, '0-1 hrs', '1.00'),
(2, '1-3 hrs', '2.00'),
(3, '4-6 hrs', '3.00'),
(4, '7-8 hrs', '4.00'),
(5, '+ 8 hrs', '5.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `externos`
--

CREATE TABLE `externos` (
  `id` tinyint(4) NOT NULL,
  `experiencia` varchar(34) DEFAULT NULL,
  `valor_externos` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `externos`
--

INSERT INTO `externos` (`id`, `experiencia`, `valor_externos`) VALUES
(1, 'No tiene experiencia previa', '0.25'),
(2, 'Tiene experiencia en Playstation', '0.45'),
(3, 'Tiene experiencia en Xbox', '0.65'),
(4, 'Tiene experiencia con PC gaming', '0.85');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` tinyint(4) NOT NULL,
  `historial` varchar(16) DEFAULT NULL,
  `valor_historial` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `historial`, `valor_historial`) VALUES
(1, 'de 0 a 1 mes', '0.50'),
(2, 'de 1 a 3 meses', '0.60'),
(3, 'de 4 a 6 meses', '0.70'),
(4, 'de 8 a 9 meses ', '0.80'),
(5, '10 meses o mas', '0.90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id` tinyint(4) NOT NULL,
  `juego_resultado` varchar(55) DEFAULT NULL,
  `valor_juego` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `juego_resultado`, `valor_juego`) VALUES
(0, '', '0.00'),
(1, 'Command & Conquer TM Remastered Collection', '4.90'),
(2, 'Dead Space TM', '8.35'),
(3, 'Dead Space TM 2', '11.80'),
(4, 'Dead Space TM 3', '15.25'),
(5, 'Dungeon Keeper TM', '17.90'),
(6, 'Dungeon Keeper TM 2', '10.85'),
(7, 'Mirror\'s Edge (2009)', '14.30'),
(8, 'Mirror\'s Edge TM Catalyst', '17.75'),
(9, 'Rocket Arena', '20.40'),
(10, 'Syndicate TM (1993)', '16.80'),
(11, 'A Way Out', '8.60'),
(12, 'Alice: Madness Returns TM', '11.25'),
(13, 'Fe', '14.70'),
(14, 'It Takes Two', '18.15'),
(15, 'Jade Empire TM: Edicion Especial', '11.10'),
(16, 'Lost in Random TM', '13.75'),
(17, 'Mirror\'s Edge TM Catalyst', '17.20'),
(18, 'Rebel Galaxy', '20.65'),
(19, 'Sea of Solitude', '24.10'),
(20, 'The Saboteur TM', '16.25'),
(21, 'STAR WARS Jedi: Fallen Order TM', '19.70'),
(22, 'Burnout TM Paradise Remastered', '11.50'),
(23, 'Need for Speed TM', '14.95'),
(24, 'Need for Speed TM Heat', '17.60'),
(25, 'Need for Speed TM Hot Pursuit Remastered', '10.55'),
(26, 'Need for Speed TM Most Wanted', '14.00'),
(27, 'Need for Speed TM Payback', '17.45'),
(28, 'Need for Speed TM Rivals', '20.10'),
(29, 'FIFA 20', '24.55'),
(30, 'FIFA 21', '17.50'),
(31, 'Knockout City TM', '20.95'),
(32, 'Madden NFL 21', '23.60'),
(33, 'Madden NFL 22', '14.40'),
(34, 'Super Mega Baseball 3', '17.85'),
(35, 'Command & Conquer TM Remastered Collection', '11.80'),
(36, 'Plantas contra Zombis TM edicion juego del año', '17.90'),
(38, 'Populous TM', '16.95'),
(39, 'Populous TM II: Trials of the Olympian Gods', '20.40'),
(40, 'SPORE TM', '23.85'),
(41, 'Anthem TM', '28.30'),
(42, 'Dragon Age TM II', '18.30'),
(43, 'Dragon Age TM: Inquisition', '11.25'),
(44, 'Dragon Age TM: Origins', '14.70'),
(45, 'HIVESWAP: Act 1', '18.15'),
(46, 'Jade Empire TM: Edicion Especial', '20.80'),
(47, 'The Bard’s Tale Trilogy', '24.25'),
(48, 'Ultima TM Underworld 1', '17.20'),
(49, 'Ultima TM Underworld 2', '20.65'),
(50, 'Peggle ', '24.30'),
(51, 'Peggle  Nights', '27.75'),
(52, 'Unravel TM', '31.20'),
(53, 'Unravel Two', '11.50'),
(54, 'Battlefield TM 1', '15.15'),
(55, 'Battlefield 3 TM', '18.60'),
(56, 'Battlefield 4 TM', '22.05'),
(57, 'Battlefield: Bad Company TM 2', '25.50'),
(58, 'Battlefield TM Hardline', '17.65'),
(59, 'Battlefield TM V', '21.10'),
(60, 'Crysis  (2007)', '24.55'),
(61, 'Crysis  2 Maximum Edition', '28.00'),
(62, 'Crysis  3', '30.65'),
(63, 'Crysis Remastered', '23.60'),
(64, 'Mass Effect TM (2007)', '14.40'),
(65, 'Mass Effect TM 2 (2010)', '17.85'),
(66, 'Mass Effect TM 3 (2012)', '20.50'),
(67, 'Mass Effect TM: Andromeda', '23.95'),
(68, 'Mass Effect TM Legendary Edition', '16.90'),
(69, 'Plants vs. Zombies TM: La Batalla de Neighborville', '20.35'),
(70, 'Plants vs. Zombies TM Garden Warfare', '23.00'),
(71, 'STAR WARS TM Battlefront TM II', '29.90'),
(72, 'STAR WARS TM Battlefront TM Ultimate Edition', '22.85'),
(73, 'Titanfall TM 2', '16.30'),
(74, 'SimCity TM', '20.75'),
(75, 'SimCity 2000 TM Special Edition', '24.20'),
(76, 'SimCity TM 4 Deluxe Edition', '16.35'),
(77, 'SPORE TM', '19.80'),
(78, 'STAR WARS TM: Squadrons', '23.25'),
(79, 'Los Sims TM 4', '26.70'),
(80, 'Medal of Honor Airborne TM', '30.35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `externos_id` tinyint(4) NOT NULL,
  `preferencia_id` tinyint(4) NOT NULL,
  `pericia_id` tinyint(4) NOT NULL,
  `juego_id` tinyint(4) NOT NULL,
  `dedicacion_id` tinyint(4) NOT NULL,
  `historial_id` tinyint(4) NOT NULL,
  `tipo_jugador_id` tinyint(4) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pericia`
--

CREATE TABLE `pericia` (
  `id` tinyint(4) NOT NULL,
  `pericia` varchar(12) DEFAULT NULL,
  `valor_pericia` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pericia`
--

INSERT INTO `pericia` (`id`, `pericia`, `valor_pericia`) VALUES
(1, 'Neofito', '1.00'),
(2, 'Novato', '2.00'),
(3, 'Amateur', '3.00'),
(4, 'Training', '4.00'),
(5, 'Intermedio', '5.00'),
(6, 'Rookie', '6.00'),
(7, 'Senior', '7.00'),
(8, 'Semi-pro', '8.00'),
(9, 'Experto', '9.00'),
(10, 'Profesional', '10.00'),
(11, 'Veterano', '11.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `validador` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencia`
--

CREATE TABLE `preferencia` (
  `id` tinyint(4) NOT NULL,
  `preferencia` varchar(17) DEFAULT NULL,
  `valor_preferencia` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preferencia`
--

INSERT INTO `preferencia` (`id`, `preferencia`, `valor_preferencia`) VALUES
(1, 'juega individual', '0.15'),
(2, 'juega duos', '0.30'),
(3, 'juega trios', '0.45'),
(4, 'juega escuadras', '0.60'),
(5, 'juega offline', '0.75'),
(6, 'juega teclado', '0.90'),
(7, 'juega joystick', '1.05'),
(8, 'juega pc', '1.20'),
(9, 'juega consola', '1.35'),
(10, 'juega clasicos', '1.50'),
(11, 'juega modernos', '1.65');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_jugador`
--

CREATE TABLE `tipo_jugador` (
  `id` tinyint(4) NOT NULL,
  `tipo_jugador` varchar(14) DEFAULT NULL,
  `valor_tipo` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_jugador`
--

INSERT INTO `tipo_jugador` (`id`, `tipo_jugador`, `valor_tipo`) VALUES
(1, 'Socializador', '1.00'),
(2, 'Anarquista', '2.00'),
(3, 'Conquistador', '3.00'),
(4, 'Competidor', '4.00'),
(5, 'Explorador', '5.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eliminados`
--

CREATE TABLE `usuarios_eliminados` (
  `rut_elim` varchar(17) NOT NULL,
  `nombre_elim` varchar(20) DEFAULT NULL,
  `apellido_elim` varchar(20) DEFAULT NULL,
  `correo_elim` varchar(35) DEFAULT NULL,
  `telefono_elim` varchar(20) DEFAULT NULL,
  `clave_elim` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dedicacion`
--
ALTER TABLE `dedicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `externos`
--
ALTER TABLE `externos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `fk_jugador_externos_idx` (`externos_id`),
  ADD KEY `fk_jugador_preferencia1_idx` (`preferencia_id`),
  ADD KEY `fk_jugador_pericia1_idx` (`pericia_id`),
  ADD KEY `fk_jugador_juego1_idx` (`juego_id`),
  ADD KEY `fk_jugador_dedicacion1_idx` (`dedicacion_id`),
  ADD KEY `fk_jugador_historial1_idx` (`historial_id`),
  ADD KEY `fk_jugador_tipo_jugador1_idx` (`tipo_jugador_id`),
  ADD KEY `fk_jugador_categoria1_idx` (`categoria_id`),
  ADD KEY `fk_jugador_persona` (`persona_id`);

--
-- Indices de la tabla `pericia`
--
ALTER TABLE `pericia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rut` (`rut`);

--
-- Indices de la tabla `preferencia`
--
ALTER TABLE `preferencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_jugador`
--
ALTER TABLE `tipo_jugador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_eliminados`
--
ALTER TABLE `usuarios_eliminados`
  ADD PRIMARY KEY (`rut_elim`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `fk_jugador_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `fk_jugador_dedicacion1` FOREIGN KEY (`dedicacion_id`) REFERENCES `dedicacion` (`id`),
  ADD CONSTRAINT `fk_jugador_externos` FOREIGN KEY (`externos_id`) REFERENCES `externos` (`id`),
  ADD CONSTRAINT `fk_jugador_historial1` FOREIGN KEY (`historial_id`) REFERENCES `historial` (`id`),
  ADD CONSTRAINT `fk_jugador_juego1` FOREIGN KEY (`juego_id`) REFERENCES `juego` (`id`),
  ADD CONSTRAINT `fk_jugador_pericia1` FOREIGN KEY (`pericia_id`) REFERENCES `pericia` (`id`),
  ADD CONSTRAINT `fk_jugador_persona` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `fk_jugador_preferencia1` FOREIGN KEY (`preferencia_id`) REFERENCES `preferencia` (`id`),
  ADD CONSTRAINT `fk_jugador_tipo_jugador1` FOREIGN KEY (`tipo_jugador_id`) REFERENCES `tipo_jugador` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
