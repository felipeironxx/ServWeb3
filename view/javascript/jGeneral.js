function formataTel(campo){
    var tel = campo.value;
    var tam = tel.length;
    if(tam < 1){
        campo.value = tel + "(";
    }
    else if(tam==3){
        campo.value = tel + ")";
    }else if(tam == 8){
        campo.value = tel + "-";
    }
}


//function validarEnvio(form){
//    var exp_nome = /^[a-zA-Z\xC0-\xFF ]+$/;
//    var exp_cpf = /^\d{3}\.\d{3}\.\d{3}\-\d{2}$/;
//    var exp_tel = /^\(\d{2}\)\d{4}\-\d{4}$/;
//       
//    var ok = true;
//    
//    if (exp_nome.test(cadFuncionario.nFuncionario.value) == false){
//        alert("Você precisar informa o Nome.");
//        document.cadFuncionario.nFuncionario.focus();
//        ok = false;
//    }else if(document.cadCliente.senha.value == false){
//        alert("Você precisa informa a Senha.");
//        document.cadCliente.senha.focus();
//        ok = false;
//    }else if(exp_cpf.test(cadCliente.cpf.value) == false){
//        alert("Você precisa infroma o seu CPF");
//        document.cadCliente.cpf.focus();
//        ok = false;
//    }else if(exp_tel(cadFuncionario.nCelular_func.value) == false){
//        alert("Você precisa infroma o seu Telefone");
//        document.cadFuncionario.nCelular_func.focus();
//        ok = false;
//    }
//    return ok;
//}


function deal(obj){
    if(obj == "pf"){
        document.getElementById('fis').style.display ='block';
        document.getElementById('jur').style.display ='none';
    }else if(obj == "pj"){
        document.getElementById('jur').style.display ='block';
        document.getElementById('fis').style.display ='none';
    }
}


function habilitar_edit_serv(valor){
    
    if(valor == 1){
        
        document.editServico.selCodFuncAnot.disabled = false;
        document.editServico.selCodEmpr.disabled = false;
        document.editServico.selCodFuncEmpr.disabled = false;
        document.editServico.servASerFeito.disabled = false;
        document.editServico.dataSolicitacao.disabled = false;
        document.editServico.dataRealizacao.disabled = false;
        document.editServico.selCodFuncReal.disabled = false;
        document.editServico.serv_realizado.disabled = false;
        document.editServico.hr_comeco.disabled = false;
        document.editServico.hr_termino.disabled = false;
       
    }else if(valor == 0){
        
        document.editServico.selCodFuncAnot.disabled = false;
        document.editServico.selCodCliente.disabled = false;
        document.editServico.servASerFeito.disabled = false;
        document.editServico.dataSolicitacao.disabled = false;
        document.editServico.dataRealizacao.disabled = false;
        document.editServico.selCodFuncReal.disabled = false;
        document.editServico.serv_realizado.disabled = false;
        document.editServico.hr_comeco.disabled = false;
        document.editServico.hr_termino.disabled = false;
    }
}