<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 08:32:57
         compiled from "view/cadEmpresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44808213051d34fda14f687-50468144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740524935c40751dfa2fff19073a7e053ef46e3c' => 
    array (
      0 => 'view/cadEmpresa.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44808213051d34fda14f687-50468144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d34fda2e1115_68512331',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d34fda2e1115_68512331')) {function content_51d34fda2e1115_68512331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="formCadEmpr">
    <h3>Cadastro de Empresa</h3>

    <form name="cadEmpresa" id="cadEmpresa" method="post" onsubmit="return validarEnvio(this);">

        Nome do Empresa:              <input type="text" name="nEmpresa" id="nEmpresa" size="40"><br>
        CNPJ:                         <input type="text" name="cnpj" id="cnpj" size="16">
        Inscriçao Estadual:           <input type="text" name="ie" id="ie" size="18"><br>
        Nome do Aplicativo PAF-ECF:   <input type="text" name="nAplicativo" id="nAplicativo" size="40"><br>
        Serial do Aplicativo PAF-ECF: <input type="text" name="serial_ap" id="serial_ap" size="40"><br>
        Rua:                          <input type="text" name="ruaE" id="ruaE" size="40">
        Numero:                       <input type="text" name="numE" id="numE" size="10"><br>
        Bairro:                       <input type="text" name="bairroE" id="bairroE" size="40"><br>
        Cidade:                       <input type="text" name="cidadeE" id="cidadeE" size="40"><br>
        Telefone:                     <input type="text" name="telE" id="telE" size="13">
        E-mail:                       <input type="text" name="emailE" id="emailE" size="40"><br>
        Contador:                     <input type="text" name="contador" id="contador" size="20">
        Telefone do Contador:         <input type="text" name="tel_contador" id="tel_contador" size="13"><br>
        

        <input type="submit" value="Cadastrar"/>
    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>