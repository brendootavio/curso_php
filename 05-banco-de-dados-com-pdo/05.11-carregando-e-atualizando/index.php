<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.11 - Carregando e atualizando");

require __DIR__ . "/../source/autoload.php";

/*
 * [ save update ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save update", __LINE__);

$model =  new \Source\Models\UserModel();

$user = $model->load(2);
$user->first_name = "brendo";
$user->last_name = "otavio";
$user->email = "teste@teste.com";

$user->save();

var_dump($user);
