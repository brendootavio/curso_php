<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";


$appTemplate = new App\Template();
$webTemplate = new Web\Template();
var_dump(
    $appTemplate,
$webTemplate
);

use App\Template;
use Web\Template AS WebTamplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTamplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);


/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);


require __DIR__."/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->setFistName("Brendo"); 
//$user->setLastName("Oliveira");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O e-email{$user->getFistName()} é {$user->getEmail()}</p>";


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$brendo = $user->setUser(
    "Brendo",
    "Oliveira",
    "brendo.oliveira@codeandsoul.com"
);

if(!$brendo){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}else

$rebecca = new \Source\Qualifield\User();
$rebecca->setUser(
    "Rebbeca",
    "Fernandes",
    "rebecca.braga@outlook.com"
);

$arthur = new \Source\Qualifield\User();
$arthur->setUser(
    "Arthur",
    "Fernandes",
    "arthur.fernandes@outlook.com"
);

var_dump(
    $user,
    $rebecca,
    $arthur
);