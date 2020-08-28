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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();

            $table->string('fathername');
            $table->string('mothername');
            $table->string('presentaddress');
            $table->string('permanentaddress');
            $table->string('mobile');
            $table->string('parentmobileno');
            $table->string('presentschoolname');
            $table->string('classname');
            $table->string('roll');
            $table->string('examlanguage');
            $table->string('nameOfTheInstitution')->default('BCA Academy');
            $table->string('addressOfTheInstitution')->default('Dhaka 1200');

            $table->string('status')->default('FAIL');
            $table->string('sp_code')->default('001');
            $table->string('bankTxStatus')->default('FAIL');

            $table->timestamp('email_verified_at')->nullable();
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
