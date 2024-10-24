<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição</title>
</head>
<body>
<?php
include("conexao.php");

$sql = "INSERT IGNORE INTO excel(nome, email) VALUES('$nome', '$email')";

if(mysqli_query($conexao, $sql)){
    echo "Inscrição realizada";
    echo "<a href='excel.html'> Voltar </a>";

}else{
    echo "erro" . mysqli_error( $conexao);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o valor do campo de texto
    $nome = trim($_POST['input']);
    
    if (empty($nome)) {
        echo "<script>alert('Por favor, preencha o campo de nome antes de continuar.'); window.history.back();</script>";
        exit;
    } else {
        echo "Obrigado por comprar o curso, $nome!. ";
    }
}
?>

    
</body>
</html>