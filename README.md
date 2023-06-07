# Push Notifications to Browser using WEBPUSH API

git clone
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




