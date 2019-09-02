PASOS PARA CORRER EL PROYECTO

Deben de importar las librerias basicas de laravel pra que el royecto cree la carpeta vendor comandos:
-composer install
GENERAR LA LLAVE	
-php artisan key:generate

la base de datos se debe crear en el servidor local con el nombre Tivy 

un usuario llamado Tivy y sin contraseña
para facilitar la etapa de desarrollo

para que el archivo .env se incluya en el repositorio de git se le cambiara el 
nombre a env.php, para que el proyecto funcione se debe cambiar el nombre de este 
a .env

se incluye en el archivo git ignore los archivos laravel (vendor y librerias)
tambien los archivos de node
archivos generados por sass



al crear la carpeta vendor(despues de agregar todas las dependencias del proyecto se crea
automaticamente)

ir al siguente archivo
C:\xampp\htdocs\Tivy\TIVY\vendor\laravel\framework\src\Illuminate\Foundation\Auth\RegistersUsers.php

una vez ahí en el metodo register eliminar la linea 35
la que dice :$this->guard()login($user);

esto para evitar el logueo automatico al registrarse en la aplicacion


