CREATE TABLE dbEcoride.Energie (
    energie_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO dbEcoride.Energie(libelle)
VALUES
    ('Diesel'),
    ('Essence'),
    ('Eléctrique')