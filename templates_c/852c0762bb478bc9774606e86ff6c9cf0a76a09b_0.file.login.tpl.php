<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:33:36
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84e80b78ae6_85233220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852c0762bb478bc9774606e86ff6c9cf0a76a09b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\login.tpl',
      1 => 1606962340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc84e80b78ae6_85233220 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="design">
        <form class="design"  action="iniciarSesion" method="post"> 
            <input  type="input" name="email" id="email"  placeholder="E-Mail">
            <input type="password" id="password" name="password" placeholder="Password">
            <button type="submit" value="Login">Login</button>
        </form> 
 </div>   
<?php }
}
