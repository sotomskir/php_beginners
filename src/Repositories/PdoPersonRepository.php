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

    public function findByUsername($username)
    {
        $sql = 'SELECT * FROM persons.persons WHERE username = ?;';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $username, \PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(0);
    }

    public function findByUsernameOrFail($username)
    {
        $user = $this->findByUsername($username);
        if( ! $user) {
            throw new \Exception("User $username not found");
        }

        return new Person($user);
    }
}