<?php namespace Acme\Repositories;

use Acme\Models\Person;

class IniPersonRepository implements PersonRepository
{
    private $ini_file_name = __DIR__ . '/../../storage/persons.ini';

    public function findAll()
    {
        $personsData = parse_ini_file($this->ini_file_name, true);
        $persons = [];

        foreach ($personsData as $id => $personData) {
            array_push($persons, new Person($personData));
        }

        return $persons;
    }

    public function findById($id)
    {

    }
}