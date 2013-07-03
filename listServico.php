<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$sm->assign('usuario', $_SESSION['usuario_0'][nome]);

$cs = new Servico();

if(isset($_GET['del'])){
    $cs->setId($_GET['del']);
    $cs->delete();
}

//print_r($cs->selectInner());
$sm->assign('list', $cs->select());
$sm->assign('listaE', $cs->selectInnerE());
$sm->assign('listaC', $cs->selectInnerC());


$sm->display("listServico.tpl")
?>

