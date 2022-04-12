-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 15-08-2016 a las 19:22:33
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `almacen`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `productos`
-- 

CREATE TABLE `productos` (
  `codigo` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` mediumint(10) NOT NULL,
  `valor` decimal(12,0) NOT NULL,
  `unidad` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `productos`
-- 

INSERT INTO `productos` VALUES (30, 'BANANOS', 10, 3000, 1);
INSERT INTO `productos` VALUES (111, 'HUEVOS GALLO', 10, 3000, 2);
INSERT INTO `productos` VALUES (400, 'GUAYABA', 20, 2000, 1);
INSERT INTO `productos` VALUES (987, 'PRUEBAS ', 30, 40000, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `umedidas`
-- 

CREATE TABLE `umedidas` (
  `codigo` int(2) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `umedidas`
-- 

INSERT INTO `umedidas` VALUES (1, 'LIBRAS');
INSERT INTO `umedidas` VALUES (2, 'KILOGRAMOS');
