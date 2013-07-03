{include file="view/inicio_edit.tpl"}

<div id="formCadFuncEmpr">
    <h3>Cadastro de Funcionario das Empresas</h3>

    <form name="cadFuncEmpr" id="cadFuncEmpr" method="post" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" size="40"><br>

        Empresa que o funcionario trabalha: <select name="selEmprFunc">
            {foreach from=$list item=r}
            <option value="{$r.id}">{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        <input type="submit" value="Cadastrar"/>
    </form>
</div>


{include file="view/fim_edit.tpl"}
