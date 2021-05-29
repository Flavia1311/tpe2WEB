<?php
/* Smarty version 3.1.39, created on 2021-05-28 15:35:47
  from 'C:\xampp\htdocs\tpeWeb2\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0f1b3d14256_11994950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db6f0f23deba64c9d942c575d85d5532cbfdebe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeWeb2\\templates\\showError.tpl',
      1 => 1622208626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b0f1b3d14256_11994950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
    <div class="encabezado">
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="errores">
        <h1 class="404"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
        <h1 class="404"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</h1>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
