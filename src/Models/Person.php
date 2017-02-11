<?php namespace Acme\Models;

class Person {
    private $first_name;
    private $last_name;
    private $age;
    private $weight;
    private $sex;
    private $height;
    private $pal;

    public function __construct($properties)
    {
        foreach ($properties as $key => $value) {
            if(property_exists(Person::class, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function __toString()
    {
        return "Witaj " . $this->first_name . " " . $this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastname()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getPal()
    {
        return $this->pal;
    }
}