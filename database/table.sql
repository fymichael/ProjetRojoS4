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
create table formule(
    id_formule integer auto_increment primary key not null,
    id_objectif integer ,
    poids double precision ,
    duree integer,
    foreign key (id_objectif) references objectif(id_objectif)
);
create table categorie_plats(
    id_categorie_plats integer auto_increment primary key not null,
    nom_categorie_plats varchar(20)
);

create table plats(
    id_plats integer auto_increment primary key not null,
    id_categorie_plats integer,
    nom_plats varchar(20),
    prix_plats double precision,
    image varchar(30),
    foreign key (id_categorie_plats) references categorie_plats(id_categorie_plats)
);

create table sports(
    id_sports integer auto_increment primary key not null,
    nom_sports varchar(20),
    prix_sports double precision
);

create table regime(
    id_regime integer auto_increment primary key not null,
    id_objectif integer,
    nom_regime varchar(20),
    foreign key (id_objectif) references objectif(id_objectif)
);

create table details_regime(
    id_details_regime integer auto_increment primary key not null,
    id_regime integer,
    id_plats integer,
    id_sports integer,
    foreign key (id_regime) references regime(id_regime),
    foreign key (id_plats) references plats(id_plats),
    foreign key (id_sports) references sports(id_sports)
);
create table regime_user(
    id_regime_user integer auto_increment primary key not null,
    id_regime integer ,
    id_utilisateur integer ,
    date_regime date,
    foreign key (id_regime) references regime(id_regime),
    foreign key (id_utilisateur) references utilisateur(id_utilisateur)
);
