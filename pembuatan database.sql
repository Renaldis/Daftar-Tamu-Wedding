create database wedding_db;
use wedding_db;

-- GUESTS
CREATE TABLE guests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    guests_count INT DEFAULT 0,
    food_preference VARCHAR(100),
    notes TEXT,
    is_present BOOLEAN DEFAULT FALSE
);


-- ADMIN
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL, -- Menggunakan VARCHAR(255) untuk menyimpan hash
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- KOMENTAR
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    text TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
