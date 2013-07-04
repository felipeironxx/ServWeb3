<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 21:14:25
         compiled from "view/inicio_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212312440751d4be61d7e357-26415346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef15d173e707624d7e63d83f26b5798bd21c5f3' => 
    array (
      0 => 'view/inicio_edit.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212312440751d4be61d7e357-26415346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'done' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d4be61d88555_49570625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4be61d88555_49570625')) {function content_51d4be61d88555_49570625($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
        <script type="text/javascript" src="view/javascript/jGeneral.js"></script>
        
        <!-- Biblioteca Ajax -->
        <script type="text/javascript" src="view/javascript/bibliotecaAjax.js"></script>
    </head>
    <body>

        <?php if (isset($_smarty_tpl->tpl_vars['done']->value)){?>
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        <?php }?><?php }} ?>