CREATE DATABASE caisse;
USE caisse;

CREATE TABLE produit (
    idProduit INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(100),
    prix FLOAT,
    quantiteEnStock INT
);

CREATE TABLE caisse (
    idCaisse INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE employe (
    idEmploye INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE achat (
    idAchat INT AUTO_INCREMENT PRIMARY KEY,
    idProduit INT,
    idCaisse INT,
    FOREIGN KEY (idProduit) REFERENCES produit(idProduit),
    FOREIGN KEY (idCaisse) REFERENCES caisse(idCaisse)
);

INSERT INTO produit (designation, prix, quantiteEnStock) VALUES
('Lait', 6700, 50),
('Pain', 1200, 100),
('Riz', 4000, 30),
('Huile', 8100, 40),
('Sucre', 2500,60);

INSERT INTO caisse (nom) VALUES
('Caisse 1'),
('Caisse 2');
