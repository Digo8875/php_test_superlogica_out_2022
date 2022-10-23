<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseExerciseController extends Controller
{
    /**
    * Get user data, formatting the name, genre and checking if they are more
    * than 50 years old
    */
    public function index()
    {
        $users = DB::select("
            SELECT
                CONCAT(u.name, ' - ', i.genre) AS userName,
                IF((year(curdate()) - i.birth_year) > 50, 'SIM', 'NÃO') AS moreThan50Years
            FROM
                exercise_3_users u
            INNER JOIN
                exercise_3_infos i ON u.cpf = i.cpf
        ");

        return view('exercise_3.index', ['users' => $users]);
    }
}
