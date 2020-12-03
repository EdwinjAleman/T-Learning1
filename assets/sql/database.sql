	CREATE TABLE usuarios 
	(
		idusuario int NOT NULL auto_increment,
		usuario varchar(40) NOT NULL,
		nombres varchar(40) NOT NULL,
		area varchar(40)NOT NULL,
		clave varchar(100)NOT NULL,
		PRIMARY KEY id(idusuario)
	);

	INSERT INTO usuarios VALUES (1, 'Juan','Juan VANEGAS' , 'Informatica',12345678);
	INSERT INTO usuarios VALUES (2, 'Laura','Laura VANEGAS' , 'Contabilidad',12345678);
	INSERT INTO usuarios VALUES (3, 'Luis','Luis VANEGAS' , 'Administracion',12345678);
	INSERT INTO usuarios VALUES (4, 'Pedro','Pedro VANEGAS' , 'Informatica',12345678);
	INSERT INTO usuarios VALUES (5, 'David','David VANEGAS' , 'Contabilidad',12345678);

	