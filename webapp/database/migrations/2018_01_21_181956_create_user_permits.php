<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cnt');
            $table->datetime('fch');
            $table->datetime('ini');
            $table->datetime('fin');
            $table->integer('obs');
            $table->integer('sta');
            $table->integer('tpo');
            $table->datetime('fecadi1');
            $table->string('textadi1');
            $table->string('textadi2');
            $table->string('textadi3');
            $table->string('textadi4');
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
        Schema::drop('permits');
    }
}
