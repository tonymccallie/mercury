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
			'json' => '[[{"title":"Menu","slug":"menu","descr":"","span":12,"enabled":false,"children":null}],[{"title":"Content","slug":"content","descr":"","span":"8","enabled":true,"children":null},{"title":"Sidebar","slug":"sidebar","descr":"","span":"4","enabled":false,"children":null}]]'
		]);
		Template::create([
			'id' => 2,
			'title' => 'Home',
			'file' => 'home',
			'json' => '[[{"title":"Menu","slug":"menu","descr":"","span":12,"enabled":false,"children":null}],[{"title":"Content","slug":"content","descr":"","span":"8","enabled":true,"children":null},{"title":"Sidebar","slug":"sidebar","descr":"","span":"4","enabled":false,"children":null}]]'
		]);
    }
}
