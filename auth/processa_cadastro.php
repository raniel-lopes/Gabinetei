<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gabinetei";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Capturar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];

// Inserir no banco de dados
$sql = "INSERT INTO eleitores (nome, email, endereco, telefone, sexo, data_nascimento) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nome, $email, $endereco, $telefone, $sexo, $data_nascimento);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
