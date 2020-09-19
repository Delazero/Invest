create table investidor(
	id_investidor serial primary key,
	nome_investidor varchar(200),
	prazo date,
	tolerancia varchar(20),
	capital money
);