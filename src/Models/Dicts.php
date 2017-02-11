<?php namespace Acme\Models;

use Acme\Repositories\PdoDictsRepository;

class Dicts {
	protected static $instance = null;
	protected $dicts;
    protected $dictsRepository;

    private function __construct() {
        $this->dictsRepository = new PdoDictsRepository();
        $this->dicts = $this->dictsRepository->findAll();
	}

	public static function getInstance()
	{
		if(self::$instance == null) {
			self::$instance = new Dicts();
		}
		return self::$instance;
	}

	public function translate($dict, $key)
	{
		if(array_key_exists($dict, $this->dicts) && array_key_exists($key, $this->dicts[$dict])) {
			return $this->dicts[$dict][$key];
		}
		return 'Brak wartosci w słowniku';
	}
}