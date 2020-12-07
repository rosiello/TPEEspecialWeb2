<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 18:32:37
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\listaUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca72b5bd2b55_76443956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '878925bcab917e015919a993a382b022938a1fe9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\listaUsuarios.tpl',
      1 => 1607103031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fca72b5bd2b55_76443956 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="design">
          <table class="design">
         <thead class="design">
          <tr>
                  <th>email</th>
                  <th>rango</th>
            </tr>
          </thead>
        <tbody class="design">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
            <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->rango;?>
</td>
                  <td> <a href="BorrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">BORRAR</td>
                  <td> <a href="EditarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">EDITAR</td> 
            </tr>
          <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
  
      </tbody>
    </table>
  </div>
<?php }
}
