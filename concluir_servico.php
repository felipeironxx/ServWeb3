<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$cs = new Servico();

$cs->setId($_GET['concluir']);
$cs->load();

if ($cs->getConluido() == 'S') {
    
    $cs->setId_cliente('NULL');
    $cs->setServ_realizado($_POST['']);
    $cs->setDtHr_realizacao($_POST['']);
    $cs->setConluido('N');
    $cs->update();
    
    $sm->assign("done", true);
    
} else {

    $v = $cs->getId_cliente();
    if ($v == "") {
        $v = 0;
    } else {
        $v = 1;
    }

    if ($v == 0) {

        if (isset($_POST['serv_realizado'], $_POST['dt_hr_realizacao'])) {
            if ($_POST['serv_realizado'] != '' and $_POST['dt_hr_realizacao'] != '') {

                $cs->setId_cliente('NULL');
                $cs->setServ_realizado($_POST['serv_realizado']);
                $cs->setDtHr_realizacao($_POST['dt_hr_realizacao']);
                $cs->setConluido('S');
                $cs->update();

                $sm->assign("done", true);
            }//fim do preenchido ok
        }//fim do esta setado os campos
    } else {
        if (isset($_POST['serv_realizado'], $_POST['dt_hr_realizacao'])) {
            if ($_POST['serv_realizado'] != '' and $_POST['dt_hr_realizacao'] != '') {

                $cs->setId_empresa('NULL');
                $cs->setId_func_empr('NULL');
                $cs->setServ_realizado($_POST['serv_realizado']);
                $cs->setDtHr_realizacao($_POST['dt_hr_realizacao']);
                $cs->setConluido('S');
                $cs->update();

                $sm->assign("done", true);
            }//fim do preenchido ok
        }//fim do esta setado os campos
    }
}
$sm->display("concluir_servico.tpl");
?>
