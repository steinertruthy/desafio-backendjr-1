# Desafio Backend Júnior
Desafio para a vaga de backend júnior da byecar

## Objetivo
Este desafio tem por objetivo compreender as formas como você resolve um determinado problema. De acordo com o seu conhecimento de ferramentas e tecnologia sua forma de resolver pode variar e ser mais ou menos detalhada. Não existe certo ou errado neste desafio, desde que o problema seja resolvido.

## Problema
O departamento comercial demandou um acesso para integração com uma nova API de terceiros, onde teremos que importar uma planilha excel com alguns dados específicos, gravar em um banco de dados Mysql e disponibilizar esses dados através de uma API.

Vamos precisar criar uma tela (para demonstração não precisa ter login e senha) com upload de um arquivo csv com um template pré-definido (em anexo) [desafio-backend.csv](https://github.com/byecar-apps/desafio-backendjr-1/files/11592627/desafio-backend.csv). Este arquivo foi gerado a partir do site (https://www.4devs.com.br/gerador_de_pessoas) e não representam dados reais ou de clientes da byecar.

Será necessário disponibilizar um endpoint que permitirá a visualização dos dados em formato JSON de toda coleção disponível no banco de dados.

## Restrições tecnológicas
* O front-end poderá ser construído em qualquer linguagem;
* Não é obrigatório login e senha para este desafio;
* O banco de dados utilizado para armazenar os dados deverá ser o Mysql (na falta de acesso ao Mysql, utilize SQLite);
* O back-end (importação e API) deve ser criado utilizando: Laravel ou PHP puro ou NodeJS;
* A disponibilização dos dados deverá ser uma API Rest que exige uma autenticação e autorização OAuth2.

### Importante
- Não se preocupe com telas ou qualquer outra estrutura que não envolva o processo acima;
- Crie um fork deste repositório no github e envie o resultado para tiago[@]byecar.com.br em até 7 dias;
- Se tiver dúvidas entre em contato comigo pelo Linkedin https://www.linkedin.com/in/tiago-sabadini/


## Mais sobre o projeto

![desafio-backendjr-1](https://github.com/diogo-steiner/desafio-backendjr-1/assets/106714068/f5a3f132-872d-4149-b42d-bf2ec1e2cde0)
> Projeto desenvolvido em laravel para o teste técnico para desenvolvedor back-end da Byecar.


## 📌 Features

- [x] Usuários
  - [x] Cadastro de usuários via csv
  - [x] Buscar todos os usuários
- [x] Autenticação(OAuth2) via GitHub

## 🚀 Executando o projeto localmente

### 💻 Pré-requisitos

Para rodar o projeto é necessário que você tenha instalado na sua máquina as seguintes ferramentas:

- Git
- PHP
- Composer
- MySql

### 💿 Rodando

```bash
# Clone este repositório através do terminal
$ git clone git@github.com:diogo-steiner/desafio-backendjr-1.git

# Acesse a pasta do projeto
$ cd desafio-backendjr
```

> Crie um arquivo chamado .env na raiz do projeto e copies as informações que estão no .env.example e preencha as informações de acordo com o seu ambiente.

```bash
# Instale as dependências do projeto
$ composer install 

# Persistindo as migrations no banco de dados
$ php artisan migrate

# Rode o projeto
$ php artisan serve 
```

<br>

## 📋 Documentação

### Usuários

#### POST /api/users

Registrar usuários via CSV
> O formulário deve estar no formato "multipart/form-data", com fieldname "csv"


retorno esperado - 201
```JSON
1
```

possíveis erros

400
```JSON
{
  "message": "File is null"
}
```

415
```JSON
{
  "message": "File not Accepted"
}
```
#

### Autenticação

#### api /auth/github
O usuário será redirecionado para a view de "users", onde será feita toda a listagem dos usuários, após a autenticação.


### Buscar todos os usuários

#### GET /api/users
> Requer autenticação Bearer

```TS
{
  headers: {
    "Authorization": `Bearer ${token}`
  }
}
```

return expected - 200
```JSON
[
    {
        "id": 64,
        "nome": "Isabelle Luzia Analu Duarte",
        "idade": 23,
        "cpf": "65142169948",
        "rg": "118609683",
        "data_nasc": "21/04/2000",
        "sexo": "Feminino",
        "signo": "Touro",
        "mae": "Mariana Nair",
        "pai": "Mateus Marcelo Emanuel Duarte",
        "email": "isabelle_duarte@ipmmi.org.br",
        "cep": "77018490",
        "endereco": "Quadra 1005 Sul Alameda 5",
        "numero": "751",
        "bairro": "Plano Diretor Sul",
        "cidade": "Palmas",
        "estado": "TO",
        "telefone_fixo": "6325948923",
        "celular": "63986208183",
        "altura": "1,76",
        "peso": "67",
        "tipo_sanguineo": "O+",
        "cor": "amarelo"
    },
    {
        "id": 65,
        "nome": "Gael Davi Pedro Henrique Cavalcanti",
        "idade": 62,
        "cpf": "25201997333",
        "rg": "253080769",
        "data_nasc": "05/01/1961",
        "sexo": "Masculino",
        "signo": "Capricórnio",
        "mae": "Maria Giovanna",
        "pai": "Geraldo Filipe Cavalcanti",
        "email": "gael.davi.cavalcanti@said.adv.br",
        "cep": "29130236",
        "endereco": "Rua Doze",
        "numero": "392",
        "bairro": "Centro",
        "cidade": "Viana",
        "estado": "ES",
        "telefone_fixo": "2739595228",
        "celular": "27999630298",
        "altura": "1,77",
        "peso": "52",
        "tipo_sanguineo": "B+",
        "cor": "roxo"
    },
    ...
]
```

<br>

Feito com ❤ por [Steiner](https://github.com/diogo-steiner)
