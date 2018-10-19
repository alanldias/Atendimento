<?php
require_once'classefiladechamados.php';
 function colocadados(){
    
    $filaos = $_POST['numerochamado'];
    $chamadoatual = Addchamadofifo($filaos);
    echo "chamado criado";
    return $chamadoatual;
}
function mostrafila(){
    Imprimefila();
    }


 function tiradados(){
   $valorchamado = array_shift($filaos);
  return $valorchamado;
}

?>
