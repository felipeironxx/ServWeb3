{include file="view/inicio_edit.tpl"}

<div id="formEditCliente">
    <h3>Edição de Cliente</h3>

    <form name="editCliente" id="editCliente" method="post" onsubmit="return validarEnvio(this);">

        Nome do Cliente:              <input type="text" name="nCliente" id="nCliente" size="40" value="{$e.nCliente}"><br>
        CPF:                          <input type="text" name="cpf" id="cpf" size="16" value="{$e.cpf}">
        RG:                           <input type="text" name="rg" id="rg" size="18" value="{$e.rg}"><br>
        Rua:                          <input type="text" name="ruaC" id="ruaC" size="40" value="{$e.ruaC}">
        Numero:                       <input type="text" name="numC" id="numC" size="10" value="{$e.numC}"><br>
        Bairro:                       <input type="text" name="bairroC" id="bairroC" size="40" value="{$e.bairroC}"><br>
        Cidade:                       <input type="text" name="cidadeC" id="cidadeC" size="40" value="{$e.cidadeC}"><br>
        Telefone:                     <input type="text" name="telC" id="telC" size="13" value="{$e.telC}"><br>
        
        <input type="submit" value="Salvar"/>
    </form>
</div>

{include file="view/fim_edit.tpl"}