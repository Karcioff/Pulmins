function selectPercorso(idPercorso) {
    var percorso;
    var percorsi = JSON.parse(localStorage.getItem("percorsi"));
    for (i = 0; i < percorsi.length; i++) {
        if (percorsi[i].id == idPercorso)
            percorso = percorsi[i];
    }
    onSelection(percorso);
}

function onSelection(percorso) {
    document.getElementById("div_item_percorso").innerHTML = percorso.nome;
}

