<?php
/* Smarty version 3.1.39, created on 2021-05-28 17:37:43
  from 'C:\xampp\htdocs\tpeWeb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b10e473baae6_79933611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425f09624489ebc71de7bb3fbf8a830f5d9bb3ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeWeb2\\templates\\home.tpl',
      1 => 1622215918,
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
function content_60b10e473baae6_79933611 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor">
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="encabezado">
    
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<article class="Bienvenida">
<h1 class="titulo_bienvenida"> ¡Bienvenidos al Restourante UNICEN!</h1>
<p class="text"> ¿Querés experimentar nuevos sabores? En nuestro restourante cuenta con una amplia variedades de platos
¡Ven a probarlos!</p>
<p class="text"> Te ofrecemos un menú con platos típicos de distintas nacionalidades </p>
<p class="text"> Puedes ingresar para conocer nuestra carta de <a href="carta"> nuestra carta </a> y elegir el menú
más delicio </p>
</article>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
