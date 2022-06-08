# Smart-Look
<h4 align="center"> 
	🚧  Status: 🚀 Em construção...  🚧
</h4>

## O que é ?
Bem-Vindo ao Smart-Look 
Esse website tem como objetivo auxiliar e facilitar denúncias contra lixos/entulhos fazendo a mediação entre população e governo.

## Como funciona a utilização do site?
O sistema de denúncia é bem simples.
 1- O usuário vai entrar no site e fazer o cadastro.
 2-Após fazer o cadastro o usuário faz o login no site.
 3-A primeira tela a será um dashboard no qual poderá fazer todo o gerenciamento de suas denúncias.
 4- No dashboard vai ter as opções de criar, deletar, visualizar e mudar o status da denúncia ( um CRUD  ).
 
 ### Features
- [x] Cadastro de usuário
- [x] Validação do DB
- [x] Cadastro das denúncias
- [ ] Validar campos de input
- [ ] Finalizar o front-end
- [ ] Estruturar melhor o DB

## O que é necessário para rodar ?
Na utilização de foi utilizado o XAMPP e o MySQL WorkBench (Não é necessário, mas facilita na manipulação).

## Como usar ?
### Site
1-Baixe e instale o xampp e o Mysql WorkBench 
/*No caso de Mac baixe o Mampp */
/*No caso de Linux o Lamp*/
2 - Após executar o xampp você vai se deparar com uma tela simples.
2.1 - Cada opção dessa que você está vendo são ferramentas do xampp.	
2.2 -  No nosso caso vamos usar apenas o "Apache" e o "MySQL".
2.3- Aperte start em seus respectivos botões.
3- Agora vá nos seus aquivos e entre no seu HD(Windows(C:)).
3.1- Entre na pasta "xampp".
3.2- Entre na pasta htdocs.
3.3- Agora crie uma pasta e coloque os arquivos acima.
4- Agora abra seu navegador e color o caminho "http://localhost/Nome da pasta criada na opção 3.3/public/index.php" 
### Pronto o site já está funcionando, agora vamos configurar o banco de dados.
1- Abra o MySQL Workbanch 
2- Ao lado do nome MySQL Connections tem uma bolinha com sinal de +.
3- Ao apertar essa bolinha abrira uma caixa de config para a New Connection.
3.1- No campo "Connection Name" você ira colocar o nome desse servidor.
3.2- "HostName" geralmente é: 127.0.0.1 e "port" Será a : 3306 (Caso não for, olhe no xampp).
3.3- "Username" será o : root e não tem senha.
4- Entre na nova opção que abrir e coloque em esquema caso não esteja.
5- Selecione o campo Query1 e copie, cole o codigo.
6- Para cada comando selecione ele e execute individualmente (primeira opção de raio).
7- Coloque execute um comando de cada vez.
8 Nessa ordem.(Copie o comando sem as aspas).
	1- " CREATE DATABASE tbl_cadastro; "
	2-" use tbl_cadastro; "
	3-" CREATE TABLE denuncias(
		id_pessoas smallint(6) AUTO_INCREMENT primary key,
		nome varchar(30) NOT NULL,
		email varchar(50) not null,
		number varchar(200) not null,
		senha varchar(200) not null,
		cpf varchar(11) not null primary key ,

		PRIMARY KEY (id),
		primary key (cpf)
		); "
		
	4-" CREATE TABLE denuncias(
	id smallint(6) AUTO_INCREMENT primary key,
	local varchar(30) NOT NULL,
	tipo varchar(50) not null,
	endereco varchar(200) not null,
	complemento varchar(200) not null,
	img varchar(64) not null,
	data varchar(64) not null,
	validacao varchar(64) not null,
	cpf varchar(64) not null,
	PRIMARY KEY (id)
	); "
	
### Pronto agora teste fazer um cadastro, login e a denuncia no site.

## Algumas Imgens do site :

