<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:33:32
         compiled from "view/listFuncionario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33485799851d3559edf6bb3-73931247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9df54957262d87e08363752d054ac9ab4a803d5f' => 
    array (
      0 => 'view/listFuncionario.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33485799851d3559edf6bb3-73931247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3559ee4d863_73302048',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3559ee4d863_73302048')) {function content_51d3559ee4d863_73302048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>Lista de Funcionarios Cadastrados</h2>

<hr/>

<form name="formCadFuncionario">

    <input type="button" value="Novo Funcionario" onclick="win('cadFuncionario.php',290,420);">

</form>

<form name="fmlistafunc">

    <table border ="1">
        <tr>
            <td>Codigo do Funcionario</td>  
            <td>Nome do Funcionario</td>
            <td>Celular</td>
            <td>E-mail</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_funcionario'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['celular'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
            <td><a href="#" onclick="win('editFuncionario.php?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',290,420)">Edit</a> | 
                <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
