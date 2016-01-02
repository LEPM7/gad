-- MySQL Script generated by MySQL Workbench
-- mié 30 dic 2015 22:45:00 CST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gadbd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gadbd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gadbd` DEFAULT CHARACTER SET utf8 ;
USE `gadbd` ;

-- -----------------------------------------------------
-- Table `gadbd`.`ESTADIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gadbd`.`ESTADIO` (
  `estadio` INT NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NULL,
  `descripcion` TEXT NULL,
  `direccion` TEXT NULL,
  `contacto` TEXT NULL,
  `telefono` TEXT NULL,
  `latitud` DOUBLE NULL COMMENT '	',
  `longitud` DOUBLE NULL,
  `capacidad` INT NULL,
  `ocupado` TINYINT(1) NULL,
  PRIMARY KEY (`estadio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gadbd`.`ACTIVIDAD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gadbd`.`ACTIVIDAD` (
  `actividad` INT NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NOT NULL,
  `descripcion` TEXT NULL,
  `fecha_inicio` DATE NOT NULL,
  `fecha_fin` DATE NOT NULL,
  `cupo` INT NOT NULL,
  `limite` INT NOT NULL,
  `precio` FLOAT NOT NULL,
  `estadio` INT NOT NULL,
  PRIMARY KEY (`actividad`),
  INDEX `fk_ACTIVIDAD_ESTADIO1_idx` (`estadio` ASC),
  CONSTRAINT `fk_ACTIVIDAD_ESTADIO1`
    FOREIGN KEY (`estadio`)
    REFERENCES `gadbd`.`ESTADIO` (`estadio`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gadbd`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gadbd`.`USUARIO` (
  `usuario` INT NOT NULL AUTO_INCREMENT,
  `nickname` TEXT NULL,
  `password` TEXT NULL,
  `nombre` TEXT NULL,
  `apellido` TEXT NULL,
  `telefono` TEXT NULL,
  `fecha_nacimiento` DATE NULL,
  `dpi` TEXT NULL,
  `direccion` TEXT NULL,
  `activo` TINYINT(1) NULL,
  `rol` TEXT NULL,
  PRIMARY KEY (`usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `gadbd`.`ACTIVIDAD_USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gadbd`.`ACTIVIDAD_USUARIO` (
  `actividad_usuario` INT NOT NULL AUTO_INCREMENT,
  `actividad` INT NOT NULL,
  `usuario` INT NOT NULL,
  PRIMARY KEY (`actividad_usuario`),
  INDEX `fk_ACTIVIDAD_USUARIO_ACTIVIDAD_idx` (`actividad` ASC),
  INDEX `fk_ACTIVIDAD_USUARIO_USUARIO1_idx` (`usuario` ASC),
  CONSTRAINT `fk_ACTIVIDAD_USUARIO_ACTIVIDAD`
    FOREIGN KEY (`actividad`)
    REFERENCES `gadbd`.`ACTIVIDAD` (`actividad`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ACTIVIDAD_USUARIO_USUARIO1`
    FOREIGN KEY (`usuario`)
    REFERENCES `gadbd`.`USUARIO` (`usuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
