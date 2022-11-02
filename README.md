
# API de Eletrodomesticos Laravel 9 com PHP 8

```sh
git clone https://github.com/andreivupt/API_eletrodomesticos.git
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=API_ELETRODOMESTICOS
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec app bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Gerar tabelas com migration
```sh
php artisan migrate
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)


# Testando API com POSTMAN

# Inserir produto

MÉTODO: POST 
URL: http://localhost:8989/api/products
HEADERS: KEY: Content-Type / VALUE: application/json / BODY: raw

{
    "DS_NAME": "Torradeira elétrica",
    "DS_DESCRIPTION": "Torradeira Elétrica Inox com 6 Níveis de Temperatura Vermelho",
    "DS_BRAND": "Lenoxx ",
    "NM_TENSION": 220,
    "NM_BAR_CODE": 100550,
    "NM_VALUE": 110.99,
    "FL_STATUS": "Y"
}

# Listar produtos

MÉTODO: GET
URL: http://localhost:8989/api/products

{
    "DS_NAME": "Torradeira elétrica",
    "DS_DESCRIPTION": "Torradeira Elétrica Inox com 6 Níveis de Temperatura",
    "DS_BRAND": "Britania",
    "NM_TENSION": 220,
    "NM_BAR_CODE": 100550,
    "NM_VALUE": 129.49,
    "FL_STATUS": "Y"
}

# Atualizar produto

MÉTODO: PUT
URL: http://localhost:8989/api/product/1

{
    "DS_NAME": "Torradeira elétrica",
    "DS_DESCRIPTION": "Torradeira Elétrica Inox com 6 Níveis de Temperatura",
    "DS_BRAND": "Britania",
    "NM_TENSION": 220,
    "NM_BAR_CODE": 100550,
    "NM_VALUE": 129.49,
    "FL_STATUS": "Y"
}

# Remover produto

MÉTODO: DELETE
http://localhost:8989/api/product/1

