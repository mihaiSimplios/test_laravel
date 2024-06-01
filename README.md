Project instalation

Clone the repository:
git clone <repository-url>

Install dependencies:
composer install

Set up environment variables:
Create a copy of the .env.example file and rename it to .env. Then, update the database and other configuration settings as needed.

Generate application key:
php artisan key:generate

Run migrations:
php artisan migrate

Populate the database with seed data:
php artisan db:seed

Start the development server:
php artisan serve
