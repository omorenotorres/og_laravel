-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2018 a las 16:59:49
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `og_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buffets`
--

CREATE TABLE `buffets` (
  `id` int(10) UNSIGNED NOT NULL,
  `b_dia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_precio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `buffets`
--

INSERT INTO `buffets` (`id`, `b_dia`, `b_precio`, `created_at`, `updated_at`) VALUES
(2, 'DE LUNES A VIERNES (DIA)', 'Adultos: $25, Niños (4 a 11 años): $ 12', '2018-08-17 00:22:52', '2018-08-17 04:25:05'),
(3, 'SÁBADOS, DOMINGOS Y FERIADOS (DIA)', 'Adultos: $35, Niños (4 a 11 años): $ 18', '2018-08-17 00:22:52', '2018-08-17 04:25:45'),
(4, 'BUFFET DE LUNES A VIERNES (NOCHE)', 'Adultos: $30, Niños (4 a 11 años): $ 15', '2018-08-17 00:22:52', '2018-08-17 04:26:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carousels`
--

INSERT INTO `carousels` (`id`, `c_titulo`, `c_imagen`, `created_at`, `updated_at`) VALUES
(1, 'Disfruta de la mejor comida criolla y marina', 'http://localhost/curso/laravel/og_laravel/public/image/cDSSxZZof7Ezgc8FGyzl3eQJbsdiOTwxCP5tRoJx.jpeg', '2018-08-15 07:36:25', '2018-08-16 23:28:48'),
(3, 'Ven y enamórate de nuestra cocina', 'http://localhost/curso/laravel/og_laravel/public/image/i7ssccSqGi21sH3zqSwGyNMPccg7DQO916P8V3Tq.jpeg', '2018-08-15 07:36:25', '2018-08-16 23:29:28'),
(5, 'Sabemos que regresarás.', 'http://localhost/curso/laravel/og_laravel/public/image/JWDWDO96A4gquIXOKreYnZ6rlwCdVYMoqFtpKIqh.jpeg', '2018-08-15 07:36:25', '2018-08-19 22:23:53'),
(6, 'Te esperamos', 'http://localhost/curso/laravel/og_laravel/public/image/lUltY6XEAmDgFH93ADHazI4svyR14p3jq1rE6EsD.jpeg', '2018-08-15 22:06:14', '2018-08-16 23:30:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `co_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_informacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `co_imagen`, `co_descripcion`, `co_informacion`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost/curso/laravel/og_laravel/public/image/YZoea6WLFyBnV4ZwXHIicVx683BPi0DNlQl9n1D5.png', 'DIRECCION', 'Malabia 615, Villa Crespo (CABA)', '2018-08-17 00:22:52', '2018-08-17 04:31:21'),
(2, 'http://localhost/curso/laravel/og_laravel/public/image/FOymXiJSS09wCFc1yt70bHUwrf2RVc41gdEcjABY.png', 'TELEFONO', 'Telefono:562-2098', '2018-08-17 00:22:52', '2018-08-17 04:32:06'),
(3, 'http://localhost/curso/laravel/og_laravel/public/image/Gyh2fLCkuAmITAfWPZlhQ9IThqmTjUdsD1iWtV2t.png', 'E-MAIL', 'reservas-ogourmet@gmail.com', '2018-08-17 00:22:52', '2018-08-17 04:32:49'),
(4, 'http://localhost/curso/laravel/og_laravel/public/image/Uf0F8ysZb2r1KwmHtIRY0cv8RspaixwmF2cL5Vxq.png', 'FACEBOOK', 'https://www.facebook.com/ogourmet', '2018-08-17 00:22:52', '2018-08-17 04:33:33'),
(5, 'http://localhost/curso/laravel/og_laravel/public/image/GPs7X2NbkUn9PjkLfbC1HDpZ3kiBa3EEiBBwn3ck.png', 'INSTAGRAM', 'https://www.instagram.com/ogourmet', '2018-08-17 00:22:52', '2018-08-17 04:36:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo_plato` int(11) NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_item` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `tipo_plato`, `item`, `descripcion_item`, `precio_item`, `created_at`, `updated_at`) VALUES
(1, 1, 'Calypso OG ', '(Ron, curacao azul, crema de coco, jugo de mango y hielo)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Pisco sour Ganador', '(Pisco Quebranta y acholado, limon, jarabe, clara de huevo, amargo de angostura)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Maracuya Sour', '(Pisco Quebranta, maracuya, limon, jarabe, clara de huevo)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Chilcano de Pisco', '(Pisco Quebranta, limon, amargo de angostura, Ginger Ale)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Cocktail de Algarrobina', '(Pisco Quebranta, algarrobina, jarabe, leche, yema de huevo, canela)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Macerados de Pisco en', '(Hierba Luisa, Cnela, Aji, Aguaymanto y Kion)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'Daiquiri', '(Ron, jarabe, hielo y Fresa, limon o durazno)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'Piscina', '(Pisco, ron, vodka, gin, jugo de pina y curacao azul)', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'Sangria', '(1 jarra)', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'Sangria', '(1/2 jarra)', '6.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'Shot de pisco, ron y anis najar', '', '3.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 2, 'Cebiche OG', 'La especialidad de la casa. Perfecta combinacion de pescado y mariscos en cebiche acompanados con Brochetas de Mariscos, todo banado en salsa de aji amarillo y salsa de rocoto.', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 2, 'Tiradito OG', 'Finas laminas de pescado cocido con limon, banado por cuatro salsas distintas: de aji amarillo, de olivo, de cebiche tradicional y de rocoto.', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 2, 'Tacu tacu OG', 'Tacu tacu tradicional cubierto de salsa blanca y mariscos, acompanados de brochetas de pescado flambeadas con pisco y una guarnicion de platanos fritos.', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 2, 'Lomo fino OG', 'Exquisita combinacion de Fetuccini en salsa de rocoto, Lomo fino a la parrilla banado en salsa de Langostinos y Lomo fino en salsa de Champinones.', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 'Ronda Marina', 'Excelente plato familiar con los mejores sabores marinos: Cebiche de pescado, chicharron de calamar, tiradito en salsa de aji amarillo, arroz con mariscos y causa de pulpa de cangrejo.', '25.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 3, 'Tamal criollo / verde', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 3, 'Papa a la huancaina', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 3, 'Tequenos de jamon y queso', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 3, 'Tequenos de langostinos', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 3, 'Palta rellena', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 3, 'Choritos a la chalaca', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 3, 'Conchitas a la parmesana', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 3, 'Pulpo al olivo', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 3, 'Rocoto Relleno', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 3, 'Causa de pulpa de cangrejo', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'causa de pollo ', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 'Causa De langostinos', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 4, 'Cebiche Bahia', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 4, 'Cebiche de pescado Junior', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 4, 'Cebiche de pescado Personal', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 4, 'Cebiche mixto', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 4, 'Cebiche de conchas negras', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 4, 'Cebiche clasico', '(De conchas negras y pescado)', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 4, 'Tiradito OG (4 colores)', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 4, 'Tiradito tradicional', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 4, 'Leche de tigre', '(con chicharron).', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 4, 'Leche de pantera', '(con chicharron).', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 5, 'Jalea', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 'Jalea de chita', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 5, 'Chicharron de pollo', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 5, 'Chicharron de calamar', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 5, 'Chicharron de langostino', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 5, 'Chicharron de camaron', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 5, 'Chicharron mixto', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 5, 'Chicharron de pescado', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 6, 'Cebiche y chicharron de calamar', '', '30.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 6, 'Cebiche y arroz con mariscos', '', '30.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 6, 'Triple marino', '(cebiche de pescado, chicharron de calamar y arroz con mariscos)', '30.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 6, 'Ronda marina', '(Cebiche de pescado, chicharron de calamar, tiradito tradicional, arroz con mariscos y causa de pulpa de cangrejo)', '30.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 7, 'Chilcano especial', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 7, 'Dieta de pollo', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 7, 'Sopa a la minuta', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 7, 'Sopa criolla', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 7, 'Parihuela', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 7, 'Chupe de pescado', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 7, 'Chupe de langostino', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 7, 'Chupe de camarones', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 7, 'Sudado de pescado', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 7, 'Sudado Mixto', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 8, 'Volcan OG', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 8, 'Arroz con mariscos', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 8, 'Risotto con pescado al grill', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 8, 'Delicia OG', '(Risotto en salsa de hierbas aromaticas coronado con mixtura de exquisitos frutos del mar, trozos de pescado y laminas de tocino al grill)', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 8, 'Chaufa de pollo', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 8, 'Chaufa de mariscos', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 8, 'Chaufa de pescado', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 8, 'Tacu tacu OG', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 8, 'Tacu tacu a lo pobre', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 8, 'Tacu tacu de mariscos', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 8, 'Tacu tacu con lomo saltado', '', '16.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 9, 'Pescado frito o plancha', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 9, 'A lo macho', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 9, 'Con salsa de langostino', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 9, 'A la chorrillana', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 9, 'Escabeche', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 9, 'Con salsa de champinones', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 9, 'Pescado saltado', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 9, 'Chita / lenguado con salsa de langostinos', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 9, 'Chita/lenguado al ajillo', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 9, 'Chita / lenguado al ajo', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 9, 'Chita/lenguado dorada', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 9, 'Chita/lenguado sudado', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 9, 'Jalea de chita ', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 9, 'Chita / Lenguado a lo Macho', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 9, 'Cabrilla dorada', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 9, 'Cabrilla sudado', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 9, 'Cabrilla al ajillo', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 9, 'Cabrilla en salsa de langostinos', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 9, 'Cabrilla a lo macho', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 9, 'Cabrilla al ajo', '', '19.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 10, 'Lomo fino OG', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 10, 'Lasagna OG', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 10, 'Lasagna de carne', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 10, 'Fetuccini a la huancaina con lomo fino', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 10, 'Fetuccini a la bolognesa con langostinos', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 10, 'Fetuccini al pesto con bistec', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 11, 'Filete de pechuga a la plancha', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 11, 'Pollo saltado', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 11, 'Tallarin saltado con pollo', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 11, 'Pechuga a la parrilla', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 11, 'Cordon bleu', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 11, 'Milanesa de pollo', '', '18.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 12, 'Cau cau', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 12, 'Olluquito con carne', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 12, 'Arroz con pollo', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 12, 'Carapulcra', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 12, 'Aji de gallina', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 12, 'Seco de res con frejoles', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 12, 'Lomo saltado', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 12, 'Lomo saltado', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 13, 'Tallarines con papa a la huancaina', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 13, 'Arroz con pollo y papa huancaina', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 13, 'Ronda criolla', '(Aji de gallina, Seco con frejol, cau cau, Carapulcra o arroz con pollo)', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 14, 'Ensalada Mixta', '(Lechuga, tomate, palta y cebolla)', '10.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 14, 'Ensalada Cesar', '(Lechuga, tomate, pechuga a la parrilla, tocino, queso parmesano, croutones)', '10.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 14, 'Ensalada light', '(Pechuga a la parrilla, pecanas, lechuga, tomate, espinaca, queso, pimientos, apio)', '10.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 15, 'Anticuchos', '(2 palitos)', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 15, 'Bandera peruana (3 palitos)', '(Deliciosa combinacion de corazon de res y jusgoso muslo de pollo, acompanado con choclo y papa sancochada)', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 15, 'Chuleta a la parrilla', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 15, 'Baby beef (250gr)', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 15, 'Pechuga a la parrilla', '', '15.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 16, 'Chancho al cilindro/caja china', '(Servido con papas bravas o carapulcra y ensaladas)', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 16, '1/2 Cuy crocante', '(Con papas en salsa de mani acompanado con arroz blanco)', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 16, 'Costillas a la BBQ', '', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 17, 'Chorizo ', '(2 unidades)', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 17, 'Papa / yuca frita', '', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 17, 'Camote/papa/choclo/yuca', '', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 17, 'Arroz blanco', '', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 18, 'Parrilla familiar', '(2 bifes, 2 chuletas, 2 muslos de pollo, 2 anticuchos, 2 brocheta, 3 chorizos y mollejitas)', '35.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 18, 'Parrilla para dos', '(1 bife, 1 chuleta, 1 muslo de pollo, 1 anticucho, 1 chorizo y mollejitas)', '24.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 18, 'Parrilla personal', '(1 Bife, pechuga de pollo, 1 palito de anticucho, mollejitas)', '17.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 19, 'Torta', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 19, 'Mazamorra morada', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 19, 'Arroz con leche', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 19, 'Duraznos al jugo', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 19, 'Ensalada de fruta', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 19, 'Gelatina', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 19, 'Crepes de manja', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 19, 'Piqueo de bocaditos', '(8 unidades)', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 20, 'Cristal / Cusquena / Pilsen', '620ml', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 20, 'Cristal / Cusquena / Pilsen', '330ml', '6.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 20, 'Cusquena Negra', '330ml', '7.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 20, 'Cusquena Negra', '620ml', '10.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 20, 'Budweiser (343ml)', 'Autentica lager americana. Elaborada con los mas finos ingrediente y un exclusivo proceso de maduracion con madera, generando un sabor balanceado, muy refrescante y con rapido final.', '7.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 20, 'Corona(355ml)', 'Cerveza mexicana reconocida mundialmente como un icono de relax y refrescancia presentada en si exclusiva botella transparente siempre coronada con una rodaja de limon.', '11.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 20, 'Stella Artois (355ml)', 'Sofisticada lager de origen europeo con mas de 600 anos de tradicion cervecera caracterizada por un sutil amargor. Perfectamente servida en su exclusivo caliz de cristal.', '10.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 20, 'Lowenbrau (355ml)', 'Cerveza de origen aleman con un intenso color dorado, particular sabor a cebada y delicado amargor. Ahora elaborada en Per? ideal para disfrutar con los cinco sentidos.', '6.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 21, 'Infusiones', '', '4.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 21, 'Cafe con leche', '', '6.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 21, 'Cafe', '', '5.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 21, 'Botella con agua x 600 ml', '', '4.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 21, 'Gaseosa personal', '', '4.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 21, 'Coca zero', '', '5.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 21, 'Inca kola light', '', '5.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 21, 'Copa chicha/maracuya/limonada', '', '5.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 21, 'Jarra de chicha morada', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 21, 'Jarra de limonada', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 21, 'Jarra de maracuya', '', '12.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 21, 'Copa limonada/ maracuya frozzen', '', '8.00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(105, '2014_10_12_000000_create_users_table', 1),
(106, '2014_10_12_100000_create_password_resets_table', 1),
(107, '2018_08_12_215657_create_carousels_table', 1),
(108, '2018_08_12_215716_create_menus_table', 1),
(109, '2018_08_12_215740_create_tplatos_table', 1),
(110, '2018_08_12_215756_create_promos_table', 1),
(111, '2018_08_16_194532_create_buffets_table', 1),
(112, '2018_08_16_194620_create_contactos_table', 1),
(113, '2018_08_17_185508_create_reservacions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `p_titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `promos`
--

INSERT INTO `promos` (`id`, `p_titulo`, `p_descripcion`, `p_imagen`, `created_at`, `updated_at`) VALUES
(1, 'Happy Hour', 'Por cada dos (2) tragos, pagas uno (1). (Solo valido de Lunes a Jueves de 4:00 pm a 6 pm)', 'http://localhost/curso/laravel/og_laravel/public/image/WmLcmC0DDkpIpi5tJVhviL7DNVz5VADY8euFtCSo.jpeg', '2018-08-15 07:36:25', '2018-08-16 23:33:07'),
(3, 'FOOD DELIVERY', 'ORDENE SU COMIDA. Ofrecemos nuestro rapido servicio de Food Delivery para que comas en la comodidad de tu hogar. Numero Telefonico: 562-2098', 'http://localhost/curso/laravel/og_laravel/public/image/7YBXSPkS3nIwy8RvgLV1v4M0EuSdSBcOyVexStXx.png', '2018-08-15 07:36:25', '2018-08-16 23:34:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacions`
--

CREATE TABLE `reservacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comensales` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservacions`
--

INSERT INTO `reservacions` (`id`, `nombre`, `correo`, `hora`, `fecha`, `comensales`, `telefono`, `created_at`, `updated_at`) VALUES
(2, 'Lizeth Hermiston', 'justen05@example.net', 22, '2010-04-15', 85, 49639539, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(3, 'Dr. Jermey Stiedemann', 'austin.deckow@example.net', 15, '2007-08-08', 54, 75864706, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(4, 'Mr. Pierre Kautzer Sr.', 'doyle.natasha@example.com', 14, '1978-07-12', 24, 27604447, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(5, 'Dr. Rickey Monahan Jr.', 'becker.gianni@example.net', 20, '1996-04-23', 67, 25924384, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(6, 'Emelia Ward', 'odie.prohaska@example.net', 21, '2007-12-25', 59, 16337955, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(7, 'Greyson Jacobs', 'krista.schoen@example.com', 18, '2010-11-25', 6, 67711732, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(9, 'Raul Kilback', 'leora.brown@example.com', 12, '1992-01-07', 4, 14935429, '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(28, 'om', 'om@om.com', 23, '2018-08-21', 2, 22, '2018-08-20 21:59:24', '2018-08-20 21:59:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tplatos`
--

CREATE TABLE `tplatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `tp_codigo` int(11) NOT NULL,
  `tp_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tplatos`
--

INSERT INTO `tplatos` (`id`, `tp_codigo`, `tp_descripcion`, `tp_imagen`, `created_at`, `updated_at`) VALUES
(1, 1, 'APERITIVOS', 'http://localhost/curso/laravel/og_laravel/public/image/FEvg0eyuKsxUeQM2MQ4HtBaojLxyGnmPYZ74jcYz.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:56:33'),
(2, 2, 'RECOMENDACION DEL CHEF', 'http://localhost/curso/laravel/og_laravel/public/image/F8iso67YlNadC8eX0roZAD0zxkgJsztXtg65XrKa.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:56:59'),
(3, 3, 'ENTRADAS', 'http://localhost/curso/laravel/og_laravel/public/image/gP2zVakshUUQTpPmTVIm42179jZjPs4AhSm9VTc3.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:57:18'),
(4, 4, 'CEBICHES', 'http://localhost/curso/laravel/og_laravel/public/image/oob6fbm3aCnQ3WkdBAyLVnMRPBuRPbEOB9KYws71.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:57:43'),
(5, 5, 'CHICHARRONES', 'http://localhost/curso/laravel/og_laravel/public/image/m4PDaGnHGgqyq4p1MnFBPjgm5VZPXda5JL2lCgsF.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:57:58'),
(6, 6, 'COMBINADOS MARINOS', 'http://localhost/curso/laravel/og_laravel/public/image/sTVRO3hVdYprAmceRE4SzxxdkDKIVpQGQQeuIuGO.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:58:16'),
(7, 7, 'SOPAS', 'http://localhost/curso/laravel/og_laravel/public/image/KNdIVWpkwmDVrguMnLfC4ipYbO5VFnK2pA1AUsTE.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:58:51'),
(8, 8, 'ARROCES', 'http://localhost/curso/laravel/og_laravel/public/image/EDM4axUpMdmWgNAwXD6oEcevTRrKFaw2vYeAqA5D.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:59:08'),
(9, 9, 'PESCADOS', 'http://localhost/curso/laravel/og_laravel/public/image/LUYqTaJdv4vwjnscFjolV4Fje0mi2Y1OdzDbTNSM.jpeg', '0000-00-00 00:00:00', '2018-08-16 05:59:32'),
(10, 10, 'PASTAS', 'http://localhost/curso/laravel/og_laravel/public/image/mXtXfJ29LF6NjdbwWOyjw0zSHX3n53Z0al0fPiuL.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:00:01'),
(11, 11, 'POLLOS', 'http://localhost/curso/laravel/og_laravel/public/image/IsMSPJpbLKtmiSfrgLGw17lEiwId2HGdxRkaHcGI.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:00:27'),
(12, 12, 'PLATOS CRIOLLOS', 'http://localhost/curso/laravel/og_laravel/public/image/xsxsLbKP0aETDfrPOnxvO8UiviuTUI1196ycll5u.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:00:45'),
(13, 13, 'COMBINADOS CRIOLLOS', 'http://localhost/curso/laravel/og_laravel/public/image/LvqkpuPOzFy1SKNeWxG8S7uOzaGbRR34lAZUvLER.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:01:03'),
(14, 14, 'ENSALADAS', 'http://localhost/curso/laravel/og_laravel/public/image/vggc91V4ahM52EUFvSVWRpDLLbqTt0PLwRtTMh1L.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:01:19'),
(15, 15, 'ALL GRILL', 'http://localhost/curso/laravel/og_laravel/public/image/8sKcDxVQZPpbf7Arz3F03x0S3TY0rjbsMXhNm8Qw.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:01:32'),
(16, 16, 'PLATOS DE FIN DE SEMANA', 'http://localhost/curso/laravel/og_laravel/public/image/fU1rlosDDF52bHtUtBVlRRvbcUzhGuj3Ah9LJBNJ.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:02:08'),
(17, 17, 'GUARNICIONES', 'http://localhost/curso/laravel/og_laravel/public/image/bo4e73jLNwFjYPWgaQ5bR2jcNa0rSCQTfWCLtzfv.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:02:40'),
(18, 18, 'PARRILLAS', 'http://localhost/curso/laravel/og_laravel/public/image/VU3VgrxYkkNG66KW89Ood9LPNdnM6yMYMpqIL9cn.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:02:55'),
(19, 19, 'POSTRES', 'http://localhost/curso/laravel/og_laravel/public/image/itKj7NB7NqVKisZ5mCTT6GOpSSFRTbSpQGHzmooY.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:03:12'),
(20, 20, 'CERVEZAS', 'http://localhost/curso/laravel/og_laravel/public/image/JUcdfmRfpjxoiKE0XJN5Hx93u5NJ1T1f7negD2FB.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:03:27'),
(21, 21, 'BEBIDAS', 'http://localhost/curso/laravel/og_laravel/public/image/ASNyZdGqEKb0mwFnkxYGasxO1BXKFyUZyVotYiC5.jpeg', '0000-00-00 00:00:00', '2018-08-16 06:03:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'omorenotorres', 'omorenotorres@hotmail.com', '$2y$10$d372wjRje2mDEr0w3M0iv.NVBLgwNPSfh/aWY7.9bJ1ADQnijOsL2', 'a8XXOGZugVBwAurpJ0cYKoaPSCtxnbXcD7xjjMDJmdVY7wsA2JMek3OiiL7b', '2018-08-17 23:50:10', '2018-08-17 23:50:10'),
(7, 'admin', 'adminog@hotmail.com', '$2y$10$eO/Wqta.8OdIeVyAfY4DieBKABP5f2o5XojwlbOxSht03xZzCPToe', NULL, '2018-08-21 18:43:02', '2018-08-21 18:43:02'),
(8, 'nuevo', 'nuevo@nuevo.com', '$2y$10$1d15Bxx86xppONUwS3eYd.aC0M3b/rQOadpHq9VBE39pZGcJ7uOJS', 'sa5sr6zO8k1FmgMBFlQ5WtzDnE4YwAyZRhp4nzEGj2Eq7sdBEDZDH193ilai', '2018-08-21 18:53:08', '2018-08-21 18:56:26'),
(9, 'orlando', 'orlando@hotmail.com', '$2y$10$fXkZzar.8diORiYdqlO5Z.148SxRahwjJbsi2l7tXYQj.pqQbx3Ba', 'QnvASOiQHZnw8HffNzI8d9C0EOYYo7DIfUykHG2InkuMD9um1Xjd1W5xSQnl', '2018-08-21 18:55:12', '2018-08-21 18:55:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buffets`
--
ALTER TABLE `buffets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservacions`
--
ALTER TABLE `reservacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tplatos`
--
ALTER TABLE `tplatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buffets`
--
ALTER TABLE `buffets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservacions`
--
ALTER TABLE `reservacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tplatos`
--
ALTER TABLE `tplatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
