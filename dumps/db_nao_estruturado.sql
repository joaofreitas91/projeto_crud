drop database if exists old_database;

create database if not exists old_database;

use old_database;

drop table if exists orders;

create table if not exists orders(
	id int not null auto_increment primary key,
    order_number int not null,
    name_client varchar(100) not null,
    cpf char(11) not null,
    email nchar(100) not null,
    order_date datetime not null,
    bar_code varchar(20) not null,
    name_product varchar(100),
    unitary_value decimal(8,2),
    quantity int not null
);

insert into orders values
	(DEFAULT, 1, "RODRIGO", "12345678912", "rodrigo@email.com", now(), "3123541384633646", "ÁGUA", 15.05, 10),
    (DEFAULT, 2, "PAULO", "32162594761", "paulo@email.com", now(), "6835435843543658", "REFRIGERANTE", 15.05, 15),
    (DEFAULT, 3, "PEDRO", "92341656917", "pedro@email.com", now(), "3153543516156435", "CERVEJA", 15.05, 20),
    (DEFAULT, 4, "LUCAS", "62579413684", "lucas@email.com", now(), "2654698384967560", "SUCO DE UVA", 15.05, 25),
    (DEFAULT, 5, "JOÃO", "62594136874", "joao@email.com", now(), "6351569023105478", "AÇÚCAR", 15.05, 19),
    (DEFAULT, 6, "VINICIUS", "30256105973", "vinicius@email.com", now(), "9531647890321546", "FEIJÃO", 15.05, 35),
    (DEFAULT, 7, "EDUARDO", "10236520048", "edu@email.com", now(), "3025046089047035", "SAL", 15.05, 6),
    (DEFAULT, 8, "VICTOR", "30641978026", "victor@email.com", now(), "9567619438207901", "PÃO", 15.05, 10),
    (DEFAULT, 9, "HENRIQUE", "41360594762", "henrique@email.com", now(), "1063054096123780", "ARROZ", 15.05, 8),
    (DEFAULT, 10, "MATHEUS", "36985214701", "mateus@email.com", now(), "9642381039705604", "MACARRÃO", 15.05, 5);

select * from orders;
