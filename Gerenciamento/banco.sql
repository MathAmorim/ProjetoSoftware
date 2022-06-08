-- MySQL Workbench Forward Engineering
SET
    @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS,
    UNIQUE_CHECKS = 0;
SET
    @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
    FOREIGN_KEY_CHECKS = 0;
SET
    @OLD_SQL_MODE = @@SQL_MODE,
    SQL_MODE = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
    -- -----------------------------------------------------
    -- Schema mydb
    -- -----------------------------------------------------
    -- -----------------------------------------------------
    -- Schema mydb
    -- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8; USE
    `mydb`;
    -- -----------------------------------------------------
    -- Table `mydb`.`Recursos`
    -- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Recursos`(
    `ID` INT NOT NULL AUTO_INCREMENT,
    `Tipo` INT NOT NULL,
    `Status` INT NOT NULL,
    PRIMARY KEY(`ID`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios`(
    `Matricula` INT NOT NULL AUTO_INCREMENT,
    `Nome` VARCHAR(50) NOT NULL,
    `Tipo` INT NOT NULL,
    `Status` INT NOT NULL,
    `Senha` VARCHAR(50) NOT NULL,
    PRIMARY KEY(`Matricula`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `mydb`.`Reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Reserva`(
    `ID` INT NOT NULL AUTO_INCREMENT,
    `Data` DATE NOT NULL,
    PRIMARY KEY(`ID`)
) ENGINE = InnoDB; SET
    SQL_MODE = @OLD_SQL_MODE;
SET
    FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET
    UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;