<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.07 - PDOStatement e bind modes");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/**
 * [ prepare ] http://php.net/manual/pt_BR/pdo.prepare.php
 */
fullStackPHPClassSession("prepared statement", __LINE__);

$search = filter_input(INPUT_GET, "F");

$stmp = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1");
$stmp->execute();


var_dump(
    $stmp,
    $stmp->rowCount(),
    $stmp->columnCount(),
    $stmp->fetch()
);

/*
 * [ bind value ] http://php.net/manual/pt_BR/pdostatement.bindvalue.php
 *
 */
fullStackPHPClassSession("stmt bind value", __LINE__);

$stmp = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUES
(?, ?)
");
$stmp->bindValue(1, 'Rebecca', PDO::PARAM_STR);
$stmp->bindValue(2, 'Oliveira', PDO::PARAM_STR);

if($stmp->execute()){
    echo "<p class='trigger accept'>Cadastrado com sucesso</p>";
}else{
    echo "<p class='trigger error'>Erro ao cadastrar</p>";
}

var_dump($stmp->rowCount());

$stmp = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUES
(:first_name, :last_name)
");

$nome = "Arthur";

$stmp->bindValue(":first_name", $nome, PDO::PARAM_STR);
$stmp->bindValue(":last_name", 'Oliveira', PDO::PARAM_STR);

if($stmp->execute()){
    echo "<p class='trigger accept'>Cadastrado com sucesso</p>";
}else{
    echo "<p class='trigger error'>Erro ao cadastrar</p>";
}

/*
 * [ bind param ] http://php.net/manual/pt_BR/pdostatement.bindparam.php
 */
fullStackPHPClassSession("stmt bind param", __LINE__);

$stmp = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUES
(:first_name, :last_name)
");

$firstName = "Arthur";
$lastName = "Oliveira";

$stmp->bindParam(":first_name", $nome, PDO::PARAM_STR);
$stmp->bindParam(":last_name", $lastName, PDO::PARAM_STR);

if($stmp->execute()){
    echo "<p class='trigger accept'>Cadastrado com sucesso</p>";
}else{
    echo "<p class='trigger error'>Erro ao cadastrar</p>";
}

/*
 * [ execute ] http://php.net/manual/pt_BR/pdostatement.execute.php
 */
fullStackPHPClassSession("stmt execute array", __LINE__);

$stmp = Connect::getInstance()->prepare("INSERT INTO users (first_name, last_name) VALUES
(:first_name, :last_name)
");

$user = [
    "first_name" => "Lorena",
    "last_name" =>  "Santos"
];

if($stmp->execute($user)){
    echo "<p class='trigger accept'>Usuario ".$user['first_name']." Cadastrado com sucesso!</p>";
}else{
    echo "<p class='trigger error'>Erro ao cadastrar</p>";
}

/*
 * [ bind column ] http://php.net/manual/en/pdostatement.bindcolumn.php
 */
fullStackPHPClassSession("bind column", __LINE__);

$stmp = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 3");
$stmp->execute();

$stmp->bindColumn("first_name", $name);
$stmp->bindColumn("email", $email);

while($user = $stmp->fetch()) {
    var_dump($user);
    echo "O e-mail de {$name} é {$email}";
}




$delete = Connect::getInstance()->prepare("DELETE FROM users WHERE id > 50");

$delete->execute();