function validarContato() {
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const mensagem = document.getElementById('mensagem').value;

  if (nome === '' || email === '' || mensagem === '') {
    Swal.fire('Erro!', 'Por favor, preencha todos os campos.', 'error');
    return false;
  }

  if (!email.includes('@') || !email.includes('.')) {
    Swal.fire('Erro!', 'Digite um email válido.', 'warning');
    return false;
  }

  return true;
}

function validarPedido() {
  const pizza = document.getElementById('pizza').value;
  const quantidade = document.getElementById('quantidade').value;

  if (pizza === '' || quantidade <= 0) {
    Swal.fire('Atenção!', 'Selecione uma pizza e informe uma quantidade válida.', 'info');
    return false;
  }

  return true;
}

function validarLogin() {
  const usuario = document.getElementById('usuario').value;
  const senha = document.getElementById('senha').value;

  if (usuario === '' || senha.length < 4) {
    Swal.fire('Erro!', 'Usuário obrigatório e senha com pelo menos 4 caracteres.', 'error');
    return false;
  }

  return true;
}
