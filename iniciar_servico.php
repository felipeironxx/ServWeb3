<?php

require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Servico.php';

$cs = new Servico();


//$v = $_GET['valor'];
//if ($v == "") {
//    $v = 0;
//} else {
//    $v = 1;
//}
//$sm->assign("valor", $v);

$cs->setId($_GET['iniciar']);

if (isset($_POST['func_realizou'], $_POST['dt_hr_comeco'])) {
    if ($_POST['func_realizou'] != '' and $_POST['dt_hr_comeco'] != '') {

        $cs->setId_func_realizou('func_realizou');
        $cs->setDtHr_comeco($_POST['dt_hr_comeco']);
        $cs->update();

        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos

$sm->display("iniciar_servico.tpl");
?>
