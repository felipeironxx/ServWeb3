<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 21:56:11
         compiled from "view/editFuncionario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105237851d37652d5ef05-62998153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4164d20c4a7fe204ffb7e767c3055bc52478ce61' => 
    array (
      0 => 'view/editFuncionario.tpl',
      1 => 1372812940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105237851d37652d5ef05-62998153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d37652da13c7_85971686',
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d37652da13c7_85971686')) {function content_51d37652da13c7_85971686($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3>Ediçao dos Funcionarios</h3>

    <form name="editFuncionario" id="editFuncionario" method="post" enctype="multipart/form-data" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['nFuncionario'];?>
" size="40"><br>
        Celular: <input type="text" name="celular_func" id="nCelular_func" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['celular_func'];?>
" size="40" onkeypress="formataTel(document.editFuncionario.nCelular_func);"><br>
        E-mail: <input type="text" name="emailF" id="emailF" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['emailF'];?>
"><br>

        <input type="submit" value="Salvar"/>
    </form>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>