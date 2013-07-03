<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:33:28
         compiled from "view/cadFuncEmpr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2856693451d376fb69a678-55872457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c4434d174ee88bef71ab3baff86798275e5d62' => 
    array (
      0 => 'view/cadFuncEmpr.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2856693451d376fb69a678-55872457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d376fb6fc870_86661024',
  'variables' => 
  array (
    'list' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d376fb6fc870_86661024')) {function content_51d376fb6fc870_86661024($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="formCadFuncEmpr">
    <h3>Cadastro de Funcionario das Empresas</h3>

    <form name="cadFuncEmpr" id="cadFuncEmpr" method="post" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" size="40"><br>

        Empresa que o funcionario trabalha: <select name="selEmprFunc">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_empresa'];?>
</option>
            <?php } ?>
        </select><br>

        <input type="submit" value="Cadastrar"/>
    </form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
