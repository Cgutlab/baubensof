-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-04-2019 a las 22:20:32
-- Versión del servidor: 10.2.23-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baubensofcom_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadato_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `file_image`, `orden`, `metadato_id`, `created_at`, `updated_at`) VALUES
(1, 'destacados__seccion1.png', 'aa', 1, NULL, NULL),
(2, 'destacados__seccion2.png', 'bb', 2, NULL, NULL),
(3, 'destacados__seccion3.png', 'cc', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `titulo1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `file_image`, `titulo1`, `titulo2`, `descripcion`, `slogan`, `created_at`, `updated_at`) VALUES
(1, 'empresa.png', '<p>BAUBENSOF</p>', '<p>NUESTRA EMPRESA</p>', '<p>Somos un equipo de profesionales dedicados a servicios integrales en el &aacute;rea de la construcci&oacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>OBJETIVOS</strong></p>\r\n\r\n<p>Nuestro objetivo es brindar un servicio integral en el &aacute;rea de construcci&oacute;n. Nos especializamos en la realizaci&oacute;n de toda clase de obras, ya sea por contrataci&oacute;n directa, o por licitaci&oacute;n p&uacute;blica o privada. El proyecto, construcci&oacute;n, fabricaci&oacute;n, instalaci&oacute;n y montaje, en su totalidad o partes de sus obras, van a estar resueltos desde BAUBENSOFT SRL. Tambi&eacute;n nos dedicamos a la fabricaci&oacute;n de aberturas de aluminio para todo tipo de construcci&oacute;n, con toda las l&iacute;neas disponibles del mercado moderno.</p>', '<p>Dise&ntilde;o, proyecci&oacute;n y construcci&oacute;n de espacios p&uacute;blicos, privados, civiles e industriales.</p>', NULL, '2018-09-17 17:46:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`id`, `nombre`, `orden`, `tipo`, `file_image`, `producto_id`, `created_at`, `updated_at`) VALUES
(4, 'Paño Fijo', NULL, 'modelo', 'modelo__pano-fijo.jpg', 1, '2018-09-17 15:56:27', '2018-09-17 15:56:27'),
(11, 'Aislamiento Técnico', NULL, 'ventaja', 'ventaja__ico-aberturas-ventajas-2.jpg', 1, '2018-09-17 16:10:49', '2018-09-17 16:10:49'),
(12, 'Inversión de Calidad', NULL, 'ventaja', 'ventaja__ico-aberturas-ventajas-3.jpg', 1, '2018-09-17 16:11:10', '2018-09-17 16:11:10'),
(13, 'Aislamiento Acústico', NULL, 'ventaja', 'ventaja__ico-aberturas-ventajas-4.jpg', 1, '2018-09-17 16:11:28', '2018-09-17 16:11:28'),
(14, 'Corrediza', NULL, 'modelo', 'modelo__modelo__corrediza.jpg', 4, '2018-09-17 16:28:51', '2018-09-17 16:28:51'),
(15, 'Paño Fijo', NULL, 'modelo', 'modelo__modelo__pano-fijo.jpg', 4, '2018-09-17 16:29:14', '2018-09-17 16:29:14'),
(17, 'Vidrio', NULL, 'tipologia', 'tipologia__1_p1.jpg', 4, '2018-09-17 16:54:50', '2018-09-17 16:54:50'),
(18, 'Calidad', NULL, 'ventaja', 'ventaja__1_modelo2.jpg', 4, '2018-09-17 16:55:57', '2018-09-17 16:55:57'),
(19, 'Corrediza', NULL, 'modelo', 'modelo__modelo__corrediza.jpg', 2, '2018-09-17 16:57:36', '2018-09-17 16:57:36'),
(20, 'Paño Fijo', NULL, 'modelo', 'modelo__modelo__pano-fijo.jpg', 2, '2018-09-17 16:58:07', '2018-09-17 16:58:07'),
(21, 'Brazo de Empuje', NULL, 'modelo', 'modelo__3_brazo de empuje.jpg', 2, '2018-09-17 17:01:11', '2018-09-17 17:01:11'),
(22, 'Brazo de Empuje', NULL, 'modelo', 'modelo__3_brazo de empuje.jpg', 3, '2018-09-17 17:01:32', '2018-09-17 17:01:32'),
(23, 'Corredizas', NULL, 'modelo', 'modelo__corrediza.jpg', 1, '2018-09-17 17:06:41', '2018-09-17 17:06:41'),
(28, 'Vidrio Simple', NULL, 'tipologia', 'tipologia__vidrio-simple.jpg', 1, '2018-09-17 17:12:55', '2018-09-17 17:12:55'),
(29, 'Vidrio Doble', NULL, 'tipologia', 'tipologia__vidrio-doble.jpg', 1, '2018-09-17 17:13:07', '2018-09-17 17:13:07'),
(30, 'Vidrio Simple', NULL, 'tipologia', 'tipologia__vidrio-simple.jpg', 1, '2018-09-17 17:13:31', '2018-09-17 17:13:31'),
(31, 'Vidrio Doble', NULL, 'tipologia', 'tipologia__vidrio-doble.jpg', 1, '2018-09-17 17:13:39', '2018-09-17 17:13:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `file_image`, `nombre`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'familias__familia1.png', 'Línea Rotonda', 'aa', NULL, NULL),
(2, 'familias__familia2.png', 'Línea Moderna', 'bb', NULL, NULL),
(3, 'familias__familia3.png', 'Línea Herrero', 'cc', NULL, NULL),
(4, 'familias__familia4.png', 'Línea A30 New', 'dd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_obras`
--

CREATE TABLE `galeria_obras` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `obra_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galeria_obras`
--

INSERT INTO `galeria_obras` (`id`, `orden`, `file_image`, `obra_id`, `created_at`, `updated_at`) VALUES
(6, NULL, 'galeria_obras__trenes-001.jpg', 2, '2018-09-17 16:35:27', '2018-09-17 16:35:27'),
(7, NULL, 'galeria_obras__trenes-002.jpg', 2, '2018-09-17 16:35:27', '2018-09-17 16:35:27'),
(8, NULL, 'galeria_obras__trenes-003.jpg', 2, '2018-09-17 16:35:27', '2018-09-17 16:35:27'),
(9, NULL, 'galeria_obras__escuela-001.jpg', 4, '2018-09-17 16:36:41', '2018-09-17 16:36:41'),
(10, NULL, 'galeria_obras__escuela-002.jpg', 4, '2018-09-17 16:36:41', '2018-09-17 16:36:41'),
(11, NULL, 'galeria_obras__escuela-003d.jpg', 4, '2018-09-17 16:36:41', '2018-09-17 16:36:41'),
(12, NULL, 'galeria_obras__escuela-003.jpg', 7, '2018-09-17 16:39:37', '2018-09-17 16:39:37'),
(13, NULL, 'galeria_obras__escuela-003b.jpg', 7, '2018-09-17 16:39:37', '2018-09-17 16:39:37'),
(14, NULL, 'galeria_obras__escuela-003c.jpg', 7, '2018-09-17 16:39:37', '2018-09-17 16:39:37'),
(15, NULL, 'galeria_obras__escuela-b001.jpg', 8, '2018-09-17 16:40:22', '2018-09-17 16:40:22'),
(16, NULL, 'galeria_obras__escuela-b002.jpg', 8, '2018-09-17 16:40:22', '2018-09-17 16:40:22'),
(17, NULL, 'galeria_obras__escuela-b003.jpg', 8, '2018-09-17 16:40:22', '2018-09-17 16:40:22'),
(18, NULL, 'galeria_obras__civiles02.jpg', 1, '2018-09-17 16:42:38', '2018-09-17 16:42:38'),
(19, NULL, 'galeria_obras__obras__obra1.png', 1, '2018-09-17 16:42:38', '2018-09-17 16:42:38'),
(20, NULL, 'galeria_obras__pintura cartel once (4).JPG', 5, '2019-02-01 18:25:44', '2019-02-01 18:25:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_productos`
--

CREATE TABLE `galeria_productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacions`
--

CREATE TABLE `informacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacions`
--

INSERT INTO `informacions` (`id`, `direccion`, `telefono1`, `telefono2`, `email`, `twitter`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'Calle 36 nº 1019, 1º B -entre 15 y 16- La Plata, Buenos Aires', '0221 4243528', '0221 15 5799879', 'info@baubensof.com', 'https://twitter.com', 'https://facebook.com', NULL, '2019-02-04 20:41:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ubicacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `ubicacion`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'navbar', 'logos__logo-principal.png', NULL, NULL),
(2, 'footer', 'logos__logo-footer.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `file_image`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Aluar', 'marcas__marca1.png', 'aa', NULL, NULL),
(2, 'Flamia', 'marcas__marca2.png', 'bb', NULL, NULL),
(3, 'Vasa', 'marcas__marca3.png', 'cc', NULL, NULL),
(4, 'Ekoglass', 'marcas__marca4.png', 'dd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `seccion`, `keyword`, `url`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '/', 'Página principal', NULL, NULL),
(2, 'Quiénes Somos', 'quienes somos', '/empresa', 'Descripción de la empresa', NULL, NULL),
(3, 'Obras', 'obras', '/obras', 'Catálogo de Obras', NULL, NULL),
(4, 'Aluminio', 'aluminio', '/productos', 'Catálogo de Productos', NULL, NULL),
(5, 'Referentes', 'referentes', '/referentes', 'Listado de clientes', NULL, NULL),
(6, 'Contacto', 'contacto', '/contacto', 'Zona de contacto', NULL, NULL);

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
(259, '2018_09_04_182648_create_familias_table', 1),
(411, '2014_10_12_000000_create_users_table', 2),
(412, '2014_10_12_100000_create_password_resets_table', 2),
(413, '2018_09_04_181529_create_sliders_table', 2),
(414, '2018_09_04_182016_create_empresas_table', 2),
(415, '2018_09_04_182049_create_obras_table', 2),
(416, '2018_09_04_182321_create_galeria_obras_table', 2),
(417, '2018_09_04_182721_create_productos_table', 2),
(418, '2018_09_04_182831_create_modelos_table', 2),
(419, '2018_09_04_182937_create_marcas_table', 2),
(420, '2018_09_04_183008_create_galeria_productos_table', 2),
(421, '2018_09_04_183037_create_referentes_table', 2),
(422, '2018_09_04_183311_create_tipologias_table', 2),
(423, '2018_09_04_183339_create_informacions_table', 2),
(424, '2018_09_04_191148_create_metadatos_table', 2),
(425, '2018_09_04_193943_create_ventajas_table', 2),
(426, '2018_09_05_135641_create_logos_table', 2),
(427, '2018_09_07_192926_create_destacados_table', 2),
(428, '2018_09_12_124137_create_etiquetas_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `producto_id` int(10) UNSIGNED NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeria` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `file_image`, `nombre`, `orden`, `descripcion`, `galeria`, `created_at`, `updated_at`) VALUES
(1, 'obras__obra1.png', 'Civiles', 'aa', '<p>Construcci&oacute;n y Mantenimiento de obras civiles.<br />\r\nProvisi&oacute;n y Colocaci&oacute;n de Aberturas de Aluminio y Met&aacute;licas.<br />\r\nEjecuci&oacute;n de Obras Sanitarias.<br />\r\nConsultor&iacute;a de Proyectos Integrales.</p>', 1, NULL, '2018-09-17 16:42:38'),
(2, 'obras__obra2.png', 'Trenes Argentinos', 'bb', '<p>Brindando soluciones a empresas, industrias y organismos p&uacute;blicos; abarcando as&iacute;, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes, creamos valor para ellos a trav&eacute;s de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.</p>', 1, NULL, '2018-09-17 16:35:27'),
(3, 'obras__obra3.png', 'Privadas', 'cc', 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.', 0, NULL, NULL),
(4, 'obras__obra4.png', 'Escuelas', 'dd', 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.', 1, NULL, '2018-09-17 16:36:41'),
(5, 'obras__pintura cartel once (2).JPG', 'Trabajos de pintura- Estacion Once', 'ee', '<p>Se realizo el cambio y limpieza de carteles, se pinto toda la carteleria nueva y los muros existentes.&nbsp;</p>', 1, NULL, '2019-02-01 18:27:02'),
(6, 'obras__obra6.png', 'Hospitales', 'ff', 'Brindando soluciones a empresas, industrias y organismos públicos; abarcando así, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes,  creamos valor para ellos a través de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.', 0, NULL, NULL),
(7, 'obras__escuela-003c.jpg', 'Instituciones Públicas Educativas', 'gg', '<p>Nuestra misi&oacute;n es</p>\r\n\r\n<p>Aportar los conocimientos, experiencias y capacidades necesarias para proveer soluciones integrales y de alto valor a&ntilde;adido a las empresas y administraci&oacute;n p&uacute;blica, basadas en el uso del personal y herramientas adecuadas para cada exigencia.</p>\r\n\r\n<p>Construcci&oacute;n y Mantenimiento de obras civiles.<br />\r\nProvisi&oacute;n y Colocaci&oacute;n de Aberturas de Aluminio y Met&aacute;licas.<br />\r\nEjecuci&oacute;n de Obras Sanitarias.<br />\r\nConsultor&iacute;a de Proyectos Integrales.</p>', 1, '2018-09-17 16:39:17', '2018-09-17 16:39:37'),
(8, 'obras__escuela-b002.jpg', 'Instituciones Públicas Educativas', 'hh', '<p>Brindando soluciones a empresas, industrias y organismos p&uacute;blicos; abarcando as&iacute;, todas las necesidades que el mercado demanda. Satisfaciendo las necesidades a nuestros clientes, creamos valor para ellos a trav&eacute;s de nuestros pilares fundamentales; Experiencia, Servicio y Confianza.</p>', 1, '2018-09-17 16:40:13', '2018-09-17 16:40:23');

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeria` int(11) DEFAULT 0,
  `etiquetas` int(11) DEFAULT 0,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `keyword`, `descripcion`, `orden`, `galeria`, `etiquetas`, `file_image`, `created_at`, `updated_at`) VALUES
(1, 'Línea Rotonda', 'Rotonda', '<p>&middot; Abertura corrediza de aluminio de alta prestaci&oacute;n</p>\r\n\r\n<p>&middot; Est&eacute;tica tradicional de L&iacute;nea Rotonda</p>\r\n\r\n<p>&middot; Formas Redondeadas</p>\r\n\r\n<p>&middot; Opci&oacute;n de armado a 45&ordm; y 90&ordm;&nbsp;</p>\r\n\r\n<p>&middot; Permite el acople a un pa&ntilde;o fijo de igual m&oacute;dulo</p>\r\n\r\n<p>&middot; Accesorios Nacionales de primera calidad en kit homologado</p>', 'aa', 0, 1, 'productos_producto1.png', NULL, '2018-09-17 17:08:31'),
(2, 'Línea Módena', 'Moderna', '<p>Este nuevo sistema de carpinter&iacute;a fue concebido como la evoluci&oacute;n -en cuanto a tecnolog&iacute;a, calidad, dise&ntilde;o y funcionalidad- del sistema m&aacute;s exitoso del mercado de aberturas en la Argentina. Todos sus perfiles cuentan con Registro de Dise&ntilde;o Industrial, son extruidos en aleaci&oacute;n 6063 temple T6 seg&uacute;n Normas IRAM y AA, y cuentan con certificaci&oacute;n de calidad de sus procesos seg&uacute;n Norma ISO 9001.</p>', 'bb', 0, 1, 'productos_producto2.png', NULL, '2018-09-17 16:57:36'),
(3, 'Línea Herrero', 'Herrero', '<p>- Ventana y puerta corrediza con felpas y vidrio simple.</p>\r\n\r\n<p>- Puertas de rebatir de 1 y 2 hojas en sus gamas medianas y pesadas, simple contacto.&nbsp;</p>\r\n\r\n<p>- Pa&ntilde;os fijos con una amplia gama de contravidrios para colocar paneles hasta 60 mm.</p>\r\n\r\n<p>- Ventiluz y banderola con bisagras corridas y doble contacto.</p>\r\n\r\n<p>- Postig&oacute;n con tablillas fijas tipo &quot;Z&quot;.</p>\r\n\r\n<p>- Amplia gama de complementos: mosquiteros, gu&iacute;as de cortinas, revestimientos para puertas, etc.</p>', 'cc', 0, 1, 'productos__herrero.jpg', NULL, '2018-09-17 17:21:29'),
(4, 'Línea A30 New', 'A30', '<p>Este sistema de Alta Prestaci&oacute;n permite la resoluci&oacute;n de diversas tipolog&iacute;as, e incorpora las formas curvas al dise&ntilde;o tradicional de este tipo de sistemas. A30 New fue pensado y dise&ntilde;ado como el sistema de mayor prestaci&oacute;n, estanqueidad y resistencia del mercado del aluminio.&nbsp;</p>\r\n\r\n<p>La actualidad de su dise&ntilde;o europeo, las amplias posibilidades constructivas, los accesorios de alta calidad le proporcionan al carpintero una herramienta de alta prestaci&oacute;n a la hora de dise&ntilde;ar una abertura de aluminio.&nbsp;</p>\r\n\r\n<p>Una vez m&aacute;s, Aluar divisi&oacute;n elaborados le ofrece a la comunidad de la construcci&oacute;n un sistema de capinter&iacute;a de aluminio que cuenta con la calidad y experiencia de la empresa que lo respalda.</p>', 'dd', 0, 1, 'productos_producto4.png', NULL, '2018-09-17 16:28:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referentes`
--

CREATE TABLE `referentes` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encargado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `referentes`
--

INSERT INTO `referentes` (`id`, `empresa`, `encargado`, `orden`, `link`, `created_at`, `updated_at`) VALUES
(11, 'Trenes Argentinos', 'Mario Arce', NULL, NULL, '2019-02-22 17:23:35', '2019-02-22 17:23:35'),
(12, 'Avistar S.A.', NULL, NULL, NULL, '2019-02-22 17:23:45', '2019-02-22 17:23:45'),
(13, 'Zetra S.A.', 'Ing. Ezequiel Perez', NULL, NULL, '2019-02-22 17:24:01', '2019-02-22 17:24:01'),
(14, 'Gobierno de la Ciudad de Buenos Aires', 'Martin Carpinacci', NULL, NULL, '2019-02-22 17:24:30', '2019-02-22 17:24:30'),
(15, 'Universidad Nacional de La Plata', 'Arq. Daniel Gulayin', NULL, NULL, '2019-02-22 17:25:04', '2019-02-22 17:25:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `file_image`, `titulo`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'sliders__slider1.png', 'SERVICIOS INTEGRALES EN CONSTRUCCIÓN', 'home', 'aa', NULL, NULL),
(2, 'sliders__slider2.png', 'INGENIERÍA DE PRECISIÓN', 'empresa', 'bb', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipologias`
--

CREATE TABLE `tipologias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `tipo_usuario`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'pablo', 'admin', '$2y$10$aA21txWybDoYGStAV3HW8.W4E7iyaj7zGaq4CGd6IhU1a/k6U7UUW', 'A17HULUNchIiPsSsa38CXzk2DFaZi2hHrHjDEHISHLgqJl5Q2VWP1R2u2hg8', NULL, NULL),
(3, 'noelia', 'noelia', 'user', '$2y$10$Hzub6fnRB2rnBVqIPETof.fmOqhpU6AYho.5VcKs.XgK2MzNl3RW2', '0d4Ek0xGsNciBpHBDT9jLczfOfaGlREppgeiRM0zooAEtwNKB6mzA9q9Q4Br', '2018-09-17 17:50:52', '2018-09-17 17:50:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventajas`
--

CREATE TABLE `ventajas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no-image.jpg',
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destacados_metadato_id_foreign` (`metadato_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etiquetas_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria_obras`
--
ALTER TABLE `galeria_obras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeria_obras_obra_id_foreign` (`obra_id`);

--
-- Indices de la tabla `galeria_productos`
--
ALTER TABLE `galeria_productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeria_productos_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `informacions`
--
ALTER TABLE `informacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referentes`
--
ALTER TABLE `referentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipologias`
--
ALTER TABLE `tipologias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indices de la tabla `ventajas`
--
ALTER TABLE `ventajas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `galeria_obras`
--
ALTER TABLE `galeria_obras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `galeria_productos`
--
ALTER TABLE `galeria_productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacions`
--
ALTER TABLE `informacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `referentes`
--
ALTER TABLE `referentes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipologias`
--
ALTER TABLE `tipologias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventajas`
--
ALTER TABLE `ventajas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `destacados_metadato_id_foreign` FOREIGN KEY (`metadato_id`) REFERENCES `metadatos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD CONSTRAINT `etiquetas_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `galeria_obras`
--
ALTER TABLE `galeria_obras`
  ADD CONSTRAINT `galeria_obras_obra_id_foreign` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `galeria_productos`
--
ALTER TABLE `galeria_productos`
  ADD CONSTRAINT `galeria_productos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
