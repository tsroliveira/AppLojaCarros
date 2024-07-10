# Locadora de Carros

## Requisitos
- PHP >= 8.1.x
- Composer
- Node.js
- npm

## Instalação

1. Clone o repositório AppLojaCarros.
   ```sh
   git clone https://github.com/tsroliveira/AppLojaCarros.git
   ```
2. Navegue até a pasta \api onde está o nosso BackEnd PHP Laravel.
   ```sh
   cd .\AppLojaCarros\api\
   ```
3. Instale as dependencias.
   ```sh
   composer install
   ```
4. Copie o arquivo .env e configure a conexão com o banco de dados MySQL.
   ```sh
   cp .env.example .env
   ```
5. Segue abaixo exemplo de configuração.
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=carros
   DB_USERNAME=root
   DB_PASSWORD=root
   ```
6. Execute as migrations para criar o banco de dados "carros" e as tabelas
   ```sh
   php artisan key:generate
   ```
   ```sh
   php artisan migrate --seed
   ```
7. Inicialize a aplicação backend. 
   ```sh
   php artisan serve
   ```

8. Navege até a pasta do FrontEnd em React.
   ```sh
   cd .\AppLojaCarros\web\
   ```
7. Instale as dependencias do projeto.
   ```sh
   npm install
   ```
8. Execute o projeto.
   ```sh
   npm start
   ```
