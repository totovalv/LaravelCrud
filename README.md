<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
¡Bienvenido al archivo README de mi aplicación de Laravel 9 completa de CRUD!

Descripción de la aplicación
Esta es una aplicación completa de CRUD que permite realizar operaciones GET, PUT, DELETE y POST en una tabla de productos. En la página de cada producto, hay un botón llamado "Sell" que redirige a los detalles del producto. Aquí podemos calcular la recarga del 13% de IVA en función de la cantidad de stock que deseamos calcular. En esta página podemos ver el "Total Price" (sin IVA) y este otro "Total Price with IVA (13%)" con el cálculo del IVA. También tenemos el selector de "Quantity" para especificar la cantidad de stock que deseamos calcular.

## Instalación
Para instalar la aplicación, siga estos pasos:

· Clonar este repositorio en su máquina local.<br>
· Ejecute composer install para instalar las dependencias de Laravel.<br>
· Copiar el archivo .env.example y renombrarlo a .env<br>
· Ejecute php artisan key:generate para generar una nueva clave de aplicación.<br>
· Configure las credenciales de la base de datos en el archivo .env.<br>
· Ejecute php artisan migrate para ejecutar las migraciones de la base de datos.<br>

## Uso
Para utilizar la aplicación, siga estos pasos:

· Inicie el servidor de Laravel ejecutando php artisan serve.<br>
· Abra un navegador y vaya a http://localhost:8000/products para ver la lista de productos.<br>
· Para agregar un nuevo producto, haga clic en "Agregar producto" y complete el formulario.<br>
· Para editar un producto existente, haga clic en "Editar" junto al producto y modifique el formulario.<br>
· Para eliminar un producto existente, haga clic en "Eliminar" junto al producto.<br>
· En la página de detalles del producto, encontrará el botón "Vender". Haga clic en este botón para calcular el precio total con el 13% de IVA en función de la cantidad  de stock seleccionada.<br>

¡Gracias por utilizar mi aplicación de Laravel 9 completa de CRUD!<br>
