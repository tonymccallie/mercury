<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(TemplateTableSeeder::class);
		$this->call(PageTableSeeder::class);
		$this->call(PageElementTableSeeder::class);
		$this->call(TemplateElementTableSeeder::class);
		$this->call(ContentSeeder::class);
    }
}
