/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : licitar

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-31 06:43:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `procesos`
-- ----------------------------
DROP TABLE IF EXISTS `procesos`;
CREATE TABLE `procesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `referencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rubro_id` int(3) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `fecha_inicio_subasta` date DEFAULT NULL,
  `hora_inicio_subasta` time DEFAULT NULL,
  `visibilidad` int(1) DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `requisitos` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of procesos
-- ----------------------------

-- ----------------------------
-- Table structure for `productos`
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `referencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rubro_id` int(3) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `fecha_inicio_subasta` date DEFAULT NULL,
  `hora_inicio_subasta` time DEFAULT NULL,
  `visibilidad` int(1) DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `requisitos` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------

-- ----------------------------
-- Table structure for `provincias`
-- ----------------------------
DROP TABLE IF EXISTS `provincias`;
CREATE TABLE `provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of provincias
-- ----------------------------
INSERT INTO `provincias` VALUES ('1', 'Buenos Aires');
INSERT INTO `provincias` VALUES ('2', 'Buenos Aires-GBA');
INSERT INTO `provincias` VALUES ('3', 'Capital Federal');
INSERT INTO `provincias` VALUES ('4', 'Catamarca');
INSERT INTO `provincias` VALUES ('5', 'Chaco');
INSERT INTO `provincias` VALUES ('6', 'Chubut');
INSERT INTO `provincias` VALUES ('7', 'Córdoba');
INSERT INTO `provincias` VALUES ('8', 'Corrientes');
INSERT INTO `provincias` VALUES ('9', 'Entre Ríos');
INSERT INTO `provincias` VALUES ('10', 'Formosa');
INSERT INTO `provincias` VALUES ('11', 'Jujuy');
INSERT INTO `provincias` VALUES ('12', 'La Pampa');
INSERT INTO `provincias` VALUES ('13', 'La Rioja');
INSERT INTO `provincias` VALUES ('14', 'Mendoza');
INSERT INTO `provincias` VALUES ('15', 'Misiones');
INSERT INTO `provincias` VALUES ('16', 'Neuquén');
INSERT INTO `provincias` VALUES ('17', 'Río Negro');
INSERT INTO `provincias` VALUES ('18', 'Salta');
INSERT INTO `provincias` VALUES ('19', 'San Juan');
INSERT INTO `provincias` VALUES ('20', 'San Luis');
INSERT INTO `provincias` VALUES ('21', 'Santa Cruz');
INSERT INTO `provincias` VALUES ('22', 'Santa Fe');
INSERT INTO `provincias` VALUES ('23', 'Santiago del Estero');
INSERT INTO `provincias` VALUES ('24', 'Tierra del Fuego');
INSERT INTO `provincias` VALUES ('25', 'Tucumán');
INSERT INTO `provincias` VALUES ('26', null);

-- ----------------------------
-- Table structure for `rubros`
-- ----------------------------
DROP TABLE IF EXISTS `rubros`;
CREATE TABLE `rubros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of rubros
-- ----------------------------
INSERT INTO `rubros` VALUES ('1', null, null, null, 'AGRIC,GANADERIA,CAZA,SILVICULT', null, '1', null);
INSERT INTO `rubros` VALUES ('2', null, null, null, 'ALQUILER', null, '1', null);
INSERT INTO `rubros` VALUES ('3', null, null, null, 'SEGUROS', null, '1', null);
INSERT INTO `rubros` VALUES ('4', null, null, null, 'CARPINTERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('5', null, null, null, 'CERRAJERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('6', null, null, null, 'CINE/TELVIS./RADIO/FOTOGRAFIA', null, '1', null);
INSERT INTO `rubros` VALUES ('7', null, null, null, 'COMBUSTIBLES Y LUBRICANTES', null, '1', null);
INSERT INTO `rubros` VALUES ('8', null, null, null, 'CONSTRUCCION', null, '1', null);
INSERT INTO `rubros` VALUES ('9', null, null, null, 'ELECTRICIDAD Y TELEFONIA', null, '1', null);
INSERT INTO `rubros` VALUES ('10', null, null, null, 'ELEMENTOS DE LIMPIEZA', null, '1', null);
INSERT INTO `rubros` VALUES ('11', null, null, null, 'EQUIPOS DE OFICINA Y MUEBLES', null, '1', null);
INSERT INTO `rubros` VALUES ('12', null, null, null, 'EQUIPOS DE SEGURIDAD ', null, '1', null);
INSERT INTO `rubros` VALUES ('13', null, null, null, 'EQUIPOS', null, '1', null);
INSERT INTO `rubros` VALUES ('14', null, null, null, 'FERRETERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('15', null, null, null, 'GASES INDUSTRIALES', null, '1', null);
INSERT INTO `rubros` VALUES ('16', null, null, null, 'HERRAMIENTAS', null, '1', null);
INSERT INTO `rubros` VALUES ('17', null, null, null, 'HERRERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('18', null, null, null, 'IMPRENTA Y EDITORIALES', null, '1', null);
INSERT INTO `rubros` VALUES ('19', null, null, null, 'INDUMENT TEXTIL Y CONFECCIONES', null, '1', null);
INSERT INTO `rubros` VALUES ('20', null, null, null, 'INFORMATICA', null, '1', null);
INSERT INTO `rubros` VALUES ('21', null, null, null, 'LIBRERIA,PAP. Y UTILES OFICINA', null, '1', null);
INSERT INTO `rubros` VALUES ('22', null, null, null, 'MATERIALES DE CONSTRUCCION', null, '1', null);
INSERT INTO `rubros` VALUES ('23', null, null, null, 'METALES', null, '1', null);
INSERT INTO `rubros` VALUES ('24', null, null, null, 'METALURGIA', null, '1', null);
INSERT INTO `rubros` VALUES ('25', null, null, null, 'PINTURAS', null, '1', null);
INSERT INTO `rubros` VALUES ('26', null, null, null, 'PROD. MEDICO/FARMACEUTICOS/LAB', null, '1', null);
INSERT INTO `rubros` VALUES ('27', null, null, null, 'PRODUCTOS VETERINARIOS', null, '1', null);
INSERT INTO `rubros` VALUES ('28', null, null, null, 'QUIMICOS', null, '1', null);
INSERT INTO `rubros` VALUES ('29', null, null, null, 'REPUESTOS', null, '1', null);
INSERT INTO `rubros` VALUES ('30', null, null, null, 'SANITARIOS, PLOMERIA Y GAS', null, '1', null);
INSERT INTO `rubros` VALUES ('31', null, null, null, 'SERV. PROFESIONAL Y COMERCIAL', null, '1', null);
INSERT INTO `rubros` VALUES ('32', null, null, null, 'SERVICIOS GENERALES', null, '1', null);
INSERT INTO `rubros` VALUES ('33', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null);
INSERT INTO `rubros` VALUES ('34', null, null, null, 'VIDRIERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('35', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null);
INSERT INTO `rubros` VALUES ('36', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null);
INSERT INTO `rubros` VALUES ('37', null, null, null, 'VIDRIERIA', null, '1', null);
INSERT INTO `rubros` VALUES ('38', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null);

-- ----------------------------
-- Table structure for `rubros_copy`
-- ----------------------------
DROP TABLE IF EXISTS `rubros_copy`;
CREATE TABLE `rubros_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of rubros_copy
-- ----------------------------
INSERT INTO `rubros_copy` VALUES ('1', null, null, null, 'AGRIC,GANADERIA,CAZA,SILVICULT', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('2', null, null, null, 'ALQUILER', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('3', null, null, null, 'SEGUROS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('4', null, null, null, 'CARPINTERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('5', null, null, null, 'CERRAJERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('6', null, null, null, 'CINE/TELVIS./RADIO/FOTOGRAFIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('7', null, null, null, 'COMBUSTIBLES Y LUBRICANTES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('8', null, null, null, 'CONSTRUCCION', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('9', null, null, null, 'ELECTRICIDAD Y TELEFONIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('10', null, null, null, 'ELEMENTOS DE LIMPIEZA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('11', null, null, null, 'EQUIPOS DE OFICINA Y MUEBLES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('12', null, null, null, 'EQUIPOS DE SEGURIDAD ', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('13', null, null, null, 'EQUIPOS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('14', null, null, null, 'FERRETERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('15', null, null, null, 'GASES INDUSTRIALES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('16', null, null, null, 'HERRAMIENTAS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('17', null, null, null, 'HERRERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('18', null, null, null, 'IMPRENTA Y EDITORIALES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('19', null, null, null, 'INDUMENT TEXTIL Y CONFECCIONES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('20', null, null, null, 'INFORMATICA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('21', null, null, null, 'LIBRERIA,PAP. Y UTILES OFICINA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('22', null, null, null, 'MATERIALES DE CONSTRUCCION', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('23', null, null, null, 'METALES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('24', null, null, null, 'METALURGIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('25', null, null, null, 'PINTURAS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('26', null, null, null, 'PROD. MEDICO/FARMACEUTICOS/LAB', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('27', null, null, null, 'PRODUCTOS VETERINARIOS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('28', null, null, null, 'QUIMICOS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('29', null, null, null, 'REPUESTOS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('30', null, null, null, 'SANITARIOS, PLOMERIA Y GAS', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('31', null, null, null, 'SERV. PROFESIONAL Y COMERCIAL', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('32', null, null, null, 'SERVICIOS GENERALES', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('33', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('34', null, null, null, 'VIDRIERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('35', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('36', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('37', null, null, null, 'VIDRIERIA', null, '1', null);
INSERT INTO `rubros_copy` VALUES ('38', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null);

-- ----------------------------
-- Table structure for `unidades`
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES ('1', null, null, null, ' kilogramos', null, null, null);
INSERT INTO `unidades` VALUES ('2', null, null, null, ' metros', null, null, null);
INSERT INTO `unidades` VALUES ('3', null, null, null, ' metros cuadrados', null, null, null);
INSERT INTO `unidades` VALUES ('4', null, null, null, ' metros cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('5', null, null, null, ' litros', null, null, null);
INSERT INTO `unidades` VALUES ('6', null, null, null, ' unidades', null, null, null);
INSERT INTO `unidades` VALUES ('7', null, null, null, ' pares', null, null, null);
INSERT INTO `unidades` VALUES ('8', null, null, null, ' docenas', null, null, null);
INSERT INTO `unidades` VALUES ('9', null, null, null, ' quilates', null, null, null);
INSERT INTO `unidades` VALUES ('10', null, null, null, ' millares', null, null, null);
INSERT INTO `unidades` VALUES ('11', null, null, null, ' gramos', null, null, null);
INSERT INTO `unidades` VALUES ('12', null, null, null, ' milimetros', null, null, null);
INSERT INTO `unidades` VALUES ('13', null, null, null, ' mm cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('14', null, null, null, ' kilómetros', null, null, null);
INSERT INTO `unidades` VALUES ('15', null, null, null, ' hectolitros', null, null, null);
INSERT INTO `unidades` VALUES ('16', null, null, null, ' centímetros', null, null, null);
INSERT INTO `unidades` VALUES ('17', null, null, null, ' cm cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('18', null, null, null, ' toneladas', null, null, null);
INSERT INTO `unidades` VALUES ('19', null, null, null, ' dam cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('20', null, null, null, ' hm cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('21', null, null, null, ' km cúbicos', null, null, null);
INSERT INTO `unidades` VALUES ('22', null, null, null, ' microgramos', null, null, null);
INSERT INTO `unidades` VALUES ('23', null, null, null, ' nanogramos', null, null, null);
INSERT INTO `unidades` VALUES ('24', null, null, null, ' picogramos', null, null, null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'nicpas', 'nicpas@gmail.com', '$2a$10$5Q4j6K9VdIu0uMq2uVvDP.XnZIXbHE2TLyz2tgYHixmrjwDn75hhy', '1', '2017-10-10 21:39:40', '2017-10-10 21:39:40', '1');
INSERT INTO `users` VALUES ('2', 'daniel', 'segu@dsf', '$2a$10$ZRgjJVtuznys3F5Ixfl66u.QUi5One7gVTAxjAskE.Julzx9WeSNe', '1', '2017-10-10 23:36:17', '2017-10-10 23:36:17', '1');
INSERT INTO `users` VALUES ('3', 'asdasdf', 'ojoij@zdzfsd', '$2a$10$4/aMVocxilm4zcZBA2zU5OL9Ecw9ZFhUwIUo/eK6/x5lHih7OIZru', '1', '2017-10-10 23:54:43', '2017-10-10 23:54:43', '1');
INSERT INTO `users` VALUES ('4', 'dsfsd', 'ojoij@zddsffd', '$2a$10$BazTBRnUKU7BlMbw6tbK9emvS065UY74wDBnaOcWOxZp1Pi5qsaJ.', '1', '2017-10-10 23:58:39', '2017-10-10 23:58:39', '1');
INSERT INTO `users` VALUES ('5', 'huhu', 'nicp@sdfsd', '$2a$10$lis6iK4oL.B/NWXcFWT7NemloCOcecFiKUjeJSI80T0c1q5SVW6W6', '1', '2017-10-11 03:11:56', '2017-10-11 03:11:56', '1');
