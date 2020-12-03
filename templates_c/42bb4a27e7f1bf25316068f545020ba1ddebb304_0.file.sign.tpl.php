<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:33:36
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\sign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84e80bbd273_15074243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42bb4a27e7f1bf25316068f545020ba1ddebb304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\sign.tpl',
      1 => 1606960203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc84e80bbd273_15074243 (Smarty_Internal_Template $_smarty_tpl) {
?><div class = "design">    
        <form class="design" action="registrar" method="POST">
                <label>Email:</label>
                <input type="email" id="email" name="email" placeholder="email">
                 <label>Password:</label>
                <input type="password" id="password" name="password"placeholder="password">
        <div><button type="submit" value="darse de alta">Registro</button></div>
         </form>
</div>
            
<?php }
}
