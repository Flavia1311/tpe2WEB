<?php
/* Smarty version 3.1.39, created on 2021-05-28 17:11:20
  from 'C:\xampp\htdocs\tpeWeb2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b108184bea48_47625145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3f990f6ac7d892078e9e4ed8be32a60b3a58ed1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeWeb2\\templates\\login.tpl',
      1 => 1622214644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60b108184bea48_47625145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="login_fondo">
    <div class="login-box">
      
        <h1>Login Admin</h1>
        <form action="verificar" method="POST">
            <!-- USERNAME INPUT -->
            <label for="username">Username</label>
            <input name="username" type="text" placeholder="Enter Username">
            <!-- PASSWORD INPUT -->
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Enter Password">
            <input type="submit" value="Log In">
            <a href="home">Ingresar normal</a>
            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="error_login">
                    *<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
        </form>
    </div>
</div>
<?php }
}
