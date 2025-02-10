# To-Do List App con Laravel

Este es un proyecto de una aplicación web de gestión de tareas (To-Do List) desarrollada con **Laravel**. A continuación, se detallan los pasos para ejecutar el proyecto localmente y desplegarlo en **Heroku**.

---

## **Requisitos**

- PHP 8.2 o superior.
- Composer.
- Node.js y npm.
- Git.
- Base de datos (MySQL o PostgreSQL).
- Cuenta en [Heroku](https://signup.heroku.com/).
-XAMPP
---

## **Instalación Local**

### **1. Clonar el Repositorio**
Clona el repositorio en tu máquina local:
git clone https://github.com/tu-usuario/todo-app.git
cd todo-app

2. Instalar Dependencias
Instala las dependencias de PHP y Node.js:


composer install
npm install

3. Configurar el Archivo .env
Copia el archivo .env.example y renómbralo a .env. Luego, configura las variables de entorno:

cp .env.example .env
Abre el archivo .env y configura las credenciales de la base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app
DB_USERNAME=root
DB_PASSWORD=

4. Generar la Clave de Aplicación
Genera una clave de aplicación:

php artisan key:generate

6. Ejecutar Migraciones
Ejecuta las migraciones para crear las tablas en la base de datos:

php artisan migrate

6. Compilar Assets
Compila los archivos CSS y JavaScript:

npm run dev

7. Iniciar el Servidor
Inicia el servidor de desarrollo:

php artisan serve
Visita la aplicación en tu navegador:

http://localhost:8000

Despliegue en Heroku
1. Crear una Aplicación en Heroku
Crea una nueva aplicación en Heroku:

heroku create todo-app-lover

2. Vincular el Repositorio a Heroku
Vincula tu repositorio local a Heroku:

heroku git:remote -a todo-app-lover

3. Configurar Variables de Entorno en Heroku
Configura las variables de entorno en Heroku:

heroku config:set APP_KEY=base64:tu_clave_generada -a todo-app-lover
heroku config:set DB_CONNECTION=pgsql -a todo-app-lover

4. Agregar un Add-on de PostgreSQL
Agrega un add-on de PostgreSQL a tu aplicación:

heroku addons:create heroku-postgresql:mini -a todo-app-lover

5. Subir el Código a Heroku
Sube tu código a Heroku:

git push heroku main

6. Ejecutar Migraciones en Heroku
Ejecuta las migraciones en Heroku:

heroku run php artisan migrate -a todo-app-lover

7. Abrir la Aplicación
Abre la aplicación en tu navegador:

heroku open -a todo-app-lover

Estructura del Proyecto
app/: Contiene la lógica de la aplicación (modelos, controladores, etc.).

database/: Contiene las migraciones y seeders.

public/: Contiene los archivos públicos (CSS, JS, imágenes, etc.).

resources/: Contiene las vistas y archivos de assets.

routes/: Contiene las rutas de la aplicación.

tests/: Contiene las pruebas automatizadas.
