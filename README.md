<h3>Instrucciones de Instalacion</h3>

<b>1.- Asegurarse de tener instalado Laravel en su maquina, verificar con el siguiente comando</b>
php artisan --version

<b>2.- Clonar el repositorio de git con el siguiente comando</b>
git clone https://github.com/itzelpalre/appShopping.git

<b>3.- Generar el archivo .env para configurar la base de datos con el siguiente comando</b>
mv .env.example .env

<b>4.- Borrar la cache con el siguiente comando</b>
php artisan cache:clear

<b>5.- Para generar el archivo autoload escribir el siguiente comando</b>
composer dump-autoload

<b>6.- Configurar la base de datos</b>
Abril el proyecto con un editor de codigo y dirigirse al root del proyecto al archivo .env > agregar una base de datos e importar la base que se encuentra en el repositorio <b>appLaravel.sql</b>

<b>7.- Generar la key con el siguiente comando</b>
php artisan key:generate

<b>8.- GLevantar el servidor del aplicativo con el siguiente comando</b>
php artisan serve

<b>9.- Para mas detalles del funcionamiento ver doc</b>
https://docs.google.com/document/d/1hHHMO2Yj5zbyYwxO5RUxcgbW5XuR7eiF9VBsZCeqz7w/edit?usp=sharing

Link app Deployada http://aqueous-hollows-69132.herokuapp.com/
