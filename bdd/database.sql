create database registros;
use registros;
create table users (
user_id integer not null auto_increment,
user_name varchar(200) not null,
user_nick varchar(200) not null,
user_lastname varchar(200) not null,
register_day date not null,
constraint usersPK primary key (user_id));
