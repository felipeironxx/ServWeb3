<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 20:04:40
         compiled from "view/listEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37151883051d3376a1d9649-01145101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2b4a3c9574637d5d82e5d4eb05414f269146bd' => 
    array (
      0 => 'view/listEmpresa.tpl',
      1 => 1372806279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37151883051d3376a1d9649-01145101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3376a22cc88_62873635',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3376a22cc88_62873635')) {function content_51d3376a22cc88_62873635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2>Listagem de Empresas</h2>

<hr/>

<br><form name="fmrCadEmpresa">

    <input type="button" value="Nova Empresa" onclick="win('cadEmpresa.php',640,360)">

</form>

<form name="formSelFuncionario" action="listFuncEmpr.php">

<input type="submit" value="Exibir Funcionarios das empresas">

</form>

<form name="formSelEmpresa">

<table border ="1">
    <tr>
        <td>Codigo da Empresa</td>  
        <td>Nome da Empresa</td>
        <td>CNPJ</td>                            
        <td>Nome do Aplicativo PAF-ECF</td>
        <td>Telefone</td>           
        <td>E-mail</td>             
        <td>Contador</td>           
        <td>Telefone do Contador</td>  
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
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_empresa'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cnpj'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['aplicativo'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefone'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contador'];?>
 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefone_contador'];?>
 </td>
        <td><a href="#" onclick="win('editEmpresa.php?edit=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
',640,360)">Edit</a> | 
            <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Del</a> 
        </td>
    </tr>
    <?php } ?>
</table>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>