$("#formu-new-register").submit(function (e) {
    e.preventDefault()
    var datos = new FormData($(this)[0])
    datos.append("tipoOperacion", "newRegister")
    $.ajax({
        url: 'ajax/ajaxRegister.php',
        type: 'POST',
        data: datos,
        processData: false,
        contentType: false,
        success: function(respuesta) {
            if ($.trim(respuesta) == "ok") {
                swal({
                  type: 'success',
                  title: 'Excelente',
                  text: 'Registro procesado con exito'
                }).then((result) => {
                  if (result.value) {
                    location.href = "https://www.hconstructora.cl"
                  }
                })
            }else if ($.trim(respuesta) == "error"){
                swal({
                  type: 'warning',
                  title: 'Malas Noticias',
                  text: 'El registro ya existe, Muchas Gracias'
                }).then((result) => {
                  if (result.value) {
                    location.href = "https://www.hconstructora.cl"
                  }
                })					
            }
        }
    })
})