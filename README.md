# Projeto Disciplina de PHP
> Sistema de Clínica Médica para gerenciamento de pacientes, médicos, consultas.
### Tecnologias usadas: 
>Back-end
* PHP com padrão MVC sem uso de frameworks
* MySQL
* Composer

>Front-end
* HTML,CSS
* Bootstrap
* Jquery

### Para executar o sistema:
1. Inicie os servidor apache e Mysql.
2. Importe o arquivo clinicaphp.sql para o seu SGBD.
3. Defina as constantes de configurações do seu banco de dados no construtor da classe App/App.php.
4. Insira um registro de usuário no seu SGBD.
5. Mude o nome do diretório raiz do sistema para sistema-php
5. Vá para localhost/sistema-php e informe login e senha.

### Funcionalidades do sistema:

* Tratamento de erros de requisição 404, 500, etc.
* CRUD de especialidades, médicos, pacientes, medicamentos.
* Agendamento de consultas.
* Tela inicial com quantidade de consultas do dia, do mês atual, etc.

