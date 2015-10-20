<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailroom extends Migration {
    private $table = "mailroom";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table){
            $table->increments('id');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop($this->table);
    }
}
