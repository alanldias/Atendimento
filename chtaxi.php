<?php
    $guiche = $_POST["guiche"];
    $connect = mysqli_connect('127.0.0.1','root','','bdatendimentocttu');
    #$db = mysqli_select_db('test');
    $query_select = "SELECT * FROM tbtaxi where status_chamado = 0 AND (select min(codtaxi) from tbtaxi)" ;
    $select = mysqli_query( $connect , $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['codtaxi'];
    $numerodechamado = $array['senha'];
    //$guiche = 4;
    $boleanodeatendido = 0;

    echo $logarray; echo"teste<br>";echo $logarray;
    $sql = "INSERT INTO tbchamado(codtbatd,guiche,atendido) VALUES ($logarray,$guiche,$boleanodeatendido)";
   
    $query = mysqli_query($connect,$sql);
    if ($query)
        {
            echo "Atualizou";
            $updatesql = "UPDATE tbtaxi SET status_chamado = '1' WHERE codtaxi = '$logarray'";
            $query = mysqli_query($connect,$updatesql);
            if($query){
                echo "Atualizou";
                header("Location: Atendimento/chamar.php");
            }else{
                echo "erro";
            }
            
        }
        else{
             echo "ERRO";
        }
    ?>
