/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : licitar

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 19/04/2019 18:22:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cat_categorias
-- ----------------------------
DROP TABLE IF EXISTS `cat_categorias`;
CREATE TABLE `cat_categorias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date NULL DEFAULT NULL,
  `modified` date NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cat_categorias
-- ----------------------------
INSERT INTO `cat_categorias` VALUES (1, NULL, NULL, NULL, 'Agricultura', 'categorias/agricultura.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (2, NULL, NULL, NULL, 'Alimentacion y Bebidas', 'categorias/refrigerador.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (3, NULL, NULL, NULL, 'Regalos, Deportes y Juguetes', 'categorias/deportes.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (4, NULL, NULL, NULL, 'Electrónica, electrodmésticos y telecomunicaciones\r\n', 'categorias/robotica.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (5, NULL, NULL, NULL, 'Hogar, muebles y jardín\r\n', 'categorias/casa.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (6, NULL, NULL, NULL, 'Ropa, textiles y accesorios\r\n', 'categorias/camisetas.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (7, NULL, NULL, NULL, 'Informática y tecnología\r\n', 'categorias/tecnologia.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (8, NULL, NULL, NULL, 'Industrias y Oficinas \r\n', 'categorias/escritorio.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (9, NULL, NULL, NULL, 'Materiales, herramientas y construcción\r\n', 'categorias/pared.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (10, NULL, NULL, NULL, 'Salud e Higiene\r\n', 'categorias/saludable.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (11, NULL, NULL, NULL, 'Servicios\r\n', 'categorias/comunicacion.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');
INSERT INTO `cat_categorias` VALUES (12, NULL, NULL, NULL, 'Vehiculos\r\n', 'categorias/coche.png\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis gravida lacus, eget ultrices ligula sagittis at. Praesent ultrices sapien ac efficitur faucibus. Maecenas ac purus varius, dapibus dolor non, sagittis mauris. Morbi sed ex in mi ultric');

-- ----------------------------
-- Table structure for cat_subcategorias
-- ----------------------------
DROP TABLE IF EXISTS `cat_subcategorias`;
CREATE TABLE `cat_subcategorias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date NULL DEFAULT NULL,
  `modified` date NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `categoria_id` int(11) NULL DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 177 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cat_subcategorias
-- ----------------------------
INSERT INTO `cat_subcategorias` VALUES (1, NULL, NULL, NULL, 1, 'Medios de cultivo agrícola');
INSERT INTO `cat_subcategorias` VALUES (2, NULL, NULL, NULL, 1, 'Residuos agrícolas');
INSERT INTO `cat_subcategorias` VALUES (3, NULL, NULL, NULL, 1, 'Productos animales');
INSERT INTO `cat_subcategorias` VALUES (4, NULL, NULL, NULL, 1, 'Granos');
INSERT INTO `cat_subcategorias` VALUES (5, NULL, NULL, NULL, 1, 'Carne');
INSERT INTO `cat_subcategorias` VALUES (6, NULL, NULL, NULL, 1, 'Fruta');
INSERT INTO `cat_subcategorias` VALUES (7, NULL, NULL, NULL, 1, 'Nueces y granos');
INSERT INTO `cat_subcategorias` VALUES (8, NULL, NULL, NULL, 1, 'Producción orgánica');
INSERT INTO `cat_subcategorias` VALUES (9, NULL, NULL, NULL, 1, 'Plantas ornamentales');
INSERT INTO `cat_subcategorias` VALUES (10, NULL, NULL, NULL, 1, 'Otros productos de agricultura');
INSERT INTO `cat_subcategorias` VALUES (11, NULL, NULL, NULL, 1, 'Aceite vegetal y animal');
INSERT INTO `cat_subcategorias` VALUES (12, NULL, NULL, NULL, 1, 'Semillas de plantas y bulbos');
INSERT INTO `cat_subcategorias` VALUES (13, NULL, NULL, NULL, 1, 'Madera');
INSERT INTO `cat_subcategorias` VALUES (14, NULL, NULL, NULL, 1, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (15, NULL, NULL, NULL, 2, 'Bebida alcohólica');
INSERT INTO `cat_subcategorias` VALUES (16, NULL, NULL, NULL, 2, 'Comida para bebé');
INSERT INTO `cat_subcategorias` VALUES (17, NULL, NULL, NULL, 2, 'Comida enlatada');
INSERT INTO `cat_subcategorias` VALUES (18, NULL, NULL, NULL, 2, 'Café');
INSERT INTO `cat_subcategorias` VALUES (19, NULL, NULL, NULL, 2, 'Confitería');
INSERT INTO `cat_subcategorias` VALUES (20, NULL, NULL, NULL, 2, 'Agua potable');
INSERT INTO `cat_subcategorias` VALUES (21, NULL, NULL, NULL, 2, 'Huevo y productos de huevo');
INSERT INTO `cat_subcategorias` VALUES (22, NULL, NULL, NULL, 2, 'Carne de ave');
INSERT INTO `cat_subcategorias` VALUES (23, NULL, NULL, NULL, 2, 'Otra comida y bebida');
INSERT INTO `cat_subcategorias` VALUES (24, NULL, NULL, NULL, 2, 'Mariscos');
INSERT INTO `cat_subcategorias` VALUES (25, NULL, NULL, NULL, 2, 'Condimentos y Condimentos');
INSERT INTO `cat_subcategorias` VALUES (26, NULL, NULL, NULL, 2, 'Bocadillos');
INSERT INTO `cat_subcategorias` VALUES (27, NULL, NULL, NULL, 2, 'Bebidas sin alcohol');
INSERT INTO `cat_subcategorias` VALUES (28, NULL, NULL, NULL, 2, 'Té');
INSERT INTO `cat_subcategorias` VALUES (29, NULL, NULL, NULL, 2, 'Productos vegetales');
INSERT INTO `cat_subcategorias` VALUES (30, NULL, NULL, NULL, 2, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (31, NULL, NULL, NULL, 3, 'Instrumentos musicales');
INSERT INTO `cat_subcategorias` VALUES (32, NULL, NULL, NULL, 3, 'Jueguetes');
INSERT INTO `cat_subcategorias` VALUES (33, NULL, NULL, NULL, 3, 'Regalos empresariales');
INSERT INTO `cat_subcategorias` VALUES (34, NULL, NULL, NULL, 3, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (35, NULL, NULL, NULL, 4, 'Artefactos de Cuidado Personal ');
INSERT INTO `cat_subcategorias` VALUES (36, NULL, NULL, NULL, 4, 'Artefactos para el Hogar ');
INSERT INTO `cat_subcategorias` VALUES (37, NULL, NULL, NULL, 4, 'Climatización ');
INSERT INTO `cat_subcategorias` VALUES (38, NULL, NULL, NULL, 4, 'Cocción ');
INSERT INTO `cat_subcategorias` VALUES (39, NULL, NULL, NULL, 4, 'Dispensadores y Purificadores ');
INSERT INTO `cat_subcategorias` VALUES (40, NULL, NULL, NULL, 4, 'Electrodomésticos de Cocina ');
INSERT INTO `cat_subcategorias` VALUES (41, NULL, NULL, NULL, 4, 'Heladeras y Freezers ');
INSERT INTO `cat_subcategorias` VALUES (42, NULL, NULL, NULL, 4, 'Lavarropas y Secarropas ');
INSERT INTO `cat_subcategorias` VALUES (43, NULL, NULL, NULL, 4, 'Termotanques y Calefones ');
INSERT INTO `cat_subcategorias` VALUES (44, NULL, NULL, NULL, 4, 'Accesorios para Audio y Video ');
INSERT INTO `cat_subcategorias` VALUES (45, NULL, NULL, NULL, 4, 'Audio ');
INSERT INTO `cat_subcategorias` VALUES (46, NULL, NULL, NULL, 4, 'Calculadoras y Agendas ');
INSERT INTO `cat_subcategorias` VALUES (47, NULL, NULL, NULL, 4, 'Componentes Electrónicos ');
INSERT INTO `cat_subcategorias` VALUES (48, NULL, NULL, NULL, 4, 'Drones y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (49, NULL, NULL, NULL, 4, 'Fotocopiadoras y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (50, NULL, NULL, NULL, 4, 'GPS ');
INSERT INTO `cat_subcategorias` VALUES (51, NULL, NULL, NULL, 4, 'Pilas y Cargadores ');
INSERT INTO `cat_subcategorias` VALUES (52, NULL, NULL, NULL, 4, 'Portarretratos Digitales ');
INSERT INTO `cat_subcategorias` VALUES (53, NULL, NULL, NULL, 4, 'Proyectores y Pantallas ');
INSERT INTO `cat_subcategorias` VALUES (54, NULL, NULL, NULL, 4, 'Seguridad y Vigilancia - Hogar ');
INSERT INTO `cat_subcategorias` VALUES (55, NULL, NULL, NULL, 4, 'Soportes ');
INSERT INTO `cat_subcategorias` VALUES (56, NULL, NULL, NULL, 4, 'Tablets y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (57, NULL, NULL, NULL, 4, 'Televisores ');
INSERT INTO `cat_subcategorias` VALUES (58, NULL, NULL, NULL, 4, 'Video ');
INSERT INTO `cat_subcategorias` VALUES (59, NULL, NULL, NULL, 4, 'Accesorios para Celulares ');
INSERT INTO `cat_subcategorias` VALUES (60, NULL, NULL, NULL, 4, 'Celulares y Smartphones ');
INSERT INTO `cat_subcategorias` VALUES (61, NULL, NULL, NULL, 4, 'Centrales Telefónicas ');
INSERT INTO `cat_subcategorias` VALUES (62, NULL, NULL, NULL, 4, 'Fax ');
INSERT INTO `cat_subcategorias` VALUES (63, NULL, NULL, NULL, 4, 'Handies ');
INSERT INTO `cat_subcategorias` VALUES (64, NULL, NULL, NULL, 4, 'Nextel ');
INSERT INTO `cat_subcategorias` VALUES (65, NULL, NULL, NULL, 4, 'Radiofrecuencia ');
INSERT INTO `cat_subcategorias` VALUES (66, NULL, NULL, NULL, 4, 'Repuestos de Celulares ');
INSERT INTO `cat_subcategorias` VALUES (67, NULL, NULL, NULL, 4, 'Tarifadores y Cabinas ');
INSERT INTO `cat_subcategorias` VALUES (68, NULL, NULL, NULL, 4, 'Telefonía Fija e Inalámbrica ');
INSERT INTO `cat_subcategorias` VALUES (69, NULL, NULL, NULL, 4, 'Telefonía IP ');
INSERT INTO `cat_subcategorias` VALUES (70, NULL, NULL, NULL, 4, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (71, NULL, NULL, NULL, 5, 'Artículos de Limpieza ');
INSERT INTO `cat_subcategorias` VALUES (72, NULL, NULL, NULL, 5, 'Baños ');
INSERT INTO `cat_subcategorias` VALUES (73, NULL, NULL, NULL, 5, 'Cocina ');
INSERT INTO `cat_subcategorias` VALUES (74, NULL, NULL, NULL, 5, 'Decoración para el Hogar ');
INSERT INTO `cat_subcategorias` VALUES (75, NULL, NULL, NULL, 5, 'Dormitorio ');
INSERT INTO `cat_subcategorias` VALUES (76, NULL, NULL, NULL, 5, 'Iluminación para el Hogar ');
INSERT INTO `cat_subcategorias` VALUES (77, NULL, NULL, NULL, 5, 'Jardines y Exteriores ');
INSERT INTO `cat_subcategorias` VALUES (78, NULL, NULL, NULL, 5, 'Lavadero ');
INSERT INTO `cat_subcategorias` VALUES (79, NULL, NULL, NULL, 5, 'Muebles para Oficinas ');
INSERT INTO `cat_subcategorias` VALUES (80, NULL, NULL, NULL, 5, 'Sala de Estar y Comedor ');
INSERT INTO `cat_subcategorias` VALUES (81, NULL, NULL, NULL, 5, 'Seguridad para el Hogar');
INSERT INTO `cat_subcategorias` VALUES (82, NULL, NULL, NULL, 5, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (83, NULL, NULL, NULL, 6, 'Servicios de diseño de indumentaria');
INSERT INTO `cat_subcategorias` VALUES (84, NULL, NULL, NULL, 6, 'Ropa para mujer y hombre');
INSERT INTO `cat_subcategorias` VALUES (85, NULL, NULL, NULL, 6, 'Ropa para bebés y niños pequeños');
INSERT INTO `cat_subcategorias` VALUES (86, NULL, NULL, NULL, 6, 'Maniquíes');
INSERT INTO `cat_subcategorias` VALUES (87, NULL, NULL, NULL, 6, 'Ropa de maternidad');
INSERT INTO `cat_subcategorias` VALUES (88, NULL, NULL, NULL, 6, 'Ropa de trabajo');
INSERT INTO `cat_subcategorias` VALUES (89, NULL, NULL, NULL, 6, 'Tela');
INSERT INTO `cat_subcategorias` VALUES (90, NULL, NULL, NULL, 6, 'Fibra');
INSERT INTO `cat_subcategorias` VALUES (91, NULL, NULL, NULL, 6, 'Cuero');
INSERT INTO `cat_subcategorias` VALUES (92, NULL, NULL, NULL, 6, 'Hilo');
INSERT INTO `cat_subcategorias` VALUES (93, NULL, NULL, NULL, 6, 'Blanquería');
INSERT INTO `cat_subcategorias` VALUES (94, NULL, NULL, NULL, 6, 'Guantes');
INSERT INTO `cat_subcategorias` VALUES (95, NULL, NULL, NULL, 6, 'Sombreros y gorras');
INSERT INTO `cat_subcategorias` VALUES (96, NULL, NULL, NULL, 6, 'Pañuelos y chales');
INSERT INTO `cat_subcategorias` VALUES (97, NULL, NULL, NULL, 6, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (98, NULL, NULL, NULL, 7, 'All In One ');
INSERT INTO `cat_subcategorias` VALUES (99, NULL, NULL, NULL, 7, 'Apple ');
INSERT INTO `cat_subcategorias` VALUES (100, NULL, NULL, NULL, 7, 'Cajas, Sobres y Porta CDs ');
INSERT INTO `cat_subcategorias` VALUES (101, NULL, NULL, NULL, 7, 'Componentes de PC ');
INSERT INTO `cat_subcategorias` VALUES (102, NULL, NULL, NULL, 7, 'Discos y Diskettes Vírgenes ');
INSERT INTO `cat_subcategorias` VALUES (103, NULL, NULL, NULL, 7, 'Fuentes, UPS y Estabilizadores ');
INSERT INTO `cat_subcategorias` VALUES (104, NULL, NULL, NULL, 7, 'Impresoras y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (105, NULL, NULL, NULL, 7, 'Lectores y Scanners ');
INSERT INTO `cat_subcategorias` VALUES (106, NULL, NULL, NULL, 7, 'Memorias RAM ');
INSERT INTO `cat_subcategorias` VALUES (107, NULL, NULL, NULL, 7, 'Mini PCs ');
INSERT INTO `cat_subcategorias` VALUES (108, NULL, NULL, NULL, 7, 'Monitores y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (109, NULL, NULL, NULL, 7, 'Netbooks y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (110, NULL, NULL, NULL, 7, 'Notebooks y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (111, NULL, NULL, NULL, 7, 'Palms y Handhelds ');
INSERT INTO `cat_subcategorias` VALUES (112, NULL, NULL, NULL, 7, 'PC ');
INSERT INTO `cat_subcategorias` VALUES (113, NULL, NULL, NULL, 7, 'Pendrives ');
INSERT INTO `cat_subcategorias` VALUES (114, NULL, NULL, NULL, 7, 'Periféricos de PC ');
INSERT INTO `cat_subcategorias` VALUES (115, NULL, NULL, NULL, 7, 'Procesadores ');
INSERT INTO `cat_subcategorias` VALUES (116, NULL, NULL, NULL, 7, 'Proyectores y Pantallas ');
INSERT INTO `cat_subcategorias` VALUES (117, NULL, NULL, NULL, 7, 'Redes ');
INSERT INTO `cat_subcategorias` VALUES (118, NULL, NULL, NULL, 7, 'Software ');
INSERT INTO `cat_subcategorias` VALUES (119, NULL, NULL, NULL, 7, 'Tablets y Accesorios ');
INSERT INTO `cat_subcategorias` VALUES (120, NULL, NULL, NULL, 7, 'Ultrabooks ');
INSERT INTO `cat_subcategorias` VALUES (121, NULL, NULL, NULL, 7, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (122, NULL, NULL, NULL, 8, 'Arquitectura y Diseño ');
INSERT INTO `cat_subcategorias` VALUES (123, NULL, NULL, NULL, 8, 'Embalajes ');
INSERT INTO `cat_subcategorias` VALUES (124, NULL, NULL, NULL, 8, 'Equipamiento Comercial ');
INSERT INTO `cat_subcategorias` VALUES (125, NULL, NULL, NULL, 8, 'Equipamiento para Industrias ');
INSERT INTO `cat_subcategorias` VALUES (126, NULL, NULL, NULL, 8, 'Equipamiento para Oficinas ');
INSERT INTO `cat_subcategorias` VALUES (127, NULL, NULL, NULL, 8, 'Industria Agropecuaria ');
INSERT INTO `cat_subcategorias` VALUES (128, NULL, NULL, NULL, 8, 'Industria Gastronómica ');
INSERT INTO `cat_subcategorias` VALUES (129, NULL, NULL, NULL, 8, 'Industria Gráfica e Impresión ');
INSERT INTO `cat_subcategorias` VALUES (130, NULL, NULL, NULL, 8, 'Industria Textil ');
INSERT INTO `cat_subcategorias` VALUES (131, NULL, NULL, NULL, 8, 'Librería ');
INSERT INTO `cat_subcategorias` VALUES (132, NULL, NULL, NULL, 8, 'Material de Promoción ');
INSERT INTO `cat_subcategorias` VALUES (133, NULL, NULL, NULL, 8, 'Seguridad Industrial ');
INSERT INTO `cat_subcategorias` VALUES (134, NULL, NULL, NULL, 8, 'Uniformes ');
INSERT INTO `cat_subcategorias` VALUES (135, NULL, NULL, NULL, 8, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (136, NULL, NULL, NULL, 9, 'Construcción ');
INSERT INTO `cat_subcategorias` VALUES (137, NULL, NULL, NULL, 9, 'Electricidad ');
INSERT INTO `cat_subcategorias` VALUES (138, NULL, NULL, NULL, 9, 'Herramientas ');
INSERT INTO `cat_subcategorias` VALUES (139, NULL, NULL, NULL, 9, 'Mobiliario para Baños ');
INSERT INTO `cat_subcategorias` VALUES (140, NULL, NULL, NULL, 9, 'Mobiliario para Cocinas ');
INSERT INTO `cat_subcategorias` VALUES (141, NULL, NULL, NULL, 9, 'Paneles Solares ');
INSERT INTO `cat_subcategorias` VALUES (142, NULL, NULL, NULL, 9, 'Pisos, Paredes y Aberturas');
INSERT INTO `cat_subcategorias` VALUES (143, NULL, NULL, NULL, 9, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (144, NULL, NULL, NULL, 10, 'Cuidado de la Salud ');
INSERT INTO `cat_subcategorias` VALUES (145, NULL, NULL, NULL, 10, 'Equipamiento Médico ');
INSERT INTO `cat_subcategorias` VALUES (146, NULL, NULL, NULL, 10, 'Equipamiento Odontológico ');
INSERT INTO `cat_subcategorias` VALUES (147, NULL, NULL, NULL, 10, 'Masajes ');
INSERT INTO `cat_subcategorias` VALUES (148, NULL, NULL, NULL, 10, 'Ortopedia ');
INSERT INTO `cat_subcategorias` VALUES (149, NULL, NULL, NULL, 10, 'Suplementos Alimenticios ');
INSERT INTO `cat_subcategorias` VALUES (150, NULL, NULL, NULL, 10, 'Terapias Alternativas ');
INSERT INTO `cat_subcategorias` VALUES (151, NULL, NULL, NULL, 10, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (152, NULL, NULL, NULL, 11, 'Asesoramiento Contable y Legal ');
INSERT INTO `cat_subcategorias` VALUES (153, NULL, NULL, NULL, 11, 'Belleza y Cuidado Personal ');
INSERT INTO `cat_subcategorias` VALUES (154, NULL, NULL, NULL, 11, 'Comunicación y diseño ');
INSERT INTO `cat_subcategorias` VALUES (155, NULL, NULL, NULL, 11, 'Cursos y Clases ');
INSERT INTO `cat_subcategorias` VALUES (156, NULL, NULL, NULL, 11, 'Delivery ');
INSERT INTO `cat_subcategorias` VALUES (157, NULL, NULL, NULL, 11, 'Fiestas y Eventos ');
INSERT INTO `cat_subcategorias` VALUES (158, NULL, NULL, NULL, 11, 'Fotografía, Música y Cine ');
INSERT INTO `cat_subcategorias` VALUES (159, NULL, NULL, NULL, 11, 'Hogar y Construcción ');
INSERT INTO `cat_subcategorias` VALUES (160, NULL, NULL, NULL, 11, 'Imprenta ');
INSERT INTO `cat_subcategorias` VALUES (161, NULL, NULL, NULL, 11, 'Mantenimiento de Vehículos ');
INSERT INTO `cat_subcategorias` VALUES (162, NULL, NULL, NULL, 11, 'Medicina y Salud ');
INSERT INTO `cat_subcategorias` VALUES (163, NULL, NULL, NULL, 11, 'Ropa y Moda ');
INSERT INTO `cat_subcategorias` VALUES (164, NULL, NULL, NULL, 11, 'Servicios para Mascotas ');
INSERT INTO `cat_subcategorias` VALUES (165, NULL, NULL, NULL, 11, 'Servicios para Oficinas ');
INSERT INTO `cat_subcategorias` VALUES (166, NULL, NULL, NULL, 11, 'Tecnología ');
INSERT INTO `cat_subcategorias` VALUES (167, NULL, NULL, NULL, 11, 'Transporte ');
INSERT INTO `cat_subcategorias` VALUES (168, NULL, NULL, NULL, 11, 'Viajes y Turismo ');
INSERT INTO `cat_subcategorias` VALUES (169, NULL, NULL, NULL, 11, 'Otros');
INSERT INTO `cat_subcategorias` VALUES (170, NULL, NULL, NULL, 12, 'Autos y Camionetas');
INSERT INTO `cat_subcategorias` VALUES (171, NULL, NULL, NULL, 12, 'Camiones');
INSERT INTO `cat_subcategorias` VALUES (172, NULL, NULL, NULL, 12, 'Maquinaria Agrícola');
INSERT INTO `cat_subcategorias` VALUES (173, NULL, NULL, NULL, 12, 'Maquinaria Vial');
INSERT INTO `cat_subcategorias` VALUES (174, NULL, NULL, NULL, 12, 'Motos');
INSERT INTO `cat_subcategorias` VALUES (175, NULL, NULL, NULL, 12, 'Semirremolques');
INSERT INTO `cat_subcategorias` VALUES (176, NULL, NULL, NULL, 12, 'Otros');

-- ----------------------------
-- Table structure for denuncias
-- ----------------------------
DROP TABLE IF EXISTS `denuncias`;
CREATE TABLE `denuncias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NULL DEFAULT NULL,
  `pregunta_id` int(11) NULL DEFAULT NULL,
  `respuesta_id` int(11) NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for favoritos
-- ----------------------------
DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE `favoritos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL,
  `proceso_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of favoritos
-- ----------------------------
INSERT INTO `favoritos` VALUES (7, '2019-01-01 08:47:25', 1, 1, 0);
INSERT INTO `favoritos` VALUES (8, '2019-01-01 08:47:26', 5, 1, 0);
INSERT INTO `favoritos` VALUES (9, '2019-01-01 08:47:26', 2, 1, 0);
INSERT INTO `favoritos` VALUES (10, '2019-01-01 08:52:16', 1, 1, 0);
INSERT INTO `favoritos` VALUES (11, '2019-01-01 08:53:16', 3, 1, 0);
INSERT INTO `favoritos` VALUES (12, '2019-01-01 08:59:06', 4, 1, 0);
INSERT INTO `favoritos` VALUES (13, '2019-01-01 10:01:22', 5, 15, 1);
INSERT INTO `favoritos` VALUES (14, '2019-01-01 10:01:23', 2, 15, 1);
INSERT INTO `favoritos` VALUES (15, '2019-01-01 10:01:24', 3, 15, 1);
INSERT INTO `favoritos` VALUES (17, '2019-01-01 10:08:03', 4, 15, 1);
INSERT INTO `favoritos` VALUES (23, '2019-01-01 10:24:27', 1, 1, 0);
INSERT INTO `favoritos` VALUES (24, '2019-01-01 12:29:43', 5, 1, 0);
INSERT INTO `favoritos` VALUES (25, '2019-01-01 13:20:43', 4, 1, 0);
INSERT INTO `favoritos` VALUES (26, '2019-02-04 01:39:53', 4, 16, 1);
INSERT INTO `favoritos` VALUES (27, '2019-02-04 01:39:54', 1, 16, 0);
INSERT INTO `favoritos` VALUES (28, '2019-02-04 01:39:54', 5, 16, 0);
INSERT INTO `favoritos` VALUES (29, '2019-03-05 23:53:51', 1, 1, 1);

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `proceso_id` int(11) NULL DEFAULT NULL,
  `categoria_id` int(4) NULL DEFAULT NULL,
  `subcategoria_id` int(11) NULL DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `cantidad` int(11) NULL DEFAULT NULL,
  `unidad` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `especificaciones` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `precio_max` decimal(10, 2) NULL DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES (1, '2018-12-24 10:34:37', '2018-12-24 10:34:37', 1, 1, 1, 3, 'bordeadora para cesped Skill ', 1, 'unidades', '600W - cable retractil', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (2, '2018-12-24 10:37:05', '2018-12-24 10:37:05', 1, 1, 9, 138, 'Palas de cavado ancho', 8, 'unidades', 'para jardineria', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (3, '2018-12-24 10:38:09', '2018-12-24 10:38:09', 1, 1, 9, 138, 'Maquina de cortar cesped', 8, 'unidades', 'electrica 1HP', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (4, '2018-12-24 10:47:57', '2018-12-24 10:47:57', 1, 2, 9, 136, 'Chapas Techo Galvanizadas Acanalada C-25.', 40, 'unidades', 'con entrega en domicilio', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (5, '2018-12-24 10:48:10', '2018-12-24 10:48:10', 1, 2, 9, 136, 'Membrana No Crack Nº400 35kgs Megaflex', 1, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (6, '2018-12-24 10:48:38', '2018-12-24 10:48:38', 1, 2, 9, 137, 'Llave De Luz Armada Sica Life 2 Modulos', 150, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (7, '2018-12-24 10:48:53', '2018-12-24 10:48:53', 1, 2, 9, 137, 'Caja Luz Para Embutir Rectangular De Chapa Iram', 200, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (8, '2018-12-24 10:50:10', '2018-12-24 10:50:10', 1, 2, 9, 139, 'Inodoro y  Bidet Deposito Roca ', 4, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (9, '2018-12-24 10:51:01', '2018-12-24 10:51:01', 1, 2, 9, 140, 'Cocina Escorial Candor 50cm', 1, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (10, '2018-12-25 22:30:22', '2018-12-25 22:30:22', 6, 3, 4, 44, 'Microfono Corbatero ', 25, 'unidades', 'Pc Celular Video Dslr Omnidirecc Boya M1', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (11, '2018-12-25 22:31:22', '2018-12-25 22:31:22', 6, 3, 4, 44, 'Microfono Inalambrico Vincha Corbatero Doble Vhf 5', 10, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (12, '2018-12-25 22:32:16', '2018-12-25 22:32:16', 6, 3, 4, 44, 'Consola De Sonido Sound Xtreme Sxm512 12 Canales E', 2, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (13, '2018-12-25 22:34:17', '2018-12-25 22:34:17', 6, 4, 4, 44, 'Cable Multipar Portero E Intercom. ', 1, 'unidades', 'De 4 Pares Bobina 200mts', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (14, '2018-12-25 22:35:18', '2018-12-25 22:35:18', 6, 4, 4, 53, 'Kit Proyector + Pantalla 100 Gadnic Full Hd 1200 L', 1, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (15, '2018-12-25 22:36:02', '2018-12-25 22:36:02', 6, 4, 4, 55, 'Pyle Soporte Trípode Pie Pstnd1 Bafle Hasta 45kg M', 8, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (16, '2018-12-25 22:41:10', '2018-12-25 22:41:10', 15, 5, 9, 136, 'Ladrillo Hueco Del 12 - 9 Agujeros', 400, 'unidades', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (17, '2018-12-25 22:42:21', '2018-12-25 22:42:21', 15, 5, 9, 137, 'Cable Bipolar Pararelo Blanco 2x2.5 ', 2, 'unidades', 'Rollo 100mts Electrico', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (21, '2019-01-01 19:32:32', '2019-01-01 19:32:32', 1, 21, 1, 2, 'SDFSDFSDF SDFS DF', 4, 'litros', 'SDFSDFDSF', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (22, '2019-01-01 19:32:49', '2019-01-01 19:32:49', 1, 21, 2, 20, 'SDFSDFSDFSD', 1, 'litros', '', NULL, NULL, 'Activo');
INSERT INTO `items` VALUES (24, '2019-02-03 22:44:31', '2019-02-03 22:44:31', 12, 23, 1, 2, 'asdasd', 1, 'unidades', '', NULL, NULL, 'Borrador');
INSERT INTO `items` VALUES (26, '2019-04-02 17:18:59', '2019-04-02 17:18:59', 1, 27, 9, 138, 'rastrillos ', 4, 'unidades', 'sdfsdfsdf sdffsdf', NULL, NULL, 'Activo');

-- ----------------------------
-- Table structure for mail_alertas
-- ----------------------------
DROP TABLE IF EXISTS `mail_alertas`;
CREATE TABLE `mail_alertas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mail_alertas
-- ----------------------------
INSERT INTO `mail_alertas` VALUES (1, NULL, NULL, 'Rubros Publicación', NULL);
INSERT INTO `mail_alertas` VALUES (2, NULL, NULL, 'Oferta Superada', NULL);
INSERT INTO `mail_alertas` VALUES (3, NULL, NULL, 'Oferta Recibida', NULL);
INSERT INTO `mail_alertas` VALUES (4, NULL, NULL, 'Proceso Finalizado', NULL);

-- ----------------------------
-- Table structure for mail_alertas_vendedores
-- ----------------------------
DROP TABLE IF EXISTS `mail_alertas_vendedores`;
CREATE TABLE `mail_alertas_vendedores`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `alerta_id` int(11) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `categoria_id` int(11) NULL DEFAULT NULL,
  `subcategorias` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mail_alertas_vendedores
-- ----------------------------
INSERT INTO `mail_alertas_vendedores` VALUES (35, '2018-10-30 04:19:39', '2018-10-30 04:19:39', NULL, 1, 3, '27,28,33,38');
INSERT INTO `mail_alertas_vendedores` VALUES (37, '2018-10-30 04:19:59', '2018-10-30 04:19:59', NULL, 1, 9, '123,124,128');
INSERT INTO `mail_alertas_vendedores` VALUES (38, '2018-11-16 23:07:11', '2018-11-16 23:07:11', NULL, 1, 1, '2,10,11');
INSERT INTO `mail_alertas_vendedores` VALUES (39, '2018-12-15 12:43:11', '2018-12-15 12:43:11', NULL, 2, 5, '81,86');

-- ----------------------------
-- Table structure for mail_mensajes
-- ----------------------------
DROP TABLE IF EXISTS `mail_mensajes`;
CREATE TABLE `mail_mensajes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `tipo_mensaje` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `destinatario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `asunto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `cuerpo` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fecha_envio` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mail_mensajes
-- ----------------------------
INSERT INTO `mail_mensajes` VALUES (1, '2018-11-21 21:23:01', '2018-11-21 21:23:01', 'Compra Finalizada', 1, 'nicpas@gmail.com', 'gonzalo hola, nicolas soy, cansado estoy, logrado haberlo yo', '<h3>Hola nicpas </h3><p>Para consultar tus compras finalizadas entrá en el siguiente enlace. </p></br><a href=\'http://localhost/mis_compras_finalizadas/f0f3c968aec492761254d8de33b9711e\' target=\'_blank\'>http://localhost/mis_compras_finalizadas/</a></br><p>Saludos! </p><p>Wadaboo.com </p>', 'Enviado', NULL);
INSERT INTO `mail_mensajes` VALUES (9, '2018-11-22 01:36:50', '2018-11-22 01:36:50', 'Compra Finalizada', 1, 'nicpas@gmail.com', 'Proceso de Compra Finalizado. Conocé los resultados aquí.', '<h3>Hola nicpas </h3><p>Para consultar tus compras finalizadas entrá en el siguiente enlace. </p></br><a href=\'http://localhost/mis_compras_finalizadas/f0f3c968aec492761254d8de33b9711e\' target=\'_blank\'>http://localhost/mis_compras_finalizadas/</a></br><p>Saludos! </p><p>Wadaboo.com </p>', 'Enviado', NULL);
INSERT INTO `mail_mensajes` VALUES (10, '2018-11-22 01:36:50', '2018-11-22 01:36:50', 'Compra Finalizada', 6, 'nicpas@gmail.com', 'Proceso de Compra Finalizado. Conocé los resultados aquí.', '<h3>Hola segupetrol </h3><p>Para consultar tus compras finalizadas entrá en el siguiente enlace. </p></br><a href=\'http://localhost/mis_compras_finalizadas/2022c0b8dc29c3d9c52237f732c4268c\' target=\'_blank\'>http://localhost/mis_compras_finalizadas/</a></br><p>Saludos! </p><p>Wadaboo.com </p>', 'Enviado', NULL);

-- ----------------------------
-- Table structure for ofertas
-- ----------------------------
DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE `ofertas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NULL DEFAULT NULL,
  `proceso_id` int(11) NULL DEFAULT NULL,
  `item_id` int(11) NULL DEFAULT NULL,
  `valor_oferta` decimal(10, 2) NULL DEFAULT NULL,
  `oferta_hasta` decimal(10, 0) NULL DEFAULT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'Pendiente',
  `observaciones` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ofertas
-- ----------------------------
INSERT INTO `ofertas` VALUES (1, '2019-01-13 23:28:08', '2019-02-02 20:31:32', 1, 4, 13, 100.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (2, '2019-01-13 23:37:36', '2019-02-02 20:31:34', 5, 1, 1, 3400.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (3, '2019-01-25 23:28:12', '2019-02-02 20:31:34', 5, 4, 13, 1500.00, NULL, 'Pendiente', 'rollos de 190mts');
INSERT INTO `ofertas` VALUES (4, '2019-01-25 23:28:12', '2019-02-02 20:31:35', 5, 4, 14, 23000.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (5, '2019-01-25 23:28:12', '2019-02-02 20:31:35', 5, 4, 15, 1500.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (6, '2019-02-02 20:30:35', '2019-02-02 20:32:25', 5, 4, 13, 100.00, NULL, 'Pendiente', 'soy mejor');
INSERT INTO `ofertas` VALUES (10, '2019-02-02 21:47:39', '2019-02-02 21:47:39', 5, 4, 13, 150.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (11, '2019-02-03 00:59:44', '2019-02-03 00:59:44', 5, 1, 2, 1200.00, NULL, 'Pendiente', '');
INSERT INTO `ofertas` VALUES (12, '2019-02-03 00:59:44', '2019-02-03 00:59:44', 5, 1, 3, 2400.00, NULL, 'Pendiente', 'marca Black&Decker');
INSERT INTO `ofertas` VALUES (13, '2019-02-03 19:12:38', '2019-02-03 19:12:38', 5, 1, 1, 3300.00, NULL, 'Pendiente', NULL);
INSERT INTO `ofertas` VALUES (14, '2019-02-03 22:43:26', '2019-02-03 22:43:26', 12, 1, 1, 55.00, NULL, 'Pendiente', NULL);
INSERT INTO `ofertas` VALUES (15, '2019-02-04 01:39:09', '2019-02-04 01:39:09', 16, 4, 13, 2.00, NULL, 'Pendiente', NULL);
INSERT INTO `ofertas` VALUES (16, '2019-02-04 01:39:09', '2019-02-04 01:39:09', 16, 4, 14, 4.00, NULL, 'Pendiente', NULL);
INSERT INTO `ofertas` VALUES (17, '2019-02-04 01:41:33', '2019-02-04 01:41:33', 16, 21, 21, 123.00, NULL, 'Pendiente', NULL);

-- ----------------------------
-- Table structure for preguntas
-- ----------------------------
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE `preguntas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NULL DEFAULT NULL,
  `proceso_id` int(11) NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pregunta` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of preguntas
-- ----------------------------
INSERT INTO `preguntas` VALUES (1, '2019-02-02 23:02:27', '2019-02-02 23:02:27', 2, 1, 'Respondida', 'Hola, una consulta, la máquina de cortar cesped, tee puedo ofrecer de 2HP.  ?');
INSERT INTO `preguntas` VALUES (2, '2019-02-03 22:34:03', '2019-02-03 22:34:03', 5, 2, 'Respondida', 'Respecto a la cocina escorial, tengo una de 70cm a 1500 pesos. Te sirve?');

-- ----------------------------
-- Table structure for procesos
-- ----------------------------
DROP TABLE IF EXISTS `procesos`;
CREATE TABLE `procesos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `proceso_nro` int(11) NULL DEFAULT NULL,
  `referencia` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha_fin` date NULL DEFAULT NULL,
  `detalles` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha_entrega` date NULL DEFAULT NULL,
  `preferencia_pago` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `requisitos_excluyentes` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of procesos
-- ----------------------------
INSERT INTO `procesos` VALUES (1, '2018-12-24 10:32:21', '2018-12-24 10:32:21', 1, 1, 'Equipamiento para empresa de jardinería', '2019-04-10', 'test', '2019-01-10', 'Transferencia', 'Que el proveedor gestione el envío', 'Finalizado');
INSERT INTO `procesos` VALUES (2, '2018-12-24 10:46:17', '2018-12-24 10:46:17', 1, 2, 'Compra general construccion Obra 44-N', '2019-04-10', '', '2019-01-30', 'Efectivo', 'Que el proveedor emita Factura A,Que el proveedor gestione el envío', 'Activo');
INSERT INTO `procesos` VALUES (3, '2018-12-25 22:27:42', '2018-12-25 22:27:42', 6, 1, 'Equipos para sonido en vivo', '2019-04-10', '', '2019-01-22', 'Efectivo', 'Que el proveedor gestione el envío', 'Activo');
INSERT INTO `procesos` VALUES (4, '2018-12-25 22:33:51', '2018-12-25 22:33:51', 6, 2, 'Equipos varios para empresa alquiler de audio y video', '2019-04-10', '', '2019-01-23', 'Efectivo', 'Que el proveedor gestione el envío', 'Activo');
INSERT INTO `procesos` VALUES (5, '2018-12-25 22:40:21', '2018-12-25 22:40:21', 15, 1, 'varios construccion', '2019-04-10', '', '2019-01-11', 'Efectivo', 'Que el proveedor emita Factura A,Que el proveedor gestione el envío', 'Activo');
INSERT INTO `procesos` VALUES (21, '2019-01-01 19:30:50', '2019-01-01 19:30:50', 1, 3, 'empresa agroindustrial necesita cotizacion especial urgente', '2019-04-10', 'awwwww', '2019-01-18', '', 'Que el proveedor emita Factura A', 'Activo');
INSERT INTO `procesos` VALUES (27, '2019-04-02 17:18:04', '2019-04-02 17:18:04', 1, 4, 'materiales de jardinería', '2019-04-10', '', '2019-04-17', '', 'Que el proveedor emita Factura A', 'Activo');
INSERT INTO `procesos` VALUES (32, '2019-04-06 16:33:36', '2019-04-06 16:33:36', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Borrador');

-- ----------------------------
-- Table structure for prov_localidades
-- ----------------------------
DROP TABLE IF EXISTS `prov_localidades`;
CREATE TABLE `prov_localidades`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `provincia_id` int(2) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2384 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of prov_localidades
-- ----------------------------
INSERT INTO `prov_localidades` VALUES (1, 1, '25 de Mayo');
INSERT INTO `prov_localidades` VALUES (2, 1, '3 de febrero');
INSERT INTO `prov_localidades` VALUES (3, 1, 'A. Alsina');
INSERT INTO `prov_localidades` VALUES (4, 1, 'A. GonzÃ¡les ChÃ¡ves');
INSERT INTO `prov_localidades` VALUES (5, 1, 'Aguas Verdes');
INSERT INTO `prov_localidades` VALUES (6, 1, 'Alberti');
INSERT INTO `prov_localidades` VALUES (7, 1, 'Arrecifes');
INSERT INTO `prov_localidades` VALUES (8, 1, 'Ayacucho');
INSERT INTO `prov_localidades` VALUES (9, 1, 'Azul');
INSERT INTO `prov_localidades` VALUES (10, 1, 'BahÃ­a Blanca');
INSERT INTO `prov_localidades` VALUES (11, 1, 'Balcarce');
INSERT INTO `prov_localidades` VALUES (12, 1, 'Baradero');
INSERT INTO `prov_localidades` VALUES (13, 1, 'Benito JuÃ¡rez');
INSERT INTO `prov_localidades` VALUES (14, 1, 'Berisso');
INSERT INTO `prov_localidades` VALUES (15, 1, 'BolÃ­var');
INSERT INTO `prov_localidades` VALUES (16, 1, 'Bragado');
INSERT INTO `prov_localidades` VALUES (17, 1, 'Brandsen');
INSERT INTO `prov_localidades` VALUES (18, 1, 'Campana');
INSERT INTO `prov_localidades` VALUES (19, 1, 'CaÃ±uelas');
INSERT INTO `prov_localidades` VALUES (20, 1, 'Capilla del SeÃ±or');
INSERT INTO `prov_localidades` VALUES (21, 1, 'CapitÃ¡n Sarmiento');
INSERT INTO `prov_localidades` VALUES (22, 1, 'Carapachay');
INSERT INTO `prov_localidades` VALUES (23, 1, 'Carhue');
INSERT INTO `prov_localidades` VALUES (24, 1, 'CarilÃ³');
INSERT INTO `prov_localidades` VALUES (25, 1, 'Carlos Casares');
INSERT INTO `prov_localidades` VALUES (26, 1, 'Carlos Tejedor');
INSERT INTO `prov_localidades` VALUES (27, 1, 'Carmen de Areco');
INSERT INTO `prov_localidades` VALUES (28, 1, 'Carmen de Patagones');
INSERT INTO `prov_localidades` VALUES (29, 1, 'Castelli');
INSERT INTO `prov_localidades` VALUES (30, 1, 'Chacabuco');
INSERT INTO `prov_localidades` VALUES (31, 1, 'ChascomÃºs');
INSERT INTO `prov_localidades` VALUES (32, 1, 'Chivilcoy');
INSERT INTO `prov_localidades` VALUES (33, 1, 'ColÃ³n');
INSERT INTO `prov_localidades` VALUES (34, 1, 'Coronel Dorrego');
INSERT INTO `prov_localidades` VALUES (35, 1, 'Coronel Pringles');
INSERT INTO `prov_localidades` VALUES (36, 1, 'Coronel Rosales');
INSERT INTO `prov_localidades` VALUES (37, 1, 'Coronel Suarez');
INSERT INTO `prov_localidades` VALUES (38, 1, 'Costa Azul');
INSERT INTO `prov_localidades` VALUES (39, 1, 'Costa Chica');
INSERT INTO `prov_localidades` VALUES (40, 1, 'Costa del Este');
INSERT INTO `prov_localidades` VALUES (41, 1, 'Costa Esmeralda');
INSERT INTO `prov_localidades` VALUES (42, 1, 'Daireaux');
INSERT INTO `prov_localidades` VALUES (43, 1, 'Darregueira');
INSERT INTO `prov_localidades` VALUES (44, 1, 'Del Viso');
INSERT INTO `prov_localidades` VALUES (45, 1, 'Dolores');
INSERT INTO `prov_localidades` VALUES (46, 1, 'Don Torcuato');
INSERT INTO `prov_localidades` VALUES (47, 1, 'Ensenada');
INSERT INTO `prov_localidades` VALUES (48, 1, 'Escobar');
INSERT INTO `prov_localidades` VALUES (49, 1, 'ExaltaciÃ³n de la Cruz');
INSERT INTO `prov_localidades` VALUES (50, 1, 'Florentino Ameghino');
INSERT INTO `prov_localidades` VALUES (51, 1, 'GarÃ­n');
INSERT INTO `prov_localidades` VALUES (52, 1, 'Gral. Alvarado');
INSERT INTO `prov_localidades` VALUES (53, 1, 'Gral. Alvear');
INSERT INTO `prov_localidades` VALUES (54, 1, 'Gral. Arenales');
INSERT INTO `prov_localidades` VALUES (55, 1, 'Gral. Belgrano');
INSERT INTO `prov_localidades` VALUES (56, 1, 'Gral. Guido');
INSERT INTO `prov_localidades` VALUES (57, 1, 'Gral. Lamadrid');
INSERT INTO `prov_localidades` VALUES (58, 1, 'Gral. Las Heras');
INSERT INTO `prov_localidades` VALUES (59, 1, 'Gral. Lavalle');
INSERT INTO `prov_localidades` VALUES (60, 1, 'Gral. Madariaga');
INSERT INTO `prov_localidades` VALUES (61, 1, 'Gral. Pacheco');
INSERT INTO `prov_localidades` VALUES (62, 1, 'Gral. Paz');
INSERT INTO `prov_localidades` VALUES (63, 1, 'Gral. Pinto');
INSERT INTO `prov_localidades` VALUES (64, 1, 'Gral. PueyrredÃ³n');
INSERT INTO `prov_localidades` VALUES (65, 1, 'Gral. RodrÃ­guez');
INSERT INTO `prov_localidades` VALUES (66, 1, 'Gral. Viamonte');
INSERT INTO `prov_localidades` VALUES (67, 1, 'Gral. Villegas');
INSERT INTO `prov_localidades` VALUES (68, 1, 'GuaminÃ­');
INSERT INTO `prov_localidades` VALUES (69, 1, 'Guernica');
INSERT INTO `prov_localidades` VALUES (70, 1, 'HipÃ³lito Yrigoyen');
INSERT INTO `prov_localidades` VALUES (71, 1, 'Ing. Maschwitz');
INSERT INTO `prov_localidades` VALUES (72, 1, 'JunÃ­n');
INSERT INTO `prov_localidades` VALUES (73, 1, 'La Plata');
INSERT INTO `prov_localidades` VALUES (74, 1, 'Laprida');
INSERT INTO `prov_localidades` VALUES (75, 1, 'Las Flores');
INSERT INTO `prov_localidades` VALUES (76, 1, 'Las Toninas');
INSERT INTO `prov_localidades` VALUES (77, 1, 'Leandro N. Alem');
INSERT INTO `prov_localidades` VALUES (78, 1, 'Lincoln');
INSERT INTO `prov_localidades` VALUES (79, 1, 'Loberia');
INSERT INTO `prov_localidades` VALUES (80, 1, 'Lobos');
INSERT INTO `prov_localidades` VALUES (81, 1, 'Los Cardales');
INSERT INTO `prov_localidades` VALUES (82, 1, 'Los Toldos');
INSERT INTO `prov_localidades` VALUES (83, 1, 'Lucila del Mar');
INSERT INTO `prov_localidades` VALUES (84, 1, 'LujÃ¡n');
INSERT INTO `prov_localidades` VALUES (85, 1, 'Magdalena');
INSERT INTO `prov_localidades` VALUES (86, 1, 'MaipÃº');
INSERT INTO `prov_localidades` VALUES (87, 1, 'Mar Chiquita');
INSERT INTO `prov_localidades` VALUES (88, 1, 'Mar de AjÃ³');
INSERT INTO `prov_localidades` VALUES (89, 1, 'Mar de las Pampas');
INSERT INTO `prov_localidades` VALUES (90, 1, 'Mar del Plata');
INSERT INTO `prov_localidades` VALUES (91, 1, 'Mar del TuyÃº');
INSERT INTO `prov_localidades` VALUES (92, 1, 'Marcos Paz');
INSERT INTO `prov_localidades` VALUES (93, 1, 'Mercedes');
INSERT INTO `prov_localidades` VALUES (94, 1, 'Miramar');
INSERT INTO `prov_localidades` VALUES (95, 1, 'Monte');
INSERT INTO `prov_localidades` VALUES (96, 1, 'Monte Hermoso');
INSERT INTO `prov_localidades` VALUES (97, 1, 'Munro');
INSERT INTO `prov_localidades` VALUES (98, 1, 'Navarro');
INSERT INTO `prov_localidades` VALUES (99, 1, 'Necochea');
INSERT INTO `prov_localidades` VALUES (100, 1, 'OlavarrÃ­a');
INSERT INTO `prov_localidades` VALUES (101, 1, 'Partido de la Costa');
INSERT INTO `prov_localidades` VALUES (102, 1, 'PehuajÃ³');
INSERT INTO `prov_localidades` VALUES (103, 1, 'Pellegrini');
INSERT INTO `prov_localidades` VALUES (104, 1, 'Pergamino');
INSERT INTO `prov_localidades` VALUES (105, 1, 'PigÃ¼Ã©');
INSERT INTO `prov_localidades` VALUES (106, 1, 'Pila');
INSERT INTO `prov_localidades` VALUES (107, 1, 'Pilar');
INSERT INTO `prov_localidades` VALUES (108, 1, 'Pinamar');
INSERT INTO `prov_localidades` VALUES (109, 1, 'Pinar del Sol');
INSERT INTO `prov_localidades` VALUES (110, 1, 'Polvorines');
INSERT INTO `prov_localidades` VALUES (111, 1, 'Pte. PerÃ³n');
INSERT INTO `prov_localidades` VALUES (112, 1, 'PuÃ¡n');
INSERT INTO `prov_localidades` VALUES (113, 1, 'Punta Indio');
INSERT INTO `prov_localidades` VALUES (114, 1, 'Ramallo');
INSERT INTO `prov_localidades` VALUES (115, 1, 'Rauch');
INSERT INTO `prov_localidades` VALUES (116, 1, 'Rivadavia');
INSERT INTO `prov_localidades` VALUES (117, 1, 'Rojas');
INSERT INTO `prov_localidades` VALUES (118, 1, 'Roque PÃ©rez');
INSERT INTO `prov_localidades` VALUES (119, 1, 'Saavedra');
INSERT INTO `prov_localidades` VALUES (120, 1, 'Saladillo');
INSERT INTO `prov_localidades` VALUES (121, 1, 'SalliquelÃ³');
INSERT INTO `prov_localidades` VALUES (122, 1, 'Salto');
INSERT INTO `prov_localidades` VALUES (123, 1, 'San AndrÃ©s de Giles');
INSERT INTO `prov_localidades` VALUES (124, 1, 'San Antonio de Areco');
INSERT INTO `prov_localidades` VALUES (125, 1, 'San Antonio de Padua');
INSERT INTO `prov_localidades` VALUES (126, 1, 'San Bernardo');
INSERT INTO `prov_localidades` VALUES (127, 1, 'San Cayetano');
INSERT INTO `prov_localidades` VALUES (128, 1, 'San Clemente del TuyÃº');
INSERT INTO `prov_localidades` VALUES (129, 1, 'San NicolÃ¡s');
INSERT INTO `prov_localidades` VALUES (130, 1, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (131, 1, 'San Vicente');
INSERT INTO `prov_localidades` VALUES (132, 1, 'Santa Teresita');
INSERT INTO `prov_localidades` VALUES (133, 1, 'Suipacha');
INSERT INTO `prov_localidades` VALUES (134, 1, 'Tandil');
INSERT INTO `prov_localidades` VALUES (135, 1, 'TapalquÃ©');
INSERT INTO `prov_localidades` VALUES (136, 1, 'Tordillo');
INSERT INTO `prov_localidades` VALUES (137, 1, 'Tornquist');
INSERT INTO `prov_localidades` VALUES (138, 1, 'Trenque Lauquen');
INSERT INTO `prov_localidades` VALUES (139, 1, 'Tres Lomas');
INSERT INTO `prov_localidades` VALUES (140, 1, 'Villa Gesell');
INSERT INTO `prov_localidades` VALUES (141, 1, 'Villarino');
INSERT INTO `prov_localidades` VALUES (142, 1, 'ZÃ¡rate');
INSERT INTO `prov_localidades` VALUES (143, 2, '11 de Septiembre');
INSERT INTO `prov_localidades` VALUES (144, 2, '20 de Junio');
INSERT INTO `prov_localidades` VALUES (145, 2, '25 de Mayo');
INSERT INTO `prov_localidades` VALUES (146, 2, 'Acassuso');
INSERT INTO `prov_localidades` VALUES (147, 2, 'AdroguÃ©');
INSERT INTO `prov_localidades` VALUES (148, 2, 'Aldo Bonzi');
INSERT INTO `prov_localidades` VALUES (149, 2, 'Ãrea Reserva CinturÃ³n EcolÃ³gico');
INSERT INTO `prov_localidades` VALUES (150, 2, 'Avellaneda');
INSERT INTO `prov_localidades` VALUES (151, 2, 'Banfield');
INSERT INTO `prov_localidades` VALUES (152, 2, 'Barrio Parque');
INSERT INTO `prov_localidades` VALUES (153, 2, 'Barrio Santa Teresita');
INSERT INTO `prov_localidades` VALUES (154, 2, 'Beccar');
INSERT INTO `prov_localidades` VALUES (155, 2, 'Bella Vista');
INSERT INTO `prov_localidades` VALUES (156, 2, 'Berazategui');
INSERT INTO `prov_localidades` VALUES (157, 2, 'Bernal Este');
INSERT INTO `prov_localidades` VALUES (158, 2, 'Bernal Oeste');
INSERT INTO `prov_localidades` VALUES (159, 2, 'Billinghurst');
INSERT INTO `prov_localidades` VALUES (160, 2, 'Boulogne');
INSERT INTO `prov_localidades` VALUES (161, 2, 'Burzaco');
INSERT INTO `prov_localidades` VALUES (162, 2, 'Carapachay');
INSERT INTO `prov_localidades` VALUES (163, 2, 'Caseros');
INSERT INTO `prov_localidades` VALUES (164, 2, 'Castelar');
INSERT INTO `prov_localidades` VALUES (165, 2, 'Churruca');
INSERT INTO `prov_localidades` VALUES (166, 2, 'Ciudad Evita');
INSERT INTO `prov_localidades` VALUES (167, 2, 'Ciudad Madero');
INSERT INTO `prov_localidades` VALUES (168, 2, 'Ciudadela');
INSERT INTO `prov_localidades` VALUES (169, 2, 'Claypole');
INSERT INTO `prov_localidades` VALUES (170, 2, 'Crucecita');
INSERT INTO `prov_localidades` VALUES (171, 2, 'Dock Sud');
INSERT INTO `prov_localidades` VALUES (172, 2, 'Don Bosco');
INSERT INTO `prov_localidades` VALUES (173, 2, 'Don Orione');
INSERT INTO `prov_localidades` VALUES (174, 2, 'El JagÃ¼el');
INSERT INTO `prov_localidades` VALUES (175, 2, 'El Libertador');
INSERT INTO `prov_localidades` VALUES (176, 2, 'El Palomar');
INSERT INTO `prov_localidades` VALUES (177, 2, 'El Tala');
INSERT INTO `prov_localidades` VALUES (178, 2, 'El TrÃ©bol');
INSERT INTO `prov_localidades` VALUES (179, 2, 'Ezeiza');
INSERT INTO `prov_localidades` VALUES (180, 2, 'Ezpeleta');
INSERT INTO `prov_localidades` VALUES (181, 2, 'Florencio Varela');
INSERT INTO `prov_localidades` VALUES (182, 2, 'Florida');
INSERT INTO `prov_localidades` VALUES (183, 2, 'Francisco Ãlvarez');
INSERT INTO `prov_localidades` VALUES (184, 2, 'Gerli');
INSERT INTO `prov_localidades` VALUES (185, 2, 'Glew');
INSERT INTO `prov_localidades` VALUES (186, 2, 'GonzÃ¡lez CatÃ¡n');
INSERT INTO `prov_localidades` VALUES (187, 2, 'Gral. Lamadrid');
INSERT INTO `prov_localidades` VALUES (188, 2, 'Grand Bourg');
INSERT INTO `prov_localidades` VALUES (189, 2, 'Gregorio de Laferrere');
INSERT INTO `prov_localidades` VALUES (190, 2, 'Guillermo Enrique Hudson');
INSERT INTO `prov_localidades` VALUES (191, 2, 'Haedo');
INSERT INTO `prov_localidades` VALUES (192, 2, 'Hurlingham');
INSERT INTO `prov_localidades` VALUES (193, 2, 'Ing. Sourdeaux');
INSERT INTO `prov_localidades` VALUES (194, 2, 'Isidro Casanova');
INSERT INTO `prov_localidades` VALUES (195, 2, 'ItuzaingÃ³');
INSERT INTO `prov_localidades` VALUES (196, 2, 'JosÃ© C. Paz');
INSERT INTO `prov_localidades` VALUES (197, 2, 'JosÃ© Ingenieros');
INSERT INTO `prov_localidades` VALUES (198, 2, 'JosÃ© Marmol');
INSERT INTO `prov_localidades` VALUES (199, 2, 'La Lucila');
INSERT INTO `prov_localidades` VALUES (200, 2, 'La Reja');
INSERT INTO `prov_localidades` VALUES (201, 2, 'La Tablada');
INSERT INTO `prov_localidades` VALUES (202, 2, 'LanÃºs');
INSERT INTO `prov_localidades` VALUES (203, 2, 'Llavallol');
INSERT INTO `prov_localidades` VALUES (204, 2, 'Loma Hermosa');
INSERT INTO `prov_localidades` VALUES (205, 2, 'Lomas de Zamora');
INSERT INTO `prov_localidades` VALUES (206, 2, 'Lomas del MillÃ³n');
INSERT INTO `prov_localidades` VALUES (207, 2, 'Lomas del Mirador');
INSERT INTO `prov_localidades` VALUES (208, 2, 'Longchamps');
INSERT INTO `prov_localidades` VALUES (209, 2, 'Los Polvorines');
INSERT INTO `prov_localidades` VALUES (210, 2, 'Luis GuillÃ³n');
INSERT INTO `prov_localidades` VALUES (211, 2, 'Malvinas Argentinas');
INSERT INTO `prov_localidades` VALUES (212, 2, 'MartÃ­n Coronado');
INSERT INTO `prov_localidades` VALUES (213, 2, 'MartÃ­nez');
INSERT INTO `prov_localidades` VALUES (214, 2, 'Merlo');
INSERT INTO `prov_localidades` VALUES (215, 2, 'Ministro Rivadavia');
INSERT INTO `prov_localidades` VALUES (216, 2, 'Monte Chingolo');
INSERT INTO `prov_localidades` VALUES (217, 2, 'Monte Grande');
INSERT INTO `prov_localidades` VALUES (218, 2, 'Moreno');
INSERT INTO `prov_localidades` VALUES (219, 2, 'MorÃ³n');
INSERT INTO `prov_localidades` VALUES (220, 2, 'MuÃ±iz');
INSERT INTO `prov_localidades` VALUES (221, 2, 'Olivos');
INSERT INTO `prov_localidades` VALUES (222, 2, 'Pablo NoguÃ©s');
INSERT INTO `prov_localidades` VALUES (223, 2, 'Pablo PodestÃ¡');
INSERT INTO `prov_localidades` VALUES (224, 2, 'Paso del Rey');
INSERT INTO `prov_localidades` VALUES (225, 2, 'Pereyra');
INSERT INTO `prov_localidades` VALUES (226, 2, 'PiÃ±eiro');
INSERT INTO `prov_localidades` VALUES (227, 2, 'PlÃ¡tanos');
INSERT INTO `prov_localidades` VALUES (228, 2, 'Pontevedra');
INSERT INTO `prov_localidades` VALUES (229, 2, 'Quilmes');
INSERT INTO `prov_localidades` VALUES (230, 2, 'Rafael Calzada');
INSERT INTO `prov_localidades` VALUES (231, 2, 'Rafael Castillo');
INSERT INTO `prov_localidades` VALUES (232, 2, 'Ramos MejÃ­a');
INSERT INTO `prov_localidades` VALUES (233, 2, 'Ranelagh');
INSERT INTO `prov_localidades` VALUES (234, 2, 'Remedios de Escalada');
INSERT INTO `prov_localidades` VALUES (235, 2, 'SÃ¡enz PeÃ±a');
INSERT INTO `prov_localidades` VALUES (236, 2, 'San Antonio de Padua');
INSERT INTO `prov_localidades` VALUES (237, 2, 'San Fernando');
INSERT INTO `prov_localidades` VALUES (238, 2, 'San Francisco Solano');
INSERT INTO `prov_localidades` VALUES (239, 2, 'San Isidro');
INSERT INTO `prov_localidades` VALUES (240, 2, 'San JosÃ©');
INSERT INTO `prov_localidades` VALUES (241, 2, 'San Justo');
INSERT INTO `prov_localidades` VALUES (242, 2, 'San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (243, 2, 'San Miguel');
INSERT INTO `prov_localidades` VALUES (244, 2, 'Santos Lugares');
INSERT INTO `prov_localidades` VALUES (245, 2, 'SarandÃ­');
INSERT INTO `prov_localidades` VALUES (246, 2, 'Sourigues');
INSERT INTO `prov_localidades` VALUES (247, 2, 'Tapiales');
INSERT INTO `prov_localidades` VALUES (248, 2, 'Temperley');
INSERT INTO `prov_localidades` VALUES (249, 2, 'Tigre');
INSERT INTO `prov_localidades` VALUES (250, 2, 'Tortuguitas');
INSERT INTO `prov_localidades` VALUES (251, 2, 'TristÃ¡n SuÃ¡rez');
INSERT INTO `prov_localidades` VALUES (252, 2, 'Trujui');
INSERT INTO `prov_localidades` VALUES (253, 2, 'Turdera');
INSERT INTO `prov_localidades` VALUES (254, 2, 'ValentÃ­n Alsina');
INSERT INTO `prov_localidades` VALUES (255, 2, 'Vicente LÃ³pez');
INSERT INTO `prov_localidades` VALUES (256, 2, 'Villa Adelina');
INSERT INTO `prov_localidades` VALUES (257, 2, 'Villa Ballester');
INSERT INTO `prov_localidades` VALUES (258, 2, 'Villa Bosch');
INSERT INTO `prov_localidades` VALUES (259, 2, 'Villa Caraza');
INSERT INTO `prov_localidades` VALUES (260, 2, 'Villa Celina');
INSERT INTO `prov_localidades` VALUES (261, 2, 'Villa Centenario');
INSERT INTO `prov_localidades` VALUES (262, 2, 'Villa de Mayo');
INSERT INTO `prov_localidades` VALUES (263, 2, 'Villa Diamante');
INSERT INTO `prov_localidades` VALUES (264, 2, 'Villa DomÃ­nico');
INSERT INTO `prov_localidades` VALUES (265, 2, 'Villa EspaÃ±a');
INSERT INTO `prov_localidades` VALUES (266, 2, 'Villa Fiorito');
INSERT INTO `prov_localidades` VALUES (267, 2, 'Villa Guillermina');
INSERT INTO `prov_localidades` VALUES (268, 2, 'Villa Insuperable');
INSERT INTO `prov_localidades` VALUES (269, 2, 'Villa JosÃ© LeÃ³n SuÃ¡rez');
INSERT INTO `prov_localidades` VALUES (270, 2, 'Villa La Florida');
INSERT INTO `prov_localidades` VALUES (271, 2, 'Villa Luzuriaga');
INSERT INTO `prov_localidades` VALUES (272, 2, 'Villa Martelli');
INSERT INTO `prov_localidades` VALUES (273, 2, 'Villa Obrera');
INSERT INTO `prov_localidades` VALUES (274, 2, 'Villa Progreso');
INSERT INTO `prov_localidades` VALUES (275, 2, 'Villa Raffo');
INSERT INTO `prov_localidades` VALUES (276, 2, 'Villa Sarmiento');
INSERT INTO `prov_localidades` VALUES (277, 2, 'Villa Tesei');
INSERT INTO `prov_localidades` VALUES (278, 2, 'Villa Udaondo');
INSERT INTO `prov_localidades` VALUES (279, 2, 'Virrey del Pino');
INSERT INTO `prov_localidades` VALUES (280, 2, 'Wilde');
INSERT INTO `prov_localidades` VALUES (281, 2, 'William Morris');
INSERT INTO `prov_localidades` VALUES (282, 3, 'AgronomÃ­a');
INSERT INTO `prov_localidades` VALUES (283, 3, 'Almagro');
INSERT INTO `prov_localidades` VALUES (284, 3, 'Balvanera');
INSERT INTO `prov_localidades` VALUES (285, 3, 'Barracas');
INSERT INTO `prov_localidades` VALUES (286, 3, 'Belgrano');
INSERT INTO `prov_localidades` VALUES (287, 3, 'Boca');
INSERT INTO `prov_localidades` VALUES (288, 3, 'Boedo');
INSERT INTO `prov_localidades` VALUES (289, 3, 'Caballito');
INSERT INTO `prov_localidades` VALUES (290, 3, 'Chacarita');
INSERT INTO `prov_localidades` VALUES (291, 3, 'Coghlan');
INSERT INTO `prov_localidades` VALUES (292, 3, 'Colegiales');
INSERT INTO `prov_localidades` VALUES (293, 3, 'ConstituciÃ³n');
INSERT INTO `prov_localidades` VALUES (294, 3, 'Flores');
INSERT INTO `prov_localidades` VALUES (295, 3, 'Floresta');
INSERT INTO `prov_localidades` VALUES (296, 3, 'La Paternal');
INSERT INTO `prov_localidades` VALUES (297, 3, 'Liniers');
INSERT INTO `prov_localidades` VALUES (298, 3, 'Mataderos');
INSERT INTO `prov_localidades` VALUES (299, 3, 'Monserrat');
INSERT INTO `prov_localidades` VALUES (300, 3, 'Monte Castro');
INSERT INTO `prov_localidades` VALUES (301, 3, 'Nueva Pompeya');
INSERT INTO `prov_localidades` VALUES (302, 3, 'NÃºÃ±ez');
INSERT INTO `prov_localidades` VALUES (303, 3, 'Palermo');
INSERT INTO `prov_localidades` VALUES (304, 3, 'Parque Avellaneda');
INSERT INTO `prov_localidades` VALUES (305, 3, 'Parque Chacabuco');
INSERT INTO `prov_localidades` VALUES (306, 3, 'Parque Chas');
INSERT INTO `prov_localidades` VALUES (307, 3, 'Parque Patricios');
INSERT INTO `prov_localidades` VALUES (308, 3, 'Puerto Madero');
INSERT INTO `prov_localidades` VALUES (309, 3, 'Recoleta');
INSERT INTO `prov_localidades` VALUES (310, 3, 'Retiro');
INSERT INTO `prov_localidades` VALUES (311, 3, 'Saavedra');
INSERT INTO `prov_localidades` VALUES (312, 3, 'San CristÃ³bal');
INSERT INTO `prov_localidades` VALUES (313, 3, 'San NicolÃ¡s');
INSERT INTO `prov_localidades` VALUES (314, 3, 'San Telmo');
INSERT INTO `prov_localidades` VALUES (315, 3, 'VÃ©lez SÃ¡rsfield');
INSERT INTO `prov_localidades` VALUES (316, 3, 'Versalles');
INSERT INTO `prov_localidades` VALUES (317, 3, 'Villa Crespo');
INSERT INTO `prov_localidades` VALUES (318, 3, 'Villa del Parque');
INSERT INTO `prov_localidades` VALUES (319, 3, 'Villa Devoto');
INSERT INTO `prov_localidades` VALUES (320, 3, 'Villa Gral. Mitre');
INSERT INTO `prov_localidades` VALUES (321, 3, 'Villa Lugano');
INSERT INTO `prov_localidades` VALUES (322, 3, 'Villa Luro');
INSERT INTO `prov_localidades` VALUES (323, 3, 'Villa OrtÃºzar');
INSERT INTO `prov_localidades` VALUES (324, 3, 'Villa PueyrredÃ³n');
INSERT INTO `prov_localidades` VALUES (325, 3, 'Villa Real');
INSERT INTO `prov_localidades` VALUES (326, 3, 'Villa Riachuelo');
INSERT INTO `prov_localidades` VALUES (327, 3, 'Villa Santa Rita');
INSERT INTO `prov_localidades` VALUES (328, 3, 'Villa Soldati');
INSERT INTO `prov_localidades` VALUES (329, 3, 'Villa Urquiza');
INSERT INTO `prov_localidades` VALUES (330, 4, 'Aconquija');
INSERT INTO `prov_localidades` VALUES (331, 4, 'Ancasti');
INSERT INTO `prov_localidades` VALUES (332, 4, 'AndalgalÃ¡');
INSERT INTO `prov_localidades` VALUES (333, 4, 'Antofagasta');
INSERT INTO `prov_localidades` VALUES (334, 4, 'BelÃ©n');
INSERT INTO `prov_localidades` VALUES (335, 4, 'CapayÃ¡n');
INSERT INTO `prov_localidades` VALUES (336, 4, 'Capital');
INSERT INTO `prov_localidades` VALUES (338, 4, 'Corral Quemado');
INSERT INTO `prov_localidades` VALUES (339, 4, 'El Alto');
INSERT INTO `prov_localidades` VALUES (340, 4, 'El Rodeo');
INSERT INTO `prov_localidades` VALUES (341, 4, 'F.Mamerto EsquiÃº');
INSERT INTO `prov_localidades` VALUES (342, 4, 'FiambalÃ¡');
INSERT INTO `prov_localidades` VALUES (343, 4, 'HualfÃ­n');
INSERT INTO `prov_localidades` VALUES (344, 4, 'Huillapima');
INSERT INTO `prov_localidades` VALUES (345, 4, 'IcaÃ±o');
INSERT INTO `prov_localidades` VALUES (346, 4, 'La Puerta');
INSERT INTO `prov_localidades` VALUES (347, 4, 'Las Juntas');
INSERT INTO `prov_localidades` VALUES (348, 4, 'Londres');
INSERT INTO `prov_localidades` VALUES (349, 4, 'Los Altos');
INSERT INTO `prov_localidades` VALUES (350, 4, 'Los Varela');
INSERT INTO `prov_localidades` VALUES (351, 4, 'MutquÃ­n');
INSERT INTO `prov_localidades` VALUES (352, 4, 'PaclÃ­n');
INSERT INTO `prov_localidades` VALUES (353, 4, 'Poman');
INSERT INTO `prov_localidades` VALUES (354, 4, 'Pozo de La Piedra');
INSERT INTO `prov_localidades` VALUES (355, 4, 'Puerta de Corral');
INSERT INTO `prov_localidades` VALUES (356, 4, 'Puerta San JosÃ©');
INSERT INTO `prov_localidades` VALUES (357, 4, 'Recreo');
INSERT INTO `prov_localidades` VALUES (358, 4, 'S.F.V de 4');
INSERT INTO `prov_localidades` VALUES (359, 4, 'San Fernando');
INSERT INTO `prov_localidades` VALUES (360, 4, 'San Fernando del Valle');
INSERT INTO `prov_localidades` VALUES (361, 4, 'San JosÃ©');
INSERT INTO `prov_localidades` VALUES (362, 4, 'Santa MarÃ­a');
INSERT INTO `prov_localidades` VALUES (363, 4, 'Santa Rosa');
INSERT INTO `prov_localidades` VALUES (364, 4, 'Saujil');
INSERT INTO `prov_localidades` VALUES (365, 4, 'Tapso');
INSERT INTO `prov_localidades` VALUES (366, 4, 'Tinogasta');
INSERT INTO `prov_localidades` VALUES (367, 4, 'Valle Viejo');
INSERT INTO `prov_localidades` VALUES (368, 4, 'Villa Vil');
INSERT INTO `prov_localidades` VALUES (369, 5, 'AviÃ¡ TeraÃ­');
INSERT INTO `prov_localidades` VALUES (370, 5, 'Barranqueras');
INSERT INTO `prov_localidades` VALUES (371, 5, 'Basail');
INSERT INTO `prov_localidades` VALUES (372, 5, 'Campo Largo');
INSERT INTO `prov_localidades` VALUES (373, 5, 'Capital');
INSERT INTO `prov_localidades` VALUES (374, 5, 'CapitÃ¡n Solari');
INSERT INTO `prov_localidades` VALUES (375, 5, 'Charadai');
INSERT INTO `prov_localidades` VALUES (376, 5, 'Charata');
INSERT INTO `prov_localidades` VALUES (377, 5, 'Chorotis');
INSERT INTO `prov_localidades` VALUES (378, 5, 'Ciervo Petiso');
INSERT INTO `prov_localidades` VALUES (379, 5, 'Cnel. Du Graty');
INSERT INTO `prov_localidades` VALUES (380, 5, 'Col. BenÃ­tez');
INSERT INTO `prov_localidades` VALUES (381, 5, 'Col. Elisa');
INSERT INTO `prov_localidades` VALUES (382, 5, 'Col. Popular');
INSERT INTO `prov_localidades` VALUES (383, 5, 'Colonias Unidas');
INSERT INTO `prov_localidades` VALUES (384, 5, 'ConcepciÃ³n');
INSERT INTO `prov_localidades` VALUES (385, 5, 'Corzuela');
INSERT INTO `prov_localidades` VALUES (386, 5, 'Cote Lai');
INSERT INTO `prov_localidades` VALUES (387, 5, 'El Sauzalito');
INSERT INTO `prov_localidades` VALUES (388, 5, 'Enrique Urien');
INSERT INTO `prov_localidades` VALUES (389, 5, 'Fontana');
INSERT INTO `prov_localidades` VALUES (390, 5, 'Fte. Esperanza');
INSERT INTO `prov_localidades` VALUES (391, 5, 'Gancedo');
INSERT INTO `prov_localidades` VALUES (392, 5, 'Gral. Capdevila');
INSERT INTO `prov_localidades` VALUES (393, 5, 'Gral. Pinero');
INSERT INTO `prov_localidades` VALUES (394, 5, 'Gral. San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (395, 5, 'Gral. Vedia');
INSERT INTO `prov_localidades` VALUES (396, 5, 'Hermoso Campo');
INSERT INTO `prov_localidades` VALUES (397, 5, 'I. del Cerrito');
INSERT INTO `prov_localidades` VALUES (398, 5, 'J.J. Castelli');
INSERT INTO `prov_localidades` VALUES (399, 5, 'La Clotilde');
INSERT INTO `prov_localidades` VALUES (400, 5, 'La Eduvigis');
INSERT INTO `prov_localidades` VALUES (401, 5, 'La Escondida');
INSERT INTO `prov_localidades` VALUES (402, 5, 'La Leonesa');
INSERT INTO `prov_localidades` VALUES (403, 5, 'La Tigra');
INSERT INTO `prov_localidades` VALUES (404, 5, 'La Verde');
INSERT INTO `prov_localidades` VALUES (405, 5, 'Laguna Blanca');
INSERT INTO `prov_localidades` VALUES (406, 5, 'Laguna Limpia');
INSERT INTO `prov_localidades` VALUES (407, 5, 'Lapachito');
INSERT INTO `prov_localidades` VALUES (408, 5, 'Las BreÃ±as');
INSERT INTO `prov_localidades` VALUES (409, 5, 'Las Garcitas');
INSERT INTO `prov_localidades` VALUES (410, 5, 'Las Palmas');
INSERT INTO `prov_localidades` VALUES (411, 5, 'Los Frentones');
INSERT INTO `prov_localidades` VALUES (412, 5, 'Machagai');
INSERT INTO `prov_localidades` VALUES (413, 5, 'MakallÃ©');
INSERT INTO `prov_localidades` VALUES (414, 5, 'Margarita BelÃ©n');
INSERT INTO `prov_localidades` VALUES (415, 5, 'Miraflores');
INSERT INTO `prov_localidades` VALUES (416, 5, 'MisiÃ³n N. Pompeya');
INSERT INTO `prov_localidades` VALUES (417, 5, 'Napenay');
INSERT INTO `prov_localidades` VALUES (418, 5, 'Pampa AlmirÃ³n');
INSERT INTO `prov_localidades` VALUES (419, 5, 'Pampa del Indio');
INSERT INTO `prov_localidades` VALUES (420, 5, 'Pampa del Infierno');
INSERT INTO `prov_localidades` VALUES (421, 5, 'Pdcia. de La Plaza');
INSERT INTO `prov_localidades` VALUES (422, 5, 'Pdcia. Roca');
INSERT INTO `prov_localidades` VALUES (423, 5, 'Pdcia. Roque SÃ¡enz PeÃ±a');
INSERT INTO `prov_localidades` VALUES (424, 5, 'Pto. Bermejo');
INSERT INTO `prov_localidades` VALUES (425, 5, 'Pto. Eva PerÃ³n');
INSERT INTO `prov_localidades` VALUES (426, 5, 'Puero Tirol');
INSERT INTO `prov_localidades` VALUES (427, 5, 'Puerto Vilelas');
INSERT INTO `prov_localidades` VALUES (428, 5, 'Quitilipi');
INSERT INTO `prov_localidades` VALUES (429, 5, 'Resistencia');
INSERT INTO `prov_localidades` VALUES (430, 5, 'SÃ¡enz PeÃ±a');
INSERT INTO `prov_localidades` VALUES (431, 5, 'SamuhÃº');
INSERT INTO `prov_localidades` VALUES (432, 5, 'San Bernardo');
INSERT INTO `prov_localidades` VALUES (433, 5, 'Santa Sylvina');
INSERT INTO `prov_localidades` VALUES (434, 5, 'Taco Pozo');
INSERT INTO `prov_localidades` VALUES (435, 5, 'Tres Isletas');
INSERT INTO `prov_localidades` VALUES (436, 5, 'Villa Ãngela');
INSERT INTO `prov_localidades` VALUES (437, 5, 'Villa Berthet');
INSERT INTO `prov_localidades` VALUES (438, 5, 'Villa R. Bermejito');
INSERT INTO `prov_localidades` VALUES (439, 6, 'Aldea Apeleg');
INSERT INTO `prov_localidades` VALUES (440, 6, 'Aldea Beleiro');
INSERT INTO `prov_localidades` VALUES (441, 6, 'Aldea Epulef');
INSERT INTO `prov_localidades` VALUES (442, 6, 'Alto RÃ­o Sengerr');
INSERT INTO `prov_localidades` VALUES (443, 6, 'Buen Pasto');
INSERT INTO `prov_localidades` VALUES (444, 6, 'Camarones');
INSERT INTO `prov_localidades` VALUES (445, 6, 'CarrenleufÃº');
INSERT INTO `prov_localidades` VALUES (446, 6, 'Cholila');
INSERT INTO `prov_localidades` VALUES (447, 6, 'Co. Centinela');
INSERT INTO `prov_localidades` VALUES (448, 6, 'Colan ConhuÃ©');
INSERT INTO `prov_localidades` VALUES (449, 6, 'Comodoro Rivadavia');
INSERT INTO `prov_localidades` VALUES (450, 6, 'Corcovado');
INSERT INTO `prov_localidades` VALUES (451, 6, 'Cushamen');
INSERT INTO `prov_localidades` VALUES (452, 6, 'Dique F. Ameghino');
INSERT INTO `prov_localidades` VALUES (453, 6, 'DolavÃ³n');
INSERT INTO `prov_localidades` VALUES (454, 6, 'Dr. R. Rojas');
INSERT INTO `prov_localidades` VALUES (455, 6, 'El Hoyo');
INSERT INTO `prov_localidades` VALUES (456, 6, 'El MaitÃ©n');
INSERT INTO `prov_localidades` VALUES (457, 6, 'EpuyÃ©n');
INSERT INTO `prov_localidades` VALUES (458, 6, 'Esquel');
INSERT INTO `prov_localidades` VALUES (459, 6, 'Facundo');
INSERT INTO `prov_localidades` VALUES (460, 6, 'GaimÃ¡n');
INSERT INTO `prov_localidades` VALUES (461, 6, 'Gan Gan');
INSERT INTO `prov_localidades` VALUES (462, 6, 'Gastre');
INSERT INTO `prov_localidades` VALUES (463, 6, 'Gdor. Costa');
INSERT INTO `prov_localidades` VALUES (464, 6, 'Gualjaina');
INSERT INTO `prov_localidades` VALUES (465, 6, 'J. de San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (466, 6, 'Lago Blanco');
INSERT INTO `prov_localidades` VALUES (467, 6, 'Lago Puelo');
INSERT INTO `prov_localidades` VALUES (468, 6, 'Lagunita Salada');
INSERT INTO `prov_localidades` VALUES (469, 6, 'Las Plumas');
INSERT INTO `prov_localidades` VALUES (470, 6, 'Los Altares');
INSERT INTO `prov_localidades` VALUES (471, 6, 'Paso de los Indios');
INSERT INTO `prov_localidades` VALUES (472, 6, 'Paso del Sapo');
INSERT INTO `prov_localidades` VALUES (473, 6, 'Pto. Madryn');
INSERT INTO `prov_localidades` VALUES (474, 6, 'Pto. PirÃ¡mides');
INSERT INTO `prov_localidades` VALUES (475, 6, 'Rada Tilly');
INSERT INTO `prov_localidades` VALUES (476, 6, 'Rawson');
INSERT INTO `prov_localidades` VALUES (477, 6, 'RÃ­o Mayo');
INSERT INTO `prov_localidades` VALUES (478, 6, 'RÃ­o Pico');
INSERT INTO `prov_localidades` VALUES (479, 6, 'Sarmiento');
INSERT INTO `prov_localidades` VALUES (480, 6, 'Tecka');
INSERT INTO `prov_localidades` VALUES (481, 6, 'Telsen');
INSERT INTO `prov_localidades` VALUES (482, 6, 'Trelew');
INSERT INTO `prov_localidades` VALUES (483, 6, 'Trevelin');
INSERT INTO `prov_localidades` VALUES (484, 6, 'Veintiocho de Julio');
INSERT INTO `prov_localidades` VALUES (485, 7, 'Achiras');
INSERT INTO `prov_localidades` VALUES (486, 7, 'Adelia Maria');
INSERT INTO `prov_localidades` VALUES (487, 7, 'Agua de Oro');
INSERT INTO `prov_localidades` VALUES (488, 7, 'Alcira Gigena');
INSERT INTO `prov_localidades` VALUES (489, 7, 'Aldea Santa Maria');
INSERT INTO `prov_localidades` VALUES (490, 7, 'Alejandro Roca');
INSERT INTO `prov_localidades` VALUES (491, 7, 'Alejo Ledesma');
INSERT INTO `prov_localidades` VALUES (492, 7, 'Alicia');
INSERT INTO `prov_localidades` VALUES (493, 7, 'Almafuerte');
INSERT INTO `prov_localidades` VALUES (494, 7, 'Alpa Corral');
INSERT INTO `prov_localidades` VALUES (495, 7, 'Alta Gracia');
INSERT INTO `prov_localidades` VALUES (496, 7, 'Alto Alegre');
INSERT INTO `prov_localidades` VALUES (497, 7, 'Alto de Los Quebrachos');
INSERT INTO `prov_localidades` VALUES (498, 7, 'Altos de Chipion');
INSERT INTO `prov_localidades` VALUES (499, 7, 'Amboy');
INSERT INTO `prov_localidades` VALUES (500, 7, 'Ambul');
INSERT INTO `prov_localidades` VALUES (501, 7, 'Ana Zumaran');
INSERT INTO `prov_localidades` VALUES (502, 7, 'Anisacate');
INSERT INTO `prov_localidades` VALUES (503, 7, 'Arguello');
INSERT INTO `prov_localidades` VALUES (504, 7, 'Arias');
INSERT INTO `prov_localidades` VALUES (505, 7, 'Arroyito');
INSERT INTO `prov_localidades` VALUES (506, 7, 'Arroyo Algodon');
INSERT INTO `prov_localidades` VALUES (507, 7, 'Arroyo Cabral');
INSERT INTO `prov_localidades` VALUES (508, 7, 'Arroyo Los Patos');
INSERT INTO `prov_localidades` VALUES (509, 7, 'Assunta');
INSERT INTO `prov_localidades` VALUES (510, 7, 'Atahona');
INSERT INTO `prov_localidades` VALUES (511, 7, 'Ausonia');
INSERT INTO `prov_localidades` VALUES (512, 7, 'Avellaneda');
INSERT INTO `prov_localidades` VALUES (513, 7, 'Ballesteros');
INSERT INTO `prov_localidades` VALUES (514, 7, 'Ballesteros Sud');
INSERT INTO `prov_localidades` VALUES (515, 7, 'Balnearia');
INSERT INTO `prov_localidades` VALUES (516, 7, 'BaÃ±ado de Soto');
INSERT INTO `prov_localidades` VALUES (517, 7, 'Bell Ville');
INSERT INTO `prov_localidades` VALUES (518, 7, 'Bengolea');
INSERT INTO `prov_localidades` VALUES (519, 7, 'Benjamin Gould');
INSERT INTO `prov_localidades` VALUES (520, 7, 'Berrotaran');
INSERT INTO `prov_localidades` VALUES (521, 7, 'Bialet Masse');
INSERT INTO `prov_localidades` VALUES (522, 7, 'Bouwer');
INSERT INTO `prov_localidades` VALUES (523, 7, 'Brinkmann');
INSERT INTO `prov_localidades` VALUES (524, 7, 'Buchardo');
INSERT INTO `prov_localidades` VALUES (525, 7, 'Bulnes');
INSERT INTO `prov_localidades` VALUES (526, 7, 'Cabalango');
INSERT INTO `prov_localidades` VALUES (527, 7, 'Calamuchita');
INSERT INTO `prov_localidades` VALUES (528, 7, 'Calchin');
INSERT INTO `prov_localidades` VALUES (529, 7, 'Calchin Oeste');
INSERT INTO `prov_localidades` VALUES (530, 7, 'Calmayo');
INSERT INTO `prov_localidades` VALUES (531, 7, 'Camilo Aldao');
INSERT INTO `prov_localidades` VALUES (532, 7, 'Caminiaga');
INSERT INTO `prov_localidades` VALUES (533, 7, 'CaÃ±ada de Luque');
INSERT INTO `prov_localidades` VALUES (534, 7, 'CaÃ±ada de Machado');
INSERT INTO `prov_localidades` VALUES (535, 7, 'CaÃ±ada de Rio Pinto');
INSERT INTO `prov_localidades` VALUES (536, 7, 'CaÃ±ada del Sauce');
INSERT INTO `prov_localidades` VALUES (537, 7, 'Canals');
INSERT INTO `prov_localidades` VALUES (538, 7, 'Candelaria Sud');
INSERT INTO `prov_localidades` VALUES (539, 7, 'Capilla de Remedios');
INSERT INTO `prov_localidades` VALUES (540, 7, 'Capilla de Siton');
INSERT INTO `prov_localidades` VALUES (541, 7, 'Capilla del Carmen');
INSERT INTO `prov_localidades` VALUES (542, 7, 'Capilla del Monte');
INSERT INTO `prov_localidades` VALUES (543, 7, 'Capital');
INSERT INTO `prov_localidades` VALUES (544, 7, 'Capitan Gral B. OÂ´Higgins');
INSERT INTO `prov_localidades` VALUES (545, 7, 'Carnerillo');
INSERT INTO `prov_localidades` VALUES (546, 7, 'Carrilobo');
INSERT INTO `prov_localidades` VALUES (547, 7, 'Casa Grande');
INSERT INTO `prov_localidades` VALUES (548, 7, 'Cavanagh');
INSERT INTO `prov_localidades` VALUES (549, 7, 'Cerro Colorado');
INSERT INTO `prov_localidades` VALUES (550, 7, 'ChajÃ¡n');
INSERT INTO `prov_localidades` VALUES (551, 7, 'Chalacea');
INSERT INTO `prov_localidades` VALUES (552, 7, 'ChaÃ±ar Viejo');
INSERT INTO `prov_localidades` VALUES (553, 7, 'ChancanÃ­');
INSERT INTO `prov_localidades` VALUES (554, 7, 'Charbonier');
INSERT INTO `prov_localidades` VALUES (555, 7, 'Charras');
INSERT INTO `prov_localidades` VALUES (556, 7, 'ChazÃ³n');
INSERT INTO `prov_localidades` VALUES (557, 7, 'Chilibroste');
INSERT INTO `prov_localidades` VALUES (558, 7, 'Chucul');
INSERT INTO `prov_localidades` VALUES (559, 7, 'ChuÃ±a');
INSERT INTO `prov_localidades` VALUES (560, 7, 'ChuÃ±a Huasi');
INSERT INTO `prov_localidades` VALUES (561, 7, 'Churqui CaÃ±ada');
INSERT INTO `prov_localidades` VALUES (562, 7, 'Cienaga Del Coro');
INSERT INTO `prov_localidades` VALUES (563, 7, 'Cintra');
INSERT INTO `prov_localidades` VALUES (564, 7, 'Col. Almada');
INSERT INTO `prov_localidades` VALUES (565, 7, 'Col. Anita');
INSERT INTO `prov_localidades` VALUES (566, 7, 'Col. Barge');
INSERT INTO `prov_localidades` VALUES (567, 7, 'Col. Bismark');
INSERT INTO `prov_localidades` VALUES (568, 7, 'Col. Bremen');
INSERT INTO `prov_localidades` VALUES (569, 7, 'Col. Caroya');
INSERT INTO `prov_localidades` VALUES (570, 7, 'Col. Italiana');
INSERT INTO `prov_localidades` VALUES (571, 7, 'Col. Iturraspe');
INSERT INTO `prov_localidades` VALUES (572, 7, 'Col. Las Cuatro Esquinas');
INSERT INTO `prov_localidades` VALUES (573, 7, 'Col. Las Pichanas');
INSERT INTO `prov_localidades` VALUES (574, 7, 'Col. Marina');
INSERT INTO `prov_localidades` VALUES (575, 7, 'Col. Prosperidad');
INSERT INTO `prov_localidades` VALUES (576, 7, 'Col. San Bartolome');
INSERT INTO `prov_localidades` VALUES (577, 7, 'Col. San Pedro');
INSERT INTO `prov_localidades` VALUES (578, 7, 'Col. Tirolesa');
INSERT INTO `prov_localidades` VALUES (579, 7, 'Col. Vicente Aguero');
INSERT INTO `prov_localidades` VALUES (580, 7, 'Col. Videla');
INSERT INTO `prov_localidades` VALUES (581, 7, 'Col. Vignaud');
INSERT INTO `prov_localidades` VALUES (582, 7, 'Col. Waltelina');
INSERT INTO `prov_localidades` VALUES (583, 7, 'Colazo');
INSERT INTO `prov_localidades` VALUES (584, 7, 'Comechingones');
INSERT INTO `prov_localidades` VALUES (585, 7, 'Conlara');
INSERT INTO `prov_localidades` VALUES (586, 7, 'Copacabana');
INSERT INTO `prov_localidades` VALUES (588, 7, 'Coronel Baigorria');
INSERT INTO `prov_localidades` VALUES (589, 7, 'Coronel Moldes');
INSERT INTO `prov_localidades` VALUES (590, 7, 'Corral de Bustos');
INSERT INTO `prov_localidades` VALUES (591, 7, 'Corralito');
INSERT INTO `prov_localidades` VALUES (592, 7, 'CosquÃ­n');
INSERT INTO `prov_localidades` VALUES (593, 7, 'Costa Sacate');
INSERT INTO `prov_localidades` VALUES (594, 7, 'Cruz Alta');
INSERT INTO `prov_localidades` VALUES (595, 7, 'Cruz de CaÃ±a');
INSERT INTO `prov_localidades` VALUES (596, 7, 'Cruz del Eje');
INSERT INTO `prov_localidades` VALUES (597, 7, 'Cuesta Blanca');
INSERT INTO `prov_localidades` VALUES (598, 7, 'Dean Funes');
INSERT INTO `prov_localidades` VALUES (599, 7, 'Del Campillo');
INSERT INTO `prov_localidades` VALUES (600, 7, 'DespeÃ±aderos');
INSERT INTO `prov_localidades` VALUES (601, 7, 'Devoto');
INSERT INTO `prov_localidades` VALUES (602, 7, 'Diego de Rojas');
INSERT INTO `prov_localidades` VALUES (603, 7, 'Dique Chico');
INSERT INTO `prov_localidades` VALUES (604, 7, 'El AraÃ±ado');
INSERT INTO `prov_localidades` VALUES (605, 7, 'El Brete');
INSERT INTO `prov_localidades` VALUES (606, 7, 'El Chacho');
INSERT INTO `prov_localidades` VALUES (607, 7, 'El CrispÃ­n');
INSERT INTO `prov_localidades` VALUES (608, 7, 'El FortÃ­n');
INSERT INTO `prov_localidades` VALUES (609, 7, 'El Manzano');
INSERT INTO `prov_localidades` VALUES (610, 7, 'El Rastreador');
INSERT INTO `prov_localidades` VALUES (611, 7, 'El Rodeo');
INSERT INTO `prov_localidades` VALUES (612, 7, 'El TÃ­o');
INSERT INTO `prov_localidades` VALUES (613, 7, 'Elena');
INSERT INTO `prov_localidades` VALUES (614, 7, 'Embalse');
INSERT INTO `prov_localidades` VALUES (615, 7, 'Esquina');
INSERT INTO `prov_localidades` VALUES (616, 7, 'EstaciÃ³n Gral. Paz');
INSERT INTO `prov_localidades` VALUES (617, 7, 'EstaciÃ³n JuÃ¡rez Celman');
INSERT INTO `prov_localidades` VALUES (618, 7, 'Estancia de Guadalupe');
INSERT INTO `prov_localidades` VALUES (619, 7, 'Estancia Vieja');
INSERT INTO `prov_localidades` VALUES (620, 7, 'Etruria');
INSERT INTO `prov_localidades` VALUES (621, 7, 'Eufrasio Loza');
INSERT INTO `prov_localidades` VALUES (622, 7, 'Falda del Carmen');
INSERT INTO `prov_localidades` VALUES (623, 7, 'Freyre');
INSERT INTO `prov_localidades` VALUES (624, 7, 'Gral. Baldissera');
INSERT INTO `prov_localidades` VALUES (625, 7, 'Gral. Cabrera');
INSERT INTO `prov_localidades` VALUES (626, 7, 'Gral. Deheza');
INSERT INTO `prov_localidades` VALUES (627, 7, 'Gral. Fotheringham');
INSERT INTO `prov_localidades` VALUES (628, 7, 'Gral. Levalle');
INSERT INTO `prov_localidades` VALUES (629, 7, 'Gral. Roca');
INSERT INTO `prov_localidades` VALUES (630, 7, 'Guanaco Muerto');
INSERT INTO `prov_localidades` VALUES (631, 7, 'Guasapampa');
INSERT INTO `prov_localidades` VALUES (632, 7, 'Guatimozin');
INSERT INTO `prov_localidades` VALUES (633, 7, 'Gutenberg');
INSERT INTO `prov_localidades` VALUES (634, 7, 'Hernando');
INSERT INTO `prov_localidades` VALUES (635, 7, 'Huanchillas');
INSERT INTO `prov_localidades` VALUES (636, 7, 'Huerta Grande');
INSERT INTO `prov_localidades` VALUES (637, 7, 'Huinca Renanco');
INSERT INTO `prov_localidades` VALUES (638, 7, 'Idiazabal');
INSERT INTO `prov_localidades` VALUES (639, 7, 'Impira');
INSERT INTO `prov_localidades` VALUES (640, 7, 'Inriville');
INSERT INTO `prov_localidades` VALUES (641, 7, 'Isla Verde');
INSERT INTO `prov_localidades` VALUES (642, 7, 'ItalÃ³');
INSERT INTO `prov_localidades` VALUES (643, 7, 'James Craik');
INSERT INTO `prov_localidades` VALUES (644, 7, 'JesÃºs MarÃ­a');
INSERT INTO `prov_localidades` VALUES (645, 7, 'Jovita');
INSERT INTO `prov_localidades` VALUES (646, 7, 'Justiniano Posse');
INSERT INTO `prov_localidades` VALUES (647, 7, 'Km 658');
INSERT INTO `prov_localidades` VALUES (648, 7, 'L. V. Mansilla');
INSERT INTO `prov_localidades` VALUES (649, 7, 'La Batea');
INSERT INTO `prov_localidades` VALUES (650, 7, 'La Calera');
INSERT INTO `prov_localidades` VALUES (651, 7, 'La Carlota');
INSERT INTO `prov_localidades` VALUES (652, 7, 'La Carolina');
INSERT INTO `prov_localidades` VALUES (653, 7, 'La Cautiva');
INSERT INTO `prov_localidades` VALUES (654, 7, 'La Cesira');
INSERT INTO `prov_localidades` VALUES (655, 7, 'La Cruz');
INSERT INTO `prov_localidades` VALUES (656, 7, 'La Cumbre');
INSERT INTO `prov_localidades` VALUES (657, 7, 'La Cumbrecita');
INSERT INTO `prov_localidades` VALUES (658, 7, 'La Falda');
INSERT INTO `prov_localidades` VALUES (659, 7, 'La Francia');
INSERT INTO `prov_localidades` VALUES (660, 7, 'La Granja');
INSERT INTO `prov_localidades` VALUES (661, 7, 'La Higuera');
INSERT INTO `prov_localidades` VALUES (662, 7, 'La Laguna');
INSERT INTO `prov_localidades` VALUES (663, 7, 'La Paisanita');
INSERT INTO `prov_localidades` VALUES (664, 7, 'La Palestina');
INSERT INTO `prov_localidades` VALUES (666, 7, 'La Paquita');
INSERT INTO `prov_localidades` VALUES (667, 7, 'La Para');
INSERT INTO `prov_localidades` VALUES (668, 7, 'La Paz');
INSERT INTO `prov_localidades` VALUES (669, 7, 'La Playa');
INSERT INTO `prov_localidades` VALUES (670, 7, 'La Playosa');
INSERT INTO `prov_localidades` VALUES (671, 7, 'La PoblaciÃ³n');
INSERT INTO `prov_localidades` VALUES (672, 7, 'La Posta');
INSERT INTO `prov_localidades` VALUES (673, 7, 'La Puerta');
INSERT INTO `prov_localidades` VALUES (674, 7, 'La Quinta');
INSERT INTO `prov_localidades` VALUES (675, 7, 'La Rancherita');
INSERT INTO `prov_localidades` VALUES (676, 7, 'La Rinconada');
INSERT INTO `prov_localidades` VALUES (677, 7, 'La Serranita');
INSERT INTO `prov_localidades` VALUES (678, 7, 'La Tordilla');
INSERT INTO `prov_localidades` VALUES (679, 7, 'Laborde');
INSERT INTO `prov_localidades` VALUES (680, 7, 'Laboulaye');
INSERT INTO `prov_localidades` VALUES (681, 7, 'Laguna Larga');
INSERT INTO `prov_localidades` VALUES (682, 7, 'Las Acequias');
INSERT INTO `prov_localidades` VALUES (683, 7, 'Las Albahacas');
INSERT INTO `prov_localidades` VALUES (684, 7, 'Las Arrias');
INSERT INTO `prov_localidades` VALUES (685, 7, 'Las Bajadas');
INSERT INTO `prov_localidades` VALUES (686, 7, 'Las Caleras');
INSERT INTO `prov_localidades` VALUES (687, 7, 'Las Calles');
INSERT INTO `prov_localidades` VALUES (688, 7, 'Las CaÃ±adas');
INSERT INTO `prov_localidades` VALUES (689, 7, 'Las Gramillas');
INSERT INTO `prov_localidades` VALUES (690, 7, 'Las Higueras');
INSERT INTO `prov_localidades` VALUES (691, 7, 'Las Isletillas');
INSERT INTO `prov_localidades` VALUES (692, 7, 'Las Junturas');
INSERT INTO `prov_localidades` VALUES (693, 7, 'Las Palmas');
INSERT INTO `prov_localidades` VALUES (694, 7, 'Las PeÃ±as');
INSERT INTO `prov_localidades` VALUES (695, 7, 'Las PeÃ±as Sud');
INSERT INTO `prov_localidades` VALUES (696, 7, 'Las Perdices');
INSERT INTO `prov_localidades` VALUES (697, 7, 'Las Playas');
INSERT INTO `prov_localidades` VALUES (698, 7, 'Las Rabonas');
INSERT INTO `prov_localidades` VALUES (699, 7, 'Las Saladas');
INSERT INTO `prov_localidades` VALUES (700, 7, 'Las Tapias');
INSERT INTO `prov_localidades` VALUES (701, 7, 'Las Varas');
INSERT INTO `prov_localidades` VALUES (702, 7, 'Las Varillas');
INSERT INTO `prov_localidades` VALUES (703, 7, 'Las Vertientes');
INSERT INTO `prov_localidades` VALUES (704, 7, 'LeguizamÃ³n');
INSERT INTO `prov_localidades` VALUES (705, 7, 'Leones');
INSERT INTO `prov_localidades` VALUES (706, 7, 'Los Cedros');
INSERT INTO `prov_localidades` VALUES (707, 7, 'Los Cerrillos');
INSERT INTO `prov_localidades` VALUES (708, 7, 'Los ChaÃ±aritos (C.E)');
INSERT INTO `prov_localidades` VALUES (709, 7, 'Los Chanaritos (R.S)');
INSERT INTO `prov_localidades` VALUES (710, 7, 'Los Cisnes');
INSERT INTO `prov_localidades` VALUES (711, 7, 'Los Cocos');
INSERT INTO `prov_localidades` VALUES (712, 7, 'Los CÃ³ndores');
INSERT INTO `prov_localidades` VALUES (713, 7, 'Los Hornillos');
INSERT INTO `prov_localidades` VALUES (714, 7, 'Los Hoyos');
INSERT INTO `prov_localidades` VALUES (715, 7, 'Los Mistoles');
INSERT INTO `prov_localidades` VALUES (716, 7, 'Los Molinos');
INSERT INTO `prov_localidades` VALUES (717, 7, 'Los Pozos');
INSERT INTO `prov_localidades` VALUES (718, 7, 'Los Reartes');
INSERT INTO `prov_localidades` VALUES (719, 7, 'Los Surgentes');
INSERT INTO `prov_localidades` VALUES (720, 7, 'Los Talares');
INSERT INTO `prov_localidades` VALUES (721, 7, 'Los Zorros');
INSERT INTO `prov_localidades` VALUES (722, 7, 'Lozada');
INSERT INTO `prov_localidades` VALUES (723, 7, 'Luca');
INSERT INTO `prov_localidades` VALUES (724, 7, 'Luque');
INSERT INTO `prov_localidades` VALUES (725, 7, 'Luyaba');
INSERT INTO `prov_localidades` VALUES (726, 7, 'MalagueÃ±o');
INSERT INTO `prov_localidades` VALUES (727, 7, 'Malena');
INSERT INTO `prov_localidades` VALUES (728, 7, 'Malvinas Argentinas');
INSERT INTO `prov_localidades` VALUES (729, 7, 'Manfredi');
INSERT INTO `prov_localidades` VALUES (730, 7, 'Maquinista Gallini');
INSERT INTO `prov_localidades` VALUES (731, 7, 'Marcos JuÃ¡rez');
INSERT INTO `prov_localidades` VALUES (732, 7, 'Marull');
INSERT INTO `prov_localidades` VALUES (733, 7, 'Matorrales');
INSERT INTO `prov_localidades` VALUES (734, 7, 'Mattaldi');
INSERT INTO `prov_localidades` VALUES (735, 7, 'Mayu Sumaj');
INSERT INTO `prov_localidades` VALUES (736, 7, 'Media Naranja');
INSERT INTO `prov_localidades` VALUES (737, 7, 'Melo');
INSERT INTO `prov_localidades` VALUES (738, 7, 'Mendiolaza');
INSERT INTO `prov_localidades` VALUES (739, 7, 'Mi Granja');
INSERT INTO `prov_localidades` VALUES (740, 7, 'Mina Clavero');
INSERT INTO `prov_localidades` VALUES (741, 7, 'Miramar');
INSERT INTO `prov_localidades` VALUES (742, 7, 'Morrison');
INSERT INTO `prov_localidades` VALUES (743, 7, 'Morteros');
INSERT INTO `prov_localidades` VALUES (744, 7, 'Mte. Buey');
INSERT INTO `prov_localidades` VALUES (745, 7, 'Mte. Cristo');
INSERT INTO `prov_localidades` VALUES (746, 7, 'Mte. De Los Gauchos');
INSERT INTO `prov_localidades` VALUES (747, 7, 'Mte. LeÃ±a');
INSERT INTO `prov_localidades` VALUES (748, 7, 'Mte. MaÃ­z');
INSERT INTO `prov_localidades` VALUES (749, 7, 'Mte. Ralo');
INSERT INTO `prov_localidades` VALUES (750, 7, 'NicolÃ¡s Bruzone');
INSERT INTO `prov_localidades` VALUES (751, 7, 'Noetinger');
INSERT INTO `prov_localidades` VALUES (752, 7, 'Nono');
INSERT INTO `prov_localidades` VALUES (753, 7, 'Nueva 7');
INSERT INTO `prov_localidades` VALUES (754, 7, 'Obispo Trejo');
INSERT INTO `prov_localidades` VALUES (755, 7, 'Olaeta');
INSERT INTO `prov_localidades` VALUES (756, 7, 'Oliva');
INSERT INTO `prov_localidades` VALUES (757, 7, 'Olivares San NicolÃ¡s');
INSERT INTO `prov_localidades` VALUES (758, 7, 'Onagolty');
INSERT INTO `prov_localidades` VALUES (759, 7, 'Oncativo');
INSERT INTO `prov_localidades` VALUES (760, 7, 'OrdoÃ±ez');
INSERT INTO `prov_localidades` VALUES (761, 7, 'Pacheco De Melo');
INSERT INTO `prov_localidades` VALUES (762, 7, 'Pampayasta N.');
INSERT INTO `prov_localidades` VALUES (763, 7, 'Pampayasta S.');
INSERT INTO `prov_localidades` VALUES (764, 7, 'Panaholma');
INSERT INTO `prov_localidades` VALUES (765, 7, 'Pascanas');
INSERT INTO `prov_localidades` VALUES (766, 7, 'Pasco');
INSERT INTO `prov_localidades` VALUES (767, 7, 'Paso del Durazno');
INSERT INTO `prov_localidades` VALUES (768, 7, 'Paso Viejo');
INSERT INTO `prov_localidades` VALUES (769, 7, 'Pilar');
INSERT INTO `prov_localidades` VALUES (770, 7, 'PincÃ©n');
INSERT INTO `prov_localidades` VALUES (771, 7, 'PiquillÃ­n');
INSERT INTO `prov_localidades` VALUES (772, 7, 'Plaza de Mercedes');
INSERT INTO `prov_localidades` VALUES (773, 7, 'Plaza Luxardo');
INSERT INTO `prov_localidades` VALUES (774, 7, 'PorteÃ±a');
INSERT INTO `prov_localidades` VALUES (775, 7, 'Potrero de Garay');
INSERT INTO `prov_localidades` VALUES (776, 7, 'Pozo del Molle');
INSERT INTO `prov_localidades` VALUES (777, 7, 'Pozo Nuevo');
INSERT INTO `prov_localidades` VALUES (778, 7, 'Pueblo Italiano');
INSERT INTO `prov_localidades` VALUES (779, 7, 'Puesto de Castro');
INSERT INTO `prov_localidades` VALUES (780, 7, 'Punta del Agua');
INSERT INTO `prov_localidades` VALUES (781, 7, 'Quebracho Herrado');
INSERT INTO `prov_localidades` VALUES (782, 7, 'Quilino');
INSERT INTO `prov_localidades` VALUES (783, 7, 'Rafael GarcÃ­a');
INSERT INTO `prov_localidades` VALUES (784, 7, 'Ranqueles');
INSERT INTO `prov_localidades` VALUES (785, 7, 'Rayo Cortado');
INSERT INTO `prov_localidades` VALUES (786, 7, 'ReducciÃ³n');
INSERT INTO `prov_localidades` VALUES (787, 7, 'RincÃ³n');
INSERT INTO `prov_localidades` VALUES (788, 7, 'RÃ­o Bamba');
INSERT INTO `prov_localidades` VALUES (789, 7, 'RÃ­o Ceballos');
INSERT INTO `prov_localidades` VALUES (790, 7, 'RÃ­o Cuarto');
INSERT INTO `prov_localidades` VALUES (791, 7, 'RÃ­o de Los Sauces');
INSERT INTO `prov_localidades` VALUES (792, 7, 'RÃ­o Primero');
INSERT INTO `prov_localidades` VALUES (793, 7, 'RÃ­o Segundo');
INSERT INTO `prov_localidades` VALUES (794, 7, 'RÃ­o Tercero');
INSERT INTO `prov_localidades` VALUES (795, 7, 'Rosales');
INSERT INTO `prov_localidades` VALUES (796, 7, 'Rosario del Saladillo');
INSERT INTO `prov_localidades` VALUES (797, 7, 'Sacanta');
INSERT INTO `prov_localidades` VALUES (798, 7, 'Sagrada Familia');
INSERT INTO `prov_localidades` VALUES (799, 7, 'Saira');
INSERT INTO `prov_localidades` VALUES (800, 7, 'Saladillo');
INSERT INTO `prov_localidades` VALUES (801, 7, 'SaldÃ¡n');
INSERT INTO `prov_localidades` VALUES (802, 7, 'Salsacate');
INSERT INTO `prov_localidades` VALUES (803, 7, 'Salsipuedes');
INSERT INTO `prov_localidades` VALUES (804, 7, 'Sampacho');
INSERT INTO `prov_localidades` VALUES (805, 7, 'San AgustÃ­n');
INSERT INTO `prov_localidades` VALUES (806, 7, 'San Antonio de Arredondo');
INSERT INTO `prov_localidades` VALUES (807, 7, 'San Antonio de LitÃ­n');
INSERT INTO `prov_localidades` VALUES (808, 7, 'San Basilio');
INSERT INTO `prov_localidades` VALUES (809, 7, 'San Carlos Minas');
INSERT INTO `prov_localidades` VALUES (810, 7, 'San Clemente');
INSERT INTO `prov_localidades` VALUES (811, 7, 'San Esteban');
INSERT INTO `prov_localidades` VALUES (812, 7, 'San Francisco');
INSERT INTO `prov_localidades` VALUES (813, 7, 'San Ignacio');
INSERT INTO `prov_localidades` VALUES (814, 7, 'San Javier');
INSERT INTO `prov_localidades` VALUES (815, 7, 'San JerÃ³nimo');
INSERT INTO `prov_localidades` VALUES (816, 7, 'San JoaquÃ­n');
INSERT INTO `prov_localidades` VALUES (817, 7, 'San JosÃ© de La Dormida');
INSERT INTO `prov_localidades` VALUES (818, 7, 'San JosÃ© de Las Salinas');
INSERT INTO `prov_localidades` VALUES (819, 7, 'San Lorenzo');
INSERT INTO `prov_localidades` VALUES (820, 7, 'San Marcos Sierras');
INSERT INTO `prov_localidades` VALUES (821, 7, 'San Marcos Sud');
INSERT INTO `prov_localidades` VALUES (822, 7, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (823, 7, 'San Pedro N.');
INSERT INTO `prov_localidades` VALUES (824, 7, 'San Roque');
INSERT INTO `prov_localidades` VALUES (825, 7, 'San Vicente');
INSERT INTO `prov_localidades` VALUES (826, 7, 'Santa Catalina');
INSERT INTO `prov_localidades` VALUES (827, 7, 'Santa Elena');
INSERT INTO `prov_localidades` VALUES (828, 7, 'Santa Eufemia');
INSERT INTO `prov_localidades` VALUES (829, 7, 'Santa Maria');
INSERT INTO `prov_localidades` VALUES (830, 7, 'Sarmiento');
INSERT INTO `prov_localidades` VALUES (831, 7, 'Saturnino M.Laspiur');
INSERT INTO `prov_localidades` VALUES (832, 7, 'Sauce Arriba');
INSERT INTO `prov_localidades` VALUES (833, 7, 'SebastiÃ¡n Elcano');
INSERT INTO `prov_localidades` VALUES (834, 7, 'Seeber');
INSERT INTO `prov_localidades` VALUES (835, 7, 'Segunda Usina');
INSERT INTO `prov_localidades` VALUES (836, 7, 'Serrano');
INSERT INTO `prov_localidades` VALUES (837, 7, 'Serrezuela');
INSERT INTO `prov_localidades` VALUES (838, 7, 'Sgo. Temple');
INSERT INTO `prov_localidades` VALUES (839, 7, 'Silvio Pellico');
INSERT INTO `prov_localidades` VALUES (840, 7, 'Simbolar');
INSERT INTO `prov_localidades` VALUES (841, 7, 'Sinsacate');
INSERT INTO `prov_localidades` VALUES (842, 7, 'Sta. Rosa de Calamuchita');
INSERT INTO `prov_localidades` VALUES (843, 7, 'Sta. Rosa de RÃ­o Primero');
INSERT INTO `prov_localidades` VALUES (844, 7, 'Suco');
INSERT INTO `prov_localidades` VALUES (845, 7, 'Tala CaÃ±ada');
INSERT INTO `prov_localidades` VALUES (846, 7, 'Tala Huasi');
INSERT INTO `prov_localidades` VALUES (847, 7, 'Talaini');
INSERT INTO `prov_localidades` VALUES (848, 7, 'Tancacha');
INSERT INTO `prov_localidades` VALUES (849, 7, 'Tanti');
INSERT INTO `prov_localidades` VALUES (850, 7, 'Ticino');
INSERT INTO `prov_localidades` VALUES (851, 7, 'Tinoco');
INSERT INTO `prov_localidades` VALUES (852, 7, 'TÃ­o Pujio');
INSERT INTO `prov_localidades` VALUES (853, 7, 'Toledo');
INSERT INTO `prov_localidades` VALUES (854, 7, 'Toro Pujio');
INSERT INTO `prov_localidades` VALUES (855, 7, 'Tosno');
INSERT INTO `prov_localidades` VALUES (856, 7, 'Tosquita');
INSERT INTO `prov_localidades` VALUES (857, 7, 'TrÃ¡nsito');
INSERT INTO `prov_localidades` VALUES (858, 7, 'Tuclame');
INSERT INTO `prov_localidades` VALUES (859, 7, 'Tutti');
INSERT INTO `prov_localidades` VALUES (860, 7, 'Ucacha');
INSERT INTO `prov_localidades` VALUES (861, 7, 'Unquillo');
INSERT INTO `prov_localidades` VALUES (862, 7, 'Valle de Anisacate');
INSERT INTO `prov_localidades` VALUES (863, 7, 'Valle Hermoso');
INSERT INTO `prov_localidades` VALUES (864, 7, 'VÃ©lez Sarfield');
INSERT INTO `prov_localidades` VALUES (865, 7, 'Viamonte');
INSERT INTO `prov_localidades` VALUES (866, 7, 'VicuÃ±a Mackenna');
INSERT INTO `prov_localidades` VALUES (867, 7, 'Villa Allende');
INSERT INTO `prov_localidades` VALUES (868, 7, 'Villa Amancay');
INSERT INTO `prov_localidades` VALUES (869, 7, 'Villa Ascasubi');
INSERT INTO `prov_localidades` VALUES (870, 7, 'Villa Candelaria N.');
INSERT INTO `prov_localidades` VALUES (871, 7, 'Villa Carlos Paz');
INSERT INTO `prov_localidades` VALUES (872, 7, 'Villa Cerro Azul');
INSERT INTO `prov_localidades` VALUES (873, 7, 'Villa Ciudad de AmÃ©rica');
INSERT INTO `prov_localidades` VALUES (874, 7, 'Villa Ciudad Pque Los Reartes');
INSERT INTO `prov_localidades` VALUES (875, 7, 'Villa ConcepciÃ³n del TÃ­o');
INSERT INTO `prov_localidades` VALUES (876, 7, 'Villa Cura Brochero');
INSERT INTO `prov_localidades` VALUES (877, 7, 'Villa de Las Rosas');
INSERT INTO `prov_localidades` VALUES (878, 7, 'Villa de MarÃ­a');
INSERT INTO `prov_localidades` VALUES (879, 7, 'Villa de Pocho');
INSERT INTO `prov_localidades` VALUES (880, 7, 'Villa de Soto');
INSERT INTO `prov_localidades` VALUES (881, 7, 'Villa del Dique');
INSERT INTO `prov_localidades` VALUES (882, 7, 'Villa del Prado');
INSERT INTO `prov_localidades` VALUES (883, 7, 'Villa del Rosario');
INSERT INTO `prov_localidades` VALUES (884, 7, 'Villa del Totoral');
INSERT INTO `prov_localidades` VALUES (885, 7, 'Villa Dolores');
INSERT INTO `prov_localidades` VALUES (886, 7, 'Villa El Chancay');
INSERT INTO `prov_localidades` VALUES (887, 7, 'Villa Elisa');
INSERT INTO `prov_localidades` VALUES (888, 7, 'Villa Flor Serrana');
INSERT INTO `prov_localidades` VALUES (889, 7, 'Villa Fontana');
INSERT INTO `prov_localidades` VALUES (890, 7, 'Villa Giardino');
INSERT INTO `prov_localidades` VALUES (891, 7, 'Villa Gral. Belgrano');
INSERT INTO `prov_localidades` VALUES (892, 7, 'Villa Gutierrez');
INSERT INTO `prov_localidades` VALUES (893, 7, 'Villa Huidobro');
INSERT INTO `prov_localidades` VALUES (894, 7, 'Villa La Bolsa');
INSERT INTO `prov_localidades` VALUES (895, 7, 'Villa Los Aromos');
INSERT INTO `prov_localidades` VALUES (896, 7, 'Villa Los Patos');
INSERT INTO `prov_localidades` VALUES (897, 7, 'Villa MarÃ­a');
INSERT INTO `prov_localidades` VALUES (898, 7, 'Villa Nueva');
INSERT INTO `prov_localidades` VALUES (899, 7, 'Villa Pque. Santa Ana');
INSERT INTO `prov_localidades` VALUES (900, 7, 'Villa Pque. Siquiman');
INSERT INTO `prov_localidades` VALUES (901, 7, 'Villa Quillinzo');
INSERT INTO `prov_localidades` VALUES (902, 7, 'Villa Rossi');
INSERT INTO `prov_localidades` VALUES (903, 7, 'Villa Rumipal');
INSERT INTO `prov_localidades` VALUES (904, 7, 'Villa San Esteban');
INSERT INTO `prov_localidades` VALUES (905, 7, 'Villa San Isidro');
INSERT INTO `prov_localidades` VALUES (906, 7, 'Villa 21');
INSERT INTO `prov_localidades` VALUES (907, 7, 'Villa Sarmiento (G.R)');
INSERT INTO `prov_localidades` VALUES (908, 7, 'Villa Sarmiento (S.A)');
INSERT INTO `prov_localidades` VALUES (909, 7, 'Villa Tulumba');
INSERT INTO `prov_localidades` VALUES (910, 7, 'Villa Valeria');
INSERT INTO `prov_localidades` VALUES (911, 7, 'Villa Yacanto');
INSERT INTO `prov_localidades` VALUES (912, 7, 'Washington');
INSERT INTO `prov_localidades` VALUES (913, 7, 'Wenceslao Escalante');
INSERT INTO `prov_localidades` VALUES (914, 7, 'Ycho Cruz Sierras');
INSERT INTO `prov_localidades` VALUES (915, 8, 'Alvear');
INSERT INTO `prov_localidades` VALUES (916, 8, 'Bella Vista');
INSERT INTO `prov_localidades` VALUES (917, 8, 'BerÃ³n de Astrada');
INSERT INTO `prov_localidades` VALUES (918, 8, 'Bonpland');
INSERT INTO `prov_localidades` VALUES (919, 8, 'CaÃ¡ Cati');
INSERT INTO `prov_localidades` VALUES (920, 8, 'Capital');
INSERT INTO `prov_localidades` VALUES (921, 8, 'ChavarrÃ­a');
INSERT INTO `prov_localidades` VALUES (922, 8, 'Col. C. Pellegrini');
INSERT INTO `prov_localidades` VALUES (923, 8, 'Col. Libertad');
INSERT INTO `prov_localidades` VALUES (924, 8, 'Col. Liebig');
INSERT INTO `prov_localidades` VALUES (925, 8, 'Col. Sta Rosa');
INSERT INTO `prov_localidades` VALUES (926, 8, 'ConcepciÃ³n');
INSERT INTO `prov_localidades` VALUES (927, 8, 'Cruz de Los Milagros');
INSERT INTO `prov_localidades` VALUES (928, 8, 'CuruzÃº-CuatiÃ¡');
INSERT INTO `prov_localidades` VALUES (929, 8, 'Empedrado');
INSERT INTO `prov_localidades` VALUES (930, 8, 'Esquina');
INSERT INTO `prov_localidades` VALUES (931, 8, 'EstaciÃ³n Torrent');
INSERT INTO `prov_localidades` VALUES (932, 8, 'Felipe YofrÃ©');
INSERT INTO `prov_localidades` VALUES (933, 8, 'Garruchos');
INSERT INTO `prov_localidades` VALUES (934, 8, 'Gdor. AgrÃ³nomo');
INSERT INTO `prov_localidades` VALUES (935, 8, 'Gdor. MartÃ­nez');
INSERT INTO `prov_localidades` VALUES (936, 8, 'Goya');
INSERT INTO `prov_localidades` VALUES (937, 8, 'Guaviravi');
INSERT INTO `prov_localidades` VALUES (938, 8, 'Herlitzka');
INSERT INTO `prov_localidades` VALUES (939, 8, 'Ita-Ibate');
INSERT INTO `prov_localidades` VALUES (940, 8, 'ItatÃ­');
INSERT INTO `prov_localidades` VALUES (941, 8, 'ItuzaingÃ³');
INSERT INTO `prov_localidades` VALUES (942, 8, 'JosÃ© Rafael GÃ³mez');
INSERT INTO `prov_localidades` VALUES (943, 8, 'Juan Pujol');
INSERT INTO `prov_localidades` VALUES (944, 8, 'La Cruz');
INSERT INTO `prov_localidades` VALUES (945, 8, 'Lavalle');
INSERT INTO `prov_localidades` VALUES (946, 8, 'Lomas de Vallejos');
INSERT INTO `prov_localidades` VALUES (947, 8, 'Loreto');
INSERT INTO `prov_localidades` VALUES (948, 8, 'Mariano I. Loza');
INSERT INTO `prov_localidades` VALUES (949, 8, 'MburucuyÃ¡');
INSERT INTO `prov_localidades` VALUES (950, 8, 'Mercedes');
INSERT INTO `prov_localidades` VALUES (951, 8, 'MocoretÃ¡');
INSERT INTO `prov_localidades` VALUES (952, 8, 'Mte. Caseros');
INSERT INTO `prov_localidades` VALUES (953, 8, 'Nueve de Julio');
INSERT INTO `prov_localidades` VALUES (954, 8, 'Palmar Grande');
INSERT INTO `prov_localidades` VALUES (955, 8, 'Parada Pucheta');
INSERT INTO `prov_localidades` VALUES (956, 8, 'Paso de La Patria');
INSERT INTO `prov_localidades` VALUES (957, 8, 'Paso de Los Libres');
INSERT INTO `prov_localidades` VALUES (958, 8, 'Pedro R. Fernandez');
INSERT INTO `prov_localidades` VALUES (959, 8, 'PerugorrÃ­a');
INSERT INTO `prov_localidades` VALUES (960, 8, 'Pueblo Libertador');
INSERT INTO `prov_localidades` VALUES (961, 8, 'Ramada Paso');
INSERT INTO `prov_localidades` VALUES (962, 8, 'Riachuelo');
INSERT INTO `prov_localidades` VALUES (963, 8, 'Saladas');
INSERT INTO `prov_localidades` VALUES (964, 8, 'San Antonio');
INSERT INTO `prov_localidades` VALUES (965, 8, 'San Carlos');
INSERT INTO `prov_localidades` VALUES (966, 8, 'San Cosme');
INSERT INTO `prov_localidades` VALUES (967, 8, 'San Lorenzo');
INSERT INTO `prov_localidades` VALUES (968, 8, '20 del Palmar');
INSERT INTO `prov_localidades` VALUES (969, 8, 'San Miguel');
INSERT INTO `prov_localidades` VALUES (970, 8, 'San Roque');
INSERT INTO `prov_localidades` VALUES (971, 8, 'Santa Ana');
INSERT INTO `prov_localidades` VALUES (972, 8, 'Santa LucÃ­a');
INSERT INTO `prov_localidades` VALUES (973, 8, 'Santo TomÃ©');
INSERT INTO `prov_localidades` VALUES (974, 8, 'Sauce');
INSERT INTO `prov_localidades` VALUES (975, 8, 'Tabay');
INSERT INTO `prov_localidades` VALUES (976, 8, 'TapebicuÃ¡');
INSERT INTO `prov_localidades` VALUES (977, 8, 'Tatacua');
INSERT INTO `prov_localidades` VALUES (978, 8, 'Virasoro');
INSERT INTO `prov_localidades` VALUES (979, 8, 'YapeyÃº');
INSERT INTO `prov_localidades` VALUES (980, 8, 'YataitÃ­ Calle');
INSERT INTO `prov_localidades` VALUES (981, 9, 'AlarcÃ³n');
INSERT INTO `prov_localidades` VALUES (982, 9, 'Alcaraz');
INSERT INTO `prov_localidades` VALUES (983, 9, 'Alcaraz N.');
INSERT INTO `prov_localidades` VALUES (984, 9, 'Alcaraz S.');
INSERT INTO `prov_localidades` VALUES (985, 9, 'Aldea AsunciÃ³n');
INSERT INTO `prov_localidades` VALUES (986, 9, 'Aldea Brasilera');
INSERT INTO `prov_localidades` VALUES (987, 9, 'Aldea Elgenfeld');
INSERT INTO `prov_localidades` VALUES (988, 9, 'Aldea Grapschental');
INSERT INTO `prov_localidades` VALUES (989, 9, 'Aldea Ma. Luisa');
INSERT INTO `prov_localidades` VALUES (990, 9, 'Aldea Protestante');
INSERT INTO `prov_localidades` VALUES (991, 9, 'Aldea Salto');
INSERT INTO `prov_localidades` VALUES (992, 9, 'Aldea San Antonio (G)');
INSERT INTO `prov_localidades` VALUES (993, 9, 'Aldea San Antonio (P)');
INSERT INTO `prov_localidades` VALUES (994, 9, 'Aldea 19');
INSERT INTO `prov_localidades` VALUES (995, 9, 'Aldea San Miguel');
INSERT INTO `prov_localidades` VALUES (996, 9, 'Aldea San Rafael');
INSERT INTO `prov_localidades` VALUES (997, 9, 'Aldea Spatzenkutter');
INSERT INTO `prov_localidades` VALUES (998, 9, 'Aldea Sta. MarÃ­a');
INSERT INTO `prov_localidades` VALUES (999, 9, 'Aldea Sta. Rosa');
INSERT INTO `prov_localidades` VALUES (1000, 9, 'Aldea Valle MarÃ­a');
INSERT INTO `prov_localidades` VALUES (1001, 9, 'Altamirano Sur');
INSERT INTO `prov_localidades` VALUES (1002, 9, 'Antelo');
INSERT INTO `prov_localidades` VALUES (1003, 9, 'Antonio TomÃ¡s');
INSERT INTO `prov_localidades` VALUES (1004, 9, 'Aranguren');
INSERT INTO `prov_localidades` VALUES (1005, 9, 'Arroyo BarÃº');
INSERT INTO `prov_localidades` VALUES (1006, 9, 'Arroyo Burgos');
INSERT INTO `prov_localidades` VALUES (1007, 9, 'Arroyo ClÃ©');
INSERT INTO `prov_localidades` VALUES (1008, 9, 'Arroyo Corralito');
INSERT INTO `prov_localidades` VALUES (1009, 9, 'Arroyo del Medio');
INSERT INTO `prov_localidades` VALUES (1010, 9, 'Arroyo Maturrango');
INSERT INTO `prov_localidades` VALUES (1011, 9, 'Arroyo Palo Seco');
INSERT INTO `prov_localidades` VALUES (1012, 9, 'Banderas');
INSERT INTO `prov_localidades` VALUES (1013, 9, 'Basavilbaso');
INSERT INTO `prov_localidades` VALUES (1014, 9, 'Betbeder');
INSERT INTO `prov_localidades` VALUES (1015, 9, 'Bovril');
INSERT INTO `prov_localidades` VALUES (1016, 9, 'Caseros');
INSERT INTO `prov_localidades` VALUES (1017, 9, 'Ceibas');
INSERT INTO `prov_localidades` VALUES (1018, 9, 'Cerrito');
INSERT INTO `prov_localidades` VALUES (1019, 9, 'ChajarÃ­');
INSERT INTO `prov_localidades` VALUES (1020, 9, 'Chilcas');
INSERT INTO `prov_localidades` VALUES (1021, 9, 'Clodomiro Ledesma');
INSERT INTO `prov_localidades` VALUES (1022, 9, 'Col. Alemana');
INSERT INTO `prov_localidades` VALUES (1023, 9, 'Col. Avellaneda');
INSERT INTO `prov_localidades` VALUES (1024, 9, 'Col. Avigdor');
INSERT INTO `prov_localidades` VALUES (1025, 9, 'Col. AyuÃ­');
INSERT INTO `prov_localidades` VALUES (1026, 9, 'Col. Baylina');
INSERT INTO `prov_localidades` VALUES (1027, 9, 'Col. Carrasco');
INSERT INTO `prov_localidades` VALUES (1028, 9, 'Col. Celina');
INSERT INTO `prov_localidades` VALUES (1029, 9, 'Col. Cerrito');
INSERT INTO `prov_localidades` VALUES (1030, 9, 'Col. Crespo');
INSERT INTO `prov_localidades` VALUES (1031, 9, 'Col. Elia');
INSERT INTO `prov_localidades` VALUES (1032, 9, 'Col. Ensayo');
INSERT INTO `prov_localidades` VALUES (1033, 9, 'Col. Gral. Roca');
INSERT INTO `prov_localidades` VALUES (1034, 9, 'Col. La Argentina');
INSERT INTO `prov_localidades` VALUES (1035, 9, 'Col. Merou');
INSERT INTO `prov_localidades` VALUES (1036, 9, 'Col. Oficial NÂª3');
INSERT INTO `prov_localidades` VALUES (1037, 9, 'Col. Oficial NÂº13');
INSERT INTO `prov_localidades` VALUES (1038, 9, 'Col. Oficial NÂº14');
INSERT INTO `prov_localidades` VALUES (1039, 9, 'Col. Oficial NÂº5');
INSERT INTO `prov_localidades` VALUES (1040, 9, 'Col. Reffino');
INSERT INTO `prov_localidades` VALUES (1041, 9, 'Col. Tunas');
INSERT INTO `prov_localidades` VALUES (1042, 9, 'Col. VirarÃ³');
INSERT INTO `prov_localidades` VALUES (1043, 9, 'ColÃ³n');
INSERT INTO `prov_localidades` VALUES (1044, 9, 'ConcepciÃ³n del Uruguay');
INSERT INTO `prov_localidades` VALUES (1045, 9, 'Concordia');
INSERT INTO `prov_localidades` VALUES (1046, 9, 'Conscripto Bernardi');
INSERT INTO `prov_localidades` VALUES (1047, 9, 'Costa Grande');
INSERT INTO `prov_localidades` VALUES (1048, 9, 'Costa San Antonio');
INSERT INTO `prov_localidades` VALUES (1049, 9, 'Costa Uruguay N.');
INSERT INTO `prov_localidades` VALUES (1050, 9, 'Costa Uruguay S.');
INSERT INTO `prov_localidades` VALUES (1051, 9, 'Crespo');
INSERT INTO `prov_localidades` VALUES (1052, 9, 'Crucecitas 3Âª');
INSERT INTO `prov_localidades` VALUES (1053, 9, 'Crucecitas 7Âª');
INSERT INTO `prov_localidades` VALUES (1054, 9, 'Crucecitas 8Âª');
INSERT INTO `prov_localidades` VALUES (1055, 9, 'Cuchilla Redonda');
INSERT INTO `prov_localidades` VALUES (1056, 9, 'Curtiembre');
INSERT INTO `prov_localidades` VALUES (1057, 9, 'Diamante');
INSERT INTO `prov_localidades` VALUES (1058, 9, 'Distrito 6Âº');
INSERT INTO `prov_localidades` VALUES (1059, 9, 'Distrito ChaÃ±ar');
INSERT INTO `prov_localidades` VALUES (1060, 9, 'Distrito Chiqueros');
INSERT INTO `prov_localidades` VALUES (1061, 9, 'Distrito Cuarto');
INSERT INTO `prov_localidades` VALUES (1062, 9, 'Distrito Diego LÃ³pez');
INSERT INTO `prov_localidades` VALUES (1063, 9, 'Distrito Pajonal');
INSERT INTO `prov_localidades` VALUES (1064, 9, 'Distrito Sauce');
INSERT INTO `prov_localidades` VALUES (1065, 9, 'Distrito Tala');
INSERT INTO `prov_localidades` VALUES (1066, 9, 'Distrito Talitas');
INSERT INTO `prov_localidades` VALUES (1067, 9, 'Don CristÃ³bal 1Âª SecciÃ³n');
INSERT INTO `prov_localidades` VALUES (1068, 9, 'Don CristÃ³bal 2Âª SecciÃ³n');
INSERT INTO `prov_localidades` VALUES (1069, 9, 'Durazno');
INSERT INTO `prov_localidades` VALUES (1070, 9, 'El CimarrÃ³n');
INSERT INTO `prov_localidades` VALUES (1071, 9, 'El Gramillal');
INSERT INTO `prov_localidades` VALUES (1072, 9, 'El Palenque');
INSERT INTO `prov_localidades` VALUES (1073, 9, 'El Pingo');
INSERT INTO `prov_localidades` VALUES (1074, 9, 'El Quebracho');
INSERT INTO `prov_localidades` VALUES (1075, 9, 'El RedomÃ³n');
INSERT INTO `prov_localidades` VALUES (1076, 9, 'El Solar');
INSERT INTO `prov_localidades` VALUES (1077, 9, 'Enrique Carbo');
INSERT INTO `prov_localidades` VALUES (1079, 9, 'Espinillo N.');
INSERT INTO `prov_localidades` VALUES (1080, 9, 'EstaciÃ³n Campos');
INSERT INTO `prov_localidades` VALUES (1081, 9, 'EstaciÃ³n EscriÃ±a');
INSERT INTO `prov_localidades` VALUES (1082, 9, 'EstaciÃ³n Lazo');
INSERT INTO `prov_localidades` VALUES (1083, 9, 'EstaciÃ³n RaÃ­ces');
INSERT INTO `prov_localidades` VALUES (1084, 9, 'EstaciÃ³n YerÃºa');
INSERT INTO `prov_localidades` VALUES (1085, 9, 'Estancia Grande');
INSERT INTO `prov_localidades` VALUES (1086, 9, 'Estancia LÃ­baros');
INSERT INTO `prov_localidades` VALUES (1087, 9, 'Estancia Racedo');
INSERT INTO `prov_localidades` VALUES (1088, 9, 'Estancia SolÃ¡');
INSERT INTO `prov_localidades` VALUES (1089, 9, 'Estancia YuquerÃ­');
INSERT INTO `prov_localidades` VALUES (1090, 9, 'Estaquitas');
INSERT INTO `prov_localidades` VALUES (1091, 9, 'Faustino M. Parera');
INSERT INTO `prov_localidades` VALUES (1092, 9, 'Febre');
INSERT INTO `prov_localidades` VALUES (1093, 9, 'FederaciÃ³n');
INSERT INTO `prov_localidades` VALUES (1094, 9, 'Federal');
INSERT INTO `prov_localidades` VALUES (1095, 9, 'Gdor. EchagÃ¼e');
INSERT INTO `prov_localidades` VALUES (1096, 9, 'Gdor. Mansilla');
INSERT INTO `prov_localidades` VALUES (1097, 9, 'Gilbert');
INSERT INTO `prov_localidades` VALUES (1098, 9, 'GonzÃ¡lez CalderÃ³n');
INSERT INTO `prov_localidades` VALUES (1099, 9, 'Gral. Almada');
INSERT INTO `prov_localidades` VALUES (1100, 9, 'Gral. Alvear');
INSERT INTO `prov_localidades` VALUES (1101, 9, 'Gral. Campos');
INSERT INTO `prov_localidades` VALUES (1102, 9, 'Gral. Galarza');
INSERT INTO `prov_localidades` VALUES (1103, 9, 'Gral. RamÃ­rez');
INSERT INTO `prov_localidades` VALUES (1104, 9, 'Gualeguay');
INSERT INTO `prov_localidades` VALUES (1105, 9, 'GualeguaychÃº');
INSERT INTO `prov_localidades` VALUES (1106, 9, 'Gualeguaycito');
INSERT INTO `prov_localidades` VALUES (1107, 9, 'Guardamonte');
INSERT INTO `prov_localidades` VALUES (1108, 9, 'Hambis');
INSERT INTO `prov_localidades` VALUES (1109, 9, 'Hasenkamp');
INSERT INTO `prov_localidades` VALUES (1110, 9, 'Hernandarias');
INSERT INTO `prov_localidades` VALUES (1111, 9, 'HernÃ¡ndez');
INSERT INTO `prov_localidades` VALUES (1112, 9, 'Herrera');
INSERT INTO `prov_localidades` VALUES (1113, 9, 'Hinojal');
INSERT INTO `prov_localidades` VALUES (1114, 9, 'Hocker');
INSERT INTO `prov_localidades` VALUES (1115, 9, 'Ing. Sajaroff');
INSERT INTO `prov_localidades` VALUES (1116, 9, 'Irazusta');
INSERT INTO `prov_localidades` VALUES (1117, 9, 'Isletas');
INSERT INTO `prov_localidades` VALUES (1118, 9, 'J.J De Urquiza');
INSERT INTO `prov_localidades` VALUES (1119, 9, 'Jubileo');
INSERT INTO `prov_localidades` VALUES (1120, 9, 'La Clarita');
INSERT INTO `prov_localidades` VALUES (1121, 9, 'La Criolla');
INSERT INTO `prov_localidades` VALUES (1122, 9, 'La Esmeralda');
INSERT INTO `prov_localidades` VALUES (1123, 9, 'La Florida');
INSERT INTO `prov_localidades` VALUES (1124, 9, 'La Fraternidad');
INSERT INTO `prov_localidades` VALUES (1125, 9, 'La Hierra');
INSERT INTO `prov_localidades` VALUES (1126, 9, 'La Ollita');
INSERT INTO `prov_localidades` VALUES (1127, 9, 'La Paz');
INSERT INTO `prov_localidades` VALUES (1128, 9, 'La Picada');
INSERT INTO `prov_localidades` VALUES (1129, 9, 'La Providencia');
INSERT INTO `prov_localidades` VALUES (1130, 9, 'La Verbena');
INSERT INTO `prov_localidades` VALUES (1131, 9, 'Laguna BenÃ­tez');
INSERT INTO `prov_localidades` VALUES (1132, 9, 'Larroque');
INSERT INTO `prov_localidades` VALUES (1133, 9, 'Las Cuevas');
INSERT INTO `prov_localidades` VALUES (1134, 9, 'Las Garzas');
INSERT INTO `prov_localidades` VALUES (1135, 9, 'Las Guachas');
INSERT INTO `prov_localidades` VALUES (1136, 9, 'Las Mercedes');
INSERT INTO `prov_localidades` VALUES (1137, 9, 'Las Moscas');
INSERT INTO `prov_localidades` VALUES (1138, 9, 'Las Mulitas');
INSERT INTO `prov_localidades` VALUES (1139, 9, 'Las Toscas');
INSERT INTO `prov_localidades` VALUES (1140, 9, 'Laurencena');
INSERT INTO `prov_localidades` VALUES (1141, 9, 'Libertador San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1142, 9, 'Loma Limpia');
INSERT INTO `prov_localidades` VALUES (1143, 9, 'Los Ceibos');
INSERT INTO `prov_localidades` VALUES (1144, 9, 'Los Charruas');
INSERT INTO `prov_localidades` VALUES (1145, 9, 'Los Conquistadores');
INSERT INTO `prov_localidades` VALUES (1146, 9, 'Lucas GonzÃ¡lez');
INSERT INTO `prov_localidades` VALUES (1147, 9, 'Lucas N.');
INSERT INTO `prov_localidades` VALUES (1148, 9, 'Lucas S. 1Âª');
INSERT INTO `prov_localidades` VALUES (1149, 9, 'Lucas S. 2Âª');
INSERT INTO `prov_localidades` VALUES (1150, 9, 'MaciÃ¡');
INSERT INTO `prov_localidades` VALUES (1151, 9, 'MarÃ­a Grande');
INSERT INTO `prov_localidades` VALUES (1152, 9, 'MarÃ­a Grande 2Âª');
INSERT INTO `prov_localidades` VALUES (1153, 9, 'MÃ©danos');
INSERT INTO `prov_localidades` VALUES (1154, 9, 'Mojones N.');
INSERT INTO `prov_localidades` VALUES (1155, 9, 'Mojones S.');
INSERT INTO `prov_localidades` VALUES (1156, 9, 'Molino Doll');
INSERT INTO `prov_localidades` VALUES (1157, 9, 'Monte Redondo');
INSERT INTO `prov_localidades` VALUES (1158, 9, 'Montoya');
INSERT INTO `prov_localidades` VALUES (1159, 9, 'Mulas Grandes');
INSERT INTO `prov_localidades` VALUES (1160, 9, 'Ã‘ancay');
INSERT INTO `prov_localidades` VALUES (1161, 9, 'NogoyÃ¡');
INSERT INTO `prov_localidades` VALUES (1162, 9, 'Nueva Escocia');
INSERT INTO `prov_localidades` VALUES (1163, 9, 'Nueva Vizcaya');
INSERT INTO `prov_localidades` VALUES (1164, 9, 'OmbÃº');
INSERT INTO `prov_localidades` VALUES (1165, 9, 'Oro Verde');
INSERT INTO `prov_localidades` VALUES (1166, 9, 'ParanÃ¡');
INSERT INTO `prov_localidades` VALUES (1167, 9, 'Pasaje Guayaquil');
INSERT INTO `prov_localidades` VALUES (1168, 9, 'Pasaje Las Tunas');
INSERT INTO `prov_localidades` VALUES (1169, 9, 'Paso de La Arena');
INSERT INTO `prov_localidades` VALUES (1170, 9, 'Paso de La Laguna');
INSERT INTO `prov_localidades` VALUES (1171, 9, 'Paso de Las Piedras');
INSERT INTO `prov_localidades` VALUES (1172, 9, 'Paso Duarte');
INSERT INTO `prov_localidades` VALUES (1173, 9, 'Pastor Britos');
INSERT INTO `prov_localidades` VALUES (1174, 9, 'Pedernal');
INSERT INTO `prov_localidades` VALUES (1175, 9, 'Perdices');
INSERT INTO `prov_localidades` VALUES (1176, 9, 'Picada BerÃ³n');
INSERT INTO `prov_localidades` VALUES (1177, 9, 'Piedras Blancas');
INSERT INTO `prov_localidades` VALUES (1178, 9, 'Primer Distrito Cuchilla');
INSERT INTO `prov_localidades` VALUES (1179, 9, 'Primero de Mayo');
INSERT INTO `prov_localidades` VALUES (1180, 9, 'Pronunciamiento');
INSERT INTO `prov_localidades` VALUES (1181, 9, 'Pto. Algarrobo');
INSERT INTO `prov_localidades` VALUES (1182, 9, 'Pto. Ibicuy');
INSERT INTO `prov_localidades` VALUES (1183, 9, 'Pueblo Brugo');
INSERT INTO `prov_localidades` VALUES (1184, 9, 'Pueblo Cazes');
INSERT INTO `prov_localidades` VALUES (1185, 9, 'Pueblo Gral. Belgrano');
INSERT INTO `prov_localidades` VALUES (1186, 9, 'Pueblo Liebig');
INSERT INTO `prov_localidades` VALUES (1187, 9, 'Puerto YeruÃ¡');
INSERT INTO `prov_localidades` VALUES (1188, 9, 'Punta del Monte');
INSERT INTO `prov_localidades` VALUES (1189, 9, 'Quebracho');
INSERT INTO `prov_localidades` VALUES (1190, 9, 'Quinto Distrito');
INSERT INTO `prov_localidades` VALUES (1191, 9, 'Raices Oeste');
INSERT INTO `prov_localidades` VALUES (1192, 9, 'RincÃ³n de NogoyÃ¡');
INSERT INTO `prov_localidades` VALUES (1193, 9, 'RincÃ³n del Cinto');
INSERT INTO `prov_localidades` VALUES (1194, 9, 'RincÃ³n del Doll');
INSERT INTO `prov_localidades` VALUES (1195, 9, 'RincÃ³n del Gato');
INSERT INTO `prov_localidades` VALUES (1196, 9, 'Rocamora');
INSERT INTO `prov_localidades` VALUES (1197, 9, 'Rosario del Tala');
INSERT INTO `prov_localidades` VALUES (1198, 9, 'San Benito');
INSERT INTO `prov_localidades` VALUES (1199, 9, 'San Cipriano');
INSERT INTO `prov_localidades` VALUES (1200, 9, 'San Ernesto');
INSERT INTO `prov_localidades` VALUES (1201, 9, 'San Gustavo');
INSERT INTO `prov_localidades` VALUES (1202, 9, 'San Jaime');
INSERT INTO `prov_localidades` VALUES (1203, 9, 'San JosÃ©');
INSERT INTO `prov_localidades` VALUES (1204, 9, 'San JosÃ© de Feliciano');
INSERT INTO `prov_localidades` VALUES (1205, 9, 'San Justo');
INSERT INTO `prov_localidades` VALUES (1206, 9, 'San Marcial');
INSERT INTO `prov_localidades` VALUES (1207, 9, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (1208, 9, 'San RamÃ­rez');
INSERT INTO `prov_localidades` VALUES (1209, 9, 'San RamÃ³n');
INSERT INTO `prov_localidades` VALUES (1210, 9, 'San Roque');
INSERT INTO `prov_localidades` VALUES (1211, 9, 'San Salvador');
INSERT INTO `prov_localidades` VALUES (1212, 9, 'San VÃ­ctor');
INSERT INTO `prov_localidades` VALUES (1213, 9, 'Santa Ana');
INSERT INTO `prov_localidades` VALUES (1214, 9, 'Santa Anita');
INSERT INTO `prov_localidades` VALUES (1215, 9, 'Santa Elena');
INSERT INTO `prov_localidades` VALUES (1216, 9, 'Santa LucÃ­a');
INSERT INTO `prov_localidades` VALUES (1217, 9, 'Santa Luisa');
INSERT INTO `prov_localidades` VALUES (1218, 9, 'Sauce de Luna');
INSERT INTO `prov_localidades` VALUES (1219, 9, 'Sauce Montrull');
INSERT INTO `prov_localidades` VALUES (1220, 9, 'Sauce Pinto');
INSERT INTO `prov_localidades` VALUES (1221, 9, 'Sauce Sur');
INSERT INTO `prov_localidades` VALUES (1222, 9, 'SeguÃ­');
INSERT INTO `prov_localidades` VALUES (1223, 9, 'Sir Leonard');
INSERT INTO `prov_localidades` VALUES (1224, 9, 'Sosa');
INSERT INTO `prov_localidades` VALUES (1225, 9, 'Tabossi');
INSERT INTO `prov_localidades` VALUES (1226, 9, 'Tezanos Pinto');
INSERT INTO `prov_localidades` VALUES (1227, 9, 'Ubajay');
INSERT INTO `prov_localidades` VALUES (1228, 9, 'Urdinarrain');
INSERT INTO `prov_localidades` VALUES (1229, 9, 'Veinte de Septiembre');
INSERT INTO `prov_localidades` VALUES (1230, 9, 'Viale');
INSERT INTO `prov_localidades` VALUES (1231, 9, 'Victoria');
INSERT INTO `prov_localidades` VALUES (1232, 9, 'Villa Clara');
INSERT INTO `prov_localidades` VALUES (1233, 9, 'Villa del Rosario');
INSERT INTO `prov_localidades` VALUES (1234, 9, 'Villa DomÃ­nguez');
INSERT INTO `prov_localidades` VALUES (1235, 9, 'Villa Elisa');
INSERT INTO `prov_localidades` VALUES (1236, 9, 'Villa Fontana');
INSERT INTO `prov_localidades` VALUES (1237, 9, 'Villa Gdor. Etchevehere');
INSERT INTO `prov_localidades` VALUES (1238, 9, 'Villa Mantero');
INSERT INTO `prov_localidades` VALUES (1239, 9, 'Villa Paranacito');
INSERT INTO `prov_localidades` VALUES (1240, 9, 'Villa Urquiza');
INSERT INTO `prov_localidades` VALUES (1241, 9, 'Villaguay');
INSERT INTO `prov_localidades` VALUES (1242, 9, 'Walter Moss');
INSERT INTO `prov_localidades` VALUES (1243, 9, 'YacarÃ©');
INSERT INTO `prov_localidades` VALUES (1244, 9, 'Yeso Oeste');
INSERT INTO `prov_localidades` VALUES (1245, 10, 'Buena Vista');
INSERT INTO `prov_localidades` VALUES (1246, 10, 'Clorinda');
INSERT INTO `prov_localidades` VALUES (1247, 10, 'Col. Pastoril');
INSERT INTO `prov_localidades` VALUES (1248, 10, 'Cte. Fontana');
INSERT INTO `prov_localidades` VALUES (1249, 10, 'El Colorado');
INSERT INTO `prov_localidades` VALUES (1250, 10, 'El Espinillo');
INSERT INTO `prov_localidades` VALUES (1251, 10, 'Estanislao Del Campo');
INSERT INTO `prov_localidades` VALUES (1253, 10, 'FortÃ­n Lugones');
INSERT INTO `prov_localidades` VALUES (1254, 10, 'Gral. Lucio V. Mansilla');
INSERT INTO `prov_localidades` VALUES (1255, 10, 'Gral. Manuel Belgrano');
INSERT INTO `prov_localidades` VALUES (1256, 10, 'Gral. Mosconi');
INSERT INTO `prov_localidades` VALUES (1257, 10, 'Gran Guardia');
INSERT INTO `prov_localidades` VALUES (1258, 10, 'Herradura');
INSERT INTO `prov_localidades` VALUES (1259, 10, 'Ibarreta');
INSERT INTO `prov_localidades` VALUES (1260, 10, 'Ing. JuÃ¡rez');
INSERT INTO `prov_localidades` VALUES (1261, 10, 'Laguna Blanca');
INSERT INTO `prov_localidades` VALUES (1262, 10, 'Laguna Naick Neck');
INSERT INTO `prov_localidades` VALUES (1263, 10, 'Laguna Yema');
INSERT INTO `prov_localidades` VALUES (1264, 10, 'Las Lomitas');
INSERT INTO `prov_localidades` VALUES (1265, 10, 'Los Chiriguanos');
INSERT INTO `prov_localidades` VALUES (1266, 10, 'Mayor V. VillafaÃ±e');
INSERT INTO `prov_localidades` VALUES (1267, 10, 'MisiÃ³n San Fco.');
INSERT INTO `prov_localidades` VALUES (1268, 10, 'Palo Santo');
INSERT INTO `prov_localidades` VALUES (1269, 10, 'PiranÃ©');
INSERT INTO `prov_localidades` VALUES (1270, 10, 'Pozo del Maza');
INSERT INTO `prov_localidades` VALUES (1271, 10, 'Riacho He-He');
INSERT INTO `prov_localidades` VALUES (1272, 10, 'San Hilario');
INSERT INTO `prov_localidades` VALUES (1273, 10, 'San MartÃ­n II');
INSERT INTO `prov_localidades` VALUES (1274, 10, 'Siete Palmas');
INSERT INTO `prov_localidades` VALUES (1275, 10, 'Subteniente PerÃ­n');
INSERT INTO `prov_localidades` VALUES (1276, 10, 'Tres Lagunas');
INSERT INTO `prov_localidades` VALUES (1277, 10, 'Villa Dos Trece');
INSERT INTO `prov_localidades` VALUES (1278, 10, 'Villa Escolar');
INSERT INTO `prov_localidades` VALUES (1279, 10, 'Villa Gral. GÃ¼emes');
INSERT INTO `prov_localidades` VALUES (1280, 11, 'Abdon Castro Tolay');
INSERT INTO `prov_localidades` VALUES (1281, 11, 'Abra Pampa');
INSERT INTO `prov_localidades` VALUES (1282, 11, 'Abralaite');
INSERT INTO `prov_localidades` VALUES (1283, 11, 'Aguas Calientes');
INSERT INTO `prov_localidades` VALUES (1284, 11, 'Arrayanal');
INSERT INTO `prov_localidades` VALUES (1285, 11, 'Barrios');
INSERT INTO `prov_localidades` VALUES (1286, 11, 'Caimancito');
INSERT INTO `prov_localidades` VALUES (1287, 11, 'Calilegua');
INSERT INTO `prov_localidades` VALUES (1288, 11, 'Cangrejillos');
INSERT INTO `prov_localidades` VALUES (1289, 11, 'Caspala');
INSERT INTO `prov_localidades` VALUES (1290, 11, 'CatuÃ¡');
INSERT INTO `prov_localidades` VALUES (1291, 11, 'Cieneguillas');
INSERT INTO `prov_localidades` VALUES (1292, 11, 'Coranzulli');
INSERT INTO `prov_localidades` VALUES (1293, 11, 'Cusi-Cusi');
INSERT INTO `prov_localidades` VALUES (1294, 11, 'El Aguilar');
INSERT INTO `prov_localidades` VALUES (1295, 11, 'El Carmen');
INSERT INTO `prov_localidades` VALUES (1296, 11, 'El CÃ³ndor');
INSERT INTO `prov_localidades` VALUES (1297, 11, 'El Fuerte');
INSERT INTO `prov_localidades` VALUES (1298, 11, 'El Piquete');
INSERT INTO `prov_localidades` VALUES (1299, 11, 'El Talar');
INSERT INTO `prov_localidades` VALUES (1300, 11, 'Fraile Pintado');
INSERT INTO `prov_localidades` VALUES (1301, 11, 'HipÃ³lito Yrigoyen');
INSERT INTO `prov_localidades` VALUES (1302, 11, 'Huacalera');
INSERT INTO `prov_localidades` VALUES (1303, 11, 'Humahuaca');
INSERT INTO `prov_localidades` VALUES (1304, 11, 'La Esperanza');
INSERT INTO `prov_localidades` VALUES (1305, 11, 'La Mendieta');
INSERT INTO `prov_localidades` VALUES (1306, 11, 'La Quiaca');
INSERT INTO `prov_localidades` VALUES (1307, 11, 'Ledesma');
INSERT INTO `prov_localidades` VALUES (1308, 11, 'Libertador Gral. San Martin');
INSERT INTO `prov_localidades` VALUES (1309, 11, 'Maimara');
INSERT INTO `prov_localidades` VALUES (1310, 11, 'Mina Pirquitas');
INSERT INTO `prov_localidades` VALUES (1311, 11, 'Monterrico');
INSERT INTO `prov_localidades` VALUES (1312, 11, 'Palma Sola');
INSERT INTO `prov_localidades` VALUES (1313, 11, 'PalpalÃ¡');
INSERT INTO `prov_localidades` VALUES (1314, 11, 'Pampa Blanca');
INSERT INTO `prov_localidades` VALUES (1315, 11, 'Pampichuela');
INSERT INTO `prov_localidades` VALUES (1316, 11, 'Perico');
INSERT INTO `prov_localidades` VALUES (1317, 11, 'Puesto del MarquÃ©s');
INSERT INTO `prov_localidades` VALUES (1318, 11, 'Puesto Viejo');
INSERT INTO `prov_localidades` VALUES (1319, 11, 'Pumahuasi');
INSERT INTO `prov_localidades` VALUES (1320, 11, 'Purmamarca');
INSERT INTO `prov_localidades` VALUES (1321, 11, 'Rinconada');
INSERT INTO `prov_localidades` VALUES (1322, 11, 'Rodeitos');
INSERT INTO `prov_localidades` VALUES (1323, 11, 'Rosario de RÃ­o Grande');
INSERT INTO `prov_localidades` VALUES (1324, 11, 'San Antonio');
INSERT INTO `prov_localidades` VALUES (1325, 11, 'San Francisco');
INSERT INTO `prov_localidades` VALUES (1326, 11, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (1327, 11, 'San Rafael');
INSERT INTO `prov_localidades` VALUES (1328, 11, 'San Salvador');
INSERT INTO `prov_localidades` VALUES (1329, 11, 'Santa Ana');
INSERT INTO `prov_localidades` VALUES (1330, 11, 'Santa Catalina');
INSERT INTO `prov_localidades` VALUES (1331, 11, 'Santa Clara');
INSERT INTO `prov_localidades` VALUES (1332, 11, 'Susques');
INSERT INTO `prov_localidades` VALUES (1333, 11, 'Tilcara');
INSERT INTO `prov_localidades` VALUES (1334, 11, 'Tres Cruces');
INSERT INTO `prov_localidades` VALUES (1335, 11, 'Tumbaya');
INSERT INTO `prov_localidades` VALUES (1336, 11, 'Valle Grande');
INSERT INTO `prov_localidades` VALUES (1337, 11, 'Vinalito');
INSERT INTO `prov_localidades` VALUES (1338, 11, 'VolcÃ¡n');
INSERT INTO `prov_localidades` VALUES (1339, 11, 'Yala');
INSERT INTO `prov_localidades` VALUES (1340, 11, 'YavÃ­');
INSERT INTO `prov_localidades` VALUES (1341, 11, 'Yuto');
INSERT INTO `prov_localidades` VALUES (1342, 12, 'Abramo');
INSERT INTO `prov_localidades` VALUES (1343, 12, 'Adolfo Van Praet');
INSERT INTO `prov_localidades` VALUES (1344, 12, 'Agustoni');
INSERT INTO `prov_localidades` VALUES (1345, 12, 'Algarrobo del Aguila');
INSERT INTO `prov_localidades` VALUES (1346, 12, 'Alpachiri');
INSERT INTO `prov_localidades` VALUES (1347, 12, 'Alta Italia');
INSERT INTO `prov_localidades` VALUES (1348, 12, 'Anguil');
INSERT INTO `prov_localidades` VALUES (1349, 12, 'Arata');
INSERT INTO `prov_localidades` VALUES (1350, 12, 'Ataliva Roca');
INSERT INTO `prov_localidades` VALUES (1351, 12, 'Bernardo Larroude');
INSERT INTO `prov_localidades` VALUES (1352, 12, 'Bernasconi');
INSERT INTO `prov_localidades` VALUES (1353, 12, 'CaleufÃº');
INSERT INTO `prov_localidades` VALUES (1354, 12, 'Carro Quemado');
INSERT INTO `prov_localidades` VALUES (1355, 12, 'CatrilÃ³');
INSERT INTO `prov_localidades` VALUES (1356, 12, 'Ceballos');
INSERT INTO `prov_localidades` VALUES (1357, 12, 'Chacharramendi');
INSERT INTO `prov_localidades` VALUES (1358, 12, 'Col. BarÃ³n');
INSERT INTO `prov_localidades` VALUES (1359, 12, 'Col. Santa MarÃ­a');
INSERT INTO `prov_localidades` VALUES (1360, 12, 'Conhelo');
INSERT INTO `prov_localidades` VALUES (1361, 12, 'Coronel Hilario Lagos');
INSERT INTO `prov_localidades` VALUES (1362, 12, 'Cuchillo-CÃ³');
INSERT INTO `prov_localidades` VALUES (1363, 12, 'Doblas');
INSERT INTO `prov_localidades` VALUES (1364, 12, 'Dorila');
INSERT INTO `prov_localidades` VALUES (1365, 12, 'Eduardo Castex');
INSERT INTO `prov_localidades` VALUES (1366, 12, 'Embajador Martini');
INSERT INTO `prov_localidades` VALUES (1367, 12, 'Falucho');
INSERT INTO `prov_localidades` VALUES (1368, 12, 'Gral. Acha');
INSERT INTO `prov_localidades` VALUES (1369, 12, 'Gral. Manuel Campos');
INSERT INTO `prov_localidades` VALUES (1370, 12, 'Gral. Pico');
INSERT INTO `prov_localidades` VALUES (1371, 12, 'GuatrachÃ©');
INSERT INTO `prov_localidades` VALUES (1372, 12, 'Ing. Luiggi');
INSERT INTO `prov_localidades` VALUES (1373, 12, 'Intendente Alvear');
INSERT INTO `prov_localidades` VALUES (1374, 12, 'Jacinto Arauz');
INSERT INTO `prov_localidades` VALUES (1375, 12, 'La Adela');
INSERT INTO `prov_localidades` VALUES (1376, 12, 'La Humada');
INSERT INTO `prov_localidades` VALUES (1377, 12, 'La Maruja');
INSERT INTO `prov_localidades` VALUES (1379, 12, 'La Reforma');
INSERT INTO `prov_localidades` VALUES (1380, 12, 'Limay Mahuida');
INSERT INTO `prov_localidades` VALUES (1381, 12, 'Lonquimay');
INSERT INTO `prov_localidades` VALUES (1382, 12, 'Loventuel');
INSERT INTO `prov_localidades` VALUES (1383, 12, 'Luan Toro');
INSERT INTO `prov_localidades` VALUES (1384, 12, 'MacachÃ­n');
INSERT INTO `prov_localidades` VALUES (1385, 12, 'Maisonnave');
INSERT INTO `prov_localidades` VALUES (1386, 12, 'Mauricio Mayer');
INSERT INTO `prov_localidades` VALUES (1387, 12, 'Metileo');
INSERT INTO `prov_localidades` VALUES (1388, 12, 'Miguel CanÃ©');
INSERT INTO `prov_localidades` VALUES (1389, 12, 'Miguel Riglos');
INSERT INTO `prov_localidades` VALUES (1390, 12, 'Monte Nievas');
INSERT INTO `prov_localidades` VALUES (1391, 12, 'Parera');
INSERT INTO `prov_localidades` VALUES (1392, 12, 'PerÃº');
INSERT INTO `prov_localidades` VALUES (1393, 12, 'Pichi-Huinca');
INSERT INTO `prov_localidades` VALUES (1394, 12, 'Puelches');
INSERT INTO `prov_localidades` VALUES (1395, 12, 'PuelÃ©n');
INSERT INTO `prov_localidades` VALUES (1396, 12, 'Quehue');
INSERT INTO `prov_localidades` VALUES (1397, 12, 'QuemÃº QuemÃº');
INSERT INTO `prov_localidades` VALUES (1398, 12, 'QuetrequÃ©n');
INSERT INTO `prov_localidades` VALUES (1399, 12, 'Rancul');
INSERT INTO `prov_localidades` VALUES (1400, 12, 'RealicÃ³');
INSERT INTO `prov_localidades` VALUES (1401, 12, 'Relmo');
INSERT INTO `prov_localidades` VALUES (1402, 12, 'RolÃ³n');
INSERT INTO `prov_localidades` VALUES (1403, 12, 'Rucanelo');
INSERT INTO `prov_localidades` VALUES (1404, 12, 'Sarah');
INSERT INTO `prov_localidades` VALUES (1405, 12, 'Speluzzi');
INSERT INTO `prov_localidades` VALUES (1406, 12, 'Sta. Isabel');
INSERT INTO `prov_localidades` VALUES (1407, 12, 'Sta. Rosa');
INSERT INTO `prov_localidades` VALUES (1408, 12, 'Sta. Teresa');
INSERT INTO `prov_localidades` VALUES (1409, 12, 'TelÃ©n');
INSERT INTO `prov_localidades` VALUES (1410, 12, 'Toay');
INSERT INTO `prov_localidades` VALUES (1411, 12, 'Tomas M. de Anchorena');
INSERT INTO `prov_localidades` VALUES (1412, 12, 'Trenel');
INSERT INTO `prov_localidades` VALUES (1413, 12, 'Unanue');
INSERT INTO `prov_localidades` VALUES (1414, 12, 'Uriburu');
INSERT INTO `prov_localidades` VALUES (1415, 12, 'Veinticinco de Mayo');
INSERT INTO `prov_localidades` VALUES (1416, 12, 'Vertiz');
INSERT INTO `prov_localidades` VALUES (1417, 12, 'Victorica');
INSERT INTO `prov_localidades` VALUES (1418, 12, 'Villa Mirasol');
INSERT INTO `prov_localidades` VALUES (1419, 12, 'Winifreda');
INSERT INTO `prov_localidades` VALUES (1420, 13, 'Arauco');
INSERT INTO `prov_localidades` VALUES (1421, 13, 'Capital');
INSERT INTO `prov_localidades` VALUES (1422, 13, 'Castro Barros');
INSERT INTO `prov_localidades` VALUES (1423, 13, 'Chamical');
INSERT INTO `prov_localidades` VALUES (1424, 13, 'Chilecito');
INSERT INTO `prov_localidades` VALUES (1425, 13, 'Coronel F. Varela');
INSERT INTO `prov_localidades` VALUES (1426, 13, 'Famatina');
INSERT INTO `prov_localidades` VALUES (1427, 13, 'Gral. A.V.PeÃ±aloza');
INSERT INTO `prov_localidades` VALUES (1428, 13, 'Gral. Belgrano');
INSERT INTO `prov_localidades` VALUES (1429, 13, 'Gral. J.F. Quiroga');
INSERT INTO `prov_localidades` VALUES (1430, 13, 'Gral. Lamadrid');
INSERT INTO `prov_localidades` VALUES (1431, 13, 'Gral. Ocampo');
INSERT INTO `prov_localidades` VALUES (1432, 13, 'Gral. San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1433, 13, 'Independencia');
INSERT INTO `prov_localidades` VALUES (1434, 13, 'Rosario Penaloza');
INSERT INTO `prov_localidades` VALUES (1435, 13, 'San Blas de Los Sauces');
INSERT INTO `prov_localidades` VALUES (1436, 13, 'Sanagasta');
INSERT INTO `prov_localidades` VALUES (1437, 13, 'Vinchina');
INSERT INTO `prov_localidades` VALUES (1438, 14, 'Capital');
INSERT INTO `prov_localidades` VALUES (1439, 14, 'Chacras de Coria');
INSERT INTO `prov_localidades` VALUES (1440, 14, 'Dorrego');
INSERT INTO `prov_localidades` VALUES (1441, 14, 'Gllen');
INSERT INTO `prov_localidades` VALUES (1442, 14, 'Godoy Cruz');
INSERT INTO `prov_localidades` VALUES (1443, 14, 'Gral. Alvear');
INSERT INTO `prov_localidades` VALUES (1444, 14, 'GuaymallÃ©n');
INSERT INTO `prov_localidades` VALUES (1445, 14, 'JunÃ­n');
INSERT INTO `prov_localidades` VALUES (1446, 14, 'La Paz');
INSERT INTO `prov_localidades` VALUES (1447, 14, 'Las Heras');
INSERT INTO `prov_localidades` VALUES (1448, 14, 'Lavalle');
INSERT INTO `prov_localidades` VALUES (1449, 14, 'LujÃ¡n');
INSERT INTO `prov_localidades` VALUES (1450, 14, 'LujÃ¡n De Cuyo');
INSERT INTO `prov_localidades` VALUES (1451, 14, 'MaipÃº');
INSERT INTO `prov_localidades` VALUES (1452, 14, 'MalargÃ¼e');
INSERT INTO `prov_localidades` VALUES (1453, 14, 'Rivadavia');
INSERT INTO `prov_localidades` VALUES (1454, 14, 'San Carlos');
INSERT INTO `prov_localidades` VALUES (1455, 14, 'San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1456, 14, 'San Rafael');
INSERT INTO `prov_localidades` VALUES (1457, 14, 'Sta. Rosa');
INSERT INTO `prov_localidades` VALUES (1458, 14, 'TunuyÃ¡n');
INSERT INTO `prov_localidades` VALUES (1459, 14, 'Tupungato');
INSERT INTO `prov_localidades` VALUES (1460, 14, 'Villa Nueva');
INSERT INTO `prov_localidades` VALUES (1461, 15, 'Alba Posse');
INSERT INTO `prov_localidades` VALUES (1462, 15, 'Almafuerte');
INSERT INTO `prov_localidades` VALUES (1463, 15, 'ApÃ³stoles');
INSERT INTO `prov_localidades` VALUES (1464, 15, 'AristÃ³bulo Del Valle');
INSERT INTO `prov_localidades` VALUES (1465, 15, 'Arroyo Del Medio');
INSERT INTO `prov_localidades` VALUES (1466, 15, 'Azara');
INSERT INTO `prov_localidades` VALUES (1467, 15, 'Bdo. De Irigoyen');
INSERT INTO `prov_localidades` VALUES (1468, 15, 'Bonpland');
INSERT INTO `prov_localidades` VALUES (1469, 15, 'CaÃ¡ Yari');
INSERT INTO `prov_localidades` VALUES (1470, 15, 'Campo Grande');
INSERT INTO `prov_localidades` VALUES (1471, 15, 'Campo RamÃ³n');
INSERT INTO `prov_localidades` VALUES (1472, 15, 'Campo Viera');
INSERT INTO `prov_localidades` VALUES (1473, 15, 'Candelaria');
INSERT INTO `prov_localidades` VALUES (1474, 15, 'CapiovÃ­');
INSERT INTO `prov_localidades` VALUES (1475, 15, 'Caraguatay');
INSERT INTO `prov_localidades` VALUES (1476, 15, 'Cdte. GuacurarÃ­');
INSERT INTO `prov_localidades` VALUES (1477, 15, 'Cerro Azul');
INSERT INTO `prov_localidades` VALUES (1478, 15, 'Cerro CorÃ¡');
INSERT INTO `prov_localidades` VALUES (1479, 15, 'Col. Alberdi');
INSERT INTO `prov_localidades` VALUES (1480, 15, 'Col. Aurora');
INSERT INTO `prov_localidades` VALUES (1481, 15, 'Col. Delicia');
INSERT INTO `prov_localidades` VALUES (1482, 15, 'Col. Polana');
INSERT INTO `prov_localidades` VALUES (1483, 15, 'Col. Victoria');
INSERT INTO `prov_localidades` VALUES (1484, 15, 'Col. Wanda');
INSERT INTO `prov_localidades` VALUES (1485, 15, 'ConcepciÃ³n De La Sierra');
INSERT INTO `prov_localidades` VALUES (1486, 15, 'Corpus');
INSERT INTO `prov_localidades` VALUES (1487, 15, 'Dos Arroyos');
INSERT INTO `prov_localidades` VALUES (1488, 15, 'Dos de Mayo');
INSERT INTO `prov_localidades` VALUES (1489, 15, 'El AlcÃ¡zar');
INSERT INTO `prov_localidades` VALUES (1490, 15, 'El Dorado');
INSERT INTO `prov_localidades` VALUES (1491, 15, 'El Soberbio');
INSERT INTO `prov_localidades` VALUES (1492, 15, 'Esperanza');
INSERT INTO `prov_localidades` VALUES (1493, 15, 'F. Ameghino');
INSERT INTO `prov_localidades` VALUES (1494, 15, 'Fachinal');
INSERT INTO `prov_localidades` VALUES (1495, 15, 'GaruhapÃ©');
INSERT INTO `prov_localidades` VALUES (1496, 15, 'GarupÃ¡');
INSERT INTO `prov_localidades` VALUES (1497, 15, 'Gdor. LÃ³pez');
INSERT INTO `prov_localidades` VALUES (1498, 15, 'Gdor. Roca');
INSERT INTO `prov_localidades` VALUES (1499, 15, 'Gral. Alvear');
INSERT INTO `prov_localidades` VALUES (1500, 15, 'Gral. Urquiza');
INSERT INTO `prov_localidades` VALUES (1501, 15, 'GuaranÃ­');
INSERT INTO `prov_localidades` VALUES (1502, 15, 'H. Yrigoyen');
INSERT INTO `prov_localidades` VALUES (1503, 15, 'IguazÃº');
INSERT INTO `prov_localidades` VALUES (1504, 15, 'ItacaruarÃ©');
INSERT INTO `prov_localidades` VALUES (1505, 15, 'JardÃ­n AmÃ©rica');
INSERT INTO `prov_localidades` VALUES (1506, 15, 'Leandro N. Alem');
INSERT INTO `prov_localidades` VALUES (1507, 15, 'Libertad');
INSERT INTO `prov_localidades` VALUES (1508, 15, 'Loreto');
INSERT INTO `prov_localidades` VALUES (1509, 15, 'Los Helechos');
INSERT INTO `prov_localidades` VALUES (1510, 15, 'MÃ¡rtires');
INSERT INTO `prov_localidades` VALUES (1512, 15, 'MojÃ³n Grande');
INSERT INTO `prov_localidades` VALUES (1513, 15, 'Montecarlo');
INSERT INTO `prov_localidades` VALUES (1514, 15, 'Nueve de Julio');
INSERT INTO `prov_localidades` VALUES (1515, 15, 'OberÃ¡');
INSERT INTO `prov_localidades` VALUES (1516, 15, 'Olegario V. Andrade');
INSERT INTO `prov_localidades` VALUES (1517, 15, 'PanambÃ­');
INSERT INTO `prov_localidades` VALUES (1518, 15, 'Posadas');
INSERT INTO `prov_localidades` VALUES (1519, 15, 'Profundidad');
INSERT INTO `prov_localidades` VALUES (1520, 15, 'Pto. IguazÃº');
INSERT INTO `prov_localidades` VALUES (1521, 15, 'Pto. Leoni');
INSERT INTO `prov_localidades` VALUES (1522, 15, 'Pto. Piray');
INSERT INTO `prov_localidades` VALUES (1523, 15, 'Pto. Rico');
INSERT INTO `prov_localidades` VALUES (1524, 15, 'Ruiz de Montoya');
INSERT INTO `prov_localidades` VALUES (1525, 15, 'San Antonio');
INSERT INTO `prov_localidades` VALUES (1526, 15, 'San Ignacio');
INSERT INTO `prov_localidades` VALUES (1527, 15, 'San Javier');
INSERT INTO `prov_localidades` VALUES (1528, 15, 'San JosÃ©');
INSERT INTO `prov_localidades` VALUES (1529, 15, 'San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1530, 15, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (1531, 15, 'San Vicente');
INSERT INTO `prov_localidades` VALUES (1532, 15, 'Santiago De Liniers');
INSERT INTO `prov_localidades` VALUES (1533, 15, 'Santo Pipo');
INSERT INTO `prov_localidades` VALUES (1534, 15, 'Sta. Ana');
INSERT INTO `prov_localidades` VALUES (1535, 15, 'Sta. MarÃ­a');
INSERT INTO `prov_localidades` VALUES (1536, 15, 'Tres Capones');
INSERT INTO `prov_localidades` VALUES (1537, 15, 'Veinticinco de Mayo');
INSERT INTO `prov_localidades` VALUES (1538, 15, 'Wanda');
INSERT INTO `prov_localidades` VALUES (1539, 16, 'Aguada San Roque');
INSERT INTO `prov_localidades` VALUES (1540, 16, 'AluminÃ©');
INSERT INTO `prov_localidades` VALUES (1541, 16, 'Andacollo');
INSERT INTO `prov_localidades` VALUES (1542, 16, 'AÃ±elo');
INSERT INTO `prov_localidades` VALUES (1543, 16, 'Bajada del Agrio');
INSERT INTO `prov_localidades` VALUES (1544, 16, 'Barrancas');
INSERT INTO `prov_localidades` VALUES (1545, 16, 'Buta Ranquil');
INSERT INTO `prov_localidades` VALUES (1546, 16, 'Capital');
INSERT INTO `prov_localidades` VALUES (1547, 16, 'CaviahuÃ©');
INSERT INTO `prov_localidades` VALUES (1548, 16, 'Centenario');
INSERT INTO `prov_localidades` VALUES (1549, 16, 'Chorriaca');
INSERT INTO `prov_localidades` VALUES (1550, 16, 'Chos Malal');
INSERT INTO `prov_localidades` VALUES (1551, 16, 'Cipolletti');
INSERT INTO `prov_localidades` VALUES (1552, 16, 'Covunco Abajo');
INSERT INTO `prov_localidades` VALUES (1553, 16, 'Coyuco Cochico');
INSERT INTO `prov_localidades` VALUES (1554, 16, 'Cutral CÃ³');
INSERT INTO `prov_localidades` VALUES (1555, 16, 'El Cholar');
INSERT INTO `prov_localidades` VALUES (1556, 16, 'El HuecÃº');
INSERT INTO `prov_localidades` VALUES (1557, 16, 'El Sauce');
INSERT INTO `prov_localidades` VALUES (1558, 16, 'GuaÃ±acos');
INSERT INTO `prov_localidades` VALUES (1559, 16, 'Huinganco');
INSERT INTO `prov_localidades` VALUES (1560, 16, 'Las Coloradas');
INSERT INTO `prov_localidades` VALUES (1561, 16, 'Las Lajas');
INSERT INTO `prov_localidades` VALUES (1562, 16, 'Las Ovejas');
INSERT INTO `prov_localidades` VALUES (1563, 16, 'LoncopuÃ©');
INSERT INTO `prov_localidades` VALUES (1564, 16, 'Los Catutos');
INSERT INTO `prov_localidades` VALUES (1565, 16, 'Los Chihuidos');
INSERT INTO `prov_localidades` VALUES (1566, 16, 'Los Miches');
INSERT INTO `prov_localidades` VALUES (1567, 16, 'Manzano Amargo');
INSERT INTO `prov_localidades` VALUES (1569, 16, 'Octavio Pico');
INSERT INTO `prov_localidades` VALUES (1570, 16, 'Paso Aguerre');
INSERT INTO `prov_localidades` VALUES (1571, 16, 'PicÃºn LeufÃº');
INSERT INTO `prov_localidades` VALUES (1572, 16, 'Piedra del Aguila');
INSERT INTO `prov_localidades` VALUES (1573, 16, 'Pilo Lil');
INSERT INTO `prov_localidades` VALUES (1574, 16, 'Plaza Huincul');
INSERT INTO `prov_localidades` VALUES (1575, 16, 'Plottier');
INSERT INTO `prov_localidades` VALUES (1576, 16, 'Quili Malal');
INSERT INTO `prov_localidades` VALUES (1577, 16, 'RamÃ³n Castro');
INSERT INTO `prov_localidades` VALUES (1578, 16, 'RincÃ³n de Los Sauces');
INSERT INTO `prov_localidades` VALUES (1579, 16, 'San MartÃ­n de Los Andes');
INSERT INTO `prov_localidades` VALUES (1580, 16, 'San Patricio del ChaÃ±ar');
INSERT INTO `prov_localidades` VALUES (1581, 16, 'Santo TomÃ¡s');
INSERT INTO `prov_localidades` VALUES (1582, 16, 'Sauzal Bonito');
INSERT INTO `prov_localidades` VALUES (1583, 16, 'Senillosa');
INSERT INTO `prov_localidades` VALUES (1584, 16, 'TaquimilÃ¡n');
INSERT INTO `prov_localidades` VALUES (1585, 16, 'Tricao Malal');
INSERT INTO `prov_localidades` VALUES (1586, 16, 'Varvarco');
INSERT INTO `prov_localidades` VALUES (1587, 16, 'Villa CurÃ­ Leuvu');
INSERT INTO `prov_localidades` VALUES (1588, 16, 'Villa del Nahueve');
INSERT INTO `prov_localidades` VALUES (1589, 16, 'Villa del Puente PicÃºn LeuvÃº');
INSERT INTO `prov_localidades` VALUES (1590, 16, 'Villa El ChocÃ³n');
INSERT INTO `prov_localidades` VALUES (1591, 16, 'Villa La Angostura');
INSERT INTO `prov_localidades` VALUES (1592, 16, 'Villa Pehuenia');
INSERT INTO `prov_localidades` VALUES (1593, 16, 'Villa Traful');
INSERT INTO `prov_localidades` VALUES (1594, 16, 'Vista Alegre');
INSERT INTO `prov_localidades` VALUES (1595, 16, 'Zapala');
INSERT INTO `prov_localidades` VALUES (1596, 17, 'Aguada Cecilio');
INSERT INTO `prov_localidades` VALUES (1597, 17, 'Aguada de Guerra');
INSERT INTO `prov_localidades` VALUES (1598, 17, 'AllÃ©n');
INSERT INTO `prov_localidades` VALUES (1599, 17, 'Arroyo de La Ventana');
INSERT INTO `prov_localidades` VALUES (1600, 17, 'Arroyo Los Berros');
INSERT INTO `prov_localidades` VALUES (1601, 17, 'Bariloche');
INSERT INTO `prov_localidades` VALUES (1602, 17, 'Calte. Cordero');
INSERT INTO `prov_localidades` VALUES (1603, 17, 'Campo Grande');
INSERT INTO `prov_localidades` VALUES (1604, 17, 'Catriel');
INSERT INTO `prov_localidades` VALUES (1605, 17, 'Cerro PolicÃ­a');
INSERT INTO `prov_localidades` VALUES (1606, 17, 'Cervantes');
INSERT INTO `prov_localidades` VALUES (1607, 17, 'Chelforo');
INSERT INTO `prov_localidades` VALUES (1608, 17, 'Chimpay');
INSERT INTO `prov_localidades` VALUES (1609, 17, 'Chinchinales');
INSERT INTO `prov_localidades` VALUES (1610, 17, 'Chipauquil');
INSERT INTO `prov_localidades` VALUES (1611, 17, 'Choele Choel');
INSERT INTO `prov_localidades` VALUES (1612, 17, 'Cinco Saltos');
INSERT INTO `prov_localidades` VALUES (1613, 17, 'Cipolletti');
INSERT INTO `prov_localidades` VALUES (1614, 17, 'Clemente Onelli');
INSERT INTO `prov_localidades` VALUES (1615, 17, 'ColÃ¡n Conhue');
INSERT INTO `prov_localidades` VALUES (1616, 17, 'Comallo');
INSERT INTO `prov_localidades` VALUES (1617, 17, 'ComicÃ³');
INSERT INTO `prov_localidades` VALUES (1618, 17, 'Cona Niyeu');
INSERT INTO `prov_localidades` VALUES (1619, 17, 'Coronel Belisle');
INSERT INTO `prov_localidades` VALUES (1620, 17, 'Cubanea');
INSERT INTO `prov_localidades` VALUES (1621, 17, 'Darwin');
INSERT INTO `prov_localidades` VALUES (1622, 17, 'Dina Huapi');
INSERT INTO `prov_localidades` VALUES (1623, 17, 'El BolsÃ³n');
INSERT INTO `prov_localidades` VALUES (1624, 17, 'El CaÃ­n');
INSERT INTO `prov_localidades` VALUES (1625, 17, 'El Manso');
INSERT INTO `prov_localidades` VALUES (1626, 17, 'Gral. Conesa');
INSERT INTO `prov_localidades` VALUES (1627, 17, 'Gral. Enrique Godoy');
INSERT INTO `prov_localidades` VALUES (1628, 17, 'Gral. Fernandez Oro');
INSERT INTO `prov_localidades` VALUES (1629, 17, 'Gral. Roca');
INSERT INTO `prov_localidades` VALUES (1630, 17, 'Guardia Mitre');
INSERT INTO `prov_localidades` VALUES (1631, 17, 'Ing. Huergo');
INSERT INTO `prov_localidades` VALUES (1632, 17, 'Ing. Jacobacci');
INSERT INTO `prov_localidades` VALUES (1633, 17, 'Laguna Blanca');
INSERT INTO `prov_localidades` VALUES (1634, 17, 'Lamarque');
INSERT INTO `prov_localidades` VALUES (1635, 17, 'Las Grutas');
INSERT INTO `prov_localidades` VALUES (1636, 17, 'Los Menucos');
INSERT INTO `prov_localidades` VALUES (1637, 17, 'Luis BeltrÃ¡n');
INSERT INTO `prov_localidades` VALUES (1638, 17, 'MainquÃ©');
INSERT INTO `prov_localidades` VALUES (1639, 17, 'Mamuel Choique');
INSERT INTO `prov_localidades` VALUES (1640, 17, 'Maquinchao');
INSERT INTO `prov_localidades` VALUES (1641, 17, 'MencuÃ©');
INSERT INTO `prov_localidades` VALUES (1642, 17, 'Mtro. Ramos Mexia');
INSERT INTO `prov_localidades` VALUES (1643, 17, 'Nahuel Niyeu');
INSERT INTO `prov_localidades` VALUES (1644, 17, 'Naupa Huen');
INSERT INTO `prov_localidades` VALUES (1645, 17, 'Ã‘orquinco');
INSERT INTO `prov_localidades` VALUES (1646, 17, 'Ojos de Agua');
INSERT INTO `prov_localidades` VALUES (1647, 17, 'Paso de Agua');
INSERT INTO `prov_localidades` VALUES (1648, 17, 'Paso Flores');
INSERT INTO `prov_localidades` VALUES (1649, 17, 'PeÃ±as Blancas');
INSERT INTO `prov_localidades` VALUES (1650, 17, 'Pichi Mahuida');
INSERT INTO `prov_localidades` VALUES (1651, 17, 'Pilcaniyeu');
INSERT INTO `prov_localidades` VALUES (1652, 17, 'Pomona');
INSERT INTO `prov_localidades` VALUES (1653, 17, 'Prahuaniyeu');
INSERT INTO `prov_localidades` VALUES (1654, 17, 'RincÃ³n Treneta');
INSERT INTO `prov_localidades` VALUES (1655, 17, 'RÃ­o Chico');
INSERT INTO `prov_localidades` VALUES (1656, 17, 'RÃ­o Colorado');
INSERT INTO `prov_localidades` VALUES (1657, 17, 'Roca');
INSERT INTO `prov_localidades` VALUES (1658, 17, 'San Antonio Oeste');
INSERT INTO `prov_localidades` VALUES (1659, 17, 'San Javier');
INSERT INTO `prov_localidades` VALUES (1660, 17, 'Sierra Colorada');
INSERT INTO `prov_localidades` VALUES (1661, 17, 'Sierra Grande');
INSERT INTO `prov_localidades` VALUES (1662, 17, 'Sierra PailemÃ¡n');
INSERT INTO `prov_localidades` VALUES (1663, 17, 'Valcheta');
INSERT INTO `prov_localidades` VALUES (1664, 17, 'Valle Azul');
INSERT INTO `prov_localidades` VALUES (1665, 17, 'Viedma');
INSERT INTO `prov_localidades` VALUES (1666, 17, 'Villa LlanquÃ­n');
INSERT INTO `prov_localidades` VALUES (1667, 17, 'Villa Mascardi');
INSERT INTO `prov_localidades` VALUES (1668, 17, 'Villa Regina');
INSERT INTO `prov_localidades` VALUES (1669, 17, 'YaminuÃ©');
INSERT INTO `prov_localidades` VALUES (1670, 18, 'A. Saravia');
INSERT INTO `prov_localidades` VALUES (1671, 18, 'Aguaray');
INSERT INTO `prov_localidades` VALUES (1672, 18, 'Angastaco');
INSERT INTO `prov_localidades` VALUES (1673, 18, 'AnimanÃ¡');
INSERT INTO `prov_localidades` VALUES (1674, 18, 'Cachi');
INSERT INTO `prov_localidades` VALUES (1675, 18, 'Cafayate');
INSERT INTO `prov_localidades` VALUES (1676, 18, 'Campo Quijano');
INSERT INTO `prov_localidades` VALUES (1677, 18, 'Campo Santo');
INSERT INTO `prov_localidades` VALUES (1678, 18, 'Capital');
INSERT INTO `prov_localidades` VALUES (1679, 18, 'Cerrillos');
INSERT INTO `prov_localidades` VALUES (1680, 18, 'Chicoana');
INSERT INTO `prov_localidades` VALUES (1681, 18, 'Col. Sta. Rosa');
INSERT INTO `prov_localidades` VALUES (1682, 18, 'Coronel Moldes');
INSERT INTO `prov_localidades` VALUES (1683, 18, 'El Bordo');
INSERT INTO `prov_localidades` VALUES (1684, 18, 'El Carril');
INSERT INTO `prov_localidades` VALUES (1685, 18, 'El GalpÃ³n');
INSERT INTO `prov_localidades` VALUES (1686, 18, 'El JardÃ­n');
INSERT INTO `prov_localidades` VALUES (1687, 18, 'El Potrero');
INSERT INTO `prov_localidades` VALUES (1688, 18, 'El Quebrachal');
INSERT INTO `prov_localidades` VALUES (1689, 18, 'El Tala');
INSERT INTO `prov_localidades` VALUES (1690, 18, 'EmbarcaciÃ³n');
INSERT INTO `prov_localidades` VALUES (1691, 18, 'Gral. Ballivian');
INSERT INTO `prov_localidades` VALUES (1692, 18, 'Gral. GÃ¼emes');
INSERT INTO `prov_localidades` VALUES (1693, 18, 'Gral. Mosconi');
INSERT INTO `prov_localidades` VALUES (1694, 18, 'Gral. Pizarro');
INSERT INTO `prov_localidades` VALUES (1695, 18, 'Guachipas');
INSERT INTO `prov_localidades` VALUES (1696, 18, 'HipÃ³lito Yrigoyen');
INSERT INTO `prov_localidades` VALUES (1697, 18, 'IruyÃ¡');
INSERT INTO `prov_localidades` VALUES (1698, 18, 'Isla De CaÃ±as');
INSERT INTO `prov_localidades` VALUES (1699, 18, 'J. V. Gonzalez');
INSERT INTO `prov_localidades` VALUES (1700, 18, 'La Caldera');
INSERT INTO `prov_localidades` VALUES (1701, 18, 'La Candelaria');
INSERT INTO `prov_localidades` VALUES (1702, 18, 'La Merced');
INSERT INTO `prov_localidades` VALUES (1703, 18, 'La Poma');
INSERT INTO `prov_localidades` VALUES (1704, 18, 'La ViÃ±a');
INSERT INTO `prov_localidades` VALUES (1705, 18, 'Las Lajitas');
INSERT INTO `prov_localidades` VALUES (1706, 18, 'Los Toldos');
INSERT INTO `prov_localidades` VALUES (1707, 18, 'MetÃ¡n');
INSERT INTO `prov_localidades` VALUES (1708, 18, 'Molinos');
INSERT INTO `prov_localidades` VALUES (1709, 18, 'Nazareno');
INSERT INTO `prov_localidades` VALUES (1710, 18, 'OrÃ¡n');
INSERT INTO `prov_localidades` VALUES (1711, 18, 'Payogasta');
INSERT INTO `prov_localidades` VALUES (1712, 18, 'Pichanal');
INSERT INTO `prov_localidades` VALUES (1713, 18, 'Prof. S. Mazza');
INSERT INTO `prov_localidades` VALUES (1714, 18, 'RÃ­o Piedras');
INSERT INTO `prov_localidades` VALUES (1715, 18, 'Rivadavia Banda Norte');
INSERT INTO `prov_localidades` VALUES (1716, 18, 'Rivadavia Banda Sur');
INSERT INTO `prov_localidades` VALUES (1717, 18, 'Rosario de La Frontera');
INSERT INTO `prov_localidades` VALUES (1718, 18, 'Rosario de Lerma');
INSERT INTO `prov_localidades` VALUES (1719, 18, 'SaclantÃ¡s');
INSERT INTO `prov_localidades` VALUES (1721, 18, 'San Antonio');
INSERT INTO `prov_localidades` VALUES (1722, 18, 'San Carlos');
INSERT INTO `prov_localidades` VALUES (1723, 18, 'San JosÃ© De MetÃ¡n');
INSERT INTO `prov_localidades` VALUES (1724, 18, 'San RamÃ³n');
INSERT INTO `prov_localidades` VALUES (1725, 18, 'Santa Victoria E.');
INSERT INTO `prov_localidades` VALUES (1726, 18, 'Santa Victoria O.');
INSERT INTO `prov_localidades` VALUES (1727, 18, 'Tartagal');
INSERT INTO `prov_localidades` VALUES (1728, 18, 'Tolar Grande');
INSERT INTO `prov_localidades` VALUES (1729, 18, 'Urundel');
INSERT INTO `prov_localidades` VALUES (1730, 18, 'Vaqueros');
INSERT INTO `prov_localidades` VALUES (1731, 18, 'Villa San Lorenzo');
INSERT INTO `prov_localidades` VALUES (1732, 19, 'AlbardÃ³n');
INSERT INTO `prov_localidades` VALUES (1733, 19, 'Angaco');
INSERT INTO `prov_localidades` VALUES (1734, 19, 'Calingasta');
INSERT INTO `prov_localidades` VALUES (1735, 19, 'Capital');
INSERT INTO `prov_localidades` VALUES (1736, 19, 'Caucete');
INSERT INTO `prov_localidades` VALUES (1737, 19, 'Chimbas');
INSERT INTO `prov_localidades` VALUES (1738, 19, 'Iglesia');
INSERT INTO `prov_localidades` VALUES (1739, 19, 'Jachal');
INSERT INTO `prov_localidades` VALUES (1740, 19, 'Nueve de Julio');
INSERT INTO `prov_localidades` VALUES (1741, 19, 'Pocito');
INSERT INTO `prov_localidades` VALUES (1742, 19, 'Rawson');
INSERT INTO `prov_localidades` VALUES (1743, 19, 'Rivadavia');
INSERT INTO `prov_localidades` VALUES (1745, 19, 'San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1746, 19, 'Santa LucÃ­a');
INSERT INTO `prov_localidades` VALUES (1747, 19, 'Sarmiento');
INSERT INTO `prov_localidades` VALUES (1748, 19, 'Ullum');
INSERT INTO `prov_localidades` VALUES (1749, 19, 'Valle FÃ©rtil');
INSERT INTO `prov_localidades` VALUES (1750, 19, 'Veinticinco de Mayo');
INSERT INTO `prov_localidades` VALUES (1751, 19, 'Zonda');
INSERT INTO `prov_localidades` VALUES (1752, 20, 'Alto Pelado');
INSERT INTO `prov_localidades` VALUES (1753, 20, 'Alto Pencoso');
INSERT INTO `prov_localidades` VALUES (1754, 20, 'Anchorena');
INSERT INTO `prov_localidades` VALUES (1755, 20, 'Arizona');
INSERT INTO `prov_localidades` VALUES (1756, 20, 'Bagual');
INSERT INTO `prov_localidades` VALUES (1757, 20, 'Balde');
INSERT INTO `prov_localidades` VALUES (1758, 20, 'Batavia');
INSERT INTO `prov_localidades` VALUES (1759, 20, 'Beazley');
INSERT INTO `prov_localidades` VALUES (1760, 20, 'Buena Esperanza');
INSERT INTO `prov_localidades` VALUES (1761, 20, 'Candelaria');
INSERT INTO `prov_localidades` VALUES (1762, 20, 'Capital');
INSERT INTO `prov_localidades` VALUES (1763, 20, 'Carolina');
INSERT INTO `prov_localidades` VALUES (1764, 20, 'CarpinterÃ­a');
INSERT INTO `prov_localidades` VALUES (1765, 20, 'ConcarÃ¡n');
INSERT INTO `prov_localidades` VALUES (1766, 20, 'Cortaderas');
INSERT INTO `prov_localidades` VALUES (1767, 20, 'El Morro');
INSERT INTO `prov_localidades` VALUES (1768, 20, 'El Trapiche');
INSERT INTO `prov_localidades` VALUES (1769, 20, 'El VolcÃ¡n');
INSERT INTO `prov_localidades` VALUES (1770, 20, 'FortÃ­n El Patria');
INSERT INTO `prov_localidades` VALUES (1771, 20, 'Fortuna');
INSERT INTO `prov_localidades` VALUES (1772, 20, 'Fraga');
INSERT INTO `prov_localidades` VALUES (1773, 20, 'Juan Jorba');
INSERT INTO `prov_localidades` VALUES (1774, 20, 'Juan Llerena');
INSERT INTO `prov_localidades` VALUES (1775, 20, 'Juana Koslay');
INSERT INTO `prov_localidades` VALUES (1776, 20, 'Justo Daract');
INSERT INTO `prov_localidades` VALUES (1777, 20, 'La Calera');
INSERT INTO `prov_localidades` VALUES (1778, 20, 'La Florida');
INSERT INTO `prov_localidades` VALUES (1779, 20, 'La Punilla');
INSERT INTO `prov_localidades` VALUES (1780, 20, 'La Toma');
INSERT INTO `prov_localidades` VALUES (1781, 20, 'Lafinur');
INSERT INTO `prov_localidades` VALUES (1782, 20, 'Las Aguadas');
INSERT INTO `prov_localidades` VALUES (1783, 20, 'Las Chacras');
INSERT INTO `prov_localidades` VALUES (1784, 20, 'Las Lagunas');
INSERT INTO `prov_localidades` VALUES (1785, 20, 'Las Vertientes');
INSERT INTO `prov_localidades` VALUES (1786, 20, 'Lavaisse');
INSERT INTO `prov_localidades` VALUES (1787, 20, 'Leandro N. Alem');
INSERT INTO `prov_localidades` VALUES (1788, 20, 'Los Molles');
INSERT INTO `prov_localidades` VALUES (1789, 20, 'LujÃ¡n');
INSERT INTO `prov_localidades` VALUES (1790, 20, 'Mercedes');
INSERT INTO `prov_localidades` VALUES (1791, 20, 'Merlo');
INSERT INTO `prov_localidades` VALUES (1792, 20, 'Naschel');
INSERT INTO `prov_localidades` VALUES (1793, 20, 'Navia');
INSERT INTO `prov_localidades` VALUES (1794, 20, 'NogolÃ­');
INSERT INTO `prov_localidades` VALUES (1795, 20, 'Nueva Galia');
INSERT INTO `prov_localidades` VALUES (1796, 20, 'Papagayos');
INSERT INTO `prov_localidades` VALUES (1797, 20, 'Paso Grande');
INSERT INTO `prov_localidades` VALUES (1798, 20, 'Potrero de Los Funes');
INSERT INTO `prov_localidades` VALUES (1799, 20, 'Quines');
INSERT INTO `prov_localidades` VALUES (1800, 20, 'Renca');
INSERT INTO `prov_localidades` VALUES (1801, 20, 'Saladillo');
INSERT INTO `prov_localidades` VALUES (1802, 20, 'San Francisco');
INSERT INTO `prov_localidades` VALUES (1803, 20, 'San GerÃ³nimo');
INSERT INTO `prov_localidades` VALUES (1804, 20, 'San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (1805, 20, 'San Pablo');
INSERT INTO `prov_localidades` VALUES (1806, 20, 'Santa Rosa de Conlara');
INSERT INTO `prov_localidades` VALUES (1807, 20, 'Talita');
INSERT INTO `prov_localidades` VALUES (1808, 20, 'Tilisarao');
INSERT INTO `prov_localidades` VALUES (1809, 20, 'UniÃ³n');
INSERT INTO `prov_localidades` VALUES (1810, 20, 'Villa de La Quebrada');
INSERT INTO `prov_localidades` VALUES (1811, 20, 'Villa de Praga');
INSERT INTO `prov_localidades` VALUES (1812, 20, 'Villa del Carmen');
INSERT INTO `prov_localidades` VALUES (1813, 20, 'Villa Gral. Roca');
INSERT INTO `prov_localidades` VALUES (1814, 20, 'Villa Larca');
INSERT INTO `prov_localidades` VALUES (1815, 20, 'Villa Mercedes');
INSERT INTO `prov_localidades` VALUES (1816, 20, 'Zanjitas');
INSERT INTO `prov_localidades` VALUES (1817, 21, 'Calafate');
INSERT INTO `prov_localidades` VALUES (1818, 21, 'Caleta Olivia');
INSERT INTO `prov_localidades` VALUES (1819, 21, 'CaÃ±adÃ³n Seco');
INSERT INTO `prov_localidades` VALUES (1820, 21, 'Comandante Piedrabuena');
INSERT INTO `prov_localidades` VALUES (1821, 21, 'El Calafate');
INSERT INTO `prov_localidades` VALUES (1822, 21, 'El ChaltÃ©n');
INSERT INTO `prov_localidades` VALUES (1823, 21, 'Gdor. Gregores');
INSERT INTO `prov_localidades` VALUES (1824, 21, 'HipÃ³lito Yrigoyen');
INSERT INTO `prov_localidades` VALUES (1825, 21, 'Jaramillo');
INSERT INTO `prov_localidades` VALUES (1826, 21, 'Koluel Kaike');
INSERT INTO `prov_localidades` VALUES (1827, 21, 'Las Heras');
INSERT INTO `prov_localidades` VALUES (1828, 21, 'Los Antiguos');
INSERT INTO `prov_localidades` VALUES (1829, 21, 'Perito Moreno');
INSERT INTO `prov_localidades` VALUES (1830, 21, 'Pico Truncado');
INSERT INTO `prov_localidades` VALUES (1831, 21, 'Pto. Deseado');
INSERT INTO `prov_localidades` VALUES (1832, 21, 'Pto. San JuliÃ¡n');
INSERT INTO `prov_localidades` VALUES (1833, 21, 'Pto. 21');
INSERT INTO `prov_localidades` VALUES (1834, 21, 'RÃ­o Cuarto');
INSERT INTO `prov_localidades` VALUES (1835, 21, 'RÃ­o Gallegos');
INSERT INTO `prov_localidades` VALUES (1836, 21, 'RÃ­o Turbio');
INSERT INTO `prov_localidades` VALUES (1837, 21, 'Tres Lagos');
INSERT INTO `prov_localidades` VALUES (1838, 21, 'Veintiocho De Noviembre');
INSERT INTO `prov_localidades` VALUES (1839, 22, 'AarÃ³n Castellanos');
INSERT INTO `prov_localidades` VALUES (1840, 22, 'Acebal');
INSERT INTO `prov_localidades` VALUES (1841, 22, 'AguarÃ¡ Grande');
INSERT INTO `prov_localidades` VALUES (1842, 22, 'Albarellos');
INSERT INTO `prov_localidades` VALUES (1843, 22, 'Alcorta');
INSERT INTO `prov_localidades` VALUES (1844, 22, 'Aldao');
INSERT INTO `prov_localidades` VALUES (1845, 22, 'Alejandra');
INSERT INTO `prov_localidades` VALUES (1846, 22, 'Ãlvarez');
INSERT INTO `prov_localidades` VALUES (1847, 22, 'Ambrosetti');
INSERT INTO `prov_localidades` VALUES (1848, 22, 'AmenÃ¡bar');
INSERT INTO `prov_localidades` VALUES (1849, 22, 'AngÃ©lica');
INSERT INTO `prov_localidades` VALUES (1850, 22, 'Angeloni');
INSERT INTO `prov_localidades` VALUES (1851, 22, 'Arequito');
INSERT INTO `prov_localidades` VALUES (1852, 22, 'Arminda');
INSERT INTO `prov_localidades` VALUES (1853, 22, 'Armstrong');
INSERT INTO `prov_localidades` VALUES (1854, 22, 'Arocena');
INSERT INTO `prov_localidades` VALUES (1855, 22, 'Arroyo Aguiar');
INSERT INTO `prov_localidades` VALUES (1856, 22, 'Arroyo Ceibal');
INSERT INTO `prov_localidades` VALUES (1857, 22, 'Arroyo Leyes');
INSERT INTO `prov_localidades` VALUES (1858, 22, 'Arroyo Seco');
INSERT INTO `prov_localidades` VALUES (1859, 22, 'ArrufÃ³');
INSERT INTO `prov_localidades` VALUES (1860, 22, 'Arteaga');
INSERT INTO `prov_localidades` VALUES (1861, 22, 'Ataliva');
INSERT INTO `prov_localidades` VALUES (1862, 22, 'Aurelia');
INSERT INTO `prov_localidades` VALUES (1863, 22, 'Avellaneda');
INSERT INTO `prov_localidades` VALUES (1864, 22, 'Barrancas');
INSERT INTO `prov_localidades` VALUES (1865, 22, 'Bauer Y Sigel');
INSERT INTO `prov_localidades` VALUES (1866, 22, 'Bella Italia');
INSERT INTO `prov_localidades` VALUES (1867, 22, 'BerabevÃº');
INSERT INTO `prov_localidades` VALUES (1868, 22, 'Berna');
INSERT INTO `prov_localidades` VALUES (1869, 22, 'Bernardo de Irigoyen');
INSERT INTO `prov_localidades` VALUES (1870, 22, 'Bigand');
INSERT INTO `prov_localidades` VALUES (1871, 22, 'Bombal');
INSERT INTO `prov_localidades` VALUES (1872, 22, 'Bouquet');
INSERT INTO `prov_localidades` VALUES (1873, 22, 'Bustinza');
INSERT INTO `prov_localidades` VALUES (1874, 22, 'Cabal');
INSERT INTO `prov_localidades` VALUES (1875, 22, 'Cacique Ariacaiquin');
INSERT INTO `prov_localidades` VALUES (1876, 22, 'Cafferata');
INSERT INTO `prov_localidades` VALUES (1877, 22, 'CalchaquÃ­');
INSERT INTO `prov_localidades` VALUES (1878, 22, 'Campo Andino');
INSERT INTO `prov_localidades` VALUES (1879, 22, 'Campo Piaggio');
INSERT INTO `prov_localidades` VALUES (1880, 22, 'CaÃ±ada de GÃ³mez');
INSERT INTO `prov_localidades` VALUES (1881, 22, 'CaÃ±ada del Ucle');
INSERT INTO `prov_localidades` VALUES (1882, 22, 'CaÃ±ada Rica');
INSERT INTO `prov_localidades` VALUES (1883, 22, 'CaÃ±ada RosquÃ­n');
INSERT INTO `prov_localidades` VALUES (1884, 22, 'Candioti');
INSERT INTO `prov_localidades` VALUES (1885, 22, 'Capital');
INSERT INTO `prov_localidades` VALUES (1886, 22, 'CapitÃ¡n BermÃºdez');
INSERT INTO `prov_localidades` VALUES (1887, 22, 'Capivara');
INSERT INTO `prov_localidades` VALUES (1888, 22, 'CarcaraÃ±Ã¡');
INSERT INTO `prov_localidades` VALUES (1889, 22, 'Carlos Pellegrini');
INSERT INTO `prov_localidades` VALUES (1890, 22, 'Carmen');
INSERT INTO `prov_localidades` VALUES (1891, 22, 'Carmen Del Sauce');
INSERT INTO `prov_localidades` VALUES (1892, 22, 'Carreras');
INSERT INTO `prov_localidades` VALUES (1893, 22, 'Carrizales');
INSERT INTO `prov_localidades` VALUES (1894, 22, 'Casalegno');
INSERT INTO `prov_localidades` VALUES (1895, 22, 'Casas');
INSERT INTO `prov_localidades` VALUES (1896, 22, 'Casilda');
INSERT INTO `prov_localidades` VALUES (1897, 22, 'Castelar');
INSERT INTO `prov_localidades` VALUES (1898, 22, 'Castellanos');
INSERT INTO `prov_localidades` VALUES (1899, 22, 'CayastÃ¡');
INSERT INTO `prov_localidades` VALUES (1900, 22, 'Cayastacito');
INSERT INTO `prov_localidades` VALUES (1901, 22, 'Centeno');
INSERT INTO `prov_localidades` VALUES (1902, 22, 'Cepeda');
INSERT INTO `prov_localidades` VALUES (1903, 22, 'Ceres');
INSERT INTO `prov_localidades` VALUES (1904, 22, 'ChabÃ¡s');
INSERT INTO `prov_localidades` VALUES (1905, 22, 'ChaÃ±ar Ladeado');
INSERT INTO `prov_localidades` VALUES (1906, 22, 'Chapuy');
INSERT INTO `prov_localidades` VALUES (1907, 22, 'Chovet');
INSERT INTO `prov_localidades` VALUES (1908, 22, 'Christophersen');
INSERT INTO `prov_localidades` VALUES (1909, 22, 'Classon');
INSERT INTO `prov_localidades` VALUES (1910, 22, 'Cnel. Arnold');
INSERT INTO `prov_localidades` VALUES (1911, 22, 'Cnel. Bogado');
INSERT INTO `prov_localidades` VALUES (1912, 22, 'Cnel. Dominguez');
INSERT INTO `prov_localidades` VALUES (1913, 22, 'Cnel. Fraga');
INSERT INTO `prov_localidades` VALUES (1914, 22, 'Col. Aldao');
INSERT INTO `prov_localidades` VALUES (1915, 22, 'Col. Ana');
INSERT INTO `prov_localidades` VALUES (1916, 22, 'Col. Belgrano');
INSERT INTO `prov_localidades` VALUES (1917, 22, 'Col. Bicha');
INSERT INTO `prov_localidades` VALUES (1918, 22, 'Col. Bigand');
INSERT INTO `prov_localidades` VALUES (1919, 22, 'Col. Bossi');
INSERT INTO `prov_localidades` VALUES (1920, 22, 'Col. Cavour');
INSERT INTO `prov_localidades` VALUES (1921, 22, 'Col. Cello');
INSERT INTO `prov_localidades` VALUES (1922, 22, 'Col. Dolores');
INSERT INTO `prov_localidades` VALUES (1923, 22, 'Col. Dos Rosas');
INSERT INTO `prov_localidades` VALUES (1924, 22, 'Col. DurÃ¡n');
INSERT INTO `prov_localidades` VALUES (1925, 22, 'Col. Iturraspe');
INSERT INTO `prov_localidades` VALUES (1926, 22, 'Col. Margarita');
INSERT INTO `prov_localidades` VALUES (1927, 22, 'Col. Mascias');
INSERT INTO `prov_localidades` VALUES (1928, 22, 'Col. Raquel');
INSERT INTO `prov_localidades` VALUES (1929, 22, 'Col. Rosa');
INSERT INTO `prov_localidades` VALUES (1930, 22, 'Col. San JosÃ©');
INSERT INTO `prov_localidades` VALUES (1931, 22, 'Constanza');
INSERT INTO `prov_localidades` VALUES (1932, 22, 'Coronda');
INSERT INTO `prov_localidades` VALUES (1933, 22, 'Correa');
INSERT INTO `prov_localidades` VALUES (1934, 22, 'Crispi');
INSERT INTO `prov_localidades` VALUES (1935, 22, 'CululÃº');
INSERT INTO `prov_localidades` VALUES (1936, 22, 'Curupayti');
INSERT INTO `prov_localidades` VALUES (1937, 22, 'Desvio ArijÃ³n');
INSERT INTO `prov_localidades` VALUES (1938, 22, 'Diaz');
INSERT INTO `prov_localidades` VALUES (1939, 22, 'Diego de Alvear');
INSERT INTO `prov_localidades` VALUES (1940, 22, 'Egusquiza');
INSERT INTO `prov_localidades` VALUES (1941, 22, 'El ArazÃ¡');
INSERT INTO `prov_localidades` VALUES (1942, 22, 'El RabÃ³n');
INSERT INTO `prov_localidades` VALUES (1943, 22, 'El Sombrerito');
INSERT INTO `prov_localidades` VALUES (1944, 22, 'El TrÃ©bol');
INSERT INTO `prov_localidades` VALUES (1945, 22, 'Elisa');
INSERT INTO `prov_localidades` VALUES (1946, 22, 'Elortondo');
INSERT INTO `prov_localidades` VALUES (1947, 22, 'Emilia');
INSERT INTO `prov_localidades` VALUES (1948, 22, 'Empalme San Carlos');
INSERT INTO `prov_localidades` VALUES (1949, 22, 'Empalme Villa Constitucion');
INSERT INTO `prov_localidades` VALUES (1950, 22, 'Esmeralda');
INSERT INTO `prov_localidades` VALUES (1951, 22, 'Esperanza');
INSERT INTO `prov_localidades` VALUES (1952, 22, 'EstaciÃ³n Alvear');
INSERT INTO `prov_localidades` VALUES (1953, 22, 'Estacion Clucellas');
INSERT INTO `prov_localidades` VALUES (1954, 22, 'Esteban Rams');
INSERT INTO `prov_localidades` VALUES (1955, 22, 'Esther');
INSERT INTO `prov_localidades` VALUES (1956, 22, 'Esustolia');
INSERT INTO `prov_localidades` VALUES (1957, 22, 'Eusebia');
INSERT INTO `prov_localidades` VALUES (1958, 22, 'Felicia');
INSERT INTO `prov_localidades` VALUES (1959, 22, 'Fidela');
INSERT INTO `prov_localidades` VALUES (1960, 22, 'Fighiera');
INSERT INTO `prov_localidades` VALUES (1961, 22, 'Firmat');
INSERT INTO `prov_localidades` VALUES (1962, 22, 'Florencia');
INSERT INTO `prov_localidades` VALUES (1963, 22, 'FortÃ­n Olmos');
INSERT INTO `prov_localidades` VALUES (1964, 22, 'Franck');
INSERT INTO `prov_localidades` VALUES (1965, 22, 'Fray Luis BeltrÃ¡n');
INSERT INTO `prov_localidades` VALUES (1966, 22, 'Frontera');
INSERT INTO `prov_localidades` VALUES (1967, 22, 'Fuentes');
INSERT INTO `prov_localidades` VALUES (1968, 22, 'Funes');
INSERT INTO `prov_localidades` VALUES (1969, 22, 'Gaboto');
INSERT INTO `prov_localidades` VALUES (1970, 22, 'Galisteo');
INSERT INTO `prov_localidades` VALUES (1971, 22, 'GÃ¡lvez');
INSERT INTO `prov_localidades` VALUES (1972, 22, 'Garabalto');
INSERT INTO `prov_localidades` VALUES (1973, 22, 'Garibaldi');
INSERT INTO `prov_localidades` VALUES (1974, 22, 'Gato Colorado');
INSERT INTO `prov_localidades` VALUES (1975, 22, 'Gdor. Crespo');
INSERT INTO `prov_localidades` VALUES (1976, 22, 'Gessler');
INSERT INTO `prov_localidades` VALUES (1977, 22, 'Godoy');
INSERT INTO `prov_localidades` VALUES (1978, 22, 'Golondrina');
INSERT INTO `prov_localidades` VALUES (1979, 22, 'Gral. Gelly');
INSERT INTO `prov_localidades` VALUES (1980, 22, 'Gral. Lagos');
INSERT INTO `prov_localidades` VALUES (1981, 22, 'Granadero Baigorria');
INSERT INTO `prov_localidades` VALUES (1982, 22, 'Gregoria Perez De Denis');
INSERT INTO `prov_localidades` VALUES (1983, 22, 'Grutly');
INSERT INTO `prov_localidades` VALUES (1984, 22, 'Guadalupe N.');
INSERT INTO `prov_localidades` VALUES (1985, 22, 'GÃ¶deken');
INSERT INTO `prov_localidades` VALUES (1986, 22, 'Helvecia');
INSERT INTO `prov_localidades` VALUES (1987, 22, 'Hersilia');
INSERT INTO `prov_localidades` VALUES (1988, 22, 'HipatÃ­a');
INSERT INTO `prov_localidades` VALUES (1989, 22, 'Huanqueros');
INSERT INTO `prov_localidades` VALUES (1990, 22, 'Hugentobler');
INSERT INTO `prov_localidades` VALUES (1991, 22, 'Hughes');
INSERT INTO `prov_localidades` VALUES (1992, 22, 'Humberto 1Âº');
INSERT INTO `prov_localidades` VALUES (1993, 22, 'Humboldt');
INSERT INTO `prov_localidades` VALUES (1994, 22, 'Ibarlucea');
INSERT INTO `prov_localidades` VALUES (1995, 22, 'Ing. Chanourdie');
INSERT INTO `prov_localidades` VALUES (1996, 22, 'Intiyaco');
INSERT INTO `prov_localidades` VALUES (1997, 22, 'ItuzaingÃ³');
INSERT INTO `prov_localidades` VALUES (1998, 22, 'Jacinto L. ArÃ¡uz');
INSERT INTO `prov_localidades` VALUES (1999, 22, 'Josefina');
INSERT INTO `prov_localidades` VALUES (2000, 22, 'Juan B. Molina');
INSERT INTO `prov_localidades` VALUES (2001, 22, 'Juan de Garay');
INSERT INTO `prov_localidades` VALUES (2002, 22, 'Juncal');
INSERT INTO `prov_localidades` VALUES (2003, 22, 'La Brava');
INSERT INTO `prov_localidades` VALUES (2004, 22, 'La Cabral');
INSERT INTO `prov_localidades` VALUES (2005, 22, 'La Camila');
INSERT INTO `prov_localidades` VALUES (2006, 22, 'La Chispa');
INSERT INTO `prov_localidades` VALUES (2007, 22, 'La Clara');
INSERT INTO `prov_localidades` VALUES (2008, 22, 'La Criolla');
INSERT INTO `prov_localidades` VALUES (2009, 22, 'La Gallareta');
INSERT INTO `prov_localidades` VALUES (2010, 22, 'La Lucila');
INSERT INTO `prov_localidades` VALUES (2011, 22, 'La Pelada');
INSERT INTO `prov_localidades` VALUES (2012, 22, 'La Penca');
INSERT INTO `prov_localidades` VALUES (2013, 22, 'La Rubia');
INSERT INTO `prov_localidades` VALUES (2014, 22, 'La Sarita');
INSERT INTO `prov_localidades` VALUES (2015, 22, 'La Vanguardia');
INSERT INTO `prov_localidades` VALUES (2016, 22, 'Labordeboy');
INSERT INTO `prov_localidades` VALUES (2017, 22, 'Laguna Paiva');
INSERT INTO `prov_localidades` VALUES (2018, 22, 'Landeta');
INSERT INTO `prov_localidades` VALUES (2019, 22, 'Lanteri');
INSERT INTO `prov_localidades` VALUES (2020, 22, 'Larrechea');
INSERT INTO `prov_localidades` VALUES (2021, 22, 'Las Avispas');
INSERT INTO `prov_localidades` VALUES (2022, 22, 'Las Bandurrias');
INSERT INTO `prov_localidades` VALUES (2023, 22, 'Las Garzas');
INSERT INTO `prov_localidades` VALUES (2024, 22, 'Las Palmeras');
INSERT INTO `prov_localidades` VALUES (2025, 22, 'Las Parejas');
INSERT INTO `prov_localidades` VALUES (2026, 22, 'Las Petacas');
INSERT INTO `prov_localidades` VALUES (2027, 22, 'Las Rosas');
INSERT INTO `prov_localidades` VALUES (2028, 22, 'Las Toscas');
INSERT INTO `prov_localidades` VALUES (2029, 22, 'Las Tunas');
INSERT INTO `prov_localidades` VALUES (2030, 22, 'Lazzarino');
INSERT INTO `prov_localidades` VALUES (2031, 22, 'Lehmann');
INSERT INTO `prov_localidades` VALUES (2032, 22, 'Llambi Campbell');
INSERT INTO `prov_localidades` VALUES (2033, 22, 'LogroÃ±o');
INSERT INTO `prov_localidades` VALUES (2034, 22, 'Loma Alta');
INSERT INTO `prov_localidades` VALUES (2035, 22, 'LÃ³pez');
INSERT INTO `prov_localidades` VALUES (2036, 22, 'Los Amores');
INSERT INTO `prov_localidades` VALUES (2037, 22, 'Los Cardos');
INSERT INTO `prov_localidades` VALUES (2038, 22, 'Los Laureles');
INSERT INTO `prov_localidades` VALUES (2039, 22, 'Los Molinos');
INSERT INTO `prov_localidades` VALUES (2040, 22, 'Los Quirquinchos');
INSERT INTO `prov_localidades` VALUES (2041, 22, 'Lucio V. Lopez');
INSERT INTO `prov_localidades` VALUES (2042, 22, 'Luis Palacios');
INSERT INTO `prov_localidades` VALUES (2043, 22, 'Ma. Juana');
INSERT INTO `prov_localidades` VALUES (2044, 22, 'Ma. Luisa');
INSERT INTO `prov_localidades` VALUES (2045, 22, 'Ma. Susana');
INSERT INTO `prov_localidades` VALUES (2046, 22, 'Ma. Teresa');
INSERT INTO `prov_localidades` VALUES (2047, 22, 'Maciel');
INSERT INTO `prov_localidades` VALUES (2048, 22, 'Maggiolo');
INSERT INTO `prov_localidades` VALUES (2049, 22, 'Malabrigo');
INSERT INTO `prov_localidades` VALUES (2050, 22, 'Marcelino Escalada');
INSERT INTO `prov_localidades` VALUES (2051, 22, 'Margarita');
INSERT INTO `prov_localidades` VALUES (2052, 22, 'Matilde');
INSERT INTO `prov_localidades` VALUES (2053, 22, 'MauÃ¡');
INSERT INTO `prov_localidades` VALUES (2054, 22, 'MÃ¡ximo Paz');
INSERT INTO `prov_localidades` VALUES (2055, 22, 'MelincuÃ©');
INSERT INTO `prov_localidades` VALUES (2056, 22, 'Miguel Torres');
INSERT INTO `prov_localidades` VALUES (2057, 22, 'MoisÃ©s Ville');
INSERT INTO `prov_localidades` VALUES (2058, 22, 'Monigotes');
INSERT INTO `prov_localidades` VALUES (2059, 22, 'Monje');
INSERT INTO `prov_localidades` VALUES (2060, 22, 'Monte Obscuridad');
INSERT INTO `prov_localidades` VALUES (2061, 22, 'Monte Vera');
INSERT INTO `prov_localidades` VALUES (2062, 22, 'Montefiore');
INSERT INTO `prov_localidades` VALUES (2063, 22, 'Montes de Oca');
INSERT INTO `prov_localidades` VALUES (2064, 22, 'Murphy');
INSERT INTO `prov_localidades` VALUES (2065, 22, 'Ã‘anducita');
INSERT INTO `prov_localidades` VALUES (2066, 22, 'NarÃ©');
INSERT INTO `prov_localidades` VALUES (2067, 22, 'Nelson');
INSERT INTO `prov_localidades` VALUES (2068, 22, 'Nicanor E. Molinas');
INSERT INTO `prov_localidades` VALUES (2069, 22, 'Nuevo Torino');
INSERT INTO `prov_localidades` VALUES (2070, 22, 'Oliveros');
INSERT INTO `prov_localidades` VALUES (2071, 22, 'Palacios');
INSERT INTO `prov_localidades` VALUES (2072, 22, 'PavÃ³n');
INSERT INTO `prov_localidades` VALUES (2073, 22, 'PavÃ³n Arriba');
INSERT INTO `prov_localidades` VALUES (2074, 22, 'Pedro GÃ³mez Cello');
INSERT INTO `prov_localidades` VALUES (2075, 22, 'PÃ©rez');
INSERT INTO `prov_localidades` VALUES (2076, 22, 'Peyrano');
INSERT INTO `prov_localidades` VALUES (2077, 22, 'Piamonte');
INSERT INTO `prov_localidades` VALUES (2078, 22, 'Pilar');
INSERT INTO `prov_localidades` VALUES (2079, 22, 'PiÃ±ero');
INSERT INTO `prov_localidades` VALUES (2080, 22, 'Plaza Clucellas');
INSERT INTO `prov_localidades` VALUES (2081, 22, 'Portugalete');
INSERT INTO `prov_localidades` VALUES (2082, 22, 'Pozo Borrado');
INSERT INTO `prov_localidades` VALUES (2083, 22, 'Progreso');
INSERT INTO `prov_localidades` VALUES (2084, 22, 'Providencia');
INSERT INTO `prov_localidades` VALUES (2085, 22, 'Pte. Roca');
INSERT INTO `prov_localidades` VALUES (2086, 22, 'Pueblo Andino');
INSERT INTO `prov_localidades` VALUES (2087, 22, 'Pueblo Esther');
INSERT INTO `prov_localidades` VALUES (2088, 22, 'Pueblo Gral. San MartÃ­n');
INSERT INTO `prov_localidades` VALUES (2089, 22, 'Pueblo Irigoyen');
INSERT INTO `prov_localidades` VALUES (2090, 22, 'Pueblo Marini');
INSERT INTO `prov_localidades` VALUES (2091, 22, 'Pueblo MuÃ±oz');
INSERT INTO `prov_localidades` VALUES (2092, 22, 'Pueblo Uranga');
INSERT INTO `prov_localidades` VALUES (2093, 22, 'Pujato');
INSERT INTO `prov_localidades` VALUES (2094, 22, 'Pujato N.');
INSERT INTO `prov_localidades` VALUES (2095, 22, 'Rafaela');
INSERT INTO `prov_localidades` VALUES (2096, 22, 'RamayÃ³n');
INSERT INTO `prov_localidades` VALUES (2097, 22, 'Ramona');
INSERT INTO `prov_localidades` VALUES (2098, 22, 'Reconquista');
INSERT INTO `prov_localidades` VALUES (2099, 22, 'Recreo');
INSERT INTO `prov_localidades` VALUES (2100, 22, 'Ricardone');
INSERT INTO `prov_localidades` VALUES (2101, 22, 'Rivadavia');
INSERT INTO `prov_localidades` VALUES (2102, 22, 'RoldÃ¡n');
INSERT INTO `prov_localidades` VALUES (2103, 22, 'Romang');
INSERT INTO `prov_localidades` VALUES (2104, 22, 'Rosario');
INSERT INTO `prov_localidades` VALUES (2105, 22, 'Rueda');
INSERT INTO `prov_localidades` VALUES (2106, 22, 'Rufino');
INSERT INTO `prov_localidades` VALUES (2107, 22, 'Sa Pereira');
INSERT INTO `prov_localidades` VALUES (2108, 22, 'Saguier');
INSERT INTO `prov_localidades` VALUES (2109, 22, 'Saladero M. Cabal');
INSERT INTO `prov_localidades` VALUES (2110, 22, 'Salto Grande');
INSERT INTO `prov_localidades` VALUES (2111, 22, 'San AgustÃ­n');
INSERT INTO `prov_localidades` VALUES (2112, 22, 'San Antonio de Obligado');
INSERT INTO `prov_localidades` VALUES (2113, 22, 'San Bernardo (N.J.)');
INSERT INTO `prov_localidades` VALUES (2114, 22, 'San Bernardo (S.J.)');
INSERT INTO `prov_localidades` VALUES (2115, 22, 'San Carlos Centro');
INSERT INTO `prov_localidades` VALUES (2116, 22, 'San Carlos N.');
INSERT INTO `prov_localidades` VALUES (2117, 22, 'San Carlos S.');
INSERT INTO `prov_localidades` VALUES (2118, 22, 'San CristÃ³bal');
INSERT INTO `prov_localidades` VALUES (2119, 22, 'San Eduardo');
INSERT INTO `prov_localidades` VALUES (2120, 22, 'San Eugenio');
INSERT INTO `prov_localidades` VALUES (2121, 22, 'San FabiÃ¡n');
INSERT INTO `prov_localidades` VALUES (2122, 22, 'San Fco. de Santa FÃ©');
INSERT INTO `prov_localidades` VALUES (2123, 22, 'San Genaro');
INSERT INTO `prov_localidades` VALUES (2124, 22, 'San Genaro N.');
INSERT INTO `prov_localidades` VALUES (2125, 22, 'San Gregorio');
INSERT INTO `prov_localidades` VALUES (2126, 22, 'San Guillermo');
INSERT INTO `prov_localidades` VALUES (2127, 22, 'San Javier');
INSERT INTO `prov_localidades` VALUES (2128, 22, 'San JerÃ³nimo del Sauce');
INSERT INTO `prov_localidades` VALUES (2129, 22, 'San JerÃ³nimo N.');
INSERT INTO `prov_localidades` VALUES (2130, 22, 'San JerÃ³nimo S.');
INSERT INTO `prov_localidades` VALUES (2131, 22, 'San Jorge');
INSERT INTO `prov_localidades` VALUES (2132, 22, 'San JosÃ© de La Esquina');
INSERT INTO `prov_localidades` VALUES (2133, 22, 'San JosÃ© del RincÃ³n');
INSERT INTO `prov_localidades` VALUES (2134, 22, 'San Justo');
INSERT INTO `prov_localidades` VALUES (2135, 22, 'San Lorenzo');
INSERT INTO `prov_localidades` VALUES (2136, 22, 'San Mariano');
INSERT INTO `prov_localidades` VALUES (2137, 22, 'San MartÃ­n de Las Escobas');
INSERT INTO `prov_localidades` VALUES (2138, 22, 'San MartÃ­n N.');
INSERT INTO `prov_localidades` VALUES (2139, 22, 'San Vicente');
INSERT INTO `prov_localidades` VALUES (2140, 22, 'Sancti Spititu');
INSERT INTO `prov_localidades` VALUES (2141, 22, 'Sanford');
INSERT INTO `prov_localidades` VALUES (2142, 22, 'Santo Domingo');
INSERT INTO `prov_localidades` VALUES (2143, 22, 'Santo TomÃ©');
INSERT INTO `prov_localidades` VALUES (2144, 22, 'Santurce');
INSERT INTO `prov_localidades` VALUES (2145, 22, 'Sargento Cabral');
INSERT INTO `prov_localidades` VALUES (2146, 22, 'Sarmiento');
INSERT INTO `prov_localidades` VALUES (2147, 22, 'Sastre');
INSERT INTO `prov_localidades` VALUES (2148, 22, 'Sauce Viejo');
INSERT INTO `prov_localidades` VALUES (2149, 22, 'Serodino');
INSERT INTO `prov_localidades` VALUES (2150, 22, 'Silva');
INSERT INTO `prov_localidades` VALUES (2151, 22, 'Soldini');
INSERT INTO `prov_localidades` VALUES (2152, 22, 'Soledad');
INSERT INTO `prov_localidades` VALUES (2153, 22, 'Soutomayor');
INSERT INTO `prov_localidades` VALUES (2154, 22, 'Sta. Clara de Buena Vista');
INSERT INTO `prov_localidades` VALUES (2155, 22, 'Sta. Clara de Saguier');
INSERT INTO `prov_localidades` VALUES (2156, 22, 'Sta. Isabel');
INSERT INTO `prov_localidades` VALUES (2157, 22, 'Sta. Margarita');
INSERT INTO `prov_localidades` VALUES (2158, 22, 'Sta. Maria Centro');
INSERT INTO `prov_localidades` VALUES (2159, 22, 'Sta. MarÃ­a N.');
INSERT INTO `prov_localidades` VALUES (2160, 22, 'Sta. Rosa');
INSERT INTO `prov_localidades` VALUES (2161, 22, 'Sta. Teresa');
INSERT INTO `prov_localidades` VALUES (2162, 22, 'Suardi');
INSERT INTO `prov_localidades` VALUES (2163, 22, 'Sunchales');
INSERT INTO `prov_localidades` VALUES (2164, 22, 'Susana');
INSERT INTO `prov_localidades` VALUES (2165, 22, 'TacuarendÃ­');
INSERT INTO `prov_localidades` VALUES (2166, 22, 'Tacural');
INSERT INTO `prov_localidades` VALUES (2167, 22, 'Tartagal');
INSERT INTO `prov_localidades` VALUES (2168, 22, 'Teodelina');
INSERT INTO `prov_localidades` VALUES (2169, 22, 'Theobald');
INSERT INTO `prov_localidades` VALUES (2170, 22, 'TimbÃºes');
INSERT INTO `prov_localidades` VALUES (2171, 22, 'Toba');
INSERT INTO `prov_localidades` VALUES (2172, 22, 'Tortugas');
INSERT INTO `prov_localidades` VALUES (2173, 22, 'Tostado');
INSERT INTO `prov_localidades` VALUES (2174, 22, 'Totoras');
INSERT INTO `prov_localidades` VALUES (2175, 22, 'Traill');
INSERT INTO `prov_localidades` VALUES (2176, 22, 'Venado Tuerto');
INSERT INTO `prov_localidades` VALUES (2177, 22, 'Vera');
INSERT INTO `prov_localidades` VALUES (2178, 22, 'Vera y Pintado');
INSERT INTO `prov_localidades` VALUES (2179, 22, 'Videla');
INSERT INTO `prov_localidades` VALUES (2180, 22, 'Vila');
INSERT INTO `prov_localidades` VALUES (2181, 22, 'Villa Amelia');
INSERT INTO `prov_localidades` VALUES (2182, 22, 'Villa Ana');
INSERT INTO `prov_localidades` VALUES (2183, 22, 'Villa CaÃ±as');
INSERT INTO `prov_localidades` VALUES (2184, 22, 'Villa ConstituciÃ³n');
INSERT INTO `prov_localidades` VALUES (2185, 22, 'Villa EloÃ­sa');
INSERT INTO `prov_localidades` VALUES (2186, 22, 'Villa Gdor. GÃ¡lvez');
INSERT INTO `prov_localidades` VALUES (2187, 22, 'Villa Guillermina');
INSERT INTO `prov_localidades` VALUES (2188, 22, 'Villa Minetti');
INSERT INTO `prov_localidades` VALUES (2189, 22, 'Villa Mugueta');
INSERT INTO `prov_localidades` VALUES (2190, 22, 'Villa Ocampo');
INSERT INTO `prov_localidades` VALUES (2191, 22, 'Villa San JosÃ©');
INSERT INTO `prov_localidades` VALUES (2192, 22, 'Villa Saralegui');
INSERT INTO `prov_localidades` VALUES (2193, 22, 'Villa Trinidad');
INSERT INTO `prov_localidades` VALUES (2194, 22, 'Villada');
INSERT INTO `prov_localidades` VALUES (2195, 22, 'Virginia');
INSERT INTO `prov_localidades` VALUES (2196, 22, 'Wheelwright');
INSERT INTO `prov_localidades` VALUES (2197, 22, 'Zavalla');
INSERT INTO `prov_localidades` VALUES (2198, 22, 'ZenÃ³n Pereira');
INSERT INTO `prov_localidades` VALUES (2199, 23, 'AÃ±atuya');
INSERT INTO `prov_localidades` VALUES (2200, 23, 'Ãrraga');
INSERT INTO `prov_localidades` VALUES (2201, 23, 'Bandera');
INSERT INTO `prov_localidades` VALUES (2202, 23, 'Bandera Bajada');
INSERT INTO `prov_localidades` VALUES (2203, 23, 'BeltrÃ¡n');
INSERT INTO `prov_localidades` VALUES (2204, 23, 'Brea Pozo');
INSERT INTO `prov_localidades` VALUES (2205, 23, 'Campo Gallo');
INSERT INTO `prov_localidades` VALUES (2206, 23, 'Capital');
INSERT INTO `prov_localidades` VALUES (2207, 23, 'Chilca Juliana');
INSERT INTO `prov_localidades` VALUES (2208, 23, 'Choya');
INSERT INTO `prov_localidades` VALUES (2209, 23, 'Clodomira');
INSERT INTO `prov_localidades` VALUES (2210, 23, 'Col. Alpina');
INSERT INTO `prov_localidades` VALUES (2211, 23, 'Col. Dora');
INSERT INTO `prov_localidades` VALUES (2212, 23, 'Col. El Simbolar Robles');
INSERT INTO `prov_localidades` VALUES (2213, 23, 'El Bobadal');
INSERT INTO `prov_localidades` VALUES (2214, 23, 'El Charco');
INSERT INTO `prov_localidades` VALUES (2215, 23, 'El MojÃ³n');
INSERT INTO `prov_localidades` VALUES (2216, 23, 'EstaciÃ³n Atamisqui');
INSERT INTO `prov_localidades` VALUES (2217, 23, 'EstaciÃ³n Simbolar');
INSERT INTO `prov_localidades` VALUES (2218, 23, 'FernÃ¡ndez');
INSERT INTO `prov_localidades` VALUES (2219, 23, 'FortÃ­n Inca');
INSERT INTO `prov_localidades` VALUES (2220, 23, 'FrÃ­as');
INSERT INTO `prov_localidades` VALUES (2221, 23, 'Garza');
INSERT INTO `prov_localidades` VALUES (2222, 23, 'Gramilla');
INSERT INTO `prov_localidades` VALUES (2223, 23, 'Guardia Escolta');
INSERT INTO `prov_localidades` VALUES (2224, 23, 'Herrera');
INSERT INTO `prov_localidades` VALUES (2225, 23, 'IcaÃ±o');
INSERT INTO `prov_localidades` VALUES (2226, 23, 'Ing. Forres');
INSERT INTO `prov_localidades` VALUES (2227, 23, 'La Banda');
INSERT INTO `prov_localidades` VALUES (2228, 23, 'La CaÃ±ada');
INSERT INTO `prov_localidades` VALUES (2229, 23, 'Laprida');
INSERT INTO `prov_localidades` VALUES (2230, 23, 'Lavalle');
INSERT INTO `prov_localidades` VALUES (2231, 23, 'Loreto');
INSERT INTO `prov_localidades` VALUES (2232, 23, 'Los JurÃ­es');
INSERT INTO `prov_localidades` VALUES (2233, 23, 'Los NÃºÃ±ez');
INSERT INTO `prov_localidades` VALUES (2234, 23, 'Los Pirpintos');
INSERT INTO `prov_localidades` VALUES (2235, 23, 'Los Quiroga');
INSERT INTO `prov_localidades` VALUES (2236, 23, 'Los Telares');
INSERT INTO `prov_localidades` VALUES (2237, 23, 'Lugones');
INSERT INTO `prov_localidades` VALUES (2238, 23, 'MalbrÃ¡n');
INSERT INTO `prov_localidades` VALUES (2239, 23, 'Matara');
INSERT INTO `prov_localidades` VALUES (2240, 23, 'MedellÃ­n');
INSERT INTO `prov_localidades` VALUES (2241, 23, 'Monte Quemado');
INSERT INTO `prov_localidades` VALUES (2242, 23, 'Nueva Esperanza');
INSERT INTO `prov_localidades` VALUES (2243, 23, 'Nueva Francia');
INSERT INTO `prov_localidades` VALUES (2244, 23, 'Palo Negro');
INSERT INTO `prov_localidades` VALUES (2245, 23, 'Pampa de Los Guanacos');
INSERT INTO `prov_localidades` VALUES (2246, 23, 'Pinto');
INSERT INTO `prov_localidades` VALUES (2247, 23, 'Pozo Hondo');
INSERT INTO `prov_localidades` VALUES (2248, 23, 'QuimilÃ­');
INSERT INTO `prov_localidades` VALUES (2249, 23, 'Real Sayana');
INSERT INTO `prov_localidades` VALUES (2250, 23, 'Sachayoj');
INSERT INTO `prov_localidades` VALUES (2251, 23, 'San Pedro de GuasayÃ¡n');
INSERT INTO `prov_localidades` VALUES (2252, 23, 'Selva');
INSERT INTO `prov_localidades` VALUES (2253, 23, 'Sol de Julio');
INSERT INTO `prov_localidades` VALUES (2254, 23, 'Sumampa');
INSERT INTO `prov_localidades` VALUES (2255, 23, 'Suncho Corral');
INSERT INTO `prov_localidades` VALUES (2256, 23, 'Taboada');
INSERT INTO `prov_localidades` VALUES (2257, 23, 'Tapso');
INSERT INTO `prov_localidades` VALUES (2258, 23, 'Termas de Rio Hondo');
INSERT INTO `prov_localidades` VALUES (2259, 23, 'Tintina');
INSERT INTO `prov_localidades` VALUES (2260, 23, 'Tomas Young');
INSERT INTO `prov_localidades` VALUES (2261, 23, 'Vilelas');
INSERT INTO `prov_localidades` VALUES (2262, 23, 'Villa Atamisqui');
INSERT INTO `prov_localidades` VALUES (2263, 23, 'Villa La Punta');
INSERT INTO `prov_localidades` VALUES (2264, 23, 'Villa Ojo de Agua');
INSERT INTO `prov_localidades` VALUES (2265, 23, 'Villa RÃ­o Hondo');
INSERT INTO `prov_localidades` VALUES (2266, 23, 'Villa Salavina');
INSERT INTO `prov_localidades` VALUES (2267, 23, 'Villa UniÃ³n');
INSERT INTO `prov_localidades` VALUES (2268, 23, 'Vilmer');
INSERT INTO `prov_localidades` VALUES (2269, 23, 'Weisburd');
INSERT INTO `prov_localidades` VALUES (2270, 24, 'RÃ­o Grande');
INSERT INTO `prov_localidades` VALUES (2271, 24, 'Tolhuin');
INSERT INTO `prov_localidades` VALUES (2272, 24, 'Ushuaia');
INSERT INTO `prov_localidades` VALUES (2273, 25, 'Acheral');
INSERT INTO `prov_localidades` VALUES (2274, 25, 'Agua Dulce');
INSERT INTO `prov_localidades` VALUES (2275, 25, 'Aguilares');
INSERT INTO `prov_localidades` VALUES (2276, 25, 'Alderetes');
INSERT INTO `prov_localidades` VALUES (2277, 25, 'Alpachiri');
INSERT INTO `prov_localidades` VALUES (2278, 25, 'Alto Verde');
INSERT INTO `prov_localidades` VALUES (2279, 25, 'Amaicha del Valle');
INSERT INTO `prov_localidades` VALUES (2280, 25, 'Amberes');
INSERT INTO `prov_localidades` VALUES (2281, 25, 'Ancajuli');
INSERT INTO `prov_localidades` VALUES (2282, 25, 'Arcadia');
INSERT INTO `prov_localidades` VALUES (2283, 25, 'Atahona');
INSERT INTO `prov_localidades` VALUES (2284, 25, 'Banda del RÃ­o Sali');
INSERT INTO `prov_localidades` VALUES (2285, 25, 'Bella Vista');
INSERT INTO `prov_localidades` VALUES (2286, 25, 'Buena Vista');
INSERT INTO `prov_localidades` VALUES (2287, 25, 'BurruyacÃº');
INSERT INTO `prov_localidades` VALUES (2288, 25, 'CapitÃ¡n CÃ¡ceres');
INSERT INTO `prov_localidades` VALUES (2289, 25, 'Cevil Redondo');
INSERT INTO `prov_localidades` VALUES (2290, 25, 'Choromoro');
INSERT INTO `prov_localidades` VALUES (2291, 25, 'Ciudacita');
INSERT INTO `prov_localidades` VALUES (2292, 25, 'Colalao del Valle');
INSERT INTO `prov_localidades` VALUES (2293, 25, 'Colombres');
INSERT INTO `prov_localidades` VALUES (2294, 25, 'ConcepciÃ³n');
INSERT INTO `prov_localidades` VALUES (2295, 25, 'DelfÃ­n Gallo');
INSERT INTO `prov_localidades` VALUES (2296, 25, 'El Bracho');
INSERT INTO `prov_localidades` VALUES (2297, 25, 'El Cadillal');
INSERT INTO `prov_localidades` VALUES (2298, 25, 'El Cercado');
INSERT INTO `prov_localidades` VALUES (2299, 25, 'El ChaÃ±ar');
INSERT INTO `prov_localidades` VALUES (2300, 25, 'El Manantial');
INSERT INTO `prov_localidades` VALUES (2301, 25, 'El MojÃ³n');
INSERT INTO `prov_localidades` VALUES (2302, 25, 'El Mollar');
INSERT INTO `prov_localidades` VALUES (2303, 25, 'El Naranjito');
INSERT INTO `prov_localidades` VALUES (2304, 25, 'El Naranjo');
INSERT INTO `prov_localidades` VALUES (2305, 25, 'El Polear');
INSERT INTO `prov_localidades` VALUES (2306, 25, 'El Puestito');
INSERT INTO `prov_localidades` VALUES (2307, 25, 'El Sacrificio');
INSERT INTO `prov_localidades` VALUES (2308, 25, 'El TimbÃ³');
INSERT INTO `prov_localidades` VALUES (2309, 25, 'Escaba');
INSERT INTO `prov_localidades` VALUES (2310, 25, 'Esquina');
INSERT INTO `prov_localidades` VALUES (2311, 25, 'EstaciÃ³n ArÃ¡oz');
INSERT INTO `prov_localidades` VALUES (2312, 25, 'FamaillÃ¡');
INSERT INTO `prov_localidades` VALUES (2313, 25, 'Gastone');
INSERT INTO `prov_localidades` VALUES (2314, 25, 'Gdor. Garmendia');
INSERT INTO `prov_localidades` VALUES (2315, 25, 'Gdor. Piedrabuena');
INSERT INTO `prov_localidades` VALUES (2316, 25, 'Graneros');
INSERT INTO `prov_localidades` VALUES (2317, 25, 'Huasa Pampa');
INSERT INTO `prov_localidades` VALUES (2318, 25, 'J. B. Alberdi');
INSERT INTO `prov_localidades` VALUES (2319, 25, 'La Cocha');
INSERT INTO `prov_localidades` VALUES (2320, 25, 'La Esperanza');
INSERT INTO `prov_localidades` VALUES (2321, 25, 'La Florida');
INSERT INTO `prov_localidades` VALUES (2322, 25, 'La Ramada');
INSERT INTO `prov_localidades` VALUES (2323, 25, 'La Trinidad');
INSERT INTO `prov_localidades` VALUES (2324, 25, 'Lamadrid');
INSERT INTO `prov_localidades` VALUES (2325, 25, 'Las Cejas');
INSERT INTO `prov_localidades` VALUES (2326, 25, 'Las Talas');
INSERT INTO `prov_localidades` VALUES (2327, 25, 'Las Talitas');
INSERT INTO `prov_localidades` VALUES (2328, 25, 'Los Bulacio');
INSERT INTO `prov_localidades` VALUES (2329, 25, 'Los GÃ³mez');
INSERT INTO `prov_localidades` VALUES (2330, 25, 'Los Nogales');
INSERT INTO `prov_localidades` VALUES (2331, 25, 'Los Pereyra');
INSERT INTO `prov_localidades` VALUES (2332, 25, 'Los PÃ©rez');
INSERT INTO `prov_localidades` VALUES (2333, 25, 'Los Puestos');
INSERT INTO `prov_localidades` VALUES (2334, 25, 'Los Ralos');
INSERT INTO `prov_localidades` VALUES (2335, 25, 'Los Sarmientos');
INSERT INTO `prov_localidades` VALUES (2336, 25, 'Los Sosa');
INSERT INTO `prov_localidades` VALUES (2337, 25, 'Lules');
INSERT INTO `prov_localidades` VALUES (2338, 25, 'M. GarcÃ­a FernÃ¡ndez');
INSERT INTO `prov_localidades` VALUES (2339, 25, 'Manuela Pedraza');
INSERT INTO `prov_localidades` VALUES (2340, 25, 'Medinas');
INSERT INTO `prov_localidades` VALUES (2341, 25, 'Monte Bello');
INSERT INTO `prov_localidades` VALUES (2342, 25, 'Monteagudo');
INSERT INTO `prov_localidades` VALUES (2343, 25, 'Monteros');
INSERT INTO `prov_localidades` VALUES (2344, 25, 'Padre Monti');
INSERT INTO `prov_localidades` VALUES (2345, 25, 'Pampa Mayo');
INSERT INTO `prov_localidades` VALUES (2346, 25, 'Quilmes');
INSERT INTO `prov_localidades` VALUES (2347, 25, 'Raco');
INSERT INTO `prov_localidades` VALUES (2348, 25, 'Ranchillos');
INSERT INTO `prov_localidades` VALUES (2349, 25, 'RÃ­o Chico');
INSERT INTO `prov_localidades` VALUES (2350, 25, 'RÃ­o Colorado');
INSERT INTO `prov_localidades` VALUES (2351, 25, 'RÃ­o Seco');
INSERT INTO `prov_localidades` VALUES (2352, 25, 'Rumi Punco');
INSERT INTO `prov_localidades` VALUES (2353, 25, 'San AndrÃ©s');
INSERT INTO `prov_localidades` VALUES (2354, 25, 'San Felipe');
INSERT INTO `prov_localidades` VALUES (2355, 25, 'San Ignacio');
INSERT INTO `prov_localidades` VALUES (2356, 25, 'San Javier');
INSERT INTO `prov_localidades` VALUES (2357, 25, 'San JosÃ©');
INSERT INTO `prov_localidades` VALUES (2358, 25, 'San Miguel de 25');
INSERT INTO `prov_localidades` VALUES (2359, 25, 'San Pedro');
INSERT INTO `prov_localidades` VALUES (2360, 25, 'San Pedro de Colalao');
INSERT INTO `prov_localidades` VALUES (2361, 25, 'Santa Rosa de Leales');
INSERT INTO `prov_localidades` VALUES (2362, 25, 'Sgto. Moya');
INSERT INTO `prov_localidades` VALUES (2363, 25, 'Siete de Abril');
INSERT INTO `prov_localidades` VALUES (2364, 25, 'Simoca');
INSERT INTO `prov_localidades` VALUES (2365, 25, 'Soldado Maldonado');
INSERT INTO `prov_localidades` VALUES (2366, 25, 'Sta. Ana');
INSERT INTO `prov_localidades` VALUES (2367, 25, 'Sta. Cruz');
INSERT INTO `prov_localidades` VALUES (2368, 25, 'Sta. LucÃ­a');
INSERT INTO `prov_localidades` VALUES (2369, 25, 'Taco Ralo');
INSERT INTO `prov_localidades` VALUES (2370, 25, 'TafÃ­ del Valle');
INSERT INTO `prov_localidades` VALUES (2371, 25, 'TafÃ­ Viejo');
INSERT INTO `prov_localidades` VALUES (2372, 25, 'Tapia');
INSERT INTO `prov_localidades` VALUES (2373, 25, 'Teniente Berdina');
INSERT INTO `prov_localidades` VALUES (2374, 25, 'Trancas');
INSERT INTO `prov_localidades` VALUES (2375, 25, 'Villa Belgrano');
INSERT INTO `prov_localidades` VALUES (2376, 25, 'Villa BenjamÃ­n Araoz');
INSERT INTO `prov_localidades` VALUES (2377, 25, 'Villa Chiligasta');
INSERT INTO `prov_localidades` VALUES (2378, 25, 'Villa de Leales');
INSERT INTO `prov_localidades` VALUES (2379, 25, 'Villa Quinteros');
INSERT INTO `prov_localidades` VALUES (2380, 25, 'YÃ¡nima');
INSERT INTO `prov_localidades` VALUES (2381, 25, 'Yerba Buena');
INSERT INTO `prov_localidades` VALUES (2382, 23, 'Roversi');
INSERT INTO `prov_localidades` VALUES (2383, 18, 'Salta Ciudad');

-- ----------------------------
-- Table structure for prov_provincias
-- ----------------------------
DROP TABLE IF EXISTS `prov_provincias`;
CREATE TABLE `prov_provincias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of prov_provincias
-- ----------------------------
INSERT INTO `prov_provincias` VALUES (1, 'Buenos Aires');
INSERT INTO `prov_provincias` VALUES (2, 'Buenos Aires-GBA');
INSERT INTO `prov_provincias` VALUES (3, 'Capital Federal');
INSERT INTO `prov_provincias` VALUES (4, 'Catamarca');
INSERT INTO `prov_provincias` VALUES (5, 'Chaco');
INSERT INTO `prov_provincias` VALUES (6, 'Chubut');
INSERT INTO `prov_provincias` VALUES (7, 'CÃ³rdoba');
INSERT INTO `prov_provincias` VALUES (8, 'Corrientes');
INSERT INTO `prov_provincias` VALUES (9, 'Entre RÃ­os');
INSERT INTO `prov_provincias` VALUES (10, 'Formosa');
INSERT INTO `prov_provincias` VALUES (11, 'Jujuy');
INSERT INTO `prov_provincias` VALUES (12, 'La Pampa');
INSERT INTO `prov_provincias` VALUES (13, 'La Rioja');
INSERT INTO `prov_provincias` VALUES (14, 'Mendoza');
INSERT INTO `prov_provincias` VALUES (15, 'Misiones');
INSERT INTO `prov_provincias` VALUES (16, 'NeuquÃ©n');
INSERT INTO `prov_provincias` VALUES (17, 'RÃ­o Negro');
INSERT INTO `prov_provincias` VALUES (18, 'Salta');
INSERT INTO `prov_provincias` VALUES (19, 'San Juan');
INSERT INTO `prov_provincias` VALUES (20, 'San Luis');
INSERT INTO `prov_provincias` VALUES (21, 'Santa Cruz');
INSERT INTO `prov_provincias` VALUES (22, 'Santa Fe');
INSERT INTO `prov_provincias` VALUES (23, 'Santiago del Estero');
INSERT INTO `prov_provincias` VALUES (24, 'Tierra del Fuego');
INSERT INTO `prov_provincias` VALUES (25, 'TucumÃ¡n');
INSERT INTO `prov_provincias` VALUES (26, NULL);

-- ----------------------------
-- Table structure for provincias
-- ----------------------------
DROP TABLE IF EXISTS `provincias`;
CREATE TABLE `provincias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of provincias
-- ----------------------------
INSERT INTO `provincias` VALUES (1, 'Buenos Aires');
INSERT INTO `provincias` VALUES (2, 'Buenos Aires-GBA');
INSERT INTO `provincias` VALUES (3, 'Capital Federal');
INSERT INTO `provincias` VALUES (4, 'Catamarca');
INSERT INTO `provincias` VALUES (5, 'Chaco');
INSERT INTO `provincias` VALUES (6, 'Chubut');
INSERT INTO `provincias` VALUES (7, 'Córdoba');
INSERT INTO `provincias` VALUES (8, 'Corrientes');
INSERT INTO `provincias` VALUES (9, 'Entre Ríos');
INSERT INTO `provincias` VALUES (10, 'Formosa');
INSERT INTO `provincias` VALUES (11, 'Jujuy');
INSERT INTO `provincias` VALUES (12, 'La Pampa');
INSERT INTO `provincias` VALUES (13, 'La Rioja');
INSERT INTO `provincias` VALUES (14, 'Mendoza');
INSERT INTO `provincias` VALUES (15, 'Misiones');
INSERT INTO `provincias` VALUES (16, 'Neuquén');
INSERT INTO `provincias` VALUES (17, 'Río Negro');
INSERT INTO `provincias` VALUES (18, 'Salta');
INSERT INTO `provincias` VALUES (19, 'San Juan');
INSERT INTO `provincias` VALUES (20, 'San Luis');
INSERT INTO `provincias` VALUES (21, 'Santa Cruz');
INSERT INTO `provincias` VALUES (22, 'Santa Fe');
INSERT INTO `provincias` VALUES (23, 'Santiago del Estero');
INSERT INTO `provincias` VALUES (24, 'Tierra del Fuego');
INSERT INTO `provincias` VALUES (25, 'Tucumán');
INSERT INTO `provincias` VALUES (26, NULL);

-- ----------------------------
-- Table structure for respuestas
-- ----------------------------
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE `respuestas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NULL DEFAULT NULL,
  `pregunta_id` int(11) NULL DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `respuesta` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of respuestas
-- ----------------------------
INSERT INTO `respuestas` VALUES (3, '2019-02-02 23:02:27', '2019-02-02 23:02:27', 1, 1, NULL, 'asdd');
INSERT INTO `respuestas` VALUES (4, '2019-02-03 22:34:03', '2019-02-03 22:34:03', 1, 2, NULL, 'Si dale ofertalo');

-- ----------------------------
-- Table structure for resultados
-- ----------------------------
DROP TABLE IF EXISTS `resultados`;
CREATE TABLE `resultados`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `modified` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `user_id` int(11) NULL DEFAULT NULL,
  `participacion_id` int(11) NULL DEFAULT NULL,
  `proceso_id` int(11) NULL DEFAULT NULL,
  `item_id` int(11) NULL DEFAULT NULL,
  `valor_oferta` decimal(10, 2) NULL DEFAULT NULL,
  `estado_inicial` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `estado_actual` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `modified` datetime(0) NULL DEFAULT NULL,
  `validacion_mail` int(1) NULL DEFAULT 0,
  `estado` int(1) NULL DEFAULT 1,
  `tipo_usuario` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `part_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `part_apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `part_nro_doc` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `part_telefono` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `calle` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `altura` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `piso` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `codigo_postal` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `provincia_id` int(11) NULL DEFAULT NULL,
  `localidad_id` int(11) NULL DEFAULT NULL,
  `direccion_entrega` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_razon_social` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_cuit` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_cargo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_telefono` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `empresa_tamanio` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'nicpas', 'nicpas@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2017-12-19 08:34:56', '2018-05-20 18:23:52', 0, 1, 'Particular', 'Nicolas', 'Passerini', '30593224', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Av Mayo 762 piso 4 oficina 3', 'Mi Empresa S.A.', NULL, '30710900406', NULL, '56165565', 'asdasd', NULL);
INSERT INTO `users` VALUES (2, 'vendedor', 'xczc@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2017-12-19 08:35:56', '2018-12-15 12:42:56', 0, 1, 'Empresa', '', '', '', '', '', '', '', '', 26, 0, '', 'PetroCAL SLR', '', '', '', '', '', '');
INSERT INTO `users` VALUES (3, 'vendedor2', 'compras@miempresa.com.ar', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2017-12-19 08:36:22', '2017-12-19 08:36:22', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ETECH SRL', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'comprador1', 'compras1@miempresa.com.ar', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2017-12-19 08:37:00', '2017-12-19 08:37:00', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PoTec S.A.', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (5, 'vendedor1', 'ventas1@proveedor.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2017-12-19 08:37:30', '2017-12-19 08:37:30', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SisteMir', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (6, 'segupetrol', 'info@segupetrol.com.ar', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-04-10 03:08:44', '2018-04-10 03:08:44', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (7, 'usina', 'hola@usinaco.work', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-05-30 12:49:56', '2018-05-30 12:49:56', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (8, 'avantiproduccio', 'info@avantiproducciones.com.ar', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-05-30 18:08:10', '2018-05-30 18:08:10', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (9, 'yanina', 'consultas@arte-creativo.com.ar', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-06-01 10:58:20', '2018-06-01 10:58:20', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (10, 'alejandra', 'aley.delgado@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-06-02 16:39:02', '2018-06-02 16:39:02', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (11, 'gikale', 'lageekmarketer@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-06-05 10:30:20', '2018-06-05 10:30:20', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (12, 'Daniel', 'dblitman@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-07-01 13:15:20', '2018-07-01 13:15:20', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (13, 'yanina1', 'yaninaparga@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-07-11 17:10:32', '2018-07-11 17:10:32', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (14, 'vanina', 'vanina@gmail.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-08-03 14:32:15', '2018-08-03 14:32:15', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (15, 'coprotab', 'info@coprotab.com', '$2a$10$xBfZJlnJgRjugyuTveJqM.qfEdefwmdrJn1QSr4uHhKk4VlnMzbEi', '2018-08-22 02:23:17', '2018-08-22 02:23:17', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (16, 'hteijiz', 'hteijiz@gmail.com', '$2a$10$f/quHDUSz8VM3A6r7yASpOQNmSq5UnLDUGdpAZPg1lFnkFjVjpKIe', '2019-02-04 01:36:52', '2019-02-04 01:36:52', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
