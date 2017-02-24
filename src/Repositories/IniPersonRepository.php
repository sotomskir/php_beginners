<?php namespace Acme\Repositories;

use Acme\Models\Person;

class IniPersonRepository implements PersonRepository
{
    private $ini_file_name = __DIR__ . '/../../storage/persons.ini';
    private $container;

    /**
     * IniPersonRepository constructor.
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function findAll()
    {
        $personsData = parse_ini_file($this->ini_file_name, true);
        $persons = [];

        foreach ($personsData as $id => $personData) {
            $personData['weight'] = $this->container['uncalc']->translate(
                'weight',
                $personData['weight']['value'],
                $personData['weight']['unit'],
                'kg'
            );

            $personData['height'] = $this->container['uncalc']->translate(
                'length',
                $personData['height']['value'],
                $personData['height']['unit'],
                'm'
            );

            array_push($persons, new Person($personData));
        }

        return $persons;
    }

    public function findById($id)
    {

    }
}