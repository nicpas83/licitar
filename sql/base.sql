/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : licitar

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-11 00:42:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `procesos`
-- ----------------------------
DROP TABLE IF EXISTS `procesos`;
CREATE TABLE `procesos` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`created`  date NULL DEFAULT NULL ,
`modified`  date NULL DEFAULT NULL ,
`user_id`  int(11) NULL DEFAULT NULL ,
`referencia`  varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`rubro_id`  int(3) NULL DEFAULT NULL ,
`fecha_publicacion`  date NULL DEFAULT NULL ,
`fecha_inicio_subasta`  date NULL DEFAULT NULL ,
`hora_inicio_subasta`  time NULL DEFAULT NULL ,
`visibilidad`  int(1) NULL DEFAULT NULL ,
`descripcion`  text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL ,
`requisitos`  text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of procesos
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `productos`
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`created`  date NULL DEFAULT NULL ,
`modified`  date NULL DEFAULT NULL ,
`user_id`  int(11) NULL DEFAULT NULL ,
`referencia`  varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`rubro_id`  int(3) NULL DEFAULT NULL ,
`fecha_publicacion`  date NULL DEFAULT NULL ,
`fecha_inicio_subasta`  date NULL DEFAULT NULL ,
`hora_inicio_subasta`  time NULL DEFAULT NULL ,
`visibilidad`  int(1) NULL DEFAULT NULL ,
`descripcion`  text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL ,
`requisitos`  text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of productos
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `rubros`
-- ----------------------------
DROP TABLE IF EXISTS `rubros`;
CREATE TABLE `rubros` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`created`  date NULL DEFAULT NULL ,
`modified`  date NULL DEFAULT NULL ,
`user_id`  int(11) NULL DEFAULT NULL ,
`nombre`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`descripcion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`estado`  int(1) NULL DEFAULT NULL ,
`orden`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci
AUTO_INCREMENT=39

;

-- ----------------------------
-- Records of rubros
-- ----------------------------
BEGIN;
INSERT INTO `rubros` VALUES ('1', null, null, null, 'AGRIC,GANADERIA,CAZA,SILVICULT', null, '1', null), ('2', null, null, null, 'ALQUILER', null, '1', null), ('3', null, null, null, 'SEGUROS', null, '1', null), ('4', null, null, null, 'CARPINTERIA', null, '1', null), ('5', null, null, null, 'CERRAJERIA', null, '1', null), ('6', null, null, null, 'CINE/TELVIS./RADIO/FOTOGRAFIA', null, '1', null), ('7', null, null, null, 'COMBUSTIBLES Y LUBRICANTES', null, '1', null), ('8', null, null, null, 'CONSTRUCCION', null, '1', null), ('9', null, null, null, 'ELECTRICIDAD Y TELEFONIA', null, '1', null), ('10', null, null, null, 'ELEMENTOS DE LIMPIEZA', null, '1', null), ('11', null, null, null, 'EQUIPOS DE OFICINA Y MUEBLES', null, '1', null), ('12', null, null, null, 'EQUIPOS DE SEGURIDAD ', null, '1', null), ('13', null, null, null, 'EQUIPOS', null, '1', null), ('14', null, null, null, 'FERRETERIA', null, '1', null), ('15', null, null, null, 'GASES INDUSTRIALES', null, '1', null), ('16', null, null, null, 'HERRAMIENTAS', null, '1', null), ('17', null, null, null, 'HERRERIA', null, '1', null), ('18', null, null, null, 'IMPRENTA Y EDITORIALES', null, '1', null), ('19', null, null, null, 'INDUMENT TEXTIL Y CONFECCIONES', null, '1', null), ('20', null, null, null, 'INFORMATICA', null, '1', null), ('21', null, null, null, 'LIBRERIA,PAP. Y UTILES OFICINA', null, '1', null), ('22', null, null, null, 'MATERIALES DE CONSTRUCCION', null, '1', null), ('23', null, null, null, 'METALES', null, '1', null), ('24', null, null, null, 'METALURGIA', null, '1', null), ('25', null, null, null, 'PINTURAS', null, '1', null), ('26', null, null, null, 'PROD. MEDICO/FARMACEUTICOS/LAB', null, '1', null), ('27', null, null, null, 'PRODUCTOS VETERINARIOS', null, '1', null), ('28', null, null, null, 'QUIMICOS', null, '1', null), ('29', null, null, null, 'REPUESTOS', null, '1', null), ('30', null, null, null, 'SANITARIOS, PLOMERIA Y GAS', null, '1', null), ('31', null, null, null, 'SERV. PROFESIONAL Y COMERCIAL', null, '1', null), ('32', null, null, null, 'SERVICIOS GENERALES', null, '1', null), ('33', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null), ('34', null, null, null, 'VIDRIERIA', null, '1', null), ('35', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null), ('36', null, null, null, 'TRANSPORTE Y DEPOSITO', null, '1', null), ('37', null, null, null, 'VIDRIERIA', null, '1', null), ('38', null, null, null, 'SERVICIO DE VIGILANCIA Y SEGURIDAD', null, '1', null);
COMMIT;

-- ----------------------------
-- Table structure for `unidades`
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`created`  date NULL DEFAULT NULL ,
`modified`  date NULL DEFAULT NULL ,
`user_id`  int(11) NULL DEFAULT NULL ,
`nombre`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`descripcion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
`estado`  int(1) NULL DEFAULT NULL ,
`orden`  varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci
AUTO_INCREMENT=25

;

-- ----------------------------
-- Records of unidades
-- ----------------------------
BEGIN;
INSERT INTO `unidades` VALUES ('1', null, null, null, ' kilogramos', null, null, null), ('2', null, null, null, ' metros', null, null, null), ('3', null, null, null, ' metros cuadrados', null, null, null), ('4', null, null, null, ' metros cúbicos', null, null, null), ('5', null, null, null, ' litros', null, null, null), ('6', null, null, null, ' unidades', null, null, null), ('7', null, null, null, ' pares', null, null, null), ('8', null, null, null, ' docenas', null, null, null), ('9', null, null, null, ' quilates', null, null, null), ('10', null, null, null, ' millares', null, null, null), ('11', null, null, null, ' gramos', null, null, null), ('12', null, null, null, ' milimetros', null, null, null), ('13', null, null, null, ' mm cúbicos', null, null, null), ('14', null, null, null, ' kilómetros', null, null, null), ('15', null, null, null, ' hectolitros', null, null, null), ('16', null, null, null, ' centímetros', null, null, null), ('17', null, null, null, ' cm cúbicos', null, null, null), ('18', null, null, null, ' toneladas', null, null, null), ('19', null, null, null, ' dam cúbicos', null, null, null), ('20', null, null, null, ' hm cúbicos', null, null, null), ('21', null, null, null, ' km cúbicos', null, null, null), ('22', null, null, null, ' microgramos', null, null, null), ('23', null, null, null, ' nanogramos', null, null, null), ('24', null, null, null, ' picogramos', null, null, null);
COMMIT;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`username`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`email`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`role`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`created`  datetime NULL DEFAULT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`estado`  int(1) NULL DEFAULT 1 ,
`rol`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=6

;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'nicpas', 'nicpas@gmail.com', '$2a$10$5Q4j6K9VdIu0uMq2uVvDP.XnZIXbHE2TLyz2tgYHixmrjwDn75hhy', null, '2017-10-10 21:39:40', '2017-10-10 21:39:40', '1', null), ('2', 'daniel', 'segu@dsf', '$2a$10$ZRgjJVtuznys3F5Ixfl66u.QUi5One7gVTAxjAskE.Julzx9WeSNe', null, '2017-10-10 23:36:17', '2017-10-10 23:36:17', '1', null), ('3', 'asdasdf', 'ojoij@zdzfsd', '$2a$10$4/aMVocxilm4zcZBA2zU5OL9Ecw9ZFhUwIUo/eK6/x5lHih7OIZru', null, '2017-10-10 23:54:43', '2017-10-10 23:54:43', '1', null), ('4', 'dsfsd', 'ojoij@zddsffd', '$2a$10$BazTBRnUKU7BlMbw6tbK9emvS065UY74wDBnaOcWOxZp1Pi5qsaJ.', null, '2017-10-10 23:58:39', '2017-10-10 23:58:39', '1', null), ('5', 'huhu', 'nicp@sdfsd', '$2a$10$lis6iK4oL.B/NWXcFWT7NemloCOcecFiKUjeJSI80T0c1q5SVW6W6', null, '2017-10-11 03:11:56', '2017-10-11 03:11:56', '1', null);
COMMIT;

-- ----------------------------
-- Auto increment value for `procesos`
-- ----------------------------
ALTER TABLE `procesos` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `productos`
-- ----------------------------
ALTER TABLE `productos` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `rubros`
-- ----------------------------
ALTER TABLE `rubros` AUTO_INCREMENT=39;

-- ----------------------------
-- Auto increment value for `unidades`
-- ----------------------------
ALTER TABLE `unidades` AUTO_INCREMENT=25;

-- ----------------------------
-- Auto increment value for `users`
-- ----------------------------
ALTER TABLE `users` AUTO_INCREMENT=6;
