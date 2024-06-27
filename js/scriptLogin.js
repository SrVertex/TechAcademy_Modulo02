document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var errorMessage = '';

    if (email.trim() === '') {
        errorMessage += 'O campo de email não pode estar vazio.\n';
    } else {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            errorMessage += 'Formato de email inválido.\n';
        }
    }

    if (password.trim() === '') {
        errorMessage += 'O campo de senha não pode estar vazio.\n';
    }

    if (email.trim() !== 'teste@email.com' || password.trim() !== 'teste1234') {
        errorMessage += 'Email ou senha incorretos.\n';
    }

    if (errorMessage) {
        alert(errorMessage);
    } else {
        alert('Login realizado com sucesso!');
    }
});
