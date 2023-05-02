<?php
session_start();

include("conexao.php");

$usuario = $_POST['login_usuario'];
$senha = md5($_POST['senha_usuario']);

$query = "SELECT * FROM dbo.usuarios WHERE login_usuario = ? AND senha_usuario = ?";
$params = array($usuario, $senha);

$stmt = $conn->prepare($query);
$stmt->execute($params);

$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

if ($resultado) {
    $_SESSION['usuarioId'] = $resultado['id_usuario'];
    $_SESSION['usuarioNome'] = $resultado['login_usuario'];
    $_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel_usuario'];
    $_SESSION['usuarioEmail'] = $resultado['senha_usuario'];
    if ($_SESSION['usuarioNiveisAcessoId'] >= "1") {
        header("Location: app/dashboard.php");
        exit();
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha Inválido";
    header("Location: /index.php");
    exit();
}

$stmt->closeCursor();
?>
