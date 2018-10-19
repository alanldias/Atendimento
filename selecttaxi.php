
<?php
//header('Content-Type: text/event-stream');
//header('Cache-Control: no-cache');

    $connect = mysqli_connect('127.0.0.1','root','','bdatendimentocttu');
    #$db = mysqli_select_db('test');
    $query_select = "SELECT * FROM tbtaxi where status_chamado = 0";
    $select = mysqli_query( $connect , $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['codtaxi'];?>


    <li><?php echo $array['codtaxi'];echo" / "; echo $array['horachegada'];
        while($linhas_do_select = mysqli_fetch_assoc($select)){
            
?>
<li><?php $codigo = $linhas_do_select['codtaxi']; echo $linhas_do_select['codtaxi'];echo" / "; echo $linhas_do_select['horachegada'];?> <?php   
         }
         
    ?>	  