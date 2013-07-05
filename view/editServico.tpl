{include file="view/inicio_edit.tpl"}

<h3>Edição do Serviço</h3>

<form name="editServico" id="editServico" method="post" onsubmit="return validarEnvio(this);">

    Funcionario que anotou o serviço: <select name="selCodFuncAnot">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncAnot} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    {if $e.selCodCliente == ''}
        Empresa que solicitou o serviço: <select name="selCodEmpr">
            {foreach from=$emplist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodEmpr} selected="selected" {/if}>{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr">
            {foreach from=$funcemprlist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodFuncEmpr} selected="selected" {/if}>{$r.nome_func_empr}</option>
            {/foreach}
        </select><br>

    {else}
        Cliente solicitante: <select name="selCodCliente">
            {foreach from=$clientelist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodCliente} selected="selected" {/if}>{$r.nome_cliente}</option>
            {/foreach}
        </select><br>
    {/if}

    Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32">{$e.servASerFeito}</textarea><br>

    Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" value="{$e.dataSolicitacao}"><br>

    Funcionario que realizou o serviço: <select name="selCodFuncReal">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncReal} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    Data e hora do inicio do serviço: <input type="text" name="dt_hr_comeco" id="dt_hr_comeco" value="{$e.dt_hr_comeco}"><br>

    Serviço Realizado: <br><textarea name="serv_realizado" id="serv_realizado" rows="5" cols="32">{$e.serv_realizado}</textarea><br>

    Data e hora do termino do serviço: <input type="text" name="dt_hr_realizacao" id="dt_hr_realizacao" value="{$e.dt_hr_realizacao}"><br>

    
    <input type="button" onclick="habilitar_edit_serv({$valor});" value="Editar"/>
    <input type="submit" value="Salvar"/>
</form>

{include file="view/fim_edit.tpl"}
