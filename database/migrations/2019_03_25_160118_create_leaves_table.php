<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('no_casual_leaves');
            $table->string('no_vacation_leaves');
            $table->string('no_other_leaves');
            $table->string('total_no_leaves');
            $table->date('commencing_date');
            $table->date('resuming_dates');
            $table->string('reasons');
            $table->string('address_on_leave');
            $table->string('officer_acting');
            $table->string('supervising_officer');
            $table->string('hod');
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
        Schema::dropIfExists('leaves');
    }
}
