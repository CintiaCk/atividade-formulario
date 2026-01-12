<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário notas</title>
</head>
<body>
    <!-- FORM -->
    <form action="avaliacao.php" method="post" enctype = "multipart/form-data">
        <!-- NOME -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome">                                                                                                       <br><br>

        <!-- IDADE -->
        <label for="idade">Idade:</label>
        <input type="number" name="idade" placeholder="Digite sua idade">                                                                                                   <br><br>
        
        <!-- NOTA -->
        <label for="nota">Nota:</label>
        <input type="number" name="nota" placeholder="Digite sua nota">                                                                                                     <br><br>
        
        
        <!--BOTÃO-->
          
    <a href="<?php include_once("avaliacao.php");?>"><input type="submit" name = "enviar"> </a>

    </form>
</body>
</html>
