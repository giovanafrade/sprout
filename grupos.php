<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $grupo_id = $_POST['grupo_id'];
    $nome = $_POST['addNome'];
    $descricao = $_POST['addDescricao'];

    // Retorna como JSON para separar nome e descrição no JavaScript
    header('Content-Type: application/json');
    echo json_encode([
        'grupo_id' => $grupo_id,
        'nome' => htmlspecialchars($nome),
        'descricao' => htmlspecialchars($descricao)
    ]);
}
?>