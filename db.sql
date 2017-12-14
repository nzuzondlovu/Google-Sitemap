
CREATE DATABASE `sitemap`;

CREATE TABLE `sitemap`.`video` ( 
	`id` INT(11) NOT NULL AUTO_INCREMENT , 
	`title` VARCHAR(75) NOT NULL , 
	`description` VARCHAR(175) NOT NULL , 
	`thumbnail` VARCHAR(255) NOT NULL , 
	`video_url` VARCHAR(255) NOT NULL , 
	`date` DATETIME NOT NULL , 
	PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;