Start time: 14:00

## Project set up

1. Extract folder
2. Open in your code editor (PHPStorm, VS Code etc.)
3. Run `composer install`
4. Run `npm install` or `yarn install`
5. Duplicate the .env.example file and rename it to .env
6. Run `php artisan key:generate`
7. Add the database credentials (DB_DATABASE is "laravel-coding-challenge"
8. Run `php artisan migrate --seed`
9. Run `php artisan serve`

## View quotes
1. Navigate to '/login' route
2. Email address is "rammah@email.com" and password us "password"

## Testing

1. run `php artisan test` to run a feature test