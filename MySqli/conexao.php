<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function conectabd(){
    $endereco = "localhost";
    $usuario = "root";
    $senha = "";
    $banco ="empresa";

    try {
        $con = new mysqli($endereco, $usuario, $senha, $banco);
        $con->set_charset("utf8mb4");
        return $con;
    } catch (Exception $e) {
        die("Erro na conexão: " . $e->getMessage()); 
    }   
}
?>
