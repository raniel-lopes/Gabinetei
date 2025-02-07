document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("cadastroForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Impede o envio antes da validação

        let nome = document.getElementById("nome").value.trim();
        let email = document.getElementById("email").value.trim();
        let endereco = document.getElementById("endereco").value.trim();
        let telefone = document.getElementById("telefone").value.trim();
        let sexo = document.getElementById("sexo").value;
        let dataNascimento = document.getElementById("data_nascimento").value;

        // Verifica se algum campo está vazio
        if (!nome || !email || !endereco || !telefone || !sexo || !dataNascimento) {
            alert("Todos os campos são obrigatórios!");
            return;
        }

        // Verifica se o telefone tem pelo menos 10 números (somente dígitos)
        let telefoneNumeros = telefone.replace(/\D/g, ''); // Remove caracteres não numéricos
        if (telefoneNumeros.length < 10) {
            alert("O telefone deve ter pelo menos 10 números!");
            return;
        }

        // Verifica se o email tem "@" e um domínio válido
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, insira um email válido!");
            return;
        }

        // Se passar em todas as validações, envia o formulário
        this.submit();
    });
});
