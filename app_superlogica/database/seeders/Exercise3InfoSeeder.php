<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Exercise3InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_3_infos')->insert([
            [
                'cpf' => '16798125050',
                'genre' => 'M',
                'birth_year' => 1976,
            ],[
                'cpf' => '59875804045',
                'genre' => 'M',
                'birth_year' => 1960,
            ],[
                'cpf' => '04707649025',
                'genre' => 'F',
                'birth_year' => 1988,
            ],[
                'cpf' => '21142450040',
                'genre' => 'M',
                'birth_year' => 1954,
            ],[
                'cpf' => '83257946074',
                'genre' => 'F',
                'birth_year' => 1970,
            ],[
                'cpf' => '07583509025',
                'genre' => 'M',
                'birth_year' => 1972,
            ]
        ]);
    }
}
