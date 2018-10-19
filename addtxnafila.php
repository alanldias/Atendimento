<?php 
 
$numerodechamado = '1';
$atendido = 0;
$connect = mysqli_connect('127.0.0.1','root','','bdatendimentocttu');
#$db = mysqli_select_db('test');
$query_select = "SELECT codtaxi,MAX(senha),horachegada FROM tbtaxi";
$select = mysqli_query( $connect , $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['codtaxi'];
$parachamado=$array[1];
$parachamado = (int)filter_var($parachamado, FILTER_SANITIZE_NUMBER_INT);
$parachamado = $parachamado+1;
if($parachamado == 100){
    $parachamado = 00;  
}
$numerodechamado = ('A'.$parachamado);

  
  if($numerodechamado == "" || $numerodechamado == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo numero de chamado deve ser preenchido');window.location.href='cadastro.html';</script>";
  }else{
        $query = "INSERT INTO tbtaxi (senha,status_chamado) VALUES ('$numerodechamado','$atendido')";
        $insert = mysqli_query( $connect , $query)or die("Erro ao tentar cadastrar registro");
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('CHAMADO cadastrado com sucesso!');window.location.href='addnafila.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
    }
    
?>
   