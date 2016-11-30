<?php
use laravel\hobbies
use Illuminate\Database\Seeder;
use Faker/Factory as Faker;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$users = new hobbies;
	$faker = Faker::create();
	foreach (range(1,5) as $index)
	{
		$data = array([
			'id_usuario' => $faker->unique()->id,
			'hobby_one' => $faker->word,
			'hobby_two' => $faker->word]);
	}      
		$users::insert($data);
    }
}
