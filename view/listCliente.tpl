{include file="view/inicio.tpl"}

<table border ="1">
    <tr>
        <td>Codigo do Cliente</td>  
        <td>Nome do Cliente</td> 
        <td>Ações</td>        
    </tr>
    {foreach from=$lista item=row}
    <tr>
        <td>{$row.id} </td> 
        <td>{$row.nome} </td>
        <td>Edit | <a href="?del={$row.id}">Del</a> </td>
    </tr>
    {/foreach}
</table>

{include file="view/fim.tpl"}
