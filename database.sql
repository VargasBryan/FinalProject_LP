create database if not exists proyecto;
use proyecto;
create table if not exists hotel(
	hotel_id int not null auto_increment,
	nombre varchar(20) not null,
    precio float not null,
    primary key (hotel_id)
);
create table if not exists reserva(
	reserva_id int not null auto_increment,
    hotel_id int not null,
    fecha_reserva date not null,
    precio float not null,
    primary key(reserva_id),
    foreign key (hotel_id) references hotel(hotel_id)
);

insert into hotel (nombre,precio) values ("unihotel",80);
insert into hotel (nombre,precio) values ("hilton colon",200);
insert into hotel (nombre,precio) values ("sheraton",350);
insert into hotel (nombre,precio) values ("oro verde",275);

select * from hotel;