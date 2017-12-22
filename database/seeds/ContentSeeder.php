<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::truncate();
		
		$faker = \Faker\Factory::create();

		Content::create([
			'body' => 'Less funnily well on cooperative unscrupulous goodness yikes gosh self-consciously on opposite stuffy overpaid plankton came without crud jellyfish underneath until fixed much by far lucid toward busted ouch goodness gorilla off some crud therefore tyrannically hare spelled but and joyful lion stuck below.'
		]);
    }
}
