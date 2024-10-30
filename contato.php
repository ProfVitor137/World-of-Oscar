<?php
if (isset($_GET['enviar'])) {
    $nome = $_GET['name'];
    $sobrenome = $_GET['Sobrenome'];
    $email = $_GET['email'];
    $genero = $_GET['Gender'];

    echo "Seu nome é $nome e seu sobrenome é $sobrenome, seu email é $email e seu gênero é $genero.";
}
?>
