<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsBulletinLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_bulletin_logs', function (Blueprint $table) {
            $table->id();
            $table->string('district_name');
            $table->integer('date_id');
            $table->tinyInteger('status');
            $table->tinyInteger('count');
            $table->tinyInteger('created_by');
            $table->tinyInteger('ip_address');
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
        Schema::dropIfExists('news_bulletin_logs');
    }
}
