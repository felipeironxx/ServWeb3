{include file="view/inicio.tpl"}

<h2>Listagem de Cliente</h2>

<hr/>

<br><form name="fmrCadCliente">

    <input type="button" value="Novo Cliente" onclick="win('cadCliente.php',640,360)">

</form>

<table border ="1">
    <tr>
        <td>Codigo</td>  
        <td>Nome</td>
        <td>CPF</td> 
        <td>Carteira de Identidade</td>
        <td>Telefone</td> 
        <td>Ações</td>        
    </tr>
    {foreach from=$lista item=row}
    <tr>
        <td>{$row.id} </td> 
        <td>{$row.nome_cliente} </td>
        <td>{$row.cpf} </td>
        <td>{$row.rg} </td>
        <td>{$row.telefone} </td>
        <td><a href="#" onclick="win('editCliente.php?edit={$row.id}',640,360)">Edit</a> | 
            <a href="?del={$row.id}">Del</a> </td>
    </tr>
    {/foreach}
</table>

{include file="view/fim.tpl"}
