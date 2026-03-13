-- Test database schema.
--
-- If you are not using CakePHP migrations you can put
-- your application's schema in this file and use it in tests.
CREATE TABLE IF NOT EXISTS quartier (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom_quartier VARCHAR(150) NOT NULL,
    nb_habitant INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS bureau_vote (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    adr_bureau VARCHAR(150) NOT NULL,
    nb_accesseur INTEGER NOT NULL,
    id_quartier INTEGER NOT NULL,
    FOREIGN KEY (id_quartier) REFERENCES quartier(id)
);

CREATE TABLE IF NOT EXISTS electeur (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    date_naissance DATE NOT NULL,
    id_bureau INTEGER NOT NULL,
    FOREIGN KEY (id_bureau) REFERENCES bureau_vote(id)
);