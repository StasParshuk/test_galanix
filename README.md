явно можно было сделать красивее 
но старался за время успеть 
чтоб запустить нужно настроить config/const под вашу бд и собственно говоря создать ее 
(create table CSV(
                      uid int  primary key unique ,
                      Name varchar(20) not null,
                      Age int not null,
                      Email varchar(30) not null ,
                      Phone numeric not null ,
                      Gender varchar(30) not null
);)
