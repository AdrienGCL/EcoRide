CREATE TABLE dbEcoride.StatutAvis (
    statut_avis_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO dbEcoride.StatutAvis(libelle)
VALUES
    ('En attente'),
    ('Visible'),
    ('Refusé');

CREATE TABLE dbEcoride.Avis (
    avis_id INT AUTO_INCREMENT PRIMARY KEY,
    commentaire VARCHAR(255),
    note INT NOT NULL,
    statut INT NOT NULL DEFAULT 1,
    motif_refus VARCHAR(255),
    auteur INT NOT NULL,
    cible INT NOT NULL,
    trajet INT NOT NULL,
    FOREIGN KEY (statut) REFERENCES dbEcoride.StatutAvis(statut_avis_id),
    FOREIGN KEY (auteur) REFERENCES dbEcoride.utilisateur(user_id),
    FOREIGN KEY (cible) REFERENCES dbEcoride.covoiturage(chauffeur),
    FOREIGN KEY (trajet) REFERENCES dbEcoride.covoiturage(covoiturage_id)
)