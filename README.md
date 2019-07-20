# Mabolo National High School   
## Student Management System   

## Setup Libraries in this sequence  

1. `composer install` (if live server) or `composer update` (if local)    
2. `npm install` (if local)     
3.  Please copy `.env.example` and create another `.env`  
4. `php artisan key:generate`   
5. Create database name mnhs    
6. `php artisan migrate --path=database/migrations/2019_07_15_151545_roles_table.php`  
7. `php artisan migrate`  
8. `php artisan migrate --path=database/migrations/persons && php artisan migrate --path=database/migrations/students`   


## Setup default values  
9. `php artisan db:seed`       

## Run  
10. `php artisan serve`  


## For !local! development only  
11. `npm run watch` to run vue.js and compile the javascripts   