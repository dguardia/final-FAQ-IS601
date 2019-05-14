# FAQ Part 3

To run the FAQ project 

1. git clone https://github.com/dguardia/faq.git

2. cd to faq and run composer install

3. Copy .env.example to .env

4. Setup database / with sqlite or other [https://laravel.com/docs/5.8/database](https://laravel.com/docs/5.8/database) 

5. Run: php artisan migrate

6. Run: unit tests: phpunit

7 Run: seeds php artisan migrate:refresh --seed