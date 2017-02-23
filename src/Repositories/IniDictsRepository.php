<?php namespace Acme\Repositories;

class IniDictsRepositoryT1 implements DictsRepository
{

    private $ini_filename = __DIR__ . '/../../storage/dicts1.ini';

    public function findAll()
    {
        return parse_ini_file($this->ini_filename, true);
    }
}
/*
class IniDictsRepositoryType2 implements DictsRepository
{

    private $ini_filename = __DIR__ . '/../../storage/dicts2.ini';

    public function findAll()
    {
        return parse_ini_file($this->ini_filename, true);
    }
}
*/