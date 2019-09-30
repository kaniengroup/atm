
create database atm_db;

use atm_db;

-- Création des tables

create table if not exists `statut` (
  id int not null unique auto_increment,
  libelle varchar(50) not null,
  primary key (`libelle`)
) Engine=Innodb DEFAULT CHARSET=utf8;

create table if not exists `etat` (
  id int not null unique auto_increment,
  libelle varchar(50) not null,
  primary key (`libelle`)
) Engine=Innodb DEFAULT CHARSET=utf8;

create table if not exists `user` (
  id int not null unique auto_increment,
  login varchar(10) not null,
  nomComplet varchar(100) not null,
  password varchar(50) not null,
  statut varchar(50) not null,
  primary key (`login`),
  foreign key(statut) references statut(libelle) on delete cascade
) Engine=Innodb DEFAULT CHARSET=utf8;

create table if not exists `article` (
  id int not null unique auto_increment,
  titre varchar(100) not null,
  contenu TEXT not null,
  date_creation date not null,
  date_pub date,
  periode_pub_debut date,
  periode_pub_fin date,
  lien_img varchar(200) not null,
  etat varchar(50) not null,
  user varchar(50) not null,
  primary key (`id`),
  foreign key(etat) references etat(libelle)  on delete cascade,
  foreign key(user) references user(login)  on delete cascade
) Engine=Innodb DEFAULT CHARSET=utf8;

create table if not exists `genere_login`( 
  id int not null auto_increment,
  nombre1 char(2) not null,
  nombre2 char(2) not null,
  date_modif varchar(20) not null,
  primary key (id)
) ENGINE=Innodb DEFAULT CHARSET=utf8;

create table if not exists `blog` (
  id int not null unique auto_increment,
  titre varchar(100) not null,
  contenu TEXT not null,
  date_creation date not null,
  date_pub date,
  periode_pub_debut date,
  periode_pub_fin date,
  lien_img varchar(200) not null,
  etat varchar(50) not null,
  user varchar(50) not null,
  nombre_vue smallint unsigned default 100,
  primary key (`id`),
  foreign key(etat) references etat(libelle)  on delete cascade,
  foreign key(user) references user(login)  on delete cascade
) Engine=Innodb DEFAULT CHARSET=utf8;

insert into genere_login(nombre1,nombre2,date_modif) values("00","99","9999-12-31");

-- Insertion etat
insert into etat(libelle) values("Publier"),
                                ("Ne pas publier"),
                                ("Publier sur une période");


-- Insertion statut
insert into statut(libelle) values("actif"),
                                  ("désactivé");


insert into user(login,NomComplet,password,statut) values("ATM-0099","YAO Dejak","098f6bcd4621d373cade4e832627b4f6","actif");
-- fin script-
