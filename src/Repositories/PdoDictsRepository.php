<?php namespace Acme\Repositories;

class PdoDictsRepository implements DictsRepository
{
    protected $pdo;
    protected $type;

    public function __construct($type)
    {
        $this->pdo = DbConnection::getInstance()->getConnection();
        $this->type = $type;
    }

    public function findAll()
    {
        $sql = 'SELECT d.name, v.key, v.value 
                FROM persons.dicts d 
                JOIN persons.dicts_values v 
                ON d.id = v.dicts_id
                WHERE d.type = ? 
                ORDER BY v.key;';

        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $this->type);
        $statement->execute();
        $dictsArray = [];
        $results = $statement->fetchAll();

        foreach ($results as $dict) {
            $dictsArray  [$dict['name']]  [$dict['key']] = $dict['value'];
        }

        return $dictsArray;
    }
}