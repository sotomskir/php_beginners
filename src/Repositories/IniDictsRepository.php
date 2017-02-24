<?php namespace Acme\Repositories;

class IniDictsRepository implements DictsRepository
{

    private $ini_filename;

    /**
     * IniDictsRepositoryT1 constructor.
     * @param $ini_filename
     */
    public function __construct($ini_filename)
    {
        $this->ini_filename = $ini_filename;
    }

    public function findAll()
    {
        return parse_ini_file($this->ini_filename, true);
    }
}