CREATE TABLE USUARIOS(
    idusuario int primary key auto_increment,
    nome varchar(100) not null,
    cpf varchar(20) not null,
    data_nascimento date not null,
    email varchar(50) not null,
    telefone varchar(20) not null
);

CREATE TABLE ENDERECOS(
    idendereco int primary key auto_increment,
    rua varchar(50) not null,
    numero int not null,
    complemento varchar(30),
    cidade varchar(50) not null,
    estado varchar(50) not null,
    id_usuario int  
);

    ALTER TABLE ENDERECOS
    ADD CONSTRAINT FK_ENDERECOS_USUARIOS
    FOREIGN KEY(id_usuario)
    REFERENCES USUARIOS(idusuario)
    ON DELETE CASCADE 
    ON UPDATE CASCADE;