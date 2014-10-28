<?php
   session_start();
   require_once 'conexao.php';
//   inicio verifica campo vazio         
    if(isset($_POST['usu']) && empty($_POST['use'])){
      header("LOCATION:index.php?mens=erro_use"); 
    }
      
    if(isset($_POST['sh']) && empty($_POST['sh'])){
      header("LOCATION:index.php?mens=erro_senha"); 
    }
      
//  fim verifica campo vazio     
    
    if (isset($_POST['entra']) && !empty($_POST['entra'])){
      $usuario =  mysql_real_escape_string($_POST['use']);
      $senha   =  mysql_real_escape_string($_POST['sh']);
    } else{
      header("LOCATION:index.php?mens");
      exit();   
    }
    
    $senha = md5($senha);
//  consultar  o banco para validar
    
    
    

