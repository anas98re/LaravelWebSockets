# LaravelWebSockets

In terminal:
- laravel new laravel-real-time-notifications
- composer require beyondcode/laravel-websockets --with-all-dependencies
- composer require pusher/pusher-php-server

Next, adapt your .env file. We want the BROADCAST_DRIVER to be pusher.
BROADCAST_DRIVER=pusher

And we need to set the Pusher credentials.
PUSHER_APP_ID=12345
PUSHER_APP_KEY=12345
PUSHER_APP_SECRET=12345
PUSHER_APP_CLUSTER=mt1

The Laravel WebSockets package comes with a migration file for storing statistics and a config file we need to adapt. Let's publish them.
- php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
- php artisan migrate

And here, we publish the config file of Laravel Websockets.
-php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"

php artisan websockets:serve





