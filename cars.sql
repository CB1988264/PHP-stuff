create table person (
 socnumber char(11),
 name varchar(50),
 address varchar(100),
 phone varchar(20),
 primary key (socnumber)
);

create table car (
 licnumber char(7),
 color varchar(30),
 model int,
 owner char(11),
 primary key (licnumber),
 foreign key (owner) references person(socnumber)
);

insert into person values ('281182-070W', 'Anne Autoilija', 'Kanervapolku 2', '050-1640837');
insert into person values ('080173-169T', 'Matti Miettinen', 'Koivukuja 25', '040-1842950');
insert into person values ('120760-093B', 'Tapio Tamminen', 'Tammistontie 18', '0400-576397');
insert into person values ('200292-195H', 'Teemu Tamminen', 'Tammistontie 18', '040-9740768');

insert into car values ('CES-528', 'blue', 2010, '281182-070W');
insert into car values ('HUT-444', 'gold', 2006, '120760-093B');
insert into car values ('ROA-630', 'gray', 2011, '080173-169T');