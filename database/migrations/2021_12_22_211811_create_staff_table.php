<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rank');
            $table->string('department');
            $table->string('PFN');
            $table->string('sex');
            $table->string('DOB');
            $table->string('state');
            $table->string('LG');
            $table->string('qualification');
            $table->string('nature');
            $table->string('date_first_appoint');
            $table->string('date_present_appoint');
            $table->string('grade_step');
            $table->string('station');
            $table->string('status');
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
        Schema::dropIfExists('staff');
    }
}
