<?php require_once "validador_acesso.php" ?>

<?php

//ARRAY DE CHAMADOS 
$chamados = array();

$myarq = fopen("./app/arquivo.hd", "r");

//ENQUANTO HOUVER REGISTROS A SEREM RECUPERADOS
while (!feof($myarq)) {  //testa o fim do arquive, no caso a primeira linha
    //linhas
    $registro = fgets($myarq);
    $chamados[] = $registro;
}

fclose($myarq);

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/liststiles.css">
    <title>List Desk</title>
</head>

<body>
    
        <?php 
            foreach($chamados as $chamado) { ?>
        
            <?php
                //PERMITE COM BASO NUMA STRING CRIAR UM DELIMITADOR
                $chamado_dados = explode('#', $chamado);

                //print_r($chamado_dados);

                if($_SESSION['perfil_id'] == 2) {
                    //PERFIL DO ID DO USUARIO
                    if($_SESSION['id'] != $chamado_dados[0]) {
                        continue;
                    }
                }

                if(count($chamado_dados) < 3){
                    continue;
                }
            ?>
        <div class="list">

        <div class="cardlist">
            <div class="top">
                <h3>Titulo</h3>
                <h4><?=$chamado_dados[1]?></h4>
                <h3>Categoria</h3>
                <h5><?=$chamado_dados[2]?></h5>
                <h3>Descrição</h3>
                <p><?=$chamado_dados[3]?></p>
            </div>
        </div>
        </div>

        <?php }?>
   
</body>

</html>