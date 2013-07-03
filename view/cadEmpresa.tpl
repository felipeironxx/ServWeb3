{include file="view/inicio_edit.tpl"}

<div id="formCadEmpr">
    <h3>Cadastro de Empresa</h3>

    <form name="cadEmpresa" id="cadEmpresa" method="post" onsubmit="return validarEnvio(this);">

        Nome do Empresa:              <input type="text" name="nEmpresa" id="nEmpresa" size="40"><br>
        CNPJ:                         <input type="text" name="cnpj" id="cnpj" size="16">
        Inscriçao Estadual:           <input type="text" name="ie" id="ie" size="18"><br>
        Nome do Aplicativo PAF-ECF:   <input type="text" name="nAplicativo" id="nAplicativo" size="40"><br>
        Serial do Aplicativo PAF-ECF: <input type="text" name="serial_ap" id="serial_ap" size="40"><br>
        Rua:                          <input type="text" name="ruaE" id="ruaE" size="40">
        Numero:                       <input type="text" name="numE" id="numE" size="10"><br>
        Bairro:                       <input type="text" name="bairroE" id="bairroE" size="40"><br>
        Cidade:                       <input type="text" name="cidadeE" id="cidadeE" size="40"><br>
        Telefone:                     <input type="text" name="telE" id="telE" size="13">
        E-mail:                       <input type="text" name="emailE" id="emailE" size="40"><br>
        Contador:                     <input type="text" name="contador" id="contador" size="20">
        Telefone do Contador:         <input type="text" name="tel_contador" id="tel_contador" size="13"><br>
        

        <input type="submit" value="Cadastrar"/>
    </form>
</div>

{include file="view/fim_edit.tpl"}
