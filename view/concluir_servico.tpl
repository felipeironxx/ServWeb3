{include file="view/inicio_edit.tpl"}

<div id="ConcluirServ">
    
    <form name="formConcServ" id="formConcServ" method="post" onsubmit="return validarEnvio(this);">

        Serviço reazlizado: <textarea name="serv_realizado" id="serv_realizado" rows="5" cols="70" ></textarea><br>
        Data e Hora da realização: <input type="text" name="dt_hr_realizacao" id="dt_hr_realizacao" size="20"><br>


        <input type="submit" value="Conluir"/>
    </form>
</div>


{include file="view/fim_edit.tpl"}