<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 18:17:14
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca6f1a44a8b6_13859288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '998533997d94c1c4d5b9a9209a8d0ca68571be88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\productos.tpl',
      1 => 1606951669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tablaCategorias.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fca6f1a44a8b6_13859288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <div class="design">
        <h2>Agregar Productos</h2>
        <form action="Insertar" method="POST">
            <div>
                <label>Producto</label>
                <input id="producto" name="input_descripcion">
                <small>Describa el producto</small>
            </div>
            <div>
                <label>Color</label>
                <input id="color" name="input_color">
                <small>Defina el color</small>
            </div>
            <div>
                <label>Precio</label>
                <input id="precio" name="input_precio">
                <small>Inserte precio</small>
            </div>
            <div>
            <select name="agregarCategoria">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria_listado']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
,<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombreCategoria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            </div>
            <button type="submit">Generar producto</button>
        </form>
        <h4>Lista de productos</h4>
        <form action="Select" method="GET">
            <label>Seleccion de categoria</label>
            <select name="selectCategoria">
                <option>Todas</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria_listado']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
,<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombreCategoria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label>Filtro por categoria</label>
            <button type="submit">Aplicar filtro</button>
            <br>

        </form>
        <div class="design">
            <table class="list">
                <tbody>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Descripcion</th>
                            <th>Color</th>
                            <th>Precio</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_listado']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <tr>
                            <td> <button id="id_producto" type="button"><a href="Ver/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Ampliar</a></button></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                            <td> <button type="button"><a href="Editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Editar</a></button></td>
                            <td> <button type="button"><a href="Borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Borrar</a></button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:tablaCategorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
