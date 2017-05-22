-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema daju_2004
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `daju_2004` ;

-- -----------------------------------------------------
-- Schema daju_2004
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `daju_2004` DEFAULT CHARACTER SET utf8 ;
USE `daju_2004` ;

-- -----------------------------------------------------
-- Table `daju_2004`.`proveedores_clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proveedores_clientes` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proveedores_clientes` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `direccion_fiscal` VARCHAR(255) NULL,
  `telefono` VARCHAR(255) NULL,
  `fax` VARCHAR(255) NULL,
  `correo` VARCHAR(255) NULL,
  `pagina_web` VARCHAR(255) NULL,
  `NIF_CIF` VARCHAR(20) NULL,
  `observaciones` VARCHAR(1024) NULL,
  `tipo` TINYINT(1) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`direcciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`direcciones` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`direcciones` (
  `id` INT UNSIGNED NOT NULL,
  `proveedores_cliente_id` INT UNSIGNED NOT NULL,
  `direccion` VARCHAR(255) NULL,
  `telefono` VARCHAR(255) NULL,
  `fax` VARCHAR(255) NULL,
  `correo` VARCHAR(255) NULL,
  `pagina_web` VARCHAR(255) NULL,
  `observaciones` VARCHAR(2505) NULL,
  PRIMARY KEY (`id`, `proveedores_cliente_id`),
  INDEX `fk_direcciones_proveedores_clientes_idx` (`proveedores_cliente_id` ASC),
  CONSTRAINT `fk_direcciones_proveedores_clientes`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ivas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ivas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ivas` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `valor` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`monedas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`monedas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`monedas` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `valor` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`centros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`centros` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`centros` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `direccion` VARCHAR(255) NULL,
  `centroscol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`entradas_material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`entradas_material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`entradas_material` (
  `id` INT UNSIGNED NOT NULL,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  `albaran` VARCHAR(255) NULL,
  `fecha` DATETIME NULL,
  `centro_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_entradas_material_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  INDEX `fk_entradas_material_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_entradas_material_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entradas_material_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`familias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`familias` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`familias` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`material` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` TINYBLOB NULL,
  `referencia` TINYBLOB NULL,
  `familia_id` INT UNSIGNED NULL,
  `longitud` FLOAT NULL,
  `anchura` FLOAT NULL,
  `profundidad` FLOAT NULL,
  `color` TINYBLOB NULL,
  `gramaje` FLOAT NULL,
  `peso_ud` FLOAT NULL,
  `unidades_embalaje` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(1024) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `fk_material_ivas1_idx` (`iva_id` ASC),
  INDEX `fk_material_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_material_familias1_idx` (`familia_id` ASC),
  CONSTRAINT `fk_material_ivas10`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_monedas10`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`localizaciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`localizaciones` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`localizaciones` (
  `id` INT UNSIGNED NOT NULL,
  `centro_id` INT UNSIGNED NULL,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_localizaciones_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_localizaciones_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`materiales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`materiales` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`materiales` (
  `id` INT UNSIGNED NOT NULL,
  `material_id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `fecha_entega` DATETIME NULL,
  `localizacion_id` INT UNSIGNED NULL,
  `entradas_material_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`, `material_id`),
  INDEX `fk_materiales_entradas_material1_idx` (`entradas_material_id` ASC),
  INDEX `fk_materiales_material1_idx` (`material_id` ASC),
  INDEX `fk_materiales_localizaciones1_idx` (`localizacion_id` ASC),
  CONSTRAINT `fk_materiales_entradas_material1`
    FOREIGN KEY (`entradas_material_id`)
    REFERENCES `daju_2004`.`entradas_material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materiales_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materiales_localizaciones1`
    FOREIGN KEY (`localizacion_id`)
    REFERENCES `daju_2004`.`localizaciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`materiales_bobinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`materiales_bobinas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`materiales_bobinas` (
  `materiale_id` INT UNSIGNED NOT NULL,
  `lote` VARCHAR(255) NULL,
  `numero` INT NULL,
  `taras` INT NULL,
  `metros_brutos` FLOAT NULL,
  `metros_netos` FLOAT NULL,
  `metros_actuales` FLOAT NULL,
  `en_uso` VARCHAR(255) NULL,
  `terminado` VARCHAR(255) NULL,
  PRIMARY KEY (`materiale_id`),
  CONSTRAINT `fk_materiales_bobinas_materiales1`
    FOREIGN KEY (`materiale_id`)
    REFERENCES `daju_2004`.`materiales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`materiales_lotes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`materiales_lotes` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`materiales_lotes` (
  `materiale_id` INT UNSIGNED NOT NULL,
  `lote` VARCHAR(255) NULL,
  `peso` FLOAT NULL,
  `metros` FLOAT NULL,
  `unidades` INT NULL,
  PRIMARY KEY (`materiale_id`),
  CONSTRAINT `fk_materiales_lotes_materiales1`
    FOREIGN KEY (`materiale_id`)
    REFERENCES `daju_2004`.`materiales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proveedores_clientes_material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proveedores_clientes_material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proveedores_clientes_material` (
  `proveedores_cliente_id` INT UNSIGNED NOT NULL,
  `material_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`proveedores_cliente_id`, `material_id`),
  INDEX `fk_proveedores_clientes_has_material_material1_idx` (`material_id` ASC),
  INDEX `fk_proveedores_clientes_has_material_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  CONSTRAINT `fk_proveedores_clientes_has_material_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proveedores_clientes_has_material_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`producto` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`producto` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `familia_id` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `fk_producto_familias1_idx` (`familia_id` ASC),
  INDEX `fk_producto_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_producto_ivas1_idx` (`iva_id` ASC),
  CONSTRAINT `fk_producto_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_monedas1`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_ivas1`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `familia_id` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  `enlaces` VARCHAR(255) NULL,
  `centro_id` INT UNSIGNED NULL,
  `procesocol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proceso_ivas1_idx` (`iva_id` ASC),
  INDEX `fk_proceso_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_proceso_familias1_idx` (`familia_id` ASC),
  INDEX `fk_proceso_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_proceso_ivas1`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_monedas1`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso_producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso_producto` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso_producto` (
  `proceso_id` INT UNSIGNED NOT NULL,
  `producto_id` INT UNSIGNED NOT NULL,
  `cantidad` INT NULL,
  `proceso_producto_entradacol` VARCHAR(45) NULL,
  `entrada_salida` TINYINT(1) NULL DEFAULT 0 COMMENT '0-entrada\n1-salida',
  PRIMARY KEY (`proceso_id`, `producto_id`),
  INDEX `fk_proceso_has_producto_producto1_idx` (`producto_id` ASC),
  INDEX `fk_proceso_has_producto_proceso1_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_proceso_has_producto_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_producto_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Entradas salidas productos en los procesos\n';


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso_material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso_material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso_material` (
  `proceso_id` INT UNSIGNED NOT NULL,
  `material_id` INT UNSIGNED NOT NULL,
  `metros_lineales` FLOAT NULL,
  `metros_cuadrados` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`proceso_id`, `material_id`),
  INDEX `fk_proceso_has_material_material1_idx` (`material_id` ASC),
  INDEX `fk_proceso_has_material_proceso1_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_proceso_has_material_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_material_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`palets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`palets` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`palets` (
  `producto_id` INT UNSIGNED NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`producto_id`),
  CONSTRAINT `fk_palets_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`cajas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`cajas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`cajas` (
  `producto_id` INT UNSIGNED NOT NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`producto_id`),
  CONSTRAINT `fk_cajas_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`estados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`estados` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`estados` (
  `id` MEDIUMINT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `cantidad` INT NULL,
  `fecha_creacion` DATETIME NULL,
  `fecha_terminacion` DATETIME NULL,
  `estado_id` MEDIUMINT UNSIGNED NULL,
  `centro_id` INT UNSIGNED NULL,
  `proceso_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ordenes_produccion_centros1_idx` (`centro_id` ASC),
  INDEX `fk_ordenes_produccion_estados1_idx` (`estado_id` ASC),
  INDEX `fk_ordenes_produccion_proceso1_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_ordenes_produccion_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordenes_produccion_estados1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `daju_2004`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordenes_produccion_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`objetos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`objetos` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`objetos` (
  `id` INT UNSIGNED NOT NULL,
  `producto_id` INT UNSIGNED NULL,
  `referencia` VARCHAR(255) NULL,
  `productoscol` VARCHAR(45) NULL,
  `orden_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_productos_producto1_idx` (`producto_id` ASC),
  INDEX `fk_objetos_ordens1_idx` (`orden_id` ASC),
  CONSTRAINT `fk_productos_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_objetos_ordens1`
    FOREIGN KEY (`orden_id`)
    REFERENCES `daju_2004`.`ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`maquinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`maquinas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`maquinas` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `maquinacol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`utensilios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`utensilios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`utensilios` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `utilcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`pedidos_empresas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`pedidos_empresas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`pedidos_empresas` (
  `id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `fecha` DATETIME NULL,
  `albaran` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedidos_empresa_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  CONSTRAINT `fk_pedidos_empresa_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`salidas_productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`salidas_productos` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`salidas_productos` (
  `id` INT UNSIGNED NOT NULL,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `fecha_pedido` DATETIME NULL,
  `fecha_entrega` DATETIME NULL,
  `albaran` VARCHAR(255) NULL,
  `pedidos_empresa_id` INT UNSIGNED NULL,
  `centro_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_salidas_productos_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  INDEX `fk_salidas_productos_pedidos_empresa1_idx` (`pedidos_empresa_id` ASC),
  INDEX `fk_salidas_productos_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_salidas_productos_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_productos_pedidos_empresa1`
    FOREIGN KEY (`pedidos_empresa_id`)
    REFERENCES `daju_2004`.`pedidos_empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_productos_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`salidas_productos_producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`salidas_productos_producto` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`salidas_productos_producto` (
  `salidas_productos_id` INT UNSIGNED NOT NULL,
  `producto_id` INT UNSIGNED NOT NULL,
  `cantidad` INT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`salidas_productos_id`, `producto_id`),
  INDEX `fk_salidas_productos_has_producto_producto1_idx` (`producto_id` ASC),
  INDEX `fk_salidas_productos_has_producto_salidas_productos1_idx` (`salidas_productos_id` ASC))
ENGINE = MEMORY;


-- -----------------------------------------------------
-- Table `daju_2004`.`pedidos_empresas_producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`pedidos_empresas_producto` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`pedidos_empresas_producto` (
  `pedidos_empresa_id` INT UNSIGNED NOT NULL,
  `producto_id` INT UNSIGNED NOT NULL,
  `cantidad` INT NULL,
  `fecha` DATETIME NULL,
  PRIMARY KEY (`pedidos_empresa_id`, `producto_id`),
  INDEX `fk_pedidos_empresa_has_producto_producto1_idx` (`producto_id` ASC),
  INDEX `fk_pedidos_empresa_has_producto_pedidos_empresa1_idx` (`pedidos_empresa_id` ASC),
  CONSTRAINT `fk_pedidos_empresa_has_producto_pedidos_empresa1`
    FOREIGN KEY (`pedidos_empresa_id`)
    REFERENCES `daju_2004`.`pedidos_empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_empresa_has_producto_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens_estados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens_estados` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens_estados` (
  `orden_id` INT UNSIGNED NOT NULL,
  `estado_id` MEDIUMINT UNSIGNED NOT NULL,
  `fecha` DATETIME NULL,
  PRIMARY KEY (`orden_id`, `estado_id`),
  INDEX `fk_ordens_has_estados_estados1_idx` (`estado_id` ASC),
  INDEX `fk_ordens_has_estados_ordens1_idx` (`orden_id` ASC),
  CONSTRAINT `fk_ordens_has_estados_ordens1`
    FOREIGN KEY (`orden_id`)
    REFERENCES `daju_2004`.`ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordens_has_estados_estados1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `daju_2004`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`usuarios` (
  `usuario_id` INT UNSIGNED NOT NULL,
  `nombre` VARCHAR(255) NULL,
  `apellidos` VARCHAR(255) NULL,
  `login` VARCHAR(45) NULL,
  `pass` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`usuario_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens_estados_usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens_estados_usuarios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens_estados_usuarios` (
  `ordens_estados_orden_id` INT UNSIGNED NOT NULL,
  `ordens_estados_estado_id` MEDIUMINT UNSIGNED NOT NULL,
  `usuario_id` INT UNSIGNED NOT NULL,
  `parte` FLOAT NULL,
  PRIMARY KEY (`ordens_estados_orden_id`, `ordens_estados_estado_id`, `usuario_id`),
  INDEX `fk_ordens_estados_has_usuarios_usuarios1_idx` (`usuario_id` ASC),
  INDEX `fk_ordens_estados_has_usuarios_ordens_estados1_idx` (`ordens_estados_orden_id` ASC, `ordens_estados_estado_id` ASC),
  CONSTRAINT `fk_ordens_estados_has_usuarios_ordens_estados1`
    FOREIGN KEY (`ordens_estados_orden_id` , `ordens_estados_estado_id`)
    REFERENCES `daju_2004`.`ordens_estados` (`orden_id` , `estado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordens_estados_has_usuarios_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `daju_2004`.`usuarios` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens_estados_maquinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens_estados_maquinas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens_estados_maquinas` (
  `ordens_estados_orden_id` INT UNSIGNED NOT NULL,
  `ordens_estados_estado_id` MEDIUMINT UNSIGNED NOT NULL,
  `maquinas_id` INT UNSIGNED NOT NULL,
  `operaciones` INT NULL,
  PRIMARY KEY (`ordens_estados_orden_id`, `ordens_estados_estado_id`, `maquinas_id`),
  INDEX `fk_ordens_estados_has_maquinas_maquinas1_idx` (`maquinas_id` ASC),
  INDEX `fk_ordens_estados_has_maquinas_ordens_estados1_idx` (`ordens_estados_orden_id` ASC, `ordens_estados_estado_id` ASC),
  CONSTRAINT `fk_ordens_estados_has_maquinas_ordens_estados1`
    FOREIGN KEY (`ordens_estados_orden_id` , `ordens_estados_estado_id`)
    REFERENCES `daju_2004`.`ordens_estados` (`orden_id` , `estado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordens_estados_has_maquinas_maquinas1`
    FOREIGN KEY (`maquinas_id`)
    REFERENCES `daju_2004`.`maquinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens_estados_utensilios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens_estados_utensilios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens_estados_utensilios` (
  `ordens_estados_orden_id` INT UNSIGNED NOT NULL,
  `ordens_estados_estado_id` MEDIUMINT UNSIGNED NOT NULL,
  `utensilios_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ordens_estados_orden_id`, `ordens_estados_estado_id`, `utensilios_id`),
  INDEX `fk_ordens_estados_has_utensilios_utensilios1_idx` (`utensilios_id` ASC),
  INDEX `fk_ordens_estados_has_utensilios_ordens_estados1_idx` (`ordens_estados_orden_id` ASC, `ordens_estados_estado_id` ASC),
  CONSTRAINT `fk_ordens_estados_has_utensilios_ordens_estados1`
    FOREIGN KEY (`ordens_estados_orden_id` , `ordens_estados_estado_id`)
    REFERENCES `daju_2004`.`ordens_estados` (`orden_id` , `estado_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordens_estados_has_utensilios_utensilios1`
    FOREIGN KEY (`utensilios_id`)
    REFERENCES `daju_2004`.`utensilios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
