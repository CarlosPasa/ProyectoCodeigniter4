-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-05-2024 a las 15:09:55
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21963587_xharles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `user` text NOT NULL,
  `ip_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:31:01', '2023-02-01 20:31:01'),
(2, 'Administrator Logged in', '1', '::1', '2023-02-01 20:31:05', '2023-02-01 20:31:05'),
(3, 'Role #1 Updated by User: #1', '1', '::1', '2023-02-01 20:31:36', '2023-02-01 20:31:36'),
(4, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:36:32', '2023-02-01 20:36:32'),
(5, 'Administrator Logged in', '1', '::1', '2023-02-01 20:36:37', '2023-02-01 20:36:37'),
(6, 'Role #1 Updated by User: #1', '1', '::1', '2023-02-01 20:39:42', '2023-02-01 20:39:42'),
(7, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:39:46', '2023-02-01 20:39:46'),
(8, 'Administrator Logged in', '1', '::1', '2023-02-01 20:39:50', '2023-02-01 20:39:50'),
(9, 'Role #1 Updated by User: #1', '1', '::1', '2023-02-01 20:39:59', '2023-02-01 20:39:59'),
(10, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:40:03', '2023-02-01 20:40:03'),
(11, 'Administrator Logged in', '1', '::1', '2023-02-01 20:40:07', '2023-02-01 20:40:07'),
(12, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:41:59', '2023-02-01 20:41:59'),
(13, 'Administrator Logged in', '1', '::1', '2023-02-01 20:42:04', '2023-02-01 20:42:04'),
(14, 'User: Administrator Logged Out', '1', '::1', '2023-02-01 20:49:41', '2023-02-01 20:49:41'),
(15, 'Administrator Logged in', '1', '::1', '2023-02-02 04:09:59', '2023-02-02 04:09:59'),
(16, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 13:37:24', '2023-02-09 13:37:24'),
(17, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 13:40:06', '2023-02-09 13:40:06'),
(18, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 13:40:12', '2023-02-09 13:40:12'),
(19, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 13:40:24', '2023-02-09 13:40:24'),
(20, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 13:40:28', '2023-02-09 13:40:28'),
(21, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 13:43:55', '2023-02-09 13:43:55'),
(22, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 13:44:06', '2023-02-09 13:44:06'),
(23, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 13:46:32', '2023-02-09 13:46:32'),
(24, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 13:46:36', '2023-02-09 13:46:36'),
(25, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 14:02:47', '2023-02-09 14:02:47'),
(26, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 14:02:50', '2023-02-09 14:02:50'),
(27, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 14:18:08', '2023-02-09 14:18:08'),
(28, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 14:18:12', '2023-02-09 14:18:12'),
(29, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 14:22:48', '2023-02-09 14:22:48'),
(30, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 14:22:52', '2023-02-09 14:22:52'),
(31, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 14:24:30', '2023-02-09 14:24:30'),
(32, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-09 14:24:33', '2023-02-09 14:24:33'),
(33, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-09 14:24:53', '2023-02-09 14:24:53'),
(34, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 01:41:34', '2023-02-10 01:41:34'),
(35, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 01:41:42', '2023-02-10 01:41:42'),
(36, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 01:41:47', '2023-02-10 01:41:47'),
(37, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 01:41:55', '2023-02-10 01:41:55'),
(38, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 01:42:01', '2023-02-10 01:42:01'),
(39, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 01:59:58', '2023-02-10 01:59:58'),
(40, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 02:00:02', '2023-02-10 02:00:02'),
(41, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 02:01:19', '2023-02-10 02:01:19'),
(42, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 02:01:23', '2023-02-10 02:01:23'),
(43, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 02:25:58', '2023-02-10 02:25:58'),
(44, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-10 02:26:02', '2023-02-10 02:26:02'),
(45, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-10 03:54:16', '2023-02-10 03:54:16'),
(46, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-13 13:02:16', '2023-02-13 13:02:16'),
(47, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-13 13:19:39', '2023-02-13 13:19:39'),
(48, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 14:52:40', '2023-02-15 14:52:40'),
(49, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 14:52:53', '2023-02-15 14:52:53'),
(50, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 14:53:46', '2023-02-15 14:53:46'),
(51, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 14:55:23', '2023-02-15 14:55:23'),
(52, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 14:55:28', '2023-02-15 14:55:28'),
(53, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:05:59', '2023-02-15 15:05:59'),
(54, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:06:08', '2023-02-15 15:06:08'),
(55, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:07:21', '2023-02-15 15:07:21'),
(56, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:07:27', '2023-02-15 15:07:27'),
(57, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:08:01', '2023-02-15 15:08:01'),
(58, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:08:07', '2023-02-15 15:08:07'),
(59, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:08:46', '2023-02-15 15:08:46'),
(60, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:08:51', '2023-02-15 15:08:51'),
(61, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:09:19', '2023-02-15 15:09:19'),
(62, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:09:24', '2023-02-15 15:09:24'),
(63, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:10:12', '2023-02-15 15:10:12'),
(64, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:11:13', '2023-02-15 15:11:13'),
(65, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:11:58', '2023-02-15 15:11:58'),
(66, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:18:38', '2023-02-15 15:18:38'),
(67, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:22:59', '2023-02-15 15:22:59'),
(68, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:23:04', '2023-02-15 15:23:04'),
(69, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:24:15', '2023-02-15 15:24:15'),
(70, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:24:20', '2023-02-15 15:24:20'),
(71, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:28:13', '2023-02-15 15:28:13'),
(72, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:28:19', '2023-02-15 15:28:19'),
(73, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:30:53', '2023-02-15 15:30:53'),
(74, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:30:58', '2023-02-15 15:30:58'),
(75, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:31:18', '2023-02-15 15:31:18'),
(76, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:31:24', '2023-02-15 15:31:24'),
(77, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:32:10', '2023-02-15 15:32:10'),
(78, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:32:16', '2023-02-15 15:32:16'),
(79, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:32:32', '2023-02-15 15:32:32'),
(80, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:32:37', '2023-02-15 15:32:37'),
(81, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:32:49', '2023-02-15 15:32:49'),
(82, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:32:54', '2023-02-15 15:32:54'),
(83, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:35:10', '2023-02-15 15:35:10'),
(84, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:35:15', '2023-02-15 15:35:15'),
(85, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:36:04', '2023-02-15 15:36:04'),
(86, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:36:09', '2023-02-15 15:36:09'),
(87, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:36:44', '2023-02-15 15:36:44'),
(88, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:36:49', '2023-02-15 15:36:49'),
(89, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:37:04', '2023-02-15 15:37:04'),
(90, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:37:08', '2023-02-15 15:37:08'),
(91, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:40:47', '2023-02-15 15:40:47'),
(92, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:40:52', '2023-02-15 15:40:52'),
(93, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:41:30', '2023-02-15 15:41:30'),
(94, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:41:34', '2023-02-15 15:41:34'),
(95, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:42:29', '2023-02-15 15:42:29'),
(96, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:42:34', '2023-02-15 15:42:34'),
(97, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:44:28', '2023-02-15 15:44:28'),
(98, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:47:24', '2023-02-15 15:47:24'),
(99, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:47:29', '2023-02-15 15:47:29'),
(100, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 15:47:59', '2023-02-15 15:47:59'),
(101, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:48:04', '2023-02-15 15:48:04'),
(102, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 15:52:21', '2023-02-15 15:52:21'),
(103, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 16:01:49', '2023-02-15 16:01:49'),
(104, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 16:13:12', '2023-02-15 16:13:12'),
(105, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 16:13:16', '2023-02-15 16:13:16'),
(106, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-15 16:20:45', '2023-02-15 16:20:45'),
(107, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-15 16:20:49', '2023-02-15 16:20:49'),
(108, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '127.0.0.1', '2023-02-15 16:26:15', '2023-02-15 16:26:15'),
(109, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-16 03:00:42', '2023-02-16 03:00:42'),
(110, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-16 03:14:00', '2023-02-16 03:14:00'),
(111, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-16 03:40:34', '2023-02-16 03:40:34'),
(112, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-16 03:44:27', '2023-02-16 03:44:27'),
(113, 'Administrator Logged in', '1', '::1', '2023-02-23 19:50:07', '2023-02-23 19:50:07'),
(114, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-26 23:46:59', '2023-02-26 23:46:59'),
(115, 'Administrator Logged in', '1', '::1', '2023-02-26 23:48:19', '2023-02-26 23:48:19'),
(116, 'Company Settings Updated by User: #1', '1', '::1', '2023-02-27 00:02:36', '2023-02-27 00:02:36'),
(117, 'Role #1 Updated by User: #1', '1', '::1', '2023-02-27 00:04:12', '2023-02-27 00:04:12'),
(118, 'User: Administrator Logged Out', '1', '::1', '2023-02-27 00:04:19', '2023-02-27 00:04:19'),
(119, 'Administrator Logged in', '1', '::1', '2023-02-27 00:04:25', '2023-02-27 00:04:25'),
(120, 'Role #1 Updated by User: #1', '1', '::1', '2023-02-27 00:04:43', '2023-02-27 00:04:43'),
(121, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-27 22:29:27', '2023-02-27 22:29:27'),
(122, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-27 23:28:32', '2023-02-27 23:28:32'),
(123, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-27 23:28:37', '2023-02-27 23:28:37'),
(124, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-02-27 23:30:44', '2023-02-27 23:30:44'),
(125, 'Administrator Logged in', '1', '127.0.0.1', '2023-02-27 23:30:47', '2023-02-27 23:30:47'),
(126, 'Nuevo #Empleados creado por el usuario:Administrator', '1', '127.0.0.1', '2023-02-27 23:33:27', '2023-02-27 23:33:27'),
(127, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 00:59:57', '2023-03-01 00:59:57'),
(128, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 01:17:37', '2023-03-01 01:17:37'),
(129, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 01:17:41', '2023-03-01 01:17:41'),
(130, 'Nuevo #Proyectos creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 01:20:43', '2023-03-01 01:20:43'),
(131, 'Nuevo #Proyectos creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 01:22:21', '2023-03-01 01:22:21'),
(132, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 01:30:37', '2023-03-01 01:30:37'),
(133, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 01:30:43', '2023-03-01 01:30:43'),
(134, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 01:34:23', '2023-03-01 01:34:23'),
(135, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 01:34:27', '2023-03-01 01:34:27'),
(136, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 02:51:17', '2023-03-01 02:51:17'),
(137, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:34:19', '2023-03-01 03:34:19'),
(138, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:34:33', '2023-03-01 03:34:33'),
(139, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:36:14', '2023-03-01 03:36:14'),
(140, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:44:42', '2023-03-01 03:44:42'),
(141, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:44:52', '2023-03-01 03:44:52'),
(142, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:52:53', '2023-03-01 03:52:53'),
(143, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 03:53:46', '2023-03-01 03:53:46'),
(144, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 04:02:24', '2023-03-01 04:02:24'),
(145, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 04:02:34', '2023-03-01 04:02:34'),
(146, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 04:05:24', '2023-03-01 04:05:24'),
(147, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 14:21:26', '2023-03-01 14:21:26'),
(148, 'Nuevo #Empleados creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 14:41:08', '2023-03-01 14:41:08'),
(149, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 14:46:15', '2023-03-01 14:46:15'),
(150, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 19:58:03', '2023-03-01 19:58:03'),
(151, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 20:28:07', '2023-03-01 20:28:07'),
(152, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 20:35:34', '2023-03-01 20:35:34'),
(153, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 20:37:19', '2023-03-01 20:37:19'),
(154, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 20:37:45', '2023-03-01 20:37:45'),
(155, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:01:24', '2023-03-01 21:01:24'),
(156, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:04:21', '2023-03-01 21:04:21'),
(157, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:09:20', '2023-03-01 21:09:20'),
(158, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:09:34', '2023-03-01 21:09:34'),
(159, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:09:38', '2023-03-01 21:09:38'),
(160, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:09:42', '2023-03-01 21:09:42'),
(161, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:10:50', '2023-03-01 21:10:50'),
(162, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:11:02', '2023-03-01 21:11:02'),
(163, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:11:20', '2023-03-01 21:11:20'),
(164, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:12:30', '2023-03-01 21:12:30'),
(165, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:12:36', '2023-03-01 21:12:36'),
(166, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:16:55', '2023-03-01 21:16:55'),
(167, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:17:00', '2023-03-01 21:17:00'),
(168, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-01 21:18:19', '2023-03-01 21:18:19'),
(169, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 21:24:33', '2023-03-01 21:24:33'),
(170, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 21:24:37', '2023-03-01 21:24:37'),
(171, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-01 21:25:34', '2023-03-01 21:25:34'),
(172, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-01 21:27:14', '2023-03-01 21:27:14'),
(173, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-02 03:05:49', '2023-03-02 03:05:49'),
(174, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-02 03:15:34', '2023-03-02 03:15:34'),
(175, '#Cadena_custodia #2030201 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-02 03:15:40', '2023-03-02 03:15:40'),
(176, '#Cadena_custodia #20230200 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-02 03:17:07', '2023-03-02 03:17:07'),
(177, 'Nuevo #Empleados creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-02 03:19:27', '2023-03-02 03:19:27'),
(178, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 01:47:56', '2023-03-03 01:47:56'),
(179, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 01:58:27', '2023-03-03 01:58:27'),
(180, '#Cadena #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 02:02:05', '2023-03-03 02:02:05'),
(181, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 02:02:21', '2023-03-03 02:02:21'),
(182, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 02:03:04', '2023-03-03 02:03:04'),
(183, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-03 02:05:20', '2023-03-03 02:05:20'),
(184, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 02:14:34', '2023-03-03 02:14:34'),
(185, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-03 02:17:28', '2023-03-03 02:17:28'),
(186, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 02:18:46', '2023-03-03 02:18:46'),
(187, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 17:20:32', '2023-03-03 17:20:32'),
(188, 'Administrator Logged in', '1', '::1', '2023-03-03 17:28:16', '2023-03-03 17:28:16'),
(189, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-03 17:28:30', '2023-03-03 17:28:30'),
(190, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 17:28:35', '2023-03-03 17:28:35'),
(191, 'Company Settings Updated by User: #1', '1', '127.0.0.1', '2023-03-03 17:46:11', '2023-03-03 17:46:11'),
(192, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-03 20:36:27', '2023-03-03 20:36:27'),
(193, 'Administrator Logged in', '1', '::1', '2023-03-03 20:45:38', '2023-03-03 20:45:38'),
(194, 'User: Administrator Logged Out', '1', '::1', '2023-03-03 21:09:12', '2023-03-03 21:09:12'),
(195, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-03 21:09:26', '2023-03-03 21:09:26'),
(196, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 21:56:57', '2023-03-03 21:56:57'),
(197, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 21:58:42', '2023-03-03 21:58:42'),
(198, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:00:17', '2023-03-03 22:00:17'),
(199, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:01:54', '2023-03-03 22:01:54'),
(200, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:05:18', '2023-03-03 22:05:18'),
(201, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:06:30', '2023-03-03 22:06:30'),
(202, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:07:03', '2023-03-03 22:07:03'),
(203, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:08:12', '2023-03-03 22:08:12'),
(204, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:08:49', '2023-03-03 22:08:49'),
(205, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:10:56', '2023-03-03 22:10:56'),
(206, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:11:41', '2023-03-03 22:11:41'),
(207, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:12:46', '2023-03-03 22:12:46'),
(208, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:12:58', '2023-03-03 22:12:58'),
(209, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:14:48', '2023-03-03 22:14:48'),
(210, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:15:26', '2023-03-03 22:15:26'),
(211, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:16:35', '2023-03-03 22:16:35'),
(212, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:17:00', '2023-03-03 22:17:00'),
(213, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:20:53', '2023-03-03 22:20:53'),
(214, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:21:17', '2023-03-03 22:21:17'),
(215, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:22:27', '2023-03-03 22:22:27'),
(216, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:25:16', '2023-03-03 22:25:16'),
(217, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:26:45', '2023-03-03 22:26:45'),
(218, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:27:21', '2023-03-03 22:27:21'),
(219, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:32:16', '2023-03-03 22:32:16'),
(220, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:34:07', '2023-03-03 22:34:07'),
(221, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:34:41', '2023-03-03 22:34:41'),
(222, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:37:35', '2023-03-03 22:37:35'),
(223, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:50:17', '2023-03-03 22:50:17'),
(224, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:50:46', '2023-03-03 22:50:46'),
(225, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:50:50', '2023-03-03 22:50:50'),
(226, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:51:47', '2023-03-03 22:51:47'),
(227, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:51:51', '2023-03-03 22:51:51'),
(228, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:52:10', '2023-03-03 22:52:10'),
(229, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:52:13', '2023-03-03 22:52:13'),
(230, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:53:04', '2023-03-03 22:53:04'),
(231, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:53:11', '2023-03-03 22:53:11'),
(232, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:55:23', '2023-03-03 22:55:23'),
(233, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:55:26', '2023-03-03 22:55:26'),
(234, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:58:11', '2023-03-03 22:58:11'),
(235, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:58:14', '2023-03-03 22:58:14'),
(236, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:58:53', '2023-03-03 22:58:53'),
(237, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:58:56', '2023-03-03 22:58:56'),
(238, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:59:17', '2023-03-03 22:59:17'),
(239, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:59:20', '2023-03-03 22:59:20'),
(240, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 22:59:47', '2023-03-03 22:59:47'),
(241, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:25:18', '2023-03-03 23:25:18'),
(242, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:25:34', '2023-03-03 23:25:34'),
(243, '#Cadena_custodia #2023030002 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:38:38', '2023-03-03 23:38:38'),
(244, '#Cadena_custodia #2023030002 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:41:32', '2023-03-03 23:41:32'),
(245, '#Cadena_custodia #2023030002 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:41:46', '2023-03-03 23:41:46'),
(246, '#Cadena_custodia #2023030002 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:41:52', '2023-03-03 23:41:52'),
(247, '#Cadena_custodia #2023030001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-03 23:42:03', '2023-03-03 23:42:03'),
(248, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-03 23:44:40', '2023-03-03 23:44:40'),
(249, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-04 03:07:49', '2023-03-04 03:07:49'),
(250, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-04 03:09:08', '2023-03-04 03:09:08'),
(251, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-04 03:09:56', '2023-03-04 03:09:56'),
(252, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-05 21:07:12', '2023-03-05 21:07:12'),
(253, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:25:15', '2023-03-05 21:25:15'),
(254, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:25:19', '2023-03-05 21:25:19'),
(255, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:25:23', '2023-03-05 21:25:23'),
(256, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:29:30', '2023-03-05 21:29:30'),
(257, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:34:16', '2023-03-05 21:34:16'),
(258, '#Cadena_custodia #2023020000 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:35:21', '2023-03-05 21:35:21'),
(259, '#Cadena_custodia #2023020001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:40:41', '2023-03-05 21:40:41'),
(260, '#Cadena_custodia #2023030001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:40:46', '2023-03-05 21:40:46'),
(261, '#Cadena_custodia #2023030003 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:40:51', '2023-03-05 21:40:51'),
(262, '#Cadena_custodia #2023030001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 21:40:55', '2023-03-05 21:40:55'),
(263, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:26:05', '2023-03-05 22:26:05'),
(264, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:27:44', '2023-03-05 22:27:44'),
(265, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:28:52', '2023-03-05 22:28:52'),
(266, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:29:29', '2023-03-05 22:29:29'),
(267, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:29:59', '2023-03-05 22:29:59'),
(268, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:34:00', '2023-03-05 22:34:00'),
(269, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 22:35:20', '2023-03-05 22:35:20'),
(270, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-05 22:53:06', '2023-03-05 22:53:06'),
(271, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-05 22:53:09', '2023-03-05 22:53:09'),
(272, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-05 22:56:01', '2023-03-05 22:56:01'),
(273, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-05 22:56:05', '2023-03-05 22:56:05'),
(274, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 23:08:19', '2023-03-05 23:08:19'),
(275, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 23:11:40', '2023-03-05 23:11:40'),
(276, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 23:11:55', '2023-03-05 23:11:55'),
(277, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-05 23:44:51', '2023-03-05 23:44:51'),
(278, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:01:36', '2023-03-06 00:01:36'),
(279, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:02:20', '2023-03-06 00:02:20'),
(280, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:04:43', '2023-03-06 00:04:43'),
(281, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:04:56', '2023-03-06 00:04:56'),
(282, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:07:48', '2023-03-06 00:07:48'),
(283, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:09:19', '2023-03-06 00:09:19'),
(284, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:11:51', '2023-03-06 00:11:51'),
(285, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:12:06', '2023-03-06 00:12:06'),
(286, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:14:26', '2023-03-06 00:14:26'),
(287, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:14:31', '2023-03-06 00:14:31'),
(288, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:15:05', '2023-03-06 00:15:05'),
(289, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:15:10', '2023-03-06 00:15:10'),
(290, 'Nuevo #Cadena de Custodia creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:52:29', '2023-03-06 00:52:29'),
(291, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:53:08', '2023-03-06 00:53:08'),
(292, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:53:38', '2023-03-06 00:53:38'),
(293, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:56:58', '2023-03-06 00:56:58'),
(294, '#muestra #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:57:10', '2023-03-06 00:57:10'),
(295, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:57:34', '2023-03-06 00:57:34'),
(296, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 00:59:21', '2023-03-06 00:59:21'),
(297, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:00:18', '2023-03-06 01:00:18'),
(298, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:00:56', '2023-03-06 01:00:56'),
(299, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:01:04', '2023-03-06 01:01:04'),
(300, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:01:22', '2023-03-06 01:01:22'),
(301, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:08:25', '2023-03-06 01:08:25'),
(302, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-06 01:12:08', '2023-03-06 01:12:08'),
(303, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-06 01:19:06', '2023-03-06 01:19:06'),
(304, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-06 01:23:23', '2023-03-06 01:23:23'),
(305, 'Administrator Logged in', '1', '::1', '2023-03-06 01:24:08', '2023-03-06 01:24:08'),
(306, 'Administrator Logged in', '1', '::1', '2023-03-09 02:33:17', '2023-03-09 02:33:17'),
(307, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 02:43:32', '2023-03-09 02:43:32'),
(308, 'Administrator Logged in', '1', '::1', '2023-03-09 02:43:37', '2023-03-09 02:43:37'),
(309, 'Administrator Logged in', '1', '::1', '2023-03-09 02:50:26', '2023-03-09 02:50:26'),
(310, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '::1', '2023-03-09 03:03:52', '2023-03-09 03:03:52'),
(311, '#muestra #1 creada por el usuario:Administrator', '1', '::1', '2023-03-09 03:04:42', '2023-03-09 03:04:42'),
(312, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '::1', '2023-03-09 03:04:51', '2023-03-09 03:04:51'),
(313, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '::1', '2023-03-09 03:19:04', '2023-03-09 03:19:04'),
(314, '#Cadena_custodia #2023030002 creada por el usuario:Administrator', '1', '::1', '2023-03-09 03:59:45', '2023-03-09 03:59:45'),
(315, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 04:02:47', '2023-03-09 04:02:47'),
(316, 'Administrator Logged in', '1', '::1', '2023-03-09 04:03:03', '2023-03-09 04:03:03'),
(317, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 04:03:41', '2023-03-09 04:03:41'),
(318, 'Administrator Logged in', '1', '::1', '2023-03-09 04:03:55', '2023-03-09 04:03:55'),
(319, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 04:12:10', '2023-03-09 04:12:10'),
(320, 'Administrator Logged in', '1', '::1', '2023-03-09 04:12:14', '2023-03-09 04:12:14'),
(321, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:13:25', '2023-03-09 04:13:25'),
(322, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:13:33', '2023-03-09 04:13:33'),
(323, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:14:37', '2023-03-09 04:14:37'),
(324, 'Nuevo #Clientes creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:14:49', '2023-03-09 04:14:49'),
(325, 'Nuevo #Empleados creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:16:07', '2023-03-09 04:16:07'),
(326, 'Nuevo #Empleados creado por el usuario:Administrator', '1', '::1', '2023-03-09 04:16:15', '2023-03-09 04:16:15'),
(327, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 04:23:23', '2023-03-09 04:23:23'),
(328, 'Administrator Logged in', '1', '::1', '2023-03-09 04:23:26', '2023-03-09 04:23:26'),
(329, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 04:25:06', '2023-03-09 04:25:06'),
(330, 'Administrator Logged in', '1', '::1', '2023-03-09 04:25:21', '2023-03-09 04:25:21'),
(331, '#muestra #1 creada por el usuario:Administrator', '1', '::1', '2023-03-09 04:54:22', '2023-03-09 04:54:22'),
(332, 'Nuevo #Muestra creado por el usuario:Administrator', '1', '::1', '2023-03-09 05:21:22', '2023-03-09 05:21:22'),
(333, 'Administrator Logged in', '1', '::1', '2023-03-09 23:03:26', '2023-03-09 23:03:26'),
(334, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 23:05:48', '2023-03-09 23:05:48'),
(335, 'Administrator Logged in', '1', '::1', '2023-03-09 23:13:42', '2023-03-09 23:13:42'),
(336, 'User: Administrator Logged Out', '1', '::1', '2023-03-09 23:14:20', '2023-03-09 23:14:20'),
(337, 'Administrator Logged in', '1', '::1', '2023-03-09 23:21:53', '2023-03-09 23:21:53'),
(338, 'Administrator Logged in', '1', '::1', '2023-03-10 14:48:53', '2023-03-10 14:48:53'),
(339, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-11 20:17:39', '2023-03-11 20:17:39'),
(340, '#Cadena_custodia #2023030004 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-11 20:19:38', '2023-03-11 20:19:38'),
(341, '#Cadena_custodia #2023030001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-11 20:19:46', '2023-03-11 20:19:46'),
(342, '#Cadena_custodia #2023020001 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-11 20:20:40', '2023-03-11 20:20:40'),
(343, 'Administrator Logged in', '1', '::1', '2023-03-12 05:02:24', '2023-03-12 05:02:24'),
(344, '#Cadena_custodia #2023030004 creada por el usuario:Administrator', '1', '::1', '2023-03-12 05:11:07', '2023-03-12 05:11:07'),
(345, 'User: Administrator Logged Out', '1', '::1', '2023-03-12 05:20:37', '2023-03-12 05:20:37'),
(346, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-20 20:06:06', '2023-03-20 20:06:06'),
(347, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-20 20:09:02', '2023-03-20 20:09:02'),
(348, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-20 20:09:07', '2023-03-20 20:09:07'),
(349, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-20 20:16:16', '2023-03-20 20:16:16'),
(350, 'User: Administrator Logged Out', '1', '127.0.0.1', '2023-03-20 20:52:54', '2023-03-20 20:52:54'),
(351, 'Administrator Logged in', '1', '127.0.0.1', '2023-03-20 20:52:57', '2023-03-20 20:52:57'),
(352, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 20:59:00', '2023-03-20 20:59:00'),
(353, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 20:59:33', '2023-03-20 20:59:33'),
(354, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 21:16:13', '2023-03-20 21:16:13'),
(355, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 21:31:55', '2023-03-20 21:31:55'),
(356, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 21:46:54', '2023-03-20 21:46:54'),
(357, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 21:58:44', '2023-03-20 21:58:44'),
(358, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 22:01:50', '2023-03-20 22:01:50'),
(359, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 22:03:27', '2023-03-20 22:03:27'),
(360, '#Analisis #1 creada por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 22:03:43', '2023-03-20 22:03:43'),
(361, 'Nuevo #Analisis creado por el usuario:Administrator', '1', '127.0.0.1', '2023-03-20 22:03:55', '2023-03-20 22:03:55'),
(362, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-07 15:34:42', '2024-03-07 15:34:42'),
(363, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-07 15:37:45', '2024-03-07 15:37:45'),
(364, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-07 15:38:44', '2024-03-07 15:38:44'),
(365, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-07 15:39:19', '2024-03-07 15:39:19'),
(366, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-07 15:39:26', '2024-03-07 15:39:26'),
(367, 'Nuevo #Menu creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-07 15:46:18', '2024-03-07 15:46:18'),
(368, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-07 15:48:04', '2024-03-07 15:48:04'),
(369, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-07 15:49:24', '2024-03-07 15:49:24'),
(370, 'Role #1 Updated by User: #1', '1', '179.6.48.97', '2024-03-07 15:49:39', '2024-03-07 15:49:39'),
(371, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-07 15:49:45', '2024-03-07 15:49:45'),
(372, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-07 15:49:48', '2024-03-07 15:49:48'),
(373, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-07 15:50:52', '2024-03-07 15:50:52'),
(374, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-08 13:30:22', '2024-03-08 13:30:22'),
(375, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-08 13:30:48', '2024-03-08 13:30:48'),
(376, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-08 13:31:28', '2024-03-08 13:31:28'),
(377, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-08 13:41:56', '2024-03-08 13:41:56'),
(378, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-08 13:44:23', '2024-03-08 13:44:23'),
(379, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-08 18:51:45', '2024-03-08 18:51:45'),
(380, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-08 19:01:50', '2024-03-08 19:01:50'),
(381, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-08 19:30:55', '2024-03-08 19:30:55'),
(382, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-08 19:49:56', '2024-03-08 19:49:56'),
(383, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 01:19:54', '2024-03-09 01:19:54'),
(384, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:20:39', '2024-03-09 01:20:39'),
(385, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:21:13', '2024-03-09 01:21:13'),
(386, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:21:45', '2024-03-09 01:21:45'),
(387, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:22:44', '2024-03-09 01:22:44'),
(388, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:23:08', '2024-03-09 01:23:08'),
(389, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:24:30', '2024-03-09 01:24:30'),
(390, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:24:51', '2024-03-09 01:24:51'),
(391, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:25:09', '2024-03-09 01:25:09'),
(392, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:26:31', '2024-03-09 01:26:31'),
(393, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:26:57', '2024-03-09 01:26:57'),
(394, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:27:28', '2024-03-09 01:27:28'),
(395, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:27:57', '2024-03-09 01:27:57'),
(396, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-09 01:28:41', '2024-03-09 01:28:41'),
(397, 'User: Administrator Logged Out', '1', '190.239.215.228', '2024-03-09 01:31:36', '2024-03-09 01:31:36'),
(398, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 03:20:56', '2024-03-09 03:20:56'),
(399, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 03:26:02', '2024-03-09 03:26:02'),
(400, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 11:06:25', '2024-03-09 11:06:25'),
(401, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 12:03:31', '2024-03-09 12:03:31'),
(402, 'User: Administrator Logged Out', '1', '190.239.215.228', '2024-03-09 13:46:33', '2024-03-09 13:46:33'),
(403, 'Administrator Logged in', '1', '2800:200:f0c0:a16:a453:b40:b19b:94a0', '2024-03-09 13:47:41', '2024-03-09 13:47:41'),
(404, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 14:52:31', '2024-03-09 14:52:31'),
(405, 'Role #1 Updated by User: #1', '1', '190.239.215.228', '2024-03-09 14:54:02', '2024-03-09 14:54:02'),
(406, 'User: Administrator Logged Out', '1', '190.239.215.228', '2024-03-09 14:54:06', '2024-03-09 14:54:06'),
(407, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-09 14:54:12', '2024-03-09 14:54:12'),
(408, 'Administrator Logged in', '1', '132.184.130.50', '2024-03-09 17:56:39', '2024-03-09 17:56:39'),
(409, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.130.50', '2024-03-09 19:38:25', '2024-03-09 19:38:25'),
(410, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.130.50', '2024-03-09 19:49:47', '2024-03-09 19:49:47'),
(411, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 00:25:24', '2024-03-10 00:25:24'),
(412, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.157.128.35', '2024-03-10 01:57:30', '2024-03-10 01:57:30'),
(413, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.157.128.35', '2024-03-10 01:57:42', '2024-03-10 01:57:42'),
(414, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.157.128.35', '2024-03-10 01:57:52', '2024-03-10 01:57:52'),
(415, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 05:22:38', '2024-03-10 05:22:38'),
(416, 'User: Administrator Logged Out', '1', '190.239.215.228', '2024-03-10 06:10:02', '2024-03-10 06:10:02'),
(417, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 06:10:13', '2024-03-10 06:10:13'),
(418, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 12:34:19', '2024-03-10 12:34:19'),
(419, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 15:51:03', '2024-03-10 15:51:03'),
(420, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-10 19:48:38', '2024-03-10 19:48:38'),
(421, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-10 19:48:58', '2024-03-10 19:48:58'),
(422, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-11 11:30:23', '2024-03-11 11:30:23'),
(423, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-11 12:07:56', '2024-03-11 12:07:56'),
(424, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-11 13:29:12', '2024-03-11 13:29:12'),
(425, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-11 13:55:13', '2024-03-11 13:55:13'),
(426, 'Company Settings Updated by User: #1', '1', '179.6.48.97', '2024-03-11 13:55:51', '2024-03-11 13:55:51'),
(427, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-12 20:44:25', '2024-03-12 20:44:25'),
(428, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-12 20:46:00', '2024-03-12 20:46:00'),
(429, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-12 20:46:12', '2024-03-12 20:46:12'),
(430, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-12 20:50:21', '2024-03-12 20:50:21'),
(431, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-12 20:52:19', '2024-03-12 20:52:19'),
(432, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-12 20:55:49', '2024-03-12 20:55:49'),
(433, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-12 21:00:49', '2024-03-12 21:00:49'),
(434, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-13 12:10:19', '2024-03-13 12:10:19'),
(435, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-14 02:51:12', '2024-03-14 02:51:12'),
(436, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-14 02:51:37', '2024-03-14 02:51:37'),
(437, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-15 13:36:19', '2024-03-15 13:36:19'),
(438, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-15 13:36:56', '2024-03-15 13:36:56'),
(439, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-15 13:37:27', '2024-03-15 13:37:27'),
(440, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-16 01:32:01', '2024-03-16 01:32:01'),
(441, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-16 01:50:27', '2024-03-16 01:50:27'),
(442, 'Administrator Logged in', '1', '132.157.131.122', '2024-03-17 01:29:19', '2024-03-17 01:29:19'),
(443, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-17 14:57:49', '2024-03-17 14:57:49'),
(444, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-17 14:59:17', '2024-03-17 14:59:17'),
(445, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-17 14:59:43', '2024-03-17 14:59:43'),
(446, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-19 21:48:07', '2024-03-19 21:48:07'),
(447, 'Administrator Logged in', '1', '2800:200:f0c0:a16:1105:35f7:6240:7c75', '2024-03-20 01:14:59', '2024-03-20 01:14:59'),
(448, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '2800:200:f0c0:a16:1105:35f7:6240:7c75', '2024-03-20 01:15:23', '2024-03-20 01:15:23'),
(449, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '2800:200:f0c0:a16:1105:35f7:6240:7c75', '2024-03-20 01:15:40', '2024-03-20 01:15:40'),
(450, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-21 15:42:12', '2024-03-21 15:42:12');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES
(451, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-21 15:45:09', '2024-03-21 15:45:09'),
(452, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-22 03:05:55', '2024-03-22 03:05:55'),
(453, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-22 03:07:11', '2024-03-22 03:07:11'),
(454, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-23 21:26:31', '2024-03-23 21:26:31'),
(455, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-23 21:27:02', '2024-03-23 21:27:02'),
(456, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-25 02:43:15', '2024-03-25 02:43:15'),
(457, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-25 02:43:55', '2024-03-25 02:43:55'),
(458, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-25 02:44:17', '2024-03-25 02:44:17'),
(459, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-25 02:44:32', '2024-03-25 02:44:32'),
(460, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-25 15:37:32', '2024-03-25 15:37:32'),
(461, 'Nuevo #Menu creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:38:54', '2024-03-25 15:38:54'),
(462, 'Role #1 Updated by User: #1', '1', '179.6.48.97', '2024-03-25 15:39:14', '2024-03-25 15:39:14'),
(463, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-25 15:39:18', '2024-03-25 15:39:18'),
(464, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-25 15:39:23', '2024-03-25 15:39:23'),
(465, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:40:02', '2024-03-25 15:40:02'),
(466, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:40:32', '2024-03-25 15:40:32'),
(467, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:40:46', '2024-03-25 15:40:46'),
(468, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:41:28', '2024-03-25 15:41:28'),
(469, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:43:13', '2024-03-25 15:43:13'),
(470, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:46:16', '2024-03-25 15:46:16'),
(471, 'Nuevo #Categorias creado por el usuario:Administrator', '1', '179.6.48.97', '2024-03-25 15:47:04', '2024-03-25 15:47:04'),
(472, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-25 16:04:51', '2024-03-25 16:04:51'),
(473, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-25 16:53:52', '2024-03-25 16:53:52'),
(474, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-25 22:31:42', '2024-03-25 22:31:42'),
(475, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-26 11:23:25', '2024-03-26 11:23:25'),
(476, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-26 11:24:20', '2024-03-26 11:24:20'),
(477, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-26 12:11:35', '2024-03-26 12:11:35'),
(478, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-26 17:58:20', '2024-03-26 17:58:20'),
(479, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 17:58:24', '2024-03-26 17:58:24'),
(480, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:03:10', '2024-03-26 18:03:10'),
(481, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:05:04', '2024-03-26 18:05:04'),
(482, 'Administrator Logged in', '1', '179.6.48.97', '2024-03-26 18:06:21', '2024-03-26 18:06:21'),
(483, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:06:43', '2024-03-26 18:06:43'),
(484, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:06:47', '2024-03-26 18:06:47'),
(485, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:09:40', '2024-03-26 18:09:40'),
(486, 'User #1 change mode of interface:Administrator', '1', '179.6.48.97', '2024-03-26 18:09:44', '2024-03-26 18:09:44'),
(487, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-03-26 18:09:52', '2024-03-26 18:09:52'),
(488, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-27 02:54:09', '2024-03-27 02:54:09'),
(489, 'User #1 change mode of interface:Administrator', '1', '190.239.215.228', '2024-03-27 02:54:15', '2024-03-27 02:54:15'),
(490, 'User #1 change mode of interface:Administrator', '1', '190.239.215.228', '2024-03-27 02:54:19', '2024-03-27 02:54:19'),
(491, 'User #1 change mode of interface:Administrator', '1', '190.239.215.228', '2024-03-27 03:09:36', '2024-03-27 03:09:36'),
(492, 'User #1 change mode of interface:Administrator', '1', '190.239.215.228', '2024-03-27 03:09:40', '2024-03-27 03:09:40'),
(493, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-27 22:56:06', '2024-03-27 22:56:06'),
(494, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-27 22:56:25', '2024-03-27 22:56:25'),
(495, 'Administrator Logged in', '1', '132.184.128.158', '2024-03-29 12:02:53', '2024-03-29 12:02:53'),
(496, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.128.158', '2024-03-29 12:04:05', '2024-03-29 12:04:05'),
(497, 'Administrator Logged in', '1', '132.184.131.160', '2024-03-30 15:20:21', '2024-03-30 15:20:21'),
(498, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.131.160', '2024-03-30 15:21:02', '2024-03-30 15:21:02'),
(499, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.131.160', '2024-03-30 15:21:24', '2024-03-30 15:21:24'),
(500, 'User #1 change mode of interface:Administrator', '1', '132.184.131.160', '2024-03-30 15:23:27', '2024-03-30 15:23:27'),
(501, 'User #1 change mode of interface:Administrator', '1', '132.184.131.160', '2024-03-30 15:23:29', '2024-03-30 15:23:29'),
(502, 'Administrator Logged in', '1', '132.184.131.160', '2024-03-30 19:15:09', '2024-03-30 19:15:09'),
(503, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.131.160', '2024-03-30 19:15:36', '2024-03-30 19:15:36'),
(504, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.184.131.160', '2024-03-30 19:15:51', '2024-03-30 19:15:51'),
(505, 'Administrator Logged in', '1', '190.239.215.228', '2024-03-31 18:52:02', '2024-03-31 18:52:02'),
(506, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-03-31 18:53:09', '2024-03-31 18:53:09'),
(507, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-01 02:28:35', '2024-04-01 02:28:35'),
(508, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-01 12:40:22', '2024-04-01 12:40:22'),
(509, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-01 12:46:10', '2024-04-01 12:46:10'),
(510, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-01 12:46:52', '2024-04-01 12:46:52'),
(511, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-01 12:47:42', '2024-04-01 12:47:42'),
(512, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-01 12:48:05', '2024-04-01 12:48:05'),
(513, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-02 11:16:45', '2024-04-02 11:16:45'),
(514, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-02 11:17:39', '2024-04-02 11:17:39'),
(515, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-02 11:18:22', '2024-04-02 11:18:22'),
(516, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-02 11:18:40', '2024-04-02 11:18:40'),
(517, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-02 15:36:22', '2024-04-02 15:36:22'),
(518, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-02 22:04:13', '2024-04-02 22:04:13'),
(519, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-05 19:15:53', '2024-04-05 19:15:53'),
(520, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-05 19:16:21', '2024-04-05 19:16:21'),
(521, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-05 19:16:46', '2024-04-05 19:16:46'),
(522, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-05 20:31:14', '2024-04-05 20:31:14'),
(523, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-05 20:31:56', '2024-04-05 20:31:56'),
(524, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-06 13:56:43', '2024-04-06 13:56:43'),
(525, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-06 16:03:53', '2024-04-06 16:03:53'),
(526, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-06 16:04:06', '2024-04-06 16:04:06'),
(527, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-06 18:39:20', '2024-04-06 18:39:20'),
(528, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-06 18:39:36', '2024-04-06 18:39:36'),
(529, 'Administrator Logged in', '1', '132.157.128.112', '2024-04-07 00:04:00', '2024-04-07 00:04:00'),
(530, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '132.157.128.112', '2024-04-07 00:04:31', '2024-04-07 00:04:31'),
(531, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-07 19:15:04', '2024-04-07 19:15:04'),
(532, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-07 19:15:36', '2024-04-07 19:15:36'),
(533, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-07 19:15:48', '2024-04-07 19:15:48'),
(534, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-08 12:37:45', '2024-04-08 12:37:45'),
(535, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-09 12:53:37', '2024-04-09 12:53:37'),
(536, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-09 12:54:21', '2024-04-09 12:54:21'),
(537, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-09 12:54:42', '2024-04-09 12:54:42'),
(538, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-09 18:51:00', '2024-04-09 18:51:00'),
(539, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-12 18:07:56', '2024-04-12 18:07:56'),
(540, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-12 18:08:22', '2024-04-12 18:08:22'),
(541, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-12 18:08:54', '2024-04-12 18:08:54'),
(542, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-12 18:09:07', '2024-04-12 18:09:07'),
(543, 'Administrator Logged in', '1', '132.184.128.24', '2024-04-13 03:59:50', '2024-04-13 03:59:50'),
(544, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-16 15:09:04', '2024-04-16 15:09:04'),
(545, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-16 15:09:57', '2024-04-16 15:09:57'),
(546, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-16 15:10:31', '2024-04-16 15:10:31'),
(547, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-18 16:19:49', '2024-04-18 16:19:49'),
(548, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-19 17:11:44', '2024-04-19 17:11:44'),
(549, 'Administrator Logged in', '1', '190.239.215.228', '2024-04-21 21:12:40', '2024-04-21 21:12:40'),
(550, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:18:17', '2024-04-21 21:18:17'),
(551, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:18:33', '2024-04-21 21:18:33'),
(552, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:19:36', '2024-04-21 21:19:36'),
(553, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:20:43', '2024-04-21 21:20:43'),
(554, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:21:20', '2024-04-21 21:21:20'),
(555, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-04-21 21:23:24', '2024-04-21 21:23:24'),
(556, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-22 20:27:35', '2024-04-22 20:27:35'),
(557, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-22 20:28:02', '2024-04-22 20:28:02'),
(558, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-23 19:02:21', '2024-04-23 19:02:21'),
(559, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-23 19:04:40', '2024-04-23 19:04:40'),
(560, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-24 18:24:19', '2024-04-24 18:24:19'),
(561, 'User: Administrator Logged Out', '1', '179.6.48.97', '2024-04-24 19:06:23', '2024-04-24 19:06:23'),
(562, 'Administrator Logged in', '1', '179.6.48.97', '2024-04-29 17:43:40', '2024-04-29 17:43:40'),
(563, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-29 17:44:07', '2024-04-29 17:44:07'),
(564, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-29 17:46:38', '2024-04-29 17:46:38'),
(565, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-29 17:47:05', '2024-04-29 17:47:05'),
(566, 'Administrator Logged in', '1', '190.236.29.237', '2024-04-29 18:02:50', '2024-04-29 18:02:50'),
(567, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-29 18:11:34', '2024-04-29 18:11:34'),
(568, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-04-29 18:13:23', '2024-04-29 18:13:23'),
(569, 'Administrator Logged in', '1', '179.6.48.97', '2024-05-02 16:59:50', '2024-05-02 16:59:50'),
(570, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-05-02 17:08:02', '2024-05-02 17:08:02'),
(571, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-05-02 17:17:47', '2024-05-02 17:17:47'),
(572, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-05-02 17:18:02', '2024-05-02 17:18:02'),
(573, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-05-02 17:23:40', '2024-05-02 17:23:40'),
(574, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '179.6.48.97', '2024-05-02 17:25:47', '2024-05-02 17:25:47'),
(575, 'Administrator Logged in', '1', '190.239.215.228', '2024-05-04 14:54:06', '2024-05-04 14:54:06'),
(576, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-05-04 15:00:30', '2024-05-04 15:00:30'),
(577, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-05-04 15:00:54', '2024-05-04 15:00:54'),
(578, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-05-04 15:07:02', '2024-05-04 15:07:02'),
(579, 'Nuevo #Gastos creado por el usuario:Administrator', '1', '190.239.215.228', '2024-05-04 15:09:00', '2024-05-04 15:09:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `id` varchar(16) NOT NULL,
  `idMuestra` varchar(13) DEFAULT NULL,
  `nombre_analisis` varchar(45) DEFAULT NULL,
  `ma` char(2) DEFAULT NULL,
  `pr` char(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`id`, `idMuestra`, `nombre_analisis`, `ma`, `pr`, `created_at`, `updated_at`, `estado`) VALUES
('2023020000-01-01', '2023020000-01', 'TAH2', 'AF', 'AS', '2023-03-05 23:11:40', '2023-03-06 00:51:35', b'1'),
('2023020000-02-01', '2023020000-02', 'SAD', 'AF', 'AS', '2023-03-06 00:04:56', NULL, b'1'),
('2023030003-01-01', '2023030003-01', 'TAH', 'AF', 'AS', '2023-03-05 22:35:20', NULL, b'1'),
('2023030004-01-01', '2023030004-01', 'TAH2', 'AF', 'AS', '2023-03-06 01:00:56', '2023-03-20 22:00:11', b'1'),
('2023030004-05-01', '2023030004-05', 'LAB2', 'AS', 'AF', '2023-03-20 21:16:13', '2023-03-20 22:01:46', b'1'),
('2023030004-05-02', '2023030004-05', 'LAB 4', 'AS', 'AF', '2023-03-20 22:03:55', NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cadena_custodia`
--

CREATE TABLE `cadena_custodia` (
  `id` varchar(10) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_contacto` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_empleado` varchar(255) DEFAULT NULL,
  `opcion` varchar(7) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `celular` char(9) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `id_persona_transporte` int(11) DEFAULT NULL,
  `fecha_transporte` timestamp NULL DEFAULT NULL,
  `id_persona_entrega` int(11) DEFAULT NULL,
  `fecha_entrega` timestamp NULL DEFAULT NULL,
  `id_persona_ingreso` int(11) DEFAULT NULL,
  `fecha_ingreso` timestamp NULL DEFAULT NULL,
  `id_laboratorista` int(11) DEFAULT NULL,
  `fecha_laboratorio` timestamp NULL DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cadena_custodia`
--

INSERT INTO `cadena_custodia` (`id`, `id_cliente`, `id_contacto`, `id_proyecto`, `id_empleado`, `opcion`, `direccion`, `distrito`, `provincia`, `departamento`, `celular`, `telefono`, `email`, `fecha`, `estado`, `id_persona_transporte`, `fecha_transporte`, `id_persona_entrega`, `fecha_entrega`, `id_persona_ingreso`, `fecha_ingreso`, `id_laboratorista`, `fecha_laboratorio`, `idUser`, `created_at`, `updated_at`) VALUES
('2023020000', 2, 1, 1, '1,2', 'CLIENTE', 'Paita', 'Paita', 'Talara', 'Piura', '', '987654321', 'hola@gmail.com', '2023-03-01 00:00:00', b'1', 1, '2023-03-02 03:53:46', 2, '2023-03-03 03:53:46', 1, '2023-03-04 03:53:46', NULL, NULL, NULL, '2023-03-01 03:53:46', '2023-03-05 21:35:21'),
('2023020001', 1, 1, 1, '1', 'IQS', 'Hola', 'Hola', 'Talara', 'Piura', '', '', '', '2023-02-28 00:00:00', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:34:19', '2023-03-11 20:20:40'),
('2023030001', 3, 2, 1, '1,3', 'CLIENTE', 'Castilla', 'Piura', 'Talara', 'Piura', '', '', '', '2023-03-02 00:00:00', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-03 02:02:21', '2023-03-11 20:19:46'),
('2023030002', 2, 2, 1, '1,2', 'IQS', 'Piura', 'Piura', 'Talara', 'Piura', '', '987654321', '', '2023-03-02 00:00:00', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-03 02:03:04', '2023-03-09 03:59:45'),
('2023030003', 2, 1, 1, '1,2,3', 'IQS', 'Prueba 1', 'Piura', 'Talara', 'Piura', '988723123', '985465113', '', '2023-03-03 00:00:00', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-04 03:09:08', '2023-03-05 21:40:51'),
('2023030004', 1, 2, 1, '1', 'IQS', 'Piura', 'Piura', 'Talara', 'Piura', '', '987654312', '', '2023-03-05 00:00:00', b'1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-06 00:52:29', '2023-03-12 05:11:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `description`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Casa', b'1', '2024-03-25 15:40:02', '2024-03-25 15:40:02'),
(2, 'Salidas con ♥', b'1', '2024-03-25 15:40:32', '2024-03-25 10:46:06'),
(3, 'Moto', b'1', '2024-03-25 15:40:46', '2024-03-25 15:40:46'),
(4, 'Servicios', b'1', '2024-03-25 15:41:28', '2024-03-25 15:41:28'),
(5, 'Compromisos', b'1', '2024-03-25 15:43:13', '2024-03-25 15:43:13'),
(6, 'Salidas', b'1', '2024-03-25 15:46:16', '2024-03-25 15:46:16'),
(7, 'Compras para mi', b'1', '2024-03-25 15:47:04', '2024-03-25 15:47:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre_cliente`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Fiorella Eunice Ancajima Socola', b'1', '2023-02-15 16:26:15', '2023-02-27 23:14:17'),
(2, 'Carlos Arturo Pasache Ordinola', b'1', '2023-03-01 04:02:24', '2023-03-03 17:59:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre_empleado` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre_empleado`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Leandro Neira Chunga', '2023-02-27 23:33:27', '2023-02-27 23:33:35', b'1'),
(2, 'Anastacio Petronilo Cleto', '2023-03-01 14:41:08', '2023-03-03 17:59:39', b'1'),
(3, 'ANCAJIMA SOCOLA, EUNICE FIORELLA', '2023-03-02 03:19:27', NULL, b'1'),
(4, 'ALEJANDRO SAENZ', '2023-03-09 04:16:07', '2023-03-09 04:26:48', b'1'),
(5, 'PEDRO PEDRIN', '2023-03-09 04:16:15', '2023-03-09 04:26:58', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `save` bit(1) NOT NULL DEFAULT b'0',
  `id_category` int(11) NOT NULL,
  `estado` bit(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`id`, `description`, `amount`, `date`, `save`, `id_category`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Pago de Casa', 1483.18, '2024-03-01', b'0', 1, b'1', '2024-03-08 08:31:28', '2024-03-25 10:40:11'),
(2, 'Pago de la casa para amortizar ', 5.37, '2024-03-01', b'1', 1, b'1', '2024-03-08 20:20:39', '2024-05-04 09:59:01'),
(3, 'Pago de internet', 217.8, '2024-03-01', b'0', 4, b'1', '2024-03-08 20:21:13', '2024-03-25 10:41:58'),
(4, 'Pago de Luz', 47.45, '2024-03-01', b'0', 4, b'1', '2024-03-08 20:21:45', '2024-03-25 10:41:39'),
(5, 'Alquiler del terno', 40, '2024-03-01', b'0', 5, b'1', '2024-03-08 20:22:44', '2024-03-25 10:43:27'),
(6, 'Compra del proyector para la casa', 241, '2024-03-01', b'0', 1, b'1', '2024-03-08 20:23:08', '2024-03-25 10:42:43'),
(7, 'Ahorro', 5, '2024-03-01', b'1', 1, b'1', '2024-03-08 20:24:30', '2024-03-25 10:48:24'),
(8, 'Comida', 29.5, '2024-03-04', b'0', 2, b'1', '2024-03-08 20:24:51', '2024-03-25 10:42:55'),
(9, 'Gastos de boda', 45, '2024-03-04', b'0', 5, b'1', '2024-03-08 20:25:09', '2024-03-25 10:43:41'),
(10, 'Gasolina', 26.97, '2024-03-04', b'0', 3, b'1', '2024-03-08 20:26:31', '2024-03-25 10:43:52'),
(11, 'Tambo pizzitas', 8.9, '2024-03-04', b'0', 2, b'1', '2024-03-08 20:26:57', '2024-03-25 10:44:03'),
(12, 'Makis', 10, '2024-03-05', b'0', 2, b'1', '2024-03-08 20:27:28', '2024-03-25 10:44:18'),
(13, 'Pago de Entel', 22.9, '2024-03-05', b'0', 4, b'1', '2024-03-08 20:27:57', '2024-03-25 10:44:32'),
(14, 'Smart Wacth Fit 2', 58, '2024-03-06', b'0', 7, b'1', '2024-03-08 20:28:41', '2024-03-25 10:47:16'),
(15, 'Templadores de cadena', 6, '2024-03-09', b'0', 3, b'1', '2024-03-09 14:38:25', '2024-03-25 10:44:48'),
(16, 'Aceite Motul 5100', 31, '2024-03-09', b'0', 3, b'1', '2024-03-09 14:49:47', '2024-03-25 10:44:59'),
(17, 'Cine', 13, '2024-03-09', b'0', 2, b'1', '2024-03-09 20:57:30', '2024-03-25 10:47:32'),
(18, 'Gasolina ', 20, '2024-03-09', b'0', 3, b'1', '2024-03-09 20:57:42', '2024-03-25 10:47:45'),
(19, 'Hamburguesas ', 25, '2024-03-09', b'0', 2, b'1', '2024-03-09 20:57:52', '2024-03-25 10:48:00'),
(20, 'Mantenimiento de mi bebé ', 30, '2024-03-10', b'0', 3, b'1', '2024-03-10 14:48:58', '2024-03-25 10:48:15'),
(21, 'Che con el inge', 8.5, '2024-03-13', b'0', 6, b'1', '2024-03-13 21:51:37', '2024-03-25 10:50:57'),
(22, 'Pizza Papa Johns', 9.9, '2024-03-14', b'0', 2, b'1', '2024-03-15 08:36:56', '2024-03-25 10:48:44'),
(23, 'Estacionamiento Real Plaza', 1.5, '2024-03-14', b'0', 2, b'1', '2024-03-15 08:37:27', '2024-03-25 10:51:10'),
(24, 'Gasolina', 25.64, '2024-03-16', b'0', 3, b'1', '2024-03-17 09:59:17', '2024-03-25 10:48:56'),
(25, 'Visor de casco', 53, '2024-03-19', b'0', 3, b'1', '2024-03-17 09:59:43', '2024-03-25 10:49:06'),
(26, 'Corte de cabello', 20, '2024-03-19', b'0', 7, b'1', '2024-03-19 20:15:23', '2024-03-25 10:49:19'),
(27, 'Salchipapa', 7, '2024-03-19', b'0', 2, b'1', '2024-03-19 20:15:40', '2024-03-25 10:49:30'),
(28, 'Hamburguesa', 4, '2024-03-21', b'0', 2, b'1', '2024-03-21 22:07:11', '2024-03-25 10:49:42'),
(29, 'Compra en metro', 16.19, '2024-03-23', b'0', 7, b'1', '2024-03-23 16:27:02', '2024-03-25 10:49:57'),
(30, 'Gasolina', 24, '2024-03-23', b'0', 3, b'1', '2024-03-24 21:43:55', '2024-03-25 10:50:10'),
(31, 'Hospedaje', 20, '2024-03-23', b'0', 0, b'1', '2024-03-24 21:44:17', '0000-00-00 00:00:00'),
(32, 'Hamburguesas', 25, '2024-03-24', b'0', 2, b'1', '2024-03-24 21:44:32', '2024-03-25 10:50:24'),
(33, 'Cine', 11, '2024-03-25', b'0', 2, b'1', '2024-03-26 06:24:21', '2024-03-26 21:57:20'),
(34, 'Pastilla antigripal', 14, '2024-03-27', b'0', 7, b'1', '2024-03-27 17:56:25', '2024-03-29 07:04:15'),
(35, 'Recuerdos de la cruz de motupe', 15, '2024-03-28', b'0', 7, b'1', '2024-03-29 07:04:05', '2024-03-29 12:04:05'),
(36, 'Pulsera para Lucia', 20, '2024-03-29', b'0', 6, b'1', '2024-03-30 10:21:02', '2024-03-30 15:21:02'),
(37, 'Compras en Pimentel ', 37.7, '2024-03-29', b'0', 7, b'1', '2024-03-30 10:21:24', '2024-03-30 15:21:24'),
(38, 'King kong', 20, '2024-03-30', b'0', 7, b'1', '2024-03-30 14:15:36', '2024-03-30 14:16:01'),
(39, 'Polo manga larga', 20, '2024-03-30', b'0', 7, b'1', '2024-03-30 14:15:51', '2024-03-30 19:15:51'),
(40, 'Regalo de Kino Feo', 31.5, '2024-03-30', b'0', 5, b'1', '2024-03-31 13:53:10', '2024-03-31 18:53:09'),
(41, 'Pago de Casa', 1483.18, '2024-04-01', b'0', 1, b'1', '2024-04-01 07:46:10', '2024-04-01 12:46:10'),
(42, 'Posible Amortizacion de Casa', 108.82, '2024-04-01', b'1', 1, b'1', '2024-04-01 07:46:53', '2024-05-04 09:57:30'),
(43, 'Salida de Semana Santa', 129, '2024-04-01', b'0', 6, b'1', '2024-04-01 07:47:43', '2024-04-02 06:17:08'),
(44, 'Pago de Luz', 48.2, '2024-04-01', b'0', 4, b'1', '2024-04-01 07:48:05', '2024-04-01 12:48:05'),
(45, 'Hamburguesas veneno', 8, '2024-04-01', b'0', 2, b'1', '2024-04-02 06:17:39', '2024-04-02 11:17:39'),
(46, 'Compra de ropa', 144.45, '2024-04-01', b'0', 7, b'1', '2024-04-02 06:18:23', '2024-04-02 07:36:44'),
(47, 'Gasolina', 22.7, '2024-04-01', b'0', 3, b'1', '2024-04-02 06:18:41', '2024-04-02 07:37:35'),
(48, 'Gaseosa Mass', 2.9, '2024-04-02', b'0', 7, b'1', '2024-04-05 14:16:21', '2024-04-05 19:16:21'),
(49, 'Pago de telefono', 22.9, '2024-04-05', b'0', 4, b'1', '2024-04-05 14:16:47', '2024-04-05 19:16:46'),
(50, 'Flores', 10, '2024-04-06', b'0', 7, b'1', '2024-04-06 11:03:54', '2024-04-06 16:03:53'),
(51, 'Pulp', 3.8, '2024-04-06', b'0', 7, b'1', '2024-04-06 11:04:06', '2024-04-06 16:04:06'),
(52, 'Agua', 51.75, '2024-04-06', b'0', 4, b'1', '2024-04-06 13:39:20', '2024-04-06 18:39:20'),
(53, 'Desodorante', 26.9, '2024-04-06', b'0', 7, b'1', '2024-04-06 13:39:36', '2024-04-06 18:39:36'),
(54, 'Pastillas', 6.6, '2024-04-06', b'0', 7, b'1', '2024-04-06 19:04:31', '2024-04-07 00:04:31'),
(55, 'Cena en Zero grados ', 47, '2024-04-07', b'0', 2, b'1', '2024-04-07 14:15:36', '2024-04-07 19:15:36'),
(56, 'Helados', 5, '2024-04-07', b'0', 2, b'1', '2024-04-07 14:15:49', '2024-04-07 19:15:48'),
(57, 'Torta', 77.9, '2024-04-08', b'0', 7, b'1', '2024-04-09 07:54:22', '2024-04-09 12:54:21'),
(58, 'Hotel', 15, '2024-04-08', b'0', 2, b'1', '2024-04-09 07:54:42', '2024-04-09 12:54:42'),
(59, 'Gasolina', 24.12, '2024-04-09', b'0', 3, b'1', '2024-04-12 13:08:22', '2024-04-12 18:08:22'),
(60, 'Rejilla del baño ', 20, '2024-04-09', b'0', 1, b'1', '2024-04-12 13:08:54', '2024-04-12 18:08:54'),
(61, 'Gasolina', 12.97, '2024-04-14', b'0', 3, b'1', '2024-04-16 10:09:57', '2024-04-16 15:09:57'),
(62, 'Makis Fussa', 74, '2024-04-15', b'0', 2, b'1', '2024-04-16 10:10:31', '2024-04-16 15:10:31'),
(63, 'Kfc', 20.9, '2024-04-19', b'0', 2, b'1', '2024-04-21 16:18:18', '2024-04-21 16:18:42'),
(64, 'Case de SmartWacht Fit 2', 18.9, '2024-04-20', b'0', 7, b'1', '2024-04-21 16:18:33', '2024-05-04 09:56:25'),
(65, 'Di Pauli', 22, '2024-04-20', b'0', 2, b'1', '2024-04-21 16:19:37', '2024-04-21 16:20:56'),
(66, 'Che en plaza vea', 26, '2024-04-20', b'0', 2, b'1', '2024-04-21 16:20:44', '2024-04-21 21:20:43'),
(67, 'Hamburguesas', 11, '2024-04-20', b'0', 2, b'1', '2024-04-21 16:21:21', '2024-04-21 21:21:20'),
(68, 'Prueba de Gym', 6, '2024-04-20', b'0', 7, b'1', '2024-04-21 16:23:24', '2024-04-21 21:23:24'),
(69, 'Cena', 37, '2024-04-21', b'0', 2, b'1', '2024-04-22 15:28:03', '2024-04-22 20:28:02'),
(70, 'Gasolina', 28.32, '2024-04-22', b'0', 3, b'1', '2024-04-23 14:04:41', '2024-04-23 19:04:40'),
(71, 'Flores para Estefany', 135, '2024-04-26', b'0', 5, b'1', '2024-04-29 12:44:08', '2024-04-29 17:44:07'),
(72, 'Espejos de Jorge', 10, '2024-04-27', b'0', 5, b'1', '2024-04-29 12:46:39', '2024-04-29 17:46:38'),
(73, 'Playa de estacionamiento Real', 1.5, '2024-04-28', b'0', 1, b'1', '2024-04-29 12:47:06', '2024-04-29 17:47:05'),
(74, 'Pago del Chinito FU', 8.5, '2024-04-29', b'0', 7, b'1', '2024-04-29 13:11:35', '2024-04-29 18:11:34'),
(75, 'Cena  antes del dia del trabajador', 63.69, '2024-04-30', b'0', 2, b'1', '2024-04-29 13:13:24', '2024-05-02 12:07:43'),
(76, 'Pollo al Cilindro', 16, '2024-04-30', b'0', 7, b'1', '2024-05-02 12:08:03', '2024-05-02 17:08:02'),
(77, 'Pago del gym ', 125, '2024-05-01', b'0', 7, b'1', '2024-05-02 12:17:47', '2024-05-02 12:25:22'),
(78, 'Cevichito del dia del Trabajador', 30.5, '2024-05-01', b'0', 6, b'1', '2024-05-02 12:18:03', '2024-05-02 12:25:30'),
(79, 'Pago de Casa', 1483.18, '2024-05-02', b'0', 1, b'1', '2024-05-02 12:23:41', '2024-05-02 12:25:11'),
(80, 'Pago de Internet', 217.8, '2024-05-02', b'0', 4, b'1', '2024-05-02 12:25:48', '2024-05-02 17:25:47'),
(81, 'Parche de llanta', 23, '2024-05-02', b'0', 3, b'1', '2024-05-04 10:00:31', '2024-05-04 10:07:21'),
(82, 'Cena', 45, '2024-05-03', b'0', 2, b'1', '2024-05-04 10:00:54', '2024-05-04 10:07:41'),
(83, 'Gasolina', 29.02, '2024-05-02', b'0', 3, b'1', '2024-05-04 10:07:03', '2024-05-04 15:07:02'),
(84, 'Ahorro', 400, '2024-05-04', b'1', 1, b'1', '2024-05-04 10:09:01', '2024-05-04 15:09:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `type_object` varchar(20) DEFAULT NULL,
  `object` varchar(100) DEFAULT NULL,
  `order` varchar(10) DEFAULT NULL,
  `menu_padre_id` int(11) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `name`, `title`, `icon`, `type_object`, `object`, `order`, `menu_padre_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'Dashboard', 'fa fa-dashboard', 'Action', '/dashboard', '1', 0, 1, '2020-04-09 15:37:42', '2020-04-09 15:42:42'),
(2, 'security', 'Security', 'fa fa-lock', 'Menu', '-', '2', 0, 1, '2020-04-09 15:38:52', NULL),
(3, 'activity_logs', 'Activity Logs', 'fa fa-history', 'Action', 'activity_logs', '2.1', 2, 1, '2020-04-09 15:39:34', NULL),
(4, 'users', 'Users', 'fa fa-user', 'Action', 'users', '2.2', 2, 1, '2020-04-19 05:00:00', NULL),
(5, 'roles', 'Manage Roles', 'fa fa-lock', 'Action', 'roles', '2.3', 2, 1, '2020-04-20 05:00:00', NULL),
(6, 'permissions', 'Manage Permissions', 'fa fa-lock', 'Action', 'permissions', '2.4', 2, 1, '2020-04-20 05:00:00', NULL),
(7, 'settings', 'Settings', 'fa fa-cog', 'Menu', '-', '3', 0, 1, '2020-04-20 05:00:00', NULL),
(8, 'company', 'Company Settings', 'fa fa-circle-o', 'Action', 'settings/company', '3.1', 7, 1, '2020-04-20 05:00:00', NULL),
(9, 'cliente', 'Cliente', 'fa fa-users', 'Action', '/cliente', '1', 0, 1, '2023-02-01 20:34:57', '2023-02-01 20:34:57'),
(10, 'cadena_custodia', 'Cadena de custodia', 'fa fa-archive', 'Action', '/cadena_custodia', '1', 0, 1, '2023-02-09 13:43:52', '2023-02-09 13:43:52'),
(11, 'empleado', 'Empleado', 'fa fa-users', 'Action', '/empleado', '2', 0, 1, NULL, NULL),
(12, 'proyecto', 'Proyecto', 'fa fa-archive', 'Action', '/proyecto', '2', 0, 1, NULL, NULL),
(13, 'muestra', 'Muestra', 'fa fa-flask', 'Action', '/muestra', '2', 0, 1, NULL, NULL),
(14, 'menu', 'Menu', 'fa-solid fa-list-dropdown', 'Action', '/menu', '3.2', 7, 1, '2024-03-07 10:46:18', NULL),
(15, 'gasto', 'Gasto', 'fa-solid fa-money-check-dollar', 'Action', '/gasto', '1', 0, 1, '2024-03-07 19:28:18', '2024-03-07 19:33:31'),
(16, 'categoria', 'Categoria', 'fa-solid fa-icons', 'Action', '/categoria', '1', 0, 1, '2024-03-25 10:38:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestra`
--

CREATE TABLE `muestra` (
  `id` varchar(13) NOT NULL,
  `idCadenaCustodia` varchar(10) DEFAULT NULL,
  `codigo_campo` varchar(255) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `contenedor_p` int(11) DEFAULT NULL,
  `contenedor_v` int(11) DEFAULT NULL,
  `contenedor_otros` int(11) DEFAULT NULL,
  `fecha_hora` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `muestra`
--

INSERT INTO `muestra` (`id`, `idCadenaCustodia`, `codigo_campo`, `ubicacion`, `contenedor_p`, `contenedor_v`, `contenedor_otros`, `fecha_hora`, `created_at`, `updated_at`, `estado`) VALUES
('2023020000-01', '2023020000', 'SAL WT', 'LAB 1', 1, 2, 1, '2023-03-05 23:08:00', '2023-03-05 23:08:19', NULL, b'1'),
('2023020000-02', '2023020000', 'PAN', 'LAB 2', 1, 1, 1, '2023-03-05 23:11:45', '2023-03-05 23:11:55', NULL, b'1'),
('2023020000-03', '2023020000', 'SL WT', 'LAB 2', 1, 2, 2, '2023-03-06 00:04:45', '2023-03-06 00:04:43', NULL, b'1'),
('2023030002-01', '2023030002', 'SAL WT', 'LAB 1', 2, 1, 2, '2023-03-03 21:15:00', '2023-03-03 22:59:47', '2023-03-03 23:43:11', b'1'),
('2023030003-01', '2023030003', 'WT Lae', 'LAB1', 1, 2, 2, '2023-03-04 03:09:30', '2023-03-04 03:09:56', NULL, b'1'),
('2023030004-01', '2023030004', 'WT', 'LAB 1', 1, 1, 3, '2023-03-06 00:52:00', '2023-03-06 00:53:08', '2023-03-20 20:43:31', b'1'),
('2023030004-02', '2023030004', 'WT', 'AS', 1, 1, 2, '2023-03-06 00:53:30', '2023-03-06 00:53:38', '2023-03-20 20:42:58', b'1'),
('2023030004-03', '2023030004', 'SA', 'Q', 1, 1, 1, '2023-03-06 00:57:30', '2023-03-06 00:57:34', '2023-03-06 01:02:00', b'1'),
('2023030004-04', '2023030004', 'Q', 'ASA', 1, 1, 2, '2023-03-06 00:59:30', '2023-03-06 01:00:18', '2023-03-09 05:21:14', b'1'),
('2023030004-05', '2023030004', 'WDA LAS', 'LAB4', 2, 1, 2, '2023-03-09 05:21:15', '2023-03-09 05:21:22', '2023-03-20 22:01:36', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `code`) VALUES
(1, 'Users List', 'users_list'),
(2, 'Add Users', 'users_add'),
(3, 'Edit Users', 'users_edit'),
(4, 'Delete Users', 'users_delete'),
(5, 'Users View', 'users_view'),
(6, 'Activity Logs List', 'activity_log_list'),
(7, 'Acivity Log View', 'activity_log_view'),
(8, 'Roles List', 'roles_list'),
(9, 'Add Roles', 'roles_add'),
(10, 'Edit Roles', 'roles_edit'),
(11, 'Permissions List', 'permissions_list'),
(12, 'Add Permissions', 'permissions_add'),
(13, 'Permissions Edit', 'permissions_edit'),
(14, 'Delete Permissions', 'permissions_delete'),
(15, 'Company Settings', 'company_settings'),
(16, 'menu_list', 'menu_list'),
(17, 'menu_add', 'menu_add'),
(18, 'menu_edit', 'menu_edit'),
(19, 'menu_delete', 'menu_delete'),
(20, 'menu_view', 'menu_view'),
(21, 'cliente_list', 'cliente_list'),
(22, 'cliente_add', 'cliente_add'),
(23, 'cliente_edit', 'cliente_edit'),
(24, 'cliente_delete', 'cliente_delete'),
(25, 'cliente_view', 'cliente_view'),
(26, 'proyecto_list', 'proyecto_list'),
(27, 'proyecto_add', 'proyecto_add'),
(28, 'proyecto_edit', 'proyecto_edit'),
(29, 'proyecto_delete', 'proyecto_delete'),
(30, 'proyecto_view', 'proyecto_view'),
(31, 'cadena_custodia_list', 'cadena_custodia_list'),
(32, 'cadena_custodia_add', 'cadena_custodia_add'),
(33, 'cadena_custodia_edit', 'cadena_custodia_edit'),
(34, 'cadena_custodia_delete', 'cadena_custodia_delete'),
(35, 'cadena_custodia_view', 'cadena_custodia_view'),
(36, 'empleado_list', 'empleado_list'),
(37, 'empleado_add', 'empleado_add'),
(38, 'empleado_edit', 'empleado_edit'),
(39, 'empleado_delete', 'empleado_delete'),
(40, 'empleado_view', 'empleado_view'),
(41, 'muestra_list', 'muestra_list'),
(42, 'muestra_add', 'muestra_add'),
(43, 'muestra_edit', 'muestra_edit'),
(44, 'muestra_delete', 'muestra_delete'),
(45, 'muestra_view', 'muestra_view'),
(46, 'analisis_list', 'analisis_list'),
(47, 'analisis_add', 'analisis_add'),
(48, 'muestra_edit', 'muestra_edit'),
(49, 'muestra_delete', 'muestra_delete'),
(50, 'muestra_view', 'muestra_view'),
(51, 'gasto_list', 'gasto_list'),
(52, 'gasto_add', 'gasto_add'),
(53, 'gasto_edit', 'gasto_edit'),
(54, 'gasto_delete', 'gasto_delete'),
(55, 'gasto_view', 'gasto_view'),
(56, 'categoria_list', 'categoria_list'),
(57, 'categoria_add', 'categoria_add'),
(58, 'categoria_edit', 'categoria_edit'),
(59, 'categoria_delete', 'categoria_delete'),
(60, 'categoria_view', 'categoria_view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre_proyecto` varchar(255) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre_proyecto`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Monitore de calidad agua de inyección', b'1', '2023-03-01 01:22:21', '2023-03-03 17:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `title`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_menus`
--

CREATE TABLE `role_menus` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `role_menus`
--

INSERT INTO `role_menus` (`id`, `role`, `menu`) VALUES
(1, 1, 'dashboard'),
(2, 1, 'security'),
(3, 1, 'activity_logs'),
(4, 1, 'users'),
(5, 1, 'roles'),
(6, 1, 'permissions'),
(7, 1, 'settings'),
(8, 1, 'company'),
(17, 1, 'menu'),
(18, 1, 'gasto'),
(19, 1, 'categoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES
(1, 1, 'users_list'),
(2, 1, 'users_add'),
(3, 1, 'users_edit'),
(4, 1, 'users_delete'),
(5, 1, 'users_view'),
(6, 1, 'activity_log_list'),
(7, 1, 'activity_log_view'),
(8, 1, 'roles_list'),
(9, 1, 'roles_add'),
(10, 1, 'roles_edit'),
(11, 1, 'permissions_list'),
(12, 1, 'permissions_add'),
(13, 1, 'permissions_edit'),
(14, 1, 'permissions_delete'),
(15, 1, 'company_settings'),
(16, 1, 'menu_list'),
(17, 1, 'menu_add'),
(18, 1, 'menu_edit'),
(19, 1, 'menu_delete'),
(20, 1, 'menu_view'),
(21, 1, 'cliente_list'),
(22, 1, 'cliente_add'),
(23, 1, 'cliente_edit'),
(24, 1, 'cliente_delete'),
(25, 1, 'cliente_view'),
(26, 1, 'empleado_list'),
(27, 1, 'empleado_add'),
(28, 1, 'empleado_edit'),
(29, 1, 'empleado_delete'),
(30, 1, 'empleado_view'),
(31, 1, 'proyecto_list'),
(32, 1, 'proyecto_add'),
(33, 1, 'proyecto_edit'),
(34, 1, 'proyecto_delete'),
(35, 1, 'proyecto_view'),
(36, 1, 'cadena_custodia_list'),
(37, 1, 'cadena_custodia_add'),
(38, 1, 'cadena_custodia_edit'),
(39, 1, 'cadena_custodia_delete'),
(40, 1, 'cadena_custodia_view'),
(41, 1, 'muestra_list'),
(42, 1, 'muestra_add'),
(43, 1, 'muestra_edit'),
(44, 1, 'muestra_delete'),
(45, 1, 'muestra_view'),
(46, 1, 'analisis_list'),
(47, 1, 'analisis_add'),
(51, 1, 'gasto_list'),
(52, 1, 'gasto_add'),
(53, 1, 'gasto_edit'),
(54, 1, 'gasto_delete'),
(55, 1, 'gasto_view'),
(56, 1, 'categoria_list'),
(57, 1, 'categoria_add'),
(58, 1, 'categoria_edit'),
(59, 1, 'categoria_delete'),
(60, 1, 'categoria_view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` text NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES
(1, 'company_name', 'Xharles', '2018-06-21 22:37:59'),
(2, 'company_email', 'testcompany@gmail.com', '2018-07-11 16:09:58'),
(3, 'timezone', 'America/Lima', '2018-07-16 00:54:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `address` longtext NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` int(11) NOT NULL,
  `reset_token` text NOT NULL,
  `mode` varchar(255) NOT NULL DEFAULT 'light',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `address`, `last_login`, `role`, `reset_token`, `mode`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', '', '2024-05-04 09:05:54', 1, '', 'dark', '2018-06-27 23:30:16', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMuestra` (`idMuestra`);

--
-- Indices de la tabla `cadena_custodia`
--
ALTER TABLE `cadena_custodia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_contacto` (`id_contacto`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muestra`
--
ALTER TABLE `muestra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCadenaCustodia` (`idCadenaCustodia`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_menus`
--
ALTER TABLE `role_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=580;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `role_menus`
--
ALTER TABLE `role_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD CONSTRAINT `analisis_ibfk_1` FOREIGN KEY (`idMuestra`) REFERENCES `muestra` (`id`);

--
-- Filtros para la tabla `cadena_custodia`
--
ALTER TABLE `cadena_custodia`
  ADD CONSTRAINT `cadena_custodia_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id`),
  ADD CONSTRAINT `cadena_custodia_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `muestra`
--
ALTER TABLE `muestra`
  ADD CONSTRAINT `muestra_ibfk_1` FOREIGN KEY (`idCadenaCustodia`) REFERENCES `cadena_custodia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
