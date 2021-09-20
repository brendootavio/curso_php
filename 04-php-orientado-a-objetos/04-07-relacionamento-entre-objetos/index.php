<?php

use Source\Loading\Company;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();
$company->bootCompany(
    "Code And Soul",
    "Nome da rua"
);

var_dump($company);

$address = new \Source\Related\Address("Rua dos cavalos", "191", "Academy cadmo");

$company->boot(
    "Cod and Soul",
    $address
);

var_dump([$company]);

echo "<p>{$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$productA = new \Source\Related\Product("Full Stack PHP", "1997");
$productB = new \Source\Related\Product("Full Developer PHP", "997");

var_dump($productA,$productB);

$company->addProduct($productA);
$company->addProduct($productB);

$company->addProduct(new \Source\Related\Product(
    "Photoshop",
    "599"
));

var_dump($company);


foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Brendo", "Oliveira");
$company->addTeamMember("Redatora", "Rebecca", "Braga");
$company->addTeamMember("Designer", "Arthur", "Fernandes");


var_dump([$company]);

foreach ($company->getTeam() as $member) {
    echo "<p class='trigger accept'>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}








