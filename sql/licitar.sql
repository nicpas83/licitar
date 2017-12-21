/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100128
Source Host           : localhost:3306
Source Database       : licitar

Target Server Type    : MYSQL
Target Server Version : 100128
File Encoding         : 65001

Date: 2017-12-21 00:29:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `proceso_id` int(11) DEFAULT NULL,
  `rubro_id` int(3) DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `unidad` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `especificaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio_max` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of items
-- ----------------------------

-- ----------------------------
-- Table structure for ofertas
-- ----------------------------
DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `oferta` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ofertas
-- ----------------------------

-- ----------------------------
-- Table structure for procesos
-- ----------------------------
DROP TABLE IF EXISTS `procesos`;
CREATE TABLE `procesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `proceso_nro` int(11) DEFAULT NULL,
  `referencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `visibilidad` int(1) DEFAULT '1',
  `detalles` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `condicion_pago` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `excluyente_factura` int(1) DEFAULT NULL,
  `excluyente_gestion_envio` int(1) DEFAULT NULL,
  `excluyente_costo_envio` int(1) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of procesos
-- ----------------------------

-- ----------------------------
-- Table structure for provincias
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
-- Table structure for rubros
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
-- Table structure for unidades
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
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `razon_social` varchar(30) DEFAULT NULL,
  `cuit` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'nicpas', 'nicpas@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '1', '2017-12-19 08:34:56', '2017-12-19 08:34:56', '1', null, null);
INSERT INTO `users` VALUES ('2', 'vendedor', 'ventas@proveedor.com', '$2a$10$wO54SeuhrQfsJ0ELKfaxMO1ytnuLyaRQElm4ej06O8JaCSg0VGuvK', '2', '2017-12-19 08:35:56', '2017-12-19 08:35:56', '1', null, null);
INSERT INTO `users` VALUES ('3', 'comprador', 'compras@miempresa.com.ar', '$2a$10$W/cbpcG1sNHdyuHM09YzdOquLcckxOMi5e3hO7YMPoJIp2VXcULcm', '1', '2017-12-19 08:36:22', '2017-12-19 08:36:22', '1', null, null);
INSERT INTO `users` VALUES ('4', 'comprador1', 'compras1@miempresa.com.ar', '$2a$10$2jMG9MNLgR7tJBiaxJiYS.u1J5yyz9pGTtRZNLnK0ApXSY95qxcTa', '1', '2017-12-19 08:37:00', '2017-12-19 08:37:00', '1', null, null);
INSERT INTO `users` VALUES ('5', 'vendedor1', 'ventas1@proveedor.com', '$2a$10$PCzmb3pcnKj7ykLt1y8YgOrKY60ci67tWuxiq.Sd4/7FC28vGLrjK', '2', '2017-12-19 08:37:30', '2017-12-19 08:37:30', '1', null, null);
