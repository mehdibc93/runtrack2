SELECT * FROM etudiants 
WHERE DATE_PART('year', AGE(date_naissance)) < 18;
