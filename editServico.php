<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Empresa.php';
require_once 'core/Funcionario.php';

$cs = new Servico();
$ce = new Empresa();
$cf = new Funcionario();
$cfe = new FuncEmpr();

$sm->assign('emplist', $ce->select());
$sm->assign('funclist', $cf->select());
$sm->assign('funcemprlist', $cfe->select());

$cs->setId($_GET['edit']);
$cs->load();

if (isset($_POST['selCodFuncAnot'], $_POST['selCodEmpr'], $_POST['selCodFuncEmpr'], 
          $_POST['servASerFeito'], $_POST['selCodFuncReal'], $_POST['serv_realizado'], $_POST['dataSolicitacao'], 
          $_POST['dataRealizacao'], $_POST['hr_comeco'], $_POST['hr_termino'])) {
    if ($_POST['selCodFunc']!='' and $_POST['selCodEmpr']!='' and $_POST['selCodFuncEmpr']!='' 
        and $_POST['servASerFeito']!='' and $_POST['selCodFuncReal']!='' and $_POST['serv_realizado']!='' 
        and $_POST['dataSolicitacao']!='' and $_POST['dataRealizacao']!='' and $_POST['hr_comeco']!=''
        and $_POST['hr_termino']!='') {

        $cs->setId_func_anotou($_POST['selCodFuncAnot']);
        $cs->setId_empresa($_POST['selCodEmpr']);
        $cs->setId_func_empr($_POST['selCodFuncEmpr']);
        $cs->setServ_solicitado($_POST['servASerFeito']);
        $cs->setId_func_realizou($_POST['selCodFuncReal']);
        $cs->setServ_realizado($_POST['serv_realizado']);
        $cs->setDataSolic($_POST['dataSolicitacao']);
        $cs->setDataReal($_POST['dataRealizacao']);
        $cs->setHr_comeco($_POST['hr_comeco']);
        $cs->setHr_termino($_POST['hr_termino']);
        $cs->update();
        
        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos


$dados = array('selCodFunc' => $cs->getId_func_anotou(), 
               'selCodEmpr' => $cs->getId_empresa(), 
               'selCodFuncEmpr' => $cs->getId_func_empr(), 
               'servASerFeito' => $cs->getServ_solicitado(), 
               'dataSolicitacao' => $cs->getDt_solicitacao(), 
               'dataRealizacao' => $cs->getDt_realizacao());
    
$sm->assign('e', $dados);


$sm->display("editServico.tpl");

?>
