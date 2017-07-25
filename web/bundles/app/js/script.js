var cat = document.querySelectorAll('.categ'); 

  // Changes color of category tag
  for (var i = 0; i < cat.length; i++) {
    if (cat[i].textContent == "Copyright") {
      cat[i].firstChild.style.color = "#06D6A0";
    } else if (cat[i].textContent == "Copyleft") {
      cat[i].firstChild.style.color = "#1B9AAA"; 
    } else if (cat[i].textContent == "GNU") {
      cat[i].firstChild.style.color = "#EF476F"; 
    }
  }