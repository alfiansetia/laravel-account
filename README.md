# laravel-account
 
## Requirement
- PHP 8.0.2
- Composer 2.1^

## Cara Install dan run project
- Clone Project ini 
- start webserver dan mysql server
- buat database mysql
- copy env.example menjadi .env, lalu edit konfigurasi .env nya, seperti nama database, username, password
- buka terminal dan masuk ke folder project lalu run
```
composer install
```
- kemudian run 
```
php artisan key:generate
```
- selanjutnya run 
```
php artisan migrate
```
- pastikan tidak ada error, lalu untuk menjalankan project run
```
php artisan serve
```
- lalu buka url 127.0.0.1:8000 di browser
- done