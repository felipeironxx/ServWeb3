<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 21:27:50
         compiled from "view/editServico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29084402951d4be9d176aa1-09376716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec2123b41cd3a8c169363d6c4afa5d6665fc643d' => 
    array (
      0 => 'view/editServico.tpl',
      1 => 1372897629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29084402951d4be9d176aa1-09376716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d4be9d236e40_19318468',
  'variables' => 
  array (
    'funclist' => 0,
    'r' => 0,
    'e' => 0,
    'emplist' => 0,
    'funcemprlist' => 0,
    'clientelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4be9d236e40_19318468')) {function content_51d4be9d236e40_19318468($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h3>Edição do Serviço</h3>

<form name="editServico" id="editServico" method="post" onsubmit="return validarEnvio(this);">

    Funcionario que anotou o serviço: <select name="selCodFuncAnot" disabled="disabled">
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selCodFuncAnot']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_funcionario'];?>
</option>
        <?php } ?>
    </select><br>

    <?php if ($_smarty_tpl->tpl_vars['e']->value['selCodCliente']==''){?>
        Empresa que solicitou o serviço: <select name="selCodEmpr" disabled="disabled">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selCodEmpr']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_empresa'];?>
</option>
            <?php } ?>
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr" disabled="disabled">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcemprlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selCodFuncEmpr']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_func_empr'];?>
</option>
            <?php } ?>
        </select><br>

    <?php }else{ ?>
        Cliente solicitante: <select name="selCodCliente" disabled="disabled">
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selCodCliente']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_cliente'];?>
</option>
            <?php } ?>
        </select><br>
    <?php }?>

    Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['e']->value['servASerFeito'];?>
</textarea><br>

    Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['dataSolicitacao'];?>
"><br>

    Funcionario que realizou o serviço: <select name="selCodFuncReal" disabled="disabled">
        <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['r']->value['id']==$_smarty_tpl->tpl_vars['e']->value['selCodFuncReal']){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_funcionario'];?>
</option>
        <?php } ?>
    </select><br>

    Hora do inicio do serviço: <input type="time" name="hr_comeco" id="hr_comeco" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['hr_comeco'];?>
"><br>

    Serviço Realizado: <br><textarea name="serv_realizado" id="serv_realizado" rows="5" cols="32" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['e']->value['serv_realizado'];?>
</textarea><br>

    Hora do termino do serviço: <input type="time" name="hr_termino" id="hr_termino" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['hr_termino'];?>
"><br>

    Data da realização do serviço: <input type="text" name="dataRealizacao" id="dataRealizacao" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['dataRealizacao'];?>
"><br>


    <input type="button" onclick="habilitar();" value="Editar"/>
    <input type="submit" value="Salvar"/>
</form>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>