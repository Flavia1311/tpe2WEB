<?php
/* Smarty version 3.1.39, created on 2021-05-29 04:34:14
  from 'C:\xampp\htdocs\Tpe2WEB\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b1a826dc46c3_31104384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59ba4d67270afd2d41893b7402bab7d4e3adf4c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2WEB\\templates\\showError.tpl',
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
function content_60b1a826dc46c3_31104384 (Smarty_Internal_Template $_smarty_tpl) {
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
