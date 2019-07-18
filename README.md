# Mabolo National High School - Student Management System  
 
## Setup Libraries in this sequence  

1. `composer install (if live server)` or `composer update (if local)`    
2. `npm install (if local)`     
3. `php artisan migrate --path=database/migrations/2019_07_15_151545_roles_table.php`  
4. `php artisan migrate`  
5. `php artisan migrate --path=database/migrations/persons && php artisan migrate --path=database/migrations/students`   


## Setup default values 

### `php artisan db:seed`     