-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2022 a las 07:30:48
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
(1, 'Accion', '1.01'),
(2, 'Aventura', '2.02'),
(3, 'Conduccion', '3.03'),
(4, 'Deportes', '4.04'),
(5, 'Estrategia', '5.05'),
(6, 'Rol', '6.06'),
(7, 'Puzzle', '7.07'),
(8, 'Shooter', '8.08'),
(9, 'Simulacion', '9.09'),
(10, 'Vuelo', '10.10');

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
(4, 'Tiene experiencia con PC gaming', '0.90');

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
-- Estructura de tabla para la tabla `historico_usuarios`
--

CREATE TABLE `historico_usuarios` (
  `id` int(11) NOT NULL,
  `correo_hist` varchar(20) DEFAULT NULL,
  `nombre_hist` varchar(25) DEFAULT NULL,
  `clave_hist` varchar(30) DEFAULT NULL,
  `apellido_hist` varchar(25) DEFAULT NULL,
  `rut_hist` varchar(12) DEFAULT NULL,
  `telefono_hist` varchar(15) DEFAULT NULL,
  `fecha_hist` date DEFAULT NULL,
  `hora_hist` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(0, 'No compatible o no ha realizado formulario', '0.00'),
(1, 'Command & Conquer™ Remastered Collection', '4.91'),
(2, 'Dead Space™', '8.36'),
(3, 'Dead Space™ 2', '11.81'),
(4, 'Dead Space™ 3', '15.31'),
(5, 'Dungeon Keeper™', '17.91'),
(6, 'Dungeon Keeper™ 2', '10.86'),
(7, 'Mirror\'s Edge (2009)', '14.31'),
(8, 'Mirror\'s Edge™ Catalyst', '17.81'),
(9, 'Rocket Arena', '20.41'),
(10, 'STAR WARS™: Squadrons', '23.86'),
(11, 'Syndicate™ (1993)', '16.81'),
(12, 'A Way Out', '8.67'),
(13, 'Alice: Madness Returns™', '11.27'),
(14, 'Fe', '14.72'),
(15, 'It Takes Two', '18.17'),
(16, 'Jade Empire™: Edición Especial', '11.17'),
(17, 'Lost in Random™', '13.77'),
(18, 'Watch Dogs', '17.22'),
(19, 'Rebel Galaxy', '20.67'),
(20, 'Sea of Solitude', '24.17'),
(21, 'The Saboteur™', '16.27'),
(22, 'STAR WARS Jedi: Fallen Order™', '19.72'),
(23, 'Burnout™ Paradise Remastered', '11.53'),
(24, 'Need for Speed™', '15.03'),
(25, 'Need for Speed™ Heat', '17.63'),
(26, 'Need for Speed™ Hot Pursuit Remastered', '10.58'),
(27, 'Need for Speed™ Most Wanted', '14.03'),
(28, 'Need for Speed™ Payback', '17.53'),
(29, 'Need for Speed™ Rivals', '20.13'),
(30, 'FIFA 20', '24.59'),
(31, 'FIFA 21', '17.54'),
(32, 'Knockout City™', '21.04'),
(33, 'Madden NFL 21', '23.64'),
(34, 'Madden NFL 22', '14.44'),
(35, 'Super Mega Baseball 3', '17.89'),
(36, 'X-COM 2', '11.90'),
(37, 'Gears of War', '14.50'),
(38, 'Plantas contra Zombis™ edición juego del año', '17.95'),
(39, 'Plants vs. Zombies™ Garden Warfare', '21.40'),
(40, 'Plants vs. Zombies™ Garden Warfare 2: Edición Estándar', '24.90'),
(41, 'Populous™', '17.00'),
(42, 'Populous™ II: Trials of the Olympian Gods', '20.45'),
(43, 'SPORE™', '23.90'),
(44, 'Anthem™', '28.41'),
(45, 'Dragon Age™ II', '18.36'),
(46, 'Dragon Age™: Inquisition', '11.31'),
(47, 'Dragon Age™: Origins', '14.76'),
(48, 'HIVESWAP: Act 1', '18.26'),
(49, 'World of Warcraft', '20.86'),
(50, 'The Bard’s Tale Trilogy', '24.31'),
(51, 'Ultima™ Underworld 1', '17.26'),
(52, 'Ultima™ Underworld 2', '20.76'),
(53, 'Peggle®', '24.37'),
(54, 'Peggle® Nights', '27.82'),
(55, 'Unravel™', '31.27'),
(56, 'Unravel Two', '11.62'),
(57, 'Battlefield™ 1', '15.23'),
(58, 'Battlefield 3™', '18.68'),
(59, 'Battlefield 4™', '22.13'),
(60, 'Battlefield: Bad Company™ 2', '25.63'),
(61, 'Battlefield™ Hardline', '17.73'),
(62, 'Battlefield™ V', '21.18'),
(63, 'Crysis® (2007)', '24.63'),
(64, 'Crysis® 2 Maximum Edition', '28.13'),
(65, 'Crysis® 3', '30.73'),
(66, 'Crysis Remastered', '23.68'),
(67, 'Mass Effect™ (2007)', '14.48'),
(68, 'Mass Effect™ 2 (2010)', '17.98'),
(69, 'Mass Effect™ 3 (2012)', '20.58'),
(70, 'Mass Effect™: Andromeda', '24.03'),
(71, 'Mass Effect™ Legendary Edition', '16.98'),
(72, 'Plants vs. Zombies™: La Batalla de Neighborville', '20.48'),
(73, 'Call of Duty: Advance Warfare', '23.08'),
(74, 'Counter Strike: Global Offensive', '26.53'),
(75, 'STAR WARS™ Battlefront™ II', '29.98'),
(76, 'STAR WARS™ Battlefront™ Ultimate Edition', '22.98'),
(77, 'Escape From Tarkov', '25.58'),
(78, 'Titanfall™ 2', '16.38'),
(79, 'SimCity™', '20.84'),
(80, 'SimCity 2000™ Special Edition', '24.34'),
(81, 'SimCity™ 4 Deluxe Edition', '16.44'),
(82, 'SUPER HOT', '19.89'),
(83, 'Apex Legends', '23.34'),
(84, 'Los Sims™ 4', '26.84'),
(85, 'Medal of Honor Airborne™', '30.45'),
(86, 'Warhawk', '29.40');

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
  `nombre` varchar(25) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `telefono` tinyint(4) NOT NULL,
  `validador` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `persona`
--
DELIMITER $$
CREATE TRIGGER `crearPersona` AFTER INSERT ON `persona` FOR EACH ROW BEGIN
    INSERT INTO historico_usuarios(id,correo_hist,nombre_hist,clave_hist,apellido_hist,rut_hist,telefono_hist,fecha_hist,hora_hist) 
    VALUES(new.id,new.correo,new.nombre,new.clave,new.apellido,new.rut,new.telefono,curdate(),curtime());
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `eliminarJugador` BEFORE DELETE ON `persona` FOR EACH ROW BEGIN
    INSERT INTO usuarios_eliminados (id,nombre,correo,clave,apellido,rut,telefono,fecha,hora) 
    VALUES(old.id,old.nombre,old.correo,old.clave,old.apellido,old.rut,old.telefono,curdate(),curtime());
    END
$$
DELIMITER ;

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
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `telefono` tinyint(30) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
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
-- Indices de la tabla `historico_usuarios`
--
ALTER TABLE `historico_usuarios`
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
  ADD UNIQUE KEY `rut` (`rut`),
  ADD UNIQUE KEY `rut_2` (`rut`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
