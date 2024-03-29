<?php

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
            $table->string('user_type', 30); // i.e. superadmin, epidemiologist, cabinet
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('account_level',50);
            $table->string('division',50)->nullable();
            $table->string('district',50)->nullable();
            $table->string('upazilla',50)->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
