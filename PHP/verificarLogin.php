<?php
if (!isset($_SESSION)) {
    session_start();
  }

if(!isset ($_SESSION['id_session']) and !isset($_SESSION['nome_session']) and !isset($_SESSION['email_session']) and !isset($_SESSION['senha_session']) and !isset($_SESSION['nivel_session']) and !isset($_SESSION['avatar_session'])) {
    
    header('location: erro.php');
    exit;
}