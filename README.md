




## Iniciando o Projeto

Após o download ou o clone da aplicação utilize os seguintes comandos:

- composer install - para instalar todas as dependências;
- mv .env.example .env - para renomear o arquivo de exemplo “.env.example” para “.env”;
- php artisan key:generate - para gerar a chave no nosso arquivo ‘.env’.





## Estrutura do Banco

Neste projeto optei por não limitar os campos no banco e possui a seguinte estrutura:

Obs.: O controle da limitação de caracteres foi passada para o FormRequest, com exceção da data de nascimento. Portanto os campos podem receber valores acima do normal, excluindo a entrada já especificada que recebeu um delimitador.



```
$table->id();

$table->string('name');

$table->string('cpf');

$table->string('email');

$table->string('data_nasc',10);

$table->string('nationality');

$table->timestamps();
```



## Ações disponíveis no Controller

Como foi solicitado criei um controller para receber os dados de “Pessoa” e suas respectivas rotas. Abaixo estarei listando todas as funções e os seus retornos.

### 

- Index - retorna todas as pessoas cadastradas;
- Store - adiciona uma “pessoa” no banco utilizando a validação do FormRequest;
- Show - retorna os dados da “pessoa” com base no seu ID;
- Edit - retorna os dados da “pessoa” com base no seu ID para ser utilizada numa blade que possua o formulário de edição;
- Update - atualiza os dados de “pessoa” com base no seu ID;
- Destroy - exclui os dados pertinente a “pessoa” com base no ID informado.

