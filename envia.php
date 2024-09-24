<?php
    include_once('config.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];
        $rifas = $_POST['rifas'];
        $nomeVendedor = $_POST['nomeVendedor'];
        
        // Verificar se os campos opcionais estão definidos
        $comprovante = isset($_POST['comprovante']) ? $_POST['comprovante'] : '';
        $obs = isset($_POST['obs']) ? $_POST['obs'] : '';
        
        // Inserir novo registro na tabela de rifas
        $result_rifas = mysqli_query($conexao, "INSERT INTO rifas (rifa_numero) VALUES ($rifas)");
        
        // Recuperar o ID da rifa recém-inserida
        $rifa_id = mysqli_insert_id($conexao);
        
        // Inserir novo registro na tabela de compradores associando-o à rifa
        $result_compradores = mysqli_query($conexao, "INSERT INTO compradores (comp_nome, comp_celular, rifa_id) VALUES ('$nome', '$celular', $rifa_id)");
        
        // Inserir novo registro na tabela de vendedores
        $result_vendedores = mysqli_query($conexao, "INSERT INTO vendedores (vende_nome) VALUES ('$nomeVendedor')");
        
        // Recuperar o ID do vendedor recém-inserido
        $vendedor_id = mysqli_insert_id($conexao);
        
        // Inserir novo registro na tabela de vendas associando o vendedor e o comprador
        $result_venda = mysqli_query($conexao, "INSERT INTO venda (vende_id, comp_id) VALUES ($vendedor_id, LAST_INSERT_ID())");
    }
?>
