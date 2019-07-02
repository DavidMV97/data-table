-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 28-06-2019 a las 22:23:28
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `paginacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `articulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`) VALUES
(1, 'e centuries, but also the leap into electroni'),
(2, 'ok like readable English. Many '),
(3, 'web sites still in their infancy. Various versions hav'),
(4, 'ok like readable English. Many '),
(5, 'nd to repeat predefined chunks as necessary, m'),
(6, ' combined with a handful of model sentence '),
(7, 'e, discovered the undoubtable source. Lorem Ipsum '),
(8, ' combined with a handful of model sentence '),
(9, 'his book is a treatise on the theory of ethics, very popula'),
(10, 'web sites still in their infancy. Various versions hav'),
(11, 'njected humour, or non-characteristic words etc.'),
(12, 'de Finibus Bonorum et Malorum\" by Cicero are also '),
(13, 'is simply dummy text of the printing and typesetting '),
(14, 'e when looking at its layout. The point'),
(15, 'd to repeat predefined chunks as necessary, making'),
(16, 'many variations of passages of Lorem Ipsum '),
(17, 'versions from the 1914 translation by H. \r\n'),
(18, 'years, sometimes by accident, sometimes on purpose '),
(19, 'pposed to using \'Content here, content here\', '),
(20, 'since the 1500s, when an unknown printer took a galle');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;