<?php
/* Smarty version 3.1.39, created on 2021-05-29 04:35:45
  from 'C:\xampp\htdocs\Tpe2WEB\templates\tarjetasplatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b1a8817d6b13_49769495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb071f35ad98bbcea87cda7ef3650f18ae06b04e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe2WEB\\templates\\tarjetasplatos.tpl',
      1 => 1622214273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b1a8817d6b13_49769495 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container_tarjeta">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['platos']->value, 'plato');
$_smarty_tpl->tpl_vars['plato']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plato']->value) {
$_smarty_tpl->tpl_vars['plato']->do_else = false;
?>
        <div class="card">
          
            <div class="content">
                <h3><?php echo $_smarty_tpl->tpl_vars['plato']->value->nombre;?>
</h3>
                <h4>Nacionalidad: $<?php echo $_smarty_tpl->tpl_vars['plato']->value->nacionalidad;?>
</h4>
                <a href="descripcion/<?php echo $_smarty_tpl->tpl_vars['plato']->value->id;?>
">Descripcion</a>
                <?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
                    <a href="formEditarPlato/<?php echo $_smarty_tpl->tpl_vars['plato']->value->id;?>
">Editar</a>
                    <a href="eliminarPlato/<?php echo $_smarty_tpl->tpl_vars['plato']->value->id;?>
">Eliminar</a>
                <?php }?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
