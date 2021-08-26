<!DOCTYPE html>
<html>
<head>
	<title>CHAT PHP</title>
	<link rel="stylesheet" href="estilo.css">
	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 10000);
	</script>
</head>
<body>
                        <div class="bemvindo">
							<h1 class="Texto"> <span id="TituloPrincipal">PHP</span> CHAT</h1>
							<p class="TextosAparte">
							Seja bem vindo ao meu primeiro sistema de chat, e muito simples fazer a ultilização do sistema
							basta voçê adicionar seu nome e sua mensagem nos campos abaixo, aproveite XD
							</p>
						</div>
	<div id="chat">

		
    	</div>
        <div class="inputs">
    	<form method="post" action="index.php">
    		<input type="text" name="nome" placeholder="Insere o seu nome: ">
    		<input type="text" name="mensagem" placeholder="mensagem">
    		<input type="submit" value="Enviar">
    		<br>
    	</form>
    	
    	
    		<form method="post" action="limpar.php">
        <button>limpar</button>
        </form>
        </div>
    	<?php
    		include("conexao.php");
    		$nome = $_POST['nome'];
    		$mensagem = $_POST['mensagem'];
    		$sql = $pdo->query("INSERT INTO pessoa SET nome= '$nome', mensagem= '$mensagem'");
    	?>
    	<?php
        include("conexao.php");
        $sql = $pdo->query("SELECT * FROM pessoa");
        foreach ($sql->fetchAll() as $key) {
        	echo "<h3>".$key['nome']."</h3>";
    	echo "<h5>".$key['mensagem']."</h5>";
    }
    
    ?>
            
            		<div class="chat" id="chat">
									
				</div>
        
</body>
</html>