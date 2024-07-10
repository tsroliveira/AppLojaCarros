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
4. Execute as migrations para criar o banco de dados "carros" e as tabelas
   ```sh
   php artisan key:generate
   php artisan migrate --seed
   ```
5. Inicialize a aplicação backend 
   ```sh
   php artisan serve
   ```

6. Navege até a pasta do FrontEnd
   ```sh
   cd ..\web\
   ```
7. Execute os comandos abaixo
   ```sh
   npm install
   npm start

   

