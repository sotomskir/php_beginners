<?php namespace Acme\Repositories;

class IniDictsRepository implements DictsRepository
{

    private $ini_filename = __DIR__ . '/../../storage/dicts.ini';

    public function findAll()
    {
        return parse_ini_file($this->ini_filename, true);
    }
}