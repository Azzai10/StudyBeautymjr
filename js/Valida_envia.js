function valida_envia(e) {
    e.preventDefault(); // evita que el formulario se envíe hasta validar todo

    const form = document.getElementById("fvalida");

    if (form.nombre.value.trim() === "") {
        alert("Por favor escribe tu nombre.");
        form.nombre.focus();
        return false;
    }

    if (form.pista.value.trim() === "") {
        alert("Por favor indica cómo te enteraste del salón.");
        form.pista.focus();
        return false;
    }

    if (form.atencion.value === "") {
        alert("Por favor selecciona si el personal fue amable.");
        form.atencion.focus();
        return false;
    }

    if (form.servicio.value.trim() === "") {
        alert("Por favor indica qué servicio utilizaste.");
        form.servicio.focus();
        return false;
    }

    if (form.destacado.value.trim() === "") {
        alert("Por favor escribe qué fue lo que más te agradó.");
        form.destacado.focus();
        return false;
    }

    if (form.volverias.value === "") {
        alert("Por favor selecciona si volverías a realizar un servicio.");
        form.volverias.focus();
        return false;
    }

    if (form.propuesta.value.trim() === "") {
        alert("Por favor dinos qué podemos mejorar.");
        form.propuesta.focus();
        return false;
    }

    alert("MUCHAS GRACIAS POR ENVIAR EL FORMULARIO");
    form.submit(); // envía el formulario si todo está correcto
}
