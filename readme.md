<p align="center"></p>


## Acerca del proyecto 
Este proyecto esta construido con [Laravel 5.5](https://laravel.com/docs/5.5)

## Pasos para instalación

## Paso 1. -Clonar proyecto 
	
	git clone https://github.com/chaquen/erp_tiendas_laravel_5.5.git	

## Paso 2. -Dar permisos a las carpetas storage y 	storage logs

	sudo chmod -R 777 storage

	cd storage	

	sudo chmod -R 777 logs	
	

## Paso 3. Crear archivo .env
## Paso 4. Crear Key.

	php artisan key:generate	

## Paso 5. Crear Base de datos.
## Paso 6. Ejecutar migración.
	
	php artisan migrate --seed	


