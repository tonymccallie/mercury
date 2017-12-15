<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_elements', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('page_id');
			$table->string('location');
			$table->integer('order')->default(0);
			$table->dateTime('start')->nullable();
			$table->dateTime('stop')->nullable();
			$table->string('controller');
			$table->string('action');
			$table->text('config')->nullable();
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
        Schema::dropIfExists('page_elements');
    }
}
