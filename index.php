<?php
require_once 'reutilizaveis/functions.php';
$usuarios = lerUsuarios();
include 'reutilizaveis/header.php';
?>
<main class="container mt-5">
    <h1 class="mb-4">Lista de Usuários</h1>
    <a href="assets/views/create.php" class="btn btn-primary mb-3">Adicionar Novo Usuário</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['telefone']); ?></td>
                    <td>
                        <a href="assets/views/edit.php?id=<?php echo $usuario['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="assets/views/delete.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este usuário?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include 'reutilizaveis/footer.php'; ?>