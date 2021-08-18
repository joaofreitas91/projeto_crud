drop database if exists project_php;

create database if not exists project_php;

use project_php;

drop table if exists customers;

create table if not exists customers(
	id int not null auto_increment primary key,
    name_client varchar(255) not null,
    cpf char(11) not null unique key,
    email varchar(100)
);

insert into customers values
	(DEFAULT, "Rodrigo", "12345678912", "rodrigo@email.com"),
	(DEFAULT, "Paulo", "32162594761", "paulo@email.com"),
	(DEFAULT, "Pedro", "92341656917", "pedro@email.com"),
	(DEFAULT, "Lucas", "62579413684", "lucas@email.com"),
	(DEFAULT, "João", "62594136874", "joao@email.com"),
	(DEFAULT, "Vinícius", "30256105973", "vinicius@email.com"),
	(DEFAULT, "Eduardo", "10236520048", "edu@email.com"),
	(DEFAULT, "Victor", "30641978026", "victor@email.com"),
	(DEFAULT, "Henrique", "41360594762", "henrique@email.com"),
	(DEFAULT, "Mateus", "36985214701", "mateus@email.com");
    
select * from customers;

drop table if exists products;

create table if not exists products(
	id int not null auto_increment primary key,
    name_product varchar(255) not null,
    bar_code varchar(40) not null unique key,
    unitary_value decimal(8,2) not null
);

insert into products values
	(DEFAULT, "Água","3123541384633646",  15.05),
    (DEFAULT, "Refrigerante","6835435843543658",  15.05),
    (DEFAULT, "Cerveja","3153543516156435",  15.05),
    (DEFAULT, "Suco de uva","2654698384967560",  15.05),
    (DEFAULT, "Açúcar","6351569023105478",  15.05),
    (DEFAULT, "Feijão","9531647890321546",  15.05),
    (DEFAULT, "Sal","3025046089047035",  15.05),
    (DEFAULT, "Pão","9567619438207901",  15.05),
    (DEFAULT, "Arroz","1063054096123780",  15.05),
    (DEFAULT, "Macarrão","9642381039705604",  15.05);

select * from products;
    
drop table if exists orders;

create table if not exists orders(
    order_number int not null auto_increment primary key,
    order_date datetime not null,
    client_id int not null,
    product_id int not null,
    quantity int not null,
	total decimal (8,2) not null,
    foreign key (client_id) references customers (id),
    foreign key (product_id) references products (id)
);

insert into orders values
	(DEFAULT, now(), 1, 1, 10, 10.90),
	(DEFAULT, now(), 2, 2, 15, 10.90),
	(DEFAULT, now(), 3, 3, 20, 10.90),
	(DEFAULT, now(), 4, 4, 25, 10.90),
	(DEFAULT, now(), 5, 5, 19, 10.90),
	(DEFAULT, now(), 6, 6, 35, 10.90),
	(DEFAULT, now(), 7, 7, 6, 10.90),
	(DEFAULT, now(), 8, 8, 10, 10.90),
	(DEFAULT, now(), 9, 9, 8, 10.90),
	(DEFAULT, now(), 10, 10, 5, 10.90);
    
select * from orders;
select * from orders; 
desc orders;

select o.order_number, o.order_date, c.name_client, p.name_product, p.unitary_value, o.quantity, o.total
from orders o join customers c on o.client_id = c.id
join products p on o.product_id = p.id;


