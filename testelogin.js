function getUsuarios() {
  return JSON.parse(localStorage.getItem('usuarios')) || [];
}
function saveUsuarios(lista) {
  localStorage.setItem('usuarios', JSON.stringify(lista));
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('entrar');
    const userInput = document.getElementById('usuario');
    const passInput = document.getElementById('senha');
  
    console.log('Usuários disponíveis para login:', getUsuarios());
  
    btn.addEventListener('click', () => {
      const user = userInput.value.trim();
      const pass = passInput.value;
      const usuarios = getUsuarios();
  
      const validaLogin = usuarios.some(u => u.login === user && u.passw === pass);
  
      if (validaLogin) {
        // ✅ Salva o estado de login e o nome do usuário
        localStorage.setItem('usuarioLogado', 'true');
        localStorage.setItem('usuario', user);
  
        window.location.href = 'home.php';
      } else {
        alert('[ERRO] Insira os dados corretamente');
      }
    });
  });
  
  