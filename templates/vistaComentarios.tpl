{literal}
<section id="comentarios-csr">
    <div class="design">
        <div>
            <label type="text">Lista de comentarios</label>
        </div>
        <table> 
            <thead>
                <tr>
                    <th>comentario</th>
                    <th>valoracion</th>
                    <template>
                        <th>    
                            borrar
                        </th>
                    </template>
                </tr> 
            </thead>
                <tr v-for="(comentario) in comentarios" >
                    <td>{{comentario.contenido}}</th>
                    <td>{{comentario.valoracion}}</th>
                    <template >
                        <td>
                            <a href="#" v-on:click.prevent="borrarComentario(comentario)">Eliminar</a>
                        </td>
                    </template>
                </tr>
        </table>    
    </div>
</section>
<div class="design">
    <div>
        <input type="hidden">
            <div>
                <form id="formularioComentario">
                    <label >Valora este producto</label>
                    <h6>valoracion
                    <input id="valorar" type="text" name="valorar">
                    </h6>
                <div>
                    <label>Escribe un comentario</label>
                    <input id="textoDeComentario" type="text">
                </div>
                <button type="submit" id="addComentario">Enviar</button>
                </form>
            </div>
    </div>
</div>
<label button="hidden" id="id_producto" value="{$producto_detalle->id}>{{producto_detalle->id}}</label>
<script src="js/app.js"></script>
{/literal}
