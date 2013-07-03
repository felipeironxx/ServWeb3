{include file="view/inicio_edit.tpl"}

<div id="formCadFunc">
    <h3>Cadastro de Funcionario</h3>

    <form name="cadFuncionario" id="cadFuncionario" method="post" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" size="40"><br>
        Celular: <input type="text" name="nCelular_func" id="nCelular_func" size="40" onkeypress="formataTel(document.cadFuncionario.nCelular_func);"><br>

        <input type="submit" value="Cadastrar"/>
        <!--<input type="button" onclick="window.location.href='listFuncionario.php'" value="Cancelar"><br>-->
    </form>
</div>


{include file="view/fim_edit.tpl"}
