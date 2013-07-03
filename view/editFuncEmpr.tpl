{include file="view/inicio_edit.tpl"}

    <h3>Edição do Funcionarios das Empresas</h3>

    <form name="editFuncEmpr" id="editFuncEmpr" method="post" enctype="multipart/form-data" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncEmpr" id="nFuncEmpr" value="{$e.nFuncEmpr}" size="40"><br>

        Empresa que o funcionario trabalha: <select name="selEmprFunc">
            {foreach from=$list item=r}
            <option value="{$r.id}" {if $r.id == $e.selEmprFunc} selected="selected" {/if}>{$r.nome_empresa}</option>
            {/foreach}
        </select><br>

        <input type="submit" value="Salvar"/>
    </form>


{include file="view/fim_edit.tpl"}
