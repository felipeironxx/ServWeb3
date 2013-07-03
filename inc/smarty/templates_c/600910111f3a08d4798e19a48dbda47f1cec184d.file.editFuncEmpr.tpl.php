<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 22:03:44
         compiled from "view/editFuncEmpr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68308930651d37870c72df1-22494624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600910111f3a08d4798e19a48dbda47f1cec184d' => 
    array (
      0 => 'view/editFuncEmpr.tpl',
      1 => 1372813403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68308930651d37870c72df1-22494624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'e' => 0,
    'list' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d37870cd15c6_86411354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d37870cd15c6_86411354')) {function content_51d37870cd15c6_86411354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3>Edição do Funcionarios das Empresas</h3>

    <form name="editFuncEmpr" id="editFuncEmpr" method="post" enctype="multipart/form-data" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['nFuncEmpr'];?>
" size="40"><br>

        Empresa que o funcionario trabalha: <select name="selEmprFunc">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selEmprFunc']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_empresa'];?>
</option>
            <?php } ?>
        </select><br>

        <input type="submit" value="Salvar"/>
    </form>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>