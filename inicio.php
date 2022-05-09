<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen" />

    <script 
        type="text/javascript" 
        src="javaScript/javaScript.js">
    </script>

    <title> Via CEP </title>
</head>
<body class="body">
    <div class="h4">
        <h4> Digite o CEP: </h4>
    </div>
    <div>
        <form class="form" action ="script.php" method ="post">
            <input type ="text" name ="cep" placeholder="00000-000" id="cep" maxlength="9" onkeyup="mascara_cep()" onkeypress="somenteNumeros()" >
            <input type ="submit" value ="Enviar">
        </form>
    </div>
    <div class="faixa-efeito">
        <!-- -------linha para dividir a página------ -->
    </div>
    <div class="retorno">
             <div>
            <?php
                require_once "end.php";
                if ( session_status() !== PHP_SESSION_ACTIVE ){ //linha para testar e iniciar a session se necessario.
                session_start();
                }
                if(isset($_SESSION['ddd_r'])){ // isset para testar se consta informação na variavel e evitar avisos.

                    
                    echo"CEP: ".$_SESSION['cep_r']."</br>";
                    echo"Lagradouro: ".$_SESSION['logradouro_r']."</br>";
                    echo"Bairro: ".$_SESSION['bairro_r']."</br>";
                    echo"Localidade: ".$_SESSION['localidade_r']."</br>";
                    echo"UF: ".$_SESSION['uf_r']."</br>";
                    echo"DDD: ".$_SESSION['ddd_r']."</br>";
                }else{
                    echo"CEP não encontrado...</br>Digite o próximo CEP para continuar...";
                }
            
            ?>
        </div>
    </div>

    <div>
        <footer class="footer"> 
            <div class="faixa-efeito">
                <!-- faixa de efeito no footer -->
            </div>
            <p>
                wampserver v: 3.2.3
            </p>
            <p>
                PHP Version 7.3.21
            </p>
        </footer>
    </div>
</body>
</html>
