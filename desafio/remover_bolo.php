<?php
session_start();

if (isset($_POST['remover_bolo']) && isset($_POST['codigo'])) {
    $listaDeBolos = $_SESSION['listaDeBolos'];

    $codigoBoloParaRemover = $_POST['codigo'];

    if (isset($listaDeBolos[$codigoBoloParaRemover])) {
        unset($listaDeBolos[$codigoBoloParaRemover]);

        $_SESSION['listaDeBolos'] = $listaDeBolos;

        header("Location: index.php");
        exit();
    }
}
