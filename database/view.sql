-- view pour afficher les regimes avec ses plats 

    create or replace view v_regimes_platS as
        SELECT r.id_regime , r.nom_regime , p.*,s.*,c.nom_categorie_plats
        FROM details_regime dr 
        JOIN regime r on r.id_regime = dr.id_regime
        JOIN plats p on p.id_plats = dr.id_plats
        JOIN sports s on s.id_sports = dr.id_sports
        JOIN categorie_plats c on c.id_categorie_plats = p.id_categorie_plats;