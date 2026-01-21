document.addEventListener('DOMContentLoaded', function() {

    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            if (!confirm('Tem certeza que deseja excluir este usuário?')) {
                event.preventDefault();
            }
        });
    });

    console.log("Sistema carregado com sucesso.");
    

});

