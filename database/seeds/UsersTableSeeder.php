<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([

          'name'=>'juanito',            
          'email'=>'juanito@gmail.com',
          'password'=> bcrypt('123456'),
          'role'=>0
        ]);
        User::create([

            'name'=>'benito',            
            'email'=>'bbnito@gmail.com',
            'password'=> bcrypt('123456'),
            'role'=>1
          ]);
          User::create([

            'name'=>'alucard',            
            'email'=>'alucard@gmail.com',
            'password'=> bcrypt('12345'),
            'role'=>2
          ]);
    }
}
