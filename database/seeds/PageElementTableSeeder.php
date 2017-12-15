<?php

use Illuminate\Database\Seeder;
use App\PageElement;

class PageElementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		PageElement::truncate();
		
		$faker = \Faker\Factory::create();

		PageElement::create([
			'page_id' => 2,
			'location' => 'content',
			'controller' => '',
			'action' => 'test',
			'order' => 0
		]);

		PageElement::create([
			'page_id' => 2,
			'location' => 'content',
			'controller' => '',
			'action' => '',
			'order' => 1
		]);

		PageElement::create([
			'page_id' => 2,
			'location' => 'sidebar',
			'controller' => '',
			'action' => '',
			'order' => 0
		]);

		PageElement::create([
			'page_id' => 1,
			'location' => 'content',
			'controller' => '',
			'action' => '',
			'order' => 0
		]);

		PageElement::create([
			'page_id' => 1,
			'location' => 'sidebar',
			'controller' => '',
			'action' => '',
			'order' => 0
		]);

    }
}
