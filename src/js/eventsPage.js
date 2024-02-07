if(document.querySelector('#year') !== null){


var mySelect = document.querySelector('#year');
 mySelect.onchange = (event) => {
     var value = mySelect.value;
     window.location = value;
}}