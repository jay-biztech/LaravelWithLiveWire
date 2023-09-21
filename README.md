## Laravel With Livewire

### Prerequisites
##### What things you need to install this project and how to setup the project on local
1. PHP [![PHP Version](https://img.shields.io/badge/Version-8.1.*-green)](https://www.php.net/releases/8.1_0.php)
2. MySQL [![MySQL Version](https://img.shields.io/badge/Version-5.6.*-green)](https://downloads.mysql.com/archives/community/?version=5.6.23)
3. Sqlite 

### Project setup
1. Clone the project

2. Install the dependencies 
   ```
   composer install
   ```

4. Setup database details in .env

5. Migrate the database 
     ```sh  
     php artisan migrate
     ```

6. Seed the database
     ```sh
     php artisan db:seed
     ```
7. Run the project
     ```sh
     php artisan serve
     ```

### During Development
  * Migrate and Seed with fresh database
     ```sh
     php artisan migrate:fresh --seed
     ```
  * Need to set sqlite for database in phpunit.xml for Unit testing
 
  * Use below command for testing
    ```sh
    composer test
    ```
