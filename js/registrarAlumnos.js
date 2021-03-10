(function(){
    let alumnForm = document.getElementById('alumn-form');
    alumnForm.addEventListener("submit",function(e){
        e.preventDefault();
        const postAlumn = {
                nombre : $('#alumn-name').val(),
                apellido : $('#alumn-surname').val(),
                tipoDocumento : $('#doc-type').val(),
                nacimiento : $('#alumn-born').val(),
                numDocumento : $('#doc-number').val(),
                telefono : $('#alumn-phone').val(),
                mail : $('#alumn-email').val(),
                carrera : $('#alumn-career').val(),
                año : $('#career-year').val(),
                experiencia : $('#alumn-work-exp').val(),
                habilitado : "false",
        };
    
        /*Validaciones del formulario*/
        let errores = [];
    
        if(postAlumn.nombre.length <= 3){
            errores.push("Nombre inválido");
        }
        if(postAlumn.carrera.length <= 7){
            errores.push("Carrera inválida");
        }
        
        let alerta = "";
        for (let i = 0; i < errores.length; i++) {
            alerta += errores[i] + "\n";
        }
    
        if(errores.length == 0){
            $.post('php/postUser.php',postAlumn,function(response){ //Envío de los datos a través del método POST de JQuery
                console.log(response);
                let respuesta = `<h3>${response}</h3>`
                $('#respuesta').html(respuesta);
                $('#alumn-form').trigger('reset'); //resetea los valores del formulario
            })
        }else{
            alert(alerta);
        }
        
                
    
    
    })
})

();







