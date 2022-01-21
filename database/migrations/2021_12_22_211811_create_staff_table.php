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
            $table->string('staff_status')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('rank')->nullable();
            $table->string('department')->nullable();
            $table->string('PFN')->nullable();
            $table->string('sex')->nullable();
            $table->string('DOB')->nullable();
            $table->string('state')->nullable();
            $table->string('LG')->nullable();
            $table->string('qualification')->nullable();
            $table->string('nature')->nullable();
            $table->string('date_first_appoint')->nullable();
            $table->string('date_confirm_appoint')->nullable();
            $table->string('date_present_appoint')->nullable();
            $table->string('date_last_promotion')->nullable();
            $table->string('grade_step')->nullable();
            $table->string('category')->nullable();
            $table->string('station')->nullable();
            $table->string('status')->nullable();
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
