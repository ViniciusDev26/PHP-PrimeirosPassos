<?php

    require_once "autoload.php";

    use classes\funcionarios\Diretor;

    $designer = new Diretor();

    $designer->nome = 'vinicius';
    echo $designer->nome;