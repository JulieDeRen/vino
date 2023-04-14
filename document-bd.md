SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vino` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Table `utilisateur__privileges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `utilisateur__privileges` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `privilege` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pays` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pays` VARCHAR(60) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `utilisateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(60) NULL,
  `prénom` VARCHAR(60) NULL,
  `courriel` VARCHAR(100) NOT NULL,
  `mot_passe` VARCHAR(255) NOT NULL,
  `utilisateur__privilege_id` INT NOT NULL,
  `pays_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_utilisateur_utilisateur__categorie_idx` (`utilisateur__privilege_id` ASC),
  INDEX `fk_utilisateur_vino__pays1_idx` (`pays_id` ASC),
  CONSTRAINT `fk_utilisateur_utilisateur__categorie`
    FOREIGN KEY (`utilisateur__privilege_id`)
    REFERENCES `utilisateur__privileges` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_vino__pays1`
    FOREIGN KEY (`pays_id`)
    REFERENCES `pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino__format`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino__format` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `format` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino__types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino__types` (
  `id` INT NOT NULL,
  `type` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `vino__bouteilles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino__bouteilles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NULL DEFAULT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `code_saq` VARCHAR(255) NULL DEFAULT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `prix_saq` FLOAT NULL DEFAULT NULL,
  `url_saq` VARCHAR(255) NULL DEFAULT NULL,
  `url_img` VARCHAR(255) NULL DEFAULT NULL,
  `type` INT NULL,
  `format` INT NULL,
  `pays` INT NULL,
  `utilisateur_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino__bouteille_vino__type_idx` (`type` ASC),
  INDEX `fk_vino__bouteille_vino__format1_idx` (`format` ASC),
  INDEX `fk_vino__bouteille_vino__pays1_idx` (`pays` ASC),
  INDEX `fk_vino__bouteille_utilisateur1_idx` (`utilisateur_id` ASC),
  CONSTRAINT `fk_vino__bouteille_vino__type`
    FOREIGN KEY (`type`)
    REFERENCES `vino__types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino__bouteille_vino__format1`
    FOREIGN KEY (`format`)
    REFERENCES `vino__format` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino__bouteille_vino__pays1`
    FOREIGN KEY (`pays`)
    REFERENCES `pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino__bouteille_utilisateur1`
    FOREIGN KEY (`utilisateur_id`)
    REFERENCES `utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `notes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `notes` (
  `utilisateurs_id` INT NOT NULL,
  `vino__bouteilles_id` INT NOT NULL,
  `note` INT NOT NULL,
  PRIMARY KEY (`utilisateurs_id`, `vino__bouteilles_id`),
  INDEX `fk_utilisateurs_has_vino__bouteilles_vino__bouteilles1_idx` (`vino__bouteilles_id` ASC),
  INDEX `fk_utilisateurs_has_vino__bouteilles_utilisateurs1_idx` (`utilisateurs_id` ASC),
  CONSTRAINT `fk_utilisateurs_has_vino__bouteilles_utilisateurs1`
    FOREIGN KEY (`utilisateurs_id`)
    REFERENCES `utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateurs_has_vino__bouteilles_vino__bouteilles1`
    FOREIGN KEY (`vino__bouteilles_id`)
    REFERENCES `vino__bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `liste_souhaits`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `liste_souhaits` (
  `utilisateurs_id` INT NOT NULL,
  `vino__bouteilles_id` INT NOT NULL,
  `date_creation` DATE NULL,
  PRIMARY KEY (`utilisateurs_id`, `vino__bouteilles_id`),
  INDEX `fk_utilisateurs_has_vino__bouteilles_vino__bouteilles2_idx` (`vino__bouteilles_id` ASC),
  INDEX `fk_utilisateurs_has_vino__bouteilles_utilisateurs2_idx` (`utilisateurs_id` ASC),
  CONSTRAINT `fk_utilisateurs_has_vino__bouteilles_utilisateurs2`
    FOREIGN KEY (`utilisateurs_id`)
    REFERENCES `utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateurs_has_vino__bouteilles_vino__bouteilles2`
    FOREIGN KEY (`vino__bouteilles_id`)
    REFERENCES `vino__bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino__celliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino__celliers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `utilisateur_id` INT NOT NULL,
  `nom` VARCHAR(60) NOT NULL,
  `quantite_max` INT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino__cellier_utilisateur1_idx` (`utilisateur_id` ASC),
  CONSTRAINT `fk_vino__cellier_utilisateur1`
    FOREIGN KEY (`utilisateur_id`)
    REFERENCES `utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bouteille_par_celliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bouteille_par_celliers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_achat` DATE NULL,
  `garde_jusqua` DATE NULL,
  `prix` FLOAT NULL,
  `quantite` INT NOT NULL,
  `millesime` INT NULL,
  `vino__bouteille_id` INT NOT NULL,
  `vino__cellier_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino__bouteille_has_vino__cellier_vino__cellier1_idx` (`vino__cellier_id` ASC),
  INDEX `fk_vino__bouteille_has_vino__cellier_vino__bouteille1_idx` (`vino__bouteille_id` ASC),
  CONSTRAINT `fk_vino__bouteille_has_vino__cellier_vino__bouteille1`
    FOREIGN KEY (`vino__bouteille_id`)
    REFERENCES `vino__bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino__bouteille_has_vino__cellier_vino__cellier1`
    FOREIGN KEY (`vino__cellier_id`)
    REFERENCES `vino__celliers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;