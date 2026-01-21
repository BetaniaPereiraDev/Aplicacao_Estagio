<?php
require_once '../../reutilizaveis/functions.php';
include '../../reutilizaveis/header.php';
$usuarios = lerUsuarios();
$id = $_GET['id'] ?? '';
$usuarioParaEditar = encontrarUsuarioPorId($id);

foreach ($usuarios as $index => $usuario) {
    if ($usuario['id'] === $id) {
        $usuarioIndex = $index;
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if (isset($usuarioIndex)) {
        $usuarios[$usuarioIndex] = [
            'id' => $id,
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone
        ];
        salvarUsuarios($usuarios);
    }

    header('Location: ../../index.php');
    exit();
}
?>
<main class="container mt-5">
    <h1 class="mb-4">Editar Usuário</h1>
    <?php if ($usuarioParaEditar): ?>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($usuarioParaEditar['nome']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($usuarioParaEditar['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo htmlspecialchars($usuarioParaEditar['telefone']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="../../index.php" class="btn btn-secondary">Cancelar</a>
    </form>
    <?php else: ?>
        <p>Usuário não encontrado.</p>
        <a href="../../index.php" class="btn btn-secondary">Voltar</a>
    <?php endif; ?>
</main>
<?php include '../../reutilizaveis/footer.php'; ?>