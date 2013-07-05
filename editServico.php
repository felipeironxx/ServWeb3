<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';
require_once 'core/FuncEmpr.php';
require_once 'core/Empresa.php';
require_once 'core/Funcionario.php';
require_once 'core/Cliente.php';

$cs = new Servico();
$ce = new Empresa();
$cf = new Funcionario();
$cfe = new FuncEmpr();
$c = new Cliente();

//if(isset($_GET['del'])){
//    $cs->setId($_GET['del']);
//    $cs->delete();
//    
//    $sm->assign("done", true);
//}

$sm->assign('emplist', $ce->select());
$sm->assign('funclist', $cf->select());
$sm->assign('funcemprlist', $cfe->select());
$sm->assign('clientelist', $c->select());

$v = $_GET['valor'];
if ($v == "") {
    $v = 0;
} else {
    $v = 1;
}
$sm->assign("valor", $v);

$cs->setId($_GET['edit']);
$cs->load();

if ($v == 0) {

    if (isset($_POST['selCodFuncAnot'], $_POST['selCodEmpr'], $_POST['selCodFuncEmpr'], $_POST['servASerFeito'], 
              $_POST['selCodFuncReal'], $_POST['serv_realizado'], $_POST['dataSolicitacao'], $_POST['dataRealizacao'], 
              $_POST['hr_comeco'], $_POST['hr_termino'])) {
        if ($_POST['selCodFuncAnot'] != '' and $_POST['selCodEmpr'] != '' and $_POST['selCodFuncEmpr'] != ''
                and $_POST['servASerFeito'] != '' and $_POST['dataSolicitacao'] != '') {

            $cs->setId_func_anotou($_POST['selCodFuncAnot']);
            $cs->setId_empresa($_POST['selCodEmpr']);
            $cs->setId_func_empr($_POST['selCodFuncEmpr']);
            $cs->setId_cliente('NULL');
            $cs->setServ_solicitado($_POST['servASerFeito']);
            $cs->setId_func_realizou('NULL');
            $cs->setServ_realizado($_POST['serv_realizado']);
            $cs->setDataSolic($_POST['dataSolicitacao']);
            $cs->setDataReal($_POST['dataRealizacao']);
            $cs->setHr_comeco($_POST['hr_comeco']);
            $cs->setHr_termino($_POST['hr_termino']);
            $cs->update();

            $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
} else if ($v == 1) {
    if (isset($_POST['selCodFuncAnot'], $_POST['selCodCliente'], $_POST['servASerFeito'], $_POST['selCodFuncReal'], 
              $_POST['serv_realizado'], $_POST['dataSolicitacao'], $_POST['dataRealizacao'], $_POST['hr_comeco'], 
              $_POST['hr_termino'])) {
        if ($_POST['selCodFuncAnot'] != '' and $_POST['selCodCliente'] != '' and $_POST['servASerFeito'] != '' 
            and $_POST['dataSolicitacao'] != '') {

        $cs->setId_func_anotou($_POST['selCodFuncAnot']);
        $cs->setId_empresa('NULL');
        $cs->setId_func_empr('NULL');
        $cs->setId_cliente($_POST['selCodCliente']);
        $cs->setServ_solicitado($_POST['servASerFeito']);
        $cs->setId_func_realizou('NULL');
        $cs->setServ_realizado($_POST['serv_realizado']);
        $cs->setDataSolic($_POST['dataSolicitacao']);
        $cs->setDataReal($_POST['dataRealizacao']);
        $cs->setHr_comeco($_POST['hr_comeco']);
        $cs->setHr_termino($_POST['hr_termino']);
        $cs->update();

        $sm->assign("done", true);
        }//fim do preenchido ok
    }//fim do esta setado os campos
}



$dados = array('selCodFuncAnot' => $cs->getId_func_anotou(),
    'selCodCliente' => $cs->getId_cliente(),
    'selCodEmpr' => $cs->getId_empresa(),
    'selCodFuncEmpr' => $cs->getId_func_empr(),
    'servASerFeito' => $cs->getServ_solicitado(),
    'dataSolicitacao' => $cs->getDt_solicitacao(),
    'selCodFuncReal' => $cs->getId_func_realizou(),
    'serv_realizado' => $cs->getServ_realizado(),
    'dataRealizacao' => $cs->getDt_realizacao(),
    'hr_comeco' => $cs->getHr_comeco(),
    'hr_termino' => $cs->getHr_termino());

$sm->assign('e', $dados);

$sm->display("editServico.tpl");
?>
