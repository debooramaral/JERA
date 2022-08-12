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

// modal criar kit

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

//multiselect

var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}


