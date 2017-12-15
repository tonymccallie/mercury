<?php

use Illuminate\Database\Seeder;
use App\TemplateElement;

class TemplateElementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TemplateElement::truncate();
		
		$faker = \Faker\Factory::create();

		TemplateElement::create([
			'template_id' => 1,
			'location' => 'menu',
			'controller' => 'PageController',
			'action' => 'menu',
			'order' => 0
		]);

		TemplateElement::create([
			'template_id' => 1,
			'location' => 'content',
			'controller' => '',
			'action' => '',
			'order' => 0
		]);

		TemplateElement::create([
			'template_id' => 1,
			'location' => 'sidebar',
			'controller' => 'PageController',
			'action' => 'menu',
			'config' => '{"view":"pages.sidemenu"}',
			'order' => 0
		]);
    }
}
