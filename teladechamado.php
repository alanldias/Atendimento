<?php
header("Refresh: 5; url = teladechamado.php");

$connect = mysqli_connect('127.0.0.1','root','','bdatendimentocttu');
#$db = mysqli_select_db('test');

$query_select = "SELECT * FROM tbchamado where codtbatd = (select max(codtbatd) from tbchamado where atendido = 0 OR atendido = 1)";
$query_select_chamado = "SELECT * FROM tbchamado where atendido = 1 OR atendido = 2 ORDER BY codtbatd DESC LIMIT 5";

$select = mysqli_query( $connect , $query_select);

$select_chamado = mysqli_query( $connect , $query_select_chamado);

$array = mysqli_fetch_array($select);
$array_chamado = mysqli_fetch_array($select_chamado);

$logarray = $array['codtbatd'];
//$numerodechamado = $array_taxi[1];
$guiche = $array[3];
//$atendido = $array['atendido'];
$linhas_do_select = $array_chamado;
$contador = 0;

//$connect = close;

?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TELA DE CHAMADOS</title>
        <style>
        table, th, td {
            border: 1px solid black;
        }
</style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
    
        <div class="imgcontainer" align = "center">
            <img src="logo-cttu_0.png" alt="Avatar" class="avatar">
        </div>
        
        
        <div class="container"align = "center" >
        
            <embed src='notify.wa'width='1' height='1'>
            <table style="width:50%" color = #fff>
            <tr> <th><label for="numerochamado"style="font-size:400%"><b>Numero de chamado</b></label></tr></th>
                <th><h1 style="font-size:400%"><div><?php echo $logarray; ?></div></h1></th><br>
            </table>
            <table style="width:50%" color = #fff>
            <tr><th> <h2 style="font-size:400%"><b>Guichê</b></label></tr></h2></th>
                <th> <h2 style="font-size:400%"><?php echo $array[2]; ?></h2></th>
            </table>
        </div>
        <div class="container"align = "center" >
            <table style="width:80%" color = #fff>

            <h2 style="font-size:300%"><li><?php 
             echo" Senha: "; echo $array_chamado['codtbatd'];echo" / ";echo" Guiche: "; echo $array_chamado['guiche'];
            
        while($linhas_do_select = mysqli_fetch_assoc($select_chamado)){
            
?>
<li><?php $codigo = $linhas_do_select['codtbatd'];echo" Senha: "; echo $linhas_do_select['codtbatd'];echo" / "; echo" Guiche: ";echo $linhas_do_select['guiche'];?> <?php   
         }
         
    ?>	  
        
            </table>
        </div>


        <!--<table style="width:75%">
           <tr> <label><h2> Ultimo chamado</label></tr></h2>
           <th> <h2>$ultimochamado<h2><br><h2>$ultimoguiche<h2></th>
            </table>
        </div>
       !-->

       

    </body>
</html>
  
