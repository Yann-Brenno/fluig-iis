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

$cod_rm = mysqli_real_escape_string($link, $_REQUEST['cod_rm']);
$nome_item = mysqli_real_escape_string($link, $_REQUEST['nome_item']);
$qtd_item = mysqli_real_escape_string($link, $_REQUEST['qtd_item']);
$pat_item = mysqli_real_escape_string($link, $_REQUEST['pat_item']);
 

$sql = "INSERT INTO produtos (cod_rm, nome_item, qtd_item, pat_item) VALUES ('$cod_rm', '$nome_item', '$qtd_item', '$pat_item')";
if(mysqli_query($link, $sql)){
    echo "<center>Item cadastrado com sucesso!!</center>";
} else{
    echo "ERRO DEU RUIM AI EINNN $sql. " . mysqli_error($link);
}

mysqli_close($link);



$link = mysqli_connect("localhost", "root", "", "lab_ti_aec");
 
if($link === false){
    die("ERRO NA DB" . mysqli_connect_error());
}

$cod_rm = mysqli_real_escape_string($link, $_REQUEST['cod_rm']);
$nome_item = mysqli_real_escape_string($link, $_REQUEST['nome_item']);
$qtd_item = mysqli_real_escape_string($link, $_REQUEST['qtd_item']);
$pat_item = mysqli_real_escape_string($link, $_REQUEST['pat_item']);
 

$sql = "INSERT INTO log (cod_rm, nome_item, qtd_item, pat_item) VALUES ('$cod_rm', '$nome_item', '$qtd_item', '$pat_item')";
if(mysqli_query($link, $sql))


mysqli_close($link);
?>
		
         <center> <input id="botao_voltar" type="button" value="Voltar" onclick="history.go(-1)"> <center>