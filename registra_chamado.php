<?php

    session_start();

    //MONTAGEM DO TEXTO
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);

    //IMPLODE ('#',$POST)
    $texto = $SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;

    //ABRINDO O ARQUIVO
    $arquivo = fopen('./app/arquivo.hd','a');
    //ESCRENDO NO ARQUIVO
    fwrite($arquivo,$texto);
    //FECHANDO O ARQUIVO
    fclose($arquivo);

    //ECHO $texto
    header('Location: abrir_chamado.php');
    


?>