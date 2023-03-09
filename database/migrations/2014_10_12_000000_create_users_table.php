<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        // $data =  array(
        //     [
        //         'name' => 'user 1',
        //         'password' => '$2y$10$pv3ygZRiSoPHlwbis2pB6.QWnHfikhElj3TuaUr6DMVZDe2QPBqSu',
        //         'email' => 'user1@gmail.com'
        //     ],
        //     [
        //         'name' => 'user 2',
        //         'password' => '$2y$10$pv3ygZRiSoPHlwbis2pB6.QWnHfikhElj3TuaUr6DMVZDe2QPBqSu',
        //         'email' => 'user2@gmail.com'
        //     ],
        // );
        // foreach ($data as $datum){
        //     $user = new User(); //The Category is the model for your migration
        //     $user->name = $datum['name'];
        //     $user->password = $datum['password'];
        //     $user->email = $datum['email'];
        //     $user->save();
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
}
