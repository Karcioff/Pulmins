/**
 * imposta la lista degli appalti
 * @param {type} idSettore
 * @returns {undefined}
 */
function setListaAppalti(idSettore) {
    var result = "";
    $.getJSON("getSettore.php", {idSettore: idSettore}, function (settore) {
        for (var appalto in settore.appalti) {
            result = '<li id="' + appalto.idAppalto + '">';
            result = result + '<div class="collapsible-header">' + appalto.nomeAppalto + '</div>' +
                    '<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div></li>';
        }
        document.getElementById("listaAppalti").innerHTML = result;
    });
}

    