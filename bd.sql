create table tuteurs(
			id_tuteurs int primary key AUTO_INCREMENT;
            nom varchar;
            prenom varchar;
            adresse varchar;
            email varchar;
            telephone int;
            genre varchar
);
create table apprenants(
id_apprenants int primary key AUTO_INCREMENT;
nom varchar;
prenom varchar;
age int;
email varchar;
telephone int;
id_tuteurs int;
foreign key(id_tuteurs) references tuteurs(id_tuteurs)
);