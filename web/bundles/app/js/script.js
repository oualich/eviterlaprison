var elem = document.querySelectorAll('.categ'); 

  // Changes color of category tag
  for (var i = 0; i < elem.length; i++) {
    if (elem[i].textContent.match("GNU")) {
      elem[i].style.backgroundColor = "#06D6A0";
    } else if (elem[i].textContent.match("Copyright")) {
      elem[i].style.backgroundColor = "#1b9aaa"; 
    } else if (elem[i].textContent.match("Copyleft")) {
      elem[i].style.backgroundColor = "#EF476F"; 
    } else if (elem[i].textContent.match("Open Source")) {
      elem[i].style.backgroundColor = "#FFC43D"; 
    }
  }