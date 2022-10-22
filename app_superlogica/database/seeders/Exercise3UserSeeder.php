<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Exercise3UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_3_users')->insert([
            [
                'name' => 'Luke Skywalker',
                'cpf' => '16798125050',
            ],[
                'name' => 'Bruce Wayne',
                'cpf' => '59875804045',
            ],[
                'name' => 'Diane Prince',
                'cpf' => '04707649025',
            ],[
                'name' => 'Bruce Banner',
                'cpf' => '21142450040',
            ],[
                'name' => 'Harley Quinn',
                'cpf' => '83257946074',
            ],[
                'name' => 'Peter Parker',
                'cpf' => '07583509025',
            ]
        ]);
    }
}
