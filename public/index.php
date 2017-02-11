<?php

include __DIR__ . '/../vendor/autoload.php';

use Acme\Presenters\PersonPresenter;
use Acme\Repositories\IniDictsRepository;
use Acme\Repositories\IniPersonRepository;
use Acme\Repositories\PdoDictsRepository;
use Acme\Repositories\PdoPersonRepository;

$repository = new IniDictsRepository();
dump($repository->findAll());

$repository = new PdoDictsRepository();
dump($repository->findAll());

$repository = new IniPersonRepository();
$persons = $repository->findAll();
dump($persons);

$repository = new PdoPersonRepository();
$persons = $repository->findAll();
dump($persons);

die();
$presenter = new PersonPresenter($person);
//dump($person);
echo $presenter->printHtml();

//$db = pg_connect('dbname=psat host=localhost user=psat password=psat');
//$result = pg_query($db, 'select * from persons.persons;');
//dump($result);
//echo Dicts::getInstance()->translate('PAL', '2').'<br>';
//echo Dicts::getInstance()->translate('PAL', '1.4');

//dump($db);
//$statement = $db->prepare('select * from persons.persons;');
//$statement->execute();
//$result = $statement->fetchAll();
//dump($result);