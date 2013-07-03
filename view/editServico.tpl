{include file="view/inicio_edit.tpl"}

    <h3>Edição do Serviço</h3>

    <form name="editServico" id="editServico" method="post" onsubmit="return validarEnvio(this);">
                
        Funcionario que anotou o serviço: <select name="selCodFunc">
            {foreach from=$funclist item=r}
            <option value="{$r.codigo_funcionario}" {if $r.codigo_funcionario == $e.selCodFunc} selected="selected" {/if}>{$r.nome_funcionario}</option>
            {/foreach}
        </select><br>

        Empresa que solicitou o serviço: <select name="selCodEmpr">
            {foreach from=$emplist item=r}
            <option value="{$r.codigo_empresa}" {if $r.codigo_empresa == $e.selCodEmpr} selected="selected" {/if}>{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr">
            {foreach from=$funcemprlist item=r}
            <option value="{$r.codigo_func_empr}" {if $r.codigo_func_empr == $e.selCodFuncEmpr} selected="selected" {/if}>{$r.nome_func_empr}</option>
            {/foreach}
        </select><br>
        
        Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="32" >{$e.servASerFeito}</textarea><br>

        Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao" value="{$e.dataSolicitacao}"><br>
        
        Data da realização do serviço: <input type="text" name="dataRealizacao" id="dataRealizacao" value="{$e.dataRealizacao}"><br>

        <input type="submit" value="Salvar"/>
    </form>

{include file="view/fim_edit.tpl"}
