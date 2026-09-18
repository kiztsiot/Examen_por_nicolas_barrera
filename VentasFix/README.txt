----Abrir la pagina por la terminal----

1. Descomprimir o clonar el proyecto en tu entorno local.

2. Abrir una terminal en la raíz del proyecto e instalar las dependencias de PHP:
   composer install

3. Instalar las dependencias de Node.js:
   npm install

4. Configurar las variables de entorno:

     cp .env.example .envs
     php artisan key:generate

5. Ejecutar las migraciones para crear las tablas en la base de datos:
   php artisan migrate

6. Iniciar la compilación de estilos (Tailwind CSS) con Laravel Mix:
   npm run watch
   *(Nota: Dejar esta terminal abierta mientras se trabaja localmente).*

7. En otra pestaña o ventana de la terminal, levantar el servidor backend de Laravel:
   php artisan serve