drop database if exists samlpledb_kanetani;
create database samlpledb_kanetani;
use samlpledb_kanetani;

create table sample_table(
No int,
name varchar(50),
age int,
Mail varchar(50)
);

insert into sample_table values(1,"Yamada",21,"xxx@yahoo.co.jp");
insert into sample_table values(2,"Sato",39,"yyy@google.com");
insert into sample_table values(3,"harada",44,"zzz@yahoo.co.jp");