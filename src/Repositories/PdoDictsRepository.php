<?php namespace Acme\Repositories;

class PdoDictsRepository implements DictsRepository
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = DbConnection::getInstance()->getConnection();
    }

    public function findAll()
    {
        $sql = 'SELECT d.name, v.key, v.value 
                FROM persons.dicts d 
                JOIN persons.dicts_values v 
                ON d.id = v.dicts_id;';

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $dictsArray = [];
        $results = $statement->fetchAll();

        foreach ($results as $dict) {
            $dictsArray  [$dict['name']]  [$dict['key']] = $dict['value'];
        }

        return $dictsArray;
    }
}