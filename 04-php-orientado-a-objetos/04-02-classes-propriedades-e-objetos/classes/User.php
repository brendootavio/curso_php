<?php

class User 
{
  public $firstName;
  public $lastName;
  public $email;

  public function getFistName()
  {
      return $this->firstName;
  }

  public function setFistName($firstName)
  {
      $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
  }

  public function getLastName()
  {
      return $this->lastName;
  }

  public function setLastName($lastName)
  {
      $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRIPPED);
  }

  public function getEmail()
  {
      return $this->email;
  }
/**
 * Valida o e-mail do usuário em um formato valido!
 * @param $email
 */
  public function setEmail($email)
  {
      $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }

  }

}