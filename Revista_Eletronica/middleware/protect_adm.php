<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id']) || $_SESSION['nivel'] < 4){
    die('Esta página está reservada apenas para admins. <a href="../views/revista.php">Voltar</a>');
}
