<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 16:47:48
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\vistaComentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fce4ea43b49e5_48401678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3514eb5b72f6c3b5e42ceee85a34d97c33e8270d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\vistaComentarios.tpl',
      1 => 1607356000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fce4ea43b49e5_48401678 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php echo '<script'; ?>
 src="js/app.js"><?php echo '</script'; ?>
>

<?php }
}
