# PMB
* [DEMO](lara-pmb.artefakcoding.my.id).
* [API Documentation](https://lara-pmb.artefakcoding.my.id/api/docs).
* [Source Code](https://github.com/anggairham/lara-pmb).
* [Documentation](https://github.com/anggairham/lara-pmb/blob/main/README.md).
* [License](https://github.com/anggairham/lara-pmb/blob/main/LICENSE).

### Development
```bash
git clone
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

### Production
```bash
git clone
composer install --optimize-autoloader --no-dev
cp .env.example .env
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
chown www-data:www-data /var/www/html/lara-pmb/database
sudo chown www-data:www-data /var/www/html/lara-pmb/database/database.sqlite
sudo chmod 664 /var/www/html/lara-pmb/database/database.sqlite


sudo nano /etc/nginx/sites-available/lara_pmb
sudo ln -s /etc/nginx/sites-available/lara_pmb /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx

```