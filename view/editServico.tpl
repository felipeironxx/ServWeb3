{include file="view/inicio_edit.tpl"}

<h3>Edição do Serviço</h3>

<form name="editServico" id="editServico" method="post" onsubmit="return validarEnvio(this);">

    Funcionario que anotou o serviço: <select name="selCodFuncAnot" disabled="disabled">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncAnot} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    {if $e.selCodCliente == ''}
        Empresa que solicitou o serviço: <select name="selCodEmpr" disabled="disabled">
            {foreach from=$emplist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodEmpr} selected="selected" {/if}>{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr" disabled="disabled">
            {foreach from=$funcemprlist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodFuncEmpr} selected="selected" {/if}>{$r.nome_func_empr}</option>
            {/foreach}
        </select><br>
    {/if}

    {if $e.selCodEmpr ==''}
        Cliente solicitante: <select name="selCodCliente" disabled="disabled">
            {foreach from=$clientelist item=r}
                <option value="{$r.id}" {if $r.id == $e.selCodCliente} selected="selected" {/if}>{$r.nome_cliente}</option>
            {/foreach}
        </select><br>
    {/if}

    Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32" disabled="disabled">{$e.servASerFeito}</textarea><br>

    Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" disabled="disabled" value="{$e.dataSolicitacao}"><br>

    Funcionario que realizou o serviço: <select name="selCodFuncReal" disabled="disabled">
        {foreach from=$funclist item=r}
            <option value="{$r.id}" {if $r.id == $e.selCodFuncReal} selected="selected" {/if}>{$r.nome_funcionario}</option>
        {/foreach}
    </select><br>

    Hora do inicio do serviço: <input type="time" name="hr_comeco" id="hr_comeco" disabled="disabled" value="{$e.hr_comeco}"><br>

    Serviço Realizado: <br><textarea name="serv_realizado" id="serv_realizado" rows="5" cols="32" disabled="disabled">{$e.serv_realizado}</textarea><br>

    Hora do termino do serviço: <input type="time" name="hr_termino" id="hr_termino" disabled="disabled" value="{$e.hr_termino}"><br>

    Data da realização do serviço: <input type="text" name="dataRealizacao" id="dataRealizacao" disabled="disabled" value="{$e.dataRealizacao}"><br>


    <input type="button" onclick="habilitar();" value="Editar"/>
    <input type="submit" value="Salvar"/>
</form>

{include file="view/fim_edit.tpl"}
