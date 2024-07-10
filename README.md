# Locadora de Carros

## Requisitos
- PHP >= 8.1.x
- Composer
- Node.js
- npm

## Instalação

1. Clone o repositório:
   ```sh
   git clone https://github.com/tsroliveira/LojaDeCarros.git
   ```
2. Configurando o Backend Laravel:
   ```sh
   cd .\api\
   composer install
   cp .env.example .env
   ```
3. Configure a conexão com o banco de dados MySql no arquivo .env
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=carros
   DB_USERNAME=root
   DB_PASSWORD=root
   ```
4. Execute as migrations para criar as tabelas e o banco de dados "carros".
   ```sh
   php artisan key:generate
   php artisan migrate --seed
   ```

   php artisan make:seeder DatabaseSeeder
   
   

   php artisan serve
   
