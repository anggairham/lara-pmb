<div align="center">

  <img src="" alt="logo" width="200" height="auto" />
  <h1>Laravel PMB </h1>

  <p> Laravel PMB is a new student registration application built using Laravel for the backend, integrating a modern web interface to streamline the enrollment process. The system facilitates seamless data management and provides an intuitive user experience for both administrators and applicants. </p>
  
</div>

# PMB
* [DEMO](https://lara-pmb.artefakcoding.my.id).
* [API Documentation](https://lara-pmb.artefakcoding.my.id/api/docs).
* [Source Code](https://github.com/anggairham/lara-pmb).
* [Documentation](https://github.com/anggairham/lara-pmb/blob/main/README.md).
* [License](https://github.com/anggairham/lara-pmb/blob/main/LICENSE).

## Requirements
* PHP 8.3
* SQLite
* php-ext.* base on laravel extenstion requirement

## Features
- 

## Technologies Used
* **Backend**: [Laravel 11](https://laravel.com)
* **Frontend** (Web): [Tailwind CSS 3.4.7](https://tailwindcss.com/)

## Development
```bash
git clone
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
# terminal 1
npm run dev
# terminal 2
php artisan serve --host 127.0.0.1 --port 8000
```

## Production
```bash
git clone
composer install --optimize-autoloader --no-dev
npm install
npm run build
cp .env.example .env
# ubah env SESSION_DOMAIN sesuai domain
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan config:cache
php artisan route:cache
php artisan view:cache

sudo chown -R www-data:www-data /var/www/html/lara-pmb/storage
sudo chown -R www-data:www-data /var/www/html/lara-pmb/bootstrap/cache
sudo chmod -R 775 /var/www/html/lara-pmb/storage
sudo chmod -R 775 /var/www/html/lara-pmb/bootstrap/cache

# ubah direktori database ke www-data agar bisa di write
sudo chown www-data:www-data /var/www/html/lara-pmb/database
sudo chown www-data:www-data /var/www/html/lara-pmb/database/database.sqlite
sudo chmod 664 /var/www/html/lara-pmb/database/database.sqlite

sudo nano /etc/nginx/sites-available/lara_pmb
sudo ln -s /etc/nginx/sites-available/lara_pmb /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```
