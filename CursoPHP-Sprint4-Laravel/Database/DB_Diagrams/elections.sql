-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema elecciones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema elecciones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `elecciones` DEFAULT CHARACTER SET utf8 ;
USE `elecciones` ;

-- -----------------------------------------------------
-- Table `elecciones`.`elections`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elecciones`.`elections` (
  `_id` INT UNSIGNED NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`_id`),
  UNIQUE INDEX `anyo_UNIQUE` (`date` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elecciones`.`provinces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elecciones`.`provinces` (
  `_id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `population` INT UNSIGNED NOT NULL,
  `registered_voters` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elecciones`.`alternatives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elecciones`.`alternatives` (
  `_id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `presi_vice` VARCHAR(45) NULL,
  `logo` VARCHAR(45) NULL,
  PRIMARY KEY (`_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `elecciones`.`votes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elecciones`.`votes` (
  `id_election` INT UNSIGNED NULL,
  `id_province` INT UNSIGNED NULL,
  `id_alternative` INT UNSIGNED NULL,
  `quantity` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_election`, `id_province`, `id_alternative`),
  INDEX `fk_provincia_idx` (`id_province` ASC) VISIBLE,
  INDEX `fk_alternativa_idx` (`id_alternative` ASC) VISIBLE,
  CONSTRAINT `fk_eleccion`
    FOREIGN KEY (`id_election`)
    REFERENCES `elecciones`.`elections` (`_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_provincia`
    FOREIGN KEY (`id_province`)
    REFERENCES `elecciones`.`provinces` (`_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alternativa`
    FOREIGN KEY (`id_alternative`)
    REFERENCES `elecciones`.`alternatives` (`_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
