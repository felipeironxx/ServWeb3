<?php /* Smarty version Smarty-3.1.13, created on 2013-07-02 19:54:32
         compiled from "view/editEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69043270651d356c5875aa0-27814844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2724198e78ba2db6c1a60e09cd1643c40e938667' => 
    array (
      0 => 'view/editEmpresa.tpl',
      1 => 1372805668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69043270651d356c5875aa0-27814844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d356c58cdd59_57532221',
  'variables' => 
  array (
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d356c58cdd59_57532221')) {function content_51d356c58cdd59_57532221($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3>Ediçao de Empresas</h3>

    <form name="editEmpresa" id="editEmpresa" method="post" enctype="multipart/form-data" onsubmit="return validarEnvio(this);">

        Nome do Empresa:              <input type="text" name="nEmpresa" id="nEmpresa" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['nEmpresa'];?>
"><br>
        CNPJ:                         <input type="text" name="cnpj" id="cnpj" size="16" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['cnpj'];?>
">
        Inscriçao Estadual:           <input type="text" name="ie" id="ie" size="18" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['ie'];?>
"><br>
        Nome do Aplicativo PAF-ECF:   <input type="text" name="nAplicativo" id="nAplicativo" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['nAplicativo'];?>
"><br>
        Serial do Aplicativo PAF-ECF: <input type="text" name="serial_ap" id="serial_ap" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['serial_ap'];?>
"><br>
        Rua:                          <input type="text" name="ruaE" id="ruaE" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['ruaE'];?>
">
        Numero:                       <input type="text" name="numE" id="numE" size="10" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['numE'];?>
"><br>
        Bairro:                       <input type="text" name="bairroE" id="bairroE" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['bairroE'];?>
"><br>
        Cidade:                       <input type="text" name="cidadeE" id="cidadeE" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['cidadeE'];?>
"><br>
        Telefone:                     <input type="text" name="telE" id="telE" size="13" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['telE'];?>
">
        E-mail:                       <input type="text" name="emailE" id="emailE" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['emailE'];?>
"><br>
        Contador:                     <input type="text" name="contador" id="contador" size="20" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['contador'];?>
">
        Telefone do Contador:         <input type="text" name="tel_contador" id="tel_contador" size="13" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['tel_contador'];?>
"><br>

        <input type="submit" value="Salvar"/>
    </form>


<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>