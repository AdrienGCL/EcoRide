CREATE TABLE dbEcoride.StatutSuivi (
    statut_suivi_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO dbEcoride.StatutSuivi(libelle)
VALUES
    ('En attente'),
    ('En cours'),
    ('Terminé');

CREATE TABLE dbEcoride.SuiviTrajet (
    dossier_id INT AUTO_INCREMENT PRIMARY KEY,
    statut INT NOT NULL DEFAULT 1,
    satisfaction BOOLEAN NOT NULL,
    covoiturage INT NOT NULL,
    user INT NOT NULL,
    avis INT,
    message TEXT,
    commentaire TEXT,
    gestionnaire INT,
    FOREIGN KEY (statut) REFERENCES dbEcoride.StatutSuivi(statut_suivi_id),
    FOREIGN KEY (covoiturage) REFERENCES dbEcoride.covoiturage(covoiturage_id),
    FOREIGN KEY (user) REFERENCES dbEcoride.utilisateur(user_id),
    FOREIGN KEY (avis) REFERENCES dbEcoride.avis(avis_id),
    FOREIGN KEY (gestionnaire) REFERENCES dbEcoride.employe(employe_id)
)