-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema domonap
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema domonap
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `domonap` DEFAULT CHARACTER SET utf8 ;
USE `domonap` ;

-- -----------------------------------------------------
-- Table `domonap`.`br_brief`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_brief` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_brief` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `task` INT NULL,
  `site_type` INT NULL,
  `timeframe` INT NULL,
  `budget` INT NULL,
  `site_support` INT NULL,
  `work_activities` VARCHAR(45) NULL,
  `project_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_client`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_client` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_client` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company` VARCHAR(45) NULL,
  `firstname` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `middlename` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Client_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_extra_features`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_extra_features` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_extra_features` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `brandbook` INT NULL,
  `logotype` INT NULL,
  `content_managment` INT NULL,
  `copywriting` INT NULL,
  `seo` INT NULL,
  `language` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_ExtraFeatures_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_internet_shop`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_internet_shop` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_internet_shop` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product` INT NULL,
  `categories` INT NULL,
  `nesting_levels` INT NULL,
  `total_items` INT NULL,
  `client_registration` INT NULL,
  `open_basket` INT NULL,
  `client_history` INT NULL,
  `discounts` INT NULL,
  `discounts_flyers` INT NULL,
  `currencies` INT NULL,
  `site_traffic` INT NULL,
  `orders_receive` VARCHAR(45) NULL,
  `inventory` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_InternetShop_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_design`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_design` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_design` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `corporate_identity` INT NULL,
  `require_design` INT NULL,
  `markup` INT NULL,
  `site_style` MEDIUMTEXT NULL,
  `page_differents` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Design_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_graphic_materials`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_graphic_materials` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_graphic_materials` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `free` INT NULL,
  `paid` INT NULL,
  `photo_session` INT NULL,
  `creation_unique` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_GraphicMaterials_Design1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_design` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_modules`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_modules` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_modules` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `callback` INT NULL,
  `smm` INT NULL,
  `form` INT NULL,
  `countdown` INT NULL,
  `feedback` INT NULL,
  `fillable_forms` INT NULL,
  `forum` INT NULL,
  `gallery` INT NULL,
  `chat` INT NULL,
  `videogallery` INT NULL,
  `search` INT NULL,
  `blog` INT NULL,
  `subscription` INT NULL,
  `catalog` INT NULL,
  `reviews` INT NULL,
  `portfolio` INT NULL,
  `news` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Modules_ExtraFeatures1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_extra_features` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_marketing`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_marketing` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_marketing` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `install` INT NULL,
  `configure` INT NULL,
  `emailing` INT NULL,
  `sms` INT NULL,
  `promotion` INT NULL,
  `integration` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Marketing_ExtraFeatures1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_extra_features` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_site_support`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_site_support` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_site_support` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `technical` INT NULL,
  `security` INT NULL,
  `content` INT NULL,
  `editing_site` INT NULL,
  `development` INT NULL,
  `consulations` INT NULL,
  `maintenance` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_SiteSupport_ExtraFeatures1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_extra_features` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_web_site`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_web_site` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_web_site` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `site_goals` INT NULL,
  `pages` INT NULL,
  `registration` INT NULL,
  `website_traffic` INT NULL,
  `video_support` INT NULL,
  `cms` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_WebSite_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_site_content`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_site_content` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_site_content` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `homepage` INT NULL,
  `about` INT NULL,
  `contacts` INT NULL,
  `productpage` INT NULL,
  `tariffs` INT NULL,
  `faq` INT NULL,
  `events` INT NULL,
  `polls` INT NULL,
  `score` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_SiteContent_WebSite1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_web_site` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_payment_methods`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_payment_methods` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_payment_methods` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cashless` INT NULL,
  `cash` INT NULL,
  `advance` INT NULL,
  `emoney` INT NULL,
  `other` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_PaymentMethods_InternetShop1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_internet_shop` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_design_focus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_design_focus` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_design_focus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `slogan` INT NULL,
  `about` INT NULL,
  `services` INT NULL,
  `location` INT NULL,
  `new_products` INT NULL,
  `uniqueness` INT NULL,
  `price` INT NULL,
  `other` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_DesignFocus_Design1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_design` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_devices`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_devices` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_devices` (
  `id` INT NOT NULL DEFAULT 1,
  `desktop` INT NULL,
  `ipad` INT NULL,
  `phone` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Devices_Design1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_design` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_existing_elements`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_existing_elements` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_existing_elements` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `domain` INT NULL,
  `brandbook` INT NULL,
  `logotype` INT NULL,
  `images` INT NULL,
  `information_materials` INT NULL,
  `media` INT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_ExistingElements_Design1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_design` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domonap`.`br_audience`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `domonap`.`br_audience` ;

CREATE TABLE IF NOT EXISTS `domonap`.`br_audience` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `consumers` INT NULL,
  `representatives` INT NULL,
  `organizations` INT NULL,
  `fields` INT NULL,
  `other` LONGTEXT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Audience_Brief1`
    FOREIGN KEY (`id`)
    REFERENCES `domonap`.`br_brief` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
