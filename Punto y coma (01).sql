
create table Tb_Pais(
Pais_Codigo int not null primary key,
Pais_Iso3 varchar(11) not null,
Pais_Desc varchar(100) not null
);

create table Tb_Categoria(
Cate_Id Int auto_increment not null primary key,
Cate_Desc varchar(100) not null
);

create table Tb_Genero(
Gen_Id int auto_increment not null primary key ,
Gen_Descri varchar(100) not null
);


create table Tb_Usuario(
Usu_Id int auto_increment  not null primary key,
Usu_Nomb varchar(100) not null,
Usu_Apell varchar(100) not null,
Usu_Direc varchar(100) not null,
Usu_Tel varchar(100) not null,
Usu_Email varchar(100) not null,
Usu_Contra varchar(100) not null
);


create table Tb_Libro(
Lib_Isbn int not null primary key,
Lib_Titulo varchar(100) not null,
Lib_Descr varchar (600) not null,
Lib_Pag int not null,
Lib_Prec int not null,
Lib_Cant_almace int not null,
Lib_Cate_Id int not null,
Lib_Gen_Id int not null,
foreign key (Lib_Cate_Id) references Tb_Categoria (Cate_Id),
foreign key (Lib_Gen_Id) references Tb_Genero (Gen_Id)
);


create table Tb_Venta(
Ven_Id int auto_increment not null primary key,
Ven_Prec varchar(50) not null, 
Ven_Fech_venta date not null, 
Ven_Fech_Entrega date not null,
Ven_Canti Int not null,
Ven_Usu_Id int not null,
Ven_Lib_Isbn int not null,
foreign key (Ven_Usu_Id) references Tb_Usuario (Usu_Id),
foreign key (Ven_Lib_Isbn) references Tb_Libro (Lib_Isbn)
);


create table Tb_Autor(
Aut_Id int not null primary key,
Aut_Nombres varchar(100) not null,
Aut_Apellidos varchar(100) not null,
Aut_Pais_Codigo int not null, 
Aut_Lib_Isbn int not null,
foreign key (Aut_Pais_Codigo) references Tb_Pais(Pais_Codigo),
foreign key (Aut_Lib_Isbn) references  Tb_Libro(Lib_Isbn)
);


create table Tb_Administrador(
Admi_Id int auto_increment not null primary key,
Admi_Nomb varchar(100) not null,
Admi_Apell Varchar(100) not null, 
Admi_Email Varchar(100) not null,
Admi_Contra varchar(100) not null 
);  

create table Tb_Compra(
Com_Num_Fact int auto_increment not null primary key,
Com_Fch_Ingre date not null,
Com_Nom_prove varchar (250) not null,
Com_Cant int not null,
Com_Lib_Isbn int not null,
 foreign key (Com_Lib_Isbn) references Tb_Libro(Lib_Isbn)
);

create table audi_libro(
audi_Isbn int auto_increment not null primary key,
audi_Isbn_lib int,
audi_tituloAnt varchar(100),
audi_descrAnt varchar(600),
audi_pagAnt int,
audi_cant_almaceAnt int,
audi_cate_idAnt int,
audi_gene_idAnt int,

audi_tituloNew varchar(100),
audi_descrNew varchar(600),
audi_pagNew int,
audi_cant_almaceNew int,
audi_cate_idNew int,
audi_gene_idNew int,
audi_FecMod datetime,
audi_Usuario varchar (50),
audi_Accion varchar (10)
);



