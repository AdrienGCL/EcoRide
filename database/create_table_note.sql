CREATE TABLE dbecoride.Note (
    note_id INT AUTO_INCREMENT PRIMARY KEY,
    note_moyenne DECIMAL(10,2) NOT NULL,
    user INT NOT NULL,
    FOREIGN KEY (user) REFERENCES dbEcoride.avis(cible)
);