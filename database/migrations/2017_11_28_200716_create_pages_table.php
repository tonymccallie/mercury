<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('template_id');
			$table->integer('link_id')->nullable();
			$table->string('title');
			$table->string('slug');
			$table->string('url')->default('');
			$table->boolean('hidden')->default(0);
			$table->dateTime('start')->nullable();
			$table->dateTime('stop')->nullable();
			NestedSet::columns($table);
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
        Schema::dropIfExists('pages');
    }
}
