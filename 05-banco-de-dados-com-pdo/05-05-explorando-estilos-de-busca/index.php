<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.05 - Explorando estilos de busca");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ fetch ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch", __LINE__);

$conn = Connect::getInstance();

$read = $conn->query("SELECT * FROM users LIMIT 3");

if(!$read->rowCount()){
    echo "<p class='trigger warning'>Não obteve resultado!</p>" ;
}else{
    var_dump([$read->fetch()]);
}

while ($users  = $read->fetch()) {
var_dump($users);
}

/*
 * [ fetch all ] http://php.net/manual/pt_BR/pdostatement.fetchall.php
 */
fullStackPHPClassSession("fetch all", __LINE__);

$read = $conn->query("SELECT * FROM users LIMIT 3,2");

//while ($users = $read->fetchAll()) {
 //   var_dump($users);
//}

foreach ($read->fetchAll() as $users) {
    var_dump($users);
}

/*
 * [ fetch save ] Realziar um fetch diretamente em um PDOStatement resulta em um clear no buffer da consulta. Você
 * pode armazenar esse resultado em uma variável para manipilar e exibir posteriormente.
 */
fullStackPHPClassSession("fetch save", __LINE__);

$read = $conn->query("SELECT * FROM users LIMIT 5,1");
$result = $read->fetchAll();

var_dump(
    $read,
    $result,
    $result
);
/*
 * [ fetch modes ] http://php.net/manual/pt_BR/pdostatement.fetch.php
 */
fullStackPHPClassSession("fetch styles", __LINE__);

$read = $conn->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll() as $users) {
    var_dump($users, $users->first_name);
}

$read = $conn->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_NUM) as $users) {
    var_dump($users, $users[1]);
}

$read = $conn->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $users) {
    var_dump($users, $users['first_name']);
}

$read = $conn->query("SELECT * FROM users LIMIT 1");
foreach ($read->fetchAll(PDO::FETCH_CLASS, \Source\Database\Entity\UserEntity::class) as $users) {
    /**
     * @var \Source\Database\Entity $user
     */
    var_dump($users->getFirstName());
}
