# eventManager
1) Download project from repository
2)Go to project directory and run "composer install" in the command line.
	https://getcomposer.org/
3) set up a new mysql database.
4) set a virtual host for the application with root directory "{mainFolder}/public/".
5) open ".env.example" file in the main directory and change the database settings:

	DB_CONNECTION=mysql
	DB_HOST={db_host}
	DB_PORT={db_port}
	DB_DATABASE={db_name}
	DB_USERNAME={db_username}
	DB_PASSWORD={db_password}
6) rename the file ".env.example" to ".env"
7) in the command line type "php artisan key:generate"
8) in the command line type "php artisan migrate"
9) this should be everything (I hope...)
