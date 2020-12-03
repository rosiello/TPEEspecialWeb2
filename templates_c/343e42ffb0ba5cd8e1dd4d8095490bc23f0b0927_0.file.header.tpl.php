<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 03:33:36
  from 'C:\xampp\htdocs\Web2Sparring-master\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc84e80b2dd45_98778401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '343e42ffb0ba5cd8e1dd4d8095490bc23f0b0927' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2Sparring-master\\templates\\header.tpl',
      1 => 1606962565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc84e80b2dd45_98778401 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <base href="<?php echo BASE_URL;?>
">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Index</title>
     <link rel="stylesheet" href="styles/style.css">
     <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
     <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
 </head>

 <body>
     <div class="container">
         <!--///////////////////////////HEADER_IN_COMMON////////////////////////////////////////-->
         <header class="design">
             <div class="head_of_page">
                 <img class="logo" src="images/logo.jpg" alt="img_logo">
                 <ul>
                     <li>INDUMENTARIA Y EQUIPO</li>
                     <li>ARTICULOS DE ENTRENAMIENTO</li>
                     <li>REMERAS, CAMISAS Y CAMISETAS</li>
                     <li>PANTALONES Y SHORTS</li>
                     <li>BUZOS Y CHAQUETAS</li>
                     <li>GORROS Y ACCESORIOS</li>
                 </ul>
             </div>
             <div class="menu_display">
                 <a>menu</a>
             </div>
             <nav>
                 <ul>
                     <li> <a href="index">Home</a></li>
                     <li> <a href="productos">Productos</a></li>
                     <li> <a href="comunidad">Comunidad</a></li>
                 </ul>
             </nav>
         </header>
     </div><?php }
}
