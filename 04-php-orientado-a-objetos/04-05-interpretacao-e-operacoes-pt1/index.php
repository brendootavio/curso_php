<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
    "Brendo",
    "Oliveira",
    "brendo.oliveira@codeandsoul.com"
);

var_dump([$user]);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$brendo = $user;

$rebecca = $brendo;
$rebecca->setFirstName("Rebecca");
$rebecca->setLastName("Braga");

$rebecca = clone $brendo;
$rebecca->setFirstName("Rebecca");
$rebecca->setLastName("Braga");

$arthur = clone $brendo;
//$arthur->setFirstName("Arthur");
//$arthur->setLastName("Fernandes");

$arthur = null;

var_dump([
    $brendo,
    $rebecca,
    $arthur
]);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);

