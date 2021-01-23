const validar = () => {
    if($('#nombre').val() === null || $('#nombre').val() === ''){
        alert('El campo nombre no puede estar vacio')
        return false;
    }
    if ($('#apellido').val() === null || $('#apellido').val() === '') {
        alert('El campo apellido no puede estar vacio')
        return false;
    }
    return true;
}

const limpiarCampos = () => {
    $('#nombre').val('')
    $('#apellido').val('')
}

const mostrarDatos = () => {
    $.ajax({
        url:'controladores/consultarPersona.php',
        data:{},
        type:'POST',
        dataType:'json',
        success: function (datos) {
            let datosFormateados = "";
            datos.map((data) => {
                datosFormateados += `<div class="row"><div class="col-6 border">${data.nombre}</div><div class="col-6 border">${data.apellido}</div></div>`;
            })
            $('#contenedorDinamico').html(datosFormateados);
        }
    })
}

const agregarPersona = (nombre, apellido) => {
    $.ajax({
        url:'controladores/agregarPersona.php',
        data:{'nombre': nombre, 'apellido': apellido},
        type:'POST',
        dataType:'json',
        success: function (data) {
            alert(data)
            mostrarDatos()
            limpiarCampos()
        }
    })
}

$(document).ready(function () {
    $('#guardar').click(function () {
        if(validar()){
            agregarPersona($('#nombre').val(), $('#apellido').val())
        }
    })
})