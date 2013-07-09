SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `dbservweb` DEFAULT CHARACTER SET latin1 ;
USE `dbservweb` ;

-- -----------------------------------------------------
-- Table `dbservweb`.`cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`cliente` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_cliente` VARCHAR(30) NOT NULL ,
  `cpf` VARCHAR(15) NULL ,
  `rg` VARCHAR(20) NULL ,
  `rua` VARCHAR(45) NULL ,
  `bairro` VARCHAR(45) NULL ,
  `numero` VARCHAR(45) NULL ,
  `cidade` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `cpf` (`cpf` ASC) ,
  INDEX `rg` (`rg` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `dbservweb`.`empresa`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`empresa` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_empresa` VARCHAR(30) NOT NULL ,
  `cnpj` VARCHAR(45) NULL ,
  `ie` VARCHAR(45) NULL ,
  `aplicativo` VARCHAR(45) NULL ,
  `serial_ap` VARCHAR(45) NULL ,
  `rua` VARCHAR(45) NULL ,
  `numero` INT(11) NULL ,
  `bairro` VARCHAR(45) NULL ,
  `cidade` VARCHAR(45) NULL ,
  `telefone` VARCHAR(45) NULL ,
  `contador` VARCHAR(45) NULL ,
  `telefone_contador` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `dbservweb`.`func_empr`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`func_empr` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_func_empr` VARCHAR(30) NOT NULL ,
  `id_empresa` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `id_empresa` (`id_empresa` ASC) ,
    CONSTRAINT `func_empr_ibfk_1`
    FOREIGN KEY (`id_empresa` )
    REFERENCES `dbservweb`.`empresa` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `dbservweb`.`funcionario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`funcionario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_funcionario` VARCHAR(30) NOT NULL ,
  `celular` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `dbservweb`.`servico`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`servico` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `id_func_anotou` INT(100) NOT NULL ,
  `id_cliente` INT(100) NULL ,
  `id_empresa` INT(100) NULL ,
  `id_func_empr` INT(100) NULL ,
  `serv_solicitado` VARCHAR(400) NULL ,
  `id_func_realizou` INT(100) NULL ,
  `serv_realizado` VARCHAR(45) NULL ,
  `dt_solicitacao` DATE NULL ,
  `dt_realizacao` DATE NULL ,
  `hr_comeco` TIME NULL ,
  `hr_termino` TIME NULL ,
  `concluido` CHAR(1) NULL DEFAULT 'N' ,
  `null` VARCHAR(40) NULL,
  PRIMARY KEY (`id`),
  INDEX `id_func_anotou` (`id_func_anotou` ASC) ,
  INDEX `id_empresa` (`id_empresa` ASC) ,
  INDEX `id_func_empr` (`id_func_empr` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  INDEX `id_func_realizou` (`id_func_realizou` ASC) ,
  CONSTRAINT `servico_ibfk_1`
    FOREIGN KEY (`id_func_anotou` )
    REFERENCES `dbservweb`.`funcionario` (`id` ),
  CONSTRAINT `servico_ibfk_2`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `dbservweb`.`empresa` (`id`),
  CONSTRAINT `servico_ibfk_3`
    FOREIGN KEY (`id_func_empr`)
    REFERENCES `dbservweb`.`func_empr` (`id`),
  CONSTRAINT `servico_ibfk_4`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `dbservweb`.`cliente` (`id`),
  CONSTRAINT `servico_ibfk_5`
    FOREIGN KEY (`id_func_realizou`)
    REFERENCES `dbservweb`.`funcionario` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `dbservweb`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dbservweb`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(30) NOT NULL ,
  `login` VARCHAR(30) NOT NULL ,
  `senha` VARCHAR(30) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;

insert into `usuario` (`nome`,`login`,`senha`) values ("Administrador","admin", 123);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
