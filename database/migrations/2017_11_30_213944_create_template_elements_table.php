<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_elements', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('template_id');
			$table->string('location');
			$table->dateTime('start')->nullable();
			$table->integer('order')->default(0);
			$table->dateTime('stop')->nullable();
			$table->string('controller');
			$table->string('action');
			$table->text('config')->nullable();;
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
        Schema::dropIfExists('template_elements');
    }
}
