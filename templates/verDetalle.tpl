{include file="header.tpl"}

<h2>Ampliado</h2>
<table class="design">
    <tbody>
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Precio</th>
                <th>ID</th>
            </tr>
        </thead>

        <tr>
            <td>{$producto_detalle->descripcion}</td>
            <td>{$producto_detalle->color}</td>
            <td>{$producto_detalle->precio}</td>
            <td id="id_producto">{$producto_detalle->id}</td>
        </tr>

    </tbody>
</table>
{include file="vistaComentarios.tpl"}   aca esta la vista de comentarios
<script src="js/comentarios.js"></script>
{include file="footer.tpl"}