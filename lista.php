<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Lista de grupos e seus campos
    $grupos = [
        'Salvar_Contatos' => [
            'nome' => 'addNome_Contatos',
            'sobrenome' => 'addSobrenome_Contatos',
            'email1' => 'addEmail1_Contatos',
            'email2' => 'addEmail2_Contatos',
            'numero1' => 'addCelular1_Contatos',
            'numero2' => 'addCelular2_Contatos',
            'endereco' => 'addEndereco_Contatos',
            'addAniversario' => 'addAniversario_Contatos',
            'arquivo' => 'contatos_Contatos.html'
        ],
        'Salvar_Favoritos' => [
            'nome' => 'addNome_Favoritos',
            'sobrenome' => 'addSobrenome_Favoritos',
            'email1' => 'addEmail1_Favoritos',
            'email2' => 'addEmail2_Favoritos',
            'numero1' => 'addCelular1_Favoritos',
            'numero2' => 'addCelular2_Favoritos',
            'endereco' => 'addEndereco_Favoritos',
            'addAniversario' => 'addAniversario_Favoritos',
            'arquivo' => 'contatos_Favoritos.html'
        ],
        'Salvar_Familia' => [
            'nome' => 'addNome_Familia',
            'sobrenome' => 'addSobrenome_Familia',
            'email1' => 'addEmail1_Familia',
            'email2' => 'addEmail2_Familia',
            'numero1' => 'addCelular1_Familia',
            'numero2' => 'addCelular2_Familia',
            'endereco' => 'addEndereco_Familia',
            'addAniversario' => 'addAniversario_Familia',
            'arquivo' => 'contatos_Familia.html'
        ],




        'Salvar_grupo1' => [
            'nome' => 'addNome_grupo1',
            'sobrenome' => 'addSobrenome_grupo1',
            'email1' => 'addEmail1_grupo1',
            'email2' => 'addEmail2_grupo1',
            'numero1' => 'addCelular1_grupo1',
            'numero2' => 'addCelular2_grupo1',
            'endereco' => 'addEndereco_grupo1',
            'addAniversario' => 'addAniversario_grupo1',
            'arquivo' => 'contatos_grupo1.html'
        ],
        'Salvar_grupo2' => [
            'nome' => 'addNome_grupo2',
            'sobrenome' => 'addSobrenome_grupo2',
            'email1' => 'addEmail1_grupo2',
            'email2' => 'addEmail2_grupo2',
            'numero1' => 'addCelular1_grupo2',
            'numero2' => 'addCelular2_grupo2',
            'endereco' => 'addEndereco_grupo2',
            'addAniversario' => 'addAniversario_grupo2',
            'arquivo' => 'contatos_grupo2.html'
        ],
        'Salvar_grupo3' => [
            'nome' => 'addNome_grupo3',
            'sobrenome' => 'addSobrenome_grupo3',
            'email1' => 'addEmail1_grupo3',
            'email2' => 'addEmail2_grupo3',
            'numero1' => 'addCelular1_grupo3',
            'numero2' => 'addCelular2_grupo3',
            'endereco' => 'addEndereco_grupo3',
            'addAniversario' => 'addAniversario_grupo3',
            'arquivo' => 'contatos_grupo3.html'
        ],
        'Salvar_grupo4' => [
            'nome' => 'addNome_grupo4',
            'sobrenome' => 'addSobrenome_grupo4',
            'email1' => 'addEmail1_grupo4',
            'email2' => 'addEmail2_grupo4',
            'numero1' => 'addCelular1_grupo4',
            'numero2' => 'addCelular2_grupo4',
            'endereco' => 'addEndereco_grupo4',
            'addAniversario' => 'addAniversario_grupo4',
            'arquivo' => 'contatos_grupo4.html'
        ],
        'Salvar_grupo5' => [
            'nome' => 'addNome_grupo5',
            'sobrenome' => 'addSobrenome_grupo5',
            'email1' => 'addEmail1_grupo5',
            'email2' => 'addEmail2_grupo5',
            'numero1' => 'addCelular1_grupo5',
            'numero2' => 'addCelular2_grupo5',
            'endereco' => 'addEndereco_grupo5',
            'addAniversario' => 'addAniversario_grupo5',
            'arquivo' => 'contatos_grupo5.html'
        ],
        'Salvar_grupo6' => [
            'nome' => 'addNome_grupo6',
            'sobrenome' => 'addSobrenome_grupo6',
            'email1' => 'addEmail1_grupo6',
            'email2' => 'addEmail2_grupo6',
            'numero1' => 'addCelular1_grupo6',
            'numero2' => 'addCelular2_grupo6',
            'endereco' => 'addEndereco_grupo6',
            'addAniversario' => 'addAniversario_grupo6',
            'arquivo' => 'contatos_grupo6.html'
        ],
        'Salvar_grupo7' => [
            'nome' => 'addNome_grupo7',
            'sobrenome' => 'addSobrenome_grupo7',
            'email1' => 'addEmail1_grupo7',
            'email2' => 'addEmail2_grupo7',
            'numero1' => 'addCelular1_grupo7',
            'numero2' => 'addCelular2_grupo7',
            'endereco' => 'addEndereco_grupo7',
            'addAniversario' => 'addAniversario_grupo7',
            'arquivo' => 'contatos_grupo7.html'
        ],
        'Salvar_grupo8' => [
            'nome' => 'addNome_grupo8',
            'sobrenome' => 'addSobrenome_grupo8',
            'email1' => 'addEmail1_grupo8',
            'email2' => 'addEmail2_grupo8',
            'numero1' => 'addCelular1_grupo8',
            'numero2' => 'addCelular2_grupo8',
            'endereco' => 'addEndereco_grupo8',
            'addAniversario' => 'addAniversario_grupo8',
            'arquivo' => 'contatos_grupo8.html'
        ],
    ];

// Identifica o grupo principal (botão "Salvar" clicado)
$grupoPrincipal = null;
foreach ($grupos as $key => $val) {
    if (isset($_POST[$key])) {
        $grupoPrincipal = $key;
        break;
    }
}

if ($grupoPrincipal !== null) {



    // Começa com o grupo principal
    $gruposSelecionados = [$grupoPrincipal];

    // Adiciona os grupos extras marcados nas checkboxes (se houver)
    if (isset($_POST['grupos']) && is_array($_POST['grupos'])) {
        foreach ($_POST['grupos'] as $g) {
            if (!in_array($g, $gruposSelecionados) && isset($grupos[$g])) {
                $gruposSelecionados[] = $g;
            }
        }
    }



$campos = $grupos[$grupoPrincipal];

$nome = $_POST[$campos['nome']] ?? '';
$sobrenome = $_POST[$campos['sobrenome']] ?? '';
$email1 = $_POST[$campos['email1']] ?? '';
$email2 = $_POST[$campos['email2']] ?? '';
$numero1 = $_POST[$campos['numero1']] ?? '';
$numero2 = $_POST[$campos['numero2']] ?? '';
$endereco = $_POST[$campos['endereco']] ?? '';
$addAniversario = $_POST[$campos['addAniversario']] ?? '';




    // HTML do contato
    $linha = 
"<li class='li_Ctt'>$nome $sobrenome

        
    <div class='info'>
        <div class='linhaInfo'><i class='bx bxs-envelope'></i><div class='textoInfo'>$email1<br></div></div>
        <div class='linhaInfo'><i class='bx bxs-mail-open'></i><div class='textoInfo'>$email2<br></div></div>
        <div class='linhaInfo'><i class='bx bxs-phone'></i><div class='textoInfo'>$numero1<br></div></div>
        <div class='linhaInfo'><i class='bx bxs-phone-plus'></i><div class='textoInfo'>$numero2<br></div></div>
        <div class='linhaInfo'><i class='bx bxs-location-x'></i><div class='textoInfo'>$endereco<br></div></div>
        <div class='linhaInfo'><i class='bx bxs-birthday-cake'></i><div class='textoInfo'>$addAniversario<br></div></div>
    </div>
</li>" . PHP_EOL;

    // Salva em todos os grupos selecionados
    foreach ($gruposSelecionados as $grupo) {
        if (isset($grupos[$grupo])) {
            file_put_contents($grupos[$grupo]['arquivo'], $linha, FILE_APPEND);
        }
     }
  }
}

header("Location: home.php");



?>