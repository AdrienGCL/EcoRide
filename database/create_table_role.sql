CREATE TABLE dbEcoride.Role (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(255) NOT NULL
);

INSERT INTO dbecoride.Role(libelle)
VALUES
    ('Chauffeur'),
    ('Passager'),
    ('Les deux');