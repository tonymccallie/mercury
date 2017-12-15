<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();
		
		$faker = \Faker\Factory::create();
		
		Page::create([
			'title' => 'Home',
			'slug' => 'home',
			'template_id' => 2
		]);

		Page::create([
			'title' => 'About',
			'slug' => 'about',
			'template_id' => 1,
			'children' => [
				[
					'title' => 'Vision',
					'slug' => 'vision',
					'template_id' => 1
				],
				[
					'title' => 'Staff',
					'slug' => 'staff',
					'template_id' => 1
				]
			]
		]);

		Page::create([
			'title' => 'Contact',
			'slug' => 'contact',
			'template_id' => 1
		]);
    }
}
