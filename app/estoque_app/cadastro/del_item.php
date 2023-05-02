<!DOCTYPE html>
<?php
session_start();
	echo "<b><font color='#FFFFFF'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: /acesso_negado.php");
}
?>
		<br> <a href="sair.php">Sair</a><br>
		<input id="botao_voltar" type="button" value="Voltar" onclick="history.go(-1)">
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Retirar item</title>

</head>
<body>
<center><h2> Digite o ID do item que deseja retirar do estoque </h2></center>
<div>
    <div class="container">
	<div id="container-del">
<center>
<form action="proc_del_item.php" method="post">
    <p>
        <label for="ID">ID do item</label>
        <input type="number" name="ID" id="ID">
		<br>
		<label for="comentario">Comentario</label>
        <input type="text" name="comentario" id="comentario">
    </p>

    <input id="botao"class="button1" type="submit" value="Retirar">
</form>
	</div>
    </div> 
</body>





<style>

h2{
	font-family: 'Brush Script MT', cursive;
}
input{
	font-family: 'Brush Script MT', cursive;
}
label{
	font-family: 'Brush Script MT', cursive;
}
h2:hover {
	color: #FF0000;
}

#container-del {
	background-color: #FAA537;
	opacity: 1;
	width: 400px;
	margin-left: auto;
	margin-right: auto;
	padding: 20px 30px;
	margin-top: 10vh;
	border-radius: 10px;
	text-align: center;
-webkit-box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 50px 50px 50px 50px rgba(0,0,0,0); 
box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 50px 50px 50px 50px rgba(0,0,0,0);

}

body {
  background-image: url('../../../imagens/del.jpg');
  background-color: #3FB3B3;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */

</style>





</html>


<script>


//INPUTSSSSSS
//desabilita o botão no início
document.getElementById("botao").hidden = true;

//cria um event listener que escuta mudanças no input
document.getElementById("ID").addEventListener("input", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("ID").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("botao").hidden = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("botao").hidden = true;
    }
});



</script>

