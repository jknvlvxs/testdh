
# **UTILIZAÇÃO**
1. Após baixar o projeto do GitHub, é necessário instalar o composer com o comando: **composer install**

2. Verificar se os arquivos .env, que está na raiz, e /config/database.php estão configurados conforme seu banco de dados

3. Será necessário criar um database utilizando o mysql com o nome **apirest_dh** (Esse nome pode ser alterado nos arquivos dito anteriormente)

4. Para iniciar banco de dados através do terminal, utilize o comando:
**php artisan migrate**

5. Depois, para popular o banco (neste caso, utilizei o faker), utilize o comando:
**php artisan db:seed**

6. Iniciar o projeto laravel com o comando:
**php artisan serve**

[Para testar os serviços da API, utilizei o Postman](https://www.getpostman.com)

# **ENDPOINTS**
| Método | Endereço                   | Função                                      |
|--------|----------------------------|---------------------------------------------|
| GET    | /api/clients/              | Obtém informações sobre todos os clientes   |
| GET    | /api/clients/`{client-id}` | Obtém informações sobre determinado cliente |
| POST   | /api/clients/              | Insere um novo cliente                      |
| PUT    | /api/clients/`{client-id}` | Altera os dados de determinado cliente      |
| DELETE | /api/clients/`{client-id}` | Deleta determinado cliente                  |
