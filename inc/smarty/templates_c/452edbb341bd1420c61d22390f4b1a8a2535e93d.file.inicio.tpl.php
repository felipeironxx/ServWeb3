<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 21:14:24
         compiled from "view/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44208444951d4be60e58dc6-35749382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452edbb341bd1420c61d22390f4b1a8a2535e93d' => 
    array (
      0 => 'view/inicio.tpl',
      1 => 1372850951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44208444951d4be60e58dc6-35749382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d4be60e5d914_84874153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4be60e5d914_84874153')) {function content_51d4be60e5d914_84874153($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>

        
        <!-- Coisas padrao do jancybox -->
        <script type="text/javascript" src="inc/fancybox/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="inc/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link type="text/css" rel="stylesheet" href="inc/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
        
        <!-- Biblioteca Ajax -->
        <script type="text/javascript" src="view/javascript/bibliotecaAjax.js"></script>
        
        <!-- Nossa funca ao abrir a janela -->
        <script type="text/javascript" src="view/javascript/general.js"></script>
    </head>
    <body>
        <div id="corpo">
            <div id="logout">Bem vindo <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 - <a href="logout.php">Sair</a></div>
            <h1>Piske Informática</h1>
            <div id="menu">
                <ul>
                    <li><a class="menu" href="index.php"> Home</a></li>
                    <li><a class="menu" href="#"> Cadastros</a>
                        <ul>
                            <li><a class="menu" href="listEmpresa.php"> Cadastrar Empresa</a></li>
                            <li><a class="menu" href="listFuncionario.php"> Cadastrar Funcionario</a></li>
                            <li><a class="menu" href="listCliente.php"> Cadastrar Cliente</a></li>
                        </ul>
                    </li>
                    <li><a class="menu" href="listServico.php"> Serviços</a></li>
                </ul>
            </div><?php }} ?>