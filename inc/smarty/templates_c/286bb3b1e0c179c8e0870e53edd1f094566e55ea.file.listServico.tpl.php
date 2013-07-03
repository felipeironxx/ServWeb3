<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:50:53
         compiled from "view/listServico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85829062951d44522a92711-00937319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286bb3b1e0c179c8e0870e53edd1f094566e55ea' => 
    array (
      0 => 'view/listServico.tpl',
      1 => 1372866511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85829062951d44522a92711-00937319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d44522b07d88_57126311',
  'variables' => 
  array (
    'list' => 0,
    'r' => 0,
    'listaE' => 0,
    'row' => 0,
    'listaC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d44522b07d88_57126311')) {function content_51d44522b07d88_57126311($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h1>Serviços</h1>

<form name="formCadServico">

    <input type="button" value="Novo Serviço" onclick="win('cadServico.php',600,420);">

</form>

<hr/><br>

<table border ="1">
    <tr>
        <td>Codigo do servico</td> 
        <td>Funcionario que anotou a solicitaçao</td> 
        <td>Solicitante</td>
        <td>Servico a ser realizado</td> 
        <td>Data da solictaçao</td>
        <td>Data da realização</td>
        <td>Concluido</td>
        <td>Ações</td>        
    </tr>

    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['r']->value['id_cliente']==''){?>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
 </td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_funcionario'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_empresa'];?>
 | <?php echo $_smarty_tpl->tpl_vars['row']->value['nome_func_empr'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['serv_solicitado'];?>
 </td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dt_solicitacao'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dt_realizacao'];?>
 </td>
                    <td align="center"><input type="checkbox" value=""/></td>
                    <td><a href="#" onclick="win('editServico.php?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',300,450)">Edit</a> | 
                        <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['r']->value['id_empresa']==''){?>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
 </td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_funcionario'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_cliente'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['serv_solicitado'];?>
 </td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dt_solicitacao'];?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dt_realizacao'];?>
 </td>
                    <td align="center"><input type="checkbox" value=""/></td>
                    <td><a href="#" onclick="win('editServico.php?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',300,450)">Edit</a> | 
                        <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }?>
    <?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>