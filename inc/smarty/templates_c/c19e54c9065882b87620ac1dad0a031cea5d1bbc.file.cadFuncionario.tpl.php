<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:33:34
         compiled from "view/cadFuncionario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49155418451d3762d507097-33291708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19e54c9065882b87620ac1dad0a031cea5d1bbc' => 
    array (
      0 => 'view/cadFuncionario.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49155418451d3762d507097-33291708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3762d548800_13679989',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3762d548800_13679989')) {function content_51d3762d548800_13679989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="formCadFunc">
    <h3>Cadastro de Funcionario</h3>

    <form name="cadFuncionario" id="cadFuncionario" method="post" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" size="40"><br>
        Celular: <input type="text" name="celular_func" id="nCelular_func" size="15" onkeypress="formataTel(document.cadFuncionario.celular_func);"><br>
        E-mail: <input type="text" name="emailF" id="emailF" size="40"><br>

        <input type="submit" value="Cadastrar"/>
        
    </form>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
