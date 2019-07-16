# Mabolo National High School - Student Management System  
 
## Setup Libraries in this sequence  

### `composer install (if live server)` or `composer update (if local)`    
### `npm install (if local)`     
### `php artisan migrate --path=database/migrations/2019_07_15_151545_roles_table.php`  
### `php artisan migrate`  
### `php artisan migrate --path=database/migrations/persons && php artisan migrate --path=database/migrations/students`   


## Setup default values 

### `php artisan db:seed` or `php artisan db:seed --class=UsersTableSeeder`     