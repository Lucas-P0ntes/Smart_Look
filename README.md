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
3.2- "HostName" geralmente é: 127.0.0.1 e "port" Será a : 3306 (Caso não, olhe no xampp).<br>
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
![182431515-35fd6717-7d63-42aa-baa2-e1274b91a672](https://user-images.githubusercontent.com/80328167/182434544-593a7d5d-658c-4fd6-b62e-b40cf50bda48.png)


### Home parte de baixo
![182431537-bf56ccd3-e894-4e33-b9aa-019ef17c159a](https://user-images.githubusercontent.com/80328167/182434573-bbeb49df-9ed4-466e-8ab3-cf3fb7189d61.png)

### Conheça o projeto

![182431482-568be85a-c92d-4337-af97-141bca053004](https://user-images.githubusercontent.com/80328167/182435436-7c1fb969-7612-4aba-9053-c9f3102a6c89.png)

### Mostrando o campo de denuncias
![182431504-ccfaefeb-07ec-49cc-97ad-e8b64b335f76](https://user-images.githubusercontent.com/80328167/182440539-a92bbcf4-13f3-40a8-a328-702f6929a601.png)
### Mostrando o campo de denuncias Caso logado
![182431507-a4de8917-b30b-4434-856e-c3f56927131b](https://user-images.githubusercontent.com/80328167/182440605-16a40b45-b298-4143-b9e6-a02d8f04d80d.png)


### login
![182431546-039c2dfc-85d6-4707-9a02-d75dd5aa5202](https://user-images.githubusercontent.com/80328167/182434707-6fe403db-71f6-485c-b883-44247b9d7ee0.png)

### Cadastro
![182431571-7c2d6c3a-981e-4342-b604-55e9222fa2df](https://user-images.githubusercontent.com/80328167/182434799-7d7046b0-3fae-4cee-90bf-71643aef9684.png)

### Mostrando o DashBoard
![182431500-c777afd1-203d-4bea-a44b-84a35e26a295](https://user-images.githubusercontent.com/80328167/182434989-7753ee2d-5329-4a91-b373-aece47d7e580.png)

### Tela do usuario que criou uma denuncias
![182431551-ae68c361-e58d-4a35-a5fa-dec28f401954](https://user-images.githubusercontent.com/80328167/182441001-d2a80e73-8754-479b-adec-7ad4fbe0ead6.png)
![182431558-d1cc0d18-e0eb-473a-bd![182431566-8ac06310-cd5e-4d06-ac3a-039ec0765944](https://user-images.githubusercontent.com/80328167/182441040-7205a115-5056-4991-a59d-8eac792e9d0d.png)
![182431566-8ac06310-cd5e-4d06-ac3a-039ec0765944](https://user-images.githubusercontent.com/80328167/182441180-22be82c4-2e1a-4aa7-981f-27cd09880193.png)



### Cadastro de denuncias

![182431474-67746b37-09f5-42a6-a792-260b5ae87c38](https://user-images.githubusercontent.com/80328167/182435123-a90d2335-60fd-46f6-a751-a76aca166676.png)

### Alteração das informações do perfil

 ![182431510-1961b973-30c7-4681-9d4f-bfd924e88370](https://user-images.githubusercontent.com/80328167/182440809-1d248c37-f9c5-45a4-8769-6b363bbec1f5.png)


