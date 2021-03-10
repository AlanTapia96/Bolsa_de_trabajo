(function(){

    

    function getAlumns(){
        $.ajax({
            type: "GET",
            url: "getAlumns.php",
            success: function (response) {
                let alumnos = JSON.parse(response);
                let addHTML = "";
                alumnos.forEach(alumno => {
                    addHTML += `
                        <tr>
                            <td>${alumno.nombre}</td>
                            <td>${alumno.apellido}</td>
                            <td>${alumno.numDoc}</td>
                            <td>${alumno.mail}</td>
                            <td>${alumno.carrera}</td>
                            <td>${alumno.año}</td>
                            <td>${alumno.experiencia}</td>
                            <td class="d-flex justify-content-center">
                                <button class="btn btn-dark actionAccept" id="${alumno.numDoc}">Aceptar</button>
                                <button class="btn btn-dark actionDeny" id="${alumno.numDoc}">Rechazar</button>
                            </td>
                        </tr>
                    `
                });
                document.getElementById('alumns').innerHTML = addHTML;
    
            }  
        });   
    }
    

    document.addEventListener('click',(e) =>{
        if(e.target.classList.contains('actionAccept')){
            $.ajax({
                type: "POST",
                url: "editUser.php",
                data: {
                    id : e.target.id,
                    action : "A",
                },
                success: function (response) {
                    getAlumns();
                    console.log(response);
                }
            });
            }
        
        if(e.target.classList.contains('actionDeny')){
            $.ajax({
            type: "POST",
            url: "editUser.php",
            data: {
                id : e.target.id,
                action : "R",
            },
            success: function (response) {
                getAlumns();
                console.log(response);
            }
        });
        }
    }
    );
    
    function getPropuestas(){
        $.ajax({
            type: "GET",
            url: "getProps.php",
            success: function (response) {
                let propuestas = JSON.parse(response);
                let addHTML = "";
                propuestas.forEach(propuesta => {
                    addHTML += `
                        <tr>
                            <td>${propuesta.nombre}</td>
                            <td>${propuesta.provincia}</td>
                            <td>${propuesta.localidad}</td>
                            <td>${propuesta.direccion}</td>
                            <td>${propuesta.telefono}</td>
                            <td>${propuesta.mail}</td>
                            <td>${propuesta.propuesta}</td>
                            <td>${propuesta.fecha_ini}</td>
                            <td>${propuesta.fecha_fin}</td>
                            <td class="d-flex justify-content-center">
                                <button class="btn btn-dark actionAccept" id="${propuestas.cuit}">Aceptar</button>
                                <button class="btn btn-dark actionDeny" id="${propuestas.cuit}">Rechazar</button>
                            </td>
                        </tr>
                    `
                });
                document.getElementById('propuestas').innerHTML = addHTML;
    
            }      
            });  
    };


    getAlumns();
    getPropuestas();


})


    




();