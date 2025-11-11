CREATE TABLE dbecoride.Employe (
    employe_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    config INT NOT NULL DEFAULT 1,
    statut INT NOT NULL DEFAULT 1,
    FOREIGN KEY (config) REFERENCES dbEcoride.Config(config_id),
    FOREIGN KEY (statut) REFERENCES dbEcoride.Droit(droit_id)
);