<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create72220590Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('72220590', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_number_590');
            $table->string('student_name_590');
            $table->string('gender_590');
            $table->decimal('gpa_590', 3, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('72220590');
    }
}
