
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Redefinição de senha</title>	
	</head>
	<center>
	<body>
		<h1>Recuperação de senha</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<center>
		<form method="POST" action="proc_reset.php">
		  <label>Matricula: </label>
			<input id="matricula" type="input" name="matricula" placeholder="Digite a sua matricula"value=""><br><br>
            <label>NOVA SENHA: </label>
			<input id="input" type="password" name="senha_usuario" placeholder="Digite a nova senha" value=""><br><br>
			
			<input id="botao" type="submit" value="Editar">
		</form>
		</center>
	</body>
	<center>
</html>


<script>
//desabilita o botão no início
document.getElementById("botao").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("input").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("input").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("botao").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("botao").disabled = true;
    }
});


//desabilita o botão no início
document.getElementById("input").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("matricula").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("matricula").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("input").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("input").disabled = true;
    }
});

</script>