create database wedding_db;
use wedding_db;

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
