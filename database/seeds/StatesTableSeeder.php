<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
use Carbon\Carbon;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
        	DB::table('states')->insert([
        		'name' => $faker->city,
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
			]);
        }
    }
}
