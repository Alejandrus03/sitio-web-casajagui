-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2025 a las 04:00:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `menu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Bebidas', NULL, '2025-03-04 23:02:45', '2025-03-04 23:02:45'),
(2, 'Bebidas y preparados fríos', NULL, '2025-03-04 23:03:01', '2025-03-04 23:03:01'),
(3, 'Clásicos', 1, '2025-03-04 23:03:14', '2025-03-04 23:03:14'),
(4, 'Chocolate', 1, '2025-03-04 23:03:29', '2025-03-04 23:03:29'),
(5, 'Especiales', 1, '2025-03-04 23:03:39', '2025-03-04 23:03:39'),
(6, 'Chai', 1, '2025-03-04 23:03:49', '2025-03-04 23:03:49'),
(7, 'Té', 1, '2025-03-04 23:04:01', '2025-03-04 23:04:01'),
(8, 'Tisana', 1, '2025-03-04 23:04:12', '2025-03-05 20:12:05'),
(9, 'Frappés', 2, '2025-03-04 23:04:27', '2025-03-04 23:04:27'),
(10, 'Fralattes', 2, '2025-03-04 23:04:39', '2025-03-04 23:04:39'),
(11, 'Malteadas', 2, '2025-03-04 23:04:53', '2025-03-04 23:04:53'),
(12, 'Snacks', NULL, '2025-03-05 01:00:21', '2025-03-05 01:00:21'),
(13, 'Snacks Fritos', NULL, '2025-03-05 01:00:30', '2025-03-05 01:00:30'),
(14, 'Hamburguesas', 12, '2025-03-05 01:00:57', '2025-03-05 01:00:57'),
(15, 'Hot Dogs', 12, '2025-03-05 01:01:16', '2025-03-05 01:01:16'),
(16, 'Comida', NULL, '2025-03-05 01:01:48', '2025-03-05 01:01:48'),
(17, 'Platillos', 16, '2025-03-05 01:02:01', '2025-03-05 01:02:01'),
(18, 'Pastas', 16, '2025-03-05 01:02:11', '2025-03-05 01:02:11'),
(19, 'Tacos', 16, '2025-03-05 01:02:21', '2025-03-05 01:02:21'),
(20, 'Pizza individual', 16, '2025-03-05 01:02:48', '2025-03-05 01:02:48'),
(21, 'Molcajetes', 16, '2025-03-05 01:03:01', '2025-03-05 01:03:01'),
(22, 'Almuerzos', NULL, '2025-03-05 01:03:15', '2025-03-05 01:03:15'),
(23, 'Enchiladas', 22, '2025-03-05 01:03:27', '2025-03-05 01:03:27'),
(24, 'Chilaquiles', 22, '2025-03-05 01:03:38', '2025-03-05 01:03:38'),
(25, 'Huevo', 22, '2025-03-05 01:03:54', '2025-03-05 01:03:54'),
(26, 'Quesadillas', 22, '2025-03-05 01:04:02', '2025-03-05 01:04:02'),
(27, 'Combos', 22, '2025-03-05 01:04:16', '2025-03-05 01:04:16'),
(28, 'Sándwiches', 22, '2025-03-05 01:04:37', '2025-03-05 01:04:37'),
(29, 'Smoothies', 2, '2025-03-05 01:04:58', '2025-03-05 01:04:58'),
(30, 'Soda italiana', 2, '2025-03-05 01:05:16', '2025-03-05 01:05:16'),
(31, 'Tisana fría', 2, '2025-03-05 01:05:28', '2025-03-05 01:05:28'),
(32, 'Cocteles, cerveza y refrescos', NULL, '2025-03-05 01:05:46', '2025-03-05 01:05:46'),
(33, 'Crepas y waffles', NULL, '2025-03-05 01:06:39', '2025-03-05 01:06:39'),
(34, 'Crepas dulces', 33, '2025-03-05 01:06:51', '2025-03-05 01:06:51'),
(35, 'Waffles dulces', 33, '2025-03-05 01:07:03', '2025-03-05 01:07:03'),
(36, 'Salados', 33, '2025-03-05 01:07:15', '2025-03-05 01:07:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_24_150438_create_menu_items_table', 1),
(5, '2025_02_24_171543_visible', 2),
(6, '2025_03_04_051812_menu-items_a_productos', 3),
(7, '2025_03_04_051846_create_categorias', 3),
(8, '2025_03_04_052106_add_categoria_id', 3),
(9, '2025_03_04_052126_paquetes', 3),
(10, '2025_03_04_052140_paquete_producto', 3),
(11, '2025_03_04_185031_remove_categoria_column_from_productos_table', 4),
(12, '2025_03_17_042803_change_imagen_to_blob_in_productos_table', 5),
(13, '2025_03_18_140406_add_role_to_users_table', 6),
(14, '2025_03_18_143021_create_faqs_table', 7),
(15, '2025_04_01_131600_imagen_a_paquetes', 8),
(16, '2025_04_01_132223_imagen_long', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL DEFAULT 0.00,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `imagen` longblob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `descripcion`, `precio`, `fecha_inicio`, `fecha_fin`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Paquete primavera', 'Nuevo', 200.00, '2025-03-20', '2025-03-24', NULL, '2025-03-12 00:35:56', '2025-04-05 01:23:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_producto`
--

CREATE TABLE `paquete_producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paquete_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL,
  `imagen` longblob DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `imagen`, `visible`, `created_at`, `updated_at`) VALUES
(9, 36, 'Crepa Constanza', 'queso mozzarella, salsa de tomate y pepperoni', 75.00, NULL, 1, '2025-02-25 22:53:43', '2025-04-01 10:26:57'),
(10, 3, 'Espresso', 'Bebida clásica', 25.00, NULL, 1, '2025-03-04 23:06:00', '2025-04-05 01:34:40'),
(11, 3, 'Capuccino', NULL, 45.00, NULL, 1, '2025-03-05 20:03:28', '2025-03-10 11:04:01'),
(12, 3, 'Americano', NULL, 39.00, NULL, 1, '2025-03-05 20:04:03', '2025-03-05 20:04:03'),
(13, 3, 'Mocha', NULL, 55.00, NULL, 1, '2025-03-05 20:04:22', '2025-03-05 20:04:22'),
(14, 3, 'Latte sencillo', NULL, 46.00, NULL, 1, '2025-03-05 20:04:48', '2025-03-05 20:04:48'),
(16, 4, 'Artesanal', NULL, 45.00, NULL, 1, '2025-03-05 20:07:25', '2025-03-05 20:07:25'),
(17, 4, 'Blanco', NULL, 45.00, NULL, 1, '2025-03-05 20:07:40', '2025-03-05 20:07:40'),
(18, 4, 'Semiamargo', NULL, 45.00, NULL, 1, '2025-03-05 20:07:57', '2025-03-05 20:07:57'),
(19, 6, 'Tigre', NULL, 50.00, NULL, 1, '2025-03-05 20:10:49', '2025-03-05 20:10:49'),
(20, 6, 'Tortuga', NULL, 55.00, NULL, 1, '2025-03-05 20:11:03', '2025-03-05 20:11:03'),
(21, 6, 'Pingüino', NULL, 55.00, NULL, 1, '2025-03-05 20:11:20', '2025-03-05 20:11:20'),
(22, 8, 'Fresa kiwi', NULL, 49.00, NULL, 1, '2025-03-05 20:11:57', '2025-03-05 20:11:57'),
(23, 8, 'Frutos rojos', NULL, 49.00, NULL, 1, '2025-03-05 20:13:06', '2025-03-05 20:13:06'),
(24, 8, 'Mango y coco', NULL, 49.00, NULL, 1, '2025-03-05 20:13:21', '2025-03-05 20:13:21'),
(25, 7, 'Manzanilla', NULL, 35.00, NULL, 1, '2025-03-05 20:13:41', '2025-03-05 20:13:41'),
(26, 7, 'Inglés', NULL, 35.00, NULL, 1, '2025-03-05 20:13:58', '2025-03-05 20:13:58'),
(27, 7, 'Hierbabuena', NULL, 35.00, NULL, 1, '2025-03-05 20:14:19', '2025-03-05 20:14:19'),
(28, 5, 'Ginger brownie', 'chocolate, jengibre y bombones', 55.00, NULL, 1, '2025-03-05 20:15:09', '2025-03-05 20:15:09'),
(29, 5, 'Kava lavanda', 'café, vainilla y almendra', 55.00, NULL, 1, '2025-03-05 20:15:41', '2025-03-05 20:15:41'),
(30, 5, 'Tisu canela', 'chai manzana y almendra', 55.00, NULL, 1, '2025-03-05 20:16:12', '2025-03-05 20:16:12'),
(31, 5, 'Menta matcha', NULL, 50.00, NULL, 1, '2025-03-05 20:16:35', '2025-03-05 20:16:35'),
(32, 5, 'Menta blanca', 'chocolate blanco y menta', 48.00, NULL, 1, '2025-03-05 20:17:05', '2025-03-05 20:17:05'),
(34, 3, 'Latte con sabor', NULL, 55.00, NULL, 1, '2025-03-17 23:45:11', '2025-03-17 23:45:11'),
(35, 5, 'Latte con licor', NULL, 60.00, NULL, 1, '2025-03-17 23:45:48', '2025-03-17 23:45:48'),
(36, 5, 'Latte con licor', NULL, 60.00, NULL, 1, '2025-03-17 23:45:49', '2025-03-17 23:45:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7DhAlwQRDYsixJoBrGZQ1DURY54SFSgpZhcf8oG4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmtyTTNEZzBENGkxbVNCVVNQdXQ4ZnhpVUtPU3RwekVGUUpWU29SMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob3NwZWRhamUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1743811905),
('ZwAWKjbGXfLFewYOFr4Pcn7fyUtt6yMlQfnvwnw8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFFlU0ttTGZtUTE2R3A4T240VFJxcE5QNUNTSGtyaWo5NXFxQTI5YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQvcHJvZHVjdG9zIjt9fQ==', 1743804550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'sinkopeso', 'a@a.com', NULL, '$2y$12$EcMOmDvT4xF2jGhhASzYt.pbSNLxbBjguRXhbGbNlgT/qulwZhPcC', NULL, '2025-04-03 01:52:13', '2025-04-03 01:52:13', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_parent_id_foreign` (`parent_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquete_producto`
--
ALTER TABLE `paquete_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paquete_producto_paquete_id_foreign` (`paquete_id`),
  ADD KEY `paquete_producto_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paquete_producto`
--
ALTER TABLE `paquete_producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `paquete_producto`
--
ALTER TABLE `paquete_producto`
  ADD CONSTRAINT `paquete_producto_paquete_id_foreign` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `paquete_producto_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
