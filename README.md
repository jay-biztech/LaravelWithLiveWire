## Laravel With Livewire

### Project setup
1. Clone the project

2. Setup database details in .env

3. Migrate the database 
     ```sh  
     php artisan migrate
     ```

5. Seed the database
     ```sh
     php artisan db:seed
     ```

### During Development
  * Migrate and Seed with fresh database
     ```sh
     php artisan migrate:fresh --seed
     ```
