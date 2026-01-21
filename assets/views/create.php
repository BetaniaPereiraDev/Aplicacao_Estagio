<?php
require_once '../../reutilizaveis/functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    $usuarios = lerUsuarios();
    $novoUsuario = [
        'id' => uniqid(),
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone
    ];
    $usuarios[] = $novoUsuario;
    salvarUsuarios($usuarios);

    header('Location: ../../index.php');
    exit();
}
?>
<?php include '../../reutilizaveis/header.php'; ?>
<main class="container mt-5">
    <h1 class="mb-4">Adicionar Novo Usuário</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="../../index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</main>
<?php include '../../reutilizaveis/footer.php'; ?>