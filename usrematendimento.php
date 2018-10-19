<?php
    //$guiche = $_POST["guiche"];
    $connect = mysqli_connect('127.0.0.1','root','','bdatendimentocttu');
    #$db = mysqli_select_db('test');
    $query_select = "SELECT * FROM tbchamado where atendido = 0 AND (select min(codtbatd) from tbchamado)" ;
    $select = mysqli_query( $connect , $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['codtbatd'];
    $boleanodeatendido = 1;

    //echo $logarray; echo"teste<br>";echo $logarray;
    $sql = "UPDATE tbchamado SET atendido = '$boleanodeatendido' WHERE codtbatd = '$logarray'";
    $query = mysqli_query($connect,$sql);
    if ($query)
        {
            echo "Atualizou";
            header("Location: chamar.php");
        }
        else{
             echo "ERRO";
        }
    ?>
