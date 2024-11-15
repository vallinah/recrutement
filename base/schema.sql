CREATE TABLE poste(
   id_poste INT AUTO_INCREMENT,
   nom_poste VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_poste)
);

CREATE TABLE departement(
   id_departement INT AUTO_INCREMENT,
   nom_departement VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_departement)
);

CREATE TABLE canal(
   id_canal INT AUTO_INCREMENT,
   nom VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_canal)
);

CREATE TABLE competence(
   id_competence INT AUTO_INCREMENT,
   nom_competence VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_competence)
);

CREATE TABLE type_contrat(
   id_type_contrat INT AUTO_INCREMENT,
   nom VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_type_contrat)
);

CREATE TABLE annonce(
   id_annonce INT AUTO_INCREMENT,
   annee_experience INT NOT NULL,
   id_poste INT NOT NULL,
   PRIMARY KEY(id_annonce),
   FOREIGN KEY(id_poste) REFERENCES poste(id_poste)
);

CREATE TABLE diplome(
   id_diplome INT AUTO_INCREMENT,
   nom_diplome VARCHAR(250)  NOT NULL,
   PRIMARY KEY(id_diplome)
);

CREATE TABLE question(
   id_question INT AUTO_INCREMENT,
   question TEXT NOT NULL,
   PRIMARY KEY(id_question)
);

CREATE TABLE entretien(
   id_entretien INT AUTO_INCREMENT,
   date_entretien DATETIME NOT NULL,
   PRIMARY KEY(id_entretien)
);

CREATE TABLE genre(
   id_genre INT AUTO_INCREMENT,
   genre VARCHAR(50)  NOT NULL,
   PRIMARY KEY(id_genre)
);

CREATE TABLE employe(
   id_employe INT AUTO_INCREMENT,
   nom_employe VARCHAR(250)  NOT NULL,
   date_naissance DATE NOT NULL,
   email VARCHAR(250)  NOT NULL,
   id_genre INT NOT NULL,
   id_poste INT,
   PRIMARY KEY(id_employe),
   FOREIGN KEY(id_genre) REFERENCES genre(id_genre),
   FOREIGN KEY(id_poste) REFERENCES poste(id_poste)
);

CREATE TABLE candidat(
   id_candidat INT AUTO_INCREMENT,
   nom_candidat VARCHAR(250)  NOT NULL,
   date_naissance DATE NOT NULL,
   email VARCHAR(250)  NOT NULL,
   validerRH BOOLEAN,
   validerDirecteur BOOLEAN,
   id_genre INT NOT NULL,
   id_entretien INT,
   PRIMARY KEY(id_candidat),
   FOREIGN KEY(id_genre) REFERENCES genre(id_genre),
   FOREIGN KEY(id_entretien) REFERENCES entretien(id_entretien)
);

CREATE TABLE lettre_motivation(
   id_lettre_motivation INT AUTO_INCREMENT,
   path VARCHAR(250)  NOT NULL,
   note DECIMAL(15,2)  ,
   id_candidat INT NOT NULL,
   id_employe INT NOT NULL,
   PRIMARY KEY(id_lettre_motivation),
   FOREIGN KEY(id_candidat) REFERENCES candidat(id_candidat),
   FOREIGN KEY(id_employe) REFERENCES employe(id_employe)
);

CREATE TABLE contrat(
   id_contrat INT AUTO_INCREMENT,
   salaire DECIMAL(15,2)   NOT NULL,
   date_contrat DATE NOT NULL,
   date_fin DATE,
   path VARCHAR(250)  NOT NULL,
   id_employe INT NOT NULL,
   id_type_contrat INT NOT NULL,
   PRIMARY KEY(id_contrat),
   FOREIGN KEY(id_employe) REFERENCES employe(id_employe),
   FOREIGN KEY(id_type_contrat) REFERENCES type_contrat(id_type_contrat)
);

CREATE TABLE cv(
   id_cv INT AUTO_INCREMENT,
   path VARCHAR(250)  NOT NULL,
   note DECIMAL(15,2)  ,
   id_candidat INT NOT NULL,
   id_employe INT NOT NULL,
   PRIMARY KEY(id_cv),
   FOREIGN KEY(id_candidat) REFERENCES candidat(id_candidat),
   FOREIGN KEY(id_employe) REFERENCES employe(id_employe)
);

CREATE TABLE poste_departement(
   id_poste INT,
   id_departement INT,
   PRIMARY KEY(id_poste, id_departement),
   FOREIGN KEY(id_poste) REFERENCES poste(id_poste),
   FOREIGN KEY(id_departement) REFERENCES departement(id_departement)
);

CREATE TABLE annone_diplome(
   id_annonce INT,
   id_diplome INT,
   PRIMARY KEY(id_annonce, id_diplome),
   FOREIGN KEY(id_annonce) REFERENCES annonce(id_annonce),
   FOREIGN KEY(id_diplome) REFERENCES diplome(id_diplome)
);

CREATE TABLE annonce_competence(
   id_competence INT,
   id_annonce INT,
   PRIMARY KEY(id_competence, id_annonce),
   FOREIGN KEY(id_competence) REFERENCES competence(id_competence),
   FOREIGN KEY(id_annonce) REFERENCES annonce(id_annonce)
);

CREATE TABLE annonce_canal(
   id_canal INT,
   id_annonce INT,
   PRIMARY KEY(id_canal, id_annonce),
   FOREIGN KEY(id_canal) REFERENCES canal(id_canal),
   FOREIGN KEY(id_annonce) REFERENCES annonce(id_annonce)
);

CREATE TABLE candidature(
   id_annonce INT,
   id_candidat INT,
   PRIMARY KEY(id_annonce, id_candidat),
   FOREIGN KEY(id_annonce) REFERENCES annonce(id_annonce),
   FOREIGN KEY(id_candidat) REFERENCES candidat(id_candidat)
);

CREATE TABLE question_post(
   id_poste INT,
   id_question INT,
   PRIMARY KEY(id_poste, id_question),
   FOREIGN KEY(id_poste) REFERENCES poste(id_poste),
   FOREIGN KEY(id_question) REFERENCES question(id_question)
);

CREATE TABLE entretien_question(
   id_question INT,
   id_entretien INT,
   note DECIMAL(15,2)  ,
   PRIMARY KEY(id_question, id_entretien),
   FOREIGN KEY(id_question) REFERENCES question(id_question),
   FOREIGN KEY(id_entretien) REFERENCES entretien(id_entretien)
);
