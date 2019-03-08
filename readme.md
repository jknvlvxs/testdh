
# **UTILIZAÇÃO**
1. Para começar, é necessário criar um database utilizando o mysql com o nome ** apirest_dh **

2. Para iniciar banco de dados através do terminal, utilize o comando:
** php artisan migrate **

3. Depois, para popular o banco (neste caso, utilizei o faker), utilize o comando:
** php artisan db:seed **

[Para testar os serviços da API, utilizei o Postman](https://www.getpostman.com)

# **ENDPOINTS**
| Método | Endereço                   | Função                                      |
|--------|----------------------------|---------------------------------------------|
| GET    | /api/clients/              | Obtém informações sobre todos os clientes   |
| GET    | /api/clients/`{client-id}` | Obtém informações sobre determinado cliente |
| POST   | /api/clients/              | Insere um novo cliente                      |
| PUT    | /api/clients/`{client-id}` | Altera os dados de determinado cliente      |
| DELETE | /api/clients/`{client-id}` | Deleta determinado cliente                  |