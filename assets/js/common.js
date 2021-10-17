function alertEsqueciMinhaSenha(){
    Swal.fire(
    'Esqueceu sua senha?',
    'Peça para o DBA modificar sua senha manualmente.',
    'question'
    )
}
function alertNenhumUsuarioCadastrado(){
    Swal.fire(
    'Ops...',
    'Nenhum usuário cadastrado no sistema.',
    'error'
    )
}
var countAjuste = 0;
function estenderMenu(){
    if(countAjuste % 2 == '0'){
        var menuVertical = document.getElementById('menuVertical');
        menuVertical.setAttribute("style","width:15%;");
        
        if(document.getElementById('itemHide1')){
            var showItemHide1 = document.getElementById('itemHide1');
            showItemHide1.setAttribute("style", "opacity:1;");    
        }
        
        var showItemHide2 = document.getElementById('itemHide2');
        showItemHide2.setAttribute("style", "opacity:1;");
        
        var showItemHide3 = document.getElementById('itemHide3');
        showItemHide3.setAttribute("style", "opacity:1;");

        if(document.getElementById('itemHide4')){
            var showItemHide4 = document.getElementById('itemHide4');
            showItemHide4.setAttribute("style", "opacity:1;");    
        }
        
        
        /****************Modifica as sections ******************/

        var section = document.getElementById('blocoBody');
        section.setAttribute("style", "max-width:82%; margin:15px 20px 15px auto; left: 0px");

        countAjuste++;
        
    }else{
        var menuVertical = document.getElementById('menuVertical');
        menuVertical.setAttribute("style","width:50px;");
        
        if(document.getElementById('itemHide1')){
            var showItemHide1 = document.getElementById('itemHide1');
            showItemHide1.setAttribute("style", "opacity:1;");    
        }

        
        var showItemHide2 = document.getElementById('itemHide2');
        showItemHide2.setAttribute("style", "opacity:0;");

        var showItemHide3 = document.getElementById('itemHide3');
        showItemHide3.setAttribute("style", "opacity:0;");

        if(document.getElementById('itemHide4')){
            var showItemHide4 = document.getElementById('itemHide4');
            showItemHide4.setAttribute("style", "opacity:1;");    
        }

        /****************Modifica as sections ******************/

        var section = document.getElementById('blocoBody');
        section.setAttribute("style", "max-width:94%;  margin: 15px auto 15px auto;");

        countAjuste++;
    }
}