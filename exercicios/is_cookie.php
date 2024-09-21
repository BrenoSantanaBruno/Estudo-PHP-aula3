<?php
if (isset($_COOKIE['usuario'])) {
    echo "Usuário: " . $_COOKIE['usuario'];
} else {
    echo "Cookie não definido.";
}
?>