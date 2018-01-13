# training-session-2
JAN 2018 Training Session

#COC (Convention over Configuration)

Model:
  Person (Class name)
    Table:  people
    
  Category
    Table: categories
    
    
  Fish
    Table: fish
    
##Installation:
    XAMP / WAMP ,  v-hosts to execute laravel applications (Windows) 
    Valet (Linux , Mac)
    Homestead (Virtual Machine)  
##Downloading Laravel:    
1. Install composer (https://getcomposer.org/)
2. Via Composer Create-Project
3. Composer downloads packages from https://packagist.org/   

##Starting the Application:
1. Local server: php artisan serve
   Output: Laravel development server started: <http://127.0.0.1:8000>
2. Copy .env.example to .env
3. Generate KEY: php artisan key:generate
4. Lifecycle:
   1. public/index.php
   2. bootstrap/app.php
   3. routes/web.php
   
##Routes
Laravel follow REST architecture
##1. Type of routes
   GET - to receive data from web server
   POST - to create/insert data on web server
   PUT - to update data
   Delete - to destroy / delete data
##2. Defining Routes with params   
   Route::get('/clients/{param}', function ($param) {
       return "<h1>Detail of Client ".$param." </h1>";
   });
  
##3.Views
  Laravel uses Template Engine called Blade: https://laravel.com/docs/5.5/blade
  We use Blade Directives, sample direct is {{ }} , which is used to print 
   
##4.Controllers   
 To create a controller via command line: php artisan make:controller ClientsController
 To create a controller with resources functions: php artisan make:controller ClientsController --resource
 
##5. Model
 To create a model via artisan: php artisan make:model Client
 
##6. Migration 
php artisan make:migration create_table_cities --create=cities
Add a field into existing table:
 php artisan make:migration add_city_id_field_to_clients --table=clients
##7 Seeder
Create: php artisan make:seeder CitiesSeeder
Execute: php artisan db:seed
Execute One Seeder class: php artisan db:seed --class=CitiesSeeder


##Adding Custom files to laravel
1. create file
2. add information in composer to json auto load section

"files": [
            "app/Http/helpers.php"
        ],`
`
3. run `composer dump-autoload`` command
   

 