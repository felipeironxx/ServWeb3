<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 15:50:36
         compiled from "view/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145278237551d4727c2cefd0-61424894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8a4b848c32e8200e6786794324d5335bfd0771' => 
    array (
      0 => 'view/login.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145278237551d4727c2cefd0-61424894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d4727c300ab0_81658422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4727c300ab0_81658422')) {function content_51d4727c300ab0_81658422($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
    </head>
    <body>
        <div id="corpo" align="center">
            <h1>Login</h1>
            <form name="login" method="post">
                <table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><p class="text-error"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</p></td>
                    </tr>
                    <tr> 
                        <td>Login:</td>
                        <td> <input name="login" type="text" id="login"></td>
                    </tr>
                    <tr> 
                        <td>Senha:</td>
                        <td><input name="senha" type="password" id="senha"></td>
                    </tr>
                    <tr> 
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr> 
                        <td> <input name="entrar" type="submit" id="entrar" value="Entrar"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html><?php }} ?>