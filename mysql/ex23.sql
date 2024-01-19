use ventes;
        desc categorie;
        desc produitv2;
select * from categorie limit 2;


 select produitv2.nom as Nom_Produit, categorie.nom as Nom_Categorie
 from categorie
 inner join produitv2 on categorie.IdCategorie=produitv2.IdCategorie
ORDER BY Nom_Produit ASC;