<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Eleitor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Eleitor</h1>
        <form action="processa_cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seção">Seção:</label>
                <input type="text" id="seção" name="seção" required>
            </div>
            <div class="form-group">
                <label for="zona">Zona:</label>
                <input type="text" id="zona" name="zona" required>
            </div>
            <div class="form-group">
                <label for="interesses">Interesses:</label>
                <input type="text" id="interesses" name="interesses">
            </div>
            <div class="form-group">
                <label for="eventos">Participação em Eventos:</label>
                <input type="text" id="eventos" name="eventos">
            </div>
            <div class="form-group">
                <label for="doacoes">Doações:</label>
                <input type="text" id="doacoes" name="doacoes">
            </div>
            <div class="form-group">
                <label for="notas">Notas:</label>
                <input type="text" id="notas" name="notas">
            </div>
            <button type="submit">Cadastrar Eleitor</button>
        </form>
    </div>
</body>
</html>
