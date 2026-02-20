<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Const_var</title>
</head>
<body>
    <?php
    /*int = numero,
    string = caractere,
    boleano = true/false,
    float = 0.0*/

    $aluno = "Ecilandia";
    $idade = "56 anos";
    //const instituicao = "cetam";
   
    /*const inicia com a palavra "define"
    entre aspas duplas
    1 constante
    2 valor */

    define("instituicao", "cetam");
    
    echo "Olá aluno, $aluno $idade bem vindo ao " . instituicao
    
    
    ?>
</body>
</html>