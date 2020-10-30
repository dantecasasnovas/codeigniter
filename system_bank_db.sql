-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-10-2020 a las 17:26:50
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `system_bank_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foreign_user`
--

CREATE TABLE `foreign_user` (
  `foreign_id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operators`
--

CREATE TABLE `operators` (
  `operators_id` int NOT NULL,
  `operators_sender` varchar(100) NOT NULL,
  `operators_receiver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaction`
--

CREATE TABLE `transaction` (
  `transa_id` int NOT NULL,
  `description` varchar(100) NOT NULL,
  `transa_time` datetime NOT NULL,
  `transa_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int NOT NULL,
  `wallet_money` decimal(10,0) NOT NULL,
  `wallet_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foreign_user`
--
ALTER TABLE `foreign_user`
  ADD PRIMARY KEY (`foreign_id`),
  ADD UNIQUE KEY `user_user_id` (`user_user_id`);

--
-- Indices de la tabla `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`operators_id`);

--
-- Indices de la tabla `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transa_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD UNIQUE KEY `wallet_user_id` (`wallet_user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foreign_user`
--
ALTER TABLE `foreign_user`
  MODIFY `foreign_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operators`
--
ALTER TABLE `operators`
  MODIFY `operators_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transa_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foreign_user`
--
ALTER TABLE `foreign_user`
  ADD CONSTRAINT `foreign_user` FOREIGN KEY (`user_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_user_id` FOREIGN KEY (`wallet_user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
