Instruções de utilização para o AQUICOB PONTUS: PHP sem frameworks

O sistema foi projetado com duas perspectivas de utilização: a do gestor e do colaborador.
Sendo assim, os menus laterais são restritos por tipo de usuário. Apenas Colaboradores realizam marcações de ponto, e apenas Gestores realizam o cadastro de novos funcionários.
Para utilizar o sistema, faça a importação do dump_sql/dump.sql em seu localhost, com os dados:

'MYSQL_HOST' = 'localhost'
'MYSQL_USER' = 'root'
'MYSQL_PASSWORD' = ''
'MYSQL_DB_NAME' = 'pontus'

Para testar, entre com o login "gestor1@gmail.com", senha "123", ou "colab1@gmail.com", senha "123". Assim você pode testar todas funcionalidades propostas.
As senhas são encriptografadas com a função hash MD5.

Por motivos de tempo de implementação, as funcionalidades de edição de ponto e edição de usuário não foram implementados. Além disso, as pesquisas de relatório por data estão configuradas para o formato padrão do SQL: (YYYY-mm-dd)
