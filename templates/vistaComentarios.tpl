{literal}
<section id="comentarios-csr">
    <div class="design">
        <div>
            <label type="button">Valoracion media--<span>{{promedioComentarios}}</span></label>
        </div>
        <div v-if="loading">
            <p></p>
        </div>
        <table> 
            <thead>
                <tr>
                    <th>comentario</th>
                    <th>valoracion</th>
                    <template  v-if="rango">
                        <th>
                            borrar
                        </th>
                    </template>
                </tr> 
            </thead>
            <tbody v-if="!loading">
                <tr v-for="(comentario) in comentarios" >
                    <td>{{comentario.contenido}}</th>
                    <td>{{comentario.valoracion}}</th>
                    <template v-if="rango">
                        <td>
                            <a href="#" v-on:click.prevent="borrarComentario(comentario)">Eliminar</a>
                        </td>
                    </template>
                </tr>
            </tbody>
        </table>    
    </div>
</section>
<div class="design">
    <div>
        <input type="hidden" id="usuario" value="{$usuario[0]->rango}"/>
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
{/literal}
