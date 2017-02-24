function setListOnClickListener() {
    $('#listaAppaltiTrasporti:last-child').on('click', 'li', function () {
        alert("happi neu ier");
    });
}


function setListaGiri(appalto) {
    var result = '<ul class="collection">\n';
    for (j = 0; j < appalto.giri.length; j++) {
        result = result + '<li  class="collection-item" id="' + appalto.giri[j].idGiro + '">';
        result = result + appalto.giri[j].nomeGiro + '</li>\n';
    }
    result = result + '</ul>\n';
    return result;
}
/**
 * imposta la lista degli appalti
 * chiamare il contenitore <ul> "listaAppalti", da invocare alla fine
 * @param {int} idSettore
 * @param {string} idContainer nome della lista che lo contiene
 * @returns {undefined}
 */
function setListaAppalti(idSettore, idContainer) {
    var result = "";
    $.getJSON("getSettore.php", {idSettore: idSettore}, function (settore) {
        for (i = 0; i < settore.appalti.length; i++) {
            result = result + '<li id="' + settore.appalti[i].idAppalto + '">\n';
            listaGiri = setListaGiri(settore.appalti[i]);
            result = result + '<div class="collapsible-header">' + settore.appalti[i].nomeAppalto + '</div>\n' +
                    '<div class="collapsible-body">' + listaGiri + '</div></li>\n';

        }
        document.getElementById(idContainer).innerHTML = result;
    });
}

    