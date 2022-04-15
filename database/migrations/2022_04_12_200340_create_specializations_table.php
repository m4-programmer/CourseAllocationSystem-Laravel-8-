<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->string('specialization')->unique();
            $table->timestamps();
        });
       
        DB::table('specializations')->insert([
             ['id' => '1', 'specialization' => 'Web Developer', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
              ['id' => '2', 'specialization' => 'Software Developer', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
               ['id' => '3', 'specialization' => 'Computer Vision', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
                ['id' => '4', 'specialization' => 'Computational Computing', 'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
           
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specializations');
    }
}
