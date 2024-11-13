create database notizen;


use notizen;

create table user 
(

  id int auto_increment primary key,
  name varchar (255) not null,
  email varchar (255) not null,
  passwort varchar(255) not null

)


create table notizen 
{

  id int auto_increment primary key,
  titel varchar(255),
  inhalt varchar(255),
  user_id int not null,
   Datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   FOREIGN KEY (user_id) REFERENCES user (id)


}