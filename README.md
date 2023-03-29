<h1 align="center">Sistema de Gestão de Vendas de Produto</h1>



<p align="center">Projeto Desafio Backend, com o Intuito de avaliar o conhecimento sobre desenvolvimento de aplicações Web com ênfase no aspecto Backend, observando a qualidade do código, organização dos componentes, padronização, desempenho na utilização dos recursos e estruturas de dados, documentação e versionamento.</p>


## Linguagens
-	PHP - v7.4.29 (Local via XAMPP - opcional)
-	HTML
-	CSS
-	JavaScript 

## Arquitetura
•	MVC - Model-View-Controller

##  Construído com

* [Laravel 8](https://laravel.com/docs/8.x) - O Framework PHP para artesãos da Web.
* [Eloquent](https://laravel.com/docs/8.x) -  Mapeador objeto-relacional (ORM).
* [Composer](https://getcomposer.org/) - Gerenciador de Dependências para PHP.
* [MySQL](https://www.mysql.com/) - O banco de dados de código aberto mais popular do mundo.
* [VSCode](https://code.visualstudio.com/) - Edição de código Redefinido.


### Banco de Dados da aplicação
-	MySQL

## Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.


### 📋 Pré-requisitos

Se você for usuário **Windows**, pode utilizar o XAMPP para instalar, e semi-configurar  o ambiente do projeto de forma mais prática, a instalação do Xampp, traz automaticamente a versão do [PHP](https://www.php.net/manual/pt_BR/install.php), [MariaDB](https://mariadb.org/), [Apache(HTTP Server)](https://www.apache.org/) e o SGBD [PHPMyAdmin](https://www.phpmyadmin.net/).
```
Xampp 7.4.29
Composer -> versão LTS
```
Disponivel em:  
* [xampp-7-4-29-windows](https://xamppguide.com/download/xampp-7-4-29-windows/)
* [Composer](https://getcomposer.org/)


Se preferir não optar pelo Xampp, ou se for usuário **Linux** ou **Mac**, você deve instalar as dependências listadas abaixo.

```
PHP 7.4.29
Mysql -> versão LTS  ou MariaDB -> versão LTS
Composer -> versão LTS
```

Disponivel em:
* [PHP](https://www.php.net/manual/pt_BR/install.php)
* [MSQL](https://www.mysql.com/)
* [MariaDB](https://mariadb.org/)
* [Composer](https://getcomposer.org/)

Para a clonagem do repositorio utilizaremos o [GIT](https://git-scm.com/).
```
Git -> versão LTS
```
Disponivel em:
* [Git](https://www.hostinger.com.br/tutoriais/web-server)


Para a edição dos arquivos você pode recomendamos o [VSCode](https://code.visualstudio.com/), mas você pode utilizar 
Disponivel em:
* [VSCode](https://code.visualstudio.com/).


### 🔧 Instalação

Após a instalação dos pré-requisitos, vamos seguir com o passo para instalação do projeto.

#### Instalação Passo - 1  | Caso tenha instalado o Xampp:

```
* Execute o Xamp como Administrador
* Start o Apache e o MySQL
* Acesse a url: http://localhost/phpmyadmin/
```
```
* No menu lateral do phpMyAdmin: clique em Novo 
* Digite o nome do banco: desafio_db
* Mas você pode definir outro nome se quiser.
* Agora clique em Criar.
* Atualize a página e verifique se o banco criado ja aparece no menu lateral.
```
Ou se preferir:
```
Clique em SQL no menu superior e digite:
 CREATE DATABASE desafio_db;
```

#### Instalação Passo - 1  |  Caso não tenha optado pelo Xampp:


Acesse o MySQL ou MariaDB e execute o comando:
```
CREATE DATABASE desafio_db;
```

#### Instalação Passo - 2  |  Criação de Diretório.

```
* Crie uma pasta para alocar o projeto ou escolha uma já existente.

* Abra o terminal diretamente na pasta ou navegue até o local.
```

#### Instalação Passo - 3  |  Clonando Repositório.
```
Caso tenha instalado o git, digite no terminal o comando abaixo:
git clone https://github.com/VitorCostaMenezes/Desafio-Backend-Inema.git
```
Caso tenha optado por não utilizar o git, baixe o arquivo zipado diretamente do repositório. [Disponivel em.](https://codeload.github.com/VitorCostaMenezes/Desafio-Backend-Inema/zip/refs/heads/main)


#### Instalação Passo - 4  |  Acessando a Aplicação.
```
Navegue até a pasta:
$ cd Desafio-Backend-Inema
E abra o VSCode. Utilize o comando:
$ code . 
```

#### Instalação Passo - 5  | Conectando ao banco "Editando o Arquivo .env".
```
No VSCode:
* Localize e faça uma cópia do arquivo ".env.example", renomeio para ".env"
* Caso você não tenha criado o banco com o nome sugerido "desafio_db"
* Abra o arquivo e localize o a linha "DB_DATABASE=desafio_db" edite o nome do banco. Ex: "DB_DATABASE=meu_banco_db".
* Caso seu banco seja protegido por usuário e senha, será necessário editar essas informações tambem.
```

#### Instalação Passo - 6 | Baixando as dependências da aplicação.
```
Utilize o composer para baixar as dependencias do projeto. Para isso utilize o comando abaixo na raiz do projeto:
$ composer install
```

#### Instalação Passo - 7 | Criando as tabelas no banco automaticamente com migrations com .
Como o sistema foi desenvolvido utilizando migrations através [Eloquent(ORM)](https://laravel.com/docs/8.x/eloquent), você optar pode por criar as tabelas no banco conectado de forma prática, basta apenas rodar o comando abaixo:
```
$ php artisan migrate
```
Após a execução do comando você pode verificar o status de crição através do comando:
```
$ php artisan migrate:status
```

#### Instalação Passo - 7 | Criando as tabelas importando o dump da aplicação.
 Você deverá localizar o arquuivo desafio_db.sql na pasta banco e fazer o acessar o MySQL e fazer o import do arquivo. Ou abrir o arquivo no editor de texto, copiar e executar os scripts um a um.
 Observação: lembrando que não é adequado compartilhar arquivos .sql dessa maneira, entretanto, como estamos tratando de uma base de dados sem informaçõs preenchidas, o compartilhamento foi feito dessa forma.


#### Instalação Passo - 8 | Incializando a aplicação 
Execute os comando abaixo para incializar a aplicação
```
Este comando deve utilizado penas na primeira vez em que for executar a aplicação.
$ php artisan key:generate
```
```
Para incializar:
$ php artisan serve
```
A aplicação por padrão esta configurada para rodar na porta 8000, caso esta porta esteja ocupada você pode alterar esta opção no arquivo .env, ou utlizar o comando abaixo abaixo para abrir na porta desejada. Exemplo para abrir na porta 9000.
```
$ php artisan serve --port=9000
```

#### Instalação Passo - 9 |  Url de Aceso
Caso seu projeto não abra diretamente no navegador você pode utilizar a [url](http://127.0.0.1:8000/) abaixo para acessar. Lembrando que pode ser necessário alterar o número da porta no final da url.
```
http://127.0.0.1:8000/
```


## Funcionalidades apresentadas pela aplicação
-   Home incial com botões que levam para as páginas com as  funcionalidades abaixo.
-	Cadastrar e alterar clientes
-	Cadastrar e produtos, alterar quantidade(funcionalidade apresentando inconsistência).
-	Exibição dos clientes caadastrados.
-	Exibição dos produtos caadastrados.
-	Geração de Pedidos(vendas).
-	Listagem e busca de pedidos.
    -	Listagem detalhada de pedido.

## Instruções de uso
A principal funcionalidade do sistema é 'Gerar Pedidos(vendas)", porèm para o funcionamento  dessa fução é necessário:
- Cadastrar um cliente ou mais.
    - Preenca o formulário com os dados do cliente e endereço.
- Cadastrar um produto ou mais.
    - Preenca o formulário com os dados do produto, imagem do produto e quantidade.

Após o cadastro dessas duas entidades a funcionalidade de "Gerar Pedido(vendas) estará disponível.
##  Executando os testes

Foram elaborados testes para verificar a consistencia das informações vindas da aplicação com os campos das tabelas existentes, verifcação do funcionamento dos formulários no browser da aplicação e seus respectivos inputs e existência de possiveis dados em determinadas páginas.

```
Testes unitários de existência de campos:
$ phpunit

Caso o comando acima não funcione, você pode navegar até a pasta bin e excutar o comando.
$ cd .\vendor\bin
$ phpunit

ou
$ .\vendor\bin\phpunit
```

Para os testes de browser, utilizamos o pacote dusk. É importante ressaltar, que alguns teste podem não funcionar corretamente caso o banco da aplicação da esteja populado adequadamente.
```   
$ php artisan dusk
```



## 📌 Versionamento

Foi utilizado o Git e o próprio GitHub para versionamento da aplicação

## ✒️ Autores

* **Inema** - *Idealizador do sistema e e soliciador do desafio* 
* **Vitor Costa Menezes** - *Codificação, layout* - [Perfil GitHub](https://github.com/VitorCostaMenezes)



---