CREATE TABLE dbEcoride.Voiture (
    voiture_id INT AUTO_INCREMENT PRIMARY KEY,
    modele VARCHAR(255) NOT NULL,
    immatriculation VARCHAR(255) NOT NULL,
    energie INT NOT NULL,
    couleur VARCHAR(255) NOT NULL,
    date_immatriculation DATE NOT NULL,
    nb_place INT NOT NULL,
    marque INT NOT NULL,
    user_id INT NOT NULL,
    FOREIGN KEY (energie) REFERENCES dbEcoride.Energie(energie_id),
    FOREIGN KEY (marque) REFERENCES dbEcoride.Marque(marque_id),
    FOREIGN KEY (user_id) REFERENCES dbEcoride.utilisateur(user_id)
);