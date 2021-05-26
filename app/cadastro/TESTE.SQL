INSERT INTO endereco(id_endereco, cep, endereco, numero, bairro, cidade, uf, complemento) 
VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

CREATE TABLE Cadastro(
    id int NOT null AUTO_INCREMENT PRIMARY KEY, 
    nome varchar(255) NOT null, 
    dataNasc varchar(15) NOT null, 
    rg varchar(20) NOT null, 
    cpf varchar(20) NOT null,
    tel varchar(15) NOT null, 
    sexo varchar(10) NOT null, 
    email varchar(200) NOT null, 
    senha varchar(14) NOT null, 
    confirmSenha varchar(15) NOT null)