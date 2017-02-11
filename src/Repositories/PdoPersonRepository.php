<?php namespace Acme\Repositories;

use Acme\Models\Person;

class PdoPersonRepository implements PersonRepository
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = DbConnection::getInstance()->getConnection();
    }

    public function findAll()
    {
        $sql = 'SELECT * FROM persons.persons;';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $persons = [];
        $results = $statement->fetchAll();

        foreach ($results as $personData) {
            array_push($persons, new Person($personData));
        }

        return $persons;
    }

    public function findById($id)
    {

    }
}