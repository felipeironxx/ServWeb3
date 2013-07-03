<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 17:35:01
         compiled from "view/editServico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150533704551d3397523e856-08961544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2123b41cd3a8c169363d6c4afa5d6665fc643d' => 
    array (
      0 => 'view/editServico.tpl',
      1 => 1371601158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150533704551d3397523e856-08961544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'funclist' => 0,
    'r' => 0,
    'e' => 0,
    'emplist' => 0,
    'funcemprlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d33975316b29_09649474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d33975316b29_09649474')) {function content_51d33975316b29_09649474($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3>Edição do Serviço</h3>

    <form name="editServico" id="editServico" method="post" onsubmit="return validarEnvio(this);">
                
        Funcionario que anotou o serviço: <select name="selCodFunc">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_funcionario'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['codigo_funcionario']==$_smarty_tpl->tpl_vars['e']->value['selCodFunc']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_funcionario'];?>
</option>
            <?php } ?>
        </select><br>

        Empresa que solicitou o serviço: <select name="selCodEmpr">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_empresa'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['codigo_empresa']==$_smarty_tpl->tpl_vars['e']->value['selCodEmpr']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_empresa'];?>
</option>
            <?php } ?>
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcemprlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_func_empr'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['codigo_func_empr']==$_smarty_tpl->tpl_vars['e']->value['selCodFuncEmpr']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_func_empr'];?>
</option>
            <?php } ?>
        </select><br>
        
        Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32" ><?php echo $_smarty_tpl->tpl_vars['e']->value['servASerFeito'];?>
</textarea><br>

        Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['dataSolicitacao'];?>
"><br>
        
        Data da realização do serviço: <input type="text" name="dataRealizacao" id="dataRealizacao" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['dataRealizacao'];?>
"><br>

        <input type="submit" value="Salvar"/>
    </form>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>