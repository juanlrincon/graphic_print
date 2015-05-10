-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2010 a las 17:43:32
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fuerza_grafica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidades`
--

CREATE TABLE IF NOT EXISTS `cantidades` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `cotizacion_id` int(11) NOT NULL,
  `cantidad` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `cantidades`
--

INSERT INTO `cantidades` (`id`, `cotizacion_id`, `cantidad`) VALUES
(1, 1, 100),
(2, 0, 200),
(3, 0, 200),
(4, 0, 789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `ciudad` varchar(64) NOT NULL,
  `estado_id` int(10) unsigned NOT NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`, `estado_id`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Monterrey', 1, 1, '2010-06-16 00:00:01', 1, '2010-06-16 00:00:01', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `contacto_id` int(11) default NULL,
  `pais_id` int(11) default NULL,
  `sucursal_id` int(11) default NULL,
  `plaza_id` int(11) default NULL,
  `vendedor_id` int(11) default NULL,
  `recepcion_material_id` int(11) default NULL,
  `recepcion_factura_id` int(11) default NULL,
  `entrega_cheque_id` int(11) default NULL,
  `agente_id` int(11) default NULL,
  `nombre` varchar(255) NOT NULL,
  `nombre_comercial` text,
  `colonia` varchar(128) default NULL,
  `rfc` varchar(13) default NULL,
  `no_ext` varchar(10) default NULL,
  `calle` varchar(255) default NULL,
  `codigo_postal` int(11) default NULL,
  `razon_social` text,
  `no_int` int(11) default NULL,
  `ciudad` varchar(128) default NULL,
  `estado` varchar(128) default NULL,
  `comentarios` text,
  `fecha_registro` date default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `contacto_id`, `pais_id`, `sucursal_id`, `plaza_id`, `vendedor_id`, `recepcion_material_id`, `recepcion_factura_id`, `entrega_cheque_id`, `agente_id`, `nombre`, `nombre_comercial`, `colonia`, `rfc`, `no_ext`, `calle`, `codigo_postal`, `razon_social`, `no_int`, `ciudad`, `estado`, `comentarios`, `fecha_registro`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 1, 1, 1, 1, 3, 0, 0, 0, 1, 'nombre 1', 'prueba 1', 'colonia', 'rfc', '12', 'y', 0, 'gh', 0, 'hj', '', 'hj', '2010-05-01', 1, '2010-06-17 16:17:24', 1, '2010-06-17 16:17:24', '1'),
(2, 1, 1, 1, 1, 3, 0, 0, 0, 1, 'nombre 2', 'prueba 2', 'colonia', 'rfc', '12', 'y', 0, 'gh', 0, 'hj', '', 'hj', '2010-05-01', 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `titulo` varchar(45) default NULL,
  `nombre` varchar(45) default NULL,
  `ap_paterno` varchar(45) default NULL,
  `ap_materno` varchar(45) default NULL,
  `telefono` varchar(45) default NULL,
  `extension` varchar(45) default NULL,
  `celular` varchar(45) default NULL,
  `email` varchar(45) default NULL,
  `genero` varchar(45) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `titulo`, `nombre`, `ap_paterno`, `ap_materno`, `telefono`, `extension`, `celular`, `email`, `genero`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'sr', 'contacto', 'apellido 1', 'app 2', '121212', '12', '21', '21', '212', 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE IF NOT EXISTS `cotizaciones` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `cliente_id` int(11) default NULL,
  `proyecto_id` int(11) default NULL,
  `cantidad_id` int(11) default NULL,
  `papeles_cotizacion_id` int(11) default NULL,
  `fecha` datetime default NULL,
  `comentarios_inicial` text,
  `comentarios_general` text,
  `archivo_digital` tinyint(1) default NULL,
  `archivo` varchar(128) default NULL,
  `fotos` tinyint(1) default NULL,
  `muestra` tinyint(1) default NULL,
  `otro` tinyint(1) default NULL,
  `proporciona_otro` text,
  `comision` tinyint(2) default '0',
  `comentarios_proyecto` text,
  `pruebas_color` int(11) default NULL,
  `correccion_color` text,
  `tiempo_diseno` text,
  `comentarios_diseno` text,
  `tipo_impresion` enum('OFFSET','DIGITAL','OFFSET CON DATO VARIABLE','DATO VARIABLE COLOR NEGRO') default NULL,
  `medida_extendida` int(11) default NULL,
  `medida_final` int(11) default NULL,
  `otro_tipo_papel` varchar(128) default NULL,
  `papel_tipo` enum('BRILLANTE','MATE') default NULL,
  `papel_caras` enum('C1S','C2S') default NULL,
  `comentarios_impresion` text,
  `tintas_frente` tinyint(2) default NULL,
  `seleccion_frente` tinyint(1) default NULL,
  `plasta_frente` tinyint(1) default NULL,
  `rebases_frente` enum('SI','NO') default NULL,
  `tintas_vuelta` tinyint(2) default NULL,
  `seleccion_vuelta` tinyint(1) default NULL,
  `plasta_vuelta` tinyint(1) default NULL,
  `rebases_vuelta` enum('SI','NO') default NULL,
  `comentarios_tintas` text,
  `barniz_torre_frente` enum('BRILLANTE','MATE') default 'MATE',
  `barniz_torre_vuelta` enum('BRILLANTE','MATE') default NULL,
  `barniz_uv_frente` enum('REGISTRO','PAREJO') default NULL,
  `barniz_uv_vuelta` enum('REGISTRO','PAREJO') default NULL,
  `barniz_uv_frente_tipo` enum('BRILLANTE','MATE') default NULL,
  `barniz_uv_vuelta_tipo` enum('BRILLANTE','MATE') default NULL,
  `cotizar_barniz_uv` enum('SI','NO') default NULL,
  `comentarios_barniz` text,
  `plastificado_frente` enum('BRILLANTE','MATE') default 'MATE',
  `plastificado_vuelta` enum('BRILLANTE','MATE') default 'MATE',
  `comentarios_plastificado` text,
  `corte_suaje` tinyint(1) default NULL,
  `semicorte_suaje` tinyint(1) default NULL,
  `perforado` tinyint(1) default NULL,
  `marca_suaje` tinyint(1) default NULL,
  `botado` tinyint(1) default NULL,
  `hoststamping` tinyint(1) default NULL,
  `origen_suaje` enum('NUEVO','EXISTENTE') default 'NUEVO',
  `origen_cliche` enum('NUEVO','EXISTENTE') default 'NUEVO',
  `solapas_proyecto` varchar(1) default NULL,
  `comentarios_troquelado` text,
  `tipo_pegado_gral` enum('HOTMELT','GOMA BLANCA','GOMA ROJA','CINTA DOBLE CARA') default 'HOTMELT',
  `ancho_cinta_gral` enum('1/2','3/4','1') default '3/4',
  `largo_cinta_gral` int(11) default NULL,
  `tipo_pegado_folder` enum('HOTMELT','GOMA BLANCA','CINTA DOBLE CARA') default 'HOTMELT',
  `ancho_cinta_folder` enum('1/2','3/4','1') default NULL,
  `largo_cinta_folder` int(11) default NULL,
  `tipo_pegado_caja` enum('HOTMELT','GOMA BLANCA','CINTA DOBLE CARA') default 'HOTMELT',
  `ancho_cinta_caja` enum('1/2','3/4','1') default '3/4',
  `largo_cinta_caja` int(11) default NULL,
  `tipo_pegado_blocks` enum('GOMA BLANCA','GOMA ROJA','UNA GRAPA') default NULL,
  `cantidad_hojas_block` int(11) default NULL,
  `comentarios_armado` text,
  `encuadernado` enum('WIRE-O','HOTMELT','DOS GRAPAS','3 GRAPAS OMEGA','COSIDO + HOTMELT') default 'DOS GRAPAS',
  `posicion_encuadernado` text,
  `color_encuadernado` enum('NIQUELADO','NEGRO','BLANCO','OTRO') default 'NIQUELADO',
  `otro_color_encuadernado` text,
  `comentarios_encuadernado` text,
  `folio_inicio` int(11) default NULL,
  `folio_fin` int(11) default NULL,
  `color_folio` enum('NEGRO','ROJO','OTRO') default NULL,
  `otro_color_folio` text,
  `folio_palabra_no` varchar(2) default NULL,
  `comentarios_folio` text,
  `orificios` tinyint(1) default NULL,
  `comentarios_ponchado` text,
  `dobleces_eje1` tinyint(2) default NULL,
  `dobleces_eje2` tinyint(2) default NULL,
  `comentarios_doblado` text,
  `redondeado` tinyint(1) default NULL,
  `comentarios_redondeado` text,
  `papel_kraft` tinyint(1) default NULL,
  `impresos_paquete` int(11) default NULL,
  `fajillas` int(11) default NULL,
  `caja_rotulada` tinyint(1) default NULL,
  `caja_sin_rotular` tinyint(1) default NULL,
  `emplayada` tinyint(1) default NULL,
  `esquineros` tinyint(1) default NULL,
  `fleje` tinyint(1) default NULL,
  `comentarios_empaque` text,
  `distribucion` text,
  `comentarios_distribucion` text,
  `sellar_bolsa` int(11) default NULL,
  `cantidad_sellar` int(11) default NULL,
  `comentarios_bolsa` text,
  `emplayado_calor` tinyint(1) default NULL,
  `emplayado_pasadas` int(11) default NULL,
  `comentarios_emplayado` text,
  `ojillo` tinyint(1) default NULL,
  `color_ojillo` enum('NEGRO','NIQUELADO','ORO','OTRO') default NULL,
  `otro_color_ojillo` varchar(128) default NULL,
  `tipo_ojillo` enum('K19','11 Z','MINI 2X5','OTRO') default NULL,
  `otro_tipo_ojillo` varchar(128) default NULL,
  `comentarios_ojillo` text,
  `plastiflecha` tinyint(1) default NULL,
  `longitud_plastiflecha` enum('3 in','5 in','9 in') default NULL,
  `comentarios_plastiflecha` text,
  `poste_aluminio` tinyint(1) default NULL,
  `longitud_poste_aluminio` enum('6 MM','9 MM','12 MM') default NULL,
  `comentarios_postes` text,
  `velcro` tinyint(1) default NULL,
  `cantidad_velcro` tinyint(2) default NULL,
  `tira_velcro` tinyint(1) default NULL,
  `cantidad_tira_velcro` int(11) default NULL,
  `comentarios_velcro` text,
  `herraje` tinyint(1) default NULL,
  `tipo_heraje` text,
  `comentarios_herraje` text,
  `foam` tinyint(1) default NULL,
  `medida_foam` enum('1.2X1.2 CM','1.8X1.8 CM','2.5X2.5 CM') default NULL,
  `piezas_foam` tinyint(2) default NULL,
  `tiras_foam` tinyint(1) default NULL,
  `centimetros_tira_foam` int(11) default NULL,
  `esquinas_foam` tinyint(1) default NULL,
  `comentarios_foam` text,
  `corte_recto` tinyint(1) default NULL,
  `comentarios_corte` text,
  `iman` tinyint(1) default NULL,
  `centimetros_iman` int(11) default NULL,
  `esquinas_iman` tinyint(1) default NULL,
  `comentarios_iman` text,
  `termorealzado` tinyint(1) default NULL,
  `lados_termorealzado` tinyint(1) default NULL,
  `comentarios_termo` text,
  `otros_acabados` tinyint(1) default NULL,
  `otros_acabados_descripcion` text,
  `comentarios_acabados` text,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned default NULL,
  `modified` datetime default NULL,
  `estatus` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id`, `cliente_id`, `proyecto_id`, `cantidad_id`, `papeles_cotizacion_id`, `fecha`, `comentarios_inicial`, `comentarios_general`, `archivo_digital`, `archivo`, `fotos`, `muestra`, `otro`, `proporciona_otro`, `comision`, `comentarios_proyecto`, `pruebas_color`, `correccion_color`, `tiempo_diseno`, `comentarios_diseno`, `tipo_impresion`, `medida_extendida`, `medida_final`, `otro_tipo_papel`, `papel_tipo`, `papel_caras`, `comentarios_impresion`, `tintas_frente`, `seleccion_frente`, `plasta_frente`, `rebases_frente`, `tintas_vuelta`, `seleccion_vuelta`, `plasta_vuelta`, `rebases_vuelta`, `comentarios_tintas`, `barniz_torre_frente`, `barniz_torre_vuelta`, `barniz_uv_frente`, `barniz_uv_vuelta`, `barniz_uv_frente_tipo`, `barniz_uv_vuelta_tipo`, `cotizar_barniz_uv`, `comentarios_barniz`, `plastificado_frente`, `plastificado_vuelta`, `comentarios_plastificado`, `corte_suaje`, `semicorte_suaje`, `perforado`, `marca_suaje`, `botado`, `hoststamping`, `origen_suaje`, `origen_cliche`, `solapas_proyecto`, `comentarios_troquelado`, `tipo_pegado_gral`, `ancho_cinta_gral`, `largo_cinta_gral`, `tipo_pegado_folder`, `ancho_cinta_folder`, `largo_cinta_folder`, `tipo_pegado_caja`, `ancho_cinta_caja`, `largo_cinta_caja`, `tipo_pegado_blocks`, `cantidad_hojas_block`, `comentarios_armado`, `encuadernado`, `posicion_encuadernado`, `color_encuadernado`, `otro_color_encuadernado`, `comentarios_encuadernado`, `folio_inicio`, `folio_fin`, `color_folio`, `otro_color_folio`, `folio_palabra_no`, `comentarios_folio`, `orificios`, `comentarios_ponchado`, `dobleces_eje1`, `dobleces_eje2`, `comentarios_doblado`, `redondeado`, `comentarios_redondeado`, `papel_kraft`, `impresos_paquete`, `fajillas`, `caja_rotulada`, `caja_sin_rotular`, `emplayada`, `esquineros`, `fleje`, `comentarios_empaque`, `distribucion`, `comentarios_distribucion`, `sellar_bolsa`, `cantidad_sellar`, `comentarios_bolsa`, `emplayado_calor`, `emplayado_pasadas`, `comentarios_emplayado`, `ojillo`, `color_ojillo`, `otro_color_ojillo`, `tipo_ojillo`, `otro_tipo_ojillo`, `comentarios_ojillo`, `plastiflecha`, `longitud_plastiflecha`, `comentarios_plastiflecha`, `poste_aluminio`, `longitud_poste_aluminio`, `comentarios_postes`, `velcro`, `cantidad_velcro`, `tira_velcro`, `cantidad_tira_velcro`, `comentarios_velcro`, `herraje`, `tipo_heraje`, `comentarios_herraje`, `foam`, `medida_foam`, `piezas_foam`, `tiras_foam`, `centimetros_tira_foam`, `esquinas_foam`, `comentarios_foam`, `corte_recto`, `comentarios_corte`, `iman`, `centimetros_iman`, `esquinas_iman`, `comentarios_iman`, `termorealzado`, `lados_termorealzado`, `comentarios_termo`, `otros_acabados`, `otros_acabados_descripcion`, `comentarios_acabados`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 1, 1, 1, NULL, '2010-05-04 12:47:00', '', '', 0, '', 0, 0, 0, '', NULL, '', NULL, '', '', '', 'OFFSET', NULL, NULL, '', 'BRILLANTE', 'C1S', '', NULL, 0, 0, 'SI', NULL, 0, 0, 'SI', '', 'BRILLANTE', 'BRILLANTE', 'REGISTRO', 'REGISTRO', 'BRILLANTE', 'BRILLANTE', 'SI', '', 'BRILLANTE', 'BRILLANTE', '', 0, 0, 0, 0, 0, 0, 'NUEVO', 'NUEVO', '', '', 'HOTMELT', '1/2', NULL, 'HOTMELT', '1/2', NULL, 'HOTMELT', '1/2', NULL, 'GOMA BLANCA', NULL, '', 'WIRE-O', '', 'NIQUELADO', '', '', NULL, NULL, 'NEGRO', '', '', '', 0, '', NULL, NULL, '', 0, '', 0, NULL, NULL, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, '', 0, NULL, '', 0, 'NEGRO', '', 'K19', '', '', 0, '3 in', '', 0, '6 MM', '', 0, NULL, 0, NULL, '', 0, '', '', 0, '1.2X1.2 CM', NULL, 0, NULL, 0, '', 0, '', 0, NULL, 0, '', 0, 0, '', 0, '', '', 1, '2010-05-04 12:50:21', 1, '2010-05-04 12:50:21', 1),
(2, 1, 1, 1, NULL, '2010-05-04 17:57:00', '', '', 0, '', 0, 0, 0, '', NULL, '', NULL, '', '', '', 'OFFSET', NULL, NULL, '', 'BRILLANTE', 'C1S', '', NULL, 0, 0, 'SI', NULL, 0, 0, 'SI', '', 'BRILLANTE', 'BRILLANTE', 'REGISTRO', 'REGISTRO', 'BRILLANTE', 'BRILLANTE', 'SI', '', 'BRILLANTE', 'BRILLANTE', '', 0, 0, 0, 0, 0, 0, 'NUEVO', 'NUEVO', '', '', 'HOTMELT', '1/2', NULL, 'HOTMELT', '1/2', NULL, 'HOTMELT', '1/2', NULL, 'GOMA BLANCA', NULL, '', 'WIRE-O', '', 'NIQUELADO', '', '', NULL, NULL, 'NEGRO', '', '', '', 0, '', NULL, NULL, '', 0, '', 0, NULL, NULL, 0, 0, 0, 0, 0, '', '', '', NULL, NULL, '', 0, NULL, '', 0, 'NEGRO', '', 'K19', '', '', 0, '3 in', '', 0, '6 MM', '', 0, NULL, 0, NULL, '', 0, '', '', 0, '1.2X1.2 CM', NULL, 0, NULL, 0, '', 0, '', 0, NULL, 0, '', 0, 0, '', 0, '', '', 1, '2010-05-04 18:31:24', 1, '2010-05-04 18:31:24', 1),
(3, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MATE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MATE', 'MATE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NUEVO', 'NUEVO', NULL, NULL, 'HOTMELT', '3/4', NULL, 'HOTMELT', NULL, NULL, 'HOTMELT', '3/4', NULL, NULL, NULL, NULL, 'DOS GRAPAS', NULL, 'NIQUELADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2010-07-09 12:41:28', NULL, '2010-07-09 12:41:28', NULL),
(4, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'OFFSET', 0, NULL, '', 'BRILLANTE', 'C1S', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MATE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MATE', 'MATE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NUEVO', 'NUEVO', NULL, NULL, 'HOTMELT', '3/4', NULL, 'HOTMELT', NULL, NULL, 'HOTMELT', '3/4', NULL, NULL, NULL, NULL, 'DOS GRAPAS', NULL, 'NIQUELADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2010-07-09 12:44:15', NULL, '2010-07-09 12:44:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(128) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Departamento 1', 0, NULL, 0, NULL, NULL),
(2, 'prueba', 0, '2010-06-17 11:01:34', 0, '2010-06-17 11:07:30', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega_cheques`
--

CREATE TABLE IF NOT EXISTS `entrega_cheques` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `dia` varchar(45) default NULL,
  `hora_inicio` varchar(45) default NULL,
  `hora_fin` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `entrega_cheques`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `estado` varchar(64) NOT NULL,
  `pais_id` int(11) unsigned NOT NULL,
  `created_id` int(11) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(11) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`, `pais_id`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'estado 1', 1, 1, '2010-03-10 16:50:40', 0, '2010-03-10 16:53:22', '1'),
(2, '', 1, 1, '2010-03-10 16:55:32', 0, '2010-03-12 19:43:30', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Administrador', 0, '2010-03-10 17:41:41', 0, '2010-03-10 17:41:41', '1'),
(2, 'grupo 2', 0, '2010-03-10 19:44:24', 0, '2010-03-10 19:44:24', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `pais` varchar(64) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `pais`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'nuevo pais', 1, '2010-03-10 01:43:02', 1, '2010-03-10 01:43:02', '1'),
(2, 'Nuevo pais', 1, '2010-04-30 19:05:56', 1, '2010-04-30 19:05:56', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papel`
--

CREATE TABLE IF NOT EXISTS `papel` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(256) default NULL,
  `medida1` int(11) default NULL,
  `medida2` int(11) default NULL,
  `medida4` int(11) default NULL,
  `medida3` int(11) default NULL,
  `tipo` enum('BRILLANTE','MATE') default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `papel`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papeles_cotizaciones`
--

CREATE TABLE IF NOT EXISTS `papeles_cotizaciones` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `papel_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `papeles_cotizaciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(128) default NULL,
  `ver_info_usuarios` binary(1) default NULL,
  `ver_info_financiera` binary(1) default NULL,
  `ver_info_perfiles` binary(1) default NULL,
  `editar_info_usuarios` binary(1) default NULL,
  `editar_info_financiera` binary(1) default NULL,
  `editar_info_perfiles` binary(1) default NULL,
  `eliminar_info_usuarios` binary(1) default NULL,
  `eliminar_info_perfiles` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfiles`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int(1) unsigned NOT NULL auto_increment,
  `rol_id` int(11) NOT NULL,
  `p1` tinyint(1) NOT NULL,
  `p2` tinyint(1) NOT NULL,
  `p3` tinyint(1) NOT NULL,
  `p4` tinyint(1) NOT NULL,
  `p5` tinyint(1) NOT NULL,
  `p6` tinyint(1) NOT NULL,
  `p7` tinyint(1) NOT NULL,
  `p8` tinyint(1) NOT NULL,
  `p9` tinyint(1) NOT NULL,
  `p10` tinyint(1) NOT NULL,
  `p11` tinyint(1) NOT NULL,
  `p12` tinyint(1) NOT NULL,
  `p13` tinyint(1) NOT NULL,
  `p14` tinyint(1) NOT NULL,
  `p15` tinyint(1) NOT NULL,
  `p16` tinyint(1) NOT NULL,
  `p17` tinyint(1) NOT NULL,
  `p18` tinyint(1) NOT NULL,
  `p19` tinyint(1) NOT NULL,
  `p20` tinyint(1) NOT NULL,
  `p21` tinyint(1) NOT NULL,
  `p22` tinyint(1) NOT NULL,
  `p23` tinyint(1) NOT NULL,
  `p24` tinyint(1) NOT NULL,
  `p25` tinyint(1) NOT NULL,
  `p26` tinyint(1) NOT NULL,
  `p27` tinyint(1) NOT NULL,
  `p28` tinyint(1) NOT NULL,
  `p29` tinyint(1) NOT NULL,
  `p30` tinyint(1) NOT NULL,
  `p31` tinyint(1) NOT NULL,
  `p32` tinyint(1) NOT NULL,
  `p33` tinyint(1) NOT NULL,
  `p34` tinyint(1) NOT NULL,
  `p35` tinyint(1) NOT NULL,
  `p36` tinyint(1) NOT NULL,
  `p37` tinyint(1) NOT NULL,
  `p38` tinyint(1) NOT NULL,
  `p39` tinyint(1) NOT NULL,
  `p40` tinyint(1) NOT NULL,
  `p41` tinyint(1) NOT NULL,
  `p42` tinyint(1) NOT NULL,
  `p43` tinyint(1) NOT NULL,
  `p44` tinyint(1) NOT NULL,
  `p45` tinyint(1) NOT NULL,
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol_id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`, `p41`, `p42`, `p43`, `p44`, `p45`, `created`, `modified`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, '2010-04-15 12:04:05', '2010-04-23 17:47:05'),
(2, 4, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2010-04-15 12:04:05', '2010-04-23 20:31:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazas`
--

CREATE TABLE IF NOT EXISTS `plazas` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `plazas`
--

INSERT INTO `plazas` (`id`, `nombre`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Plaza 1', 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'proyecto 1', 1, '2010-05-01 00:51:53', 1, '2010-05-01 00:51:53', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE IF NOT EXISTS `puestos` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nombre` varchar(128) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `nombre`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Vendedor', 0, NULL, 0, NULL, NULL),
(2, 'Agente', 0, NULL, 0, NULL, NULL),
(3, 'puesto1', 0, NULL, 0, NULL, NULL),
(4, 'puesto1', 0, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion_facturas`
--

CREATE TABLE IF NOT EXISTS `recepcion_facturas` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `dia` varchar(45) default NULL,
  `hora_inicio` varchar(45) default NULL,
  `hora_fin` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `recepcion_facturas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion_materiales`
--

CREATE TABLE IF NOT EXISTS `recepcion_materiales` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `dia` varchar(45) default NULL,
  `hora_inicio` varchar(45) default NULL,
  `hora_fin` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `recepcion_materiales`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(30) NOT NULL,
  `mensaje` text NOT NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Lista de roles para usuarios' AUTO_INCREMENT=40 ;

--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `mensaje`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'Administrador', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:35:05', 1, '2010-04-09 17:35:00', '1'),
(2, 'Director', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:36:00', 1, '2010-04-14 15:39:10', '1'),
(3, 'Vendedor', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:37:00', 1, '2010-04-09 17:37:00', '1'),
(4, 'Instructor', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:38:00', 1, '2010-04-09 17:38:00', '1'),
(5, 'Asistente de Ventas', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:39:00', 1, '2010-04-09 17:39:00', '1'),
(6, 'Participante', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:40:00', 1, '2010-04-09 17:40:00', '1'),
(11, 'algo', 'Bienvenido al administrador de contenidos', 0, '2010-04-09 17:41:00', 0, '2010-04-09 17:41:00', '1'),
(12, 'otro rol', 'Bienvenido al administrador de contenidos', 1, '2010-04-09 17:52:19', 1, '2010-04-15 19:48:15', '1'),
(39, 'Rol de prueba', 'Bienvenido al administrador de contenidos', 1, '2010-04-23 09:58:49', 0, '2010-04-23 09:58:49', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `pais_id` int(11) default NULL,
  `nombre` varchar(128) default NULL,
  `calle` varchar(255) default NULL,
  `no_ext` varchar(10) default NULL,
  `no_int` varchar(10) default NULL,
  `colonia` varchar(128) default NULL,
  `ciudad` varchar(128) default NULL,
  `codigo_postal` int(6) default NULL,
  `estado` varchar(128) default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned NOT NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `pais_id`, `nombre`, `calle`, `no_ext`, `no_int`, `colonia`, `ciudad`, `codigo_postal`, `estado`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 1, 'nueva sucursal', 'calle', '110', '1', 'colonia', 'ciudad', 8745, 'dfdfg', 1, '2010-04-30 21:22:51', 1, '2010-04-30 21:39:49', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `puesto_id` int(11) default NULL,
  `departamento_id` int(11) default NULL,
  `plaza_id` int(11) default NULL,
  `rol_id` int(11) default NULL,
  `titulo` varchar(128) default NULL,
  `nombre` varchar(128) default NULL,
  `ap_paterno` varchar(128) default NULL,
  `ap_materno` varchar(128) default NULL,
  `calle` varchar(255) default NULL,
  `no_ext` varchar(10) default NULL,
  `no_int` varchar(10) default NULL,
  `colonia` varchar(128) default NULL,
  `ciudad` varchar(128) default NULL,
  `codigo_postal` int(6) default NULL,
  `estado` varchar(128) default NULL,
  `email_personal` varchar(50) default NULL,
  `email_empresa` varchar(50) default NULL,
  `telefono1` varchar(15) default NULL,
  `telefono2` varchar(15) default NULL,
  `celular` varchar(15) default NULL,
  `nextel` varchar(15) default NULL,
  `fecha_nacimiento` date default NULL,
  `fotografia` varchar(128) default NULL,
  `notas` text,
  `no_empleado` bigint(20) default NULL,
  `nomina` varchar(128) default NULL,
  `no_seguro_social` varchar(20) default NULL,
  `fecha_ingreso` date default NULL,
  `created_id` int(10) unsigned NOT NULL,
  `created` datetime default NULL,
  `modified_id` int(10) unsigned default NULL,
  `modified` datetime default NULL,
  `estatus` binary(1) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idusuario_UNIQUE` (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `puesto_id`, `departamento_id`, `plaza_id`, `rol_id`, `titulo`, `nombre`, `ap_paterno`, `ap_materno`, `calle`, `no_ext`, `no_int`, `colonia`, `ciudad`, `codigo_postal`, `estado`, `email_personal`, `email_empresa`, `telefono1`, `telefono2`, `celular`, `nextel`, `fecha_nacimiento`, `fotografia`, `notas`, `no_empleado`, `nomina`, `no_seguro_social`, `fecha_ingreso`, `created_id`, `created`, `modified_id`, `modified`, `estatus`) VALUES
(1, 'juanlrincon', '03dd154c192b3c027b71678720e8b1ed373c208a', 2, 1, 1, 1, '', 'Juan Luis', 'Rincon', 'Garza', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '2010-07-06', '', '', NULL, '', '', '2010-07-06', 1, '2010-07-06 15:58:22', NULL, '2010-07-06 15:58:22', '1');
