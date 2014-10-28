<?php 
  if(isset($_GET['mens'])&& $_GET['mens']=='erro_use'){
     $mens ='o campo usuario não pode ficar vazio'; 
      
      }
  if(isset($_GET['mens'])&& $_GET['mens']=='erro_senha'){
     $mens ='o campo senha não pode ficar vazio'; 
      
      }


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
   <style>
       div.div_principal{
       margin:0px 130px;
       height:400px; 
       background: gainsboro;
       }         
       div.campo{
       text-align: center;
       padding: 10px;
       }
       h1.hum{
        text-align: center;
        
        letter-spacing: 5px;
       }     
      
       h2.hum{
        text-align: center;   
       }     
            
            
   </style>  

    </head>
    <body>
        <div class="div_principal" >
            <!--formulario de login-->
            <form action="formulario_executa_menu.php" name="form_l" id="form_l" method="post">
                <h1 class="hum">Sistema Formulário Inteligente</h1>
                <h2 class="hum">Nunca foi tão moderno ser simples</h2>
            <img src="#" alt="">
            <div class="campo">
           
            <label for="use"><b>Usuário:</b></label> 
            <input type="text" name="usu" id="usu" value=""><br />
            
            <p><label for="use"><b>Senha:</b></label> 
            <input type="password" name="sh" id="sh" value="">
            </p>
            <p>Esqueceu a senha ? </p>
            
            <input type="submit" name="entra" value="Entrar"><br />
            <?php 
            if(!empty($_GET['mens'])){
                echo $mens;
                }
            ?>
            
            </div> 
            
        </form>  


        </div>    






    </body>
</html>

