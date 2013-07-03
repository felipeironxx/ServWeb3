<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Empresa.php';
require_once 'core/Funcionario.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Servico.php';

$ce = new Empresa();
$cs = new Servico();
$cf = new Funcionario();
$cfe = new FuncEmpr();

$sm->assign('emplist', $ce->select());
$sm->assign('funclist', $cf->select());
$sm->assign('funcemprlist', $cfe->select());



// faz o cadastro
if(isset($_POST['selCodFunc']) and isset($_POST['selCodCliente']) and isset($_POST['selCodEmpr']) and isset($_POST['selCodFuncEmpr']) 
        and isset($_POST['servASerFeito']) and isset($_POST['dataSolicitacao']) and !isset($_GET['edit'])){
        
        $cs->setId_func_anotou($_POST['selCodFunc']);
        $cs->setId_cliente($_POST['selCodCliente']);
        $cs->setId_empresa($_POST['selCodEmpr']);
        $cs->setId_func_empr($_POST['selCodFuncEmpr']);
        $cs->setServ_solicitado($_POST['servASerFeito']);
        $cs->setDt_solicitacao($_POST['dataSolicitacao']);
        $cs->insert();
        
        $sm->assign("done", true);
}


$sm->display("cadServico.tpl")
?>
