{include file="view/inicio_edit.tpl"}

<div id="formCadFunc">
    <h3>Cadastro de Funcionario</h3>

    <form name="cadFuncionario" id="cadFuncionario" method="post" onsubmit="return validarEnvio(this);">

        Nome do Funcionario: <input type="text" name="nFuncionario" id="nFuncionario" size="40"><br>
        Celular: <input type="text" name="celular_func" id="nCelular_func" size="15" onkeypress="formataTel(document.cadFuncionario.celular_func);"><br>
        E-mail: <input type="text" name="emailF" id="emailF" size="40"><br>

        <input type="submit" value="Cadastrar"/>
        
    </form>
</div>


{include file="view/fim_edit.tpl"}
