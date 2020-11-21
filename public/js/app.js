function showUser(str) {
    if (str == "") {
      document.getElementById("result").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("result").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","../controller/ajaxSearch.php?search="+str,true);
      xmlhttp.send();
    }
  }
 