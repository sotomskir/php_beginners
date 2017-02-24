<?php namespace Acme;

use Acme\Repositories\DbConnection;

class Authenticator
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DbConnection::getInstance()->getConnection();
    }

    public function authorizeUser($username, $password)
    {
        $sql = 'SELECT 1 AS wynik FROM persons.persons WHERE username = ? AND password = ?;';
        $statement = $this->pdo->prepare($sql);
        $hash = strtoupper(hash('sha512',$password));
        $statement->bindParam(1, $username);
        $statement->bindParam(2, $hash);
        $statement->execute();

        return $statement->rowCount();
    }
}