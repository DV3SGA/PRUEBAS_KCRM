


-- -----------------------------------------------------
-- Schema tiendavirtual
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tiendavirtual` DEFAULT CHARACTER SET utf8 ;
USE `tiendavirtual` ;

-- -----------------------------------------------------
-- Table `tiendavirtual`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tiendavirtual`.`categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(250) NOT NULL,
  `descripcion` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tiendavirtual`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tiendavirtual`.`productos` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `nombre_producto` VARCHAR(250) NOT NULL,
  `referencia` VARCHAR(30) NOT NULL,
  `precio` INT NOT NULL,
  `peso` INT NOT NULL,
  `stock` INT NULL,
  `fecha_creacion_producto` DATE NULL,
  `id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE INDEX `referencia_UNIQUE` (`referencia` ASC) ,
  INDEX `fk_producto_categoria_idx` (`id_categoria` ASC) ,
  CONSTRAINT `fk_producto_categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `tiendavirtual`.`categorias` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tiendavirtual`.`ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tiendavirtual`.`ventas` (
  `id_venta` INT NOT NULL AUTO_INCREMENT,
  `fecha_venta` DATETIME NOT NULL,
  `total_ventas` VARCHAR(45) NULL,
  PRIMARY KEY (`id_venta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tiendavirtual`.`productos_has_ventas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tiendavirtual`.`productos_has_ventas` (
  `id_producto` INT NOT NULL,
  `id_venta` INT NOT NULL,
  `id_producto_venta` INT NOT NULL AUTO_INCREMENT,
  `cantidad_producto` INT NOT NULL,
  PRIMARY KEY (`id_producto_venta`),
  INDEX `fk_producto_has_venta_venta1_idx` (`id_venta` ASC) ,
  INDEX `fk_producto_has_venta_producto1_idx` (`id_producto` ASC) ,
  CONSTRAINT `fk_producto_has_venta_producto1`
    FOREIGN KEY (`id_producto`)
    REFERENCES `tiendavirtual`.`productos` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_has_venta_venta1`
    FOREIGN KEY (`id_venta`)
    REFERENCES `tiendavirtual`.`ventas` (`id_venta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


