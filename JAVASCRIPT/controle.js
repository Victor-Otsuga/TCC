// funções para abrir e fechar a div configurações

function abreconf() {
    document.getElementById("config-aba").style.height = "400px";
    document.getElementById("config-aba").style.borderLeft = "1px solid black";
    document.getElementById("config-aba").style.borderBottom = "1px solid black";
    document.getElementById("linksconf").style.opacity = 1;
}

function fechaconf() {
    document.getElementById("config-aba").style.height = "0px";
    document.getElementById("config-aba").style.borderLeft = "0px";
    document.getElementById("config-aba").style.borderBottom = "0px solid black";
    document.getElementById("linksconf").style.opacity = 0;
    document.getElementById("linksconf").style.transitionDelay = "0s";
}


function abreconf2() {
    document.getElementById("cadcli_lis").style.width = "450px";
    document.getElementById("cadcli_lis").style.borderLeft = "1px solid black";
    document.getElementById("cadcli_lis").style.borderBottom = "1px solid black";
    document.getElementById("linksconf").style.opacity = 1;
}

function fechaconf2() {
    document.getElementById("cadcli_lis").style.width = "0px";
    document.getElementById("cadcli_lis").style.borderLeft = "0px";
    document.getElementById("cadcli_lis").style.borderBottom = "0px solid black";
    document.getElementById("linksconf").style.opacity = 0;
    document.getElementById("linksconf").style.transitionDelay = "0s";
}


//controle da aba do carrinho de compras

function abrecar() {

    document.getElementById("car-aba").style.width = "450px";
    document.getElementById("car-aba").style.borderLeft = "1px solid black";
    document.getElementById("car-aba").style.borderBottom = "1px solid black";
    document.getElementById("linksconf").style.opacity = 1;

    document.getElementById("config-aba").style.height = "0px";
    document.getElementById("config-aba").style.borderLeft = "0px";
    document.getElementById("config-aba").style.borderBottom = "0px solid black";
    document.getElementById("linksconf").style.opacity = 0;
    document.getElementById("linksconf").style.transitionDelay = "0s";


}

function fechacar() {
    document.getElementById("car-aba").style.width = "0px";
    document.getElementById("car-aba").style.borderLeft = "0px";
    document.getElementById("car-aba").style.borderBottom = "0px solid black";
    document.getElementById("linksconf").style.opacity = 0;
    document.getElementById("linksconf").style.transitionDelay = "0s";


}

function abrecar2() {

    document.getElementById("car-aba").style.width = "450px";
    document.getElementById("car-aba").style.borderLeft = "1px solid black";
    document.getElementById("car-aba").style.borderBottom = "1px solid black";

}

function fechacar2() {
    document.getElementById("car-aba").style.width = "0px";
    document.getElementById("car-aba").style.borderLeft = "0px";
    document.getElementById("car-aba").style.borderBottom = "0px solid black";
 

}


function newPopup() {
    varWindow = window.open(
        'editarope.html',
        'pagina',
        "width=850, height=655, top=500, left=310, scrollbars=no, menubar=no  my_file.htm ', ' null' , ' width = 800, height = 800, toolbar = no , scrollbars = no , location = no, resizable = no ");


}

function noPopup() {
    varWindow = window.close()
}


function goBack() {
    window.history.back()
}



//controle do cadastro de produto


function selectmassa(){

    document.getElementById("semassa").style.display = "block";

}

function selectpicole(){

    document.getElementById("semassa").style.display = "none";

}






function selectpct1(){

    document.getElementById("sepct").style.display = "block";
}

function selectpct0(){

    document.getElementById("sepct").style.display = "none";
}


