<?php
include '../../reutilizaveis/functions.php';

$id = $_GET['id'] ?? '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuarios = lerUsuarios();
    $usuariosFiltrados = array_filter($usuarios, function ($usuario) use ($id) {
        return $usuario['id'] !== $id;
    });

    salvarUsuarios($usuariosFiltrados);
}

header('Location: ../../index.php');