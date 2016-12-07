<?php
use App\Usuario;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablaUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = new Usuario;
 		$faker = Faker::create();
 		foreach (range(1,5) as $index)
 		{
	 		$data = array([
	 		
	 		'nombre_usuario' => $faker->word,
	 			]);
 		}      
 		$users::insert($data);
    	
    	/*for($i=0;$i<=5;$i++)
    	{
    	 DB::table('usuarios')->insert([
            'id_usuario' =>  rand(1,500),
            'nombre_usuario' => str_random(10),
            ]);
    	}*/

    }
}

