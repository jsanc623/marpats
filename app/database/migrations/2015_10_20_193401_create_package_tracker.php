<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTracker extends Migration{
    private $table = "package_tracker";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create($this->table, function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('unit_id');
            $table->integer('package_id');
            $table->integer('mailroom_id');
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
