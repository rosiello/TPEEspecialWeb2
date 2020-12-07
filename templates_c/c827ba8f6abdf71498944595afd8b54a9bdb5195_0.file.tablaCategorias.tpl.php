<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 18:17:14
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\tablaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca6f1a56f1a6_87278542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c827ba8f6abdf71498944595afd8b54a9bdb5195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\tablaCategorias.tpl',
      1 => 1602875063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fca6f1a56f1a6_87278542 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="design">
        <h2>Insertar categorias</h2>
        <form action="InsertarCategoria" method="POST">
            <div>
                <label>Categoria</label>
                <input id="categoriaNueva" name="input_categoria">
                <small>Describa el producto</small>
            </div>
            <button type="submit">Agregar categoria</button>
        </form>
        <h4>Lista de categorias</h4>
        <div class="design">
            <table class="list">
                <tbody>
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria_listado']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombreCategoria;?>
</td>
                            <td> <button type="button"><a href="EditarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">Editar</a></button></td>
                            <td> <button type="button"><a href="BorrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">Borrar</a></button></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }
}
