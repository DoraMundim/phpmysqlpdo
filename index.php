<?php

try {
    $db = new PDO ('mysql:host=localhost;dbname=fatec', username:'root', password: '');
} catch (PDOException $e) {
    echo "Erro".$e->getMessage();
}



?>