var item




document.querySelectorAll("button").forEach( function(button) {
    
    button.addEventListener("click", function(event) {

    const el = event.target || event.srcElement;

    const value = el.value;

    console.log(value);

    console.log(item);

    
    alert(passedArray);
  });
  
});