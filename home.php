<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sprout</title>
  <!-- Determinando Links (Css, Google Fonts API) -->
  <link rel="stylesheet" href="style.css">
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- Determinando Script Js -->
  <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>

</head>

<body>
  <!-- Header -->
  <div class="header tema_background">
    <div class="alinhamento_bola_box_header">
      <a href="home.php">
        <img src="icones_de_navegacao/logo.png" class="LogoBranca">
      </a>
      <div class="iconesHeaderPesquisa">
        <div class="barra_de_pesquisa"> <input type="text">
          <div class="bola_box_header"><i class='bxr  bx-search'></i></div>
        </div>
        <!-- Menu  Dropdown (Configurações) -->
        <div class="bola_box_header">
          <i class='bx  bx-gear' id="DropDown_toggle">
            <div class="DropDown_Config" id="DropDown_Config">
              <p id="tema_toggle">Temas</p>
            </div>
          </i>

        </div>
        <!-- Menu Dropdown (Perfil) -->
        <div class="bola_box_header">
          <i class='bx  bxs-user' id="DropDown_toggle_User">
              <div class="DropDown_User" id="DropDown_User">
                <a href="login.html">Trocar perfil</a>
               <a href="index.html">Sair</a>
              </div>
          </i>
      </div>

      </div>
    </div>
    <div class="conteudoHeader"></div>
  </div>





  <!-- Tela dos Grupos -->
  <div id="main_grupos" class="Paginas_Storage">
    <div id="main_grupos_header" class="main_grupos_header">
      <div class="main_grupos_headerDiv1">
        <h1>Grupos</h1>
      </div>
      <div class="main_grupos_headerDiv2">
        <h1 class="wasd">.</h1>
        <div class="addItems_icon" id="addGrupos_icon">
          <i class="bx bxs-plus "></i>
          <h1>Criar</h1>
        </div>
      </div>
    </div>

    <div id="main_grupos_body" class="main_grupos_body">

    <!-- Grupos Padrões -->

      <div>
        <img src="icones_de_navegacao/favoritos_verde.png" class="icon" id="Favoritos" onclick="carregarLista('contatos_favoritos.html')">
          <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p>Favoritos</p></div>
            <div class="descr_do_Grupo"><i><p>Grupo dos Favoritos</p></i></div>
          </div>
      </div>

      <div>
        <img src="icones_de_navegacao/familia.png" class="icon" id="Familia" onclick="carregarLista('contatos_familia.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p>Família</p></div>
           <div class="descr_do_Grupo"><i><p>Grupo da Família</p></i></div>
          </div>
      </div>
      

    <!-- Grupos Dinamicos -->

      <div class="div_grupos" id="div_grupo1">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo1" onclick="carregarLista('contatos_grupo1.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo1"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo1"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo2">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo2" onclick="carregarLista('contatos_grupo2.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo2"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo2"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo3">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo3" onclick="carregarLista('contatos_grupo3.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo3"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo3"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo4">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo4" onclick="carregarLista('contatos_grupo4.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo4"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo4"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo5">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo5" onclick="carregarLista('contatos_grupo5.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo5"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo5"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo6">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo6" onclick="carregarLista('contatos_grupo6.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo6"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo6"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo7">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo7" onclick="carregarLista('contatos_grupo7.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo7"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo7"></p></div>
        </div>
      </div>

      <div class="div_grupos" id="div_grupo8">
        <img src="icones_de_navegacao/grupo.png" class="icon_grupos" id="grupo8" onclick="carregarLista('contatos_grupo8.html')">
        <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p id="Nome_do_Grupo8"></p></div>
            <div class="descr_do_Grupo"><p id="descr_do_Grupo8"></p></div>
        </div>
      </div>



      <div class="hidden" id="hidden1">
      <img src="icones_de_navegacao/favoritos.png" class="icon" onclick="carregarLista('contatos_favoritos.html')">
          <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p></p></div>
            <div class="descr_do_Grupo"><p></p></div>
          </div>
      </div>
      <div class="hidden" id="hidden2">
      <img src="icones_de_navegacao/favoritos.png" class="icon" onclick="carregarLista('contatos_favoritos.html')">
          <div class="infoGrupo">
            <div class="Nome_do_Grupo"><p></p></div>
            <div class="descr_do_Grupo"><p></p></div>
          </div>
      </div>
      
    </div>
  </div>
  
  <!-- Tela de Favoritos -->
  <main id="main_favoritos" class="Paginas_Storage">
    <div class="main_favoritos_header">
      <div class="main_favoritos_headerDiv1">
        <h1>Favoritos</h1>
      </div>
      <div  class="main_favoritos_headerDiv2">
        <h1 class="wasd">.</h1>
        <div class="addGrupos_icon" id="addFavoritos_icon">
          <i class="bx bxs-plus "></i>
          <h1>Adicionar</h1>
        </div>
      </div>
    </div>

    <div class="main_favoritos_body">
      <div id="listafavoritos" class="listafavoritos">

        <script>

          const letras_favoritos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
          // Criar as divisões (A-Z) com <ol>
          const container_favoritos = document.getElementById('listafavoritos');
          letras_favoritos.forEach(letra_favoritos => {
            const grupo_favoritos = document.createElement('div');
            grupo_favoritos.className = 'grupo_favoritos';
            grupo_favoritos.innerHTML =
              `<h1 class="alfabeto_favoritos">${letra_favoritos}
        <ol id="lista_favoritos${letra_favoritos}">
        </ol>
      </h1>`;
            container_favoritos.appendChild(grupo_favoritos);
          });

          document.addEventListener('DOMContentLoaded', () => {

            letras_favoritos.forEach(letra_favoritos => {
              const lista_favoritos = document.getElementById(`lista_favoritos${letra_favoritos}`);
              lista_favoritos.innerHTML = ''; // remove os <li> anteriores
            });


            fetch("contatos_favoritos.html")
              .then(res => {
                if (!res.ok) throw new Error('Erro ao carregar favoritos');
                return res.text();
              })
              .then(data => {
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = data;
                const itens = Array.from(tempDiv.querySelectorAll('li'));

                itens.forEach(item => {
                  // Obtém o nome (antes da <div>)
                  const nomeCompleto = item.childNodes[0].textContent.trim();
                  const letra_favoritos = nomeCompleto.charAt(0).toUpperCase();

                  if (letras_favoritos.includes(letra_favoritos)) {
                    const lista = document.getElementById(`lista_favoritos${letra_favoritos}`);
                    lista.appendChild(item);
                  }
                });
              })
          });





          document.addEventListener('DOMContentLoaded', () => {
            const lista = document.getElementById('listafavoritos');

            lista.addEventListener('click', function (e) {
              const li = e.target.closest('.li_Ctt');
              if (li) {
                console.log('Clique detectado em uma li_Ctt');

                const info = li.querySelector('.info');
                if (info) {
                  info.classList.toggle('ativo');
                } else {
                  console.warn('Div .info não encontrada nesta li.');
                }
              }
            });
          });;
        </script>
      </div>
    </div>
  </main>

  <!-- Tela da Família -->
  <main id="main_familia" class="Paginas_Storage">
    <div class="main_familia_header">
      <div class="main_familia_headerDiv1">
        <h1>Família</h1>
      </div>
      <div class="main_familia_headerDiv2">
        <h1 class="wasd">.</h1>
        <div class="addGrupos_icon" id="addFamilia_icon">
          <i class="bx bxs-plus "></i>
          <h1>Adicionar</h1>
        </div>
      </div>
    </div>

    <div class="main_familia_body">
      <div id="listafamilia" class="listafamilia">

        <script>

          const letras_familia = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
          // Criar as divisões (A-Z) com <ol>
          const container_familia = document.getElementById('listafamilia');
          letras_familia.forEach(letra_familia => {
            const grupo_familia = document.createElement('div');
            grupo_familia.className = 'grupo_familia';
            grupo_familia.innerHTML =
              `<h1 class="alfabeto_familia">${letra_familia}
        <ol id="lista_familia${letra_familia}">
        </ol>
      </h1>`;
            container_familia.appendChild(grupo_familia);
          });

          document.addEventListener('DOMContentLoaded', () => {

            letras_familia.forEach(letra_familia => {
              const lista_familia = document.getElementById(`lista_familia${letra_familia}`);
              lista_familia.innerHTML = ''; // remove os <li> anteriores
            });


            fetch("contatos_familia.html")
              .then(res => {
                if (!res.ok) throw new Error('Erro ao carregar familia');
                return res.text();
              })
              .then(data => {
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = data;
                const itens = Array.from(tempDiv.querySelectorAll('li'));

                itens.forEach(item => {
                  // Obtém o nome (antes da <div>)
                  const nomeCompleto = item.childNodes[0].textContent.trim();
                  const letra_familia = nomeCompleto.charAt(0).toUpperCase();

                  if (letras_familia.includes(letra_familia)) {
                    const lista = document.getElementById(`lista_familia${letra_familia}`);
                    lista.appendChild(item);
                  }
                });
              })
          });





          document.addEventListener('DOMContentLoaded', () => {
            const lista = document.getElementById('listafamilia');

            lista.addEventListener('click', function (e) {
              const li = e.target.closest('.li_Ctt');
              if (li) {
                console.log('Clique detectado em uma li_Ctt');

                const info = li.querySelector('.info');
                if (info) {
                  info.classList.toggle('ativo');
                } else {
                  console.warn('Div .info não encontrada nesta li.');
                }
              }
            });
          });;
        </script>
      </div>
    </div>
  </main>



  <!-- Tela de contatos -->
  <main id="main_contatos" class="Paginas_Storage">

    <div class="main_contatos_header">
      <div class="main_contatos_headerDiv1"><h1>Contatos</h1></div>
      <div class="main_contatos_headerDiv2">
        <div class="addItems_icon" id="addContato_icon"><i class="bx bxs-plus "></i><h1>Criar</h1></div>
      </div>
    </div>

    <div class="main_contatos_body">
      <div id="listaContatos" class="listaContatos">

        <script>

          const letras_Contatos = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
          // Criar as divisões (A-Z) com <ol>
          const container_Contatos = document.getElementById('listaContatos');
          letras_Contatos.forEach(letra_Contatos => {
            const grupo_Contatos = document.createElement('div');
            grupo_Contatos.className = 'grupo_Contatos';
            grupo_Contatos.innerHTML =
              `<h1 class="alfabeto_Contatos">${letra_Contatos}
        <ol id="lista_Contatos${letra_Contatos}">
        </ol>
      </h1>`;
            container_Contatos.appendChild(grupo_Contatos);
          });

          document.addEventListener('DOMContentLoaded', () => {

            letras_Contatos.forEach(letra_Contatos => {
              const lista_Contatos = document.getElementById(`lista_Contatos${letra_Contatos}`);
              lista_Contatos.innerHTML = ''; // remove os <li> anteriores
            });


            fetch("contatos_contatos.html")
              .then(res => {
                if (!res.ok) throw new Error('Erro ao carregar contatos');
                return res.text();
              })
              .then(data => {
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = data;
                const itens = Array.from(tempDiv.querySelectorAll('li'));

                itens.forEach(item => {
                  // Obtém o nome (antes da <div>)
                  const nomeCompleto = item.childNodes[0].textContent.trim();
                  const letra_Contatos = nomeCompleto.charAt(0).toUpperCase();

                  if (letras_Contatos.includes(letra_Contatos)) {
                    const lista = document.getElementById(`lista_Contatos${letra_Contatos}`);
                    lista.appendChild(item);
                  }
                });
              })
          });





          document.addEventListener('DOMContentLoaded', () => {
            const lista = document.getElementById('listaContatos');

            lista.addEventListener('click', function (e) {
              const li = e.target.closest('.li_Ctt');
              if (li) {
                console.log('Clique detectado em uma li_Ctt');

                const info = li.querySelector('.info');
                if (info) {
                  info.classList.toggle('ativo');
                } else {
                  console.warn('Div .info não encontrada nesta li.');
                }
              }
            });
          });;
        </script>

      </div>
    </div>
  </main>
</div>



  <!-- Botão ativar ou desativar menu lateral -->
  <button id="toggleBtn"><img src="icones_de_navegacao/setavoltar.png"></button>
  <div id="barra_lateral" class="retraida tema_background">

    <!-- Menu lateral -->
    <div class="conteudoLateral" id="conteudoLateral">

      <nav class="menu-lateral">
        <ul>
          <li class="item-menu1">
            <img src="icones_de_navegacao/contatos.png" id="pagina_contatos" data-alvo="main_contatos"
              class="Paginas_Storage">
            <span class="nome-item-menu1">Contatos</span>
          </li>
          <li class="item-menu">
            <img src="icones_de_navegacao/favoritos_menu.png" id="pagina_favoritos" data-alvo="main_favoritos"
              class="Paginas_Storage">
            <span class="nome-item-menu">Favoritos</span>
          </li>
          <li class="item-menu">
            <img src="icones_de_navegacao/grupos_menu.png" id="pagina_grupos" data-alvo="main_grupos"
              class="Paginas_Storage">
            <span class="nome-item-menu">Grupos</span>
          </li>
          <li class="addcontato_bt">
            <img src="icones_de_navegacao/adicionarnovo.png" id="addContatos_lateral" onclick="carregarLista('contatos_contatos.html')">
            <span class="nome-addctt">Criar</span>
          </li>
        </ul>
      </nav>
    </div>

  </div>

  <script defer src="script.js"></script>

  <!-- Overlay que fecha o menu suspenso -->
  <div id="overlay" class="overlay">
    <!-- Menu suspenso ao adicionar contatos e contatos ao grupo -->
    <div class="menuSuspenso" id="menuSuspenso">

      <div class="menuItem2">
        <div class="div1" id="div1">
          <!-- Formulário para obter informações do contato -->
          <form class="formCtt" id="formCtt" action="lista.php" method="post">
            <div class="input_box"><i class='bx  bx-user'></i> <input type="text" class="addNome" id="addNome" name="addNome" placeholder="Nome"></div>
            <div class="input_box"><i class='bx  bx-user-id-card'></i> <input type="text" class="addSobrenome"id="addSobrenome" name="addSobrenome" placeholder="Sobrenome"></div>
            <div class="input_box"><i class='bx  bx-envelope-alt'></i><input type="email" class="addEmail1"id="addEmail1" name="addEmail1" placeholder="E-mail"></div>
            <div class="input_box" id="addEmail2_div"><i class='bx  bxs-plus'></i><input type="email" class="addEmail2"id="addEmail2" name="addEmail2" placeholder="E-mail"></div>
            <div class="button_box"><i class="bx bxs-plus "></i><input type="button" class="EmailPlus" id="EmailPlus"name="EmailPlus" value="Adicionar novo E-mail"></div>
            <div class="input_box"><i class='bx  bx-phone'></i> <input type="number" class="addCelular1"id="addCelular1" name="addCelular1" placeholder="Celular"></div>
            <div class="input_box" id="addCelular2_div"><i class='bx  bxs-plus'></i><input type="number"class="addCelular2" id="addCelular2" name="addCelular2" placeholder="Celular"></div>
            <div class="button_box"><i class="bx bxs-plus"></i><input type="button" class="CelularPlus" id="CelularPlus"name="CelularPlus" value="Adicionar novo número"></div>
            <div class="input_box"><i class='bx  bx-location-x'></i> <input type="text" class="addEndereco"id="addEndereco" name="addEndereco" placeholder="Endereço"></div>
            <div class="input_box"><i class='bx  bx-birthday-cake'></i> <input type="date" class="addAniversario"id="addAniversario" name="addAniversario" placeholder="Data de Aniversário"></div>
            <div class="Salvar_box"><i class="bx bxs-check "></i><input type="submit" class="Salvar" id="Salvar"name="Salvar" value="Salvar"></div>
        </div>
        <div class="div2" id="div2">
      <div class="alinhamento_bola_box">

        <!-- <div id="Nome_Grupos1" class="Nome_Grupos"></div>
        <div id="Nome_Grupos2" class="Nome_Grupos"></div>
        <div id="Nome_Grupos3" class="Nome_Grupos"></div>
        <div id="Nome_Grupos4" class="Nome_Grupos"></div>
        <div id="Nome_Grupos5" class="Nome_Grupos"></div>
        <div id="Nome_Grupos6" class="Nome_Grupos"></div>
        <div id="Nome_Grupos7" class="Nome_Grupos"></div>
        <div id="Nome_Grupos8" class="Nome_Grupos"></div> -->
        
        <!-- Seleção de grupos para adicionar contatos ao grupo -->
        <div id="Div_Grupos_checkbox">
            <label class="bola_box" title="Favoritos">
              <input type="checkbox" name="grupos[]" value="Salvar_Favoritos" class="grupo-checkbox">
              <i class='bx  bxs-star grupo_checkbox' ></i>
            </label>
            <label class="bola_box" title="Família">
              <input type="checkbox" name="grupos[]" value="Salvar_Familia" class="grupo-checkbox">
              <i class='bx  bxs-building-house grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 1">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo1" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox' ></i> 
            </label>
            <label class="bola_box" title="Grupo 2">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo2" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 3">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo3" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 4">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo4" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 5">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo5" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 6">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo6" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 7">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo7" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
            <label class="bola_box" title="Grupo 8">
              <input type="checkbox" name="grupos[]" value="Salvar_grupo8" class="grupo-checkbox">
              <i class='bxr  bxs-community grupo_checkbox'></i>
            </label>
          </div>
      </div>
</form>
          <!-- Formulário para adicionar Grupo -->
          <form class="div2Grupo" id="div2Grupo" action="lista.php" method="post">

            <div class="div2GrupoAdd">
              <div id="listaContatos_overlay" class="listaContatos">
                <!-- Aparecer lista de contatos -->
                <script>
                  const letras_Contatos_overlay = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
                  // Criar as divisões (A-Z) com <ol>
                  const container_Contatos_overlay = document.getElementById('listaContatos_overlay');
                  letras_Contatos_overlay.forEach(letra_Contatos_overlay => {
                    const grupo_Contatos_overlay = document.createElement('div');
                    grupo_Contatos_overlay.className = 'grupo_Contatos_overlay';
                    grupo_Contatos_overlay.innerHTML =
                      `<h1 class="alfabeto_Contatos_overlay">${letra_Contatos_overlay}
                        <ol id="lista_Contatos_overlay${letra_Contatos_overlay}"></ol>
                       </h1>`;
                    container_Contatos_overlay.appendChild(grupo_Contatos_overlay);
                  });
                    
                    function carregarLista(arquivo) {

                    letras_Contatos_overlay.forEach(letra_Contatos_overlay => {
                      const lista_Contatos_overlay = document.getElementById(`lista_Contatos_overlay${letra_Contatos_overlay}`);
                      lista_Contatos_overlay.innerHTML = ''; // remove os <li> anteriores
                    });

                    fetch(arquivo)
                      .then(res => {
                        if (!res.ok) throw new Error('Erro ao carregar contatos_overlay');
                        return res.text();
                      })
                      .then(data => {
                        const tempDiv = document.createElement('div');
                        tempDiv.innerHTML = data;
                        const itens = Array.from(tempDiv.querySelectorAll('li'));

                        itens.forEach(item => {
                          // Obtém o nome (antes da <div>)
                          const nomeCompleto = item.childNodes[0].textContent.trim();
                          const letra_Contatos_overlay = nomeCompleto.charAt(0).toUpperCase();

                          if (letras_Contatos_overlay.includes(letra_Contatos_overlay)) {
                            const lista = document.getElementById(`lista_Contatos_overlay${letra_Contatos_overlay}`);
                            lista.appendChild(item);
                          }
                        });
                      })
                      .catch(err => {
                        console.error(err);
                        alert("Não foi possível carregar os contatos_overlay.");
                      });

                    }




                  document.addEventListener('DOMContentLoaded', () => {
                    const lista = document.getElementById('listaContatos_overlay');

                    lista.addEventListener('click', function (e) {
                      const li = e.target.closest('.li_Ctt');
                      if (li) {
                        console.log('Clique detectado em uma li_Ctt');

                        const info = li.querySelector('.info');
                        if (info) {
                          info.classList.toggle('ativo');
                        } else {
                          console.warn('Div .info não encontrada nesta li.');
                        }
                      }
                    });
                  });;
                </script>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Overlay para fechar Menu Suspenso dos grupos -->
  <div id="overlay_grupos" class="overlay_grupos">
    <!-- Menu suspenso dos Grupo -->
    <div id="menuSuspenso_grupos">
      <div class="alignGrupos">
        <!-- Formulário para obter informações do novo grupo -->
        <form id="form_grupos" method="POST">
          <div class="input_box"><i class='bxr  bxs-community'  ></i> </i><input type="text" class="addNome" id="addNomeGrupo" name="addNome" placeholder="Nome do Grupo"></div>
          <input type="hidden" name="grupo_id" id="grupo_id">
          <div class="input_box"><i class='bxr  bx-article'></i><textarea cols="30" rows="5" class="addDescricaoGrupo" id="addDescricao" name="addDescricao" placeholder="Descrição"></textarea></div>
          <div class="Salvar_box">
            <i class="bx bxs-check "></i><input type="submit" class="Salvar" id="Add_Grupos" name="Salvar" value="Salvar">
          </div>
        </form>

<!-- Aparição dos grupos -->
<script>
document.getElementById('form_grupos').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const formData = new FormData(form);

  fetch('grupos.php', {
    method: 'POST',
    body: formData
  })
  .then(resp => resp.json())
  .then(data => {
  console.log('Dados recebidos:', data);
  const grupoId = data.grupo_id;
  const nome = data.nome;
  const descricao = data.descricao;

  const destinoNome = document.getElementById('Nome_Grupos' + grupoId);
  const destinoNome2 = document.getElementById('Nome_do_Grupo' + grupoId);
  const destinoDescricao = document.getElementById('descr_do_Grupo' + grupoId);

  if (!destinoNome) console.warn('Div Nome_Grupos' + grupoId + ' não encontrada');
  if (!destinoDescricao) console.warn('Div descr_do_Grupo' + grupoId + ' não encontrada');

  if (destinoNome) {
    destinoNome.innerHTML = `<p>${nome}</p>`;
    destinoNome2.innerHTML = `<p>${nome}</p>`;
  }

  if (destinoDescricao) {
    destinoDescricao.innerHTML = `<em>${descricao}</em>`;
  }

  // Limpar campos
  form.querySelector('#addNomeGrupo').value = '';
  form.querySelector('#addDescricao').value = '';


})
  .catch(error => {
    console.error("Erro ao enviar:", error);
  });
});
</script>




      </div>  
    </div>
  </div>




  <!-- Overlay do menu suspenso do Tema -->
  <div id="overlay_tema" class="overlay_tema">
    <!-- Menu suspenso do tema -->
    <div class="menuSuspenso_Cores" id="menuSuspenso_Cores">
      <div class="color_temas">
        <div id="colorWheel"></div>
        <div id="Tema_Controles" class="Tema_Controles">
          <button id="resetBtn"><h5>Resetar para cor inicial</h5></button>
          <button id="SalvarFavBtn"><h5>Salvar cor favorita</h5></button>
          <button id="desfazerCorBtn"><h5>Desfazer cor aplicada</h5></button>
          <button id="desfazerFavBtn"><h5>Desfazer último favorito</h5></button>
          <div id="favoritosContainer" class="Favoritos_Container"></div>
        </div>
      </div>
<script>
const menuSuspenso_Cores = document.getElementById('menuSuspenso_Cores');
menuSuspenso_Cores.addEventListener('click', (event) => {
  event.stopPropagation();
});

const corInicial = localStorage.getItem('corSelecionada') || '#00b67a';

// Função para comparar se duas cores hex são suficientemente diferentes
function coresSaoDiferentes(cor1, cor2, limiar = 100) {
  // Converte hex para RGB
  function hexToRgb(hex) {
    hex = hex.replace('#', '');
    return {
      r: parseInt(hex.substring(0,2),16),
      g: parseInt(hex.substring(2,4),16),
      b: parseInt(hex.substring(4,6),16)
    };
  }
  const c1 = hexToRgb(cor1);
  const c2 = hexToRgb(cor2);
  // Calcula distância Euclidiana simples entre as cores
  const diff = Math.sqrt(
    Math.pow(c1.r - c2.r, 2) +
    Math.pow(c1.g - c2.g, 2) +
    Math.pow(c1.b - c2.b, 2)
  );
  return diff > limiar;
}

// Histórico de cores aplicadas (inicia com corInicial)
let corHistorico = [corInicial];

const colorPicker = new iro.ColorPicker("#colorWheel", {
  width: 250,
  color: corInicial,
  borderWidth: 2,
  borderColor: "#ccc"
});

const aplicarCor = (cor) => {
  const divs = document.querySelectorAll('.tema_background');
  divs.forEach(div => {
    div.style.backgroundColor = cor;
  });
};

// Salva favorito
const salvarFavorito = (cor) => {
  let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
  if (!favoritos.includes(cor)) {
    favoritos.push(cor);
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
    mostrarFavoritos();
  }
};

// Mostra favoritos
const mostrarFavoritos = () => {
  const container = document.getElementById('favoritosContainer');
  container.innerHTML = ''; // limpar
  const favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

  favoritos.forEach(cor => {
    const el = document.createElement('div');
    el.className = 'fav';
    el.style.backgroundColor = cor;
    el.title = cor;
    el.onclick = () => {
      const corAtual = colorPicker.color.hexString;
      if (coresSaoDiferentes(corAtual, cor)) {
        corHistorico.push(corAtual);
      }
      colorPicker.color.hexString = cor;
      aplicarCor(cor);
      localStorage.setItem('corSelecionada', cor);
    };
    container.appendChild(el);
  });
};

// Aplica cor inicial e mostra favoritos
aplicarCor(corInicial);
mostrarFavoritos();

// Evento de mudança de cor: adiciona no histórico se cor for diferente da última
colorPicker.on('color:change', function (color) {
  const corHex = color.hexString;
  const ultimaCor = corHistorico[corHistorico.length - 1] || corInicial;

  if (coresSaoDiferentes(corHex, ultimaCor)) {
    corHistorico.push(corHex);
  }
  aplicarCor(corHex);
  localStorage.setItem('corSelecionada', corHex);
});

// Botão Resetar
document.getElementById('resetBtn').addEventListener('click', () => {
  if (confirm('Tem certeza que deseja resetar para verde?')) {
    const corAtual = colorPicker.color.hexString;
    if (coresSaoDiferentes(corAtual, '#00b67a')) {
      corHistorico.push(corAtual);
    }
    const branco = '#00b67a';
    aplicarCor(branco);
    colorPicker.color.hexString = branco;
    localStorage.removeItem('corSelecionada');
  }
});

// Botão Desfazer cor aplicada: volta para última cor significativamente diferente de uma vez
document.getElementById('desfazerCorBtn').addEventListener('click', () => {
  if (corHistorico.length > 1) {
    let atual = corHistorico.pop(); // remove cor atual

    // Busca a última cor diferente real no histórico
    let anterior = corHistorico[corHistorico.length - 1];
    while (
      corHistorico.length > 1 &&
      !coresSaoDiferentes(atual, anterior)
    ) {
      corHistorico.pop();
      anterior = corHistorico[corHistorico.length - 1];
    }

    // Aplica imediatamente a última cor significativamente diferente
    colorPicker.color.hexString = anterior;
    aplicarCor(anterior);
    localStorage.setItem('corSelecionada', anterior);
  } else {
    alert("Não há cor anterior para desfazer.");
  }
});

// Botão Desfazer último favorito salvo
document.getElementById('desfazerFavBtn').addEventListener('click', () => {
  let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];
  if (favoritos.length > 0) {
    favoritos.pop(); // remove o último
    localStorage.setItem('favoritos', JSON.stringify(favoritos));
    mostrarFavoritos();
  } else {
    alert('Não há favoritos para remover.');
  }
});

// Botão salvar como favorito
document.getElementById('SalvarFavBtn').addEventListener('click', () => {
  const corAtual = colorPicker.color.hexString;
  salvarFavorito(corAtual);
});
</script>

    </div>
  </div>



</body>

</html>