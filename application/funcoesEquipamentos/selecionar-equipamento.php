<?php
    // Imports
    require_once '../class/BancoDeDados.php';

    // Validação
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    if ($id == '') {
        echo json_encode(0);
        exit;
    }

    // Banco de dados
    $banco = new BancoDeDados;
    $sql = 'SELECT * FROM equipamentos WHERE id_equipamento = ?';
    $params = [$id];
    $dados = $banco->selecionarRegistro($sql, $params);
    echo json_encode($dados);
