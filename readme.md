# Exercício do processo seletivo da Lahar

Exercício de comparação de vetores e inserção em um banco de dados MySQL.

(Adicional) CRUD de exemplo do [CodeIgniter](https://www.tutorialspoint.com/codeigniter/working_with_database.htm).

## :rocket: Setup

- Instale o [Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/) e o [Docker Compose](https://docs.docker.com/compose/install/)
- `git clone https://github.com/Acquati/teste-lahar.git`
- `cd teste-lahar`
- `cp .env.dist .env`
- `docker-compose up`
- Executar comandos SQL na base de dados dbname: **exercicio.sql**

| Service      | Path                    |
| ------------ | ----------------------- |
| Website      | `http://localhost:8080` |
| PhpMyAdmin   | `http://localhost:8081` |
| Mail catcher | `http://localhost:8082` |
| Logs         | `log/`                  |

## Docker LEMP

[https://github.com/atillay/docker-lemp](https://github.com/atillay/docker-lemp)

- Nginx
- PHP 7.2-fpm
- MySQL
- PHPMyAdmin
- Maildev
- CodeIgniter

## :whale: Docker images

[https://github.com/atillay/docker-images/tree/master/lemp](https://github.com/atillay/docker-images/tree/master/lemp)

### (Opcional) :tent: Use a virtual host

- On your machine, run `$ sudo nano /etc/hosts` and add `127.0.0.1   myhost.local`
- Change the server name in `docker/nginx/nginx.conf#L3` to `myhost.local`
- Modify `.env` and set `SERVER_PORT=80`
- Run `$ docker-compose up`
- If it fails make sure no service like Apache is running on port 80 

### (Opcional) About MySQL credentials

If you change mysql credentials in .env you have to re-create mysql container:

- Database will be deleted, make a dump with PhpMyAdmin
- Remove container and volume : `$ docker-compose rm -fv mysql`
- Run : `docker-compose up` 
- Re-import your database on PhpMyAdmin
