function showHideRow(row){
    $('#' + row).toggle();
}

// modal
function abrirCriarkit(mn)
{
    let modal = document.querySelector('.modal_criar');
        
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    
}

function fecharCriarkit(mn)
{
    let modal = document.querySelector('.modal_criar');
    
    if (typeof modal == 'undefined' || modal == null)
        return;
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
}