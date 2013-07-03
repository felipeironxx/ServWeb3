<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:33:24
         compiled from "view/listFuncEmpr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162952926651d3544b13aba4-32855328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19f58b68642c06c0973393667f05113184b5d13' => 
    array (
      0 => 'view/listFuncEmpr.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162952926651d3544b13aba4-32855328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3544b1d2955_03317557',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3544b1d2955_03317557')) {function content_51d3544b1d2955_03317557($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>Listagem dos Funcionarios das Empresas</h2>

<hr/><br>

<form name="formCadFuncEmpr">

    <input type="button" value="Novo Funcionario" onclick="win('cadFuncEmpr.php',290,420)">

</form>

<form name="formSelFuncEmpr">

<table border ="1">
    <tr>
        <td>Codigo do Funcionario</td>  
        <td>Nome do Funcionario</td>
        <td>Nome do Empresa</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_func_empr'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_empresa'];?>
 </td>
        <td><a href="#" onclick="win('editFuncEmpr.php?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',280,420)">Edit</a> | 
            <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a>
        </td>
    </tr>
    <?php } ?>
</table>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>