# sms-projeto-modelo

##Instalação:

1 - composer create-project juniorpires/sms-projeto-modelo

2 - cd sms-projeto-modelo 

3 - php init

4 - composer update

5 - crie um banco de dados (nome padrão: projetoModelo)

6 - php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations

7 - php yii migrate/up --migrationPath=@yii/rbac/migrations

8 - php yii migrate

## Verificando se deu certo:   

http://localhost/sms-projeto-modelo/frontend/web/index.php

login: admin
senha: admin1

