<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-07 16:19:26
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\verDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fce47fe140225_04172855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6cc3e9989c6a072e4c3e72362c9410dd3e1c44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\verDetalle.tpl',
      1 => 1607354363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vistaComentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fce47fe140225_04172855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <td><?php echo $_smarty_tpl->tpl_vars['producto_detalle']->value->descripcion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto_detalle']->value->color;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto_detalle']->value->precio;?>
</td>
            <td id="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto_detalle']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['producto_detalle']->value->id;?>
</td>
        </tr>

    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:vistaComentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   aca esta la vista de comentarios

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
