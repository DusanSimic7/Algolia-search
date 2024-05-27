# Algolia-search engine project

# Installation
After you clone project, run "composer install" to install required packages

Create .env file and fill the right database credentials and connect to the database.

In .env file, below DB credentials put ALGOLIA_APP_ID=JOU7I1MXZL and ALGOLIA_SECRET=16cb549bd1f7f7972c1dd0964754adb8
or you can make a account on angolia server for search engine.

In project root do command "php artisan migrate:fresh --seed" to create db tables and 160 rows in posts table

In PostController you can see routes for create and delete post title and how to do that, I set both in GET request
because I did that for quick example, to see how it works.

In the end you have to clone second project for front-end in my repository, his name is "front-algolia-search" and do npm start.


