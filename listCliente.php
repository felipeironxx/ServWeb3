<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cc = new Cliente();
$sm->assign('lista', $cc->select());


$sm->display("listCliente.tpl")
?>
