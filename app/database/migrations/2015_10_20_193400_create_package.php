<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackage extends Migration {
    private $table = "package";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create($this->table, function (Blueprint $table){
            $table->increments('id');
            $table->integer('unit_id');
            $table->integer('mailroom_id');
            $table->integer('recipient_id');
            $table->string('tracking_code');
            $table->boolean('delivered');
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
