## Laravel app for multi role page access

1. `git clone https://github.com/mdutt247/laravel-multi-role-access.git`
2. `cd laravel-multi-role-access`
3. `composer install`
4. Rename or copy `.env.example` file to `.env`
5. `php artisan key:generate`
6. Set your database credentials in `.env` file
7. `php artisan migrate:fresh --seed`
8. `npm install`
9. `npm run dev`
10. `php artisan serve`
11. Visit `localhost:8000/login` in your browser
12. User id for `admin & author` role: `admin@gmail.com` and password: `password`
13. User id for `author` role: `author@gmail.com` and password: `password`
