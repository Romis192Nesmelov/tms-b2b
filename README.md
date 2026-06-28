php artisan storage:link
php artisan moonshine:install
git checkout app\Providers\MoonShineServiceProvider.php
git checkout app\MoonShine\Layouts\MoonShineLayout.php
git checkout app\MoonShine\Layouts\Pages\Dashboard.php
php artisan migrate --seed