<?php
require_once 'sm.php';
require_once 'pagina_restrita.php';
require_once 'core/Cliente.php';

$c = new Cliente();

// faz o cadastro
if(isset($_POST['nCliente']) and isset($_POST['cpf']) and isset($_POST['ie']) and isset($_POST['nAplicativo']) and
   isset($_POST['serial_ap']) and isset($_POST['ruaE']) and isset($_POST['bairroE']) and isset($_POST['numE']) and
   isset($_POST['cidadeE']) and isset($_POST['telE']) and isset($_POST['contador']) and isset($_POST['tel_contador']) and
   isset($_POST['emailE']) and !isset($_GET['edit'])){
        
        $c->setNome($_POST['nEmpresa']);
        $c->setCpf($_POST['cnpj']);
        $c->setRg($_POST['ie']);
        $c->setRua($_POST['ruaE']);
        $c->setBairro($_POST['bairroE']);
        $c->setNumero($_POST['numE']);
        $c->setCidade($_POST['cidadeE']);
        $c->setTelefone($_POST['telE']);
        $c->insert();
        
        $sm->assign("done", true);
}

$sm->display("cadCliente.tpl")
?>
