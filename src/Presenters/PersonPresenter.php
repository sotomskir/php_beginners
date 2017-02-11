<?php namespace Acme\Presenters;

use Acme\Models\Dicts;
use Acme\Models\Person;

class PersonPresenter
{
    protected $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function printHtml()
    {
        $dicts = Dicts::getInstance();
        $html = $this->person->getFirstName().'<br>'
            .$this->person->getLastname().'<br>'
            .$dicts->translate('Plec', $this->person->getSex()).'<br>'
            .$dicts->translate('PAL', $this->person->getPal()).'<br>';
        return $html;
    }

    public function getFirstName()
    {
        return $this->person->getFirstName();
    }

    public function getLastname()
    {
        return $this->person->getLastname();
    }

    public function getAge()
    {
        return $this->person->getAge();
    }

    public function getWeight()
    {
        return $this->person->getWeight();
    }

    public function getSex()
    {
        return $this->person->getSex();
    }

    public function getHeight()
    {
        return $this->person->getHeight();
    }

    public function getPal()
    {
        return $this->person->getPal();
    }


}