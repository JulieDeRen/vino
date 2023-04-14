-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 14, 2023 at 05:13 PM
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
  `millesime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bouteille_par_celliers`
--

INSERT INTO `bouteille_par_celliers` (`id`, `date_achat`, `garde_jusqua`, `prix`, `quantite`, `vino_cellier_id`, `vino_bouteille_id`, `millesime`) VALUES
(1, NULL, NULL, 3500, 4, 1, 4, 1975),
(2, '2019-01-16', '2024-01-16', 80, 50, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liste_souhaits`
--

CREATE TABLE `liste_souhaits` (
  `utilisateurs_id` int(11) NOT NULL,
  `vino_bouteilles_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note` int(11) DEFAULT NULL,
  `utilisateurs_id` int(11) NOT NULL,
  `vino_bouteilles_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `pays` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `pays`) VALUES
(1, 'Espagne'),
(2, 'États-Unis'),
(3, 'Autriche'),
(4, 'France');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) DEFAULT NULL,
  `prenom` varchar(60) DEFAULT NULL,
  `courriel` varchar(255) NOT NULL,
  `mot_passe` varchar(255) NOT NULL,
  `utilisateur_privilege_id` int(11) NOT NULL,
  `pays_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `courriel`, `mot_passe`, `utilisateur_privilege_id`, `pays_id`) VALUES
(1, 'Cage', 'Nicolas', 'nicolas@cage.com', '123456', 1, 2),
(2, 'Almodoval', 'Pedro', 'pedro@gmail.com', '123456', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur_privileges`
--

CREATE TABLE `utilisateur_privileges` (
  `id` int(11) NOT NULL,
  `privilege` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur_privileges`
--

INSERT INTO `utilisateur_privileges` (`id`, `privilege`) VALUES
(1, 'utilisateur'),
(2, 'administrateur');

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
  `pays_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_bouteilles`
--

INSERT INTO `vino_bouteilles` (`id`, `nom`, `image`, `code_saq`, `description`, `prix_saq`, `url_saq`, `url_img`, `vino_format_id`, `vino_type_id`, `pays_id`) VALUES
(1, 'Borsao Seleccion', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', '10324623', 'Vin rouge d\'Espagne', 11, 'https://www.saq.com/page/fr/saqcom/vin-rouge/borsao-seleccion/10324623', '//s7d9.scene7.com/is/image/SAQ/10324623_is?$saq-rech-prod-gril$', 1, 1, 1),
(2, 'Monasterio de Las Vinas Gran Reserva', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', '10359156', 'Vin rouge d\'Espagne', 19, 'https://www.saq.com/page/fr/saqcom/vin-rouge/monasterio-de-las-vinas-gran-reserva/10359156', '//s7d9.scene7.com/is/image/SAQ/10359156_is?$saq-rech-prod-gril$', 1, 1, 1),
(3, 'Castano Hecula', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', '11676671', 'Vin rouge d\'Espagne', 12, 'https://www.saq.com/page/fr/saqcom/vin-rouge/castano-hecula/11676671', '//s7d9.scene7.com/is/image/SAQ/11676671_is?$saq-rech-prod-gril$', 1, 1, 1),
(4, 'Campo Viejo Tempranillo Rioja', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', '11462446', 'Vin rouge d\'Espagne', 14, 'https://www.saq.com/page/fr/saqcom/vin-rouge/campo-viejo-tempranillo-rioja/11462446', '//s7d9.scene7.com/is/image/SAQ/11462446_is?$saq-rech-prod-gril$', 1, 1, 1),
(5, 'Bodegas Atalaya Laya 2017', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', '12375942', 'Vin rouge d\'Espagne', 17, 'https://www.saq.com/page/fr/saqcom/vin-rouge/bodegas-atalaya-laya-2017/12375942', '//s7d9.scene7.com/is/image/SAQ/12375942_is?$saq-rech-prod-gril$', 1, 1, 1),
(6, 'Vin Vault Pinot Grigio', '//s7d9.scene7.com/is/image/SAQ/13467048_is?$saq-rech-prod-gril$', '13467048', 'Vin blanc des États-Unis', 15, 'https://www.saq.com/page/fr/saqcom/vin-blanc/vin-vault-pinot-grigio/13467048', '//s7d9.scene7.com/is/image/SAQ/13467048_is?$saq-rech-prod-gril$', 2, 2, 2),
(7, 'Huber Riesling Engelsberg 2017', '//s7d9.scene7.com/is/image/SAQ/13675841_is?$saq-rech-prod-gril$', '13675841', 'Vin blanc d\'Autriche', 22, 'https://www.saq.com/page/fr/saqcom/vin-blanc/huber-riesling-engelsberg-2017/13675841', '//s7d9.scene7.com/is/image/SAQ/13675841_is?$saq-rech-prod-gril$', 1, 2, 3),
(8, 'Dominio de Tares Estay Castilla y Léon 2015', '//s7d9.scene7.com/is/image/SAQ/13802571_is?$saq-rech-prod-gril$', '13802571', 'Vin rouge d\'Espagne', 18, 'https://www.saq.com/page/fr/saqcom/vin-rouge/dominio-de-tares-estay-castilla-y-leon-2015/13802571', '//s7d9.scene7.com/is/image/SAQ/13802571_is?$saq-rech-prod-gril$', 1, 1, 1),
(9, 'Tessellae Old Vines Côtes du Roussillon 2016', '//s7d9.scene7.com/is/image/SAQ/12216562_is?$saq-rech-prod-gril$', '12216562', 'Vin rouge de France', 21, 'https://www.saq.com/page/fr/saqcom/vin-rouge/tessellae-old-vines-cotes-du-roussillon-2016/12216562', '//s7d9.scene7.com/is/image/SAQ/12216562_is?$saq-rech-prod-gril$', 1, 1, 4),
(10, 'Tenuta Il Falchetto Bricco Paradiso -... 2015', '//s7d9.scene7.com/is/image/SAQ/13637422_is?$saq-rech-prod-gril$', '13637422', 'Vin rouge d\'Italie', 34, 'https://www.saq.com/page/fr/saqcom/vin-rouge/tenuta-il-falchetto-bricco-paradiso---barbera-dasti-superiore-docg-2015/13637422', '//s7d9.scene7.com/is/image/SAQ/13637422_is?$saq-rech-prod-gril$', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vino_celliers`
--

CREATE TABLE `vino_celliers` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `quantite_max` int(11) DEFAULT NULL,
  `description` text,
  `utilisateurs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_celliers`
--

INSERT INTO `vino_celliers` (`id`, `nom`, `quantite_max`, `description`, `utilisateurs_id`) VALUES
(1, 'Malibu mansion', 2000, 'Pour les réalisateurs, les producteurs et les banquiers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vino_formats`
--

CREATE TABLE `vino_formats` (
  `id` int(11) NOT NULL,
  `format` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_formats`
--

INSERT INTO `vino_formats` (`id`, `format`) VALUES
(1, '750 ml'),
(2, '3 L'),
(3, '1 L');

-- --------------------------------------------------------

--
-- Table structure for table `vino_types`
--

CREATE TABLE `vino_types` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vino_types`
--

INSERT INTO `vino_types` (`id`, `type`) VALUES
(1, 'Vin rouge'),
(2, 'Vin blanc');

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
-- Indexes for table `liste_souhaits`
--
ALTER TABLE `liste_souhaits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateurs_has_vino_bouteilles_vino_bouteilles1_idx` (`vino_bouteilles_id`),
  ADD KEY `fk_utilisateurs_has_vino_bouteilles_utilisateurs1_idx` (`utilisateurs_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vino_bouteilles_has_utilisateurs_utilisateurs1_idx` (`utilisateurs_id`),
  ADD KEY `fk_notes_vino_bouteilles1_idx` (`vino_bouteilles_id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `liste_souhaits`
--
ALTER TABLE `liste_souhaits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vino_celliers`
--
ALTER TABLE `vino_celliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
