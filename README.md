за то как выглядит стыдно явно можно было сделать красивее и масштабируемее 
но старался быстрее а не качественее а думать можно очень долго 
чтоб запустить нужно настроить config/const под вашу бд и собственно говоря создать ее 
(create table CSV(
                      uid int  primary key unique ,
                      Name varchar(20) not null,
                      Age int not null,
                      Email varchar(30) not null ,
                      Phone numeric not null ,
                      Gender varchar(30) not null
);)
