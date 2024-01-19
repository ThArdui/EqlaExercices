use ventes;
    SELECT CATEGORIE, sum(stock)
    from produit
    group by CATEGORIE;