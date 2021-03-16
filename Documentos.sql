create database angular5;
use angular5;

create table peliculas
(
	id int not null primary key auto_increment,
    titulo varchar(100) not null,
    director varchar(100) not null,
    genero varchar(50) not null,
    foto varchar(100) not null
);

create table generos 
(
	id_genero int not null primary key auto_increment,
    descripcion varchar(70) not null
);

insert into generos (descripcion) values ('Drama'),('Accion'),('Comedia'),('Terror');
insert into peliculas (titulo,director,genero,foto) 
values 
('Los Intocables','Pedro Alfonso',2,''),
('El secreto de tus ojos','Jose Campanella',1,''),
('Avatar','David Cameron',2,''),
('La Llorona','Patricio Rodriguez',4,'');

alter table peliculas add habilitado int default 1;
