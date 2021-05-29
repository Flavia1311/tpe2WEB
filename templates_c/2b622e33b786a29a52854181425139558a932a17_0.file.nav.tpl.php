<?php
/* Smarty version 3.1.39, created on 2021-05-29 04:34:14
  from 'C:\xampp\htdocs\Tpe2WEB\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b1a826e50684_64367577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b622e33b786a29a52854181425139558a932a17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2WEB\\templates\\nav.tpl',
      1 => 1622212555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1a826e50684_64367577 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="user">
    <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
    <?php }?>
</div>

<header>
    <img src="imagenes/logo.png" alt="logo">
</header>
<div class="btn_menu">
    <h1>MENÚ</h1>
</div>
<nav>
    <ul class="navigation">

               <li class="item"><a class="botones" href="">Home</a></li>
                    <li class="item"><a class="botones" href="platos">Nuestros Platos</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
                    <li class="item"><a class="botones">Galería</a></li>
                    <li class="item"><a class="botones">Nuestra historia</a></li>
            <li class="item"><a class="botones" href="admin">Admin</a></li>
            <li class="item_log"><a class="botones" href="logout">Logout</a></li>
        <?php } else { ?>
            <li class="item_log"><a class="botones" href="formRegistro">Registrarse</a></li>
            <li class="item"><a class="botones" href="login">Login</a></li>
        <?php }?>
    </ul>
</nav><?php }
}
