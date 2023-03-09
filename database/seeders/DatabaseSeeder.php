<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$pv3ygZRiSoPHlwbis2pB6.QWnHfikhElj3TuaUr6DMVZDe2QPBqSu',
            'created_at' => new DateTime,
        ]);

        DB::table('oauth_clients')->insert([
            'name' => 'admin',
            'secret' => 'Xnq5QeOM2ljCfarqjcIuENo10MeY8idcRZQI5qZy',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => '0',
            'password_client' => '1',
            'revoked' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
      
    }
}