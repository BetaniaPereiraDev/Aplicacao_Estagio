<?php
$arquivo = __DIR__ .'/../usuarios.json';
function lerUsuarios() {
    global $arquivo;
    if (!file_exists($arquivo)) {
        return [];
    }
    $dados = file_get_contents($arquivo);
    return json_decode($dados, true) ?? [];
}
function salvarUsuarios($usuarios) {
    global $arquivo;
    $json = json_encode(array_values($usuarios), JSON_PRETTY_PRINT);
    file_put_contents($arquivo, $json);
}
function encontrarUsuarioPorId($id) {
    $usuarios = lerUsuarios();
    foreach ($usuarios as $usuario) {
        if ($usuario['id'] === $id) {
            return $usuario;
        }
    }
    return null;
}