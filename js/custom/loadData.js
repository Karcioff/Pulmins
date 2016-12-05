function loadData(id) {

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_percorsi").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "percorsi_database.php?q=" + id, true);
    xmlhttp.send();

}

