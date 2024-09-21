<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email;
}
?><?php
