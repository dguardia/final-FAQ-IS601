# FAQ Part 3

## To run the FAQ project 

1. git clone https://github.com/dguardia/faq.git

2. cd to faq and run composer install

3. Copy .env.example to .env

4. php artisan key:generate

4. Setup database / with sqlite or other [https://laravel.com/docs/5.8/database](https://laravel.com/docs/5.8/database) 

5. Run: php artisan migrate

6. Run: unit tests: phpunit

7 Run: seeds php artisan migrate:refresh --seed



## IS 601 - Laravel application to show restricted user level access to user faqs.


### Epic and User Stories

Epic : Working from the version 1, this final version, Allows authorized users to add edit/delete questions/answers. as final feature 
the program allows the user to Tag each question for easy navigation. All different questions now will allow the User will find the desired answer.

User story 1: As a user, I want to edit only those questions which are directly mapped to the user, so that unauthorized users will not be given edit permissions.

User story 2: As a user, I want to delete only those questions which are directly mapped to the user, so that unauthorized users will not be given delete permissions.

User story 3: As a user, I want to edit only those answers which are directly mapped to the user, so that unauthorized users will not be given edit permissions.

User story 4: As a user, I want to delete only those answers which are directly mapped to the user, so that unauthorized users will not be given delete permissions.

User story 5: As a user, I want to add/edit/ delete tags to each question


#### [https://is601dbg65final.herokuapp.com/](https://is601dbg65final.herokuapp.com/)

Spring 2019

Class IS 601