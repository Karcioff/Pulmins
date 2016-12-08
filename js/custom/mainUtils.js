function setLista(jsonPercorsi) {
    var result = "";
    for (i = 0; i < jsonPercorsi.length; i++) {
        result = result.concat("<option value='", jsonPercorsi[i].id, "'>", jsonPercorsi[i].nome);
    }
    document.getElementById("lista_percorsi").innerHTML = result;
}

function savePercorsi() {
    $.getJSON("percorsi_database.php", function (json) {
        var percorsi = JSON.stringify(json);
        localStorage.setItem("percorsi", percorsi);
        setLista(json);
    });
}

function getPercorsi() {
    return JSON.parse(localStorage.getItem("percorsi"));
}

function getCentriCosto() {
    $.getJSON("get_centri_costo.php", function (json) {
        var centri = JSON.stringify(json);
        localStorage.setItem("Centri_costo", centri);
        document.getElementById("div_item_percorso").innerHTML = centri;
    });
    
    
}


    