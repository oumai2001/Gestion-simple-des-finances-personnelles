drop DATABASE smarte_walet;
create database smarte_walet;

use smarte_walet;

CREATE TABLE incomes (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- identifiant unique
    user_id INT NOT NULL,                    -- pour relier le revenu à un utilisateur
    amount DECIMAL(10,2) NOT NULL,          -- montant du revenu
    source VARCHAR(255) NOT NULL,            -- source du revenu (ex : salaire, vente)
    category_id INT DEFAULT NULL,            -- catégorie du revenu (optionnel)
    date_income DATE NOT NULL,               -- date du revenu
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,                    -- relier la dépense à un utilisateur
    amount DECIMAL(10,2) NOT NULL,          -- montant de la dépense
    description VARCHAR(255) NOT NULL,       -- description de la dépense
    category_id INT DEFAULT NULL,            -- catégorie de la dépense (optionnel)
    date_expense DATE NOT NULL,              -- date de la dépense
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,             -- nom de la catégorie
    type ENUM('income','expense') NOT NULL  -- type : revenu ou dépense
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,         -- mot de passe hashé
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
SHOW DATABASES;
USE smarte_walet;
SHOW TABLES;