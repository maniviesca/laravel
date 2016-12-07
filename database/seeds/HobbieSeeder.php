<?php
use App\Hobbies;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = new Hobbies;
 		$faker = Faker::create();
 		foreach (range(1,5) as $index)
 		{
	 		$data = array([
	 		
	 		'id_user' => rand(203,204),
	 		'hobby_one' => $faker->word,
	 		'hobby_two' => $faker->word,
	 			]);
 		}      
 		$users::insert($data);
    }
}

