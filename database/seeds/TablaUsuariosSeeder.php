<?php
use laravel\usuarios
use Illuminate\Database\Seeder;
use Faker/Factory as Faker;

class TablaUsuariosSeeder extends Seeder
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
			'nombre_usuario' => $faker->word,
			]);
	}      
		$users::insert($data);
    }

    }
}
