<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
                [
                    'id' => 1,
                    'name' => 'Robert',
                    'age' => 25,
                    'job' => 'soldier',
                ],
                [
                    'id' => 2,
                    'name' => 'Sasha',
                    'age' => 20,
                    'job' => 'builder',
                ],
                [
                    'id' => 3,
                    'name' => 'Nikita',
                    'age' => 23,
                    'job' => 'trader',
                ],
                [
                    'id' => 4,
                    'name' => 'Katya',
                    'age' => 23,
                    'job' => 'trader',
                ],
                [
                    'id' => 5,
                    'name' => 'Dasha',
                    'age' => 21,
                    'job' => 'trader',
                ],
            ];
        return $persons;
    }
}
