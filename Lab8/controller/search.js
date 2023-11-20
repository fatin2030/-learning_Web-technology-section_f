function search() {
    let query = document.getElementById('search').value;
    let xhttp = new XMLHttpRequest();
  
    xhttp.open('POST', '../model/searchModel.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('searchResult').innerHTML = this.responseText;
        }
    }
  
    xhttp.send('query=' + query);
  }