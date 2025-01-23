## Startup guide

## Requirements `*`
- [Laravel herd](https://herd.laravel.com)
- [php version 8.3.x](https://php.net/downloads) `**`
- [composer](https://getcomposer.org/download)
- [node.js](https://nodejs.org/en/download)

---
#### `*` Some of these can be downloaded and used directly in Laravel Herd. Please pick in  the settings what code editor you like!
##
#### `**` These extentions need to be enabled in your `php.ini` file
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
### *DISCLAIMER!* I use git bash in vscode as terminal, your terminal might behave differently!
---
># First time run
* Unpack the `.zip` file in a folder of your choice
* Open Laravel herd and go to the Dashboard page\
    Click on 'Open Sites'\
    Click on 'Add' in the top left corner and press 'Link existing project'\
    Select the unzipped folder, and choose php version 8.3.*
* When on the overview page of your website, click on open to the right of your chosen code editor
* In your code editor, open the terminal and
* run `mv .env.example .env`
* run `composer install`
* run `php artisan key:generate`
* run `php artisan migrate` (yes to all)
* If you want only the needed information run `php artisan db:seed --class=PreloadedInformationSeeder`
* (its recommended to check out the rest of the website first)\
    If you also want fake information\
    run `php artisan db:seed --class=FakeDataSeeder`
* run `php artisan storage:link`
* run `npm install`
* run `npm run build`
* run `php artisan optimize`
* run `php artisan filament:optimize`
* run `php artisan schedule:work`
* run `php artisan queue:work`
* Go back to your laravel herd overview page of the website, and click on the URL
---

> ## Normal run
* Open project in your code editor and open the terminal
* run `npm run build`
* run `php artisan optimize`
* run `php artisan filament:optimize`
* run `php artisan schedule:work`
* run `php artisan queue:work`
* Go to your laravel herd overview page of the website, and click on the URL
---
Login information `*`
|email|password|
|--|--|
|admin@jasper.com|@dmin|

> `*` *You can make more users in the admin panel under the 'Users' tab*

---
>###### *Project made in 10-2024*
>### Created by Jasper van den Heuij