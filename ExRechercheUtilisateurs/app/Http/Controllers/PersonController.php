<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    private array $users = [
        ["id" => 1, "name" => "Piette", "firstname" => "Johnny"],
        ["id" => 2, "name" => "Piette", "firstname" => "Gabriel"],
        ["id" => 3, "name" => "Dupont", "firstname" => "Philip"],
        ["id" => 4, "name" => "Colin", "firstname" => "Stéphane"],
        ["id" => 5, "name" => "Jacques", "firstname" => "Véronique"],
        ["id" => 6, "name" => "Larock", "firstname" => "Jacques"]
    ];

    private function searchUsersByCriteria($field, $search): array
    {
        $search = strtolower($search);
        $persons = [];

        foreach ($this->users as $user) {
            switch ($field) {
                case 'name':
                    if (str_contains(strtolower($user['name']), $search) === true) { // true n'est pas obligatoire
                        $persons[] = $user;
                    }
                    break;
                case 'firstname':
                    if (str_contains(strtolower($user['firstname']), $search)) {
                        $persons[] = $user;
                    }
                    break;
                case 'criteria':
                    if (str_contains(strtolower($user['name']), $search) || str_contains(strtolower($user['firstname']), $search)) {
                        $persons[] = $user;
                    }
                    break;
            }
        }
        return $persons;
    }
}
