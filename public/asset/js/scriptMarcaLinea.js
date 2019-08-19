$("#marca").change(function(event) {
    $.get("lines/" + event.target.value + "", function(response, marca) {
        console.log(response);
        $("#linea").empty();
        for (i = 0; i < response.length; i++) {
            $("#linea").append("<option value='" + response[i].id_linea + "'> " + response[i].nombre_linea + "</option>");
        }
    });
});