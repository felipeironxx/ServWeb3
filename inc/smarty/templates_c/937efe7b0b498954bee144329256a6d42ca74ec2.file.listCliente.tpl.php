<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:46:28
         compiled from "view/listCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21301050651d355a3df45d2-56448207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '937efe7b0b498954bee144329256a6d42ca74ec2' => 
    array (
      0 => 'view/listCliente.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21301050651d355a3df45d2-56448207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d355a3e7d685_51089195',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d355a3e7d685_51089195')) {function content_51d355a3e7d685_51089195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<table border ="1">
    <tr>
        <td>Codigo do Cliente</td>  
        <td>Nome do Cliente</td> 
        <td>Ações</td>        
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
 </td> 
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome'];?>
 </td>
        <td>Edit | <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a> </td>
    </tr>
    <?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>