-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 août 2022 à 09:24
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(14, 'ibrad-Sempai', 'ibrahimdiabagate200@gmail.com', 'testss', 'scsvcsqv', '2022-08-17 12:16:04', '2022-08-17 12:16:04'),
(13, 'fo_o', 'oogyoo@gkuk', 'dqfeqf', 'sqfsqfsqfe', '2022-08-17 12:11:15', '2022-08-17 12:11:15'),
(12, 'bradley', 'Sayazuki@dev.com', 'Test', 'On est bon !', '2022-08-17 08:23:14', '2022-08-17 08:23:14');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `me`
--

DROP TABLE IF EXISTS `me`;
CREATE TABLE IF NOT EXISTS `me` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `birthday` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `me`
--

INSERT INTO `me` (`id`, `birthday`, `phone`, `address`, `email`, `city`, `freelance`, `img_url`, `created_at`, `updated_at`) VALUES
(1, '20 Mai 2000', '+225 0575647261', 'Abidjan, Côte d\'Ivoire', 'ibrahdiabagate2000@gmail.com', 'Abidjan', 'Disponible', 'me.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_01_102006_create_me_table', 1),
(6, '2022_08_12_103529_create_skills_table', 1),
(7, '2022_08_12_112922_create_resume_table', 1),
(8, '2022_08_12_112953_create_services_table', 1),
(9, '2022_08_12_113143_create_portfolio_table', 1),
(10, '2022_08_12_113402_create_contact_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nb_img` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `Client`, `categorie`, `img`, `nb_img`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Car-Tracking', 'GS2E', 'APPLICATION WEB', 'ct', 12, 'Application de gestion des véhicule de services qui vise à améliorer la gestion des véhicules de services, il s’agit donc d’une application web \r\naccessible à tous les collaborateurs et usagés de ses véhicules qui sera le point \r\ncentral entre usagés et gestionnaires :  Authentification LDAP, Espace utilisateur (Faire une demande, Observer l’évolution de la demande, Envoi de mail pour chaque demande et validation); Espace gestionnaire (Enregistrement et mise à jour des infos des véhicules, Enregistrement des sorties et entrées de véhicules)\r\n- Afficher les statistiques d’utilisation ', NULL, NULL),
(2, 'Cert-Alert', 'CIE', 'APPLICATION WEB', 'ca', 6, 'Application de supervision des certificats web, contrôle journalier des certificats web applicatifs afin d\'anticiper sur leur date d\'expiration et de prévenir certains incidents pouvant impacter leur disponibilité.', NULL, NULL),
(3, 'SmartSoft', 'SmartSoft', 'APPLICATION WEB', 'ss', 6, 'Site web d\'une agence de développement informatique', NULL, NULL),
(4, 'uici.info', 'UICI', 'APPLICATION WEB', 'uici', 5, 'Site web informatif de l\'université international de Côte d\'Ivoire (UICI)', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `resume`
--

INSERT INTO `resume` (`id`, `created_at`, `updated_at`, `categorie`, `title`, `description`, `period`, `details`) VALUES
(1, NULL, NULL, 'Resumé', 'DIABAGATE IBRAHIM', 'Developpeur innovant et soucieux des délais avec plus de 3 ans d\'expérience dans la conception et le développement d\'applications web et sites web.', 'null', 'null'),
(2, NULL, NULL, 'Education', 'LICENCE EN INFORMATIQUE DEVELOPPEMENT D\'APPLICATIONS', 'Université Internationnal de Côte d\'Ivoire (UICI), Abidjan', '2018 - 2021', 'null'),
(3, NULL, NULL, 'Education', 'CYBERSÉCURITY ESSENTIALS', 'Cisco Networking Academy', '2018 - 2021', 'null'),
(4, NULL, NULL, 'Education', 'FORMATION PRATIQUE AU CEH (CERTIFIED ETHICAL HACKER)', 'NYS AFRICA, Abidjan', '2018 - 2021', 'null'),
(5, NULL, NULL, 'Education', 'BACCALAUREAT SERIE D', 'Ecole William Ponty, Abidjan', '2018', 'null'),
(6, NULL, NULL, 'Expérience', 'STAGE D\'EXPERIENCE PROFESSIONNELLE', 'Groupement des Services d\'Eau et d\'Electricité (GS2E), Abidjan', 'Mars 2022 - Présent', 'Tâches administratifs sur un domaine Active Directory, Création de scripts PowerShell, Analyse de données relatifs aux audits internes, Développement d\'applications web'),
(7, NULL, NULL, 'Expérience', 'STAGE ECOLE', 'Groupement des Services d\'Eau et d\'Electricité (GS2E), Abidjan', 'Novembre 2022 - Janvier 2022', 'Scripts d\'automatisation des actions sur un domaine Active Directory, Développement de Car-Tracking (Application web de suivi des véhicules de services), Assistance au utilisateurs sur Microsoft Office 365 Azure AD et Exchange'),
(8, NULL, NULL, 'Expérience', 'DEVELOPPEUR WEB FREELANCE', 'Abidjan', '2019 - Présent', 'null'),
(9, NULL, NULL, 'Certifications', 'MICROSOFT TECHNOLOGY ASSOCIATE', 'HTML&CSS, Langage Python et JavaScript', 'null', 'null'),
(10, NULL, NULL, 'Certifications', 'CISCO NETWORKING ACADEMY', 'Cybersécurity Essentials', '', ''),
(11, NULL, NULL, 'Activités', 'Président de club informatique', 'UICI (UNIVERSITÉ INTERNATIONALE DE CÔTE D’IVOIRE), ABIDJAN', '2020 – 2021', 'Gestion administrative du club, organisation de conférence et des séances de formations.'),
(12, NULL, NULL, 'Activités', 'FORMATEUR', 'Abidjan', '2018 - 2019', 'Formateur en informatique au sein de l\'association It-Coder');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Développement ', 'Conception et développement de sites web et applications web', NULL, NULL),
(2, 'Scripting', 'Créations de scripts d\'automatisations ou de réalisation de tâches spécifiques', NULL, NULL),
(3, 'Formateur IT', 'Formations sur les logiciels de bureautique, les outils et langages de programmation informatique, …', NULL, NULL),
(7, 'Infographie', 'Réalisation d\'affiches publicitaires, conception de logo, flyers, montages vidéos etc...', NULL, NULL),
(8, 'Pentesting', 'Test d\'intrusion applicatif, réseau et système', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `title`, `level`, `created_at`, `updated_at`) VALUES
(1, 'HTML', '100', NULL, NULL),
(2, 'CSS', '90', NULL, NULL),
(3, 'JAVASCRIPT', '75', NULL, NULL),
(4, 'BOOTSTRAP', '90', NULL, NULL),
(5, 'LARAVEL', '70', NULL, NULL),
(6, 'BASE DE DONNÉES MYSQL', '80', NULL, NULL),
(7, 'SQL', '90', NULL, NULL),
(8, 'LANGAGE PYTHON', '80', NULL, NULL),
(9, 'POWERSHELL SCRIPTING', '85', NULL, NULL),
(10, 'ACTIVE DIRECTORY', '80', NULL, NULL),
(11, 'ANALYSE DE DONNEES', '75', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
