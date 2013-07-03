<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 17:39:50
         compiled from "view/cadServico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30702167751d33a96474240-55967979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2981f5097134a0e49623073595fa26c92be04456' => 
    array (
      0 => 'view/cadServico.tpl',
      1 => 1372708339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30702167751d33a96474240-55967979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'funclist' => 0,
    'r' => 0,
    'emplist' => 0,
    'funcemprlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d33a964e1662_65361092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d33a964e1662_65361092')) {function content_51d33a964e1662_65361092($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="formalirio1">
    <h3>Cadastro do Serviço</h3>

    <form name="cadServico" id="cadServico" method="post" onsubmit="return validarEnvio(this);">
        
        <!Pessoa Fisica<input type="radio" name="p">
        <!Pessoa Juridica<input type="radio" name="p"><!<hr/>
        
        Funcionario que anotou o serviço: <select name="selCodFunc">
            <option value="0">Escolha uma opção</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funclist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_funcionario'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_funcionario'];?>
</option>
            <?php } ?>
        </select><br>

        Empresa que solicitou o serviço: <select name="selCodEmpr">
            <option value="0">Escolha uma opção</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_empresa'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_empresa'];?>
</option>
            <?php } ?>
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr">
            <option value="0">Escolha uma opção</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funcemprlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['codigo_func_empr'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nome_func_empr'];?>
</option>
            <?php } ?>
        </select><br>
        
        Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="70" ></textarea><br>

        Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao"><br>

        <input type="submit" value="Cadastrar"/>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>