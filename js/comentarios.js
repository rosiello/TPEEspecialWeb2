"use strict"

let app = new Vue({
    el: "#comentarios-csr",
    data: {
        subtitle: "comentarios",
        loading: false,
        comentarios: [],
        promedioComentarios:0,
        rango : false
    },
    methods: {
        borrarComentario: function(comentario) {
            fetch(`api/comentario/${comentario.id}`, {
                method: 'DELETE',
             })
             .then(response => response.json())
             .then(response =>getComentariosPorProducto())
             .catch(error => console.log(error));
        }
    }
});

window.onload = function(){ //llama la lista al iniciar la ventana
    getComentariosPorProducto();

};

//LISTENERS

document.getElementById("addComentario").addEventListener("click", addComentario());



function getComentariosPorProducto() {
    app.loading = true;
    let totalComentarios = 0;
    let sumatoria = 0;
    let id_producto = document.getElementById("id_producto").value;
   


    
    fetch(`api/comentarios/${id_producto}`)
    .then(response => response.json())
    .then(comentarios => {
        totalComentarios = comentarios.length;
        for (let index = 0; index < comentarios.length; index++) {
            sumatoria += parseInt(comentarios[index].valoracion); 
        }
        if (totalComentarios != 0) {
            app.promedioComentarios = (sumatoria/totalComentarios);        
        } else {
            app.promedioComentarios = 0;
        }

        app.comentarios = comentarios; 
        app.loading = false;
        
    })
    .catch(error => console.log(error));
}

//ADICION DE COMENTARIOS

function addComentario() {
    
    let id_producto = document.getElementById("id_producto").value;
    let tomarPuntuacion=0;
    let tomarComentario;
//Tomamos los valores
    tomarComentario = document.querySelector("#textoDeComentario").value;
    tomarPuntuacion = document.getElementsByName("valorar");
//Declarar data
    let data = {
        contenido: tomarComentario,        
        valoracion: tomarPuntuacion,
        id_producto : id_producto
    }
//ENVIO
    fetch(`api/comentarios/${id_producto}`, {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(data) 
     })
     .then(response => response.json())
     .then(response =>{
        getComentariosPorProducto();
        document.getElementById("formularioComentario").reset();
     })
     .catch(error => console.log(error));
};

getComentariosPorProducto();
