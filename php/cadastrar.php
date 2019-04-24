<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Marcelo Júnior">
        <meta name="keywords" content="html, php, banco de dados, get, post">
        <meta name="description" content="Página para exemplificar o uso de conexões com banco de dados MySql">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crie sua conta do Google</title>
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/telaGrande.css">
    </head>
    <body>
        <?php
            echo $_POST["pNome"];
            echo '<br/>';
            echo $_POST["pApelido"];
            echo '<br/>';

            echo $_POST["pEmail"];
            echo '<br/>';

            echo $_POST["pSexo"];
            echo '<br/>';

            echo $_POST["pSenha"];
            echo '<br/>';


            if($_POST["pNome"] == null || 
               $_POST["pApelido"] == null || 
               $_POST["pEmail"] == null || 
               $_POST["pSexo"] == null || 
               $_POST["pSenha"] == null ){
                
                echo  "<script>alert('Email enviado com Sucesso!);</script>"; 
                //echo "faltou";
               }
           
            
            

            echo "<a href='http://localhost/exemplo/exemploCriarContaGoogle/exemploCriarContaGoogle/' >voltar</a>"
        ?>
        
    </body>
</html>