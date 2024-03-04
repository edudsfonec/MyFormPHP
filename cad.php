<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
        <h2>Resultado do processamento</h2>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "não informado";
            echo "<p>É um prazer te conhecer, <strong>$nome 
            $sobrenome<strong>! Bem vinda(o) ao site!"     
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </div>

</body>
</html>