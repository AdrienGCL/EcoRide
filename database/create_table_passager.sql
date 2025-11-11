CREATE TABLE dbEcoride.Passager (
    passager_id INT NOT NULL,
    trajet INT NOT NULL,
    FOREIGN KEY (passager_id) REFERENCES dbEcoride.utilisateur(user_id),
    FOREIGN KEY (trajet) REFERENCES dbEcoride.covoiturage(covoiturage_id),
    PRIMARY KEY (passager_id, trajet)
);