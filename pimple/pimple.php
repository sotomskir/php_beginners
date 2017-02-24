<?php
use Pimple\Container;

$container = new Container();

// define some services
$container['uncalc'] = function ($c) {
    return new \Acme\UnCalc(__DIR__.'/../storage/units.ini');
};
