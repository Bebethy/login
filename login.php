<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    include "conexao.php";
    
    $sql = "SELECT * FROM usuario
            WHERE usuario = '$usuario'
            AND senha = '$senha'";

$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Liberado!";
    header('localition: inicio.html');
} else{
    echo "Usuario ou senha invalidos!";
    echo "<a href='index.html'>Voltar</a>";
    }
}