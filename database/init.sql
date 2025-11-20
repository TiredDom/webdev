DROP DATABASE IF EXISTS vallera_db;

CREATE DATABASE vallera_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE vallera_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
