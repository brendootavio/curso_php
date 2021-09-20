<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.04 - Consultas com query e exec");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/*
 * [ insert ] Cadastrar dados.
 * https://mariadb.com/kb/en/library/insert/
 *
 * [ PDO exec ] http://php.net/manual/pt_BR/pdo.exec.php
 * [ PDO query ]http://php.net/manual/pt_BR/pdo.query.php
 */
fullStackPHPClassSession("insert", __LINE__);

$pdo = Connect::getInstance();



$insert = "
INSERT INTO users (first_name, last_name, email, document) VALUES ('Brendo', 'Oliveira', 
'brendo.oliveira@codeandsoul.com', '281082032');";

try {
    $prepare = $pdo->prepare($insert);
    //$prepare = $pdo->exec($insert);
    var_dump(Connect::getInstance()->lastInsertId());
} catch (PDOException $exception){
    var_dump($exception);
}






/*
 * [ select ] Ler/Consultar dados.
 * https://mariadb.com/kb/en/library/select/
 */
fullStackPHPClassSession("select", __LINE__);

try {
    $query = Connect::getInstance()->query("SELECT * FROM users LIMIT 2");
    var_dump([
        $query,
        $query->rowCount(),
        $query->fetchAll()
    ]);
} catch (PDOException $exception){
    var_dump($exception);
}



/*
 * [ update ] Atualizar dados.
 * https://mariadb.com/kb/en/library/update/
 */
fullStackPHPClassSession("update", __LINE__);

try {
    $exec = $pdo->query("UPDATE users SET first_name = 'Rebecca', last_name = 'Fernandes' WHERE id = '70'");
} catch (PDOException $exception){
    var_dump($exception);
}


/*
 * [ delete ] Deletar dados.
 * https://mariadb.com/kb/en/library/delete/
 */
fullStackPHPClassSession("delete", __LINE__);

try {
    $exec = $pdo->exec("DELETE FROM users WHERE id > 50");
    var_dump($exec);
} catch (PDOException $exception){
    var_dump($exception);
}
