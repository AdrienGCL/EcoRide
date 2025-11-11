CREATE TABLE dbEcoride.StatutTrajet (
    statut_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO dbEcoride.StatutTrajet (libelle)
VALUES
    ('En attente'),
    ('En cours'),
    ('Terminé');