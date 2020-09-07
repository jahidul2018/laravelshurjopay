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
            $table->string('user_id')->unique();
            $table->string('session');
            $table->string('password');
            $table->string('image');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('presentaddress')->nullable();
            $table->string('permanentaddress')->nullable();
            $table->string('mobile');
            $table->string('parentmobileno')->nullable();
            $table->string('presentschoolname')->nullable();
            $table->string('classname')->nullable();
            $table->string('roll');
            $table->string('examlanguage');
            //$table->string('nameOfTheInstitution')->default('BCA Academy');
            //$table->string('addressOfTheInstitution')->default('Dhaka 1200');

            $table->boolean('is_admin')->default(0)->comment('0-student, 1=admin');
            $table->string('sp_code')->default('001');
            $table->string('tx_id')->nullable();
            $table->string('bank_tx_id')->nullable();
            $table->string('status')->nullable();
            $table->string('msg')->nullable();
            //$table->string('bank_tx_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('bank_status')->nullable();
            $table->string('sp_payment_option')->nullable();
            $table->string('sp_code_des')->nullable();

            $table->timestamp('email_verified_at')->nullable();
          
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
