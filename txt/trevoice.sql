
create table venda(
data date not null,
total_venda decimal(8,2) not null,
quant_produtos int not null,
id_cli int not null,
id_oper int not null,
id_prod int not null,
foreign key (id_prod) references produtos(id_prod) on delete cascade on update cascade,
foreign key (id_cli) references cliente (id_cli) on delete cascade on update cascade,
foreign key (id_oper) references operador(id_oper) on delete cascade on update cascade,
id_venda int primary key auto_increment
);