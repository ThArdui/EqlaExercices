USE Blindcode2
SELECT eleve.nom as nom_eleve, eleve.prenom as prenom_eleve, formation.nom as nom_formation, eleve_formation.date_inscription as date_inscription
FROM eleve
INNER JOIN eleve_formation on eleve_formation.eleve_id = eleve.id
INNER JOIN formation ON eleve_formation.formation_id = formation.id;
