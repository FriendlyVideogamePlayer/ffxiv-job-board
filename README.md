## ffxiv job board
This project is built using laravel and tailwind and so to install and use it you will need Composer installed on your server/PC.
* [Laravel](https://laravel.com/) 
* [Composer](https://getcomposer.org/) 
* [Tailwind](https://tailwindcss.com/)

Move this project folder to your webserver/XAMPP web root (XAMPP/htdocs or /var/www) and simply cd/to/project/directory and run 

```
composer install
```

Then to generate and seed the DB run 

```
php artisan migrate:fresh --seed
```

Next to get the frontend dependencies, including tailwind run

```
npm install
```

Finally to generate the built frontend files run

```
npm run dev
```
