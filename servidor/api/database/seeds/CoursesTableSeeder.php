<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'author'=> 'Marcos',
            'name'=> 'Laravel',
            'description'=>('Curso muy entretenido'),
            'price'=> 5000,
        ]);
    }
}
