<?php
/* Smarty version 4.2.1, created on 2022-09-30 18:19:38
  from 'C:\xampp\htdocs\Tpoweb2GCIPOLLETTI\templates\Home_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337171a9c8039_85314715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6875f3444520066faeade98eae271472f458c09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpoweb2GCIPOLLETTI\\templates\\Home_view.tpl',
      1 => 1664554777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6337171a9c8039_85314715 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Informacion listada por categoria</h1>
<table>
<thead>
<tr>
    <th>id_pesca</th>
    <th>Embarcado</th>
    <th>Embarcacion</th>
    <th>Equipo de pesca</th>
    <th>Carnada</th>
    <th>Pesca</th>
    <th>Localidad</th>
    </tr>
<thead>
<tbody>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pesca']->value, 'pescas');
$_smarty_tpl->tpl_vars['pescas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pescas']->value) {
$_smarty_tpl->tpl_vars['pescas']->do_else = false;
?>
    
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->id_pesca;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->embarcado;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->tipo_embarcacion;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->equipo_pesca;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->carnada;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->pesca;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['pescas']->value->localidad;?>
</td>
     </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
