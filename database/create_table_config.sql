CREATE TABLE dbEcoride.Droit (
    droit_id INT AUTO_INCREMENT PRIMARY KEY,
    statut VARCHAR(255) NOT NULL
);

CREATE TABLE dbEcoride.Config (
    config_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);