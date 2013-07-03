{include file="view/inicio_edit.tpl"}

<div id="formalirio1">
    <h3>Cadastro do Serviço</h3>

    <form name="cadServico" id="cadServico" method="post" onsubmit="return validarEnvio(this);">
        
        <!Pessoa Fisica<input type="radio" name="p">
        <!Pessoa Juridica<input type="radio" name="p"><!<hr/>
        
        Funcionario que anotou o serviço: <select name="selCodFunc">
            <option value="0">Escolha uma opção</option>
            {foreach from=$funclist item=r}
            <option value="{$r.codigo_funcionario}">{$r.nome_funcionario}</option>
            {/foreach}
        </select><br>

        Empresa que solicitou o serviço: <select name="selCodEmpr">
            <option value="0">Escolha uma opção</option>
            {foreach from=$emplist item=r}
            <option value="{$r.codigo_empresa}">{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        Funcionario solicitante: <select name="selCodFuncEmpr">
            <option value="0">Escolha uma opção</option>
            {foreach from=$funcemprlist item=r}
            <option value="{$r.codigo_func_empr}">{$r.nome_func_empr}</option>
            {/foreach}
        </select><br>
        
        Serviço a ser feito: <br><textarea name="servASerFeito" id="servASerFeito" rows="5" cols="70" ></textarea><br>

        Data da solicitação do serviço: <input type="text" name="dataSolicitacao" id="dataSolicitacao"><br>

        <input type="submit" value="Cadastrar"/>
</div>


{include file="view/fim_edit.tpl"}
