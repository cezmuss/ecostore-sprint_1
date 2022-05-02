-- MySQL Script generated by MySQL Workbench
-- Mon 02 May 2022 04:43:06 PM -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema EcoStore
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema EcoStore
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `EcoStore` DEFAULT CHARACTER SET latin1 ;
USE `EcoStore` ;

-- -----------------------------------------------------
-- Table `EcoStore`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Usuario` (
  `CodUsu` INT(11) NOT NULL AUTO_INCREMENT,
  `LoginS` VARCHAR(25) NULL DEFAULT NULL,
  `Nome` VARCHAR(25) NULL DEFAULT NULL,
  `DataNasc` DATE NULL DEFAULT NULL,
  `Senha` VARCHAR(100) NULL DEFAULT NULL,
  `CPF` INT(11) NULL DEFAULT NULL,
  `TipoUsuario` VARCHAR(10) NULL DEFAULT NULL,
  PRIMARY KEY (`CodUsu`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `EcoStore`.`Endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Endereco` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Endereco` (
  `CodEnd` INT(11) NOT NULL AUTO_INCREMENT,
  `CodUsu` INT(11) NOT NULL,
  `Endereco` VARCHAR(50) NULL DEFAULT NULL,
  `CEP` INT(11) NULL DEFAULT NULL,
  `Numero` INT(11) NULL DEFAULT NULL,
  `Complemento` VARCHAR(25) NULL DEFAULT NULL,
  PRIMARY KEY (`CodEnd`),
  INDEX `CodUsu` (`CodUsu` ASC) VISIBLE,
  CONSTRAINT `Endereco_ibfk_1`
    FOREIGN KEY (`CodUsu`)
    REFERENCES `EcoStore`.`Usuario` (`CodUsu`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `EcoStore`.`Vendedor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Vendedor` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Vendedor` (
  `CodVend` INT(11) NOT NULL AUTO_INCREMENT,
  `CodUsu` INT(11) NOT NULL,
  `NomeEmp` VARCHAR(50) NULL DEFAULT NULL,
  `Descricao` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`CodVend`),
  INDEX `CodUsu` (`CodUsu` ASC) VISIBLE,
  CONSTRAINT `Vendedor_ibfk_1`
    FOREIGN KEY (`CodUsu`)
    REFERENCES `EcoStore`.`Usuario` (`CodUsu`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `EcoStore`.`Produto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Produto` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Produto` (
  `CodProduto` INT(11) NOT NULL AUTO_INCREMENT,
  `CodVend` INT(11) NOT NULL,
  `Validade` DATE NULL DEFAULT NULL,
  `Descricao` VARCHAR(255) NULL DEFAULT NULL,
  `ValorUni` DOUBLE NULL DEFAULT NULL,
  `Foto` MEDIUMBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`CodProduto`),
  INDEX `CodVend` (`CodVend` ASC) VISIBLE,
  CONSTRAINT `Produto_ibfk_1`
    FOREIGN KEY (`CodVend`)
    REFERENCES `EcoStore`.`Vendedor` (`CodVend`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `EcoStore`.`Telefone`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Telefone` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Telefone` (
  `CodTel` INT(11) NOT NULL AUTO_INCREMENT,
  `CodUsu` INT(11) NOT NULL,
  `Numtel` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`CodTel`),
  INDEX `CodUsu` (`CodUsu` ASC) VISIBLE,
  CONSTRAINT `Telefone_ibfk_1`
    FOREIGN KEY (`CodUsu`)
    REFERENCES `EcoStore`.`Usuario` (`CodUsu`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `EcoStore`.`Venda`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EcoStore`.`Venda` ;

CREATE TABLE IF NOT EXISTS `EcoStore`.`Venda` (
  `CodVenda` INT(11) NOT NULL AUTO_INCREMENT,
  `CodUsu` INT(11) NOT NULL,
  `CodProduto` INT(11) NULL DEFAULT NULL,
  `FormPag` VARCHAR(25) NULL DEFAULT NULL,
  `Quantidade` INT(11) NULL DEFAULT NULL,
  `DataPag` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`CodVenda`),
  INDEX `CodUsu` (`CodUsu` ASC) VISIBLE,
  INDEX `CodProduto` (`CodProduto` ASC) VISIBLE,
  CONSTRAINT `Venda_ibfk_1`
    FOREIGN KEY (`CodUsu`)
    REFERENCES `EcoStore`.`Usuario` (`CodUsu`),
  CONSTRAINT `Venda_ibfk_2`
    FOREIGN KEY (`CodProduto`)
    REFERENCES `EcoStore`.`Produto` (`CodProduto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;