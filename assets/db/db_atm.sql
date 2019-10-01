
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

create table if not exists `internaute` (
  id int unsigned not null unique auto_increment,
  pseudo varchar(100) not null,
  email varchar(50) not null,
  mdp varchar(100) not null,
  date_creation date not null,
  etat varchar(50) not null,
  primary key (`id`),
  foreign key(etat) references etat(libelle)  on delete cascade
) Engine=Innodb DEFAULT CHARSET=utf8;

create table if not exists `commentaire` (
  id int unsigned not null unique auto_increment,
  idinternaute int unsigned not null,
  idblog int not null,
  message TEXT not null,
  date_post date not null,
  primary key (`id`)
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


-- Insretion d'article pour test
insert into `article` (`id`, `titre`, `contenu`, `date_creation`, `date_pub`, `periode_pub_debut`, `periode_pub_fin`, `lien_img`, `etat`, `user`) VALUES
(1, 'Séminaire au palais', 'y\"ellow', '2019-09-10', '2019-09-03', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(2, 'Article 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(3, 'Réunion 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-05', '2019-09-04', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(4, 'Séminaire 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(5, 'Séminaire 0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-20', '2019-09-02', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(6, 'Séminaire 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-25', '2019-09-21', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099');


-- Insretion de blog pour test
insert into `blog` (`id`, `titre`, `contenu`, `date_creation`, `date_pub`, `periode_pub_debut`, `periode_pub_fin`, `lien_img`, `etat`, `user`) VALUES
(1, 'Blog 2', 'y\"ellow', '2019-09-10', '2019-09-03', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(2, 'Marché de cocovico', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(3, 'Cocodu la vie', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-05', '2019-09-04', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(4, 'Ok pour moi 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(5, 'DIEU est grand 0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-20', '2019-09-02', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(6, 'Oh il est merveilleur 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-25', '2019-09-21', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099');
-- fin script-
