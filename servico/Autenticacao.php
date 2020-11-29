<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('../index.php');
    alert('voce esta deslogado')
    </script>
    ";
    
}

?>