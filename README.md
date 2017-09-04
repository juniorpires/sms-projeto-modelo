# sms-projeto-modelo

## Instalação:

1 - composer global require "fxp/composer-asset-plugin:^1.3.1"

2 - composer create-project --stability=dev juniorpires/sms-projeto-modelo meu-projeto

3 - cd sms-projeto-modelo 

4 - php init

5 - crie um banco de dados

 - em common/main-local.php:
    ```php
        'components' => [
                'db' => [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'mysql:host=127.0.0.1;dbname=nomedobanco',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                ],
    ```
   *lembre-se de colocar no host: 127.0.0.1]*

6 - php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations

7 - php yii migrate/up --migrationPath=@yii/rbac/migrations

8 - php yii migrate

## Verificando se deu certo:   

http://localhost/sms-projeto-modelo/frontend/web/index.php

login: admin
senha: admin1

