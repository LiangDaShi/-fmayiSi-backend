npm run watch-poll
#
php artisan make:migration create_si_params_table --create="si_params"

php artisan migrate

php artisan make:model Models/SiParams

# last one
php artisan migrate:rollback
# all
php artisan migrate:refresh

touch database/factories/SiParamsFactory.php
touch database/seeds/SiParamsTableSeeder.php

php artisan make:seeder SiParamsFactory

php artisan make:model Models/UserAddress -fm

php artisan make:controller UserAddressesController

mkdir -p resources/views/user_addresses
touch resources/views/user_addresses/index.blade.php

php artisan tinker
factory(App\Models\UserAddress::class)->make()
factory(App\Models\UserAddress::class, 3)->create(['user_id' => 1])

php artisan make:policy UserAddressPolicy
php artisan make:exception InvalidRequestException

php artisan storage:link

php artisan db:seed --class=AreasTableSeeder

php artisan make:seeder AreasTableSeeder