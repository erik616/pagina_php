<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./css/stylesform.css">
    <title>Help Desk</title>
</head>

<body>
    <div class="card">
        <form action="registra_chamado.php" method='post'>
            <div class='cardhelp'>
                <h2>Qual é o seu problema de informatica?</h2>
                <div>
                    <h3>De um nome</h3>
                    <input type='text' name='titulo' />
                </div>
                <div>
                    <h3>O seu Problema é de que tipo</h3>
                    <input type='text' name='categoria'  />
                </div>
                <div>
                    <h3>Descreva-o</h3>
                    <input type='text' name='descricao' />
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <?php



    ?>


</body>

</html>