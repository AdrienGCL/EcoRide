CREATE TABLE dbEcoride.Utilisateur (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    telephone VARCHAR(10) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    photo VARCHAR(255),
    pseudo VARCHAR(255) NOT NULL,
    credit DECIMAL(10,2) NOT NULL DEFAULT 20,
    role INT NOT NULL DEFAULT 2,
    preference INT,
    statut INT NOT NULL DEFAULT 1,
    FOREIGN KEY (role) REFERENCES dbEcoride.role(role_id),
    FOREIGN KEY (preference) REFERENCES dbEcoride.preference(preference_id),
    FOREIGN KEY (statut) REFERENCES dbEcoride.droit(droit_id)
);