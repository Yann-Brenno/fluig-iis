<?php
	session_start();
echo "<b><font color='#B4ADAB'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
	include_once("../../conexao.php");
	if(!empty($_SESSION['usuarioNiveisAcessoId'] == '3' OR $_SESSION['usuarioNiveisAcessoId'] == '6' AND $_SESSION['id_usuario'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../acesso_negado.php");
}
?>
<br> <a href="../sair.php">Sair</a>
<br>
<center><a href="cadastro/cad_item.php">Cadastrar novo item</a></center<br>
<center><a href="cadastro/del_item.php">Retirar item</a></center
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> </script>
  </head>
  
  <body>
  <div class="container">
	<div id="container-est">
  <div class="container">
  <table id="example" class="table">
  <thead>
    <tr>
	 <th scope="col">#ID</th>
      <th scope="col">Código RM</th>
      <th scope="col">Nome do Item</th>
      <th scope="col">Quantidade</th>
	  <th scope="col">Patrimônio</th>
	    <th scope="col">Comentario</th>
		  <th scope="col">Alteração feita por</th>
    </tr>
  </thead>
  <tbody>
   <?php 
  $result_cliente = "SELECT * FROM log";
  $resultado_cliente = mysqli_query($conn, $result_cliente);
  while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
  ?>
    <tr>
<th scope="row"><?php echo $row_cliente['ID']; ?></th>
<th scope="row"><?php echo $row_cliente['cod_rm']; ?></th>
<th scope="row"><?php echo $row_cliente['nome_item']; ?></th>
<th scope="row"><?php echo $row_cliente['qtd_item']; ?></th>
<th scope="row"><?php echo $row_cliente['pat_item']; ?></th>
<th scope="row"><?php echo $row_cliente['comentario']; ?></th>
<th scope="row"><?php echo $row_cliente['usuario']; ?></th>
    </tr><?php }?>
  </tbody>
</table>

           <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> </script>
           <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
           <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

           <script>
               $(document).ready(function() {
    $('#example').DataTable();
} );
               </script>

</div>
</div>
<br>
<br>
	<center> <a href="estoque.php"> VOLTAR </a></center>
  </body>
  
  
   <!-- CSS -->
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

#container-est {
	background-color: #999393;
	opacity: 0.9;
	width: 1000px;
	margin-left: auto;
	margin-right: auto;
	padding: 20px 30px;
	margin-top: 10vh;
	border-radius: 10px;
	text-align: center;
-webkit-box-shadow: 5px 5px 0px 0px #999393, 10px 10px 0px 0px #999393, 15px 15px 0px 0px #999393, 20px 20px 0px 0px #CAE6FF, 25px 25px 0px 0px #999393, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 5px 5px 0px 0px #999393, 10px 10px 0px 0px #999393, 15px 15px 0px 0px #999393, 20px 20px 0px 0px #999393, 25px 25px 0px 0px #999393, 5px 5px 15px 5px rgba(0,0,0,0);
}

body {
  background-image: url('../../imagens/log.jpg');
  background-color: #3FB3B3;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}


</style>

</html>
