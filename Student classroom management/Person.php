<?php

class Person
{
    protected string $firstName;
    protected string $lastName;
    protected int $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

}

