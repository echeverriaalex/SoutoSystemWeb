create database SoutoSystem;
use SoutoSystem;

create table if not exists Store (
store_name varchar (60),
store_adress varchar (60),
store_phone varchar (20),
constraint pk_adress primary key(store_adress)
);

create table if not exists Products (
product_description varchar (60),
product_stock float not null,
product_code varchar (25) NOT NULL,
product_price double not null,
constraint pk_product primary key(product_code)
);

drop table Products;

insert into Products (product_description, product_stock, product_code, product_price) values ("coca cola", 32, 12345, 140);

select * from Products;

select count(Products) ;

select product_stock from Products where (product_description = "Manaos Cola");

drop database SoutoSystem;