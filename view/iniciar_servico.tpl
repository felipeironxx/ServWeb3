{include file="view/inicio_edit.tpl"}

<div id="iniciarServ">
    
    <form name="formIniServ" id="formIniServ" method="post" onsubmit="return validarEnvio(this);">

        Funcionario q irá realizar o serviço: <select name="selCodFuncReal">
            {foreach from=$funclist item=r}
                <option value="{$r.id}">{$r.nome_funcionario}</option>
            {/foreach}
        </select><br>

        Data e Hora do inicio: <input type="text" name="dt_hr_comeco" id="dt_hr_comeco" size="20"><br>


        <input type="submit" value="Iniciar"/>
    </form>
</div>


{include file="view/fim_edit.tpl"}