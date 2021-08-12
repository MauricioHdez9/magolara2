<?php

use Illuminate\Database\Seeder;
use App\project;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       project::create([
        
        'name'=>'proyecto A',
        'descriptio'=>'el proyecto A conciste en desarrollar sitio web moderno'
        
       ]);

       Project::create([
        
        'name'=>'proyecto B',
        'descriptio'=>'el proyecto B conciste en desarrollar una aplicacion android '
        
       ]);
       

    }
}
