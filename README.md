# Installation Process

- [x] Clone the project from git 

``` git clone https://github.com/applandsys/test-laravel-project.git ```

- [x] Install dependency

``` composer install ```

- [x] copy the file .env.example and rename it to .env
- [x] modify it and set the db configuration
- [x] run the following command for insert data into db

``` php artisan migrate:fresh --seed ```

- [x] run the following command to run the project
  ``` php artisan serve ```
- [x] the project will run in 127


# Process Followed over the project

Need to install php and composer first.

```laravel new example-app```

```php artisan session:table```

```php artisan migrate```

## Migration
``` php artisan make:model Product -m ```
``` php artisan make:model Category -m ```
``` php artisan make:model ProductCategory -m ```
``` php artisan make:model Order -m ```
``` php artisan make:model OrderDetail -m ```
``` php artisan make:model ProductReview -m ```
The above migration is created. now need to run the following command when initially setup.

``` php artisan migrate ```

## Seed

``` php artisan make:seeder ProductSeeder ```
``` php artisan make:seeder CategorySeeder ```
``` php artisan make:seeder ProductCategorySeeder ```
``` php artisan make:seeder OrderSeeder ```
``` php artisan make:seeder OrderDetailSeeder ```
``` php artisan make:seeder ProductReviewSeeder```


### Version info
``` php artisan --version ``` = Laravel Framework 11.33.2

### Create Repository
``` php artisan make:interface Repositories/CategoryRepositoryInterface ```
``` php artisan make:class Repositories/CategoryRepository ```

### Controller
``` php artisan make:controller ProductController ```
``` php artisan make:controller BaseAction ```

### Help source



