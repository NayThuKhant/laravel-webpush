# Push Notifications to Browser without using any thrid party, but using WebPush API

```
    git clone https://github.com/NayThuKhant/laravel-webpush
    valet secure https://github.com/NayThuKhant/laravel-webpush
    cd 
    touch db.sqlite
    cp .env.example .env #configure your .env
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan webpush:vapid
    php artisan db:seed
    
    npm install 
    npm run dev
```

credentials for login:
- naythukhant644@gmail.com
- password

```
    php artisan push:notification
```
And you will see a notification if you have already granted the permission to show notification.






