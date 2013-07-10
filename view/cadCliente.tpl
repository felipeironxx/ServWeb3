{include file="view/inicio_edit.tpl"}

<div id="formCadCliente">
    <h3>Cadastro de Cliente</h3>

    <form name="cadCliente" id="cadCliente" method="post" onsubmit="return validarEnvio(this);">

        Nome do Cliente:              <input type="text" name="nCliente" id="nCliente" size="40"><br>
        CPF:                          <input type="text" name="cpf" id="cpf" size="16">
        RG:                           <input type="text" name="rg" id="rg" size="18"><br>
        Rua:                          <input type="text" name="ruaC" id="ruaC" size="40">
        Numero:                       <input type="text" name="numC" id="numC" size="10"><br>
        Bairro:                       <input type="text" name="bairroC" id="bairroC" size="40"><br>
        Cidade:                       <input type="text" name="cidadeC" id="cidadeC" size="40"><br>
        Telefone:                     <input type="text" name="telC" id="telC" size="13"><br>
        
        <input type="submit" value="Cadastrar"/>
    </form>
</div>

{include file="view/fim_edit.tpl"}