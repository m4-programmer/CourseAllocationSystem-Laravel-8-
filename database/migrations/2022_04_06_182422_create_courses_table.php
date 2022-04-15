<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_no')->unique();
            $table->string('course_subject')->unique();
            $table->integer('unit_load');
            $table->timestamps();
        });
        DB::table('courses')->insert([
            ['id' => '1','course_no' => 'COS 451','course_subject' => 'Algorithms','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '2','course_no' => 'COS 461','course_subject' => 'Organization of Programming Languages','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '3','course_no' => 'COS 415','course_subject' => 'System Modellings & Simulation','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '4','course_no' => 'COS 411','course_subject' => 'Numerica Methods','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '5','course_no' => 'COS 413','course_subject' => 'Queing Theory','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '6','course_no' => 'COS 431','course_subject' => 'Software Engineering & Managenent','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '7','course_no' => 'COS 453','course_subject' => 'Computer Process Control','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
            ['id' => '8','course_no' => 'COS 457','course_subject' => 'Computer Graphics','unit_load' => '2', 
            'created_at' => Carbon::now(),'updated_at' => Carbon::now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
