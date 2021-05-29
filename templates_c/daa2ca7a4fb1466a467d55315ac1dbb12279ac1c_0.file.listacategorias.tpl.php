<?php
/* Smarty version 3.1.39, created on 2021-05-28 16:23:27
  from 'C:\xampp\htdocs\tpeWeb2\templates\listacategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0fcdf467f91_04072427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daa2ca7a4fb1466a467d55315ac1dbb12279ac1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeWeb2\\templates\\listacategorias.tpl',
      1 => 1622150642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0fcdf467f91_04072427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container_categorias">
<h3>Lista de categorias</h3>
    <div class="lista">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?> 
            <li class="categoria"> <a href="categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
                <a class="boton_lista" href="formEditarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">Editar</a>
                <a class="boton_lista" href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
">Eliminar</a>
            <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </ul>
    </div>

</div><?php }
}
