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

insert into customers values
	(default, "Rodrigo", "12345678912", "rodrigo@email.com", default),
	(default, "Paulo", "32162594761", "paulo@email.com", default),
	(default, "Pedro", "92341656917", "pedro@email.com", default),
	(default, "Lucas", "62579413684", "lucas@email.com", default),
	(default, "João", "62594136874", "joao@email.com", default),
	(default, "Vinícius", "30256105973", "vinicius@email.com", default),
	(default, "Eduardo", "10236520048", "edu@email.com", default),
	(default, "Victor", "30641978026", "victor@email.com", default),
	(default, "Henrique", "41360594762", "henrique@email.com", default),
	(default, "Mateus", "36985214701", "mateus@email.com", default);
    
select * from customers;

drop table if exists products;

create table if not exists products(
	id int not null auto_increment primary key,
    name_product varchar(255) not null,
    bar_code varchar(40) not null unique key,
    unitary_value decimal(8,2) not null,
    deleted_at datetime default null
);

insert into products values
	(DEFAULT, "Água","3123541384633646",  15.05, DEFAULT),
    (DEFAULT, "Refrigerante","6835435843543658",  15.05, DEFAULT),
    (DEFAULT, "Cerveja","3153543516156435",  15.05, DEFAULT),
    (DEFAULT, "Suco de uva","2654698384967560",  15.05, DEFAULT),
    (DEFAULT, "Açúcar","6351569023105478",  15.05, DEFAULT),
    (DEFAULT, "Feijão","9531647890321546",  15.05, DEFAULT),
    (DEFAULT, "Sal","3025046089047035",  15.05, DEFAULT),
    (DEFAULT, "Pão","9567619438207901",  15.05, DEFAULT),
    (DEFAULT, "Arroz","1063054096123780",  15.05, DEFAULT),
    (DEFAULT, "Macarrão","9642381039705604",  15.05, DEFAULT);

select * from products;
    
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

insert into orders values
	(DEFAULT, now(), 1, 1, 10.80, 10, 10.90, default),
	(DEFAULT, now(), 2, 2, 10.80, 15, 10.90, default),
	(DEFAULT, now(), 3, 3, 10.80, 20, 10.90, default),
	(DEFAULT, now(), 4, 4, 10.80, 25, 10.90, default),
	(DEFAULT, now(), 5, 5, 10.80, 19, 10.90, default),
	(DEFAULT, now(), 6, 6, 10.80, 35, 10.90, default),
	(DEFAULT, now(), 7, 7, 10.80, 6, 10.90, default),
	(DEFAULT, now(), 8, 8, 10.80, 10, 10.90, default),
	(DEFAULT, now(), 9, 9, 10.80, 8, 10.90, default),
    (DEFAULT, now(), 10, 10, 10.80, 5, 10.90, default);
    
select * from orders;

UPDATE products SET client_id=3, product_id=1, unitaryValue=10, quantity=10, total=50 WHERE id=1;



