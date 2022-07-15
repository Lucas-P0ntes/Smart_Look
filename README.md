# Smart-Look
<h4 align="center"> 
	🚧  Status: Finalizado🚀  🚧
</h4>

## O que é ?
Bem-Vindo ao Smart-Look 
Esse website tem como objetivo auxiliar e facilitar denúncias contra lixos/entulhos fazendo a mediação entre população e governo.

## Como funciona a utilização do site?
O sistema de denúncia é bem simples.
 1- O usuário vai entrar no site e fazer o cadastro.
 2-Após fazer o cadastro o usuário faz o login no site.
 3-A primeira tela a será um wellcome no qual poderá fazer todo o gerenciamento de suas denúncias.
 4- No "wellcome" vai ter as opções de criar, deletar, visualizar e mudar o status da denúncia ( um CRUD  ).
 
 ### Features
- [x] Cadastro de usuário
- [x] Validação do DB
- [x] Cadastro das denúncias 
- [x] Sistema para o usuario alterar seus dados

## O que é necessário para rodar ?
Na utilização de foi utilizado o XAMPP e o MySQL WorkBench(Não é necessário o MySQL WorkBench, mas facilita na manipulação).

## Como usar ?
### Site 
1-Baixe e instale o xampp e o Mysql WorkBench <br>
/* No caso de Mac baixe o Mampp */<br>
/* No caso de Linux o Lamp */<br>
2 - Após executar o xampp você vai se deparar com uma tela simples.<br>
2.1 - Cada opção dessa que você está vendo são ferramentas do xampp.<br>	
2.2 -  No nosso caso vamos usar apenas o "Apache" e o "MySQL".<br>
2.3- Aperte start em seus respectivos botões.<br>
3- Agora vá nos seus aquivos e entre no seu HD(Windows(C:)).<br>
3.1- Entre na pasta "xampp".<br>
3.2- Entre na pasta htdocs.<br>
3.3- Agora dentro da pasta htdocs crie uma pasta e coloque os arquivos baixados desse github(Tem uma opção de baixar o zip no botão:"code".).<br>
4- Agora abra seu navegador e color o caminho "http://localhost/Nome_da_pasta_criada_na_opção_3.3/public/index.php" <br>
### Pronto o site já está funcionando, agora vamos configurar o banco de dados.<br>
1- Abra o MySQL Workbanch <br>
2- Ao lado do nome MySQL Connections tem uma bolinha com sinal de +.<br>
3- Ao apertar essa bolinha abrira uma caixa de config para a New Connection.<br>
3.1- No campo "Connection Name" você ira colocar o nome desse servidor.<br>
3.2- "HostName" geralmente é: 127.0.0.1 e "port" Será a : 3306 (Caso não for, olhe no xampp).<br>
3.3- "Username" será o : root e não tem senha.<br>
4- Entre na nova opção que abrir e coloque em esquema caso não esteja.<br>
5- Selecione o campo Query1 e copie, cole o codigo.<br>
6- Após colar o código clicke na primeira opção de raio.<br>


```
create database smartlook;
 use smartlook;
create table tbl_cadastro_usuarios (
    nome varchar(30) NOT NULL,
    nome_completo varchar(64) NOT NULL,
    email varchar(64) not null,
    Tel_number varchar(11) not null,
    cpf varchar(11) not null ,
    password varchar(64) not null,
    img_perfil varchar(64) not null,
    PRIMARY KEY (cpf)
);

create table tbl_login (
id_login smallint(6) AUTO_INCREMENT ,
nome varchar(32),
cpf varchar(11) not null ,
password varchar(64) not null,
PRIMARY KEY (id_login)

);


CREATE TABLE tbl_denuncias(
	id smallint(6) AUTO_INCREMENT ,
	Regiao_adm varchar(32) NOT NULL,
	tipo_lixo varchar(32) not null,
	cep_rua varchar(8) not null,
	complemento varchar(200) not null,
	img varchar(64) not null,
	data varchar(32) not null,
	validacao varchar(1) not null,
	cpf varchar(11) not null,
	PRIMARY KEY (id)
    );
    
ALTER TABLE smartlook.tbl_login ADD CONSTRAINT fkp FOREIGN KEY (cpf) REFERENCES tbl_cadastro_usuarios(cpf);
ALTER TABLE smartlook.tbl_denuncias ADD CONSTRAINT fk FOREIGN KEY (cpf) REFERENCES tbl_cadastro_usuarios(cpf);


```
	
### Pronto agora teste fazer um cadastro, login e a denuncia no site.

## Algumas Imgens do site:

### Home
![home1](https://user-images.githubusercontent.com/80328167/172514055-6bffe9b8-ca28-4d4b-b1de-e7f48cab5d9b.PNG)

### Home parte de baixo
![home2](https://user-images.githubusercontent.com/80328167/172514059-204773d4-7d83-4844-a9e0-7bc2230774f5.PNG)

### Mostrando o campo de denuncias
![Denuncias](https://user-images.githubusercontent.com/80328167/172514049-4c42d352-532f-4965-8ef8-494ea86bba90.PNG)

### login
![Login](https://user-images.githubusercontent.com/80328167/172514062-eedff114-57f0-40e4-b527-0b1bbd9e7ae9.PNG)

### Mostrando o DashBoard
![DashBoard](https://user-images.githubusercontent.com/80328167/172514047-061bc82f-e5ca-4fd4-8d30-2d149804f66f.PNG)

### Mostrando a filtragem dos campos
![Filtragem](https://user-images.githubusercontent.com/80328167/172514051-80b122d6-06d1-47b1-aaf0-bfc40dd1644b.PNG)




