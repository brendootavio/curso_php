<?php

namespace Source\User;

class User 
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct($firstName, $lastName, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getFirstName()
    {
        return   $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
    }

    public function setLastName($lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
    }

    public function setEmail($email)
    {
        if(!$this->email = filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return true;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}