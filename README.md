APP SHOPPING POR ITZEL C. PALMA REYES

El objetivo es crear un aplicativo con la funcionalidad de agregar, editar, buscar, listar y filtrar ciertos productos de supermercado para una gestión intuitiva y amigable para el administrador de un mini super.

El link de Git Hub es: https://github.com/itzelpalre/appShopping




En los siguientes apartados se describen los puntos trabajados en el aplicativo

Requisitos mínimos del sistema

2.1 Configuración del programa
El programa tendrá una parte para definir la configuración.
En esta parte se definirán aspectos a configurar de la aplicación:
- Conexión a la base de datos

La configuración se encuentra en el archivo .env, donde se indica la conexión a la base de datos y también en el repositorio de Git Hub se encuentra la base de datos a importar appLaravel.sql

- Otras configuraciones, por ejemplo, envío de correos

Para la configuración de envíos de correo, se realiza en el archivo .env, para el aplicativo App Shopping, se realizó en una cuenta gratuita de mail trap



2.2 Acceso al programa

Para acceder al programa se pedirá usuario y contraseña, si no es correcto no dejará continuar y si es correcto accede al programa.


Nota: Aquí está el acceso de un usuario generado
Introduzca sus datos de acceso
Usuario: itzelpalmareyes@gmail.com
Password: 12345678

El programa contendrá un menú en el cual podremos acceder a las diferentes partes del mismo:

● Gestión de usuarios
● Gestión de categorías
● Gestión de contenido


2.3 Gestión de usuarios

Podremos dar de alta usuarios, indicando el nombre de usuario, email y contraseña. Al arrancar el programa nos pedirá usuario y contraseña para acceder.



2.4 Gestión de categorías

Se podrá listar, consultar, modificar, borrar o dar de alta varias categorías, indicando nombre y descripción.

Pantalla principal del ítem Gestion de Categorias



Pantalla alta de categoría


Pantalla editar categoría



2.5 Gestión de contenido

Se podrá listar, consultar, modificar, borrar o dar de alta el contenido elegido, indicando algunos datos del tema elegido. Como mínimo tendrá que contener:

- Nombre
- Descripción
- Observaciones
- Imagen principal
- Contenido multimedia, podremos cargar para cada elemento diferentes archivos multimedia (ficheros, fotos, audio y/o vídeo)





Los resultados obtenidos lo podremos exportar (Pdf o Excel)

Visualización del contenido: Tendremos un buscador para listar y localizar uno o varios elementos. Podremos buscar por los campos más relevantes nombre y descripción, así como indicarle una categoría en concreto.

Al elegir un elemento podremos acceder a su ficha y ver todos sus datos, así como ver su contenido multimedia y visualizarlo/reproducirlo.

En la ficha podremos modificar, añadir o borrar contenido multimedia.

3 Requisitos opcionales del sistema a desarrollar

Otros requisitos a desarrollar podrían ser:

- Permisos: cada usuario poder definir los permisos a cada parte de la aplicación.

- Cambio de contraseña. El usuario podrá una vez logueado cambiar su contraseña.

- Recuperación de contraseña. Si el usuario se olvida la contraseña, podrá recuperarla.

- Envío de datos del contenido por email, una vez escogido un contenido poder enviar por email una ficha del mismo, indicando el nombre y descripción y adjuntando los ficheros multimedia.

- Importación de contenido mediante automatización a través de Excel y otros medios.


