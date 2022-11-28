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
var qtn = 0



function maisum(id) {

  var convert = document.getElementById("qtn".concat(id)).value
  var qtn = parseInt(convert)

  qtn += 1

  document.getElementById("qtn".concat(id)).value = qtn
}

function menosum(id) {

  var convert = document.getElementById("qtn".concat(id)).value
  var qtn = parseInt(convert)
  qtn -= 1

  if (qtn <= 0) {
    qtn = 0
  }
  
  document.getElementById("qtn".concat(id)).value = qtn

}