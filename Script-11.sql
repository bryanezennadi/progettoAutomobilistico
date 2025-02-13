
create database Campionato;
-- Creazione della tabella per le Case Automobilistiche
CREATE TABLE campionato.CaseAutomobilistiche (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    colore_livrea VARCHAR(50) NOT NULL
);

-- Creazione della tabella per i Piloti
CREATE TABLE campionato.Piloti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    nazionalita VARCHAR(100),
    numero INT NOT NULL,
    id_casa INT,
    FOREIGN KEY (id_casa) REFERENCES CaseAutomobilistiche(id)
);

-- Creazione della tabella per le Gare e i Risultati (uniti in una sola tabella)
CREATE TABLE  Campionato.Gare (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data DATE NOT NULL
);

-- Creazione della tabella per i Risultati delle Gare (legati ai Piloti e alle Gare)
CREATE TABLE  Campionato.Risultati (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_gara INT,
    id_pilota INT,
    id_casa INT,
    posizione INT NOT NULL,
    tempo DECIMAL(10, 2),
    FOREIGN KEY (id_gara) REFERENCES Gare(id),
    FOREIGN KEY (id_pilota) REFERENCES Piloti(id),
    FOREIGN KEY (id_casa) REFERENCES CaseAutomobilistiche(id)
);

-- Creazione della tabella per la Classifica Generale
CREATE TABLE  Campionato.Classifica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_pilota INT,
    id_casa INT,
    punteggio INT NOT NULL DEFAULT 0,
    FOREIGN KEY (id_pilota) REFERENCES Piloti(id),
    FOREIGN KEY (id_casa) REFERENCES CaseAutomobilistiche(id)
);

insert into campionato.caseautomobilistiche (nome, colore_livrea)
values
('Ferrari', 'Rosso'),
('Mercedes', 'Argento'),
('Red Bull Racing', 'Blu e Rosso'),
('McLaren', 'Arancione e Nero'),
('Alpine', 'Blu e Bianco'),
('Aston Martin', 'Verde'),
('Alfa Romeo', 'Rosso e Bianco'),
('Williams', 'Blu e Bianco');

