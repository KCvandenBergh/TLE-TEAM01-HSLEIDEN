<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->count() == 0) {
            $data = [
                [
                    'name' => env('ADMIN_USER_NAME'),
                    'email' => env('ADMIN_USER_EMAIL'),
                    'password' => bcrypt(env('ADMIN_USER_PASSWORD')),
                    'is_admin' => 1,
                    'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
                    'updated_at' => Carbon::now()->format("Y-m-d H:i:s")
                ],
            ];
            DB::table('users')->insert($data);
        } else {
            echo("ERROR:Table(users) NOT empty. Use: `php artisan migrate:fresh --seed` NOTE: WILL DELETE ALL DATA");
        }
    }
}
