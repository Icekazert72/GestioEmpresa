drop database if exists grhn;
create database grhn;

use grhn;

create table empleado (

	id int primary key auto_increment,
    nombre varchar (100) not null,
    apellidos varchar (100) not null,
    nomina varchar (100) not null,
    fecha_alta date,
    imagen varchar (100) not null,
    fecha_contrato timestamp default current_timestamp
);

create table departamento (
	id int primary key auto_increment,
	nombre varchar (100) not null,
    empleado int (9),
    foreign key (empleado) references empleado (id)
);

create table pagos (

	id int primary key auto_increment,
    empleado int (9),
    fecha_pago timestamp default current_timestamp,
    foreign key (empleado) references empleado (id),
    cantidad float (9)

);

create table permisos (
	id int primary key auto_increment,
    fecha_ida datetime,
    fecha_regreso date,
    empleado int (9),
    foreign key (empleado) references empleado (id)
);

create table vacaciones (
	id int primary key auto_increment,
    fecha_inicio datetime,
    fecha_fin date,
    empleado int (9),
    foreign key (empleado) references empleado (id)
);


select * from empleado;