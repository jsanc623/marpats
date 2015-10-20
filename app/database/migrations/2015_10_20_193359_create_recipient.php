<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipient extends Migration {
    private $table = "recipient";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create($this->table, function (Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('email');
            $table->string('phone', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop($this->table);
    }
}
