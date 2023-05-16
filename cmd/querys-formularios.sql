create database formularios;
use formularios;

alter table users add rol varchar (20);

create table acceso_informacion (
	id_registro int not null,
    numero int not null,
    referencia int not null,
	fecha_solicitud date,
    nombre varchar(100),
    direccion varchar(250),
    telefono int(12),
    municipio varchar(50),
    dpi varchar(15),
    dpi_extendido varchar(50),
    descripcion varchar(500)
);

alter table acceso_informacion add primary key (id_registro);
alter table acceso_informacion add updated_at timestamp;
alter table acceso_informacion modify created_at timestamp null;

create table configuracion (
	id_blog int not null,
    dominio text,
    servidor text,
    titulo varchar(50),
    created_at timestamp null,
    PRIMARY KEY (id_blog)
);

alter table configuracion add updated_at timestamp null;