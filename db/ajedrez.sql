-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2022 a las 17:55:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajedrez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chess_piece`
--

CREATE TABLE `chess_piece` (
  `id_piece` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `initial_position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chess_piece`
--

INSERT INTO `chess_piece` (`id_piece`, `name`, `initial_position`) VALUES
(1, 'white_pawn', 'a2'),
(2, 'white_pawn', 'b2'),
(3, 'white_pawn', 'c2'),
(4, 'white_pawn', 'd2'),
(5, 'white_pawn', 'e2'),
(6, 'white_pawn', 'f2'),
(7, 'white_pawn', 'g2'),
(8, 'white_pawn', 'h2'),
(9, 'black_pawn', 'a7'),
(10, 'black_pawn', 'b7'),
(11, 'black_pawn', 'c7'),
(12, 'black_pawn', 'd7'),
(13, 'black_pawn', 'e7'),
(14, 'black_pawn', 'f7'),
(15, 'black_pawn', 'g7'),
(16, 'black_pawn', 'h7'),
(17, 'white_rook', 'a1'),
(18, 'white_rook', 'h1'),
(19, 'black_rook', 'a8'),
(20, 'black_rook', 'h8'),
(21, 'white_knight', 'b1'),
(22, 'white_knight', 'g1'),
(23, 'black_knight', 'b8'),
(24, 'black_knight', 'g8'),
(25, 'white_bishop', 'c1'),
(26, 'white_bishop', 'f1'),
(27, 'black_bishop', 'c8'),
(28, 'black_bishop', 'f8'),
(29, 'white_queen', 'd1'),
(30, 'black_queen', 'd8'),
(31, 'white_king', 'e1'),
(32, 'black_king', 'e8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `games`
--

CREATE TABLE `games` (
  `id_games` int(11) NOT NULL,
  `date` date NOT NULL,
  `posicion_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `rang` bigint(20) NOT NULL,
  `register_date` date NOT NULL,
  `win_games` int(11) NOT NULL,
  `draw_games` int(11) NOT NULL,
  `lose_game` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name`, `lastname`, `alias`, `nationality`, `rang`, `register_date`, `win_games`, `draw_games`, `lose_game`, `email`, `password`) VALUES
(1, 'carlos', 'leichner', 'cleichner', 'spain', 1, '2022-12-20', 0, 0, 0, 'carlos@gmail.com', '123456'),
(2, 'jordi', 'fort', 'jfort', 'spain', 1, '2022-12-20', 0, 0, 0, 'jordi@gmail.com', '12345'),
(3, 'susana', 'gil', 'sgil', 'spain', 1, '2022-12-20', 0, 0, 0, 'susana@gmail.com', '12345'),
(4, 'laura', 'garcia', 'lauddar', 'spain', 1, '2022-12-20', 0, 0, 0, 'laura@gmail.com', '12345'),
(5, 'jose', 'ramon', 'joserra', 'spain', 1, '2022-12-20', 0, 0, 0, 'joserra@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chess_piece`
--
ALTER TABLE `chess_piece`
  ADD PRIMARY KEY (`id_piece`);

--
-- Indices de la tabla `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_games`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chess_piece`
--
ALTER TABLE `chess_piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `games`
--
ALTER TABLE `games`
  MODIFY `id_games` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
