 function download(){
    const item = document.querySelector(".tabelafinal");
    var opt = {
        margin:       1,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };
      // New Promise-based usage:
      html2pdf().set(opt).from(item).save();
      html2pdf().set(opt).from(item).print();


var verify = 0
  var valor = 0

  while (verify < 200) {
    if (verify == 1) {
      valor = 0

    }
    identificador = localStorage.getItem("qtn".concat(verify));

    if (identificador > 0 && identificador != null ) {
      localStorage.setItem("qtn".concat(verify), 0);
    }
    verify += 1

    if(verify==200){
      localStorage.setItem("totalv", 0);
    }
  }


 }


function mudarValor() {

  var verify = 0
  var valor = 0

  var calc1 = 0
  var result = 0
  var totalAbsoluto = 0

  while (verify < 200) {
    if (verify == 1) {
      valor = 0

    }
    identificador = localStorage.getItem("qtn".concat(verify));

    if (identificador > 0 && identificador != null ) {
      valor = localStorage.getItem("qtn".concat(verify));
      console.log(valor)
      console.log(verify)
      document.getElementById("qtnfin".concat(verify)).innerHTML = valor

      calc1 = document.getElementById("precofin".concat(verify)).innerHTML
      
      result = (valor*calc1)
      totalAbsoluto += result


      result = parseInt(result).toFixed(2)
      document.getElementById("valorfin".concat(verify)).innerHTML = "R$ ".concat(result)


      
    }
    verify += 1
    if(verify==200){
      totalAbsoluto = parseInt(totalAbsoluto).toFixed(2)
      document.getElementById("precoAbsoluto").innerHTML = "R$ ".concat(totalAbsoluto)
    }
    
  }
}

function limpando(){
  var verify = 0
  var valor = 0

  while (verify < 200) {
    if (verify == 1) {
      valor = 0

    }
    identificador = localStorage.getItem("qtn".concat(verify));

    if (identificador > 0 && identificador != null ) {
      localStorage.setItem("qtn".concat(verify), 0);
    }
    verify += 1

    if(verify==200){
      localStorage.setItem("totalv", 0);
    }
  }
}