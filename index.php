<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    include "conexão1.php";
    
    $sql = "SELECT * FROM funcionarioa
            WHERE cpf = '$cpf'
            AND senha = '$senha'";

$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Liberado!";
    echo "<a href='boasvindas.html'>Home</a>";
    header('localition: inicio.html');
} else{
    echo "Usuario ou senha invalidos!";
    echo "<a href='boasvindas.html'>Voltar</a>";
    }
}