var massas = localStorage.getItem('massav');
var picole = localStorage.getItem('picolev');
var coberturas = localStorage.getItem('coberturav');

var item1 = 0
document.getElementById("qtd1").textContent = item1; 





function abrirAba(){




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


      