-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema argentine_elections
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `argentine_elections` ;

-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `argentine_elections` DEFAULT CHARACTER SET utf8 ;
USE `argentine_elections` ;

-- -----------------------------------------------------
-- Table `argentine_elections`.`elections`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `argentine_elections`.`elections` ;

CREATE TABLE IF NOT EXISTS `argentine_elections`.`elections` (
  `id` INT UNSIGNED NOT NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `argentine_elections`.`provinces`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `argentine_elections`.`provinces` ;

CREATE TABLE IF NOT EXISTS `argentine_elections`.`provinces` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `argentine_elections`.`alternatives`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `argentine_elections`.`alternatives` ;

CREATE TABLE IF NOT EXISTS `argentine_elections`.`alternatives` (
  `id` INT UNSIGNED NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `presi_vice` VARCHAR(45) NULL,
  `logo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
ROW_FORMAT = DEFAULT;

-- -----------------------------------------------------
-- Table `argentine_elections`.`votes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `argentine_elections`.`votes` ;

CREATE TABLE IF NOT EXISTS `argentine_elections`.`votes` (
  `id_election` INT UNSIGNED NOT NULL,
  `id_province` INT UNSIGNED NOT NULL,
  `id_alternative` INT UNSIGNED NOT NULL,
  `quantity` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_election`, `id_province`, `id_alternative`),
  CONSTRAINT `fk_election`
    FOREIGN KEY (`id_election`)
    REFERENCES `argentine_elections`.`elections` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_province`
    FOREIGN KEY (`id_province`)
    REFERENCES `argentine_elections`.`provinces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_alternative`
    FOREIGN KEY (`id_alternative`)
    REFERENCES `argentine_elections`.`alternatives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_province_idx` ON `argentine_elections`.`votes` (`id_province` ASC);
CREATE INDEX `fk_alternative_idx` ON `argentine_elections`.`votes` (`id_alternative` ASC);
CREATE INDEX `fk_election_idx` ON `argentine_elections`.`votes` (`id_election` ASC) ;

-- -----------------------------------------------------
-- Table `argentine_elections`.`population`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `argentine_elections`.`population` ;

CREATE TABLE IF NOT EXISTS `argentine_elections`.`population` (
  `id` INT UNSIGNED NOT NULL,
  `total_population` INT UNSIGNED NULL,
  `registered_voters` INT UNSIGNED NOT NULL,
  `province_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_province_pop`
    FOREIGN KEY (`province_id`)
    REFERENCES `argentine_elections`.`provinces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_provinces_idx` ON `argentine_elections`.`population` (`province_id` ASC);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;