CREATE TABLE `Users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255) NOT NULL,
	`email` INT NOT NULL AUTO_INCREMENT,
	`password` INT NOT NULL AUTO_INCREMENT,
	`roles` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `clients` (
	`id_client` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_client`)
);

CREATE TABLE `cities` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`google_place_id` VARCHAR(255) NOT NULL,
	`location_name` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `adverts` (
	`id_advert` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`start_date` DATETIME NOT NULL,
	`finish_date` DATETIME NOT NULL,
	`phone` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`comment` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_advert`)
);

CREATE TABLE `tour_orders` (
	`id_tour` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`data_create` DATETIME NOT NULL AUTO_INCREMENT,
	`start_date` DATETIME NOT NULL,
	`finish_date` DATETIME NOT NULL,
	`deadline_info` VARCHAR(255) NOT NULL,
	`cost` FLOAT NOT NULL,
	`count_of_photo` INT NOT NULL,
	`photos_type` VARCHAR(255) NOT NULL,
	`comment` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id_tour`)
);

CREATE TABLE `feedback` (
	`id_feedback` VARCHAR(255) NOT NULL,
	`trouble` VARCHAR(255) NOT NULL,
	`massage` VARCHAR(255) NOT NULL,
	`contact` VARCHAR(255) NOT NULL,
	`user` VARCHAR(255) NOT NULL
);

ALTER TABLE `feedback` ADD CONSTRAINT `feedback_fk0` FOREIGN KEY (`user`) REFERENCES `Users`(`id`);

