<?php namespace Acme\Repositories;

interface PersonRepository
{
    public function findAll();

    public function findById($id);
}