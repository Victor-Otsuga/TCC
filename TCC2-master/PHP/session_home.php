<?php
If (!isset($_SESSION)) {
  session_start();
}

If (!isset ($_SESSION['id_session']) and !isset($_SESSION['nome_session']) and !isset($_SESSION['email_session']) and !isset($_SESSION['senha_session']) and !isset($_SESSION['nivel_session'])) {
    session_destroy();
    header('location: ../index.html');
    exit;
}

?>