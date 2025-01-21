## Startup guide

## Requirements
- [php version 8.3.x](https://php.net/downloads) `*`
- [composer](https://getcomposer.org/download)
- [node.js](https://nodejs.org/en/download)

---
#### `*` These extentions need to be enabled in your `php.ini` file
---

* Ctype
* cURL 
* DOM 
* Fileinfo 
* Filter 
* Hash 
* Mbstring 
* OpenSSL 
* PCRE 
* PDO 
* Session 
* Tokenizer 
* XML 
* sqlite
---

># First time run
1. When the zip file is unpacked, open your code editor in the folder
2. run `mv .env.example .env`
3. run `composer install`
4. run `php artisan key:generate`
5. run `php artisan migrate` (yes to all)
6. If you want only the needed information run `php artisan db:seed --class=PreloadedInformationSeeder`
7. (its recommended to check out the rest of the website first)\
If you also want fake information run `php artisan db:seed --class=FakeDataSeeder`
8. go to your `.env` file
9. change `APP_ENV=local` to `APP_ENV=production` `**`
10. change `APP_DEBUG=true` to `APP_DEBUG=false` `**`
11. run `npm install`
12. run `npm run build`
13. run `php artisan optimize`
14. run `php artisan filament:optimize`
15. run `php artisan schedule:work`
16. run `php artisan queue:work`
17. run `php artisan serve`
18. go to the provided link ([if the link doesn't work, click here!](http://127.0.0.1:8000))

> ###### `**` If you want fake data later on, change them back
---

> ## Normal run
1. run `npm run build`
2. run `php artisan optimize`
3. run `php artisan filament:optimize`
4. run `php artisan schedule:work`
5. run `php artisan queue:work`
6. run `php artisan serve`
7. go to the provided link ([if the link doesn't work, click here!](http://127.0.0.1:8000))

---
Login information `*`
|email|password|
|--|--|
|admin@jasper.com|@dmin|

> `*` *You can make more users in the admin panel under the 'Users' tab*

---
>###### *Project made in 10-2024*
>### Created by Jasper van den Heuij