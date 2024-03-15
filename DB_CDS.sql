create database DB_CDS;

	use DB_CDS;
	create table artistas(
		cod_art int not null auto_increment,
		nome_art varchar(100) not null unique,
		primary key(cod_art);
	);

	create table gravadoras(
		cod_grav int not null auto_increment,
		nome_grav varchar(100) not null unique,
		primary key(cod_grav);
	);

	create table categorias(
		cod_cat int not null auto_increment,
		nome_cat varchar(50) not null unique,
		primary key(cod_cat);
	);

	create table estados(
		sigla_est char(2),
		nome_est varchar(50) not null unique,
		primary key(sigla_est);
	);


	create table cidades(
		cod_cid int not null,
		sigla_est char(2),
		nome_cid varchar(50) not null unique,
		foreign key(sigla_est)references estados(sigla_est),
		primary key(cod_cid);
	);

	create table clientes(
		cod_cli int not null auto_increment,
		cod_cid int not null foreign(cod_cid) references cidades(cod_cid),
		nome_cli varchar(50) not null,
		end_cli varchar(100) not null,
		renda_cli decimal(9,2) not null check>=0 default 0,
		sexo_cli char(1) not null check('f','m') default 'f',
		primary key(cod_cli);
	);

	create table conjuge(
		cod_cli int not null,
		nome_conj varchar(50) not null,
		renda_conj decimal(9,2) not null ckeck >=0 default 0,
		sexo_conj char(1) not null check>=0 default 0,
		foreign key(cod_cli) references clientes(cod_cli),
		primary key(cod_cli)
		);