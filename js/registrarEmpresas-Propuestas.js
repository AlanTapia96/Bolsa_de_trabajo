(function(){


        let compForm = document.getElementById('comp-form');
        compForm.addEventListener("submit",function(e){
            e.preventDefault();
            const postComp = {
                    nombre : $('#comp-name').val(),
                    cuit : $('#cuit').val(),
                    provincia : $('#province').val(),
                    localidad : $('#district').val(),
                    direccion : $('#address').val(),
                    telefono : $('#phone').val(),
                    mail : $('#mail').val(),
                    propuesta : $('#subject').val(),
                    fecha_ini : $('#date-st').val(),
                    fecha_fin : $('#date-fin').val(),
                    habilitado : "false",
            }


            $.ajax({
                    type: "POST",
                    url: "php/comp/postComp.php",
                    data: postComp,
                    success: function (response) {
                        let respuesta = `<h3>${response}</h3>`
                        $('#respuesta').html(respuesta);
                    }
                    
            })
            $('#comp-form').trigger('reset');
        });



        let oferta = document.getElementById('oferta');
        oferta.addEventListener("submit",function(e){
                e.preventDefault();
                const propuesta = {
                        cuit : $('#prop-cuit').val(),
                        propuesta : $('#subject').val(),
                        fecha_ini : $('#date-st').val(),
                        fecha_fin : $('#date-fin').val()
                }
                
                $.ajax({
                        type: "POST",
                        url: "php/comp/postPropuesta.php",
                        data: propuesta,
                        success: function (response) {
                                alert(response);
                        }

                })
                $('#oferta').trigger('reset');;
        });
        

})();


