{include file="view/inicio_edit.tpl"}

    <h3>Ediçao dos Funcionarios</h3>

    <form name="editFuncionario" id="editFuncionario" method="post" enctype="multipart/form-data" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" value="{$e.nFuncionario}" size="40"><br>
        Celular: <input type="text" name="nCelular_func" id="nCelular_func" value="{$e.nCelular_func}" size="40" onkeypress="formataTel(document.editFuncionario.nCelular_func);"><br>

        <input type="submit" value="Salvar"/>
    </form>


{include file="view/fim_edit.tpl"}