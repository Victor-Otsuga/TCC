var massas = localStorage.getItem('massav');
var picole = localStorage.getItem('picolev');
var coberturas = localStorage.getItem('coberturav');
var verify = 0
var identificador = 0
var valor = 0
var total = 0
var add = 0
var preco = 0

function abrirAba(){


while (verify < 200){
if (verify ==1){
        valor = 0
        total = 0
        add = 0
        preco = 0
        
}
     identificador = document.getElementById("qtn".concat(verify))

     if (identificador != null){
        valor = document.getElementById("qtn".concat(verify)).value
        preco = document.getElementById("ppct".concat(verify)).value

        document.getElementById("qtn".concat(verify)).value = localStorage.getItem('qtn'.concat(verify));

        if (document.getElementById("qtn".concat(verify)).value == ""){
                document.getElementById("qtn".concat(verify)).value = 1
                localStorage.setItem("qtn", verify);
        }
        
        if (valor == null || "" || NaN){
        add = 0
        }else{
        valor = localStorage.getItem("qtn".concat(verify));
        
        add = (valor * preco)
       

        
        total = total + add
        
        }


     }else{
        add= 0
     }

        verify+=1    
       
if (verify ==200){
        
        total = parseFloat(total).toFixed(2)
        localStorage.setItem("totalv", total);
        
}
     
}









if(massas == 1){
        document.getElementById("massabtn").style.borderTop = "5px solid gray";
        document.getElementById("picolebtn").style.borderTop = "0px";
        document.getElementById("coberturabtn").style.borderTop = "0px";
        



        document.getElementById("tableM").style.display = "grid";
        document.getElementById("tableP").style.display = "none";  
        document.getElementById("tableC").style.display = "none";

        
}else if(picole == 1){
document.getElementById("massabtn").style.borderTop = "0px";
document.getElementById("picolebtn").style.borderTop = "5px solid gray";
document.getElementById("coberturabtn").style.borderTop = "0px";

 
document.getElementById("tableM").style.display = "none";
document.getElementById("tableP").style.display = "grid";  
document.getElementById("tableC").style.display = "none";


}else if(coberturas == 1){

        document.getElementById("massabtn").style.borderTop = "0px";
        document.getElementById("picolebtn").style.borderTop = "0px";
        document.getElementById("coberturabtn").style.borderTop = "5px solid gray";
        

        document.getElementById("tableM").style.display = "none";
        document.getElementById("tableP").style.display = "none"; 
        document.getElementById("tableC").style.display = "grid";
       
        
        
}
}






function opnMassas(){


        // document.getElementById("massabtn").style.borderTop = "5px solid gray";
        // document.getElementById("picolebtn").style.borderTop = "0px";
        // document.getElementById("coberturabtn").style.borderTop = "0px";
        



        // document.getElementById("tableM").style.display = "grid";
        // document.getElementById("tableP").style.display = "none";  
        // document.getElementById("tableC").style.display = "none";
       
        massas=1
        picole=0
        coberturas=0
        abrirAba()

        localStorage.setItem("massav",massas);
        localStorage.setItem("picolev",picole);
        localStorage.setItem("coberturav",coberturas);
        
    
}

function opnPicoles(){

        // document.getElementById("massabtn").style.borderTop = "0px";
        // document.getElementById("picolebtn").style.borderTop = "5px solid gray";
        // document.getElementById("coberturabtn").style.borderTop = "0px";
        
         
        // document.getElementById("tableM").style.display = "none";
        // document.getElementById("tableP").style.display = "grid";  
        // document.getElementById("tableC").style.display = "none";
       
        massas=0
        picole=1
        coberturas=0
        abrirAba()


        localStorage.setItem("massav",massas);
        localStorage.setItem("picolev",picole);
        localStorage.setItem("coberturav",coberturas);
}



function opnCoberturas(){

        // document.getElementById("massabtn").style.borderTop = "0px";
        // document.getElementById("picolebtn").style.borderTop = "0px";
        // document.getElementById("coberturabtn").style.borderTop = "5px solid gray";
        

        // document.getElementById("tableM").style.display = "none";
        // document.getElementById("tableP").style.display = "none"; 
        // document.getElementById("tableC").style.display = "grid";


        massas=0
        picole=0
        coberturas=1
        abrirAba()
       
        localStorage.setItem("massav",massas);
        localStorage.setItem("picolev",picole);
        localStorage.setItem("coberturav",coberturas);
    
}








function addqtd(){

 item1 = item1 + 1



 document.getElementById("qtd1").textContent = item1; 
}

function removeqtd(){



        item1 = item1 - 1

        if(item1 <= 0){
                item1 = 0
        }

        document.getElementById("qtd1").textContent = item1; 
       }


      

       