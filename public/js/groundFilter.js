
function searchMain() {
  var x = document.getElementById("mainSelection").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("mainSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("main");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function searchIndoor() {
  var x = document.getElementById("indoorSelection").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("indoorSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("indoor");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function searchHapugala() {
  var x = document.getElementById("hapugalaSelection").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("hapugalaSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("hapugalakarapitiya");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function searchKarapitiya() {
  var x = document.getElementById("karapitiyaSelection").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("karapitiyaSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("karapitiya");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function searchKamburupitiya() {
  var x = document.getElementById("kamburupitiyaSelection").selectedIndex;
  var input, filter, table, tr, td, i;
  input = document.getElementById("kamburupitiyaSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("kamburupitiya");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}