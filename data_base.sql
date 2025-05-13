-- Création de la base de données
CREATE DATABASE IF NOT EXISTS custom_portfolio;
USE custom_portfolio;

-- Table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des projets
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des compétences
CREATE TABLE skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    level INT NOT NULL CHECK (level BETWEEN 1 AND 100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des informations de contact
CREATE TABLE contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insertion d'un utilisateur administrateur par défaut
INSERT INTO users (username, email, password) 
VALUES ('admin', 'admin@example.com', '$2y$10$eImiTXuWVxfM37uY4JANjQe5pG1zFQxWl1o1uJ9o1u1o1u1o1u1u1'); -- Mot de passe : "password" (haché avec bcrypt)

-- Insertion d'exemples de projets
INSERT INTO projects (title, description, image) 
VALUES 
('Portfolio Website', 'A personal portfolio website to showcase my skills and projects.', 'portfolio.jpg'),
('E-commerce Platform', 'An online store with a fully functional shopping cart and payment gateway.', 'ecommerce.jpg');

-- Insertion d'exemples de compétences
INSERT INTO skills (name, level) 
VALUES 
('HTML', 90),
('CSS', 85),
('JavaScript', 80),
('PHP', 75),
('MySQL', 70);

-- Insertion d'informations de contact par défaut
INSERT INTO contact_info (email, phone, address) 
VALUES ('contact@example.com', '+1234567890', '123 Main Street, Paris, France');