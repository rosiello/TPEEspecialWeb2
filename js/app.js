"use strict"

let app = new Vue({
    el: "#comentarios-csr",
    data: {
        subtitle: "comentario",
        comentarios: [],
        promedioComentarios:0,
        
    },
    methods: {
        borrarComentario: function(comentario) {
            fetch(`api/comentario/${comentario.id}`, {
                method: 'DELETE',
             })
             .then(response => response.json())
             .then(response => getComentariosPorProducto())
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

    let id_producto = document.getElementById("id_producto").value;

    fetch(`api/comentario/${id_producto}`)
    .then(response => response.json())
    .then(comentarios => { 
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
     })
     .catch(error => console.log(error));
};

getComentariosPorProducto();
