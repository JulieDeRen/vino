-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vino
-- -----------------------------------------------------

-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vino` DEFAULT CHARACTER SET utf8 ;

-- -----------------------------------------------------
-- Table `vino`.`utilisateur_privileges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`utilisateur_privileges` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `privilege` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`pays` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pays` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`utilisateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`utilisateurs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(60) NULL,
  `prenom` VARCHAR(60) NULL,
  `courriel` VARCHAR(255) NOT NULL,
  `mot_passe` VARCHAR(255) NOT NULL,
  `utilisateur_privilege_id` INT NOT NULL,
  `pays_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_utilisateurs_utilisateur_privileges1_idx` (`utilisateur_privilege_id` ASC),
  INDEX `fk_utilisateurs_pays1_idx` (`pays_id` ASC),
  CONSTRAINT `fk_utilisateurs_utilisateur_privileges1`
    FOREIGN KEY (`utilisateur_privilege_id`)
    REFERENCES `vino`.`utilisateur_privileges` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateurs_pays1`
    FOREIGN KEY (`pays_id`)
    REFERENCES `vino`.`pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`vino_celliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`vino_celliers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(100) NOT NULL,
  `quantite_max` INT NULL,
  `description` TEXT NULL,
  `millesime` INT NULL,
  `utilisateurs_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino_celliers_utilisateurs_idx` (`utilisateurs_id` ASC),
  CONSTRAINT `fk_vino_celliers_utilisateurs`
    FOREIGN KEY (`utilisateurs_id`)
    REFERENCES `vino`.`utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`vino_formats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`vino_formats` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `format` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`vino_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`vino_types` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`vino_bouteilles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`vino_bouteilles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(200) NOT NULL,
  `image` VARCHAR(255) NULL,
  `code_saq` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `prix_saq` DOUBLE NULL,
  `url_saq` VARCHAR(255) NULL,
  `url_img` VARCHAR(255) NULL,
  `vino_format_id` INT NULL,
  `vino_type_id` INT NULL,
  `pays_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino_bouteilles_vino_format1_idx` (`vino_format_id` ASC),
  INDEX `fk_vino_bouteilles_vino_types1_idx` (`vino_type_id` ASC),
  INDEX `fk_vino_bouteilles_pays1_idx` (`pays_id` ASC),
  CONSTRAINT `fk_vino_bouteilles_vino_format1`
    FOREIGN KEY (`vino_format_id`)
    REFERENCES `vino`.`vino_formats` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino_bouteilles_vino_types1`
    FOREIGN KEY (`vino_type_id`)
    REFERENCES `vino`.`vino_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino_bouteilles_pays1`
    FOREIGN KEY (`pays_id`)
    REFERENCES `vino`.`pays` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`bouteille_par_celliers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`bouteille_par_celliers` (
  `id` INT NOT NULL,
  `date_achat` DATE NULL,
  `garde_jusqua` DATE NULL,
  `prix` DOUBLE NULL,
  `quantite` INT NOT NULL,
  `vino_cellier_id` INT NOT NULL,
  `vino_bouteille_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_vino_bouteilles_has_vino_celliers_vino_celliers1_idx` (`vino_cellier_id` ASC),
  INDEX `fk_vino_bouteilles_has_vino_celliers_vino_bouteilles1_idx` (`vino_bouteille_id` ASC),
  CONSTRAINT `fk_vino_bouteilles_has_vino_celliers_vino_bouteilles1`
    FOREIGN KEY (`vino_bouteille_id`)
    REFERENCES `vino`.`vino_bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vino_bouteilles_has_vino_celliers_vino_celliers1`
    FOREIGN KEY (`vino_cellier_id`)
    REFERENCES `vino`.`vino_celliers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`notes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`notes` (
  `note` INT NULL,
  `utilisateurs_id` INT NOT NULL,
  `vino_bouteilles_id` INT NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  INDEX `fk_vino_bouteilles_has_utilisateurs_utilisateurs1_idx` (`utilisateurs_id` ASC),
  INDEX `fk_notes_vino_bouteilles1_idx` (`vino_bouteilles_id` ASC),
  CONSTRAINT `fk_vino_bouteilles_has_utilisateurs_utilisateurs1`
    FOREIGN KEY (`utilisateurs_id`)
    REFERENCES `vino`.`utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notes_vino_bouteilles1`
    FOREIGN KEY (`vino_bouteilles_id`)
    REFERENCES `vino`.`vino_bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vino`.`liste_souhaits`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vino`.`liste_souhaits` (
  `utilisateurs_id` INT NOT NULL,
  `vino_bouteilles_id` INT NOT NULL,
  `id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_utilisateurs_has_vino_bouteilles_vino_bouteilles1_idx` (`vino_bouteilles_id` ASC),
  INDEX `fk_utilisateurs_has_vino_bouteilles_utilisateurs1_idx` (`utilisateurs_id` ASC),
  CONSTRAINT `fk_utilisateurs_has_vino_bouteilles_utilisateurs1`
    FOREIGN KEY (`utilisateurs_id`)
    REFERENCES `vino`.`utilisateurs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateurs_has_vino_bouteilles_vino_bouteilles1`
    FOREIGN KEY (`vino_bouteilles_id`)
    REFERENCES `vino`.`vino_bouteilles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;