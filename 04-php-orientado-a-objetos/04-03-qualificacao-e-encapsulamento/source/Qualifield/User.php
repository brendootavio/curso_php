<?php

namespace Source\Qualifield;

class User 
{
  private $firstName;
  private $lastName;
  private $email;

  private $error;

  public function setUser($firstName, $lastName, $email)
  {
      $this->setFistName($firstName);
      $this->setLastName($lastName);

      if(!$this->setEmail($email)){
            $this->error = "O e-mail {$this->getEmail()} nao é válido!";
            return false;
      }

      return true;

        
  }

  public  function getError()
  {
      return $this->error;
  }

  public function getFistName()
  {
      return $this->firstName;
  }

  private function setFistName($firstName)
  {
      $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRIPPED);
  }

  public function getLastName()
  {
      return $this->lastName;
  }

  private function setLastName($lastName)
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
  private function setEmail($email)
  {
      $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }

  }

}