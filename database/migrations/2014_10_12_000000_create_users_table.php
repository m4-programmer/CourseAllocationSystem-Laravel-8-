<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

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
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_pics');
            $table->integer('role_as')->default('0');
            $table->string('position')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });

        DB::table('users')->insert([
             ['id' => '1',
              'name' => 'Admin Hod',
              'email' => 'admin@admin.com', 
              'username' => 'admin', 
              'password' => Hash::make('12345'),
              'profile_pics' => 'uploads/profile_image/admin.jpg',
              'role_as' => '2',
              'position' => null,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
              ],

                ['id' => '2',
              'name' => 'Mrs Lecturer one',
              'email' => 'lec@lec.com', 
              'username' => 'lecturer_one', 
              'password' => Hash::make('12345'),
              'profile_pics' => 'uploads/profile_image/avatar.jpg',
              'role_as' => '1',
              'position' => 'Junior Lecturer',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
                ],

                ['id' => '3',
              'name' => 'Student One',
              'email' => 'adol@adol.com', 
              'username' => 'Student_one', 
              'password' => Hash::make('12345'),
              'profile_pics' => 'uploads/profile_image/avatar-2.jpg',
              'role_as' => '0',
              'position' => null,
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()],
           
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
