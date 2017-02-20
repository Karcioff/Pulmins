function setLista(jsonPercorsi) {
    var result = "";
    for (i = 0; i < jsonPercorsi.length; i++) {
        result = result.concat("<option value='", jsonPercorsi[i].id, "'>", jsonPercorsi[i].nome);
    }
    document.getElementById("lista_percorsi").innerHTML = result;
}

function savePercorsi() {
    $.getJSON("percorsi_database.php", function (json) {
        for (i = 0; i < json.length; i++) {
            var centro = json[i];
            var string = JSON.stringify(centro);
            localStorage.setItem(centro.responsabile, string);
        }
        setLista(json);
    });
}

function getCentriCosto() {
    $.getJSON("get_centri_costo.php", function (json) {
        for (i = 0; i < json.length; i++) {
            var centro = json[i];
            var string = JSON.stringify(centro);
            localStorage.setItem(centro.nome, string);
        }
        document.getElementById("div_item_percorso").innerHTML = JSON.stringify(json);
    });


}


    