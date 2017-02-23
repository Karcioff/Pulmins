function setListaGiri(idGiro) {
    var result = "";
    
}
/**
 * imposta la lista degli appalti
 * chiamare il contenitore <ul> "listaAppalti", da invocare alla fine
 * @param {type} idSettore
 * @returns {undefined}
 */
function setListaAppalti(idSettore) {
    var result = "";
    $.getJSON("getSettore.php", {idSettore: idSettore}, function (settore) {
        for (i=0;i<settore.appalti.length;i++) {
            result = result + '<li id="' + settore.appalti[i].idAppalto + '">\n';
            result = result + '<div class="collapsible-header">' + settore.appalti[i].nomeAppalto + '</div>\n' +
                    '<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div></li>\n';
            
        }
        document.getElementById("listaAppalti").innerHTML = result;
    });
}

    