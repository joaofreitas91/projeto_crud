drop database if exists project_php;

create database if not exists project_php;

use project_php;

drop table if exists customers;

create table if not exists customers(
	id int not null auto_increment primary key,
    name_client varchar(255) not null,
    cpf char(11) not null unique key,
    email varchar(100),
    deleted_at datetime default null
);

drop table if exists products;

create table if not exists products(
	id int not null auto_increment primary key,
    name_product varchar(255) not null,
    bar_code varchar(40) not null unique key,
    unitary_value decimal(8,2) not null,
    deleted_at datetime default null
);

drop table if exists orders;

create table if not exists orders(
    order_number int not null auto_increment primary key,
    order_date datetime not null,
    client_id int not null,
    product_id int not null,
    unitaryValue decimal (8,2) not null,
    quantity int not null,
	total decimal (8,2) not null,
    deleted_at datetime default null,
    foreign key (client_id) references customers (id),
    foreign key (product_id) references products (id)
);
