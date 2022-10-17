#qui vanno i pacchetti solo di questo progetto

#per immagini 
php -d memory_limit=-1 composer.phar require -W spatie/laravel-medialibrary
#per i video
php -d memory_limit=-1 composer.phar require -W pbmedia/laravel-ffmpeg
#elastic lo uso con scout
php -d memory_limit=-1 composer.phar require -W laravel/scout
#per elasticsearch
php -d memory_limit=-1 composer.phar require -W babenkoivan/elastic-scout-driver-plus
#REDIS
php -d memory_limit=-1 composer.phar require -W predis/predis