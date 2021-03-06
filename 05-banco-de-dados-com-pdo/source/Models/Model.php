<?php

namespace Source\Models;

use Source\Database\Connect;
use stdClass;

abstract class Model 
{
    /** @var object|null*/
     protected $data;

     /** @var \PDOExcepetion|null */
     protected $fail;

     /** @var string|null */
     protected $message;


     public function __set($name, $value)
     {
         if (empty($this->data)) {
             $this->data = new \stdClass();
         }
         $this->data->$name = $value;
     }

     public function __get($name)
     {
         return ($this->data->$name ?? null);
     }

     public function __isset($name)
     {
        return isset($this->data->$name);
     }


    /** 
     * @return object|null
     * */
     public function data(): ?object
     {
         return $this->data;
     }

     /** 
      * @return \PDOExcepetion 
      */
     public function fail(): ?\PDOExcepetion
     {
         return $this->fail;
     }
     
    /** 
     * @return string|null 
     * */
     public function message(): ?string
     {
         return $this->message;
     }

     protected function create(string $entity, array $data): ?int  
     {
         try {
             $columns  = implode(", ", array_keys($data));
             $values = ":" .implode(", ", array_keys($data));

            $stmt = Connect::getInstance()->prepare("INSERT INTO {$entity} ({$columns}) VALUES ({$values})");
            $stmt->execute($this->filter($data));
            
            return Connect::getInstance()->lastInsertId();

        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
         }
     }


     protected function read(string $select, string $params = null): ?\PDOStatement
     {
         try{
             $stmt = Connect::getInstance()->prepare($select);

             if($params){
                parse_str($params, $params);
                foreach ($params as $key => $value) {
                    $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
                    $stmt->bindValue(":{$key}", $value, $type);
                }
             }
             $stmt->execute();
             return $stmt;
         } catch (\PDOException $exception) {
             $this->fail = $exception;
             return null;
         }
     }


     protected function update(string $entity, array $data, string $terms, string $params): ?int
     {
        try {
            foreach ($data as $bind => $value) {
                $dataSet[] = "{$bind} = :{$bind}";
            }

            $dataSet = implode(",", $dataSet);
            parse_str($params, $params);

            $stmt = Connect::getInstance()->prepare("UPDATE {$entity} SET {$dataSet} WHERE {$terms}");
            $stmt->execute($this->filter(array_merge($data, $params)));

            return ($stmt->rowCount() ?? 1);

            var_dump($stmt);
 
        } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }



         var_dump($entity, $data, $terms, $params);
     }

     protected function delete(string $entity, string $terms, string $params)
     {
         try {
             $stmt = Connect::getInstance()->prepare("DELETE FROM {$entity} WHERE {$terms}");
             parse_str($params, $params);
             $stmt->execute($params);
         } catch (\PDOException $exception) {
            $this->fail = $exception;
            return null;
        }

         var_dump($entity, $terms, $params);
     }

     protected function safe(): ?array
     {
        $safe = (array)$this->data;
        foreach (static::$safe as $unset) {
            unset($safe[$unset]);
        }
        return $safe;
    
     }

     protected function filter(array $data): ?array
     {
            $filter = [];
            foreach ($data as $key => $value) {
                $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
            } 
            return $filter;
        }
}