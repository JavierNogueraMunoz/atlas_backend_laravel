<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('dni',15)->primary();
            $table->string('email',30)->unique()->require();
            $table->string('name',50)->require();
            $table->enum('newsletter',['Yes','No'])->default('Yes');
            $table->enum('captation', ['web', 'telefonica','presencial'])->require()->default('web');
            $table->string('address',100)->default('');
            $table->string('postal_code',15)->default('');
            $table->string('city',30)->default('');
            $table->string('region',30)->default('');
            $table->string('country',30)->default('');
            $table->string('observation',255)->default('');

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
        Schema::dropIfExists('user');
    }
}
