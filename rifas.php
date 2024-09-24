<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>RIFAS TERCEIRÃO</title>
</head>
<script>

</script>
<body>  
    <h1>RIFAS DO TERCEIRÃO</h1>
    <form action="envia.php" method="post">
        <fieldset class="compradores">
            <legend>COMPRADOR</legend>
                <div class="input-single">
                    <input type="text" name="nome" required>
                    <label for="nome">Nome</label><br>
                </div>
                <div class="input-single">
                    <input type="text" name="celular" required>
                <label for="nome">Celular</label><br>
                </div>
                <div class="input-single">
                    <input class="rifas" type="text" name="rifas" required>
                    <label class="rifas" for="rifas">N° de Rifas</label>
                    <button class="btn-ok">OK</button><br>
                </div>
                
            <button class="btn-add">Adicionar Comprador</button>
            
        </fieldset>
        <fieldset class="vendedores">
            <legend>VENDEDOR</legend>
            <div class="input-single">
                <input type="text" name="nomeVendedor" required>
                <label for="vendedor">Nome</label><br>
            </div>
            <div class="input-single">
                <input class="file" type="file" name="comprovante">
                
            </div>
            <div class="input-single">
                <input type="text" name="obs" required><br>
                <label for="obs">Observação</label>
            </div>
                
        </fieldset>
        <button type="submit" name="submit" class="confirmar">Confirmar</button>

    </form>
</body>
</html>