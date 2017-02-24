<?php namespace Acme\Models;

class Person {
    private $username;
    private $password;
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

    public function bmi()
    {
        return $this->weight / (pow($this->height, 2));
    }

    public function ppm()
    {
        if($this->sex == 1) {
            return 66.5 + (13.75 * $this->weight) + (5.003 * $this->height * 100) - (6.77 * $this->age);
        }

        return 655.1 + (9.563 * $this->weight) + (1.85 * $this->height * 100) - (4.676 * $this->age);
    }

    public function cmp()
    {
        return $this->ppm() * $this->pal;
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

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


}