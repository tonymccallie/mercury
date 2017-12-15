<?php

use Illuminate\Database\Seeder;
use App\Template;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
		Template::truncate();
		Template::create([
			'id' => 1,
			'title' => 'Default',
			'file' => 'default',
			'json' => '{}'
		]);
		Template::create([
			'id' => 2,
			'title' => 'Home',
			'file' => 'home',
			'json' => '{}'
		]);
    }
}
