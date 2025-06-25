CREATE DATABASE  IF NOT EXISTS cours_php;
USE cours_php;
CREATE TABLE IF NOT EXISTS  `users` (
    `user_id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(100) NOT NULL,
    `prenom` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `telephone` VARCHAR(15) NOT NULL
);