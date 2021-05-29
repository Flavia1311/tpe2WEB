<?php
/* Smarty version 3.1.39, created on 2021-05-29 04:35:45
  from 'C:\xampp\htdocs\Tpe2WEB\templates\platos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b1a88165adb1_39656820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf59b61114a745ae1e69ec13a075c69e9a39a00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2WEB\\templates\\platos.tpl',
      1 => 1622125190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:listacategorias.tpl' => 1,
    'file:tarjetasplatos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60b1a88165adb1_39656820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
    <div class="encabezado">
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="contenedor_platos">
        <?php $_smarty_tpl->_subTemplateRender("file:listacategorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:tarjetasplatos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
