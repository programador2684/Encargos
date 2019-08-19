$("#marca").change(function(event) {
    $.get("lines/" + event.target.value + "", function(response, marca) {
        $("#linea").empty();
        for (i = 0; i < response.length; i++) {
            $("#linea").append("<option value='" + response[i].id_linea + "'> " + response[i].nombre_linea + "</option>");
        }
    });
});

$("#searchClient").change(function(event) {
    $.get("searchClient/" + event.target.value + "", function(response, searchClient) {

        document.getElementById('searchNombre').value = "";

        if (response.length > 0) {
            $("#searchNombre").empty();
            document.getElementById('searchNombre').value = response[0].nombre;
        } else {
            alert("El cliente identificado con: " + event.target.value + " no se encuentra registrado");
        }


    });

});