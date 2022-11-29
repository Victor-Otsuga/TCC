// var item




// document.querySelectorAll("button").forEach( function(button) {

//     button.addEventListener("click", function(event) {

//     const el = event.target || event.srcElement;

//     const value = el.value;

//     console.log(value);

//     console.log(item);


//     alert(passedArray);
//   });

// });

var id = 0
var qtn = 0.0
var total = 0.0
var valorUni =0.0
var totalProd = 0.0
var tampct = 0
var prepct = 0
var desconto = 0
var verificar = 0
var aplicar = 1



function maisum(id) {

  convert = document.getElementById("qtn".concat(id)).value
  qtn = parseInt(convert)


  qtn += 1

  document.getElementById("qtn".concat(id)).value = qtn

  convert = document.getElementById("valor".concat(id)).value
  valorUni = parseFloat(convert)
  valorUni.toFixed(2)

  total += valorUni
   

  tampct = document.getElementById("tpct".concat(id)).value
  prepct = document.getElementById("ppct".concat(id)).value



  //aplicando desconto do pacote

    desconto = prepct - (valorUni*tampct) 

    verificar = qtn/tampct

    if(Number.isInteger(verificar)){


   
    
    total+= desconto
  }

 
  document.getElementById("valorTotal").textContent = "Total: R$ ".concat( total.toFixed(2))
  
}

function menosum(id) {

  convert = document.getElementById("qtn".concat(id)).value
  qtn = parseInt(convert)
  qtn -= 1

  if (qtn < 0) {
    qtn = 0
  }else{


  
  document.getElementById("qtn".concat(id)).value = qtn
  tampct = document.getElementById("tpct".concat(id)).value
  prepct = document.getElementById("ppct".concat(id)).value

  valorUni = document.getElementById("valor".concat(id)).value

  total -= valorUni



  desconto = prepct - (valorUni*tampct) 

  verificar = qtn/tampct

  if(Number.isInteger(verificar+0.1) && verificar != 0){


  
  total -= desconto
  }

  document.getElementById("valorTotal").textContent = "Total: R$ ".concat( total.toFixed(2))

}
}




function salvarPreco(id){
  


  var id = id.replace(/[^0-9]/g,'')



  convert = document.getElementById("qtn".concat(id)).value
  qtn = parseInt(convert)

  if (qtn == null){
    qtn =  0
  }
  
  convert = document.getElementById("valor".concat(id)).value
  valorUni = parseFloat(convert)
  valorUni.toFixed(2)
  

  diferenca = qtn 

  document.getElementById("diferenca".concat(id)).value = diferenca

  

}


function mudouPreco(id){

 var id = id.replace(/[^0-9]/g,'')


 diferenca = document.getElementById("diferenca".concat(id)).value
 tampct = document.getElementById("tpct".concat(id)).value
 prepct = document.getElementById("ppct".concat(id)).value


 
  

  

  convert = document.getElementById("qtn".concat(id)).value

  if (convert ==""){
  convert =  0
  document.getElementById("qtn".concat(id)).value = convert
  total = total - diferenca
  total.toFixed(2)
  document.getElementById("valorTotal").textContent = "Total: R$ ".concat( total.toFixed(2))
  }else{


  qtn = parseInt(convert)
  

  total = total + (valorUni * qtn)
  total = total - (diferenca * valorUni)

  total.toFixed(2)



  desconto = prepct - (valorUni*tampct) 

  verificar = qtn/tampct

  if( verificar >= 1){

verificar =parseInt(verificar)

desconto = (desconto * verificar)
  
  total += desconto
  }

  document.getElementById("valorTotal").textContent = "Total: R$ ".concat( total.toFixed(2))

}


  
  document.getElementById("valorTotal").textContent = "Total: R$ ".concat( total.toFixed(2))

}





