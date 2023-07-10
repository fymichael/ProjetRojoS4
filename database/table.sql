create database regime;
use regime;
create table genre(
    id_genre integer auto_increment primary key not null , 
    nom_genre VARCHAR(15) not null
);
create table utilisateur(
    id_utilisateur integer auto_increment primary key not null,
    nom_utilisateur VARCHAR(50) not null,
    email VARCHAR(100) not null, 
    mot_de_passe VARCHAR(30) not null,
    id_genre integer ,
    status integer,
    date_naissance date,
    foreign key(id_genre) references genre(id_genre)
);
create table objectif(
    id_objectif integer auto_increment primary key not null,
    nom_objectif VARCHAR(100)
);
create table details_user (
    id_details_user integer auto_increment primary key not null,
    id_utilisateur integer not null,
    taille double precision,
    poids double precision,
    id_objectif integer ,
    objectif double precision,
    foreign key (id_utilisateur) references utilisateur(id_utilisateur),
    foreign key (id_objectif) references objectif(id_objectif)
);
create table historique(
    id_details_user integer,
    date_historique date,
    foreign key (id_details_user) references details_user(id_details_user)
);