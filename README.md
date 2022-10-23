# Teste PHP, Superlogica, OUT/2022

Repositório destinado ao teste técnico para vaga de Desenvolvedor PHP.


## A aplicação
A aplicação foi desenvolvida utilizando Laravel 9 e Docker.

- As questões a serem resolvidas podem ser encontradas na raiz, no arquivo 'Prova_Dev_Plataforma.pdf'
- O arquivo .env foi mantido no repositório para facilitar a configuração da aplicação de teste;

Siga as instruções abaixo para conseguir configurar e testar.


## Como configurar
1. Baixe o repositório através de seu terminal na pasta que desejar:
```
git clone https://github.com/Digo8875/php_test_superlogica_out_2022.git
```

2. Acesse a pasta da aplicação, de acordo com o caminho em seu diretório:
```
cd <caminho_do_computador>/php_test_superlogica_out_2022/app_superlogica
```

3. Execute o comando Docker para gerar as imagens necessárias e subir o container:
```
docker-compose up --build
```

4. Com outro terminal, acesse o container da aplicação para poder exercutar comandos do Laravel:
```
docker exec -ti app-superlogica-test bash
```

5. Com o acesso ao container, execute o comando migrate do Laravel para poder criar o Banco de Dados e populá-lo com informações:
```
php artisan migrate:fresh --seed
```

* Agora a aplicação está configurada e pronta para ser testada


## Como acessar a aplicação
1. A aplicação em si pode ser acessada através do browser, com a porta do servidor Nginx:
```
localhost:8989
```

2. O banco de dados pode ser acessado através do browser, com a porta do PHPMyAdmin e credenciais do .env:
```
localhost:8080

Servidor: superlogica-mysql
Utilizaodr: superlogicatest
Palavra-passe: superlogicatest
```

## A aplicação
Com tudo configurado e acessando a aplicação, a página inicial possuirá 3 botões.
Assim, basta clicar nos botões e utilizar cada funcionalidade referente a cada exercício.


## Análise Backend
Para uma análise mais detalhada, você poderá observar os seguintes arquivos no diretório do Laravel, conforme cada exercício:

#### Exercício 1 (Formulário)
- app_superlogica
    - app
        - Http
            - Controllers
                - FormExerciseController.php
    - resources
        - views
            - exercise_1
                - form.blade.php
                - index.blade.php

#### Exercício 2 (Processamento de Dados)
- app_superlogica
    - app
        - Http
            - Controllers
                - DataProcessingController.php
    - resources
        - views
            - exercise_2
                - index.blade.php

#### Exercício 3 (Database)
- app_superlogica
    - app
        - Http
            - Controllers
                - DatabaseExerciseController.php
    - resources
        - views
            - exercise_3
                - index.blade.php

#### Outros arquivos gerais
- app_superlogica
    - app
        - Models
            - User.php
    - database
        - migrations
            - PODE CONFERIR TODOS ARQUIVOS DE MIGRATIONS
        - seeders
            - PODE CONFERIR TODOS ARQUIVOS DE SEEDERS
    - public
        - js
            - mask.js
    - resources
        - views
            - layouts
                - base_view.blade.php
            - home.blade.php