SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `yii_estudos` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `yii_estudos` ;

-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_usuario_grupos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_usuario_grupos` (
  `id` INT(2) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_usuarios` (
  `id` INT(6) NOT NULL AUTO_INCREMENT ,
  `id_grupo` INT(2) NOT NULL ,
  `user` VARCHAR(8) NOT NULL ,
  `pass` VARCHAR(8) NOT NULL ,
  `nome` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  `endereco` VARCHAR(60) NULL ,
  `numero` VARCHAR(6) NULL ,
  `bairro` VARCHAR(60) NULL ,
  `cidade` VARCHAR(60) NULL ,
  `uf` VARCHAR(2) NULL ,
  `cep` VARCHAR(10) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_grupo_usuario` (`id_grupo` ASC) ,
  CONSTRAINT `fk_grupo_usuario`
    FOREIGN KEY (`id_grupo` )
    REFERENCES `yii_estudos`.`yii_usuario_grupos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_cliente_tipos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_cliente_tipos` (
  `id` INT(2) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_clientes` (
  `id` INT(8) NOT NULL AUTO_INCREMENT ,
  `id_tipo` INT(2) NOT NULL ,
  `id_usuario` INT(6) NOT NULL ,
  `nome` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  `endereco` VARCHAR(60) NOT NULL ,
  `numero` VARCHAR(6) NOT NULL ,
  `bairro` VARCHAR(60) NOT NULL ,
  `cidade` VARCHAR(60) NOT NULL ,
  `uf` VARCHAR(2) NOT NULL ,
  `cep` VARCHAR(10) NOT NULL ,
  `cnpj` VARCHAR(18) NULL ,
  `cpf` VARCHAR(14) NULL ,
  `dt_criacao` DATETIME NULL ,
  `dt_alteracao` DATETIME NULL ,
  INDEX `fk_user_to_cliente` (`id_usuario` ASC) ,
  INDEX `fk_tipos_to_cliente` (`id_tipo` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_user_to_cliente`
    FOREIGN KEY (`id_usuario` )
    REFERENCES `yii_estudos`.`yii_usuarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_cliente`
    FOREIGN KEY (`id_tipo` )
    REFERENCES `yii_estudos`.`yii_cliente_tipos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_pedidos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_pedidos` (
  `id` INT(8) NOT NULL AUTO_INCREMENT ,
  `id_cliente` INT(8) NOT NULL ,
  `id_usuario` INT(6) NOT NULL ,
  `endereco` VARCHAR(60) NOT NULL ,
  `numero` VARCHAR(6) NOT NULL ,
  `bairro` VARCHAR(60) NOT NULL ,
  `cidade` VARCHAR(60) NOT NULL ,
  `uf` VARCHAR(2) NOT NULL ,
  `cep` VARCHAR(10) NOT NULL ,
  `dt_criacao` DATETIME NULL ,
  `dt_alteracao` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_cliente_to_pedido` (`id_cliente` ASC) ,
  INDEX `fk_user_to_pedido` (`id_usuario` ASC) ,
  CONSTRAINT `fk_cliente_to_pedido`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `yii_estudos`.`yii_clientes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_to_pedido`
    FOREIGN KEY (`id_usuario` )
    REFERENCES `yii_estudos`.`yii_usuarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_produtos_grupos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_produtos_grupos` (
  `id` INT(3) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_produtos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_produtos` (
  `id` INT(8) NOT NULL AUTO_INCREMENT ,
  `id_produto_grupo` INT(3) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `descricao` VARCHAR(200) NULL ,
  `cor` VARCHAR(45) NULL ,
  `valor` FLOAT NULL ,
  `ativo` INT(1) NOT NULL DEFAULT 1 COMMENT 'define se produto esta ativo ou nao.\nativo = 1\nnao ativo = 0' ,
  `dt_criacao` DATETIME NULL ,
  `dt_alteracao` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_linha_produto` (`id_produto_grupo` ASC) ,
  CONSTRAINT `fk_linha_produto`
    FOREIGN KEY (`id_produto_grupo` )
    REFERENCES `yii_estudos`.`yii_produtos_grupos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_pedido_itens`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_pedido_itens` (
  `id` INT(8) NOT NULL AUTO_INCREMENT ,
  `id_pedido` INT(8) NOT NULL ,
  `id_produto` INT(8) NOT NULL ,
  `qtde` INT NOT NULL ,
  INDEX `fk_id_pedido_item_pedido` (`id` ASC) ,
  INDEX `fk_produto_item_pedido` (`id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_id_pedido_item_pedido`
    FOREIGN KEY (`id` )
    REFERENCES `yii_estudos`.`yii_pedidos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_item_pedido`
    FOREIGN KEY (`id` )
    REFERENCES `yii_estudos`.`yii_produtos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_tags`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_tags` (
  `id` INT(8) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yii_estudos`.`yii_tag_ref`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `yii_estudos`.`yii_tag_ref` (
  `id_produto` INT(8) NOT NULL ,
  `id_tag` INT(8) NOT NULL ,
  INDEX `fk_produto_tagref` (`id_produto` ASC) ,
  INDEX `fk_tag_tagref` (`id_tag` ASC) ,
  CONSTRAINT `fk_produto_tagref`
    FOREIGN KEY (`id_produto` )
    REFERENCES `yii_estudos`.`yii_produtos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tag_tagref`
    FOREIGN KEY (`id_tag` )
    REFERENCES `yii_estudos`.`yii_tags` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


/*
ABAIXO EU CRIEI TRIGGERS PARA PREENCHIMENTO AUTOMATICO DOS CAMPOS DT_CRIACAO E DT_ALTERACAO
 COM ISSO NAO PRECISO ME PREOCUPAR EM FICAR PREENCHENDO ESSES CAMPOS NAS TABELAS QUE CONTEM 
 ESSAS COLUNAS

 PARA QUEM NAO ENTENDE ISSO QUER DIZER QUE NA INSERÇÃO , POR EXEMPLO NA TABELA CLIENTE, 
 O CAMPO dt_criacao JA FICA SETADA COM DATA E HORA ATUAL. COSIGO FACIL COMPREENSÃO.
*/


DELIMITER ;;
CREATE TRIGGER clientes_insert BEFORE INSERT ON yii_clientes FOR EACH ROW BEGIN
  SET new.dt_criacao = now();
  SET new.dt_alteracao = now();
END ;;

CREATE TRIGGER clientes_update BEFORE UPDATE ON yii_clientes FOR EACH ROW BEGIN
  SET new.dt_alteracao = now();
END ;;
DELIMITER ;

DELIMITER ;;
CREATE TRIGGER pedidos_insert BEFORE INSERT ON yii_pedidos FOR EACH ROW BEGIN
  SET new.dt_criacao = now();
  SET new.dt_alteracao = now();
END ;;

CREATE TRIGGER pedidos_update BEFORE UPDATE ON yii_pedidos FOR EACH ROW BEGIN
  SET new.dt_alteracao = now();
END ;;
DELIMITER ;

DELIMITER ;;
CREATE TRIGGER produtos_insert BEFORE INSERT ON yii_produtos FOR EACH ROW BEGIN
  SET new.dt_criacao = now();
  SET new.dt_alteracao = now();
END ;;

CREATE TRIGGER produtos_update BEFORE UPDATE ON yii_produtos FOR EACH ROW BEGIN
  SET new.dt_alteracao = now();
END ;;
DELIMITER ;


INSERT INTO `yii_cliente_tipos` (`id`, `nome`)
VALUES
	(1, 'Pessoa Física'),
	(2, 'Pessoa Jurídica');

INSERT INTO `yii_clientes` (`id`, `id_tipo`, `id_usuario`, `nome`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `cnpj`, `cpf`, `dt_criacao`, `dt_alteracao`)
VALUES
	(3, 1, 1, 'Cliente Teste Sample', 'clisample@demo.com', '', '', '', '', '', '', NULL, NULL, '2013-07-13 16:20:02', '2013-07-13 16:20:11');

INSERT INTO `yii_usuario_grupos` (`id`, `nome`)
VALUES
	(1, 'admin'),
	(2, 'vendedor');

INSERT INTO `yii_usuarios` (`id`, `id_grupo`, `user`, `pass`, `nome`, `email`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`)
VALUES
	(1, 1, 'admin', 'admin', 'Administrador', 'admin@demo.com', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 2, 'vendedor', 'vendedor', 'Vendedor', 'vendedor@demo.com', NULL, NULL, NULL, NULL, NULL, NULL);
