-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema elections
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema elections
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `elections` DEFAULT CHARACTER SET utf8 ;
USE `elections` ;

-- -----------------------------------------------------
-- Table `elections`.`elections`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elections`.`elections` (
  `id` INT UNSIGNED NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `anyo_UNIQUE` (`date` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elections`.`provinces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elections`.`provinces` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elections`.`alternatives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elections`.`alternatives` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `presi_vice` VARCHAR(45) NULL,
  `logo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elections`.`votes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elections`.`votes` (
  `id_election` INT UNSIGNED NULL,
  `id_province` INT UNSIGNED NULL,
  `id_alternative` INT UNSIGNED NULL,
  `quantity` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_election`, `id_province`, `id_alternative`),
  INDEX `fk_provincia_idx` (`id_province` ASC) VISIBLE,
  INDEX `fk_alternativa_idx` (`id_alternative` ASC) VISIBLE,
  CONSTRAINT `fk_eleccion`
    FOREIGN KEY (`id_election`)
    REFERENCES `elections`.`elections` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_provincia`
    FOREIGN KEY (`id_province`)
    REFERENCES `elections`.`provinces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alternativa`
    FOREIGN KEY (`id_alternative`)
    REFERENCES `elections`.`alternatives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elections`.`population`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elections`.`population` (
  `id` INT UNSIGNED NULL,
  `total_population` INT UNSIGNED NOT NULL,
  `registered_voters` INT UNSIGNED NOT NULL,
  `province_id` INT UNSIGNED NOT NULL,
  `election_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_provinces_idx` (`province_id` ASC) VISIBLE,
  INDEX `fk_election_idx` (`election_id` ASC) VISIBLE,
  CONSTRAINT `fk_province`
    FOREIGN KEY (`province_id`)
    REFERENCES `elections`.`provinces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_election`
    FOREIGN KEY (`election_id`)
    REFERENCES `elections`.`elections` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
