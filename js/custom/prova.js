function load(unId) {
    $.get("percorsi_database.php", {id: unId}, function(data) {
        document.getElementById("lista_percorsi").innerHTML = data;
    });
}

