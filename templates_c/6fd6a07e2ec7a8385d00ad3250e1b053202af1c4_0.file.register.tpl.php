<?php
/* Smarty version 3.1.39, created on 2021-05-28 17:21:58
  from 'C:\xampp\htdocs\tpeWeb2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b10a96800013_65525225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fd6a07e2ec7a8385d00ad3250e1b053202af1c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeWeb2\\templates\\register.tpl',
      1 => 1622214659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60b10a96800013_65525225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="login_fondo">
    <div class="login-box">
       
        <h1>Login Admin</h1>
        <form action="registrar" method="POST">
            <!-- USERNAME INPUT -->
            <label for="username">Username</label>
            <input name="username" type="text" placeholder="Enter Username">
            <!-- PASSWORD INPUT -->
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Enter Password">
            <input type="submit" value="Registrarse">
            <a href="home">Volver a la pagina</a>
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="error_login">
                    *<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
        </form>
    </div>
</div><?php }
}
