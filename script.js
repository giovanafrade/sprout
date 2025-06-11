// Elementos principais
const toggleBtn = document.getElementById('toggleBtn');
const barraLateral = document.getElementById('barra_lateral');
const overlay = document.getElementById('overlay');
const overlay_tema = document.getElementById('overlay_tema');
const overlay_grupos = document.getElementById('overlay_grupos');

// Botões e menus
const menuSuspenso = document.getElementById('menuSuspenso');
const menuSuspenso_grupos = document.getElementById('menuSuspenso_grupos');
const DropDown_toggle = document.getElementById('DropDown_toggle');
const DropDown_toggle_User = document.getElementById('DropDown_toggle_User');
const DropDown_Config = document.getElementById('DropDown_Config');
const DropDown_User = document.getElementById('DropDown_User');
const tema_toggle = document.getElementById('tema_toggle');

// Ícones e botões de adicionar
const addContato_icon = document.getElementById('addContato_icon');
const addFavoritos_icon = document.getElementById('addFavoritos_icon');
const addGrupos_icon = document.getElementById('addGrupos_icon');
const addContatos_lateral = document.getElementById('addContatos_lateral');
const Add_Grupos = document.getElementById('Add_Grupos');

addGrupos_icon.addEventListener('click', () => {
overlay_grupos.classList.add('ativo');
overlay_grupos.addEventListener('click', () => overlay_grupos.classList.remove('ativo'));
});

overlay.addEventListener('click', () => {
overlay.classList.remove('ativo');
});


// Formulário e campos
const Salvar = document.getElementById('Salvar');
const formCtt = document.getElementById('formCtt');
const camposFormulario = {
  addNome: document.getElementById('addNome'),
  addSobrenome: document.getElementById('addSobrenome'),
  addEmail1: document.getElementById('addEmail1'),
  addEmail2: document.getElementById('addEmail2'),
  addCelular1: document.getElementById('addCelular1'),
  addCelular2: document.getElementById('addCelular2'),
  addEndereco: document.getElementById('addEndereco'),
  addAniversario: document.getElementById('addAniversario')
};

// Campos extras
const addCelular2_div = document.getElementById('addCelular2_div');
const addEmail2_div = document.getElementById('addEmail2_div');
const CelularPlus = document.getElementById('CelularPlus');
const EmailPlus = document.getElementById('EmailPlus');

// Páginas
const paineis = document.querySelectorAll('.Paginas_Storage');
const main_contatos = document.getElementById('main_contatos');
const main_grupos = document.getElementById('main_grupos');
const main_familia = document.getElementById('main_familia');
const main_favoritos = document.getElementById('main_favoritos');

// Grupos e seções
const Familia = document.getElementById('Familia');
const Favoritos = document.getElementById('Favoritos');
const grupos = Array.from({length: 8}, (_, i) => document.getElementById(`grupo${i + 1}`));

// Dropdowns e tema
DropDown_toggle.addEventListener('click', () => DropDown_Config.classList.toggle('ativo'));
DropDown_toggle_User.addEventListener('click', () => DropDown_User.classList.toggle('ativo'));
tema_toggle.addEventListener('click', () => {
  overlay_tema.classList.add('ativo');
  overlay_tema.addEventListener('click', () => overlay_tema.classList.remove('ativo'));
});

// Menu suspenso
menuSuspenso.addEventListener('click', e => e.stopPropagation());
menuSuspenso_grupos.addEventListener('click', e => e.stopPropagation());

// Barra lateral
toggleBtn.addEventListener('click', () => {
  barraLateral.classList.toggle('retraida');
  document.body.classList.toggle('com-barra-retraida');
  toggleBtn.classList.toggle('ativo');
});

// Botões de navegação entre páginas
const botoes = document.querySelectorAll('img[data-alvo]');
botoes.forEach(botao => {
  botao.addEventListener('click', () => {
    const idAlvo = botao.dataset.alvo;
    paineis.forEach(div => {
      if (div.id !== idAlvo) {
        div.classList.remove('ativo');
        localStorage.removeItem(`classe-${div.id}`);
      }
    });
    const alvo = document.getElementById(idAlvo);
    if (alvo) {
      alvo.classList.add('ativo');
      localStorage.setItem(`classe-${idAlvo}`, 'ativo');
    }
  });
});




// Carregamento ao abrir a página
window.addEventListener('DOMContentLoaded', () => {
  paineis.forEach(div => div.classList.remove('ativo'));
  let painelAtivoEncontrado = false;

  for (const div of paineis) {
    const savedClass = localStorage.getItem(`classe-${div.id}`);
    if (savedClass?.includes('ativo')) {
      div.classList.add('ativo');
      painelAtivoEncontrado = true;
      break;
    }
  }

  if (!painelAtivoEncontrado) {
    main_contatos.classList.add('ativo');
    localStorage.setItem(`classe-${main_contatos.id}`, 'ativo');
  }
});

// Botão de adicionar grupo
document.getElementById('btnAdicionarGrupo')?.addEventListener('click', () => {
  console.log('Grupo adicionado com sucesso!');
  ativarPainelGrupos();
});

// Configuração dinâmica do formulário
function configurarFormulario(prefixo) {
  Object.entries(camposFormulario).forEach(([chave, el]) => {
    el.name = `${chave}_${prefixo}`;
    el.id = `${chave}_${prefixo}`;
  });
  Salvar.name = `Salvar_${prefixo}`;
  overlay.classList.toggle('ativo');
}

// Eventos dos ícones e grupos
addContato_icon.addEventListener("click", () => configurarFormulario("Contatos"));
addContatos_lateral.addEventListener('click', () => configurarFormulario("Contatos"));
addFavoritos_icon.addEventListener("click", () => configurarFormulario("Favoritos"));
Favoritos.addEventListener("click", () => configurarFormulario("Favoritos"));
Familia.addEventListener("click", () => configurarFormulario("Familia"));

grupos.forEach((grupo, index) => {
  grupo.addEventListener("click", () => {
    configurarFormulario(`grupo${index + 1}`);
    const Nome_Grupo = document.getElementById(`Nome_Grupos${index + 1}`);
    Nome_Grupo?.classList.toggle('ativo');
  });
});

// Adição de campos extras
CelularPlus.addEventListener('click', () => {
  if (addCelular2_div) {
    addCelular2_div.style.display = addCelular2_div.style.display === 'none' ? 'flex' : 'none';
  }
});

EmailPlus.addEventListener('click', () => {
  if (addEmail2_div) {
    addEmail2_div.style.display = addEmail2_div.style.display === 'none' ? 'flex' : 'none';
  }
});



// CONTADOR E ESTADO INICIAL
let contador = parseInt(localStorage.getItem('contador')) || 0;
const gruposAtivos = JSON.parse(localStorage.getItem('divsAtivas')) || [];

// Atualiza contador com base nas divs ativas
gruposAtivos.forEach(id => {
  const match = id.match(/grupo(\d+)/);
  if (match) {
    const num = parseInt(match[1]);
    if (num > contador) contador = num;
  }
});

// BOTÃO ADICIONAR GRUPO
Add_Grupos.addEventListener('click', () => {
  const iconCount = document.querySelectorAll(".icon_grupos.ativo").length;
  if (iconCount < 8) {
    contador++;

    const divGrupo = document.getElementById("div_grupo" + contador);
    const grupoIcon = document.getElementById("grupo" + contador);

    if (divGrupo) divGrupo.classList.add('ativo');
    if (grupoIcon) grupoIcon.classList.add('ativo');

    overlay_grupos.classList.toggle('ativo');
    document.getElementById('grupo_id').value = contador;

    salvarEstados();
    atualizarVisibilidadeHidden();

  } else {
    alert('limite de grupos atingido');
  }
});

// SALVAR ESTADOS NO LOCALSTORAGE
function salvarEstados() {
  const ativos = Array.from(document.querySelectorAll('.ativo')).map(el => el.id);
  localStorage.setItem('divsAtivas', JSON.stringify(ativos));
  localStorage.setItem('contador', contador);
}

// ATUALIZA VISIBILIDADE DOS ELEMENTOS HIDDEN
function atualizarVisibilidadeHidden() {
  for (let i = 1; i <= 8; i++) {
    const grupo = document.getElementById('div_grupo' + i);
    const hidden = document.getElementById('hidden' + i);
    if (grupo && hidden) {
      hidden.style.display = grupo.classList.contains('ativo') ? 'none' : '';
    }
  }
}

// RECARREGAR ESTADO SALVO AO CARREGAR A PÁGINA
window.addEventListener('DOMContentLoaded', () => {
  const ativos = JSON.parse(localStorage.getItem('divsAtivas')) || [];
  ativos.forEach(id => {
    if (id === 'main_grupos') return; // Ignorar o main_grupos

    const el = document.getElementById(id);
    if (el) el.classList.add('ativo');
  });

  const gruposSalvos = JSON.parse(localStorage.getItem('grupos')) || {};
  for (const grupoId in gruposSalvos) {
    const dados = gruposSalvos[grupoId];
    const destinoNome1 = document.getElementById('Nome_Grupos' + grupoId);
    const destinoNome2 = document.getElementById('Nome_do_Grupo' + grupoId);
    const destinoDescricao = document.getElementById('descr_do_Grupo' + grupoId);

    if (destinoNome1) {
      destinoNome1.innerHTML = `<strong>${dados.nome}</strong>`;
      destinoNome1.classList.add('ativo');
    }
    if (destinoNome2) {
      destinoNome2.innerHTML = `<strong>${dados.nome}</strong>`;
      destinoNome2.classList.add('ativo');
    }
    if (destinoDescricao) {
      destinoDescricao.innerHTML = `<em>${dados.descricao}</em>`;
      destinoDescricao.classList.add('ativo');
    }

    const grupoIcon = document.getElementById('grupo' + grupoId);
    const grupoDiv = document.getElementById('div_grupo' + grupoId);
    if (grupoIcon && !grupoIcon.classList.contains('ativo')) grupoIcon.classList.add('ativo');
    if (grupoDiv && !grupoDiv.classList.contains('ativo')) grupoDiv.classList.add('ativo');
  }

  atualizarVisibilidadeHidden();
});


// ENVIO DO FORMULÁRIO DE GRUPO
const formGrupos = document.getElementById('form_grupos');
if (formGrupos) {
  formGrupos.addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    fetch('grupos.php', {
      method: 'POST',
      body: formData
    })
      .then(resp => resp.json())
      .then(data => {
        const grupoId = data.grupo_id;
        const nome = data.nome;
        const descricao = data.descricao;

        const destinoNome = document.getElementById('Nome_Grupos' + grupoId);
        const destinoNome2 = document.getElementById('Nome_do_Grupo' + grupoId);
        const destinoDescricao = document.getElementById('descr_do_Grupo' + grupoId);

        if (destinoNome) {
          destinoNome.innerHTML = `<strong>${nome}</strong>`;
          destinoNome.classList.add('ativo');
        }

        if (destinoNome2) {
          destinoNome2.innerHTML = `<strong>${nome}</strong>`;
          destinoNome2.classList.add('ativo');
        }

        if (destinoDescricao) {
          destinoDescricao.innerHTML = `<em>${descricao}</em>`;
          destinoDescricao.classList.add('ativo');
        }

        // Salvar no localStorage
        const gruposSalvos = JSON.parse(localStorage.getItem('grupos')) || {};
        gruposSalvos[grupoId] = { nome, descricao };
        localStorage.setItem('grupos', JSON.stringify(gruposSalvos));

        // Limpar campos
        form.querySelector('#addNomeGrupo').value = '';
        form.querySelector('#addDescricao').value = '';
      })
      .catch(error => {
        console.error("Erro ao enviar:", error);
      });
  });
}
