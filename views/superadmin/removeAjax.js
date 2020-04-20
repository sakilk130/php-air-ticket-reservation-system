function search() {
  var xhttp = new XMLHttpRequest();
  var search_txt = document.getElementById("search").value;
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("search_result").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "rsearch.php?key=" + search_txt, true);
  xhttp.send();
}
