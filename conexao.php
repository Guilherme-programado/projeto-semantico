<?php
$host = "localhost";
$usuario = "root";
$senha = "Senac2024@";
$dbname = "TechCursos";

$conexao = new mysqli($host,$usuario,$senha,$dbname);

if($conexao->connect_error){
    echo"Error: " . mysqli_error($conexao);
}
else{
    
}



?>