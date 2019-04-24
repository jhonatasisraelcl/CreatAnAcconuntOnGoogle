<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $nome;
    $cpf;
    $email;
    $sexo;
    $senha;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = test_input($_POST["nome"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
//    
//    if(!empty($_POST)){
//        if(isset($_POST["pNome"])){
//            if(!empty($_POST["pNome"])){
//                $nome = $_POST["pNome"];
//            }
//        }
//        if(isset($_POST["pCpf"])){
//            if(!empty($_POST["pCpf"])){
//                $cpf = $_POST["pCpf"];
//            }
//        }
//        if(isset($_POST["pEmail"])){
//            if(!empty($_POST["pEmail"])){
//                $email = $_POST["pEmail"];
//            }
//        }
//        if(isset($_POST["pSexo"])){
//            if(!empty($_POST["pSexo"])){
//                $sexo = $_POST["pSexo"];
//            }
//        }
//        if(isset($_POST["pSenha"])){
//            if(!empty($_POST["pSenha"])){
//                $senha = $_POST["pSenha"];
//            }
//        }
//    }
//    
    //CONECTA USANDO MySQLi
    /*
    $servername = "localhost";
    $username = "root";
    $password = "Senha123";
    $dbname = "ppimanha";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    echo "Conectado!";
    
     */

     //CONECTA USANDO PDO
    ///*
    $servername = "localhost";
    $username = "root";
    $password = "Senha123";
    $dbname = "ppimanha";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    // */
        
    /*
     * INSERT NO BANCO DE DADOS
     */
    $sql = "INSERT into usuario (nome, cpf, email, sexo, senha) values "
            . "('".$nome."', '".$cpf."', '".$email."', '".$sexo."', '".$senha."')";
    echo $sql;
    
    //USANDO MYSQLi
    /*
    if($conn->query($sql) === TRUE){
        echo "usuario cadastrado com sucesso!";
    } else {
        echo "Erro ao inserir usuario!";
    }
    */
    
    //USANDO PDO
    ///*
    try{
        //$conn->query($sql);
        echo "usuario cadastrado com sucesso!";
    } catch (PDOException $ex) {
        echo "Erro ao inserir usuario!";
    }
    
    //*/
?>