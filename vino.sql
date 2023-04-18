-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2023 at 09:41 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vino`
--

-- --------------------------------------------------------

--
-- Table structure for table `bouteille_par_celliers`
--

CREATE TABLE `bouteille_par_celliers` (
  `id` int(11) NOT NULL,
  `date_achat` date DEFAULT NULL,
  `garde_jusqua` date DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `vino_cellier_id` int(11) NOT NULL,
  `vino_bouteille_id` int(11) NOT NULL,
  `millesime` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bouteille_par_celliers`
--

INSERT INTO `bouteille_par_celliers` (`id`, `date_achat`, `garde_jusqua`, `prix`, `quantite`, `vino_cellier_id`, `vino_bouteille_id`, `millesime`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 3500, 4, 1, 4, 1975, '2023-04-14 17:52:32', NULL),
(2, '2019-01-16', '2024-01-16', 80, 50, 1, 2, NULL, '2023-04-14 17:52:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liste_souhaits`
--

CREATE TABLE `liste_souhaits` (
  `utilisateurs_id` int(11) NOT NULL,
  `vino_bouteilles_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note` int(11) DEFAULT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  `vino_bouteilles_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `pays` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `pays`, `created_at`, `updated_at`) VALUES
(1, 'Espagne', NULL, NULL),
(2, 'États-Unis', NULL, NULL),
(3, 'Autriche', NULL, NULL),
(4, 'France', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `courriel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `utilisateur_privilege_id` int(11) NOT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `courriel`, `password`, `utilisateur_privilege_id`, `pays_id`, `created_at`, `updated_at`) VALUES
(1, 'Cage', 'Nicolas', 'nicolas@cage.com', '123456', 1, 2, NULL, NULL),
(2, 'Almodoval', 'Pedro', 'pedro@gmail.com', '123456', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur_privileges`
--

CREATE TABLE `utilisateur_privileges` (
  `id` int(11) NOT NULL,
  `privilege` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur_privileges`
--

INSERT INTO `utilisateur_privileges` (`id`, `privilege`, `created_at`, `updated_at`) VALUES
(1, 'utilisateur', NULL, NULL),
(2, 'administrateur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vino_bouteilles`
--

CREATE TABLE `vino_bouteilles` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `code_saq` varchar(255) DEFAULT NULL,
  `description` text,
  `prix_saq` double DEFAULT NULL,
  `url_saq` varchar(255) DEFAULT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  `vino_format_id` int(11) DEFAULT NULL,
  `vino_type_id` int(11) DEFAULT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_bouteilles`
--

INSERT INTO `vino_bouteilles` (`id`, `nom`, `image`, `code_saq`, `description`, `prix_saq`, `url_saq`, `url_img`, `vino_format_id`, `vino_type_id`, `pays_id`, `created_at`, `updated_at`) VALUES
(1, 'Borsao Seleccion', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', '10324623', 'Vin rouge d\'Espagne', 11, 'https://www.saq.com/page/fr/saqcom/vin-rouge/borsao-seleccion/10324623', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(2, 'Monasterio de Las Vinas Gran Reserva', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', '10359156', 'Vin rouge d\'Espagne', 19, 'https://www.saq.com/page/fr/saqcom/vin-rouge/monasterio-de-las-vinas-gran-reserva/10359156', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(3, 'Castano Hecula', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', '11676671', 'Vin rouge d\'Espagne', 12, 'https://www.saq.com/page/fr/saqcom/vin-rouge/castano-hecula/11676671', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(4, 'Campo Viejo Tempranillo Rioja', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', '11462446', 'Vin rouge d\'Espagne', 14, 'https://www.saq.com/page/fr/saqcom/vin-rouge/campo-viejo-tempranillo-rioja/11462446', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(5, 'Bodegas Atalaya Laya 2017', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', '12375942', 'Vin rouge d\'Espagne', 17, 'https://www.saq.com/page/fr/saqcom/vin-rouge/bodegas-atalaya-laya-2017/12375942', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(6, 'Vin Vault Pinot Grigio', '//s7d9.scene7.com/is/image/SAQ/13467048_is?$saq-rech-prod-gril$', '13467048', 'Vin blanc des États-Unis', 15, 'https://www.saq.com/page/fr/saqcom/vin-blanc/vin-vault-pinot-grigio/13467048', '//s7d9.scene7.com/is/image/SAQ/13467048_is?$saq-rech-prod-gril$', 2, 2, 2, NULL, NULL),
(7, 'Huber Riesling Engelsberg 2017', '//s7d9.scene7.com/is/image/SAQ/13675841_is?$saq-rech-prod-gril$', '13675841', 'Vin blanc d\'Autriche', 22, 'https://www.saq.com/page/fr/saqcom/vin-blanc/huber-riesling-engelsberg-2017/13675841', '//s7d9.scene7.com/is/image/SAQ/13675841_is?$saq-rech-prod-gril$', 1, 2, 3, NULL, NULL),
(8, 'Dominio de Tares Estay Castilla y Léon 2015', '//s7d9.scene7.com/is/image/SAQ/13802571_is?$saq-rech-prod-gril$', '13802571', 'Vin rouge d\'Espagne', 18, 'https://www.saq.com/page/fr/saqcom/vin-rouge/dominio-de-tares-estay-castilla-y-leon-2015/13802571', '//s7d9.scene7.com/is/image/SAQ/13802571_is?$saq-rech-prod-gril$', 1, 1, 1, NULL, NULL),
(9, 'Tessellae Old Vines Côtes du Roussillon 2016', '//s7d9.scene7.com/is/image/SAQ/12216562_is?$saq-rech-prod-gril$', '12216562', 'Vin rouge de France', 21, 'https://www.saq.com/page/fr/saqcom/vin-rouge/tessellae-old-vines-cotes-du-roussillon-2016/12216562', '//s7d9.scene7.com/is/image/SAQ/12216562_is?$saq-rech-prod-gril$', 1, 1, 4, NULL, NULL),
(10, 'Tenuta Il Falchetto Bricco Paradiso -... 2015', '//s7d9.scene7.com/is/image/SAQ/13637422_is?$saq-rech-prod-gril$', '13637422', 'Vin rouge d\'Italie', 34, 'https://www.saq.com/page/fr/saqcom/vin-rouge/tenuta-il-falchetto-bricco-paradiso---barbera-dasti-superiore-docg-2015/13637422', '//s7d9.scene7.com/is/image/SAQ/13637422_is?$saq-rech-prod-gril$', 1, 1, NULL, NULL, NULL),
(11, '1000 Stories Zinfandel Californie', 'https://www.saq.com/media/catalog/product/1/3/13584455-1_1674499266.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13584455', 'Inconnue', 30.25, 'https://www.saq.com/fr/13584455', 'https://www.saq.com/media/catalog/product/1/3/13584455-1_1674499266.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(12, '11th Hour Cellars Pinot Noir', 'https://www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13966470', 'Inconnue', 17.75, 'https://www.saq.com/fr/13966470', 'https://www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(13, '13th Street Winery Gamay 2019', 'https://www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12705631', 'Inconnue', 20.15, 'https://www.saq.com/fr/12705631', 'https://www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(14, '19 Crimes Cabernet-Sauvignon Limestone Coast', 'https://www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12824197', 'Inconnue', 19.95, 'https://www.saq.com/fr/12824197', 'https://www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(15, '19 Crimes Shiraz/Grenache/Mataro', 'https://www.saq.com/media/catalog/product/1/2/12073995-1_1643120137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12073995', 'Inconnue', 19.95, 'https://www.saq.com/fr/12073995', 'https://www.saq.com/media/catalog/product/1/2/12073995-1_1643120137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(16, '19 Crimes The Warden 2017', 'https://www.saq.com/media/catalog/product/1/3/13846179-1_1578543327.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13846179', 'Inconnue', 30.25, 'https://www.saq.com/fr/13846179', 'https://www.saq.com/media/catalog/product/1/3/13846179-1_1578543327.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(17, '3 Badge Leese-Fitch Merlot 2015', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', '13523011', 'Inconnue', 18.85, 'https://www.saq.com/fr/13523011', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(18, '3 de Valandraud St-Émilion Grand Cru 2015', 'https://www.saq.com/media/catalog/product/1/4/14767616-1_1631204434.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14767616', 'Inconnue', 51.5, 'https://www.saq.com/fr/14767616', 'https://www.saq.com/media/catalog/product/1/4/14767616-1_1631204434.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(19, '350° de Bellevue 2019', 'https://www.saq.com/media/catalog/product/1/5/15004178-1_1659717339.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '15004178', 'Inconnue', 44.5, 'https://www.saq.com/fr/15004178', 'https://www.saq.com/media/catalog/product/1/5/15004178-1_1659717339.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(20, '655 Miles Cabernet Sauvignon Lodi', 'https://www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14139863', 'Inconnue', 15.5, 'https://www.saq.com/fr/14139863', 'https://www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(21, 'A Mandria di Signadore Patrimonio 2019', 'https://www.saq.com/media/catalog/product/1/4/14736271-1_1624654560.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14736271', 'Inconnue', 42, 'https://www.saq.com/fr/14736271', 'https://www.saq.com/media/catalog/product/1/4/14736271-1_1624654560.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(22, 'A Mandria di Signadore Patrimonio 2018', 'https://www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '11908161', 'Inconnue', 41, 'https://www.saq.com/fr/11908161', 'https://www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(23, 'A Occhipinti Rosso Arcaico 2021', 'https://www.saq.com/media/catalog/product/1/4/14651867-1_1612271137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14651867', 'Inconnue', 29.3, 'https://www.saq.com/fr/14651867', 'https://www.saq.com/media/catalog/product/1/4/14651867-1_1612271137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(24, 'A thousand Lives Cabernet-Sauvignon Mendoza', 'https://www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14250211', 'Inconnue', 10.6, 'https://www.saq.com/fr/14250211', 'https://www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(25, 'A. Christmann Pfalz Spätburgunder 2018', 'https://www.saq.com/media/catalog/product/1/4/14959941-1_1652993436.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14959941', 'Inconnue', 32.5, 'https://www.saq.com/fr/14959941', 'https://www.saq.com/media/catalog/product/1/4/14959941-1_1652993436.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(26, 'A.A. Badenhorst Family Blend 2018', 'https://www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12275298', 'Inconnue', 41.25, 'https://www.saq.com/fr/12275298', 'https://www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(27, 'A.A. Badenhorst The Curator 2020', 'https://www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12819435', 'Inconnue', 14.5, 'https://www.saq.com/fr/12819435', 'https://www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(28, 'AA Badenhorst Ramnasgras Cinsault 2019', 'https://www.saq.com/media/catalog/product/1/4/14991538-1_1659447049.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14991538', 'Inconnue', 48.5, 'https://www.saq.com/fr/14991538', 'https://www.saq.com/media/catalog/product/1/4/14991538-1_1659447049.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(29, 'Abad Dom Bueno Mencia Bierzo Joven 2019', 'https://www.saq.com/media/catalog/product/1/3/13794129-1_1626143125.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13794129', 'Inconnue', 16.45, 'https://www.saq.com/fr/13794129', 'https://www.saq.com/media/catalog/product/1/3/13794129-1_1626143125.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(30, 'Abbaye St-Hilaire Les Cerisiers 2019', 'https://www.saq.com/media/catalog/product/9/1/913558-1_1635862860.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '913558', 'Inconnue', 19.6, 'https://www.saq.com/fr/913558', 'https://www.saq.com/media/catalog/product/9/1/913558-1_1635862860.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(31, 'Abbia Nova Senza Vandalismi Cesanese del Piglio 2021', 'https://www.saq.com/media/catalog/product/1/4/14497871-1_1623254467.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14497871', 'Inconnue', 26.65, 'https://www.saq.com/fr/14497871', 'https://www.saq.com/media/catalog/product/1/4/14497871-1_1623254467.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(32, 'Abreu Cappella Rutherford 2012', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', '13319141', 'Inconnue', 967.75, 'https://www.saq.com/fr/13319141', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(33, 'Abreu Las Posadas North Coast 2012', 'https://www.saq.com/media/catalog/product/1/3/13319096-1_1625772640.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13319096', 'Inconnue', 967.75, 'https://www.saq.com/fr/13319096', 'https://www.saq.com/media/catalog/product/1/3/13319096-1_1625772640.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(34, 'Abreu Madrona Ranch 2013', 'https://www.saq.com/media/catalog/product/1/3/13700073-1_1656599528.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13700073', 'Inconnue', 909, 'https://www.saq.com/fr/13700073', 'https://www.saq.com/media/catalog/product/1/3/13700073-1_1656599528.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(35, '1000 Stories Zinfandel Californie', 'https://www.saq.com/media/catalog/product/1/3/13584455-1_1674499266.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13584455', 'Inconnue', 30.25, 'https://www.saq.com/fr/13584455', 'https://www.saq.com/media/catalog/product/1/3/13584455-1_1674499266.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(36, '11th Hour Cellars Pinot Noir', 'https://www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13966470', 'Inconnue', 17.75, 'https://www.saq.com/fr/13966470', 'https://www.saq.com/media/catalog/product/1/3/13966470-1_1578546924.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(37, '13th Street Winery Gamay 2019', 'https://www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12705631', 'Inconnue', 20.15, 'https://www.saq.com/fr/12705631', 'https://www.saq.com/media/catalog/product/1/2/12705631-1_1582140016.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(38, '19 Crimes Cabernet-Sauvignon Limestone Coast', 'https://www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12824197', 'Inconnue', 19.95, 'https://www.saq.com/fr/12824197', 'https://www.saq.com/media/catalog/product/1/2/12824197-1_1578411313.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(39, '19 Crimes Shiraz/Grenache/Mataro', 'https://www.saq.com/media/catalog/product/1/2/12073995-1_1643120137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12073995', 'Inconnue', 19.95, 'https://www.saq.com/fr/12073995', 'https://www.saq.com/media/catalog/product/1/2/12073995-1_1643120137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(40, '19 Crimes The Warden 2017', 'https://www.saq.com/media/catalog/product/1/3/13846179-1_1578543327.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13846179', 'Inconnue', 30.25, 'https://www.saq.com/fr/13846179', 'https://www.saq.com/media/catalog/product/1/3/13846179-1_1578543327.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(41, '3 Badge Leese-Fitch Merlot 2015', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', '13523011', 'Inconnue', 18.85, 'https://www.saq.com/fr/13523011', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(42, '3 de Valandraud St-Émilion Grand Cru 2015', 'https://www.saq.com/media/catalog/product/1/4/14767616-1_1631204434.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14767616', 'Inconnue', 51.5, 'https://www.saq.com/fr/14767616', 'https://www.saq.com/media/catalog/product/1/4/14767616-1_1631204434.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(43, '350° de Bellevue 2019', 'https://www.saq.com/media/catalog/product/1/5/15004178-1_1659717339.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '15004178', 'Inconnue', 44.5, 'https://www.saq.com/fr/15004178', 'https://www.saq.com/media/catalog/product/1/5/15004178-1_1659717339.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(44, '655 Miles Cabernet Sauvignon Lodi', 'https://www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14139863', 'Inconnue', 15.5, 'https://www.saq.com/fr/14139863', 'https://www.saq.com/media/catalog/product/1/4/14139863-1_1578552320.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(45, 'A Mandria di Signadore Patrimonio 2019', 'https://www.saq.com/media/catalog/product/1/4/14736271-1_1624654560.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14736271', 'Inconnue', 42, 'https://www.saq.com/fr/14736271', 'https://www.saq.com/media/catalog/product/1/4/14736271-1_1624654560.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(46, 'A Mandria di Signadore Patrimonio 2018', 'https://www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '11908161', 'Inconnue', 41, 'https://www.saq.com/fr/11908161', 'https://www.saq.com/media/catalog/product/1/1/11908161-1_1580629223.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(47, 'A Occhipinti Rosso Arcaico 2021', 'https://www.saq.com/media/catalog/product/1/4/14651867-1_1612271137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14651867', 'Inconnue', 29.3, 'https://www.saq.com/fr/14651867', 'https://www.saq.com/media/catalog/product/1/4/14651867-1_1612271137.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(48, 'A thousand Lives Cabernet-Sauvignon Mendoza', 'https://www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14250211', 'Inconnue', 10.6, 'https://www.saq.com/fr/14250211', 'https://www.saq.com/media/catalog/product/1/4/14250211-1_1580352616.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(49, 'A. Christmann Pfalz Spätburgunder 2018', 'https://www.saq.com/media/catalog/product/1/4/14959941-1_1652993436.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14959941', 'Inconnue', 32.5, 'https://www.saq.com/fr/14959941', 'https://www.saq.com/media/catalog/product/1/4/14959941-1_1652993436.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(50, 'A.A. Badenhorst Family Blend 2018', 'https://www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12275298', 'Inconnue', 41.25, 'https://www.saq.com/fr/12275298', 'https://www.saq.com/media/catalog/product/1/2/12275298-1_1581958830.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(51, 'A.A. Badenhorst The Curator 2020', 'https://www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '12819435', 'Inconnue', 14.5, 'https://www.saq.com/fr/12819435', 'https://www.saq.com/media/catalog/product/1/2/12819435-1_1589314084.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(52, 'AA Badenhorst Ramnasgras Cinsault 2019', 'https://www.saq.com/media/catalog/product/1/4/14991538-1_1659447049.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14991538', 'Inconnue', 48.5, 'https://www.saq.com/fr/14991538', 'https://www.saq.com/media/catalog/product/1/4/14991538-1_1659447049.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(53, 'Abad Dom Bueno Mencia Bierzo Joven 2019', 'https://www.saq.com/media/catalog/product/1/3/13794129-1_1626143125.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13794129', 'Inconnue', 16.45, 'https://www.saq.com/fr/13794129', 'https://www.saq.com/media/catalog/product/1/3/13794129-1_1626143125.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(54, 'Abbaye St-Hilaire Les Cerisiers 2019', 'https://www.saq.com/media/catalog/product/9/1/913558-1_1635862860.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '913558', 'Inconnue', 19.6, 'https://www.saq.com/fr/913558', 'https://www.saq.com/media/catalog/product/9/1/913558-1_1635862860.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(55, 'Abbia Nova Senza Vandalismi Cesanese del Piglio 2021', 'https://www.saq.com/media/catalog/product/1/4/14497871-1_1623254467.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '14497871', 'Inconnue', 26.65, 'https://www.saq.com/fr/14497871', 'https://www.saq.com/media/catalog/product/1/4/14497871-1_1623254467.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(56, 'Abreu Cappella Rutherford 2012', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', '13319141', 'Inconnue', 967.75, 'https://www.saq.com/fr/13319141', 'https://www.saq.com/media/wysiwyg/placeholder/category/06.png', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(57, 'Abreu Las Posadas North Coast 2012', 'https://www.saq.com/media/catalog/product/1/3/13319096-1_1625772640.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13319096', 'Inconnue', 967.75, 'https://www.saq.com/fr/13319096', 'https://www.saq.com/media/catalog/product/1/3/13319096-1_1625772640.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44'),
(58, 'Abreu Madrona Ranch 2013', 'https://www.saq.com/media/catalog/product/1/3/13700073-1_1656599528.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', '13700073', 'Inconnue', 909, 'https://www.saq.com/fr/13700073', 'https://www.saq.com/media/catalog/product/1/3/13700073-1_1656599528.png?quality=80&fit=bounds&height=166&width=111&canvas=111:166', 1, 1, 1, '2023-04-17 23:17:44', '2023-04-17 23:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `vino_celliers`
--

CREATE TABLE `vino_celliers` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `quantite_max` int(11) DEFAULT NULL,
  `description` text,
  `utilisateurs_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_celliers`
--

INSERT INTO `vino_celliers` (`id`, `nom`, `quantite_max`, `description`, `utilisateurs_id`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Malibu mansion', 2000, 'Le cellier familial transmis de génération en génération', 1, NULL, '2023-04-18 00:37:44', 'img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg'),
(2, 'Chalet', 1000, 'La cave a vin du chalet est un secret bien gardé !', 1, '2023-04-17 18:38:23', '2023-04-18 00:38:44', 'img/celliers/cellierCaveVinMontWashington.webp'),
(3, 'Maison de campagne', 1000, 'Petit cellier ultra moderne avec peinture de Besner.', 1, '2023-04-17 18:38:38', '2023-04-18 00:39:35', 'img/celliers/cellier_moderne_decoratif.jpeg'),
(4, 'Maison de Provence', 1000, 'Cellier aromatisé à la lavande avec lumière ultraviolette pour conserver à 15oC.', 1, '2023-04-17 21:35:18', '2023-04-18 00:41:15', 'img/celliers/cellier_moderne_led.jpg'),
(5, 'Mon cellier perso chez Penélope Cruz', 300, 'Quel bonheur d\'avoir un petit espace de vin chez une amie !', 1, '2023-04-17 21:35:58', '2023-04-18 00:43:07', 'img/celliers/cellier_bois_moderne_trad.webp'),
(6, 'Challet', 100, 'Un petit cellier moderne', 1, '2023-04-17 23:23:30', '2023-04-17 23:23:30', 'img/celliers/cellier_verre_moderne.jpg'),
(7, 'Chalet', 1000, 'Une cave a vin traditionnelle', 1, '2023-04-18 00:33:05', '2023-04-18 00:33:05', 'img/celliers/cellierCaveVinMontWashington.webp');

-- --------------------------------------------------------

--
-- Table structure for table `vino_formats`
--

CREATE TABLE `vino_formats` (
  `id` int(11) NOT NULL,
  `format` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_formats`
--

INSERT INTO `vino_formats` (`id`, `format`, `created_at`, `updated_at`) VALUES
(1, '750 ml', NULL, NULL),
(2, '3 L', NULL, NULL),
(3, '1 L', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vino_types`
--

CREATE TABLE `vino_types` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_types`
--

INSERT INTO `vino_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Vin rouge', NULL, NULL),
(2, 'Vin blanc', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bouteille_par_celliers`
--
ALTER TABLE `bouteille_par_celliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino_bouteilles_has_vino_celliers_vino_celliers1_idx` (`vino_cellier_id`),
  ADD KEY `fk_vino_bouteilles_has_vino_celliers_vino_bouteilles1_idx` (`vino_bouteille_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `liste_souhaits`
--
ALTER TABLE `liste_souhaits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateurs_has_vino_bouteilles_vino_bouteilles1_idx` (`vino_bouteilles_id`),
  ADD KEY `fk_utilisateurs_has_vino_bouteilles_utilisateurs1_idx` (`utilisateurs_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino_bouteilles_has_utilisateurs_utilisateurs1_idx` (`utilisateurs_id`),
  ADD KEY `fk_notes_vino_bouteilles1_idx` (`vino_bouteilles_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateurs_utilisateur_privileges1_idx` (`utilisateur_privilege_id`),
  ADD KEY `fk_utilisateurs_pays1_idx` (`pays_id`);

--
-- Indexes for table `utilisateur_privileges`
--
ALTER TABLE `utilisateur_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vino_bouteilles`
--
ALTER TABLE `vino_bouteilles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino_bouteilles_vino_format1_idx` (`vino_format_id`),
  ADD KEY `fk_vino_bouteilles_vino_types1_idx` (`vino_type_id`),
  ADD KEY `fk_vino_bouteilles_pays1_idx` (`pays_id`);

--
-- Indexes for table `vino_celliers`
--
ALTER TABLE `vino_celliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino_celliers_utilisateurs_idx` (`utilisateurs_id`);

--
-- Indexes for table `vino_formats`
--
ALTER TABLE `vino_formats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vino_types`
--
ALTER TABLE `vino_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bouteille_par_celliers`
--
ALTER TABLE `bouteille_par_celliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liste_souhaits`
--
ALTER TABLE `liste_souhaits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur_privileges`
--
ALTER TABLE `utilisateur_privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vino_bouteilles`
--
ALTER TABLE `vino_bouteilles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `vino_celliers`
--
ALTER TABLE `vino_celliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vino_formats`
--
ALTER TABLE `vino_formats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vino_types`
--
ALTER TABLE `vino_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bouteille_par_celliers`
--
ALTER TABLE `bouteille_par_celliers`
  ADD CONSTRAINT `fk_vino_bouteilles_has_vino_celliers_vino_bouteilles1` FOREIGN KEY (`vino_bouteille_id`) REFERENCES `vino_bouteilles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino_bouteilles_has_vino_celliers_vino_celliers1` FOREIGN KEY (`vino_cellier_id`) REFERENCES `vino_celliers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `liste_souhaits`
--
ALTER TABLE `liste_souhaits`
  ADD CONSTRAINT `fk_utilisateurs_has_vino_bouteilles_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateurs_has_vino_bouteilles_vino_bouteilles1` FOREIGN KEY (`vino_bouteilles_id`) REFERENCES `vino_bouteilles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `fk_notes_vino_bouteilles1` FOREIGN KEY (`vino_bouteilles_id`) REFERENCES `vino_bouteilles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino_bouteilles_has_utilisateurs_utilisateurs1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `fk_utilisateurs_pays1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateurs_utilisateur_privileges1` FOREIGN KEY (`utilisateur_privilege_id`) REFERENCES `utilisateur_privileges` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vino_bouteilles`
--
ALTER TABLE `vino_bouteilles`
  ADD CONSTRAINT `fk_vino_bouteilles_pays1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino_bouteilles_vino_format1` FOREIGN KEY (`vino_format_id`) REFERENCES `vino_formats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vino_bouteilles_vino_types1` FOREIGN KEY (`vino_type_id`) REFERENCES `vino_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vino_celliers`
--
ALTER TABLE `vino_celliers`
  ADD CONSTRAINT `fk_vino_celliers_utilisateurs` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
