 function download(){
    const item = document.querySelector(".tabelafinal");
    var opt = {
        margin:       0.3,
        filename:     'venda.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait', size: 0.4 }
        
      };
      // New Promise-based usage:
      html2pdf().set(opt).from(item).save();
  

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
  var verify2 = 0
  var valor = 0
  var numeracao2 = 0
  var numeracao = 0
  var contador_itens = 0
  var calc1 = 0
  var result = 0
  var totalAbsoluto = 0



  while (verify2 < 200) {
    identificador = localStorage.getItem("qtn".concat(verify2));
    if (identificador > 0 && identificador != null ) {

      contador_itens += 1
    }
  verify2+=1
  }

  let novoItem =
  ` <table class="table" id="thetabela">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Produto</th>
          <th scope="col">Tamanho</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preço do Pacote</th>
          <th scope="col">Preço Total</th>
      </tr>
    </thead>`
    
      document.getElementById("conteudo").innerHTML += novoItem;

  while (contador_itens != 0){
    numeracao +=1
    let novoItem =
    `
    <tbody>
        <tr>
            <td id="idfin${numeracao}"> id prod</td>
            <td id="saborfin${numeracao}">saborprovisirio</td>
            <td id="tamfin${numeracao}">tamanho</td>
            <td id="qtnfin${numeracao}" >qtn </td>
            <td id="precofin${numeracao}" >preco pacote</td>
            <td id="valorfin${numeracao}" > preco total</td>
        </tr>
      </tbody>
    `
    document.getElementById("thetabela").innerHTML += novoItem;
    contador_itens -= 1

  }

  let novoItem2 =
  `<tr>
  <th scope="row">Preço Final</th>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td id="precoAbsoluto"> 0 </td>
</tr>

</tbody>
`

document.getElementById("thetabela").innerHTML += novoItem2;

  while (verify < 200) {
    if (verify == 1) {
      valor = 0

    }
    identificador = localStorage.getItem("qtn".concat(verify));
    
    if (identificador > 0 && identificador != null ) {
      var sabor = 0
      numeracao2 += 1
      var quantidade = 0
      console.log(verify)

      
      
      valor = localStorage.getItem("ppct".concat(verify))
      valor = parseInt(valor).toFixed(2)
      document.getElementById("precofin".concat(numeracao2)).innerHTML = "R$ ".concat(valor)


      quantidade = localStorage.getItem("qtn".concat(verify))
      document.getElementById("qtnfin".concat(numeracao2)).innerHTML = quantidade

      tamanho = localStorage.getItem("tmnu".concat(verify))
      if (tamanho==1){
        tamanho = "1 Litro"
      }else if(tamanho ==2){
        tamanho = "5 Litros"
      }else{
        tamanho = "Indefinido"
      }
      document.getElementById("tamfin".concat(numeracao2)).innerHTML = tamanho


      sabor = localStorage.getItem("sabor".concat(verify))
      document.getElementById("saborfin".concat(numeracao2)).innerHTML = sabor

      document.getElementById("idfin".concat(numeracao2)).innerHTML = verify


      
      




      result = (valor*quantidade)
      totalAbsoluto += result


      result = parseInt(result).toFixed(2)
      document.getElementById("valorfin".concat(numeracao2)).innerHTML = "R$ ".concat(result)


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