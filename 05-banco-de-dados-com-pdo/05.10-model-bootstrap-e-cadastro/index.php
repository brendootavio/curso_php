<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.10 - Model bootstrap e cadastro");

require __DIR__ . "/../source/autoload.php";

/*
 * [ bootstrap ] Inicialização de dados
 */
fullStackPHPClassSession("bootstrap", __LINE__);

$model = new \Source\Models\UserModel();

$user = $model->bootstrap(
    "Brendo",
    "Otavio",
    "brendo.dev@outlook.com",
    "517635716209"
);


/*
 * [ save create ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save create", __LINE__);



if (!$model->find($user->email)) {
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
}else{
    echo "<p class='trigger accept'>Read</p>";
}

var_dump($user);