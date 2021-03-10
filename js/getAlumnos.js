(function(){

    $('#search').keyup(function(e){
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
            url: "php/alumns-search.php",
            type: "POST",
            data: {search: search},
            success: function(response){
                let alumns = JSON.parse(response);
                let template = "";
                alumns.forEach(alumno => {
                    template += `<tr>
                                    <td>${alumno.nombre}</td>
                                    <td>${alumno.apellido}</td>
                                    <td>${alumno.nacimiento}</td>
                                    <td>${alumno.tipoDoc}</td>
                                    <td>${alumno.numDoc}</td>
                                    <td>${alumno.telefono}</td>
                                    <td>${alumno.mail}</td>
                                    <td>${alumno.carrera}</td>
                                    <td>${alumno.año}</td>
                                    <td>${alumno.experiencia}</td>
                                </tr>`
                });
                $('#alumns').html(template);
            }
            
        })
    }
    if($('#search').val() == ""){
        console.log("hola");
        getAlumns();
    }
   
});

    getAlumns();

    function getAlumns(){
        $.ajax({
            url : 'php/alumn-list.php',
            type: "GET",
            success: function(response){
                let alumnos = JSON.parse(response);
                let addHTML = "";
                alumnos.forEach(alumno =>{
                    addHTML +=
                            `<tr>
                                <td>${alumno.nombre}</td>
                                <td>${alumno.apellido}</td>
                                <td>${alumno.nacimiento}</td>
                                <td>${alumno.tipoDoc}</td>
                                <td>${alumno.numDoc}</td>
                                <td>${alumno.telefono}</td>
                                <td>${alumno.mail}</td>
                                <td>${alumno.carrera}</td>
                                <td>${alumno.año}</td>
                                <td>${alumno.experiencia}</td>
                            </tr>`
                })
                $('#alumns').html(addHTML);
            }
    
        })
    }
    

})();