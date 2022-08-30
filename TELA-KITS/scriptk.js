// linha expansiva da tabela (jQuery)

function showHideRow(row){
    $('#' + row).toggle();
}

// botão de buscar

function searchTableColumns() {
    // Declare variables 
    var input, filter, table, tr, i, j, column_length, count_td;
    column_length = document.getElementById("kits").rows[0].cells.length;
    input = document.getElementById("input-pesq");
    filter = input.value.toUpperCase();
    table = document.getElementById("kits");
    tr = table.getElementsByClassName("parentRow");
    for (i = 0; i < tr.length; i++) { // except first(heading) row
      count_td = 0;
      for(j = 0; j < column_length+1; j++){ // except first column
          td = tr[i].getElementsByTagName("td")[j];
          /* ADD columns here that you want you to filter to be used on */
          if (td) {
            if ( td.innerHTML.toUpperCase().indexOf(filter) > -1)  {            
              count_td++;
            }
          }
      }
      if(count_td > 0){
          tr[i].style.display = "";
      } else {
          tr[i].style.display = "none";
      }
    }
    
  }

// modais

//-----------------------------------------BOTÃO NOVO KIT
function abrirCriarkit()
{
    let modal = document.querySelector('.modal_criar');
    let closePr = document.querySelector('.modal_criar_list')
        
    if (typeof modal == 'undefined' || modal == null)
        return;
        closePr.style.display = 'none';
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    
}
 
//-----------------------------------------BOTÃO CANCELAR KIT
function fecharCriarkit()
{
    let modal = document.querySelector('.modal_criar');
    let modalSalvar = document.querySelector('.body_modal_list');
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'none';
        modalSalvar.style.display = 'none';
}

//-----------------------------------------BOTÃO CRIAR KIT
function proximoCriarkit()
{
    let modal = document.querySelector('.modal_criar_list');

    let closesalvarkit = document.querySelector('.modal_criar')
    
    if (typeof modal == 'undefined' || modal == null)
        return;

        closesalvarkit.style.display = 'none';

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}

//-----------------------------------------BOTÃO VOLTAR KIT
function voltarkit()
{
    let modal = document.querySelector('.modal_criar');
    let closeCriar = document.querySelector('.modal_criar_list');
    
    if (typeof modal == 'undefined' || modal == null)
        return;

        closeCriar.style.display = 'none';

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}

//-----------------------------------------BOTÃO SALVAR KIT
function salvarkit()
{
    let modal = document.querySelector('.modal_criar_list');

    let closesalvarkit = document.querySelector('.modal_criar')
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        closesalvarkit.style.display = 'none';

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}
    
//-----------------------------------------BOTÃO ABRIR MODAL DE INATIVAR ITEM - KIT
function abrirInativaritem()
{
    let modal = document.querySelector('.modal_inativar_item');
        
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    
}

//-----------------------------------------BOTÃO CANCELAR DO MODAL DE INATIVAR ITEM - KIT
function fecharModalInativaritem()
{
    let modal = document.querySelector('.modal_inativar_item');
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'none';
}

//-----------------------------------------BOTÃO ABRIR MODAL DE SAIDA ITEM - KIT

function abrirSaidaitem()
{
    let modal = document.querySelector('.modal_saida_kit');
        
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    
}

//-----------------------------------------BOTÃO CANCELAR DO MODAL DE SAIDA ITEM - KIT

function fecharModalSaidaitem()
{
    let modal = document.querySelector('.modal_saida_kit');
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'none';
}

//-----------------------------------------BOTÃO OK DO MODAL DE SALVAR SAIDA ITEM - KIT

function salvarSaida()
{
    let modal = document.querySelector('.modal_saida_msg');

    let closesalvarsaida = document.querySelector('.modal_saida_kit')
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        closesalvarsaida.style.display = 'none';

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}

function fecharaviso()
{
    let modal = document.querySelector('.modal_saida_msg');

    
    if (typeof modal == 'undefined' || modal == null)
        return;

        modal.style.display = 'none';
        document.body.style.overflow = 'hidden';
}

//-----------------------------------------BOTÃO EDITAR KIT

function abrirEditarKit()
{
    let modal = document.querySelector('.modal_editar');

    if (typeof modal == 'undefined' || modal == null)
        return;

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}
//-----------------------------------------BOTÃO CANCELAR Edição do KIT

function fecharEditarkit()
{
    let modal = document.querySelector('.modal_editar');
    let modalSalvar = document.querySelector('.modal_editar');
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'none';
        modalSalvar.style.display = 'none';
}

//-----------------------------------------BOTÃO SALVAR Edição do KIT

function salvareditarkit()
{
    let modal = document.querySelector('.modal_editar');

    let closesalvarkit = document.querySelector('.modal_editar')
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        closesalvarkit.style.display = 'none';

        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
}

// PESQUISAR ITEM DOS BRINDES


// ADICIONAR BRINDE AO KIT

function adicionaritem(){
    const brinde_k = document.querySelector('.linha-list-brinde')
    const criarlinha = 
    `
    <div class="colunas-list-brinde">
        <div class="fundo-cinza-k">
            <div class="brindes-kit">
                <label for="">Brinde:</label>
                <input type="text" list="brindedokit" placeholder="Busque">
            </div>
            <datalist id="brindedokit">
                <option value=""></option>
            </datalist>
            <div class="quantidade-brinde">
                <label>01</label>
            </div>
        </div>
    </div>
        
    `
    brinde_k.innerHTML += criarlinha
}