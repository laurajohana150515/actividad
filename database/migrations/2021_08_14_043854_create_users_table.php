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
            $table->string('name',45);
            $table->string('lastnames',45);
            $table->string('email',45);
            $table->timestamps();
            $table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on ('cities');
            $table->integer('document_type_id')->unsigned(); 
            $table-foreign('document_type_id')->references('id')->on ('document_type');
            $table->integer('genders_id')->unsigned();
            $table->foreign('genders_id')->references('id')->on ('genders');
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
