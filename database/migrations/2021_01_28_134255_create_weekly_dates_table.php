<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_dates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('date_id');
            $table->string('date_ban');
            $table->string('date_eng');
            $table->string('recent_weekly_date');
            $table->string('last_weekly_date');
            $table->tinyInteger('status')->default(1)->comment('1=True, 0=False');
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
        Schema::dropIfExists('weekly_dates');
    }
}
