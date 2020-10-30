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
            
            $table->id(); // an auto incrementing column with a name of id, primary key 
            $table->string('name'); // varchar(255) column name of name
            $table->string('email')->unique(); // varchar(255) column name of email, attribute of unique
            $table->timestamp('email_verified_at')->nullable(); //timestamp type with column name of email_verified_at and it is hold null values
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //this will create two timestamp columns, created_at and updated_at
            // created_at -> filled up if the record is created
            // updated_at -> filled up if the record is updated
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
