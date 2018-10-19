<form action="chamar.php" method = "POST">
  <div class="imgcontainer">
    <img src="logo-cttu_0.png" alt="Avatar" class="avatar">
  </div>
    <strong>Bom dia: <?php 
       echo $_COOKIE['nome'];
    ?></strong>

    <?php
    $teste = 'testando';

   $teste = filter_var($teste, FILTER_SANITIZE_NUMBER_INT);

    $teste = (int)$teste+1;
    if($teste == 100){
      $teste = 00;  
  }

    echo 'A'.$teste;
    
    ?>
      
  <div class="container">
    
    <label for="guiche"><b>GUICHE</b></label>
    <input type="number" placeholder="Coloque o Guiche" name="guiche">

    <button type="submit">Entrar</button>
    
  </div>          
</form>
      