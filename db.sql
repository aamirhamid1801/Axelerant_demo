create database poll;
use poll;
create table questions (
    id int not null auto_increment,
    name varchar(200) not null,
      primary key (id)
);
create table options(
    id int ,
    qid int not null,
    name varchar(100) not null,
    counter bigint(20) not null,
    primary key (id),
    foreign key (qid) references questions(id)
);
insert into questions values (1, "Who is your favorite author?");
insert into options values (1,1, "Miguel de Cervantes", 0);
insert into options values (2,1, "Charles Dickens", 0);
insert into options values (3,1, "J.R.R. Tolkien", 0);
insert into options values (4,1, "Antoine de Saint-Exuper", 0);