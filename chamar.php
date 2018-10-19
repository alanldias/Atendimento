<html>
	<head>
		<title> CHAMAR </title>

	</head>
	<body>
        <h1>CHAMAR</h1>	
        <strong>Bom dia: <?php 
          echo $_COOKIE['nome'];
         // $guiche = $_POST['guiche'];
        ?></strong>	
		<form method = "POST" action = "chtaxi.php">
            <div class="imgcontainer">
                <img src="logo-cttu_0.png" alt="Avatar" class="avatar">
            </div>
            <div class = "container" align = "center">
                        <?php
                            require_once'selecttaxi.php';
                        ?>
                        <br><label for="lguiche"><b>GUICHE</b></label>
                         <input type="number" placeholder="Coloque o Guiche" name="guiche">      
                        <button type="submit">Chamar Proximo da Fila</button>

            </div>
            </form>
            <form method = "POST" action = "usrncompareceu.php">
                        <div class = "container" align = "center">
                        <!--    <input type="number" placeholder="Coloque o Guiche" name="guiche">      -->
                        <button type="submit">Usuário Atual Não compareceu</button>
            </form><br>
            <form method = "POST" action = "usrematendimento.php">
                        <div class = "container" align = "center">
                                  
                        <button type="submit">Usuário em atendimento</button>
            </form>
			</div>
		
		
	</body>

</html>

