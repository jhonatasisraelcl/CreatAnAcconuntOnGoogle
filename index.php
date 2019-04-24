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
        <header>
            <img src="img/googlelogo.png" alt="Logomarca da google">
            <input type="button" class="botaoAzul" value="Iniciar Sessão">
        </header>
        <div>
            <h2>Crie a sua conta Google</h2>
            <section>
                <h3>Só necessita de uma conta</h3>
                <p>Uma conta gratuita dá-lhe acesso a tudo o que é da Google.</p>
                <img src="img/programasGoogle.png" alt="Lista de programas do Google">
                <h3>Leve tudo consigo</h3>
                <p>Alterne entre dispositivos e retorne a partir de onde você tinha ficado.</p>
                <img src="img/dispositivos.png" alt="Lista de dispositivos">
            </section>
            <form action="php/cadastrar.php" method="post">
                <label for="txtNome">Nome</label>
                <input type="text" id="txtNome" class="campo duasColunas" name="pNome" placeholder="Nome">
                
                <input type="text" id="txtApelido" class="campo duasColunas" name="pApelido" placeholder="Apelido">
                <label for="txtEmail">Escolher nome de utilizador</label>
               
                <input type="text" id="txtEmail" class="campo umaColuna" name="pEmail" title="Informe o e-mail..." maxlength="15">
                <span class="holderFixo">@gmail.com</span>
                
                <label for="txtSenha">Criar uma palavra-passe</label>
                <input type="text" id="txtSenha" class="campo umaColuna" name="pSenha" placeholder="Senha">
                
                <label for="txtConfirmaSenha">Confirmar palavra-passe</label>
                <input type="text" id="txtConfirmaSenha" class="campo umaColuna" name="pConfirmaSenha" placeholder="Confirma senha">
                
                <label for="sltDiaNascimento">Data de nascimento</label>
                <select id="sltDiaNascimento" class="campo tresColunas" name="pDiaNascimento">
                    <?php
                        for($i = 1; $i <= 31; $i++){
                            echo "<option value=\"$i\">$i</option>";                            
                        }
                    ?>
                </select>
                <select id="sltMesNascimento" class="campo tresColunas" name="pMesNascimento">
                    <?php
                        $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                        
                        for($i = 1; $i <= 12; $i++){
                            echo "<option value=\"$i\">".$meses[$i-1]."</option>";                            
                        }
                    ?>
                </select>
                <select id="sltAnoNascimento" class="campo tresColunas" name="pAnoNascimento">
                    
                    <?php
                        for($i = 2017; $i >=  1918; $i--){
                            echo "<option value=\"$i\">$i</option>";                            
                        }
                    ?>
                    
                </select>
                <label for="sltSexo">Sexo</label>
                <select id="sltSexo" class="campo umaColuna" name="pSexo">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Outro</option>
                    <option value="P">Prefiro não divulgar</option>
                </select>
                <input type="submit" class="botaoAzul" value="Passo seguinte">
            </form>
        </div>
    </body>
</html>
