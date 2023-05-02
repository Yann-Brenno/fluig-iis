<br> <a href="sair.php">Sair</a><br>
<?php
session_start();
	echo "<b><font color='#080808'>Usuario:<font></b> ". $_SESSION['usuarioNome'];
if(!empty($_SESSION['usuarioNiveisAcessoId'])){

}else{
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../../acesso_negado.php");
}

?>

<?php
/* Nova conexão com o banco de dados, eu sei que criei um arquivo só pra isso e uma variavel pra conexão, mais pra esse caso preferi criar dnv */
$link = mysqli_connect("localhost", "root", "", "lab_ti_aec");
 
if($link === false){
    die("ERRO NA DB" . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
$comentario = mysqli_real_escape_string($link, $_REQUEST['comentario']);

 

$sql = "DELETE FROM  produtos WHERE ID='$ID'";
if(mysqli_query($link, $sql)){
    echo "<center>Item retirado do estoque com sucesso!!</center>";
} else{
    echo "ERRO DEU RUIM AI EINNN $sql. " . mysqli_error($link);
}

mysqli_close($link);




/* Nova conexão com o banco de dados, eu sei que criei um arquivo só pra isso e uma variavel pra conexão, mais pra esse caso preferi criar dnv */
$link = mysqli_connect("localhost", "root", "", "lab_ti_aec");
 
if($link === false){
    die("ERRO NA DB" . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
$comentario = mysqli_real_escape_string($link, $_REQUEST['comentario']);

 

$sql = "UPDATE log SET comentario='$comentario' WHERE ID='$ID'";
if(mysqli_query($link, $sql)){
    
}

mysqli_close($link);


/* Nova conexão com o banco de dados, eu sei que criei um arquivo só pra isso e uma variavel pra conexão, mais pra esse caso preferi criar dnv */
$link = mysqli_connect("localhost", "root", "", "lab_ti_aec");
 
if($link === false){
    die("ERRO NA DB" . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
$comentario = mysqli_real_escape_string($link, $_REQUEST['comentario']);
$usuario = $_SESSION['usuarioNome'];

 

$sql = "UPDATE log SET usuario='$usuario' WHERE ID='$ID'";
if(mysqli_query($link, $sql)){
    
}

mysqli_close($link);
?>
		
         <center> <input id="botao_voltar" type="button" value="Voltar" onclick="history.go(-1)"> <center>